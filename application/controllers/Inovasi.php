<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Inovasi extends CI_Controller
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
		$this->load->model('Minovasi');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$start_date = $this->input->post('start_date');
		$end_date = $this->input->post('end_date');
		$kabkota = $this->input->post('kabkota');
		$data['meta'] = [
			'title' => 'Data Inovasi - Laporan',
			// NavLink
			'datainovasi' => 'active',
			// Judul
			'pages' => 'Data Inovasi',
			'pg_title' => 'Laporan',
		];
		$data['row'] = $this->Minovasi->get($start_date, $end_date, $kabkota);

		$this->load->vars($data);
		$this->load->view('/_layout/_head.php');
		$this->load->view('/_layout/_sidenav.php');
		$this->load->view('/_layout/_navbar.php');
		$this->load->view('datainovasi/inovasi');
		$this->load->view('/_layout/_footer.php');
		$this->load->view('/_layout/_settings.php');
		$this->load->view('/_layout/_corejs.php');
	}

	public function inovasi_add()
	{

		$this->form_validation->set_rules('kode_kabkota', 'Kode Kabupaten/Kota', 'required');
		$this->form_validation->set_rules('nama_kabkota', 'Nama Kabupaten/Kota', 'required');
		$this->form_validation->set_rules('singkatan_inovasi', 'Singkatan Inovasi', 'required');
		$this->form_validation->set_rules('kepanjangan_inovasi', 'Kepanjangan Inovasi', 'required');
		$this->form_validation->set_rules('tahun_penerapan', 'Tahun Penerapan', 'required');
		$this->form_validation->set_rules('tujuan_inovasi', 'Tujuan Inovasi', 'required');
		$this->form_validation->set_rules('dampak', 'Dampak', 'required');
		$this->form_validation->set_rules('kendala', 'Kendala', 'required');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required');


		$this->form_validation->set_message('required', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
															<span class="alert-text">%s tidak boleh kosong!</span>
															<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>');

		if ($this->form_validation->run() == FALSE) {

			$data['meta'] = [
				'title' => 'Data Inovasi - Tambah Data Inovasi',
				// NavLink
				'datainovasi' => 'active',
				// Judul
				'pages' => 'Data Inovasi',
				'pg_title' => 'Laporan',
			];

			$this->load->vars($data);
			$this->load->view('/_layout/_head.php');
			$this->load->view('/_layout/_sidenav.php');
			$this->load->view('/_layout/_navbar.php');
			$this->load->view('datainovasi/inovasi_add');
			$this->load->view('/_layout/_footer.php');
			$this->load->view('/_layout/_settings.php');
			$this->load->view('/_layout/_corejs.php');
		} else {
			$post = $this->input->post(null, TRUE);
			$this->Minovasi->addinovasi($post);
			if ($this->db->affected_rows() > 0) {
				echo "<script>	
						alert('Inovasi Berhasil ditambah!');
					</script>";
			}
			echo "<script>
					window.location='" . site_url('inovasi/index') . "';
				</script>";
		}
	}

	public function inovasi_edit($id)
	{

		$this->form_validation->set_rules('kode_kabkota', 'Kode Kabupaten/Kota', 'required');
		$this->form_validation->set_rules('nama_kabkota', 'Nama Kabupaten/Kota', 'required');
		$this->form_validation->set_rules('singkatan_inovasi', 'Singkatan Inovasi', 'required');
		$this->form_validation->set_rules('kepanjangan_inovasi', 'Kepanjangan Inovasi', 'required');
		$this->form_validation->set_rules('tahun_penerapan', 'Tahun Penerapan', 'required');
		$this->form_validation->set_rules('tujuan_inovasi', 'Tujuan Inovasi', 'required');
		$this->form_validation->set_rules('dampak', 'Dampak', 'required');
		$this->form_validation->set_rules('kendala', 'Kendala', 'required');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required');


		$this->form_validation->set_message('required', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
															<span class="alert-text">%s tidak boleh kosong!</span>
															<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>');

		if ($this->form_validation->run() == FALSE) {

			$query = $this->Minovasi->get($id);
			if ($query->num_rows() > 0) {
				$data['row'] = $query->row();
				$data['meta'] = [
					'title' => 'Data Inovasi - Edit Data Inovasi',
					// NavLink
					'datainovasi' => 'active',
					// Judul
					'pages' => 'Data Inovasi',
					'pg_title' => 'Laporan',
				];

				$this->load->vars($data);
				$this->load->view('/_layout/_head.php');
				$this->load->view('/_layout/_sidenav.php');
				$this->load->view('/_layout/_navbar.php');
				$this->load->view('datainovasi/inovasi_edit');
				$this->load->view('/_layout/_footer.php');
				$this->load->view('/_layout/_settings.php');
				$this->load->view('/_layout/_corejs.php');
			} else {
				echo "<script>
					alert('Data tidak ditemukan!');
					window.location='" . site_url('inovasi/index') . "';
				</script>";
			}
		} else {
			$post = $this->input->post(null, TRUE);
			$this->Minovasi->editinovasi($post);
			if ($this->db->affected_rows() > 0) {
				echo "<script>	
						alert('Berhasil diubah!');
					</script>";
			}
			echo "<script>
					window.location='" . site_url('inovasi/index') . "';
				</script>";
		}
	}

	public function delinovasi()
	{
		$id = $this->input->post('id');
		$this->Minovasi->delinovasi($id);
		if ($this->db->affected_rows() > 0) {
			echo "<script>
					alert('Berhasil dihapus!');
				</script>";
		}
		echo "<script>
				window.location='" . site_url('inovasi/index') . "';
			</script>";
	}
}
