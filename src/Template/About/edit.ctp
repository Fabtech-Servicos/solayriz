<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\About $about
 */
?>
<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      About
      <small><?php echo __('Edit'); ?></small>
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
          <?php echo $this->Form->create($about, ['type' => 'file']); ?>
            <div class="box-body">
              <?php
               // echo $this->Form->control('modifield', ['empty' => true]);
                echo $this->Form->control('title');
                echo $this->Form->control('description',['id' => 'editor']);
                echo $this->Form->control('title_vision');
                echo $this->Form->control('vision',['id' => 'editor2']);
                echo $this->Form->control('title_mission');
                echo $this->Form->control('mission',['id' => 'editor3']);
                echo $this->Form->control('title_value');
                echo $this->Form->control('value',['id' => 'editor4']);
                echo $this->Form->control('title_state');
                echo $this->Form->control('state',['id' => 'editor5']);
                echo $this->Form->control('photo', ['type' => 'file']);
                echo $this->Form->control('photo2', ['type' => 'file']);
                echo $this->Form->control('map', ['type' => 'file']);
                //echo $this->Form->control('photo_dir');
              ?>
            </div>
            <!-- /.box-body -->

          <?php echo $this->Form->submit(__('Submit')); ?>

          <?php echo $this->Form->end(); ?>
        </div>
        <!-- /.box -->
      </div>
  </div>

      <?php $this->start('scriptBottom'); ?>
      <?php echo $this->Html->script([
          'ckeditor/ckeditor',
      ]); ?>
      <script>
          CKEDITOR.replace( 'editor' );
      </script>

      <script>
          CKEDITOR.replace( 'editor2' );
      </script>

      <script>
          CKEDITOR.replace( 'editor3' );
      </script>

      <script>
          CKEDITOR.replace( 'editor4' );
      </script>

      <script>
          CKEDITOR.replace( 'editor5' );
      </script>
      <?php  $this->end(); ?>
  <!-- /.row -->
</section>
