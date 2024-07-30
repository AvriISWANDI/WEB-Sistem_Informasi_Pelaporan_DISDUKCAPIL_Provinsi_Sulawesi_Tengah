<?php defined('BASEPATH') or exit('No direct script access allowed');

class Mlaporan extends CI_Model
{

    public function getktpel($start_date = null, $end_date = null, $kabkota = null)
    {
        $this->db->select('*, (monitor_baik + 
                               monitor_kurang + 
                               monitor_rusak + 
                               monitor_hilang) as jumlah_monitor, 
                              (serveravis_baik + 
                               serveravis_kurang + 
                               serveravis_rusak + 
                               serveravis_hilang) as jumlah_serveravis,
                              (desktoppc_baik + 
                               desktoppc_kurang + 
                               desktoppc_rusak + 
                               desktoppc_hilang) as jumlah_desktoppc,
                              (ups_baik + 
                               ups_kurang + 
                               ups_rusak + 
                               ups_hilang) as jumlah_ups,
                              (fp_baik +
                               fp_kurang +
                               fp_rusak +
                               fp_hilang) as jumlah_fp,
                              (scr_baik +
                               scr_kurang +
                               scr_rusak +
                               scr_hilang) as jumlah_scr,
                              (sp_baik +
                               sp_kurang +
                               sp_rusak +
                               sp_hilang) as jumlah_sp,
                              (kameradigital_baik +
                               kameradigital_kurang +
                               kameradigital_rusak +
                               kameradigital_hilang) as jumlah_kameradigital,
                              (irisscanner_baik +
                               irisscanner_kurang +
                               irisscanner_rusak +
                               irisscanner_hilang) as jumlah_irisscanner,
                              (tripod_baik +
                               tripod_kurang +
                               tripod_rusak +
                               tripod_hilang) as jumlah_tripod,
                              (sc_baik +
                               sc_kurang +
                               sc_rusak +
                               sc_hilang) as jumlah_sc,
                              (hardext_baik +
                               hardext_kurang +
                               hardext_rusak +
                               hardext_hilang) as jumlah_hardext,
                              (digitalscanner_baik +
                               digitalscanner_kurang +
                               digitalscanner_rusak +
                               digitalscanner_hilang) as jumlah_digitalscanner,
                              (keyboard_baik +
                               keyboard_kurang +
                               keyboard_rusak +
                               keyboard_hilang) as jumlah_keyboard,
                              (jarkomdat_baik +
                               jarkomdat_kurang +
                               jarkomdat_rusak +
                               jarkomdat_hilang) as jumlah_jarkomdat,
                              (adaptorcam_baik +
                               adaptorcam_kurang +
                               adaptorcam_rusak +
                               adaptorcam_hilang) as jumlah_adaptorcam,
                              (cpuclient_baik +
                               cpuclient_kurang +
                               cpuclient_rusak +
                               cpuclient_hilang) as jumlah_cpuclient,
                              (cpuserver_baik +
                               cpuserver_kurang +
                               cpuserver_rusak +
                               cpuserver_hilang) as jumlah_cpuserver,
                              (antenam2m_baik +
                               antenam2m_kurang +
                               antenam2m_rusak +
                               antenam2m_hilang) as jumlah_antenam2m,
                              (hardint_baik +
                               hardint_kurang +
                               hardint_rusak +
                               hardint_hilang) as jumlah_hardint,');

        $this->db->from('sys_devicektpel');
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

    public function addktpel($post)
    {
        $data = [
            'waktu_pelaporan' => date('Y-m-d'),
            'kode' => $post['kode_kabkota'],
            'kabkota' => $post['nama_kabkota'],
            'logo' => $post['logo'],

            //MONITOR
            'monitor_baik' => $post['monitor_baik'],
            'monitor_kurang' => $post['monitor_kurang'],
            'monitor_rusak' => $post['monitor_rusak'],
            'monitor_hilang' => $post['monitor_hilang'],

            //SERVER AVIS
            'serveravis_baik' => $post['serveravis_baik'],
            'serveravis_kurang' => $post['serveravis_kurang'],
            'serveravis_rusak' => $post['serveravis_rusak'],
            'serveravis_hilang' => $post['serveravis_hilang'],

            //DESKTOP PC
            'desktoppc_baik' => $post['desktoppc_baik'],
            'desktoppc_kurang' => $post['desktoppc_kurang'],
            'desktoppc_rusak' => $post['desktoppc_rusak'],
            'desktoppc_hilang' => $post['desktoppc_hilang'],

            //UPS 750VA/ 1000
            'ups_baik' => $post['ups_baik'],
            'ups_kurang' => $post['ups_kurang'],
            'ups_rusak' => $post['ups_rusak'],
            'ups_hilang' => $post['ups_hilang'],

            //FINGER PRINT SCANNER
            'fp_baik' => $post['fp_baik'],
            'fp_kurang' => $post['fp_kurang'],
            'fp_rusak' => $post['fp_rusak'],
            'fp_hilang' => $post['fp_hilang'],

            //SMART CARD READER
            'scr_baik' => $post['scr_baik'],
            'scr_kurang' => $post['scr_kurang'],
            'scr_rusak' => $post['scr_rusak'],
            'scr_hilang' => $post['scr_hilang'],

            //SIGNATURE PAD
            'sp_baik' => $post['sp_baik'],
            'sp_kurang' => $post['sp_kurang'],
            'sp_rusak' => $post['sp_rusak'],
            'sp_hilang' => $post['sp_hilang'],

            //KAMERA DIGITAL
            'kameradigital_baik' => $post['kameradigital_baik'],
            'kameradigital_kurang' => $post['kameradigital_kurang'],
            'kameradigital_rusak' => $post['kameradigital_rusak'],
            'kameradigital_hilang' => $post['kameradigital_hilang'],

            //IRIS SCANNER
            'irisscanner_baik' => $post['irisscanner_baik'],
            'irisscanner_kurang' => $post['irisscanner_kurang'],
            'irisscanner_rusak' => $post['irisscanner_rusak'],
            'irisscanner_hilang' => $post['irisscanner_hilang'],

            //TRIPOD
            'tripod_baik' => $post['tripod_baik'],
            'tripod_kurang' => $post['tripod_kurang'],
            'tripod_rusak' => $post['tripod_rusak'],
            'tripod_hilang' => $post['tripod_hilang'],

            //SWITCH & CABLING
            'sc_baik' => $post['sc_baik'],
            'sc_kurang' => $post['sc_kurang'],
            'sc_rusak' => $post['sc_rusak'],
            'sc_hilang' => $post['sc_hilang'],

            //HARDISK EXTERNAL
            'hardext_baik' => $post['hardext_baik'],
            'hardext_kurang' => $post['hardext_kurang'],
            'hardext_rusak' => $post['hardext_rusak'],
            'hardext_hilang' => $post['hardext_hilang'],

            //DIGITAL SCANNER
            'digitalscanner_baik' => $post['digitalscanner_baik'],
            'digitalscanner_kurang' => $post['digitalscanner_kurang'],
            'digitalscanner_rusak' => $post['digitalscanner_rusak'],
            'digitalscanner_hilang' => $post['digitalscanner_hilang'],

            //KEYBOARD
            'keyboard_baik' => $post['keyboard_baik'],
            'keyboard_kurang' => $post['keyboard_kurang'],
            'keyboard_rusak' => $post['keyboard_rusak'],
            'keyboard_hilang' => $post['keyboard_hilang'],

            //JARKOMDAT
            'jarkomdat_baik' => $post['jarkomdat_baik'],
            'jarkomdat_kurang' => $post['jarkomdat_kurang'],
            'jarkomdat_rusak' => $post['jarkomdat_rusak'],
            'jarkomdat_hilang' => $post['jarkomdat_hilang'],

            //ADAPTOR CAMERA
            'adaptorcam_baik' => $post['adaptorcam_baik'],
            'adaptorcam_kurang' => $post['adaptorcam_kurang'],
            'adaptorcam_rusak' => $post['adaptorcam_rusak'],
            'adaptorcam_hilang' => $post['adaptorcam_hilang'],

            //CPU CLIENT
            'cpuclient_baik' => $post['cpuclient_baik'],
            'cpuclient_kurang' => $post['cpuclient_kurang'],
            'cpuclient_rusak' => $post['cpuclient_rusak'],
            'cpuclient_hilang' => $post['cpuclient_hilang'],

            //CPU SERVER
            'cpuserver_baik' => $post['cpuserver_baik'],
            'cpuserver_kurang' => $post['cpuserver_kurang'],
            'cpuserver_rusak' => $post['cpuserver_rusak'],
            'cpuserver_hilang' => $post['cpuserver_hilang'],

            //ANTENA M2M
            'antenam2m_baik' => $post['antenam2m_baik'],
            'antenam2m_kurang' => $post['antenam2m_kurang'],
            'antenam2m_rusak' => $post['antenam2m_rusak'],
            'antenam2m_hilang' => $post['antenam2m_hilang'],

            //HARDISK INTERNAL
            'hardint_baik' => $post['hardint_baik'],
            'hardint_kurang' => $post['hardint_kurang'],
            'hardint_rusak' => $post['hardint_rusak'],
            'hardint_hilang' => $post['hardint_hilang'],

            'keterangan' => $post['keterangan'],
        ];
        $this->db->insert('sys_devicektpel', $data);
    }

    public function delktpel($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('sys_devicektpel');
    }

    public function editktpel($post)
    {
        $data = [
            'kode' => $post['kode_kabkota'],
            'kabkota' => $post['nama_kabkota'],

            //MONITOR
            'monitor_baik' => $post['monitor_baik'],
            'monitor_kurang' => $post['monitor_kurang'],
            'monitor_rusak' => $post['monitor_rusak'],
            'monitor_hilang' => $post['monitor_hilang'],

            //SERVER AVIS
            'serveravis_baik' => $post['serveravis_baik'],
            'serveravis_kurang' => $post['serveravis_kurang'],
            'serveravis_rusak' => $post['serveravis_rusak'],
            'serveravis_hilang' => $post['serveravis_hilang'],

            //DESKTOP PC
            'desktoppc_baik' => $post['desktoppc_baik'],
            'desktoppc_kurang' => $post['desktoppc_kurang'],
            'desktoppc_rusak' => $post['desktoppc_rusak'],
            'desktoppc_hilang' => $post['desktoppc_hilang'],

            //UPS 750VA/ 1000
            'ups_baik' => $post['ups_baik'],
            'ups_kurang' => $post['ups_kurang'],
            'ups_rusak' => $post['ups_rusak'],
            'ups_hilang' => $post['ups_hilang'],

            //FINGER PRINT SCANNER
            'fp_baik' => $post['fp_baik'],
            'fp_kurang' => $post['fp_kurang'],
            'fp_rusak' => $post['fp_rusak'],
            'fp_hilang' => $post['fp_hilang'],

            //SMART CARD READER
            'scr_baik' => $post['scr_baik'],
            'scr_kurang' => $post['scr_kurang'],
            'scr_rusak' => $post['scr_rusak'],
            'scr_hilang' => $post['scr_hilang'],

            //SIGNATURE PAD
            'sp_baik' => $post['sp_baik'],
            'sp_kurang' => $post['sp_kurang'],
            'sp_rusak' => $post['sp_rusak'],
            'sp_hilang' => $post['sp_hilang'],

            //KAMERA DIGITAL
            'kameradigital_baik' => $post['kameradigital_baik'],
            'kameradigital_kurang' => $post['kameradigital_kurang'],
            'kameradigital_rusak' => $post['kameradigital_rusak'],
            'kameradigital_hilang' => $post['kameradigital_hilang'],

            //IRIS SCANNER
            'irisscanner_baik' => $post['irisscanner_baik'],
            'irisscanner_kurang' => $post['irisscanner_kurang'],
            'irisscanner_rusak' => $post['irisscanner_rusak'],
            'irisscanner_hilang' => $post['irisscanner_hilang'],

            //TRIPOD
            'tripod_baik' => $post['tripod_baik'],
            'tripod_kurang' => $post['tripod_kurang'],
            'tripod_rusak' => $post['tripod_rusak'],
            'tripod_hilang' => $post['tripod_hilang'],

            //SWITCH & CABLING
            'sc_baik' => $post['sc_baik'],
            'sc_kurang' => $post['sc_kurang'],
            'sc_rusak' => $post['sc_rusak'],
            'sc_hilang' => $post['sc_hilang'],

            //HARDISK EXTERNAL
            'hardext_baik' => $post['hardext_baik'],
            'hardext_kurang' => $post['hardext_kurang'],
            'hardext_rusak' => $post['hardext_rusak'],
            'hardext_hilang' => $post['hardext_hilang'],

            //DIGITAL SCANNER
            'digitalscanner_baik' => $post['digitalscanner_baik'],
            'digitalscanner_kurang' => $post['digitalscanner_kurang'],
            'digitalscanner_rusak' => $post['digitalscanner_rusak'],
            'digitalscanner_hilang' => $post['digitalscanner_hilang'],

            //KEYBOARD
            'keyboard_baik' => $post['keyboard_baik'],
            'keyboard_kurang' => $post['keyboard_kurang'],
            'keyboard_rusak' => $post['keyboard_rusak'],
            'keyboard_hilang' => $post['keyboard_hilang'],

            //JARKOMDAT
            'jarkomdat_baik' => $post['jarkomdat_baik'],
            'jarkomdat_kurang' => $post['jarkomdat_kurang'],
            'jarkomdat_rusak' => $post['jarkomdat_rusak'],
            'jarkomdat_hilang' => $post['jarkomdat_hilang'],

            //ADAPTOR CAMERA
            'adaptorcam_baik' => $post['adaptorcam_baik'],
            'adaptorcam_kurang' => $post['adaptorcam_kurang'],
            'adaptorcam_rusak' => $post['adaptorcam_rusak'],
            'adaptorcam_hilang' => $post['adaptorcam_hilang'],

            //CPU CLIENT
            'cpuclient_baik' => $post['cpuclient_baik'],
            'cpuclient_kurang' => $post['cpuclient_kurang'],
            'cpuclient_rusak' => $post['cpuclient_rusak'],
            'cpuclient_hilang' => $post['cpuclient_hilang'],

            //CPU SERVER
            'cpuserver_baik' => $post['cpuserver_baik'],
            'cpuserver_kurang' => $post['cpuserver_kurang'],
            'cpuserver_rusak' => $post['cpuserver_rusak'],
            'cpuserver_hilang' => $post['cpuserver_hilang'],

            //ANTENA M2M
            'antenam2m_baik' => $post['antenam2m_baik'],
            'antenam2m_kurang' => $post['antenam2m_kurang'],
            'antenam2m_rusak' => $post['antenam2m_rusak'],
            'antenam2m_hilang' => $post['antenam2m_hilang'],

            //HARDISK INTERNAL
            'hardint_baik' => $post['hardint_baik'],
            'hardint_kurang' => $post['hardint_kurang'],
            'hardint_rusak' => $post['hardint_rusak'],
            'hardint_hilang' => $post['hardint_hilang'],

            'keterangan' => $post['keterangan'],
        ];
        $this->db->where('id', $post['id']);
        $this->db->update('sys_devicektpel', $data);
    }


    public function getpel($start_date = null, $end_date = null, $kabkota = null) 
    {
        $this->db->from('sys_devicepel');
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

    public function addpel($post)
    {
        $data = [
            'waktu_pelaporan' => date('Y-m-d'),
            'kode' => $post['kode_kabkota'],
            'kabkota' => $post['nama_kabkota'],
            'logo' => $post['logo'],

            //PC
            'pcmonitor' => $post['pcmonitor'],
            'pcallinone' => $post['pcallinone'],

            //LAPTOP
            'laptop' => $post['laptop'],

            //SERVER SIAK
            'server_siak' => $post['server_siak'],

            //PRINTER
            'printer_kkakta' => $post['printer_kkakta'],
            'printer_kia' => $post['printer_kia'],
            'printer_ktpel' => $post['printer_ktpel'],

            //PERANGKAT MOBILE
            'perangkatmobile_ktpel' => $post['perangkatmobile_ktpel'],
            'perangkatmobile_siak' => $post['perangkatmobile_siak'],

            //STABILIZER SERVER
            'stabilizer_server' => $post['stabilizer_server'],

            //UPS
            'ups_server' => $post['ups_server'],
            'ups_pc' => $post['ups_pc'],

            //KONDISI JARINGAN
            'kondisijaringan_vpn' => $post['kondisijaringan_vpn'],
            'kondisijaringan_m2m' => $post['kondisijaringan_m2m'],
            
            //JUMLAH OPERATOR
            'jumlahoperator_siak' => $post['jumlahoperator_siak'],
            'jumlahoperator_ktpel' => $post['jumlahoperator_ktpel'],

            'keterangan' => $post['keterangan'],
        ];
        $this->db->insert('sys_devicepel', $data);
    }

    public function editpel($post)
    {
        $data = [
            'kode' => $post['kode_kabkota'],
            'kabkota' => $post['nama_kabkota'],

            //PC
            'pcmonitor' => $post['pcmonitor'],
            'pcallinone' => $post['pcallinone'],

            //LAPTOP
            'laptop' => $post['laptop'],

            //SERVER SIAK
            'server_siak' => $post['server_siak'],

            //PRINTER
            'printer_kkakta' => $post['printer_kkakta'],
            'printer_kia' => $post['printer_kia'],
            'printer_ktpel' => $post['printer_ktpel'],

            //PERANGKAT MOBILE
            'perangkatmobile_ktpel' => $post['perangkatmobile_ktpel'],
            'perangkatmobile_siak' => $post['perangkatmobile_siak'],

            //STABILIZER SERVER
            'stabilizer_server' => $post['stabilizer_server'],

            //UPS
            'ups_server' => $post['ups_server'],
            'ups_pc' => $post['ups_pc'],

            //KONDISI JARINGAN
            'kondisijaringan_vpn' => $post['kondisijaringan_vpn'],
            'kondisijaringan_m2m' => $post['kondisijaringan_m2m'],
            
            //JUMLAH OPERATOR
            'jumlahoperator_siak' => $post['jumlahoperator_siak'],
            'jumlahoperator_ktpel' => $post['jumlahoperator_ktpel'],

            'keterangan' => $post['keterangan'],
        ];
        $this->db->where('id', $post['id']);
        $this->db->update('sys_devicepel', $data);
    }

    public function delpel($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('sys_devicepel');
    }
}
