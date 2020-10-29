
<div class="boxed_wrapper">
    <div class="preloader"></div>
    <!-- Start Top Bar style1 -->
    <section class="top-bar-style1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="top-style1 clearfix">
                        <div class="top-left-style1 float-left clearfix">
                            <div class="find-text">
                                <p>Find a Solartech Authorized Professional<span class="icon-null"></span></p>
                            </div>
                        </div>
                        <div class="top-right-style1 float-right">
                            <div class="for-enquiry float-left fix">
                                <p><span class="icon-question"></span>Telefone: (79) 98866-8644</p>
                            </div>
                            <ul class="top-social-style1 sociallinks-style-one float-right fix">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Top Bar style1 -->

    <!--Start header style1 area-->
    <header class="header-style1-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="header-style1 clearfix">
                        <div class="headers1-logo float-left">
                            <a href="/">
                                <img style="width: 280px; margin-top: -27px;" src="/images/resources/solayris.png" alt="Awesome Logo">
                            </a>
                        </div>
                        <div class="headers1-header-right float-right">
                            <ul class="header-contact-info clearfix">
                                <li>
                                    <div class="single-item">
                                        <div class="icon">
                                            <img src="/images/icon/header-icon-1.png" alt="Awesome Image">
                                        </div>
                                        <div class="text">
                                            <h3>For Visitors</h3>
                                            <p>47 W 13th Street, NY</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-item">
                                        <div class="icon">
                                            <img src="/images/icon/header-icon-2.png" alt="Awesome Image">
                                        </div>
                                        <div class="text">
                                            <h3>Email</h3>
                                            <p>solayrizengenharia@gmail.com</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="headers1-button">
                                <a class="btn-one" href="#"><b>Orçamento</b><span class="icon-null"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--End header style1 area-->
    <!--Start mainmenu area-->
    <section class="mainmenu-area stricky">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content clearfix" id="dmenu">
                        <nav class="main-menu clearfix">
                            <div class="navbar-header clearfix">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li class="dropdown current"><a href="/">Início</a></li>
                                    <li class="dropdown"><a href="about.html">Solayriz</a>
                                        <ul>
                                            <li><a href="/sobre/5">Sobre</a></li>
                                        </ul>
                                    </li>

                                    <li><a href="/energia-solar/8">Energia Solar</a></li>

                                    <li class="dropdown"><a href="/como-funciona/4">Como Funciona</a>


                                    <li class="dropdown"><a href="project.html">Projetos</a>
                                        <ul>
                                            <?php foreach ($cat as $category): ?>
                                            <li><a href="/projetos/<?= $category->id ?>"><?= $category->title ?></a></li>
                                            <?php endforeach; ?>
                                            <li><a href="/projetos">Todos</a></li>
                                        </ul>
                                    </li>

                                    <li><a href="/posts">Blog</a></li>

                                    <li><a href="/contato">Contato</a></li>
                                </ul>
                            </div>
                        </nav>


                    </div>
                </div>
            </div>
        </div>
        <a href="https://api.whatsapp.com/send?l=pt&amp;phone=5579988668644" target="_blank">
            <img src="/images/whatsapp-button.png" style="height:80px; position:fixed; bottom: 10px;
     right: 10px; z-index:99999;width: 140px;height: auto; margin-bottom: 33px" data-selector="img"></a>
    </section>
    <!--End mainmenu area-->

