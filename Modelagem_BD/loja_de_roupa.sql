-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19/05/2024 às 21:19
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `loja_de_roupa`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `categoria`
--

CREATE TABLE `categoria` (
  `id` int(3) NOT NULL,
  `descricao` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cidade`
--

CREATE TABLE `cidade` (
  `idCidade` int(3) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `idUF` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(3) NOT NULL,
  `nome` varchar(70) NOT NULL,
  `cpf` varchar(12) NOT NULL,
  `email` varchar(80) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `contato` varchar(12) DEFAULT NULL,
  `data_nascimento` date NOT NULL,
  `idCidade` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cor`
--

CREATE TABLE `cor` (
  `idCor` int(2) NOT NULL,
  `descricao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cor_do_produto`
--

CREATE TABLE `cor_do_produto` (
  `idProduto` int(3) NOT NULL,
  `idCor` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `forma_pg`
--

CREATE TABLE `forma_pg` (
  `id` int(2) NOT NULL,
  `descricao` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `genero`
--

CREATE TABLE `genero` (
  `id` int(1) NOT NULL,
  `genero` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `item_venda`
--

CREATE TABLE `item_venda` (
  `idVenda` int(2) NOT NULL,
  `idProduto` int(3) NOT NULL,
  `Qtde` int(2) UNSIGNED NOT NULL,
  `valor` decimal(7,2) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto`
--

CREATE TABLE `produto` (
  `idProduto` int(3) NOT NULL,
  `idCategoria` int(3) NOT NULL,
  `idTamanho` int(2) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `valor_compra` decimal(6,2) UNSIGNED NOT NULL,
  `valor_venda` decimal(6,2) UNSIGNED NOT NULL,
  `estoque` int(3) UNSIGNED DEFAULT NULL,
  `estoque_minimo` int(2) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto_do_genero`
--

CREATE TABLE `produto_do_genero` (
  `idProduto` int(3) NOT NULL,
  `idGenero` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tamanho`
--

CREATE TABLE `tamanho` (
  `id` int(2) NOT NULL,
  `descricao` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `uf`
--

CREATE TABLE `uf` (
  `id` int(2) NOT NULL,
  `UF` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `uf`
--

INSERT INTO `uf` (`id`, `UF`) VALUES
(1, 'SP'),
(2, 'MG'),
(3, 'RJ'),
(4, 'DF');

-- --------------------------------------------------------

--
-- Estrutura para tabela `venda`
--

CREATE TABLE `venda` (
  `idVenda` int(2) NOT NULL,
  `idCliente` int(3) NOT NULL,
  `idFormaPagamento` int(2) NOT NULL,
  `Data_venda` date NOT NULL DEFAULT current_timestamp(),
  `Valor_total` decimal(7,2) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `cidade`
--
ALTER TABLE `cidade`
  ADD PRIMARY KEY (`idCidade`),
  ADD KEY `idUF_FK` (`idUF`);

--
-- Índices de tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cpf` (`cpf`),
  ADD KEY `idCidade_FK` (`idCidade`);

--
-- Índices de tabela `cor`
--
ALTER TABLE `cor`
  ADD PRIMARY KEY (`idCor`);

--
-- Índices de tabela `cor_do_produto`
--
ALTER TABLE `cor_do_produto`
  ADD KEY `idProduto_FK2` (`idProduto`),
  ADD KEY `idCor_FK` (`idCor`);

--
-- Índices de tabela `forma_pg`
--
ALTER TABLE `forma_pg`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `item_venda`
--
ALTER TABLE `item_venda`
  ADD KEY `idVenda_FK` (`idVenda`),
  ADD KEY `idProduto_FK3` (`idProduto`);

--
-- Índices de tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`idProduto`),
  ADD KEY `idCategoria_FK` (`idCategoria`),
  ADD KEY `idTamanho_FK` (`idTamanho`);

--
-- Índices de tabela `produto_do_genero`
--
ALTER TABLE `produto_do_genero`
  ADD KEY `idProduto_FK` (`idProduto`),
  ADD KEY `idGenero_FK` (`idGenero`);

--
-- Índices de tabela `tamanho`
--
ALTER TABLE `tamanho`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `uf`
--
ALTER TABLE `uf`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `venda`
--
ALTER TABLE `venda`
  ADD PRIMARY KEY (`idVenda`),
  ADD KEY `idCliente_FK` (`idCliente`),
  ADD KEY `ifForma_pg_FK` (`idFormaPagamento`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cidade`
--
ALTER TABLE `cidade`
  MODIFY `idCidade` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cor`
--
ALTER TABLE `cor`
  MODIFY `idCor` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `forma_pg`
--
ALTER TABLE `forma_pg`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `genero`
--
ALTER TABLE `genero`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `idProduto` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tamanho`
--
ALTER TABLE `tamanho`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `uf`
--
ALTER TABLE `uf`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `venda`
--
ALTER TABLE `venda`
  MODIFY `idVenda` int(2) NOT NULL AUTO_INCREMENT;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `cidade`
--
ALTER TABLE `cidade`
  ADD CONSTRAINT `idUF_FK` FOREIGN KEY (`idUF`) REFERENCES `uf` (`id`) ON UPDATE CASCADE;

--
-- Restrições para tabelas `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `idCidade_FK` FOREIGN KEY (`idCidade`) REFERENCES `cidade` (`idCidade`);

--
-- Restrições para tabelas `cor_do_produto`
--
ALTER TABLE `cor_do_produto`
  ADD CONSTRAINT `idCor_FK` FOREIGN KEY (`idCor`) REFERENCES `cor` (`idCor`) ON UPDATE CASCADE,
  ADD CONSTRAINT `idProduto_FK2` FOREIGN KEY (`idProduto`) REFERENCES `produto` (`idProduto`);

--
-- Restrições para tabelas `item_venda`
--
ALTER TABLE `item_venda`
  ADD CONSTRAINT `idProduto_FK3` FOREIGN KEY (`idProduto`) REFERENCES `produto` (`idProduto`),
  ADD CONSTRAINT `idVenda_FK` FOREIGN KEY (`idVenda`) REFERENCES `venda` (`idVenda`);

--
-- Restrições para tabelas `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `idCategoria_FK` FOREIGN KEY (`idCategoria`) REFERENCES `categoria` (`id`),
  ADD CONSTRAINT `idTamanho_FK` FOREIGN KEY (`idTamanho`) REFERENCES `tamanho` (`id`);

--
-- Restrições para tabelas `produto_do_genero`
--
ALTER TABLE `produto_do_genero`
  ADD CONSTRAINT `idGenero_FK` FOREIGN KEY (`idGenero`) REFERENCES `genero` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `idProduto_FK` FOREIGN KEY (`idProduto`) REFERENCES `produto` (`idProduto`);

--
-- Restrições para tabelas `venda`
--
ALTER TABLE `venda`
  ADD CONSTRAINT `idCliente_FK` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`id`),
  ADD CONSTRAINT `ifForma_pg_FK` FOREIGN KEY (`idFormaPagamento`) REFERENCES `forma_pg` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
