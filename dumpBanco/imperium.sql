-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Set-2023 às 16:00
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

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
  `idUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `meusgastos`
--

INSERT INTO `meusgastos` (`id`, `despesa`, `valor`, `idUser`) VALUES
(1, 'Netflix', 55, 1),
(2, 'Comida', 250, 1),
(3, 'Cartão de Credito', 350, 1),
(4, 'Investimentos', 120, 1),
(5, 'Gastos Imprevistos', 200, 1),
(6, 'Saldo Restante', 325, 1),
(7, 'Gasto do usuario 2 ', 2500, 3),
(10, 'Netflix', 55, 3),
(11, 'Luz', 500, 3);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `suporte`
--

INSERT INTO `suporte` (`id`, `nome`, `email`, `message`, `idUser`, `status`, `ativo`) VALUES
(15, 'Kinho', 'kinhodubrega@gmail.com', 'Estou tendo um problema na tela de conteúdos, não consigo acessar.', 1, 1, 1),
(16, 'Kinho', 'kinhodubrega@gmail.com', 'Não consigo acessar minha tela de perfil.', 1, 2, 1),
(17, 'Kinho', 'kinhodubrega@gmail.com', 'Gostaria que entrasse um conteúdo sobre bitcoin.', 1, 3, 1);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id`, `user`, `senha`, `nome`, `email`) VALUES
(1, 'Kinho', '0123456789', 'Kinho Arranca Diu', 'kinho@gmail.com'),
(3, 'Luiz ', '0123456789', 'Ferreira da Silva', 'nando1176@gmail.com'),
(4, 'fulano', '0123456789', 'Lulanin', '1@2.com');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `suporte`
--
ALTER TABLE `suporte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
