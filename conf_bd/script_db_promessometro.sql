-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 12-Nov-2018 às 12:32
-- Versão do servidor: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_promessometro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_login`
--

DROP TABLE IF EXISTS `tab_login`;
CREATE TABLE IF NOT EXISTS `tab_login` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `login` varchar(100) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tab_login`
--

INSERT INTO `tab_login` (`id`, `nome`, `email`, `login`, `senha`, `status`) VALUES
(1, 'jose', 'juniorpinto@hotmail.com', 'admin', 'admin', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_promessas`
--

DROP TABLE IF EXISTS `tab_promessas`;
CREATE TABLE IF NOT EXISTS `tab_promessas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipopromessa` varchar(100) NOT NULL,
  `nomepolitico` varchar(100) DEFAULT NULL,
  `nomepromessa` varchar(150) NOT NULL,
  `detalhepromessa` varchar(500) NOT NULL,
  `anopromessa` year(4) NOT NULL,
  `estadopromessa` varchar(2) NOT NULL,
  `cidadepromessa` varchar(100) NOT NULL,
  `status` varchar(100) DEFAULT NULL,
  `foto` varchar(200) DEFAULT NULL,
  `data_cadastro` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `data_alteracao` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tab_promessas`
--

INSERT INTO `tab_promessas` (`id`, `tipopromessa`, `nomepolitico`, `nomepromessa`, `detalhepromessa`, `anopromessa`, `estadopromessa`, `cidadepromessa`, `status`, `foto`, `data_cadastro`, `data_alteracao`) VALUES
(1, 'Estadual', 'Amazonino', 'Bolsa Familia Estadual', 'prometeu no primeiro ano de mandato e depois prometeu dar reajete anual', 2018, 'AC', 'Manaus', 'Em Andamento', '09112018_neg.jpeg', '2018-11-09 16:36:08', NULL),
(2, 'Presidencial', 'jose teste', 'viagem para todos', 'prometeu', 2018, 'AM', 'Manaus', 'Não Cumprido', '09112018_WhatsApp Image 2018-09-13 at 22.43.15.jpeg', '2018-11-09 16:45:47', NULL),
(3, 'Estadual', 'jose', 'matar super  mario', 'prometeu matar o super mario', 2019, 'AM', 'Manaus', 'Cumprido', '10112018_1up mushroom.jpg', '2018-11-10 01:06:12', NULL),
(4, 'Presidencial', 'Dilma pilantra', 'Trêm Bala', 'prometeu o trem bala', 2010, 'AM', 'Brasilia', 'Não Cumprido', '10112018_Dilma_Rousseff_2011.jpg', '2018-11-10 01:17:01', NULL),
(5, 'Estadual', 'joão', 'correr', 'correr todo dia', 2018, 'AM', 'Manaus', 'Cumprido', '10112018_MiniMushroom.jpg.png', '2018-11-10 02:32:20', NULL),
(6, 'Estadual', 'jose', 'Trêm Bala', 'prometeu o trem bala', 2019, 'AM', 'Manaus', 'Em Andamento', '10112018_MiniMushroom.jpg.png', '2018-11-10 22:27:46', NULL),
(7, 'Presidencial', 'jose teste', 'testando', 'prometeu e não cumpriu testando ', 2010, 'BR', 'Brasilia', 'Não Cumprido', '11112018_1up mushroom.jpg', '2018-11-11 02:57:21', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
