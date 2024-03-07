-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.35 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for project32
CREATE DATABASE IF NOT EXISTS `project32` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `project32`;

-- Dumping structure for table project32.departments
CREATE TABLE IF NOT EXISTS `departments` (
  `departmentID` int NOT NULL AUTO_INCREMENT,
  `departmentName` text,
  `address` text,
  `email` text,
  `phone` text,
  `logo` text,
  `website` text,
  `parentDepartmentID` int DEFAULT NULL,
  PRIMARY KEY (`departmentID`),
  KEY `parentDepartmentID` (`parentDepartmentID`),
  CONSTRAINT `departments_ibfk_1` FOREIGN KEY (`parentDepartmentID`) REFERENCES `departments` (`departmentID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table project32.departments: ~2 rows (approximately)
INSERT INTO `departments` (`departmentID`, `departmentName`, `address`, `email`, `phone`, `logo`, `website`, `parentDepartmentID`) VALUES
	(1, 'Công nghệ thông tin', 'C1', 'cse@tlu.edu.vn', '0123456789', 'logo.png', 'cse.tlu.edu.vn', NULL),
	(2, 'Hệ thống thông tin', 'C1', 'cse@tlu.edu.vn', '0686868686', 'logo1.png', 'cse.tlu.edu.vn', 1),
	(3, 'Kỹ thuật phần mềm', 'C1', 'cse@tlu.edu.vn', '0999999999', 'logo2.png', 'cse.tlu.edu.vn', 1);

-- Dumping structure for table project32.employees
CREATE TABLE IF NOT EXISTS `employees` (
  `employeeID` int NOT NULL AUTO_INCREMENT,
  `fullname` text,
  `address` text,
  `email` text,
  `mobilephone` text,
  `position` text,
  `avatar` text,
  `departmentID` int DEFAULT NULL,
  PRIMARY KEY (`employeeID`),
  KEY `departmentID` (`departmentID`),
  CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`departmentID`) REFERENCES `departments` (`departmentID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table project32.employees: ~0 rows (approximately)
INSERT INTO `employees` (`employeeID`, `fullname`, `address`, `email`, `mobilephone`, `position`, `avatar`, `departmentID`) VALUES
	(1, 'Đào Xuân Hưng', 'Khương Đình', 'Xhung2k3@gmail.com', '0398048498', 'Trưởng khoa', 'avatar1.png', 1);

-- Dumping structure for table project32.users
CREATE TABLE IF NOT EXISTS `users` (
  `username` text,
  `password` text,
  `role` text,
  `employeeID` int DEFAULT NULL,
  KEY `employeeID` (`employeeID`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`employeeID`) REFERENCES `employees` (`employeeID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table project32.users: ~1 rows (approximately)
INSERT INTO `users` (`username`, `password`, `role`, `employeeID`) VALUES
	('Xhung2411', '$2y$10$BQDmuLsDgRg/JDbNffZ/feHsCQutRxz7T8EpgHhoZG.mj6Uu7sif.', 'admin', 1);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
