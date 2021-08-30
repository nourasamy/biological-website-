-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2021 at 04:17 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fci`
--

-- --------------------------------------------------------

--
-- Table structure for table `pneumonia`
--

CREATE TABLE `pneumonia` (
  `id` int(11) NOT NULL,
  `Genome_Name` varchar(255) DEFAULT NULL,
  `Genome_Symbol` text DEFAULT NULL,
  `Gene_Type` varchar(255) DEFAULT NULL,
  `Fasta_Seq` text DEFAULT NULL,
  `Complete_Genome` text DEFAULT NULL,
  `Gc` float DEFAULT NULL,
  `Reverse` text DEFAULT NULL,
  `complement` text DEFAULT NULL,
  `translation` text DEFAULT NULL,
  `transcription` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pneumonia`
--

INSERT INTO `pneumonia` (`id`, `Genome_Name`, `Genome_Symbol`, `Gene_Type`, `Fasta_Seq`, `Complete_Genome`, `Gc`, `Reverse`, `complement`, `translation`, `transcription`) VALUES
(11, 'test10', 'iik', 'kk', 'kk', 'gccg', NULL, NULL, NULL, NULL, NULL),
(12, 'demo', 'demo', 'demo', 'GCG', 'GCGC', 0, '', 'CGCG', '', 'GCGC'),
(13, 'demo', 'demo', 'demo', 'GCG', 'GCGCTGT', 0, '', 'CGCGACA', '', 'GCGCUGU'),
(14, 'demo', 'demo', 'demo', 'GCG', 'GCGCTGT', 0, '', 'CGCGACA', '', 'GCGCUGU'),
(15, 'demo', 'demo', 'demo', 'GCG', 'TAGGATGAGTGTGAGACCTTGCAAATTTGA', 0, '', 'ATCCTACTCACACTCTGGAACGTTTAAACT', '  D E C E T L Q I _', 'UAGGAUGAGUGUGAGACCUUGCAAAUUUGA'),
(16, 'demo', 'demo', 'demo', 'GCG', 'TAGGATGAGTGTGAGACCTTGCAAATTTGA', 0.4, '', 'ATCCTACTCACACTCTGGAACGTTTAAACT', '  D E C E T L Q I _', 'UAGGAUGAGUGUGAGACCUUGCAAAUUUGA'),
(17, 'demo10', 'demo', 'demo', 'GCG', 'TAGGATGAGTGTGAGACCTTGCAAATTTGA', 40, 'AGTTTAAACGTTCCAGAGTGTGAGTAGGAT', 'ATCCTACTCACACTCTGGAACGTTTAAACT', '  D E C E T L Q I _', 'UAGGAUGAGUGUGAGACCUUGCAAAUUUGA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pneumonia`
--
ALTER TABLE `pneumonia`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pneumonia`
--
ALTER TABLE `pneumonia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
