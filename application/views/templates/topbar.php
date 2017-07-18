<div class="top_nav" style="margin-left:0px !important">
	<div class="nav_menu">
		<nav>
			<div class="nav toggle">
				<a href="<?=base_url()?>"><i class="fa fa-users"></i></a>
			</div>

			<ul class="nav navbar-nav navbar-right">

				<!-- login -->
				<ul class="nav navbar-nav navbar-right">
					<?php if($this->session->userdata('id_user')) { ?>
					<li>
						<a href="<?=base_url('logout')?>">
							<i class="fa fa-unlock"></i> Logout
						</a>
					</li>
					<?php } else { ?>
					<li>
						<a href="<?=base_url('login')?>">
							<i class="fa fa-lock"></i> Login
						</a>
					</li>
					<!-- <li>
						<a href="<?=base_url('Login')?>">
							<i class="fa fa-tag"></i> Pesan ruangan
						</a>
					</li> -->
					<?php } ?>
				</ul>
				<!-- /login -->
			</ul>
		</nav>
	</div>
</div>