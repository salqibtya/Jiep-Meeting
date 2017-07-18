<div class="top_nav" style="margin-left:0px !important">
	<div class="nav_menu">
		<nav>
			<div class="nav toggle" style="width:400px">
				<a href="<?=base_url()?>"><i class="fa fa-users"></i> <span style="font-size:22px"> Meeting Information System</span></a>
			</div>

			<ul class="nav navbar-nav navbar-right">
				<?php if($this->session->userdata('id_user')) { ?>
				<li>
					<a href="<?=base_url('logout')?>">
						<i class="fa fa-unlock"></i> Logout
					</a>
				</li>

				<li class="dropdown">
					<a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
					<i class="fa fa-sign-in"></i> Ruangan
						<span class=" fa fa-angle-down"></span>
					</a>
					<ul id="menu1" class="dropdown-menu list-unstyled" role="menu">
						<li><a href="<?=base_url('locations/tambah')?>">Tambah</a></li>
						<li><a href="<?=base_url('locations')?>">Daftar ruangan</a></li>
					</ul>
				</li>

				<li class="dropdown">
					<a href="<?=base_url('meetings/tambah')?>" >
						<i class="fa fa-plus-square"></i> Meeting
					</a>
				</li>
				<?php } else { ?>
				<li>
					<a href="<?=base_url('login')?>">
						<i class="fa fa-lock"></i> Login
					</a>
				</li>
				<?php } ?>
			</ul>
		</nav>
	</div>
</div>