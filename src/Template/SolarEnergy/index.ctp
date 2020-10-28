<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Solar Energy

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
                  <th scope="col"><?= $this->Paginator->sort('title_advantage') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('title_advantage2') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('title_advantage3') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('title_advantage4') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('title_advantage5') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('title_advantage6') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('title_advantage7') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('title_advantage8') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('title_advantage9') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('title_advantage10') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('title_advantage11') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('title_advantage12') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('for') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('photo3') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('photo3_dir') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('for2') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('photo4') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('photo4_dir') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('for3') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('photo5') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('photo5_dir') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('for4') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('photo6') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('photo6_dir') ?></th>
                  <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($solarEnergy as $solarEnergy): ?>
                <tr>
                  <td><?= $this->Number->format($solarEnergy->id) ?></td>
                  <td><?= h($solarEnergy->created) ?></td>
                  <td><?= h($solarEnergy->modifield) ?></td>
                  <td><?= h($solarEnergy->title) ?></td>
                  <td><?= h($solarEnergy->photo) ?></td>
                  <td><?= h($solarEnergy->photo_dir) ?></td>
                  <td><?= h($solarEnergy->photo2) ?></td>
                  <td><?= h($solarEnergy->photo2_dir) ?></td>
                  <td><?= h($solarEnergy->title_advantage) ?></td>
                  <td><?= h($solarEnergy->title_advantage2) ?></td>
                  <td><?= h($solarEnergy->title_advantage3) ?></td>
                  <td><?= h($solarEnergy->title_advantage4) ?></td>
                  <td><?= h($solarEnergy->title_advantage5) ?></td>
                  <td><?= h($solarEnergy->title_advantage6) ?></td>
                  <td><?= h($solarEnergy->title_advantage7) ?></td>
                  <td><?= h($solarEnergy->title_advantage8) ?></td>
                  <td><?= h($solarEnergy->title_advantage9) ?></td>
                  <td><?= h($solarEnergy->title_advantage10) ?></td>
                  <td><?= h($solarEnergy->title_advantage11) ?></td>
                  <td><?= h($solarEnergy->title_advantage12) ?></td>
                  <td><?= h($solarEnergy->for) ?></td>
                  <td><?= h($solarEnergy->photo3) ?></td>
                  <td><?= h($solarEnergy->photo3_dir) ?></td>
                  <td><?= h($solarEnergy->for2) ?></td>
                  <td><?= h($solarEnergy->photo4) ?></td>
                  <td><?= h($solarEnergy->photo4_dir) ?></td>
                  <td><?= h($solarEnergy->for3) ?></td>
                  <td><?= h($solarEnergy->photo5) ?></td>
                  <td><?= h($solarEnergy->photo5_dir) ?></td>
                  <td><?= h($solarEnergy->for4) ?></td>
                  <td><?= h($solarEnergy->photo6) ?></td>
                  <td><?= h($solarEnergy->photo6_dir) ?></td>
                  <td class="actions text-right">
                      <?= $this->Html->link(__('View'), ['action' => 'view', $solarEnergy->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= $this->Html->link(__('Edit'), ['action' => 'edit', $solarEnergy->id], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $solarEnergy->id], ['confirm' => __('Are you sure you want to delete # {0}?', $solarEnergy->id), 'class'=>'btn btn-danger btn-xs']) ?>
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