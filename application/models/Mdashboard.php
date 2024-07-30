<?php defined('BASEPATH') or exit('No direct script access allowed');

class Mdashboard extends CI_Model
{
    public function getUser()
    {
        return $this->db->count_all('sys_user');
    }

    public function getSimpanrindu()
    {
        return $this->db->count_all('sys_harian');
    }

    public function getInovasi()
    {
        return $this->db->count_all('sys_datainovasi');
    }

    public function getPks()
    {
        return $this->db->count_all('sys_pks');
    }

    public function getDevicektpel()
    {
        return $this->db->count_all('sys_devicektpel');
    }

    public function getDevicepel()
    {
        return $this->db->count_all('sys_devicepel');
    }

    public function getLayanan()
    {
        return $this->db->count_all('sys_layanan');
    }
}