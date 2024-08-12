<?php
include '../config.php';
if (empty($_POST['submit'])) {
	$submit = $_REQUEST['submit'];
} else {
	$submit = $_POST['submit'];
}
switch ($submit) {

	case 'register':
		$name = mysqli_real_escape_string($db, $_POST['name']);
		$description = mysqli_real_escape_string($db, $_POST['description']);
		$pc_id = mysqli_real_escape_string($db, $_POST['pc_id']);
		$db->query("INSERT INTO `product_subcategory` (`psc_id`,`pc_id`,`psc_name`,`psc_description`) VALUES (NULL,'$pc_id','$name','$description')");

		$psc_id  = $db->insert_id;

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

				$db->query("UPDATE `product_subcategory` SET psc_image = '$new_image' WHERE psc_id  = '$psc_id '");
			} else {
				echo 'Faild For Mismatch';
			}
		} else {
			echo 'Failed for not Found image';
		}
		header("Location:../subcategory.php?success");
		break;

	case 'delete':
		$psc_id  = mysqli_real_escape_string($db, $_REQUEST['psc_id']);
		$data = $db->query("SELECT * FROM `product_subcategory` WHERE psc_id  = '$psc_id'");
		$value = $data->fetch_object();
		if (!empty($value->psc_image)) {
			$path = '../uploads/' . $value->psc_image;
			unlink($path);
		}
		
		$db->query("DELETE FROM `product_subcategory` WHERE psc_id  = '$psc_id'");
		header("Location:../subcategory.php?delete");
		break;

	case 'update':

		$psc_id  = mysqli_real_escape_string($db, $_POST['psc_id ']);
		$name = mysqli_real_escape_string($db, $_POST['name']);
		$description = mysqli_real_escape_string($db, $_POST['description']);

		$db->query("UPDATE `product_subcategory` SET psc_name = '$name', psc_description = '$description' WHERE psc_id  = '$psc_id '");


		if (!empty($_FILES['upld_image']['name'])) {

			$old_img = $_FILES['upld_image']['name'];
			$devid = explode('.', $old_img);
			$current_name = current($devid);
			$extension = end($devid);
			$allow = ['jpg', 'png', 'jpeg', 'svg', 'webp'];

			if (in_array($extension, $allow)) {

				$data = $db->query("SELECT * FROM `product_subcategory` WHERE psc_id  = '$psc_id '");
				$value = $data->fetch_object();
				if (!empty($value->psc_image)) {
					$path = '../uploads/' . $value->psc_image;
					unlink($path);
				}

				$rand = rand(111, 99999);
				$new_image = $current_name . '_' . $rand . '.' . $extension;
				$path = '../uploads/' . $new_image;
				$tmp_name = $_FILES['upld_image']['tmp_name'];
				move_uploaded_file($tmp_name, $path);

				$db->query("UPDATE `product_subcategory` SET psc_image = '$new_image' WHERE psc_id  = '$psc_id '");
			} else {
				echo 'Faild For Mismatch';
			}
		} else {
			echo 'Failed for not Found image';
		}

		header("Location:../subcategory.php?update");
		break;
	
	default:
		// code...
		break;
}