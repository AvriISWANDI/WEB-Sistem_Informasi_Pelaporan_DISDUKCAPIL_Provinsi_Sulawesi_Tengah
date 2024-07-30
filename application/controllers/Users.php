<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
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
		$this->load->model('Musers');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['meta'] = [
			'title' => 'Admin Page - Users',
			// NavLink
			'user' => 'active',
			// Judul
			'pages' => 'Admin Page',
			'pg_title' => 'Users',
		];
		$data['row'] = $this->Musers->get();

		$this->load->vars($data);
		$this->load->view('/_layout/_head.php');
		$this->load->view('/_layout/_sidenav.php');
		$this->load->view('/_layout/_navbar.php');
		$this->load->view('admin/user');
		$this->load->view('/_layout/_footer.php');
		$this->load->view('/_layout/_settings.php');
		$this->load->view('/_layout/_corejs.php');
	}

	public function addusers()
	{

		$this->form_validation->set_rules('kode_kabkota', 'Kode Kabupaten/Kota', 'required');
		$this->form_validation->set_rules('nama_kabkota', 'Nama Kabupaten/Kota', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required|is_unique[sys_user.username]|min_length[3]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
		$this->form_validation->set_rules(
			'conf_password',
			'Konfirmasi Password',
			'required|matches[password]',
			array('matches' => '%s Tidak sesuai dengan password.')
		);
		$this->form_validation->set_rules('akses', 'Akses', 'required');
		$this->form_validation->set_rules('status', 'Status Login', 'required');


		$this->form_validation->set_message('required', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
															<span class="alert-text">%s tidak boleh kosong!</span>
															<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>');
		$this->form_validation->set_message('is_unique', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
															<span class="alert-text">%s sudah terdaftar!</span>
															<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>');
		$this->form_validation->set_message('min_length', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
															<span class="alert-text">%s minimal 3 karakter!</span>
															<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>');
		$this->form_validation->set_message('matches', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
															<span class="alert-text">%s tidak sesuai dengan password!</span>
															<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>');

		if ($this->form_validation->run() == FALSE) {

			$data['meta'] = [
				'title' => 'Tambah User - Users',
				// NavLink
				'user' => 'active',
				// Judul
				'pages' => 'Admin Page',
				'pg_title' => 'Users',
			];

			$this->load->vars($data);
			$this->load->view('/_layout/_head.php');
			$this->load->view('/_layout/_sidenav.php');
			$this->load->view('/_layout/_navbar.php');
			$this->load->view('admin/add_user');
			$this->load->view('/_layout/_footer.php');
			$this->load->view('/_layout/_settings.php');
			$this->load->view('/_layout/_corejs.php');
		} else {
			$post = $this->input->post(null, TRUE);
			$this->Musers->adduser($post);
			if($this->db->affected_rows() > 0){
				echo "<script>
						alert('Berhasil ditambah!');
					</script>";
			}
			echo "<script>
					window.location='" . site_url('users') . "';
				</script>";
		}
	}

	public function deluser() {
		$id = $this->input->post('id');
		$this->Musers->deluser($id);
		if($this->db->affected_rows() > 0){
			echo "<script>
					alert('Berhasil dihapus!');
				</script>";
		}
		echo "<script>
				window.location='" . site_url('users') . "';
			</script>";
	}

	public function edituser($id)
	{

		$this->form_validation->set_rules('kode_kabkota', 'Kode Kabupaten/Kota', 'required');
		$this->form_validation->set_rules('nama_kabkota', 'Nama Kabupaten/Kota', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[3]|callback_username_check');
		if ($this->input->post('password')) {
			$this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
			$this->form_validation->set_rules(
				'conf_password',
				'Konfirmasi Password',
				'required|matches[password]',
				array('matches' => '%s Tidak sesuai dengan password.')
			);
		}
		if ($this->input->post('conf_password')) {
			$this->form_validation->set_rules(
				'conf_password',
				'Konfirmasi Password',
				'required|matches[password]',
				array('matches' => '%s Tidak sesuai dengan password.')
			);
		}
		$this->form_validation->set_rules('akses', 'Akses', 'required');
		$this->form_validation->set_rules('status', 'Status Login', 'required');


		$this->form_validation->set_message('required', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
															<span class="alert-text">%s tidak boleh kosong!</span>
															<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>');
		$this->form_validation->set_message('is_unique', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
															<span class="alert-text">%s sudah terdaftar!</span>
															<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>');
		$this->form_validation->set_message('min_length', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
															<span class="alert-text">%s minimal 3 karakter!</span>
															<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>');
		$this->form_validation->set_message('matches', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
															<span class="alert-text">%s tidak sesuai dengan password!</span>
															<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>');

		if ($this->form_validation->run() == FALSE) {

			$query = $this->Musers->get($id);
			if($query->num_rows() > 0) {
				$data['row'] = $query->row();
				$data['meta'] = [
					'title' => 'Edit User - Users',
					// NavLink
					'user' => 'active',
					// Judul
					'pages' => 'Admin Page',
					'pg_title' => 'Users',
				];
	
				$this->load->vars($data);
				$this->load->view('/_layout/_head.php');
				$this->load->view('/_layout/_sidenav.php');
				$this->load->view('/_layout/_navbar.php');
				$this->load->view('admin/edit_user', $data);
				$this->load->view('/_layout/_footer.php');
				$this->load->view('/_layout/_settings.php');
				$this->load->view('/_layout/_corejs.php');
			} else {
				echo "<script>
						alert('Data tidak ditemukan!');
						window.location='" . site_url('users') . "';
					</script>";
			}
			
		} else {
			$post = $this->input->post(null, TRUE);
			$this->Musers->edituser($post);
			if($this->db->affected_rows() > 0){
				echo "<script>
						alert('Berhasil diedit!');
					</script>";
			}
			echo "<script>
					window.location='" . site_url('users') . "';
				</script>";
		}
	}

	function username_check() {
		$post = $this->input->post(null, TRUE);
		$query = $this->db->query("SELECT * FROM sys_user WHERE username = '$post[username]' AND id != '$post[id]'");
		if($query->num_rows() > 0) {
			$this->form_validation->set_message('username_check', '{field} ini sudah terdaftar!');
			return FALSE;
		} else {
			return TRUE;
		}
	}
}
