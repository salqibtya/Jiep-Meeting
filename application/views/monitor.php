<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="<?=base_url('assets/css/')?>bootstrap.min.css" rel="stylesheet">
  <script src="<?=base_url('assets/js/')?>jquery.min.js"></script>
  <script src="<?=base_url('assets/js/')?>bootstrap.min.js"></script>	

  <title>Meeting | <?=$title?></title>
</head>


<body style="background-color: rgb(237,237,237)">
  <div class="container">
      <h1>bibimbap</h1>
      <table class="table" style="border: 1px solid black ">
          <thead>
            <td style="text-align:center">Tanggal</td>
            <td style="text-align:center">Waktu Mulai</td>
            <td style="text-align:center">Waktu Selesai</td>
            <td style="text-align:center">Ruangan</td>
            <td style="text-align:center">Perihal</td>
            <td style="text-align:center">Pegguna</td>
          </thead>
          <?php foreach($meetings as $meeting_item):?>
          <tr>
            <td style="text-align:center"><?=date("d-m-Y",strtotime($meeting_item['tanggal']))?></td>
            <td style="text-align:center"><?=date("H:i",strtotime($meeting_item['waktu_mulai']))?></td>
            <td style="text-align:center"><?=date("H:i",strtotime($meeting_item['waktu_selesai']))?></td>
            <td style="text-align:center"><?=$meeting_item['nama_ruangan']?></td>
            <td style="text-align:center"><?=$meeting_item['perihal']?></td>
            <td style="text-align:center"><?=$meeting_item['nama_divisi']?></td>

          </tr>
          <?php endforeach?>         
      </table>
  </div>
</body>
  
</html>