<!DOCTYPE html>
<html>
<head>
  <script src="<?=base_url('assets/js/')?>jquery-3.2.1.min.js" type="text/javascript"></script>
  <script src="<?=base_url('assets/js/')?>Chart.min.js"></script>
  <script src="<?=base_url('assets/js/')?>Chart.bundle.js"></script>
  <script src="<?=base_url('assets/js/')?>Chart.bundle.min.js"></script>
  <script src="<?=base_url('assets/js/')?>Chart.js"></script>
  <title></title>
</head>
<body>

  <div class="row top_tiles">
    <div class="animated flipInY col-lg-4 col-md-3 col-sm-6 col-xs-12">
      <div class="tile-stats">
        <div class="icon"><i class="glyphicon glyphicon-time"></i></div>
        <div class="count"><?=$waktu['hour']?> Jam</div>
        <h3>Total Durasi Meeting</h3>
      </div>
    </div>
    <div class="animated flipInY col-lg-4 col-md-3 col-sm-6 col-xs-12">
      <div class="tile-stats">
        <div class="icon"><i class="glyphicon glyphicon-log-in"></i></div>
        <div class="count"><?=$waktu['hour_internal']?> Jam</div>
        <h3>Durasi Meeting Internal</h3>
      </div>
    </div>
    <div class="animated flipInY col-lg-4 col-md-3 col-sm-6 col-xs-12">
      <div class="tile-stats">
        <div class="icon"><i class="glyphicon glyphicon-log-out"></i></div>
        <div class="count"><?=$waktu['hour_eksternal']?> Jam</div>
        <h3>Durasi Meeting Eksternal</h3>
      </div>
    </div>
  </div>
  <div class="row top_tiles">
    <div class="animated flipInY col-lg-4 col-md-3 col-sm-6 col-xs-12">
      <div class="tile-stats">
        <div class="icon"><i class="glyphicon glyphicon-time"></i></div>
        <div class="count"><?=$jumlah['all']?> Kali</div>
        <h3>Total Meeting</h3>
      </div>
    </div>
    <div class="animated flipInY col-lg-4 col-md-3 col-sm-6 col-xs-12">
      <div class="tile-stats">
        <div class="icon"><i class="glyphicon glyphicon-log-in"></i></div>
        <div class="count"><?=$jumlah['internal']?> Kali</div>
        <h3>Meeting Internal</h3>
      </div>
    </div>
    <div class="animated flipInY col-lg-4 col-md-3 col-sm-6 col-xs-12">
      <div class="tile-stats">
        <div class="icon"><i class="glyphicon glyphicon-log-out"></i></div>
        <div class="count"><?=$jumlah['eksternal']?> Kali</div>
        <h3>Meeting Eksternal</h3>
      </div>
    </div>
  </div>

  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>All Divisi</h2>
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
                    <canvas id="myChart" width="500" height="100"></canvas>
                    <script>
                      var ctx = document.getElementById("myChart").getContext('2d');
                      var myChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                          labels: ["OD", "IT & GA", "PMU", "EM", "Corsec", "IA", "MBA","F & A"],
                          datasets: [{
                            label: 'Total Meeting perdivisi',
                            data:[1,2,3,4,5,6,7,8],
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
                    <canvas id="myChartOne" width="500" height="100"></canvas>
                    <script>
                      var ctx = document.getElementById("myChartOne").getContext('2d');
                      var myChartOne = new Chart(ctx, {
                        type: 'bar',
                        data: {
                          labels: ["MR 1", "MR 2","MR 3","AGD", "RT","RA","ITMR","RT2","MR 1", "MR 2","MR 3","AGD", "RT","RA","ITMR","RT2"],
                          datasets: [{
                            label: 'Total Meeting perdivisi',
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
                    <table class="table table-striped table-bordered jambo_table bulk_action">
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
  </body>
  </html>