<div class="right_col" role="main" style="margin-left:0px !important">
	<div class="">

		<div class="page-title">
			<div class="title_left">
				<h3><a href="<?=base_url()?>"><i class="fa fa-chevron-left"></i></a> <?=$title?></h3>
			</div>
		</div>

		<div class="clearfix"></div>

		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">

				<!-- notification -->
				<?=$this->session->flashdata('notification')?>
				<!-- /notification -->
				
				<div class="x_panel">

					<div class="x_title">
						<h2>Form Design <small>different form elements</small></h2>
						<div class="clearfix"></div>
					</div>

					<div class="x_content">

						<br>

						<?=form_open('meetings/do_tambah', array('class'=>'form-horizontal form-label-left'))?>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Perihal</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" name="perihal_meetings" class="form-control col-md-7 col-xs-12">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Ruangan</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<select id="lokasi_meetings" name="lokasi_meetings" class="form-control" required>
									<option value="">-- pilih ruangan --</option>
									<?php foreach ($ruangan as $ruangan_item): ?>
										<option value="<?= $ruangan_item['id_locations'] ?>"><?= ucfirst($ruangan_item['nama_locations']) ?></option>
									<?php endforeach; ?>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="date" name="tanggal_meetings" class="form-control col-md-7 col-xs-12">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Jam mulai</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="time" name="jam_meetings" class="form-control col-md-7 col-xs-12">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Jam selesai</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="time" name="jam_selesai_meetings" class="form-control col-md-7 col-xs-12">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Pengguna</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<select id="pengguna_meetings" name="pengguna_meetings" class="form-control" required>
									<option value="">-- pilih pengguna --</option>
									<?php foreach ($divisions as $divisions_item): ?>
										<option value="<?= $divisions_item['id_divisions'] ?>"><?= ucfirst($divisions_item['nama_divisions']) ?></option>
									<?php endforeach; ?>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Estimasi peserta</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="number" name="jumlah_peserta_meetings" class="form-control col-md-7 col-xs-12">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">PIC</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" name="pic_meetings" class="form-control col-md-7 col-xs-12">
							</div>
						</div>

						<div class="ln_solid"></div>
						<div class="form-group">
							<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
								<button class="btn btn-primary" type="button">Cancel</button>
								<button class="btn btn-primary" type="reset">Reset</button>
								<button type="submit" class="btn btn-success">Submit</button>
							</div>
						</div>
						<?=form_close()?>
					</div>

				</div>
			</div>
		</div>

	</div>
</div>