<?php $this->load->view('_component/head') ?>

    <!-- Start Title -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <h2 class="text-dark fw-light lh-base mt-5">Let's Keep In <span class="title fw-medium">Touch</span>
                    </h2>
                    <p class="fs-16 text-muted mb-0">Aenean sollicitudin, lorem quis bibendum auctor, nisi elit
                        consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor Aenean
                        sollicitudin, adipisicing elit sed lorem quis bibendum auctor.</p>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- End Title -->

    <section class="sm-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mt-5">
                    <div>
                        <h5 class="text-muted fw-medium fs-14">Email Address</h5>
                        <p class="text-dark fs-16">admin@henosisstudio.com</p>
                    </div>
                    <div class="mt-4">
                        <h5 class="text-muted fw-medium fs-14">Telephone</h5>
                        <p class="text-dark fs-16">+62 8121 35619 66</p>
                    </div>
                    <div class="mt-4">
                        <h5 class="text-muted fw-medium fs-14">Address</h5>
                        <p class="text-dark fs-16">Bekasi, <br />Indonesia</p>
                    </div>
                </div>
                <div class="col-lg-8 mt-5">
                    <form method="post" name="myForm" onsubmit="return validateForm()">
                        <span id="error-msg"></span>
                        <div class="row g-3">
                            <div class="col-lg-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="name" placeholder="Your name" />
                                    <label class="text-muted" for="name">Your name</label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" placeholder="Your email" id="email" />
                                    <label class="text-muted" for="email">Email address</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" placeholder="Subject" id="subject" />
                                    <label class="text-muted" for="subject">Subject</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" placeholder="Your Message...." style="height: 100px;"
                                        id="comments"></textarea>
                                    <label class="text-muted" for="comments">Your message</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary rounded"
                                    value="Send message" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>


        </div> <!-- end container -->
    </section>

    <!-- start brand-logo -->
    <section class="client-section section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h4 class="fw-semibold border-bottom d-inline-block text-dark pb-3">Trusted by Thousands</h4>
                </div>
            </div>

            <div class="row justify-content-between">
                <div class="col-md-auto col-12 mt-3 py-lg-0 py-3">
                    <div class="client-box">
                        <img src="<?= base_url("assets/images/brand/brand-1.png")?>" class="mx-auto d-block img-fluid" alt="client-logo" />
                    </div>
                </div>
                <div class="col-md-auto col-12 mt-3 py-lg-0 py-3">
                    <div class="client-box">
                        <img src="<?= base_url("assets/images/brand/brand-2.png")?>" class="mx-auto d-block img-fluid" alt="client-logo" />
                    </div>
                </div>
                <div class="col-md-auto col-12 mt-3 py-lg-0 py-3">
                    <div class="client-box">
                        <img src="<?= base_url("assets/images/brand/brand-3.png")?>" class="mx-auto d-block img-fluid" alt="client-logo" />
                    </div>
                </div>
                <div class="col-md-auto col-12 mt-3 py-lg-0 py-3">
                    <div class="client-box">
                        <img src="<?= base_url("assets/images/brand/brand-4.png")?>" class="mx-auto d-block img-fluid" alt="client-logo" />
                    </div>
                </div>
                <div class="col-md-auto col-12 mt-3 py-lg-0 py-3">
                    <div class="client-box">
                        <img src="<?= base_url("assets/images/brand/brand-5.png")?>" class="mx-auto d-block img-fluid" alt="client-logo" />
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end brand-logo -->

    <?php $this->load->view('_component/footer') ?>