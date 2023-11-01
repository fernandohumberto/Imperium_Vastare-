-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Nov-2023 às 17:56
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

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
-- Estrutura da tabela `meusgastos`
--

CREATE TABLE `meusgastos` (
  `id` int(11) NOT NULL,
  `despesa` varchar(255) NOT NULL,
  `valor` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `data` date NOT NULL,
  `deletado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `meusgastos`
--

INSERT INTO `meusgastos` (`id`, `despesa`, `valor`, `idUser`, `data`, `deletado`) VALUES
(3, 'Netflix', 55, 10, '2023-10-30', 1),
(4, 'Ifood', 45, 10, '2023-10-29', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `suporte`
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
-- Extraindo dados da tabela `suporte`
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
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id`, `user`, `senha`, `nome`, `email`) VALUES
(1, 'Kinho', '0123456789', 'Kinho du Brega', 'kinhodubrega@gmail.com'),
(3, 'Luiz ', '0123456789', 'Ferreira da Silva', 'nando1176@gmail.com'),
(4, 'fulano', '0123456789', 'Lulanin', '1@2.com'),
(5, 'nando', '123', 'nando', '123@gmail.com'),
(6, 'Fernando', '123456', 'Fernando', 'fernando@gmail.com'),
(7, 'Fernando', '0123', 'Fernando', 'fernandohsmj2@gmail.com'),
(10, 'marco03', 'marco99da', 'Marco Davi', 'marcodavi@gmail.com'),
(11, 'teste1', 'teste', 'teste1', 'teste@teste.com');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `meusgastos`
--
ALTER TABLE `meusgastos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUser` (`idUser`);

--
-- Índices para tabela `suporte`
--
ALTER TABLE `suporte`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUser` (`idUser`);

--
-- Índices para tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `meusgastos`
--
ALTER TABLE `meusgastos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `suporte`
--
ALTER TABLE `suporte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `meusgastos`
--
ALTER TABLE `meusgastos`
  ADD CONSTRAINT `meusgastos_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `suporte`
--
ALTER TABLE `suporte`
  ADD CONSTRAINT `suporte_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
