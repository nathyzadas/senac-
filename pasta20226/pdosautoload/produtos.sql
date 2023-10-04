-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26-Fev-2023 às 13:53
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pdo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `descricao` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `descricao`) VALUES
(5, 'Cadeira Gamer', 'Ergométrica laser'),
(6, 'Mouse Pad', 'turma da disnay'),
(7, 'Mouse Pad', 'turma da disnay'),
(8, 'Mouse Pad', 'turma da disnay'),
(9, 'Caneta optica xl', 'azul, branca, verde'),
(10, 'Cadeira', 'Cadeira Flex'),
(11, 'Cadeira', 'Cadeira Flex'),
(12, 'Cadeira', 'Cadeira Flex'),
(13, 'Teclado 2', 'Kingjames'),
(14, 'Teclado 2', 'Kingjames'),
(15, 'Mouse', 'optico'),
(17, 'Mouse Pad', 'Turma da Mônica'),
(18, 'Mouse Pad', 'Turma da Mônica'),
(19, 'Mouse Pad', 'Turma da Mônica'),
(20, 'Mouse Pad', 'Turma da Mônica'),
(21, 'Mouse Pad', 'Turma da Mônica'),
(22, 'Mouse Pad', 'Turma da Mônica'),
(30, 'Tela Lg 500', 'Led, Full'),
(31, 'Tela Dell', 'Full'),
(32, 'Tela Dell', 'Full'),
(33, 'Tela Samsung', 'Full 4k'),
(34, 'Tela Philco', '1200px'),
(35, 'Monitor mono', 'preto e branco'),
(36, 'Monitor touch', 'sensível'),
(37, 'Monitor color', '16 bits'),
(38, 'Mouse pad', 'flamengo'),
(39, 'Mouse pad', 'flamengo'),
(40, 'Mouse pad ', 'branco, azul'),
(41, 'Mouse genius', 'optico ou com fio'),
(42, 'Mouse genius', 'optico ou com fio'),
(43, 'Mouse genius', 'optico ou com fio');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
