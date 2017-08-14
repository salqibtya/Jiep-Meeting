
<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="refresh" content="90; URL=http://apps.jiep.co.id/meeting/monitor">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

  <link rel='shortcut icon' type='image/x-icon' href='http://apps.jiep.co.id/meeting/assets/metroui/images/jiepicon.png' />
  <title>Meeting &lsaquo; Informasi Meeting</title>

  <link href="http://apps.jiep.co.id/meeting/assets/metroui/css/metro.css" rel="stylesheet">
  <link href="http://apps.jiep.co.id/meeting/assets/metroui/css/custom.css" rel="stylesheet">
  <link href="http://apps.jiep.co.id/meeting/assets/metroui/css/metro-icons.css" rel="stylesheet">
  <link href="http://apps.jiep.co.id/meeting/assets/metroui/css/segmdl2-icons.css" rel="stylesheet">
  <link href="http://apps.jiep.co.id/meeting/assets/metroui/css/metro-responsive.css" rel="stylesheet">
  <link href="http://apps.jiep.co.id/meeting/assets/metroui/css/metro-schemes.css" rel="stylesheet">

  <link href="http://apps.jiep.co.id/meeting/assets/metroui/css/docs.css" rel="stylesheet">
  <link href="http://apps.jiep.co.id/meeting/assets/css/li-scroller.css" rel="stylesheet">

  <script src="http://apps.jiep.co.id/meeting/assets/metroui/js/jquery-2.1.3.min.js"></script>
  <script src="http://apps.jiep.co.id/meeting/assets/metroui/js/metro.js"></script>
  <script src="http://apps.jiep.co.id/meeting/assets/metroui/js/docs.js"></script>
  <script src="http://apps.jiep.co.id/meeting/assets/metroui/js/prettify/run_prettify.js"></script>
  <script src="http://apps.jiep.co.id/meeting/assets/metroui/js/jquery.dataTables2.min.js"></script>
  <script src="http://apps.jiep.co.id/meeting/assets/metroui/js/jquery.priceformat.min.js"></script>
  <script src="http://apps.jiep.co.id/meeting/assets/js/jquery.li-scroller.1.0.js"></script>

  <script>
    $(function(){
      $("ul#ticker01").liScroll();
    });
  </script>

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
<body>

  <div class="padding10">
    <span>
      <h1>
        Informasi Meeting 
      <!-- <span class="place-right">
        <span class="mif-alarm" style="margin-bottom:10px"></span>
        <span id="txt"></span>
      </span> -->
    </h1>
  </span>

  <table class="table border bordered striped" id="main_table_demo">
    <thead>
      <tr>
        <th style="text-align:center">Tanggal</th>
        <th style="text-align:center">Mulai</th>
        <th style="text-align:center">Selesai</th>
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

<ul id="ticker01">
  <li><span style="font-weight:lighter !important">24/07/2017</span><a href="#"><span style="color:black !important">Lowongan pekerjaan dan magang sekarang dapat dilihat di</span>career.jiep.co.id</a></li>
  <li><span style="font-weight:lighter !important">25/07/2017</span><a href="#"><span style="color:black !important">Ketersediaan supir dan mobil dapat dilihat di</span>driver.jiep.co.id/booking<span style="color: black !important">. Pemesanan kepada Pak Herry</span></a></li>
  <li><span style="font-weight:lighter !important">24/07/2017</span><a href="#"><span style="color:black !important">Lowongan pekerjaan dan magang sekarang dapat dilihat di</span>career.jiep.co.id</a></li>
  <li><span style="font-weight:lighter !important">25/07/2017</span><a href="#"><span style="color:black !important">Ketersediaan supir dan mobil dapat dilihat di</span>driver.jiep.co.id/booking<span style="color: black !important">. Pemesanan kepada Pak Herry</span></a></li>
</ul>
</body>
</html>