<!-- application/views/pejabat/edit.php -->
<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('_partials/head.php') ?>
    <title>Edit Pejabat</title>
</head>
<body>
	<div class="side_nav">
		<?php $this->load->view('_partials/side_nav.php') ?>
	</div>
    <!-- Page Wrapper -->
    <div id="wrapper">
		<div id="page-wrapper">
            <div class="row">
				<div class="panel panel-default col-lg-6">
					<div class="panel-body">
							<h3>Edit Data Pejabat</h3>
								<form method="post" action="<?php echo base_url('pejabat/edit/'.$pejabat->id); ?>">
									<label>Nama:</label>
									<input type="text" name="nama" value="<?php echo $pejabat->nama; ?>" required><br>

									<div class="form-group">
									<label>Jenis Kelamin:</label>
									<select name="jenis_kelamin" required>
										<option value="L" <?php echo ($pejabat->jenis_kelamin == 'L') ? 'selected' : ''; ?>>Laki-laki</option>
										<option value="P" <?php echo ($pejabat->jenis_kelamin == 'P') ? 'selected' : ''; ?>>Perempuan</option>
									</select><br>
									</div>

									<label>Alamat:</label>
									<input type="text" name="alamat" value="<?php echo $pejabat->alamat; ?>" required><br>

									<!-- <label>ID Pejabat:</label>
									<input type="text" name="m_pejabat_id" value="<?php echo $pejabat->m_pejabat_id; ?>" disabled><br> -->

									<label for="m_pejabat_id">Jabatan:</label>
									<select class="js-example-basic-single form-control" name="m_pejabat_id">
										<?php foreach ($pejabat_options as $master_pejabat): ?>
											<option value="<?= $master_pejabat->id ?>" <?= ($master_pejabat->id == $pejabat->m_pejabat_id) ? 'selected' : '' ?>>
												<?= $master_pejabat->nama ?>
											</option>
										<?php endforeach; ?>
									</select> </br>
									<br> <button type="submit">Simpan</button> <br>
									<br>
										<a href="<?php echo base_url('pejabat/index'); ?>" style="background-color: #007bff; color: #fff; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">Kembali</a>
									</br>
								</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- jQuery -->
    <script src="<?php echo base_url('vendor/jquery/jquery.min.js') ?>" ></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('vendor/bootstrap/js/bootstrap.min.js') ?>"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url('vendor/metisMenu/metisMenu.min.js') ?>"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url('vendor/raphael/raphael.min.js') ?>"></script>
    <script src="<?php echo base_url('vendor/morrisjs/morris.min.js') ?>"></script>
    <script src="<?php echo base_url('data/morris-data.js') ?>"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url('dist/js/sb-admin-2.js') ?>"></script>

    <script src="<?php echo base_url('vendor/select2/dist/js/select2.min.js'); ?>"></script>

	<script>
		$(document).ready(function() {
			$('.js-example-basic-single').select2();
		});
	</script>
</body>
<?php $this->load->view('_partials/footer.php') ?>
</html>
