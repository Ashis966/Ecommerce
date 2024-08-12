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
		$db->query("INSERT INTO `product_categorys` (`pc_id`,`pc_name`,`pc_description`) VALUES (NULL,'$name','$description')");

		$pc_id = $db->insert_id;

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

				$db->query("UPDATE `product_categorys` SET pc_image = '$new_image' WHERE pc_id = '$pc_id'");
			} else {
				echo 'Faild For Mismatch';
			}
		} else {
			echo 'Failed for not Found image';
		}
		header("Location:../catagory.php?success");
		break;

	case 'delete':
		$pc_id = mysqli_real_escape_string($db, $_REQUEST['pc_id']);
		$data = $db->query("SELECT * FROM `product_categorys` WHERE pc_id = '$pc_id'");
		$value = $data->fetch_object();
		if (!empty($value->pc_image)) {
			$path = '../uploads/' . $value->pc_image;
			unlink($path);
		}
		$db->query("DELETE FROM `product_categorys` WHERE pc_id = '$pc_id'");
		header("Location:../catagory.php?delete");
		break;

	case 'update':

		$pc_id = mysqli_real_escape_string($db, $_POST['pc_id']);
		$name = mysqli_real_escape_string($db, $_POST['name']);
		$description = mysqli_real_escape_string($db, $_POST['description']);

		$db->query("UPDATE `product_categorys` SET pc_name = '$name', pc_description = '$description' WHERE pc_id = '$pc_id'");


		if (!empty($_FILES['upld_image']['name'])) {

			$old_img = $_FILES['upld_image']['name'];
			$devid = explode('.', $old_img);
			$current_name = current($devid);
			$extension = end($devid);
			$allow = ['jpg', 'png', 'jpeg', 'svg','webp'];

			if (in_array($extension, $allow)) {

				$data = $db->query("SELECT * FROM `product_categorys` WHERE pc_id = '$pc_id'");
				$value = $data->fetch_object();
				if (!empty($value->pc_image)) {
					$path = '../uploads/' . $value->pc_image;
					unlink($path);
				}

				$rand = rand(111, 99999);
				$new_image = $current_name . '_' . $rand . '.' . $extension;
				$path = '../uploads/' . $new_image;
				$tmp_name = $_FILES['upld_image']['tmp_name'];
				move_uploaded_file($tmp_name, $path);

				$db->query("UPDATE `product_categorys` SET pc_image = '$new_image' WHERE pc_id = '$pc_id'");
			} else {
				echo 'Faild For Mismatch';
			}
		} else {
			echo 'Failed for not Found image';
		}

		header("Location:../catagory.php?update");
		break;
	
	default:
		// code...
		break;
}
