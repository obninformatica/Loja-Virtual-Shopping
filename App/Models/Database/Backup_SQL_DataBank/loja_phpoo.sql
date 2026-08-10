-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09/08/2026 às 14:08
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `loja_phpoo`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `carrinho`
--

CREATE TABLE `carrinho` (
  `id` int(8) NOT NULL,
  `produto_nome` varchar(32) NOT NULL,
  `produto_valor` decimal(8,2) NOT NULL,
  `produto_slug` varchar(32) NOT NULL,
  `produto_descricao` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) UNSIGNED NOT NULL,
  `categoria_nome` varchar(50) DEFAULT NULL,
  `categoria_slug` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `categorias`
--

INSERT INTO `categorias` (`id`, `categoria_nome`, `categoria_slug`) VALUES
(1, 'Celular', 'celulares'),
(2, 'Câmeras', 'cameras'),
(3, 'Notebooks', 'notebooks'),
(4, 'Placas de Video', 'placas-de-video');

-- --------------------------------------------------------

--
-- Estrutura para tabela `estoque`
--

CREATE TABLE `estoque` (
  `id` int(8) UNSIGNED NOT NULL,
  `produto_nome` varchar(32) NOT NULL,
  `categoria_slug` varchar(60) NOT NULL,
  `marca_assunto` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `fotos`
--

CREATE TABLE `fotos` (
  `id` int(8) UNSIGNED NOT NULL,
  `produto_nome` varchar(32) NOT NULL,
  `categoria_slug` varchar(60) NOT NULL,
  `produto_slug` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `marcas`
--

CREATE TABLE `marcas` (
  `id` int(11) NOT NULL,
  `marca_nome` varchar(50) NOT NULL,
  `marca_slug` varchar(50) NOT NULL,
  `marca_assunto` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `marcas`
--

INSERT INTO `marcas` (`id`, `marca_nome`, `marca_slug`, `marca_assunto`) VALUES
(1, 'Apple', 'apple', NULL),
(2, 'Samsung', 'samsung', NULL),
(3, 'Lg', 'lg', NULL),
(4, 'Radeon', 'radeon', NULL),
(5, 'Geforce', 'geforce', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `ld` int(8) UNSIGNED NOT NULL,
  `produto_nome` varchar(32) NOT NULL,
  `categoria_slug` varchar(60) NOT NULL,
  `produto_slug` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `pedidos_produtos`
--

CREATE TABLE `pedidos_produtos` (
  `id` int(10) UNSIGNED NOT NULL,
  `produto_nome` int(11) DEFAULT NULL,
  `categoria_slug` int(11) DEFAULT NULL,
  `produto_slug` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) UNSIGNED NOT NULL,
  `produto_nome` varchar(60) DEFAULT NULL,
  `produto_valor` decimal(10,2) DEFAULT NULL,
  `produto_slug` varchar(100) DEFAULT NULL,
  `produto_descricao` text NOT NULL,
  `produto_foto` varchar(150) DEFAULT NULL,
  `produto_promocao` int(11) DEFAULT NULL,
  `produto_valor_promocao` decimal(10,2) DEFAULT NULL,
  `produto_categoria` int(11) DEFAULT NULL,
  `produto_marca` int(11) DEFAULT NULL,
  `produto_presente` int(11) DEFAULT NULL,
  `produto_destaque` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`id`, `produto_nome`, `produto_valor`, `produto_slug`, `produto_descricao`, `produto_foto`, `produto_promocao`, `produto_valor_promocao`, `produto_categoria`, `produto_marca`, `produto_presente`, `produto_destaque`) VALUES
(1, 'Samsung Smart Camera WB150F', 102.56, 'camera-samsung', 'cameras, Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et dapibus odio, nec tempus quam. Maecenas tempor egestas auctor.\r\ncaro demais\r\nClass aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.', 'assets/images/produtos/camera_samsung.png', 2, NULL, 2, 2, 1, NULL),
(2, 'Celular Iphone 5S', 3000.45, 'celular-iphone-5S', 'descricao iphone 5S', 'assets/images/produtos/iphone5s_new.png', 1, 2045.32, 1, 1, NULL, 1),
(3, 'Celular Iphone 6S', 4000.00, 'celular-iphone-6S', 'descricao iphone 6S', 'assets/images/produtos/iphone6s_new.png', 2, NULL, 1, 1, NULL, 1),
(4, 'Celular LG Leon', 2500.00, 'celular-lg-leon', 'Smartphone LG Leon H326TV TV Digital 8GB 5.0 MP 2 Chips Android 5.0 (Lollipop)', 'assets/images/produtos/Smartphone_LG_Leon_H326TV.png', 1, 1200.00, 1, 3, 1, NULL),
(5, 'Macbook Pro', 10000.00, 'macbook-pro', 'Apple Macbook Pro 2018 TouchBar - Core i5 | Quad Core | 256GB SSD | 8GB LPDDR3 | 13.3\" Cinza Espacial', 'assets/images/produtos/macbook_pro_2018.png', 1, 2000.00, 5, 1, NULL, 1),
(6, 'Radeon', 300.00, 'placa-video-radeon', 'RX Vega 7 é uma GPU integrada aos processadores ou APUs (processador + GPU) da AMD. A GTX 1650 da Nvidia é uma placa de vídeo dedicada do segmento de entrada. Ela pode ser uma alternativa mais em conta para quem procura uma solução para jogos em HD ou mesmo Full HD com níveis gráficos mais baixos. Além de aparecer em uma opção para desktops por valores a partir de R$ 929, a GTX 1650 também é uma placa muito popular no segmento mobile, equipando boa parte dos notebooks voltados ao segmento gamer disponíveis no mercado brasileiro.', 'assets/images/produtos/GeforceRadeon_GTX.png', NULL, NULL, 6, 4, NULL, NULL),
(7, 'Geforce gts250', 550.00, 'placa-video-gforce', 'Lançada há algum tempo pela XFX, a placa de vídeos Geforce GTS 250 vem conquistando vários jogadores devido a ótima relação entre o bom desempenho que ela entrega e o seu custo relativamente baixo. Utilizando o chip G92 da NVidia e com 512 Mb de memória DDR3 a 1.100Mhz e uma interface entre a GPU e os módulos de memória de 256 bits, a placa mostra um desempenho sólido para um jogador casual ou até mesmo para jogadores mais fanáticos.\n\nA história do chip G92 é um pouco curiosa. Inicialmente, ele chegou ao mercado com a linha 9800 GTS da Nvidia. Quando a empresa lançou a nova linha de produtos, ela preferiu relançar o chip como uma opção com um custo baixo, mas com o desempenho da placa top da geração anterior. Fabricado no processo de 65nm e com mais de setecentos e cinquenta milhões de transistores, a placa consegue transferir mais de setenta gigabytes por segundo entre sua GPU e os módulos de memória. Some a isso 128 shaders unificados rodando a mais de 1.800Mhz, a própria GPU rodando a 738Mhz e você terá uma placa de vídeo ótima, até mesmo para os jogos mais modernos.', 'assets/images/produtos/geforce_gts_250.png', 1, 150.00, 6, 5, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` int(8) NOT NULL,
  `name` varchar(25) NOT NULL,
  `sobrenome` varchar(32) NOT NULL,
  `is_admin` varchar(8) NOT NULL,
  `email` varchar(64) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `name`, `sobrenome`, `is_admin`, `email`, `password`) VALUES
(1, 'Alexandre', 'Cardoso', '1', 'xandecar@hotmail.com', '123456'),
(2, 'Sandra', 'Maria', '2', 'sandra@email.com.br', '123456789'),
(3, 'Carlos', 'Augusto de Souza', '3', 'carlosaugusto@hotmail.com', '123456'),
(4, 'Roberto', 'Costa', '4', 'roberto.costa@gmail.com', '123456');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `estoque`
--
ALTER TABLE `estoque`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`ld`);

--
-- Índices de tabela `pedidos_produtos`
--
ALTER TABLE `pedidos_produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `estoque`
--
ALTER TABLE `estoque`
  MODIFY `id` int(8) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `fotos`
--
ALTER TABLE `fotos`
  MODIFY `id` int(8) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `ld` int(8) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pedidos_produtos`
--
ALTER TABLE `pedidos_produtos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
