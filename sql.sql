-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2019 at 08:52 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aaa`
--
CREATE DATABASE IF NOT EXISTS `aaa` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `aaa`;

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `nopol_user` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `notelp_user` varchar(13) NOT NULL,
  `jml_roda_kendaraan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_user`, `nama_user`, `email_user`, `nopol_user`, `password`, `notelp_user`, `jml_roda_kendaraan`) VALUES
(1423211, 'Yanuar Aditia', 'yanuaraditia@outlook.com', 'AA-3435-RD', '$2y$10$mC85TuW5RhIUhzRmLT4UnOXmFy9DGn55.lGe/6ntMuGKtJgsWO59y', '08233422323', 4),
(1423212, 'Yanuar Aditia', 'yanuaraditia@outlook.co.id', 'ADSD', '$2y$10$g0/0KngvnV1GJprdT1IXIeKgU4HJC8sld/StR5FlbdqvEc2stJuFy', '+628224337404', 6),
(1423213, 'Yanuar Aditia', 'yanuaraditia@outlook.as.id', 'AA 1 RW', '$2y$10$pQnvgJZUrTY8lSSF9gCmmuRpOa5j4.R.G6GqMySvzZgxM1OpwQK6G', '+628224337405', 6);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `kd_booking` int(11) NOT NULL,
  `kd_slot` int(11) NOT NULL,
  `tgl_booking` date NOT NULL,
  `status` int(1) DEFAULT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`kd_booking`, `kd_slot`, `tgl_booking`, `status`, `id_user`) VALUES
(7, 3, '2019-08-02', 2, 1423212),
(3423456, 2, '2019-08-02', 2, 1423213),
(3423459, 1, '2019-10-09', 1, 1423213);

-- --------------------------------------------------------

--
-- Table structure for table `lantai`
--

CREATE TABLE `lantai` (
  `kd_lantai` int(11) NOT NULL,
  `nama_lantai` varchar(50) NOT NULL,
  `kelas_lantai` int(11) NOT NULL,
  `tarif_lantai` int(11) NOT NULL,
  `kd_lokasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lantai`
--

INSERT INTO `lantai` (`kd_lantai`, `nama_lantai`, `kelas_lantai`, `tarif_lantai`, `kd_lokasi`) VALUES
(1, 'Basement', 1, 2000, 1),
(2, 'Lantai 3', 1, 40000, 1),
(3, 'Basement', 1, 10000, 2);

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `kd_lokasi` int(11) NOT NULL,
  `nama_lokasi` varchar(50) NOT NULL,
  `lttd_lokasi` varchar(40) NOT NULL,
  `lgtd_lokasi` varchar(40) NOT NULL,
  `alamat_lokasi` varchar(140) NOT NULL,
  `notelp_lokasi` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`kd_lokasi`, `nama_lokasi`, `lttd_lokasi`, `lgtd_lokasi`, `alamat_lokasi`, `notelp_lokasi`) VALUES
(1, 'Taman Parkir Abu Bakar Ali', '-7.7900392', '110.3654116', 'Jl. Abu Bakar Ali No.1, Suryatmajan, Kec. Danurejan, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55213', ''),
(2, 'Universitas Amikom Yogyakarta', '-7.7601813', '110.4083464', 'Jl. Abu Bakar Ali No.1, Suryatmajan, Kec. Danurejan, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55213', ''),
(3, 'Lippo Plaza Jogja', '-7.7839366', '110.3904249', 'Jl. Laksda Adisucipto No.32-34, Demangan, Kec. Gondokusuman, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55221', '02742923937'),
(4, 'Ambarrukmo Plaza', '-7.782948', '110.3990213', 'Jl. Laksda Adisucipto No.80, Ambarukmo, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281', '02744331000'),
(5, 'Ambarrukmo Plaza', '-7.782948', '110.3990213', 'Jl. Laksda Adisucipto No.80, Ambarukmo, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281', '02744331000'),
(6, 'Ambarrukmo Plaza', '-7.782948', '110.3990213', 'Jl. Laksda Adisucipto No.80, Ambarukmo, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281', '02744331000');

-- --------------------------------------------------------

--
-- Table structure for table `mitra`
--

CREATE TABLE `mitra` (
  `id_mitra` int(11) NOT NULL,
  `nama_mitra` varchar(50) NOT NULL,
  `kd_lokasi` int(11) NOT NULL,
  `email_mitra` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mitra`
--

INSERT INTO `mitra` (`id_mitra`, `nama_mitra`, `kd_lokasi`, `email_mitra`, `password`) VALUES
(1, 'Eko Patrio', 1, 'ekopatrio@123.com', '$2y$10$pQnvgJZUrTY8lSSF9gCmmuRpOa5j4.R.G6GqMySvzZgxM1OpwQK6G');

-- --------------------------------------------------------

--
-- Table structure for table `reset`
--

CREATE TABLE `reset` (
  `kd_reset` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal_request` date NOT NULL,
  `tanggal_update` date NOT NULL,
  `reset_key` varchar(255) NOT NULL,
  `staus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `slot`
--

CREATE TABLE `slot` (
  `kd_slot` int(11) NOT NULL,
  `nama_slot` varchar(50) NOT NULL,
  `kd_lantai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slot`
--

INSERT INTO `slot` (`kd_slot`, `nama_slot`, `kd_lantai`) VALUES
(1, 'B1', 1),
(2, 'B2', 1),
(3, 'L3', 2),
(4, 'B3', 1);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `kd_transaksi` int(11) NOT NULL,
  `kd_booking` int(11) NOT NULL,
  `total_bayar` int(30) NOT NULL,
  `tanggal_bayar` date NOT NULL,
  `id_mitra` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`kd_transaksi`, `kd_booking`, `total_bayar`, `tanggal_bayar`, `id_mitra`) VALUES
(3326, 7, 880000, '2019-08-23', 1),
(3327, 3423456, 44000, '2019-08-23', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`kd_booking`),
  ADD KEY `kd_slot` (`kd_slot`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `lantai`
--
ALTER TABLE `lantai`
  ADD PRIMARY KEY (`kd_lantai`),
  ADD KEY `kd_lokasi` (`kd_lokasi`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`kd_lokasi`);

--
-- Indexes for table `mitra`
--
ALTER TABLE `mitra`
  ADD PRIMARY KEY (`id_mitra`),
  ADD KEY `kd_lokasi` (`kd_lokasi`);

--
-- Indexes for table `reset`
--
ALTER TABLE `reset`
  ADD PRIMARY KEY (`kd_reset`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `slot`
--
ALTER TABLE `slot`
  ADD PRIMARY KEY (`kd_slot`),
  ADD KEY `kd_lantai` (`kd_lantai`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`kd_transaksi`),
  ADD KEY `id_mitra` (`id_mitra`),
  ADD KEY `kd_booking` (`kd_booking`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1423217;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `kd_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3423460;

--
-- AUTO_INCREMENT for table `lantai`
--
ALTER TABLE `lantai`
  MODIFY `kd_lantai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `kd_lokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mitra`
--
ALTER TABLE `mitra`
  MODIFY `id_mitra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reset`
--
ALTER TABLE `reset`
  MODIFY `kd_reset` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slot`
--
ALTER TABLE `slot`
  MODIFY `kd_slot` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `kd_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3328;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`kd_slot`) REFERENCES `slot` (`kd_slot`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `akun` (`id_user`);

--
-- Constraints for table `lantai`
--
ALTER TABLE `lantai`
  ADD CONSTRAINT `lantai_ibfk_1` FOREIGN KEY (`kd_lokasi`) REFERENCES `lokasi` (`kd_lokasi`);

--
-- Constraints for table `mitra`
--
ALTER TABLE `mitra`
  ADD CONSTRAINT `mitra_ibfk_1` FOREIGN KEY (`kd_lokasi`) REFERENCES `lokasi` (`kd_lokasi`);

--
-- Constraints for table `reset`
--
ALTER TABLE `reset`
  ADD CONSTRAINT `reset_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `akun` (`id_user`);

--
-- Constraints for table `slot`
--
ALTER TABLE `slot`
  ADD CONSTRAINT `slot_ibfk_1` FOREIGN KEY (`kd_lantai`) REFERENCES `lantai` (`kd_lantai`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`kd_booking`) REFERENCES `booking` (`kd_booking`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_mitra`) REFERENCES `mitra` (`id_mitra`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
