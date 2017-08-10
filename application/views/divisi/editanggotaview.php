<body style="background-color:rgb(247,247,247)">
	<div class="col-md-12 col-sm-9 col-xs-12">
		<div class="col-md-12 col-sm-9 col-xs-12">
			<div class="right_col" role="main" style="margin-left:0px!important">
				<div class="page-title">
					<div class="title_right" style="background-color: rgb(247,247,247)">
						<h3><a href="<?=base_url()?>Divisi"><i class="fa fa-chevron-left"></i></a> <?=$title?></h3>
						<div class="clearfix"></div>
					</div>
				</div>	
			</div>		

			<div class="clearfix"></div>
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">

					<?=form_open('/Divisi/do_editanggota')?>
					<div class="x_content">
						<br>
						<?php foreach ($anggotas as $anggota_item):?>
							<div class="form-horizontal form-label-left">
								<div class="form-group col-md-12">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Anggota</label>
									<div class="col-md-6 col-sm-6 col-xs-12">
										<input id="inputdefault" type="text" name="nama_anggota" class="form-control col-md-7 col-xs-12" value="<?=$anggota_item['nama']?>">
									</div>
								</div>

								<div class="form-group col-md-12">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Email Anggota</label>
									<div class="col-md-6 col-sm-6 col-xs-12">
										<input type="text" name="email_anggota" class="form-control col-md-7 col-xs-12" value="<?=$anggota_item['email']?>">
									</div>
									<input type="hidden" name="id" value="<?=$anggota_item['id_anggota']?>">
								</div>
							</div>	
						<?php endforeach?>
						
						<div class="form-group pull-right">

							<button type="submit" class="btn btn-success">Submit</button>
							
						</div>
					</div>
					<?=form_close()?>
				</div>
			</div>
		</div>
	</div>
</body> 