<!DOCTYPE html>
<html>
<head>
	<title>Home|<?php echo $title?></title>
</head>
<body>
	<table>
		<?php foreach($meetings as $meetings_item):?>
			<tr>
                <td style="text-align:center"><?=$meetings_item['tanggal']?></td>
                <td style="text-align:center"><?=$meetings_item['waktu_mulai']?></td>
                <td style="text-align:center"><?=$meetings_item['waktu_selesai']?></td>
                <td style="text-align:center"><?=$meetings_item['nama_ruangan']?></td>
                <td style="text-align:center"><?=$meetings_item['nama_divisi']?></td>
                <td style="text-align:center"><?=$meetings_item['estimasi_peserta']?></td>
                <td style="text-align:center"><?=$meetings_item['perihal']?></td>
                <td style="text-align:center"><?=$meetings_item['PIC']?></td>
			</tr>
		<?php endforeach?>
	</table>
</body>
</html>