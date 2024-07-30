<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
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
		$this->load->model('Mlaporan');
		$this->load->library('form_validation');
	}

	public function device_ktpel()
	{
		$start_date = $this->input->post('start_date');
		$end_date = $this->input->post('end_date');
		$kabkota = $this->input->post('kabkota');
		$data['meta'] = [
			'title' => 'Laporan - Device KTP-eL',
			// NavLink
			'laporan' => 'active',
			'device_ktpel' => 'active',
			// Judul
			'pages' => 'Laporan',
			'pg_title' => 'Device KTP-eL',
		];

		$data['row'] = $this->Mlaporan->getktpel($start_date, $end_date, $kabkota);

		$this->load->vars($data);
		$this->load->view('/_layout/_head.php');
		$this->load->view('/_layout/_sidenav.php');
		$this->load->view('/_layout/_navbar.php');
		$this->load->view('laporan/device_ktpel/ktpel');
		$this->load->view('/_layout/_footer.php');
		$this->load->view('/_layout/_settings.php');
		$this->load->view('/_layout/_corejs.php');
	}

	public function ktpel_add()
	{

		$this->form_validation->set_rules('kode_kabkota', 'Kode Kabupaten/Kota', 'required');
		$this->form_validation->set_rules('nama_kabkota', 'Nama Kabupaten/Kota', 'required');

		//MONITOR
		$this->form_validation->set_rules('monitor_baik', 'Monitor Baik', 'required');
		$this->form_validation->set_rules('monitor_kurang', 'Monitor Kurang', 'required');
		$this->form_validation->set_rules('monitor_rusak', 'Monitor Rusak', 'required');
		$this->form_validation->set_rules('monitor_hilang', 'Monitor Hilang', 'required');

		//SERVER AVIS
		$this->form_validation->set_rules('serveravis_baik', 'Server Avis Baik', 'required');
		$this->form_validation->set_rules('serveravis_kurang', 'Server Avis Kurang', 'required');
		$this->form_validation->set_rules('serveravis_rusak', 'Server Avis Rusak', 'required');
		$this->form_validation->set_rules('serveravis_hilang', 'Server Avis Hilang', 'required');

		//DESKTOP PC
		$this->form_validation->set_rules('desktoppc_baik', 'Desktop PC Baik', 'required');
		$this->form_validation->set_rules('desktoppc_kurang', 'Desktop PC Kurang', 'required');
		$this->form_validation->set_rules('desktoppc_rusak', 'Desktop PC Rusak', 'required');
		$this->form_validation->set_rules('desktoppc_hilang', 'Desktop PC Hilang', 'required');

		//UPS 750VA/ 1000
		$this->form_validation->set_rules('ups_baik', 'UPS 750VA/ 1000 Baik', 'required');
		$this->form_validation->set_rules('ups_kurang', 'UPS 750VA/ 1000 Kurang', 'required');
		$this->form_validation->set_rules('ups_rusak', 'UPS 750VA/ 1000 Rusak', 'required');
		$this->form_validation->set_rules('ups_hilang', 'UPS 750VA/ 1000 Hilang', 'required');

		//FINGER PRINT SCANNER
		$this->form_validation->set_rules('fp_baik', 'Finger Print Scanner Baik', 'required');
		$this->form_validation->set_rules('fp_kurang', 'Finger Print Scanner Kurang', 'required');
		$this->form_validation->set_rules('fp_rusak', 'Finger Print Scanner Rusak', 'required');
		$this->form_validation->set_rules('fp_hilang', 'Finger Print Scanner Hilang', 'required');

		//SMART CARD READER
		$this->form_validation->set_rules('scr_baik', 'SMART CARD READER Baik', 'required');
		$this->form_validation->set_rules('scr_kurang', 'SMART CARD READER Kurang', 'required');
		$this->form_validation->set_rules('scr_rusak', 'SMART CARD READER Rusak', 'required');
		$this->form_validation->set_rules('scr_hilang', 'SMART CARD READER Hilang', 'required');

		//SIGNATURE PAD
		$this->form_validation->set_rules('sp_baik', 'SIGNATURE PAD Baik', 'required');
		$this->form_validation->set_rules('sp_kurang', 'SIGNATURE PAD Kurang', 'required');
		$this->form_validation->set_rules('sp_rusak', 'SIGNATURE PAD Rusak', 'required');
		$this->form_validation->set_rules('sp_hilang', 'SIGNATURE PAD Hilang', 'required');

		//KAMERA DIGITAL
		$this->form_validation->set_rules('kameradigital_baik', 'KAMERA DIGITAL Baik', 'required');
		$this->form_validation->set_rules('kameradigital_kurang', 'KAMERA DIGITAL Kurang', 'required');
		$this->form_validation->set_rules('kameradigital_rusak', 'KAMERA DIGITAL Rusak', 'required');
		$this->form_validation->set_rules('kameradigital_hilang', 'KAMERA DIGITAL Hilang', 'required');

		//IRIS SCANNER
		$this->form_validation->set_rules('irisscanner_baik', 'IRIS SCANNER Baik', 'required');
		$this->form_validation->set_rules('irisscanner_kurang', 'IRIS SCANNER Kurang', 'required');
		$this->form_validation->set_rules('irisscanner_rusak', 'IRIS SCANNER Rusak', 'required');
		$this->form_validation->set_rules('irisscanner_hilang', 'IRIS SCANNER Hilang', 'required');

		//TRIPOD
		$this->form_validation->set_rules('tripod_baik', 'TRIPOD Baik', 'required');
		$this->form_validation->set_rules('tripod_kurang', 'TRIPOD Kurang', 'required');
		$this->form_validation->set_rules('tripod_rusak', 'TRIPOD Rusak', 'required');
		$this->form_validation->set_rules('tripod_hilang', 'TRIPOD Hilang', 'required');

		//HARDISK EXTERNAL
		$this->form_validation->set_rules('hardext_baik', 'HARDISK EXTERNAL Baik', 'required');
		$this->form_validation->set_rules('hardext_kurang', 'HARDISK EXTERNAL Kurang', 'required');
		$this->form_validation->set_rules('hardext_rusak', 'HARDISK EXTERNAL Rusak', 'required');
		$this->form_validation->set_rules('hardext_hilang', 'HARDISK EXTERNAL Hilang', 'required');

		//DIGITAL SCANNER
		$this->form_validation->set_rules('digitalscanner_baik', 'DIGITAL SCANNER Baik', 'required');
		$this->form_validation->set_rules('digitalscanner_kurang', 'DIGITAL SCANNER Kurang', 'required');
		$this->form_validation->set_rules('digitalscanner_rusak', 'DIGITAL SCANNER Rusak', 'required');
		$this->form_validation->set_rules('digitalscanner_hilang', 'DIGITAL SCANNER Hilang', 'required');

		//KEYBOARD
		$this->form_validation->set_rules('keyboard_baik', 'KEYBOARD Baik', 'required');
		$this->form_validation->set_rules('keyboard_kurang', 'KEYBOARD Kurang', 'required');
		$this->form_validation->set_rules('keyboard_rusak', 'KEYBOARD Rusak', 'required');
		$this->form_validation->set_rules('keyboard_hilang', 'KEYBOARD Hilang', 'required');

		//JARKOMDAT
		$this->form_validation->set_rules('jarkomdat_baik', 'JARKOMDAT Baik', 'required');
		$this->form_validation->set_rules('jarkomdat_kurang', 'JARKOMDAT Kurang', 'required');
		$this->form_validation->set_rules('jarkomdat_rusak', 'JARKOMDAT Rusak', 'required');
		$this->form_validation->set_rules('jarkomdat_hilang', 'JARKOMDAT Hilang', 'required');

		//ADAPTOR CAM
		$this->form_validation->set_rules('adaptorcam_baik', 'ADAPTOR CAM Baik', 'required');
		$this->form_validation->set_rules('adaptorcam_kurang', 'ADAPTOR CAM Kurang', 'required');
		$this->form_validation->set_rules('adaptorcam_rusak', 'ADAPTOR CAM Rusak', 'required');
		$this->form_validation->set_rules('adaptorcam_hilang', 'ADAPTOR CAM Hilang', 'required');

		//CPU CLIENT
		$this->form_validation->set_rules('cpuclient_baik', 'CPU CLIENT Baik', 'required');
		$this->form_validation->set_rules('cpuclient_kurang', 'CPU CLIENT Kurang', 'required');
		$this->form_validation->set_rules('cpuclient_rusak', 'CPU CLIENT Rusak', 'required');
		$this->form_validation->set_rules('cpuclient_hilang', 'CPU CLIENT Hilang', 'required');

		//	ANTENA M2M
		$this->form_validation->set_rules('antenam2m_baik', 'ANTENA M2M Baik', 'required');
		$this->form_validation->set_rules('antenam2m_kurang', 'ANTENA M2M Kurang', 'required');
		$this->form_validation->set_rules('antenam2m_rusak', 'ANTENA M2M Rusak', 'required');
		$this->form_validation->set_rules('antenam2m_hilang', 'ANTENA M2M Hilang', 'required');

		//HARDISK INTERNAL
		$this->form_validation->set_rules('hardint_baik', 'HARDISK INTERNAL Baik', 'required');
		$this->form_validation->set_rules('hardint_kurang', 'HARDISK INTERNAL Kurang', 'required');
		$this->form_validation->set_rules('hardint_rusak', 'HARDISK INTERNAL Rusak', 'required');
		$this->form_validation->set_rules('hardint_hilang', 'HARDISK INTERNAL Hilang', 'required');

		$this->form_validation->set_message('required', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
															<span class="alert-text">%s tidak boleh kosong!</span>
															<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>');

		if ($this->form_validation->run() == FALSE) {

			$data['meta'] = [
				'title' => 'Laporan - Device KTP-eL',
				// NavLink
				'laporan' => 'active',
				'device_ktpel' => 'active',
				// Judul
				'pages' => 'Laporan',
				'pg_title' => 'Device KTP-eL',
			];

			$this->load->vars($data);
			$this->load->view('/_layout/_head.php');
			$this->load->view('/_layout/_sidenav.php');
			$this->load->view('/_layout/_navbar.php');
			$this->load->view('laporan/device_ktpel/ktpel_add');
			$this->load->view('/_layout/_footer.php');
			$this->load->view('/_layout/_settings.php');
			$this->load->view('/_layout/_corejs.php');
		} else {
			$post = $this->input->post(null, TRUE);
			$this->Mlaporan->addktpel($post);
			if ($this->db->affected_rows() > 0) {
				echo "<script>	
						alert('Device KTP-eL Berhasil ditambah!');
					</script>";
			}
			echo "<script>
					window.location='" . site_url('laporan/device_ktpel') . "';
				</script>";
		}
	}

	public function ktpel_edit($id)
	{

		$this->form_validation->set_rules('kode_kabkota', 'Kode Kabupaten/Kota', 'required');
		$this->form_validation->set_rules('nama_kabkota', 'Nama Kabupaten/Kota', 'required');

		//MONITOR
		$this->form_validation->set_rules('monitor_baik', 'Monitor Baik', 'required');
		$this->form_validation->set_rules('monitor_kurang', 'Monitor Kurang', 'required');
		$this->form_validation->set_rules('monitor_rusak', 'Monitor Rusak', 'required');
		$this->form_validation->set_rules('monitor_hilang', 'Monitor Hilang', 'required');

		//SERVER AVIS
		$this->form_validation->set_rules('serveravis_baik', 'Server Avis Baik', 'required');
		$this->form_validation->set_rules('serveravis_kurang', 'Server Avis Kurang', 'required');
		$this->form_validation->set_rules('serveravis_rusak', 'Server Avis Rusak', 'required');
		$this->form_validation->set_rules('serveravis_hilang', 'Server Avis Hilang', 'required');

		//DESKTOP PC
		$this->form_validation->set_rules('desktoppc_baik', 'Desktop PC Baik', 'required');
		$this->form_validation->set_rules('desktoppc_kurang', 'Desktop PC Kurang', 'required');
		$this->form_validation->set_rules('desktoppc_rusak', 'Desktop PC Rusak', 'required');
		$this->form_validation->set_rules('desktoppc_hilang', 'Desktop PC Hilang', 'required');

		//UPS 750VA/ 1000
		$this->form_validation->set_rules('ups_baik', 'UPS 750VA/ 1000 Baik', 'required');
		$this->form_validation->set_rules('ups_kurang', 'UPS 750VA/ 1000 Kurang', 'required');
		$this->form_validation->set_rules('ups_rusak', 'UPS 750VA/ 1000 Rusak', 'required');
		$this->form_validation->set_rules('ups_hilang', 'UPS 750VA/ 1000 Hilang', 'required');

		//FINGER PRINT SCANNER
		$this->form_validation->set_rules('fp_baik', 'Finger Print Scanner Baik', 'required');
		$this->form_validation->set_rules('fp_kurang', 'Finger Print Scanner Kurang', 'required');
		$this->form_validation->set_rules('fp_rusak', 'Finger Print Scanner Rusak', 'required');
		$this->form_validation->set_rules('fp_hilang', 'Finger Print Scanner Hilang', 'required');

		//SMART CARD READER
		$this->form_validation->set_rules('scr_baik', 'SMART CARD READER Baik', 'required');
		$this->form_validation->set_rules('scr_kurang', 'SMART CARD READER Kurang', 'required');
		$this->form_validation->set_rules('scr_rusak', 'SMART CARD READER Rusak', 'required');
		$this->form_validation->set_rules('scr_hilang', 'SMART CARD READER Hilang', 'required');

		//SIGNATURE PAD
		$this->form_validation->set_rules('sp_baik', 'SIGNATURE PAD Baik', 'required');
		$this->form_validation->set_rules('sp_kurang', 'SIGNATURE PAD Kurang', 'required');
		$this->form_validation->set_rules('sp_rusak', 'SIGNATURE PAD Rusak', 'required');
		$this->form_validation->set_rules('sp_hilang', 'SIGNATURE PAD Hilang', 'required');

		//KAMERA DIGITAL
		$this->form_validation->set_rules('kameradigital_baik', 'KAMERA DIGITAL Baik', 'required');
		$this->form_validation->set_rules('kameradigital_kurang', 'KAMERA DIGITAL Kurang', 'required');
		$this->form_validation->set_rules('kameradigital_rusak', 'KAMERA DIGITAL Rusak', 'required');
		$this->form_validation->set_rules('kameradigital_hilang', 'KAMERA DIGITAL Hilang', 'required');

		//IRIS SCANNER
		$this->form_validation->set_rules('irisscanner_baik', 'IRIS SCANNER Baik', 'required');
		$this->form_validation->set_rules('irisscanner_kurang', 'IRIS SCANNER Kurang', 'required');
		$this->form_validation->set_rules('irisscanner_rusak', 'IRIS SCANNER Rusak', 'required');
		$this->form_validation->set_rules('irisscanner_hilang', 'IRIS SCANNER Hilang', 'required');

		//TRIPOD
		$this->form_validation->set_rules('tripod_baik', 'TRIPOD Baik', 'required');
		$this->form_validation->set_rules('tripod_kurang', 'TRIPOD Kurang', 'required');
		$this->form_validation->set_rules('tripod_rusak', 'TRIPOD Rusak', 'required');
		$this->form_validation->set_rules('tripod_hilang', 'TRIPOD Hilang', 'required');

		//HARDISK EXTERNAL
		$this->form_validation->set_rules('hardext_baik', 'HARDISK EXTERNAL Baik', 'required');
		$this->form_validation->set_rules('hardext_kurang', 'HARDISK EXTERNAL Kurang', 'required');
		$this->form_validation->set_rules('hardext_rusak', 'HARDISK EXTERNAL Rusak', 'required');
		$this->form_validation->set_rules('hardext_hilang', 'HARDISK EXTERNAL Hilang', 'required');

		//DIGITAL SCANNER
		$this->form_validation->set_rules('digitalscanner_baik', 'DIGITAL SCANNER Baik', 'required');
		$this->form_validation->set_rules('digitalscanner_kurang', 'DIGITAL SCANNER Kurang', 'required');
		$this->form_validation->set_rules('digitalscanner_rusak', 'DIGITAL SCANNER Rusak', 'required');
		$this->form_validation->set_rules('digitalscanner_hilang', 'DIGITAL SCANNER Hilang', 'required');

		//KEYBOARD
		$this->form_validation->set_rules('keyboard_baik', 'KEYBOARD Baik', 'required');
		$this->form_validation->set_rules('keyboard_kurang', 'KEYBOARD Kurang', 'required');
		$this->form_validation->set_rules('keyboard_rusak', 'KEYBOARD Rusak', 'required');
		$this->form_validation->set_rules('keyboard_hilang', 'KEYBOARD Hilang', 'required');

		//JARKOMDAT
		$this->form_validation->set_rules('jarkomdat_baik', 'JARKOMDAT Baik', 'required');
		$this->form_validation->set_rules('jarkomdat_kurang', 'JARKOMDAT Kurang', 'required');
		$this->form_validation->set_rules('jarkomdat_rusak', 'JARKOMDAT Rusak', 'required');
		$this->form_validation->set_rules('jarkomdat_hilang', 'JARKOMDAT Hilang', 'required');

		//ADAPTOR CAM
		$this->form_validation->set_rules('adaptorcam_baik', 'ADAPTOR CAM Baik', 'required');
		$this->form_validation->set_rules('adaptorcam_kurang', 'ADAPTOR CAM Kurang', 'required');
		$this->form_validation->set_rules('adaptorcam_rusak', 'ADAPTOR CAM Rusak', 'required');
		$this->form_validation->set_rules('adaptorcam_hilang', 'ADAPTOR CAM Hilang', 'required');

		//CPU CLIENT
		$this->form_validation->set_rules('cpuclient_baik', 'CPU CLIENT Baik', 'required');
		$this->form_validation->set_rules('cpuclient_kurang', 'CPU CLIENT Kurang', 'required');
		$this->form_validation->set_rules('cpuclient_rusak', 'CPU CLIENT Rusak', 'required');
		$this->form_validation->set_rules('cpuclient_hilang', 'CPU CLIENT Hilang', 'required');

		//	ANTENA M2M
		$this->form_validation->set_rules('antenam2m_baik', 'ANTENA M2M Baik', 'required');
		$this->form_validation->set_rules('antenam2m_kurang', 'ANTENA M2M Kurang', 'required');
		$this->form_validation->set_rules('antenam2m_rusak', 'ANTENA M2M Rusak', 'required');
		$this->form_validation->set_rules('antenam2m_hilang', 'ANTENA M2M Hilang', 'required');

		//HARDISK INTERNAL
		$this->form_validation->set_rules('hardint_baik', 'HARDISK INTERNAL Baik', 'required');
		$this->form_validation->set_rules('hardint_kurang', 'HARDISK INTERNAL Kurang', 'required');
		$this->form_validation->set_rules('hardint_rusak', 'HARDISK INTERNAL Rusak', 'required');
		$this->form_validation->set_rules('hardint_hilang', 'HARDISK INTERNAL Hilang', 'required');

		$this->form_validation->set_message('required', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
															<span class="alert-text">%s tidak boleh kosong!</span>
															<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>');

		if ($this->form_validation->run() == FALSE) {

			$query = $this->Mlaporan->getktpel($id);
			if ($query->num_rows() > 0) {
				$data['row'] = $query->row();
				$data['meta'] = [
					'title' => 'Laporan - Device KTP-eL',
					// NavLink
					'laporan' => 'active',
					'device_ktpel' => 'active',
					// Judul
					'pages' => 'Laporan',
					'pg_title' => 'Device KTP-eL',
				];

				$this->load->vars($data);
				$this->load->view('/_layout/_head.php');
				$this->load->view('/_layout/_sidenav.php');
				$this->load->view('/_layout/_navbar.php');
				$this->load->view('laporan/device_ktpel/ktpel_edit');
				$this->load->view('/_layout/_footer.php');
				$this->load->view('/_layout/_settings.php');
				$this->load->view('/_layout/_corejs.php');
			} else {
				echo "<script>
						alert('Data tidak ditemukan!');
						window.location='" . site_url('laporan/device_ktpel') . "';
					</script>";
			}
		} else {
			$post = $this->input->post(null, TRUE);
			$this->Mlaporan->editktpel($post);
			if ($this->db->affected_rows() > 0) {
				echo "<script>	
						alert('Device KTP-eL Berhasil diubah!');
					</script>";
			}
			echo "<script>
					window.location='" . site_url('laporan/device_ktpel') . "';
				</script>";
		}
	}

	public function delktpel()
	{
		$id = $this->input->post('id');
		$this->Mlaporan->delktpel($id);
		if ($this->db->affected_rows() > 0) {
			echo "<script>	
					alert('Device KTP-eL Berhasil dihapus!');
				</script>";
		}
	}

	public function device_pel()
	{
		$start_date = $this->input->post('start_date');
		$end_date = $this->input->post('end_date');
		$kabkota = $this->input->post('kabkota');
		$data['meta'] = [
			'title' => 'Laporan - Device Pelayanan',
			// NavLink
			'laporan' => 'active',
			'device_pel' => 'active',
			// Judul
			'pages' => 'Laporan',
			'pg_title' => 'Device Pelayanan',
		];

		$data['row'] = $this->Mlaporan->getpel($start_date, $end_date, $kabkota);

		$this->load->vars($data);
		$this->load->view('/_layout/_head.php');
		$this->load->view('/_layout/_sidenav.php');
		$this->load->view('/_layout/_navbar.php');
		$this->load->view('laporan/device_pel/pel');
		$this->load->view('/_layout/_footer.php');
		$this->load->view('/_layout/_settings.php');
		$this->load->view('/_layout/_corejs.php');
	}

	public function pel_add()
	{

		$this->form_validation->set_rules('kode_kabkota', 'Kode Kabupaten/Kota', 'required');
		$this->form_validation->set_rules('nama_kabkota', 'Nama Kabupaten/Kota', 'required');

		//PC 
		$this->form_validation->set_rules('pcmonitor', 'PC Monitor', 'required');
		$this->form_validation->set_rules('pcallinone', 'PC All In One', 'required');

		//LAPTOP
		$this->form_validation->set_rules('laptop', 'LAPTOP', 'required');

		//SERVER SIAK
		$this->form_validation->set_rules('server_siak', 'Server SIAK', 'required');

		//PRINTER
		$this->form_validation->set_rules('printer_kkakta', 'Printer KK / AKTA', 'required');
		$this->form_validation->set_rules('printer_kia', 'Printer KIA', 'required');
		$this->form_validation->set_rules('printer_ktpel', 'Printer KTP-eL', 'required');

		//PERANGKAT MOBILE
		$this->form_validation->set_rules('perangkatmobile_ktpel', 'Perangkat Mobile KTP-EL', 'required');
		$this->form_validation->set_rules('perangkatmobile_siak', 'Perangkat Mobile SIAK', 'required');

		//UPS
		$this->form_validation->set_rules('ups_server', 'UPS Server', 'required');
		$this->form_validation->set_rules('ups_pc', 'UPS PC', 'required');

		//KONDISI JARINGAN
		$this->form_validation->set_rules('kondisijaringan_vpn', 'Kondisi Jaringan VPN', 'required');
		$this->form_validation->set_rules('kondisijaringan_m2m', 'Kondisi Jaringan M2M', 'required');

		//JUMLAH OPERATOR
		$this->form_validation->set_rules('jumlahoperator_siak', 'Jumlah Operator SIAK', 'required');
		$this->form_validation->set_rules('jumlahoperator_ktpel', 'Jumlah Operator KTP-eL', 'required');

		//KETERANGAN
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

		$this->form_validation->set_message('required', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
															<span class="alert-text">%s tidak boleh kosong!</span>
															<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>');

		if ($this->form_validation->run() == FALSE) {

			$data['meta'] = [
				'title' => 'Laporan - Device Pelayanan',
				// NavLink
				'laporan' => 'active',
				'device_pel' => 'active',
				// Judul
				'pages' => 'Laporan',
				'pg_title' => 'Device Pelayanan',
			];

			$this->load->vars($data);
			$this->load->view('/_layout/_head.php');
			$this->load->view('/_layout/_sidenav.php');
			$this->load->view('/_layout/_navbar.php');
			$this->load->view('laporan/device_pel/pel_add');
			$this->load->view('/_layout/_footer.php');
			$this->load->view('/_layout/_settings.php');
			$this->load->view('/_layout/_corejs.php');
		} else {
			$post = $this->input->post(null, TRUE);
			$this->Mlaporan->addpel($post);
			if ($this->db->affected_rows() > 0) {
				echo "<script>	
						alert('Device Pelayanan SIAK Berhasil ditambah!');
					</script>";
			}
			echo "<script>
					window.location='" . site_url('laporan/device_pel') . "';
				</script>";
		}
	}

	public function pel_edit($id)
	{

		$this->form_validation->set_rules('kode_kabkota', 'Kode Kabupaten/Kota', 'required');
		$this->form_validation->set_rules('nama_kabkota', 'Nama Kabupaten/Kota', 'required');

		//PC 
		$this->form_validation->set_rules('pcmonitor', 'PC Monitor', 'required');
		$this->form_validation->set_rules('pcallinone', 'PC All In One', 'required');

		//LAPTOP
		$this->form_validation->set_rules('laptop', 'LAPTOP', 'required');


		//SERVER SIAK
		$this->form_validation->set_rules('server_siak', 'Server SIAK', 'required');

		//PRINTER
		$this->form_validation->set_rules('printer_kkakta', 'Printer KK / AKTA', 'required');
		$this->form_validation->set_rules('printer_kia', 'Printer KIA', 'required');
		$this->form_validation->set_rules('printer_ktpel', 'Printer KTP-eL', 'required');

		//PERANGKAT MOBILE
		$this->form_validation->set_rules('perangkatmobile_ktpel', 'Perangkat Mobile KTP-EL', 'required');
		$this->form_validation->set_rules('perangkatmobile_siak', 'Perangkat Mobile SIAK', 'required');

		//UPS
		$this->form_validation->set_rules('ups_server', 'UPS Server', 'required');
		$this->form_validation->set_rules('ups_pc', 'UPS PC', 'required');

		//KONDISI JARINGAN
		$this->form_validation->set_rules('kondisijaringan_vpn', 'Kondisi Jaringan VPN', 'required');
		$this->form_validation->set_rules('kondisijaringan_m2m', 'Kondisi Jaringan M2M', 'required');

		//JUMLAH OPERATOR
		$this->form_validation->set_rules('jumlahoperator_siak', 'Jumlah Operator SIAK', 'required');
		$this->form_validation->set_rules('jumlahoperator_ktpel', 'Jumlah Operator KTP-eL', 'required');

		//KETERANGAN
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

		$this->form_validation->set_message('required', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
															<span class="alert-text">%s tidak boleh kosong!</span>
															<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>');

		if ($this->form_validation->run() == FALSE) {

			$query = $this->Mlaporan->getpel($id);
			if ($query->num_rows() > 0) {
				$data['row'] = $query->row();

				$data['meta'] = [
					'title' => 'Laporan - Device Pelayanan',
					// NavLink
					'laporan' => 'active',
					'device_pel' => 'active',
					// Judul
					'pages' => 'Laporan',
					'pg_title' => 'Device Pelayanan',
				];

				$this->load->vars($data);
				$this->load->view('/_layout/_head.php');
				$this->load->view('/_layout/_sidenav.php');
				$this->load->view('/_layout/_navbar.php');
				$this->load->view('laporan/device_pel/pel_edit');
				$this->load->view('/_layout/_footer.php');
				$this->load->view('/_layout/_settings.php');
				$this->load->view('/_layout/_corejs.php');
			} else {
				echo "<script>
						alert('Data tidak ditemukan!');
						window.location='" . site_url('laporan/device_pel') . "';
					</script>";
			}
		} else {
			$post = $this->input->post(null, TRUE);
			$this->Mlaporan->editpel($post);
			if ($this->db->affected_rows() > 0) {
				echo "<script>	
						alert('Device Pelayanan SIAK Berhasil diubah!');
					</script>";
			}
			echo "<script>
					window.location='" . site_url('laporan/device_pel') . "';
				</script>";
		}
	}

	public function delpel()
	{
		$id = $this->input->post('id');
		$this->Mlaporan->delpel($id);
		if ($this->db->affected_rows() > 0) {
			echo "<script>	
					alert('Device Pelayanan Berhasil dihapus!');
				</script>";
		}
	}
}
