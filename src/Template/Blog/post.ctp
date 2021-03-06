
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area style2" style="background-image: url(/images/resources/breadcrumb-blog-single.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="single-post-info text-center clearfix">
                        <p><?= $post->date ?></p>
                        <div class="title">
                            <h1 class="blog-title"><?= $post->title ?></h1>
                        </div>
                        <div class="meta-box">
                            <div class="author-icon">
                                <span class="icon-user"></span>
                            </div>
                            <ul class="meta-info">
                                <li style="color: #3398fd"><b><?= $post->signature ?></b></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->

    <!--Start blog single area-->
    <section id="blog-area" class="blog-single-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="blog-post">
                        <div class="single-blog-post">
                            <div class="author-quote-box text-center">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12">
<!--                                        <div class="text">-->
<!--                                            <div class="icon"><img src="/images/icon/quote.png" alt="Quote Icon"></div>-->
<!--                                            <p>To take a trivial example, which ever undertakes laborious physical exercise, except obtainsome advantage but in certain circumstances.</p>-->
<!--                                            <div class="name">-->
<!--                                                <h3>Jessica Mcdade</h3>-->
<!--                                            </div>-->
<!--                                        </div>-->
                                    </div>
                                </div>
                            </div>
                            <div class="main-image-holder">
                                <img class="img-post" src="<?= "/files/Blog/photo/" . $post->photo ?>" alt="Awesome Image">
                            </div>
                            <div class="quality-with-integrity-box">
                                <?= $post->description ?>
                            </div>

                            <div class="tag-with-social-links-box">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="inner-content">
                                            <div class="social-links-box pull-right">
                                                <ul class="sociallinks-style-two float-left fix">
                                                    <li><a href="https://www.instagram.com/solayriz/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                                    <li><a href="https://www.facebook.com/solayriz.slzengenharia.3" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Start prev next option-->
                            <div class="blog-prev-next-option">
                                <?php foreach ($prev as $pv): ?>
                            <?php if (!empty($pv)): ?>
                                <div class="single prev">
                                    <div class="image-thumb">
                                        <img class="img-pn" src="<?= "/files/Blog/photo/" . $pv->photo ?>" alt="Image">
                                    </div>
                                    <div class="title">
                                        <h3><?= $pv->title ?></h3>
                                        <a href="<?= $pv->id ?>"><span class="fa fa-long-arrow-left"></span>&nbsp prev</a>
                                    </div>
                                </div>
                                    <?php endif; ?>
                                <?php endforeach;?>


                                <?php foreach ($next as $nx): ?>
                                <?php if (!empty($nx)): ?>
                                <div class="single next">
                                    <div class="image-thumb">
                                        <img class="img-pn" src="<?= "/files/Blog/photo/" . $nx->photo ?>" alt="Image">
                                    </div>
                                    <div class="title">
                                        <h3><?= $nx->title ?></h3>
                                        <a href="/post/<?= $nx->id ?>">Next<span class="fa fa-long-arrow-right"></span></a>
                                    </div>
                                </div>
                                    <?php endif; ?>
                                <?php endforeach;?>


                            </div>
                            <!--End prev next option-->
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>
    <!--End blog single area-->

