-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2023 at 09:35 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `disdukcapil`
--

-- --------------------------------------------------------

--
-- Table structure for table `sys_config`
--

CREATE TABLE `sys_config` (
  `configID` tinyint(1) NOT NULL,
  `nama_instansi` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telepon` varchar(13) NOT NULL,
  `fax` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `website` varchar(50) NOT NULL,
  `logo` varchar(50) NOT NULL,
  `updated_user` int(11) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sys_config`
--

INSERT INTO `sys_config` (`configID`, `nama_instansi`, `alamat`, `telepon`, `fax`, `email`, `website`, `logo`, `updated_user`, `updated_date`) VALUES
(1, 'DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL PROVINSI SULAWESI TENGAH', 'Jl. Pramuka, Besusu Bar., Kec. Palu Tim., Kota Palu, Sulawesi Tengah 94111', '-', '-', 'testing@co.id', '-', 'Lambang_Kota_Palu.png', 15, '2023-06-28 18:00:53');

-- --------------------------------------------------------

--
-- Table structure for table `sys_datainovasi`
--

CREATE TABLE `sys_datainovasi` (
  `id` int(11) NOT NULL,
  `kode` varchar(100) NOT NULL,
  `kabkota` varchar(50) NOT NULL,
  `logo` text NOT NULL,
  `waktu_pelaporan` date DEFAULT NULL,
  `singkatan_inovasi` varchar(11) NOT NULL,
  `pjg_inovasi` varchar(32) NOT NULL,
  `thn_penerapan` varchar(11) NOT NULL,
  `tujuan_inovasi` text NOT NULL,
  `dampak` text NOT NULL,
  `kendala` text NOT NULL,
  `dokumen_inovasi` text DEFAULT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sys_datainovasi`
--

INSERT INTO `sys_datainovasi` (`id`, `kode`, `kabkota`, `logo`, `waktu_pelaporan`, `singkatan_inovasi`, `pjg_inovasi`, `thn_penerapan`, `tujuan_inovasi`, `dampak`, `kendala`, `dokumen_inovasi`, `keterangan`) VALUES
(1, '7206', 'Morowali', 'morowali.png', '2023-04-14', 'CUKUR', 'Cukup Umur Kami Rekam KTP anda', '2021', 'Jadi gini bang ini hanyalah sebuah contoh Jadi gini bang ini hanyalah sebuah contoh Jadi gini bang ini hanyalah sebuah contoh', 'Baik sekali', '1. Kendala\r\n2. Kendala\r\n3. kendala', NULL, 'Oke Siap'),
(9, '7206', 'Morowali', 'morowali.png', '2023-04-14', 'CUKUR', 'Cukup Umur Kami Rekam KTP anda', '2021', 'Jadi gini bang ini hanyalah sebuah contoh', 'Baik sekali', '1. kendala', 'dokumen_pks_64b64c72e5810.jpg', 'Oke Siap');

-- --------------------------------------------------------

--
-- Table structure for table `sys_devicektpel`
--

CREATE TABLE `sys_devicektpel` (
  `id` int(11) NOT NULL,
  `kode` varchar(100) NOT NULL,
  `kabkota` varchar(50) NOT NULL,
  `logo` text DEFAULT NULL,
  `waktu_pelaporan` date DEFAULT NULL,
  `monitor_baik` varchar(11) NOT NULL,
  `monitor_kurang` varchar(11) NOT NULL,
  `monitor_rusak` varchar(11) NOT NULL,
  `monitor_hilang` varchar(11) NOT NULL,
  `serveravis_baik` varchar(11) NOT NULL,
  `serveravis_kurang` varchar(11) NOT NULL,
  `serveravis_rusak` varchar(11) NOT NULL,
  `serveravis_hilang` varchar(11) NOT NULL,
  `desktoppc_baik` varchar(1) NOT NULL,
  `desktoppc_kurang` varchar(11) NOT NULL,
  `desktoppc_rusak` varchar(11) NOT NULL,
  `desktoppc_hilang` varchar(11) NOT NULL,
  `ups_baik` varchar(11) NOT NULL,
  `ups_kurang` varchar(11) NOT NULL,
  `ups_rusak` varchar(11) NOT NULL,
  `ups_hilang` varchar(11) NOT NULL,
  `fp_baik` varchar(11) NOT NULL,
  `fp_kurang` varchar(11) NOT NULL,
  `fp_rusak` varchar(11) NOT NULL,
  `fp_hilang` varchar(11) NOT NULL,
  `scr_baik` varchar(11) NOT NULL,
  `scr_kurang` varchar(11) NOT NULL,
  `scr_rusak` varchar(11) NOT NULL,
  `scr_hilang` varchar(11) NOT NULL,
  `sp_baik` varchar(11) NOT NULL,
  `sp_kurang` varchar(11) NOT NULL,
  `sp_rusak` varchar(11) NOT NULL,
  `sp_hilang` varchar(11) NOT NULL,
  `kameradigital_baik` varchar(11) NOT NULL,
  `kameradigital_kurang` varchar(11) NOT NULL,
  `kameradigital_rusak` varchar(11) NOT NULL,
  `kameradigital_hilang` varchar(11) NOT NULL,
  `irisscanner_baik` varchar(11) NOT NULL,
  `irisscanner_kurang` varchar(11) NOT NULL,
  `irisscanner_rusak` varchar(11) NOT NULL,
  `irisscanner_hilang` varchar(11) NOT NULL,
  `tripod_baik` varchar(11) NOT NULL,
  `tripod_kurang` varchar(11) NOT NULL,
  `tripod_rusak` varchar(11) NOT NULL,
  `tripod_hilang` varchar(11) NOT NULL,
  `sc_baik` varchar(11) NOT NULL,
  `sc_kurang` varchar(11) NOT NULL,
  `sc_rusak` varchar(11) NOT NULL,
  `sc_hilang` varchar(11) NOT NULL,
  `hardext_baik` varchar(11) NOT NULL,
  `hardext_kurang` varchar(11) NOT NULL,
  `hardext_rusak` varchar(11) NOT NULL,
  `hardext_hilang` varchar(11) NOT NULL,
  `digitalscanner_baik` varchar(11) NOT NULL,
  `digitalscanner_kurang` varchar(11) NOT NULL,
  `digitalscanner_rusak` varchar(11) NOT NULL,
  `digitalscanner_hilang` varchar(11) NOT NULL,
  `keyboard_baik` varchar(11) NOT NULL,
  `keyboard_kurang` varchar(11) NOT NULL,
  `keyboard_rusak` varchar(11) NOT NULL,
  `keyboard_hilang` varchar(11) NOT NULL,
  `jarkomdat_baik` varchar(11) NOT NULL,
  `jarkomdat_kurang` varchar(11) NOT NULL,
  `jarkomdat_rusak` varchar(11) NOT NULL,
  `jarkomdat_hilang` varchar(11) NOT NULL,
  `adaptorcam_baik` varchar(11) NOT NULL,
  `adaptorcam_kurang` varchar(11) NOT NULL,
  `adaptorcam_rusak` varchar(11) NOT NULL,
  `adaptorcam_hilang` varchar(11) NOT NULL,
  `cpuclient_baik` varchar(11) NOT NULL,
  `cpuclient_kurang` varchar(11) NOT NULL,
  `cpuclient_rusak` varchar(11) NOT NULL,
  `cpuclient_hilang` varchar(11) NOT NULL,
  `cpuserver_baik` varchar(11) NOT NULL,
  `cpuserver_kurang` varchar(11) NOT NULL,
  `cpuserver_rusak` varchar(11) NOT NULL,
  `cpuserver_hilang` varchar(11) NOT NULL,
  `antenam2m_baik` varchar(11) NOT NULL,
  `antenam2m_kurang` varchar(11) NOT NULL,
  `antenam2m_rusak` varchar(11) NOT NULL,
  `antenam2m_hilang` varchar(11) NOT NULL,
  `hardint_baik` varchar(11) NOT NULL,
  `hardint_kurang` varchar(11) NOT NULL,
  `hardint_rusak` varchar(11) NOT NULL,
  `hardint_hilang` varchar(11) NOT NULL,
  `keterangan` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sys_devicektpel`
--

INSERT INTO `sys_devicektpel` (`id`, `kode`, `kabkota`, `logo`, `waktu_pelaporan`, `monitor_baik`, `monitor_kurang`, `monitor_rusak`, `monitor_hilang`, `serveravis_baik`, `serveravis_kurang`, `serveravis_rusak`, `serveravis_hilang`, `desktoppc_baik`, `desktoppc_kurang`, `desktoppc_rusak`, `desktoppc_hilang`, `ups_baik`, `ups_kurang`, `ups_rusak`, `ups_hilang`, `fp_baik`, `fp_kurang`, `fp_rusak`, `fp_hilang`, `scr_baik`, `scr_kurang`, `scr_rusak`, `scr_hilang`, `sp_baik`, `sp_kurang`, `sp_rusak`, `sp_hilang`, `kameradigital_baik`, `kameradigital_kurang`, `kameradigital_rusak`, `kameradigital_hilang`, `irisscanner_baik`, `irisscanner_kurang`, `irisscanner_rusak`, `irisscanner_hilang`, `tripod_baik`, `tripod_kurang`, `tripod_rusak`, `tripod_hilang`, `sc_baik`, `sc_kurang`, `sc_rusak`, `sc_hilang`, `hardext_baik`, `hardext_kurang`, `hardext_rusak`, `hardext_hilang`, `digitalscanner_baik`, `digitalscanner_kurang`, `digitalscanner_rusak`, `digitalscanner_hilang`, `keyboard_baik`, `keyboard_kurang`, `keyboard_rusak`, `keyboard_hilang`, `jarkomdat_baik`, `jarkomdat_kurang`, `jarkomdat_rusak`, `jarkomdat_hilang`, `adaptorcam_baik`, `adaptorcam_kurang`, `adaptorcam_rusak`, `adaptorcam_hilang`, `cpuclient_baik`, `cpuclient_kurang`, `cpuclient_rusak`, `cpuclient_hilang`, `cpuserver_baik`, `cpuserver_kurang`, `cpuserver_rusak`, `cpuserver_hilang`, `antenam2m_baik`, `antenam2m_kurang`, `antenam2m_rusak`, `antenam2m_hilang`, `hardint_baik`, `hardint_kurang`, `hardint_rusak`, `hardint_hilang`, `keterangan`) VALUES
(4, '7206', 'Morowali', 'morowali.png', '2023-04-14', '45', '45', '34', '3', '53', '5434', '53', '534', '3', '53', '34', '35', '435', '43', '543', '543', '543', '543', '5435', '354', '35', '4354', '35', '435', '434', '34', '123', '43', '3', '42', '453', '35', '21', '12', '12', '2', '12', '12', '1', '12', '21', '2', '12', '12', '12', '12', '12', '1', '3121', '3', '12', '13', '12', '13', '12', '13', '121', '212', '12', '13', '12', '12', '12', '12', '12', '12', '12', '12', '12', '12', '1', '3', '12', '12', '13', '12', '13', '12', '13', '12', '2');

-- --------------------------------------------------------

--
-- Table structure for table `sys_devicepel`
--

CREATE TABLE `sys_devicepel` (
  `id` int(11) NOT NULL,
  `kode` varchar(100) NOT NULL,
  `waktu_pelaporan` date DEFAULT NULL,
  `kabkota` varchar(50) NOT NULL,
  `logo` text NOT NULL,
  `pcmonitor` varchar(11) NOT NULL,
  `pcallinone` varchar(11) NOT NULL,
  `laptop` varchar(11) NOT NULL,
  `server_siak` varchar(11) NOT NULL,
  `printer_kkakta` varchar(11) NOT NULL,
  `printer_kia` varchar(11) NOT NULL,
  `printer_ktpel` varchar(11) NOT NULL,
  `perangkatmobile_ktpel` varchar(11) NOT NULL,
  `perangkatmobile_siak` varchar(11) NOT NULL,
  `stabilizer_server` varchar(11) NOT NULL,
  `ups_server` varchar(11) NOT NULL,
  `ups_pc` varchar(11) NOT NULL,
  `kondisijaringan_vpn` varchar(11) NOT NULL,
  `kondisijaringan_m2m` varchar(11) NOT NULL,
  `jumlahoperator_siak` varchar(11) NOT NULL,
  `jumlahoperator_ktpel` varchar(11) NOT NULL,
  `keterangan` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sys_devicepel`
--

INSERT INTO `sys_devicepel` (`id`, `kode`, `waktu_pelaporan`, `kabkota`, `logo`, `pcmonitor`, `pcallinone`, `laptop`, `server_siak`, `printer_kkakta`, `printer_kia`, `printer_ktpel`, `perangkatmobile_ktpel`, `perangkatmobile_siak`, `stabilizer_server`, `ups_server`, `ups_pc`, `kondisijaringan_vpn`, `kondisijaringan_m2m`, `jumlahoperator_siak`, `jumlahoperator_ktpel`, `keterangan`) VALUES
(2, '7206', '2023-04-14', 'Morowali', 'morowali.png', '3', '2324', '234', '324', '423', '423', '423423', '432', '4233243', '243', '2', '432432232', '2323', '234', '23', '234', '234');

-- --------------------------------------------------------

--
-- Table structure for table `sys_harian`
--

CREATE TABLE `sys_harian` (
  `id` int(11) NOT NULL,
  `waktu_pelaporan` date DEFAULT NULL,
  `kode` varchar(255) NOT NULL,
  `kabkota` varchar(255) NOT NULL,
  `logo` text NOT NULL,
  `tgl_pelayanan` date NOT NULL,
  `nik_baru` varchar(255) NOT NULL,
  `cetak_kk` varchar(255) NOT NULL,
  `rekam_ktpel` varchar(255) NOT NULL,
  `prr` varchar(255) NOT NULL,
  `sfe` varchar(255) NOT NULL,
  `duplikat_record` varchar(255) NOT NULL,
  `suket_now` varchar(255) NOT NULL,
  `suket_before` varchar(255) NOT NULL,
  `cetak_ktpel_suket` varchar(255) NOT NULL,
  `cetak_ktpel_rhgp` varchar(255) NOT NULL,
  `cetak_akta_17` varchar(255) NOT NULL,
  `cetak_akta_17up` varchar(255) NOT NULL,
  `cetak_akta_kawin` varchar(255) NOT NULL,
  `cetak_akta_cerai` varchar(255) NOT NULL,
  `cetak_akta_kematian` varchar(255) NOT NULL,
  `skpwni_out` varchar(255) NOT NULL,
  `cetak_kia_5` varchar(255) NOT NULL,
  `cetak_kia_5up` varchar(255) NOT NULL,
  `sisa_blanko` varchar(255) NOT NULL,
  `cetak_ktpel_prr` varchar(255) NOT NULL,
  `skpwni_in` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sys_harian`
--

INSERT INTO `sys_harian` (`id`, `waktu_pelaporan`, `kode`, `kabkota`, `logo`, `tgl_pelayanan`, `nik_baru`, `cetak_kk`, `rekam_ktpel`, `prr`, `sfe`, `duplikat_record`, `suket_now`, `suket_before`, `cetak_ktpel_suket`, `cetak_ktpel_rhgp`, `cetak_akta_17`, `cetak_akta_17up`, `cetak_akta_kawin`, `cetak_akta_cerai`, `cetak_akta_kematian`, `skpwni_out`, `cetak_kia_5`, `cetak_kia_5up`, `sisa_blanko`, `cetak_ktpel_prr`, `skpwni_in`) VALUES
(18, '2023-03-14', '7206', 'Morowali', 'morowali.png', '2023-04-14', '23', '80', '44', '41', '0', '3', '3', '0', '0', '35', '20', '5', '0', '0', '2', '12', '3', '4', '461', '14', '12'),
(19, '2023-04-14', '7206', 'Morowali', 'morowali.png', '2023-04-14', '23', '80', '44', '41', '0', '3', '3', '0', '0', '35', '20', '5', '0', '0', '2', '12', '3', '4', '461', '14', '12'),
(20, '2023-04-14', '7206', 'Morowali', 'morowali.png', '2023-04-14', '23', '80', '44', '41', '0', '3', '3', '0', '0', '35', '20', '5', '0', '0', '2', '12', '3', '4', '461', '14', '12'),
(21, '2023-04-14', '7202', 'Poso', 'poso.png', '2023-04-14', '23', '80', '44', '41', '0', '3', '3', '0', '0', '35', '20', '5', '0', '0', '2', '12', '3', '4', '461', '14', '12'),
(22, '2023-05-14', '7206', 'Morowali', 'morowali.png', '2023-07-24', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(23, '2023-03-14', '7202', 'Poso', 'poso.png', '2023-04-14', '23', '80', '44', '41', '0', '3', '3', '0', '0', '35', '20', '5', '0', '0', '2', '12', '3', '4', '461', '14', '12');

-- --------------------------------------------------------

--
-- Table structure for table `sys_layanan`
--

CREATE TABLE `sys_layanan` (
  `id` int(11) NOT NULL,
  `kode` varchar(100) NOT NULL,
  `kabkota` varchar(50) NOT NULL,
  `logo` text NOT NULL,
  `layanan_online` text NOT NULL,
  `layanan_terintegritas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sys_layanan`
--

INSERT INTO `sys_layanan` (`id`, `kode`, `kabkota`, `logo`, `layanan_online`, `layanan_terintegritas`) VALUES
(1, '72', 'Sulawesi Tengah', 'sulteng.png', 'Sudah', 'Sudah'),
(4, '7201', 'Banggai', 'banggai.png', 'Sudah (WA)', 'Sudah'),
(5, '7202', 'Poso', 'poso.png', 'Sudah (WA)', 'Sudah'),
(7, '7203', 'Donggala', 'donggala.png', 'Sudah (WA)', 'Sudah'),
(8, '7204', 'Toli-Toli', 'tolitoli.png', 'Sudah (WA)', 'Sudah'),
(9, '7205', 'Buol', 'buol.png', 'Sudah (WA)', 'Sudah'),
(10, '7206', 'Morowali', 'morowali.png', 'Sudah (WA, SMS, SMS DUDUK, SIKAD DUDUK)', 'Sudah'),
(11, '7207', 'Banggai Kepulauan', 'banggaikep.png', 'Sudah (WA)', 'Sudah'),
(12, '7208', 'Parigi Moutong', 'parigimoutong.png', 'Sudah (WA)', 'Sudah'),
(13, '7209', 'Tojo Una-Una', 'tojounauna.png', 'Sudah (WA, TELEGRAM)', 'Sudah'),
(14, '7210', 'Sigi', 'sigi.png', 'Sudah (WA)', 'Sudah'),
(15, '72011', 'Banggai Laut', 'banggailaut.png', 'Sudah (WA)', 'Sudah'),
(16, '7212', 'Morowali Utara', 'morowaliutara.png', 'Sudah (WA)', 'Sudah'),
(17, '7271', 'Palu', 'donggala.png', 'Sudah (WA)', 'Sudah');

-- --------------------------------------------------------

--
-- Table structure for table `sys_pks`
--

CREATE TABLE `sys_pks` (
  `id` int(11) NOT NULL,
  `kode` varchar(100) NOT NULL,
  `kabkota` varchar(50) NOT NULL,
  `logo` text DEFAULT NULL,
  `waktu_pelaporan` date DEFAULT NULL,
  `opdbhi_total` varchar(25) NOT NULL,
  `opdbhi_totalakses` varchar(25) NOT NULL,
  `opdbhi_pks` text NOT NULL,
  `nomor_pks` text NOT NULL,
  `nomor_juknis` text NOT NULL,
  `opdbhi_akses` text NOT NULL,
  `dokumen_pks` text DEFAULT NULL,
  `dokumen_juknis` text DEFAULT NULL,
  `dokumen_pendukung` text DEFAULT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sys_pks`
--

INSERT INTO `sys_pks` (`id`, `kode`, `kabkota`, `logo`, `waktu_pelaporan`, `opdbhi_total`, `opdbhi_totalakses`, `opdbhi_pks`, `nomor_pks`, `nomor_juknis`, `opdbhi_akses`, `dokumen_pks`, `dokumen_juknis`, `dokumen_pendukung`, `keterangan`) VALUES
(28, '7206', 'Morowali', 'morowali.png', '2023-04-14', '1', '1', '1. p\n2. p', '1. p', '1. p', '1. p', 'dokumen_pks_64b6bad0a96f9.png', 'dokumen_juknis_64b6bad0a99e6.png', 'dokumen_pendukung_64b6bad0a9cdb.png', 'asdawd'),
(29, '7206', 'Morowali', 'morowali.png', '2023-04-14', '1', '1', '1. p\r\n2. p', '1. p', '1. p', '1. p', 'dokumen_pks_64b6bad0a96f9.png', 'dokumen_juknis_64b6bad0a99e6.png', 'dokumen_pendukung_64b6bad0a9cdb.png', 'asdawd');

-- --------------------------------------------------------

--
-- Table structure for table `sys_user`
--

CREATE TABLE `sys_user` (
  `id` int(11) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `kabkota` varchar(25) NOT NULL,
  `logo` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(300) NOT NULL,
  `akses` enum('adminprov','adminkabkota','monitoring') NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sys_user`
--

INSERT INTO `sys_user` (`id`, `kode`, `kabkota`, `logo`, `nama`, `username`, `password`, `akses`, `status`, `created_at`) VALUES
(1, '72', 'Sulawesi Tengah', 'sulteng.png', 'Admin Provinsi Sulawesi Tengah', 'admin', 'b759497cf50772b2452434b3983eebcc1772f1e03bbd76dc2a139da7', 'adminprov', 1, NULL),
(3, '7203', 'Donggala', 'donggala.png', 'Admin Kabupaten Donggala', 'donggala', 'b759497cf50772b2452434b3983eebcc1772f1e03bbd76dc2a139da7', 'adminkabkota', 1, NULL),
(4, '7201', 'Banggai', 'banggai.png', 'Admin Kabupaten Banggai', 'banggai', 'b759497cf50772b2452434b3983eebcc1772f1e03bbd76dc2a139da7', 'adminkabkota', 1, NULL),
(5, '7202', 'Poso', 'poso.png', 'Admin Kabupaten Poso', 'poso', 'b759497cf50772b2452434b3983eebcc1772f1e03bbd76dc2a139da7', 'adminkabkota', 1, NULL),
(6, '7204', 'Toli-Toli', 'tolitoli.png', 'Admin Kabupaten Toli-Toli', 'tolitoli', 'b759497cf50772b2452434b3983eebcc1772f1e03bbd76dc2a139da7', 'adminprov', 1, NULL),
(23, '72', 'MONITORING', 'sulteng.png', 'MONITORING', 'monitoring', '337fd6a8d433c6f9a4a2d8b367bbb1e8cfe40ed7b046a49acd041c8e', 'monitoring', 1, '2023-07-17 16:14:57'),
(24, '72', 'Provinsi', 'sulteng.png', 'KEPALA DINAS', 'kadis', '2b3a1e2650df629ea80d22476e38b00898f75cb9e2c152824b806c6f', 'monitoring', 1, '2023-07-17 16:38:08'),
(25, '7205', 'Buol', 'buol.png', 'Admin Kabupaten Buol', 'buol', 'b759497cf50772b2452434b3983eebcc1772f1e03bbd76dc2a139da7', 'adminkabkota', 1, '2023-07-18 07:58:38'),
(26, '7206', 'Morowali', 'morowali.png', 'Admin Kabupaten Morowali', 'morowali', 'b759497cf50772b2452434b3983eebcc1772f1e03bbd76dc2a139da7', 'adminkabkota', 1, '2023-07-18 07:59:25'),
(27, '7207', 'Banggai Kepulauan', 'banggaikep.png', 'Admin Kabupaten Banggai Kepulauan', 'banggaikepulauan', 'b759497cf50772b2452434b3983eebcc1772f1e03bbd76dc2a139da7', 'adminkabkota', 1, '2023-07-18 08:00:04'),
(28, '7208', 'Parigi Moutong', 'parigimoutong.png', 'Admin Kabupaten Parigi Moutong', 'parimo', 'b759497cf50772b2452434b3983eebcc1772f1e03bbd76dc2a139da7', 'adminkabkota', 1, '2023-07-18 08:00:49'),
(29, '7209', 'Tojo Una-Una', 'tojounauna.png', 'Admin Kabupaten Tojo Una-Una', 'tojouna', 'b759497cf50772b2452434b3983eebcc1772f1e03bbd76dc2a139da7', 'adminprov', 1, '2023-07-18 08:01:23'),
(30, '7210', 'Sigi', 'sigi.png', 'Admin Kabupaten Sigi', 'sigi', 'b759497cf50772b2452434b3983eebcc1772f1e03bbd76dc2a139da7', 'adminkabkota', 1, '2023-07-18 08:01:44'),
(31, '7211', 'Banggai Laut', 'banggailaut.png', 'Admin Kabupaten Banggai Laut', 'banggailaut', 'b759497cf50772b2452434b3983eebcc1772f1e03bbd76dc2a139da7', 'adminkabkota', 1, '2023-07-18 08:02:19'),
(32, '7212', 'Morowali Utara', 'morowaliutara.png', 'Admin Kabupaten Morowali Utara', 'morut', 'b759497cf50772b2452434b3983eebcc1772f1e03bbd76dc2a139da7', 'adminkabkota', 1, '2023-07-18 08:02:59'),
(33, '7271', 'Palu', 'palu.png', 'Admin Kota Palu', 'palu', 'b759497cf50772b2452434b3983eebcc1772f1e03bbd76dc2a139da7', 'adminkabkota', 1, '2023-07-18 08:03:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sys_config`
--
ALTER TABLE `sys_config`
  ADD PRIMARY KEY (`configID`);

--
-- Indexes for table `sys_datainovasi`
--
ALTER TABLE `sys_datainovasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_devicektpel`
--
ALTER TABLE `sys_devicektpel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_devicepel`
--
ALTER TABLE `sys_devicepel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_harian`
--
ALTER TABLE `sys_harian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_layanan`
--
ALTER TABLE `sys_layanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_pks`
--
ALTER TABLE `sys_pks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_user`
--
ALTER TABLE `sys_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sys_datainovasi`
--
ALTER TABLE `sys_datainovasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `sys_devicektpel`
--
ALTER TABLE `sys_devicektpel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sys_devicepel`
--
ALTER TABLE `sys_devicepel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sys_harian`
--
ALTER TABLE `sys_harian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `sys_layanan`
--
ALTER TABLE `sys_layanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `sys_pks`
--
ALTER TABLE `sys_pks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `sys_user`
--
ALTER TABLE `sys_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
