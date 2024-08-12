<?php
define('title', "JioMart - Best Online Grocery Store for Your Daily Needs");
define('keywords', "Buy Grocery Online for your daily necessities from a wide range of Fruits & Vegetables, Daily & Bakery, Beverages, Home Care, etc. Visit JioMart online grocery market.");
include 'include/basic.php';
include 'include/header.php';
?>
<div class="main mt-4 mb-4 ms-5 me-5">
        <div class="container-fluid">
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);">
                        <ol class="breadcrumb myProduct_nav">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">All Categories</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="#">Groceries</a>
                                </li>
                        </ol>
                </nav>
                <div class="row">
                        <div class="col-md-3 container">
                                <section class="category mt-2 p-2 overflow-y-hidden">
                                        <h4 class="lableTitle">Category</h4>
                                        <div class="list-nav overflow-y-auto CategoryItem">
                                                <ul class="nav flex-column accordion categoryList" id="CategoryListItem">
                                                        <li class="nav-item pt-1 pb-1 accordion-item myAccordionItem">
                                                                <a class="nav-link accordion-header" id="headingOne" href="#"><span data-bs-target="#collapseOne" data-bs-toggle="collapse" aria-controls="collapsTwo">
                                                                                <span class="topangel"><img src="images/product/product-svg/angle-top-dark-icon.svg" class="myToggle" alt="angle icon"></span>Frots
                                                                                & Beverages</span></a>
                                                                <ul id="collapseOne" class="accordion-collapse collapse sub_cat_nav" aria-labelledby="headingOne" data-bs-parent="#CategoryListItem">
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                </ul>
                                                        </li>
                                                        <li class="nav-item pt-1 pb-1 accordion-item myAccordionItem">
                                                                <a class="nav-link accordion-header" id="headingTwo" href="#"><span data-bs-target="#collapseTwo" data-bs-toggle="collapse" aria-controls="collapsTwo">
                                                                                <span class="topangel"><img src="images/product/product-svg/angle-top-dark-icon.svg" class="myToggle" alt="angle icon"></span>Dairy
                                                                                & Bakery</span></a>
                                                                <ul id="collapseTwo" class="accordion-collapse collapse sub_cat_nav" aria-labelledby="headingTwo" data-bs-parent="#CategoryListItem">
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                </ul>
                                                        </li>
                                                        <li class="nav-item accordion-item myAccordionItem">
                                                                <a class="nav-link accordion-header" id="heading_3" href="#"><span data-bs-target="#collapse_3" data-bs-toggle="collapse" aria-controls="collapsTwo">
                                                                                <span class="topangel"><img src="images/product/product-svg/angle-top-dark-icon.svg" class="myToggle" alt="angle icon"></span>Staples</a>
                                                                <ul id="collapse_3" class="accordion-collapse collapse sub_cat_nav" aria-labelledby="heading_3" data-bs-parent="#CategoryListItem">
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                </ul>
                                                        </li>
                                                        <li class="nav-item accordion-item myAccordionItem">
                                                                <a class="nav-link accordion-header" id="heading_4" href="#"><span data-bs-target="#collapse_4" data-bs-toggle="collapse" aria-controls="collapsTwo">
                                                                                <span class="topangel"><img src="images/product/product-svg/angle-top-dark-icon.svg" class="myToggle" alt="angle icon"></span>Snacks
                                                                                &amp; Branded Foods</a>
                                                                <ul id="collapse_4" class="accordion-collapse collapse sub_cat_nav" aria-labelledby="heading_4" data-bs-parent="#CategoryListItem">
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                </ul>
                                                        </li>
                                                        <li class="nav-item accordion-item myAccordionItem">
                                                                <a class="nav-link accordion-header" id="heading_5" href="#"><span data-bs-target="#collapse_5" data-bs-toggle="collapse" aria-controls="collapsTwo">
                                                                                <span class="topangel"><img src="images/product/product-svg/angle-top-dark-icon.svg" class="myToggle" alt="angle icon"></span>Beverages</a>
                                                                <ul id="collapse_5" class="accordion-collapse collapse sub_cat_nav" aria-labelledby="heading_5" data-bs-parent="#CategoryListItem">
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                </ul>
                                                        </li>
                                                        <li class="nav-item accordion-item myAccordionItem">
                                                                <a class="nav-link accordion-header" id="heading-6" href="#"><span data-bs-target="#collapse-6" data-bs-toggle="collapse" aria-controls="collapsTwo">
                                                                                <span class="topangel"><img src="images/product/product-svg/angle-top-dark-icon.svg" class="myToggle" alt="angle icon"></span>Personal
                                                                                Care</a>
                                                                <ul id="collapse-6" class="accordion-collapse collapse sub_cat_nav" aria-labelledby="heading-6" data-bs-parent="#CategoryListItem">
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                </ul>
                                                        </li>
                                                        <li class="nav-item accordion-item myAccordionItem">
                                                                <a class="nav-link accordion-header" id="heading-7" href="#"><span data-bs-target="#collapse-7" data-bs-toggle="collapse" aria-controls="collapsTwo">
                                                                                <span class="topangel"><img src="images/product/product-svg/angle-top-dark-icon.svg" class="myToggle" alt="angle icon"></span>Home
                                                                                Care</a>
                                                                <ul id="collapse-7" class="accordion-collapse collapse sub_cat_nav" aria-labelledby="heading-7" data-bs-parent="#CategoryListItem">
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                </ul>
                                                        </li>
                                                        <li class="nav-item accordion-item myAccordionItem">
                                                                <a class="nav-link accordion-header" id="heading-8" href="#"><span data-bs-target="#collapse-8" data-bs-toggle="collapse" aria-controls="collapsTwo">
                                                                                <span class="topangel"><img src="images/product/product-svg/angle-top-dark-icon.svg" class="myToggle" alt="angle icon"></span>Apparel</a>
                                                                <ul id="collapse-8" class="accordion-collapse collapse sub_cat_nav" aria-labelledby="heading-8" data-bs-parent="#CategoryListItem">
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                </ul>
                                                        </li>
                                                        <li class="nav-item accordion-item myAccordionItem">
                                                                <a class="nav-link accordion-header" id="heading-9" href="#"><span data-bs-target="#collapse-9" data-bs-toggle="collapse" aria-controls="collapsTwo">
                                                                                <span class="topangel"><img src="images/product/product-svg/angle-top-dark-icon.svg" class="myToggle" alt="angle icon"></span>Home
                                                                                &
                                                                                Kitchen</a>
                                                                <ul id="collapse-9" class="accordion-collapse collapse sub_cat_nav" aria-labelledby="heading-9" data-bs-parent="#CategoryListItem">
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                </ul>
                                                        </li>
                                                        <li class="nav-item accordion-item myAccordionItem">
                                                                <a class="nav-link accordion-header" id="heading-10" href="#"><span data-bs-target="#collapse-10" data-bs-toggle="collapse" aria-controls="collapsTwo">
                                                                                <span class="topangel"><img src="images/product/product-svg/angle-top-dark-icon.svg" class="myToggle" alt="angle icon"></span>Mom
                                                                                &
                                                                                Baby Care</a>
                                                                <ul id="collapse-10" class="accordion-collapse collapse sub_cat_nav" aria-labelledby="heading-10" data-bs-parent="#CategoryListItem">
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                </ul>
                                                        </li>
                                                        <li class="nav-item accordion-item myAccordionItem">
                                                                <a class="nav-link accordion-header" id="heading-11" href="#"><span data-bs-target="#collapse-11" data-bs-toggle="collapse" aria-controls="collapsTwo">
                                                                                <span class="topangel"><img src="images/product/product-svg/angle-top-dark-icon.svg" class="myToggle" alt="angle icon"></span>Books</a>
                                                                <ul id="collapse-11" class="accordion-collapse collapse sub_cat_nav" aria-labelledby="heading-11" data-bs-parent="#CategoryListItem">
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                </ul>
                                                        </li>
                                                        <li class="nav-item accordion-item myAccordionItem">
                                                                <a class="nav-link accordion-header" id="heading-12" href="#"><span data-bs-target="#collapse-12" data-bs-toggle="collapse" aria-controls="collapsTwo">
                                                                                <span class="topangel"><img src="images/product/product-svg/angle-top-dark-icon.svg" class="myToggle" alt="angle icon"></span>Pets</a>
                                                                <ul id="collapse-12" class="accordion-collapse collapse sub_cat_nav" aria-labelledby="heading-12" data-bs-parent="#CategoryListItem">
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                </ul>
                                                        </li>
                                                        <li class="nav-item accordion-item myAccordionItem">
                                                                <a class="nav-link accordion-header" id="heading-13" href="#">
                                                                        <span data-bs-target="#collapse-13" data-bs-toggle="collapse" aria-controls="collapsTwo">
                                                                                <span class="topangel"><img src="images/product/product-svg/angle-top-dark-icon.svg" class="myToggle" alt="angle icon"></span>Beauty
                                                                </a>
                                                                <ul id="collapse-13" class="accordion-collapse collapse sub_cat_nav" aria-labelledby="heading-13" data-bs-parent="#CategoryListItem">
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                </ul>
                                                        </li>
                                                        <li class="nav-item accordion-item myAccordionItem"><a class="nav-link accordion-header" id="heading-14" href="#"><span data-bs-target="#collapse-14" data-bs-toggle="collapse" aria-controls="collapsTwo">
                                                                                <span class="topangel"><img src="images/product/product-svg/angle-top-dark-icon.svg" class="myToggle" alt="angle icon"></span>Kitchenware</a>
                                                                <ul id="collapse-14" class="accordion-collapse collapse sub_cat_nav" aria-labelledby="heading-14" data-bs-parent="#CategoryListItem">
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                        <li class="accordion-body nav-item accordionItemLists">
                                                                                <a href="#">Lorem ipsum</a>
                                                                        </li>
                                                                </ul>
                                                        </li>
                                                </ul>
                                        </div>
                                </section>
                                <section class="Filters mt-3 p-3">
                                        <h4 class="lableTitle">Filters</h4>
                                        <div class="Availability pb-3 pt-2">
                                                <div class="h6 lableTitle">Availability</div>
                                                <div class="form-check labelText">
                                                        <input class="form-check-input" type="checkbox" id="availability">
                                                        <label class="form-check-label" for="availability">
                                                                <span>Include Out of stock</span>
                                                        </label>
                                                </div>
                                        </div>
                                        <div class="myCategories mt-4 mb-4">
                                                <div class="h6 lableTitle">Categories</div>
                                                <div class="form-check">
                                                        <div class="categoriesList">
                                                                <input class="form-check-input" type="checkbox" id="AdultCare">
                                                                <label class="form-check-label" for="AdultCare">
                                                                        <span>Adult Care</span>
                                                                </label>
                                                        </div>
                                                        <div class="categoriesList">
                                                                <input class="form-check-input" type="checkbox" id="Agarbatti">
                                                                <label class="form-check-label" for="Agarbatti">
                                                                        <span>Agarbatti/Dhoop Stick</span>
                                                                </label>
                                                        </div>
                                                        <div class="categoriesList">
                                                                <input class="form-check-input" type="checkbox" id="Freshener">
                                                                <label class="form-check-label" for="Freshener">
                                                                        <span>Air Freshener</span>
                                                                </label>
                                                        </div>
                                                        <div class="categoriesList">
                                                                <input class="form-check-input" type="checkbox" id="Aquarium">
                                                                <label class="form-check-label" for="Aquarium">
                                                                        <span>Aquarium & Accessories</span>
                                                                </label>
                                                        </div>
                                                        <div class="categoriesList">
                                                                <input class="form-check-input" type="checkbox" id="BabyPowder">
                                                                <label class="form-check-label" for="BabyPowder">
                                                                        <span>Baby Powder, Oil & Lotions</span>
                                                                </label>
                                                        </div>
                                                        <div class="mt-2 mb-2 More45">
                                                                <button class="rounded-pill" data-bs-toggle="modal" data-bs-target="#mymodal">+45
                                                                        More</button>
                                                        </div>
                                                </div>
                                        </div>
                                        <div class="myBrand mt-4 mb-4">
                                                <div class="h6 lableTitle">Brand</div>
                                                <div class="form-check">
                                                        <div class="BrandList">
                                                                <input class="form-check-input" type="checkbox" id="PRODUCTS">
                                                                <label class="form-check-label" for="PRODUCTS">
                                                                        <span>3V PRODUCTS</span>
                                                                </label>
                                                        </div>
                                                        <div class="BrandList">
                                                                <input class="form-check-input" type="checkbox" id="AdiExpress">
                                                                <label class="form-check-label" for="AdiExpress">
                                                                        <span>AdiExpress</span>
                                                                </label>
                                                        </div>
                                                        <div class="BrandList">
                                                                <input class="form-check-input" type="checkbox" id="Aks">
                                                                <label class="form-check-label" for="Aks">
                                                                        <span>Aks</span>
                                                                </label>
                                                        </div>
                                                        <div class="BrandList">
                                                                <input class="form-check-input" type="checkbox" id="BINGEABLE">
                                                                <label class="form-check-label" for="BINGEABLE">
                                                                        <span>BINGEABLE...ENJOY THE
                                                                                DIFFERENCE</span>
                                                                </label>
                                                        </div>
                                                        <div class="BrandList">
                                                                <input class="form-check-input" type="checkbox" id="DEVICE">
                                                                <label class="form-check-label" for="DEVICE">
                                                                        <span>BLUE WONDER WITH DEVICE</span>
                                                                </label>
                                                        </div>
                                                        <div class="mt-2 mb-2 More45">
                                                                <button class="rounded-pill" data-bs-toggle="modal" data-bs-target="#mymodal">+45
                                                                        More</button>
                                                        </div>
                                                </div>
                                        </div>
                                        <div class="price mb-4">
                                                <span class="h4">Price</span>
                                                <input type="range" class="form-range mt-4" min="0" max="0" step="0" id="priceRange">
                                        </div>
                                        <div class="discount mb-2">
                                                <span class="h4">Discount</span>
                                                <input type="range" class="form-range mt-4" min="0" max="100" step="0" id="discountRange">
                                        </div>
                                </section>
                        </div>
                        <div class="col-md-9">
                                <section class="mt-2">
                                        <div class="banner rounded">
                                                <a href="#"><img src="images/product/groceries.webp" class="rounded" alt="groceries banar"></a>
                                        </div>
                                        <div class="sort_button dropdown mt-3">
                                                <button class="btn rounded-pill" data-bs-toggle="dropdown" role="button" aria-expanded="false">
                                                        <span class="sort">Sort by:</span>
                                                        <span class="popular">Popularity</span>
                                                        <span class="topangel"><img src="images/product/product-svg/angle-top-dark-icon.svg" class="myToggle" alt="angle icon"></span>
                                                </button>
                                                <div class="container dropdown-menu sort_container">
                                                        <li class="form-check dropdown-item itemCnt"><a href="#">
                                                                        <label for="Popularity" class="form-check-label myLable">Popularity</label>
                                                                        <input type="radio" id="Popularity" name="sorts" class="form-check-input myLableinput" checked></a>
                                                        </li>
                                                        <li class="form-check dropdown-ite itemCnt"><a href="#">
                                                                        <label for="Price_lo" class="form-check-label myLable">Price:
                                                                                High to Low</label>
                                                                        <input type="radio" id="Price_lo" name="sorts" class="form-check-input myLableinput"></a>
                                                        </li>
                                                        <li class="form-check dropdown-item itemCnt"><a href="#">
                                                                        <label for="Price_lo" class="form-check-label myLable">Price:
                                                                                Low to High</label>
                                                                        <input type="radio" id="Price_lo" name="sorts" class="form-check-input myLableinput"></a>
                                                        </li>
                                                        <li class="form-check dropdown-item itemCnt"><a href="#">
                                                                        <label for="Discount" class="form-check-label myLable">Discount
                                                                        </label>
                                                                        <input type="radio" id="Discount" name="sorts" class="form-check-input myLableinput"></a>
                                                        </li>
                                                        <li class="form-check dropdown-item itemCnt"><a href="#">
                                                                        <label for="all_Products" class="form-check-label myLable">All
                                                                                Products
                                                                        </label>
                                                                        <input type="radio" id="all_Products" name="sorts" class="form-check-input myLableinput"></a>
                                                        </li>
                                                </div>
                                        </div>
                                        <div class="algolia_box row mt-3">

                                                <?php
                                                        if (!empty($_REQUEST['category']) ){
                                                                $pc_id = mysqli_real_escape_string($db, $_REQUEST['category']);
                                                                $data = $db->query("SELECT * FROM `product` WHERE pc_id = '$pc_id'");
                                                                
                                                        }elseif (!empty($_REQUEST['subcatages'])) {
                                                                $psc_id = mysqli_real_escape_string($db, $_REQUEST['subcatages']);
                                                                $data = $db->query("SELECT * FROM `product` WHERE psc_id = '$psc_id'");
                                                        }else {

                                                                $data = $db->query("SELECT * FROM `product`");
                                                        }
                                                        if($data->num_rows == 0) {
                                                                echo '<div class="col-md-12 d-flex justify-content-center">';
                                                                echo '<img src="images/No_Product_Found.png" class="image-filled" alt="No Product Found">';
                                                                echo '</div>';
                                                        }else {
                                                        while ($value = $data->fetch_object()) {
                                                ?>
                                                <!-- <div class="col-md-4">
                                                        <div class="card myGroceryItem ">
                                                                <div class="card-header groceryImage">
                                                                        <div class="wishlist"><img src="images/svg_images/wishlist-icon.svg" alt="wishlist-icon">
                                                                        </div>
                                                                        <a href="#"><img src="images/product/maaza-mango-drink.webp" class="card-img-top" alt="maza"></a>
                                                                        <div class="vegIcon">
                                                                                <img src="images/product/product-svg/icon-veg.svg" alt="icon-veg">
                                                                        </div>
                                                                </div>
                                                                <div class="card-body">
                                                                        <a href="#"><img src="images/product/product-svg/smart-bazaar-tag.svg" class="smart_tag" alt="smart-bazaar-tag"></a>
                                                                        <p class="card-text productText mt-2">
                                                                                Maaza Mango
                                                                                Drink1.2 L </p>
                                                                        <div class="d-md-flex gap-2" style="padding: 10px 0;">
                                                                                <span class="h6 text-black ">₹49.00</span>
                                                                                <span class="text-body-tertiary myPrice"><del>₹75.00</del></span>
                                                                                <span class="bg-body-secondary fw-medium myDiscount">38%
                                                                                        OFF</span>
                                                                        </div>
                                                                        <div class="addonButton d-grid">
                                                                                <button class="btn btn-outline-secondary btn-block d-md-flex gap-5 ps-4 " type="button">
                                                                                        <span>Add</span>
                                                                                        <spanclass="plus">
                                                                                                +</span>
                                                                                </button>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div> -->
                                                <div class="col-md-4">
                                                        <div class="card myGroceryItem ">
                                                                <div class="card-header groceryImage">
                                                                        <div class="wishlist"><img src="images/svg_images/wishlist-icon.svg" alt="wishlist-icon">
                                                                        </div>
                                                                        <a href="product_ditel.php?slug=<?=$value->slug;?>"><img src="admin/uploads/<?=$value-> product_image;?>" class="card-img-top" alt="peanut-butter"></a>
                                                                        <div class="vegIcon">
                                                                                <img src="images/product/product-svg/icon-veg.svg" alt="icon-veg">
                                                                        </div>
                                                                </div>
                                                                <div class="card-body">
                                                                        <a href="#">
                                                                                <p class="sponsored">Sponsored</p>
                                                                        </a>
                                                                        <a href="product_ditel.php?slug=<?=$value->slug;?>" class="card-text productText" style="padding: 3px 0;"><?=$value->product_name;?></a>
                                                                        <div class="d-md-flex gap-2" style="padding: 1px 0;">
                                                                                <span class="h6 text-black">₹ <?php echo number_format($value->product_seling_price , 2) ?> </span>
                                                                                <span class="text-body-tertiary myPrice"><del>₹ <?php echo number_format($value->product_market_price , 2)?></del></span>
                                                                                <?php
                                                                                        $market_price = $value->product_market_price;
                                                                                        $selinp_price = $value->product_seling_price;
                                                                                        $discount = (($market_price - $selinp_price) / $market_price) * 100;
                                                                                        $discount_round = round($discount, 2);
                                                                                ?>
                                                                                <span class="bg-body-secondary fw-medium myDiscount"><?=$discount_round;?>%
                                                                                        OFF</span>
                                                                        </div>
                                                                        <div class="addonButton d-grid">
                                                                                <button class="btn btn-outline-secondary btn-block d-md-flex gap-5 ps-4 " type="button">
                                                                                        <span>Add</span>
                                                                                        <spanclass="plus">
                                                                                                +</span>
                                                                                </button>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                                <?php } } ?>
                                        </div>
                                </section>
                        </div>
                </div>
        </div>
</div>
<?php include 'include/footer.php' ?>