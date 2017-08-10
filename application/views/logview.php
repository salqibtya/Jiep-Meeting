<!-- login content -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php $this->load->view('templates/css'); ?>
  <title>Meeting | Login</title>
</head>

<!-- login content -->
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
       <button class="btn btn-default submit" type="submit">Login</button>
     </div>
     <?= $this->session->flashdata('alert') ?>
     <div class="clearfix"></div>
     <div class="separator">
      <div class="clearfix"></div>
      
      <div>
       <img src="./assets/img/jiepicon.png">
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
<!-- login content  -->