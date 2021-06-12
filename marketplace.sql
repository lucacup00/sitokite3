-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Giu 12, 2021 alle 09:58
-- Versione del server: 10.4.19-MariaDB
-- Versione PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marketplace`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `annunci`
--

CREATE TABLE `annunci` (
  `idAnnuncio` int(11) NOT NULL,
  `NomeKite` varchar(50) NOT NULL,
  `AnnoAquisto` date NOT NULL,
  `Descrizione` varchar(255) NOT NULL,
  `Costo` int(11) NOT NULL,
  `KsUtenti` int(11) NOT NULL,
  `KsMarca` int(11) NOT NULL,
  `KsCategoria` int(11) DEFAULT NULL,
  `misura` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `annunci`
--

INSERT INTO `annunci` (`idAnnuncio`, `NomeKite`, `AnnoAquisto`, `Descrizione`, `Costo`, `KsUtenti`, `KsMarca`, `KsCategoria`, `misura`) VALUES
(2, 'rpx', '2021-03-23', 'Come', 1010, 1, 1, 1, 12),
(3, 'asylum', '2021-03-18', 'un po graffiata', 350, 1, 1, 2, 141),
(4, 'vegas', '2021-06-09', 'vecchio', 500, 1, 1, 1, 13);

-- --------------------------------------------------------

--
-- Struttura della tabella `carrello`
--

CREATE TABLE `carrello` (
  `idCarrello` int(11) NOT NULL,
  `Datas` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `carrello_annunci`
--

CREATE TABLE `carrello_annunci` (
  `idCarrelloAnnunci` int(11) NOT NULL,
  `KsCarrello` int(11) DEFAULT NULL,
  `KsAnnuncio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `categorie`
--

CREATE TABLE `categorie` (
  `idCategorie` int(11) NOT NULL,
  `Tipo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `categorie`
--

INSERT INTO `categorie` (`idCategorie`, `Tipo`) VALUES
(1, 'KITES'),
(2, 'SURFBOARDS'),
(3, 'MUTE'),
(4, 'TRAPEZI');

-- --------------------------------------------------------

--
-- Struttura della tabella `citta`
--

CREATE TABLE `citta` (
  `idCitta` int(11) NOT NULL,
  `nomeCitta` varchar(100) NOT NULL,
  `cap` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `citta`
--

INSERT INTO `citta` (`idCitta`, `nomeCitta`, `cap`) VALUES
(1, 'ROCCAGORGA', 0),
(2, 'ROCCAGORGA', 4010);

-- --------------------------------------------------------

--
-- Struttura della tabella `immagini`
--

CREATE TABLE `immagini` (
  `idImmagine` int(11) NOT NULL,
  `Percorso` varchar(255) NOT NULL,
  `KsAnnuncio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `immagini`
--

INSERT INTO `immagini` (`idImmagine`, `Percorso`, `KsAnnuncio`) VALUES
(2, '1.png', 2),
(3, '2.jpg', 2),
(4, 'asylum.jpg', 3),
(5, '0.jpg', 4),
(6, '00.jpg', 4),
(7, '000.jpg', 4);

-- --------------------------------------------------------

--
-- Struttura della tabella `indirizzi`
--

CREATE TABLE `indirizzi` (
  `idindirizzi` int(11) NOT NULL,
  `Via` varchar(40) NOT NULL,
  `numeroCivico` int(11) NOT NULL,
  `KsCitta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `indirizzi`
--

INSERT INTO `indirizzi` (`idindirizzi`, `Via`, `numeroCivico`, `KsCitta`) VALUES
(1, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 12, 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `marca`
--

CREATE TABLE `marca` (
  `idMarca` int(11) NOT NULL,
  `Marca` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `marca`
--

INSERT INTO `marca` (`idMarca`, `Marca`) VALUES
(1, 'SLINGSHOT'),
(2, 'DUOTONE'),
(3, 'NORTH'),
(4, 'ELEVEIGHT'),
(5, 'CABRINHA');

-- --------------------------------------------------------

--
-- Struttura della tabella `utenti`
--

CREATE TABLE `utenti` (
  `idUtente` int(11) NOT NULL,
  `Nome` varchar(100) NOT NULL,
  `Cognome` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Telefono` varchar(100) NOT NULL,
  `PasswordUtente` varchar(100) NOT NULL,
  `ConfermaPassword` varchar(100) NOT NULL,
  `KsIndirizzi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `utenti`
--

INSERT INTO `utenti` (`idUtente`, `Nome`, `Cognome`, `Email`, `Telefono`, `PasswordUtente`, `ConfermaPassword`, `KsIndirizzi`) VALUES
(1, 'Luca', 'Cupellaro', 'luca@gmail.com', '2134658795', '$2y$10$pQihEEDizUL/9qZ60AZF5uzUgobBkFZ.CriCi30XtY0SMr.XlM8Li', '$2y$10$Oug7lKN2RnVryN6.kpbCfuPVsOyc/QGWp/ExQq4yU2ealDAyqyWmi', 1);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `annunci`
--
ALTER TABLE `annunci`
  ADD PRIMARY KEY (`idAnnuncio`),
  ADD KEY `KsUtenti` (`KsUtenti`),
  ADD KEY `KsMarca` (`KsMarca`),
  ADD KEY `KsCategoria` (`KsCategoria`);
ALTER TABLE `annunci` ADD FULLTEXT KEY `NomeKite` (`NomeKite`,`Descrizione`);

--
-- Indici per le tabelle `carrello`
--
ALTER TABLE `carrello`
  ADD PRIMARY KEY (`idCarrello`);

--
-- Indici per le tabelle `carrello_annunci`
--
ALTER TABLE `carrello_annunci`
  ADD PRIMARY KEY (`idCarrelloAnnunci`),
  ADD KEY `KsCarrello` (`KsCarrello`),
  ADD KEY `KsAnnuncio` (`KsAnnuncio`);

--
-- Indici per le tabelle `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`idCategorie`);
ALTER TABLE `categorie` ADD FULLTEXT KEY `Tipo` (`Tipo`);

--
-- Indici per le tabelle `citta`
--
ALTER TABLE `citta`
  ADD PRIMARY KEY (`idCitta`);

--
-- Indici per le tabelle `immagini`
--
ALTER TABLE `immagini`
  ADD PRIMARY KEY (`idImmagine`),
  ADD KEY `KsAnnuncio` (`KsAnnuncio`);

--
-- Indici per le tabelle `indirizzi`
--
ALTER TABLE `indirizzi`
  ADD PRIMARY KEY (`idindirizzi`),
  ADD KEY `KsCitta` (`KsCitta`);

--
-- Indici per le tabelle `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`idMarca`);
ALTER TABLE `marca` ADD FULLTEXT KEY `Marca` (`Marca`);

--
-- Indici per le tabelle `utenti`
--
ALTER TABLE `utenti`
  ADD PRIMARY KEY (`idUtente`),
  ADD KEY `KsIndirizzi` (`KsIndirizzi`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `annunci`
--
ALTER TABLE `annunci`
  MODIFY `idAnnuncio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT per la tabella `carrello`
--
ALTER TABLE `carrello`
  MODIFY `idCarrello` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `carrello_annunci`
--
ALTER TABLE `carrello_annunci`
  MODIFY `idCarrelloAnnunci` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `categorie`
--
ALTER TABLE `categorie`
  MODIFY `idCategorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT per la tabella `citta`
--
ALTER TABLE `citta`
  MODIFY `idCitta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT per la tabella `immagini`
--
ALTER TABLE `immagini`
  MODIFY `idImmagine` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT per la tabella `indirizzi`
--
ALTER TABLE `indirizzi`
  MODIFY `idindirizzi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT per la tabella `marca`
--
ALTER TABLE `marca`
  MODIFY `idMarca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT per la tabella `utenti`
--
ALTER TABLE `utenti`
  MODIFY `idUtente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `annunci`
--
ALTER TABLE `annunci`
  ADD CONSTRAINT `annunci_ibfk_1` FOREIGN KEY (`KsUtenti`) REFERENCES `utenti` (`idUtente`),
  ADD CONSTRAINT `annunci_ibfk_2` FOREIGN KEY (`KsMarca`) REFERENCES `marca` (`idMarca`),
  ADD CONSTRAINT `annunci_ibfk_3` FOREIGN KEY (`KsCategoria`) REFERENCES `categorie` (`idCategorie`);

--
-- Limiti per la tabella `carrello_annunci`
--
ALTER TABLE `carrello_annunci`
  ADD CONSTRAINT `carrello_annunci_ibfk_1` FOREIGN KEY (`KsCarrello`) REFERENCES `carrello` (`idCarrello`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `carrello_annunci_ibfk_2` FOREIGN KEY (`KsAnnuncio`) REFERENCES `annunci` (`idAnnuncio`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Limiti per la tabella `immagini`
--
ALTER TABLE `immagini`
  ADD CONSTRAINT `immagini_ibfk_1` FOREIGN KEY (`KsAnnuncio`) REFERENCES `annunci` (`idAnnuncio`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Limiti per la tabella `indirizzi`
--
ALTER TABLE `indirizzi`
  ADD CONSTRAINT `indirizzi_ibfk_1` FOREIGN KEY (`KsCitta`) REFERENCES `citta` (`idCitta`);

--
-- Limiti per la tabella `utenti`
--
ALTER TABLE `utenti`
  ADD CONSTRAINT `utenti_ibfk_1` FOREIGN KEY (`KsIndirizzi`) REFERENCES `indirizzi` (`idindirizzi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
