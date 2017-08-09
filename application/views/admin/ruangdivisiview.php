<body style="background-color:rgb(247,247,247) ">
  <div class="container body" style="top: 0; bottom: 0; left: 0; height: 100%">
    <div class="main_container">

     <script src="../assets/daterangepicker.css"></script>
     <script src="../assets/daterangepicker.js"></script>

     <div class="right_col" role="main" style="margin-left:0px!important">
      <?=$this->session->flashdata('notification')?>
      <div class="page-title">
        <div class="title-right" style="background-color: rgb(247,247,247)">
        </div>
      </div>
    </div>

    <div class="clearfix"></div>
    <div class="">
      <div class="col-md-12 col-sm-12 col-xs-12">

        <!-- konten di sini -->
        <div class="" role="tabpanel" data-example-id="togglable-tabs">

         <!-- tab header -->
         <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
          <li role="presentation" class="active"><a href="#tab_content1" id="ruangan-tab" role="tab" data-toggle="tab" aria-expanded="true">R & D</a>
          </li>
          <li role="presentation" class=""><a href="#tab_content2" role="tab" id="meeting-tab" data-toggle="tab" aria-expanded="false">Dashboard</a>
          </li>
        </ul>
        <!-- /tab header -->
        <!-- tab content -->
        <div id="myTabContent" class="tab-content">

          <!-- content 1 -->
          <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="ruangan-tab">

            <div class="col-md-6 col-sm-6 col-xs-12">
              <table class="table table-striped table-bordered dt-responsive nowrap jambo_table bulk_action" cellspacing="0" width="100%">

                <thead>
                  <tr class="headings">
                    <th style="text-align:center">Nomor</th>
                    <th style="text-align:center">Nama Ruangan</th>
                    <th style="text-align:center">Kapasitas</th>
                    <th style="text-align:center;width:100px"><button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Tambah</button></th>
                  </tr>   
                </thead>

                <tbody>
                  <?php $number = 1; ?> 
                  <?php foreach($ruangans as $ruangan_item): ?>
                    <tr>
                      <td style="text-align:center"><?php echo $number;$number = $number+1;?></td>
                      <td style="text-align:center"><?= $ruangan_item['nama_ruangan']?></td>
                      <td style="text-align:center"><?= $ruangan_item['kapasitas_ruangan']?></td>     
                      <td style="text-align:center;width:100px">
                        <a href="<?php echo base_url(); ?>Admin/editruangan/<?php echo $ruangan_item['id_ruangan'];?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <table class="table table-striped table-bordered dt-responsive nowrap jambo_table bulk_action" cellspacing="0" width="100%">

                <thead>
                  <tr class="headings">
                    <th style="text-align:center">Nomor</th>
                    <th style="text-align:center">Nama Divisi</th>
                    <th style="text-align:center">Username</th>
                    <th style="text-align:center;width:100px">
                      <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal1"><i class="fa fa-plus"> Tambah</i></button>
                    </th>
                  </tr>   
                </thead>

                <tbody>
                  <?php $number =1; ?>
                  <?php foreach ($divisis as $divisi_item):?>
                    <tr>
                      <td style="text-align:center"><?php echo $number; $number=$number+1;?></td>
                      <td style="text-align:center"><?=$divisi_item['nama_divisi']?></td>
                      <td style="text-align:center"><?=$divisi_item['username_divisi']?></td>
                      <td style="text-align:center;width:100px">
                        <a href="<?php echo base_url(); ?>Admin/editdivisi/<?php echo $divisi_item['id_divisi'];?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                      </td>
                    </tr>
                  <?php endforeach?>
                </tbody>
              </table>
            </div>
          </div>
          <!-- /content1 -->

          <!-- content 2 -->
          <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="meeting-tab">

            <div class="x_panel">
              <div class="x_title">
                <div class="filter">
                  <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                    <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>

              <div class="row top_tiles">
                <div class="animated flipInY col-lg-4 col-md-3 col-sm-6 col-xs-12">
                  <div class="tile-stats">
                    <div class="icon"><i class="glyphicon glyphicon-time"></i></div>
                    <div class="count"><?=$hour?> Jam</div>
                    <h3>Total Durasi Meeting</h3>
                  </div>
                </div>
                <div class="animated flipInY col-lg-4 col-md-3 col-sm-6 col-xs-12">
                  <div class="tile-stats">
                    <div class="icon"><i class="glyphicon glyphicon-log-in"></i></div>
                    <div class="count"><?=$keterangan['internal']?></div>
                    <h3>Durasi Meeting Internal</h3>
                  </div>
                </div>
                <div class="animated flipInY col-lg-4 col-md-3 col-sm-6 col-xs-12">
                  <div class="tile-stats">
                    <div class="icon"><i class="glyphicon glyphicon-log-out"></i></div>
                    <div class="count"><?=$keterangan['eksternal']?></div>
                    <h3>Durasi Meeting Eksternal</h3>
                  </div>
                </div>
              </div>
              <div class="row top_tiles">
                <div class="animated flipInY col-lg-4 col-md-3 col-sm-6 col-xs-12">
                  <div class="tile-stats">
                    <div class="icon"><i class="glyphicon glyphicon-time"></i></div>
                    <div class="count"><?=$hour?> Jam</div>
                    <h3>Total Meeting</h3>
                  </div>
                </div>
                <div class="animated flipInY col-lg-4 col-md-3 col-sm-6 col-xs-12">
                  <div class="tile-stats">
                    <div class="icon"><i class="glyphicon glyphicon-log-in"></i></div>
                    <div class="count"><?=$keterangan['internal']?></div>
                    <h3>Meeting Internal</h3>
                  </div>
                </div>
                <div class="animated flipInY col-lg-4 col-md-3 col-sm-6 col-xs-12">
                  <div class="tile-stats">
                    <div class="icon"><i class="glyphicon glyphicon-log-out"></i></div>
                    <div class="count"><?=$keterangan['eksternal']?></div>
                    <h3>Meeting Eksternal</h3>
                  </div>
                </div>
              </div>

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>All Divisi</h2>
                   <!-- <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul> -->

                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
                    <canvas id="myChart" width="500" height="100"></canvas>
                    <script>
                      var ctx = document.getElementById("myChart").getContext('2d');
                      var myChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                          labels: ["OD", "IT & GA", "PMU", "EM", "Corsec", "IA", "MBA","F & A"],
                          datasets: [{
                            label: 'Total Meeting perdivisi',
                            data: [20, 50, 31, 45, 21, 13, 15, 18],
                            backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)' 
                            ],
                            borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                          }]
                        },
                        options: {
                          scales: {
                            yAxes: [{
                              ticks: {
                                beginAtZero:true
                              }
                            }]
                          }
                        }
                      });
                    </script>
                  </div>
                </div>
              </div>

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>All Ruangan</h2>
                   <!-- <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul> -->

                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
                    <canvas id="myChartOne" width="500" height="100"></canvas>
                    <script>
                      var ctx = document.getElementById("myChartOne").getContext('2d');
                      var myChartOne = new Chart(ctx, {
                        type: 'bar',
                        data: {
                          labels: ["Meeting Room 1", "Meeting Room 2","Meeting Room 3","Auditorium GD", "Ruang Tembolong","Ruang Audit"," IT&GA Room","OD Room","EM Room", "PMU Room","PM Room","MBD Room", "Rumah Tangga","Raden Ajeng","Mblo","Pantry Room"],
                          datasets: [{
                            label: 'Total ruangan per meeting',
                            data: [12, 30, 3, 5, 2, 3, 5, 8, 12, 30, 3, 5, 2, 3, 5, 8],
                            backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)'  
                            ],
                            borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)',
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                          }]
                        },
                        options: {
                          scales: {
                            yAxes: [{
                              ticks: {
                                beginAtZero:true
                              }
                            }]
                          }
                        }
                      });
                    </script>
                  </div>
                </div>
              </div>


              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                    <table id="datatable-responsive" class="table table-striped table-bordered jambo_table bulk_action">
                      <thead>
                        <tr class="headings">
                          <th style="text-align:center">Tanggal</th>
                          <th style="text-align:center">Jam Mulai</th>
                          <th style="text-align:center">Jam Selesai</th>
                          <th style="text-align:center">Ruangan</th>
                          <th style="text-align:center">Perihal</th> 
                          <th style="text-align:center">Pengguna</th>
                          <th style="text-align:center">Keterangan</th> 
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($meetings as $meetings_item):?>
                          <tr>
                            <td style="text-align:center"><?=date("d-m-Y",strtotime($meetings_item['tanggal']))?></td>
                            <td style="text-align:center"><?=$meetings_item['waktu_mulai']?></td>
                            <td style="text-align:center"><?=$meetings_item['waktu_selesai']?></td>
                            <td style="text-align:center"><?=$meetings_item['nama_ruangan']?></td>
                            <td style="text-align:center"><?=$meetings_item['perihal']?></td>
                            <td style="text-align:center"><?=$meetings_item['nama_divisi']?></td>
                            <td style="text-align: center"><?php
                              if ($meetings_item['status']==true){
                                echo "Eksternal";
                              }else{
                                echo "Internal";
                              }
                              ?></td>
                            </tr>
                          <?php endforeach?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /content 3 -->

          </div>
          <!-- /tab content -->

        </div>
        <!-- /kontent di sini -->

      </div>
    </div>
  </div>

  <!-- modal for add room--> 
  <?=form_open('/Admin/insertruangan')?>
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="color: black; text-align: center;">Tambah Ruangan</h4>
        </div>
        <div class="modal-body">
          <label class="col-sm-12  control-label" for="sm" style="color: black; text-align: center;">Nama Ruangan</label>
          <input class="form-control" type="text" name="nama_ruangan" id="sm" style="color: black" required>

          <label class="col-sm-12  control-label" for="sm" style="color: black; text-align: center;">Kapasitas</label>
          <input class="form-control" type="number" name="kapasitas_ruangan"  min="0" id="sm" style="color: black" required>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
        <!-- modal for add room-->
      </div>  
    </div>
  </div>
  <?=form_close()?>

  <!-- Modal -->
  <?=form_open('Admin/insertdivisi')?>
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="color: black;text-align: center;">Tambah Divisi</h4>
        </div>
        <div class="modal-body">
          <label class="col-sm-12  control-label"  for="sm" style="color: black;text-align: center;">Nama Divisi</label>
          <input class="form-control"  required="true"  type="text" name="nama_divisi" id="sm" style="color: black">
          <label class="col-sm-12  control-label"  for="sm" style="color: black;text-align: center;">Username </label>
          <input class="form-control" type="text" name="username_divisi" required="true"  id="sm" style="color: black">
          <label class="col-sm-12  control-label" for="sm" style="color: black;text-align: center;">Password</label>
          <input class="form-control" type="text" name="password" id="sm" required="true" style="color: black">
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" style="font-family: sans-serif;">Tambah</button>
        </div>
      </div>
    </div>
  </div>
  <?= form_close()?>
</body>