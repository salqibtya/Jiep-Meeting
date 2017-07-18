
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Meeting Information System | Login</title>

	<link rel="shortcut icon" href="<?=base_url('assets/images/jiepicon.png')?>">

	<!-- Bootstrap -->
	<link href="<?=base_url('assets/css/')?>bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="<?=base_url('assets/css/')?>font-awesome.min.css" rel="stylesheet">
	<!-- NProgress -->
	<link href="<?=base_url('assets/css/')?>nprogress.css" rel="stylesheet">
	<!-- Animate.css -->
	<link href="<?=base_url('assets/css/')?>animate.min.css" rel="stylesheet">

	<!-- Custom Theme Style -->
	<link href="<?=base_url('assets/css/')?>custom.min.css" rel="stylesheet">
</head>

<body class="login">
	<div>
		<div class="login_wrapper">
			<div class="animate form login_form">
				<section class="login_content">
					<?= form_open('login') ?>
					<h1>Login Form</h1>
					<div>
						<input type="text" class="form-control" placeholder="Username" name="username" required="" />
					</div>
					<div>
						<input type="password" class="form-control" placeholder="Password" name="userpass" required="" />
					</div>
					<div>
						<button class="btn btn-default submit" type="submit">Masuk</button>
					</div>

					<div class="clearfix"></div>

					<div class="separator">

						<div class="clearfix"></div>

						<?= $this->session->flashdata('alert') ?>

						<div>
							<img style="height:50px" src="<?=base_url('assets/img/')?>jiepicon.png" alt="">
							<h1>Meeting Information System</h1>
							<p>©<?=date('Y')?> IT-JIEP. All Rights Reserved.</p>
						</div>
					</div>
					<?= form_close() ?>
				</section>
			</div>
		</div>
	</div>
</body>
</html>
