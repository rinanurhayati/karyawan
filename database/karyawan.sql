-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2018 at 12:16 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `karyawan`
--

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` varchar(20) NOT NULL,
  `nm_jabatan` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `nm_jabatan`) VALUES
('JAB001', 'Direktur Utama'),
('JAB002', 'Manager'),
('JAB003', 'Supervisor'),
('JAB004', 'Staff'),
('JAB005', 'Coordinator'),
('JAB006', 'presiden ');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('rinanurhayati', 'nurhayati18');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi_krj`
--

CREATE TABLE `lokasi_krj` (
  `id_lokasi` varchar(20) NOT NULL,
  `nm_lokasi` varchar(32) NOT NULL,
  `alamat_lokasi` varchar(128) NOT NULL,
  `no_hp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lokasi_krj`
--

INSERT INTO `lokasi_krj` (`id_lokasi`, `nm_lokasi`, `alamat_lokasi`, `no_hp`) VALUES
('LOK001', 'Bekasi', 'Jalan Srikandi Komp Ruko Wadya Graha II No. 7 - 8 Bekasi', '+6281224923786'),
('LOK002', 'Bandung', 'Jalan martadinata no 9, Bandung', '+6281365580887'),
('LOK003', 'Bandung', 'Jalan Sisimangaraja 12 No. 50, Bandung', '+62852923353'),
('LOK004', 'Banten', 'Jalan By Pass No. 155 Banten', '+628130492920'),
('LOK005', 'Cirebon', 'Jalan Kutilang no 5 , Cirebon', '+62'),
('LOK006', 'Bali', 'jalan utama kampar, Bali', '+62');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `nip` varchar(20) NOT NULL,
  `nm_pegawai` varchar(32) NOT NULL,
  `jk` enum('Laki-laki','Perempuan') NOT NULL,
  `tpt_lhr` varchar(32) NOT NULL,
  `tgl_lhr` date NOT NULL,
  `agama` varchar(20) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(32) NOT NULL,
  `alamat` varchar(64) NOT NULL,
  `tgl_msk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`nip`, `nm_pegawai`, `jk`, `tpt_lhr`, `tgl_lhr`, `agama`, `no_hp`, `email`, `alamat`, `tgl_msk`) VALUES
('112508378', 'syalma nabillah', 'Perempuan', 'Bandung', '1990-10-12', 'Islam', '081224923354', 'syalmanabila@gmail.com', 'jalan sudirman, ujung berung', '2012-10-20'),
('11251100701', 'Reni Mulyani', 'Perempuan', 'Cirebon', '1993-06-23', 'Islam', '081224923350', 'rmulyaniii@gmail.com', 'Jalan Yuda Karya Panam, Bandung', '2013-10-23'),
('11251100702', 'Vickry Auliana Faudzii S', 'Laki-laki', 'Aceh', '1991-05-25', 'Islam', '081224923351', 'vickryfauzi@gmail.com', 'jalan arengka, Jakarta', '2014-10-12'),
('11251100703', 'Tresna Riyanto', 'Perempuan', 'bagan api', '1994-05-07', 'islam', '081224923353', 'riyantotresna@gmail.com', 'jalan cipta karya, Tasik', '2012-09-22'),
('11251100704', 'Reihan Abdijaya', 'Laki-laki', 'Medan', '1994-07-23', 'Islam', '081224923359', 'Aditiyaraihan@gmail.com', 'jalan manunggal', '2013-07-23'),
('11251100705', 'Silviani oktaviani', 'Perempuan', 'Bandung', '1991-01-01', 'Islam', '082198371293', 'silvyoktav@gmail.com', 'jalan manunggal, Bandung', '2012-10-23'),
('11251100712', 'M. Firdaus', 'Laki-laki', 'Bekasi', '1992-12-12', 'Islam', '081224923360', 'firdausmuhamad@gmail.com', 'jalan cipta karya', '1993-10-09'),
('11251100753', 'akhmad dilan', 'Laki-laki', 'Riau', '1994-09-03', 'Islam', '081224923354', 'dilan.akhmad@gmail.com', 'Jalan Tiung Nomor 12 Riau', '2011-10-16'),
('11251100759', 'Rudy Primatama', 'Laki-laki', 'Bekasi', '1970-03-12', 'Islam', '813655902272', 'susilo.sby@gmail.com', 'Jalan Sudirman no. 12 Jakarta', '2010-01-02'),
('11251200759', 'Salsa Khaerunisa', 'Laki-laki', 'Depok', '1994-02-02', 'Islam', '081224927618', 'khaerunisasalsa@gmail.com', 'jalan cimpedak, Depok', '2012-10-17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`),
  ADD KEY `id_jabatan` (`id_jabatan`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `lokasi_krj`
--
ALTER TABLE `lokasi_krj`
  ADD PRIMARY KEY (`id_lokasi`),
  ADD KEY `id_lokasi` (`id_lokasi`),
  ADD KEY `id_lokasi_2` (`id_lokasi`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`nip`),
  ADD KEY `nip` (`nip`),
  ADD KEY `nip_2` (`nip`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
