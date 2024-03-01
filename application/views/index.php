
<?php $this->load->view('_component/head') ?>
    <!-- shuffle portfolio -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img src="<?= base_url("assets/images/henosis.png")?>" alt="about-img" class="img-fluid img-thumbnail mt-5">
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-9 text-center">
                    <h5 class="text-dark fw-light lh-base mt-3">Henosis (Ancient Greek: ἕνωσις) means
                    "oneness".</h5>

                    <p class="text-muted fs-13">What if God's main purpose for your connection isn't solely your happiness, but your holiness?<br>
                    What if your bond isn't just about you and your partner, but about your journey with God?
                    </p>
                    <p class="text-muted fs-13"></p>
                    <p class="text-muted fs-13">Beginning with the realization that the aim of a relationship extends beyond individual joy.</p>
                    <p class="text-muted fs-13">We welcome you to explore how marriage can serve as a pathway for spiritual growth and deepen your 
                        devotion to God, ultimately shaping you to reflect His divine character more profoundly.</p>
                  
                </div>
            </div>
            <!--end row-->

            <div id="grid" class="row">
                <div class="col-lg-4 col-md-6 col-12 spacing picture-item" >
                    <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
                        <div class="card-body p-0">
                            <a title="">
                                <img src="<?= base_url("assets/images/works/8.png")?>" class="img-fluid rounded" alt="work-image" />
                            </a>
                        </div>
                        <!-- end cardbody -->
                    </div>
                    <!-- end card -->
                </div>
                <!--end col-->

                <div class="col-lg-8 col-md-6 col-12 spacing picture-item">
                    <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
                        <div class="card-body p-0">
                            <a href="javascript:void(0)" data-src="images/works/img-2.jpg" data-gallery="myGal"
                                class="d-inline-block" title="">
                                <video controls loop autoplay muted width="100%" height="auto">
                                    <source src="<?= base_url("assets/images/teaser.mp4")?>" type="video/mp4" >
                                    <p>Sorry, your broswer doesn't support embedded videos.</p>
                                </video>
                            </a>
                            
                        </div>
                        <!-- end cardbody -->
                    </div>
                    <!-- end card -->
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 col-12 spacing picture-item" >
                    <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
                        <div class="card-body p-0">
                            <a href="javascript:void(0)" data-src="<?= base_url("assets/images/works/9.png")?>" data-gallery="myGal"
                                class="d-inline-block" title="">
                                <img src="<?= base_url("assets/images/works/9.png")?>" class="img-fluid rounded" alt="work-image" />
                            </a>
                            
                        </div>
                        <!-- end cardbody -->
                    </div>
                    <!-- end card -->
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 col-12 spacing picture-item" data-groups='["branding"]'>
                    <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
                        <div class="card-body p-0">
                            <a href="javascript:void(0)" class="d-inline-block" title="">
                                <img src="<?= base_url("assets/images/works/5.png")?>" class="img-fluid rounded" alt="work-image" />
                            </a>
                            
                        </div>
                        <!-- end cardbody -->
                    </div>
                    <!-- end card -->
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 col-12 spacing picture-item" data-groups='["branding"]'>
                    <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
                        <div class="card-body p-0">
                            <a href="javascript:void(0)" data-src="images/works/img-6.jpg" data-gallery="myGal"
                                class="d-inline-block" title="">
                                <img src="<?= base_url("assets/images/works/6.png")?>" class="img-fluid rounded" alt="work-image" />
                            </a>
                            
                        </div>
                        <!-- end cardbody -->
                    </div>
                    <!-- end card -->
                </div>
                <!--end col-->
              
            </div>
            <!--end row-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center mt-5">
                        <a href="work.html" class="btn btn-primary me-2">View All Portofolio<i class="mdi mdi-arrow-right ms-1"></i></a>
                        
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->

            
        </div>
    </section>
     <!-- Start Title -->
     <section class="hero position-relative overflow-hidden align-items-center" id="home">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 text-center">

                    
                </div>
            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- End Title -->

<?php $this->load->view('_component/footer') ?>