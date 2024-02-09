<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Sozia - Responsive Minimal Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Premium Bootstrap 5 Landing Page Template" />
    <meta name="keywords" content="bootstrap 5, premium, marketing, multipurpose" />
    <meta name="author" content="Themesdesign" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" />

    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/materialdesignicons.min.css" />
    <!-- Pe 7 icon Css-->
    <link rel="stylesheet" type="text/css" href="css/pe-icon-7-stroke.css" />

    <!-- custom Css -->
    <link rel="stylesheet" id="app-css" type="text/css" href="css/style.css" />

    <!-- colors -->
    <link href="css/colors/default.css" rel="stylesheet" type="text/css" id="color-opt" />
</head>

<body data-bs-target=".navbar" data-bs-offset="110">
    <!-- light-dark mode button -->
    <a href="javascript: void(0);" id="mode" data-class="light" class="text-white rounded-end mode-btn"
        onclick="changeMode(event)">
        <i class="mode-dark mx-auto" data-feather="moon"></i>
        <i class="bx-spin mode-light" data-feather="sun"></i>
    </a>
    <!-- Start Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top sticky mx-auto" id="navbar">
        <div class="container">
            <a href="index.html" class="navbar-brand me-4">
                <img src="images/logo-light.png" class="logo-light" alt="" height="22" />
                <img src="images/logo-dark.png" class="logo-dark" alt="" height="22" />
            </a>

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse" id="navbar-collapse-1">
                <ul class="nav navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link sub-menu-item" href="index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link sub-menu-item" href="about.html">About</a></li>
                    <li class="nav-item"><a class="nav-link sub-menu-item" href="services.html">Services</a></li>
                    <li class="nav-item dropdown parent-menu-item">
                        <a class="nav-link menu-item dropdown-toggle" data-bs-toggle="dropdown"
                            href="javascript:void(0)" role="button" aria-expanded="false">Product</a>
                        <ul class="dropdown-menu border-0">
                            <li class="nav-item">
                                <a class="nav-link sub-menu-item" href="products.html">Photography</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link sub-menu-item" href="product-list.html">Videography</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link sub-menu-item" href="product-detail.html">Wedding Invitation</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link sub-menu-item" href="cart.html">Studio</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown parent-menu-item">
                        <a class="nav-link menu-item dropdown-toggle" data-bs-toggle="dropdown"
                            href="javascript:void(0)" role="button" aria-expanded="false">Portfolio</a>
                        <ul class="dropdown-menu border-0">
                            <li class="nav-item">
                                <a class="nav-link sub-menu-item" href="work.html">Work</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link sub-menu-item" href="work-detail.html">Work Detail</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown parent-menu-item">
                        <a class="nav-link menu-item dropdown-toggle" data-bs-toggle="dropdown"
                            href="javascript:void(0)" role="button" aria-expanded="false">Blog</a>
                        <ul class="dropdown-menu border-0">
                            <li class="nav-item">
                                <a class="nav-link sub-menu-item" href="blog-listing.html">Blog Listing</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link sub-menu-item" href="blog-grid.html">Blog Grid</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link sub-menu-item" href="single-post.html">Single Post</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link sub-menu-item" href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END NAVBAR -->


    <!-- Start Title -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <h2 class="text-dark fw-light lh-base mt-5">We provide a absolute list of <span
                            class="fw-medium title">Superior</span> digital services.</h2>
                    <p class="fs-16 text-muted mb-0">Aenean sollicitudin, lorem quis bibendum auctor, nisi elit
                        consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor Aenean
                        sollicitudin, adipisicing elit sed lorem quis bibendum auctor.</p>
                </div>
            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- End Title -->


    <section class="mt-5">
        <div class="container">

            <div class="row">
                <div class="col-lg-4">
                    <div class="service-box">
                        <div class="service-icon text-primary">
                            <i class="pe-7s-leaf"></i>
                        </div>
                        <h4 class="text-uppercase text-dark fw-medium fs-16 mt-4">Branding</h4>

                        <p class="text-muted fs-16">Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum
                            dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-box">
                        <div class="service-icon text-primary">
                            <i class="pe-7s-helm"></i>
                        </div>
                        <h4 class="text-uppercase text-dark fw-medium fs-16 mt-4">Highly customizable</h4>

                        <p class="text-muted fs-16">Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum
                            dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="service-box">
                        <div class="service-icon text-primary">
                            <i class="pe-7s-airplay"></i>
                        </div>
                        <h4 class="text-uppercase text-dark fw-medium fs-16 mt-4">Responsive design</h4>

                        <p class="text-muted fs-16">Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum
                            dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="service-box">
                        <div class="service-icon text-primary">
                            <i class="pe-7s-coffee"></i>
                        </div>
                        <h4 class="text-uppercase text-dark fw-medium fs-16 mt-4">User Experience</h4>

                        <p class="text-muted fs-16">Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum
                            dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="service-box">
                        <div class="service-icon text-primary">
                            <i class="pe-7s-rocket"></i>
                        </div>
                        <h4 class="text-uppercase text-dark fw-medium fs-16 mt-4">Optimised for speed</h4>

                        <p class="text-muted fs-16">Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum
                            dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="service-box">
                        <div class="service-icon text-primary">
                            <i class="pe-7s-headphones"></i>
                        </div>
                        <h4 class="text-uppercase text-dark fw-medium fs-16 mt-4">Dedicated support</h4>

                        <p class="text-muted fs-16">Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum
                            dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p>
                    </div>
                </div>
            </div>

        </div> <!-- end container -->
    </section>


    <!-- start brand-logo -->
    <section class="client-section mt-4 section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h4 class="fw-semibold border-bottom d-inline-block text-dark pb-3">Trusted by Thousands</h4>
                </div>
            </div>

            <div class="row justify-content-between">
                <div class="col-md-auto col-12 mt-3 py-lg-0 py-3">
                    <div class="client-box">
                        <img src="images/brand/brand-1.png" class="mx-auto d-block img-fluid" alt="client-logo" />
                    </div>
                </div>
                <div class="col-md-auto col-12 mt-3 py-lg-0 py-3">
                    <div class="client-box">
                        <img src="images/brand/brand-2.png" class="mx-auto d-block img-fluid" alt="client-logo" />
                    </div>
                </div>
                <div class="col-md-auto col-12 mt-3 py-lg-0 py-3">
                    <div class="client-box">
                        <img src="images/brand/brand-3.png" class="mx-auto d-block img-fluid" alt="client-logo" />
                    </div>
                </div>
                <div class="col-md-auto col-12 mt-3 py-lg-0 py-3">
                    <div class="client-box">
                        <img src="images/brand/brand-4.png" class="mx-auto d-block img-fluid" alt="client-logo" />
                    </div>
                </div>
                <div class="col-md-auto col-12 mt-3 py-lg-0 py-3">
                    <div class="client-box">
                        <img src="images/brand/brand-5.png" class="mx-auto d-block img-fluid" alt="client-logo" />
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end brand-logo -->

    <!-- FOOTER -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <a href="index.html" class="footer-logo d-inline-block py-4">
                            <img src="images/logo-light.png" class="mx-auto logo-dark" alt="" height="24" />
                        </a>

                        <ul class="list-inline social-circle mt-3">
                            <li class="list-inline-item"><a href="javascript:void(0)"> <i class="mdi mdi-facebook"></i>
                                </a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"> <i class="mdi mdi-twitter"></i>
                                </a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"> <i
                                        class="mdi mdi-google-plus"></i> </a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"> <i class="mdi mdi-apple"></i>
                                </a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"> <i class="mdi mdi-instagram"></i>
                                </a></li>
                        </ul>

                        <div class="text-white-50 pb-4">
                            <script>document.write(new Date().getFullYear())</script> &copy; Sozia by <a
                                class="text-white-50 text-decoration-underline" target="_blank"
                                href="https://themesdesign.in">Themesdesign</a>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
    </footer>

    <!-- Style switcher -->
    <div id="style-switcher" onclick="toggleSwitcher()">
        <div>
            <h3>Select Your Color</h3>
            <ul class="pattern">
                <li>
                    <a class="color1" href="javascript: void(0);" onclick="setColor('default')"></a>
                </li>
                <li>
                    <a class="color2" href="javascript: void(0);" onclick="setColor('success')"></a>
                </li>
                <li>
                    <a class="color3" href="javascript: void(0);" onclick="setColor('warning')"></a>
                </li>
                <li>
                    <a class="color4" href="javascript: void(0);" onclick="setColor('danger')"></a>
                </li>
                <li>
                    <a class="color5" href="javascript: void(0);" onclick="setColor('info')"></a>
                </li>
                <li>
                    <a class="color6" href="javascript: void(0);" onclick="setColor('amber')"></a>
                </li>
            </ul>
        </div>
        <div class="bottom">
            <a href="javascript: void(0);" class="settings rounded-end text-light"><i data-feather="droplet"></i></a>
        </div>
    </div>
    <!-- end Style switcher -->

    <!-- Javascript -->
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- feather icon -->
    <script src="js/feather.js"></script>

    <!-- app js -->
    <script src="js/app.js"></script>
</body>

</html>