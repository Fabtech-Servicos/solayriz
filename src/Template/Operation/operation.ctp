
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/images/resources/breadcrumb-bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content clearfix">
                        <div class="title float-left">
                            <h1>About Company</h1>
                        </div>
                        <div class="breadcrumb-menu float-right">
                            <ul class="clearfix">
                                <li><a href="/">Home</a></li>
                                <li class="active">About</li>
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
                <p>Who We Are</p>
                <div class="title"> <?= $operation->title ?></div>
                <div class="border-box center"></div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="company-info-box">
                    <?= $operation->description ?>
                        <h3>Jam P. Sylvester</h3>
                        <span>Managing Director & Chairman</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="whowe-are-image">
                    <img src="<?= "/files/Operation/photo/" . $operation->photo ?>" alt="Awesome Image">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="whowe-are-image">
                        <img src="<?= "/files/Operation/photo2/" . $operation->photo2 ?>" alt="Awesome Image">
                    </div>
                </div>
            </div>
            <div class="row whowe-are">
                <!--Start Single Whowe Are Box-->
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="single-whowe-are-box text-center">
                        <div class="count-box">01</div>
                        <div class="icon">
                            <span class="icon-null-2"></span>
                        </div>
                        <div class="text">
                            <h3>Leadership Principles</h3>
                            <?= $operation->scenario ?>
                        </div>
                    </div>
                </div>
                <!--End Single Whowe Are Box-->
                <!--Start Single Whowe Are Box-->
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="single-whowe-are-box text-center">
                        <div class="count-box">02</div>
                        <div class="icon">
                            <span class="icon-null-3"></span>
                        </div>
                        <div class="text">
                            <h3>Safety & Sustainability</h3>
                            <?= $operation->scenario2 ?>
                        </div>
                    </div>
                </div>
                <!--End Single Whowe Are Box-->
                <!--Start Single Whowe Are Box-->
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="single-whowe-are-box text-center">
                        <div class="count-box">03</div>
                        <div class="icon">
                            <span class="icon-career"></span>
                        </div>
                        <div class="text">
                            <h3>Careers and Team</h3>
                            <?= $operation->scenario3 ?>
                        </div>
                    </div>
                </div>
                <!--End Single Whowe Are Box-->
            </div>
        </div>
    </section>
    <!--End WhoWe Are Area-->

    <!--Stsrt Mission Vision Area-->
    <section class="mission-vision-area">
        <div class="container-fluid inner-content">
            <div class="row mar0">
                <div class="col-xl-6 pd0">
                    <div class="video-holder-box">
                        <div class="img-holder">
                            <img <img src="<?= "/files/Operation/Cover/" . $operation->cover ?>" alt="Awesome Image">
                            <div class="icon-holder">
                                <div class="icon">
                                    <div class="inner text-center">
                                        <a class="html5lightbox wow zoomIn" data-wow-delay="300ms" data-wow-duration="1500ms" title="Solartech Video Gallery" href="<?= $operation->link ?>">
                                            <span class="icon-null-4"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 pd0">
                    <div class="mission-vision-content">
                        <div class="row mar0">
                            <div class="col-xl-6 col-lg-6 col-md-6 pd0">
                                <div class="single-box">
                                    <img src="<?= "/files/Operation/photo3/" . $operation->photo3 ?>" alt="Awesome Image">
                                    <div class="title">
                                        <h3><?= $operation->title_installation  ?></h3>
                                    </div>
                                    <div class="overlay-content">
                                        <div class="top">
                                            <div class="icon">
                                                <span class="icon-null-5"></span>
                                            </div>
                                            <div class="big-title">i</div>
                                        </div>
                                        <div class="text">
                                            <h3><?= $operation->title_installation ?></h3>
                                            <?= $operation->installation ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 pd0">
                                <div class="single-box">
                                    <img src="<?= "/files/Operation/Photo4/" . $operation->photo4 ?>" alt="Awesome Image">
                                    <div class="title">
                                        <h3><?= $operation->title_installation2 ?></h3>
                                    </div>
                                    <div class="overlay-content">
                                        <div class="top">
                                            <div class="icon">
                                                <span class="icon-career"></span>
                                            </div>
                                            <div class="big-title">i</div>
                                        </div>
                                        <div class="text">
                                            <h3><?= $operation->title_installation2 ?></h3>
                                             <?= $operation->installation2 ?>
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
                <div class="col-xl-12 col-lg-12">
                    <div class="why-whoose-content">
                        <div class="sec-title">
                            <p>Captação Da Energia Solar</p>
                            <div class="title"> <?= $operation->begin ?></div>
<!--                            <div class="title">How to choose<br> better one for your place</div>-->
                            <div class="border-box"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="whychoose-right-content">
                        <ul>
                            <li>
                                <div class="icon">
                                    <span class="icon-save"></span>
                                </div>
                                <div class="text">
                                    <div class="title">
                                        <a href="#exampleModalCenter1" data-toggle="modal" style="color: #83888d">
                                        <?= strlen($operation->steps ) >  170 ? substr($operation->steps , 0, 170) . "..." : $operation->steps ?>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-save"></span>
                                </div>
                                <div class="text">
                                    <div class="title">
                                        <a href="#exampleModalCenter2" data-toggle="modal" style="color: #83888d">
                                        <?= strlen($operation->steps2 ) >  170 ? substr($operation->steps2 , 0, 170) . "..." : $operation->steps2 ?>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-save"></span>
                                </div>
                                <div class="text">
                                    <div class="title">
                                        <a href="#exampleModalCenter3" data-toggle="modal" style="color: #83888d">
                                        <?= strlen($operation->steps3 ) >  170 ? substr($operation->steps3 , 0, 170) . "..." : $operation->steps3 ?>
                                        </a>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-12">
                    <div class="whychoose-right-content">
                        <ul>
                            <li>
                                <div class="icon">
                                    <span class="icon-save"></span>
                                </div>
                                <div class="text">
                                    <div class="title">
                                        <a href="#exampleModalCenter4" data-toggle="modal" style="color: #83888d">
                                        <?= strlen($operation->steps4 ) >  170 ? substr($operation->steps4 , 0, 170) . "..." : $operation->steps4 ?>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-save"></span>
                                </div>
                                <div class="text">
                                    <a href="#exampleModalCenter" data-toggle="modal">
                                    <div class="title">
                                        <a href="#exampleModalCenter5" data-toggle="modal" style="color: #83888d">
                                        <?= strlen($operation->steps5 ) >  170 ? substr($operation->steps5 , 0, 170) . "..." : $operation->steps5 ?>
                                    </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-save"></span>
                                </div>
                                <div class="text">
                                    <div class="title">
                                        <a href="#exampleModalCenter6" data-toggle="modal" style="color: #83888d">
                                        <?= strlen($operation->steps6 ) >  170 ? substr($operation->steps6 , 0, 170) . "..." : $operation->steps6 ?>
                                        </a>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Choose area-->


    <!-- Button trigger modal -->
<!--    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">-->
<!--        Launch demo modal-->
<!--    </button>-->

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Instalação Do Sistema</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?= $operation->steps ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Instalação Do Sistema</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?= $operation->steps2 ?>
                </div>
                <div class="modal-footer">
                    < <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header"  style="background: #f6aa7d">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Instalação Do Sistema</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?= $operation->steps3 ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Instalação Do Sistema</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?= $operation->steps4 ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Instalação Do Sistema</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?= $operation->steps5 ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Instalação Do Sistema</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?= $operation->steps6 ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>



    <!--Start Fact Counter Area-->
    <section class="fact-counter-area" style="background-image:url(images/parallax-background/fact-counter-bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <ul class="fact-counter style2">
                        <li class="single-fact-counter style2 wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1500ms">
                            <div class="count-box">
                                <h1>
                                    <i class="flaticon-add"></i>
                                    <span class="timer" data-from="1" data-to="5258" data-speed="5000" data-refresh-interval="50">5258</span>
                                </h1>
                                <div class="title">
                                    <h3>5.258 Projects Completed<br> Successfully</h3>
                                </div>
                            </div>
                        </li>
                        <li class="single-fact-counter style2 wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="count-box">
                                <h1>
                                    <i class="flaticon-percentage"></i>
                                    <span class="timer" data-from="1" data-to="97" data-speed="5000" data-refresh-interval="50">97</span>
                                </h1>
                                <div class="title">
                                    <h3>Positive Feedback<br> By 97.41% of Customers</h3>
                                </div>
                            </div>
                        </li>
                        <li class="single-fact-counter style2 wow fadeInLeft" data-wow-delay="500ms" data-wow-duration="1500ms">
                            <div class="count-box">
                                <h1>
                                    <i class="flaticon-add"></i>
                                    <span class="timer" data-from="1" data-to="30" data-speed="5000" data-refresh-interval="50">30</span>
                                </h1>
                                <div class="title">
                                    <h3>Have 30+ Years Experience<br> in this Field</h3>
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
                <p>Behind Solartech</p>
                <div class="title">Our Management Team</div>
                <div class="border-box center"></div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="team-carousel owl-carousel owl-theme">
                        <!--Start single item member-->
                        <div class="single-team-member">
                            <div class="img-holder">
                                <img <img src="/images/team/1.jpg" alt="Awesome Image">
                            </div>
                            <div class="name text-center">
                                <h3>Don Elwood</h3>
                                <p>Founder & Chairman</p>
                            </div>
                            <div class="name text-center overlay-content">
                                <h3>Don Elwood</h3>
                                <p>Founder & Chairman</p>
                                <ul class="sociallinks">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!--End single item member-->
                        <!--Start single item member-->
                        <div class="single-team-member">
                            <div class="img-holder">
                                <img <img src="/images/team/2.jpg" alt="Awesome Image">
                            </div>
                            <div class="name text-center">
                                <h3>Wilson Joe</h3>
                                <p>President</p>
                            </div>
                            <div class="name text-center overlay-content">
                                <h3>Wilson Joe</h3>
                                <p>President</p>
                                <ul class="sociallinks">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!--End single item member-->
                        <!--Start single item member-->
                        <div class="single-team-member">
                            <div class="img-holder">
                                <img <img src="/images/team/3.jpg" alt="Awesome Image">
                            </div>
                            <div class="name text-center">
                                <h3>Gary Ev</h3>
                                <p>Vice President</p>
                            </div>
                            <div class="name text-center overlay-content">
                                <h3>Gary Ev</h3>
                                <p>Vice President</p>
                                <ul class="sociallinks">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!--End single item member-->
                        <!--Start single item member-->
                        <div class="single-team-member">
                            <div class="img-holder">
                                <img <img src="/images/team/4.jpg" alt="Awesome Image">
                            </div>
                            <div class="name text-center">
                                <h3>Ike Hal</h3>
                                <p>Marketing Head</p>
                            </div>
                            <div class="name text-center overlay-content">
                                <h3>Ike Hal</h3>
                                <p>Marketing Head</p>
                                <ul class="sociallinks">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!--End single item member-->

                        <!--Start single item member-->
                        <div class="single-team-member">
                            <div class="img-holder">
                                <img <img src="/images/team/1.jpg" alt="Awesome Image">
                            </div>
                            <div class="name text-center">
                                <h3>Don Elwood</h3>
                                <p>Founder & Chairman</p>
                            </div>
                            <div class="name text-center overlay-content">
                                <h3>Don Elwood</h3>
                                <p>Founder & Chairman</p>
                                <ul class="sociallinks">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!--End single item member-->
                        <!--Start single item member-->
                        <div class="single-team-member">
                            <div class="img-holder">
                                <img <img src="/images/team/2.jpg" alt="Awesome Image">
                            </div>
                            <div class="name text-center">
                                <h3>Wilson Joe</h3>
                                <p>President</p>
                            </div>
                            <div class="name text-center overlay-content">
                                <h3>Wilson Joe</h3>
                                <p>President</p>
                                <ul class="sociallinks">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!--End single item member-->
                        <!--Start single item member-->
                        <div class="single-team-member">
                            <div class="img-holder">
                                <img <img src="/images/team/3.jpg" alt="Awesome Image">
                            </div>
                            <div class="name text-center">
                                <h3>Gary Ev</h3>
                                <p>Vice President</p>
                            </div>
                            <div class="name text-center overlay-content">
                                <h3>Gary Ev</h3>
                                <p>Vice President</p>
                                <ul class="sociallinks">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!--End single item member-->
                        <!--Start single item member-->
                        <div class="single-team-member">
                            <div class="img-holder">
                                <img <img src="/images/team/4.jpg" alt="Awesome Image">
                            </div>
                            <div class="name text-center">
                                <h3>Ike Hal</h3>
                                <p>Marketing Head</p>
                            </div>
                            <div class="name text-center overlay-content">
                                <h3>Ike Hal</h3>
                                <p>Marketing Head</p>
                                <ul class="sociallinks">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!--End single item member-->

                        <!--Start single item member-->
                        <div class="single-team-member">
                            <div class="img-holder">
                                <img <img src="/images/team/1.jpg" alt="Awesome Image">
                            </div>
                            <div class="name text-center">
                                <h3>Don Elwood</h3>
                                <p>Founder & Chairman</p>
                            </div>
                            <div class="name text-center overlay-content">
                                <h3>Don Elwood</h3>
                                <p>Founder & Chairman</p>
                                <ul class="sociallinks">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!--End single item member-->
                        <!--Start single item member-->
                        <div class="single-team-member">
                            <div class="img-holder">
                                <img <img src="/images/team/2.jpg" alt="Awesome Image">
                            </div>
                            <div class="name text-center">
                                <h3>Wilson Joe</h3>
                                <p>President</p>
                            </div>
                            <div class="name text-center overlay-content">
                                <h3>Wilson Joe</h3>
                                <p>President</p>
                                <ul class="sociallinks">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!--End single item member-->
                        <!--Start single item member-->
                        <div class="single-team-member">
                            <div class="img-holder">
                                <img <img src="/images/team/3.jpg" alt="Awesome Image">
                            </div>
                            <div class="name text-center">
                                <h3>Gary Ev</h3>
                                <p>Vice President</p>
                            </div>
                            <div class="name text-center overlay-content">
                                <h3>Gary Ev</h3>
                                <p>Vice President</p>
                                <ul class="sociallinks">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!--End single item member-->
                        <!--Start single item member-->
                        <div class="single-team-member">
                            <div class="img-holder">
                                <img <img src="/images/team/4.jpg" alt="Awesome Image">
                            </div>
                            <div class="name text-center">
                                <h3>Ike Hal</h3>
                                <p>Marketing Head</p>
                            </div>
                            <div class="name text-center overlay-content">
                                <h3>Ike Hal</h3>
                                <p>Marketing Head</p>
                                <ul class="sociallinks">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!--End single item member-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End team area-->

    <!--Start Brand area-->
    <section class="brand-area style2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <ul class="brand-items">
                        <!--Start Single Brand Item-->
                        <li class="single-brand-item wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <a href="#"><img <img src="/images/brand/1.png" alt="Awesome Brand Image"></a>
                            <div class="overlay-box">
                                <a href="#"><img <img src="/images/brand/1-hover.png" alt="Awesome Brand Image"></a>
                            </div>
                        </li>
                        <!--End Single Brand Item-->
                        <!--Start Single Brand Item-->
                        <li class="single-brand-item wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <a href="#"><img <img src="/images/brand/2.png" alt="Awesome Brand Image"></a>
                            <div class="overlay-box">
                                <a href="#"><img <img src="/images/brand/2-hover.png" alt="Awesome Brand Image"></a>
                            </div>
                        </li>
                        <!--End Single Brand Item-->
                        <!--Start Single Brand Item-->
                        <li class="single-brand-item wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <a href="#"><img <img src="/images/brand/3.png" alt="Awesome Brand Image"></a>
                            <div class="overlay-box">
                                <a href="#"><img <img src="/images/brand/3-hover.png" alt="Awesome Brand Image"></a>
                            </div>
                        </li>
                        <!--End Single Brand Item-->
                        <!--Start Single Brand Item-->
                        <li class="single-brand-item wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <a href="#"><img <img src="/images/brand/4.png" alt="Awesome Brand Image"></a>
                            <div class="overlay-box">
                                <a href="#"><img <img src="/images/brand/4-hover.png" alt="Awesome Brand Image"></a>
                            </div>
                        </li>
                        <!--End Single Brand Item-->
                        <!--Start Single Brand Item-->
                        <li class="single-brand-item wow fadeInUp" data-wow-delay="800ms" data-wow-duration="1500ms">
                            <a href="#"><img <img src="/images/brand/5.png" alt="Awesome Brand Image"></a>
                            <div class="overlay-box">
                                <a href="#"><img <img src="/images/brand/5-hover.png" alt="Awesome Brand Image"></a>
                            </div>
                        </li>
                        <!--End Single Brand Item-->
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--End Brand area-->
</html>
