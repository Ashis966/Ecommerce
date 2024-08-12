<?php 
define('title', "Buy Grocery Online at Best Prices Pan India");
define('keywords', "Hellow");
include 'include/basic.php';
include 'include/header.php';
?>
<div class="container">
    <h5 class="mt-4 mb-4 ms-2 ordrReview">Order Review</h5>
    <div class="row">
        <div class="col-md-8">
            <div class="card deliveryDitel">
                <div class="card-body">
                    <div class="adrsSubtitle pb-3">Delivery Address</div>
                    <div class="d-md-flex justify-content-between mt-3">
                        <div class="">
                            <span class="name me-2">Ashis kumar</span><span class="home">Home</span>
                        </div>
                        <div class="adrsEdit"><i class="fa-solid fa-pen"></i></div>
                    </div>
                    <div class="address">
                        <div>Gelapur , Kamadhenu Omfed ,</div>
                        <div>Jagatsinghapur 754102, Orissa</div>
                        <div>Phone: +91 - 7008438639</div>
                    </div>
                </div>
            </div>
            <div class="card mt-4 martBasket">
                <div class="card-body">
                    <div class="jiomartBasket d-md-flex justify-content-between">
                        <div class="adrsSubtitle_2">JioMart Basket <span class="bsktQuenty">(1)</span></div>
                        <div class="bsktAngleIcon"><i class="fa-solid fa-angle-up"></i></div>
                    </div>
                    <div class="basketTotal">₹519.00</div>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="cart-product-img">
                                <img src="images/product/myfitness-peanut-butter.webp" alt="peanut-butter">
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div>
                                <div>
                                    <div class="prdName">MyFitness Peanut Butter Chocolate Smooth Peanut Butter 1250
                                        gms</div>
                                    <div>
                                        <span class="oferPrice">₹519.00</span>
                                        <span class="prdPrice text-decoration-line-through">₹649.00</span>
                                    </div>
                                    <div class="youSave">You Save ₹130.00</div>
                                    <div>
                                        <span class="sldBy">Sold by:</span>
                                        <span class="sldbyName">TANVI FITNESS PRIVATE LIMITED</span>
                                    </div>
                                    <div class="d-md-flex justify-content-between">
                                        <div>
                                            <span class="qty">Qty:</span>
                                            <span class="qty1"> 1</span>
                                        </div>
                                        <div class="dlvrTime">Delivery Between 16th May to 17th May</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="d-grid gap-3">
                <div id="multi-step-form-container">
                    <!-- Form Steps / Progress Bar -->
                    <ul class="form-stepper form-stepper-horizontal text-center mx-auto pl-0">
                        <!-- Step 1 -->
                        <li class="form-stepper-active text-center form-stepper-list step-1" step="1">
                            <a class="mx-2">
                                <span class="form-stepper-circle position-relative">
                                    <span>1</span>
                                </span>
                                <div class="label">My Cart</div>
                            </a>
                        </li>
                        <!-- Step 2 -->
                        <li class="form-stepper-unfinished text-center form-stepper-list step-2" step="2">
                            <a class="mx-2">
                                <span class="form-stepper-circle position-relative text-muted">
                                    <span class="stepTwoCircle">2</span>
                                </span>
                                <div class="label text-muted">Order Review</div>
                            </a>
                        </li>
                        <!-- Step 3 -->
                        <li class="form-stepper-unfinished text-center form-stepper-list step-3" step="3">
                            <a class="mx-2">
                                <span class="form-stepper-circle position-relative text-muted">
                                    <span>3</span>
                                </span>
                                <div class="label text-muted">Payment</div>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- whatsapp order upadate -->
                <div class="card myOrderCard">
                    <div class="card-body d-md-flex">
                        <div class="d-flex align-items-center whatsappIcon">
                            <i class="fa-brands fa-whatsapp"></i>
                        </div>
                        <div class="enableText ms-3 align-self-center">
                            Enable order updates & important information on Whatsapp
                        </div>
                        <div class="d-flex align-items-center updateCheckbox">
                            <input type="checkbox">
                        </div>
                    </div>
                </div>

                <!-- payment detail -->
                <div class="card myPaymentCard">
                    <div class="card-body">
                        <p class="pmtDetail">Payment Details</p>
                        <ul class="pmtDitelBody">
                            <li class="d-flex justify-content-between FulOrderDitel">
                                <span class="orddtlText">MRP Total</span>
                                <span class="orddtlText">₹649.00</span>
                            </li>
                            <li class="d-flex justify-content-between FulOrderDitel">
                                <span class="orddtlText">Product Discount</span>
                                <span class="prdDiscount">- ₹130.00</span>
                            </li>
                            <li class="d-flex justify-content-between FulOrderDitel">
                                <span class="orddtlText">Delivery Fee (JioMart)</span>
                                <span class="dlvryFee">FREE</span>
                            </li>
                            <li class="d-flex justify-content-between FulOrderDitel_1">
                                <span class="orddtlText">Total</span>
                                <span class="ordTotal">₹519.00</span>
                            </li>
                            <li class="text-end YouSave">You Saved ₹130.00</li>
                        </ul>
                    </div>
                </div>

                <!-- make payment -->
                <div>
                    <div class="d-grid makePayment">
                        <button class="btn btn-primary rounded-pill p-2" type="button"> Make Payment </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'include/footer.php' ?>