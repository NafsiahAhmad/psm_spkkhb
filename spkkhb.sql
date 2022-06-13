-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2022 at 08:14 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spkkhb`
--

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `infoID` int(10) NOT NULL,
  `infoTajuk` text NOT NULL,
  `infoKeterangan` text NOT NULL,
  `infoPhoto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`infoID`, `infoTajuk`, `infoKeterangan`, `infoPhoto`) VALUES
(82, 'adaw', 'adwddwadferefrefffff', 'banner.jpg'),
(83, 'heloo', 'selamat malams semikdiwuhfeiu', 'banner.jpg'),
(84, 'selamat malam', 'tidurlah sayangku', 'Screenshot (557).png');

-- --------------------------------------------------------

--
-- Table structure for table `kucing`
--

CREATE TABLE `kucing` (
  `catID` int(10) NOT NULL,
  `catName` varchar(30) NOT NULL,
  `catBreed` varchar(20) NOT NULL,
  `catBday` varchar(10) DEFAULT NULL,
  `catGender` varchar(10) DEFAULT NULL,
  `catBerat` varchar(10) DEFAULT NULL,
  `catColor` varchar(10) DEFAULT NULL,
  `custName` varchar(30) NOT NULL,
  `custUsername` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kucing`
--

INSERT INTO `kucing` (`catID`, `catName`, `catBreed`, `catBday`, `catGender`, `catBerat`, `catColor`, `custName`, `custUsername`) VALUES
(18, 'd', 'd', 'd', 'd', 'd', 'd', 'pelanggan', 'pelanggan');

-- --------------------------------------------------------

--
-- Table structure for table `pekerja`
--

CREATE TABLE `pekerja` (
  `staffID` int(10) NOT NULL,
  `staffUsername` varchar(20) NOT NULL,
  `staffPass` varchar(20) NOT NULL,
  `staffName` varchar(30) DEFAULT NULL,
  `staffPhone` varchar(15) DEFAULT NULL,
  `staffMail` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pekerja`
--

INSERT INTO `pekerja` (`staffID`, `staffUsername`, `staffPass`, `staffName`, `staffPhone`, `staffMail`) VALUES
(22, 'staff22', 'staff22', 'staff22', '1234567890', 'staff@email.com'),
(24, 'pekerja', 'pekerja', 'pekerja', '999', 'pekerja@email.com');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `custID` int(10) NOT NULL,
  `custUsername` varchar(20) NOT NULL,
  `custPass` varchar(20) NOT NULL,
  `custName` varchar(30) DEFAULT NULL,
  `custPhone` varchar(15) DEFAULT NULL,
  `custMail` varchar(20) DEFAULT NULL,
  `custAddress` varchar(60) DEFAULT NULL,
  `custDate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`custID`, `custUsername`, `custPass`, `custName`, `custPhone`, `custMail`, `custAddress`, `custDate`) VALUES
(48, 'pelanggan', 'pelanggan', 'pelanggan', '12345678', 'pelanggan@email.com', 'hello iphone', '2022-06-12'),
(49, '123', '123', '123', '123', '123', '123', '2022-06-12'),
(50, 'q', 'q', 'q', '1', 'q', 'q', '2022-06-12');

-- --------------------------------------------------------

--
-- Table structure for table `pentadbir`
--

CREATE TABLE `pentadbir` (
  `adminID` int(10) NOT NULL,
  `adminUsername` varchar(20) NOT NULL,
  `adminPass` varchar(20) NOT NULL,
  `adminName` varchar(30) DEFAULT NULL,
  `adminPhone` varchar(15) DEFAULT NULL,
  `adminMail` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pentadbir`
--

INSERT INTO `pentadbir` (`adminID`, `adminUsername`, `adminPass`, `adminName`, `adminPhone`, `adminMail`) VALUES
(17, 'pentadbir', 'pentadbir', 'pentadbir', '1234568', 'pentadbir@email.com'),
(21, 'abubakar99', 'spkkhb', 'Abu Bakar Bin Ali', '87678551', 'abubakar@yahoo.com'),
(23, 'd3', 'sws3', '3d3d', '3', '3d3d3');

-- --------------------------------------------------------

--
-- Table structure for table `rekodgunaubat`
--

CREATE TABLE `rekodgunaubat` (
  `usageID` int(10) NOT NULL,
  `namaPelangganUbat` varchar(30) DEFAULT NULL,
  `namaKucingUbat` varchar(20) DEFAULT NULL,
  `ubatID` int(10) DEFAULT NULL,
  `ubatUsedQty` varchar(99) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rekodgunaubat`
--

INSERT INTO `rekodgunaubat` (`usageID`, `namaPelangganUbat`, `namaKucingUbat`, `ubatID`, `ubatUsedQty`) VALUES
(16, 'pelanggan', 'Abu', 0, '5'),
(17, 'siti fatimah', 'oyen', 10, '5'),
(21, 'pelanggan', 'Abu', 0, '5'),
(22, 'pelanggan', 'Abu', 0, '5'),
(26, 'pelanggan', 'oyen', 11, '3'),
(36, '123', 'deee', 17, '3'),
(37, 'pelanggan', 'rrr', 17, '6');

-- --------------------------------------------------------

--
-- Table structure for table `slottempahan`
--

CREATE TABLE `slottempahan` (
  `slotID` int(10) NOT NULL,
  `namaKucingTempah` varchar(20) DEFAULT NULL,
  `tarikhTempah` date DEFAULT NULL,
  `masaTempah` varchar(20) NOT NULL,
  `statusTempah` varchar(10) DEFAULT 'Menunggu',
  `custUsername` varchar(20) NOT NULL,
  `custName` varchar(20) NOT NULL,
  `custPhone` varchar(15) NOT NULL,
  `rawatanType` text DEFAULT 'Tiada',
  `rawatanButiran` text DEFAULT 'Tiada'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slottempahan`
--

INSERT INTO `slottempahan` (`slotID`, `namaKucingTempah`, `tarikhTempah`, `masaTempah`, `statusTempah`, `custUsername`, `custName`, `custPhone`, `rawatanType`, `rawatanButiran`) VALUES
(72, 'qwerty', '2022-06-16', '', 'Dibatalkan', 'pelanggan', 'pelanggan', '12345678', 'Tiada', 'Tiada'),
(73, 'ded', '2022-06-15', '', 'Diterima', 'pelanggan', 'pelanggan', '12345678', 'Tiada', 'Tiada'),
(75, 'gegergerg', '2022-06-14', '', 'Diterima', '123', '123', '123', 'Tiada', 'Tiada'),
(76, 'eqfqqfe', '2022-06-15', '', 'Dibatalkan', '123', '123', '123', 'Tiada', 'Tiada'),
(77, 'pelanggan', '2022-06-22', '', 'Menunggu', 'pelanggan', 'pelanggan', '12345678', 'Tiada', 'Tiada'),
(78, 'eeee', '2022-06-15', '10:40AM-11.10AM', 'Menunggu', 'pelanggan', 'pelanggan', '12345678', 'Tiada', 'Tiada');

-- --------------------------------------------------------

--
-- Table structure for table `stokubat`
--

CREATE TABLE `stokubat` (
  `ubatID` int(11) NOT NULL,
  `ubatName` varchar(50) DEFAULT NULL,
  `ubatQty` int(99) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stokubat`
--

INSERT INTO `stokubat` (`ubatID`, `ubatName`, `ubatQty`) VALUES
(17, 'Ubat Kuning', 10),
(19, 'Paracetamol', 20),
(20, 'Ubat Cacing', 10),
(21, 'Ubat Kurap', 46);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`infoID`);

--
-- Indexes for table `kucing`
--
ALTER TABLE `kucing`
  ADD PRIMARY KEY (`catID`);

--
-- Indexes for table `pekerja`
--
ALTER TABLE `pekerja`
  ADD PRIMARY KEY (`staffID`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`custID`);

--
-- Indexes for table `pentadbir`
--
ALTER TABLE `pentadbir`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `rekodgunaubat`
--
ALTER TABLE `rekodgunaubat`
  ADD PRIMARY KEY (`usageID`);

--
-- Indexes for table `slottempahan`
--
ALTER TABLE `slottempahan`
  ADD PRIMARY KEY (`slotID`);

--
-- Indexes for table `stokubat`
--
ALTER TABLE `stokubat`
  ADD PRIMARY KEY (`ubatID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `infoID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `kucing`
--
ALTER TABLE `kucing`
  MODIFY `catID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pekerja`
--
ALTER TABLE `pekerja`
  MODIFY `staffID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `custID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `pentadbir`
--
ALTER TABLE `pentadbir`
  MODIFY `adminID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `rekodgunaubat`
--
ALTER TABLE `rekodgunaubat`
  MODIFY `usageID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `slottempahan`
--
ALTER TABLE `slottempahan`
  MODIFY `slotID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `stokubat`
--
ALTER TABLE `stokubat`
  MODIFY `ubatID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
