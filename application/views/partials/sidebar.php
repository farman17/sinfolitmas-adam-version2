<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('dashboard') ?>">
				<div class="sidebar-brand-icon rotate-n-15">
					<i class="fab fa-asymmetrik"></i>
				</div>
				<div class="sidebar-brand-text mx-3">SINFOLITMAS</div>
			</a>
			<hr class="sidebar-divider my-0">
			<li class="nav-item <?= $aktif == 'dashboard' ? 'active' : '' ?>">
				<a class="nav-link" href="<?= base_url('dashboard') ?>">
					<i class="fas fa-house-damage"></i>
					<span>Halaman Utama</span></a>
			</li>
			<hr class="sidebar-divider">

			<div class="sidebar-heading">
				Master
			</div>


<!-- bagian ini di nonaktifkan*** li class="nav-item <?= $aktif == 'barang' ? 'active' : '' ?>">
				<a class="nav-link" href="<?= base_url('barang') ?>">
					<i class="fas fa-fw fa-box"></i>
		        		<span>Master Barang</span></a>
			</li-->



			<li class="nav-item <?= $aktif == 'kasir' ? 'active' : '' ?>">
				<a class="nav-link" href="<?= base_url('kasir') ?>">
					</i>  <i class="fas fa-user-check"></i>
					<span>Master Pegawai</span></a>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider">
	
			<div class="sidebar-heading">
				Transaksi
			</div>

			<!-- bagian ini di nonaktifkan*** li class="nav-item <?= $aktif == 'penjualan' ? 'active' : '' ?>">
				<a class="nav-link" href="<?= base_url('penjualan') ?>">
					<i class="fas fa-fw fa-file-invoice"></i>
					<span>Transaksi Penjualan</span></a>
			</li-->

 <li class="nav-item <?= $aktif == 'penjualan' ? 'active' : '' ?>">
                                <a class="nav-link" href="<?= base_url('penjualan') ?>">
                                  <i class="fas fa-book-reader"></i>
                                        <span>Daftar Skim</span></a>
                        </li>

 <li class="nav-item <?= $aktif == 'penjualan' ? 'active' : '' ?>">
                                <a class="nav-link" href="<?= base_url('penjualan') ?>">
                                        <i class="fas fa-american-sign-language-interpreting"></i>
                                        <span>Daftar Tawaran</span></a>
                        </li>


 <li class="nav-item <?= $aktif == 'penjualan' ? 'active' : '' ?>">
                                <a class="nav-link" href="<?= base_url('penjualan') ?>">
                                        <i class="fas fa-chalkboard-teacher"></i>
                                        <span>Daftar Pengguna</span></a>
                        </li>

 <li class="nav-item <?= $aktif == 'penjualan' ? 'active' : '' ?>">
                                <a class="nav-link" href="<?= base_url('penjualan') ?>">
                                       <i class="fas fa-glasses"></i>
                                        <span>Penugasan Reviewer</span></a>
                        </li>

 <li class="nav-item <?= $aktif == 'penjualan' ? 'active' : '' ?>">
                                <a class="nav-link" href="<?= base_url('penjualan') ?>">
                                     <i class="fas fa-history"></i>
                                        <span>Riwayat Penilaian</span></a>
                        </li>

 <li class="nav-item <?= $aktif == 'penjualan' ? 'active' : '' ?>">
                                <a class="nav-link" href="<?= base_url('penjualan') ?>">
                                     <i class="fab fa-slideshare"></i>
                                        <span>Penetapan Usulan</span></a>
                        </li>


 <li class="nav-item <?= $aktif == 'penjualan' ? 'active' : '' ?>">
                                <a class="nav-link" href="<?= base_url('penjualan') ?>">
                                        <i class="fas fa-fw fa-file-invoice"></i>
                                        <span>Riwayat Usulan</span></a>
                        </li>


 <li class="nav-item <?= $aktif == 'penjualan' ? 'active' : '' ?>">
                                <a class="nav-link" href="<?= base_url('penjualan') ?>">
                                            <i class="fas fa-calendar-check"></i>
                                        <span>Pemantauan Kelengkapan</span></a>
                        </li>


			<hr class="sidebar-divider">
			<?php if ($this->session->login['role'] == 'admin'): ?>
				<!-- Heading -->
				<div class="sidebar-heading">
					Pengaturan
				</div>

				<li class="nav-item <?= $aktif == 'pengguna' ? 'active' : '' ?>">
					<a class="nav-link" href="<?= base_url('pengguna') ?>">
						<i class="fas fa-fw fa-users"></i>
						<span>Manajemen Pengguna</span></a>
				</li>

				<li class="nav-item <?= $aktif == 'toko' ? 'active' : '' ?>">
					<a class="nav-link" href="<?= base_url('toko') ?>">
					   <i class="fas fa-school"></i>
						<span>Profil Kampus</span></a>
				</li>
				<!-- Divider -->
				<hr class="sidebar-divider d-none d-md-block">
			<?php endif; ?>

			<!-- Sidebar Toggler (Sidebar) -->
			<div class="text-center d-none d-md-inline">
				<button class="rounded-circle border-0" id="sidebarToggle"></button>
			</div>
		</ul>
