<?php

use Dompdf\Dompdf;

class Penawaran extends CI_Controller{
	public function __construct(){
		parent::__construct();
		if($this->session->login['role'] != 'kasir' && $this->session->login['role'] != 'admin') redirect();
		$this->data['aktif'] = 'penawaran';
		$this->load->model('M_penawaran', 'm_penawaran');
	}

	public function index(){
		$this->data['title'] = 'Master Penawaran';
		$this->data['all_penawaran'] = $this->m_penawaran->lihat();
		$this->data['no'] = 1;

		$this->load->view('penawaran/lihat', $this->data);
	}

	public function tambah(){
		if ($this->session->login['role'] == 'kasir'){
			$this->session->set_flashdata('error', 'Tambah data hanya untuk admin!');
			redirect('penawaran');
		}

		$this->data['title'] = 'Tambah Data Penawaran';

		$this->load->view('penawaran/tambah', $this->data);
	}

	public function proses_tambah(){
		if ($this->session->login['role'] == 'kasir'){
			$this->session->set_flashdata('error', 'Tambah data hanya untuk admin!');
			redirect('penawaran');
		}

		$data = [
			'kode_kasir' => $this->input->post('kode_kasir'),
			'nama_kasir' => $this->input->post('nama_kasir'),
			'username_kasir' => $this->input->post('username_kasir'),
			'password_kasir' => $this->input->post('password_kasir'),
		];

		if($this->m_penawaran->tambah($data)){
			$this->session->set_flashdata('success', 'Data User <strong>Berhasil</strong> Ditambahkan!');
			redirect('penawaran');
		} else {
			$this->session->set_flashdata('error', 'Data User <strong>Gagal</strong> Ditambahkan!');
			redirect('penawaran');
		}
	}

	public function ubah($id){
		if ($this->session->login['role'] == 'kasir'){
			$this->session->set_flashdata('error', 'Ubah data hanya untuk admin!');
			redirect('penawaran');
		}

		$this->data['title'] = 'Edit Data Pegawai';
		$this->data['penawaran'] = $this->m_penawaran->lihat_id($id);

		$this->load->view('penawaran/ubah', $this->data);
	}

	public function proses_ubah($id){
		if ($this->session->login['role'] == 'kasir'){
			$this->session->set_flashdata('error', 'Ubah data hanya untuk admin!');
			redirect('penawaran');
		}

		$data = [
			'kode_kasir' => $this->input->post('kode_kasir'),
			'nama_kasir' => $this->input->post('nama_kasir'),
			'username_kasir' => $this->input->post('username_kasir'),
			'password_kasir' => $this->input->post('password_kasir'),
		];

		if($this->m_penawaran->ubah($data, $id)){
			$this->session->set_flashdata('success', 'Data User <strong>Berhasil</strong> Diubah!');
			redirect('penawaran');
		} else {
			$this->session->set_flashdata('error', 'Data User <strong>Gagal</strong> Diubah!');
			redirect('penawaran');
		}
	}

	public function hapus($id){
		if ($this->session->login['role'] == 'kasir'){
			$this->session->set_flashdata('error', 'Hapus data hanya untuk admin!');
			redirect('penawaran');
		}

		if($this->m_penawaran->hapus($id)){
			$this->session->set_flashdata('success', 'Data User <strong>Berhasil</strong> Dihapus!');
			redirect('penawaran');
		} else {
			$this->session->set_flashdata('error', 'Data User <strong>Gagal</strong> Dihapus!');
			redirect('penawaran');
		}
	}

	public function export(){
		$dompdf = new Dompdf();
		// $this->data['perusahaan'] = $this->m_usaha->lihat();
		$this->data['all_penawaran'] = $this->m_penawaran->lihat();
		$this->data['title'] = 'Laporan Data';
		$this->data['no'] = 1;

		$dompdf->setPaper('A4', 'Landscape');
		$html = $this->load->view('kasir/report', $this->data, true);
		$dompdf->load_html($html);
		$dompdf->render();
		$dompdf->stream('Laporan Data Kasir Tanggal ' . date('d F Y'), array("Attachment" => false));
	}
}
