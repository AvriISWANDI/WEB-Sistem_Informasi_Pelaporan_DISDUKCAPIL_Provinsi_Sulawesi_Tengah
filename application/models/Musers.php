<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Musers extends CI_Model {

    public function get($id = null) {
        $this->db->from('sys_user');
        if($id != null) {
            $this->db->where('id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function adduser($post) {
        $password = $post['password'];
        $key = "rc4test"; // Ganti dengan kunci yang sesuai
        $password_hash = rc4_hash($password, $key);
        // $password_hash = hash('sha224', $password);
    
        // Filter file logo yang diupload
        $allowed_types = ['image/jpeg', 'image/png'];
        $max_size = 5024 * 5024; // 5 MB
    
        if(isset($_FILES['logo']) && $_FILES['logo']['error'] == 0) {
            $file_size = $_FILES['logo']['size'];
            $file_type = $_FILES['logo']['type'];
    
            if(in_array($file_type, $allowed_types) && $file_size <= $max_size) {
                $file_name = $_FILES['logo']['name'];
                $file_tmp = $_FILES['logo']['tmp_name'];
                $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
                $new_file_name = uniqid('logo_').'.'.$file_ext;
                $upload_path = './assets/img/kabkota/'.$new_file_name;
    
                move_uploaded_file($file_tmp, $upload_path);
    
                $data = [
                    'kode' => $post['kode_kabkota'],
                    'kabkota' => $post['nama_kabkota'],
                    'logo' => $new_file_name,
                    'nama' => $post['nama'],
                    'username' => $post['username'],
                    'password' => $password_hash,
                    'akses' => $post['akses'],
                    'status' => $post['status'],
                    'created_at' => date('Y-m-d H:i:s'),
                ];
                $this->db->insert('sys_user', $data);
            } else {
                // File tidak valid
                echo "File logo harus berupa gambar dengan tipe JPEG atau PNG dan ukuran maksimal 1 MB.";
            }
        } else {
            // File tidak diupload
            echo "File logo harus diupload.";
        }
    }

    public function deluser($id) {
        $this->db->where('id', $id);
        $this->db->delete('sys_user');
    }

    public function edituser($post) {
        $password = $post['password'];
        $password_hash = rc4_hash($password);
        $data = [
            'kode' => $post['kode_kabkota'],
            'kabkota' => $post['nama_kabkota'],
            'nama' => $post['nama'],
            'username' => $post['username'],
            'password' => $password_hash,
            'akses' => $post['akses'],
            'status' => $post['status'],
        ];
        $this->db->where('id', $post['id']);
        $this->db->update('sys_user', $data);
    }
}