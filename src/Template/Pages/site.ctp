
<!--Main Slider-->
<section class="main-slider">
    <div class="rev_slider_wrapper fullwidthbanner-container" id="rev_slider_one_wrapper" data-source="gallery">
        <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
            <ul>
<!--                $sliders as $key => $slider-->
                <?php foreach ($sliders as $slider): ?>
                <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="<?= $slider->id ?>" data-masterspeed="default"
                    data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="images/slides/v1-1.jpg"
                    data-title="Slide Title" data-transition="parallaxvertical">

                    <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="<?= "/files/Sliders/photo/" . $slider->photo ?>">

                    <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-width="['1000','900','700','450']" data-whitespace="normal"
                         data-hoffset="['15','15','15','15']" data-voffset="['-150','-130','-120','-125']" data-x="['center','center','center','center']" data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},
                        {"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]' style="z-index: 7; white-space: nowrap;">
                        <div class="slide-content middle-slide text-center">
                            <div class="icon-holder">
                                <span class="icon-power"></span>
                            </div>
                        </div>
                    </div>
                    <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-width="['1000','900','700','450']" data-whitespace="normal"
                         data-hoffset="['15','15','15','15']" data-voffset="['-55','-60','-55','-65']" data-x="['center','center','center','center']" data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1500,"ease":"Power3.easeInOut"},
                        {"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]' style="z-index: 7; white-space: nowrap;">
                        <div class="slide-content middle-slide text-center">
                            <div class="text"><?= $slider->name ?></div>
                        </div>
                    </div>
                    <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-width="['1000','900','700','450']" data-whitespace="normal"
                         data-hoffset="['15','15','15','15']" data-voffset="['55','30','25','5']" data-x="['center','center','center','center']" data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                         style="z-index: 7; white-space: nowrap;">
                        <div class="slide-content middle-slide text-center" style="">
                            <div class="big-title">
                                <?= $slider->description ?>
                            </div>
                        </div>
                    </div>
                    <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-width="['1000','900','700','450']" data-whitespace="normal"
                         data-hoffset="['15','15','15','15']" data-voffset="['200','155','140','110']" data-x="['center','center','center','center']" data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                         style="z-index: 7; white-space: nowrap;">
                        <div class="slide-content middle-slide text-center">
                            <div class="btn-box">
                                <a class="btn-one" href="#orc"><b>Orçamento</b><span class="icon-null"></span></a>
                            </div>
                        </div>
                    </div>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</section>
<!--End Main Slider-->

<!--Start Sobre area-->
<section class="about-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="about-image-box">
                    <div class="icon-box">
                        <span class="icon-solar-energy"></span>
                    </div>
                    <div class="image-box-one">
                        <img src="/images/resources/a1.png" alt="Awesome Image">
                    </div>
                    <div class="image-box-two">
                        <img src="/images/resources/a2.png" alt="Awesome Image">
                    </div>
                    <div class="image-box-three">
                        <img src="/images/resources/a3.png" alt="Awesome Image">
                    </div>
                    <div class="image-box-four">
                        <img src="/images/resources/a4.png" alt="Awesome Image">
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="about-text">
                    <div class="sec-title">
                        <p>Sobre a nossa empresa</p>
                        <div class="title">Simplicidade & eficiência</div>
                        <div class="border-box"></div>
                    </div>
                    <div class="inner-content">
                        <?php foreach ($about as $ab): ?>
                        <h3><?= $ab->title ?></h3>
                        <?php endforeach; ?>

                        <div class="text">
                          <?php foreach ($about as $ab): ?>
                              <?= strlen($ab->description) >  200 ? substr($ab->description, 0, 300) . "..." : $ab->description ?>
                            <?php endforeach; ?>
                        </div>
                        <ul class="solar-services">
                            <li class="single-solar-box">
                                <div class="icon">
                                    <span class="icon-farm"></span>
                                </div>
                                <div class="title">
                                    <h3><br>Área Agrícola</h3>
                                </div>
                            </li>
                            <li class="single-solar-box">
                                <div class="icon">
                                    <span class="icon-farming-and-gardening"></span>
                                </div>
                                <div class="title">
                                    <h3></br>Áreas residenciais</h3>
                                </div>
                            </li>
                        </ul>
                        <div class="button">
                            <a class="btn-two" href="/sobre/5">Ver Mais<span class="icon-null"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!--End Sobre Area-->

<!--Start slogan area-->
<section class="slogan-area martop-minus">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content fix">
                    <div class="title float-left">
                        <h2 style="text-align: center">Alguma dúvida?<br> Por favor entre em contato.</h2>
                    </div>
                    <div class="button float-right">
                        <a style="width: 250px;  text-align: center;}" class="btn-three" href="#">Contato<span class="icon-null"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End slogan area-->

<!--Start Projetos-->
<section class="fact-projects-area">
    <div class="pattern paroller">
        <img src="/images/pattern/fact-project-bg.jpg" alt="Pattern">
    </div>
    <div class="container">
        <div class="row">
            <!--Start Single fact counter-->
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" style="text-align: center">
                <div class="project-content">
                    <div class="sec-title">
                        <p>Solayriz Slz Engenharia</p>
                        <div class="title">Projetos</div>
                        <div class="border-box center"></div>
                    </div>
                    <div class="inner-content">
                        <p>Indignation and dislike men who are so beguiled<br> and demoralized by the charms.</p>
                        <div class="button">
                            <a class="btn-two" href="/projetos">Ver Todos os Projetos<span class="icon-null"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container latest-project">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="project-carousel owl-carousel owl-theme">
                    <?php foreach ($projects as $proj): ?>
                    <div class="single-project-style1">
                        <div class="img-holder">
                            <img id="img-project2" src="<?= "/files/Projects/photo/" . $proj->photo ?>" alt="Imagem produtos">
                            <div class="overlay-content">
                                <div class="inner-content">
                                    <div class="link-box">
                                        <a href="/projeto/<?= $proj->id ?>"><span class="icon-plus"></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="categories">
                                <h5><?= $proj->category_id ?></h5>
                            </div>
                            <div class="title-box">
                                <h3><?= $proj->name ?></h3>
                                <span>Solayriz</span>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Projetos-->



<!--Start Why Choose Area-->
<section class="why-choose-area secpd1">
    <div class="container">
        <div class="sec-title">
            <p>BENEFÍCIOS DA ENERGIA SOLAR</p>
            <div class="title">Por que a energia solar é a melhor</div>
            <div class="border-box"></div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="choose-carousel owl-carousel owl-theme">
                    <!--Start Single Choose Box-->
                    <div class="single-choose-box text-center">
                        <h3><a href="#">Gerar<br> Própria Eletricidade</a></h3>
                        <span class="icon-null-1"></span>
                        <div class="button">
<!--                            <a href="#"><span class="icon-null"></span></a>-->
                        </div>

                    </div>
                    <!--End Single Choose Box-->
                    <!--Start Single Choose Box-->
                    <div class="single-choose-box text-center">
                        <h3><a href="#">Melhorar<br> o meio ambiente</a></h3>
                        <span class="icon-ecology"></span>
                        <div class="button">
<!--                            <a href="#"><span class="icon-null"></span></a>-->
                        </div>

                    </div>
                    <!--End Single Choose Box-->
                    <!--Start Single Choose Box-->
                    <div class="single-choose-box text-center">
                        <h3><a href="#">Baixo<br> custo de energia</a></h3>
                        <span class="icon-solar-panel"></span>
                        <div class="button">
<!--                            <a href="#"><span class="icon-null"></span></a>-->
                        </div>

                    </div>
                    <!--End Single Choose Box-->
                    <!--Start Single Choose Box-->
                    <div class="single-choose-box text-center">
                        <h3><a href="#">Reduzir<br> contas de energia</a></h3>
                        <span class="icon-money"></span>
                        <div class="button">
<!--                            <a href="#"><span class="icon-null"></span></a>-->
                        </div>

                    </div>
                    <!--End Single Choose Box-->
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Why Choose Area-->

<!--Start Working Process Area-->
<section class="working-process-area" style="background-image:url(images/parallax-background/working-process-bg.jpg);">
    <div class="image-box wow fadeInRight" data-wow-duration="3000ms">
        <div class="image paroller">
            <img class="zoom-fade" src="/images/resources/working-process.png" alt="">
        </div>
    </div>
    <div class="container">
        <div class="sec-title with-text clrwhite text-center">
            <p>SOLAYRIZ SLZ ENGENHARIA</p>
            <div class="title">Excelência em qualidade</div>
            <div class="border-box center bgblue"></div>
            <span>O reconhecimento da Solayriz Engenharia é uma consequência da excelência na qualidade dos produtos, serviços e do rigor técnico prestado.</span>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="working-process-carousel owl-carousel owl-theme">
                    <!--Start Single Working Process-->
                    <div class="single-working-process text-center">
                        <div class="top-box">
                            <h1><span class="icon-power"></span></h1>
                        </div>
                        <h3>Energia<br> Solar</h3>
                        <p>Frequently occur that pleasures have to be repudiated & annoyan accepted. </p>
                        <div class="button">
                            <a class="btn-two" href="/energia-solar/8">Ver Mais<span class="icon-null"></span></a>
                        </div>
                    </div>
                    <!--End Single Working Process-->
                    <!--Start Single Working Process-->
                    <div class="single-working-process text-center">
                        <div class="top-box">
                            <h1><span class="icon-null-3"></span></h1>
                        </div>
                        <h3>Como<br> Funciona</h3>
                        <p> Pleasures to secure other greater or else worse endures pains avoid. </p>
                        <div class="button">
                            <a class="btn-two" href="/como-funciona/4">Ver Mais<span class="icon-null"></span></a>
                        </div>
                    </div>
                    <!--End Single Working Process-->
                    <!--Start Single Working Process-->
                    <div class="single-working-process text-center">
                        <div class="top-box">
                            <h1><span class="icon-power-1"></span></h1>
                        </div>
                        <h3>Nossos<br> Projetos</h3>
                        <p>Indignations and dislikes men who are so demoralized by the charms.</p>
                        <div class="button">
                            <a class="btn-two" href="/projetos">Ver Mais<span class="icon-null"></span></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!--End Working Process Area-->


<!--Start latest blog area-->
<section class="latest-blog-area">
    <div class="container inner-content">
        <div class="sec-title">
            <p>Posts</p>
            <div class="title">Nosso blog</div>
            <div class="border-box"></div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="blog-carousel owl-carousel owl-theme">
                    <!--Start single blog post-->
                    <?php foreach ($blog as $bl): ?>
                    <div class="single-blog-post">
                        <div class="img-holder">
                            <img class="bg-f" src="<?= "/files/Blog/photo/" . $bl->photo ?>" alt="Awesome Image">
                            <div class="overlay-style-two"></div>
                            <div class="post-date">
                                <h3 style="margin-top: 15px"><span><?= $bl->date ?></span></h3>
                            </div>
                        </div>
                        <div class="text-holder">
                            <h3 class="blog-title"><a href="/post/<?= $bl->id ?>"><?= $bl->title ?></a></h3>
                            <div class="meta-box">
                                <ul class="meta-info">
                                    <li><b><?= $bl->signature ?></b></li>
                                </ul>
                                <div class="author-icon">
                                    <span class="icon-user"></span>
                                </div>
                            </div>
                            <div class="text">
                                <p><?= strlen($ab->description) >  70 ? substr($ab->description, 0, 70) . "..." : $ab->description ?></p>
                                <a class="btn-two" href="#">Read More<span class="icon-null"></span></a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    <!--End single blog post-->
                </div>
            </div>


        </div>
    </div>
</section>
<!--End latest blog area-->


<!--Start Videos Area-->
<section class="testimonial-area">
    <div class="container">
        <div class="sec-title clrwhite text-center">
            <div class="title">Nossos Videos</div>
            <div class="border-box center"></div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="testimonial-carousel owl-carousel owl-theme">
                    <!--Start Single Testimonial Item-->
                        <?php foreach ($videos as $video): ?>
                        <div class="video-holder-box">
                            <div class="img-holder">
                                <img id="vdy" src="<?= "/files/Videos/capa/" . $video->capa ?>" alt="Awesome Image">
                                <div class="icon-holder">
                                    <div class="icon">
                                        <div class="inner text-center">
                                            <a class="html5lightbox wow zoomIn" data-wow-delay="300ms" data-wow-duration="1500ms" title="Solayriz" href="<?= $video->link ?>">
                                                <span class="icon-null-4"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="button text-center wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
            <a class="btn-three" href="/video">Ver Mais<span class="icon-null"></span></a>
        </div>
    </div>
</section>
<!--End Videos Area-->




<!--Start Consultation Area-->
<section class="consultation-area" id="orc">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="consultation-box">
                    <div class="title-box">
                        <h2>Peça Já Seu Orçamento!</h2>
                        <span>Preencha o formulário e um de nossos consultores entrará em contato para fazer um orçamento.</span>
                    </div>
                    <div class="consultation">
                        <form class="consultation-form">
                            <div class="row">
                                <div class="col-xl-7">
                                    <div class="single-box">
                                        <input type="text" name="form_name" value="" placeholder="Nome" required="">
                                    </div>
                                </div>
                                <div class="col-xl-5">
                                    <div class="single-box">
                                        <input type="text" name="form_vlr" value="" placeholder="Valor da conta" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="single-box">
                                        <input type="email" name="form_tel" value="" placeholder="Telefone" required="">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="single-box">
                                        <select class="selectpicker" data-width="100%">
                                            <option selected="selected">Escolha seu estado</option>
                                            <option value="AC">Acre</option>
                                            <option value="AL">Alagoas</option>
                                            <option value="AP">Amapá</option>
                                            <option value="AM">Amazonas</option>
                                            <option value="BA">Bahia</option>
                                            <option value="CE">Ceará</option>
                                            <option value="DF">Distrito Federal</option>
                                            <option value="ES">Espirito Santo</option>
                                            <option value="GO">Goiás</option>
                                            <option value="MA">Maranhão</option>
                                            <option value="MS">Mato Grosso do Sul</option>
                                            <option value="MT">Mato Grosso</option>
                                            <option value="MG">Minas Gerais</option>
                                            <option value="PA">Pará</option>
                                            <option value="PB">Paraíba</option>
                                            <option value="PR">Paraná</option>
                                            <option value="PE">Pernambuco</option>
                                            <option value="PI">Piauí</option>
                                            <option value="RJ">Rio de Janeiro</option>
                                            <option value="RN">Rio Grande do Norte</option>
                                            <option value="RS">Rio Grande do Sul</option>
                                            <option value="RO">Rondônia</option>
                                            <option value="RR">Roraima</option>
                                            <option value="SC">Santa Catarina</option>
                                            <option value="SP">São Paulo</option>
                                            <option value="SE">Sergipe</option>
                                            <option value="TO">Tocantins</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                              <div class="col-xl-7">
                                <div class="single-box">
                                    <input type="email" name="form_email" value="" placeholder="Email" required="">
                                </div>
                               </div>
                                <div class="col-xl-5">
                                    <div class="single-box">
                                        <select class="selectpicker" data-width="100%">
                                            <option selected="selected">Tipo de instalação</option>
                                            <?php foreach ($int as $in): ?>
                                            <option value="in"><?= $in->title ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-12">
                            <div class="custom-file-upload" style="text-align: center">
                                <label for="file-upload" class="custom-file-upload1">
                                    <i class="fa fa-cloud-upload"></i>
                                    <span style="cursor: pointer">Anexe sua conta de energia!</span>
                                </label>
                                <input style="display: none" id="file-upload" type="file"/>
                            </div>
                                </div>
                            </div>



                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="single-box">
                                        <button class="btn-three" type="submit">Quero Orçamento<span class="icon-null"></span></button>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Consultation Area-->



<!--Start Brand area-->
<section class="brand-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <ul class="brand-items" style="display: flex; justify-content: center;">
                    <!--Start Single Brand Item-->

                    <!--Start Single Brand Item-->
                    <li class="single-brand-item wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <a href="#"><img src="/images/brand/3.png" alt="Awesome Brand Image"></a>
                        <div class="overlay-box">
                            <a href="#"><img src="/images/brand/3-hover.png" alt="Awesome Brand Image"></a>
                        </div>
                    </li>
                    <!--End Single Brand Item-->

                </ul>
            </div>
        </div>
    </div>
</section>
<!--End Brand area-->

<!--Start Download Material area-->
<section class="download-material-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="download-material">
                    <div class="title-box float-left">
                        <h3>Potencialize sua casa com tecnologias inovadoras de energia</h3>
                    </div>
                    <div class="button float-right">
                        <a href="/sobre/5">
                            <div class="icon">
                                <span class="icon-download"></span>
                            </div>
                            <div class="title">
                                <h4>Solayris</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Download Material area-->
