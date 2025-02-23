-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               9.2.0 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.7.0.6850
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for e-shop
CREATE DATABASE IF NOT EXISTS `e-shop` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `e-shop`;

-- Dumping structure for table e-shop.cart
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table e-shop.cart: ~0 rows (approximately)
INSERT INTO `cart` (`id`, `name`, `price`, `image`, `quantity`) VALUES
	(1, 'Apple iPhone 13', 999.99, 'iphone13.jpg', 1),
	(2, 'Samsung Galaxy S22', 899.99, 'galaxy_s22.jpg', 2),
	(3, 'Google Pixel 6', 699.99, 'pixel6.jpg', 1);

-- Dumping structure for table e-shop.productlist
CREATE TABLE IF NOT EXISTS `productlist` (
  `id` int NOT NULL AUTO_INCREMENT,
  `prdct_name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table e-shop.productlist: ~5 rows (approximately)
INSERT INTO `productlist` (`id`, `prdct_name`, `price`, `image`) VALUES
	(1, 'Apple iPhone 13', 999.99, 'iphone13.jpg'),
	(2, 'Samsung Galaxy S22', 899.99, 'galaxy_s22.jpg'),
	(3, 'Google Pixel 6', 699.99, 'pixel6.jpg'),
	(4, 'Apple MacBook Air', 1299.99, 'macbook_air.jpg'),
	(5, 'Dell Inspiron Laptop', 799.99, 'inspiron_laptop.jpg');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
