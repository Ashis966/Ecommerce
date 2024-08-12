<?php 
define('title', "Buy Grocery Online at Best Prices Pan India");
define('keywords', "Buy MyFitness Peanut Butter Chocolate Crunchy Peanut Butter 510 gms online. Shop from our wide range of items in Groceries at JioMart & avail great discounts. Order today! ✔ COD");
include 'include/basic.php';
include 'include/header.php';
?>

<div>
    <div class="container">
        <h3>My Account</h3>
        <div class="row">
            <div class="col-md-3">
                <div class="card mt-2 p-2 customeProfileBorder">
                    <div class="card-body">
                        <ul class="nav flex-column gap-3 accordion accordion-flush customeProfile"
                            id="accounAaccordion">
                            <li class="nav-item accordion-item profileItem">
                                <div class="d-md-flex align-items-center row profiledetails">
                                    <div class="col-md-2 profileImg"><img src="images/svg_images/account/profile.svg"
                                            alt="profile"></div>
                                    <div class="col-md-8">
                                        <div class="profileName">Ashis Kumar</div>
                                        <div class="text-truncate profileEmail">
                                            7008438639@nomail.jiomart.com
                                        </div>
                                        <div class="profileMobile_no">+91-7008438639</div>
                                    </div>
                                    <div class="col-md-1 angle-right"><i class="fa-solid fa-angle-right"></i></div>
                                </div>
                            </li>
                            <li class="nav-item accordion-item profileItem">
                                <div class="accordion-header">
                                    <div class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#myAccount">
                                        MY Account
                                    </div>
                                </div>
                                <ul id="myAccount" class="myAcuntDrpdwn accordion-collapse collapse show navbar-nav"
                                    data-bs-parent="#accounAaccordion">
                                    <li class="accordion-body myAccountItem"><img
                                            src="images/svg_images/my-order-icon.svg" class="me-2"
                                            alt="my orders"><span class="slideLink">My
                                            Order</span></li>
                                    <li class="accordion-body nav-item myAccountItem"><a
                                            href="wishlist/wishlist.php"><img
                                                src="images/svg_images/wishlist-icon.svg" class="me-2"
                                                alt="wishlist-icon"><span class="slideLink">Wishlist</span></a></li>
                                    <li class="accordion-body nav-item myAccountItem"><img
                                            src="images/svg_images/my-list-viewicon.svg" class="me-2"
                                            alt="my-list"><span class="slideLink">My
                                            List</span></li>
                                    <li class="accordion-body nav-item myAccountItem"><img
                                            src="images/svg_images/coupon-store.svg" class="me-2"
                                            alt="coupon-store"><span class="slideLink">Coupon
                                            Store</span></li>
                                    <li class="accordion-body nav-item myAccountItem"><i
                                            class="fa-solid fa-location-dot me-2"></i><span class="slideLink">Delivery
                                            Address</span></li>
                                    <li class="accordion-body nav-item myAccountItem"><i
                                            class="fa-solid fa-address-card me-2"></i><span>PAN Card</span></li>
                                </ul>
                            </li>
                            <li class="nav-item accordion-item profileItem">
                                <div class="accordion-header">
                                    <div class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#myPayments">Payments Modes</div>
                                    <ul id="myPayments" class="myAcuntDrpdwn accordion-collapse collapse navbar-nav"
                                        data-bs-parent="#accounAaccordion">
                                        <li class="accordion-body nav-item myAccountItem"><i
                                                class="fa-solid fa-wallet  me-2"></i><span>JioMart Wallet</span>
                                        </li>
                                    </ul>
                            </li>

                            <li class="nav-item accordion-item profileItem">
                                <div class="accordion-header">
                                    <div class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#mySupport">Help & Support</div>
                                    <ul id="mySupport" class="myAcuntDrpdwn accordion-collapse collapse navbar-nav"
                                        data-bs-parent="#accounAaccordion">
                                        <li class="accordion-body nav-item myAccountItem"><i
                                                class="fa-solid fa-circle-info me-2"></i><span>JioMart Wallet</span>
                                        </li>
                                        <li class="accordion-body nav-item myAccountItem"><i
                                                class="fa-solid fa-circle-info me-2"></i><span>Need Help</span></li>
                                    </ul>
                            </li>

                            <li class="nav-item accordion-item profileItem">
                                <div class="accordion-header">
                                    <div class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#myOffers">Offers & Discounts</div>
                                    <ul id="myOffers" class="myAcuntDrpdwn accordion-collapse collapse navbar-nav"
                                        data-bs-parent="#accounAaccordion">
                                        <li class="accordion-body nav-item myAccountItem"><i
                                                class="fa-solid fa-gift me-2"></i><span>Gift Store</span>
                                        <li class="accordion-body nav-item myAccountItem"><i
                                                class="fa-solid fa-percent me-2"></i><span>Offer Store</span>
                                        <li class="accordion-body nav-item myAccountItem"><i
                                                class="fa-regular fa-credit-card"></i><span>JioMart Gift
                                                Card/Store</span>
                                        </li>
                                    </ul>
                            </li>
                            <li class="nav-item accordion-item profileItem">
                                <div class="accordion-header">
                                    <div class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#myInformation">More Information</div>
                                    <ul id="myInformation"
                                        class="myAcuntDrpdwn accordion-collapse collapse show navbar-nav"
                                        data-bs-parent="#accounAaccordion">
                                        <li class="accordion-body nav-item myAccountItem"><i
                                                class="fa-solid fa-users"></i><span>About JioMart</span>
                                        <li class="accordion-body nav-item myAccountItem"><i
                                                class="fa-solid fa-file-lines"></i><span>Legal Information</span>
                                        <li class="accordion-body nav-item myAccountItem"><a
                                                href="signIn/signin.php"><i
                                                    class="fa-solid fa-power-off"></i><span>Sign Out</span></a>
                                        </li>
                                    </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="myInformation mb-4">Account Information</div>
                <div class="card addressCard">
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-grid">
                                <label for="fullName" class="form-label accountLabel">Full Name</label>
                                <span class="accountData">Ashis Kumar</span>
                            </li>
                            <li class="list-group-item d-grid">
                                <label for="Email" class="form-label accountLabel">Email ID</label>
                                <span class="accountData">7008438639@nomail.jiomart.com</span>
                            </li>
                            <li class="list-group-item d-grid">
                                <label for="mobileNo" class="form-label accountLabel">Mobile No</label>
                                <span class="accountData">+91 7008438639</span>
                            </li>
                            <li class="list-group-item d-grid">
                                <label for="address" class="form-label accountLabel">Default Address</label>
                                <span class="accountData">Ashis kumar, Gelapur , Kamadhenu Omfed , Jagatsinghapur,
                                    Orissa - 754102</span>
                            </li>
                            <li class="list-group-item subscribeBox">
                                <div class="d-md-flex justify-content-between subscribeCnt">
                                    <span class="knowMore">Subscribe to fast checkout - <a
                                            href="https://www.jiomart.com/privacy-policy">Know More.</a></span>
                                    <span class="form-check form-switch myCheckBox">
                                        <input type="checkbox" name="" id="" class="form-check-input" checked>
                                    </span>
                                </div>
                            </li>
                            <div class="d-grid mt-4 editButton">
                                <button type="button" class="btn rounded-pill">Edit</button>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'include/footer.php' ?>