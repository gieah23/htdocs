-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2019 at 01:32 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.2.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projek1`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `getNama` (IN `nama` VARCHAR(20), IN `kode` INT(2))  NO SQL
BEGIN
	SELECT * FROM siswa
    WHERE nama = nama_siswa
    AND
    kode = kode_kelas;
END$$

--
-- Functions
--
CREATE DEFINER=`root`@`localhost` FUNCTION `getGuruKelas` () RETURNS INT(2) NO SQL
RETURN (SELECT COUNT(kelas) FROM guru WHERE kelas<11 )$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `NIP` int(15) NOT NULL,
  `nama_guru` varchar(20) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `no_hp` int(15) DEFAULT NULL,
  `jk` varchar(1) DEFAULT NULL,
  `kode_mapel` int(3) DEFAULT NULL,
  `kelas` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`NIP`, `nama_guru`, `alamat`, `email`, `no_hp`, `jk`, `kode_mapel`, `kelas`) VALUES
(4117211, 'sutoni', 'lumajang', 'toniani@gmail.com', 2147483647, 'L', 201, 10),
(4117212, 'aini', 'lumajang', 'ton90iani@gmail.com', 2147483647, 'P', 202, 10),
(4117213, 'agistiani', 'lumajang', 'agustiani@gmail.com', 2147483647, 'L', 203, 11),
(4117214, 'ambriania', 'lumajang', 'ambriania@gmail.com', 2147483647, 'p', 204, 11);

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `kode_kelas` int(2) NOT NULL,
  `jenis_kelas` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`kode_kelas`, `jenis_kelas`) VALUES
(10, 'IPA'),
(11, 'IPA');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `kode_mapel` int(3) NOT NULL,
  `nama_mapel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`kode_mapel`, `nama_mapel`) VALUES
(201, 'matematika'),
(202, 'bahasa indonesia'),
(203, 'agama'),
(204, 'bahasa inggris');

-- --------------------------------------------------------

--
-- Stand-in structure for view `nama_siswa`
-- (See below for the actual view)
--
CREATE TABLE `nama_siswa` (
`nisn` int(11)
,`nama_siswa` varchar(20)
,`jk` varchar(1)
,`kode_kelas` int(2)
,`jenis_kelas` varchar(3)
);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nisn` int(11) NOT NULL,
  `nama_siswa` varchar(20) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal-lahir` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `no_hp` int(15) NOT NULL,
  `nama_wali` varchar(20) NOT NULL,
  `no_hp_wali` int(15) NOT NULL,
  `kode_kelas` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nisn`, `nama_siswa`, `jk`, `tempat_lahir`, `tanggal-lahir`, `alamat`, `email`, `no_hp`, `nama_wali`, `no_hp_wali`, `kode_kelas`) VALUES
(41021021, 'Adid', 'L', 'lumajang', '1999-02-04', 'lmj', 'adid@gmail.com', 827192112, 'sugiren', 82312321, 10),
(41021022, 'Adif', 'L', 'JEMBER', '1998-03-04', 'jbr', 'adif@gmail.com', 827192166, 'sugiyem', 82312311, 11),
(41021023, 'Adib', 'L', 'banyuwangi', '1999-02-07', 'bwi', 'adib@gmail.com', 827552112, 'sugiman', 82882321, 10);

-- --------------------------------------------------------

--
-- Structure for view `nama_siswa`
--
DROP TABLE IF EXISTS `nama_siswa`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `nama_siswa`  AS  select `siswa`.`nisn` AS `nisn`,`siswa`.`nama_siswa` AS `nama_siswa`,`siswa`.`jk` AS `jk`,`kelas`.`kode_kelas` AS `kode_kelas`,`kelas`.`jenis_kelas` AS `jenis_kelas` from (`siswa` join `kelas` on((`siswa`.`kode_kelas` = `kelas`.`kode_kelas`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`NIP`),
  ADD KEY `kode_mapel` (`kode_mapel`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`kode_kelas`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`kode_mapel`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nisn`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `guru`
--
ALTER TABLE `guru`
  ADD CONSTRAINT `guru_ibfk_1` FOREIGN KEY (`kode_mapel`) REFERENCES `mapel` (`kode_mapel`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
