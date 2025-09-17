-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2024 at 09:18 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `icecream`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_menu`
--

CREATE TABLE `add_menu` (
  `Menu_id` int(20) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Description` text NOT NULL,
  `Category` varchar(30) NOT NULL,
  `Price` int(20) NOT NULL,
  `Image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_menu`
--

INSERT INTO `add_menu` (`Menu_id`, `Title`, `Description`, `Category`, `Price`, `Image`) VALUES
(1, 'cone', 'Chocolate cone', 'Cone', 90, 'chocolatecone.jpg'),
(2, 'cup ice-cream', 'Pista cup ice-cream', 'Cup ice-cream', 140, 'pista_cup.jpg'),
(3, 'cup ice-cream', 'Blackberry cup ice-cream', 'Cup ice-cream', 200, 'blackberrycup.jpg'),
(4, 'cup ice-cream', 'Chocolate cup ice-cream', 'Cup ice-cream', 140, 'chocolatecup.jpg'),
(5, 'cup ice-cream', 'Coconut cup ice-cream', 'Cup ice-cream', 200, 'coconut_cup.jpg'),
(6, 'cup ice-cream', 'Strawberry cup ice-cream', 'Cup ice-cream', 120, 'strawberrycup.jpg'),
(7, 'cone', 'Oreo cone', 'Cone', 100, 'oreocone.jpg'),
(8, 'cone', 'Pista cone', 'Cone', 130, 'pistacone.jpg'),
(9, 'cone', 'Rainbow cone', 'Cone', 120, 'rainbowcone.jpg'),
(10, 'cone', 'Red velvet cone', 'Cone', 90, 'redcone.jpg'),
(11, 'candy', 'Kesar kulfi', 'Candy', 50, 'kesarkulfi.jpg'),
(12, 'candy', 'Kesar pista kulfi', 'Candy', 40, 'kesarpista.jpg'),
(13, 'candy', 'Mango kulfi', 'Candy', 60, 'mangokulfi.jpg'),
(14, 'candy', 'Pista kulfi', 'Candy', 45, 'pistakulfi.jpg'),
(15, 'candy', 'Mava kulfi', 'Candy', 30, 'mavakulfi.jpg'),
(16, 'family pack', 'Caramel ice-cream', 'Family pack', 300, 'caramel.jpg'),
(17, 'family pack', 'Cherry ice-cream', 'Family pack', 350, 'cherry.jpg'),
(18, 'family pack', 'Cookies ice-cream', 'Family pack', 345, 'cookies.jpg'),
(19, 'family pack', 'Strawberry ice-cream', 'Family pack', 300, 'strawberry.jpg'),
(20, 'family pack', 'Nut ice-cream', 'Family pack', 350, 'nut.jpg'),
(21, 'cone', 'Mix-fruit cone ', 'Cone', 150, 'mixcone.jpg'),
(22, 'cup ice-cream', 'Mango cup ice-cream', 'Cup ice-cream', 100, 'mangocup.jpg'),
(23, 'candy', 'Chocobar candy ', 'Candy', 60, 'chocobar.jpg'),
(24, 'cup ice-cream', 'sundae ', 'Cup ice-cream', 200, 'familypack.jpg'),
(25, 'pista cone', 'pista cone ', 'Cone', 200, 'pistacone.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Login_id` int(20) NOT NULL,
  `Username` varchar(40) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Contact` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Login_id`, `Username`, `Password`, `Email`, `Contact`) VALUES
(1, 'krishna', 'Krishna@1111', 'vaghasiyak04@gmail.com', 1111111111),
(2, 'Nandani', 'nandani@11', 'nandani@gmail.com', 9879457846);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Id` int(20) NOT NULL,
  `Fname` varchar(40) NOT NULL,
  `Lname` varchar(40) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Dob` date NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Contact` bigint(10) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `Request_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Id`, `Fname`, `Lname`, `Gender`, `Dob`, `Email`, `Contact`, `City`, `Address`, `Password`, `Request_date`) VALUES
(1, 'Krishna', 'vaghasiya', 'Female', '2002-12-31', 'vaghasiyak04@gmail.com', 9664606596, 'Ahmedabad', 'Bapunagar, ahmedabad - 380024', 'Krishna@1111', '2022-03-29'),
(2, 'Srujal', 'Gajera', 'Female', '2002-05-05', 'srujal@gmail.com', 72650, 'Ahmedabad', 'naranpura, ahmedabad', 'Srujal@1111', '2022-03-29'),
(3, 'Nandani', 'thummar', 'female', '2004-08-25', 'nandani@gmail.com', 9879457846, 'ahmdabad', 'nikol', 'nandani@11', '2024-02-28'),
(4, 'pratiksha', 'kyada', 'Female', '2003-02-13', 'kyada@gmail.com', 9879457844, 'Ahmedabad', 'nikol', 'kyada@111', '2024-03-09'),
(5, 'dhruvi', 'vegad', 'Female', '2003-10-02', 'dhruvi@gmail.com', 7201904829, 'Ahmedabad', 'bapunagar', 'dhruvi@11', '2024-03-12'),
(6, 'dhruvi', 'vegad', 'Female', '2003-02-10', 'vegaddhruvi46@gail.com', 7201904829, 'Ahmedabad', 'nikol', 'dpatel@123', '2024-03-12'),
(7, 'dhruvi', 'vegad', 'Female', '2025-02-10', 'vegaddhruvi46@gail.com', 7201904829, 'Ahmedabad', 'nikol', 'dpatel@123', '2024-03-12');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `F_id` int(20) NOT NULL,
  `Customer_id` int(20) NOT NULL,
  `Message` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `Rating` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`F_id`, `Customer_id`, `Message`, `Date`, `Rating`) VALUES
(1, 1, 'your ice-cream quality is amaingggg.!!!!!!!', '2024-03-01', 5),
(2, 3, 'your product is really nice', '2024-03-12', 5),
(3, 2, 'yumppp!', '2024-03-12', 3);

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `Inq_id` int(20) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Contact` bigint(10) NOT NULL,
  `Message` varchar(50) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`Inq_id`, `Name`, `Email`, `Contact`, `Message`, `Date`) VALUES
(1, 'Krishn vaghasiya', 'vaghasiyak04@gmail.com', 9664606596, 'hello only natural\'s ice-cream team', '2023-03-01'),
(2, 'nandani', 'nandani@gmail.com', 9879457846, 'nice...', '0000-00-00'),
(3, 'nandani', 'nandani@gmail.com', 9879457844, 'nice', '0000-00-00'),
(4, 'nandani', 'nandani@gmail.com', 9879457844, 'nice', '0000-00-00'),
(5, 'bansi', 'bansi@gmail.com', 8780130383, 'hello ', '0000-00-00'),
(6, 'nandani', 'nandani@gmail.com', 9879457846, 'hello team...', '0000-00-00'),
(7, 'dhruvi', 'vegaddhruvi46@gail.com', 7201904829, 'other product', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `Order_id` int(20) NOT NULL,
  `Menu_id` int(20) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Price` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `description` text NOT NULL,
  `order_date` date NOT NULL,
  `quantity` bigint(20) NOT NULL,
  `totalprice` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Order_id`, `Menu_id`, `Title`, `Price`, `user_id`, `description`, `order_date`, `quantity`, `totalprice`) VALUES
(1, 1, 'cone', 90, 1, 'Chocolate cone', '2022-03-01', 3, 270),
(2, 8, 'cone', 130, 3, 'Pista cone', '2024-02-21', 2, 260),
(3, 16, 'family pack', 300, 5, 'caramel ice-cream', '2024-03-12', 1, 300),
(4, 13, 'candy', 60, 1, 'Mango kulfi', '2024-03-12', 2, 120),
(5, 18, 'family pack', 345, 2, 'Cookies ice-cream', '2024-03-12', 1, 345),
(6, 2, 'cup ice-cream', 140, 4, 'Pista cup ice-ceam', '2024-03-12', 3, 420),
(7, 11, 'candy', 50, 3, 'Kesar kulfi', '2024-03-12', 3, 150);

-- --------------------------------------------------------

--
-- Table structure for table `views`
--

CREATE TABLE `views` (
  `id` int(20) NOT NULL,
  `view` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `views`
--

INSERT INTO `views` (`id`, `view`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(68, 1),
(69, 1),
(70, 1),
(71, 1),
(72, 1),
(73, 1),
(74, 1),
(75, 1),
(76, 1),
(77, 1),
(78, 1),
(79, 1),
(80, 1),
(81, 1),
(82, 1),
(83, 1),
(84, 1),
(85, 1),
(86, 1),
(87, 1),
(88, 1),
(89, 1),
(90, 1),
(91, 1),
(92, 1),
(93, 1),
(94, 1),
(95, 1),
(96, 1),
(97, 1),
(98, 1),
(99, 1),
(100, 1),
(101, 1),
(102, 1),
(103, 1),
(104, 1),
(105, 1),
(106, 1),
(107, 1),
(108, 1),
(109, 1),
(110, 1),
(111, 1),
(112, 1),
(113, 1),
(114, 1),
(115, 1),
(116, 1),
(117, 1),
(118, 1),
(119, 1),
(120, 1),
(121, 1),
(122, 1),
(123, 1),
(124, 1),
(125, 1),
(126, 1),
(127, 1),
(128, 1),
(129, 1),
(130, 1),
(131, 1),
(132, 1),
(133, 1),
(134, 1),
(135, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_menu`
--
ALTER TABLE `add_menu`
  ADD PRIMARY KEY (`Menu_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Login_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`F_id`),
  ADD KEY `Customer_id` (`Customer_id`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`Inq_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`Order_id`),
  ADD KEY `Menu_id` (`Menu_id`),
  ADD KEY `orders_ibfk_1` (`user_id`);

--
-- Indexes for table `views`
--
ALTER TABLE `views`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_menu`
--
ALTER TABLE `add_menu`
  MODIFY `Menu_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Login_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `F_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `Inq_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `Order_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `views`
--
ALTER TABLE `views`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`Customer_id`) REFERENCES `customer` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `customer` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
