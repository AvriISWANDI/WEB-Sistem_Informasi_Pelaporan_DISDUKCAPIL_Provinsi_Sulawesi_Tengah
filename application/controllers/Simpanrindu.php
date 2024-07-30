<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Simpanrindu extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logged') != TRUE) {
			$url = base_url('login');
			redirect($url);
		}
		$this->load->model('Msimpanrindu');
		$this->load->library('form_validation');
	}

	public function harian()
	{
		$start_date = $this->input->post('start_date');
		$end_date = $this->input->post('end_date');
		$kabkota = $this->input->post('kabkota');
		$data['meta'] = [
			'title' => 'Simpan Rindu - Harian',
			// NavLink
			'simpanrindu' => 'active',
			'harian' => 'active',
			// Judul
			'pages' => 'Simpan Rindu',
			'pg_title' => 'Laporan Harian',
		];
		$data['row'] = $this->Msimpanrindu->getharian($start_date, $end_date, $kabkota);

		$this->load->vars($data);
		$this->load->view('/_layout/_head.php');
		$this->load->view('/_layout/_sidenav.php');
		$this->load->view('/_layout/_navbar.php');
		$this->load->view('sr/harian/harian');
		$this->load->view('/_layout/_footer.php');
		$this->load->view('/_layout/_settings.php');
		$this->load->view('/_layout/_corejs.php');
	}

	public function harian_add()
	{

		$this->form_validation->set_rules('kode_kabkota', 'Kode Kabupaten/Kota', 'required');
		$this->form_validation->set_rules('nama_kabkota', 'Nama Kabupaten/Kota', 'required');
		$this->form_validation->set_rules('tgl_pelayanan', 'Tanggal Pelayanan', 'required');
		$this->form_validation->set_rules('nik_baru', 'NIK Baru', 'required');
		$this->form_validation->set_rules('cetak_kk', 'Cetak KK', 'required');
		$this->form_validation->set_rules('rekam_ktpel', 'Perekaman KTP-EL', 'required');
		$this->form_validation->set_rules('prr', 'PRR', 'required');
		$this->form_validation->set_rules('sfe', 'SFE', 'required');
		$this->form_validation->set_rules('duplikat_record', 'Duplicate Record', 'required');
		$this->form_validation->set_rules('suket_now', 'SUKET Hari Ini', 'required');
		$this->form_validation->set_rules('suket_before', 'SUKET Hari Sebelumnya', 'required');
		$this->form_validation->set_rules('cetak_ktpel_suket', 'Cetak KTP-EL SUKET', 'required');
		$this->form_validation->set_rules('cetak_ktpel_prr', 'Cetak KTP-EL PRR', 'required');
		$this->form_validation->set_rules('cetak_ktpel_rhgp', 'Cetak KTP-EL RHGP', 'required');
		$this->form_validation->set_rules('cetak_akta_17', 'Cetak Akta 17', 'required');
		$this->form_validation->set_rules('cetak_akta_17up', 'Cetak Akta > 17', 'required');
		$this->form_validation->set_rules('cetak_akta_kawin', 'Cetak Akta Kawin', 'required');
		$this->form_validation->set_rules('cetak_akta_cerai', 'Cetak Akta Cerai', 'required');
		$this->form_validation->set_rules('cetak_akta_kematian', 'Cetak Akta Kematian', 'required');
		$this->form_validation->set_rules('skpwni_out', 'SKPWNI Pindah', 'required');
		$this->form_validation->set_rules('skpwni_in', 'SKPWNI Datang', 'required');
		$this->form_validation->set_rules('cetak_kia_5', 'Cetak KIA 5', 'required');
		$this->form_validation->set_rules('cetak_kia_5up', 'Cetak KIA > 5', 'required');
		$this->form_validation->set_rules('sisa_blanko', 'Sisa Blanko', 'required');


		$this->form_validation->set_message('required', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
															<span class="alert-text">%s tidak boleh kosong!</span>
															<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>');

		if ($this->form_validation->run() == FALSE) {

			$data['meta'] = [
				'title' => 'Simpan Rindu - Harian',
				// NavLink
				'simpanrindu' => 'active',
				'harian' => 'active',
				// Judul
				'pages' => 'Simpan Rindu',
				'pg_title' => 'Laporan Harian',
			];

			$this->load->vars($data);
			$this->load->view('/_layout/_head.php');
			$this->load->view('/_layout/_sidenav.php');
			$this->load->view('/_layout/_navbar.php');
			$this->load->view('sr/harian/harian_add');
			$this->load->view('/_layout/_footer.php');
			$this->load->view('/_layout/_settings.php');
			$this->load->view('/_layout/_corejs.php');
		}else{
			$post = $this->input->post(null, TRUE);
			$this->Msimpanrindu->addharian($post);
			if($this->db->affected_rows() > 0){
				echo "<script>	
						alert('Berhasil ditambah!');
					</script>";
			}
			echo "<script>
					window.location='" . site_url('simpanrindu/harian') . "';
				</script>";
		}
	}

	public function harian_edit($id)
	{

		$this->form_validation->set_rules('kode_kabkota', 'Kode Kabupaten/Kota', 'required');
		$this->form_validation->set_rules('nama_kabkota', 'Nama Kabupaten/Kota', 'required');
		$this->form_validation->set_rules('tgl_pelayanan', 'Tanggal Pelayanan', 'required');
		$this->form_validation->set_rules('nik_baru', 'NIK Baru', 'required');
		$this->form_validation->set_rules('cetak_kk', 'Cetak KK', 'required');
		$this->form_validation->set_rules('rekam_ktpel', 'Perekaman KTP-EL', 'required');
		$this->form_validation->set_rules('prr', 'PRR', 'required');
		$this->form_validation->set_rules('sfe', 'SFE', 'required');
		$this->form_validation->set_rules('duplikat_record', 'Duplicate Record', 'required');
		$this->form_validation->set_rules('suket_now', 'SUKET Hari Ini', 'required');
		$this->form_validation->set_rules('suket_before', 'SUKET Hari Sebelumnya', 'required');
		$this->form_validation->set_rules('cetak_ktpel_suket', 'Cetak KTP-EL SUKET', 'required');
		$this->form_validation->set_rules('cetak_ktpel_prr', 'Cetak KTP-EL PRR', 'required');
		$this->form_validation->set_rules('cetak_ktpel_rhgp', 'Cetak KTP-EL RHGP', 'required');
		$this->form_validation->set_rules('cetak_akta_17', 'Cetak Akta 17', 'required');
		$this->form_validation->set_rules('cetak_akta_17up', 'Cetak Akta > 17', 'required');
		$this->form_validation->set_rules('cetak_akta_kawin', 'Cetak Akta Kawin', 'required');
		$this->form_validation->set_rules('cetak_akta_cerai', 'Cetak Akta Cerai', 'required');
		$this->form_validation->set_rules('cetak_akta_kematian', 'Cetak Akta Kematian', 'required');
		$this->form_validation->set_rules('skpwni_out', 'SKPWNI Pindah', 'required');
		$this->form_validation->set_rules('skpwni_in', 'SKPWNI Datang', 'required');
		$this->form_validation->set_rules('cetak_kia_5', 'Cetak KIA 5', 'required');
		$this->form_validation->set_rules('cetak_kia_5up', 'Cetak KIA > 5', 'required');
		$this->form_validation->set_rules('sisa_blanko', 'Sisa Blanko', 'required');


		$this->form_validation->set_message('required', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
															<span class="alert-text">%s tidak boleh kosong!</span>
															<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>');

		if ($this->form_validation->run() == FALSE) {

			$query = $this->Msimpanrindu->getharian($id);
			if($query->num_rows() > 0) {
				$data['row'] = $query->row();
				$data['meta'] = [
					'title' => 'Simpan Rindu - Harian',
					// NavLink
					'simpanrindu' => 'active',
					'harian' => 'active',
					// Judul
					'pages' => 'Simpan Rindu',
					'pg_title' => 'Laporan Harian',
				];

				$this->load->vars($data);
				$this->load->view('/_layout/_head.php');
				$this->load->view('/_layout/_sidenav.php');
				$this->load->view('/_layout/_navbar.php');
				$this->load->view('sr/harian/harian_edit');
				$this->load->view('/_layout/_footer.php');
				$this->load->view('/_layout/_settings.php');
				$this->load->view('/_layout/_corejs.php');
			} else {
				echo "<script>
						alert('Data tidak ditemukan!');
						window.location='" . site_url('simpanrindu/harian') . "';
					</script>";
			}
			
		} else {
			$post = $this->input->post(null, TRUE);
			$this->Msimpanrindu->editharian($post);
			if($this->db->affected_rows() > 0){
				echo "<script>
						alert('Berhasil diedit!');
					</script>";
			}
			echo "<script>
					window.location='" . site_url('simpanrindu/harian') . "';
				</script>";
		}
	}

	public function delharian() {
		$id = $this->input->post('id');
		$this->Msimpanrindu->delharian($id);
		if($this->db->affected_rows() > 0){
			echo "<script>
					alert('Berhasil dihapus!');
				</script>";
		}
		echo "<script>
				window.location='" . site_url('simpanrindu/harian') . "';
			</script>";
	}


	public function rekapitulasi()
	{
		$start_date = $this->input->post('start_date');
		$end_date = $this->input->post('end_date');
		$kabkota = $this->input->post('kabkota');
		$data['meta'] = [
			'title' => 'Simpan Rindu - Rekapitulasi',
			// NavLink
			'rekapitulasi' => 'active',
			// Judul
			'pages' => 'Simpan Rindu',
			'pg_title' => 'Rekapitulasi',
		];

		$data['rekap_data'] = $this->Msimpanrindu->getAllHarian($start_date, $end_date, $kabkota);

		$this->load->vars($data);
		$this->load->view('/_layout/_head.php');
		$this->load->view('/_layout/_sidenav.php');
		$this->load->view('/_layout/_navbar.php');
		$this->load->view('sr/rekapitulasi/rekapitulasi');
		$this->load->view('/_layout/_footer.php');
		$this->load->view('/_layout/_settings.php');
		$this->load->view('/_layout/_corejs.php');
	}
}
