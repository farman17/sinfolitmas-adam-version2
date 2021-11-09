<?php

use Dompdf\Dompdf;

class Skema extends CI_Controller{
	public function __construct(){
		parent::__construct();
		if($this->session->login['role'] != 'kasir' && $this->session->login['role'] != 'admin') redirect();
		$this->data['aktif'] = 'skema';
		$this->load->model('M_skema', 'm_skema');
	}

	public function index(){
		$this->data['title'] = 'Data Skim';
		$this->data['all_skema'] = $this->m_skema->lihat();
		$this->data['no'] = 1;

		$this->load->view('skema/lihat', $this->data);
	}

	public function tambah(){
		if ($this->session->login['role'] == 'kasir'){
			$this->session->set_flashdata('error', 'Tambah data hanya untuk admin!');
			redirect('skema');
		}

		$this->data['title'] = 'Tambah Data Skim';

		$this->load->view('skema/tambah', $this->data);
	}

	public function proses_tambah(){
		if ($this->session->login['role'] == 'kasir'){
			$this->session->set_flashdata('error', 'Tambah data hanya untuk admin!');
			redirect('skema');
		}

		$data = [
			'form_number' => $this->input->post('form_number'),
			'c_user' => $this->input->post('c_user'),
			'tanggal' => $this->input->post('tanggal'),
			'jam' => $this->input->post('jam'),
'kategori' => $this->input->post('kategori'),
'nama_skim' => $this->input->post('nama_skim'),
'min_pendidikan' => $this->input->post('min_pendidikan'),
'min_jabatan' => $this->input->post('min_jabatan'),
'min_anggota' => $this->input->post('min_anggota'),
'max_anggota' => $this->input->post('max_anggota'),
'min_biaya' => $this->input->post('min_biaya'),
'max_biaya' => $this->input->post('max_biaya'),
'min_pelaksana' => $this->input->post('min_pelaksana'),
'max_pelaksana' => $this->input->post('max_pelaksana'),
		];

		if($this->m_skema->tambah($data)){
			$this->session->set_flashdata('success', 'Data Skim <strong>Berhasil</strong> Ditambahkan!');
			redirect('skema');
		} else {
			$this->session->set_flashdata('error', 'Data Skim <strong>Gagal</strong> Ditambahkan!');
			redirect('skema');
		}
	}

	public function ubah($id){
		if ($this->session->login['role'] == 'kasir'){
			$this->session->set_flashdata('error', 'Ubah data hanya untuk admin!');
			redirect('skema');
		}

		$this->data['title'] = 'Edit Data Skim';
		$this->data['skema'] = $this->m_skema->lihat_id($id);

		$this->load->view('skema/ubah', $this->data);
	}

	public function proses_ubah($id){
		if ($this->session->login['role'] == 'kasir'){
			$this->session->set_flashdata('error', 'Ubah data hanya untuk admin!');
			redirect('skema');
		}

		$data = [
			'kode_kasir' => $this->input->post('kode_kasir'),
			'nama_kasir' => $this->input->post('nama_kasir'),
			'username_kasir' => $this->input->post('username_kasir'),
			'password_kasir' => $this->input->post('password_kasir'),
		];

		if($this->m_skema->ubah($data, $id)){
			$this->session->set_flashdata('success', 'Data Skim <strong>Berhasil</strong> Diubah!');
			redirect('skema');
		} else {
			$this->session->set_flashdata('error', 'Data Skim <strong>Gagal</strong> Diubah!');
			redirect('skema');
		}
	}

	public function hapus($id){
		if ($this->session->login['role'] == 'kasir'){
			$this->session->set_flashdata('error', 'Hapus data hanya untuk admin!');
			redirect('skema');
		}

		if($this->m_skema->hapus($id)){
			$this->session->set_flashdata('success', 'Data Skim <strong>Berhasil</strong> Dihapus!');
			redirect('skema');
		} else {
			$this->session->set_flashdata('error', 'Data Skim <strong>Gagal</strong> Dihapus!');
			redirect('skema');
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
