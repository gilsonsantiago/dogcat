-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Abr-2020 às 03:45
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dogcad`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `dogs`
--

CREATE TABLE `dogs` (
  `id` int(11) NOT NULL,
  `registro` varchar(100) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `datanascto` datetime NOT NULL,
  `idade` int(2) NOT NULL DEFAULT 0,
  `raca` varchar(50) NOT NULL DEFAULT '0',
  `sexo` varchar(1) NOT NULL DEFAULT '0',
  `cor` varchar(20) NOT NULL DEFAULT '0',
  `pelo` varchar(1) NOT NULL DEFAULT '0',
  `foto` varchar(150) NOT NULL DEFAULT '0',
  `proprietario` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Cadastro dos cachorros';

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `dogs`
--
ALTER TABLE `dogs`
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `dogs`
--
ALTER TABLE `dogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
