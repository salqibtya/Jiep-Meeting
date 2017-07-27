<!-- home content -->
<body style="background-color:rgb(247,247,247) !important ">
  <div class="container body" style="top: 0; bottom: 0; left: 0; height: 100%">
   <div class="main_container">
     <?php $this->load->view('templates/menubar'); ?>
     <div class="right_col" role="main" style="margin-left:0px !important">
      
        <div class="col-md-12 col-sm-12 col-xs-12">
         <!-- <a ><i class="fa fa-user-plus">Tambah</i></a>-->
         <div class="x_panel">
          <div class="x_content">
            <div class="table-responsive">
              <table class="table table-striped table-bordered jambo_table bulk_action">
                <thead>
                  <tr class="headings">
                    <th style="text-align:center">Tanggal</th>
                    <th style="text-align:center">Jam Mulai</th>
                    <th style="text-align:center">Jam Selesai</th>
                    <th style="text-align:center">Ruangan</th>
                    <th style="text-align:center">Perihal</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($meetings as $meetings_item):?>
                    <tr>
                      <td style="text-align:center"><?=$meetings_item['tanggal']?></td>
                      <td style="text-align:center"><?=$meetings_item['waktu_mulai']?></td>
                      <td style="text-align:center"><?=$meetings_item['waktu_selesai']?></td>
                      <td style="text-align:center"><?=$meetings_item['nama_ruangan']?></td>
                      <td style="text-align:center;"><?=$meetings_item['perihal']?></td>
                    </tr>
                  <?php endforeach?>
                </tbody>
              </table>
            </div>
          </div>

        </div>
      </div>
    
  </div>
</div> 
  <a href="<?=base_url('Divisi/tambahmeeting')?>" class="btn-floating btn-large blue" style="color: rgb(63,83,103); position:fixed; bottom: 60px; right: 35px !important"><i class="glyphicon glyphicon-plus-sign fa-4x" ></i></a>
<div class="clearfix"></div>
</div>
</body>
<!-- home content -->