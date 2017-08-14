<!DOCTYPE html>
<html>
<head>
  <script src="<?=base_url('assets/js/')?>jquery-3.2.1.min.js" type="text/javascript"></script>
  <script src="<?=base_url('assets/js/')?>Chart.min.js"></script>
  <script src="<?=base_url('assets/js/')?>Chart.bundle.js"></script>
  <script src="<?=base_url('assets/js/')?>Chart.bundle.min.js"></script>
  <script src="<?=base_url('assets/js/')?>Chart.js"></script>
  <title></title>
  <script>
    <?php 
      $total = $jumlah['internal'] +$jumlah['eksternal'];
      $internal = $jumlah['internal']/$total*100;
      $eksternal = $jumlah['eksternal']/$total*100;
    ?>
    var ctx = document.getElementById("pieku").getContext("2d");
    data = {
      datasets: [{
        data: [<?=$internal?>, <?=$eksternal?>],
        backgroundColor:[
        'lightblue',
        'magenta']
      }],

      labels: [
      'Internal',
      'Eksternal'
      ],
    };
    var options={
      cuoutPercentage:0,
      rotation:0
    }
    var myPieChart = new Chart(ctx,{
      type: 'pie',
      data: data,
      options: options
    });
  </script>
  <script>
    <?php 
      $tot = $waktu['hour_internal']+$waktu['hour_eksternal'];
      $int = $waktu['hour_internal']/$tot * 100 ;
      $eks = $waktu['hour_eksternal']/$tot * 100;
    ?>
    var ctx = document.getElementById("pieku2").getContext("2d");
    data = {
      datasets: [{
        data: [<?=$int?>, <?=$eks?>],
        backgroundColor:[
        'lightgreen',
        'hotpink']
      }],
      labels: [
      'Internal',
      'Eksternal'
      ]
    };
    
    var myPieChart = new Chart(ctx,{
      type: 'pie',
      data: data
    });
  </script>
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
  <div class="col-md-6 col-sm-6 col-xs-6">
    <div class="x_panel">
      <div class="x_title">
        <h2>Persentase <b>Jumlah</b> Meeting (dalam %)</h2>
        <canvas id="pieku" width="50" height="30"></canvas>
        <div class="clearfix"></div>
      </div><div class="clearfix"></div>
    </div>
  </div>
  <div class="col-md-6 col-sm-6 col-xs-6">
    <div class="x_panel">
      <div class="x_title">
        <h2>Persentase <b>Jam</b> Meeting (dalam %)</h2>
        <canvas id="pieku2" width="50" height="30"></canvas>
        <div class="clearfix"></div>
      </div><div class="clearfix"></div>
    </div>
  </div>
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>All Divisi</h2>
        <div class="clearfix"></div>
      </div>

      <div class="x_content">
        <canvas id="myChart" width="500" height="100"></canvas>
        <script>
          var ctx = document.getElementById("myChart").getContext('2d');
          var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
              labels: [<?php 
              $hitung = count($divisi);
              foreach ($divisi as $key => $value) {
                echo '"'.$value['nama_divisi'].'"'; 
                if ($key<$hitung){
                 echo ",";
               }
             }
             ?>],
             datasets: [{
              label: 'Total Meeting perdivisi',
              data:[<?php
              foreach ($much_divisi as $key => $value) {
                echo $value.",";
              }
              ?>],
              backgroundColor:[
              <?php
              for($i=0;$i<=$hitung;$i++){
               echo '"'."rgba(54, 162, 235, 0.2)".'",'; 
             }
             ?>
             ],
             borderColor:[
             <?php
             for($i=0;$i<=$hitung;$i++){
               echo '"'."rgba(54, 162, 235, 1)".'",'; 
             }
             ?>
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
                          labels:  [<?php 
                          $hitung2 = count($ruangan);
                          foreach ($ruangan as $key => $value) {
                            echo '"'.$value['nama_ruangan'].'"'; 
                            if ($key<$hitung2){
                             echo ",";
                           }
                         }
                         ?>],
                         datasets: [{
                          label: 'Total Pemakaian Ruangan',
                          data: [<?php
                          foreach ($much_ruangan as $key => $value) {
                            echo $value.",";
                          }
                          ?>],
                          backgroundColor:[
                          <?php
                          for($i=0;$i<=$hitung2;$i++){
                           echo '"'."rgba(255, 99, 132, 0.2)".'",'; 
                         }
                         ?>
                         ],
                         borderColor:[
                         <?php
                         for($i=0;$i<=$hitung2;$i++){
                           echo '"'."rgba(255,99,132,1)".'",'; 
                         }
                         ?>
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
                        <td style="text-align:center"><?=$meetings_item['ruangan_nama']?></td>
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