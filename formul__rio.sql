-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Fev-2022 às 04:35
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `formulário`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoas`
--

CREATE TABLE `pessoas` (
  `id` int(120) NOT NULL,
  `nome` varchar(120) NOT NULL,
  `data_nascimento` varchar(120) NOT NULL,
  `cpf` varchar(120) NOT NULL,
  `sexo` varchar(120) NOT NULL,
  `cidade` varchar(120) NOT NULL,
  `bairro` varchar(120) NOT NULL,
  `rua` varchar(120) NOT NULL,
  `numero` varchar(120) NOT NULL,
  `complemento` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pessoas`
--

INSERT INTO `pessoas` (`id`, `nome`, `data_nascimento`, `cpf`, `sexo`, `cidade`, `bairro`, `rua`, `numero`, `complemento`) VALUES
(11, 'Lucia Mello', '03/09/58', '29727278000', 'F', 'São Leopoldo', 'campestre', 'marai garcia hallan', '15', 'esquina'),
(13, 'Alisson de Lima Mello', '11/01/04', '051.422.550-54', 'M', 'São Leopoldo', 'campestre', 'adsdsa', 'mdsmamd', 'gfhsghgfs'),
(14, 'Gabriel Mello', '17/12/06', '01729994059', 'M', 'adsd', 'dassdasd', 'adsdsa', 'gfhfg', 'gfhsghgfs'),
(15, 'Alisson de Lima Mello', '11/01/04', '051.422.550-54', 'Selecione o sexo', 'adsd', 'dassdasd', 'marai garcia hallan', 'mdsmamd', 'gfhsghgfs'),
(18, 'Emilly mello', '03/09/58', 'dsdadda', 'M', 'adsad', 'ghfghsgfh', 'adsdsa', '89', 'dsadasd');

-- --------------------------------------------------------

--
-- Estrutura da tabela `protocolo`
--

CREATE TABLE `protocolo` (
  `numero2` int(11) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `data` varchar(120) NOT NULL,
  `prazo` varchar(200) NOT NULL,
  `contribuinte` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `protocolo`
--

INSERT INTO `protocolo` (`numero2`, `descricao`, `data`, `prazo`, `contribuinte`) VALUES
(14, 'Preciso de um asfaltamento na rua tal', '', '4', '14');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `pessoas`
--
ALTER TABLE `pessoas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `protocolo`
--
ALTER TABLE `protocolo`
  ADD PRIMARY KEY (`numero2`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `pessoas`
--
ALTER TABLE `pessoas`
  MODIFY `id` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `protocolo`
--
ALTER TABLE `protocolo`
  MODIFY `numero2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
