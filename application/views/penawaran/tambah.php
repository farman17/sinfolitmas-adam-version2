<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view('partials/head.php') ?>
</head>

<body id="page-top">
	<div id="wrapper">
		<!-- load sidebar -->
		<?php $this->load->view('partials/sidebar.php') ?>

		<div id="content-wrapper" class="d-flex flex-column">
			<div id="content" data-url="<?= base_url('penawaran') ?>">
				<!-- load Topbar -->
				<?php $this->load->view('partials/topbar.php') ?>

				<div class="container-fluid">
				<div class="clearfix">
					<div class="float-left">
						<h1 class="h3 m-0 text-gray-800"><?= $title ?></h1>
					</div>
					<div class="float-right">
						<a href="<?= base_url('penawaran') ?>" class="btn btn-secondary btn-sm"><i class="fa fa-reply"></i>&nbsp;&nbsp;Kembali</a>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-6">
						<div class="card shadow">
							<div class="card-header"><strong>Mohon Isi form berikut :</strong></div>
							<div class="card-body">
								<form action="<?= base_url('penawaran/proses_tambah') ?>" id="form-tambah" method="POST">
									<div class="form-row">
										<div class="form-group col-md-6">
											<label for="kode_kasir"><strong>No.Form</strong></label>
											<input type="text" name="kode_kasir" placeholder="Masukkan Kode User" autocomplete="off"  class="form-control" required value="SKM/2021/- <?= mt_rand(10, 99) ?>" maxlength="20" readonly>
										</div>
										<div class="form-group col-md-6">
											<label for="nama_kasir"><strong>Nama Pegawai</strong></label>
											<input type="text" name="nama_kasir" placeholder="Masukkan Nama Pegawai" autocomplete="off"  class="form-control" required>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col-md-6">
											<label for="username_kasir"><strong>NIDN/NIP</strong></label>
											<input type="text" name="username_kasir" placeholder="Masukkan NIDN / NIP" autocomplete="off"  class="form-control" required >
										</div>
										<div class="form-group col-md-6">
											<label for="password_kasir"><strong>Password</strong></label>
											<input type="text" name="password_kasir" placeholder="Masukkan Password" autocomplete="off"  class="form-control" required>
										</div>
									</div>
									<hr>
									<div class="form-group">
										<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>&nbsp;&nbsp;Simpan</button>
										<button type="reset" class="btn btn-danger"><i class="fa fa-times"></i>&nbsp;&nbsp;Batal</button>
									</div>
								</form>
							</div>				
						</div>
					</div>
				</div>
				</div>
			</div>
			<!-- load footer -->
			<?php $this->load->view('partials/footer.php') ?>
		</div>
	</div>
	<?php $this->load->view('partials/js.php') ?>
	<script>
		$(document).ready(function(){
			let username_kasir = $('input[name="kode_kasir"]').val().split(' - ');
			
			 
		})
	</script>
</body>
</html>
