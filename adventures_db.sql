-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 23, 2023 at 10:58 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adventures_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `adventures_all`
--

DROP TABLE IF EXISTS `adventures_all`;
CREATE TABLE IF NOT EXISTS `adventures_all` (
  `id` int NOT NULL AUTO_INCREMENT,
  `heading` varchar(80) NOT NULL,
  `tripDate` date NOT NULL,
  `duration` int NOT NULL,
  `summary` text NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=130 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `adventures_all`
--

INSERT INTO `adventures_all` (`id`, `heading`, `tripDate`, `duration`, `summary`) VALUES
(1, 'Halifax', '2017-04-12', 4, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eget risus                     nibh. Quisque feugiat, urna eget lacinia tincidunt, ipsum orci                       pellentesque felis, nec dapibus urna metus eu quam. Curabitur vitae                      semper risus. Suspendisse vel ligula aliquam, rutrum elit et, iaculis                        nisi. Nam eu nisl eget felis suscipit commodo.'),
(2, 'Sydney', '2017-05-10', 5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eget risus                     nibh. Quisque feugiat, urna eget lacinia tincidunt, ipsum orci                       pellentesque felis, nec dapibus urna metus eu quam. Curabitur vitae                      semper risus. Suspendisse vel ligula aliquam, rutrum elit et, iaculis                        nisi. Nam eu nisl eget felis suscipit commodo.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
