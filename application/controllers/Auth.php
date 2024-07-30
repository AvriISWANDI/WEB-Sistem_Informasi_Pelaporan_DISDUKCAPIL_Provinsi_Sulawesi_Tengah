<?php
class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mlogin', 'Mlogin');
    }

    public function index()
    {
        $data['meta'] = [
            'title' => 'Disdukcapil - Login Page',
        ];

        if ($this->session->userdata('logged') != TRUE) {
            $this->load->vars($data);
            $this->load->view('/_layout/_head.php');
            $this->load->view('auth/login');
            $this->load->view('/_layout/_corejs.php');
        } else {
            redirect('dashboard');
        }
    }

    public function authcheck()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $check_email = $this->Mlogin->qc_username($username);
        if ($check_email->num_rows() > 0) {
            $check_password = $this->Mlogin->qc_password($username, $password);
            // $check_password = $this->Mlogin->qc_password($username, rc4_hash($password));
            if ($check_password->num_rows() > 0) {
                $x = $check_password->row_array();
                if ($x['status'] == '1') {
                    $this->session->set_userdata('logged', TRUE);
                    $this->session->set_userdata('user', 'username');
                    $id = $x['id'];
                    if ($x['akses'] == 'adminprov') {
                        $result = $this->Mlogin->getKodeKabkota($id);
                        $name = $x['nama'];
                        $this->session->set_userdata('access', 'adminprov');
                        $this->session->set_userdata('id', $id);
                        $this->session->set_userdata('name', $name);
                        $this->session->set_userdata('kode', $result->kode);
                        $this->session->set_userdata('kabkota', $result->kabkota);
                        $this->session->set_userdata('logo', $result->logo);

                        $url = base_url('dashboard');
                        echo $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible text-white" role="alert">
                        Login berhasil, Selamat Datang ' . $name .  '
                        <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        </div>');
                        redirect('dashboard');

                    } elseif ($x['akses'] == 'adminkabkota') {
                        $result = $this->Mlogin->getKodeKabkota($id);
                        $name = $x['nama'];
                        $this->session->set_userdata('access', 'adminkabkota');
                        $this->session->set_userdata('id', $id);
                        $this->session->set_userdata('name', $name);
                        $this->session->set_userdata('kode', $result->kode);
                        $this->session->set_userdata('kabkota', $result->kabkota);
                        $this->session->set_userdata('logo', $result->logo);

                        $url = base_url('dashboard');
                        echo $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible text-white" role="alert">
                        Login berhasil, Selamat Datang ' . $name .  '
                        <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        </div>');
                        redirect('dashboard');
                    } elseif ($x['akses'] == 'monitoring') {
                        $result = $this->Mlogin->getKodeKabkota($id);
                        $name = $x['nama'];
                        $this->session->set_userdata('access', 'monitoring');
                        $this->session->set_userdata('id', $id);
                        $this->session->set_userdata('name', $name);
                        $this->session->set_userdata('kode', $result->kode);
                        $this->session->set_userdata('kabkota', $result->kabkota);
                        $this->session->set_userdata('logo', $result->logo);

                        $url = base_url('dashboard');
                        echo $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible text-white" role="alert">
                        Login berhasil, Selamat Datang ' . $name .  '
                        <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        </div>');
                        redirect('dashboard');
                    }
                } else {
                    $url = base_url('login');
                    echo $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible text-white" role="alert">
                    Akun anda belum aktif, silahkan hubungi admin
                    <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>');
                    redirect($url);
                }
            } else {
                $url = base_url('login');
                echo $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible text-white" role="alert">
                Password salah
                <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect($url);
            }
        } else {
            $url = base_url('login');
            echo $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible text-white" role="alert">
            Username tidak terdaftar
            <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect($url);
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        $url = base_url('login');
        redirect($url);
    }
}
