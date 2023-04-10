-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Abr-2023 às 18:23
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

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
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_admin.usuarios`
--

INSERT INTO `tb_admin.usuarios` (`id`, `user`, `password`, `nome`, `img`) VALUES
(1, 'Bruno', '123', 'Bruno', '642e5548ef519.jpg');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_combos`
--

INSERT INTO `tb_combos` (`id`, `titulo`, `produto1`, `produto2`, `produto3`, `produto4`, `produto5`, `produto6`, `preco`) VALUES
(1, 'Combo 1', 3, 3, 4, 0, 0, 0, 15),
(2, 'Combo 2', 3, 4, 6, 7, 0, 0, 18);

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
  `classificacao` int(11) NOT NULL,
  `duracao` varchar(255) NOT NULL,
  `data` date NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `banner` varchar(255) NOT NULL,
  `trailer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_filmes.breve`
--

INSERT INTO `tb_filmes.breve` (`id`, `nome`, `sinopse`, `diretor`, `distribuidora`, `elenco`, `genero`, `classificacao`, `duracao`, `data`, `imagem`, `banner`, `trailer`) VALUES
(1, 'GUARDIÕES DA GALÁXIA VOL. 3', 'Encerramento da trilogia estrelada por Peter Quill / Star-Lord (Chris Pratt), Gamora (Zoe Saldana), Rocket (Bradley Cooper), Drax (Dave Bautista) e Groot (Vin Diesel). A sinopse oficial ainda não foi divulgada.', 'James Gunn', 'Disney', 'Chris Pratt, Zoe Saldana, Dave Bautista', ' Ação, Fantasia, Ficção científica', 16, '2h 30min ', '2023-05-05', '642e560d9b8a7.jpg', '642e560d9bcbb.jpg', 'https://www.youtube.com/embed/d1yNc9skssk');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_filmes.cartaz`
--

INSERT INTO `tb_filmes.cartaz` (`id`, `nome`, `sinopse`, `diretor`, `distribuidora`, `elenco`, `genero`, `classificacao`, `duracao`, `data`, `imagem`, `banner`, `trailer`) VALUES
(1, 'SUPER MARIO BROS. - O FILME', 'Mario é um filme baseado na série de video games, Super Mario Bros, da Nintendo. Em Super Mario Bros. - O Filme, Mario (Chris Pratt) é um encanador qualquer no bairro de Brooklyn junto com seu irmão Luigi (Charlie Day). Um dia, Mario e Luigi vão para no reino dos cogumelos, governado pela Princesa Peach (Anya Taylor-Joy), mas ameaçado pelo rei dos Koopas, Bowser (Jack Black), que vai fazer de tudo para conseguir reinar todos os lugares. É então quando Luigi é raptado por Bowser e o usa para procurar Mario, o único capaz de deter o Koopa e reestabelexcer a paz. Mario terá que aprender como viver nesse novo reino perigoso, passando por vários biomas, aprender a dirigir carros, utilizar itens que o fazem soltar bolas de fogo das mãos, virar um animal e andar em plataformas nada confiáveis. Também estará acompanhados de amigos, como Toad (Keegan-Michael Key) e Donkey Kong (Seth Rogan).', 'Aaron Horvath, Michael Jelenic', 'Universal Studios', 'Charles Martinet, Raphael Rossatto, Chris Pratt', ' Animação, Ação, Aventura, Comédia, Família', '14', '1h 32min', '2023-04-06', '642e5a0147211.jpg', '642e5a0147455.jpg', 'https://www.youtube.com/embed/Cb4WV4aXBpk'),
(2, 'CREED III', 'Em Creed III, continuação do longa de 2018, Michael B. Jordan volta a interpretar Adonis Creed. Depois de dominar o mundo do boxe, Adonis Creed vem prosperando tanto na carreira quanto na vida familiar. Quando um amigo de infância e ex-prodígio do boxe, Damian (Jonathan Majors), ressurge depois de cumprir uma longa sentença na prisão, ele está ansioso para provar que merece sua chance no ringue. Damian pede a ajuda de Creed para que ele o ajude a voltar para os campeonatos de luta. Apesar de tudo, dezoito anos na prisão mudam a pessoa e Damian não está nada satisfeito que Creed \"tomou seu lugar\" no ringue de boxe. Dois velhos amigos então vão lutar para enfrentar seus passados juntos e enfrentar o futuro que os aguarda. Para acertar as contas, Adonis deve colocar seu futuro em risco para lutar contra Damian - um lutador que não tem nada a perder.', 'Michael B. Jordan', 'Universal Studios', 'Michael B. Jordan, Tessa Thompson, Jonathan Majors', 'Drama', '16', '1h 57min', '2023-03-02', '642e5de77d86d.jpg', '642e5de77e3e1.jpg', 'https://www.youtube.com/embed/vENtKgrHUUU'),
(3, 'SUPER MARIO BROS. - O FILME', 'Mario é um filme baseado na série de video games, Super Mario Bros, da Nintendo. Em Super Mario Bros. - O Filme, Mario (Chris Pratt) é um encanador qualquer no bairro de Brooklyn junto com seu irmão Luigi (Charlie Day). Um dia, Mario e Luigi vão para no reino dos cogumelos, governado pela Princesa Peach (Anya Taylor-Joy), mas ameaçado pelo rei dos Koopas, Bowser (Jack Black), que vai fazer de tudo para conseguir reinar todos os lugares. É então quando Luigi é raptado por Bowser e o usa para procurar Mario, o único capaz de deter o Koopa e reestabelexcer a paz. Mario terá que aprender como viver nesse novo reino perigoso, passando por vários biomas, aprender a dirigir carros, utilizar itens que o fazem soltar bolas de fogo das mãos, virar um animal e andar em plataformas nada confiáveis. Também estará acompanhados de amigos, como Toad (Keegan-Michael Key) e Donkey Kong (Seth Rogan).', 'Aaron Horvath, Michael Jelenic', 'Universal Studios', 'Charles Martinet, Raphael Rossatto, Chris Pratt', ' Animação, Ação, Aventura, Comédia, Família', '14', '1h 32min', '2023-04-06', '642e5a0147211.jpg', '642e5a0147455.jpg', 'https://www.youtube.com/embed/Cb4WV4aXBpk'),
(4, 'CREED III', 'Em Creed III, continuação do longa de 2018, Michael B. Jordan volta a interpretar Adonis Creed. Depois de dominar o mundo do boxe, Adonis Creed vem prosperando tanto na carreira quanto na vida familiar. Quando um amigo de infância e ex-prodígio do boxe, Damian (Jonathan Majors), ressurge depois de cumprir uma longa sentença na prisão, ele está ansioso para provar que merece sua chance no ringue. Damian pede a ajuda de Creed para que ele o ajude a voltar para os campeonatos de luta. Apesar de tudo, dezoito anos na prisão mudam a pessoa e Damian não está nada satisfeito que Creed \"tomou seu lugar\" no ringue de boxe. Dois velhos amigos então vão lutar para enfrentar seus passados juntos e enfrentar o futuro que os aguarda. Para acertar as contas, Adonis deve colocar seu futuro em risco para lutar contra Damian - um lutador que não tem nada a perder.', 'Michael B. Jordan', 'Universal Studios', 'Michael B. Jordan, Tessa Thompson, Jonathan Majors', 'Drama', '16', '1h 57min', '2023-03-02', '642e5de77d86d.jpg', '642e5de77e3e1.jpg', 'https://www.youtube.com/embed/vENtKgrHUUU'),
(5, 'SUPER MARIO BROS. - O FILME', 'Mario é um filme baseado na série de video games, Super Mario Bros, da Nintendo. Em Super Mario Bros. - O Filme, Mario (Chris Pratt) é um encanador qualquer no bairro de Brooklyn junto com seu irmão Luigi (Charlie Day). Um dia, Mario e Luigi vão para no reino dos cogumelos, governado pela Princesa Peach (Anya Taylor-Joy), mas ameaçado pelo rei dos Koopas, Bowser (Jack Black), que vai fazer de tudo para conseguir reinar todos os lugares. É então quando Luigi é raptado por Bowser e o usa para procurar Mario, o único capaz de deter o Koopa e reestabelexcer a paz. Mario terá que aprender como viver nesse novo reino perigoso, passando por vários biomas, aprender a dirigir carros, utilizar itens que o fazem soltar bolas de fogo das mãos, virar um animal e andar em plataformas nada confiáveis. Também estará acompanhados de amigos, como Toad (Keegan-Michael Key) e Donkey Kong (Seth Rogan).', 'Aaron Horvath, Michael Jelenic', 'Universal Studios', 'Charles Martinet, Raphael Rossatto, Chris Pratt', ' Animação, Ação, Aventura, Comédia, Família', '14', '1h 32min', '2023-04-06', '642e5a0147211.jpg', '642e5a0147455.jpg', 'https://www.youtube.com/embed/Cb4WV4aXBpk'),
(6, 'CREED III', 'Em Creed III, continuação do longa de 2018, Michael B. Jordan volta a interpretar Adonis Creed. Depois de dominar o mundo do boxe, Adonis Creed vem prosperando tanto na carreira quanto na vida familiar. Quando um amigo de infância e ex-prodígio do boxe, Damian (Jonathan Majors), ressurge depois de cumprir uma longa sentença na prisão, ele está ansioso para provar que merece sua chance no ringue. Damian pede a ajuda de Creed para que ele o ajude a voltar para os campeonatos de luta. Apesar de tudo, dezoito anos na prisão mudam a pessoa e Damian não está nada satisfeito que Creed \"tomou seu lugar\" no ringue de boxe. Dois velhos amigos então vão lutar para enfrentar seus passados juntos e enfrentar o futuro que os aguarda. Para acertar as contas, Adonis deve colocar seu futuro em risco para lutar contra Damian - um lutador que não tem nada a perder.', 'Michael B. Jordan', 'Universal Studios', 'Michael B. Jordan, Tessa Thompson, Jonathan Majors', 'Drama', '16', '1h 57min', '2023-03-02', '642e5de77d86d.jpg', '642e5de77e3e1.jpg', 'https://www.youtube.com/embed/vENtKgrHUUU'),
(7, 'SUPER MARIO BROS. - O FILME', 'Mario é um filme baseado na série de video games, Super Mario Bros, da Nintendo. Em Super Mario Bros. - O Filme, Mario (Chris Pratt) é um encanador qualquer no bairro de Brooklyn junto com seu irmão Luigi (Charlie Day). Um dia, Mario e Luigi vão para no reino dos cogumelos, governado pela Princesa Peach (Anya Taylor-Joy), mas ameaçado pelo rei dos Koopas, Bowser (Jack Black), que vai fazer de tudo para conseguir reinar todos os lugares. É então quando Luigi é raptado por Bowser e o usa para procurar Mario, o único capaz de deter o Koopa e reestabelexcer a paz. Mario terá que aprender como viver nesse novo reino perigoso, passando por vários biomas, aprender a dirigir carros, utilizar itens que o fazem soltar bolas de fogo das mãos, virar um animal e andar em plataformas nada confiáveis. Também estará acompanhados de amigos, como Toad (Keegan-Michael Key) e Donkey Kong (Seth Rogan).', 'Aaron Horvath, Michael Jelenic', 'Universal Studios', 'Charles Martinet, Raphael Rossatto, Chris Pratt', ' Animação, Ação, Aventura, Comédia, Família', '14', '1h 32min', '2023-04-06', '642e5a0147211.jpg', '642e5a0147455.jpg', 'https://www.youtube.com/embed/Cb4WV4aXBpk'),
(8, 'CREED III', 'Em Creed III, continuação do longa de 2018, Michael B. Jordan volta a interpretar Adonis Creed. Depois de dominar o mundo do boxe, Adonis Creed vem prosperando tanto na carreira quanto na vida familiar. Quando um amigo de infância e ex-prodígio do boxe, Damian (Jonathan Majors), ressurge depois de cumprir uma longa sentença na prisão, ele está ansioso para provar que merece sua chance no ringue. Damian pede a ajuda de Creed para que ele o ajude a voltar para os campeonatos de luta. Apesar de tudo, dezoito anos na prisão mudam a pessoa e Damian não está nada satisfeito que Creed \"tomou seu lugar\" no ringue de boxe. Dois velhos amigos então vão lutar para enfrentar seus passados juntos e enfrentar o futuro que os aguarda. Para acertar as contas, Adonis deve colocar seu futuro em risco para lutar contra Damian - um lutador que não tem nada a perder.', 'Michael B. Jordan', 'Universal Studios', 'Michael B. Jordan, Tessa Thompson, Jonathan Majors', 'Drama', '16', '1h 57min', '2023-03-02', '642e5de77d86d.jpg', '642e5de77e3e1.jpg', 'https://www.youtube.com/embed/vENtKgrHUUU');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_sala`
--

CREATE TABLE `tb_sala` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `idioma` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_sala`
--

INSERT INTO `tb_sala` (`id`, `titulo`, `idioma`) VALUES
(1, 'Sala 1', 'LEG'),
(2, 'Sala 2\r\n', ''),
(3, 'Sala 3', ''),
(4, 'Sala 4', ''),
(5, 'Sala 5', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_sessao`
--

CREATE TABLE `tb_sessao` (
  `id` int(11) NOT NULL,
  `filme` varchar(255) NOT NULL,
  `sala` varchar(255) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `data` date NOT NULL,
  `horario` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_sessao`
--

INSERT INTO `tb_sessao` (`id`, `filme`, `sala`, `tipo`, `data`, `horario`) VALUES
(1, '1', 'Sala 1', '3D', '2023-04-12', '12:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_snack.produtos`
--

CREATE TABLE `tb_snack.produtos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `preco` float NOT NULL,
  `img` varchar(255) NOT NULL,
  `tipo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_snack.produtos`
--

INSERT INTO `tb_snack.produtos` (`id`, `titulo`, `descricao`, `preco`, `img`, `tipo`) VALUES
(3, 'pipoca', 'Pipoca P', 10, '642e577d4eefa.jpg', 'pipoca'),
(4, 'Pequeno', 'Refrigerante pequeno', 8, '642e589cc9420.jpg', 'refrigerante'),
(5, 'Chá', 'Chá', 5, '642e58cddbfe2.jpg', 'bebidas'),
(6, 'Doritos', 'Doritos', 5, '642e58e23333d.jpg', 'snack'),
(7, 'Kitkat', 'Kitkat', 3, '642e58f348525.jpg', 'doces');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_admin.usuarios`
--
ALTER TABLE `tb_admin.usuarios`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tb_combos`
--
ALTER TABLE `tb_combos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tb_filmes.breve`
--
ALTER TABLE `tb_filmes.breve`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tb_filmes.cartaz`
--
ALTER TABLE `tb_filmes.cartaz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `tb_sala`
--
ALTER TABLE `tb_sala`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tb_sessao`
--
ALTER TABLE `tb_sessao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tb_snack.produtos`
--
ALTER TABLE `tb_snack.produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
