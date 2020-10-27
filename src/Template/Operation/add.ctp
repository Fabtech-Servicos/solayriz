<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Operation $operation
 */
?>
<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Operation
      <small><?php echo __('Add'); ?></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo $this->Url->build(['action' => 'index']); ?>"><i class="fa fa-dashboard"></i> <?php echo __('Home'); ?></a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title"><?php echo __('Form'); ?></h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <?php echo $this->Form->create($operation, ['role' => 'form']); ?>
            <div class="box-body">
              <?php
                echo $this->Form->control('modifield', ['empty' => true]);
                echo $this->Form->control('title');
                echo $this->Form->control('description');
                echo $this->Form->control('photo');
                echo $this->Form->control('photo_dir');
                echo $this->Form->control('photo2');
                echo $this->Form->control('photo2_dir');
                echo $this->Form->control('title2');
                echo $this->Form->control('scenario');
                echo $this->Form->control('scenario2');
                echo $this->Form->control('scenario3');
                echo $this->Form->control('cover');
                echo $this->Form->control('cover_dir');
                echo $this->Form->control('link');
                echo $this->Form->control('title_installation');
                echo $this->Form->control('installation');
                echo $this->Form->control('photo3');
                echo $this->Form->control('photo3_dir');
                echo $this->Form->control('title_installation2');
                echo $this->Form->control('installation2');
                echo $this->Form->control('Photo4');
                echo $this->Form->control('photo4_dir');
                echo $this->Form->control('begin');
                echo $this->Form->control('steps');
                echo $this->Form->control('steps2');
                echo $this->Form->control('steps3');
                echo $this->Form->control('steps4');
                echo $this->Form->control('steps5');
                echo $this->Form->control('steps6');
              ?>
            </div>
            <!-- /.box-body -->

          <?php echo $this->Form->submit(__('Submit')); ?>

          <?php echo $this->Form->end(); ?>
        </div>
        <!-- /.box -->
      </div>
  </div>
  <!-- /.row -->
</section>
