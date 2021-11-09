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
			<div id="content" data-url="<?= base_url('skema') ?>">
				<!-- load Topbar -->
				<?php $this->load->view('partials/topbar.php') ?>

				<div class="container-fluid">
				<div class="clearfix">
					<div class="float-left">
						<h1 class="h3 m-0 text-gray-800"><?= $title ?></h1>
					</div>
					<div class="float-right">
						<a href="<?= base_url('skema') ?>" class="btn btn-secondary btn-sm"><i class="fa fa-reply"></i>&nbsp;&nbsp;Kembali</a>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-6">
						<div class="card shadow">
							<div class="card-header"><strong>Mohon isi form berikut :</strong></div>
							<div class="card-body">
								<form action="<?= base_url('skema/proses_tambah') ?>" id="form-tambah" method="POST">
									<div class="form-row">
										<div class="form-group col-md-3">
											<label for="form_number"><strong>Form Number</strong></label>
											<input type="text" name="form_number"  autocomplete="off"  class="form-control" required value="SKM/2021/NEW-<?= mt_rand(10, 99) ?>" maxlength="50" readonly>
										</div>



										<div class="form-group col-md-3">
						<label for="c_user"><strong>Current User</strong></label>
		<input type="text" name="c_user" value="<?= $this->session->login['nama'] ?>" readonly class="form-control" required>
									</div>

<div class="form-group col-md-3">
                                                <label for="tanggal"><strong>Tanggal Input</strong></label>
                <input type="text" name="tanggal" value="<?= date('d/m/Y') ?>" readonly class="form-control" required>
                                                                        </div>


<div class="form-group col-md-3">
                                                <label for="jam"><strong> Jam</strong></label>
                <input type="text" name="jam" value="<?= date('H:i:s') ?>" readonly class="form-control" required>
                                                                        </div>


									</div>
									<div class="form-row">
								<div class="form-group col-md-6">
							<label for="kategori"><strong>Kategori</strong></label>
<select name="kategori" id="kategori" class="form-control">
                                                                                <option value="">--Pilih Kategori--</option>
                                                                        <option value="Desentralisasi">Desentralisasi</option>
	<option value="PNBP">PNBP</option>
                                                                                        </select>	
										</div>
										<div class="form-group col-md-6">
											<label for="nama_skim"><strong>Nama Skim*</strong></label>
	          <input type="text" name="nama_skim" placeholder="Masukkan Nama Skim" autocomplete="off"  class="form-control" required>
										</div>
									</div>


<div class="form-row">
                                                                <div class="form-group col-md-6">
                                                        <label for="min_pendidikan"><strong>Syarat Min. Pendidikan</strong></label>
<select name="min_pendidikan" id="min_pendidikan" class="form-control">
                                                                                <option value="">--Pilih Salah Satu--</option>
                                                                        <option value="SLTA">SLTA</option>
        <option value="Diploma 1">Diploma 1</option>
<option value="Diploma 2">Diploma 2</option>
<option value="Diploma 3">Diploma 3</option>
<option value="Diploma 4">Diploma 4</option>
<option value="Sarjana S1">Sarjana S1</option>
<option value="Sarjana S2">Sarjana S2</option>
<option value="Sarjana S3">Sarjana S3</option>
                                                                                        </select>       
                                                                                </div>


<div class="form-group col-md-6">
                                                        <label for="min_jabatan"><strong>Syarat Min. Jabatan</strong></label>
<select name="min_jabatan" id="min_jabatan" class="form-control">
                                                                                <option value="">--Pilih Salah Satu--</option>
                                                                        <option value="Tidak Ada">Tidak Ada</option>
        <option value="Tenaga Kependidikan">Tenaga Kependidikan</option>
<option value="Asisten Dosen">Asisten Dosen</option>
<option value="Lektor">Lektor</option>
<option value="Lektor Kepala">Lektor Kepala</option>
<option value="Guru Besar">Guru Besar</option>
                                                                                        </select>       
                                                                                </div>



</div>





<div class="form-row">
                                                                <div class="form-group col-md-6">
                                                        <label for="min_anggota"><strong>Minimal Anggota</strong></label>
<input type="number" name="min_anggota" value="" placeholder="0" class="form-control">
                                                                                </div>


<div class="form-group col-md-6">
                                                        <label for="max_anggota"><strong>Maksimal Anggota</strong></label>
<input type="number" name="max_anggota" value="" placeholder="0" class="form-control">
                                                                                </div>



</div>



<div class="form-row">
                                                                <div class="form-group col-md-6">
                                                        <label for="min_biaya"><strong>Min. Biaya Pendidikan</strong></label>
<input type="text" name="min_biaya" value="" autocomplete="off" placeholder="0" class="form-control" >
                                                                                </div>


<div class="form-group col-md-6">
                                                        <label for="max_biaya"><strong>Max. Biaya Pendidikan</strong></label>
<input type="text" name="max_biaya" value="" autocomplete="off" placeholder="0" class="form-control">
                                                                                </div>



</div>


<div class="form-row">
                                                                <div class="form-group col-md-6">
                                                        <label for="min_pelaksana"><strong>Min. Pelaksanaan Penelitian</strong></label>
<input type="number" name="min_pelaksana" value="" placeholder="0 Tahun" class="form-control" >
                                                                                </div>


<div class="form-group col-md-6">
                                                        <label for="max_pelaksana"><strong>Max. Pelaksanaan Penelitian</strong></label>
<input type="number" name="max_pelaksana" value="" placeholder="0 Tahun" class="form-control">
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
