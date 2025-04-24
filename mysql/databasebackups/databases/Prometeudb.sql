-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 01, 2023 at 11:13 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Prometeudb`
--

-- --------------------------------------------------------

--
-- Table structure for table `Artigos`
--

CREATE TABLE `Artigos` (
  `idArtigos` int(11) NOT NULL,
  `Titulo` varchar(255) NOT NULL,
  `Abreviacao` varchar(28) DEFAULT NULL,
  `Localizacao` varchar(500) NOT NULL,
  `Descricao` mediumtext DEFAULT NULL,
  `Thumbnail` varchar(500) DEFAULT NULL,
  `Publicacao` date NOT NULL,
  `Assunto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Artigos`
--

INSERT INTO `Artigos` (`idArtigos`, `Titulo`, `Abreviacao`, `Localizacao`, `Descricao`, `Thumbnail`, `Publicacao`, `Assunto`) VALUES
(1, 'Kate Bush subindo a colina da qualia (um acordo com... um morcego?)', 'Qualia', 'Artigos/artigo_qualia.php', 'Séries populares como Stranger Things têm uma propriedade talvez tão interessante quanto suas histórias em si: elas nos permitem, de certa forma, compartilhar experiências. Milhões de pessoas ao redor do mundo, por mais diferentes que sejam, são unidas por um instante ao experimentarem aquela cena emocionante, aquele momento decisivo, aquele final arrebatador. Ou ao menos é o que parece. Mesmo que todos vissem simultaneamente a mesma cena, e nas exatas mesmas condições, elas realmente teriam a mesma experiência? Quando, no outro dia, você discute com seus amigos sobre um episódio, vocês estão realmente falando sobre a mesma coisa? Ou cada um, de certa forma, assistiu a uma série um pouco diferente? A filosofia tem uma coisa ou duas a dizer sobre isso. ', 'I1/Kate_Bush.jpeg', '2022-08-13', 'Fenomenologia'),
(2, 'Roubou as cores do universo? Melhor ligar pro Saul. (qualia epifenomenal vs fisicalismo)', 'Epifenomenalismo', 'Artigos/artigo_epifenomenalismo.php', 'É difícil imaginar como todas as coisas fascinantes que vagam pela nossa percepção poderiam não ser nada além da atividade complexa de neurônios atirando impulsos elétricos no nosso cérebro. Esse caráter quase mágico do nosso “mundo interior” convenceu diversos filósofos de que ele não deve estar no mundo físico em absoluto! Outros, por outro lado, não são encantados facilmente pela magia da Qualia. Para resolver essa disputa, só vai sobrar para a pobre Mary, cobaia dos experimentos caprichosos de filósofos.', 'I1/Saul_Goodman.jpeg', '2022-09-17', 'Fenomenologia'),
(3, 'O Apocalipse Zumbi (Filosófico!) – Parte 1', 'Filosofia Zumbi 01', 'Artigos/artigo_zumbi_filosofico_1.php', 'Você acorda em uma segunda-feira ordinária para tropeçar com o pé direito e cair em mais um dia de cotidiano: levantar, escovar os dentes, banho em uma harmonia de música e gotas... entre isso e o fechar atrás de si a porta para ir à escola, há sempre o momento ritualístico de sentar-se à mesa com sua família para tomar café e comer pão com manteiga. Seu rosto iluminado pelo sol que penetra ainda sonolento a janela e pela tela do seu celular, onde sucedem-se os frames de um vídeo qualquer no YouTube. Todos mastigam, como sempre, e reclamam da vida, como sempre, e reclamam inclusive que o volume do seu celular está alto demais, como sempre, impedindo que eles possam continuar a reclamar da vida em todo o seu potencial, como sempre. ', 'I1/Shaun.jpg', '2023-04-08', 'Introdução'),
(4, 'O Apocalipse Zumbi (Filosófico!) – Parte 2', 'Filosofia Zumbi 02', 'Artigos/artigo_zumbi_filosofico_2.php', 'Tantas páginas passaram por seus olhos que já não seria capaz de contá-las. Seria como tentar contar os carros cruzando uma rodovia movimentada em horário comercial. Nesse processo vertiginoso, porém, você acaba por fazer uma descoberta: aquilo que julgava não passar de divagações de uma mente perturbada são, na verdade, fragmentos de debates filosóficos seriamente levantados. Parte do que os filósofos chamam de “o problema das outras mentes”. Esse problema pode ser elucidado a partir de dois conceitos. ', 'I1/I_Am_a_Hero.jpg', '2023-04-08', 'Introdução'),
(5, 'Eu teria conseguido se não fossem esses filósofos enxeridos e esse Gilbert Ryle idiota!', 'Dualismo', 'Artigos/artigo_dualismo.php', 'Durante séculos um fantasma assombrou os corredores do pensamento filosófico. Por meio de equívocos linguísticos e lógicos, ele foi saltando de mente em mente, nos prendendo a crenças antigas e ultrapassadas sobre a natureza da consciência. Gilbert Ryle e outros filósofos enxeridos, no entanto, comprometem-se em desmascará-lo, mostrando que todos esses fenômenos aparentemente sobrenaturais que formam nossa vida interior não precisam ser fantoches controlados por uma cópia nossa de outro mundo, ou alma: as vezes é só um cara material mascarado de mental. ', 'I1/Artigo_Z.jpeg', '2022-11-16', 'Problema mente-corpo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Artigos`
--
ALTER TABLE `Artigos`
  ADD PRIMARY KEY (`idArtigos`),
  ADD UNIQUE KEY `idArtigos` (`idArtigos`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Artigos`
--
ALTER TABLE `Artigos`
  MODIFY `idArtigos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
