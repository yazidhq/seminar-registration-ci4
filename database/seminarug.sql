-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2023 at 11:01 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seminarug`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `username`, `password`) VALUES
(5, 'Yazid Dhiaulhaq Ismail', 'yazid', '$2y$10$rmQj3B2wfHw6/DZo/yyM1OJlB29pE3cBbWeReayCycC9hc5sHjVN6'),
(6, 'Admin Seminar', 'admin', '$2y$10$bCy8nuAIOvuZ/tol7WRwN.O9WF0b7x6fEZaH/X9jlFzYk/rFM2HSa');

-- --------------------------------------------------------

--
-- Table structure for table `dokumentasi`
--

CREATE TABLE `dokumentasi` (
  `id_dok` int(11) NOT NULL,
  `id_seminar` int(11) NOT NULL,
  `tema` varchar(255) NOT NULL,
  `img1` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `img3` varchar(255) NOT NULL,
  `img4` varchar(255) NOT NULL,
  `img5` varchar(255) NOT NULL,
  `img6` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dokumentasi`
--

INSERT INTO `dokumentasi` (`id_dok`, `id_seminar`, `tema`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`) VALUES
(10, 18, 'International Conference on Dermatology and Dermatologic Surgery (ICDDS) - Research Fora ', '1083467_8.jpg', '1083467_9.jpg', '1117221_3.jpg', '1117221_4.jpg', '1117221_5.jpg', '1121326_1.png'),
(11, 17, 'National Conference on Mathematics and Geometric Analysis (ICMGA) - Research Fora ', '1121326_2.png', '1121326_3.png', '1121326_4.png', '1121326_5.png', '1121326_6.png', '1121326_7.png');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` int(11) NOT NULL,
  `id_seminar` int(11) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `wa` varchar(15) NOT NULL,
  `instansi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `id_seminar`, `nip`, `nama`, `email`, `wa`, `instansi`) VALUES
(54, 18, 'qwe', 'Santi', 'asd@asd.asda', '141351341415', '1231'),
(57, 18, 'qweqweqwe', 'qweqweqweq', 'asd@asd.asd', '141351341415', 'asd'),
(58, 16, 'as', 'asd', 'asd@asd.asda', '123', '132'),
(59, 16, '1231231', '31231231', 'asd@asd.asd', '123131', '32131231');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `wa` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pesan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `nama`, `wa`, `email`, `pesan`) VALUES
(5, 'asd', '141351341415', 'asd@asd.asda', 'asd'),
(6, 'ad', '141351341415', 'asd@asd.asd', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL,
  `id_seminar` int(11) NOT NULL,
  `npm` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `wa` varchar(15) NOT NULL,
  `instansi` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mahasiswa`, `id_seminar`, `npm`, `nama`, `email`, `wa`, `instansi`, `jurusan`) VALUES
(11, 18, 'asd', 'asd', 'asd@asd.asda', '123', 'asd', 'dasdasd'),
(12, 16, 'asd', 'asd', 'asd@asd.asda', '123', '1231', 'dasdasd'),
(14, 16, '12312313123', '1231231', 'asd@asd.asda', '1231231', '1231231231', '2313123');

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `id_materi` int(11) NOT NULL,
  `id_seminar` int(11) NOT NULL,
  `tema` varchar(255) NOT NULL,
  `materi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`id_materi`, `id_seminar`, `tema`, `materi`) VALUES
(20, 18, 'International Conference on Dermatology and Dermatologic Surgery (ICDDS) - Research Fora ', '1572-6804-1-PB_2.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `seminar`
--

CREATE TABLE `seminar` (
  `id_seminar` int(11) NOT NULL,
  `tema` varchar(255) NOT NULL,
  `kategori` varchar(10) NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `narasumber` varchar(50) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `kontak` varchar(15) NOT NULL,
  `periode` varchar(50) NOT NULL,
  `kuota` longtext NOT NULL,
  `pelaksanaan` varchar(50) NOT NULL,
  `cover` longtext NOT NULL,
  `wag1` varchar(100) NOT NULL,
  `wag2` varchar(100) NOT NULL,
  `wag3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seminar`
--

INSERT INTO `seminar` (`id_seminar`, `tema`, `kategori`, `tempat`, `narasumber`, `deskripsi`, `kontak`, `periode`, `kuota`, `pelaksanaan`, `cover`, `wag1`, `wag2`, `wag3`) VALUES
(4, 'World congress on Plant Pathology & Plant Biotechnology (WCPP) - Research Fora ', 'luring', 'Jl Grand Galaxy Park Jl. Boulevard Raya No.1, RT.003/RW.017, Jaka Setia, Kec. Bekasi Sel., Kota Bks, Jawa Barat 17147', 'Manusia', 'Research Fora is a multi-disciplinary canopy for associations and organizations from several developed and developing countries to collaborate and contribute towards sustainable developments that are solutions to man- kind. ', '08129926822', 'Jan 10, 2025 12:30:00', '10', '26 Jan 2025 09:00', 'cover-seminar_4.jpg', 'www.google.com', 'www.google.com', 'www.google.com'),
(5, 'International Conference on Mathematics and Geometric Analysis (ICMGA) - Research Fora ', 'daring', '', 'Manusiaa', 'Research Fora is a multi-disciplinary canopy for associations and organizations from several developed and developing countries to collaborate and contribute towards sustainable developments that are solutions to man- kind. ', '08129926822', 'Jan 10, 2022 12:30:00', '10', '12 Jan 2022 12:00', 'cover-seminar_3.jpg', 'www.google.com', 'www.google.com', 'www.google.com'),
(6, 'International Conference on Dermatology and Dermatologic Surgery (ICDDS) - Research Fora ', 'luring', 'Jl Grand Galaxy Park Jl. Boulevard Raya No.1, RT.003/RW.017, Jaka Setia, Kec. Bekasi Sel., Kota Bks, Jawa Barat 17147', 'Manusiaa', 'Research Fora is a multi-disciplinary canopy for associations and organizations from several developed and developing countries to collaborate and contribute towards sustainable developments that are solutions to man- kind. ', '08129926822', 'Jan 10, 2022 12:30:00', '99', '12 Jan 2022 12:00', 'cover-seminar_5.jpg', 'www.google.com', 'www.google.com', 'www.google.com'),
(7, ' 	International Conference on Meteorology, Climatology and Atmospheric Physics (ICMCAP) - Research Fora ', 'daring', '', 'Manusiaa', 'Research Fora is a multi-disciplinary canopy for associations and organizations from several developed and developing countries to collaborate and contribute towards sustainable developments that are solutions to man- kind. ', '08129926822', 'Jan 10, 2025 12:30:00', '10', '26 Jan 2025 09:00', 'cover-seminar_6.jpg', 'www.google.com', 'www.google.com', 'www.google.com'),
(8, 'World congress on Plant Pathology & Plant Biotechnology (WCPP) - Research Fora ', 'luring', 'Jl Grand Galaxy Park Jl. Boulevard Raya No.1, RT.003/RW.017, Jaka Setia, Kec. Bekasi Sel., Kota Bks, Jawa Barat 17147', 'Manusia', 'Research Fora is a multi-disciplinary canopy for associations and organizations from several developed and developing countries to collaborate and contribute towards sustainable developments that are solutions to man- kind. ', '08129926822', 'Jan 10, 2025 12:30:00', '10', '26 Jan 2025 09:00', 'cover-seminar_4.jpg', 'www.google.com', 'www.google.com', 'www.google.com'),
(9, 'International Conference on Mathematics and Geometric Analysis (ICMGA) - Research Fora ', 'daring', '', 'Manusiaa', 'Research Fora is a multi-disciplinary canopy for associations and organizations from several developed and developing countries to collaborate and contribute towards sustainable developments that are solutions to man- kind. ', '08129926822', 'Jan 10, 2022 12:30:00', '10', '12 Jan 2022 12:00', 'cover-seminar_3.jpg', 'www.google.com', 'www.google.com', 'www.google.com'),
(10, 'International Conference on Dermatology and Dermatologic Surgery (ICDDS) - Research Fora ', 'luring', 'Jl Grand Galaxy Park Jl. Boulevard Raya No.1, RT.003/RW.017, Jaka Setia, Kec. Bekasi Sel., Kota Bks, Jawa Barat 17147', 'Manusiaa', 'Research Fora is a multi-disciplinary canopy for associations and organizations from several developed and developing countries to collaborate and contribute towards sustainable developments that are solutions to man- kind. ', '08129926822', 'Jan 10, 2022 12:30:00', '99', '12 Jan 2022 12:00', 'cover-seminar_5.jpg', 'www.google.com', 'www.google.com', 'www.google.com'),
(11, ' 	International Conference on Meteorology, Climatology and Atmospheric Physics (ICMCAP) - Research Fora ', 'daring', '', 'Manusiaa', 'Research Fora is a multi-disciplinary canopy for associations and organizations from several developed and developing countries to collaborate and contribute towards sustainable developments that are solutions to man- kind. ', '08129926822', 'Jan 10, 2025 12:30:00', '10', '26 Jan 2025 09:00', 'cover-seminar_6.jpg', 'www.google.com', 'www.google.com', 'www.google.com'),
(12, 'World congress on Plant Pathology & Plant Biotechnology (WCPP) - Research Fora ', 'luring', 'Jl Grand Galaxy Park Jl. Boulevard Raya No.1, RT.003/RW.017, Jaka Setia, Kec. Bekasi Sel., Kota Bks, Jawa Barat 17147', 'Manusia', 'Research Fora is a multi-disciplinary canopy for associations and organizations from several developed and developing countries to collaborate and contribute towards sustainable developments that are solutions to man- kind. ', '08129926822', 'Jan 10, 2025 12:30:00', '10', '26 Jan 2025 09:00', 'cover-seminar_4.jpg', 'www.google.com', 'www.google.com', 'www.google.com'),
(13, 'International Conference on Mathematics and Geometric Analysis (ICMGA) - Research Fora ', 'daring', '', 'Manusiaa', 'Research Fora is a multi-disciplinary canopy for associations and organizations from several developed and developing countries to collaborate and contribute towards sustainable developments that are solutions to man- kind. ', '08129926822', 'Jan 10, 2022 12:30:00', '10', '12 Jan 2022 12:00', 'cover-seminar_3.jpg', 'www.google.com', 'www.google.com', 'www.google.com'),
(14, 'International Conference on Dermatology and Dermatologic Surgery (ICDDS) - Research Fora ', 'luring', 'Jl Grand Galaxy Park Jl. Boulevard Raya No.1, RT.003/RW.017, Jaka Setia, Kec. Bekasi Sel., Kota Bks, Jawa Barat 17147', 'Manusiaa', 'Research Fora is a multi-disciplinary canopy for associations and organizations from several developed and developing countries to collaborate and contribute towards sustainable developments that are solutions to man- kind. ', '08129926822', 'Jan 10, 2022 12:30:00', '99', '12 Jan 2022 12:00', 'cover-seminar_5.jpg', 'www.google.com', 'www.google.com', 'www.google.com'),
(15, ' 	International Conference on Meteorology, Climatology and Atmospheric Physics (ICMCAP) - Research Fora ', 'daring', '', 'Manusiaa', 'Research Fora is a multi-disciplinary canopy for associations and organizations from several developed and developing countries to collaborate and contribute towards sustainable developments that are solutions to man- kind. ', '08129926822', 'Jan 10, 2025 12:30:00', '10', '26 Jan 2025 09:00', 'cover-seminar_6.jpg', 'www.google.com', 'www.google.com', 'www.google.com'),
(16, 'World congress on Plant Pathology & Plant Biotechnology (WCPP) - Research Fora ', 'luring', 'Jl Grand Galaxy Park Jl. Boulevard Raya No.1, RT.003/RW.017, Jaka Setia, Kec. Bekasi Sel., Kota Bks, Jawa Barat 17147', 'Manusia', 'Research Fora is a multi-disciplinary canopy for associations and organizations from several developed and developing countries to collaborate and contribute towards sustainable developments that are solutions to man- kind. ', '08129926822', 'Jan 10, 2025 12:30:00', '10', '26 Jan 2025 09:00', 'cover-seminar_4.jpg', 'www.google.com', 'www.google.com', 'www.google.com'),
(17, 'National Conference on Mathematics and Geometric Analysis (ICMGA) - Research Fora ', 'daring', '', 'Manusiaa', 'Research Fora is a multi-disciplinary canopy for associations and organizations from several developed and developing countries to collaborate and contribute towards sustainable developments that are solutions to man- kind. ', '08129926822', 'Jan 10, 2022 12:30:00', '10', '12 Jan 2022 12:00', 'cover-seminar_3.jpg', 'www.google.com', 'www.google.com', 'www.google.com'),
(18, 'International Conference on Dermatology and Dermatologic Surgery (ICDDS) - Research Fora ', 'luring', 'Jl Grand Galaxy Park Jl. Boulevard Raya No.1, RT.003/RW.017, Jaka Setia, Kec. Bekasi Sel., Kota Bks, Jawa Barat 17147', 'Manusiaa', 'Research Fora is a multi-disciplinary canopy for associations and organizations from several developed and developing countries to collaborate and contribute towards sustainable developments that are solutions to man- kind. ', '08129926822', 'Jan 10, 2025 12:30:00', '4', '12 Jan 2022 12:00', 'cover-seminar_5.jpg', 'www.google.com', 'www.google.com', 'www.google.com');

-- --------------------------------------------------------

--
-- Table structure for table `umum`
--

CREATE TABLE `umum` (
  `id_umum` int(11) NOT NULL,
  `id_seminar` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `wa` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `umum`
--

INSERT INTO `umum` (`id_umum`, `id_seminar`, `nik`, `nama`, `email`, `wa`) VALUES
(8, 18, '1231241241241241', 'cbcvb', 'asd@asd.asda', '141351341415'),
(9, 16, 'asd', 'ad', 'asd@asd.asda', '141351341415'),
(10, 16, '123123123', '12312312', 'asd@asd.asda1', '123123'),
(11, 16, '1231231', '3123123123', 'asd@asd.asda', '123123123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `dokumentasi`
--
ALTER TABLE `dokumentasi`
  ADD PRIMARY KEY (`id_dok`),
  ADD KEY `id_seminar` (`id_seminar`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`),
  ADD KEY `id_seminar` (`id_seminar`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`),
  ADD KEY `id_seminar` (`id_seminar`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id_materi`),
  ADD KEY `id_seminar` (`id_seminar`);

--
-- Indexes for table `seminar`
--
ALTER TABLE `seminar`
  ADD PRIMARY KEY (`id_seminar`);

--
-- Indexes for table `umum`
--
ALTER TABLE `umum`
  ADD PRIMARY KEY (`id_umum`),
  ADD KEY `id_seminar` (`id_seminar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dokumentasi`
--
ALTER TABLE `dokumentasi`
  MODIFY `id_dok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `id_materi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `seminar`
--
ALTER TABLE `seminar`
  MODIFY `id_seminar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `umum`
--
ALTER TABLE `umum`
  MODIFY `id_umum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dokumentasi`
--
ALTER TABLE `dokumentasi`
  ADD CONSTRAINT `dokumentasi_ibfk_1` FOREIGN KEY (`id_seminar`) REFERENCES `seminar` (`id_seminar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dosen`
--
ALTER TABLE `dosen`
  ADD CONSTRAINT `dosen_ibfk_1` FOREIGN KEY (`id_seminar`) REFERENCES `seminar` (`id_seminar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`id_seminar`) REFERENCES `seminar` (`id_seminar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `materi`
--
ALTER TABLE `materi`
  ADD CONSTRAINT `materi_ibfk_1` FOREIGN KEY (`id_seminar`) REFERENCES `seminar` (`id_seminar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `umum`
--
ALTER TABLE `umum`
  ADD CONSTRAINT `umum_ibfk_1` FOREIGN KEY (`id_seminar`) REFERENCES `seminar` (`id_seminar`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
