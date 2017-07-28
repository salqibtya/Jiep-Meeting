<!-- home content -->
<body style="background-color:rgb(247,247,247) !important ">
  <div class="container body" style="top: 0; bottom: 0; left: 0; height: 100%">
   <div class="main_container">
    <div class="right_col" role="main" style="margin-left:0px !important">
      
      <div class="col-md-12 col-sm-12 col-xs-12">
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
                    <th style="text-align:center">Pengguna</th> 
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($meetings as $meetings_item):?>
                    <tr>
                      <td style="text-align:center"><?=date("d-m-Y",strtotime($meetings_item['tanggal']))?></td>
                      <td style="text-align:center"><?=$meetings_item['waktu_mulai']?></td>
                      <td style="text-align:center"><?=$meetings_item['waktu_selesai']?></td>
                      <td style="text-align:center"><?=$meetings_item['nama_ruangan']?></td>
                      <td style="text-align:center;"><?=$meetings_item['perihal']?></td>
                      <td style="text-align:center"><?=$meetings_item['nama_divisi']?></td>
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
</div>
</body>
<!-- home content -->