<!-- FOOTER -->
<footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <a href="<?= base_url("")?>" class="footer-logo d-inline-block">
                            <img src="<?= base_url("assets/images/3.png")?>" class="mx-auto logo-dark" alt="" height="80" />
                        </a>

                        <ul class="list-inline social-circle mt-3">
                            <li class="list-inline-item"><a target="_blank" href="https://www.facebook.com/Delviro.andika.furqon/"> <i class="mdi mdi-facebook"></i>
                                </a></li>
                            <li class="list-inline-item"><a target="_blank" href="https://www.youtube.com/@HenosisStudio"> <i class="mdi mdi-youtube"></i>
                                </a></li>
                            <li class="list-inline-item"><a target="_blank" href="https://www.instagram.com/furqondelviroandika"> <i class="mdi mdi-instagram"></i>
                                </a></li>
                        </ul>
                        <!-- end ul -->
                        <div class="text-white-50 pb-4">
                        <a href="https://api.whatsapp.com/send?phone=081213561966" target="_blank">Send Message</a><br>
                            <script>document.write(new Date().getFullYear())</script> &copy; Henosis by <a
                                class="text-white-50 text-decoration-underline" target="_blank" href="https://www.instagram.com/furqondelviroandika">Catacola</a>
                        </div>

                    </div>
                </div><!-- end col -->
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
    <script src="<?= base_url("assets/js/jquery.js") ?>"></script>
    <script src="<?= base_url("assets/js/shuffle.min.js") ?>"></script>
    <script src="<?= base_url("assets/js/bootstrap.bundle.min.js") ?>"></script>
    <script src="<?= base_url("assets/js/gallery.init.js") ?>"></script>
    <script src="<?= base_url("assets/js/feather.js") ?>"></script>
    <script src="<?= base_url("assets/js/app.js") ?>"></script>
    
 
   
</body>

</html>