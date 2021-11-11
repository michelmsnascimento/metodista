-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Nov-2021 às 04:39
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `metodista`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `Id_cliente` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `Nome_cliente` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `Idade_cliente` int(3) NOT NULL,
  `Genero_cliente` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Data_Nasc_Cliente` date NOT NULL,
  `Email_Cliente` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `Curso_Cliente` varchar(80) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`Id_cliente`, `Nome_cliente`, `Idade_cliente`, `Genero_cliente`, `Data_Nasc_Cliente`, `Email_Cliente`, `Curso_Cliente`) VALUES
('0001', 'Michel Moraes', 30, 'Masc', '0000-00-00', 'michel_073@hotmail.com', 'Sistemas de Informacao'),
('0002', 'Michel Moraes', 30, 'Masc', '0000-00-00', 'michel_073@hotmail.com', 'Sistemas de Informacao'),
('0003', 'Michel Moraes', 30, 'Masc', '0000-00-00', 'michel_073@hotmail.com', 'Sistemas de Informacao'),
('0004', 'Michel Moraes', 30, 'Masc', '0000-00-00', 'michel_073@hotmail.com', 'Sistemas de Informacao');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
