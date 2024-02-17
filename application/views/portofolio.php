<?php $this->load->view('_component/head') ?>

    <!-- Start Title -->
    <section>
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-9">
                    <div class="page-title">
                        <h2 class="text-dark fw-light lh-base mt-5">See Our<span class="fw-medium title"> Works</span>
                        </h2>
                        <p class="fs-16 text-muted mb-0">Aenean sollicitudin, lorem quis bibendum auctor, nisi elit
                            consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor Aenean
                            sollicitudin, adipisicing elit sed lorem quis bibendum auctor.</p>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- End Title -->

    <!-- shuffle portfolio -->
    <section class="section">
        <div class="container">
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
                <div class="col-lg-4 col-md-6 col-12 spacing picture-item" >
                    <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
                        <div class="card-body p-0">
                            <a title="">
                                <img src="<?= base_url("assets/images/works/3.png")?>" class="img-fluid rounded" alt="work-image" />
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
                            <a title="">
                                <img src="<?= base_url("assets/images/works/4.png")?>" class="img-fluid rounded" alt="work-image" />
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
                            <a href="javascript:void(0)" data-src="<?= base_url("assets/images/works/5.png")?>" data-gallery="myGal"
                                class="d-inline-block" title="">
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
                            <a href="javascript:void(0)" class="d-inline-block" title="">
                                <img src="<?= base_url("assets/images/works/6.png")?>" class="img-fluid rounded" alt="work-image" />
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
                                <img src="<?= base_url("assets/images/works/7.png")?>" class="img-fluid rounded" alt="work-image" />
                            </a>
                            
                        </div>
                        <!-- end cardbody -->
                    </div>
                    <!-- end card -->
                </div>
                <!--end col-->
              
            </div>
            <!--end row-->
           
        </div>
    </section>


    <?php $this->load->view('_component/footer') ?>