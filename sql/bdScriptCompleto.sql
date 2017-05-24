-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11-Maio-2017 às 04:13
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `heroku_62412756b30001a`
--
CREATE DATABASE IF NOT EXISTS `heroku_62412756b30001a` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `heroku_62412756b30001a`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `idAdm` int(10) UNSIGNED NOT NULL,
  `nmAdm` varchar(100) NOT NULL,
  `emailAdm` varchar(200) NOT NULL,
  `senhaAdm` varchar(50) NOT NULL,
  `celularAdm` int(11) NOT NULL,
  `dtNascimentoAdm` date DEFAULT NULL,
  `sexoAdm` char(2) DEFAULT NULL,
  `cpfAdm` int(11) DEFAULT NULL,
  `rgAdm` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`idAdm`, `nmAdm`, `emailAdm`, `senhaAdm`, `celularAdm`, `dtNascimentoAdm`, `sexoAdm`, `cpfAdm`, `rgAdm`) VALUES
(39, 'Alex Santana Barazal ', 'a@hot.com', '12345678', 2147483647, '0000-00-00', 'Ma', 2147483647, 12458789),
(42, 'Teste1', 'teste@adapt.com', '123456', 2147483647, '0000-00-00', 'Ma', 2147483647, 1023556895),
(43, 'adm', 'adm@adapt.com', '12345678', 0, NULL, NULL, NULL, NULL),
(44, 'adm', 'adm@adapt.com', '12345678', 0, NULL, NULL, NULL, NULL),
(45, 'alex', 'alex@adapt.com', '12345678', 0, '0000-00-00', 'Ma', 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `idCliente` int(10) UNSIGNED NOT NULL,
  `nmCliente` varchar(200) NOT NULL,
  `emailCliente` varchar(100) NOT NULL,
  `senhaCliente` varchar(50) NOT NULL,
  `tipoCliente` int(11) NOT NULL,
  `celularCliente` int(11) DEFAULT NULL,
  `cnpj_cpfCliente` int(11) NOT NULL,
  `logradouroCliente` varchar(100) DEFAULT NULL,
  `numeroCliente` int(11) DEFAULT NULL,
  `complementoCliente` varchar(20) DEFAULT NULL,
  `bairroCliente` varchar(50) DEFAULT NULL,
  `cepCliente` int(11) DEFAULT NULL,
  `cidadeCliente` varchar(50) DEFAULT NULL,
  `estadoCliente` char(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`idCliente`, `nmCliente`, `emailCliente`, `senhaCliente`, `tipoCliente`, `celularCliente`, `cnpj_cpfCliente`, `logradouroCliente`, `numeroCliente`, `complementoCliente`, `bairroCliente`, `cepCliente`, `cidadeCliente`, `estadoCliente`) VALUES
(1, 'alex', 'alex@adapt.com', '', 0, 0, 0, '', 0, '', '', NULL, '', 'es'),
(3, 'Aluno', 'aluno@adapt.com', '', 0, 0, 0, '', 0, '', '', NULL, '', 'es'),
(5, 'cliente', 'cliente@adapt.com', '12345678', 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'cliente', 'cliente@adapt.com', '12345678', 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `conteudo`
--

CREATE TABLE `conteudo` (
  `idConteudo` int(10) UNSIGNED NOT NULL,
  `nmConteudo` varchar(100) NOT NULL,
  `tipoConteudo` char(4) NOT NULL,
  `idPastaArquivo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `conteudo`
--

INSERT INTO `conteudo` (`idConteudo`, `nmConteudo`, `tipoConteudo`, `idPastaArquivo`) VALUES
(1, 't1', 't2', 7),
(2, 'YOUTUBE', 'AULA', 9),
(3, 't10', 'Pale', 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `descricaoconteudo`
--

CREATE TABLE `descricaoconteudo` (
  `idDescricaoConteudo` int(10) UNSIGNED NOT NULL,
  `conteudoProgramatico` varchar(500) DEFAULT NULL,
  `objetivo` varchar(250) DEFAULT NULL,
  `cargaHoraria` varchar(12) DEFAULT NULL,
  `tipoArquivo` varchar(5) DEFAULT NULL,
  `idConteudo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `descricaoconteudo`
--

INSERT INTO `descricaoconteudo` (`idDescricaoConteudo`, `conteudoProgramatico`, `objetivo`, `cargaHoraria`, `tipoArquivo`, `idConteudo`) VALUES
(2, '10 aulas', 'testar', '', 'matem', 2),
(3, '10 aulas', 'testar', '', 'matem', 2),
(4, 'fazer libras', 'palestra', '', 'video', 1),
(5, 'ss', 'ss', '', 'ss', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pastaarquivo`
--

CREATE TABLE `pastaarquivo` (
  `idPastaArquivo` int(10) UNSIGNED NOT NULL,
  `nmPastaArquivo` varchar(80) NOT NULL,
  `urlPastaArquivo` varchar(200) NOT NULL,
  `tamanhoPastaArquivo` varchar(11) DEFAULT NULL,
  `formatoPastaArquivo` varchar(5) DEFAULT NULL,
  `idCliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pastaarquivo`
--

INSERT INTO `pastaarquivo` (`idPastaArquivo`, `nmPastaArquivo`, `urlPastaArquivo`, `tamanhoPastaArquivo`, `formatoPastaArquivo`, `idCliente`) VALUES
(1, '$nmPastaArquivo', '$urlPastaArquivo', '0', '$form', 0),
(2, 'alex', 'alex.com', '', '', 2),
(5, 'teste02', 'teste02.com', '', '', 2),
(6, 'teste03', 'teste03.com', '', '', 2),
(7, 'teste10', 'http://localhost/adaptinternetparatodos/cadastroPastaArquivo.php', '10gb', 'MP4', 3),
(8, 'teste 02', 'www.google.com', '15gb', 'mp4', 3),
(9, 't5', 'www.google.com', '4gb', 'MP4', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `visitante`
--

CREATE TABLE `visitante` (
  `idVisitante` int(10) UNSIGNED NOT NULL,
  `nmVisitante` varchar(100) NOT NULL,
  `emailVisitante` varchar(200) NOT NULL,
  `senhaVisitante` varchar(50) NOT NULL,
  `celularVisitante` int(11) DEFAULT NULL,
  `dtNascimentoVisitante` date DEFAULT NULL,
  `tipoDeficienciaVisitante` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `visitante`
--

INSERT INTO `visitante` (`idVisitante`, `nmVisitante`, `emailVisitante`, `senhaVisitante`, `celularVisitante`, `dtNascimentoVisitante`, `tipoDeficienciaVisitante`) VALUES
(1, 'Alex Santana Barazal', 'alexbarazal@hotmail.com', '123', 2147483647, '0000-00-00', 'nenhuma'),
(3, 'Vistante1', 'visitante1@adapt.com', '123456', 2147483647, '0000-00-00', 'motora'),
(4, 'visitante', 'visitante@adapt.com', '12345678', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`idAdm`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idCliente`);

--
-- Indexes for table `conteudo`
--
ALTER TABLE `conteudo`
  ADD PRIMARY KEY (`idConteudo`);

--
-- Indexes for table `descricaoconteudo`
--
ALTER TABLE `descricaoconteudo`
  ADD PRIMARY KEY (`idDescricaoConteudo`);

--
-- Indexes for table `pastaarquivo`
--
ALTER TABLE `pastaarquivo`
  ADD PRIMARY KEY (`idPastaArquivo`);

--
-- Indexes for table `visitante`
--
ALTER TABLE `visitante`
  ADD PRIMARY KEY (`idVisitante`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrador`
--
ALTER TABLE `administrador`
  MODIFY `idAdm` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idCliente` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `conteudo`
--
ALTER TABLE `conteudo`
  MODIFY `idConteudo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `descricaoconteudo`
--
ALTER TABLE `descricaoconteudo`
  MODIFY `idDescricaoConteudo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pastaarquivo`
--
ALTER TABLE `pastaarquivo`
  MODIFY `idPastaArquivo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `visitante`
--
ALTER TABLE `visitante`
  MODIFY `idVisitante` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;--
-- Database: `mydb`
--
CREATE DATABASE IF NOT EXISTS `mydb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mydb`;
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

