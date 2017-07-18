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
						<h2>Form <small><?=$title?></small></h2>
						<div class="clearfix"></div>
					</div>

					<div class="x_content">

						<br>

						<?=form_open('locations/do_edit', array('class'=>'form-horizontal form-label-left'))?>

						<input type="hidden" name="id_locations" value="<?=$locations['id_locations']?>">

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Nama ruangan</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" value="<?=$locations['nama_locations']?>" name="nama_locations" class="form-control col-md-7 col-xs-12">
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