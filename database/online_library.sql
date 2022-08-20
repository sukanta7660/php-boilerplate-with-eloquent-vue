-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.5.12-MariaDB-1:10.5.12+maria~focal - mariadb.org binary distribution
-- Server OS:                    debian-linux-gnu
-- HeidiSQL Version:             12.0.0.6468
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for online_library
DROP DATABASE IF EXISTS `online_library`;
CREATE DATABASE IF NOT EXISTS `online_library` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `online_library`;

-- Dumping structure for table online_library.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
    `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
    `name` varchar(255) NOT NULL,
    `email` varchar(255) NOT NULL,
    `password` varchar(255) NOT NULL,
    `contact_no` varchar(255) DEFAULT NULL,
    `address` varchar(255) DEFAULT NULL,
    `token` varchar(255) DEFAULT NULL,
    `email_verified_at` datetime DEFAULT NULL,
    `is_approved` tinyint(1) NOT NULL DEFAULT 1,
    `role` enum('admin','user') NOT NULL DEFAULT 'user',
    `remember_token` varchar(100) DEFAULT NULL,
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL,
    PRIMARY KEY (`id`)
    ) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table online_library.users: ~11 rows (approximately)
INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact_no`, `address`, `token`, `email_verified_at`, `is_approved`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
                                                                                                                                                                                        (8, 'Admin User', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, NULL, NULL, 1, 'admin', NULL, '2022-08-20 05:20:47', '2022-08-20 05:20:47'),
                                                                                                                                                                                        (9, 'Mrs. Kailyn Kertzmann', 'Addie.Hessel@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, NULL, NULL, 1, 'admin', NULL, '2022-08-20 05:20:47', '2022-08-20 05:20:47'),
                                                                                                                                                                                        (10, 'Prof. Laurel Hoeger', 'Cristopher94@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, NULL, NULL, 0, 'user', NULL, '2022-08-20 05:20:47', '2022-08-20 05:20:47'),
                                                                                                                                                                                        (11, 'Dandre Hartmann Sr.', 'Mueller.Freddie@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, NULL, NULL, 1, 'admin', NULL, '2022-08-20 05:20:47', '2022-08-20 05:20:47'),
                                                                                                                                                                                        (12, 'Annette Wilkinson PhD', 'Lindgren.Durward@Braun.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, NULL, NULL, 1, 'admin', NULL, '2022-08-20 05:20:47', '2022-08-20 05:20:47'),
                                                                                                                                                                                        (13, 'Maude Hodkiewicz', 'Kari51@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, NULL, NULL, 1, 'admin', NULL, '2022-08-20 05:20:47', '2022-08-20 05:20:47'),
                                                                                                                                                                                        (14, 'Shania Dibbert Sr.', 'wBogan@Pagac.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, NULL, NULL, 0, 'admin', NULL, '2022-08-20 05:20:47', '2022-08-20 05:20:47'),
                                                                                                                                                                                        (15, 'Dr. Shaylee Moen', 'Ian22@Zemlak.net', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, NULL, NULL, 1, 'user', NULL, '2022-08-20 05:20:47', '2022-08-20 05:20:47'),
                                                                                                                                                                                    (16, 'Rocio Cummerata', 'Monahan.Dane@Dickinson.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, NULL, NULL, 1, 'user', NULL, '2022-08-20 05:20:47', '2022-08-20 05:20:47'),
                                                                                                                                                                                        (17, 'Fred Hermann DDS', 'Angus.Hansen@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, NULL, NULL, 0, 'admin', NULL, '2022-08-20 05:20:47', '2022-08-20 05:20:47'),
                                                                                                                                                                                        (18, 'Violette Balistreri', 'vLehner@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, NULL, NULL, 0, 'user', NULL, '2022-08-20 05:20:47', '2022-08-20 05:20:47');

-- Dumping structure for table online_library.categories
DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
    `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
    `name` varchar(255) NOT NULL,
    `status` tinyint(1) NOT NULL DEFAULT 1,
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL,
    PRIMARY KEY (`id`)
    ) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table online_library.categories: ~8 rows (approximately)
INSERT INTO `categories` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
                                                                                  (5, 'Romance', 1, '2022-08-20 00:18:36', '2022-08-20 00:18:36'),
                                                                                  (6, 'Kids', 1, '2022-08-20 00:18:51', '2022-08-20 00:18:51'),
                                                                                  (7, 'Thrillers', 1, '2022-08-20 00:19:01', '2022-08-20 00:19:01'),
                                                                                  (9, 'Horror', 1, '2022-08-20 00:19:44', '2022-08-20 00:19:44'),
                                                                                  (10, 'Literature ', 1, '2022-08-20 00:20:07', '2022-08-20 00:20:07'),
                                                                                  (11, 'science fiction', 1, '2022-08-20 00:20:27', '2022-08-20 00:20:27'),
                                                                                  (12, 'Young adult fiction', 1, '2022-08-20 00:21:06', '2022-08-20 00:21:18'),
                                                                                  (15, 'Architecture', 1, '2022-08-20 00:23:24', '2022-08-20 00:23:24');

-- Dumping structure for table online_library.books
DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(10) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `availability` int(11) NOT NULL DEFAULT 0,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `books_category_id_index` (`category_id`),
  CONSTRAINT `books_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table online_library.books: ~42 rows (approximately)
INSERT INTO `books` (`id`, `category_id`, `name`, `author`, `image`, `availability`, `quantity`, `status`, `created_at`, `updated_at`) VALUES
	(2, 15, 'Henry Moore', ' David Sylvester', '11079_1660976701.jpg', 5, 5, 1, '2022-08-20 00:25:01', '2022-08-20 00:25:01'),
	(3, 15, 'Frotiers Organization', 'Vincent van Gogh', '10540_1660977268.jpg', 5, 5, 1, '2022-08-20 00:34:28', '2022-08-20 00:35:21'),
	(4, 15, 'The Stones of Venice', 'John Ruskin', '10869_1660977419.jpg', 5, 5, 1, '2022-08-20 00:36:59', '2022-08-20 00:36:59'),
	(5, 15, 'Leonardo', 'Leonardo da Vinci', '10056_1660977478.jpg', 5, 5, 1, '2022-08-20 00:37:58', '2022-08-20 00:37:58'),
	(6, 15, 'The seven lamps', 'John Ruskin', '10804_1660977568.jpg', 5, 5, 1, '2022-08-20 00:39:28', '2022-08-20 00:39:28'),
	(7, 15, 'Le Corbusier', 'Le Corbusier', '10113_1660977643.jpg', 5, 5, 1, '2022-08-20 00:40:43', '2022-08-20 00:40:43'),
	(8, 9, 'Dracula', 'Bram Stoker', '10498_1660977837.jpg', 5, 5, 1, '2022-08-20 00:43:57', '2022-08-20 00:43:57'),
	(9, 9, 'A Christmas Carol', 'Charles Dickens', '10061_1660977889.jpg', 5, 5, 1, '2022-08-20 00:44:49', '2022-08-20 00:44:49'),
	(10, 9, 'Northanger Abbey', 'Jane Austen', '10695_1660977933.jpg', 5, 5, 1, '2022-08-20 00:45:33', '2022-08-20 00:45:33'),
	(11, 9, 'The Invisible Man', 'H. G. Wells', '10463_1660978086.jpg', 8, 8, 1, '2022-08-20 00:48:06', '2022-08-20 00:48:06'),
	(12, 9, 'The Hobbit', 'J.R.R. Tolkien', '10466_1660978138.jpg', 8, 8, 1, '2022-08-20 00:48:58', '2022-08-20 00:48:58'),
	(13, 5, 'Pride and Prejudice', 'Jane Austen', '10415_1660978343.jpg', 5, 5, 1, '2022-08-20 00:52:23', '2022-08-20 00:52:23'),
	(14, 5, ' Little Women', 'Louisa May Alcott', '10571_1660978400.jpg', 5, 5, 1, '2022-08-20 00:53:20', '2022-08-20 00:53:20'),
	(15, 5, 'Romeo and Juliet', 'William Shakespeare', '10538_1660978476.jpg', 5, 5, 1, '2022-08-20 00:54:36', '2022-08-20 00:54:36'),
	(16, 5, 'Candide', 'Voltaire', '10331_1660978508.jpg', 5, 5, 1, '2022-08-20 00:55:08', '2022-08-20 00:55:08'),
	(17, 5, ' Ethan Frome', 'Edith Wharton', '10596_1660978532.jpg', 5, 5, 1, '2022-08-20 00:55:32', '2022-08-20 00:55:32'),
	(18, 6, 'Little men', 'Louisa May Alcott', '10160_1660978787.jpg', 5, 5, 1, '2022-08-20 00:59:47', '2022-08-20 00:59:47'),
	(19, 6, 'Heidi', 'Johanna Spyri', '11086_1660978815.jpg', 5, 5, 1, '2022-08-20 01:00:15', '2022-08-20 01:00:15'),
	(20, 6, 'Oliver Twist', 'Charles Dickens', '10486_1660978849.jpg', 5, 5, 1, '2022-08-20 01:00:49', '2022-08-20 01:00:49'),
	(21, 6, 'Film art', 'David Bordwell', '10457_1660978906.jpg', 5, 5, 1, '2022-08-20 01:01:46', '2022-08-20 01:01:46'),
	(22, 6, 'Black Beauty', 'Anna Sewell', '10520_1660978931.jpg', 5, 5, 1, '2022-08-20 01:02:11', '2022-08-20 01:02:11'),
	(23, 7, 'Treasure Island', 'Robert Louis Stevenson', '10204_1660979501.jpg', 5, 5, 1, '2022-08-20 01:11:41', '2022-08-20 01:11:41'),
	(24, 7, 'The Beetle', 'Richard Marsh', '10287_1660979567.jpg', 5, 5, 1, '2022-08-20 01:12:47', '2022-08-20 01:12:47'),
	(25, 7, 'The Secret Adversary', 'Agatha Christie', '10482_1660979584.jpg', 5, 5, 1, '2022-08-20 01:13:04', '2022-08-20 01:13:04'),
	(26, 7, 'White Fang', 'Jack London', '10694_1660979606.jpg', 5, 5, 1, '2022-08-20 01:13:26', '2022-08-20 01:13:26'),
	(27, 7, 'Lord of the Flies', 'William Golding', '10651_1660981005.jpg', 5, 5, 1, '2022-08-20 01:36:45', '2022-08-20 01:36:45'),
	(28, 10, 'Macbeth', 'William Shakespeare', '10039_1660986535.jpg', 5, 5, 1, '2022-08-20 03:08:55', '2022-08-20 03:08:55'),
	(29, 10, 'Hamlet', 'William Shakespeare', '10341_1660986621.jpg', 5, 5, 1, '2022-08-20 03:10:21', '2022-08-20 03:10:21'),
	(30, 10, 'Gulliver\'s Travels', 'Jonathan Swift', '10818_1660987266.jpg', 5, 5, 1, '2022-08-20 03:21:06', '2022-08-20 03:21:06'),
	(31, 10, 'Tempest', 'William Shakespeare', '10976_1660987337.jpg', 5, 5, 1, '2022-08-20 03:22:17', '2022-08-20 03:22:17'),
	(32, 10, 'Scarlet Letter', 'Austin Warren', '10304_1660987362.jpg', 5, 5, 1, '2022-08-20 03:22:42', '2022-08-20 03:22:42'),
	(33, 11, 'Die Verwandlung', 'Franz Kafka', '10499_1660987889.jpg', 5, 5, 1, '2022-08-20 03:31:29', '2022-08-20 03:31:29'),
	(34, 11, 'Charlotte Brontë', 'Jane Eyre', '10980_1660987935.jpg', 5, 5, 1, '2022-08-20 03:32:15', '2022-08-20 03:32:15'),
	(35, 11, 'Brave New World', 'Aldous Huxley', '11067_1660987957.jpg', 5, 5, 1, '2022-08-20 03:32:37', '2022-08-20 03:32:37'),
	(36, 11, 'Moby Dick', 'Herman Melville', '10361_1660988073.jpg', 5, 5, 1, '2022-08-20 03:34:33', '2022-08-20 03:34:33'),
	(37, 11, 'Il principe', 'Niccolò Machiavelli', '10216_1660988105.jpg', 5, 5, 1, '2022-08-20 03:35:05', '2022-08-20 03:35:05'),
	(38, 11, 'Die Verwandlung', 'Franz Kafka', '10387_1660988141.jpg', 5, 5, 1, '2022-08-20 03:35:41', '2022-08-20 03:35:41'),
	(39, 12, 'King Richard II', 'William Shakespeare', '10145_1660988591.jpg', 5, 5, 1, '2022-08-20 03:43:11', '2022-08-20 03:43:11'),
	(40, 12, 'Great Expectations', 'Mary Ellen', '10391_1660988623.jpg', 5, 5, 1, '2022-08-20 03:43:43', '2022-08-20 03:43:43'),
	(41, 12, 'King Henry V', 'William Shakespeare', '10910_1660988679.jpg', 5, 5, 1, '2022-08-20 03:44:39', '2022-08-20 03:44:39'),
	(42, 12, 'Twelfth Night', 'William Shakespeare', '10305_1660988722.jpg', 5, 5, 1, '2022-08-20 03:45:22', '2022-08-20 03:45:22'),
	(43, 12, 'King Lear', 'William Shakespeare', '10640_1660988766.jpg', 5, 5, 1, '2022-08-20 03:46:06', '2022-08-20 03:46:06');

-- Dumping structure for table online_library.book_issues
DROP TABLE IF EXISTS `book_issues`;
CREATE TABLE IF NOT EXISTS `book_issues` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `book_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `contact_no` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `issue_date` datetime DEFAULT NULL,
  `return_date` datetime DEFAULT NULL,
  `actual_return_date` datetime DEFAULT NULL,
  `status` enum('pending','accepted','issued','cancelled','returned') NOT NULL DEFAULT 'pending',
  `fine` double(8,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `book_issues_book_id_index` (`book_id`),
  KEY `book_issues_user_id_index` (`user_id`),
  CONSTRAINT `book_issues_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  CONSTRAINT `book_issues_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table online_library.book_issues: ~0 rows (approximately)

-- Dumping structure for table online_library.book_reviews
DROP TABLE IF EXISTS `book_reviews`;
CREATE TABLE IF NOT EXISTS `book_reviews` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `book_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `points` double(8,2) NOT NULL DEFAULT 0.00,
  `review` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `book_reviews_book_id_index` (`book_id`),
  KEY `book_reviews_user_id_index` (`user_id`),
  CONSTRAINT `book_reviews_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  CONSTRAINT `book_reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table online_library.book_reviews: ~0 rows (approximately)

-- Dumping structure for table online_library.contacts
DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `messages` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table online_library.contacts: ~0 rows (approximately)

-- Dumping structure for table online_library.notifications
DROP TABLE IF EXISTS `notifications`;
CREATE TABLE IF NOT EXISTS `notifications` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `book_issue_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `message` text NOT NULL,
  `amount` double(8,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `notifications_book_issue_id_index` (`book_issue_id`),
  KEY `notifications_user_id_index` (`user_id`),
  CONSTRAINT `notifications_book_issue_id_foreign` FOREIGN KEY (`book_issue_id`) REFERENCES `book_issues` (`id`),
  CONSTRAINT `notifications_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table online_library.notifications: ~0 rows (approximately)


/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
