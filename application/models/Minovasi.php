<?php defined('BASEPATH') or exit('No direct script access allowed');

class Minovasi extends CI_Model
{

    public function get($start_date = null, $end_date = null, $kabkota = null)
    {
        $this->db->from('sys_datainovasi');
        if ($start_date != null && $end_date != null) {
            $this->db->where('waktu_pelaporan >=', $start_date);
            $this->db->where('waktu_pelaporan <=', $end_date);
        }
        if ($kabkota != null) {
            $this->db->where('kabkota', $kabkota);
        }
        $query = $this->db->get();
        return $query;
    }

    public function addinovasi($post)
    {
        $allowed_types = ['image/jpeg', 'image/png'];
        $max_size = 5024 * 5024; // 5 MB

        // Validasi dokumen_inovasi
        if (isset($_FILES['dokumen_inovasi']) && $_FILES['dokumen_inovasi']['error'] == 0) {
            $file_size = $_FILES['dokumen_inovasi']['size'];
            $file_type = $_FILES['dokumen_inovasi']['type'];

            if (in_array($file_type, $allowed_types) && $file_size <= $max_size) {
                $file_name = $_FILES['dokumen_inovasi']['name'];
                $file_tmp = $_FILES['dokumen_inovasi']['tmp_name'];
                $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
                $new_inovasi = uniqid('dokumen_inovasi_') . '.' . $file_ext;
                $upload_path = './assets/img/dokumen/' . $new_inovasi;
                move_uploaded_file($file_tmp, $upload_path);

                $data['dokumen_inovasi'] = $new_inovasi;
            } else {
                // File tidak valid
                if ($file_size > $max_size) {
                    echo "Ukuran file dokumen_inovasi melebihi batas maksimal 1MB.";
                } else {
                    echo "File dokumen_inovasi harus berupa gambar dengan tipe JPEG atau PNG dan ukuran maksimal 1 MB.";
                }
                return;
            }
        }

        $data = [
            'waktu_pelaporan' => date('Y-m-d'),
            'kode' => $post['kode_kabkota'],
            'kabkota' => $post['nama_kabkota'],
            'logo' => $post['logo'],
            'singkatan_inovasi' => $post['singkatan_inovasi'],
            'pjg_inovasi' => $post['kepanjangan_inovasi'],
            'thn_penerapan' => $post['tahun_penerapan'],
            'tujuan_inovasi' => $post['tujuan_inovasi'],
            'dampak' => $post['dampak'],
            'kendala' => $post['kendala'],
            'dokumen_inovasi' => $new_inovasi,
            'keterangan' => $post['keterangan'],
        ];
        $this->db->insert('sys_datainovasi', $data);
    }

    public function delinovasi($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('sys_datainovasi');
    }

    public function editinovasi($post)
    {
        $data = [
            'kode' => $post['kode_kabkota'],
            'kabkota' => $post['nama_kabkota'],
            'singkatan_inovasi' => $post['singkatan_inovasi'],
            'pjg_inovasi' => $post['kepanjangan_inovasi'],
            'thn_penerapan' => $post['tahun_penerapan'],
            'tujuan_inovasi' => $post['tujuan_inovasi'],
            'dampak' => $post['dampak'],
            'kendala' => $post['kendala'],
            'keterangan' => $post['keterangan'],
        ];
        $this->db->where('id', $post['id']);
        $this->db->update('sys_datainovasi', $data);
    }
}
