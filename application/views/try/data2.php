<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php foreach($divisis as $divisi): ?>
		<p><?=$divisi['nama_divisi']?></p><br><p><?=$divisi['password_divisi']?></p>
	<?php endforeach ?>
</body>
</html>