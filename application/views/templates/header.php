<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <?php $this->load->view('templates/css'); ?>
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
        <?php if($this->session->userdata('status')){?>
          <a class="btn" href="<?= base_url(); ?>logout"><div class="fa fa-unlock"></div> Logout</a>
        <?php }else{?>
          <a class="btn" href="<?= base_url(); ?>login"><div class="fa fa-lock"></div> Login</a>
        <?php }?>

        <!--<div class="modal fade" id="myLogin" role="dialog">
            <div class="modal-dialog">
             <div class="modal-header">
                    <h1>LOGIN ANJAY</h1>   
             </div>
             <div class="modal-body">
                    <form>
                      <h5>username</h5>
                      <input type="text" placehoder="username :p">
                      <h5>password</h5>
                      <input type="password" placeholder="isi password njing">
                      <input type="button">
                    </form>
             </div>
             <div class="modal-footer">
               
             </div>
            </div>
        </div> -->

                 
              </li>
<!--              <li>
                 <button type="button" class="btn btn-link btn-lg"><a id="#"><i class="fa fa-unlock">Logout</i></a></button>
              </li>-->
          </ul>
        </div>
        </nav>
      </div>
    </div>
<!-- login content -->
<!--<body class="nav-md" style="background:rgb(247,247,247) ">
<div class="container body" style="top: 0; bottom: 0; left: 0; height: 100%">
 <div class="main_container">
  <div class="right_col" role="main" style="margin-left:0px !important">
   <div class="row">
    <div class="col-md-4 col-md-offset-4">
     <div class="container">
  <h2 style="text-align: center;">Use your division account</h2>
  <form>
    <div class="form-group">
      <input class="form-control" id="inputdefault" type="text" placeholder="Username">
    </div>
    <div class="form-group">
      <input class="form-control" id="inputdefault" type="text" placeholder="Password">
    </div>
  </form>
    <div class="form-group">
      <label for="sel3">input-sm</label>
      <select class="form-control input-sm" id="sel3">
        <option>1</option>
        <option>2</option>
        <option>3</option>
      </select>
    </div>
  </form>
</div>

</body> -->
<!-- Small modal -->
                 

<!-- login -->


  </header>

	<!-- header content -->
