<!-- page content -->
<div class="right_col" role="main" style="margin-left:0px !important">
  <div class="">
    <div class="page-title">
    
      <div class="page-title">
      <div class="title_left">
        <h3><a href="<?=base_url()?>"><i class="fa fa-chevron-left"></i></a> <?=$title?></h3>
      </div>
    </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
        </div>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <!-- notification -->
        <?=$this->session->flashdata('notification')?>
        <!-- /notification -->

        <div class="x_panel">
          <div class="x_content">
            <table style="width:100%" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th style="text-align:center">Nama ruangan</th>
                  <th style="text-align:center; width:100px"></th>
                </tr>
              </thead>

              <tbody>
                <?php foreach($locations as $locations_item): ?>
                  <tr>
                    <td><?=$locations_item['nama_locations']?></td>
                    <td style="text-align:center;">
                    <a href="<?= base_url('locations/edit/'.$locations_item['id_locations']) ?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i> Edit</a>
                    </td>
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
<!-- /page content -->

