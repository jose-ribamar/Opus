-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 24-Abr-2024 às 02:39
-- Versão do servidor: 8.0.27
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `centro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cadastrado`
--

DROP TABLE IF EXISTS `tb_cadastrado`;
CREATE TABLE IF NOT EXISTS `tb_cadastrado` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_usuarios` int NOT NULL,
  `id_vagas` int NOT NULL,
  `id_empregador` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_usuarios` (`id_usuarios`),
  KEY `tb_cadastrado_ibfk_1` (`id_vagas`),
  KEY `id_empregador` (`id_empregador`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `tb_cadastrado`
--

INSERT INTO `tb_cadastrado` (`id`, `id_usuarios`, `id_vagas`, `id_empregador`) VALUES
(10, 40, 38, 52),
(11, 40, 38, 52),
(12, 40, 39, 51);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_empregador`
--

DROP TABLE IF EXISTS `tb_empregador`;
CREATE TABLE IF NOT EXISTS `tb_empregador` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sexo` varchar(15) NOT NULL,
  `nivel` varchar(15) NOT NULL,
  `descricao` varchar(1000) NOT NULL,
  `recupera` varchar(100) NOT NULL,
  `pergunta` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuario` (`usuario`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `tb_empregador`
--

INSERT INTO `tb_empregador` (`id`, `nome`, `usuario`, `senha`, `email`, `sexo`, `nivel`, `descricao`, `recupera`, `pergunta`) VALUES
(51, 'Natura', 'natura', '123', 'natura@aluno.ifpi.edu.br', 'Cosméticos', 'Empregador', 'Um revendedor que saiba falar em público', '', ''),
(52, 'Avon', 'avon', '123', 'avon@aluno.ifpi.edu.br', '', 'Empregador', 'Empresa de cosméticos', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuarios`
--

DROP TABLE IF EXISTS `tb_usuarios`;
CREATE TABLE IF NOT EXISTS `tb_usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `senha` varchar(30) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `sexo` varchar(15) NOT NULL,
  `nivel` varchar(15) NOT NULL,
  `escolaridade` varchar(20) NOT NULL,
  `descricao` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuario` (`usuario`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id`, `nome`, `usuario`, `senha`, `email`, `sexo`, `nivel`, `escolaridade`, `descricao`) VALUES
(42, 'joão maria', 'jose', '123', 'joseribamarsousa2001@gmail.com', 'Masculino', 'Funcionário', 'Fundamental incomple', 'desempregado'),
(43, 'Ana Maria gomes de Sousa', 'ana', '123', '', 'Feminino', 'Funcionário', 'fundamental completo', 'nd');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_vagas`
--

DROP TABLE IF EXISTS `tb_vagas`;
CREATE TABLE IF NOT EXISTS `tb_vagas` (
  `id_vagas` int NOT NULL AUTO_INCREMENT,
  `id_empregador` int NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `data_cadastro` date NOT NULL,
  `descricao` varchar(1000) NOT NULL,
  PRIMARY KEY (`id_vagas`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `tb_vagas`
--

INSERT INTO `tb_vagas` (`id_vagas`, `id_empregador`, `titulo`, `data_cadastro`, `descricao`) VALUES
(38, 52, 'Entregador avon', '2024-04-20', 'Conheça o gosto local\r\nConheça muitas pessoas\r\nSaiba falar em público\r\nMaiores de 18 anos'),
(39, 51, 'Entregador natura', '2024-04-20', 'Conheça o gosto local\r\nConheça muitas pessoas\r\nSaiba falar em público\r\nMaiores de 18 anos'),
(40, 52, 'mm', '2024-04-24', 'mmm');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usu`
--

DROP TABLE IF EXISTS `usu`;
CREATE TABLE IF NOT EXISTS `usu` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuario` (`usuario`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `usu`
--

INSERT INTO `usu` (`id`, `nome`, `usuario`, `email`) VALUES
(39, 'Ana Maria gomes de Sousa', 'ana', ''),
(38, 'jose', 'jose', 'jose@gmail.com'),
(37, 'Avon', 'avon', 'avon@aluno.ifpi.edu.br'),
(36, 'Natura', 'natura', 'natura@aluno.ifpi.edu.br');

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tb_cadastrado`
--
ALTER TABLE `tb_cadastrado`
  ADD CONSTRAINT `tb_cadastrado_ibfk_1` FOREIGN KEY (`id_empregador`) REFERENCES `tb_empregador` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
