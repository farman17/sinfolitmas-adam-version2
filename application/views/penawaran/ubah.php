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
			<div id="content" data-url="<?= base_url('pegawai') ?>">
				<!-- load Topbar -->
				<?php $this->load->view('partials/topbar.php') ?>

				<div class="container-fluid">
				<div class="clearfix">
					<div class="float-left">
						<h1 class="h3 m-0 text-gray-800"><?= $title ?></h1>
					</div>
					<div class="float-right">
						<a href="<?= base_url('pegawai') ?>" class="btn btn-secondary btn-sm"><i class="fa fa-reply"></i>&nbsp;&nbsp;Kembali</a>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-6">
						<div class="card shadow">
							<div class="card-header"><strong>Isi Form Dibawah Ini!</strong></div>
							<div class="card-body">
								<form action="<?= base_url('pegawai/proses_ubah/' . $pegawai->id) ?>" id="form-tambah" method="POST">
									<div class="form-row">
										<div class="form-group col-md-6">
											<label for="kode_kasir"><strong>Kode Pengguna</strong></label>
											<input type="text" name="kode_kasir" placeholder="Masukkan Kode Kasir" autocomplete="off"  class="form-control" required value="<?= $pegawai->kode_kasir ?>" maxlength="8" readonly>
										</div>
										<div class="form-group col-md-6">
											<label for="nama_kasir"><strong>Nama Pegawai</strong></label>
											<input type="text" name="nama_kasir" placeholder="Masukkan Nama Kasir" autocomplete="off"  class="form-control" required value="<?= $pegawai->nama_kasir ?>">
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col-md-6">
											<label for="username_kasir"><strong>NIDN / NIP</strong></label>
											<input type="text" name="username_kasir" placeholder="Masukkan Username" autocomplete="off"  class="form-control" required value="<?= $pegawai->username_kasir ?>" readonly>
										</div>
										<div class="form-group col-md-6">
											<label for="password_kasir"><strong>Password</strong></label>
											<input type="text" name="password_kasir" placeholder="Masukkan Password" autocomplete="off"  class="form-control" required value="<?= $pegawai->password_kasir ?>">
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
</body>
</html>
