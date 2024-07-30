<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
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
		$this->load->model('Mdashboard');
	}

	public function index()
	{
		$data['meta'] = [
			'title' => 'Dashboard',
			// NavLink
			'dashboard' => 'active',
			// Judul
			'pages' => 'Dashboard',
			'pg_title' => 'Dashboard',
		];

		$getUser = $this->Mdashboard->getUser();
		$getSimpanrindu = $this->Mdashboard->getSimpanrindu();
		$getInovasi = $this->Mdashboard->getInovasi();
		$getPks = $this->Mdashboard->getPks();
		$getDevicektpel = $this->Mdashboard->getDevicektpel();
		$getDevicepel = $this->Mdashboard->getDevicepel();
		$getLayanan = $this->Mdashboard->getLayanan();
		$data['getUser'] = $getUser;
		$data['getSimpanrindu'] = $getSimpanrindu;
		$data['getInovasi'] = $getInovasi;
		$data['getPks'] = $getPks;
		$data['getDevicektpel'] = $getDevicektpel;
		$data['getDevicepel'] = $getDevicepel;
		$data['getLayanan'] = $getLayanan;

		$this->load->vars($data);
		$this->load->view('/_layout/_head.php');
		$this->load->view('/_layout/_sidenav.php');
		$this->load->view('/_layout/_navbar.php');
		$this->load->view('dashboard');
		$this->load->view('/_layout/_footer.php');
		$this->load->view('/_layout/_settings.php');
		$this->load->view('/_layout/_corejs.php');
	}
}
