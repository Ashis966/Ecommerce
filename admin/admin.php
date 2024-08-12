<?php include 'config.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Registration Form</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .form-container {
      max-width: 500px;
      margin: 0 auto;
    }
    .form-container form {
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 10px;
      background-color: #f9f9f9;
    }
    .form-container form .form-group {
      margin-bottom: 20px;
    }
    .form-container form label {
      font-weight: bold;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3 form-container">
        <h2 class="text-center mb-4">User Registration</h2>
        <form action="action/account.php" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>
          <div class="form-group">
            <label for="mobile">Mobile No:</label>
            <input type="tel" class="form-control" id="mobile" name="mobile_no" required>
          </div>
          <div class="form-group">
            <label for="email">Email ID:</label>
            <input type="email" class="form-control" id="email" name="email_id" required>
          </div>
          <div class="form-group">
            <label for="dob">Date of Birth:</label>
            <input type="date" class="form-control" id="dob" name="dob" required>
          </div>
          <div class="form-group">
            <label for="profile-image">Profile Image:</label>
            <input type="file" class="form-control" id="profile-image" name="profile_image" accept="image/*" required>
          </div>
          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" required>
          </div>
          <button type="submit" name="submit" value="register" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
  

<div class="table-responsive m-5">
  <table class="table table-striped table-hover">
            <tr>
                <th>Sl No</th>
                <th>Name</th>
                <th>Mobile No</th>
                <th>Email Id</th>
                <th>Date of Barth</th>
                <th>Profile Image</th>
                <th>Date Of Create</th>
                <th>Action</th>
            </tr>
            <?php
                $sl = 0;
                $data = $db->query("SELECT * FROM `admin`");
                if ($data->num_rows == 0){
                  echo 'No Data Found';
                }else{
                  $sl = 0;
                  while($value = $data->fetch_object()){
                    $sl++;
                    // echo '<pre>';
                    // print_r($value);
                    // $name=$value->name;
                    // $mobile_no=$value->mobile_no;
                    $email_id=$value->email_id;
                    $dob=$value->dob;
                    $create_at=$value->create_at;
            ?>
            <tr>
              <td><?=$sl;?></td>
              <td><?=$value->name;?></td>
              <td><?=$value->mobile_no;?></td>
              <td><?=$email_id;?></td>
              <td><?=$dob;?></td>
              <td>
                <?php
                  if (empty($value->profile_image)) {
                    echo 'n/a';
                  }else{
                ?>
                <img src="uploads/<?=$value->profile_image?>" class="image-fluid" width="100" alt="Profile Photo">
              <?php } ?>
              </td>
              <td><?=$create_at;?></td>
              <td>
                <a href="" class="me-2"><i class="fa-solid fa-trash"></i></a>
                <a href=""><i class="fa-regular fa-pen-to-square"></i></a>
              </td>
            </tr>
          
            <?php } } ?>
    </table> 

</div>



  <!-- font awesome js -->
  <script src="https://kit.fontawesome.com/221cbd1801.js" crossorigin="anonymous"></script>
  <!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
