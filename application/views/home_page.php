<!-- page content -->
<div class="right_col" role="main" style="margin-left:0px !important">
  <div class="">
    <div class="page-title">

      <div class="title_left">
        <h3>Informasi Meeting</h3>
      </div>

      <div class="title_right">
        <div class="pull-right">

          <?php if($this->session->userdata('id_user')): ?>
            <div class="btn-group">
              <a href="<?=base_url('meetings/tambah')?>" type="button" class="btn btn-danger"><i class="fa fa-plus"></i> Meeting</a>
              <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button" aria-expanded="false">Ruangan <span class="caret"></span></button>
              <ul role="menu" class="dropdown-menu">
                <li><a href="<?=base_url('locations/tambah')?>">Tambah</a>
                </li>
                <li><a href="<?=base_url('locations')?>">Lihat daftar</a>
                </li>
              </ul>
            </div>
          <?php endif; ?>

        </div>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <!-- notification -->
        <?=$this->session->flashdata('notification')?>
        <!-- /notification -->
        <div class="x_panel">
          <div class="x_content">
            <div class="table-responsive">
              <table class="table table-striped table-bordered jambo_table bulk_action">
                <thead>
                  <tr class="headings">
                    <th style="text-align:center">Tanggal</th>
                    <th style="text-align:center">Jam</th>
                    <th style="text-align:center">Ruangan</th>
                    <th style="text-align:center">Perihal</th> 
                    <th style="text-align:center">Pengguna</th> 
                    <?php if($this->session->userdata('id_user')): ?>
                      <th style="text-align:center">Jumlah Peserta</th>
                      <th style="text-align:center">PIC</th>
                      <th style="text-align:center;width:100px"></th>
                    <?php endif; ?>
                  </tr>
                </thead>

                <tbody>
                  <?php foreach($meetings as $meetings_item): ?>
                    <tr>
                      <td style="text-align:center"><?=convert_date(date("d/m/Y", strtotime($meetings_item['tanggal_meetings'])))?></td>
                      <td style="text-align:center"><?=date("H:i", strtotime($meetings_item['jam_meetings']))?></td>
                      <td style="text-align:center"><?=$meetings_item['nama_locations']?></td>
                      <td><?=$meetings_item['perihal_meetings']?></td>
                      <td style="text-align:center"><?=ucfirst($meetings_item['nama_divisions'])?></td>
                      <?php if($this->session->userdata('id_user')): ?>
                        <td style="text-align:center"><?=$meetings_item['jumlah_peserta_meetings']?></td>
                        <td style="text-align:center"><?=ucfirst($meetings_item['pic_meetings'])?></td>
                        <td  style="text-align:center;">
                          <a href="<?= base_url('meetings/edit/'.$meetings_item['id_meetings']) ?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                          <a href="<?= base_url('meetings/delete/'.$meetings_item['id_meetings']) ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></a>
                        </td>
                      <?php endif; ?>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->

