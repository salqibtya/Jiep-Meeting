<body style="background-color:rgb(247,247,247) ">
	<div class="right_col" role="main" style="margin-left:0px!important">
		<?=$this->session->flashdata('notification')?>
		<div class="page-title">
			<div class="title-right" style="background-color: rgb(247,247,247)">   
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">				
			<div class="x_panel">
				<div class="x_title">
				<h3><a href="<?=base_url()?>/Divisi"><i class="fa fa-chevron-left"></i></a> <?=$title?></h3>
					<div class="clearfix"></div>
				</div>

				<div class="x_content">

					<br>

					<div class="form-horizontal form-label-left">						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Perihal</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" placeholder="perihal" name="perihal" class="form-control col-md-7 col-xs-12">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Ruangan</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<select id="ruangan" name="ruangan" class="form-control" required>
									<?php foreach($ruangans as $ruangan_item):?>
									<option value="<?=$ruangan_item['id_ruangan']?>"><?=$ruangan_item['nama_ruangan'];?></option>
									<?php endforeach ?>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="date" placeholder="dd/mm/yyyy" name="tanggal" class="form-control col-md-7 col-xs-12">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Jam mulai</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="time" placeholder="hh:mm" name="waktu_mulai" class="form-control col-md-7 col-xs-12">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Jam selesai</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="time" placeholder="hh:mm" name="waktu_selesai" class="form-control col-md-7 col-xs-12">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Peserta</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<select id="pengguna_meetings" name="pengguna_meetings" class="form-control" required>
									<option value="">-- pilih Peserta --</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Estimasi peserta</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="number" placeholder="estimasi peserta" name="estimasi_peserta" class="form-control col-md-7 col-xs-12">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">PIC</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" placeholder="PIC" name="pic" class="form-control col-md-7 col-xs-12">
							</div>
						</div>

						<div class="ln_solid"></div>
						<div class="form-group">
							<div class="col-md-7 col-xs-12 col-md-offset-8">
								<button type="submit" class="btn btn-success">Submit</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body> 