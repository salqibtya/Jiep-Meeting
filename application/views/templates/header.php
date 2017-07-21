<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <?php $this->load->view('templates/css'); ?>
  <?php $this->load->view('templates/js'); ?>
	<title>Meeting | <?=$title?></title>
</head>
  <!-- header content -->
  <header class="#">
    <div class="top_nav">
      <div class="nav_menu">
        <nav>
        <div class="col-md-2">
           <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-users"></i></a>
          </div>      
         </div>
         <div class="col-md-8">
            <h3 style="text-align: center;"> Meeting Information System</h3>
         </div>
         <div class="col-md-2"> 
          <ul class="nav navbar-nav navbar-right">
              <li>
                 

        <!-- button login -->
         <button type="button" class="btn btn-link btn-lg" data-toggle="modal" data-target="#myLogin"> <a id="#"><i class="fa fa-lock"> Login</i></a></button>

              </li>
        <!-- button logout 
              <li>
              <button type="button" class="btn btn-link btn-lg"><a id="#"><i class="fa fa-unlock">Logout</i></a></button>
              </li>
          -->
          </ul>
        </div>
       </nav>
      </div>
     </div>
<!-- login content -->
  </header>
