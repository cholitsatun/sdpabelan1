-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2019 at 11:50 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdpabelan1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `usr` varchar(25) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `nama` varchar(5) NOT NULL,
  `status` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`usr`, `pwd`, `nama`, `status`) VALUES
('admin', 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(8) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `konten` text NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `foto_artikel` varchar(255) NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul`, `konten`, `tanggal`, `foto_artikel`, `id_kategori`) VALUES
(1, 'Pentingnya Menanamkan Karakter Positif Sejak Dini', '<p style=\"text-align: justify;\">Kedudukan karakter dalam perjalanan setiap manusia sangat penting sekali. Bahkan pembentukan karakter sejak dini akan sangat menentukan bagaimana seseorang dalam menjalani hidupnya. Siapapun dia, apapun profesinya, ketika memiliki karakter positif, tentu akan lebih baik dari pada yang tidak memiliki karakter. Maka dari itu, penanaman karakter positif ini sangat diperlukan sejak dini agar bisa menjadi modal mereka dalam mengarungi perjalanan hidup yang sangat berat.</p>\r\n<p style=\"text-align: justify;\">Karakter yang kuat, berani dan tidak mudah menyerah akan sangat membantu siapapun dalam menjalani hidup. Karakter positif selalu bisa diterapkan dalam berbagai profesi, baik seorang pebisnis, pendidik, atau profesi lainnya. Seperti kita ketahui bersama bahwa yang sering menjadi masalah bangsa Indonesia ini adalah banyaknya manusia Indonesia yang tidak memiliki karakter positif sehingga dimanapun mereka berada akan selalu menimbulkan masalah dan bukan menjadi solusi dari sebuah masalah.</p>\r\n<p style=\"text-align: justify;\">Kedudukan karakter dalam perjalanan setiap manusia sangat penting sekali. Bahkan pembentukan karakter sejak dini akan sangat menentukan bagaimana seseorang dalam menjalani hidupnya. Siapapun dia, apapun profesinya, ketika memiliki karakter positif, tentu akan lebih baik dari pada yang tidak memiliki karakter. Maka dari itu, penanaman karakter positif ini sangat diperlukan sejak dini agar bisa menjadi modal mereka dalam mengarungi perjalanan hidup yang sangat berat.</p>\r\n<p style=\"text-align: justify;\">Karakter yang kuat, berani dan tidak mudah menyerah akan sangat membantu siapapun dalam menjalani hidup. Karakter positif selalu bisa diterapkan dalam berbagai profesi, baik seorang pebisnis, pendidik, atau profesi lainnya. Seperti kita ketahui bersama bahwa yang sering menjadi masalah bangsa Indonesia ini adalah banyaknya manusia Indonesia yang tidak memiliki karakter positif sehingga dimanapun mereka berada akan selalu menimbulkan masalah dan bukan menjadi solusi dari sebuah masalah<br /><a href=\"http://sdntegalrejoi.sch.id/read/13/-pentingnya-menanamkan-karakter-positif-sejak-dini.html\"><br /></a></p>', '0000-00-00 00:00:00', 'img/sd1.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ekskul`
--

CREATE TABLE `ekskul` (
  `id_ekskul` int(11) NOT NULL,
  `nama_ekskul` varchar(255) NOT NULL,
  `jadwal` varchar(20) NOT NULL,
  `foto_ekskul` varchar(255) NOT NULL,
  `id_guru` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ekskul`
--

INSERT INTO `ekskul` (`id_ekskul`, `nama_ekskul`, `jadwal`, `foto_ekskul`, `id_guru`) VALUES
(6, 'tari', 'rabu & kamis', 'img/tari.jpg', 1),
(7, 'pramuka', 'Jumat', 'img/pramuka.jpg', 6),
(8, 'renang', 'selasa minggu ke 2&4', 'img/renang.jpg', 8);

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(11) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `namaguru` varchar(25) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `t_pddkn` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `thn_lulus` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `nip`, `namaguru`, `jabatan`, `t_pddkn`, `jurusan`, `thn_lulus`) VALUES
(1, '19620712 198304 2 008', 'Sri Suparmi,S.Pd', 'guru kelas 5', 's1', 'PPKn', 2009),
(2, 'non PNS', 'Sri Rusnawati,S.Pd', 'guru kelas 4', 's1', 'PGSD', 2011),
(3, '19671011 199307 2 003', 'Sularmi,S.Pd', 'guru kelas 6', 's1', 'PGSD', 2000),
(4, '19680619 200701 2 009', 'Wasiatun,S.Pd', 'guru kelas 3', 'S1', 'PBSI', 2005),
(5, 'non PNS', 'Sri Arini Kurniasari,S.Pd', 'guru kelas 2', 'D2', 'PGSD', 2009),
(6, 'non PNS', 'Triyanto,S.Ing', 'guru bahasa inggris', 'S1', 'Bahasa Inggris', 2005),
(7, 'non PNS', 'Umi Khasanah ,S.Ag', 'guru agama', 's1', 'Tarbiyah', 2016),
(8, 'non PNS', 'Sabihisma Wahyu Candra ,S', 'guru olahraga', 's1', 'PKO', 2018),
(9, '19820516 201001 2 015', 'Atik Dwi .S,S.Pd', 'guru kelas 1', 'S1', 'PGSD', 2006);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(1, 'kegiatan'),
(2, 'pengumuman'),
(3, 'prestasi');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nis` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `kelas` int(1) NOT NULL,
  `tgl_lahir` varchar(50) NOT NULL,
  `nama_wali` varchar(25) NOT NULL,
  `id_guru` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `nama`, `kelas`, `tgl_lahir`, `nama_wali`, `id_guru`) VALUES
(99183575, 'CANTIKA KASYAH SAGALA', 2, '07/02/2009', 'ANI GULTOM', 2),
(103009514, 'AHMAD ZUHAIR NUR KHOLIS', 1, '13/03/2010', 'SURATI', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`usr`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `ekskul`
--
ALTER TABLE `ekskul`
  ADD PRIMARY KEY (`id_ekskul`),
  ADD KEY `id_guru` (`id_guru`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`),
  ADD KEY `id_guru` (`id_guru`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ekskul`
--
ALTER TABLE `ekskul`
  MODIFY `id_ekskul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `kategoriFK` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ekskul`
--
ALTER TABLE `ekskul`
  ADD CONSTRAINT `ekskul_ibfk_1` FOREIGN KEY (`id_guru`) REFERENCES `guru` (`id_guru`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`id_guru`) REFERENCES `guru` (`id_guru`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
