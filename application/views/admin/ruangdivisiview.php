<script>
  $(document).ready(function(){
    $("#startTimestamp").on('change',function(){
      var start = $(this).val();
      $("#endTimestamp").on('change',function(){
        var end = $(this).val();
        $.ajax({
          type:"POST",
          data:{start:start,end:end},
          url:"<?=base_url('Admin/get_meeting_date')?>",
          success:function(data){
            $("#showdata").html(data)
          }
        })
      });
    });        
  });
</script>

<body style="background-color:rgb(247,247,247) ">
  <div class="container body" style="top: 0; bottom: 0; left: 0; height: 100%">
    <div class="main_container">
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
                    <th style="text-align:center">Number</th>
                    <th style="text-align:center">Room</th>
                    <th style="text-align:center">Capasity</th>
                    <th style="text-align:center;width:100px"><button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Add</button>


                     <!-- modal insert room--> 
                     <?=form_open('/Admin/insertruangan')?>
                     <div class="modal fade" id="myModal" role="dialog">
                      <div class="modal-dialog modal-md">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title" style="color: black; text-align: center;">Add New Room</h4>
                          </div>
                          <div class="modal-body">
                            <input class="form-control" placeholder="insert new room" type="text" name="nama_ruangan" id="sm" style="color: black" required>
                            <br>
                            <input class="form-control" placeholder="insert capacity" type="number" name="kapasitas_ruangan"  min="0" id="sm" style="color: black" required>
                          </div>
                          <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Add</button>
                          </div>
                        </div>  
                      </div>
                    </div>
                    <?=form_close()?>
                    <!-- modal insert room-->

                  </th>
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
                  <th style="text-align:center">Number</th>
                  <th style="text-align:center">Division</th>
                  <th style="text-align:center">Username</th>
                  <th style="text-align:center;width:100px">
                    <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal1"><i class="fa fa-plus"> Add</i></button>

                    <!-- Modal insert divisi -->
                    <?=form_open('Admin/insertdivisi')?>
                    <div class="modal fade" id="myModal1" role="dialog">
                      <div class="modal-dialog modal-md">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title" style="color: black;text-align: center;">Add New Division</h4>
                          </div>
                          <div class="modal-body">
                            <input class="form-control" placeholder="insert new division" required="true"  type="text" name="nama_divisi"  style="color: black">
                            <br>
                            <input class="form-control" placeholder="insert new username" type="text" name="username_divisi" required="true" style="color: black">
                            <br>
                            <input class="form-control" placeholder="insert new password" type="text" name="password"  required="true" style="color: black">
                          </div>
                          <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Add</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <?= form_close()?>
                    <!-- Modal insert divisi -->
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

          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>Total Meeting Pertahun</h2>
                   <!-- <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul> -->

                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">
                    <canvas id="myCharttwo" width="500" height="100"></canvas>
                    <script>
                      var ctx = document.getElementById("myCharttwo").getContext('2d');
                      var myCharttwo = new Chart(ctx, {
                        type: 'line',
                        data: {
                          labels: ["OD", "IT & GA", "PMU", "EM", "Corsec", "IA", "MBA","F & A"],
                          datasets: [{
                            label: 'Total Meeting perdivisi',
                            data:[20,59,18,29,40,45,16,47],
                            
                            pointBorderColor: "rgba(75,192,192,1)",
                            pointBorderWidth: 2,
                            borderColor:
                            'rgba(255,99,132,1)',
                            borderWidth: 2
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
              <!--Nambah dashboard-->
              <div id="settanggal">
                <div class="x_panel">
                  <div class="x_title">
                    <div class="filter">
                      <div  class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                       <i class="glyphicon glyphicon-calendar fa fa-calendar"></i> Pilih Tanggal
                       <div id="settanggal">
                         <span>Start</span>
                         <input type="date" id="startTimestamp">
                         <span> End</span>
                         <input type="date" id="endTimestamp" >
                       </div>   
                     </div>
                   </div> 
                   
                   <div class="col-md-12" id="showdata"></div>
                   <div class="clearfix"></div>
                 </div>
               </div>
             </div>
             <!--/Nambah Dashboard-->

           </div>
         </div>

       </div>
     </div>
   </div>
 </div>
</div>
<<<<<<< HEAD
</body>
=======
</body>

>>>>>>> origin/master
