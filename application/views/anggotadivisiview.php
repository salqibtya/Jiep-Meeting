<!-- divisi content -->
<body style="background-color:rgb(247,247,247) !important ">
  <div class="container body" style="top: 0; bottom: 0; left: 0; height: 100%">
   <div class="main_container">
     <?php $this->load->view('templates/menubar'); ?>

     <div class="col-md-12" style="background-color: rgb(247,247,247)">
      <h4 style="text-align: center;"> Daftar Anggota Divisi </h4>
    </div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
       <div class="x_panel">
        <div class="x_content">
         <div class="col-md">
          <div class="table-responsive">
           <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">

       <!--<table class="table table-striped table-bordered jambo_table bulk_act
       ion">-->
       <thead>
        <tr class="headings">
          <th style="text-align:center">Nomor</th>
          <th style="text-align:center">Nama Anggota</th>
          <th style="text-align:center">Email Anggota</th>
          <th style="text-align:center;width:100px">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"> Tambah</i></button>
            
            <!-- modal for add member--> 
            <?=form_open('Divisi/tambahanggota')?>
            <div class="modal fade" id="myModal" role="dialog">
              <div class="modal-dialog modal-md">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="color: black">Tambah Anggota</h4>
                  </div>
                  <div class="modal-body">
                   <label class="col-sm-12  control-label" for="sm" style="color: black">Nama Anggota</label>
                   <input class="form-control" type="text" name="nama_anggota" id="sm" style="color: black">
                   <br>
                   <label class="col-sm-12  control-label" for="sm" style="color: black">Email Anggota</label>
                   <input class="form-control" type="text" name="email_anggota"  min="0" id="sm" style="color: black">
                 </div>
                 <div class="modal-footer">
                   <button type="submit" class="btn btn-primary">Tambah</button>
                 </div>
                 <!-- modal for add room-->
               </div>  
             </div>
             <?=form_close()?>
           </div>
         </th>
       </tr>
     </thead>

     <tbody>
      <?php
      $number = 1;
      foreach ($anggotas as $anggota_item):
        ?>
      <tr>
        <td style="text-align:center"><?php echo $number; $number=$number+1;?></td>
        <td style="text-align:center"><?=$anggota_item['nama']?></td>
        <td style="text-align:center"><?=$anggota_item['email']?></td>     
        <td style="text-align:center;width:100px">
          <a href="<?php echo base_url();?>Divisi/anggotadivisiview/<?php echo $anggota_item['id_anggota'];?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
        </td>
      </tr>
    <?php endforeach?>
  </tbody>
</table>
</div>
</div>

      <!-- table kedua 
     <div class="col-md-6">
      <div class="table-responsive">
       <table class="table table-striped table-bordered jambo_table bulk_act
              ion">
        <thead>
          <tr class="headings">
            <th style="text-align:center">Nomor</th>
            <th style="text-align:center">Nama Anggota</th>
            <th style="text-align:center">Email Anggota</th>
            <th style="text-align:center;width:100px">
              <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"> Tambah</i></button>
              
              <!-- modal for add member 
              <div class="modal fade" id="myModal" role="dialog">
              <div class="modal-dialog modal-md">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                     <h4 class="modal-title" style="color: black">Tambah Anggota</h4>
                  </div>
                  <div class="modal-body">
                   <label class="col-sm-12  control-label" for="sm" style="color: black">Nama Anggota</label>
                   <input class="form-control" type="text" name="nama_ruangan" id="sm" style="color: black">
                   <br>
                   <label class="col-sm-12  control-label" for="sm" style="color: black">Email Anggota</label>
                   <input class="form-control" type="number" name="kapasitas_ruangan"  min="0" id="sm" style="color: black">
                  </div>
                  <div class="modal-footer">
                     <button type="submit" class="btn btn-primary">Tambah</button>
                  </div>
                </div>  
              </div>
              </div>
            </th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td style="text-align:center">1</td>
            <td style="text-align:center">Sarah Al Qibthiyyah</td>
            <td style="text-align:center">Sarah@gmail.com</td>     
            <td style="text-align:center;width:100px">
              <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
            </td>
           </tr>
        </tbody>
      </table> -->
    </div>
  </div>
</div>
</div>
</div>
</div>
</body>