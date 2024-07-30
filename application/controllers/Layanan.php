<?php defined('BASEPATH') or exit('No direct script access allowed');

class Layanan extends CI_Controller
{

    public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logged') != TRUE) {
			$url = base_url('login');
			redirect($url);
		}
		$this->load->model('Mlayanan');
		$this->load->library('form_validation');
	}

    public function index()
	{
		$data['meta'] = [
			'title' => 'Admin Page - Layanan',
			// NavLink
			'layanan' => 'active',
			// Judul
			'pages' => 'Admin Page',
			'pg_title' => 'Layanan',
		];
		$data['row'] = $this->Mlayanan->get();

		$this->load->vars($data);
		$this->load->view('/_layout/_head.php');
		$this->load->view('/_layout/_sidenav.php');
		$this->load->view('/_layout/_navbar.php');
		$this->load->view('admin/layanan');
		$this->load->view('/_layout/_footer.php');
		$this->load->view('/_layout/_settings.php');
		$this->load->view('/_layout/_corejs.php');
	}

	public function addlayanan()
	{

		$this->form_validation->set_rules('kode', 'Kode Kabupaten/Kota', 'required');
		$this->form_validation->set_rules('kabkota', 'Nama Kabupaten/Kota', 'required');
		$this->form_validation->set_rules('layanan_online', 'Layanan Online', 'required');
		$this->form_validation->set_rules('layanan_terintegritas', 'Layanan Terintegritas', 'required');


		$this->form_validation->set_message('required', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
															<span class="alert-text">%s tidak boleh kosong!</span>
															<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>');

		if ($this->form_validation->run() == FALSE) {

			$data['meta'] = [
				'title' => 'Tambah Layanan - Layanan',
				// NavLink
				'layanan' => 'active',
				// Judul
				'pages' => 'Admin Page',
				'pg_title' => 'Layanan',
			];

			$this->load->vars($data);
			$this->load->view('/_layout/_head.php');
			$this->load->view('/_layout/_sidenav.php');
			$this->load->view('/_layout/_navbar.php');
			$this->load->view('admin/add_layanan');
			$this->load->view('/_layout/_footer.php');
			$this->load->view('/_layout/_settings.php');
			$this->load->view('/_layout/_corejs.php');
		} else {
			$post = $this->input->post(null, TRUE);
			$this->Mlayanan->addlayanan($post);
			if($this->db->affected_rows() > 0){
				echo "<script>
						alert('Layanan Berhasil ditambah!');
					</script>";
			}
			echo "<script>
					window.location='" . site_url('layanan') . "';
				</script>";
		}
	}

	public function dellayanan() {
		$id = $this->input->post('id');
		$this->Mlayanan->dellayanan($id);
		if($this->db->affected_rows() > 0){
			echo "<script>
					alert('Berhasil dihapus!');
				</script>";
		}
		echo "<script>
				window.location='" . site_url('layanan') . "';
			</script>";
	}

	public function editlayanan($id)
	{

		$this->form_validation->set_rules('kode', 'Kode Kabupaten/Kota', 'required');
		$this->form_validation->set_rules('kabkota', 'Nama Kabupaten/Kota', 'required');
		$this->form_validation->set_rules('layanan_online', 'Layanan Online', 'required');
		$this->form_validation->set_rules('layanan_terintegritas', 'Layanan Terintegritas', 'required');


		$this->form_validation->set_message('required', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
															<span class="alert-text">%s tidak boleh kosong!</span>
															<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>');

		if ($this->form_validation->run() == FALSE) {
			
			$query = $this->Mlayanan->get($id);
			if($query->num_rows() > 0) {
			$data['row'] = $query->row();
			$data['meta'] = [
				'title' => 'Edit Layanan - Layanan',
				// NavLink
				'layanan' => 'active',
				// Judul
				'pages' => 'Admin Page',
				'pg_title' => 'Layanan',
			];

			$this->load->vars($data);
			$this->load->view('/_layout/_head.php');
			$this->load->view('/_layout/_sidenav.php');
			$this->load->view('/_layout/_navbar.php');
			$this->load->view('admin/edit_layanan');
			$this->load->view('/_layout/_footer.php');
			$this->load->view('/_layout/_settings.php');
			$this->load->view('/_layout/_corejs.php');
		} else {
			echo "<script>
					alert('Layanan tidak ditemukan!');
					window.location='" . site_url('layanan') . "';
				</script>";
		}

		} else {
			$post = $this->input->post(null, TRUE);
			$this->Mlayanan->editlayanan($post);
			if($this->db->affected_rows() > 0){
				echo "<script>
						alert('Layanan Berhasil diedit!');
					</script>";
			}
			echo "<script>
					window.location='" . site_url('layanan') . "';
				</script>";
		}
	}
}