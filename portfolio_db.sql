-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping structure for table portfolio_db.contacts
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table portfolio_db.contacts: ~18 rows (approximately)
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
	(1, 'Atikah', 'atikah66@gmail.com', 'Check for Availability', 'Hi there, i just want to check are you available this weekend ?', '2022-03-29 14:55:19', '2022-03-29 14:55:19'),
	(2, 'Atikah', 'atikah66@gmail.com', 'Check for Availability', 'Hi there, i just want to check are you available this weekend ?', '2022-03-29 14:57:19', '2022-03-29 14:57:19'),
	(3, 'Atikah', 'atikah66@gmail.com', 'Check for Availability', 'Hi there, i just want to check are you available this weekend ?', '2022-03-29 14:58:10', '2022-03-29 14:58:10'),
	(4, 'Atikah', 'atikah66@gmail.com', 'Check for Availability', 'Hi there, i just want to check are you available this weekend ?', '2022-03-29 15:01:50', '2022-03-29 15:01:50'),
	(5, 'Atikah', 'atikah66@gmail.com', 'Check for Availability', 'Hi there, i just want to check are you available this weekend?', '2022-03-29 15:02:34', '2022-03-29 15:02:34'),
	(6, 'Atikah', 'atikah66@gmail.com', 'Check for Availability', 'Hi there, i just want to check are you available this weekend?', '2022-03-29 15:06:17', '2022-03-29 15:06:17'),
	(7, 'Ali', 'ali88@gmail.com', 'sefrgvdrg', 'fbfgnfghnfgbdbdfnbfn', '2022-03-29 15:12:20', '2022-03-29 15:12:20'),
	(8, 'Ali', 'ali88@gmail.com', 'sefrgvdrg', 'fbfgnfghnfgbdbdfnbfn', '2022-03-29 15:13:10', '2022-03-29 15:13:10'),
	(9, 'Ali', 'ali88@gmail.com', 'sefrgvdrg', 'fbfgnfghnfgbdbdfnbfn', '2022-03-29 15:14:51', '2022-03-29 15:14:51'),
	(10, 'Ali Aminah', 'aliaminah77@gmail.com', 'csvsvd', 'fvbfgnghnh gnfbdfrhbdfh', '2022-03-29 15:16:01', '2022-03-29 15:16:01'),
	(11, 'Ali', 'ali88@gmail.com', 'Check for Availability', 'sdgdhfbfnfthyjn', '2022-03-29 15:22:42', '2022-03-29 15:22:42'),
	(12, 'Ali', 'ali88@gmail.com', 'fgbfbfnb', 'fnnfgbf ghvtyvhytvb', '2022-03-29 15:37:24', '2022-03-29 15:37:24'),
	(13, 'Luqman Hakim', 'luqmanhakim77@gmail.com', 'Check for Availability', 'Hello there Adilah, I am Luqman', '2022-03-29 15:53:49', '2022-03-29 15:53:49'),
	(14, 'Siti Nur Adilah', 'nuradilah778@gmail.com', 'csvsvn', 'ngnyhhftbtbftbfn', '2022-03-29 16:03:19', '2022-03-29 16:03:19'),
	(15, 'Siti Nur Adilah', 'nuradilah778@gmail.com', 'csvsvn', 'ngnyhhftbtbftbfn', '2022-03-29 16:03:41', '2022-03-29 16:03:41'),
	(16, 'Siti Nur Adilah', 'nuradilah778@gmail.com', 'csvsvg', 'nfgnfgnnvgnvgnvnvn', '2022-03-29 16:03:53', '2022-03-29 16:03:53'),
	(17, 'Luqman Hakim', 'mluqmanhakim.mlh@gmail.com', 'Saya Suka Awak', 'Awak ni sangat berbakat. marilah kerja dengan saya.', '2022-03-29 16:07:25', '2022-03-29 16:07:25'),
	(18, 'Siti Adilah', 'nur665@gmail.com', 'Interview Invitation', 'Hello, I want to ask you do you available this week for interview invitation for the application for web developer ?', '2022-03-30 06:12:48', '2022-03-30 06:12:48'),
	(19, 'Ali Aminah', 'aliaminah77@gmail.com', 'zsfgrgd', 'hfbghth', '2022-04-06 13:27:07', '2022-04-06 13:27:07'),
	(20, 'Atikah', 'atikah66@gmail.com', 'sefrgvdrg', 'fsfsefsecesfsef', '2022-04-10 05:27:21', '2022-04-10 05:27:21');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;

-- Dumping structure for table portfolio_db.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table portfolio_db.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table portfolio_db.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table portfolio_db.migrations: ~8 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2022_03_29_101500_create_contact_table', 1),
	(6, '2022_03_29_145125_create_contacts_table', 2),
	(7, '2022_03_30_062943_create_portfolios_table', 3),
	(8, '2022_03_30_075405_create_portfolios_table', 4),
	(9, '2022_04_07_061047_add_website_url_to_portfolios_table', 5);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table portfolio_db.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table portfolio_db.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table portfolio_db.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table portfolio_db.personal_access_tokens: ~0 rows (approximately)
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Dumping structure for table portfolio_db.portfolios
CREATE TABLE IF NOT EXISTS `portfolios` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `project_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `front_end` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `back_end` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `yt_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `github_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_details` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `website_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table portfolio_db.portfolios: ~4 rows (approximately)
/*!40000 ALTER TABLE `portfolios` DISABLE KEYS */;
INSERT INTO `portfolios` (`id`, `project_name`, `img1`, `img2`, `img3`, `project_category`, `front_end`, `back_end`, `yt_url`, `github_url`, `project_details`, `created_at`, `updated_at`, `website_url`) VALUES
	(1, 'GrocHome', 'photos/grochome_1.png', 'photos/grochome_2.jpg', 'photos/grochome_3.jpg', 'Web Development', 'HTML, CSS, JavaScript', 'PHP', 'https://youtu.be/YXRC8lb6bSE', 'https://github.com/adel14524/GrocHome', 'GrocHome is the Online Grocery Ordering System. This is the group project assignment for my Web Development subject. The objective of this project is to ease the people on purchasing the grocery without having to go out during COVID-19 Outbreak. Fully involved in front-end and back-end of the system.', '2022-03-30 15:58:38', '2022-03-30 15:58:39', NULL),
	(2, 'AllSet', 'photos/allset_1.png', 'photos/allset_2.jpg', 'photos/allset_3.jpg', 'Web Development', 'HTML, CSS, Javascript, Bootstrap 4', 'PHP', NULL, 'https://github.com/adel14524/AllSet', 'AllSet is the Restaurant Reservation System. This is my freelancing project developed accordance to our client\'s requirements which is a Politechnic Ungku Omar Student. Fully involved in front-end and back-end of the system.', '2022-03-30 17:15:09', '2022-03-30 17:15:10', NULL),
	(3, 'Malaysian\'s Citizens Emotion Analysis', 'photos/fyp_1.jpg', 'photos/fyp_2.jpg', 'photos/fyp_3.jpg', 'Sentiment Analysis, Machine Learning', 'Dash (Data Visualization)', 'Python', 'https://youtu.be/wDVuR56sL3M', 'https://github.com/adel14524/Malaysians_Citizens_Emotion_Analysis_Sentiment_Analysis', 'This is my Final Year Project (FYP) called Malaysian Emotion/ Sentiment Analysis. This project is using a Machine Learning method to analyse the emotion of Malaysians in Twitter during COVID-19 Outbreak. This is where the tweets related to COVID-19 will be scraped from Twitter and will be feed to trained machine for the emotion analysis. After that, data visualization is done for the further analysis.', '2022-04-02 14:31:10', '2022-04-02 14:31:11', NULL),
	(4, 'DoerHRM', 'photos/doerhrm_1.jpg', 'photos/doerhrm_2.jpg', 'photos/doerhrm_3.jpg', 'Enhancing, Web Development', 'HTML, CSS, Bootstrap, JavaScript', 'OOP PHP', NULL, 'https://github.com/adel14524/budget-compensation-main', 'This project objective is to enhance the module inside DoerHRM system which is Budget & Compensation module. ', '2022-04-02 14:31:13', '2022-04-02 14:31:15', 'https://www.doerhrm.com/');
/*!40000 ALTER TABLE `portfolios` ENABLE KEYS */;

-- Dumping structure for table portfolio_db.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table portfolio_db.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
