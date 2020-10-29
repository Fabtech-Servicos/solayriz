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
          <?php echo $this->Form->create($operation, ['type' => 'file']); ?>
            <div class="box-body">
              <?php
                echo $this->Form->control('title');
                echo $this->Form->control('description', ['id' => 'editor']);
                echo $this->Form->control('photo', ['type' => 'file']);;
                echo $this->Form->control('photo2', ['type' => 'file']);
                echo $this->Form->control('title2');
                echo $this->Form->control('scenario', ['id' => 'editor2']);
                echo $this->Form->control('scenario2', ['id' => 'editor3']);
                echo $this->Form->control('scenario3', ['id' => 'editor4']);
                echo $this->Form->control('cover', ['type' => 'file']);
                echo $this->Form->control('link');
                echo $this->Form->control('begin');
                echo $this->Form->control('steps', ['id' => 'editor7']);
                echo $this->Form->control('steps2', ['id' => 'editor8']);
                echo $this->Form->control('steps3', ['id' => 'editor9']);
                echo $this->Form->control('steps4', ['id' => 'editor10']);
                echo $this->Form->control('steps5', ['id' => 'editor11']);
                echo $this->Form->control('steps6', ['id' => 'editor12']);
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

      <script>
          CKEDITOR.replace( 'editor6' );
      </script>

      <script>
          CKEDITOR.replace( 'editor7' );
      </script>

      <script>
          CKEDITOR.replace( 'editor8' );
      </script>

      <script>
          CKEDITOR.replace( 'editor9' );
      </script>

      <script>
          CKEDITOR.replace( 'editor10' );
      </script>

      <script>
          CKEDITOR.replace( 'editor11' );
      </script>

      <script>
          CKEDITOR.replace( 'editor12' );
      </script>
      <?php  $this->end(); ?>

  </section>
