<section class="content-header">
  <h1>
    Solar Energy
    <small><?php echo __('View'); ?></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo $this->Url->build(['action' => 'index']); ?>"><i class="fa fa-dashboard"></i> <?php echo __('Home'); ?></a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-info"></i>
          <h3 class="box-title"><?php echo __('Information'); ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <dl class="dl-horizontal">
            <dt scope="row"><?= __('Title') ?></dt>
            <dd><?= h($solarEnergy->title) ?></dd>
            <dt scope="row"><?= __('Photo') ?></dt>
            <dd><?= h($solarEnergy->photo) ?></dd>
            <dt scope="row"><?= __('Photo Dir') ?></dt>
            <dd><?= h($solarEnergy->photo_dir) ?></dd>
            <dt scope="row"><?= __('Photo2') ?></dt>
            <dd><?= h($solarEnergy->photo2) ?></dd>
            <dt scope="row"><?= __('Photo2 Dir') ?></dt>
            <dd><?= h($solarEnergy->photo2_dir) ?></dd>
            <dt scope="row"><?= __('Title Advantage') ?></dt>
            <dd><?= h($solarEnergy->title_advantage) ?></dd>
            <dt scope="row"><?= __('Title Advantage2') ?></dt>
            <dd><?= h($solarEnergy->title_advantage2) ?></dd>
            <dt scope="row"><?= __('Title Advantage3') ?></dt>
            <dd><?= h($solarEnergy->title_advantage3) ?></dd>
            <dt scope="row"><?= __('Title Advantage4') ?></dt>
            <dd><?= h($solarEnergy->title_advantage4) ?></dd>
            <dt scope="row"><?= __('Title Advantage5') ?></dt>
            <dd><?= h($solarEnergy->title_advantage5) ?></dd>
            <dt scope="row"><?= __('Title Advantage6') ?></dt>
            <dd><?= h($solarEnergy->title_advantage6) ?></dd>
            <dt scope="row"><?= __('Title Advantage7') ?></dt>
            <dd><?= h($solarEnergy->title_advantage7) ?></dd>
            <dt scope="row"><?= __('Title Advantage8') ?></dt>
            <dd><?= h($solarEnergy->title_advantage8) ?></dd>
            <dt scope="row"><?= __('Title Advantage9') ?></dt>
            <dd><?= h($solarEnergy->title_advantage9) ?></dd>
            <dt scope="row"><?= __('Title Advantage10') ?></dt>
            <dd><?= h($solarEnergy->title_advantage10) ?></dd>
            <dt scope="row"><?= __('Title Advantage11') ?></dt>
            <dd><?= h($solarEnergy->title_advantage11) ?></dd>
            <dt scope="row"><?= __('Title Advantage12') ?></dt>
            <dd><?= h($solarEnergy->title_advantage12) ?></dd>
            <dt scope="row"><?= __('For') ?></dt>
            <dd><?= h($solarEnergy->for) ?></dd>
            <dt scope="row"><?= __('Photo3') ?></dt>
            <dd><?= h($solarEnergy->photo3) ?></dd>
            <dt scope="row"><?= __('Photo3 Dir') ?></dt>
            <dd><?= h($solarEnergy->photo3_dir) ?></dd>
            <dt scope="row"><?= __('For2') ?></dt>
            <dd><?= h($solarEnergy->for2) ?></dd>
            <dt scope="row"><?= __('Photo4') ?></dt>
            <dd><?= h($solarEnergy->photo4) ?></dd>
            <dt scope="row"><?= __('Photo4 Dir') ?></dt>
            <dd><?= h($solarEnergy->photo4_dir) ?></dd>
            <dt scope="row"><?= __('For3') ?></dt>
            <dd><?= h($solarEnergy->for3) ?></dd>
            <dt scope="row"><?= __('Photo5') ?></dt>
            <dd><?= h($solarEnergy->photo5) ?></dd>
            <dt scope="row"><?= __('Photo5 Dir') ?></dt>
            <dd><?= h($solarEnergy->photo5_dir) ?></dd>
            <dt scope="row"><?= __('For4') ?></dt>
            <dd><?= h($solarEnergy->for4) ?></dd>
            <dt scope="row"><?= __('Photo6') ?></dt>
            <dd><?= h($solarEnergy->photo6) ?></dd>
            <dt scope="row"><?= __('Photo6 Dir') ?></dt>
            <dd><?= h($solarEnergy->photo6_dir) ?></dd>
            <dt scope="row"><?= __('Id') ?></dt>
            <dd><?= $this->Number->format($solarEnergy->id) ?></dd>
            <dt scope="row"><?= __('Created') ?></dt>
            <dd><?= h($solarEnergy->created) ?></dd>
            <dt scope="row"><?= __('Modifield') ?></dt>
            <dd><?= h($solarEnergy->modifield) ?></dd>
          </dl>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-text-width"></i>
          <h3 class="box-title"><?= __('Description') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <?= $this->Text->autoParagraph($solarEnergy->description); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-text-width"></i>
          <h3 class="box-title"><?= __('Advantage') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <?= $this->Text->autoParagraph($solarEnergy->advantage); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-text-width"></i>
          <h3 class="box-title"><?= __('Advantage2') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <?= $this->Text->autoParagraph($solarEnergy->advantage2); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-text-width"></i>
          <h3 class="box-title"><?= __('Advantage3') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <?= $this->Text->autoParagraph($solarEnergy->advantage3); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-text-width"></i>
          <h3 class="box-title"><?= __('Advantage4') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <?= $this->Text->autoParagraph($solarEnergy->advantage4); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-text-width"></i>
          <h3 class="box-title"><?= __('Advantage5') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <?= $this->Text->autoParagraph($solarEnergy->advantage5); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-text-width"></i>
          <h3 class="box-title"><?= __('Advantage6') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <?= $this->Text->autoParagraph($solarEnergy->advantage6); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-text-width"></i>
          <h3 class="box-title"><?= __('Advantage7') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <?= $this->Text->autoParagraph($solarEnergy->advantage7); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-text-width"></i>
          <h3 class="box-title"><?= __('Advantage8') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <?= $this->Text->autoParagraph($solarEnergy->advantage8); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-text-width"></i>
          <h3 class="box-title"><?= __('Advantage9') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <?= $this->Text->autoParagraph($solarEnergy->advantage9); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-text-width"></i>
          <h3 class="box-title"><?= __('Advantage10') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <?= $this->Text->autoParagraph($solarEnergy->advantage10); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-text-width"></i>
          <h3 class="box-title"><?= __('Advantage11') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <?= $this->Text->autoParagraph($solarEnergy->advantage11); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-text-width"></i>
          <h3 class="box-title"><?= __('Advantage12') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <?= $this->Text->autoParagraph($solarEnergy->advantage12); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-text-width"></i>
          <h3 class="box-title"><?= __('Description For') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <?= $this->Text->autoParagraph($solarEnergy->description_for); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-text-width"></i>
          <h3 class="box-title"><?= __('Description For2') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <?= $this->Text->autoParagraph($solarEnergy->description_for2); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-text-width"></i>
          <h3 class="box-title"><?= __('Description For3') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <?= $this->Text->autoParagraph($solarEnergy->description_for3); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-text-width"></i>
          <h3 class="box-title"><?= __('Description For4') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <?= $this->Text->autoParagraph($solarEnergy->description_for4); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-text-width"></i>
          <h3 class="box-title"><?= __('Modality') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <?= $this->Text->autoParagraph($solarEnergy->modality); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-text-width"></i>
          <h3 class="box-title"><?= __('Modality2') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <?= $this->Text->autoParagraph($solarEnergy->modality2); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-text-width"></i>
          <h3 class="box-title"><?= __('Modality3') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <?= $this->Text->autoParagraph($solarEnergy->modality3); ?>
        </div>
      </div>
    </div>
  </div>
</section>
