-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04-Jun-2018 às 14:10
-- Versão do servidor: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tribhut`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `log`
--

INSERT INTO `log` (`id`, `date`, `time`, `user`) VALUES
(1, '2018-04-28', '14:50:52', 'carole'),
(2, '2018-05-28', '15:02:20', 'carole'),
(3, '2018-05-19', '15:03:39', 'cyril'),
(4, '2018-05-28', '15:03:40', 'undefined'),
(5, '2018-05-07', '15:03:52', 'antoine'),
(6, '2018-05-28', '15:03:52', 'maxime'),
(7, '2018-05-28', '15:03:53', 'undefined'),
(8, '2018-05-28', '15:11:47', 'undefined'),
(9, '2018-05-28', '15:11:55', 'undefined'),
(10, '2018-05-28', '15:11:57', 'undefined'),
(11, '2018-05-28', '15:12:00', 'undefined'),
(12, '2018-05-28', '15:12:20', 'antoine'),
(13, '2018-05-28', '15:12:23', 'undefined'),
(14, '2018-05-28', '15:13:28', 'cyril'),
(15, '2018-05-28', '15:13:34', 'undefined'),
(16, '2018-05-28', '15:13:35', 'maxime'),
(17, '2018-05-28', '15:14:00', 'undefined'),
(18, '2018-05-28', '15:14:42', 'undefined'),
(19, '2018-05-28', '15:15:10', 'undefined'),
(20, '2018-05-28', '15:15:13', 'undefined'),
(21, '2018-05-28', '15:15:16', 'undefined'),
(22, '2018-05-28', '15:15:19', 'undefined'),
(23, '2018-05-28', '15:15:22', 'undefined'),
(24, '2018-05-28', '15:15:25', 'undefined'),
(25, '2018-05-28', '15:15:28', 'undefined'),
(26, '2018-05-28', '15:15:31', 'undefined'),
(27, '2018-05-28', '15:15:34', 'undefined'),
(28, '2018-05-28', '15:15:37', 'undefined'),
(29, '2018-05-28', '15:15:40', 'undefined'),
(30, '2018-05-28', '15:15:41', 'undefined'),
(31, '2018-05-28', '15:15:42', 'undefined'),
(32, '2018-05-28', '15:15:43', 'undefined'),
(33, '2018-05-28', '15:15:43', 'undefined'),
(34, '2018-05-28', '15:15:44', 'undefined'),
(35, '2018-05-28', '15:15:44', 'undefined'),
(36, '2018-05-28', '15:15:47', 'undefined'),
(37, '2018-05-28', '15:15:48', 'undefined'),
(38, '2018-05-28', '15:15:51', 'undefined'),
(39, '2018-05-28', '15:15:54', 'undefined'),
(40, '2018-05-28', '15:15:57', 'undefined'),
(41, '2018-05-28', '15:15:58', 'undefined'),
(42, '2018-05-28', '15:15:59', 'undefined'),
(43, '2018-05-28', '15:15:59', 'undefined'),
(44, '2018-05-28', '15:16:02', 'undefined'),
(45, '2018-05-28', '15:16:03', 'undefined'),
(46, '2018-05-28', '15:16:03', 'undefined'),
(47, '2018-05-28', '15:16:04', 'undefined'),
(48, '2018-05-28', '15:16:05', 'undefined'),
(49, '2018-05-28', '15:16:05', 'undefined'),
(50, '2018-05-28', '15:16:06', 'undefined'),
(51, '2018-05-28', '15:16:09', 'undefined'),
(52, '2018-05-28', '15:16:10', 'undefined'),
(53, '2018-05-28', '15:16:13', 'undefined'),
(54, '2018-05-28', '15:16:16', 'undefined'),
(55, '2018-05-28', '15:16:19', 'undefined'),
(56, '2018-05-28', '15:16:22', 'undefined'),
(57, '2018-05-28', '15:16:25', 'undefined'),
(58, '2018-05-28', '15:16:28', 'undefined'),
(59, '2018-05-28', '15:16:31', 'undefined'),
(60, '2018-05-28', '15:16:34', 'undefined'),
(61, '2018-05-28', '15:16:37', 'undefined'),
(62, '2018-05-28', '15:16:40', 'undefined'),
(63, '2018-05-28', '15:16:43', 'undefined'),
(64, '2018-05-28', '15:16:47', 'undefined'),
(65, '2018-05-28', '15:16:50', 'undefined'),
(66, '2018-05-28', '15:16:53', 'undefined'),
(67, '2018-05-28', '15:16:56', 'undefined'),
(68, '2018-05-28', '15:16:59', 'undefined'),
(69, '2018-05-28', '15:19:02', 'undefined'),
(70, '2018-05-28', '15:19:05', 'undefined'),
(71, '2018-05-28', '15:19:07', 'undefined'),
(72, '2018-05-28', '15:19:08', 'undefined'),
(73, '2018-05-28', '15:19:09', 'undefined'),
(74, '2018-05-28', '15:19:09', 'undefined'),
(75, '2018-05-28', '15:19:10', 'undefined'),
(76, '2018-05-28', '15:19:11', 'undefined'),
(77, '2018-05-28', '15:19:11', 'undefined'),
(78, '2018-05-28', '15:19:11', 'undefined'),
(79, '2018-05-28', '15:19:12', 'undefined'),
(80, '2018-05-28', '15:19:12', 'undefined'),
(81, '2018-05-28', '15:19:12', 'undefined'),
(82, '2018-05-28', '15:19:12', 'undefined'),
(83, '2018-05-28', '15:19:12', 'undefined'),
(84, '2018-05-28', '15:19:15', 'undefined'),
(85, '2018-05-28', '15:19:58', 'undefined'),
(86, '2018-05-28', '15:20:01', 'undefined'),
(87, '2018-05-28', '15:20:04', 'undefined'),
(88, '2018-05-28', '15:20:05', 'undefined'),
(89, '2018-05-28', '15:20:07', 'undefined'),
(90, '2018-05-28', '15:20:10', 'undefined'),
(91, '2018-05-28', '15:20:11', 'undefined'),
(92, '2018-05-28', '15:20:13', 'undefined'),
(93, '2018-05-28', '15:20:16', 'undefined'),
(94, '2018-05-28', '15:20:19', 'undefined'),
(95, '2018-05-28', '15:20:22', 'undefined'),
(96, '2018-05-28', '15:20:25', 'undefined'),
(97, '2018-05-28', '15:20:28', 'undefined'),
(98, '2018-05-28', '15:20:31', 'undefined'),
(99, '2018-05-28', '15:31:06', 'undefined'),
(100, '2018-05-28', '15:31:07', 'undefined'),
(101, '2018-05-28', '15:31:08', 'undefined'),
(102, '2018-05-28', '15:31:09', 'undefined'),
(103, '2018-05-28', '15:31:10', 'undefined'),
(104, '2018-05-28', '15:31:12', 'undefined'),
(105, '2018-05-28', '15:31:13', 'undefined'),
(106, '2018-05-28', '15:31:14', 'undefined'),
(107, '2018-05-28', '15:31:15', 'undefined'),
(108, '2018-05-28', '15:31:16', 'undefined'),
(109, '2018-05-28', '15:31:17', 'undefined'),
(110, '2018-05-28', '15:31:18', 'undefined'),
(111, '2018-05-28', '15:31:19', 'undefined'),
(112, '2018-05-28', '15:31:20', 'undefined'),
(113, '2018-05-28', '15:31:21', 'undefined'),
(114, '2018-05-28', '15:31:22', 'undefined'),
(115, '2018-05-28', '15:31:24', 'undefined'),
(116, '2018-05-28', '15:31:25', 'undefined'),
(117, '2018-05-28', '15:31:26', 'undefined'),
(118, '2018-05-15', '15:31:27', 'cyril'),
(119, '2018-05-02', '15:31:28', 'antoine'),
(120, '2018-04-28', '15:31:31', 'maxime'),
(121, '2018-05-06', '15:31:34', 'carole'),
(122, '2018-05-31', '16:19:08', 'cyril'),
(123, '2018-05-31', '16:47:43', 'antoine'),
(124, '2018-06-01', '11:30:38', 'undefined'),
(125, '2018-06-01', '11:30:51', 'undefined'),
(126, '2018-06-01', '11:33:05', 'undefined'),
(127, '2018-06-01', '11:33:29', 'carole'),
(128, '2018-06-01', '14:06:56', 'cyril');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
