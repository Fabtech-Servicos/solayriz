
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/images/resources/breadcrumb-bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content clearfix">
                        <div class="title float-left">
                            <h1>Como Funciona</h1>
                        </div>
                        <div class="breadcrumb-menu float-right">
                            <ul class="clearfix">
                                <li><a href="/">Início</a></li>
                                <li class="active">Como Funciona</li>
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
                <p>SOLAYRIZ SLZ ENGENHARIA</p>
                <div class="title"> <?= $operation->title ?></div>
                <div class="border-box center"></div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="company-info-box">
                    <?= $operation->description ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="whowe-are-image" style="border: 1px solid #416787;">
                    <img class="imgg" src="<?= "/files/Operation/photo/" . $operation->photo ?>" alt="Awesome Image">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="whowe-are-image" style="border: 1px solid #416787;">
                        <img class="imgg" src="<?= "/files/Operation/photo2/" . $operation->photo2 ?>" alt="Awesome Image">
                    </div>
                </div>
            </div>
            <div class="row whowe-are">
                <!--Start Single Whowe Are Box-->
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="single-whowe-are-box text-center">
                        <div class="count-box">01</div>
                        <div class="icon">
                            <span class="icon-farm"></span>
                        </div>
                        <div class="text">
                            <a href="#exampleModal1" data-toggle="modal" style="color: #83888d">
                            <?= strlen($operation->scenario ) >  150 ? substr($operation->scenario , 0, 150) . "..." : $operation->scenario ?>
                            </a>
                        </div>
                    </div>
                </div>
                <!--End Single Whowe Are Box-->
                <!--Start Single Whowe Are Box-->
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="single-whowe-are-box text-center">
                        <div class="count-box">02</div>
                        <div class="icon">
                            <span class="icon-farming-and-gardening"></span>
                        </div>
                        <div class="text">
                            <a href="#exampleModal2" data-toggle="modal" style="color: #83888d">
                            <?= strlen($operation->scenario2 ) >  200 ? substr($operation->scenario2 , 0, 200) . "..." : $operation->scenario2 ?>
                            </a>
                        </div>
                    </div>
                </div>
                <!--End Single Whowe Are Box-->
                <!--Start Single Whowe Are Box-->
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="single-whowe-are-box text-center">
                        <div class="count-box">03</div>
                        <div class="icon">
                            <span class= "fa fa-industry" aria-hidden="true"></span>
                        </div>
                        <div class="text">
                            <a href="#exampleModal3" data-toggle="modal" style="color: #83888d">
                            <?= strlen($operation->scenario3 ) >  150 ? substr($operation->scenario3 , 0, 150) . "..." : $operation->scenario3 ?>
                            </a>
                        </div>
                    </div>
                </div>
                <!--End Single Whowe Are Box-->
            </div>

            <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Vantagens</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <?= $operation->scenario ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Vantagens</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <?= $operation->scenario2 ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Vantagens</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <?= $operation->scenario3 ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
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
                            <img  src="<?= "/files/Operation/Cover/" . $operation->cover ?>" alt="Awesome Image">
                            <div class="icon-holder">
                                <div class="icon">
                                    <div class="inner text-center">
                                        <a class="html5lightbox wow zoomIn" data-wow-delay="300ms" data-wow-duration="1500ms" title="Solayriz" href="<?= $operation->link ?>">
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
                                    <img class="op" src="/images/imgc1.png" alt="Awesome Image">
                                    <div class="overlay-content">
                                        <div class="top">
                                            <div class="icon">
                                                <span class="fa fa-calculator"></span>
                                            </div>
                                            <div class="big-title">O</div>
                                        </div>
                                        <div class="text">
                                            <a href="/#orc">
                                                <h3>Solicite seu orçamento</h3>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 pd0">
                                <div class="single-box">
                                    <img class="op" src="/images/imgc2.png" alt="Awesome Image">
                                    <div class="overlay-content">
                                        <div class="top">
                                            <div class="icon">
                                                <span class="fa fa-envelope"></span>
                                            </div>
                                            <div class="big-title">C</div>
                                        </div>
                                        <div class="text">
                                            <a href="/contato">
                                                <h3>Entre em contato</h3>
                                            </a>
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
                                    <span class="fa fa-calculator" aria-hidden="true"></span>
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
                                    <span class="icon-power"></span>
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
                                    <span class="fa fa-file" aria-hidden="true"></span>
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
                                    <span class="icon-drill" aria-hidden="true"></span>
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
                                    <span class="icon-null-1"></span>
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
    <section class="fact-counter-area" style="background-image:url(/images/parallax-background/fact-counter-bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <ul class="fact-counter style2">
                        <li class="single-fact-counter style2 wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1500ms">
                            <div class="count-box">
                                <h1>
                                    <div class="icon">
                                        <span class="fa fa-history" aria-hidden="true"></span>
                                    </div>
                                </h1>
                                <div class="title">
                                    <h3>Experiência comprovada</h3>
                                </div>
                            </div>
                        </li>
                        <li class="single-fact-counter style2 wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="count-box">
                                <h1>
                                    <div class="icon">
                                        <span class="fa fa-check" aria-hidden="true"></span>
                                    </div>
                                </h1>
                                <div class="title">
                                    <h3>Equipamentos de qualidade</h3>
                                </div>
                            </div>
                        </li>
                        <li class="single-fact-counter style2 wow fadeInLeft" data-wow-delay="500ms" data-wow-duration="1500ms">
                            <div class="count-box">
                                <h1>
                                    <div class="icon">
                                        <span class="fa fa-users"></span>
                                    </div>
                                </h1>
                                <div class="title">
                                    <h3>Profissionais experientes</h3>
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

