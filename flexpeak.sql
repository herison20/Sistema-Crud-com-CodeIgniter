-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03-Jul-2018 às 09:07
-- Versão do servidor: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flexpeak`
--
CREATE DATABASE IF NOT EXISTS `flexpeak` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `flexpeak`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE `alunos` (
  `id_aluno` int(11) NOT NULL,
  `nome` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `data_nascimento` date NOT NULL,
  `logradouro` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `numero` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `bairro` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cidade` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `data_criacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cep` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `id_curso` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`id_aluno`, `nome`, `data_nascimento`, `logradouro`, `numero`, `bairro`, `cidade`, `estado`, `data_criacao`, `cep`, `id_curso`) VALUES
(15, 'Hérison Roque de Assunção', '1992-12-16', 'Rua Luiz Eduardo Rodrigues', '50', 'Japiim 2', 'Manaus', 'AM', '2018-07-02 00:33:51', '69077-620', 100),
(19, 'Kauã Pereira Alves', '2000-09-05', 'Rua Francisco Félix', '515', 'João XXIII', 'Itabira', 'MG', '2018-07-02 06:45:23', '35901-036', 98),
(20, 'Estevan Goncalves Rodrigues', '1999-01-02', 'Servidão José Maia', '564', 'Quitandinha', 'Petrópolis', 'RJ', '2018-07-02 16:13:52', '25650-062', 92),
(21, 'Rua Antônio Nicomédes Peixe', '1992-12-16', 'Rua Antônio Nicomedes Peixe', '392', 'Vila Boa Esperança', 'Ourinhos', 'SP', '2018-07-02 21:23:02', '19912-250', 96),
(23, 'Evelyn Paiva de Souza', '1992-12-16', 'Rua Luiz Eduardo Rodrigues', '59', 'Japiim', 'Manaus', 'AM', '2018-07-02 23:21:52', '69077-620', 93),
(25, 'Olivaldo de Assunção', '1992-12-16', 'Rua A', '112', 'Santo Antonio', 'Caapiranga', 'AM', '2018-07-03 00:53:19', '69425-000', 94),
(26, 'Odêmia de Souza Roque', '1992-12-16', 'Rua Luiz Eduardo Rodrigues', '59', 'Japiim', 'Manaus', 'AM', '2018-07-03 04:36:28', '69077-620', 95),
(27, 'Raimundo Pereira Viana', '1980-09-11', 'Rua Luiz Eduardo Rodrigues', '58', 'Japiim', 'Manaus', 'AM', '2018-07-03 06:53:33', '69077-620', 86),
(28, 'Diego Dias Melo', '1989-06-22', 'Rua Renato Fabretti', '54', 'Colinas', 'Londrina', 'PR', '2018-07-03 06:58:18', '86056-730', 97),
(29, 'Kai Alves Silva', '1999-11-22', 'Rua Manoel das Neves', '4879', 'Jardim Bandeirantes I', 'Cataguases', 'MG', '2018-07-03 06:58:56', '36773-094', 102);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE `cursos` (
  `id_curso` int(11) NOT NULL,
  `nome` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `data_criacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_professor` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`id_curso`, `nome`, `data_criacao`, `id_professor`) VALUES
(86, 'Programação PHP', '2018-07-03 00:54:40', NULL),
(92, 'Informática Básica', '2018-07-03 02:44:25', 17),
(93, 'Informática', '2018-07-03 02:44:46', 22),
(94, 'Corel Drow', '2018-07-03 03:24:34', 18),
(95, 'AutoCAD', '2018-07-03 06:54:30', 25),
(96, 'Sistema Embarcado', '2018-07-03 06:54:46', 19),
(97, 'Enfermagem', '2018-07-03 06:55:00', 18),
(98, 'Primeiros Socorros', '2018-07-03 06:55:15', 28),
(99, 'Desenho', '2018-07-03 06:55:23', 23),
(100, 'Fotografia', '2018-07-03 06:55:30', 16),
(101, 'App Mobile', '2018-07-03 06:55:53', 21),
(102, 'Matemática Discreta', '2018-07-03 06:56:18', 26),
(103, 'Segurança da Informção', '2018-07-03 06:56:39', 29);

-- --------------------------------------------------------

--
-- Estrutura da tabela `professores`
--

CREATE TABLE `professores` (
  `id_professor` int(11) NOT NULL,
  `nome` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `data_nascimento` date NOT NULL,
  `data_criacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `professores`
--

INSERT INTO `professores` (`id_professor`, `nome`, `data_nascimento`, `data_criacao`) VALUES
(16, 'Vitór Dias Pinto', '1986-02-06', '2018-07-01 23:55:18'),
(17, 'Ryan Ribeiro Almeida', '1992-05-05', '2018-07-02 06:38:11'),
(18, 'Eliandro Ferreira Macena', '1987-02-15', '2018-07-02 22:06:18'),
(19, 'Sergio Cleger', '1998-12-16', '2018-07-03 02:45:26'),
(21, 'João Dias Barbosa', '1988-04-21', '2018-07-03 07:01:28'),
(22, 'Carlos Gomes Rodrigues', '1975-11-11', '2018-07-03 07:01:51'),
(23, 'Aline Gomes Rocha', '1992-12-23', '2018-07-03 07:02:08'),
(24, 'Gabriela Gonçalves Pereira', '1986-12-31', '2018-07-03 07:02:34'),
(25, 'Beatriz Araujo Gonçalves', '2000-09-19', '2018-07-03 07:02:55'),
(26, 'Ana Ferreira Dias', '1986-11-11', '2018-07-03 07:03:20'),
(27, 'Isabella Sousa Oliveira', '2001-08-21', '2018-07-03 07:03:38'),
(28, 'Nicole Araujo Azevedo', '1999-06-26', '2018-07-03 07:04:48'),
(29, 'Tomás Rodrigues Oliveira', '1997-09-29', '2018-07-03 07:05:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`id_aluno`),
  ADD KEY `fk_curso` (`id_curso`);

--
-- Indexes for table `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id_curso`),
  ADD KEY `fk_professor` (`id_professor`);

--
-- Indexes for table `professores`
--
ALTER TABLE `professores`
  ADD PRIMARY KEY (`id_professor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alunos`
--
ALTER TABLE `alunos`
  MODIFY `id_aluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `professores`
--
ALTER TABLE `professores`
  MODIFY `id_professor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `alunos`
--
ALTER TABLE `alunos`
  ADD CONSTRAINT `fk_curso` FOREIGN KEY (`id_curso`) REFERENCES `cursos` (`id_curso`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `cursos`
--
ALTER TABLE `cursos`
  ADD CONSTRAINT `fk_professor` FOREIGN KEY (`id_professor`) REFERENCES `professores` (`id_professor`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
