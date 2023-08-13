-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13/08/2023 às 23:34
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadproduto`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `estoque`
--

CREATE TABLE `estoque` (
  `id` int(11) NOT NULL,
  `id_produtos` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `quantidade` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `estoque`
--

INSERT INTO `estoque` (`id`, `id_produtos`, `nome`, `descricao`, `categoria`, `quantidade`) VALUES
(1, 1, 'Samsung Galaxy F34', 'O Samsung Galaxy F34 é um smartphone Android avançado e abrangente em todos os pontos de vista com algumas características excelentes. Tem uma grande tela de 6.5 polegadas com uma resolução de 2340x10', 'eletronicos', 31),
(2, 2, 'Camisa', 'Na Dafiti você encontra todos os modelos de camisetas, camisa xadrez, lisa e estampada para complementar o seu visual. Você compra online, de maneira rápida e segura, com frete grátis e entrega para t', 'roupas', 32);

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `descricao` varchar(200) DEFAULT NULL,
  `custo` int(11) NOT NULL DEFAULT 0,
  `fornecedor` varchar(100) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `categoria` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `descricao`, `custo`, `fornecedor`, `foto`, `categoria`) VALUES
(1, 'Samsung Galaxy F34', 'O Samsung Galaxy F34 é um smartphone Android avançado e abrangente em todos os pontos de vista com algumas características excelentes. Tem uma grande tela de 6.5 polegadas com uma resolução de 2340x10', 2399, 'Magazine Luiza', 'OIP.jpg', 'eletronicos'),
(2, 'Camisa', 'Na Dafiti você encontra todos os modelos de camisetas, camisa xadrez, lisa e estampada para complementar o seu visual. Você compra online, de maneira rápida e segura, com frete grátis e entrega para t', 69, 'Rebook', 'camisa.jpg', 'roupas'),
(3, 'Pastel', 'Pastel é um alimento composto por uma massa à base de farinha a que se dá a forma de um envelope, se recheia e depois se frita por imersão em óleo fervente. Originário da culinária europeia, o pastel', 15, 'Maria Salgados', 'pastel.jpg', 'alimentos');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `estoque`
--
ALTER TABLE `estoque`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_estoque_produtos` (`id_produtos`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `estoque`
--
ALTER TABLE `estoque`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `estoque`
--
ALTER TABLE `estoque`
  ADD CONSTRAINT `FK_estoque_produtos` FOREIGN KEY (`id_produtos`) REFERENCES `produtos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
