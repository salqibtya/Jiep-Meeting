<body style="background-color:rgb(247,247,247) ">
 <div class="container body" style="top: 0; bottom: 0; left: 0; height: 100%">
   <div class="main_container">
    <div class="right_col" role="main" style="margin-left:0px!important">
      <?=$this->session->flashdata('notification')?>
      <div class="page-title">
       <div class="title-right" style="background-color: rgb(247,247,247)">   <?php $this->load->view('templates/menubaradmin'); ?>
       </div>
     </div>
   </div>

   <div class="clearfix"></div>

   <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
     <div class="col-md-6 col-sm-6 col-xs-12" style="background-color: rgb(247,247,247)"> <h4 style="text-align: center;"> Ruangan </h4>
     </div>

     <div class="col-md-6 col-sm-6 col-xs-12" style="background-color: rgb(247,247,247)"> <h4 style="text-align: center"> Divisi </h4>
     </div><div class="x_content">
     <div class="col-md-6 col-sm-6 col-xs-12">
       <div class="table-responsive">
         <table class="table table-striped table-bordered jambo_table bulk_action">
          <thead>
           <tr class="headings">
            <th style="text-align:center">Nomor</th>
            <th style="text-align:center">Nama Ruangan</th>
            <th style="text-align:center">Kapasitas</th>
            <th style="text-align:center;width:100px">
              <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"> Tambah</i></button>

              <!-- modal for add room--> 
              <?=form_open('/Admin/insertruangan')?>
              <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog modal-md">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title" style="color: black">Tambah Ruangan</h4>
                    </div>
                    <div class="modal-body">
                     <label class="col-sm-12  control-label" for="sm" style="color: black">Nama Ruangan</label>
                     <input class="form-control" type="text" name="nama_ruangan" id="sm" style="color: black" required>

                     <label class="col-sm-12  control-label" for="sm" style="color: black">Kapasitas</label>
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
           </th>
         </tr>
       </thead>

       <tbody>
        <?php 
        $number = 1;
        foreach($ruangans as $ruangan_item):
          ?>
        <tr>
          <td style="text-align:center"><?php echo $number;$number = $number+1;?></td>
          <td style="text-align:center"><?= $ruangan_item['nama_ruangan']?></td>
          <td style="text-align:center"><?= $ruangan_item['kapasitas_ruangan']?></td>     
          <td style="text-align:center;width:100px">
            <a href="<?php echo base_url(); ?>Admin/editruangan/<?php echo $ruangan_item['id_ruangan'];?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a></td>
      <!-- button hapus 
      <a class="btn btn-danger btn-xs" href="<?php echo base_url(); ?>admin/deleteruangan/<?php echo $ruangan_item['id_ruangan'];?>"><i class="fa fa-trash-o"></i></a>
    -->
  </tr>
<?php endforeach?>
</tbody>
</table>
</div>
</div>

<div class="col-md-6 col-sm-6 col-xs-12">
  <div class="table-responsive">
    <table class="table table-striped table-bordered jambo_table bulk_action">
     <thead>
       <tr class="headings">
        <th style="text-align:center">Nomor</th>
        <th style="text-align:center">Nama Divisi</th>
        <th style="text-align:center">Username</th>
        <th style="text-align:center;width:100px">
          <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal1"><i class="fa fa-plus"> Tambah</i></button>

          <!-- Modal -->
          <?=form_open('Admin/insertdivisi')?>
          <div class="modal fade" id="myModal1" role="dialog">
            <div class="modal-dialog modal-md">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title" style="color: black">Tambah Divisi</h4>
                </div>
                <div class="modal-body">
                  <label class="col-sm-12  control-label"  for="sm" style="color: black">Nama Divisi</label>
                  <input class="form-control"  required="true"  type="text" name="nama_divisi" id="sm" style="color: black">
                  <label class="col-sm-12  control-label"  for="sm" style="color: black">Username </label>
                  <input class="form-control" type="text" name="username_divisi" required="true"  id="sm" style="color: black">
                  <label class="col-sm-12  control-label" for="sm" style="color: black">Password</label>
                  <input class="form-control" type="text" name="password" id="sm" required="true" style="color: black">
                </div>
                <div class="modal-footer">
                 <button type="submit" class="btn btn-primary">Tambah</button>
               </div>
             </div>
           </div>
         </div>
         <?= form_close()?>
       </th>
     </tr>
   </thead>

   <tbody>
    <?php
    $number =1;
    foreach ($divisis as $divisi_item):?>

    <tr>
      <td style="text-align:center"><?php echo $number; $number=$number+1;?></td>
      <td style="text-align:center"><?=$divisi_item['nama_divisi']?></td>
      <td style="text-align:center"><?=$divisi_item['username_divisi']?></td>
      <td style="text-align:center;width:100px">
        <a href="<?php echo base_url(); ?>Admin/editdivisi/<?php echo $divisi_item['id_divisi'];?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
        <!-- button hapus 
        <a class="btn btn-danger btn-xs" href="<?php echo base_url(); ?>admin/deletedivisi/<?php echo $divisi_item['id_divisi'];?>"><i class="fa fa-trash-o"></i></a>
      -->
    </td>
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
</div>
</body>