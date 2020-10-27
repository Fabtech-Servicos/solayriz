<!--Start breadcrumb area-->
<section class="breadcrumb-area" style="background-image: url(/images/resources/breadcrumb-bg.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content clearfix">
                    <div class="title float-left">
                        <h1>Conheça a Solayriz</h1>
                    </div>
                    <div class="breadcrumb-menu float-right">
                        <ul class="clearfix">
                            <li><a href="index.html">Início</a></li>
                            <li class="active">Sobre</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->

<!--Start WhoWe Are Area-->
<section class="whowe-are-area">
    <div class="container">
        <div class="sec-title text-center">
            <p>Solayriz Slz Engenharia</p>
            <div class="title"><?= $about->title ?></div>
            <div class="border-box center"></div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="company-info-box">
                    <p><?= $about->description ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="whowe-are-image">
                    <img class="img-about" src="<?= "/files/About/photo/" . $about->photo ?>" alt="Awesome Image">
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="whowe-are-image">
                    <img class="img-about" src="<?= "/files/About/photo2/" . $about->photo2 ?>" alt="Awesome Image">
                </div>
            </div>
        </div>

        <div class="row whowe-are">

            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="single-whowe-are-box text-center">
                    <!--                    <div class="count-box">02</div>-->
                    <div class="icon">
                        <span class="icon-null-3"></span>
                    </div>
                    <div class="text">
                        <h3>Segurança e Sustentabilidade</h3>
                        <p>Energia sustentável obtida a partir de recursos inesgotáveis</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="single-whowe-are-box text-center">
<!--                    <div class="count-box">01</div>-->
                    <div class="icon">
                        <span class="icon-null-1"></span>
                    </div>
                    <div class="text">
                        <h3>Futuro</h3>
                        <p>Atende às necessidades do presente sem comprometer a capacidade das gerações futuras.</p>
                    </div>
                </div>
            </div>
            <!--End Single Whowe Are Box-->
            <!--Start Single Whowe Are Box-->

            <!--End Single Whowe Are Box-->
            <!--Start Single Whowe Are Box-->
<!--            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">-->
<!--                <div class="single-whowe-are-box text-center">-->
<!--                    <div class="count-box">03</div>-->
<!--                    <div class="icon">-->
<!--                        <span class="icon-career"></span>-->
<!--                    </div>-->
<!--                    <div class="text">-->
<!--                        <h3>Careers and Team</h3>-->
<!--                        <p>Certain circumstances and owing the claims of duty bligations of business it will frequently occur.</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
            <!--End Single Whowe Are Box-->
        </div>
    </div>
</section>
<!--End WhoWe Are Area-->

<!--Stsrt Mission Vision Area-->
<section class="mission-vision-area">
    <div class="container-fluid inner-content">
<!--        <div class="row mar0">-->
<!--            <div class="col-xl-6 pd0">-->
<!--                <div class="video-holder-box">-->
<!--                    <div class="img-holder">-->
<!--                        <img src="/images/resources/video-gallery-bg.jpg" alt="Awesome Image">-->
<!--                        <div class="icon-holder">-->
<!--                            <div class="icon">-->
<!--                                <div class="inner text-center">-->
<!--                                    <a class="html5lightbox wow zoomIn" data-wow-delay="300ms" data-wow-duration="1500ms" title="Solartech Video Gallery" href="https://www.youtube.com/watch?v=VcjBZm-ccPw">-->
<!--                                        <span class="icon-null-4"></span>-->
<!--                                    </a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
            <div class="col-xl-12 pd0">
                <div class="mission-vision-content">
                    <div class="row mar0">
                        <div class="col-xl-4 col-lg-4 col-md-4 pd0">
                            <div class="single-box">
                                <img src="/images/resources/mission.jpg" alt="Awesome Image">
                                <div class="title">
                                    <h3><?= $about->title_mission?></h3>
                                </div>
                                <div class="overlay-content">
                                    <div class="top">
                                        <div class="icon">
                                            <span class="icon-null-5"></span>
                                        </div>
                                        <div class="big-title">m</div>
                                    </div>
                                    <div class="text">
                                        <h3><?= $about->title_mission?></h3>
                                        <p><?= $about->mission?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 pd0">
                            <div class="single-box">
                                <img src="/images/resources/vision.jpg" alt="Awesome Image">
                                <div class="title">
                                    <h3><?= $about->title_vision?></h3>
                                </div>
                                <div class="overlay-content">
                                    <div class="top">
                                        <div class="icon">
                                            <span class="icon-career"></span>
                                        </div>
                                        <div class="big-title">v</div>
                                    </div>
                                    <div class="text">
                                        <h3><?= $about->title_vision?></h3>
                                        <p><?= $about->vision?></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-4 col-md-4 pd0">
                            <div class="single-box">
                                <img src="/images/resources/mission.jpg" alt="Awesome Image">
                                <div class="title">
                                    <h3><?= $about->title_value?></h3>
                                </div>
                                <div class="overlay-content">
                                    <div class="top">
                                        <div class="icon">
                                            <span class="icon-null-1"></span>
                                        </div>
                                        <div class="big-title">v</div>
                                    </div>
                                    <div class="text">
                                        <h3><?= $about->title_value ?></h3>
                                        <p><?= $about->value ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Mission Vision Area-->

<!--Start Choose area-->
<section class="choose-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="why-whoose-content">
                    <div class="sec-title">
                        <p>Solayriz Slz Engenharia</p>
                        <div class="title">Estados Onde<br>Possuímos Atuação</div>
                        <div class="border-box"></div>
                    </div>
                    <div class="inner-content">
                        <p><?= $about->state ?></p>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
              <img src="<?= "/files/About/map/" . $about->map ?>">

            </div>
        </div>
    </div>
</section>
<!--End Choose area-->

<!--Start Fact Counter Area-->
<section class="fact-counter-area" style="background-image:url(/images/parallax-background/fact-counter-bg.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <ul class="fact-counter style2">
                    <li class="single-fact-counter style2 wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1500ms">
                        <div class="count-box">
                            <h1>
                                <i class="flaticon"></i>
<!--                                <span class="timer" data-from="1" data-to="5258" data-speed="5000" data-refresh-interval="50">5258</span>-->
                                <div style="font-size: 54px; color: #fff" class="fa fa-facebook" aria-hidden="true"></div>
                            </h1>
                            <div class="title">
                                <h3>Facebook</h3>
                            </div>
                        </div>
                    </li>
                    <li class="single-fact-counter style2 wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="count-box">
                            <h1>
                                <i class="flaticon"></i>
                                <div style="font-size: 54px; color: #fff" class="fa fa-instagram" aria-hidden="true"></div>
                            </h1>
                            <div class="title">
                                <h3>Instagram</h3>
                            </div>
                        </div>
                    </li>
                    <li class="single-fact-counter style2 wow fadeInLeft" data-wow-delay="500ms" data-wow-duration="1500ms">
                        <div class="count-box">
                            <h1>
                                <i class="flaticon"></i>
                                <div style="font-size: 54px; color: #fff" class="fa fa-whatsapp" aria-hidden="true"></div>
                            </h1>
                            <div class="title">
                                <h3>WhatsApp</h3>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--Start Fact Counter Area-->


<!--Start team area-->
<section class="team-area">
    <div class="container">
        <div class="sec-title text-center">
            <p>SOLAYRIZ SLZ ENGENHARIA</p>
            <div class="title">Projetos Recentes</div>
            <div class="border-box center"></div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="team-carousel owl-carousel owl-theme">
                    <!--Start single item member-->
                    <?php foreach ($proj as $prj): ?>
                        <div class="single-team-member">
                            <div class="img-holder">
                                <img class="prj" src="<?= "/files/Projects/photo/" . $prj->photo ?>" alt="Awesome Image">
                            </div>
                            <div class="name text-center">
                                <h3><?= $prj->name ?></h3>
                            </div>

                            <div class="name text-center overlay-content">
                                <h3><?= $prj->name ?></h3>
                                <ul class="sociallinks">
                                    <div class="btn-box">
                                        <a class="btn-one" href="/projeto/<?= $prj->id ?>"><b>Ver mais</b><span class="icon-null"></span></a>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <!--End single item member-->
                </div>
            </div>
        </div>
    </div>
</section>
<!--End team area-->


<!--Start Brand area-->

<!--End Brand area-->
