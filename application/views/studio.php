<?php $this->load->view('_component/head') ?>
    <!-- Start Title -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title">
                        <h2 class="text-dark fw-light lh-base mt-5 text-center">STUDIO</h2>
                        
                    </div>
                </div>
            </div>
            <!-- <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 text-center">
                            <div class="card bg-light text-dark2">
                                <div class="card-body">
                                    <p class="card-text">3 JAM</p>
                                    <h2 class="card-text text-dark2">IDR 1.200.000</h2>
                                    <p class="card-text">DP IDR 600.000</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 text-center">
                            <div class="card bg-primary text-dark2">
                                <div class="card-body">
                                    <p class="card-text">6 JAM</p>
                                    <h2 class="card-text text-dark2">IDR 1.650.000</h2>
                                    <p class="card-text">DP IDR 825.000</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 text-center">
                            <div class="card bg-light text-dark2">
                                <div class="card-body">
                                    <p class="card-text">12 JAM</p>
                                    <h2 class="card-text text-dark2">IDR 2.500.000</h2>
                                    <p class="card-text">DP IDR 1.250.000</p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
                
            </div> -->
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
                                <img src="<?= base_url("assets/images/works/1.png")?>" class="img-fluid rounded" alt="work-image" />
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