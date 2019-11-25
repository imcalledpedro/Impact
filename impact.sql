-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25-Nov-2019 às 16:56
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
  `descricao` varchar(8000) COLLATE utf8_bin NOT NULL,
  `categoria` varchar(100) COLLATE utf8_bin NOT NULL,
  `link_1` varchar(2000) COLLATE utf8_bin NOT NULL,
  `link_2` varchar(2000) COLLATE utf8_bin DEFAULT NULL,
  `link_3` varchar(2000) COLLATE utf8_bin DEFAULT NULL,
  `link_4` varchar(2000) COLLATE utf8_bin DEFAULT NULL,
  `link_imagem` varchar(800) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `descricao`, `categoria`, `link_1`, `link_2`, `link_3`, `link_4`, `link_imagem`) VALUES
(1, 'Escova dental de bambu - Boni Natural', 'É um produto biodegradável. Contém propriedades antifúngicas, antibacterianas e anti-inflamatórias, evita a proliferação de fungos e bactérias, além de promover a limpeza dos dentes e gengiva.\r\nComposição: Cabo de bambu, cerdas de pbt (polibutileno tereftalato) com carvão vegetal. Sua fórmula é livre de: PVC, BPA, parabenos, triclosan, corantes artificiais, fragrância sintética, derivados de petróleo, substâncias geneticamente modificadas e substâncias irradiadas. Não é testado em animais.', 'Higiene Pessoal', 'https://www.epocacosmeticos.com.br/bambu-boni-natural-escova-dental/p', 'https://www.useorganico.com.br/escova-dental-natural-de-bambu-boni-natural/p', 'https://www.submarino.com.br/produto/234055573/escova-dental-bambu-vegana-cerdas-de-carvao-macia-boni-natural', 'https://www.americanas.com.br/produto/42208209/escova-dental-de-bambu-biodegradavel-boni-natural', 'https://useorganico.vteximg.com.br/arquivos/ids/159465-1000-1000/Escova-Dental-Natural-de-Bambu-com-Cerdas-de-Carvao-Vegetal-%E2%80%93-Boni-Natural.png?v=636701049960970000'),
(2, 'Copo Retrátil de Silicone Dobrável', 'O copo de silicone retrátil é fácil de segurar, dobrar e pode ser facilmente levado no bolso, mochila ou mala. É bem prático de usar e economiza espaço. \r\nTrata-se de um produto ecológico e seguro, muito fácil de limpar e reutilizar. Com ele você reduz ou até mesmo extingue o uso de copos plásticos descartáveis.\r\nPode ser utilizado para café, chá, água, refrigerantes, smoothie, café gelado, entre outros. Outra vantagem é que possibilita a diminuição de gastos desnecessários enquanto caminha ou pratica alguma atividade.\r\n', 'Casa', 'https://www.gruporcalampadas.com.br/promocoes/copo-dobravel-de-silicone-retratil-dobravel', 'https://www.ekological.com.br/copos-e-garrafas/copo-eco-retratil-dobravel-de-silicone-amarelo-200ml', 'https://loja.herbarium.com.br/coporetratil/p', 'https://www.extra.com.br/UtilidadesDomesticas/Copos/copo-dobravel-de-silicone-retratil-dobravel-ecologico-azul-14505705.html', 'https://www.trazpraca.com/fotos/grande/6647fg1/copo-retratil-eco-friendly.jpg'),
(3, 'Glitter Biodegradável Ecológico', 'O Glitter Ecológico e Biodegradável é elaborado com ingredientes naturais a base de algas marinhas e biodegradáveis e pode ser usado no corpo, na face, nos olhos e na boca. Esse glitter é zero plástico e se dissolve em água corrente, some totalmente do planeta. Ideal para você arrasar! ', 'Acessórios', 'https://produto.mercadolivre.com.br/MLB-1158988526-glitter-biodegradavel-ecologico-1g-pura-bioglitter-rosa-_JM?matt_tool=11797926&matt_word&gclid=EAIaIQobChMI0JmKx7r75QIVDwmRCh0n1Q9oEAQYBSABEgLk7PD_BwE&quantity=1', 'https://www.belezanaweb.com.br/colormake-eco-prata-glitter-biodegradavel-4g?desc=on&sku=66230&utm_source=google&utm_medium=shopping&utm_campaign=G:Hair:.:Smart-Shopping&kw=&gclid=EAIaIQobChMI0JmKx7r75QIVDwmRCh0n1Q9oEAQYASABEgIYPfD_BwE', 'https://www.pantys.com.br/products/glitter-biodegradavel?variant=18574643298400&utm_source=Google&utm_medium=AdWords&utm_campaign=Shopping&gclid=EAIaIQobChMI0JmKx7r75QIVDwmRCh0n1Q9oEAQYAiABEgKmTvD_BwE', 'https://www.lab77.com.br/produto/glitter-biodegradavel-tulum?gclid=EAIaIQobChMI0JmKx7r75QIVDwmRCh0n1Q9oEAQYCCABEgKYZvD_BwE', 'https://a-static.mlcdn.com.br/618x463/glitter-natural-e-biodegradavel-1g-pura-bioglitter-pura-bio-glitter/useorganico/3345/41769221f37c375d613d312d2d2cae0b.jpg'),
(4, 'Canudo de Aço Inox', 'O canudo Biodegradável é a solução que atende o desejo dos consumidores sem prejudicar nada e ninguém. Podendo ser reutilizado quantas vezes necessário e ser lavado. ', 'Acessórios', 'https://www.tekogreen.com.br/canudos-de-inox/canudo-reto/10-unidades/kit-10-canudos-de-inox-reto-tekogreen-o0-6cm-x-22cm?parceiro=7332&gclid=EAIaIQobChMIkpiX57f75QIVFwaRCh3SzAsnEAQYESABEgKR0fD_BwE', 'https://www.econocao.com.br/kit-atacado-50-canudos-aco-inox-7mm-curvo-20cm-agua-e-sucos?utm_source=Site&utm_medium=GoogleMerchant&utm_campaign=GoogleMerchant&gclid=EAIaIQobChMIpJash7f75QIVDgiRCh2i0w0BEAQYAyABEgIm_fD_BwE', 'https://www.econocao.com.br/kit-atacado-30-canudos-aco-inox-6mm-curvo-21cm?utm_source=Site&utm_medium=GoogleMerchant&utm_campaign=GoogleMerchant&gclid=EAIaIQobChMIkpiX57f75QIVFwaRCh3SzAsnEAQYBSABEgJrE_D_BwE', 'https://www.amazon.com.br/Canudos-Ecol%C3%B3gicos-Reutiliz%C3%A1veis-Inox-Escova/dp/B07P9TTYR9/ref=asc_df_B07P9TTYR9/?tag=googleshopp00-20&linkCode=df0&hvadid=379715601072&hvpos=1o1&hvnetw=g&hvrand=8761133799481520325&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=1031627&hvtargid=pla-841028980281&psc=1', 'https://images-na.ssl-images-amazon.com/images/I/31GQ%2BSTdr4L.jpg'),
(5, 'Óculos de sol feito de madeira', 'Óculos feitos artesanalmente, o que garante que casa unidade seja única, feito a partir de madeira. Uma das coisas que deixam um visual muito bonito e interessante é um belo óculos de sol, portanto nada melhor que escolher um óculos de excelente qualidade.', 'Acessórios', 'https://ecohospedagem.lojaintegrada.com.br/oculos-de-sol-de-madeira-reutilizada-eco-friendly', 'https://woodz.com.br/panama-vintage.html?gclid=Cj0KCQiAiNnuBRD3ARIsAM8KmlvA2WLe6r-B7ZzMAU7Sb8caVH_7vy9ES1O4qyKb4zT7nZc9pfPM_wAaAt5tEALw_wcB', 'https://www.taobuys.com/oculos-de-sol-masculino-madeira-quadrado-polarizado-e-protec-o-uva-e-uvb?utm_medium=cpc&gclid=Cj0KCQiAiNnuBRD3ARIsAM8KmlsZ2dbBlPhUTT9pMchOj47s_wOo5v1aSHS05ri55krfWYTAYrfrfg0aAkj4EALw_wcB', 'https://www.zerezes.com.br/Produto-Votto-Oculos-de-Sol-Serragem?gclid=Cj0KCQiAiNnuBRD3ARIsAM8KmlsGmimFsU6gsUPdeYI8flqDWgd4wDIOCytln83yLBVkpnXYi3PIrUsaAnyiEALw_wcB', 'https://www.taobuys.com/media/catalog/product/cache/1/image/800x800/9df78eab33525d08d6e5fb8d27136e95/2/_/2_9_42.jpg');

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
  `anexo` varchar(200) COLLATE utf8_bin NOT NULL,
  `link_imagem` varchar(8000) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `publicacoes`
--

INSERT INTO `publicacoes` (`id`, `titulo`, `descricao`, `texto_completo`, `data_publicacao`, `anexo`, `link_imagem`) VALUES
(1, 'Aquiponia e Seus Benefícios', 'O que é o método de aquaponia? Qual o seu funcionamento e quais são os benefícios desse sistema?', '<p>Aquaponia é uma método de cultivo que envolve um ciclo unindo a Piscicultura (cultivo de peixes) e a Hidroponia (cultivo de plantas com as raízes submersas na água.)</p>\r\n\r\n<p>Com o aperfeiçoamento da aquicultura (tratamento do ambiente aquático para criação de peixes), grandes lugares escavados se tornaram sistemas menores com recirculação de água. Mas aí se via a necessidade de se designar os resíduos deixados pelos peixes, logo se pensou em espécies de plantas que pudessem filtrar essa água residual.</p>\r\n\r\n<p>No sistema de aquaponia, a água residual que provém do cultivo de peixes é reutilizada para o cultivo das plantas, os peixes chegam a disponibilizar mais de 70% dos nutrientes necessários para a alimentação das plantas. As plantas, por sua vez, auxiliam na limpeza e na oxigenação das águas que, em seguida, voltam para os peixes. Para que o água residual circule no processo é necessário que utilize uma bomba ou drenagem.</p>\r\n\r\n<p>Como os nutrientes necessários para as plantas são quase todos supridos, a economia de custos acerca do cultivo delas é bem grande, além de quê, em um sistema fechado, há um baixo consumo de energia elétrica. Mas, sem dúvidas, o ponto alto da aquaponia é o seu reaproveitamento de água, o sistema por si recircula a água entre os dois cultivos, suprindo a necessidade de uma água nova para consumo. Segundo a Embrapa (Empresa Brasileira de Pesquisa Agropecuária) “A criação de peixes associada ao cultivo de hortaliças, chamada de aquaponia, pode economizar até 90% de água em relação à agricultura convencional e ainda eliminar completamente a liberação de efluentes no meio ambiente”.</p>\r\n\r\n<p>O sistema pode ser facilmente implementado em diversos lugares, como por exemplo em um pequeno jardim coberto ou em uma varanda de domicílio. Assim você mescla sua pequena plantação de alimentos orgânicos com cultivo de pequenos peixes.<p>\r\n\r\n<p>Na zona rural, geralmente se tem em maior escala para uma maior capacidade produtiva, dessa forma, há uma maior variedade de peixes e plantio de legumes e verduras.<p>\r\n<br><br>\r\n- Referências:\r\n<br><br><a target=\"_blank\" href=\"https://www.ecycle.com.br/4332-aquaponia.html\">https://www.ecycle.com.br/4332-aquaponia.html</a>\r\n<br><br><a target=\"_blank\" href=\"https://www.embrapa.br/busca-de-noticias/-/noticia/2767622/integrar-criacao-de-peixes-com-hortalicas-economiza-90-de-agua-e-elimina-quimicos\">https://www.embrapa.br/busca-de-noticias/-/noticia/2767622/integrar-criacao-de-peixes-com-hortalicas-economiza-90-de-agua-e-elimina-quimicos</a>\r\n<br><br><a target=\"_blank\" href=\"http://www.ecoeficientes.com.br/o-que-e-aquaponia/\">http://www.ecoeficientes.com.br/o-que-e-aquaponia/</a>', '2019-11-20 00:00:00', '', 'https://digital.agrishow.com.br/sites/agrishow.com/files/styles/article_featured_retina/public/uploads/2017/02/Aquaponia.jpg?itok=QS-Nw2ke'),
(2, 'Porquê devo aderir um canudo reutilizável?', 'Não só para reutilizar, mas também para amenizar o impacto causado no meio ambiente, confira a lista.', '<p>Todos conhecem os canudos e sua grande utilização na atualidade, mas nos tempos de hoje tanto plástico sendo produzido trás consequências gigantescas para o nosso planeta. Se a solução fosse apenas apagar os canudos do planeta, não teríamos chegado a esse ponto, então confira mais informações sobre os canudinhos plásticos.</p>\r\n<p>Os famosos canudinhos são 4% de todo o lixo plástico do mundo, feito de polipropileno e poliestireno (plásticos) ou seja, não é biodegradável, e pode demorar até mil anos para se decompor. Além disso o canudo é feito de petróleo, uma fonte não renovável. Nas praias ele também é responsável pela formação do microplástico, a pior representação do plástico, presente nos alimentos, sal, nos organismos e na água mineral do mundo inteiro.</p>\r\n<p>Quando empilhados, os canudos consumidos pelos brasileiros em um ano por um muro de 2,10 metros de altura e 45.000 quilômetros de largura, conseguiríamos dar uma volta no planeta.</p>\r\n<p>Para as pessoas que utilizam e descartam de maneira correta, ainda corre o risco de se perder no processo por ser muito leve. É de estimativa que 90% das espécies marinhas tenham ingerido canudos. Melhores informações nos próximos artigos.</p>\r\n<p>Usar um canudo de maneira consciente não se trata apenas da reutilização. Fora isso, deve se levar em consideração a sua alimentação, suas roupas, produtos higiênicos, etc.</p>\r\n<br><br>\r\n- Referências:\r\n<br><br>\r\n<a target=\"_blank\" href=\"https://www.ecycle.com.br/7176-canudo-reutilizavel.html\">https://www.ecycle.com.br/7176-canudo-reutilizavel.html</a>', '2019-11-24 00:00:00', '', 'https://beegreen.eco.br/wp-content/uploads/2019/02/canudo-reutilizavel-e-ecologico-de-verdade.jpg'),
(3, 'Qual é a melhor panela para cozinhar?', 'Confira quais os materiais presentes nas panelas que fazem mal à saúde', '1. Aço cirúrgico\r\n<p>Apesar do preço ser elevado, a panela de aço cirúrgico não é porosa. É protegida  e não contem arranhões , não retém  resíduos de cozimentos, são duráveis e facilita o cozimento dos alimentos. Algumas marcas oferecem garantia de até 50 anos.</p>\r\n2. Inox / Aço\r\n<p>Esse tipo de panela não oxida, o material é resistente e o calor é muito bem distribuído. Ela só não está em primeiro lugar porque é feita de níquel, material tóxico que pode passar para a comida. Mesmo sendo em pequenas quantidades , ainda não existe um consenso liberado por especialistas.</p>\r\n3. Cobre\r\n<p>As panelas de cobre são duradouras, mas não podem ser utilizadas para qualquer tipo de alimento. Quando o sal entra em contato com algum alimento ácido na panela faz com que o ácido se desprenda da panela.</p>\r\n4. Ferro\r\n<p>A panela de ferro trás alguns benefícios a saúde. A transferência que acontece entre os resíduos da panela e os alimentos, fazendo até com que fizesse bem à pessoas que têm anemia. O mesmo acontece com as panelas inox. Porém elas enferrujam rapidamente, e precisam de muitos cuidados.</p>\r\n5. Antiaderentes\r\n<p>Essa panela, apesar de famosa, não é a panela melhor de ser utilizada, ela contém ácidos e substâncias tóxicas que são facilmente liberadas na alimentação.</p>\r\n6. Barro\r\n<p>Boa para alimentos líquidos, assim como a panela de cerâmica. Ela é feita de um material natural que não é nocivo, uma forte candidata à melhor panela para cozinhar. A desvantagem é que comidas com poucos líquido podem ser ressecados.</p>\r\n7. Cerâmica\r\n<p>Mesmo sendo mais cara que às outras panelas, valem a pena. São fáceis de limpar, antiaderentes e conservam o calor. Porém deve haver atenção na hora da compra para que se veja se contém materiais inadequados e não certificados. Panelas desse tipo demoram muito para esquentar a comida e por isso gastam mais energia.</p>\r\n8. Pedra - sabão\r\n<p>Panelas indicadas para alimentos que podem ser feitos também em panelas de barro. Infelizmente ela é porosa, e deve ser lavada com cuidados especiais para que não haja proliferação de microrganismos.</p>\r\n9. Vidro\r\n<p>Panelas feitas desse material não possuem nenhum tipo de contraindicação. Por outro lado ela é cara, pesada e frágil. Por ser vidro temperado não pode ser reciclada.</p>\r\n10. Titânio\r\n<p>Panelas de titânio não são prejudiciais, são mais resistentes. Elas não exigem a fervura que recomendamos nas panelas de aço inox, pois não há liberação de material na comida, afirma Késia.</p>\r\n11. Porcelana\r\n<p>A porcelana é como uma cerâmica, sendo apenas mais resistente. Apesar de ser mais cara, mantém a temperatura do alimento por mais tempo.</p>\r\n12. Alumínio\r\n<p>Aí está o modelo  de panela mais barato de panelas. Ainda assim, existem às substâncias que são desprendidas da panela. E panelas de alumínio podem ser recicladas.</p>\r\n13. Silicone\r\n<p>Esse tipo de panela é melhor utilizada em fornos de micro-ondas, não são as melhores panelas para se cozinhar. Muitas dessas panelas deixam odores na cozinha, que podem até ser tóxicos. Porém essas panelas ainda estão em estudo para ver se são realmente nocivas.</p>\r\n<br><br>\r\n- Referências:\r\n<br><br>\r\n<a target=\"_blank\" href=\"https://www.ecycle.com.br/1335-melhor-panela\">https://www.ecycle.com.br/1335-melhor-panela</a>', '2019-11-24 00:00:00', '', 'http://blog.mueller.ind.br/wp-content/uploads/2017/10/shutterstock_28375165.jpg');

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
(5, 'Pedro', 'imcalledpedro@gmail.com', 'pedro'),
(6, 'Yasmim', 'yass.happier@gmail.com', 'yasmim'),
(7, 'Samuel', 'ssoares981@gmail.com', 'pharus>impact');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `publicacoes`
--
ALTER TABLE `publicacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
