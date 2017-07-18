<div class="col-md-3 left_col">

	<div class="left_col scroll-view">

		<!-- app name -->
		<div class="navbar nav_title" style="border: 0;">
			<a href="<?=base_url()?>" class="site_title">
				<img style="width:30px;margin-left:12px" src="<?=base_url('assets/img/')?>jiepicon.png" alt="">
				<span><?=APP_NAME?></span>
			</a>
		</div>
		<!-- /app name -->

		<div class="clearfix"></div>

		<br />

		<!-- sidebar menu -->
		<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

		<?php if($this->session->userdata('level_user')==3 || $this->session->userdata('level_user')==9): ?>
				<div class="menu_section">
					<ul class="nav side-menu">
						<li><a href="<?=base_url('dashboard')?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
					</ul>
				</div>
			<?php endif; ?>

			<div class="menu_section">
				<h3>Asset</h3>

				<ul class="nav side-menu">

					<!-- movable -->
					<li><a><i class="fa fa-cubes"></i> Movable <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li><a href="<?=base_url('barang')?>">Semua barang</a></li>
							<li><a href="<?=base_url('barang/elektronik')?>">Elektronik</a></li>
							<li><a href="<?=base_url('barang/peralatan')?>">Peralatan</a></li>
							<li><a href="<?=base_url('barang/kendaraan')?>">Kendaraan</a></li>
							<li><a href="<?=base_url('barang/furniture')?>">Furniture</a></li>
							<li><a href="<?=base_url('barang/fixture')?>">Fixture</a></li>
							<li><a href="<?=base_url('barang/household')?>">Household</a></li>
							<li><a href="<?=base_url('barang/lainnya')?>">Lainnya</a></li>
						</ul>
					</li>
					<!-- /movable -->

					<!-- non movable -->
					<li><a><i class="fa fa-cube"></i> Non movable <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li><a href="<?=base_url('bumn/view/tanah')?>">Tanah</a></li>
							<li><a href="<?=base_url('bumn/view/bangunan')?>">Bangunan</a></li>
						</ul>
					</li>
					<!-- /non movable -->

					<!-- sarana prasarana -->
					<li><a><i class="fa fa-road"></i> Sarana prasarana<span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li><a href="<?=base_url('sarana_prasarana/view/jalan')?>">Jalan</a></li>
							<li><a href="<?=base_url('sarana_prasarana/view/trotoar')?>">Trotoar</a></li>
							<li><a href="<?=base_url('sarana_prasarana/view/median')?>">Median</a></li>
							<li><a href="<?=base_url('sarana_prasarana/view/saluran')?>">Saluran</a></li>
							<li><a href="<?=base_url('sarana_prasarana/view/pju')?>">PJU</a></li>
							<li><a href="<?=base_url('sarana_prasarana/view/pts')?>">PTS</a></li>
							<li><a href="<?=base_url('sarana_prasarana/view/media_promosi')?>">Media promosi</a></li>
							<li><a href="<?=base_url('sarana_prasarana/view/gate')?>">Gate</a></li>
							<li><a href="<?=base_url('sarana_prasarana/view/rambu')?>">Rambu</a></li>
							<li><a href="<?=base_url('sarana_prasarana/view/pagar')?>">Pagar</a></li>
							<li><a href="<?=base_url('sarana_prasarana/view/kavling_fasum')?>">Kavling fasum</a></li>
						</ul>
					</li>
					<!-- /sarana prasarana -->

					<!-- location -->
					<li><a><i class="fa fa-map-marker"></i> Location <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li><a href="<?=base_url('position/ruangan')?>">Ruangan</a></li>
							<li><a href="<?=base_url('extras/not_found')?>">Jalan<span class="label label-success pull-right">coming soon</span></a></li>
						</ul>
					</li>
					<!-- /location -->

				</ul>
			</div>
		</div>
		<!-- /sidebar menu -->

		<!-- /menu footer buttons -->
		<div class="sidebar-footer hidden-small">
			<a data-toggle="tooltip" data-placement="top" title="Settings">
				<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
			</a>
			<a data-toggle="tooltip" data-placement="top" title="FullScreen">
				<span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
			</a>
			<a data-toggle="tooltip" data-placement="top" title="Lock">
				<span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
			</a>
			<a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
				<span class="glyphicon glyphicon-off" aria-hidden="true"></span>
			</a>
		</div>
		<!-- /menu footer buttons -->

	</div>

</div>