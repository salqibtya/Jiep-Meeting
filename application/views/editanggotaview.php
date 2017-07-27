<!-- admin content -->
<body style="background-color:rgb(247,247,247) ">
	<div class="page-title">
		<div class="title_right" style="background-color: rgb(247,247,247)">
			<h3><a href="<?=base_url()?>/Divisi"><i class="fa fa-chevron-left"></i></a> <?=$title?></h3>
		</div>
	</div>			
	<div class="x_panel">
		<div class="col-md-9">
			<?=form_open('/Divisi/do_editanggota')?>
			<br>
			<?php foreach($anggotas as $anggota_item):?>
				<div class="form-horizontal form-label-left">
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Anggota</label>
						<div class="col-md-9 col-sm-6 col-xs-12">
							<input id="inputdefault" type="text" name="nama_anggota" class="form-control col-md-7 col-xs-12" value="<?=$anggota_item['nama']?>">
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Email Anggota</label>
						<div class="col-md-9 col-sm-6 col-xs-12">
							<input type="text" name="email_anggota" class="form-control col-md-7 col-xs-12" value="<?=$anggota_item['email']?>">
						</div>
						<input type="hidden" name="id" value="<?=$anggota_item['id_anggota']?>">
					</div>

				</div>
			<?php endforeach ?>
			<div class="ln_solid"></div>
			<div class="ln_solid pull-right"></div>
			<div class="form-group">
			<div class="pull-right">
					<button type="submit" class="btn btn-success">Submit</button>
				</div>
			</div>
			<?=form_close()?>
		</div>
	</div>
	<div class="clearfix"></div>
</div>
</body> 