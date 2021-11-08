<?php

use Dompdf\Dompdf;

class Pegawai extends CI_Controller{
	public function __construct(){
		parent::__construct();
		if($this->session->login['role'] != 'kasir' && $this->session->login['role'] != 'admin') redirect();
		$this->data['aktif'] = 'pegawai';
		$this->load->model('M_pegawai', 'm_pegawai');
	}

	public function index(){
		$this->data['title'] = 'Master Pegawai';
		$this->data['all_pegawai'] = $this->m_pegawai->lihat();
		$this->data['no'] = 1;

		$this->load->view('pegawai/lihat', $this->data);
	}

	public function tambah(){
		if ($this->session->login['role'] == 'kasir'){
			$this->session->set_flashdata('error', 'Tambah data hanya untuk admin!');
			redirect('penjualan');
		}

		$this->data['title'] = 'Tambah Data Pegawai';

		$this->load->view('pegawai/tambah', $this->data);
	}

	public function proses_tambah(){
		if ($this->session->login['role'] == 'kasir'){
			$this->session->set_flashdata('error', 'Tambah data hanya untuk admin!');
			redirect('penjualan');
		}

		$data = [
			'kode_kasir' => $this->input->post('kode_kasir'),
			'nama_kasir' => $this->input->post('nama_kasir'),
			'username_kasir' => $this->input->post('username_kasir'),
			'password_kasir' => $this->input->post('password_kasir'),
		];

		if($this->m_pegawai->tambah($data)){
			$this->session->set_flashdata('success', 'Data User <strong>Berhasil</strong> Ditambahkan!');
			redirect('pegawai');
		} else {
			$this->session->set_flashdata('error', 'Data User <strong>Gagal</strong> Ditambahkan!');
			redirect('pegawai');
		}
	}

	public function ubah($id){
		if ($this->session->login['role'] == 'kasir'){
			$this->session->set_flashdata('error', 'Ubah data hanya untuk admin!');
			redirect('penjualan');
		}

		$this->data['title'] = 'Edit Data Pegawai';
		$this->data['pegawai'] = $this->m_pegawai->lihat_id($id);

		$this->load->view('pegawai/ubah', $this->data);
	}

	public function proses_ubah($id){
		if ($this->session->login['role'] == 'kasir'){
			$this->session->set_flashdata('error', 'Ubah data hanya untuk admin!');
			redirect('penjualan');
		}

		$data = [
			'kode_kasir' => $this->input->post('kode_kasir'),
			'nama_kasir' => $this->input->post('nama_kasir'),
			'username_kasir' => $this->input->post('username_kasir'),
			'password_kasir' => $this->input->post('password_kasir'),
		];

		if($this->m_pegawai->ubah($data, $id)){
			$this->session->set_flashdata('success', 'Data User <strong>Berhasil</strong> Diubah!');
			redirect('pegawai');
		} else {
			$this->session->set_flashdata('error', 'Data User <strong>Gagal</strong> Diubah!');
			redirect('pegawai');
		}
	}

	public function hapus($id){
		if ($this->session->login['role'] == 'kasir'){
			$this->session->set_flashdata('error', 'Hapus data hanya untuk admin!');
			redirect('penjualan');
		}

		if($this->m_pegawai->hapus($id)){
			$this->session->set_flashdata('success', 'Data User <strong>Berhasil</strong> Dihapus!');
			redirect('pegawai');
		} else {
			$this->session->set_flashdata('error', 'Data User <strong>Gagal</strong> Dihapus!');
			redirect('pegawai');
		}
	}

	public function export(){
		$dompdf = new Dompdf();
		// $this->data['perusahaan'] = $this->m_usaha->lihat();
		$this->data['all_kasir'] = $this->m_kasir->lihat();
		$this->data['title'] = 'Laporan Data Kasir';
		$this->data['no'] = 1;

		$dompdf->setPaper('A4', 'Landscape');
		$html = $this->load->view('kasir/report', $this->data, true);
		$dompdf->load_html($html);
		$dompdf->render();
		$dompdf->stream('Laporan Data Kasir Tanggal ' . date('d F Y'), array("Attachment" => false));
	}
}
