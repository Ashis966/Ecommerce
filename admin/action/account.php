<?php
session_start();
include '../config.php';

if (empty($_POST['submit'])) {
	$submit = $_REQUEST['submit'];
} else {
	$submit = $_POST['submit'];
}

switch ($submit) {
	case 'login':

		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password = mysqli_real_escape_string($db, $_POST['password']);
		$pass = md5($password);
		
		// echo "SELECT * FROM `admin1` WHERE email_id = '$email' AND password = '$pass'";
		// die();
		$data = $db->query("SELECT * FROM `admin1` WHERE email_id = '$email' AND password = '$pass'");

		if ($data->num_rows > 0) {
			$value = $data->fetch_object();
			$a_id = $value->a_id;
			$email = $value->email_id;
			$mobile = $value->mobile_no;


			$_SESSION['a_id'] = $a_id;
			$_SESSION['email_id'] = $email;
			$_SESSION['mobile_no'] = $mobile;

			header("Location:../dashbord.php");
		} else {
			header(("Location:../login.php"));
		}
		break;
	case 'logout':
		print_r($_SESSION);
		unset($_SESSION['email_id']);
		session_destroy();
		header("Location:../index.php");
		break;

	default:
		// code...
		break;
}
