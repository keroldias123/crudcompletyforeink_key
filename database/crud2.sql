-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 17-Jan-2024 às 11:06
-- Versão do servidor: 8.2.0
-- versão do PHP: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `crud2`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidade`
--

DROP TABLE IF EXISTS `cidade`;
CREATE TABLE IF NOT EXISTS `cidade` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `sigla_pais` varchar(3) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sigla_pais` (`sigla_pais`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `cidade`
--

INSERT INTO `cidade` (`id`, `nome`, `sigla_pais`) VALUES
(1, 'luanda', '1'),
(2, 'luanda', 'ANG'),
(3, 'luanda', 'ANG'),
(4, 'benguela', 'ANG'),
(5, 'lisboa', 'Por');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `cod_cidade` varchar(255) NOT NULL,
  `cod_pais` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cod_cidade` (`cod_cidade`(250)),
  KEY `cod_pais` (`cod_pais`(250))
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `telefone`, `endereco`, `cod_cidade`, `cod_pais`, `email`) VALUES
(1, 'Kerol Dias', '+244995251006', 'Jacinta Tchipa', 'luanda', ' luanda', 'keroldias20@gmail.com'),
(2, 'Kerol Dias', '+244995251006', 'Jacinta Tchipa', 'luanda', ' luanda', 'keroldias20@gmail.com'),
(4, 'Kerol Dias', '+244995251006', 'Jacinta Tchipa', 'luanda', ' ANGOLA', 'keroldias20@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pais`
--

DROP TABLE IF EXISTS `pais`;
CREATE TABLE IF NOT EXISTS `pais` (
  `id` int NOT NULL AUTO_INCREMENT,
  `sigla` varchar(3) NOT NULL,
  `nome` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `pais`
--

INSERT INTO `pais` (`id`, `sigla`, `nome`) VALUES
(1, 'AOA', 'ANGOLA'),
(2, 'pp', 'Portugal'),
(3, 'AT', 'ANDORA'),
(4, 'pt', 'Portugal');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
