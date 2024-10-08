-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Out-2024 às 22:42
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

CREATE DATABASE forums;
use forums;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `forums`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `forum_category`
--

CREATE TABLE `forum_category` (
  `category_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `forum_category`
--

INSERT INTO `forum_category` (`category_id`, `name`, `description`) VALUES
(3, 'Consejos diarios', 'Dirigido a preguntas sobre su vida diaria en Brasil'),
(4, 'Empleabilidad ', 'Dirigido a dudas sobre la empleabilidad brasileña'),
(5, 'Hogar', 'Dirigido a consultas sobre vivienda'),
(7, 'Atención al cliente', 'Destinado a consultas y mejoras del sitio web.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `forum_owner`
--

CREATE TABLE `forum_owner` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `forum_owner`
--

INSERT INTO `forum_owner` (`id`, `username`, `email`, `password`, `created`) VALUES
(1, 'david', 'david@webdamn.com', '202cb962ac59075b964b07152d234b70', '2021-12-29');

-- --------------------------------------------------------

--
-- Estrutura da tabela `forum_posts`
--

CREATE TABLE `forum_posts` (
  `post_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `topic_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `forum_posts`
--

INSERT INTO `forum_posts` (`post_id`, `message`, `topic_id`, `user_id`, `name`, `created`) VALUES
(1810, '<p>aaa</p>', 14, 1, '', '2024-10-02 16:54:22'),
(1811, '<p>a</p>', 14, 1, '', '2024-10-02 16:54:22'),
(1813, '<p>bba</p>', 14, 2, '', '2024-10-02 17:37:47');

-- --------------------------------------------------------

--
-- Estrutura da tabela `forum_topics`
--

CREATE TABLE `forum_topics` (
  `topic_id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `forum_topics`
--

INSERT INTO `forum_topics` (`topic_id`, `subject`, `category_id`, `user_id`, `created`) VALUES
(14, 'UBER', 7, 2, '2024-10-02 16:44:51');

-- --------------------------------------------------------

--
-- Estrutura da tabela `forum_usergroup`
--

CREATE TABLE `forum_usergroup` (
  `usergroup_id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `view_forum` int(11) NOT NULL,
  `create_topic` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `forum_usergroup`
--

INSERT INTO `forum_usergroup` (`usergroup_id`, `title`, `view_forum`, `create_topic`) VALUES
(1, 'administrator', 1, 1),
(2, 'member', 1, 1),
(3, 'guest', 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `forum_users`
--

CREATE TABLE `forum_users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usergroup` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `forum_users`
--

INSERT INTO `forum_users` (`user_id`, `name`, `email`, `password`, `usergroup`) VALUES
(1, 'Jhon Smith', 'smith@webdamn.com', '202cb962ac59075b964b07152d234b70', 1),
(2, 'Kane William', 'william@webdamn.com', '202cb962ac59075b964b07152d234b70', 1),
(4, 'jhon', 'jhon@webdamn.com', '202cb962ac59075b964b07152d234b70', 2);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `forum_category`
--
ALTER TABLE `forum_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Índices para tabela `forum_owner`
--
ALTER TABLE `forum_owner`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `forum_posts`
--
ALTER TABLE `forum_posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Índices para tabela `forum_topics`
--
ALTER TABLE `forum_topics`
  ADD PRIMARY KEY (`topic_id`);

--
-- Índices para tabela `forum_usergroup`
--
ALTER TABLE `forum_usergroup`
  ADD PRIMARY KEY (`usergroup_id`);

--
-- Índices para tabela `forum_users`
--
ALTER TABLE `forum_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `forum_category`
--
ALTER TABLE `forum_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `forum_owner`
--
ALTER TABLE `forum_owner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `forum_posts`
--
ALTER TABLE `forum_posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1814;

--
-- AUTO_INCREMENT de tabela `forum_topics`
--
ALTER TABLE `forum_topics`
  MODIFY `topic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `forum_usergroup`
--
ALTER TABLE `forum_usergroup`
  MODIFY `usergroup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `forum_users`
--
ALTER TABLE `forum_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
