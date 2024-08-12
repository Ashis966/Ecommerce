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
                            <li class="nav-item"><a class="nav-link" href=""><i
                                        class="fa-solid fa-crosshairs myIcon"></i></a>
                            </li>
                            <li class="nav-item dropdown navLogo">
                                <a class="navbar-brand nav-link" data-bs-toggle="dropdown" role="button"
                                    aria-expanded="false" href="">
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
                                        <a href="#" class="yumcutLink">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="dashbord">
                        <div class="dashboard d-flex justify-content-between align-items-center pe-4">
                            <div class="h4">Dashboard</div>
                            <div class="dsbrdLite h6">Dashboard</div>
                        </div>
                        <div class="p-3 pt-4 tab-content">
                            <div class="row order tab-pane fade show active d-flex" id="dashbord">
                                <div class="col-md-3">
                                    <div class="card myCard">
                                        <div class="card-header align-items-center myCard_header">Total Order</div>
                                        <div class="card-body body1">
                                            <h4 class="d-flex justify-content-center">14</h4>
                                            <div class="d-flex justify-content-center">
                                                <button type="button" class=" btn button1">view order</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card myCard">
                                        <div class="card-header myCard_header">Total Order</div>
                                        <div class="card-body body2">
                                            <h4 class="d-flex justify-content-center">0</h4>
                                            <div class="d-flex justify-content-center">
                                                <button type="button" class="btn button2">view order</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card myCard">
                                        <div class="card-header myCard_header">cancel Order</div>
                                        <div class="card-body body3">
                                            <h4 class="d-flex justify-content-center">2</h4>
                                            <div class="d-flex justify-content-center">
                                                <button type="button" class="btn button3">view order</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card myCard">
                                        <div class="card-header myCard_header">Earnings</div>
                                        <div class="card-body body4">
                                            <h4 class="d-flex justify-content-center">Rs 15,957.00</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="dextop_banner">
                        <div class="dashboard d-flex justify-content-between align-items-center pe-4">
                            <div class="h4">Add Slider</div>
                            <div class="dsbrdLite h6">Dashboard / Slider</div>
                        </div>
                        <div class="p-3 pt-4 tab-content">
                            <div class="row order tab-pane fade show active d-flex" id="dashbord">
                                <div class="col-md-3">
                                    <div class="card myCard">
                                        <div class="card-header align-items-center myCard_header">Total Order</div>
                                        <div class="card-body body1">
                                            <h4 class="d-flex justify-content-center">14</h4>
                                            <div class="d-flex justify-content-center">
                                                <button type="button" class=" btn button1">view order</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card myCard">
                                        <div class="card-header myCard_header">Total Order</div>
                                        <div class="card-body body2">
                                            <h4 class="d-flex justify-content-center">0</h4>
                                            <div class="d-flex justify-content-center">
                                                <button type="button" class="btn button2">view order</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card myCard">
                                        <div class="card-header myCard_header">cancel Order</div>
                                        <div class="card-body body3">
                                            <h4 class="d-flex justify-content-center">2</h4>
                                            <div class="d-flex justify-content-center">
                                                <button type="button" class="btn button3">view order</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card myCard">
                                        <div class="card-header myCard_header">Earnings</div>
                                        <div class="card-body body4">
                                            <h4 class="d-flex justify-content-center">Rs 15,957.00</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="mobile_banner">
                        <div class="dashboard d-flex justify-content-between align-items-center pe-4">
                            <div class="h4">Add Slider</div>
                            <div class="dsbrdLite h6">Dashboard / Slider</div>
                        </div>
                        <div class="p-3 pt-4 tab-content">
                            <div class="row order tab-pane fade show active d-flex" id="dashbord">
                                <div class="col-md-3">
                                    <div class="card myCard">
                                        <div class="card-header align-items-center myCard_header">Total Order</div>
                                        <div class="card-body body1">
                                            <h4 class="d-flex justify-content-center">14</h4>
                                            <div class="d-flex justify-content-center">
                                                <button type="button" class=" btn button1">view order</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card myCard">
                                        <div class="card-header myCard_header">Total Order</div>
                                        <div class="card-body body2">
                                            <h4 class="d-flex justify-content-center">0</h4>
                                            <div class="d-flex justify-content-center">
                                                <button type="button" class="btn button2">view order</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card myCard">
                                        <div class="card-header myCard_header">cancel Order</div>
                                        <div class="card-body body3">
                                            <h4 class="d-flex justify-content-center">2</h4>
                                            <div class="d-flex justify-content-center">
                                                <button type="button" class="btn button3">view order</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card myCard">
                                        <div class="card-header myCard_header">Earnings</div>
                                        <div class="card-body body4">
                                            <h4 class="d-flex justify-content-center">Rs 15,957.00</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="testimonials_banar">
                        <div class="dashboard d-flex justify-content-between align-items-center pe-4">
                            <div class="h4">Add Testimonials</div>
                            <div class="dsbrdLite h6">Dashboard / Testimonials</div>
                        </div>
                        <div class="p-3 pt-4 tab-content">
                            <div class="row order tab-pane fade show active d-flex" id="dashbord">
                                <div class="col-md-3">
                                    <div class="card myCard">
                                        <div class="card-header align-items-center myCard_header">Total Order</div>
                                        <div class="card-body body1">
                                            <h4 class="d-flex justify-content-center">14</h4>
                                            <div class="d-flex justify-content-center">
                                                <button type="button" class=" btn button1">view order</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card myCard">
                                        <div class="card-header myCard_header">Total Order</div>
                                        <div class="card-body body2">
                                            <h4 class="d-flex justify-content-center">0</h4>
                                            <div class="d-flex justify-content-center">
                                                <button type="button" class="btn button2">view order</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card myCard">
                                        <div class="card-header myCard_header">cancel Order</div>
                                        <div class="card-body body3">
                                            <h4 class="d-flex justify-content-center">2</h4>
                                            <div class="d-flex justify-content-center">
                                                <button type="button" class="btn button3">view order</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card myCard">
                                        <div class="card-header myCard_header">Earnings</div>
                                        <div class="card-body body4">
                                            <h4 class="d-flex justify-content-center">Rs 15,957.00</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="location_banar">
                        <div class="dashboard d-flex justify-content-between align-items-center pe-4">
                            <div class="h4">Add location</div>
                            <div class="dsbrdLite h6">Dashboard / location</div>
                        </div>
                        <div class="p-3 pt-4 tab-content">
                            <div class="row order tab-pane fade show active d-flex" id="dashbord">
                                <div class="col-md-3">
                                    <div class="card myCard">
                                        <div class="card-header align-items-center myCard_header">Total Order</div>
                                        <div class="card-body body1">
                                            <h4 class="d-flex justify-content-center">14</h4>
                                            <div class="d-flex justify-content-center">
                                                <button type="button" class=" btn button1">view order</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card myCard">
                                        <div class="card-header myCard_header">Total Order</div>
                                        <div class="card-body body2">
                                            <h4 class="d-flex justify-content-center">0</h4>
                                            <div class="d-flex justify-content-center">
                                                <button type="button" class="btn button2">view order</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card myCard">
                                        <div class="card-header myCard_header">cancel Order</div>
                                        <div class="card-body body3">
                                            <h4 class="d-flex justify-content-center">2</h4>
                                            <div class="d-flex justify-content-center">
                                                <button type="button" class="btn button3">view order</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card myCard">
                                        <div class="card-header myCard_header">Earnings</div>
                                        <div class="card-body body4">
                                            <h4 class="d-flex justify-content-center">Rs 15,957.00</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Offer_banar">
                        <div class="dashboard d-flex justify-content-between align-items-center pe-4">
                            <div class="h4">Add Offer banner</div>
                            <div class="dsbrdLite h6">Dashboard / Offer banner</div>
                        </div>
                        <div class="p-3 pt-4 tab-content">
                            <div class="row order tab-pane fade show active d-flex" id="dashbord">
                                <div class="col-md-3">
                                    <div class="card myCard">
                                        <div class="card-header align-items-center myCard_header">Total Order</div>
                                        <div class="card-body body1">
                                            <h4 class="d-flex justify-content-center">14</h4>
                                            <div class="d-flex justify-content-center">
                                                <button type="button" class=" btn button1">view order</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card myCard">
                                        <div class="card-header myCard_header">Total Order</div>
                                        <div class="card-body body2">
                                            <h4 class="d-flex justify-content-center">0</h4>
                                            <div class="d-flex justify-content-center">
                                                <button type="button" class="btn button2">view order</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card myCard">
                                        <div class="card-header myCard_header">cancel Order</div>
                                        <div class="card-body body3">
                                            <h4 class="d-flex justify-content-center">2</h4>
                                            <div class="d-flex justify-content-center">
                                                <button type="button" class="btn button3">view order</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card myCard">
                                        <div class="card-header myCard_header">Earnings</div>
                                        <div class="card-body body4">
                                            <h4 class="d-flex justify-content-center">Rs 15,957.00</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Video_banar">
                        <div class="dashboard d-flex justify-content-between align-items-center pe-4">
                            <div class="h4">Add Video</div>
                            <div class="dsbrdLite h6">Dashboard / Video</div>
                        </div>
                        <div class="p-3 pt-4 tab-content">
                            <div class="row order tab-pane fade show active d-flex" id="dashbord">
                                <div class="col-md-3">
                                    <div class="card myCard">
                                        <div class="card-header align-items-center myCard_header">Total Order</div>
                                        <div class="card-body body1">
                                            <h4 class="d-flex justify-content-center">14</h4>
                                            <div class="d-flex justify-content-center">
                                                <button type="button" class=" btn button1">view order</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card myCard">
                                        <div class="card-header myCard_header">Total Order</div>
                                        <div class="card-body body2">
                                            <h4 class="d-flex justify-content-center">0</h4>
                                            <div class="d-flex justify-content-center">
                                                <button type="button" class="btn button2">view order</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card myCard">
                                        <div class="card-header myCard_header">cancel Order</div>
                                        <div class="card-body body3">
                                            <h4 class="d-flex justify-content-center">2</h4>
                                            <div class="d-flex justify-content-center">
                                                <button type="button" class="btn button3">view order</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card myCard">
                                        <div class="card-header myCard_header">Earnings</div>
                                        <div class="card-body body4">
                                            <h4 class="d-flex justify-content-center">Rs 15,957.00</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>


    <!-- <footer>
        <p>2020 - 2020 © Ifotechsys.</p>
        </footer> -->
    </div>
<?php include 'footer.php' ?>