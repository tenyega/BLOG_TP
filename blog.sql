-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 29 août 2024 à 11:43
-- Version du serveur : 8.4.0
-- Version de PHP : 8.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `date_pub` date DEFAULT NULL,
  `category_id` int DEFAULT NULL,
  `author_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`),
  KEY `author_id` (`author_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `title`, `content`, `date_pub`, `category_id`, `author_id`) VALUES
(1, 'The Future of AI', 'Artificial Intelligence is transforming industries...', '2024-01-15', 1, 1),
(2, 'Healthy Living Tips', 'Maintaining a balanced diet and regular exercise...', '2024-02-20', 2, 2),
(3, 'Exploring the Universe', 'Recent discoveries in space exploration...', '2024-03-10', 3, 3),
(4, 'Top Travel Destinations', 'Discover the most beautiful places to visit...', '2024-04-05', 4, 4),
(5, 'The Importance of Education', 'Why education is crucial for personal growth...', '2024-05-12', 5, 5),
(6, 'The Rise of Streaming Services', 'How streaming platforms are changing entertainment...', '2024-06-18', 6, 6),
(7, 'Entrepreneurship in 2024', 'Starting a business in the modern economy...', '2024-07-22', 7, 7),
(8, 'The Psychology of Sports', 'Understanding the mental aspects of athletic performance...', '2024-08-15', 8, 8),
(9, 'Minimalist Lifestyle', 'Embracing minimalism for a simpler life...', '2024-09-10', 9, 9),
(10, 'Political Trends in 2024', 'An analysis of current political movements...', '2024-10-05', 10, 10),
(11, 'The Rise of Artificial Intelligence', 'Artificial intelligence is revolutionizing industries across the globe...', '2024-01-15', 5, 1),
(12, 'Healthy Eating Tips for 2024', 'Discover the best practices for maintaining a healthy diet in the new year...', '2024-02-10', 2, 5),
(13, 'Exploring Minimalist Living', 'Minimalism is more than a trend; it’s a lifestyle change that can improve your life...', '2024-03-05', 8, 3),
(14, 'The Future of Online Education', 'Online education is evolving rapidly, offering new opportunities for learners...', '2024-04-20', 4, 8),
(15, 'Top Travel Destinations for 2024', 'Planning your next vacation? Here are some top destinations to consider...', '2024-05-25', 4, 5);

-- --------------------------------------------------------

--
-- Structure de la table `author`
--

DROP TABLE IF EXISTS `author`;
CREATE TABLE IF NOT EXISTS `author` (
  `id` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `dob` date DEFAULT NULL,
  `phone` bigint DEFAULT NULL,
  `address` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `author`
--

INSERT INTO `author` (`id`, `firstname`, `lastname`, `dob`, `phone`, `address`) VALUES
(1, 'John', 'Doe', '1985-02-15', 1234567890, '123 Main St, Springfield, IL'),
(2, 'Jane', 'Smith', '1990-07-22', 2147483647, '456 Oak St, Metropolis, NY'),
(3, 'Alice', 'Johnson', '1978-11-30', 2147483647, '789 Pine St, Gotham, NJ'),
(4, 'Bob', 'Brown', '1982-03-10', 2147483647, '321 Cedar St, Star City, CA'),
(5, 'Charlie', 'Davis', '1995-12-05', 1112223333, '654 Elm St, Central City, TX'),
(6, 'Emily', 'White', '1988-09-09', 2147483647, '987 Maple St, Coast City, FL'),
(7, 'Michael', 'Green', '1975-01-21', 2147483647, '159 Birch St, Hub City, OH'),
(8, 'Jessica', 'Black', '1992-04-18', 2147483647, '753 Oak Ave, Keystone, PA'),
(9, 'David', 'Miller', '1980-06-25', 2147483647, '951 Ash Dr, Blüdhaven, GA'),
(10, 'Sophia', 'Wilson', '1983-08-30', 2147483647, '852 Willow Rd, Smallville, KS'),
(11, 'Emily', 'Johnson', '1982-11-30', 3456789012, '789 Pine Road, Smalltown'),
(12, 'Michael', 'Brown', '1978-06-21', 4567890123, '101 Maple Lane, Big City'),
(13, 'Sophia', 'Davis', '1995-01-10', 5678901234, '202 Birch Blvd, Capital City');

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Technology'),
(2, 'Health'),
(3, 'Science'),
(4, 'Travel'),
(5, 'Education'),
(6, 'Entertainment'),
(7, 'Business'),
(8, 'Sports'),
(9, 'Lifestyle'),
(10, 'Politics'),
(11, 'Finance'),
(13, 'Food & Drink'),
(14, 'Music'),
(15, 'Art & Culture\r\n'),
(16, 'Environment'),
(19, 'History');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
