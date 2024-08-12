<?php
	include '../config.php';

	 if (!empty($_POST['submit'])) {
	 	$submit = mysqli_real_escape_string($db,$_POST['submit']);
	 }

	 switch ($submit) {
	 	case 'register':
	 		 
	 		$name = mysqli_real_escape_string($db, $_POST['name']);
	 		$mobile_no = mysqli_real_escape_string($db, $_POST['mobile_no']);
	 		$email_id = mysqli_real_escape_string($db, $_POST['email_id']);
	 		$dob = mysqli_real_escape_string($db, $_POST['dob']);
	 		$password = md5($_POST['password']);

	 		$db->query("INSERT INTO `admin` (`a_id`,`name`,`mobile_no`,`email_id`,`password`,`dob`) VALUES (NULL,'$name','$mobile_no','$email_id','$password','$dob')");

			$a_id = $db->insert_id;
			if (!empty($_FILES['profile_image']['tmp_name'])){
				$old_image = $_FILES['profile_image']['name'];
				// print_r($old_image);
				// die();
				$devid = explode('.', $old_image);
				$current_name = current($devid);
				$extension = end($devid);
				$allow = ['jpg','jpeg','svg','png'];
				if (in_array($extension, $allow)) {
					$rand = rand(111,9999);
					$new_image = $current_name.'_'.$rand.'.'.$extension;
					$path = '../uploads/'.$new_image;
					$tmp_name = $_FILES['profile_image']['tmp_name'];
					move_uploaded_file($tmp_name, $path);
					$db->query("UPDATE `admin` SET profile_image = '$new_image' WHERE a_id = '$a_id' ");
				}else{
					echo "File For Mismatch";
				}

			}else{
				// echo "File Not Found Image";
			}

			if ($a_id > 0) {
				echo '<script>alert("Date Inserted Successful"); window.location.replace("../index.php")</script>';
			}else{
				echo '<script>("'.$db->error.'");window.location.replace("../index.php")</script>';
			}
			// header("location:../index.php?success");
	 		break;
	 	
	 	default:
	 		// code...
	 		break;
	 }
?>