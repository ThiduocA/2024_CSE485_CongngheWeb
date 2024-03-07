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


-- Dumping database structure for project25
DROP DATABASE IF EXISTS `project25`;
CREATE DATABASE IF NOT EXISTS `project25` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `project25`;

-- Dumping structure for table project25.authors
DROP TABLE IF EXISTS `authors`;
CREATE TABLE IF NOT EXISTS `authors` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `biography` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table project25.authors: ~10 rows (approximately)
INSERT INTO `authors` (`id`, `name`, `biography`) VALUES
	(1, 'John Smith', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod velit eu felis dapibus, ac eleifend mi rhoncus.'),
	(2, 'Jane Doe', 'Nullam auctor sem ut tellus euismod, non fermentum tortor commodo. Donec vel ultrices ligula.'),
	(3, 'David Johnson', 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.'),
	(4, 'Sarah Williams', 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Quisque gravida velit vel sem faucibus.'),
	(5, 'Michael Brown', 'Cras sit amet neque nec justo cursus bibendum. Maecenas eu mi in dolor placerat ultricies.'),
	(6, 'Lisa Miller', 'Suspendisse nec magna nec est efficitur placerat. Nam at ipsum ac leo laoreet consectetur.'),
	(7, 'James Wilson', 'Fusce eget nunc sed nisi tempus placerat. Nunc vehicula purus sed lectus ultricies, eget cursus metus rutrum.'),
	(8, 'Emily Anderson', 'Duis auctor libero vitae lorem ultrices, eget maximus magna varius. Vivamus non aliquam est.'),
	(9, 'Daniel Taylor', 'Nam in tortor sit amet nunc euismod dictum. Integer vitae quam vel nulla convallis cursus.'),
	(10, 'Jessica Martinez', 'Ut consectetur ex at elit placerat, nec dignissim ligula laoreet. Phasellus eu ex sed libero eleifend ultricies.');

-- Dumping structure for table project25.books
DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `description` text,
  `publish_date` datetime DEFAULT NULL,
  `page_count` decimal(30,2) DEFAULT NULL,
  `genre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table project25.books: ~10 rows (approximately)
INSERT INTO `books` (`id`, `title`, `author`, `description`, `publish_date`, `page_count`, `genre`) VALUES
	(1, 'The Great Gatsby', 'F. Scott Fitzgerald', 'A novel about the American Dream', '1925-04-10 00:00:00', 180.00, 'Classic'),
	(2, 'To Kill a Mockingbird', 'Harper Lee', 'A story of racial injustice and moral growth', '1960-07-11 00:00:00', 281.00, 'Fiction'),
	(3, '1984', 'George Orwell', 'A dystopian novel about totalitarianism', '1949-06-08 00:00:00', 328.00, 'Science Fiction'),
	(4, 'Pride and Prejudice', 'Jane Austen', 'A novel of manners', '1813-01-28 00:00:00', 432.00, 'Classic'),
	(5, 'The Catcher in the Rye', 'J.D. Salinger', 'A story of alienation and teenage angst', '1951-07-16 00:00:00', 224.00, 'Fiction'),
	(6, 'Harry Potter and the Sorcerer\'s Stone', 'J.K. Rowling', 'The first book in the Harry Potter series', '1997-06-26 00:00:00', 309.00, 'Fantasy'),
	(7, 'The Hobbit', 'J.R.R. Tolkien', 'A fantasy novel about a hobbit on an adventure', '1937-09-21 00:00:00', 310.00, 'Fantasy'),
	(8, 'The Lord of the Rings', 'J.R.R. Tolkien', 'A fantasy epic about the struggle against evil', '1954-07-29 00:00:00', 1178.00, 'Fantasy'),
	(9, 'Moby Dick', 'Herman Melville', 'A novel about Captain Ahab\'s quest for a white whale', '1851-10-18 00:00:00', 654.00, 'Classic'),
	(10, 'The Da Vinci Code', 'Dan Brown', 'A mystery thriller about the Holy Grail', '2003-03-18 00:00:00', 454.00, 'Mystery');

-- Dumping structure for table project25.books_authors
DROP TABLE IF EXISTS `books_authors`;
CREATE TABLE IF NOT EXISTS `books_authors` (
  `book_id` int NOT NULL,
  `author_id` int NOT NULL,
  PRIMARY KEY (`book_id`,`author_id`),
  KEY `author_id` (`author_id`),
  CONSTRAINT `books_authors_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  CONSTRAINT `books_authors_ibfk_2` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table project25.books_authors: ~10 rows (approximately)
INSERT INTO `books_authors` (`book_id`, `author_id`) VALUES
	(1, 1),
	(1, 2),
	(2, 3),
	(3, 4),
	(4, 5),
	(5, 6),
	(6, 7),
	(7, 8),
	(8, 9),
	(9, 10);

-- Dumping structure for table project25.reviews
DROP TABLE IF EXISTS `reviews`;
CREATE TABLE IF NOT EXISTS `reviews` (
  `book_id` int NOT NULL AUTO_INCREMENT,
  `rating` double DEFAULT NULL,
  PRIMARY KEY (`book_id`),
  CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table project25.reviews: ~10 rows (approximately)
INSERT INTO `reviews` (`book_id`, `rating`) VALUES
	(1, 4.5),
	(2, 4),
	(3, 4.2),
	(4, 3.8),
	(5, 4.7),
	(6, 4.9),
	(7, 3.5),
	(8, 4.1),
	(9, 4.6),
	(10, 3.9);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
