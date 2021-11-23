-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Nov-2021 às 02:26
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
-- Estrutura da tabela `carros`
--

CREATE TABLE `carros` (
  `id_carro` int(11) NOT NULL DEFAULT current_timestamp(),
  `modelo_carro` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `ano_fabricacao` int(4) NOT NULL,
  `placa_carro` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `carros`
--

INSERT INTO `carros` (`id_carro`, `modelo_carro`, `ano_fabricacao`, `placa_carro`) VALUES
(1, 'Palio Weekend', 2010, 'DDD-1111'),
(1, '', 0, ''),
(1, 'Ferrari', 1999, 'HHH-1202'),
(2147483647, '', 0, ''),
(2147483647, 'MicroBlau', 2010, 'DDD-1111'),
(2147483647, '', 0, ''),
(2147483647, '', 0, ''),
(2147483647, 'Tesla', 2021, 'kkkk-5464'),
(2147483647, '', 0, ''),
(2147483647, 'sdsdsd', 1999, 'dsdsdsdsds'),
(2147483647, 'sdsdsd', 1999, 'dsdsdsdsds'),
(2147483647, '', 0, ''),
(2147483647, '', 0, ''),
(2147483647, 'Palio Weekend', 2010, 'DDD-1111');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
