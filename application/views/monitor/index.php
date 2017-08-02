<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="refresh" content="90; URL=<?=base_url('monitor')?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<link rel='shortcut icon' type='image/x-icon' href='<?php echo base_url(); ?>assets/metroui/images/jiepicon.png' />
	<title><?=APP_NAME?> &lsaquo; <?php echo $title ?></title>

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
<body class="padding10" onload="startTime()">

	<span>
		<h1>
			<?=$title?> 
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
			<?php foreach($meetings as $meetings_item): ?>
				<tr>
					<td style="text-align:center"><?=convert_date(date("d/m/Y", strtotime($meetings_item['tanggal_meetings'])))?></td>
					<td style="text-align:center"><?=date("H:i", strtotime($meetings_item['jam_meetings']))?></td>
					<td style="text-align:center"><?=date("H:i", strtotime($meetings_item['jam_selesai_meetings']))?></td>
					<td style="white-space:nowrap;"><?=$meetings_item['nama_locations']?></td>
					<td><?=ucfirst($meetings_item['perihal_meetings'])?></td>
					<td><?=ucfirst($meetings_item['nama_divisions'])?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

</body>
</html>