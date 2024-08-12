<?php include 'header.php';
include 'nav.php';
?>
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
            <li class="nav-item"><a class="nav-link" href=""><i class="fa-solid fa-bell myIcon"></i></a>
            </li>
            <li class="nav-item"><a class="nav-link" href=""><i class="fa-solid fa-crosshairs myIcon"></i></a>
            </li>
            <li class="nav-item dropdown navLogo">
               <a class="navbar-brand nav-link" data-bs-toggle="dropdown" role="button" aria-expanded="false" href="">
                  <img src="image/dashbordLogo.png" alt="dashbordLogo">
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
                     <a href="action/account.php?submit=logout" class="yumcutLink">Logout</a>
                  </li>
               </ul>
            </li>
         </ul>
      </div>
   </div>
   <div class="tab-content">
      <div class="tab-pane fade show active" id="dashbord">
         <div class="dashboard d-flex justify-content-between align-items-center pe-4">
            <div class="h4">Add Subcatagory</div>
            <div class="dsbrdLite h6">Dashboard / Subcatagory</div>
         </div>
         <section class="p-3 pt-4">
            <div class="row">
               <div class="col-md-4">
                  <div class="panel-primary">
                     <div class="panel-heading">
                        <h3 class="panel-title">Add Subcategory</h3>
                     </div>
                     <?php
                     if (!empty($_REQUEST['edit'])) {
                        $edit_id = mysqli_real_escape_string($db, $_REQUEST['edit']);
                        $edit = $db->query("SELECT * FROM product_subcategory WHERE psc_id = '$edit_id'");
                        $edit_value = $edit->fetch_object();

                        $subcategory_name = $edit_value->psc_name;
                        $description = $edit_value->psc_description;
                     } else {
                        $subcategory_name = '';
                        $description = '';
                     }
                     ?>
                     <div class="panel-body">
                        <form action="action/manage_subcategory.php" method="POST" enctype="multipart/form-data">
                           <div class="form-group">
                              <label for="">Select Catagory</label>
                              <select class="form-select" name="pc_id" aria-label="">
                                 <option selected>Select</option>

                                 <?php
                                 $catagory = $db->query("SELECT * FROM `product_categorys`");
                                 while ($catagory_value = $catagory->fetch_object()) {
                                 ?>
                                    <option <?php
                                             if (!empty($_REQUEST['edit'])) {
                                                if (!empty($edit_value->pc_id)) {
                                                   if ($edit_value->pc_id === $catagory_value->pc_id) {
                                                      echo "selected";
                                                   }
                                                }
                                             }
                                             ?> value='<?= $catagory_value->pc_id; ?>'> <?= $catagory_value->pc_name; ?> </option>
                                 <?php } ?>

                              </select>
                           </div>
                           <div class="form-grp">
                              <label for="name" class="form-label">Subcategrory Name</label><br>
                              <input type="text" class="form-control" name="name" value="<?= $subcategory_name; ?>" id="name" placeholder="Name">
                           </div>
                           <div class="form-grp">
                              <label for="image" class="form-label">Upload Image <span class="text-danger">1000 *
                                    1000</span></label>
                              <input class="form-control" type="file" id="upld_image" name="upld_image" value="" accept="image/*">
                           </div>
                           <div class="form-grp">
                              <label for="" class="form-label">Description</label><br>
                              <textarea name="description" value="" id="description" class=" chck-reset"><?= $description; ?></textarea>
                           </div>
                           <?php
                           if (!empty($_REQUEST['edit'])) {
                           ?>
                              <input type="hidden" name="$psc_id" value="<?= $_REQUEST['edit']; ?>">
                              <button type="submit" value="update" name="submit" value="update" class="btn btn-dark">Update</button>
                           <?php
                           } else {
                           ?>
                              <button type="submit" value="register" name="submit" value="register" class="btn btn-dark">Submit</button>
                           <?php
                           }
                           ?>
                        </form>
                     </div>
                  </div>
               </div>
               <div class="col-md-8">
                  <div class="panel-primary">
                     <div class="panel-heading">
                        <h3 class="panel-title">View Category</h3>
                     </div>
                     <div class="panel-body">
                        <div class="row">
                           <div class="col-md-6">
                              <div>
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
                                    <div class="table-responsive">
                                       <table class="table table-bordered table-striped" style="width:100%">
                                          <thead>
                                             <tr>
                                                <th class="th_border" style="width:22px;color:#666;">
                                                   Sl No
                                                </th>
                                                <th class="th_border" style="width:47px;color:#666;">
                                                   Action
                                                </th>
                                                <th class="th_border" style="width:60px;color:#666;">
                                                   Catagory Name
                                                </th>
                                                <th class="th_border" style="width:77px;color: #666;">
                                                   Sub-Catagory Name
                                                </th>
                                                <th class="th_border" style="width:50px;color: #666;">Image
                                                </th>
                                                <th class="th_border" style="width:44px;color: #666;">
                                                   Description
                                                </th>
                                                <th class="th_border" style="width:44px;color: #666;">
                                                   Status
                                                </th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <?php
                                             $data = $db->query("SELECT * FROM `product_subcategory` LEFT JOIN `product_categorys` ON product_subcategory.pc_id = product_categorys.pc_id");
                                             if ($data->num_rows == 0) {
                                                echo 'No Data Found';
                                             } else {
                                                $sl = 0;
                                                while ($value = $data->fetch_object()) {
                                                   $sl++;
                                             ?>
                                                   <tr>
                                                      <td><?= $sl; ?></td>
                                                      <td>
                                                         <a href="?edit=<?= $value->psc_id; ?>" class="btn btn-success"><i class="fa-solid fa-pen"></i></a>

                                                         <a href="action/manage_subcategory.php?submit=delete&psc_id=<?= $value->psc_id; ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>

                                                      </td>
                                                      <td><?= $value->pc_name; ?></td>
                                                      <td><?= $value->psc_name; ?></td>
                                                      <td>
                                                         <?php
                                                         if (empty($value->psc_image)) {
                                                            echo 'N/A';
                                                         } else {
                                                         ?>
                                                            <img src="uploads/<?= $value->psc_image; ?>" class="img-fluid" alt="Subcategory">
                                                         <?php } ?>
                                                      </td>
                                                      <td><?= $value->psc_description; ?></td>
                                                      <td><i class="fa-solid fa-eye-slash"></i></td>
                                                   </tr>
                                             <?php }
                                             } ?>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div>
                              <div class="row">
                                 <div class="col-md-6">
                                    <div class="data-table-info">Showing 1 to 7 of 7 entries
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="datatable-pagination">
                                       <nav aria-label="...">
                                          <ul class="pagination">
                                             <li class="page-item disabled">
                                                <a class="page-link">Previ ous</a>
                                             </li>
                                             <li class="page-itemactive" aria-current="page">
                                                <a class="page-link" href="#">1</a>
                                             </li>
                                             <li class="page-item">
                                                <a class="page-link next disabled" href="#">Next</a>
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
         </section>
      </div>
   </div>
   <?php include 'footer.php' ?>