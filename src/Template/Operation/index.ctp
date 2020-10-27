<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Operation

    <div class="pull-right"><?php echo $this->Html->link(__('New'), ['action' => 'add'], ['class'=>'btn btn-success btn-xs']) ?></div>
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><?php echo __('List'); ?></h3>

          <div class="box-tools">
            <form action="<?php echo $this->Url->build(); ?>" method="POST">
           <!--              <div class="input-group input-group-sm" style="width: 150px;">-->
<!--                <input type="text" name="table_search" class="form-control pull-right" placeholder="--><?php //echo __('Search'); ?><!--">-->
<!---->
<!--                <div class="input-group-btn">-->
<!--                  <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>-->
<!--                </div>-->
<!--              </div>-->
            </form>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <thead>
              <tr>
                  <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('modifield') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('photo') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('photo_dir') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('photo2') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('photo2_dir') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('title2') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('cover') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('cover_dir') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('link') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('title_installation') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('photo3') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('photo3_dir') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('title_installation2') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('Photo4') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('photo4_dir') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('begin') ?></th>
                  <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($operation as $operation): ?>
                <tr>
                  <td><?= $this->Number->format($operation->id) ?></td>
                  <td><?= h($operation->created) ?></td>
                  <td><?= h($operation->modifield) ?></td>
                  <td><?= h($operation->title) ?></td>
                  <td><?= h($operation->photo) ?></td>
                  <td><?= h($operation->photo_dir) ?></td>
                  <td><?= h($operation->photo2) ?></td>
                  <td><?= h($operation->photo2_dir) ?></td>
                  <td><?= h($operation->title2) ?></td>
                  <td><?= h($operation->cover) ?></td>
                  <td><?= h($operation->cover_dir) ?></td>
                  <td><?= h($operation->link) ?></td>
                  <td><?= h($operation->title_installation) ?></td>
                  <td><?= h($operation->photo3) ?></td>
                  <td><?= h($operation->photo3_dir) ?></td>
                  <td><?= h($operation->title_installation2) ?></td>
                  <td><?= h($operation->Photo4) ?></td>
                  <td><?= h($operation->photo4_dir) ?></td>
                  <td><?= h($operation->begin) ?></td>
                  <td class="actions text-right">
                      <?= $this->Html->link(__('View'), ['action' => 'view', $operation->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= $this->Html->link(__('Edit'), ['action' => 'edit', $operation->id], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $operation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $operation->id), 'class'=>'btn btn-danger btn-xs']) ?>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>
</section>
