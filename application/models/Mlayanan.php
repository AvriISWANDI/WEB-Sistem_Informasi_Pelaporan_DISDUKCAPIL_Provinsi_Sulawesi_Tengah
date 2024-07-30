<?php defined('BASEPATH') or exit('No direct script access allowed');

class Mlayanan extends CI_Model
{
    public function get($id = null)
    {
        $this->db->from('sys_layanan');
        if ($id != null) {
            $this->db->where('id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function addlayanan($post) {
        $data = [
            'kode' => $post['kode'],
            'kabkota' => $post['kabkota'],
            'logo' => $post['logo'],
            'layanan_online' => $post['layanan_online'],
            'layanan_terintegritas' => $post['layanan_terintegritas'],
        ];
        $this->db->insert('sys_layanan', $data);
    }

    public function dellayanan($id) {
        $this->db->where('id', $id);
        $this->db->delete('sys_layanan');
    }

    public function editlayanan($post) {
        $data = [
            'kode' => $post['kode'],
            'kabkota' => $post['kabkota'],
            'layanan_online' => $post['layanan_online'],
            'layanan_terintegritas' => $post['layanan_terintegritas'],
        ];
        $this->db->where('id', $post['id']);
        $this->db->update('sys_layanan', $data);
    }
}