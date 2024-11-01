-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30/10/2024 às 06:19
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE forum_bd;
USE forum_bd;

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `forum_bd`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `categories`
--

CREATE TABLE `categories` (
  `id` int(30) NOT NULL,
  `name` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `date_updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `date_updated`) VALUES
(1, 'Consejos', 'Etiqueta destinada a aclarar dudas y preguntas sobre consejos diarios como el sistema de salud pública, autobuses y otros.', '2024-10-16 16:16:23'),
(2, 'Empleabilidad', 'Etiqueta destinada a aclarar dudas y preguntas sobre la empleabilidad en el territorio brasileño.', '2024-10-14 13:44:31'),
(3, 'Hogar', 'Etiqueta destinada a aclarar dudas y preguntas sobre la vivienda en el territorio brasileño.', '2024-10-14 13:42:48'),
(7, 'Soporte técnico', 'Etiqueta destinada a la mejora constante del sitio web y la aplicación, ya sea un informe de errores, consejos de mejora o preguntas', '2024-10-14 13:49:07');

-- --------------------------------------------------------

--
-- Estrutura para tabela `comments`
--

CREATE TABLE `comments` (
  `id` int(30) NOT NULL,
  `topic_id` int(30) NOT NULL,
  `user_id` int(30) NOT NULL,
  `comment` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `comments`
--

INSERT INTO `comments` (`id`, `topic_id`, `user_id`, `comment`, `date_created`, `date_updated`) VALUES
(1, 2, 1, 'Sample Comment', '2020-10-16 16:55:39', '2020-10-16 16:55:39'),
(2, 2, 2, 'test', '2020-10-16 17:04:34', '2020-10-16 17:04:34'),
(3, 2, 1, 'sample', '2020-10-17 08:54:46', '2020-10-17 08:54:46'),
(4, 2, 1, 'asdasd', '2020-10-17 09:42:04', '2020-10-17 09:42:04'),
(5, 2, 4, 'testa', '2024-10-14 13:35:43', '2024-10-14 13:35:55'),
(9, 3, 5, 'aa', '2024-10-14 15:55:38', '2024-10-14 15:55:38'),
(10, 3, 5, 'aaa&lt;p&gt;&lt;br&gt;&lt;/p&gt;', '2024-10-14 16:05:18', '2024-10-14 16:05:18'),
(11, 3, 5, 'bbbb', '2024-10-14 16:05:23', '2024-10-14 16:05:23'),
(12, 3, 5, 'ccc', '2024-10-14 16:05:28', '2024-10-14 16:05:28'),
(16, 13, 10, 'aaaaaa', '2024-10-16 17:54:14', '2024-10-16 17:54:14'),
(17, 13, 10, 'aaaaaa&lt;p&gt;&lt;br&gt;&lt;/p&gt;', '2024-10-16 17:54:21', '2024-10-16 17:54:21'),
(18, 13, 10, 'zzzzz', '2024-10-16 17:54:25', '2024-10-16 17:54:25'),
(19, 13, 10, 'zzzguzguhu', '2024-10-16 17:54:30', '2024-10-16 17:54:30'),
(20, 13, 10, 'zzzzzz', '2024-10-16 17:54:35', '2024-10-16 17:54:35'),
(21, 13, 10, 'zzzzzz', '2024-10-16 17:54:40', '2024-10-16 17:54:40'),
(22, 13, 10, 'ssssss', '2024-10-16 17:54:46', '2024-10-16 17:54:46'),
(23, 13, 10, 'sssssssss', '2024-10-16 17:54:55', '2024-10-16 17:54:55'),
(24, 13, 10, 'ffffffffff', '2024-10-16 17:55:01', '2024-10-16 17:55:01'),
(25, 13, 10, 'fffffffffffffff', '2024-10-16 17:57:01', '2024-10-16 17:57:01'),
(26, 13, 10, 'ggggggggggggg', '2024-10-16 17:57:07', '2024-10-16 17:57:07'),
(27, 14, 11, 'aaaa&lt;p&gt;&lt;br&gt;&lt;/p&gt;', '2024-10-29 22:51:42', '2024-10-29 22:51:42');

-- --------------------------------------------------------

--
-- Estrutura para tabela `forum_views`
--

CREATE TABLE `forum_views` (
  `id` int(30) NOT NULL,
  `topic_id` int(30) NOT NULL,
  `user_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `forum_views`
--

INSERT INTO `forum_views` (`id`, `topic_id`, `user_id`) VALUES
(1, 2, 2),
(2, 2, 1),
(3, 2, 3),
(4, 2, 4),
(5, 2, 5),
(6, 1, 5),
(7, 3, 1),
(8, 2, 10),
(9, 13, 1),
(10, 14, 11),
(11, 14, 12),
(12, 13, 12);

-- --------------------------------------------------------

--
-- Estrutura para tabela `replies`
--

CREATE TABLE `replies` (
  `id` int(30) NOT NULL,
  `comment_id` int(30) NOT NULL,
  `reply` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `replies`
--

INSERT INTO `replies` (`id`, `comment_id`, `reply`, `user_id`, `date_created`, `date_updated`) VALUES
(1, 1, 'sample reply', 1, '2020-10-17 09:48:06', '0000-00-00 00:00:00'),
(2, 2, '&lt;span style=&quot;color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; font-size: 16px; text-align: justify;&quot;&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec elementum nunc bibendum, luctus diam id, tincidunt nisl. Vestibulum turpis arcu, fringilla sed lacus in, eleifend vulputate purus. Mauris sollicitudin metus in risus finibus fringilla.&lt;/span&gt;&lt;br&gt;', 1, '2020-10-17 09:48:57', '0000-00-00 00:00:00'),
(3, 1, 'asdasd&lt;p&gt;asdasd&lt;/p&gt;', 1, '2020-10-17 09:52:02', '0000-00-00 00:00:00'),
(4, 1, 's', 1, '2020-10-17 10:01:00', '0000-00-00 00:00:00'),
(5, 1, 'asdaasd', 1, '2020-10-17 10:01:06', '0000-00-00 00:00:00'),
(6, 1, 'asdasd&lt;p&gt;&lt;br&gt;&lt;/p&gt;', 1, '2020-10-17 10:01:53', '0000-00-00 00:00:00'),
(7, 1, 'asdsdsd', 1, '2020-10-17 10:16:09', '0000-00-00 00:00:00'),
(8, 1, '1', 1, '2020-10-17 10:16:13', '0000-00-00 00:00:00'),
(9, 1, '2', 1, '2020-10-17 10:16:17', '0000-00-00 00:00:00'),
(10, 1, 'a', 5, '2024-10-14 16:13:07', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura para tabela `topics`
--

CREATE TABLE `topics` (
  `id` int(30) NOT NULL,
  `category_ids` text NOT NULL,
  `title` varchar(250) NOT NULL,
  `content` text NOT NULL,
  `user_id` int(30) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `topics`
--

INSERT INTO `topics` (`id`, `category_ids`, `title`, `content`, `user_id`, `date_created`) VALUES
(3, '1', 'aaa', 'aaa', 5, '2024-10-14 14:30:51'),
(13, '3', 'aaa', 'wwww', 10, '2024-10-16 17:41:26'),
(14, '3', 'aaaa', 'ttttt', 1, '2024-10-29 22:26:40');

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 3 COMMENT '1=Admin,2=Usuario'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `type`) VALUES
(1, 'Administrator', 'admin', '0192023a7bbd73250516f069df18b500', 3),
(9, 'Diogo', 'Dg', 'a440043f6cf80b0963c206fd0baf8f14', 2),
(10, 'admin', 'admin2', '0192023a7bbd73250516f069df18b500', 1),
(11, 'Tete', 'teste', 'aa1bf4646de67fd9086cf6c79007026c', 2),
(12, 'aaa', 'aa', 'a7431f0258c9b308a73d337c20ca9ee6', 2);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `forum_views`
--
ALTER TABLE `forum_views`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `topics`
--
ALTER TABLE `topics`
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
-- AUTO_INCREMENT de tabela `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `forum_views`
--
ALTER TABLE `forum_views`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `replies`
--
ALTER TABLE `replies`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
