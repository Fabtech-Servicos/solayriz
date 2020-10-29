
<section class="breadcrumb-area" style="background-image: url(/images/resources/breadcrumb-bg.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content clearfix">
                    <div class="title float-left">
                        <h1>Nossos Videos</h1>
                    </div>
                    <div class="breadcrumb-menu float-right">
                        <ul class="clearfix">
                            <li><a href="/">Home</a></li>
                            <li class="active">Videos</li>
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
            <?php foreach ($videos as $video): ?>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="video-holder-box">
                        <div class="img-holder">
                            <img id="vdy" src="<?= "/files/Videos/capa/" . $video->capa ?>" alt="Awesome Image">
                            <div class="icon-holder">
                                <div class="icon">
                                    <div class="inner text-center">
                                        <a class="html5lightbox wow zoomIn" data-wow-delay="300ms" data-wow-duration="1500ms" title="Solartech Video Gallery" href="<?= $video->link ?>">
                                            <span class="icon-null-4"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="row" style="margin-top: 50px">
            <div class="col-md-12">
                <ul class="post-pagination text-center">
                    <li><a href="#"><i class="fa fa-caret-left" aria-hidden="true"></i></a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--End blog area-->
</html>
