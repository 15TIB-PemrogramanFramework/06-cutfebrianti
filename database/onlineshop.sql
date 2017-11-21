-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 03, 2017 at 04:10 AM
-- Server version: 5.7.15-log
-- PHP Version: 5.6.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin'),
('cut', 'cut');

-- --------------------------------------------------------

--
-- Table structure for table `konfirmasi`
--

CREATE TABLE `konfirmasi` (
  `id_konfirmasi` int(11) NOT NULL,
  `id_pesan` int(11) NOT NULL,
  `rek_nama` varchar(100) NOT NULL,
  `met_transfer` varchar(100) NOT NULL,
  `bukti_transfer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `makanan`
--

CREATE TABLE `makanan` (
  `id_makanan` int(11) NOT NULL,
  `nama_makanan` varchar(100) NOT NULL,
  `jenis_makanan` varchar(100) NOT NULL,
  `harga_makanan` int(11) NOT NULL,
  `deskripsi_makanan` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `makanan`
--

INSERT INTO `makanan` (`id_makanan`, `nama_makanan`, `jenis_makanan`, `harga_makanan`, `deskripsi_makanan`, `gambar`) VALUES
(23, 'paket a', 'Paket A', 15000, 'ayam\r\nnasi\r\ncabe\r\nkerupuk\r\nkuah\r\nair mineral', '1509491532.jpg'),
(24, 'Paket C', 'Paket C', 15000, 'nasi\r\ncap cay\r\nayam bumbu\r\ndendeng \r\ncabe\r\nkerupuk', '1509494029.jpg'),
(25, 'Paket B', 'Paket B', 15000, 'Nasi Kuning\r\nTeur Dadar\r\nchicken Nugget\r\nlalapan\r\nsambal terasi', '1509494144.jpg'),
(26, 'Paket D', 'paket D', 30000, 'Nasi Tumpeng\r\nAyam Bakar\r\nlalapan \r\nOseng teri tempe \r\n', '1509494342.jpg'),
(27, 'peaket e', 'Paket E', 30000, 'Nasi Tumpeng\r\nayam Bakar\r\nTahu + tempe\r\noseng teri+tempe\r\nlalapan\r\nsambal terasi', '1509495794.jpg'),
(28, 'paket f', 'Paket F', 15000, 'Ayam saos merah \r\nnasi\r\nsayur\r\nair mineral\r\nroti jala', '1509495922.jpg'),
(29, 'paket1', 'Paket 1', 120000, 'Birthday Cake Chocolate', '1509495994.jpg'),
(30, 'paket 2', 'Paket 2', 130000, 'Birthday Cake Strawberry', '1509496047.jpg'),
(31, 'paket 3', 'Paket 3', 180000, 'Birthday Cake High Choco Oreo', '1509496109.jpg'),
(33, 'P Drink 1', 'P Drink 1', 25000, 'Es Mangga kekinian', '1509496334.jpg'),
(34, 'P Drink 2', 'P Drink 2', 8000, 'Es Cendol Tapai Durian', '1509496421.jpg'),
(35, 'P Drink 3', 'P Drink 3', 6000, 'Es Timun', '1509496475.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `email_member` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_member` varchar(100) NOT NULL,
  `alamat_member` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `email_member`, `password`, `nama_member`, `alamat_member`) VALUES
(3, 'cut15ti', '1234', 'cutfebrianti', 'kulim raaya'),
(4, 'ww', 'ww', 'ww', 'ww'),
(5, 'ee', 'ee', 'ee', 'ee'),
(6, 'awa', 'awa', 'zahwa', 'pekanbARU');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `id_makanan` int(11) NOT NULL,
  `jumlah_pesanan` varchar(50) NOT NULL,
  `status_pesan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `konfirmasi`
--
ALTER TABLE `konfirmasi`
  ADD PRIMARY KEY (`id_konfirmasi`),
  ADD KEY `id_pesan` (`id_pesan`);

--
-- Indexes for table `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`id_makanan`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`),
  ADD KEY `id_member` (`id_member`),
  ADD KEY `id_hardware` (`id_makanan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `konfirmasi`
--
ALTER TABLE `konfirmasi`
  MODIFY `id_konfirmasi` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `makanan`
--
ALTER TABLE `makanan`
  MODIFY `id_makanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `konfirmasi`
--
ALTER TABLE `konfirmasi`
  ADD CONSTRAINT `id_pesan` FOREIGN KEY (`id_pesan`) REFERENCES `pesan` (`id_pesan`);

--
-- Constraints for table `pesan`
--
ALTER TABLE `pesan`
  ADD CONSTRAINT `id_hardware` FOREIGN KEY (`id_makanan`) REFERENCES `makanan` (`id_makanan`),
  ADD CONSTRAINT `id_member` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
