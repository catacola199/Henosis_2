
<?php $this->load->view('_component/head') ?>
    <!-- shuffle portfolio -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img src="<?= base_url("assets/images/bg.jpg")?>" alt="about-img" class="img-fluid img-thumbnail mt-5">
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-9 text-center">
                    <h2 class="text-dark fw-light lh-base mt-2">Henosis </h2>
                    <p class="text-muted fs-16">Henosis (Ancient Greek: ἕνωσις) is the classical Greek word for mystical 
                        "oneness", "union" or "unity". In Neoplatonism, henosis is unification with what is fundamental 
                        in reality: the One (Τὸ Ἕν), the Source, or Monad.</p>
                  
                </div>
            </div>
            <!--end row-->

            <div id="grid" class="row">
                <div class="col-lg-4 col-md-6 col-12 spacing picture-item" >
                    <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
                        <div class="card-body p-0">
                            <a title="">
                                <img src="<?= base_url("assets/images/works/2.png")?>" class="img-fluid rounded" alt="work-image" />
                            </a>
                        </div>
                        <!-- end cardbody -->
                    </div>
                    <!-- end card -->
                </div>
                <!--end col-->

                <div class="col-lg-8 col-md-6 col-12 spacing picture-item" data-groups='["designing"]'>
                    <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
                        <div class="card-body p-0">
                            <a href="javascript:void(0)" data-src="images/works/img-2.jpg" data-gallery="myGal"
                                class="d-inline-block" title="">
                                <video controls autoplay muted width="100%" height="auto">
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

                <div class="col-lg-4 col-md-6 col-12 spacing picture-item" data-groups='["photography"]'>
                    <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
                        <div class="card-body p-0">
                            <a href="javascript:void(0)" data-src="<?= base_url("assets/images/works/3.png")?>" data-gallery="myGal"
                                class="d-inline-block" title="">
                                <img src="<?= base_url("assets/images/works/3.png")?>" class="img-fluid rounded" alt="work-image" />
                            </a>
                            
                        </div>
                        <!-- end cardbody -->
                    </div>
                    <!-- end card -->
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 col-12 spacing picture-item" data-groups='["development"]'>
                    <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
                        <div class="card-body p-0">
                            <a href="javascript:void(0)" data-src="<?= base_url("assets/images/works/4.png")?>" data-gallery="myGal"
                                class="d-inline-block" title="">
                                <img src="<?= base_url("assets/images/works/4.png")?>" class="img-fluid rounded" alt="work-image" />
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
                        <a href="work.html" class="btn btn-primary me-2">More Works <i class="mdi mdi-arrow-right ms-1"></i></a>
                        <a href="contact.html" class="btn btn-primary">Get In Touch <i class="mdi mdi-lifebuoy ms-1"></i></a>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div>
    </section>

<?php $this->load->view('_component/footer') ?>