-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 13-Nov-2019 às 17:55
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `impact`
--
CREATE DATABASE IF NOT EXISTS `impact` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `impact`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) COLLATE utf8_bin NOT NULL,
  `descricao` varchar(100) COLLATE utf8_bin NOT NULL,
  `categoria` varchar(100) COLLATE utf8_bin NOT NULL,
  `link_1` varchar(2000) COLLATE utf8_bin NOT NULL,
  `link_2` varchar(2000) COLLATE utf8_bin DEFAULT NULL,
  `link_3` varchar(2000) COLLATE utf8_bin DEFAULT NULL,
  `link_4` varchar(2000) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `descricao`, `categoria`, `link_1`, `link_2`, `link_3`, `link_4`) VALUES
(9, 'Escova de dentes de bambu', 'teste', 'teste', 'link', 'link', 'link', 'link');

-- --------------------------------------------------------

--
-- Estrutura da tabela `publicacoes`
--

DROP TABLE IF EXISTS `publicacoes`;
CREATE TABLE `publicacoes` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) COLLATE utf8_bin NOT NULL,
  `descricao` varchar(300) COLLATE utf8_bin NOT NULL,
  `texto_completo` text COLLATE utf8_bin NOT NULL,
  `data_publicacao` datetime NOT NULL,
  `anexo` varchar(200) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `publicacoes`
--

INSERT INTO `publicacoes` (`id`, `titulo`, `descricao`, `texto_completo`, `data_publicacao`, `anexo`) VALUES
(4, 'Canudos descartáveis e as soluções possíveis', 'Empresários se juntam à luta contra os plásticos descartáveis e lançam modelos de canudo biodegradável, compostável e até comestível', 'Os canudos de plástico se tornaram um grande problema ecológico. Eles já representam 4% de todo o lixo plástico produzido no mundo e, como são feitos dos plásticos polipropileno e poliestireno, não são biodegradáveis e sua reciclagem é difícil. Eles podem levar até mil anos para se decompor no meio ambiente. Mas será que são mesmo necessários? O mercado tem se ajustado à luta contra os descartáveis e começam a surgir alternativas. O canudo de papel é cada vez mais comum e já existem também modelos de canudinho biodegradável e até comestível.\r\n\r\nO canudo de plástico é um item a ser evitado. Mesmo quando descartado corretamente, ele pode escapar para a natureza e ser carregado pela chuva para mares e rios, impactando toda a fauna aquática. Estima-se que 90% das espécies marinhas tenham ingerido produtos de plástico em algum momento. Além disso, nas praias e mares, esses canudos são também fonte de formação de microplástico, o pior formato possível para o plástico e que já está presente nos alimentos, no sal, na água potável e até em garrafas de água mineral! Saiba mais sobre os impactos e alternativas ao consumo do canudo de plástico.\r\n\r\nPreocupados com o meio ambiente e com os impactos do lixo plástico, alguns empresários já lançaram alternativas ao canudo de plástico. O canudo de papel é cada vez mais presente, já que é uma opção biodegradável, mas ele também acaba sendo fonte de poluição até sua completa biodegradação, já que o modelo foi pensado como um descartável. Opções melhores são os canudos comestíveis e os modelos de canudo compostável.', '2019-09-02 22:56:00', ''),
(5, 'lorem', 'lorem', 'Os canudos de plástico se tornaram um grande problema ecológico. Eles já representam 4% de todo o lixo plástico produzido no mundo e, como são feitos dos plásticos polipropileno e poliestireno, não são biodegradáveis e sua reciclagem é difícil. Eles podem levar até mil anos para se decompor no meio ambiente. Mas será que são mesmo necessários? O mercado tem se ajustado à luta contra os descartáveis e começam a surgir alternativas. O canudo de papel é cada vez mais comum e já existem também modelos de canudinho biodegradável e até comestível.\r\n\r\nO canudo de plástico é um item a ser evitado. Mesmo quando descartado corretamente, ele pode escapar para a natureza e ser carregado pela chuva para mares e rios, impactando toda a fauna aquática. Estima-se que 90% das espécies marinhas tenham ingerido produtos de plástico em algum momento. Além disso, nas praias e mares, esses canudos são também fonte de formação de microplástico, o pior formato possível para o plástico e que já está presente nos alimentos, no sal, na água potável e até em garrafas de água mineral! Saiba mais sobre os impactos e alternativas ao consumo do canudo de plástico.\r\n\r\nPreocupados com o meio ambiente e com os impactos do lixo plástico, alguns empresários já lançaram alternativas ao canudo de plástico. O canudo de papel é cada vez mais presente, já que é uma opção biodegradável, mas ele também acaba sendo fonte de poluição até sua completa biodegradação, já que o modelo foi pensado como um descartável. Opções melhores são os canudos comestíveis e os modelos de canudo compostável.', '2019-11-12 00:00:00', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `name` varchar(40) COLLATE utf8_bin NOT NULL,
  `email` varchar(40) COLLATE utf8_bin NOT NULL,
  `password` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `name`, `email`, `password`) VALUES
(1, 'Pedro Lucas', 'imcalledpedro@gmail.com', 'pedro'),
(2, 'Walber Ranniere', 'walber.ranniere147@gmail.com', 'walber'),
(3, 'Ruth Celeste', 'ruth.celeste11@gmail.com', 'ruth'),
(4, 'Yasmim Morais', 'yass.happier@gmail.com', 'yasmim');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publicacoes`
--
ALTER TABLE `publicacoes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `publicacoes`
--
ALTER TABLE `publicacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
