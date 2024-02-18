-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2024 at 10:00 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `raker_uisu-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `peserta_panitias`
--

CREATE TABLE `peserta_panitias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `golongan` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `no_rek` varchar(255) NOT NULL,
  `nama_bank` varchar(255) NOT NULL,
  `hadir_1` varchar(255) NOT NULL DEFAULT '',
  `waktu_1` datetime DEFAULT NULL,
  `hadir_2` varchar(255) NOT NULL DEFAULT '',
  `waktu_2` datetime DEFAULT NULL,
  `hadir_3` varchar(255) NOT NULL DEFAULT '',
  `waktu_3` datetime DEFAULT NULL,
  `status_kit` tinyint(1) DEFAULT NULL,
  `waktu_ambil` datetime DEFAULT NULL,
  `mengambil` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `signature` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `peserta_panitias`
--

INSERT INTO `peserta_panitias` (`id`, `nama`, `nip`, `golongan`, `status`, `jabatan`, `gender`, `no_rek`, `nama_bank`, `hadir_1`, `waktu_1`, `hadir_2`, `waktu_2`, `hadir_3`, `waktu_3`, `status_kit`, `waktu_ambil`, `mengambil`, `foto`, `signature`, `created_at`, `updated_at`) VALUES
(2, 'Dr. Abrar M. Dawud Faza, S.Fil., M.A.', '197911292009121003', 'IV', 'Panitia', 'Wakil Rektor Bidang Administrasi Umum, Perencanaan dan Keuangan UIN Sumatera Utara Medan', 'Laki-laki', '7199048443', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, 'fe34d5adc0ed5b2ae628.png', NULL, NULL, '2024-01-24 20:29:00'),
(3, 'H. Khairunas, S.H., M.H.', '196702081994031007', 'IV', 'Panitia', 'Kepala Biro Administrasi Umum, Perencanaan dan Keuangan UIN Sumatera Utara Medan', 'Laki-laki', '7200012008', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, 1, '2024-01-25 02:58:37', 'H. Khairunas, S.H., M.H.', NULL, NULL, NULL, '2024-01-24 12:58:37'),
(4, 'Drs. H. Ibnu Sa\'dan, M.Pd.', '196907121993031002', 'IV', 'Panitia', 'Kepala Biro Administrasi Akademik, Kemahasiswaan dan Kerjasama UIN Sumatera Utara Medan', 'Laki-laki', '7137795188', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Sardinan, S.Ag.', '197008172000031005', 'IV', 'Panitia', 'Koordinator pada Bagian Perencanaan dan Keuangan Biro Administrasi Umum, Perencanaan dan Keuangan UIN Sumatera Utara Medan', 'Laki-laki', '7199619394', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Irwansyah, S.E.', '196909161994031001', 'III', 'Panitia', ' Sub Koordinator Bagian Barang Milik Negara (BMN) Biro AUPK UIN Sumatera Utara Medan', 'Laki-laki', '7199617588', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, 1, '2024-01-25 03:07:04', 'Irwansyah, S.E.', NULL, NULL, NULL, '2024-01-24 13:07:04'),
(7, 'Darwis, S.E., M.Si.', '198108122009011013', 'III', 'Panitia', 'Sub koordinator Bagian Perencanaan Bagian Perencanaan Biro AUPK UIN Sumatera Utara Medan', 'Laki-laki', '7199051703', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'Yunni Salma, S.Ag., M.M.', '197306192003122003', 'IV', 'Panitia', 'Sub Koordinator Bagian Humas Biro AAKK UIN Sumatera Utara Medan', 'Perempuan', '7199618428', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Dra. Zakiah Lubis, M.A.', '196709102005012010', 'IV', 'Panitia', 'Subkoordinator pada Sub Bagian Tata Usaha Bagian Umum Biro Administrasi Umum, Perencanaan dan Keuangan UIN Sumatera Utara Medan', 'Perempuan', '7199050146', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'Nur Faznita Elmi, S.Akun.', '199710272022032001', 'III', 'Panitia', 'Perencana Ahli Pertama pada Biro Administrasi Umum, Perencanaan dan Keuangan UIN Sumatera Utara Medan', 'Laki-laki', '7199618525', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'Dwi Sandhi Romadhon, S.E.', '1100000016', 'III', 'Panitia', 'Staff Pada Bagian Perencanaan dan Keuangan Biro AUPK UINSU Medan', 'Laki-laki', '7199050968', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'Febrian Benika Putra, A.Md.', '1100000020', 'III', 'Panitia', 'Staff Pada Bagian Perencanaan dan Keuangan Biro AUPK UINSU Medan', 'Laki-laki', '7199621062', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'Prof. Dr. H. Azhari Akmal Tarigan, M.Ag.', '197212041998031002', 'IV', 'Peserta', 'Wakil Rektor Bidang Akademik', 'Laki-laki', '7199051932', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'Prof. Dr. Katimin, M.A.', '196507051993031003', 'IV', 'Peserta', 'Wakil Rektor Bidang Kemahasiswaan', 'Laki-laki', '7199048354', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'Prof. Dr. H. Muzakkir, M.Ag.', '196901111991031004', 'IV', 'Peserta', 'Wakil Rektor Bidang Kerja Sama dan Pengembangan Lembaga', 'Laki-laki', '7200173559', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'Prof. Dr. Pagar, M.Ag.', '195812311988031016', 'IV', 'Peserta', 'Senat', 'Laki-laki', '7199821649', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'Prof. Dr. H. Amiruddin Siahaan, M.Pd.', '196010061994031002', 'IV', 'Peserta', 'Sekretaris Senat', 'Laki-laki', '7199620066', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'Prof. Dr. Tien Rafida, M.Hum.', '197011101997032004', 'IV', 'Peserta', 'Dekan Fakultas Ilmu Tarbiyah dan Keguruan', 'Perempuan', '7199618169', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'Dr. Syafruddin Syam, M.Ag.', '197505312007101001', 'IV', 'Peserta', 'Dekan Fakultas Syari\'ah dan Hukum', 'Laki-laki', '7199323738', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'Dr. Maraimbang, M.A.', '197505312007101001', 'IV', 'Peserta', 'Dekan Fakultas Ushuluddin dan Studi Islam', 'Laki-laki', '7199047517', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'Dr. Hasan Sazali, M.Ag.', '197602222007011018', 'IV', 'Peserta', 'Dekan Fakultas Dakwah dan Komunikasi', 'Laki-laki', '7199617626', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'Dr. Muhammad Syukri Albani Nasution, S.H.I., M.A.', '198407062009121006', 'IV', 'Peserta', 'Dekan Fakultas Ekonomi dan Bisnis Islam', 'Laki-laki', '7199048238', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'Dr. Hj. Nursapia Harahap, M.A.', '197111041997032002', 'IV', 'Peserta', 'Dekan Fakultas Ilmu Sosial', 'Perempuan', '7199620929', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'Dr. Zulham, S.H.I., M.Hum.', '197703212009011008', 'IV', 'Peserta', 'Dekan Fakultas Sains dan Teknologi', 'Laki-laki', '7199774648', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'Prof. Dr. Mesiono, M.Pd.', '197107272007011031', 'IV', 'Peserta', 'Dekan Fakultas Kesehatan Masyarakat', 'Laki-laki', '7199047102', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 'Prof. Dr. H. Syukur Kholil, M.A.', '196402091989031003', 'IV', 'Peserta', 'Direktur Pascasarjana', 'Laki-laki', '7199048613', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 'Dr. Sugeng Wanto, M.Ag.', '197710242007101001', 'IV', 'Peserta', 'Wakil Dekan Bidang Akademik dan Kelembagaan Fakultas Syari\'ah dan Hukum', 'Laki-laki', '7199051401', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 'Dr. Fatimah Zahara, M.A.', '197302081999032001', 'IV', 'Peserta', 'Wakil Dekan Bidang Administrasi Umum, Perencanaan dan Keuangan Fakultas Syari?ah dan Hukum', 'Perempuan', '7199047048', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, 'Dr. Nurul Huda Perempuanasetiya, M.A.', '196709182000031002', 'IV', 'Peserta', 'Wakil Dekan Bidang Kemahasiswaan dan Kerjasama Fakultas Syari?ah dan Hukum', 'Laki-laki', '7199047706', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, 'Dr. Elly Warnisyah Harahap, M.Ag.', '196703202007012026', 'III', 'Peserta', 'Wakil Dekan Bidang Akademik dan Kelembagaan Fakultas Ushuluddin dan Studi Islam', 'Perempuan', '7199620775', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, 'Dr. Muhammad Nuh Siregar, S.Ag., M.A.', '197706112014111001', 'III', 'Peserta', 'Wakil Dekan Bidang Administrasi Umum, Perencanaan dan Keuangan Fakultas Ushuluddin dan Studi Islam', 'Laki-laki', '7199616824', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, 'Dr. Uqbatul Khoir Rambe, M.A.', '197011032014111001', 'III', 'Peserta', 'Wakil Dekan Bidang Kemahasiswaan dan Kerjasama Fakultas Ushuluddin dan Studi Islam', 'Laki-laki', '7199047927', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, 'Prof. Dr. Candra Wijaya, M.Pd.', '197404072007011037', 'IV', 'Peserta', 'Wakil Dekan Bidang Akademik dan Kelembagaan Fakultas Ilmu Tarbiyah dan Keguruan', 'Laki-laki', '7199772718', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(34, 'Dr. Muhammad Dalimunte, S.Ag., S.S. M.Hum.', '197103281999031003', 'IV', 'Peserta', 'Wakil Dekan Bidang Administrasi Umum, Perencanaan dan Keuangan Fakultas Ilmu Tarbiyah dan Keguruan', 'Laki-laki', '7199616735', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(35, 'Dr. Muhammad Rifa\'i, S.Ag., M.Pd.', '197005042014111002', 'III', 'Peserta', 'Wakil Dekan Bidang Kemahasiswaan dan Kerjasama Fakultas Ilmu Tarbiyah dan Keguruan', 'Laki-laki', '7199772238', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(36, 'Dr. Hasnun Jauhari Ritonga, S.Ag., M.A.', '197408072006041001', 'III', 'Peserta', 'Wakil Dekan Bidang Akademik dan Kelembagaan Fakultas Dakwah dan Komunikasi', 'Laki-laki', '7199047641', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37, 'Dr. Elfi Yanti Ritonga, M.A.', '198502252011012022', 'III', 'Peserta', 'Wakil Dekan Bidang Administrasi Umum, Perencanaan dan Keuangan Fakultas Dakwah dan Komunikasi', 'Perempuan', '7199051584', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(38, 'Dr. Anang Anas Azhar, M.A.', '197410042014111001', 'IV', 'Peserta', 'Wakil Dekan Bidang Kemahasiswaan dan Kerjasama Fakultas Dakwah dan Komunikasi', 'Laki-laki', '7199051916', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(39, 'Dr. Isnaini Harahap, M.Ag.', '197507202003122002', 'III', 'Peserta', 'Wakil Dekan Bidang Akademik dan Kelembagaan Fakultas Ekonomi dan Bisnis Islam', 'Perempuan', '7199771889', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(40, 'Dr. Fauzi Arif Lubis, M.A.', '198412242015031004', 'III', 'Peserta', 'Wakil Dekan Bidang Administrasi Umum, Perencanaan dan Keuangan Fakultas Ekonomi dan Bisnis Islam', 'Laki-laki', '7199773822', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(41, 'Dr. Marliyah, M.Ag.', '197601262003122003', 'III', 'Peserta', 'Wakil Dekan Bidang Kemahasiswaan dan Kerjasama Fakultas Ekonomi dan Bisnis Islam', 'Perempuan', '7199324742', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, 'Dra. Retno Sayekti , M.Lis.', '196912281995032002', 'IV', 'Peserta', 'Wakil Dekan Bidang Akademik dan Kelembagaan Fakultas Ilmu Sosial', 'Perempuan', '7199620902', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(43, 'Dr. Abdul Karim Batubara, S.Sos., M.A.', '197001122005011008', 'III', 'Peserta', 'Wakil Dekan Bidang Administrasi Umum, Perencanaan dan Keuangan Fakultas Ilmu Sosial', 'Laki-laki', '7199048818', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, 'M. Yoserizal Saragih, S.Ag., M.I.Kom.', '197411142000031001', 'IV', 'Peserta', 'Wakil Dekan Bidang Kemahasiswaan dan Kerjasama Fakultas Ilmu Sosial', 'Laki-laki', '7200800871', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(45, 'Dr. M. Ridwan, M.Ag.', '197608202003121004', 'III', 'Peserta', 'Wakil Dekan Bidang Akademik dan Kelembagaan Fakultas Sains dan Teknologi', 'Laki-laki', '7199047021', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(46, 'Dr. Nurhanifah, M.A.', '197507222006042001', 'III', 'Peserta', 'Wakil Dekan Bidang Administrasi Umum, Perencanaan dan Keuangan Fakultas Sains dan Teknologi', 'Perempuan', '7199618517', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(47, 'Prof. Dr. Achyar Zein, M.Ag.', '196702161997031001', 'IV', 'Peserta', 'Wakil Dekan Bidang Kemahasiswaan dan Kerjasama Fakultas Sains dan Teknologi', 'Laki-laki', '7199047285', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(48, 'Dr. Hasrat Efendi Samosir, M.A.', '197311122000031002', 'IV', 'Peserta', 'Wakil Dekan Bidang Akademik dan Kelembagaan Fakultas Kesehatan Masyarakat', 'Laki-laki', '7199621046', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(49, 'Dr. Asnil Aidah Ritonga, M.A.', '197010241996032002', 'IV', 'Peserta', 'Wakil Dekan Bidang Administrasi Umum, Perencanaan dan Keuangan Fakultas Kesehatan Masyarakat', 'Perempuan', '7199617502', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(50, 'Dr. Irwansyah, M.H.', '198010112014111002', 'III', 'Peserta', 'Wakil Dekan Bidang Kemahasiswaan dan Kerjasama Fakultas Kesehatan Masyarakat', 'Laki-laki', '7199322348', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(51, 'Prof. Dr. Nurussakinah Daulay, M.Psi', '198212092009122002', 'IV', 'Peserta', 'Wakil Direktur Pascasarjana', 'Perempuan', '7199820219', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(52, 'Dr. Muhammad Yafiz, M.Ag.', '197604232003121002', 'IV', 'Peserta', 'Ketua Lembaga Penjamin Mutu', 'Laki-laki', '7199290007', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(53, 'Dr. Nispul Khoiri, M.Ag.', '197204062007011047', 'IV', 'Peserta', 'Ketua Lembaga Penelitian dan Pengabdian Kepada Masyarakat;', 'Laki-laki', '7199617577', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(54, 'Dr. Chuzaimah Batubara, M.A.', '197007061996032003', 'IV', 'Peserta', 'Kepala Pusat Pengembangan Standar Mutu', 'Perempuan', '7199050995', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(55, 'Khairina Tambunan, M.E.I.', '198501122019032014', 'III', 'Peserta', 'Kepala Pusat Audit dan Pengendalian Mutu', 'Perempuan', '7199324122', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(56, 'Prof. Dr. Mustapa Khamal Rokan, S.H.I., M.H.', '197807252008011006', 'IV', 'Peserta', 'Kepala Pusat Pendampingan dan Pengembangan Mutu Mahasiswa', 'Laki-laki', '7199050348', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(57, 'Dr. Muhammad Irwan Padli Nasution, S.T., M.M.', '197502132006041003', 'III', 'Peserta', 'Kepala Pusat Penelitian dan Penerbitan', 'Laki-laki', '7199051018', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(58, 'Putra Apriadi Siregar, M.Kes.', '198904162019031014', 'III', 'Peserta', 'Kepala Pusat Pengabdian Kepada Masyarakat', 'Laki-laki', '7199321816', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(59, 'Fitri Hayati, S.E., M.A.', '198308302009122003', 'III', 'Peserta', 'Kepala Pusat Studi Gender dan Anak', 'Perempuan', '7199049326', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(60, 'Muhammad Ikhsan, S.T., M.Kom.', '198304152011011008', 'III', 'Peserta', 'Kepala Pusat Teknologi Informasi dan Pangkalan Data', 'Laki-laki', '7199049927', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(61, 'Dr. Watni Marpaung, S.H.I., M.A.', '198205152009121007', 'IV', 'Peserta', 'Kepala Pusat Pengembangan Bahasa', 'Laki-laki', '7199050359', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(62, 'Rahmat Daim Harahap, M.Ak.', '199009262018031001', 'III', 'Peserta', 'Kepala Pusat Pengembangan Bisnis', 'Laki-laki', '7199233712', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(63, 'Prof. Dr. Ansari, M.A.', '196606241994031001', 'IV', 'Peserta', 'Kepala Pusat Layanan Internasional', 'Laki-laki', '7199281504', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(64, 'Hildayati Raudah Hutasoit, S.Sos.', '197902172005012004', 'III', 'Peserta', 'Kepala Perpustakaan', 'Perempuan', '7199051886', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(65, 'Idris Siregar, M.Ag.', '199205062019031014', 'III', 'Peserta', 'Kepala Ma?had Al-Jami?ah', 'Laki-laki', '7199773741', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(66, 'Prof. Dr. Abdullah, M.Si.', '196212311989031047', 'IV', 'Peserta', 'Wakil Koordinator Kopertais Wilayah IX Sumatera Utara', 'Laki-laki', '7199616271', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(67, 'Dr. Syawaluddin Nasution, M.Ag.', '196912082007011037', 'III', 'Peserta', 'Sekretaris Kopertais Wilayah IX Sumatera Utara', 'Laki-laki', '7199616433', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(68, 'Fauziah Nasution, M.Psi.', '197509032005012004', 'III', 'Peserta', 'Sekretaris Lembaga Penjamin Mutu', 'Perempuan', '7199774397', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(69, 'Reni Ria Armayani Hasibuan, M.E.I.', '198809072019032011', 'III', 'Peserta', 'Sekretaris Lembaga Penelitian dan Pengabdian Kepada Masyarakat', 'Perempuan', '7199049458', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(70, 'Hotbin Hasugian, S.E., M.Si.', '197405062011011001', 'III', 'Peserta', 'Kepala Satuan Pengawas Internal', 'Laki-laki', '1033072291', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(71, 'Dr. Junaidi, S.Pd.I., M.Si.', '198101022009121009', 'III', 'Peserta', 'Sekretaris Satuan Pengawas Internal', 'Laki-laki', '7199049792', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(72, 'Yusman, SE', '196604041992031000', 'IV', 'Peserta', 'Koordinator Akademik dan Kemahasiswaan', 'Laki-laki', '7200141444', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(73, 'Subhan Dawawi, S. Pd.I., M.M.', '197305072000121001', 'IV', 'Peserta', 'Koordinator Kerjasama, Kelembagaan, Humas', 'Laki-laki', '7199616417', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(74, 'Lies Utami Efni Safitri, S.E., M.M.', '196712051994032001', 'IV', 'Peserta', 'Koordinator Organisasi dan Kepegawaian', 'Perempuan', '7199048516', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(75, 'Drs. Abdullah', '196708082003021001', 'IV', 'Peserta', 'Koordinator Umum', 'Laki-laki', '7199618002', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(76, 'Abdul Jousef Sitepu, S.Ag.', ' 196902272001121001', 'IV', 'Peserta', 'Koordinator FDK', 'Laki-laki', '7199772087', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(77, 'Dra. Fitri Fatimah, M.M.', '196912042000032001', 'IV', 'Peserta', 'Koordinator FIS', 'Perempuan', '7199621097', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78, 'Arginta Muhammad Nasution, S.Ag.', '196708081996031001', 'IV', 'Peserta', 'Koordinator FITK', 'Laki-laki', '7199619076', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(79, 'Hafni Hafsah, S.Ag., M.A.', '197203031998032003', 'IV', 'Peserta', 'Koordinator FST', 'Perempuan', '7199047088', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(80, 'Harmansyah, S.E., M.A', '196812111989031001', 'IV', 'Peserta', 'Koordinator FSH.', 'Laki-laki', '7199323808', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(81, 'Drs. Asy\'ari, M.M.', '196404201994031002', 'IV', 'Peserta', 'Koordinator FUSI', 'Laki-laki', '7200568359', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(82, 'Supiadi, S.E.', '196708141994021001', 'IV', 'Peserta', 'Subkoordinator Biro', 'Laki-laki', '7199051681', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(83, 'Ayatollah Muhammad Ramadhani, S.E.', '197908032005011006', 'IV', 'Peserta', 'Subkoordinator Biro', 'Laki-laki', '7199048206', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(84, 'Asriani, S.Ag.', '197603162003122001', 'III', 'Peserta', 'Subkoordinator Biro', 'Perempuan', '7199050545', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(85, 'Akhmad Khotib, S.Pd.I.', '197307262000031002', 'III', 'Peserta', 'Subkoordinator Biro', 'Laki-laki', '7200012668', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(86, 'Nining Nurbaity, S.Kom., M.M.', '197806262005012009', 'III', 'Peserta', 'Subkoordinator Biro', 'Perempuan', '7199616287', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(87, 'Asmahani Mukhtar Ghaffar, S.E., M.Si.', '198509182011012012  ', 'III', 'Peserta', 'Subkoordinator Biro', 'Perempuan', '7199049897', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(88, 'Illyas Gompar Harahap, S.Pd.I., M.Pd.', '197307192000031002', 'III', 'Peserta', 'Subkoordinator Biro', 'Laki-laki', '7199050383', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(89, 'Muammar Nasution, S.T.', '197605132002121003', 'III', 'Peserta', 'Subkoordinator Biro', 'Laki-laki', '7199618576', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(90, 'Hidayat, S.Ag.', '197111122009011002', 'III', 'Peserta', 'Subkoordinator Biro', 'Laki-laki', '7199050936', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(91, 'Ismail, S.Ag.', '196603121989011001', 'IV', 'Peserta', 'Subkoordinator Biro', 'Laki-laki', '7199051754', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(92, 'Hj. Khalida Jalil, S.H.', '196606261990032004', 'III', 'Peserta', 'Subkoordinator FSH', 'Perempuan', '7199051304', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(93, 'Mizanuddin, S.Ag., M.A.', ' 197102192000031003', 'III', 'Peserta', 'Subkoordinator FUSI', 'Laki-laki', '7199620651', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(94, 'Moraluddin Harahap, S.Ag.', '196804282002121002', 'III', 'Peserta', 'Subkoordinator FUSI', 'Laki-laki', '7199617537', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(95, 'Abdul Basid Lubis, S.Pd.I., M.Pd.', '197803102003121013', 'III', 'Peserta', 'Subkoordinator FITK', 'Laki-laki', '7199048637', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(96, 'Sya?kdun, S.Pd.I., M.AP.', '197412152009101002', 'IV', 'Peserta', 'Subkoordinator FITK', 'Laki-laki', '7199619432', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(97, 'Dr. Nurul Ilmi, S.Ag., M.H.', '197309102009102001', 'III', 'Peserta', 'Subkoordinator FITK', 'Perempuan', '7199050553', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(98, 'Drs. Joko Purwanto', '196801151997031001', 'IV', 'Peserta', 'Subkoordinator FDK', 'Laki-laki', '7199051762', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(99, 'Amin Al Jawi, S.E.I., M.A.', '198411112011011007', 'IV', 'Peserta', 'Subkoordinator FDK', 'Laki-laki', '7199048621', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(100, 'Cahaya Br Ginting, S.Pd.I.', '197402102002122001', 'III', 'Peserta', 'Subkoordinator FEBI', 'Perempuan', '7199774225', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(101, 'Nurhani, S.E., M.Si.', '197305242006042002', 'III', 'Peserta', 'Subkoordinator FEBI', 'Perempuan', '7199774217', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(102, 'Aman Syahban Siregar, M.H.', '196901021991031004', 'IV', 'Peserta', 'Subkoordinator FIS', 'Laki-laki', '7199047544', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(103, 'Khalid Ar, S.Ag, MM', '197008192002121002', 'III', 'Peserta', 'Subkoordinator FIS', 'Laki-laki', '7199774284', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(104, 'Ahmad Muaz, S.E., M.M.', '197504222000121001', 'IV', 'Peserta', 'Subkoordinator FST', 'Laki-laki', '7199047315', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(105, 'Tisna Handayani, S.Kom., M.M.', '198501252008012001', 'IV', 'Peserta', 'Subkoordinator FKM', 'Perempuan', '7199047471', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(106, 'Irfan, S.E., M.M.', '197008082003121001', 'IV', 'Peserta', 'Subkoordinator FKM', 'Laki-laki', '7199050294', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(107, 'Bambang Lesmono, S.E., M.E.', '198007072009011018', 'IV', 'Peserta', 'Subkoordinator PPs', 'Laki-laki', '7199048893', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(108, 'Rafnitul Hasanah Harahap, S.Ag., M.A.', '197410112001122001', 'IV', 'Peserta', 'Subkoordinator LPPM', 'Perempuan', '7233393783', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(109, 'Moladin Lubis, S.Pd.I.', '196704152001121003', 'III', 'Peserta', 'Subkoordinator LPM', 'Laki-laki', '7199300746', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(110, 'Mardi, S.E.', '197705222007011020', 'III', 'Peserta', 'Teknis', 'Laki-laki', '7199050979', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(111, 'Arif Rahman, S.E.', '198504132011011009', 'IV', 'Peserta', 'Teknis', 'Laki-laki', '7199617529', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(112, 'Hasnan Habib Harahap, S.E. ', '199905082022031002', 'III', 'Peserta', 'Teknis', 'Laki-laki', '7199617251', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(113, 'Indri Octa Miransyah, S.Pd.', '199710272023212015', 'III', 'Peserta', 'Teknis', 'Perempuan', '7199047487', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(114, 'Heprina Hera Rezeki, S.Akun.', '199510222023212025', 'III', 'Peserta', 'Teknis', 'Perempuan', '7200012628', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(115, 'Ahmad Rizal, S.Si., M.Kom.', '198101072005021003', 'III', 'Peserta', 'Teknis', 'Laki-laki', '7209498132', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(116, 'Ibnu Rusydi, S.Kom., M.Kom.', '198110052023211017', 'III', 'Peserta', 'Teknis', 'Laki-laki', '7199049938', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(117, 'Salman Hafiz, S.E. ', '1100000012', 'III', 'Peserta', 'Teknis', 'Laki-laki', '7199051808', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(118, 'Sri Cahyanti, S. Sos. I', '1100000054', 'III', 'Peserta', 'Teknis', 'Perempuan', '7199047749', 'Bank Syariah Indonesia (BSI)', '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `peserta_panitias`
--
ALTER TABLE `peserta_panitias`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `peserta_panitias`
--
ALTER TABLE `peserta_panitias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
