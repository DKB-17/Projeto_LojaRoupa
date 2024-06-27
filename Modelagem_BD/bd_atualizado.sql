-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27/06/2024 às 21:06
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
(3, 2, 1, 'Casaco branco com detalhes preto', './img/imgProdutos/667daf1ab91db.png', '2024-06-27 15:27:38', 60.00, 80.00, 10, 5),
(4, 2, 1, 'Casaco roxo claro', './img/imgProdutos/667dafb9d6a24.png', '2024-06-27 15:30:17', 70.00, 90.00, 10, 5),
(5, 2, 1, 'Casaco rosa claro', './img/imgProdutos/667db01a15733.png', '2024-06-27 15:31:54', 70.00, 90.00, 10, 5),
(6, 2, 1, 'Casaco branco com detalhe preto ', './img/imgProdutos/667db05055571.png', '2024-06-27 15:32:48', 70.00, 90.00, 10, 5),
(7, 2, 1, 'Casaco branco com detalhes rosa', './img/imgProdutos/667db07b82505.png', '2024-06-27 15:33:31', 70.00, 90.00, 10, 5),
(8, 2, 1, 'Casaco branco', './img/imgProdutos/667db0a0f1a0b.png', '2024-06-27 15:34:08', 70.00, 90.00, 10, 5),
(9, 2, 1, 'Corta vento branco', './img/imgProdutos/667db0bd6510c.png', '2024-06-27 15:34:37', 80.00, 100.00, 10, 5),
(10, 2, 1, 'Corta vento preto', './img/imgProdutos/667db0e48f809.png', '2024-06-27 15:35:16', 80.00, 100.00, 10, 5),
(11, 2, 1, 'Casaco preto', './img/imgProdutos/667db1127681e.png', '2024-06-27 15:36:02', 70.00, 90.00, 10, 5),
(12, 2, 1, 'Casaco de moletom preto c/ Capuz', './img/imgProdutos/667db15d01dad.png', '2024-06-27 15:37:17', 60.00, 80.00, 10, 5),
(13, 6, 1, 'Calça jeans ', './img/imgProdutos/667db2b07e0dd.png', '2024-06-27 15:42:56', 70.00, 90.00, 10, 5),
(14, 6, 1, 'Calça cargo bege', './img/imgProdutos/667db45ba8e33.png', '2024-06-27 15:50:03', 70.00, 90.00, 10, 5),
(15, 6, 1, 'Calça cargo com fundo preto e desenhos coloridos', './img/imgProdutos/667db486cc56e.png', '2024-06-27 15:50:46', 80.00, 100.00, 10, 5),
(16, 6, 1, 'Calça branca com detalhe vermelho', './img/imgProdutos/667db4bc02e6f.png', '2024-06-27 15:51:40', 70.00, 90.00, 10, 5),
(17, 6, 1, 'Calça cargo marrom', './img/imgProdutos/667db4dc309be.png', '2024-06-27 15:52:12', 70.00, 90.00, 10, 5),
(18, 6, 1, 'Calça verde musgo', './img/imgProdutos/667db5344be33.png', '2024-06-27 15:53:40', 60.00, 80.00, 10, 5),
(19, 6, 1, 'Calça cargo preta', './img/imgProdutos/667db54ddad39.png', '2024-06-27 15:54:05', 60.00, 80.00, 10, 5),
(20, 6, 1, 'Calça cargo preta', './img/imgProdutos/667db569446cd.png', '2024-06-27 15:54:33', 60.00, 80.00, 10, 5),
(21, 6, 1, 'Calça marrom claro', './img/imgProdutos/667db584bb7d1.png', '2024-06-27 15:55:00', 60.00, 80.00, 10, 5),
(22, 6, 1, 'Calça branca com detalhe vermelho', './img/imgProdutos/667db59991eb9.png', '2024-06-27 15:55:21', 60.00, 80.00, 10, 5),
(23, 1, 1, 'Camiseta roxa', './img/imgProdutos/667db5ea94478.png', '2024-06-27 15:56:42', 30.00, 50.00, 10, 5),
(24, 1, 1, 'Camiseta azul', './img/imgProdutos/667db60215356.png', '2024-06-27 15:57:06', 30.00, 50.00, 10, 5),
(25, 1, 1, 'Camiseta branca com detalhes marrom', './img/imgProdutos/667db627b12a0.png', '2024-06-27 15:57:43', 30.00, 50.00, 10, 5),
(26, 1, 1, 'Camiseta roxo escuro', './img/imgProdutos/667db642a80a4.png', '2024-06-27 15:58:10', 30.00, 50.00, 10, 5),
(27, 1, 1, 'Camiseta off-white', './img/imgProdutos/667db6865168f.png', '2024-06-27 15:59:18', 30.00, 50.00, 10, 5),
(28, 1, 1, 'Camiseta verde claro', './img/imgProdutos/667db69f74bd7.png', '2024-06-27 15:59:43', 30.00, 50.00, 10, 5),
(29, 1, 1, 'Camiseta rosa', './img/imgProdutos/667db6c053785.png', '2024-06-27 16:00:16', 30.00, 50.00, 10, 5),
(30, 1, 1, 'Camiseta preta com detalhes verde', './img/imgProdutos/667db6dbb3298.png', '2024-06-27 16:00:43', 30.00, 50.00, 10, 5),
(31, 1, 1, 'Camiseta preta com detalhes rosa', './img/imgProdutos/667db6f0d4cb1.png', '2024-06-27 16:01:04', 30.00, 50.00, 10, 5),
(32, 1, 1, 'Camiseta branca com desenhos coloridos', './img/imgProdutos/667db70cb5431.png', '2024-06-27 16:01:32', 30.00, 50.00, 10, 5);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`idProduto`),
  ADD KEY `idCategoria_FK` (`idCategoria`),
  ADD KEY `idTamanho_FK` (`idTamanho`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `idProduto` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `idCategoria_FK` FOREIGN KEY (`idCategoria`) REFERENCES `categoria` (`id`),
  ADD CONSTRAINT `idTamanho_FK` FOREIGN KEY (`idTamanho`) REFERENCES `tamanho` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
