
<!--Start breadcrumb area-->
<section class="breadcrumb-area" style="background-image: url(/images/resources/breadcrumb-bg.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content clearfix">
                    <div class="title float-left">
                        <?php foreach ($categor as $cat): ?>
                          <?php if($_SERVER["REQUEST_URI"] == "/projetos/".$cat->id) : ?>
                            <h1><?= $cat->title; ?></h1>
                           <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                    <div class="breadcrumb-menu float-right">
                        <ul class="clearfix">
                            <li><a href="/">Início</a></li>
                            <li class="active">Projetos</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->

<!--Start Main project area-->
<section class="main-project-area v3">
    <div class="container">
        <div class="row">
            <!--Start single project item-->
            <?php foreach ($project as $proj):?>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 filter-item env res">
                <div class="single-project-style3 marbtm30">
                    <div class="img-holder">
                        <img id="img-project"  src="<?= "/files/Projects/photo/" . $proj->photo ?>" alt="Imagem projeto">
                        <div class="overlay-content">
                            <div class="inner-content">
                                <div class="title-box">
                                    <h3><a href="#"><?= $proj->name ?></a></h3>
                                    <span>Solayriz</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            <!--End single project item-->
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
<!--End Main project area-->
