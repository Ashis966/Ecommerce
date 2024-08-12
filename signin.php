<?php 
define('title', "Buy MyFitness Peanut Butter Chocolate Crunchy Peanut Butter 510 gms Online at Best Prices in India - JioMart.");
define('keywords', "JioMart");
include 'include/basic.php';
include 'include/header.php';
?>
<div class="container mySignIn">
    <div class="row">
        <div class="col-md-8">
            <div class="signinImage"><img src="images/signIn/signin.webp" alt="signIn"></div>
        </div>
        <div class="col-md-4">
            <div class="card mySigninArea">
                <div class="card-body mySigninBody">
                    <h3 class="card-title myTitle">Sign in to JioMart</h3>
                    <p class="card-text toAccess">to access your Addresses, Orders & Wishlist.</p>
                    <div class="mobilenumber">
                        <span>+91 -</span>
                        <input type="tel" placeholder="Enter your mobile number" class="phone">
                    </div>
                    <div class="otpButton d-grid">
                        <button type="button" class="btn btn-primary rounded-pill disabled">Get OTP</button>
                    </div>
                    <div class="TnC">
                        <p>By continuing, you agree to our <a href="#">Terms of Service</a> and <a href="#">Privacy &
                                Legal Policy.</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- -----srarch-Bar popup----- -->
<div class="modal mt-5" id="mySearch">
    <div class="modal-dialog modal-md">
        <div class="modal-content myModalContent">
            <div class="modal-body myModalBody">
                <div class="Discover_more mt-4">
                    <h2 class="fs-5">Discover More
                    </h2>
                    <div class="button">
                        <button type="button" class="btn searchButton"><a class="text-black"
                                href="#">Biscuits</a></button>
                        <button type="button" class="btn searchButton"><a class="text-black" href="#">sugar</a></button>
                        <button type="button" class="btn searchButton"><a class="text-black" href="#">oil</a></button>
                        <button type="button" class="btn searchButton"><a class="text-black" href="#">mustard
                                oil</a></button>
                        <button type="button" class="btn searchButton"><a class="text-black" href="#">atta</a></button>
                        <button type="button" class="btn searchButton"><a class="text-black" href="#">bharat
                                rice</a></button>
                        <button type="button" class="btn searchButton"><a class="text-black" href="#">surf
                                excel</a></button>
                        <button type="button" class="btn searchButton"><a class="text-black"
                                href="#">chocolate</a></button>
                        <button type="button" class="btn searchButton"><a class="text-black" href="#">ghee</a></button>
                        <button type="button" class="btn searchButton"><a class="text-black" href="#">magie</a></button>
                    </div>
                </div>
                <div class="Popular_Categories mt-5">
                    <h6>Popular Categories</h6>
                    <div class="d-md-flex overflow-x-auto gap-4">
                        <div class="categories">
                            <img src="images/beauty.webp" alt="categories">
                            <p>Beauty</p>
                        </div>
                        <div class="categories">
                            <img src="images/beauty.webp" alt="categories">
                            <p>Beauty</p>
                        </div>
                        <div class="categories">
                            <img src="images/beauty.webp" alt="categories">
                            <p>Beauty</p>
                        </div>
                        <div class="categories">
                            <img src="images/beauty.webp" alt="categories">
                            <p>Beauty</p>
                        </div>
                        <div class="categories">
                            <img src="images/beauty.webp" alt="categories">
                            <p>Beauty</p>
                        </div>
                        <div class="categories">
                            <img src="images/beauty.webp" alt="categories">
                            <p>Beauty</p>
                        </div>
                        <div class="categories">
                            <img src="images/beauty.webp" alt="categories">
                            <p>Beauty</p>
                        </div>
                        <div class="categories">
                            <img src="images/beauty.webp" alt="categories">
                            <p>Beauty</p>
                        </div>
                        <div class="categories">
                            <img src="images/beauty.webp" alt="categories">
                            <p>Beauty</p>
                        </div>
                        <div class="categories">
                            <img src="images/beauty.webp" alt="categories">
                            <p>Beauty</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- -----srarch-Bar list-popup----- -->
<div class="modal" id="mylist">
    <div class="modal-dialog modal-md">
        <div class="modal-content listPopup_cnt">
            <div class="modal-header Shopping">
                <h2 class="h3">Shopping List</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="shopping-list-subtext modal-body myModelBody">
                <p class="subtext">Search multiple products by entering
                    your shopping list below.</p>
                <div class="wrapper">
                    <label class="field-label subtext" for="shopping-list">Enter
                        Item List</label>
                    <textarea id="rel_search_val" name="shopping-list" type="textarea" rows="1"
                        placeholder="e.g. Milk, Bread, Fruit" class="input-component custom-scrollbar"></textarea>
                </div>
                <p class="subtext">Add comma as separatror</p>
            </div>

            <div class="modal-footer myModelFooter">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 listPopup_btn listPopup_Close_btn">
                            <button class="btn Close_btn" data-bs-dismiss="modal">Close</button>
                        </div>
                        <div class="col-md-6 listPopup_btn">
                            <button class="btn btn-primary Submit_btn" type="submit">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'include/footer.php'?>