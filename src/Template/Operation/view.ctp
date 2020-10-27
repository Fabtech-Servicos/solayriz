<section class="content-header">
  <h1>
    Operation
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
            <dd><?= h($operation->title) ?></dd>
            <dt scope="row"><?= __('Photo') ?></dt>
            <dd><?= h($operation->photo) ?></dd>
            <dt scope="row"><?= __('Photo Dir') ?></dt>
            <dd><?= h($operation->photo_dir) ?></dd>
            <dt scope="row"><?= __('Photo2') ?></dt>
            <dd><?= h($operation->photo2) ?></dd>
            <dt scope="row"><?= __('Photo2 Dir') ?></dt>
            <dd><?= h($operation->photo2_dir) ?></dd>
            <dt scope="row"><?= __('Title2') ?></dt>
            <dd><?= h($operation->title2) ?></dd>
            <dt scope="row"><?= __('Cover') ?></dt>
            <dd><?= h($operation->cover) ?></dd>
            <dt scope="row"><?= __('Cover Dir') ?></dt>
            <dd><?= h($operation->cover_dir) ?></dd>
            <dt scope="row"><?= __('Link') ?></dt>
            <dd><?= h($operation->link) ?></dd>
            <dt scope="row"><?= __('Title  Installation') ?></dt>
            <dd><?= h($operation->title_installation) ?></dd>
            <dt scope="row"><?= __('photo3') ?></dt>
            <dd><?= h($operation->photo3) ?></dd>
            <dt scope="row"><?= __('photo3 Dir') ?></dt>
            <dd><?= h($operation->photo3_dir) ?></dd>
            <dt scope="row"><?= __('Title  Installation2') ?></dt>
            <dd><?= h($operation->title_installation2) ?></dd>
            <dt scope="row"><?= __('Photo4') ?></dt>
            <dd><?= h($operation->Photo4) ?></dd>
            <dt scope="row"><?= __('Photo4 Dir') ?></dt>
            <dd><?= h($operation->photo4_dir) ?></dd>
            <dt scope="row"><?= __('Begin') ?></dt>
            <dd><?= h($operation->begin) ?></dd>
            <dt scope="row"><?= __('Id') ?></dt>
            <dd><?= $this->Number->format($operation->id) ?></dd>
            <dt scope="row"><?= __('Created') ?></dt>
            <dd><?= h($operation->created) ?></dd>
            <dt scope="row"><?= __('Modifield') ?></dt>
            <dd><?= h($operation->modifield) ?></dd>
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
            <?= $this->Text->autoParagraph($operation->description); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-text-width"></i>
          <h3 class="box-title"><?= __('Scenario') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <?= $this->Text->autoParagraph($operation->scenario); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-text-width"></i>
          <h3 class="box-title"><?= __('Scenario2') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <?= $this->Text->autoParagraph($operation->scenario2); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-text-width"></i>
          <h3 class="box-title"><?= __('Scenario3') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <?= $this->Text->autoParagraph($operation->scenario3); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-text-width"></i>
          <h3 class="box-title"><?= __('Installation') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <?= $this->Text->autoParagraph($operation->installation); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-text-width"></i>
          <h3 class="box-title"><?= __('Installation2') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <?= $this->Text->autoParagraph($operation->installation2); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-text-width"></i>
          <h3 class="box-title"><?= __('Steps') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <?= $this->Text->autoParagraph($operation->steps); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-text-width"></i>
          <h3 class="box-title"><?= __('Steps2') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <?= $this->Text->autoParagraph($operation->steps2); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-text-width"></i>
          <h3 class="box-title"><?= __('Steps3') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <?= $this->Text->autoParagraph($operation->steps3); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-text-width"></i>
          <h3 class="box-title"><?= __('Steps4') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <?= $this->Text->autoParagraph($operation->steps4); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-text-width"></i>
          <h3 class="box-title"><?= __('Steps5') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <?= $this->Text->autoParagraph($operation->steps5); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-text-width"></i>
          <h3 class="box-title"><?= __('Steps6') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <?= $this->Text->autoParagraph($operation->steps6); ?>
        </div>
      </div>
    </div>
  </div>
</section>
