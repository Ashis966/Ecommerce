<?php
include '../config.php';

if (empty($_POST['submit'])) {
    $submit = $_REQUEST['submit'];
} else {
    $submit = $_POST['submit'];
}

switch ($submit) {
    case 'register':
        $pei_id = mysqli_real_escape_string($db, $_POST['pei_id']);
        $p_id = mysqli_real_escape_string($db, $_POST['p_id']);
        // $product_name = mysqli_real_escape_string($db, $_POST['product_name']);

        $db->query("INSERT INTO `product_extra_image` (`pei_id`,`p_id`) VALUES (NULL,'$p_id')");

        $pei_id = $db->insert_id;

        if (!empty($_FILES['upld_image']['name'])) {

            $old_img = $_FILES['upld_image']['name'];
            $devid = explode('.', $old_img);
            $current_name = current($devid);
            $extension = end($devid);
            $allow = ['jpg', 'png', 'jpeg', 'svg','webp'];

            if (in_array($extension, $allow)) {

                $rand = rand(111, 99999);
                $new_image = $current_name . '_' . $rand . '.' . $extension;
                $path = '../uploads/' . $new_image;
                $tmp_name = $_FILES['upld_image']['tmp_name'];
                move_uploaded_file($tmp_name, $path);

                $db->query("UPDATE `product_extra_image` SET image = '$new_image' WHERE pei_id = '$pei_id'");
            } else {
                echo 'Faild For Mismatch';
            }
        } else {
            echo 'Failed for not Found image';
        }
        header("Location:../extra_image.php?success");
        break;
    case 'update':

        $pei_id = mysqli_real_escape_string($db, $_POST['pei_id']);
        $p_id = mysqli_real_escape_string($db, $_POST['p_id']);
        $product_name = mysqli_real_escape_string($db, $_POST['product_name']);

        $db->query("UPDATE `product_extra_image` SET product_name = '$product_name', WHERE pei_id  = '$pei_id'");


        if (!empty($_FILES['upld_image']['name'])) {

            $old_img = $_FILES['upld_image']['name'];
            $devid = explode('.', $old_img);
            $current_name = current($devid);
            $extension = end($devid);
            $allow = ['jpg', 'png', 'jpeg', 'svg','webp'];

            if (in_array($extension, $allow)) {

                $data = $db->query("SELECT * FROM `product_extra_image` WHERE pei_id  = '$pei_id'");
                $value = $data->fetch_object();
                if (!empty($value->product_image)) {
                    $path = '../uploads/' . $value->product_image;
                    unlink($path);
                }

                $rand = rand(111, 99999);
                $new_image = $current_name . '_' . $rand . '.' . $extension;
                $path = '../uploads/' . $new_image;
                $tmp_name = $_FILES['upld_image']['tmp_name'];
                move_uploaded_file($tmp_name, $path);

                $db->query("UPDATE `product_extra_image` SET image = '$new_image' WHERE pei_id  = '$pei_id'");
            } else {
                echo 'Faild For Mismatch';
            }
        } else {
            echo 'Failed for not Found image';
        }

        header("Location:../extra_image.php?update");
        break;

    case 'delete':
        $pei_id = mysqli_real_escape_string($db, $_REQUEST['pei_id']);
        $data = $db->query("SELECT * FROM `product_extra_image` WHERE pei_id = '$pei_id'");
        $value = $data->fetch_object();
        if (!empty($value->image)) {
            $path = '../uploads/' . $value->image;
            unlink($path);
        }
        $db->query("DELETE FROM `product_extra_image` WHERE pei_id = '$pei_id'");
        header("Location:../extra_image.php?delete");
        break;

    default:
        // code...
        break;
}
?>