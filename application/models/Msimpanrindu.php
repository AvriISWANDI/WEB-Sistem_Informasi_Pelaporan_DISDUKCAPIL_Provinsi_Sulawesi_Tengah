<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Msimpanrindu extends CI_Model
{

    public function getharian($start_date = null, $end_date = null, $kabkota = null)
    {
        $this->db->from('sys_harian');
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

    public function addharian($post)
    {
        $data = [
            'waktu_pelaporan' => date('Y-m-d'),
            'kode' => $post['kode_kabkota'],
            'kabkota' => $post['nama_kabkota'],
            'logo' => $post['logo'],
            'tgl_pelayanan' => $post['tgl_pelayanan'],
            'nik_baru' => $post['nik_baru'],
            'cetak_kk' => $post['cetak_kk'],
            'rekam_ktpel' => $post['rekam_ktpel'],
            'prr' => $post['prr'],
            'sfe' => $post['sfe'],
            'duplikat_record' => $post['duplikat_record'],
            'suket_now' => $post['suket_now'],
            'suket_before' => $post['suket_before'],
            'cetak_ktpel_suket' => $post['cetak_ktpel_suket'],
            'cetak_ktpel_prr' => $post['cetak_ktpel_prr'],
            'cetak_ktpel_rhgp' => $post['cetak_ktpel_rhgp'],
            'cetak_akta_17' => $post['cetak_akta_17'],
            'cetak_akta_17up' => $post['cetak_akta_17up'],
            'cetak_akta_kawin' => $post['cetak_akta_kawin'],
            'cetak_akta_cerai' => $post['cetak_akta_cerai'],
            'cetak_akta_kematian' => $post['cetak_akta_kematian'],
            'skpwni_out' => $post['skpwni_out'],
            'skpwni_in' => $post['skpwni_in'],
            'cetak_kia_5' => $post['cetak_kia_5'],
            'cetak_kia_5up' => $post['cetak_kia_5up'],
            'sisa_blanko' => $post['sisa_blanko'],
        ];
        $this->db->insert('sys_harian', $data);
    }

    public function delharian($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('sys_harian');
    }

    public function editharian($post)
    {
        $data = [
            'kode' => $post['kode_kabkota'],
            'kabkota' => $post['nama_kabkota'],
            'tgl_pelayanan' => $post['tgl_pelayanan'],
            'nik_baru' => $post['nik_baru'],
            'cetak_kk' => $post['cetak_kk'],
            'cetak_ktpel' => $post['cetak_ktpel'],
            'rekam_ktpel' => $post['rekam_ktpel'],
            'prr' => $post['prr'],
            'sfe' => $post['sfe'],
            'duplikat_record' => $post['duplikat_record'],
            'suket_now' => $post['suket_now'],
            'suket_before' => $post['suket_before'],
            'cetak_ktpel_suket' => $post['cetak_ktpel_suket'],
            'cetak_ktpel_prr' => $post['cetak_ktpel_prr'],
            'cetak_ktpel_rhgp' => $post['cetak_ktpel_rhgp'],
            'cetak_akta_17' => $post['cetak_akta_17'],
            'cetak_akta_17up' => $post['cetak_akta_17up'],
            'cetak_akta_kawin' => $post['cetak_akta_kawin'],
            'cetak_akta_cerai' => $post['cetak_akta_cerai'],
            'cetak_akta_kematian' => $post['cetak_akta_kematian'],
            'skpwni_out' => $post['skpwni_out'],
            'skpwni_in' => $post['skpwni_in'],
            'cetak_kia_5' => $post['cetak_kia_5'],
            'cetak_kia_5up' => $post['cetak_kia_5up'],
            'sisa_blanko' => $post['sisa_blanko'],
        ];
        $this->db->where('id', $post['id']);
        $this->db->update('sys_harian', $data);
    }

    public function getAllHarian($tanggal_awal, $tanggal_akhir, $kabkota = null)
    {
        $query = $this->db->query("SELECT h.waktu_pelaporan, h.kode, h.kabkota, 
    SUM(h.rekam_ktpel) AS rekam_ktpel,
    SUM(h.suket_now + h.suket_before) AS suket,
    SUM(h.prr) AS prr,
    SUM(h.sisa_blanko) AS sisa_blanko,
    SUM(h.rekam_ktpel) AS rekam_ktpel,
    SUM(h.cetak_kia_5 + h.cetak_kia_5up) AS cetak_kia,
    SUM(h.cetak_akta_17) AS cetak_akta_17,
    u.logo,
    l.layanan_online,
    l.layanan_terintegritas,
    MAX(p.opdbhi_total) AS opdbhi_total,
    MAX(p.opdbhi_totalakses) AS opdbhi_totalakses
    FROM sys_harian h
    LEFT JOIN sys_user u ON h.kabkota = u.kabkota
    LEFT JOIN sys_layanan l ON h.kabkota = l.kabkota
    LEFT JOIN (SELECT DISTINCT kode, kabkota, opdbhi_total, opdbhi_totalakses FROM sys_pks) p ON h.kode = p.kode AND h.kabkota = p.kabkota
    WHERE h.waktu_pelaporan BETWEEN '$tanggal_awal' AND '$tanggal_akhir'
    " . ($kabkota ? "AND h.kabkota = '$kabkota'" : "") . "
    GROUP BY h.kode, h.kabkota");
        $rekap_data = array();
        foreach ($query->result_array() as $row) {
            $row_array = array(
                'waktu_pelaporan' => $row['waktu_pelaporan'],
                'logo' => $row['logo'],
                'kode' => $row['kode'],
                'kabkota' => $row['kabkota'],
                'rekam_ktpel' => $row['rekam_ktpel'],
                'suket' => $row['suket'],
                'prr' => $row['prr'],
                'sisa_blanko' => $row['sisa_blanko'],
                'cetak_kia' => $row['cetak_kia'],
                'cetak_akta_17' => $row['cetak_akta_17'],
                'layanan_online' => $row['layanan_online'],
                'layanan_terintegritas' => $row['layanan_terintegritas'],
                'opdbhi_total' => $row['opdbhi_total'],
                'opdbhi_totalakses' => $row['opdbhi_totalakses'],
            );
            array_push($rekap_data, $row_array);
        }
        return $rekap_data;
    }
}
