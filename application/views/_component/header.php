 <!-- Start Navbar -->
 <nav class="navbar navbar-expand-lg fixed-top sticky mx-auto" id="navbar">
        <div class="container">
            <a href="<?= base_url() ?>" class="navbar-brand me-4">
                <img src="<?= base_url("assets/images/3.png")?>" class="logo-light" alt="" height="55" />
                <img src="<?= base_url("assets/images/2.png")?>" class="logo-dark" alt="" height="55" />
            </a>

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse" id="navbar-collapse-1">
                <ul class="nav navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link sub-menu-item" href="<?= base_url() ?>">Home</a></li>
                    <li class="nav-item"><a class="nav-link sub-menu-item" href="about">About</a></li>
                    <li class="nav-item dropdown parent-menu-item">
                        <a class="nav-link menu-item dropdown-toggle" data-bs-toggle="dropdown"
                            href="javascript:void(0)" role="button" aria-expanded="false">Product</a>
                        <ul class="dropdown-menu border-0">
                            <li class="nav-item">
                                <a class="nav-link sub-menu-item" href="wedding">Photography</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link sub-menu-item" href="wedding">Videography</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link sub-menu-item" href="wedding">Wedding Invitation</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link sub-menu-item" href="wedding">Studio</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link sub-menu-item" href="Portofolio">Portofolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link sub-menu-item" href="contact">Contact</a>
                    </li>
                </ul><!-- end ul -->
            </div>
        </div>
        <!-- end container -->
    </nav>
    <!-- END NAVBAR -->
