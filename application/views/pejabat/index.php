<!-- application/views/pejabat/index.php -->
<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('_partials/head.php') ?>
    <title>Master Pejabat</title>
	<!-- CSS DataTables -->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/datatables.min.css') ?>">
</head>
    
<body>   
	<div class="side_nav">
		<?php $this->load->view('_partials/side_nav.php') ?>
	</div>
	<!-- Page Wrapper -->
    <div id="wrapper">
		<div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
						<!-- Main Content -->
						<div id="content">
							<!-- Begin Page Content -->
							<div class="container-fluid">
								<div class="card shadow mb-4"> <br>
									<div style="text-align: right; padding: 10px;">
										<a href="<?php echo base_url('master_pejabat/create'); ?>" style="background-color: #007bff; color: #fff; padding: 7px 10px; border: none; border-radius: 5px; cursor: pointer;">Tambah Data</></a> <br>
									</div>
									<br>
								<div class="card-header py-3">
									<h1 class="m-0 font-weight-bold text-primary">Data Master Pejabat</h1>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-bordered" id="dataTables-example" width="100%" cellspacing="0">
											<thead>
												<tr>
													<th>ID</th>
													<th>Nama</th>
													<th>Tanggal Buat</th>
													<th>Tanggal Ubah</th>
													<th>Aksi</th>
												</tr>
											</thead>
											<tbody>
												<?php foreach ($pejabat as $pej) : ?>
													<tr>
														<td><?php echo $pej->id; ?></td>
														<td><?php echo $pej->nama; ?></td>
														<td><?php echo $pej->tglBuat; ?></td>
														<td><?php echo $pej->tglUbah; ?></td>
														<td>
															<a href="<?php echo base_url('master_pejabat/edit/'.$pej->id); ?>" style="display: inline-block; background-color: #007bff; color: #fff; padding: 7px 10px; text-decoration: none; border-radius: 5px;">Edit</a>
															<a href="<?php echo base_url('master_pejabat/delete/'.$pej->id); ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" style="display: inline-block; background-color: #FF0000; color: #fff; padding: 7px 10px; text-decoration: none; border-radius: 5px;">Hapus</a>
														</td>
													</tr>
													<?php endforeach; ?>
												</tbody>
											</table>
										</div>
									</div>
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

		<!-- DataTables JavaScript -->
		<script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
		<script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
		<script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

		<script>
		$(document).ready(function() {
			$('#dataTables-example').DataTable({
				responsive: true
			});
		});
		</script>

</body>

<?php $this->load->view('_partials/footer.php') ?>

</html>
