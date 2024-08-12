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
            <div class="h4">Add Product</div>
            <div class="dsbrdLite h6">Dashboard / Product</div>
         </div>
         <section>
            <div class="">
               <div class="panel-primary">
                  <div class="panel-heading">
                     <h3 class="panel-title">Add Product</h3>
                  </div>
                  <?php
                  if (!empty($_REQUEST['edit'])) {
                     $edit_id = mysqli_real_escape_string($db, $_REQUEST['edit']);
                     $edit = $db->query("SELECT * FROM product WHERE p_id = '$edit_id'");
                     $edit_value = $edit->fetch_object();

                     $category_name = $edit_value->pc_id;
                     $subcategory_name = $edit_value->psc_id;
                     $product_name = $edit_value->product_name;
                     $seling_price = $edit_value->product_seling_price;
                     $market_price = $edit_value->product_market_price;
                     $description = $edit_value->product_long_description;
                  } else {
                     $category_name = '';
                     $subcategory_name = '';
                     $seling_price = '';
                     $product_name = '';
                     $market_price = '';
                     $description = '';
                  }
                  ?>
                  <div class="panel-body">
                     <div class="">
                        <form action="action/manage_product.php" method="post" enctype="multipart/form-data">
                           <div class="row">
                              <div class="col-md-4">
                                 <div class="form-group mb-2">
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
                                 <div class="form-group">
                                    <label for="market_price" class="form-label">Seling Price</label><br>
                                    <input type="text" class="form-control" name="seling_price" value="<?= $seling_price; ?>" id="seling_price" placeholder="Seling Price">
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group mb-2">
                                    <label for="">Select Sub-catagory</label>
                                    <select class="form-select" name="psc_id" aria-label="">
                                       <option>Select</option>
                                       <?php
                                       $sub_catagory = $db->query("SELECT * FROM product_subcategory");
                                       while ($sub_catagory_value = $sub_catagory->fetch_object()) {
                                       ?>
                                          <option <?php
                                                   if (!empty($_REQUEST['edit'])) {
                                                      if (!empty($edit_value->psc_id)) {
                                                         if ($edit_value->psc_id === $sub_catagory_value->psc_id) {
                                                            echo "selected";
                                                         }
                                                      }
                                                   }

                                                   ?> value='<?= $sub_catagory_value->psc_id; ?>'><?= $sub_catagory_value->psc_name; ?></option>
                                       <?php } ?>
                                    </select>
                                 </div>
                                 <div class="form-group">
                                    <label for="market_price" class="form-label">Market Price</label><br>
                                    <input type="text" class="form-control" name="market_price" value="<?= $market_price; ?>" id="market_price" placeholder="Market Price">
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group mb-2">
                                    <label for="name" class="form-label">Product Name</label><br>
                                    <input type="text" class="form-control" name="product_name" value="<?= $product_name; ?>" id="name" placeholder="Name">
                                 </div>
                                 <div class="form-grp">
                                    <label for="image" class="form-label">Image</label>
                                    <input class="form-control" type="file" id="product_image" name="product_image" value="" accept="image/*">
                                 </div>
                              </div>
                           </div>

                           <div class="form-grp">
                              <label for="" class="form-label">Description</label><br>
                              <textarea name="description" value="" id="description" class=" chck-reset"><?= $description; ?></textarea>
                           </div>
                           <?php
                           if (!empty($_REQUEST['edit'])) {
                           ?>
                              <input type="hidden" name="p_id" value="<?= $_REQUEST['edit']; ?>">
                              <button type="submit" name="submit" value="update" class="btn btn-primary">Update</button>
                           <?php
                           } else {

                           ?>
                              <button type="submit" name="submit" value="register" class="btn btn-dark">Submit</button>
                           <?php
                           }

                           ?>
                        </form>
                     </div>
                     <div class="panel-primary">
                        <div class="panel-heading">
                           <h3 class="panel-title">View Category</h3>
                        </div>
                        <div class="panel-body">
                           <div class="row">
                              <div class="col-md-6">
                                 <div>
                                    <label for="">
                                       <span>Show</span>
                                       <select name="" id="" class="form-select form-control" aria-label="Default select example">
                                          <option value="10">10</option>
                                          <option value="25">25</option>
                                          <option value="50">50</option>
                                          <option value="100">100</option>
                                       </select>
                                       <span>entries</span>
                                    </label>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="float-end">
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
                                                   <th class="th_border" style="width:60px;color:#666;">
                                                      Sub Catagory Name
                                                   </th>
                                                   <th class="th_border" style="width:77px;color: #666;">
                                                      Product
                                                   </th>
                                                   <th class="th_border" style="width:50px;color: #666;">Image
                                                   </th>
                                                   <th class="th_border" style="width:50px;color: #666;">Market Price</th>
                                                   <th class="th_border" style="width:50px;color: #666;">Seling Price</th>
                                                   <th class="th_border" style="width:44px;color: #666;">
                                                      Description
                                                   </th>
                                                   <th class="th_border" style="width:44px;color: #666;">
                                                      Status
                                                   </th>
                                                   <th class="th_border" style="width:44px;color: #666;">Date Of Add</th>
                                                </tr>
                                                <?php
                                                $data = $db->query("SELECT product.*, product_categorys.pc_name as  product_category_name, product_subcategory.psc_name as  product_subcategory_name FROM `product` LEFT JOIN `product_categorys` ON product.pc_id = product_categorys.pc_id LEFT JOIN `product_subcategory` ON product.psc_id = product_subcategory.psc_id;");

                                                if ($data->num_rows == 0) {
                                                   echo 'No Data Found';
                                                } else {
                                                   $sl = 0;
                                                   while ($value = $data->fetch_object()) {
                                                      $sl++;
                                                      $pc_id = $value->pc_id;
                                                ?>
                                             </thead>
                                             <tbody>
                                                <tr>
                                                   <td><?= $sl; ?></td>
                                                   <td>
                                                      <a href="?edit=<?= $value->p_id; ?>" class="btn btn-success"><i class="fa-solid fa-pen"></i></a>

                                                      <a href="action/manage_product.php?submit=delete&p_id=<?= $value->p_id; ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                                                   </td>
                                                   <td><?= $value->product_category_name; ?></td>
                                                   <td><?= $value->product_subcategory_name; ?></td>
                                                   <td><?= $value->product_name; ?></td>
                                                   <td>
                                                      <?php
                                                      if (empty($value->product_image)) {
                                                         echo 'N/A';
                                                      } else {
                                                      ?>
                                                         <img src="uploads/<?= $value->product_image; ?>" class="img-fluid" alt="Catagory">
                                                      <?php } ?>
                                                   </td>
                                                   <td><?= $value->product_market_price; ?></td>
                                                   <td><?= $value->product_seling_price; ?></td>
                                                   <td><?= $value->product_long_description; ?></td>
                                                   <td><i class="fa-solid fa-eye-slash"></i></td>
                                                   <td><?= $value->create_at ?></td>
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
            </div>
         </section>
      </div>
   </div>
   <?php include 'footer.php' ?>