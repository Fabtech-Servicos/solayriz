<!--Start footer area-->
<footer class="footer-area">
    <div class="scroll-to-top scroll-to-target wow slideInRight" data-wow-delay="300ms" data-wow-duration="1500ms" data-target="html">
        <span class="fa fa-angle-up"></span>
    </div>
    <div class="container">
        <div class="row">
            <!--Start single footer widget-->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="single-footer-widget marbtm50">
                    <div class="contact-info-box">
                        <div class="footer-logo">
                            <a href="/" style="background: #fff; padding: 4px">
                                <img style="width: 211px" src="/images/resources/solayris.png" alt="Awesome Logo">
                            </a>
                        </div>
                        <div class="text">
                            <p> Av. Luciano Monteiro Sobral, 300 - Luzia <br> Aracaju - SE, 49048-000</p>
                            <ul>
                                <li>contato@solayrizengenharia</li>
                                <li>De segunda a sexta das 07:00hs as 18:00hs</li>
                            </ul>
                            <a class="btn-two" href="https://www.google.com/search?sxsrf=ALeKk01T0JzbY7xQsqF42mYek1jdEj1ktg:1603936758131&ei=6yGaX_DuM6TD5OUPmoClgA4&q=solayriz%20engenharia%20endere%C3%A7o&oq=solayriz+engenharia+endere%C3%A7o&gs_lcp=CgZwc3ktYWIQAzIECCMQJ1CeRlieRmD-R2gAcAB4AIABvgGIAfEGkgEDMC41mAEAoAEBqgEHZ3dzLXdpesABAQ&sclient=psy-ab&ved=2ahUKEwi5m9eF2tjsAhVzIbkGHQifAEkQvS4wAHoECAUQGw&uact=5&npsic=0&rflfq=1&rlha=0&rllag=-10933671,-37066617,1234&tbm=lcl&rldimm=3826243102577998974&lqi=Ch1zb2xheXJpeiBlbmdlbmhhcmlhIGVuZGVyZcOnbyICSAFaKgoTc29sYXlyaXogZW5nZW5oYXJpYSITc29sYXlyaXogZW5nZW5oYXJpYQ&rldoc=1&tbs=lrf:!1m4!1u3!2m2!3m1!1e1!2m1!1e3!3sIAE,lf:1,lf_ui:2&rlst=f#rlfi=hd:;si:3826243102577998974,l,Ch1zb2xheXJpeiBlbmdlbmhhcmlhIGVuZGVyZcOnbyICSAFaKgoTc29sYXlyaXogZW5nZW5oYXJpYSITc29sYXlyaXogZW5nZW5oYXJpYQ;mv:[[-10.9250926,-37.057432399999996],[-10.942250399999999,-37.0758025]];tbs:lrf:!1m4!1u3!2m2!3m1!1e1!2m1!1e3!3sIAE,lf:1,lf_ui:2" target="_blank">Mapa<span class="icon-null"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End single footer widget-->
            <!--Start single footer widget-->
            <div class="col-xl-4 col-lg-3 col-md-6 col-sm-12">
                <div class="single-footer-widget marbtm50">
                    <div class="title">
                        <h3>Links</h3>
                    </div>
                    <div class="usefull-links">
                        <div class="row">
                            <div class="col-xl-6">
                                <ul>
                                    <li><a href="/">Início</a></li>
                                    <li><a href="/sobre/5">Solayriz</a></li>
                                    <li><a href="/energia-solar/8">Energia Solar</a></li>
                                    <li><a href="como-funciona/4">Como Funciona</a></li>

                                </ul>
                            </div>
                            <div class="col-xl-6">
                                <ul>
                                    <li><a href="/projetos">Projetos</a></li>
                                    <li><a href="/posts">Blog</a></li>
                                    <li><a href="/contato">Contato</a></li>
                                    <li><a href="/#orc">Orçamento</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End single footer widget-->
            <!--Start single footer widget-->
            <div class="col-xl-4 col-lg-5 col-md-12 col-sm-12">
                <div class="single-footer-widget">
                    <div class="title">
                        <h3>Últimos Projetos</h3>
                    </div>
                    <ul class="case-studies">
                        <?php foreach ($projetos as $projeto): ?>
                        <li>
                            <div class="img-holder">
                                <img  style="width: 110px; height: 95px"  src="<?= "/files/Projects/photo/" . $projeto->photo ?>" alt="Awesome Image">
                                <div class="overlay-style-one">
                                    <div class="box">
                                        <div class="content">
                                            <a href="/projeto/<?= $projeto->id  ?>"><span class="icon-plus"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <!--End single footer widget-->
        </div>
    </div>
</footer>
<!--End footer area-->

<!--Start footer bottom area-->
<section class="footer-bottom-area">
    <div class="container inner-content">
        <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                <div class="copyright-text">
                    <p><span style="color: #3398fd">Solayriz</span> © <?= date('Y') ?>. Todos os direitos reservados</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="call-us-now">
                    <div class="icon">
                        <span class="icon-call"></span>
                    </div>
                    <div class="title">
                        <span>Qualquer pergunta? Ligue para nós</span>
                        <h3>(+55) 79-988668644</h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-3 col-md-12 col-sm-12">
                <div class="footer-social-links float-right">
                    <ul class="sociallinks-style-two fix">
                        <li>
                            <a href="https://www.facebook.com/solayriz.slzengenharia.3" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/solayriz/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>
<!--End footer bottom area-->

</div>



<script src="/js/site/jquery.js"></script>
<script src="/js/site/wow.js"></script>
<script src="/js/site/bootstrap.bundle.min.js"></script>
<script src="/js/site/jquery.fancybox.js"></script>
<script src="/js/site/jquery.countTo.js"></script>
<script src="/js/site/appear.js"></script>
<script src="/js/site/owl.js"></script>
<script src="/js/site/validation.js"></script>
<script src="/js/site/jquery.mixitup.min.js"></script>
<script src="/js/site/isotope.js"></script>
<script src="/js/site/jquery.paroller.min.js"></script>
<script src="/js/site/jquery.easing.min.js"></script>
<script src="/js/site/jquery.enllax.min.js"></script>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyB2uu6KHbLc_y7fyAVA4dpqSVM4w9ZnnUw"></script>
<script src="/js/site/gmaps.js"></script>
<script src="/js/site/map-helper.js"></script>

<script src="/assets/language-switcher/jquery.polyglot.language.switcher.js"></script>
<script src="/assets/timepicker/timePicker.js"></script>
<script src="/js/site/bootstrap-select.min.js"></script>
<script src="/assets/html5lightbox/html5lightbox.js"></script>

<!--Revolution Slider-->
<script src="/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="/plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="/plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="/plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="/plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="/plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="/plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="/js/site/main-slider-script.js"></script>

<!-- thm custom script -->
<script src="/js/site/custom.js"></script>

<?php echo $this->fetch('scriptBottom'); ?>

</html>




