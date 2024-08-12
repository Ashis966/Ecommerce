<?php 
	include '../config.php';
 	if (empty($_POST['submit'])) {
		$submit = $_REQUEST['submit'];
	}else{
		$submit = $_POST['submit'] ;
	}
		switch ($submit) {

		case 'register':
		$name = mysqli_real_escape_string($db,$_POST['name']);
		$description = mysqli_real_escape_string($db,$_POST['description']);
		$db->query("INSERT INTO `catagory` (`c_id`,`name`,`description`) VALUES (NULL,'$name','$description')");

		$c_id = $db->insert_id;
	
		if (!empty($_FILES['upld_image']['name'])) {

			$old_img = $_FILES['upld_image']['name'];
			$devid = explode('.',$old_img);
			$current_name = current($devid);
			$extension = end($devid);
			$allow = ['jpg','png','jpeg','svg'];

			if (in_array($extension,$allow)) {

				$rand = rand(111,99999);
				$new_image = $current_name.'_'.$rand.'.'.$extension;
				$path = '../uploads/'.$new_image;
				$tmp_name = $_FILES['upld_image']['tmp_name'];
				move_uploaded_file($tmp_name, $path);

				$db->query("UPDATE `catagory` SET upld_image = '$new_image' WHERE c_id = '$c_id'");
			}else{
						echo 'Faild For Mismatch';
					}
		}else{
				echo 'Failed for not Found image';
			}
		header("Location:../main_catagory.php?success");
			break;

		case 'delete':
			$c_id = mysqli_real_escape_string($db, $_REQUEST['c_id']);
			$data = $db->query("SELECT * FROM `catagory` WHERE c_id = '$c_id'");
			$value = $data->fetch_object();
			if (!empty($value->upld_image)) {
				$path = '../uploads/'.$value->upld_image;
				 	unlink($path);
				}
				$db->query("DELETE FROM `catagory` WHERE c_id = '$c_id'");
				header("Location:../main_catagory.php?delete");
			break;

		case 'update':
			
			$c_id = mysqli_real_escape_string($db,$_POST['c_id']);
			$name = mysqli_real_escape_string($db,$_POST['name']);
			$description = mysqli_real_escape_string($db,$_POST['description']);
			
			$db->query("UPDATE `catagory` SET name = '$name', description = '$description' WHERE c_id = '$c_id'");
					header("Location:../main_catagory.php?update");
				break;	
	default:
		// code...
		break;
}
?>