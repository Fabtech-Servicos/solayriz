
<!--Start breadcrumb area-->
<section class="breadcrumb-area" style="background-image: url(/images/resources/breadcrumb-bg.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content clearfix">
                    <div class="title float-left">
                        <h1>Projeto</h1>
                    </div>
                    <div class="breadcrumb-menu float-right">
                        <ul class="clearfix">
                            <li><a href="index.html">Início</a></li>
                            <li class="active">Projeto</li>
                        </ul>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
<!--End breadcrumb area-->

<!--Start Project single area-->
<section class="project-single-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="single-project-image-box">
                    <img  style="width: 570px; height: 360px; object-fit: cover" src="<?= "/files/Projects/photo/" . $projectSingle->photo ?>"" alt="Awesome Image">
                </div>
            </div>
            <div class="col-xl-6 col-lg-12">
                <div class="single-project-content-box">
                    <h2>  <?= $projectSingle->name ?></h2>
                    <div class="text">
                        <?= $projectSingle->description ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!--End Project single area-->

