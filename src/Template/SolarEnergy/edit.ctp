<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SolarEnergy $solarEnergy
 */
?>
<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Solar Energy
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
          <?php echo $this->Form->create($solarEnergy, ['type' => 'file']); ?>
            <div class="box-body">
              <?php
              echo $this->Form->control('title');
              echo $this->Form->control('description', ['id' => 'editor']);
              echo $this->Form->control('photo', ['type' => 'file']);
              echo $this->Form->control('photo2', ['type' => 'file']);
              echo $this->Form->control('title_advantage');
              echo $this->Form->control('advantage', ['id' => 'editor']);
              echo $this->Form->control('title_advantage2');
              echo $this->Form->control('advantage2', ['id' => 'editor2']);
              echo $this->Form->control('title_advantage3');
              echo $this->Form->control('advantage3', ['id' => 'editor3']);
              echo $this->Form->control('title_advantage4');
              echo $this->Form->control('advantage4', ['id' => 'editor4']);
              echo $this->Form->control('title_advantage5');
              echo $this->Form->control('advantage5', ['id' => 'editor5']);
              echo $this->Form->control('title_advantage6');
              echo $this->Form->control('advantage6', ['id' => 'editor6']);
              echo $this->Form->control('title_advantage7');
              echo $this->Form->control('advantage7', ['id' => 'editor7']);
              echo $this->Form->control('title_advantage8');
              echo $this->Form->control('advantage8', ['id' => 'editor8']);
              echo $this->Form->control('title_advantage9');
              echo $this->Form->control('advantage9', ['id' => 'editor9']);
              echo $this->Form->control('title_advantage10');
              echo $this->Form->control('advantage10', ['id' => 'editor10']);
              echo $this->Form->control('title_advantage11');
              echo $this->Form->control('advantage11', ['id' => 'editor11']);
              echo $this->Form->control('title_advantage12');
              echo $this->Form->control('advantage12', ['id' => 'editor12']);
              echo $this->Form->control('para');
              echo $this->Form->control('description_for', ['id' => 'editor13']);
              echo $this->Form->control('photo3', ['type' => 'file']);
              echo $this->Form->control('for2');
              echo $this->Form->control('description_for2', ['id' => 'editor14']);
              echo $this->Form->control('photo4', ['type' => 'file']);
              echo $this->Form->control('for3');
              echo $this->Form->control('description_for3', ['id' => 'editor15']);
              echo $this->Form->control('photo5', ['type' => 'file']);
              echo $this->Form->control('for4');
              echo $this->Form->control('description_for4', ['id' => 'editor16']);
              echo $this->Form->control('photo6', ['type' => 'file']);
              echo $this->Form->control('modality', ['id' => 'editor17']);
              echo $this->Form->control('modality2', ['id' => 'editor18']);
              echo $this->Form->control('modality3', ['id' => 'editor19']);
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

      <script>
          CKEDITOR.replace( 'editor13' );
      </script>

      <script>
          CKEDITOR.replace( 'editor14' );
      </script>

      <script>
          CKEDITOR.replace( 'editor15' );
      </script>

      <script>
          CKEDITOR.replace( 'editor16' );
      </script>

      <script>
          CKEDITOR.replace( 'editor17' );
      </script>

      <script>
          CKEDITOR.replace( 'editor18' );
      </script>

      <script>
          CKEDITOR.replace( 'editor19' );
      </script>
      <?php  $this->end(); ?>
</section>
