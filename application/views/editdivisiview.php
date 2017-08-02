<body style="background-color:rgb(247,247,247)">
	<div class="col-md-12 col-sm-9 col-xs-12">
		<div class="col-md-12 col-sm-9 col-xs-12">
			<div class="right_col" role="main" style="margin-left:0px!important">
				<div class="page-title">
					<div class="title_right" style="background-color: rgb(247,247,247)">
						<h3><a href="<?=base_url()?>/Admin/ruangdivisi"><i class="fa fa-chevron-left"></i></a> <?=$title?></h3>
						<div class="clearfix"></div>
					</div>
				</div>	
			</div>

			<div class="clearfix"></div>
			<div class="col-md-12 col-sm-12 col-xs-12">

				<div class="x_panel">

					<?=form_open('/Admin/do_editdivisi')?>
					<div class="x_content">
						<br>
						<?php foreach($divisis as $divisi_item):?>
							<div class="form-horizontal form-label-left">
								<div class="form-group col-md-12">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Divisi</label>
									<div class="col-md-6 col-sm-6 col-xs-12">
										<input id="inputdefault" type="text" name="nama_divisi" class="form-control" value="<?=$divisi_item['nama_divisi']?>">
									</div>
								</div>

								<div class="form-group col-md-12">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Username Divisi</label>
									<div class="col-md-6 col-sm-6 col-xs-12">
										<input type="text" name="username_divisi" class="form-control" value="<?=$divisi_item['username_divisi']?>">
									</div>
								</div>

								<div class="form-group col-md-12">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Password Divisi</label>
									<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" name="password_divisi" class="form-control" placeholder="isi Password baru" required>
									</div>
									<!-- untuk mengambil id -->
									<input type="hidden" name="id" value="<?=$divisi_item['id_divisi']?>">
								</div>
							</div>
						<?php endforeach ?>
						<div class="form-group pull-right">
								<button type="submit" class="btn btn-success">Submit</button>
						</div>
					<?=form_close()?>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
