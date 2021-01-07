-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2021 at 08:10 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sampledb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(5) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Mail` varchar(20) NOT NULL,
  `Mobile_no` varchar(10) NOT NULL,
  `Password` varchar(14) NOT NULL,
  `Profile_img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `Name`, `Mail`, `Mobile_no`, `Password`, `Profile_img`) VALUES
(6, 'chirag', 'c@gmail.com', '1234567890', '1245', '4090547-FWZYDPFI-7.jpg'),
(7, 'stuti', 's98@gmail.com', '0123456789', '1', '2013_Lamborghini_Egoista_Concept_supercar_supercars___w_2000x1414.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Id` int(5) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Mail` varchar(20) NOT NULL,
  `Mobile_no` varchar(10) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Profile_img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Id`, `Name`, `Mail`, `Mobile_no`, `City`, `Profile_img`) VALUES
(8, 'Melanie Holdensaa ', 'dis.parturient.monte', '16010624 7', 'Indore', ' '),
(9, 'Maris Pitts', 'lobortis.tellus.just', '16931210 0', 'Troyes', '0E9gqM.jpg '),
(10, 'Paloma Christensen', 'Proin.mi.Aliquam@vol', '16270701 8', 'Laval', '4K-Abstract-Wallpaper-HD.png '),
(11, 'Yuli Wilkinson', 'auctor.velit@dispart', '1669025554', 'Tharparkar', ' '),
(12, 'Garth Greer', 'risus@Nullatemporaug', '16651107 8', 'Glimes', '4k-Resolution-Widescreen-HD-Wallpapers.jpg '),
(13, 'Vincent Jensen', 'Lorem.ipsum.dolor@ia', '16300217 3', 'Zedelgem', '8k Ultra HD sun set wallpaper.jpg '),
(14, 'Upton Faulkner', 'enim.gravida.sit@tur', '16780814 1', 'Depok', '1965_Ford_Mustang_Hoonigan_ASD_Gymkhana_Seven_drift_hot_rod_rods_muscle_race_racing_monster_energy_Hoonicorn_1920x1280 (1).jpg '),
(15, 'Justine Buck', 'justo.faucibus.lectu', '16560830 5', 'Wodonga', '47VpDiZzzEQ.jpg '),
(16, 'Ivana Buchanan', 'consectetuer@estmaur', '16280902 9', 'Tongue', '1965_Ford_Mustang_Hoonigan_ASD_Gymkhana_Seven_drift_hot_rod_rods_muscle_race_racing_monster_energy_Hoonicorn_1920x1280 (1).jpg '),
(102, 'Simone Strickland', 'quis.pede.Praesent@a', '16050130 9', 'María Elena', '07980_HD.jpg ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
