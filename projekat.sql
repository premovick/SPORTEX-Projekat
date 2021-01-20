-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2021 at 03:39 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projekat`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `ime` varchar(30) NOT NULL,
  `prezime` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `ime`, `prezime`, `email`, `password`) VALUES
(1, 'Katarina', 'Prezime', 'katarina9911@live.com', '123456789'),
(2, 'Petar', 'Petrovic', 'petar@gmail.com', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `korpa`
--

CREATE TABLE `korpa` (
  `id` int(11) NOT NULL,
  `datum_vreme` datetime NOT NULL,
  `ukupno` decimal(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `proizvodi`
--

CREATE TABLE `proizvodi` (
  `id` int(11) NOT NULL,
  `prozivod` varchar(50) NOT NULL,
  `grupa` enum('patike','odeca','','') NOT NULL,
  `pol` enum('musko','zensko','decije','') NOT NULL,
  `cena` varchar(15) NOT NULL,
  `slika` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `proizvodi`
--

INSERT INTO `proizvodi` (`id`, `prozivod`, `grupa`, `pol`, `cena`, `slika`) VALUES
(1, 'NIKE PATIKE NIKE AIR', 'patike', 'musko', '29.590,00 RSD', 'slika1.jpg'),
(2, 'NIKE PATIKE AIR MAX 97', 'patike', 'musko', '23.690,00 RSD', 'slika2.jpg'),
(3, 'ADIDAS PATIKE SUPERSTAR', 'patike', 'musko', '8.632,80 RSD', 'slika3.jpg'),
(4, 'ADIDAS PATIKE SUPERSTAR', 'patike', 'musko', '8.632,00 RSD', 'slika4.jpg'),
(5, 'NIKE PATIKE NIKE AIR', 'patike', 'musko', '26.290,00 RSD', 'slika5.jpg'),
(6, 'NIKE PATIKE NIKE AIR MAX', 'patike', 'musko', '15.832,01 RSD', 'slika6.jpg'),
(7, 'NIKE PATIKE NIKE AIR MAX', 'patike', 'musko', '15.832,01 RSD', 'slika7.jpg'),
(8, 'NIKE PATIKE NIKE AIR MAX', 'patike', 'musko', '14.791,99 RSD', 'slika8.jpg'),
(9, 'NIKE PATIKE NIKE AIR MAX', 'patike', 'musko', '19.790,00 RSD', 'slika9.jpg'),
(10, 'NIKE PATIKE AIR FORCE 1', 'patike', 'musko', '14.490,00 RSD', 'slika10.jpg'),
(11, 'NIKE PATIKE AIR FORCE 1', 'patike', 'musko', '16.990,00 RSD', 'slika11.jpg'),
(12, 'NIKE PATIKE NIKE MX-720', 'patike', 'musko', '19.992,00 RSD', 'slika12.jpg'),
(13, 'NIKE PATIKE NIKE AIR MAX', 'patike', 'musko', '18.552,00 RSD', 'slika13.jpg'),
(14, 'NIKE PATIKE AIR MAX 90 LTR', 'patike', 'musko', '18.490,00 RSD', 'slika14.jpg'),
(15, 'NIKE PATIKE AIR MAX 90', 'patike', 'musko', '14.552,00 RSD', 'slika15.jpg'),
(16, 'ADIDAS PATIKE SUPERSTAR', 'patike', 'zensko', '14.399,00 RSD', 'slika16.jpg'),
(17, 'NEW BALANCE PATIKE NEW', 'patike', 'zensko', '9.999,00 RSD', 'slika17.jpg'),
(18, 'NIKE PATIKE WMNS AIR', 'patike', 'zensko', '12.990,00 RSD', 'slika18.jpg'),
(19, 'NIKE PATIKE W AIR MAX 95', 'patike', 'zensko', '22.399,00 RSD', 'slika19.jpg'),
(20, 'ADIDAS PATIKE SUPERSTAR', 'patike', 'zensko', '13.199,00 RSD', 'slika20.jpg'),
(21, 'NIKE PATIKE W AIR MAX 95', 'patike', 'zensko', '23.399,00 RSD', 'slika21.jpg'),
(22, 'NIKE PATIKE AIR FORCE 1', 'patike', 'zensko', '14.490,00 RSD', 'slika22.jpg'),
(23, 'NIKE PATIKE AIR FORCE 1', 'patike', 'zensko', '12.990,00 RSD', 'slika23.jpg'),
(24, 'NIKE PATIKE AIR MAX 95', 'patike', 'zensko', '17.911,99 RSD', 'slika24.jpg'),
(25, 'NIKE PATIKE AIR MAX 95', 'patike', 'zensko', '21.890,00 RSD', 'slika25.jpg'),
(26, 'AIDAS PATIKE SUPERSTAR', 'patike', 'zensko', '7.553,70 RSD', 'slika26.jpg'),
(27, 'NIKE PATIKE W AIR MAX 90', 'patike', 'zensko', '18.490,00 RSD', 'slika27.jpg'),
(28, 'AIDAS PATIKE SUPERSTAR', 'patike', 'zensko', '10.552,00 RSD', 'slika28.jpg'),
(29, 'NEW BALANCE PATIKE NEW', 'patike', 'zensko', '7.133,00 RSD', 'slika29.jpg'),
(30, 'NIKE PATIKE W AF1', 'patike', 'zensko', '14.490,00 RSD', 'slika30.jpg'),
(31, 'NIKE PATIKE NIKE AIR MORE', 'patike', 'decije', '11.790,00 RSD', 'slika31.jpg'),
(32, 'NIKE PATIKE AIR MAX 95', 'patike', 'decije', '18.490,00 RSD', 'slika32.jpg'),
(33, 'ADIDAS PATIKE SUPERSTAR', 'patike', 'decije', '8.399,00 RSD', 'slika33.jpg'),
(34, 'NIKE PATIKE AIR FORCE 1', 'patike', 'decije', '12.990,00 RSD', 'slika34.jpg'),
(35, 'NIKE PATIKE NIKE MAX 90', 'patike', 'decije', '5.990,00 RSD', 'slika35.jpg'),
(36, 'NIKE PATIKE NIKE JORDAN 1', 'patike', 'decije', '5.190,00 RSD', 'slika36.jpg'),
(37, 'NIKE PATIKE NIKE AIR MAX', 'patike', 'decije', '4.970,00 RSD', 'slika37.jpg'),
(38, 'NIKE PATIKE AIR MAX 270', 'patike', 'decije', '14.152,00 RSD', 'slika38.jpg'),
(39, 'NIKE PATIKE NIKE AIR MAX', 'patike', 'decije', '8.590,00 RSD', 'slika39.jpg'),
(40, 'PUMA PATIKE PUMA', 'patike', 'decije', '5.033,70 RSD', 'slika40.jpg'),
(41, 'NIKE PATIKE NIKE AIR MAX', 'patike', 'decije', '10.143,00 RSD', 'slika41.jpg'),
(42, 'ADIDAS PATIKE', 'patike', 'decije', '4.530,60 RSD', 'slika42.jpg'),
(43, 'ADIDAS PATIKE ', 'patike', 'decije', '5.490,00 RSD', 'slika43.jpg'),
(44, 'ADIDAS PATIKE ', 'patike', 'decije', '4.990,00 RSD', 'slika44.jpg'),
(45, 'NEW BALANCE PATIKE NEW BALANCE', 'patike', 'decije', '4.990,00 RSD', 'slika45.jpg'),
(46, 'NIKE DUKSERICA M JORDAN', 'odeca', 'musko', '10.499,00 RSD', 'slika46.jpg'),
(47, 'NIKE DUKSERICA', 'odeca', 'musko', '6.312,00 RSD', 'slika47.jpg'),
(48, 'NAPAPIJRI DUKSERICA', 'odeca', 'musko', '7.742,70 RSD', 'slika48.jpg'),
(49, 'NIKE DUKSERICA M NSW', 'odeca', 'musko', '12.632,00 RSD', 'slika49.jpg'),
(50, 'NIKE DUKSERICA NIKE M', 'odeca', 'musko', '8.392,00 RSD', 'slika50.jpg'),
(51, 'ADIDAS DUKSERICA', 'odeca', 'zensko', '5.999,00 RSD', 'slika51.jpg'),
(52, 'NIKE DUKSERICA', 'odeca', 'zensko', '9.093,00 RSD', 'slika52.jpg'),
(53, 'PUMA DUKSERICA', 'odeca', 'zensko', '6.293,00 RSD', 'slika53.jpg'),
(54, 'PUMA DUKSERICA PUMA', 'odeca', 'zensko', '5.383,00 RSD', 'slika54.jpg'),
(55, 'PUMA DUKSERICA', 'odeca', 'zensko', '5.383,00 RSD', 'slika55.jpg'),
(56, 'NIKE DUKSERICA B NSM', 'odeca', 'decije', '7.343,00 RSD', 'slika56.jpg'),
(57, 'NIKE DUKSERICA JORDAN', 'odeca', 'decije', '4.473,00 RSD', 'slika57.jpg'),
(58, 'NIKE DUKSERICA JORDAN', 'odeca', 'decije', '4.990,00 RSD', 'slika58.jpg'),
(59, 'ADIDAS DUKSERICA SST', 'odeca', 'decije', '3.395,70 RSD', 'slika59.jpg'),
(60, 'ADIDAS DUKSERICA SST', 'odeca', 'decije', '3.395,70 RSD', 'slika60.jpg'),
(61, 'NIKE MAJICA M NSW TEE', 'odeca', 'musko', '3.899,00 RSD', 'slika61.jpg'),
(62, 'ADIDAS MAJICA ADV MOUNT', 'odeca', 'musko', '3.999,00 RSD', 'slika62.jpg'),
(63, 'CONVERSE MAJICA', 'odeca', 'musko', '2.392,00 RSD', 'slika63.jpg'),
(64, 'NAPAPIJRI MAJICA', 'odeca', 'musko', '2.954,70 RSD', 'slika64.jpg'),
(65, 'NIKE MAJICA M NSW SS TEE', 'odeca', 'musko', '3.690,00 RSD', 'slika65.jpg'),
(66, 'ADIDAS MAJICA', 'odeca', 'zensko', '3.369,00 RSD', 'slika66.jpg'),
(67, 'CONVERSE MAJICA', 'odeca', 'zensko', '2.093,00 RSD', 'slika67.jpg'),
(68, 'CHAMPION MAJICA', 'odeca', 'zensko', '1.791,00 RSD', 'slika68.jpg'),
(69, 'NIKE MAJICA W NSW TEE', 'odeca', 'zensko', '3.299,00 RSD', 'slika69.jpg'),
(70, 'NIKE MAJICA W NSW TEE', 'odeca', 'zensko', '3.299,00 RSD', 'slika70.jpg'),
(71, 'NIKE MAJICA JORDAN JDB', 'odeca', 'decije', '1.794,00 RSD', 'slika71.jpg'),
(72, 'NIKE MAJICA JORDAN', 'odeca', 'decije', '2.093,00 RSD', 'slika72.jpg'),
(73, 'NIKE MAJICA JORDAN JDB', 'odeca', 'decije', '1.883,00 RSD', 'slika73.jpg'),
(74, 'NIKE MAJICA JORDAN JDB', 'odeca', 'decije', '990,00 RSD', 'slika74.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `stavke_korpe`
--

CREATE TABLE `stavke_korpe` (
  `id` int(11) NOT NULL,
  `proizvod_id` int(11) NOT NULL,
  `korpa_id` int(11) NOT NULL,
  `cena` decimal(11,2) NOT NULL,
  `kolicina` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `korpa`
--
ALTER TABLE `korpa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proizvodi`
--
ALTER TABLE `proizvodi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stavke_korpe`
--
ALTER TABLE `stavke_korpe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `korpa_id` (`korpa_id`),
  ADD KEY `proizvod_id` (`proizvod_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `korpa`
--
ALTER TABLE `korpa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `proizvodi`
--
ALTER TABLE `proizvodi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `stavke_korpe`
--
ALTER TABLE `stavke_korpe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `stavke_korpe`
--
ALTER TABLE `stavke_korpe`
  ADD CONSTRAINT `stavke_korpe_ibfk_1` FOREIGN KEY (`korpa_id`) REFERENCES `korpa` (`id`),
  ADD CONSTRAINT `stavke_korpe_ibfk_2` FOREIGN KEY (`proizvod_id`) REFERENCES `proizvodi` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
