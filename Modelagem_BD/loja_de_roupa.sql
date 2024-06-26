-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28/06/2024 às 01:48
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

--
-- Despejando dados para a tabela `categoria`
--

INSERT INTO `categoria` (`id`, `descricao`) VALUES
(1, 'Camiseta'),
(2, 'Casaco'),
(3, 'Saia'),
(4, 'Bermuda'),
(5, 'Calça');

-- --------------------------------------------------------

--
-- Estrutura para tabela `cidade`
--

CREATE TABLE `cidade` (
  `idCidade` int(3) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `idUF` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cidade`
--

INSERT INTO `cidade` (`idCidade`, `cidade`, `idUF`) VALUES
(1, 'Assis', 1),
(2, 'Candido Mota', 1),
(3, 'matinho', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(3) NOT NULL,
  `nome` varchar(70) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `email` varchar(80) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `prefixo` int(2) UNSIGNED NOT NULL DEFAULT 55 COMMENT 'discagem direta à distância',
  `contato` varchar(10) DEFAULT NULL,
  `data_nascimento` date NOT NULL,
  `idCidade` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `cpf`, `email`, `senha`, `prefixo`, `contato`, `data_nascimento`, `idCidade`) VALUES
(1, 'Diego Brito da Silva', '469.005.598-08', 'diegobritosilva@gmail.com', 'e96d16e0e97ce4f1bc397156eb34c9a8', 55, '99912-4567', '2004-03-17', 1),
(2, 'Bruno Coutinho terribile', '123.456.587-10', 'bruno@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 55, '1899805-16', '2005-02-22', 1),
(3, 'Felipe', '206.596.908-70', 'felipe@gmail.com', '36f97e87b3d16a9a374f4b457c053c6f', 55, '1866665-98', '2024-06-24', 1);

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

--
-- Despejando dados para a tabela `genero`
--

INSERT INTO `genero` (`id`, `genero`) VALUES
(1, 'c');

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
  `caminho_imagem` varchar(50) NOT NULL COMMENT 'caminho da imagem do produto',
  `data_criacao` datetime NOT NULL DEFAULT current_timestamp(),
  `valor_compra` decimal(6,2) UNSIGNED NOT NULL,
  `valor_venda` decimal(6,2) UNSIGNED NOT NULL,
  `estoque` int(3) UNSIGNED DEFAULT NULL,
  `estoque_minimo` int(2) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produto`
--

INSERT INTO `produto` (`idProduto`, `idCategoria`, `idTamanho`, `descricao`, `caminho_imagem`, `data_criacao`, `valor_compra`, `valor_venda`, `estoque`, `estoque_minimo`) VALUES
(3, 2, 3, 'Moletom roxo claro', './img/imgProdutos/667df2c9dffc8.png', '2024-06-27 20:16:25', 70.00, 90.00, 10, 5),
(4, 2, 3, 'Moletom branco com detalhes rosa', './img/imgProdutos/667df314a5c80.png', '2024-06-27 20:17:40', 70.00, 90.00, 10, 5),
(5, 2, 1, 'Corta vento branco', './img/imgProdutos/667df34f3a091.png', '2024-06-27 20:18:39', 80.00, 100.00, 10, 5),
(6, 2, 1, 'Calça jeans desenhada', './img/imgProdutos/667df39943f15.png', '2024-06-27 20:19:53', 80.00, 100.00, 10, 5),
(7, 2, 1, 'Calça preta com desenhos coloridos', './img/imgProdutos/667df3c7e5c93.png', '2024-06-27 20:20:39', 80.00, 100.00, 10, 5),
(8, 5, 1, 'Calça cargo marrom', './img/imgProdutos/667df4972d720.png', '2024-06-27 20:24:07', 60.00, 80.00, 10, 5),
(9, 1, 1, 'Camiseta roxo escuro', './img/imgProdutos/667df4d4baff8.png', '2024-06-27 20:25:08', 30.00, 50.00, 10, 5),
(10, 1, 3, 'Camiseta verde limão', './img/imgProdutos/667df4fe187bd.png', '2024-06-27 20:25:50', 30.00, 50.00, 10, 5),
(11, 1, 1, 'Camiseta preta com detalhe vermelho', './img/imgProdutos/667df52aa3bae.png', '2024-06-27 20:26:34', 30.00, 50.00, 10, 5),
(12, 3, 1, 'Saia cargo marrom', './img/imgProdutos/667df551975b6.png', '2024-06-27 20:27:13', 60.00, 80.00, 10, 5),
(13, 3, 1, 'Saia jeans cinza', './img/imgProdutos/667df57d44a97.png', '2024-06-27 20:27:57', 60.00, 80.00, 10, 5),
(14, 3, 1, 'Saia marrom ', './img/imgProdutos/667df5a4bf955.png', '2024-06-27 20:28:36', 60.00, 80.00, 10, 5),
(15, 2, 3, 'Corta vento azul marinho', './img/imgProdutos/667df5f6546cc.png', '2024-06-27 20:29:58', 70.00, 90.00, 10, 5),
(16, 2, 3, 'Corta vento marrom claro', './img/imgProdutos/667df6166b9ff.png', '2024-06-27 20:30:30', 70.00, 90.00, 10, 5),
(17, 2, 3, 'Corta vento verde escuro', './img/imgProdutos/667df6415761d.png', '2024-06-27 20:31:13', 80.00, 100.00, 10, 5),
(18, 5, 1, 'Calça bege', './img/imgProdutos/667df69a254fd.png', '2024-06-27 20:32:42', 60.00, 80.00, 10, 5),
(19, 5, 1, 'Calça preta', './img/imgProdutos/667df6c961a3f.png', '2024-06-27 20:33:29', 60.00, 80.00, 10, 5),
(20, 5, 3, 'Calça cargo preta', './img/imgProdutos/667df7429acac.png', '2024-06-27 20:35:30', 60.00, 80.00, 10, 5),
(21, 1, 1, 'Camiseta verde escuro', './img/imgProdutos/667df92d5a74a.png', '2024-06-27 20:43:41', 30.00, 50.00, 10, 5),
(22, 1, 1, 'Camiseta preta com detalhe azul', './img/imgProdutos/667df955557c2.png', '2024-06-27 20:44:21', 30.00, 50.00, 10, 5),
(23, 1, 1, 'Camiseta roxa', './img/imgProdutos/667df971ac364.png', '2024-06-27 20:44:49', 30.00, 50.00, 10, 5),
(24, 4, 3, 'Shorts azul marinho', './img/imgProdutos/667df9a50e724.png', '2024-06-27 20:45:41', 15.00, 30.00, 10, 5),
(25, 4, 3, 'Shorts cargo marrom ', './img/imgProdutos/667df9ccc77c5.png', '2024-06-27 20:46:20', 15.00, 30.00, 10, 5),
(26, 4, 3, 'Shorts cargo bege', './img/imgProdutos/667df9e92b107.png', '2024-06-27 20:46:49', 20.00, 40.00, 10, 5);

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

--
-- Despejando dados para a tabela `tamanho`
--

INSERT INTO `tamanho` (`id`, `descricao`) VALUES
(1, 'M'),
(3, 'G');

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
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `cidade`
--
ALTER TABLE `cidade`
  MODIFY `idCidade` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `idProduto` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de tabela `tamanho`
--
ALTER TABLE `tamanho`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
