<body style="background-color:rgb(255,255,255) !important ">
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
      <div class="col-md-12 col-sm-12 col-xs-12" style="background-color:rgb(255,255,255)">

        <!-- konten di sini -->
        <div class="" role="tabpanel" data-example-id="togglable-tabs">

          <!-- tab header -->
          <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
            <li role="presentation" class="active"><a href="#tab_content1" id="mmeeting-tab" role="tab" data-toggle="tab" aria-expanded="true">My Meeting</a>
            </li>
            <li role="presentation" class=""><a href="#tab_content2" role="tab" id="anggota-tab" data-toggle="tab" aria-expanded="false">My Member</a>
            </li>
            <li role="presentation" class=""><a href="#tab_content3" role="tab" id="jmeeting-tab" data-toggle="tab" aria-expanded="false">All Meeting</a>
            </li>
          </ul>
          <!-- /tab header -->

          <!-- tab content -->
          <div id="myTabContent" class="tab-content">

            <!-- content 1 -->
            <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="mmeeting-tab">

              <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowraptable-bordered jambo_table bulk_action" cellspacing="0" width="100%">
                <thead>
                  <tr class="headings">
                    <th style="text-align:center">Date</th>
                    <th style="text-align:center">Start</th>
                    <th style="text-align:center">Finish</th>
                    <th style="text-align:center">Room</th>
                    <th style="text-align:center">Subject</th>
                    <th style="text-align:center">Edit Meeting</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($meeting_divisi as $meetings_item):?>
                    <tr>
                      <td style="text-align:center"><?=date("d-m-Y",strtotime($meetings_item['tanggal']))?></td>
                      <td style="text-align:center"><?=date("H:i",strtotime($meetings_item['waktu_mulai']))?></td>
                      <td style="text-align:center"><?=date("H:i",strtotime($meetings_item['waktu_selesai']))?></td>
                      <td style="text-align:center"><?=$meetings_item['nama_ruangan']?></td>
                      <td style="text-align:center;"><?=$meetings_item['perihal']?></td>
                      <td style="text-align:center;">
                        <a href="<?php echo base_url(); ?>Divisi/editmeeting/<?php echo $meetings_item['id_meeting'];?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                      </td>
                    </tr>
                  <?php endforeach?>
                </tbody>
              </table>
            </div>
            <!-- content 1 -->

            <!-- content 2 -->
            <div role="tabpanel" class="tab-pane fade active in" id="tab_content2" aria-labelledby="anggota-tab">

              <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap table-bordered jambo_table bulk_action" cellspacing="0" width="100%">
                <thead>
                  <tr class="headings">
                    <th style="text-align:center">Number</th>
                    <th style="text-align:center">Member Name</th>
                    <th style="text-align:center">Member Email</th>
                    <th style="text-align:center;width:100px">
                      <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"> Add</i></button>

                      <!-- modal tambah anggota --> 

                      <?=form_open('/Divisi/tambahanggota')?>
                      <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog modal-md">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title" style="color: black; text-align: center;">Add New Member</h4>
                            </div>
                            <div class="modal-body">
                              <input class="form-control" placeholder="insert name member" type="text" name="nama_anggota" style="color: black; width: 100%" required><br>
                              <br>
                              <input class="form-control" placeholder="insert email member" type="email" name="email_anggota" style="color: black; width: 100%" required>
                            </div>
                            <div class="modal-footer">
                              <button type="submit" class="btn btn-primary">Add</button>
                            </div>
                          </div>  
                        </div>
                      </div>
                      <?=form_close()?>

                    </th>
                  </tr>
                </thead>

                <tbody>
                  <?php $number = 1;?>
                  <?php foreach ($anggotas as $anggota_item):?>
                    <tr>
                      <td style="text-align:center"><?php echo $number; $number=$number+1;?></td>
                      <td style="text-align:center"><?=$anggota_item['nama']?></td>
                      <td style="text-align:center"><?=$anggota_item['email']?></td>     
                      <td style="text-align:center;width:100px">
                        <a href="<?php echo base_url();?>Divisi/editanggota/<?php echo $anggota_item['id_anggota'];?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                      </td>
                    </tr>
                  <?php endforeach?>
                </tbody>
              </table>
            </div>

            <!-- content 2 -->

            <!-- content 3 -->
            <div role="tabpanel" class="tab-pane fade active in" id="tab_content3" aria-labelledby="jmeeting-tab">

              <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap table-bordered jambo_table bulk_action" cellspacing="0" width="100%">
                <thead>
                  <tr class="headings">
                    <th style="text-align:center">Date</th>
                    <th style="text-align:center">Start</th>
                    <th style="text-align:center">Finish</th>
                    <th style="text-align:center">Room</th>
                    <th style="text-align:center">Subject</th> 
                    <th style="text-align:center">User</th> 
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($meetings as $meetings_item):?>
                    <tr>
                      <td style="text-align:center"><?=date("d-m-Y",strtotime($meetings_item['tanggal']))?></td>
                      <td style="text-align:center"><?=date("H:i",strtotime($meetings_item['waktu_mulai']))?></td>
                      <td style="text-align:center"><?=date("H:i",strtotime($meetings_item['waktu_selesai']))?></td>
                      <td style="text-align:center"><?=$meetings_item['nama_ruangan']?></td>
                      <td style="text-align:center;"><?=$meetings_item['perihal']?></td>
                      <td style="text-align:center"><?=$meetings_item['nama_divisi']?></td>
                    </tr>
                  <?php endforeach?>
                </tbody>
              </table>

            </div>
            <!-- content 3 -->
          </div>
        </div>
      </div>
    </div>
  </div> 
  <a href="<?=base_url('Divisi/tambahmeeting')?>" class="btn-floating btn-large blue" style="color: rgb(63,83,103); position:fixed; bottom: 60px; right: 35px ; z-index: 1000!important"><i class="glyphicon glyphicon-plus-sign fa-4x" ></i></a>
  <div class="clearfix"></div>
</div>
</div>


</body>