-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Mar-2024 às 23:13
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cursomvcc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `idaluno` int(10) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cpf` int(15) NOT NULL,
  `telefone` int(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`idaluno`, `nome`, `cpf`, `telefone`, `email`, `senha`) VALUES
(1, 'Bruno ', 44444444, 333333333, 'fatec@gmail.com', '123'),
(2, 'Bruno', 0, 0, '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno_curso`
--

CREATE TABLE `aluno_curso` (
  `idaluno_curso` int(10) NOT NULL,
  `idaluno` int(10) NOT NULL,
  `idcurso` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `idcurso` int(10) NOT NULL,
  `nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`idcurso`, `nome`) VALUES
(3, 'portugues');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`idaluno`);

--
-- Índices para tabela `aluno_curso`
--
ALTER TABLE `aluno_curso`
  ADD PRIMARY KEY (`idaluno_curso`),
  ADD KEY `idaluno` (`idaluno`,`idcurso`),
  ADD KEY `idcurso` (`idcurso`);

--
-- Índices para tabela `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`idcurso`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `aluno`
--
ALTER TABLE `aluno`
  MODIFY `idaluno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `aluno_curso`
--
ALTER TABLE `aluno_curso`
  MODIFY `idaluno_curso` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `curso`
--
ALTER TABLE `curso`
  MODIFY `idcurso` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `aluno_curso`
--
ALTER TABLE `aluno_curso`
  ADD CONSTRAINT `aluno_curso_ibfk_1` FOREIGN KEY (`idaluno`) REFERENCES `aluno` (`idaluno`),
  ADD CONSTRAINT `aluno_curso_ibfk_2` FOREIGN KEY (`idcurso`) REFERENCES `curso` (`idcurso`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
