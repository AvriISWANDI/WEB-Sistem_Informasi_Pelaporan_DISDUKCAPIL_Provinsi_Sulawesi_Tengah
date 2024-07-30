<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pks extends CI_Controller
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
		$this->load->model('Mpks');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$start_date = $this->input->post('start_date');
		$end_date = $this->input->post('end_date');
		$kabkota = $this->input->post('kabkota');
		$data['meta'] = [
			'title' => 'Perjanjian Kerjasama - Daftar',
			// NavLink
			'pks' => 'active',
			// Judul
			'pages' => 'Perjanjian Kerjasama',
			'pg_title' => 'Daftar',
		];

		$data['row'] = $this->Mpks->get($start_date, $end_date, $kabkota);

		$this->load->vars($data);
		$this->load->view('/_layout/_head.php');
		$this->load->view('/_layout/_sidenav.php');
		$this->load->view('/_layout/_navbar.php');
		$this->load->view('pks/pks');
		$this->load->view('/_layout/_footer.php');
		$this->load->view('/_layout/_settings.php');
		$this->load->view('/_layout/_corejs.php');
	}

	public function pks_add()
	{
		$this->form_validation->set_rules('kode_kabkota', 'Kode Kabupaten/Kota', 'required');
		$this->form_validation->set_rules('nama_kabkota', 'Nama Kabupaten/Kota', 'required');
		$this->form_validation->set_rules('opdbhi_pks', 'OPD / BHI Yang Telah PKS', 'required');
		$this->form_validation->set_rules('nomor_pks', 'Nomor PKS', 'required');
		$this->form_validation->set_rules('nomor_juknis', 'Nomor Juknis', 'required');
		$this->form_validation->set_rules('opdbhi_akses', 'OPD / BHI Yang Telah Akses Data Kependudukan', 'required');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

		$this->form_validation->set_message('required', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
															<span class="alert-text">%s tidak boleh kosong!</span>
															<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>');

		if ($this->form_validation->run() == FALSE) {

			$data['meta'] = [
				'title' => 'Perjanjian Kerjasama - Tambah PKS',
				// NavLink
				'pks' => 'active',
				// Judul
				'pages' => 'Perjanjian Kerjasama',
				'pg_title' => 'Daftar',
			];

			$this->load->vars($data);
			$this->load->view('/_layout/_head.php');
			$this->load->view('/_layout/_sidenav.php');
			$this->load->view('/_layout/_navbar.php');
			$this->load->view('pks/pks_add');
			$this->load->view('/_layout/_footer.php');
			$this->load->view('/_layout/_settings.php');
			$this->load->view('/_layout/_corejs.php');
		} else {
			$post = $this->input->post(null, TRUE);
			$this->Mpks->addpks($post);
			if ($this->db->affected_rows() > 0) {
				echo "<script>	
						alert('PKS Berhasil ditambah!');
					</script>";
			}
			echo "<script>
						window.location='" . site_url('pks/index') . "';
					</script>";
		}
	}

	public function pks_edit($id)
	{
		$this->form_validation->set_rules('kode_kabkota', 'Kode Kabupaten/Kota', 'required');
		$this->form_validation->set_rules('nama_kabkota', 'Nama Kabupaten/Kota', 'required');
		$this->form_validation->set_rules('opdbhi_pks', 'OPD / BHI Yang Telah PKS', 'required');
		$this->form_validation->set_rules('nomor_pks', 'Nomor PKS', 'required');
		$this->form_validation->set_rules('nomor_juknis', 'Nomor Juknis', 'required');
		$this->form_validation->set_rules('opdbhi_akses', 'OPD / BHI Yang Telah Akses Data Kependudukan', 'required');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

		$this->form_validation->set_message('required', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
															<span class="alert-text">%s tidak boleh kosong!</span>
															<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>');

		if ($this->form_validation->run() == FALSE) {

			$query = $this->Mpks->get($id);
			if ($query->num_rows() > 0) {
				$data['row'] = $query->row();
				$data['meta'] = [
					'title' => 'Perjanjian Kerjasama - Tambah PKS',
					// NavLink
					'pks' => 'active',
					// Judul
					'pages' => 'Perjanjian Kerjasama',
					'pg_title' => 'Daftar',
				];

				$this->load->vars($data);
				$this->load->view('/_layout/_head.php');
				$this->load->view('/_layout/_sidenav.php');
				$this->load->view('/_layout/_navbar.php');
				$this->load->view('pks/pks_edit');
				$this->load->view('/_layout/_footer.php');
				$this->load->view('/_layout/_settings.php');
				$this->load->view('/_layout/_corejs.php');
			} else {
				echo "<script>
				alert('Data tidak ditemukan!');
				window.location='".site_url('pks/index')."';
				</script>";
			}
		} else {
			$post = $this->input->post(null, TRUE);
			$this->Mpks->editpks($post);
			if ($this->db->affected_rows() > 0) {
				echo "<script>	
						alert('PKS Berhasil diedit!');
					</script>";
			}
			echo "<script>
						window.location='" . site_url('pks/index') . "';
					</script>";
		}
	}

	public function delpks()
	{
		$id = $this->input->post('id');
		$this->Mpks->delpks($id);
		if ($this->db->affected_rows() > 0) {
			echo "<script>	
						alert('PKS Berhasil dihapus!');
					</script>";
		}
		echo "<script>
						window.location='" . site_url('pks/index') . "';
					</script>";
	}
}
