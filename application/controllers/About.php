<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

	private function navigasi($title)
    {
		
        $navigasi = '<a href="' . base_url('admin/dashboard') . '">Dashboard</a> / ' . $title;
        return $navigasi;
    }

    public function index()//tentang aplikasi
    {
        $data['title'] = 'Tentang Aplikasi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['title_page'] = 'Tentang | SPK-AHP AT-TAUBAH';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
        $this->load->view('about/index', $data);
        $this->load->view('templates/footer');
    }


    public function cetak()
    {
        $data['title'] = 'Cetak Laporan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $cek_periode = $this->model_periode->get_new_periode()->num_rows();

		 // ambil data periode yang sudah menggunakan spk
		 $periodeUseAHP = $this->model_periode->getNamaPeriodeUseAHP()->result_array();

 		$title = 'Cetak Laporan';
        $data = [
            'title' => $title,
            'navigasi' => $this->navigasi($title),
            'periode' => $this->model_periode->tahun_periode()->result_array(),
            'useAHP' => $periodeUseAHP,
            'cek_periode' => $cek_periode,
        ];
		
		$data['title_page'] = 'Cetak | SPK-AHP AT-TAUBAH';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
        $this->load->view('about/cetak/cetak', $data);
        $this->load->view('templates/footer');
	}

	public function printlaporanSkor()
    {
        // Mengambil data periode dari formulir
        $periode = htmlspecialchars($this->input->post('periodeAHP'));

        // Mengambil data dari model
        $periode_db = $this->model_periode->tahun_periode_id($periode)->row_array();
        $rekomendasi = $this->model_alternatif->sortAlternatifPenerima($periode)->result_array();

        // Menyusun data untuk view
        $data['penerima'] = $rekomendasi;
        $data['dari'] = $periode_db['tanggal_awal'];
        $data['sampai'] = $periode_db['tanggal_akhir'];
        $data['nama_terang'] = $this->get_nama_terang(); // Ambil nama terang jika diperlukan

        // Memuat view untuk pencetakan
        $this->load->view('about/cetak/print_laporan', $data);
    }

    private function get_nama_terang()
    {
        // Fungsi untuk mengambil nama terang atau bisa langsung didefinisikan di controller
        // Contoh implementasi:
        return 'Encup Supyan, S.Pd.I'; // Ganti dengan nama yang sesuai atau logika untuk mengambil nama
    }
}

    