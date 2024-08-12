<?php 
define('title', "Buy Grocery Online at Best Prices Pan India");
define('keywords', "Buy MyFitness Peanut Butter Chocolate Crunchy Peanut Butter 510 gms online. Shop from our wide range of items in Groceries at JioMart & avail great discounts. Order today! ✔ COD");
include 'include/basic.php';
include 'include/header.php';
?>
<div class="container mt-4 myWishlist">
        <div class="mb-4">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
                aria-label="breadcrumb">
                <ol class="breadcrumb nav">
                    <li class="breadcrumb-item nav-item"><a href="#" class="nav-link">My Account</a></li>
                    <li class="breadcrumb-item nav-item active" aria-current="page"><a href="#" class="nav-link">My Wishlist</a></li>
                </ol>
            </nav>
        </div>

        <h3 class="mb-4">Your favourited products</h3>
        <div class="row">
            <div class="col-md-4">
                <div class="card myWishlistItem ">
                    <div class="card-header groceryImage">
                        <div class="myWishlist_icon"><i class="fa-solid fa-heart"></i>
                        </div>
                        <a href="#"><img src="images/product/maaza-mango-drink.webp" class="card-img-top"
                                alt="maza"></a>
                        <div class="vegIcon">
                            <img src="images/product/product-svg/icon-veg.svg" alt="icon-veg">
                        </div>
                    </div>
                    <div class="card-body">
                        <a href="#"><img src="images/product/product-svg/smart-bazaar-tag.svg" class="smart_tag"
                                alt="smart-bazaar-tag"></a>
                        <p class="card-text productText">
                            Maaza Mango
                            Drink1.2 L </p>
                        <div class="d-md-flex gap-2">
                            <span class="h6 text-black ">₹49.00</span>
                            <span class="text-body-tertiary myPrice"><del>₹75.00</del></span>
                            <span class="bg-body-secondary fw-medium myDiscount">38%
                                OFF</span>
                        </div>
                        <div class="addonButton myWishlist_addButton d-grid mt-1">
                            <button class="btn btn-outline-secondary d-md-flex  justify-content-between align-items-center rounded-pill ps-4 pe-4" type="button">
                                <span>Add</span>
                                <span class="plus">+</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'include/footer.php' ?>