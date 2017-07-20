<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?=APP_NAME?> | <?=$title?></title>

	<!-- load css -->
	<?php $this->load->view('templates/css'); ?>
	<!-- /load css -->
</head>


<body class="nav-md">
<div class="container body">
  <div class="main_container">
    <div class="top_nav" style="margin-left:0px !important">
      <div class="nav_menu">
        <nav>
          <div class="nav toggle" >
            <a href="<?=base_url()?>"><i class="fa fa-users"></i></a>
          </div>
            
              <!-- login -->
          <ul class="nav navbar-nav navbar-right">
            <li>
              <button type="button" class="btn btn-link btn-lg" data-toggle="modal" data-target="#myModal">
              <i class="fa fa-lock"> Login </i></button>
            
              <!-- BEGIN # MODAL LOGIN -->
              <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
    
              <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="text-align:center">Login Form</h4>
                  </div>
              
               <!-- Begin # Login Form -->
                  <div id="div-forms">
                    <form id="login-form">
                      <div class="modal-body">
                        <div class="col-md">
                          <input id="login_username" class="form-control" type="text" placeholder="Username" required> <br>
                          <input id="login_password" class="form-control" type="password" placeholder="Password" required>
                        </div>
                      
                      <div class="modal-footer">
                        <div>
                          <button type="button" class="btn btn-primary btn-lg btn-block">Login</button>
                        </div>
                      </div>
                        
                      <h3 style="text-align:center"> Meeting Information System</h3>
                      <h6 style="text-align:center"> ©2017 IT-JIEP. All Rights Reserved<br> </h6>
                      </div>
                    </form>
         
                  </div>
                </div>
                </div>
              </div>
            <!-- End # Login Form -->
            
            </li>
        </ul>
        </nav>
      </div>
    </div>
