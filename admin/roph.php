<?php
  include 'config1.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sub-category</title>
    <link rel="stylesheet" href="css/style.css" >
    <script src="https://kit.fontawesome.com/cf71d67ca3.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- bootstrap 5 css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
    <!-- BOX ICONS CSS-->
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
  <style>
    body{
        background-color:#F5F5F5; 
    }
    .panel-primary{
        background-color:white;
        padding: 0px 10px;
        font-family:sans-serif;
        font-size:14px;
        padding-left: 10px;
          padding-right: 10px;
    }
    .panel-heading{
        background-color: #03a9f4;
        color: white;
        padding: 10px 20px;
    }
    .panel-title{
        font-size: 16px;
    }
    .panel-body{
        padding: 20px;
    }
    .form-grp{
        margin-bottom: 15px;
    }
    label{
        display: inline-block;
        max-width: 100%;
        margin-bottom: 5px;
        font-weight: 700;
    }
    .form-control{
        background-color: #fafafa;
        border-radius: 2px;
        border: 1px solid #eee;
        box-shadow: none;
        height: 38px;
        color: rgba(0, 0, 0, .6);
        font-size: 14px;
    }
    .chck-reset{
        box-sizing: content-box;
        border: 1px solid #d1d1d1;
        width: 100%;
        padding-bottom:350px;
    }
    .btn{
        border-radius: 2px;
        padding: 6px 14px;
    }
    /* .th_border{
        border: 1px solid #ddd;
        vertical-align: bottom;
        padding: 8px;
    } */

    /* tbody{
        color: #797979;
    } */
    .image-responsive{
        max-width: 100%;
        height: auto;
    }
    
    .data-table-info{
        padding-top: 8px;
    }
    .datatable-pagination{
        float: right;
    }
    /* ----- */
   .icon-subcatg{
    top: 8px;
    left: 4px;
    height: 16px;
    width: 16px;
    display: block;
    position: absolute;
    color: white;
    border: 2px solid white;
    border-radius: 16px;
    box-shadow: 0 0 3px #444;
    box-sizing: content-box;
    font-family: 'Courier New', Courier, monospace;
    text-indent: 4px;
    line-height: 16px;
    background-color: #337ab7;
   }
  </style>
</head>

<body>

    <div class="main">
        <!-- <div class="sideBar">
            <div class="logo_sm">
                <img src="image/logo_sm.png" alt="logo_sm">
            </div>
            <div>
                <i class="fa-solid fa-sitemap"></i>
            </div>
        </div> -->

        <div class="mainDash">
            <div id="sideMenu" class="side-menu">
                <div class="mobile-search">
                    <div class="nameLogo">
                        <img src="images/logo_white_2.png" alt="logo_name">
                    </div>
                </div>

                <div class="menu-items list-nav accordion">
                    <div class="mb-4">
                        <div class="dashbordLogo_1 d-flex justify-content-center">
                            <img src="images/yumcut.png" alt="dashbordLogo" class="logo-yumcut">
                        </div>

                        <div class="d-flex justify-content-center mt-1 mb-1 dropdown yumctHead">
                            <div href="#" class="nav-link myYumcut" data-bs-toggle="dropdown" role="button"
                                aria-expanded="false">YUMCUT</div>
                            <ul class="dropdown-menu ">
                                <li class="dropdown-item">
                                    <a href="#" class="yumcutLink">Profile</a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="#" class="yumcutLink">Setting</a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="#" class="yumcutLink">Lock Screen</a>
                                </li>
                                <li class="logOut"></li>
                                <li class="dropdown-item ">
                                    <a href="#" class="yumcutLink">Logout</a>
                                </li>
                            </ul>
                        </div>

                        <div class="d-flex justify-content-center gap-2 online">
                            <span><i class="fa-regular fa-circle-dot"></i></span>
                            <span>Online</span>
                        </div>
                    </div>

                    <ul class="list-group accordion" id="sideNavDropdown">
                        <li class="nav-item">
                            <a href="dashbord.html" class="nav-link d-flex gap-4 myNavcnt">
                                <span><i class="fa-solid fa-house"></i></span>
                                <span>Dashbord</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <div class="accordion-header" id="sectionOne" onclick="myFunction()" >
                                <div class="d-flex justify-content-between myNavcnt" data-bs-target="#collapseOne"
                                    data-bs-toggle="collapse">
                                    <span><i class="fa-solid fa-sitemap"></i></span>
                                    <span>Page Section</span>
                                    <span id="pls_mins"><i class="fa-solid fa-plus"></i></span>
                                </div>
                            </div>
                            <ul id="collapseOne" class="accordion-collapse collapse nav flex-column"
                                aria-labelledby="sectionOne" data-bs-parent="#sideNavDropdown">
                                <li class="nav-item droupdownCnt"><a class="nav-link" href="#">Add Dextop Banner</a>
                                </li>
                                <li class="nav-item droupdownCnt"><a class="nav-link" href="#">Add Mobile Banner</a>
                                </li>
                                <li class="nav-item droupdownCnt"><a class="nav-link" href="#">Add testimonials</a></li>
                                <li class="nav-item droupdownCnt"><a class="nav-link" href="#">Add location</a></li>
                                <li class="nav-item droupdownCnt"><a class="nav-link" href="#">Add Offer Banner</a></li>
                                <li class="nav-item droupdownCnt"><a class="nav-link" href="#">Add Video</a></li>
                            </ul>
                        </li>
                        <li class="nav-item ">
                            <div class="accordion-header" id="sectionOne">
                                <div class="d-flex justify-content-between myNavcnt" data-bs-target="#collapseTwo"
                                    data-bs-toggle="collapse">
                                    <span><i class="fa-solid fa-sitemap"></i></span>
                                    <span>Order Section</span>
                                    <span><i class="fa-solid fa-plus"></i></span>
                                </div>
                            </div>
                            <ul id="collapseTwo" class="accordion-collapse collapse nav flex-column"
                                aria-labelledby="sectionOne" data-bs-parent="#sideNavDropdown">
                                <li class="nav-item droupdownCnt"><a class="nav-link" href="#">View Order</a>
                                </li>
                                <li class="nav-item droupdownCnt"><a class="nav-link" href="#">View Complete Order</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <div class="accordion-header" id="sectionOne">
                                <div class="d-flex justify-content-between myNavcnt" data-bs-target="#collapseThree"
                                    data-bs-toggle="collapse">
                                    <span><i class="fa-solid fa-sitemap"></i></span>
                                    <span>Product Section</span>
                                    <span><i class="fa-solid fa-plus"></i></span>
                                </div>
                            </div>
                            <ul id="collapseThree" class="accordion-collapse collapse nav flex-column"
                                aria-labelledby="sectionOne" data-bs-parent="#sideNavDropdown">
                                <li class="nav-item droupdownCnt"><a class="nav-link" href="#">Add Promo Code</a></li>
                                <li class="nav-item droupdownCnt"><a class="nav-link" href="#">Add Category</a></li>
                                <li class="nav-item droupdownCnt"><a class="nav-link" href="#">Add Subcategory</a></li>
                                <li class="nav-item droupdownCnt"><a class="nav-link" href="#">Add Product</a></li>
                                <li class="nav-item droupdownCnt"><a class="nav-link" href="#">Add Product Extra Image</a></li>
                                <li class="nav-item droupdownCnt"><a class="nav-link" href="#">Add unit</a></li>
                                <li class="nav-item droupdownCnt"><a class="nav-link" href="#">Add Price</a></li>
                                <li class="nav-item droupdownCnt"><a class="nav-link" href="#">Add offer</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="content">
                <div class="thardTop d-flex justify-content-between align-items-center sticky-top pe-3">
                    <div class="d-flex">
                        <div class="nav-bar">
                            <div id="menuToggle" class="toggle-menu active">
                                <span class="bar"></span>
                                <span class="bar"></span>
                                <span class="bar"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control searchBar" placeholder="Search...">
                        </div>
                    </div>
                    <div class="list-nav">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="">
                                  <i class="fa-solid fa-bell myIcon"></i>
                                  <span class="position-absolute  start-100 translate-middle badge rounded-pill bg-danger badge-dashboard">0</span>
                                </a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href=""><i
                                        class="fa-solid fa-crosshairs myIcon"></i></a>
                            </li>
                            <li class="nav-item dropdown navLogo">
                                <a class="navbar-brand nav-link" data-bs-toggle="dropdown" role="button"
                                    aria-expanded="false" href="">
                                    <img src="images/yumcut.png" alt="dashbordLogo" class="logo-yumcut">
                                </a>
                                <ul class="dropdown-menu ">
                                    <li class="dropdown-item">
                                        <a href="#" class="yumcutLink">Profile</a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="#" class="yumcutLink">Setting</a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="#" class="yumcutLink">Lock Screen</a>
                                    </li>
                                    <li class="logOut"></li>
                                    <li class="dropdown-item ">
                                        <a href="#" class="yumcutLink">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="dashboard d-flex justify-content-between align-items-center pe-4">
                    <div class="h4 ">Add Subcategory</div>
                    <div class="dsbrdLite h6 das-board">
                        <a href="dashboard.php" class="text-decoration-none">Dashboard</a>
                        <span class="">/  Subcategory</span>
                    </div>
                </div>
                <section>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Add Subcategory</h3>
                                </div>
                                
                                <?php 
                                    if (!empty($_REQUEST['edit'])) {
                                        $edit_id = mysqli_real_escape_string($db,$_REQUEST['edit']);
                                        $edit = $db->query("SELECT * FROM product_subcategory WHERE psc_id = '$edit_id'");
                                        $edit_value = $edit->fetch_object();

                                        $subcategory_name = $edit_value->psc_name;
                                        $description = $edit_value->description;
                                        
                                    }else{
                                        $subcategory_name = '';
                                        $description = '';
                                    }
                                    ?>
                                <div class="panel-body">
                                    <form action="action-subcategory/account-subcategory.php" method="POST" enctype="multipart/form-data">
                                        <div class="form-grp">
                                            <label for="">Select Category</label><br>
                                           <select name="pc_id" id="" class="form-control form-select">
                                                <option value="">Select</option>
                                                <?php 
                                                    $c_data=$db->query("SELECT * FROM product_category");
                                                    while($c_value = $c_data->fetch_object()){
                                                ?>
                                                <option value='<?= $c_value->pc_id;?>'><?= $c_value->pc_name;?></option>
                                              <?php }?>
                                           </select>
                                        </div>
                                        <div class="form-grp">
                                            <label for="">Subcategrory Name</label><br>
                                            <input type="text" placeholder="Name" name="psc_name" class="form-control" value="<?=$subcategory_name;?>">
                                        </div>
                                        <div class="form-grp">
                                            <label for="formFile" class="form-label">Upload Image <span class="text-danger">1000 * 1000</span></label>
                                            <input class="form-control" type="file" id="formFile" id="image" name="psc_image" accept="image/*">
                                        </div>
                                        <div class="form-grp">
                                            <label for="" class="form-label">Description</label><br>
                                            <textarea  name="description"  id="description" class=" chck-reset" value=""><?=$description;?></textarea>
                                        </div>
                                        <div>
                                            <?php
                                                    if (!empty($_REQUEST['edit'])) {
                                                ?>
                                                <input type="hidden" name="$psc_id" value="<?=$_REQUEST['edit'];?>">
                                                <button type="submit" value="register" name="submit" value="update" class="btn btn-dark">Update</button>
                                                
                                                <?php
                                                }else{
                                                    ?>
                                                    <button type="submit" value="register" name="submit" value="register" class="btn btn-dark">Submit</button>
                                                    <?php
                                                }
                                                ?>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title">View Subcategory</h3>
                                </div>
                                <div class="panel-body" >
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div >
                                                <label for="">  
                                                    Show 
                                                    <select name="" id="" class="form-select form-control" aria-label="Default select example">
                                                        <option value="10">10</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                    </select>
                                                    entries
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div>
                                                <label for="">Search:
                                                    <input type="search" class="form-control">
                                                </label>
                                               
                                            </div>
                                            
                                        </div>
                                        <div>
                                            <div class="row">
                                                    <div class="col-md-12">
                                                        <table class="table table-bordered table-striped" style="width:100%">
                                                            <thead>
                                                                <tr >
                                                                    <th>
                                                                        Sl No
                                                                    </th>
                                                                    <th >
                                                                        Action
                                                                    </th>
                                                                    <th>
                                                                       Category Name
                                                                    </th>
                                                                    <th >
                                                                        Sub-category Name
                                                                    </th>
                                                                    <th >
                                                                        Image
                                                                    </th>
                                                                    <th >
                                                                        Description
                                                                    </th>
                                                                    <th >
                                                                        Status
                                                                    </th>
                                                                </tr>
                                                                <?php 
                                                                    $data = $db->query("SELECT *,product_category.pc_name AS c_name FROM product_subcategory LEFT JOIN product_category ON  product_subcategory.pc_id = product_category.pc_id");
                                                                    // num_rows   -  Use For Count Data from database 
                                                                    if ($data->num_rows == 0) {
                                                                        echo 'No Data Found';
                                                                    }else{
                                                                            $sl = 0;
                                                                        while($value = $data->fetch_object()){
                                                                            $sl++;
                                                               ?>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td><?=$sl;?></td>
                                                                    <td>
                                                                        <a href="action-subcategory/account-subcategory.php?submit=delete&psc_id=<?=$value->psc_id;?>" class="btn btn-danger">
                                                                        <i class="fa-solid fa-trash"></i> 
                                                                        </a>
                                                                        <a href="?edit=<?=$value->psc_id;?>" class="btn btn-success">
                                                                        <i class="fa-solid fa-pen"></i>
                                                                        </a>
                                                                    </td>   
                                                                    <td><?= $value->c_name;?></td>  
                                                                    <td><?=$value->psc_name;?></td>   
                                                                    <td>
                                                                        <?php 
                                                                            if (empty($value->psc_image)) {
                                                                                echo 'N/A';
                                                                            }else{
                                                                        ?>
                                                                            <img src="uploads/<?=$value->psc_image?>" class="image-responsive" height="100" width="100" alt="">

                                                                        <?php } ?>
                                                                    </td> 
                                                                     <td><?=$value->description;?></td>                                                       
                                                                </tr>
                                                                <?php } } ?>
                                                                
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="data-table-info">Showing 1 to 7 of 7 entries</div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="datatable-pagination">
                                                            <nav aria-label="...">
                                                                <ul class="pagination">
                                                                    <li class="page-item disabled">
                                                                    <a class="page-link">Previous</a>
                                                                    </li>
                                                                    <li class="page-item active" aria-current="page">
                                                                    <a class="page-link" href="#">1</a>
                                                                    </li>
                                                                    <li class="page-item">
                                                                    <a class="page-link  next disabled" href="#">Next</a>
                                                                    </li>
                                                                </ul>
                                                            </nav>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>

                
            </div>
        </div>

        
        <!-- <footer>
        <p>2020 - 2020 © Ifotechsys.</p>
        </footer> -->
    </div>




  
</body>
<script>
        const toggleMenu = document.getElementById("menuToggle");
        const sideMenu = document.getElementById("sideMenu");
        const content = document.querySelector(".content");
        const bars = document.querySelectorAll(".bar");
        const menuItems = document.querySelectorAll(".menu-items .item");

        toggleMenu.addEventListener("click", () => {
            sideMenu.classList.toggle("resize");
            content.classList.toggle("resize");
            toggleMenu.classList.toggle("active");

            bars.forEach((bar) => {
                bar.classList.add("anim-bar");
                setTimeout(() => {
                    bar.classList.remove("anim-bar");
                }, 1000);
            });
        });
        setTimeout(() => {
            sideMenu.classList.add("resize");
            content.classList.add("resize");
            toggleMenu.classList.add("active");
            bar.classList.add("anim-bar");
        }, 1000);

        menuItems.forEach(function (item) {
            item.addEventListener("click", function (event) {
                event.preventDefault(); // Prevent the default link behavior

                menuItems.forEach(function (item) {
                    item.classList.remove("active");
                });

                this.classList.add("active");
            });
        });

        function myFunction(){
            document.getElementById('pls_mins').innerHTML='<i class="fa-solid fa-minus"></i>';
        };

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/221cbd1801.js" crossorigin="anonymous"></script>

</html>