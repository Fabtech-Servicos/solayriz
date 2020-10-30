
    <section class="breadcrumb-area" style="background-image: url(/images/resources/breadcrumb-bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content clearfix">
                        <div class="title float-left">
                            <h1>Blog</h1>
                        </div>
                        <div class="breadcrumb-menu float-right">
                            <ul class="clearfix">
                                <li><a href="/">Home</a></li>
                                <li class="active">Blog</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->

    <!--Start blog area-->
    <section id="blog-area" class="blog-style2-area">
        <div class="container">
            <div class="row">
                <!--Start single blog post-->
                <?php foreach ($blog as $post): ?>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="single-blog-post style2 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="img-holder">
                                <img class="img-ball" src="<?= "/files/Blog/photo/" . $post->photo ?>" alt="Awesome Image">
                            <div class="overlay-style-two"></div>
                            <div class="post-date">
                                <h3 style="margin-top: 15px"><span><?= $post->date ?></span></h3>
                            </div>
                            <div class="overlay-content">
                                <div class="box">
                                    <div class="read-more">
                                        <a class="btn-two" href="/post/<?= $post->id ?>">Leia Mais<span class="icon-null"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-holder">
                            <div class="meta-box">
                                <ul class="meta-info">
                                    <li><b><?= $post->signature ?></b></li>
                                </ul>
                                <div class="author-icon">
                                    <span class="icon-user"></span>
                                </div>
                            </div>
                            <h3 class="blog-title"><a href="/post/<?= $post->id ?>"><?= $post->title ?></a></h3>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <ul class="post-pagination text-center">
                        <?php echo $this->Paginator->numbers(); ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--End blog area-->
</html>
