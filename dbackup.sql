-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.21 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping data for table quadb.eventlist: 1 rows
/*!40000 ALTER TABLE `eventlist` DISABLE KEYS */;
REPLACE INTO `eventlist` (`id`, `eventDate`, `eventName`, `eventParagraph`, `eventImgLink`) VALUES
	(1, '13, 14, 15 de Julho', 'SuperBock SuperRock', 'Venha ver ao Superbock SuperRock ver artistas como: Post Malone, Dillaz, Cracker Jack entre outros...', 'https://tinyurl.com/y9t4f7tm'),
	(2, '1 de Janeiro', 'Rock In Rio Lisboa', 'Venha ver ao Rock In Rio Lisboa ver artistas como: Post Malone, Dillaz, Cracker Jack entre outros...', 'https://tinyurl.com/y6uc7zcu'),
	(3, '89 de Julho', 'HooWee', 'Venha ver ao MEO ver artistas como: Post Malone, Dillaz, Cracker Jack entre outros...', 'https://tinyurl.com/y95s8sw5'),
	(4, '1 de Julho', 'EDP Cool Jazz', 'Venha ver ao EDP Cool Jazz ver artistas como: Post Malone, Dillaz, Cracker Jack entre outros...', 'https://tinyurl.com/yby7ytgz'),
	(5, '16 de Agosto', 'SuperBock SuperRock', 'Venha ver ao Superbock SuperRock ver artistas como: Post Malone, Dillaz, Cracker Jack entre outros...', 'https://tinyurl.com/y6uvmfoj'),
	(6, '13, 14, 15 de Julho', 'NOS Alive', 'Venha ver ao NOS Alive ver artistas como: Post Malone, Dillaz, Cracker Jack entre outros...', 'https://tinyurl.com/yd23sq47');
/*!40000 ALTER TABLE `eventlist` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
