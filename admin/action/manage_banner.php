<?php
include '../config.php';

if (empty($_POST['submit'])) {
    $submit = $_REQUEST['submit'];
} else {
    $submit = $_POST['submit'];
}

switch ($submit) {
    case 'register':
        // $b_id = mysqli_real_escape_string($db, $_POST['b_id']);
        $title = mysqli_real_escape_string($db, $_POST['title']);


        $db->query("INSERT INTO `banner` (`b_id`,`title`) VALUES (NULL,'$title')");

        $b_id = $db->insert_id;
        if (!empty($_FILES['upld_image']['name'])) {

            $old_img = $_FILES['upld_image']['name'];
            $devid = explode('.', $old_img);
            $current_name = current($devid);
            $extension = end($devid);
            $allow = ['jpg', 'png', 'jpeg', 'svg','webp'];

            if (in_array($extension, $allow)) {
                $rand = rand(111, 9999);
                $new_image = $current_name . '_' . $rand . '.' . $extension;
                $path = '../uploads/'. $new_image;
                $tmp_name = $_FILES['upld_image']['tmp_name'];
                move_uploaded_file($tmp_name, $path);
                // print_r($new_image);
                // die();
                // echo "UPDATE `banner` SET image = '$new_image' WHERE b_id = '$b_id'";
                // die();
                $db->query("UPDATE `banner` SET image = '$new_image' WHERE b_id = '$b_id'");

                echo "UPDATE `banner` SET image = '$new_image' WHERE b_id = '$b_id'";
                die();
            } else {
                echo 'faild For Mismatch';
            }
        } else {
            echo 'Failed for not Found image';
        }
        header("Location:../dextop_banner.php?success");
        break;
        case 'delete':
            $b_id = mysqli_real_escape_string($db, $_REQUEST['b_id']);
            $data = $db->query("SELECT * FROM `banner` WHERE b_id = '$b_id'");
            $value = $data->fetch_object();
            if (!empty($value->image)) {
                $path = '../uploads/'. $value->image;
                unlink($path);
            }
            $db->query("DELETE FROM `banner` WHERE b_id = '$b_id'");
            header("Location:../dextop_banner.php?delete");
            break;
        case 'update':
            $b_id = mysqli_real_escape_string($db, $_POST['b_id']);
            $title = mysqli_real_escape_string($db, $_POST['title']);

            $db->query("UPDATE `banner` SET title = '$title' WHERE b_id = '$b_id'");
            
            if (!empty($_FILES['upld_image']['name'])) {
                $old_img = $_FILES['upld_image']['name'];
                $devid = explode('.', $old_img);
                $current_name = current($devid);
                $extension = end($devid);
                $allow = ['jpg', 'png', 'jpeg','svg','webp'];
                
                if (in_array($extension, $allow)) {
                    $rand = rand(111, 9999);
                    $new_image = $current_name. '_'. $rand. '.'. $extension;
                    $path = '../uploads/'. $new_image;
                    $tmp_name = $_FILES['upld_image']['tmp_name'];
                    move_uploaded_file($tmp_name, $path);

                    $db->query("UPDATE `banner` SET image = '$new_image' WHERE b_id = '$b_id'");
                } else {
                    echo 'faild For Mismatch';
                }
            } else {
                echo 'Failed for not Found image';
            }
            header("Location:../dextop_banner.php?success");
            break;
    default:
        // code...
        break;
}
?>
