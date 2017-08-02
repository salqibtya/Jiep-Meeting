<!DOCTYPE html>
<html lang="en">

<head lang="en">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="refresh" content="90; URL=<?=base_url('monitor')?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

  <link rel='shortcut icon' type='image/x-icon' href='<?php echo base_url(); ?>assets/metroui/images/jiepicon.png' />
  <title><?=APP_NAME?> &lsaquo;  <?php echo $title ?></title>

  <link href="<?php echo base_url(); ?>assets/metroui/css/metro.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/metroui/css/custom.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/metroui/css/metro-icons.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/metroui/css/segmdl2-icons.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/metroui/css/metro-responsive.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/metroui/css/metro-schemes.css" rel="stylesheet">

  <link href="<?php echo base_url(); ?>assets/metroui/css/docs.css" rel="stylesheet">

  <script src="<?php echo base_url(); ?>assets/metroui/js/jquery-2.1.3.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/metroui/js/metro.js"></script>
  <script src="<?php echo base_url(); ?>assets/metroui/js/docs.js"></script>
  <script src="<?php echo base_url(); ?>assets/metroui/js/prettify/run_prettify.js"></script>
  <script src="<?php echo base_url(); ?>assets/metroui/js/jquery.dataTables2.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/metroui/js/jquery.priceformat.min.js"></script>

  <style>
    .content-container{
      border: 1px solid #e1e8ed;
      border-radius: 5px;
      padding: 20px;
      background-color: white;
    }
  </style>

  <script>
    function startTime() {
      var today = new Date();
      var h = today.getHours();
      var m = today.getMinutes();
      var s = today.getSeconds();
      m = checkTime(m);
      s = checkTime(s);
      document.getElementById('txt').innerHTML =
      h + ":" + m + ":" + s;
      var t = setTimeout(startTime, 500);
    }

    function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
  }
</script>
</head>
<body class="padding20" onload="startTime()" style="background-color: rgb(250,250,250);">

  <span>
    <h1 style="text-align: center; color:rgb(1,45,80);">
      <?=$title?> 
      <!-- <span class="place-right">
        <span class="mif-alarm" style="margin-bottom:10px"></span>
        <span id="txt"></span>
      </span> -->
    </h1>
  </span>
  <br>
  <table class="table border bordered striped" id="main_table_demo">
    <thead>

<!--<body style="background-color: rgb(257,257,257)">
  <div class="col-md-12">
      <h1 style="text-align: center; font-family: verdana; ">Informasi Meeting</h1>
      <table class="table table-striped table-bordered jambo_table bulk_action" style="width:100%; height: 100% border: 1px solid black">
        <thead> -->
          <td style="text-align:center;font-size: 20px">Tanggal</td>
          <td style="text-align:center;font-size: 20px;">Mulai</td>
          <td style="text-align:center;font-size: 20px">Selesai</td>
          <td style="text-align:center;font-size: 20px">Ruangan</td>
          <td style="text-align:center;font-size: 20px">Perihal</td>
          <td style="text-align:center;font-size: 20px">Pengguna</td>
        </thead>
        <?php foreach($meetings as $meeting_item):?>
          <tr>
            <td style="text-align:center;font-size:20px;"><?=date("d-m-Y",strtotime($meeting_item['tanggal']))?></td>
            <td style="text-align:center;font-size:20px;"><?=date("H:i",strtotime($meeting_item['waktu_mulai']))?></td>
            <td style="text-align:center;font-size:20px;"><?=date("H:i",strtotime($meeting_item['waktu_selesai']))?></td>
            <td style="text-align:center;font-size:20px;"><?=$meeting_item['nama_ruangan']?></td>
            <td style="text-align:center;font-size:20px;"><?=$meeting_item['perihal']?></td>
            <td style="text-align:center;font-size:20px;"><?=$meeting_item['nama_divisi']?></td>

          </tr>
        <?php endforeach?>         
      </table>
    </body>
    </html>
