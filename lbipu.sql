-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Okt 2022 pada 08.08
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lbipu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'lbipu', 'lbipuums'),
(2, 'lbipuumsadmin', 'kosongdelapan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `akademik`
--

CREATE TABLE `akademik` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akademik`
--

INSERT INTO `akademik` (`id`, `judul`, `detail`) VALUES
(1, 'Kelas Regular', ''),
(2, 'Kelas Internasional', ''),
(3, 'MKU (Mata Kuliah Umum)', '<p><h2>Dasar\r\n</h2><p>Dalam menjalankan tugas dan fungsi-fungsinya, LC-UMS dibatasi dan dilandasi berdasarkan peraturan sebagai berikut :\r\n</p><ol><li>\r\nSK Rektor NO 088/II/2009 tentang kurikukum baru MKU BHS Inggris\r\n</li><li>Sasaran Mutu UMS (12 Agustus 2009, NO 3): Lulusan memiliki kompetensi Bahasa Inggris ≥ 450, diukur dengan menggunakan standardized Test TOEIC.\r\n</li><li>Rapat Pimpinan Tanggal 29-30 Agustus 2010 memutuskan standard kelulusan TOEIC diturunkan menjadi 400. Mahasiswa yang belum mencapai nilai passing grade 400 diberi kesempatan Remidi I (terjadual, terdaftar, terstruktur).\r\n</li></ol><h3>\r\nKurikulum / Materi</h3><table class=\"table table-bordered\"><tbody><tr><td>No</td><td>Nama Mata Kuliah</td><td>SMT</td><td>SKS</td></tr><tr><td>1</td><td><span style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px;\">Bahasa Inggris I(EAP = English for Academic Purposes )</span><br></td><td>I</td><td>1 atau 2</td></tr></tbody></table><span style=\"background-color: var(--bs-card-bg); color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 0.875em; font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Note: Tidak diperkenankan mencantumkan SKS 0 (SK Rektor NO 088/II/2009)</span></p><p><span style=\"background-color: var(--bs-card-bg); color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 0.875em; font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\"><br></span></p><h2 style=\"font-size: 24px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">Evaluasi</h2><table class=\"table table-bordered\"><tbody><tr><td><span style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; font-weight: 700;\">SMT</span><br></td><td><span style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; font-weight: 700;\">Ujian Tengah SMT</span><br></td><td><span style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; font-weight: 700;\">Tugas Mandiri</span><br></td><td><span style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; font-weight: 700;\">Ujian Akhir SMT</span><br></td></tr><tr><td><span style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px;\">SMT 1 EAP</span><br></td><td><span style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px;\">Reading/StructureWaktu: 90 menitJumlah item: 100 nilai masuk transkrip</span><br></td><td><span style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px;\">Reading/Structuremandiri oleh dosen nilai masuk transkrip</span><br></td><td><span style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px;\">Reading/StructureWaktu: 90 menitJmlah item soal: 100 nilai masuk transkrip</span><br></td></tr></tbody></table><p style=\"font-size: 24px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\"><br></p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `id` int(11) NOT NULL,
  `nama_dosen` varchar(50) DEFAULT NULL,
  `mata_kuliah` varchar(50) DEFAULT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`id`, `nama_dosen`, `mata_kuliah`, `foto`) VALUES
(20, 'Ana Mustifa Yeri, S.Pd., M.Pd.', 'Bahasa Indonesia', ''),
(21, 'Andrea Luhur Prakosa, SH., MH.', 'Bahasa Indonesia', ''),
(22, 'Ardiani Kusumaningrum, M.Pd.', 'Bahasa Indonesia', ''),
(23, 'Ika Martanti, S.Pd., M.Pd.', 'Bahasa Indonesia', ''),
(24, 'Lusiana Puji Astuti, S.Pd., M.Pd.', 'Bahasa Indonesia', ''),
(25, 'Najma Thalia, S.Pd., M.Hum', 'Bahasa Indonesia', ''),
(26, 'Nuraini Fatimah, S.Pd., M.Pd.', 'Bahasa Indonesia', ''),
(27, 'Risma Nur Rahmawati, MA.', 'Bahasa Indonesia', ''),
(28, 'Sri Lestari, S.Pd., M.Pd.', 'Bahasa Indonesia', ''),
(29, 'Sri Waljinah, S.Pd., M.Pd.', 'Bahasa Indonesia', ''),
(30, 'Agus Prasetyo, M.Pd.', 'Pancasila', ''),
(31, 'Ahmad Wafi Fauzi, M.Han.', 'Pancasila', ''),
(32, 'Bambang Sukoco, M.H.', 'Pancasila', ''),
(33, 'Danang Tunjung L, M.Pd.', 'Pancasila', ''),
(34, 'Dr. Achmad Muhibbin, M.Si.', 'Pancasila', ''),
(35, 'Dr. Eko Supriyanto, M.H.', 'Pancasila', ''),
(36, 'Dr. Syamsul Hidayat, M.Ag.', 'Pancasila', ''),
(37, 'Dra. Sri Arfiah, M.Pd.', 'Pancasila', ''),
(38, 'Dra. Sundari, M.H.', 'Pancasila', ''),
(39, 'Drs. Achmad Muthali’in, M.Si.', 'Pancasila', ''),
(40, 'Drs. Amsori, M.Pd.', 'Pancasila', ''),
(41, 'Drs. Ilham Sunaryo, M.Pd.', 'Pancasila', ''),
(42, 'Drs. JokoDrs. Haryono Yuwono, M.Pd.', 'Pancasila', ''),
(43, 'Drs. Munawar Cholil, M.Si.', 'Pancasila', ''),
(44, 'Drs. Sutan Syahrir Z., M.H.', 'Pancasila', ''),
(45, 'Drs. Suwarno, M.Pd.', 'Pancasila', ''),
(46, 'Drs. Suyahman, M.Pd.', 'Pancasila', ''),
(47, 'Drs. Yuli Priyana, M.Si.', 'Pancasila', ''),
(48, 'Drs. Yulianto Bambang S., M.Si.', 'Pancasila', ''),
(49, 'Eko Prasetyo, M.Pd.', 'Pancasila', ''),
(50, 'Ir. Taryono, M.Si.', 'Pancasila', ''),
(51, 'Marisa Kurnianingsih, M.H.', 'Pancasila', ''),
(52, 'Patmisari, M.Pd.', 'Pancasila', ''),
(53, 'Prof. Dr. Bambang S., M.Pd.', 'Pancasila', ''),
(54, 'Singgih, S.H., M.Kn.', 'Pancasila', ''),
(55, 'Sutarso, M.Si.', 'Pancasila', ''),
(56, 'Umi Raestyawati, M.Si.', 'Pancasila', ''),
(57, 'Wibowo Heru P., M.Pd.', 'Pancasila', ''),
(112, 'A. Shofian Syahrullah, M.Pd', 'Bahasa Inggris', ''),
(113, 'Abdullah Taufiq Noviarto, S.Pd., M.Pd', 'Bahasa Inggris', ''),
(114, 'Ahmad Fauzi Jamaluddin., M.Pd', 'Bahasa Inggris', ''),
(115, 'Alvy Nayrina Pribadi, M.Pd.', 'Bahasa Inggris', ''),
(116, 'Alvian Ika Fiki Susanto, M.Pd', 'Bahasa Inggris', ''),
(117, 'Alwiyah, S.Pd., M.Pd', 'Bahasa Inggris', ''),
(118, 'Anindya Nurul Kusuma Dewi, M.Pd', 'Bahasa Inggris', ''),
(119, 'Ardika Rizki Prihantoro, M.Pd', 'Bahasa Inggris', ''),
(120, 'Beta Setyowati, S.Pd., M.Hum', 'Bahasa Inggris', ''),
(121, 'Dian Kusuma Suci, M.Pd', 'Bahasa Inggris', ''),
(122, 'Dr. Sapto Mei Budiyanto, M.Pd', 'Bahasa Inggris', ''),
(123, 'Drs. Zainal Arifin, M.Hum', 'Bahasa Inggris', ''),
(124, 'Eko Suwignyo, S.Pd., M.Pd', 'Bahasa Inggris', ''),
(125, 'Fitri Endah Pratiwi, M.Pd', 'Bahasa Inggris', ''),
(126, 'Furqon Edi Wibowo, S.Pd., M.Pd', 'Bahasa Inggris', ''),
(127, 'Hanif Maghfur Darussalam, S.Pd.,', 'Bahasa Inggris', ''),
(128, 'Hesti Rahmaningsih, S.S., M.Pd', 'Bahasa Inggris', ''),
(129, 'Honest Ummi Kaltsum, S.S., M.Hum', 'Bahasa Inggris', ''),
(130, 'Ipung Sri Purwanti Hery, Ph.D', 'Bahasa Inggris', ''),
(131, 'Mohammad Ali Yafi, S.Pd., M.Pd', 'Bahasa Inggris', ''),
(132, 'Muhammad Fauzan Aminudin, M.Pd', 'Bahasa Inggris', ''),
(133, 'Nanak Kristanto, S.Pd., M.Pd', 'Bahasa Inggris', ''),
(134, 'Rhizki Amelia, M.Pd', 'Bahasa Inggris', ''),
(135, 'Romadhani Wulandari, M.Pd.', 'Bahasa Inggris', ''),
(136, 'Rustania Farmawati, M.Pd.', 'Bahasa Inggris', ''),
(137, 'Sri Slamet, S.Pd., M.Pd', 'Bahasa Inggris', ''),
(138, 'Syilvia Mustanuri Jannah, M.Pd.', 'Bahasa Inggris', ''),
(139, 'Wildan Mahir M., M.A', 'Bahasa Inggris', ''),
(140, 'Yanti Haryanti, S.Pd., M.A', 'Bahasa Inggris', ''),
(141, 'Yanuar Ihtiyarso, S.S., M.Ikom', 'Bahasa Inggris', ''),
(142, 'Yoga Purnama, M.Pd', 'Bahasa Inggris', ''),
(143, 'Desy Nur Fakhomah, M.Pd.', 'Bahasa Inggris', ''),
(144, 'Octria Tirafiah, M.Pd.', 'Bahasa Inggris', ''),
(145, 'Ambar Jati, M.Pd.', 'Bahasa Inggris', ''),
(146, 'Aprilia Nur Cahya Utami, M.Pd.', 'Bahasa Inggris', ''),
(147, 'Desi Antri Astuti, M.Pd.', 'Bahasa Inggris', ''),
(148, 'Lusiana Prihastiwi, M.Pd.', 'Bahasa Inggris', ''),
(149, 'Denty Marga Sukma, M.Pd.', 'Bahasa Inggris', ''),
(150, 'A. Shofian Syahrullah, M.Pd', 'Bahasa Inggris', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kalender`
--

CREATE TABLE `kalender` (
  `id` int(10) NOT NULL,
  `tahun` varchar(100) NOT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kalender`
--

INSERT INTO `kalender` (`id`, `tahun`, `foto`) VALUES
(1, '2022/2023', 'KALENDERAKADEMIK.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` int(11) NOT NULL,
  `judul` varchar(500) NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `judul`, `tanggal`, `gambar`, `detail`) VALUES
(5, 'Kegiatan ETP', '2019-04-09', 'etp.jpeg', '<h2><span style=\"font-size: 12px; background-color: rgb(255, 255, 255);\">Kegiatan ETP Tahun 2019/2020</span></h2><p><span style=\"font-size: 12px; background-color: rgb(255, 255, 255);\">#ETP1 #UNIT-5 #GRUP-L #FARMASI #JUM’AT, 11102019 #TUTOR ANDREA Y. R.</span><br></p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lowongan`
--

CREATE TABLE `lowongan` (
  `id` int(11) NOT NULL,
  `jenis_lowongan` varchar(100) NOT NULL,
  `detail` text NOT NULL,
  `files` varchar(100) NOT NULL,
  `status_lowongan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `lowongan`
--

INSERT INTO `lowongan` (`id`, `jenis_lowongan`, `detail`, `files`, `status_lowongan`) VALUES
(1, 'Dosen Tidak Tetap', '<p>ddddddddddddddddddddddd dddddddddddddddddddddd ddddddddddddd</p>', 'KALENDERAKADEMIK.png', 'Tidak Aktif'),
(2, 'Pendamping Tutor', '', 'pendamping.pdf', 'Tidak Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` int(10) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `updateby` varchar(50) DEFAULT 'LBIPU',
  `files` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `judul`, `gambar`, `isi`, `tanggal`, `updateby`, `files`) VALUES
(7, 'Pengumuman Daftar Peserta Tes Toep Mandiri 12 September 2022', 'result.jpg', '<p><b>Ini Adalah hasil tes TOEP Tahun 2022</b></p>', '2022-09-12', 'LBIPU', 'KALENDERAKADEMIK.pdf'),
(8, 'Pengumuman Hasil Tes TOEP Mandiri 5 September 2022', 'result.jpg', '<p>Hasil Tes Toep 5 September 2022</p>', '2022-09-05', 'LBIPU', 'KALENDERAKADEMIK.pdf'),
(14, 'Pengumuman Daftar Peserta Tes Toep Mandiri 5 September 2022', 'result.jpg', '<h3 class=\"elementor-post__title\" style=\"border: 0px; font-size: 18px; font-weight: var( --e-global-typography-primary-font-weight ); margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline; clear: both; color: var( --e-global-color-secondary ); line-height: var( --e-global-typography-primary-line-height ); font-family: var( --e-global-typography-primary-font-family ), Sans-serif;\"><a href=\"https://lbipu.ums.ac.id/pengumuman-daftar-peserta-tes-toep-mandiri-5-september-2022/\" style=\"text-decoration: none; color: var( --e-global-color-secondary ); transition: all 0.31s ease 0s; box-shadow: none; font-family: var( --e-global-typography-primary-font-family ), Sans-serif; font-weight: var( --e-global-typography-primary-font-weight ); line-height: var( --e-global-typography-primary-line-height );\">Pengumuman Daftar Peserta Tes Toep Mandiri 5 September 2022</a></h3>', '2022-09-05', 'LBIPU', 'KALENDERAKADEMIK.pdf'),
(15, 'Pengumuman Hasil Tes TOEP Mandiri 1 September 2022', 'result.jpg', '<h3 class=\"elementor-post__title\" style=\"border: 0px; font-size: 18px; font-weight: var( --e-global-typography-primary-font-weight ); margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline; clear: both; color: var( --e-global-color-secondary ); line-height: var( --e-global-typography-primary-line-height ); font-family: var( --e-global-typography-primary-font-family ), Sans-serif;\"><a href=\"https://lbipu.ums.ac.id/pengumuman-hasil-tes-toep-mandiri-1-september-2022/\" style=\"text-decoration: none; color: var( --e-global-color-secondary ); transition: all 0.31s ease 0s; box-shadow: none; font-family: var( --e-global-typography-primary-font-family ), Sans-serif; font-weight: var( --e-global-typography-primary-font-weight ); line-height: var( --e-global-typography-primary-line-height );\">Pengumuman Hasil Tes TOEP Mandiri 1 September 2022</a></h3>', '2022-09-01', 'LBIPU', 'result.jpg'),
(16, 'Pengumuman Hasil Tes TOEP Mandiri 29 Agustus 2022', 'result.jpg', '<h3 class=\"elementor-post__title\" style=\"border: 0px; font-size: 18px; font-weight: var( --e-global-typography-primary-font-weight ); margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline; clear: both; color: var( --e-global-color-secondary ); line-height: var( --e-global-typography-primary-line-height ); font-family: var( --e-global-typography-primary-font-family ), Sans-serif;\"><a href=\"https://lbipu.ums.ac.id/pengumuman-hasil-tes-toep-mandiri-29-agustus-2022/\" style=\"text-decoration: none; color: var( --e-global-color-secondary ); transition: all 0.31s ease 0s; box-shadow: none; font-family: var( --e-global-typography-primary-font-family ), Sans-serif; font-weight: var( --e-global-typography-primary-font-weight ); line-height: var( --e-global-typography-primary-line-height );\">Pengumuman Hasil Tes TOEP Mandiri 29 Agustus 2022</a></h3>', '2022-08-29', 'LBIPU', 'KALENDERAKADEMIK.pdf'),
(17, ' Pengumuman Hasil Tes TOEP Mandiri 27 Agustus 2022', 'result.jpg', '<p><br></p><p><span style=\"color: rgb(58, 58, 58); font-family: Montserrat, sans-serif; font-size: 30px;\">Pengumuman Hasil Tes TOEP Mandiri 27 Agustus 2022</span><br></p>', '2022-08-27', 'LBIPU', 'KALENDERAKADEMIK.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pimpinanstaff`
--

CREATE TABLE `pimpinanstaff` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pimpinanstaff`
--

INSERT INTO `pimpinanstaff` (`id`, `nama`, `jabatan`, `foto`) VALUES
(1, 'Dr. M. Thoyibi, M.S', 'Kepala LBIPU', ''),
(2, 'Dr. Dwi Haryanti, M.Hum', 'Kabid Pengembangan Pembelajaran Bahasa', ''),
(3, 'Dr. Abdillah Nugroho, M.Hum', 'Kabid Pengembangan Pelayanan Bahasa', ''),
(4, 'Dr. Yakub Nasucha, M.Hum', 'Kabid Pengembangan MKU	', ''),
(5, 'Winarni, S.E', 'KTU dan Bendahara', ''),
(6, 'Udin Suyadi', 'Staff', ''),
(7, 'Rochim Zam Putri, A.Md', 'Staff', ''),
(8, 'Meila Fitriana, S.Pd', 'Staff', ''),
(9, 'Achmad Zainal Maghfur, S.Kom', 'Staff', ''),
(10, 'Agus Suyanto', 'Staff', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `slides`
--

CREATE TABLE `slides` (
  `id` int(11) NOT NULL,
  `link` varchar(500) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `detail` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `slides`
--

INSERT INTO `slides` (`id`, `link`, `judul`, `detail`) VALUES
(1, 'https://www.youtube.com/embed/CBiv3aHsa68', 'CARE', 'Cepat-Amanah-Ramah-Empatik'),
(2, 'https://www.youtube.com/embed/T9litYUkBcI', 'CARE', 'Cepat-Amanah-Ramah-Empatik'),
(3, 'https://www.youtube.com/embed/EZvYgzsQyUQ', 'CARE', 'Cepat-Amanah-Ramah-Empatik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tentang`
--

CREATE TABLE `tentang` (
  `profil` text NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `tujuan` text NOT NULL,
  `sejarah` text NOT NULL,
  `strukturOrganisasi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tentang`
--

INSERT INTO `tentang` (`profil`, `visi`, `misi`, `tujuan`, `sejarah`, `strukturOrganisasi`) VALUES
('Lembaga Pengembangan Ilmu Dasar dan Bahasa (LPIDB) merupakan salah satu unit kerja di Universitas Muhammadiyah Surakarta, yang didirikan berdasarkan SK Rektor Nomor 078/IV/2013 tentang penataan pejabat struktural biro, lembaga, dan unit non-fakultas, tanggal 20 April 2013. LPIDB merupakan penggabungan dari dua lembaga sebelumnya, yaitu Lembaga Pengembangan Ilmu-ilmu Dasar (LPID) dan Language Center (LC). LPID yang didirikan pada 2004 semula bertugas mengelola penyelenggaraan perkuliahan mata kuliah umum dan Al-Islam serta Kemuhammadiyahan; sedangkan LC yang didirikan pada 1993 semula bertugas mengelola penyelenggaran perkuliahan Bahasa Inggris sebagai bagian dari mata kuliah umum. Berdasarkan perkembangan historis tersebut, LPIDB merupakan lembaga yang mengkoordinasikan kedua lembaga yang sudah ada sebelumnya. Secara struktural LPIDB terdiri dari dua bidang pengembangan, yaitu: (1) Bidang Pengembangan Ilmu Dasar, dan (2) Bidang Pengembangan Bahasa.', 'Pada tahun 2029, Lembaga Pengembangan Ilmu Dasar dan Bahasa (LPIDB/Center for General Subjects and Language Development) Universitas Muhammadiyah Surakarta menjadi pusat pengembangan dan pelayanan pembelajaran ilmu pengetahuan dasar umum dan bahasa yang islami dan memberi arah perubahan', '<ol><li>Menyelenggarakan pembelajaran mata kuliah dasar umum dan bahasa\r\n</li><li>Melaksanakan penelitian untuk pengembangan mata kuliah dasar umum dan bahasa\r\n</li><li>Melaksanakan layanan mata kuliah dasar umum dan bahasa</li></ol>', '<ol><li>Menghasilkan lulusan yang memiliki nasionalisme dan Kompetensi Bahasa Inggris setara dengan Independent User (B1) berdasarkan standar Common European Framework of Reference (CEFR).\r\n</li><li>Menghasilkan bahan ajar yang di dalamnya terdapat nilai-nilai keislaman, strategi pembelajaran yang berpusat pada peserta didik, dan evaluasi pembelajaran objektif\r\n</li><li>Menghasilkan paket-paket layanan mata kuliah dasar umum dan bahasa yang praktis dan solutif</li></ol>', '<p style=\"box-sizing: inherit; border: 0px; font-size: 16px; margin-right: 0px; margin-bottom: 0.97em; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(75, 79, 88); font-family: \"Open Sans\", sans-serif;\">Lembaga Pengembangan Ilmu Dasar dan Bahasa (LPIDB) merupakan salah satu unit kerja baru di Universitas Muhammadiyah Surakarta, yang didirikan berdasarkan SK Rektor Nomor 078/IV/2013 tentang penataan pejabat struktural biro, lembaga, dan unit non-fakultas, tanggal 20 April 2013.</p><p style=\"box-sizing: inherit; border: 0px; font-size: 16px; margin-right: 0px; margin-bottom: 0.97em; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(75, 79, 88); font-family: \"Open Sans\", sans-serif;\">LPIDB merupakan penggabungan dari dua lembaga yang sudah ada sebelumnya, yaitu Lembaga Pengembangan Ilmu-ilmu Dasar (LPID) dan Language Center (LC). LPID yang didirikan pada 2004 semula bertugas mengelola penyelenggaraan perkuliahan mata kuliah umum dan Al-Islam serta Kemuhammadiyahan; sedangkan LC yang didirikan pada 1993 berdasarkan SK Rektor Universitas Muhammadiyah Surakarta Nomor 38/IV/1993 tertanggal 1 Oktober 1993 semula bertugas mengelola penyelenggaraan perkuliahan Bahasa Inggris sebagai bagian dari mata kuliah umum.</p><p style=\"box-sizing: inherit; border: 0px; font-size: 16px; margin-right: 0px; margin-bottom: 0.97em; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(75, 79, 88); font-family: \"Open Sans\", sans-serif;\">Kepemimpinan Language Center sejak berdiri hingga peleburannya menjadi LPIDB berlangsung sebagai berikut. Pada periode 1993-1996 LC dipimpin oleh ketua dan sekretaris Ibu Endang Fauziati dan Bapak Djoko Srijono. Pada periode 1996-2000 kepemimpinan LC dilanjutkan oleh Ibu Dwi Haryanti dan Bapak Abdillah Nugroho. Pada periode 2000-2004 LC dipimpin oleh Bapak Djoko Srijono dan Bapak Anam Sutopo sebagai sekretaris. Pada periode 2004-2006 LC dipimpin oleh Bapak Nurhadi dan Ibu Muamaroh. Pada periode 2007-2008 LC dipimpin oleh Ibu Muamaroh dan Ibu Siti Fatimah. Akhirnya, pada periode 2008-2013 LC kembali dipimpin oleh Ibu Endang Fauziati dan didampingi oleh Bapak Syakuri.</p><p style=\"box-sizing: inherit; border: 0px; font-size: 16px; margin-right: 0px; margin-bottom: 0.97em; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(75, 79, 88); font-family: \"Open Sans\", sans-serif;\">Pada tahun 2013, pimpinan universitas melakukan penataan kelembagaan kembali dengan mendirikan lembaga baru untuk menyelenggarakan perkuliahan Al-Islam dan Kemuhammadiyahan ditangani oleh sebuah lembaga baru, yaitu Lembaga Pengembangan Al-Islam dan Kemuhammadiyahan (LPIK), sekarang menjadi Lembaga Pengembangan Pondok, Al-Islam dan Kemuhammadiyahan (LPPIK), di bawah koordinasi Wakil Rektor IV, sedangkan penyelenggaraan perkuliahan MKU digabung dengan penyelenggaran perkuliahan bahasa dalam Lembaga Pengembangan Ilmu dasar dan Bahasa (LPIDB).</p><p style=\"box-sizing: inherit; border: 0px; font-size: 16px; margin-right: 0px; margin-bottom: 0.97em; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(75, 79, 88); font-family: \"Open Sans\", sans-serif;\">Pada awalnya LPIDB terdiri dari dua bidang pengembangan, yaitu: (1) Bidang Pengembangan Ilmu Dasar, dan (2) Bidang Pengembangan Bahasa. Bidang Pengembangan Ilmu Dasar bertanggung jawab atas pelaksanaan pembelajaran mata kuliah dasar umum yang terdiri dari (1) Pendidikan Kewarganegaraan (2-3 SKS), (2) Ilmu Sosial Budaya Dasar (2-3 SKS), (3) Ilmu Alamiah Dasar(2-3 SKS), (4) Bahasa Indonesia (2-3 SKS). Bidang Pengembangan Bahasa bertanggung jawab atas pelaksanaan pembelajaran Bahasa Inggris umum (4 SKS). Pada waktu Universitas Muhammadiyah Surakarta menyelenggarakan pemutakhiran kurikulum dengan mengadaptasi Kerangka Kualifikasi Nasional Indonesia (KKNI), Mata Kuliah Dasar Umum diubah menjadi tiga, yaitu: (1) Pendidikan Pancasila, (2) Pendidikan Kewarganegaraan, dan (3) Bahasa Indonesia.</p><p style=\"box-sizing: inherit; border: 0px; font-size: 16px; margin-right: 0px; margin-bottom: 0.97em; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(75, 79, 88); font-family: \"Open Sans\", sans-serif;\">Pada tahun 2018, struktur LPIDB dikembangkan menjadi tiga bidang pengembangan, yaitu: (1) Bidang Pengembangan Ilmu Dasar, (2) Bidang Pengembangan Pembelajaran Bahasa, dan (3) Bidang Pengembangan Layanan Bahasa.</p>', 'organisasi.gif');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `akademik`
--
ALTER TABLE `akademik`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kalender`
--
ALTER TABLE `kalender`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `lowongan`
--
ALTER TABLE `lowongan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pimpinanstaff`
--
ALTER TABLE `pimpinanstaff`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `akademik`
--
ALTER TABLE `akademik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=189;

--
-- AUTO_INCREMENT untuk tabel `kalender`
--
ALTER TABLE `kalender`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `lowongan`
--
ALTER TABLE `lowongan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `pimpinanstaff`
--
ALTER TABLE `pimpinanstaff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
