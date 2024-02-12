<?php $this->load->view('_component/head') ?>


   

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img src="<?= base_url("assets/images/bg.jpg")?>" alt="about-img" class="img-fluid img-thumbnail mt-5">
                </div>
            </div>
            <div class="row text-center">
                <div class="col-lg-12 mt-5">
                    <h4 class="fw-semibold border-bottom d-inline-block text-dark pb-3">Meet Our Team</h4>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-lg-3 mt-4">
                    <div class="team-box">
                        <a href="work-detail.html">
                            <img src="<?= base_url("assets/images/team/jo.jpg")?>" class="img-fluid rounded" alt="">
                        </a>
                        <h5 class="text-dark mt-3 fs-16">Ray Jhordan</h5>
                        <p class="text-muted">CEO/Founder</p>
                    </div>
                </div>
                <div class="col-lg-3 mt-4">
                    <div class="team-box">                        
                        <a href="work-detail.html">
                            <img src="<?= base_url("assets/images/team/delviro.jpg")?>" class="img-fluid rounded" alt="">
                        </a>
                        <h5 class="text-dark mt-3 fs-16">Delviro Andika F</h5>
                        <p class="text-muted">CTO/Co-Founder</p>
                    </div>
                </div>
                <div class="col-lg-3 mt-4">
                    <div class="team-box">
                        <a href="work-detail.html">
                            <img src="<?= base_url("assets/images/team/pencot.jpg")?>" class="img-fluid rounded" alt="">
                        </a>
                        <h5 class="text-dark mt-3 fs-16">Dwi Arya Prasetyo</h5>
                        <p class="text-muted">CEO/Founder</p>
                    </div>
                </div>
            </div>

        </div> <!-- end container -->
    </section>




    <!-- start brand-logo -->
    <section class="client-section section mt-3">
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

    <?php $this->load->view('_component/footer') ?>