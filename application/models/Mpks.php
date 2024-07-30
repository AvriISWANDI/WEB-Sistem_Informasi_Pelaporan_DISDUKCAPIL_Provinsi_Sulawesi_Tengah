<?php defined('BASEPATH') or exit('No direct script access allowed');

class Mpks extends CI_Model
{

    public function get($start_date = null, $end_date = null, $kabkota = null)
    {
        $this->db->from('sys_pks');
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

    public function addpks($post)
    {
        $allowed_types = ['image/jpeg', 'image/png'];
        $max_size = 5024 * 5024; // 5 MB

        // Validasi dokumen_pks
        if (isset($_FILES['dokumen_pks']) && $_FILES['dokumen_pks']['error'] == 0) {
            $file_size = $_FILES['dokumen_pks']['size'];
            $file_type = $_FILES['dokumen_pks']['type'];

            if (in_array($file_type, $allowed_types) && $file_size <= $max_size) {
                $file_name = $_FILES['dokumen_pks']['name'];
                $file_tmp = $_FILES['dokumen_pks']['tmp_name'];
                $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
                $new_pks = uniqid('dokumen_pks_') . '.' . $file_ext;
                $upload_path = './assets/img/dokumen/' . $new_pks;
                move_uploaded_file($file_tmp, $upload_path);

                $data['dokumen_pks'] = $new_pks;
            } else {
                // File tidak valid
                if ($file_size > $max_size) {
                    echo "Ukuran file dokumen_pks melebihi batas maksimal 1MB.";
                } else {
                    echo "File dokumen_pks harus berupa gambar dengan tipe JPEG atau PNG dan ukuran maksimal 1 MB.";
                }
                return;
            }
        }

        // Validasi dokumen_juknis
        if (isset($_FILES['dokumen_juknis']) && $_FILES['dokumen_juknis']['error'] == 0) {
            $file_size = $_FILES['dokumen_juknis']['size'];
            $file_type = $_FILES['dokumen_juknis']['type'];

            if (in_array($file_type, $allowed_types) && $file_size <= $max_size) {
                $file_name = $_FILES['dokumen_juknis']['name'];
                $file_tmp = $_FILES['dokumen_juknis']['tmp_name'];
                $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
                $new_juknis = uniqid('dokumen_juknis_') . '.' . $file_ext;
                $upload_path = './assets/img/dokumen/' . $new_juknis;
                move_uploaded_file($file_tmp, $upload_path);

                $data['dokumen_jupksknis'] = $new_juknis;
            } else {
                // File tidak valid
                if ($file_size > $max_size) {
                    echo "Ukuran file dokumen_juknis melebihi batas maksimal 1MB.";
                } else {
                    echo "File dokumen_juknis harus berupa gambar dengan tipe JPEG atau PNG dan ukuran maksimal 1 MB.";
                }
                return;
            }
        }

        // Validasi dokumen_pendukung
        if (isset($_FILES['dokumen_pendukung']) && $_FILES['dokumen_pendukung']['error'] == 0) {
            $file_size = $_FILES['dokumen_pendukung']['size'];
            $file_type = $_FILES['dokumen_pendukung']['type'];

            if (in_array($file_type, $allowed_types) && $file_size <= $max_size) {
                $file_name = $_FILES['dokumen_pendukung']['name'];
                $file_tmp = $_FILES['dokumen_pendukung']['tmp_name'];
                $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
                $new_pendukung = uniqid('dokumen_pendukung_') . '.' . $file_ext;
                $upload_path = './assets/img/dokumen/' . $new_pendukung;
                move_uploaded_file($file_tmp, $upload_path);

                $data['dokumen_pendukung'] = $new_pendukung;
            } else {
                // File tidak valid
                if ($file_size > $max_size) {
                    echo "Ukuran file dokumen_pendukung melebihi batas maksimal 1MB.";
                } else {
                    echo "File dokumen_pendukung harus berupa gambar dengan tipe JPEG atau PNG dan ukuran maksimal 1 MB.";
                }
                return;
            }
        }

        $data = [
            'waktu_pelaporan' => date('Y-m-d'),
            'kode' => $post['kode_kabkota'],
            'kabkota' => $post['nama_kabkota'],
            'logo' => $post['logo'],
            'opdbhi_pks' => $post['opdbhi_pks'],
            'nomor_pks' => $post['nomor_pks'],
            'nomor_juknis' => $post['nomor_juknis'],
            'opdbhi_akses' => $post['opdbhi_akses'],
            'dokumen_pks' => $new_pks,
            'dokumen_juknis' => $new_juknis,
            'dokumen_pendukung' => $new_pendukung,
            'keterangan' => $post['keterangan'],
        ];
        $this->db->insert('sys_pks', $data);
    }

    public function editpks($post)
    {
        $allowed_types = ['image/jpeg', 'image/png'];
        $max_size = 5024 * 5024; // 5 MB

        // Validasi dokumen_pks
        if (isset($_FILES['dokumen_pks']) && $_FILES['dokumen_pks']['error'] == 0) {
            $file_size = $_FILES['dokumen_pks']['size'];
            $file_type = $_FILES['dokumen_pks']['type'];

            if (in_array($file_type, $allowed_types) && $file_size <= $max_size) {
                $file_name = $_FILES['dokumen_pks']['name'];
                $file_tmp = $_FILES['dokumen_pks']['tmp_name'];
                $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
                $new_pks = uniqid('dokumen_pks_') . '.' . $file_ext;
                $upload_path = './assets/img/dokumen/' . $new_pks;
                move_uploaded_file($file_tmp, $upload_path);

                $data['dokumen_pks'] = $new_pks;
            } else {
                // File tidak valid
                if ($file_size > $max_size) {
                    echo "Ukuran file dokumen_pks melebihi batas maksimal 1MB.";
                } else {
                    echo "File dokumen_pks harus berupa gambar dengan tipe JPEG atau PNG dan ukuran maksimal 1 MB.";
                }
                return;
            }
        }

        // Validasi dokumen_juknis
        if (isset($_FILES['dokumen_juknis']) && $_FILES['dokumen_juknis']['error'] == 0) {
            $file_size = $_FILES['dokumen_juknis']['size'];
            $file_type = $_FILES['dokumen_juknis']['type'];

            if (in_array($file_type, $allowed_types) && $file_size <= $max_size) {
                $file_name = $_FILES['dokumen_juknis']['name'];
                $file_tmp = $_FILES['dokumen_juknis']['tmp_name'];
                $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
                $new_juknis = uniqid('dokumen_juknis_') . '.' . $file_ext;
                $upload_path = './assets/img/dokumen/' . $new_juknis;
                move_uploaded_file($file_tmp, $upload_path);

                $data['dokumen_jupksknis'] = $new_juknis;
            } else {
                // File tidak valid
                if ($file_size > $max_size) {
                    echo "Ukuran file dokumen_juknis melebihi batas maksimal 1MB.";
                } else {
                    echo "File dokumen_juknis harus berupa gambar dengan tipe JPEG atau PNG dan ukuran maksimal 1 MB.";
                }
                return;
            }
        }

        // Validasi dokumen_pendukung
        if (isset($_FILES['dokumen_pendukung']) && $_FILES['dokumen_pendukung']['error'] == 0) {
            $file_size = $_FILES['dokumen_pendukung']['size'];
            $file_type = $_FILES['dokumen_pendukung']['type'];

            if (in_array($file_type, $allowed_types) && $file_size <= $max_size) {
                $file_name = $_FILES['dokumen_pendukung']['name'];
                $file_tmp = $_FILES['dokumen_pendukung']['tmp_name'];
                $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
                $new_pendukung = uniqid('dokumen_pendukung_') . '.' . $file_ext;
                $upload_path = './assets/img/dokumen/' . $new_pendukung;
                move_uploaded_file($file_tmp, $upload_path);

                $data['dokumen_pendukung'] = $new_pendukung;
            } else {
                // File tidak valid
                if ($file_size > $max_size) {
                    echo "Ukuran file dokumen_pendukung melebihi batas maksimal 1MB.";
                } else {
                    echo "File dokumen_pendukung harus berupa gambar dengan tipe JPEG atau PNG dan ukuran maksimal 1 MB.";
                }
                return;
            }
        }

        $data = [
            'kode' => $post['kode_kabkota'],
            'kabkota' => $post['nama_kabkota'],
            'logo' => $post['logo'],
            'opdbhi_pks' => $post['opdbhi_pks'],
            'nomor_pks' => $post['nomor_pks'],
            'nomor_juknis' => $post['nomor_juknis'],
            'opdbhi_akses' => $post['opdbhi_akses'],
            'dokumen_pks' => $new_pks,
            'dokumen_juknis' => $new_juknis,
            'dokumen_pendukung' => $new_pendukung,
            'keterangan' => $post['keterangan'],
        ];
        $this->db->where('id', $post['id']);
        $this->db->update('sys_pks', $data);
    }

    public function delpks($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('sys_pks');
    }
}
