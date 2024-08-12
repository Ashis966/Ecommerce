<?php
include '../config.php';

if (empty($_POST['submit'])) {
	$submit = $_REQUEST['submit'];
} else {
	$submit = $_POST['submit'];
}

function slug($name) {
    $product_name = trim($name);
    $product_name = strtolower($product_name);
    return str_replace(' ', '-', $product_name);
}

switch ($submit) {
    case 'register':
        $pc_id = mysqli_real_escape_string($db, $_POST['pc_id']);
        $psc_id = mysqli_real_escape_string($db, $_POST['psc_id']);
        $product_name = mysqli_real_escape_string($db, $_POST['product_name']);
        $market_price = mysqli_real_escape_string($db, $_POST['market_price']);
        $seling_price = mysqli_real_escape_string($db, $_POST['seling_price']);
        $description = mysqli_real_escape_string($db, $_POST['description']);

        $slug = slug($product_name);

        $db->query("INSERT INTO `product` (`p_id`,`pc_id`,`psc_id`,`product_name`,`product_market_price`,`product_seling_price`,`product_long_description`,`slug`) VALUES (NULL,'$pc_id','$psc_id','$product_name','$market_price','$seling_price','$description','$slug')");

        $p_id = $db->insert_id;
        if (!empty($_FILES['product_image']['name'])) {

			$old_img = $_FILES['product_image']['name'];
			$devid = explode('.', $old_img);
			$current_name = current($devid);
			$extension = end($devid);
			$allow = ['jpg', 'png', 'jpeg', 'svg','webp'];

			if (in_array($extension, $allow)) {

				$rand = rand(111, 99999);
				$new_image = $current_name . '_' . $rand . '.' . $extension;
				$path = '../uploads/' . $new_image;
				$tmp_name = $_FILES['product_image']['tmp_name'];
				move_uploaded_file($tmp_name, $path);

				$db->query("UPDATE `product` SET product_image = '$new_image' WHERE p_id  = '$p_id '");
			} else {
				echo 'Faild For Mismatch';
			}
		} else {
			echo 'Failed for not Found image';
		}
        header("Location:../product.php?success");
        break;
    case 'update':

        $p_id = mysqli_real_escape_string($db, $_POST['p_id']);
        $psc_id = mysqli_real_escape_string($db, $_POST['psc_id']);
        $product_name = mysqli_real_escape_string($db, $_POST['product_name']);
        $market_price = mysqli_real_escape_string($db, $_POST['market_price']);
        $seling_price = mysqli_real_escape_string($db, $_POST['seling_price']);
        $description = mysqli_real_escape_string($db, $_POST['description']);
        $slug = slug($product_name);

        $db->query("UPDATE `product` SET product_name = '$product_name',product_market_price = '$market_price', product_seling_price = '$seling_price', product_long_description = '$description',slug = '$slug' WHERE p_id  = '$p_id'");


        if (!empty($_FILES['product_image']['name'])) {

            $old_img = $_FILES['product_image']['name'];
            $devid = explode('.', $old_img);
            $current_name = current($devid);
            $extension = end($devid);
            $allow = ['jpg', 'png', 'jpeg', 'svg','webp'];

            if (in_array($extension, $allow)) {

                $data = $db->query("SELECT * FROM `product` WHERE p_id  = '$p_id'");
                $value = $data->fetch_object();
                if (!empty($value->product_image)) {
                    $path = '../uploads/' . $value->product_image;
                    unlink($path);
                }

                $rand = rand(111, 99999);
                $new_image = $current_name . '_' . $rand . '.' . $extension;
                $path = '../uploads/' . $new_image;
                $tmp_name = $_FILES['product_image']['tmp_name'];
                move_uploaded_file($tmp_name, $path);

                $db->query("UPDATE `product` SET product_image = '$new_image' WHERE p_id  = '$p_id'");
            } else {
                echo 'Faild For Mismatch';
            }
        } else {
            echo 'Failed for not Found image';
        }

        header("Location:../product.php?update");
        break;

    case 'delete':
        $p_id = mysqli_real_escape_string($db, $_REQUEST['p_id']);
        $data = $db->query("SELECT * FROM `product` WHERE p_id = '$p_id'");
        $value = $data->fetch_object();
        if (!empty($value->p_image)) {
            $path = '../uploads/' . $value->p_image;
            unlink($path);
        }
        $db->query("DELETE FROM `product` WHERE p_id = '$p_id'");
        header("Location:../product.php?delete");
        break;

    default:
        // code...
        break;
}
