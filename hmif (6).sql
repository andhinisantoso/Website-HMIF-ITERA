-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2020 at 05:45 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hmif`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(5) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(64) NOT NULL,
  `id_active` int(1) NOT NULL,
  `tgl_daftar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `email`, `password`, `id_active`, `tgl_daftar`) VALUES
(1, 'admin@admin.com', '202cb962ac59075b964b07152d234b70', 1, '0000-00-00'),
(8, 'tes@gmail.com', '28b662d883b6d76fd96e4ddc5e9ba780', 0, '2020-04-25'),
(21, 'wandagmanser@gmail.com', '202cb962ac59075b964b07152d234b70', 1, '2020-05-06');

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `nim` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `th_masuk` int(4) NOT NULL,
  `th_lulus` int(4) NOT NULL,
  `jdl_skripsi` varchar(100) NOT NULL,
  `link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`nim`, `nama`, `th_masuk`, `th_lulus`, `jdl_skripsi`, `link`) VALUES
(14116007, 'Gusti Nugroho', 2028, 2030, 'pembuktian big o algoritma brute force', 'www.arrumi.com'),
(14117007, 'Ahmad Auzan Varian Syahputra', 2017, 2021, 'pengembangan aplikasi perangkat lunak tertanam dengan mikrokontroller nodeMCU', 'drive.google.com/drive/u/2/my-drive'),
(14117123, 'Rizki Pratama', 2021, 2022, 'membuktikan big 0 dalam penyelesaian algoritma greedy', 'https://classroom.google.com/u/0/c/NTM3OTg1MDEyMzRa');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(5) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `foto` varchar(255) DEFAULT 'no_image.jpg',
  `deskripsi` text DEFAULT NULL,
  `waktu` timestamp NULL DEFAULT current_timestamp(),
  `tempat` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `foto`, `deskripsi`, `waktu`, `tempat`) VALUES
(982, 'HMIF juara Softball', 'sofball.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ac condimentum lacus, a ultrices sem. Ut molestie imperdiet enim, sed hendrerit urna. Proin imperdiet massa nec lacus viverra convallis. Nulla facilisi. Nunc vitae imperdiet neque. Morbi mollis, nunc vel faucibus ultricies, lacus arcu faucibus orci, ac laoreet nibh dui eget velit. Nunc ultricies, urna aliquet efficitur luctus, ipsum massa porttitor mauris, quis malesuada mauris nisi eu sapien. Aliquam quis posuere ligula. Ut odio ante, accumsan pellentesque pharetra in, vulputate quis sem. Vestibulum nulla risus, dapibus eu iaculis ut, suscipit quis erat. Donec blandit varius sapien non fringilla. Fusce efficitur tempus lobortis. Sed enim sapien, dapibus vitae commodo vitae, rutrum non tellus. Nullam sed elit sed risus placerat porta quis vel diam.\r\n\r\nInteger risus urna, interdum vitae sagittis vitae, ornare eget turpis. Praesent arcu tellus, porta ut mi sed, vehicula ultricies massa. Nunc elit est, tristique eu scelerisque et, pharetra quis justo. Nulla efficitur tellus ac sapien molestie, id varius magna auctor. Vestibulum lacinia suscipit erat sit amet molestie. Mauris neque enim, rhoncus ut nisl sed, facilisis vehicula ligula. Nulla efficitur, tellus eget facilisis convallis, lacus mauris tincidunt purus, non bibendum lacus lorem id augue. Praesent tincidunt eleifend nisl, eget faucibus lacus sollicitudin vel.\r\n\r\nMauris accumsan arcu risus, at rutrum ante convallis quis. Nam lacus ligula, posuere vel pharetra vitae, lobortis sed orci. Aliquam erat volutpat. Nunc ultrices, nisi at sollicitudin pellentesque, est est facilisis lorem, eu hendrerit sapien libero nec neque. Aliquam porttitor metus nunc, quis aliquam metus porta a. Sed sem est, dictum nec tincidunt nec, maximus quis lectus. Quisque viverra egestas massa, eget ultricies nisl congue in. Integer ipsum dui, facilisis et erat non, placerat suscipit turpis. Praesent elit metus, vehicula in gravida id, finibus sit amet urna. Praesent porttitor lectus eu arcu venenatis, et pretium erat tempor. Sed aliquet molestie nisl sed varius. Vivamus erat mi, pretium eu lobortis sed, tempus sed felis. Fusce efficitur pretium tristique. Vestibulum aliquam posuere erat. Suspendisse et mauris nec ipsum eleifend malesuada id vel ligula. Morbi quis urna eget orci aliquet pulvinar.\r\n\r\nDonec bibendum tempor augue, non facilisis neque accumsan at. Phasellus ac gravida sapien. In hac habitasse platea dictumst. Integer libero nisi, semper vitae ex et, vehicula commodo ligula. Phasellus euismod massa lobortis luctus sodales. Mauris faucibus et elit tempus semper. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce massa sem, efficitur non egestas eget, pharetra quis lacus.\r\n\r\nDonec ac neque eu lectus tempor auctor vitae in ipsum. Nam elementum, ante sed lobortis mattis, velit neque rhoncus eros, non tincidunt mauris erat eget lorem. Aliquam dapibus fermentum tortor, a congue sapien sodales vitae. Fusce et ullamcorper massa. Cras id nisl fringilla, tristique velit non, tristique lectus. Sed vehicula molestie mi, nec viverra erat venenatis et. Praesent in interdum lorem. Curabitur elementum auctor nulla id pulvinar. Fusce dapibus eros leo, sit amet suscipit orci convallis dictum. Nullam condimentum nisi est, pellentesque finibus massa volutpat in. Donec ac pharetra velit. Curabitur elit mauris, vehicula quis vehicula et, luctus ut lectus. Nulla turpis lectus, accumsan non aliquam nec, venenatis eu lorem. Pellentesque commodo accumsan sagittis. Cras facilisis elit vitae magna feugiat, et mattis ligula malesuada. Cras blandit diam libero, at scelerisque dui placerat a.', '2020-04-19 20:08:00', 'Pekor'),
(983, 'Covid 19 merebak', 'covid.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ac condimentum lacus, a ultrices sem. Ut molestie imperdiet enim, sed hendrerit urna. Proin imperdiet massa nec lacus viverra convallis. Nulla facilisi. Nunc vitae imperdiet neque. Morbi mollis, nunc vel faucibus ultricies, lacus arcu faucibus orci, ac laoreet nibh dui eget velit. Nunc ultricies, urna aliquet efficitur luctus, ipsum massa porttitor mauris, quis malesuada mauris nisi eu sapien. Aliquam quis posuere ligula. Ut odio ante, accumsan pellentesque pharetra in, vulputate quis sem. Vestibulum nulla risus, dapibus eu iaculis ut, suscipit quis erat. Donec blandit varius sapien non fringilla. Fusce efficitur tempus lobortis. Sed enim sapien, dapibus vitae commodo vitae, rutrum non tellus. Nullam sed elit sed risus placerat porta quis vel diam.\r\n\r\nInteger risus urna, interdum vitae sagittis vitae, ornare eget turpis. Praesent arcu tellus, porta ut mi sed, vehicula ultricies massa. Nunc elit est, tristique eu scelerisque et, pharetra quis justo. Nulla efficitur tellus ac sapien molestie, id varius magna auctor. Vestibulum lacinia suscipit erat sit amet molestie. Mauris neque enim, rhoncus ut nisl sed, facilisis vehicula ligula. Nulla efficitur, tellus eget facilisis convallis, lacus mauris tincidunt purus, non bibendum lacus lorem id augue. Praesent tincidunt eleifend nisl, eget faucibus lacus sollicitudin vel.\r\n\r\nMauris accumsan arcu risus, at rutrum ante convallis quis. Nam lacus ligula, posuere vel pharetra vitae, lobortis sed orci. Aliquam erat volutpat. Nunc ultrices, nisi at sollicitudin pellentesque, est est facilisis lorem, eu hendrerit sapien libero nec neque. Aliquam porttitor metus nunc, quis aliquam metus porta a. Sed sem est, dictum nec tincidunt nec, maximus quis lectus. Quisque viverra egestas massa, eget ultricies nisl congue in. Integer ipsum dui, facilisis et erat non, placerat suscipit turpis. Praesent elit metus, vehicula in gravida id, finibus sit amet urna. Praesent porttitor lectus eu arcu venenatis, et pretium erat tempor. Sed aliquet molestie nisl sed varius. Vivamus erat mi, pretium eu lobortis sed, tempus sed felis. Fusce efficitur pretium tristique. Vestibulum aliquam posuere erat. Suspendisse et mauris nec ipsum eleifend malesuada id vel ligula. Morbi quis urna eget orci aliquet pulvinar.\r\n\r\nDonec bibendum tempor augue, non facilisis neque accumsan at. Phasellus ac gravida sapien. In hac habitasse platea dictumst. Integer libero nisi, semper vitae ex et, vehicula commodo ligula. Phasellus euismod massa lobortis luctus sodales. Mauris faucibus et elit tempus semper. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce massa sem, efficitur non egestas eget, pharetra quis lacus.\r\n\r\nDonec ac neque eu lectus tempor auctor vitae in ipsum. Nam elementum, ante sed lobortis mattis, velit neque rhoncus eros, non tincidunt mauris erat eget lorem. Aliquam dapibus fermentum tortor, a congue sapien sodales vitae. Fusce et ullamcorper massa. Cras id nisl fringilla, tristique velit non, tristique lectus. Sed vehicula molestie mi, nec viverra erat venenatis et. Praesent in interdum lorem. Curabitur elementum auctor nulla id pulvinar. Fusce dapibus eros leo, sit amet suscipit orci convallis dictum. Nullam condimentum nisi est, pellentesque finibus massa volutpat in. Donec ac pharetra velit. Curabitur elit mauris, vehicula quis vehicula et, luctus ut lectus. Nulla turpis lectus, accumsan non aliquam nec, venenatis eu lorem. Pellentesque commodo accumsan sagittis. Cras facilisis elit vitae magna feugiat, et mattis ligula malesuada. Cras blandit diam libero, at scelerisque dui placerat a.', '2020-04-19 22:19:00', 'Bandar Lampung'),
(985, 'Itera memberikan kuota gratis', 'itera.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ac condimentum lacus, a ultrices sem. Ut molestie imperdiet enim, sed hendrerit urna. Proin imperdiet massa nec lacus viverra convallis. Nulla facilisi. Nunc vitae imperdiet neque. Morbi mollis, nunc vel faucibus ultricies, lacus arcu faucibus orci, ac laoreet nibh dui eget velit. Nunc ultricies, urna aliquet efficitur luctus, ipsum massa porttitor mauris, quis malesuada mauris nisi eu sapien. Aliquam quis posuere ligula. Ut odio ante, accumsan pellentesque pharetra in, vulputate quis sem. Vestibulum nulla risus, dapibus eu iaculis ut, suscipit quis erat. Donec blandit varius sapien non fringilla. Fusce efficitur tempus lobortis. Sed enim sapien, dapibus vitae commodo vitae, rutrum non tellus. Nullam sed elit sed risus placerat porta quis vel diam.\r\n\r\nInteger risus urna, interdum vitae sagittis vitae, ornare eget turpis. Praesent arcu tellus, porta ut mi sed, vehicula ultricies massa. Nunc elit est, tristique eu scelerisque et, pharetra quis justo. Nulla efficitur tellus ac sapien molestie, id varius magna auctor. Vestibulum lacinia suscipit erat sit amet molestie. Mauris neque enim, rhoncus ut nisl sed, facilisis vehicula ligula. Nulla efficitur, tellus eget facilisis convallis, lacus mauris tincidunt purus, non bibendum lacus lorem id augue. Praesent tincidunt eleifend nisl, eget faucibus lacus sollicitudin vel.\r\n\r\nMauris accumsan arcu risus, at rutrum ante convallis quis. Nam lacus ligula, posuere vel pharetra vitae, lobortis sed orci. Aliquam erat volutpat. Nunc ultrices, nisi at sollicitudin pellentesque, est est facilisis lorem, eu hendrerit sapien libero nec neque. Aliquam porttitor metus nunc, quis aliquam metus porta a. Sed sem est, dictum nec tincidunt nec, maximus quis lectus. Quisque viverra egestas massa, eget ultricies nisl congue in. Integer ipsum dui, facilisis et erat non, placerat suscipit turpis. Praesent elit metus, vehicula in gravida id, finibus sit amet urna. Praesent porttitor lectus eu arcu venenatis, et pretium erat tempor. Sed aliquet molestie nisl sed varius. Vivamus erat mi, pretium eu lobortis sed, tempus sed felis. Fusce efficitur pretium tristique. Vestibulum aliquam posuere erat. Suspendisse et mauris nec ipsum eleifend malesuada id vel ligula. Morbi quis urna eget orci aliquet pulvinar.\r\n\r\nDonec bibendum tempor augue, non facilisis neque accumsan at. Phasellus ac gravida sapien. In hac habitasse platea dictumst. Integer libero nisi, semper vitae ex et, vehicula commodo ligula. Phasellus euismod massa lobortis luctus sodales. Mauris faucibus et elit tempus semper. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce massa sem, efficitur non egestas eget, pharetra quis lacus.\r\n\r\nDonec ac neque eu lectus tempor auctor vitae in ipsum. Nam elementum, ante sed lobortis mattis, velit neque rhoncus eros, non tincidunt mauris erat eget lorem. Aliquam dapibus fermentum tortor, a congue sapien sodales vitae. Fusce et ullamcorper massa. Cras id nisl fringilla, tristique velit non, tristique lectus. Sed vehicula molestie mi, nec viverra erat venenatis et. Praesent in interdum lorem. Curabitur elementum auctor nulla id pulvinar. Fusce dapibus eros leo, sit amet suscipit orci convallis dictum. Nullam condimentum nisi est, pellentesque finibus massa volutpat in. Donec ac pharetra velit. Curabitur elit mauris, vehicula quis vehicula et, luctus ut lectus. Nulla turpis lectus, accumsan non aliquam nec, venenatis eu lorem. Pellentesque commodo accumsan sagittis. Cras facilisis elit vitae magna feugiat, et mattis ligula malesuada. Cras blandit diam libero, at scelerisque dui placerat a.', '2020-04-20 03:38:00', 'Lampung Selatan'),
(993, 'Marhaban Ya Ramadhan', 'ramadhan.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ac condimentum lacus, a ultrices sem. Ut molestie imperdiet enim, sed hendrerit urna. Proin imperdiet massa nec lacus viverra convallis. Nulla facilisi. Nunc vitae imperdiet neque. Morbi mollis, nunc vel faucibus ultricies, lacus arcu faucibus orci, ac laoreet nibh dui eget velit. Nunc ultricies, urna aliquet efficitur luctus, ipsum massa porttitor mauris, quis malesuada mauris nisi eu sapien. Aliquam quis posuere ligula. Ut odio ante, accumsan pellentesque pharetra in, vulputate quis sem. Vestibulum nulla risus, dapibus eu iaculis ut, suscipit quis erat. Donec blandit varius sapien non fringilla. Fusce efficitur tempus lobortis. Sed enim sapien, dapibus vitae commodo vitae, rutrum non tellus. Nullam sed elit sed risus placerat porta quis vel diam.\r\n\r\nInteger risus urna, interdum vitae sagittis vitae, ornare eget turpis. Praesent arcu tellus, porta ut mi sed, vehicula ultricies massa. Nunc elit est, tristique eu scelerisque et, pharetra quis justo. Nulla efficitur tellus ac sapien molestie, id varius magna auctor. Vestibulum lacinia suscipit erat sit amet molestie. Mauris neque enim, rhoncus ut nisl sed, facilisis vehicula ligula. Nulla efficitur, tellus eget facilisis convallis, lacus mauris tincidunt purus, non bibendum lacus lorem id augue. Praesent tincidunt eleifend nisl, eget faucibus lacus sollicitudin vel.\r\n\r\nMauris accumsan arcu risus, at rutrum ante convallis quis. Nam lacus ligula, posuere vel pharetra vitae, lobortis sed orci. Aliquam erat volutpat. Nunc ultrices, nisi at sollicitudin pellentesque, est est facilisis lorem, eu hendrerit sapien libero nec neque. Aliquam porttitor metus nunc, quis aliquam metus porta a. Sed sem est, dictum nec tincidunt nec, maximus quis lectus. Quisque viverra egestas massa, eget ultricies nisl congue in. Integer ipsum dui, facilisis et erat non, placerat suscipit turpis. Praesent elit metus, vehicula in gravida id, finibus sit amet urna. Praesent porttitor lectus eu arcu venenatis, et pretium erat tempor. Sed aliquet molestie nisl sed varius. Vivamus erat mi, pretium eu lobortis sed, tempus sed felis. Fusce efficitur pretium tristique. Vestibulum aliquam posuere erat. Suspendisse et mauris nec ipsum eleifend malesuada id vel ligula. Morbi quis urna eget orci aliquet pulvinar.\r\n\r\nDonec bibendum tempor augue, non facilisis neque accumsan at. Phasellus ac gravida sapien. In hac habitasse platea dictumst. Integer libero nisi, semper vitae ex et, vehicula commodo ligula. Phasellus euismod massa lobortis luctus sodales. Mauris faucibus et elit tempus semper. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce massa sem, efficitur non egestas eget, pharetra quis lacus.\r\n\r\nDonec ac neque eu lectus tempor auctor vitae in ipsum. Nam elementum, ante sed lobortis mattis, velit neque rhoncus eros, non tincidunt mauris erat eget lorem. Aliquam dapibus fermentum tortor, a congue sapien sodales vitae. Fusce et ullamcorper massa. Cras id nisl fringilla, tristique velit non, tristique lectus. Sed vehicula molestie mi, nec viverra erat venenatis et. Praesent in interdum lorem. Curabitur elementum auctor nulla id pulvinar. Fusce dapibus eros leo, sit amet suscipit orci convallis dictum. Nullam condimentum nisi est, pellentesque finibus massa volutpat in. Donec ac pharetra velit. Curabitur elit mauris, vehicula quis vehicula et, luctus ut lectus. Nulla turpis lectus, accumsan non aliquam nec, venenatis eu lorem. Pellentesque commodo accumsan sagittis. Cras facilisis elit vitae magna feugiat, et mattis ligula malesuada. Cras blandit diam libero, at scelerisque dui placerat a.', '2020-04-20 13:29:16', 'ITERA');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(5) NOT NULL,
  `nm_kepengurusan` varchar(25) DEFAULT NULL,
  `periode` int(4) DEFAULT NULL,
  `foto_sejarah` varchar(255) DEFAULT NULL,
  `foto_visimisi` varchar(255) DEFAULT NULL,
  `foto_kepengurusan` varchar(255) DEFAULT NULL,
  `foto_baner` varchar(255) DEFAULT NULL,
  `foto_logo` varchar(255) DEFAULT NULL,
  `foto_staff` varchar(255) DEFAULT NULL,
  `aktif` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id_profil`, `nm_kepengurusan`, `periode`, `foto_sejarah`, `foto_visimisi`, `foto_kepengurusan`, `foto_baner`, `foto_logo`, `foto_staff`, `aktif`) VALUES
(2, 'Sersan', 2020, '11.png', '1.PNG', 'kepengurusan bejo', 'banner.jpg', '11.png', 'full.PNG', 1),
(105, 'megatric', 2016, 'bismillah1.JPG', '11.png', NULL, 'banner1.jpg', '111.png', 'full1.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `repositori`
--

CREATE TABLE `repositori` (
  `id_rep` int(5) NOT NULL,
  `nama_folder` varchar(255) NOT NULL,
  `nama_file` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `repositori`
--

INSERT INTO `repositori` (`id_rep`, `nama_folder`, `nama_file`, `link`) VALUES
(2, 'Kesekretariatan', 'pemetaan 2020', 'www.google.com'),
(4, 'Informatika', 'Proyek Perangkat Lunak', 'drive.google.com/drive/u/2/my-drive'),
(9, 'elektro', 'embedded 2020', 'www.kitabisa.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indexes for table `repositori`
--
ALTER TABLE `repositori`
  ADD PRIMARY KEY (`id_rep`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1003;

--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `repositori`
--
ALTER TABLE `repositori`
  MODIFY `id_rep` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
