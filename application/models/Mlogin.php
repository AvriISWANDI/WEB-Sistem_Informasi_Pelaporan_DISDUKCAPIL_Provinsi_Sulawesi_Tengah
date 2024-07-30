<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mlogin extends CI_Model
{

    public function qc_username($username)
    {
        $result = $this->db->query("SELECT * FROM sys_user WHERE username='$username' LIMIT 1");
        return $result;
    }

    public function qc_password($username, $password)
    {
        $password_hash = rc4_hash($password, 'rc4test'); // Ganti 'secret' dengan kunci yang sesuai
        // $escapedPassword = $this->db->escape_str(hex2bin($password_hash));
        $result = $this->db->query("SELECT * FROM sys_user WHERE username='$username' AND password='$password_hash' LIMIT 1");
        return $result;
    }

    public function getKodeKabkota($user_id)
    {
        $query = $this->db->query("SELECT kode, kabkota, logo FROM sys_user WHERE id = $user_id");
        return $query->row();
    }
}
