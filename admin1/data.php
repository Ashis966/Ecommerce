<?php include 'config.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
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
                $data = $db->query("SELECT * FROM `admin` UNORDER BY a_id DESC");
                if ($value = $data->fetch_object()){
                    $sl++;
               
            ?>
            <tr>
                <td><?= $sl;?></td>
                <td>2</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <?php } ?>
    </table>    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>