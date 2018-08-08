-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2018 at 02:30 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bansos`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_kecamatan`
--

CREATE TABLE `data_kecamatan` (
  `kode_kecamatan` varchar(3) NOT NULL,
  `nama_kecamatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_kecamatan`
--

INSERT INTO `data_kecamatan` (`kode_kecamatan`, `nama_kecamatan`) VALUES
('BAI', 'BANJARWANGI'),
('BBG', 'BUNGBULANG'),
('BLN', 'BLUBURLIMBANGAN'),
('BNG', 'BAYONGBONG'),
('BUI', 'BANYURESMI'),
('CAG', 'CIBALONG'),
('CBK', 'CIBIUK'),
('CBU', 'CIBATU'),
('CGG', 'CIGEDUG'),
('CHP', 'CIHURIP'),
('CIN', 'CARINGIN'),
('CKJ', 'CIKAJANG'),
('CKT', 'CIKELET'),
('CLU', 'CILAWU'),
('COT', 'CISOMPET'),
('CSU', 'CISEWU'),
('CUN', 'CISURUPAN'),
('GUA', 'GARUTKOTA'),
('KAH', 'KERSAMANAH'),
('KGH', 'KARANGTENGAH'),
('KGN', 'KARANGPAWITAN'),
('KUA', 'KADUNGORA'),
('LES', 'LELES'),
('LIG', 'LEUWIGOONG'),
('MNG', 'MALANGBONG'),
('MRI', 'MEKARMUKTI'),
('PAN', 'PANGATIKAN'),
('PEG', 'PAKENJENG'),
('PNY', 'PEUNDEUY'),
('PRI', 'PASIRWANGI'),
('PUK', 'PAMEUNGPEUK'),
('PUN', 'PAMULIHAN'),
('SAG', 'SAMARANG'),
('SAI', 'SUKARESMI'),
('SGA', 'SINGAJAYA'),
('SLI', 'SELAAWI'),
('SNA', 'SUCINARAJA'),
('SWG', 'SUKAWENING'),
('TEG', 'TALEGONG'),
('TOL', 'TAROGONGKIDUL'),
('TOR', 'TAROGONGKALER'),
('WAA', 'WANARAJA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_kecamatan`
--
ALTER TABLE `data_kecamatan`
  ADD PRIMARY KEY (`kode_kecamatan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
