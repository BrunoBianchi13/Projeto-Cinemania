-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Jun-2022 às 15:49
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cinemania`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_admin.usuarios`
--

CREATE TABLE `tb_admin.usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_admin.usuarios`
--

INSERT INTO `tb_admin.usuarios` (`id`, `nome`, `user`, `password`, `img`) VALUES
(1, 'Bruno Bianchi', 'bruno@gmail.com', '123', '62bad72f5d90a.jpg'),
(3, 'Giovanni', 'giovanni@gmail.com', '123', '62bad8b10d0ef.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_banner`
--

CREATE TABLE `tb_banner` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_combos`
--

CREATE TABLE `tb_combos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `produto1` int(11) NOT NULL,
  `produto2` int(11) NOT NULL,
  `produto3` int(11) NOT NULL,
  `produto4` int(11) NOT NULL,
  `produto5` int(11) NOT NULL,
  `produto6` int(11) NOT NULL,
  `preco` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_combos`
--

INSERT INTO `tb_combos` (`id`, `titulo`, `produto1`, `produto2`, `produto3`, `produto4`, `produto5`, `produto6`, `preco`) VALUES
(1, 'Combo 1', 3, 2, 1, 0, 5, 0, 13),
(2, 'Combo 2', 1, 1, 2, 5, 0, 0, 25);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_filmes.breve`
--

CREATE TABLE `tb_filmes.breve` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `sinopse` text NOT NULL,
  `diretor` varchar(255) NOT NULL,
  `distribuidora` varchar(255) NOT NULL,
  `elenco` text NOT NULL,
  `genero` varchar(255) NOT NULL,
  `classificacao` varchar(255) NOT NULL,
  `duracao` varchar(255) NOT NULL,
  `data` date NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `banner` varchar(255) NOT NULL,
  `trailer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_filmes.breve`
--

INSERT INTO `tb_filmes.breve` (`id`, `nome`, `sinopse`, `diretor`, `distribuidora`, `elenco`, `genero`, `classificacao`, `duracao`, `data`, `imagem`, `banner`, `trailer`) VALUES
(2, 'THOR: AMOR E TROVÃO', 'Thor: Amor e Trovão é quarta aventura solo de Thor (Chris Hemsworth), personagem da Marvel. O próximo filme do super-herói pretende ser a sequência direta de Thor: Ragnarok e o 29º filme do Universo Cinematográfico Marvel. O longa, além de representar os acontecimentos de Thor: Ragnarok, promove a volta de Jane Foster (Natalie Portman), que se transforma na versão feminina de Thor. Os Guardiões da Galáxia terão papel importante na história, trazendo aventuras que podem fazer o filho de Odin questionar seu papel enquanto Deus do Trovão,  precisando contar com o apoio de grandes aliados como Valquíria (Tessa Thompson) e Korg (Taika Waititi) para enfrentar suas lutas. O filme ainda apresenta Gorr (Christian Bale) - sendo o grande vilão da narrativa - e ainda, Zeus (Russell Crowe). \r\n', 'Taika Waititi', 'Disney', ' Chris Hemsworth, Natalie Portman, Christian Bale', 'Aventura Ação  Ficção', '12', '1h 59min', '2022-07-06', '62bae5cb780c5.jpg', '62bae5cb78257.jpg', 'https://www.youtube.com/embed/1c_W_4cNLn0'),
(3, 'TOP GUN: MAVERICK', 'Na sequência de Top Gun: Ases Indomáveis, acompanhamos a história de Pete “Maverick” Mitchell (Tom Cruise), um piloto à moda antiga da Marinha que coleciona muitas condecorações, medalhas de combate e grande reconhecimento pela quantidade de aviões inimigos abatidos nos últimos 30 anos. Entretanto, nada disso foi suficiente para sua carreira decolar, visto que ele deixou de ser um capitão e tornou-se um instrutor. A explicação para esse declínio é simples: Ele continua sendo o mesmo piloto rebelde de sempre, que não hesita em romper os limites e desafiar a morte. Nesta nova aventura, Maverick precisa provar que o fator humano ainda é fundamental no mundo contemporâneo das guerras tecnológicas. Após 34 anos do clássico, acompanhem o filme do premiado produtor Jerry Bruckheimer e de Joseph Kosinski, mesmo diretor de Tron: O Legado (2010) e Oblivion (2013).', 'Joseph Kosinski', 'Paramount Pictures Studios', 'Tom Cruise, Miles Teller, Jennifer Connelly', ' Ação', '12', '2h 11min', '2022-05-26', '62baffdca84fa.jpg', '62baffdca870d.jpg', 'https://www.youtube.com/embed/9Jgua93Xhcw');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_filmes.cartaz`
--

CREATE TABLE `tb_filmes.cartaz` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `sinopse` text NOT NULL,
  `diretor` varchar(255) NOT NULL,
  `distribuidora` varchar(255) NOT NULL,
  `elenco` text NOT NULL,
  `genero` varchar(255) NOT NULL,
  `classificacao` varchar(255) NOT NULL,
  `duracao` varchar(255) NOT NULL,
  `data` date NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `banner` varchar(255) NOT NULL,
  `trailer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_filmes.cartaz`
--

INSERT INTO `tb_filmes.cartaz` (`id`, `nome`, `sinopse`, `diretor`, `distribuidora`, `elenco`, `genero`, `classificacao`, `duracao`, `data`, `imagem`, `banner`, `trailer`) VALUES
(1, 'DOUTOR ESTRANHO NO MULTIVERSO DA LOUCURA', 'Em Doutor Estranho no Multiverso da Loucura, após derrotar Dormammu e enfrentar Thanos nos eventos de Vingadores: Ultimato, o Mago Supremo, Stephen Strange (Benedict Cumberbatch), e seu parceiro Wong (Benedict Wong), continuam suas pesquisas sobre a Joia do Tempo. Mas um velho amigo que virou inimigo coloca um ponto final nos seus planos e faz com que Strange desencadeie um mal indescritível, o obrigando a enfrentar uma nova e poderosa ameaça. O longa se conecta com a série do Disney+ WandaVision e tem relação também com Loki. O longa pertence a fase 4 do MCU onde a realidade do universo pode entrar em colapso por causa do mesmo feitiço que trouxe os vilões do Teioso para o mundo dos Vingadores e o Mago Supremo precisará contar com a ajuda de Wanda (Elizabeth Olsen), que vive isolada desde os eventos de WandaVision.', 'Sam Raimi', 'Disney', 'Benedict Cumberbatch, Elizabeth Olsen, Chiwetel Ejiofor', 'Fantasia Ação Aventura', '16', ' 2h 06min', '2022-05-04', '62bade5b17040.jpeg', '62bafb44ba3c0.jpg', 'https://www.youtube.com/embed/X23XCFgdh2M'),
(5, 'SONIC 2 - O FILME', 'Sonic 2 - O Filme é uma sequência dos acontecimentos do primeiro live-action de Sonic - O Filme, baseado no videogame de sucesso. Após conseguir se estabelecer em Green Hills, Sonic está pronto para mais liberdade e quer provar que tem o necessário para ser um herói de verdade. Seu teste virá quando Tom e Maddie concordam em deixá-lo em casa enquanto saem de férias para ir ao casamento da irmã de Rachel, no Havaí. Mas para a infelicidade do ouriço, a data acaba coincidindo com o retorno do Dr. Robotnik, dessa vez com um novo parceiro, Knuckles, depois que o doutor do mal vai embora para o planeta cogumelo. O terrível Robotnik está à procura de uma esmeralda com o poder de destruir civilizações. Sonic se une a um novo companheiro, Tails, e juntos eles embarcam em uma jornada para encontrar a esmeralda antes que ela caia nas mãos erradas.', 'Jeff Fowler', 'Paramount Pictures Studios', 'Jim Carrey, James Marsden, Idris Elba', 'Animação Família Aventura', 'Livre', '2h 02min', '2022-04-07', '62bb0345187c8.jpg', '62bb0345189e4.jpg', 'https://www.youtube.com/embed/A2SjVRziC7M'),
(6, 'BATMAN', 'Batman (The Batman, no original) segue o segundo ano de Bruce Wayne (Robert Pattinson) como o herói de Gotham, causando medo nos corações dos criminosos da sombria cidade. Com apenas alguns aliados de confiança - Alfred Pennyworth (Andy Serkis) e o tenente James Gordon (Jeffrey Wright) - entre a rede corrupta de funcionários e figuras importantes do distrito, o vigilante solitário se estabeleceu como a única personificação da vingança entre seus concidadãos. Durante uma de suas investigações, Bruce acaba envolvendo a si mesmo e Gordon em um jogo de gato e rato, ao investigar uma série de maquinações sádicas em uma trilha de pistas enigmáticas estabelecida pelo vilão Charada. Quando o trabalho acaba o levando a descobrir uma onda de corrupção que envolve o nome de sua família, pondo em risco a própria integridade e as memórias que tinha sobre seu pai, Thomas Wayne, as evidências começam a chegar mais perto de casa, precisando, Batman, forjar novos relacionamentos, para assim desmascarar o culpado e fazer justiça ao abuso de poder e à corrupção que há muito tempo assola Gotham City.', 'Matt Reeves', 'Warner', 'Robert Pattinson, Zoë Kravitz, Paul Dano', 'Ação Policial Suspense', '14', '2h 57min', '2022-03-03', '62bb04747673b.jpg', '62bb0474768eb.jpg', 'https://www.youtube.com/embed/rsQEor4y2hg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_sala`
--

CREATE TABLE `tb_sala` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `idioma` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_sala`
--

INSERT INTO `tb_sala` (`id`, `titulo`, `idioma`) VALUES
(2, 'Sala 1', 'LEG'),
(3, 'Sala 2', 'ORIG'),
(4, 'Sala 3\r\n', 'ORIG'),
(5, 'Sala 4\r\n', 'ORIG'),
(6, 'Sala 5', 'ORIG'),
(7, 'Sala 6', 'ORIG');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_sessao`
--

CREATE TABLE `tb_sessao` (
  `id` int(11) NOT NULL,
  `filme` int(11) NOT NULL,
  `sala` varchar(255) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `data` date NOT NULL,
  `horario` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_sessao`
--

INSERT INTO `tb_sessao` (`id`, `filme`, `sala`, `tipo`, `data`, `horario`) VALUES
(1, 1, 'Sala 1', '3D', '2022-06-30', '12:40:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_snack.produtos`
--

CREATE TABLE `tb_snack.produtos` (
  `id` int(11) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `preco` float NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_snack.produtos`
--

INSERT INTO `tb_snack.produtos` (`id`, `tipo`, `titulo`, `descricao`, `preco`, `img`) VALUES
(1, 'pipoca', 'Grande', 'aaaa', 10, '62baf1a884eef.jpg'),
(2, 'refrigerante', 'Grande', 'aa', 10, '62baf102dd573.jpg'),
(3, 'bebidas', 'Agua', 'a', 4, '62baf1306d6f8.jpg'),
(4, 'snack', 'Doritos', 'aaaa', 5, '62baf1715556e.jfif'),
(5, 'doces', 'Kit Kat', 'aaaaa', 5, '62baf18b08e92.jpg');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_admin.usuarios`
--
ALTER TABLE `tb_admin.usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_banner`
--
ALTER TABLE `tb_banner`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_combos`
--
ALTER TABLE `tb_combos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_filmes.breve`
--
ALTER TABLE `tb_filmes.breve`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_filmes.cartaz`
--
ALTER TABLE `tb_filmes.cartaz`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_sala`
--
ALTER TABLE `tb_sala`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_sessao`
--
ALTER TABLE `tb_sessao`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_snack.produtos`
--
ALTER TABLE `tb_snack.produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_admin.usuarios`
--
ALTER TABLE `tb_admin.usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tb_banner`
--
ALTER TABLE `tb_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_combos`
--
ALTER TABLE `tb_combos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tb_filmes.breve`
--
ALTER TABLE `tb_filmes.breve`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tb_filmes.cartaz`
--
ALTER TABLE `tb_filmes.cartaz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tb_sala`
--
ALTER TABLE `tb_sala`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `tb_sessao`
--
ALTER TABLE `tb_sessao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tb_snack.produtos`
--
ALTER TABLE `tb_snack.produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
