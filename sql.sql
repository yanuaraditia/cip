-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2019 at 02:59 PM
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
(1423211, 'User 1', 'test1@123.com', 'AA-3435-RD', '$2y$10$y6dg4X/dNOHOiq5qRg70oOEyYsDOk1sPVQYj7UOQ1sauBYQbzIu5e', '08233422323', 4),
(1423212, 'User 2', 'test2@123.com', 'AA-3334-RW', '$2y$10$y6dg4X/dNOHOiq5qRg70oOEyYsDOk1sPVQYj7UOQ1sauBYQbzIu5e', '+628224337404', 6),
(1423213, 'User 3', 'test2@123.com', 'AA-1-RW', '$2y$10$y6dg4X/dNOHOiq5qRg70oOEyYsDOk1sPVQYj7UOQ1sauBYQbzIu5e', '+628224337405', 6);

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
(3, 'Basement', 1, 10000, 2),
(5, 'Parkir Utara', 1, 40000, 2);

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
(1, 'Taman Parkir Abu Bakar Ali', '-7.7900392', '110.3654116', 'Jl. Abu Bakar Ali No.1, Suryatmajan, Kec. Danurejan, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55213', '02742923937'),
(2, 'Universitas Amikom Yogyakarta', '-7.7601813', '110.4083464', 'Jl. Abu Bakar Ali No.1, Suryatmajan, Kec. Danurejan, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55213', '02742923937'),
(3, 'Lippo Plaza Jogja', '-7.7839366', '110.3904249', 'Jl. Laksda Adisucipto No.32-34, Demangan, Kec. Gondokusuman, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55221', '02742923937'),
(4, 'Sample 1', '-7.782948', '110.3990213', 'Jl. Laksda Adisucipto No.80, Ambarukmo, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281', '02744331000'),
(5, 'Sample 2', '-7.782948', '110.3990213', 'Jl. Laksda Adisucipto No.80, Ambarukmo, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281', '02744331000'),
(6, 'Ambarrukmo Plaza', '-7.782948', '110.3990213', 'Jl. Laksda Adisucipto No.80, Ambarukmo, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281', '02744331000'),
(8, 'Nusa Indah', '-7.7601813', '110.4083464', 'Jl. Laksda Adisucipto No.32-34, Demangan, Kec. Gondokusuman, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55221', '02742923937');

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
(1, 'Eko Patrio', 1, 'mitra@123.com', '$2y$10$pQnvgJZUrTY8lSSF9gCmmuRpOa5j4.R.G6GqMySvzZgxM1OpwQK6G'),
(2, 'Eko Sumatrio', 5, 'sumatrio@gmail.com', '$2y$10$38Ip8LRHA6Xak3nYBh20fe9o7g.96fLrXNUj.6A90udgJMbKN7nlS');

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
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reset`
--

INSERT INTO `reset` (`kd_reset`, `id_user`, `tanggal_request`, `tanggal_update`, `reset_key`, `status`) VALUES
(44, 1423213, '2019-10-15', '0000-00-00', 'gJfZ2soFkNGaQV4hei0XITELHj7B8bPmOv3l95cuCRyzDpWAxU', 0),
(45, 1423213, '2019-10-15', '0000-00-00', 'rVznDUdYsMKTgJR5CWxeaAbjE6t97Pv8IS1Q3NOlLumipkofXc', 0),
(46, 1423213, '2019-10-15', '0000-00-00', 'xiEtdOaeoISLlDhCVTkHF1ZrfwX0qczp6ABs5NvjKUWu37y28M', 0),
(47, 1423213, '2019-10-15', '2019-10-15', 'gynXYmATjQWJtZsizUpKbBFOE1cP9L06qaCxIfDr7wVudNRk38', 1),
(48, 1423213, '2019-10-15', '2019-10-15', '2NnU9WGSLZlBP7docJTmhz8t3rFbXDAkp1q5KeuQ6VIifjMHg0', 1),
(49, 1423213, '2019-10-15', '2019-10-15', '8V9P2zsFmBaUAjb3hdgNopxW6qMJuyvwnK1LY4CilkX0GfRErH', 1),
(50, 1423213, '2019-10-15', '0000-00-00', 'r9kUOH8IARYhD2EZ576vqdyxJwtTifSLGanseCgoXMu4PQpBzc', 0);

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
(4, 'B3', 1),
(6, 'A1', 5);

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
  MODIFY `kd_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3423466;

--
-- AUTO_INCREMENT for table `lantai`
--
ALTER TABLE `lantai`
  MODIFY `kd_lantai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `kd_lokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mitra`
--
ALTER TABLE `mitra`
  MODIFY `id_mitra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reset`
--
ALTER TABLE `reset`
  MODIFY `kd_reset` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `slot`
--
ALTER TABLE `slot`
  MODIFY `kd_slot` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `kd_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3331;

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
