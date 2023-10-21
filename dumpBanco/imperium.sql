-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21/10/2023 às 20:09
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `imperium`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `meusgastos`
--

CREATE TABLE `meusgastos` (
  `id` int(11) NOT NULL,
  `despesa` varchar(255) NOT NULL,
  `valor` int(11) NOT NULL,
  `idUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `meusgastos`
--

INSERT INTO `meusgastos` (`id`, `despesa`, `valor`, `idUser`) VALUES
(2, 'Comida', 250, 1),
(3, 'Cartão de Credito', 350, 1),
(4, 'Investimentos', 120, 1),
(5, 'Gastos Imprevistos', 200, 1),
(7, 'Gasto do usuario 2 ', 2500, 3),
(10, 'Netflix', 55, 3),
(11, 'Luz', 500, 3),
(14, 'Mercado', 200, 1),
(15, 'Comida', 50, 5),
(16, 'Comida', 500, 5),
(17, 'água', 50, 5),
(18, 'água', 200, 5),
(19, 'água', 10, 5);

-- --------------------------------------------------------

--
-- Estrutura para tabela `suporte`
--

CREATE TABLE `suporte` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `idUser` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `ativo` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `suporte`
--

INSERT INTO `suporte` (`id`, `nome`, `email`, `message`, `idUser`, `status`, `ativo`) VALUES
(15, 'Kinho du Brega', 'kinhodubrega@gmail.com', '', 1, 1, 1),
(16, 'Kinho du Brega', 'kinhodubrega@gmail.com', '', 1, 2, 1),
(17, 'Kinho du Brega', 'kinhodubrega@gmail.com', 'isso e um teste 3', 1, 3, 1),
(18, 'Kinho du Brega', 'kinhodubrega@gmail.com', 'Teu cu', 1, 1, 1),
(19, 'Kinho du Brega', '', 'aa', 1, 1, 1),
(20, 'nando', '123@gmail.com', 'aloalo', 5, 1, 1),
(21, 'Fernando', 'fernando@gmail.com', 'Quero testar essa mensagem', 6, 1, 1),
(22, 'Fernando', 'fernandohsmj2@gmail.com', 'Minha Pergunta', 7, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `user`
--

INSERT INTO `user` (`id`, `user`, `senha`, `nome`, `email`) VALUES
(1, 'Kinho', '0123456789', 'Kinho du Brega', 'kinhodubrega@gmail.com'),
(3, 'Luiz ', '0123456789', 'Ferreira da Silva', 'nando1176@gmail.com'),
(4, 'fulano', '0123456789', 'Lulanin', '1@2.com'),
(5, 'nando', '123', 'nando', '123@gmail.com'),
(6, 'Fernando', '123456', 'Fernando', 'fernando@gmail.com'),
(7, 'Fernando', '0123', 'Fernando', 'fernandohsmj2@gmail.com');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `meusgastos`
--
ALTER TABLE `meusgastos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUser` (`idUser`);

--
-- Índices de tabela `suporte`
--
ALTER TABLE `suporte`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUser` (`idUser`);

--
-- Índices de tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `meusgastos`
--
ALTER TABLE `meusgastos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `suporte`
--
ALTER TABLE `suporte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `meusgastos`
--
ALTER TABLE `meusgastos`
  ADD CONSTRAINT `meusgastos_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `suporte`
--
ALTER TABLE `suporte`
  ADD CONSTRAINT `suporte_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
