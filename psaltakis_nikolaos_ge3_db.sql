-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Εξυπηρετητής: 127.0.0.1:3306
-- Χρόνος δημιουργίας: 08 Μαρ 2023 στις 09:15:36
-- Έκδοση διακομιστή: 8.0.31
-- Έκδοση PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `psaltakis_nikolaos_ge3_db`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `anakoinosis`
--

DROP TABLE IF EXISTS `anakoinosis`;
CREATE TABLE IF NOT EXISTS `anakoinosis` (
  `id_anakoinosis` int NOT NULL AUTO_INCREMENT,
  `date_anakoinosis` date NOT NULL,
  `title_anakoinosis` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `text_anakoinosis` varchar(10000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_anakoinosis`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Άδειασμα δεδομένων του πίνακα `anakoinosis`
--

INSERT INTO `anakoinosis` (`id_anakoinosis`, `date_anakoinosis`, `title_anakoinosis`, `text_anakoinosis`) VALUES
(1, '2022-12-22', 'Αλλαγές στα συστήματα εισροών το 2023\r\n', 'Lorem ipsum dolor sit amet, dolore propriae pertinax mel ut. Ut sit legendos inimicus, quaestio corrumpit an ius. Ex qui movet congue, et sed impedit civibus adipisci, pri ut prima nostro vituperatoribus. Et sea commune fabellas. Duo nostro quaeque repudiare ad. An nisl graece eum.\n\nPraesent voluptatibus ei mei. Vel id omnes labores disputationi, dolore nominati philosophia ex vim. Quo possim labitur ne, ne mediocrem adolescens sea. Id has consequat contentiones, no nec illum nemore. Eirmod regione adolescens nec ex, sale oblique eu usu, congue nonumy cu sea. His noluisse invidunt tractatos ad, graeci vocent perpetua ex mei.\n\nMel nostro civibus delectus ex, vidisse detraxit partiendo eam ne. Justo oporteat ei vim, diceret vivendo in vim. Vis dolorem accusamus abhorreant at. Harum populo scriptorem ei has, ut prima aperiam albucius has. Natum utinam nostrum pri no, cetero aperiam no est. In ius nullam propriae constituto, duis eirmod ceteros te pro. Te eam graeci deleniti platonem, ut sed reque fabulas.\n\nPrima nostrum deserunt te per. Ad mucius rationibus pro, sit ne ancillae probatus imperdiet, ut qui dicant utroque intellegat. In has virtute nonumes. Tincidunt appellantur ei vis.'),
(2, '2022-10-17', 'Η Get-Gas ανακοινώνει τη συνεργασία με 2 νέες αλυσίδες πρατηρίων', 'Dico dicam labitur usu et, ad definiebas philosophia sea. Illum solet consequat pro at. Id nec recusabo tincidunt, ad nec brute impetus integre, impetus labores detraxit id mei. Cu augue virtute appellantur nam, at sea essent mollis temporibus. Mea ancillae copiosae in, cu ius aeque homero verear.\n\nEum lucilius pericula no. Ea inani patrioque eum, ius eu affert decore consequuntur. Per etiam equidem menandri ei, tota delicatissimi ut vim. Commodo deseruisse ei eos, usu unum fabellas an, sale offendit pro ne. Cu falli legere pri, in duo nisl liberavisse. In pri impedit atomorum. Eu suscipit forensibus interpretaris pro, duo ipsum virtute ad.\n\nNatum repudiare ea eos, eos eu ceteros instructior, vim at essent detraxit pericula. Dolor oratio voluptatum et sea, eu vix pericula laboramus. Vix ad legere altera molestiae, vix no dico eirmod. Quo in inani assentior. His ad nibh graece pericula. Adhuc verear graecis ei pri.\n\nEa probo voluptatum duo. Altera aliquip liberavisse ex eos, cum veri recteque ea. Eos vocent admodum ea, vel corpora verterem convenire te. Eam labore dolorum salutatus ei, an sit labore eripuit.'),
(3, '2022-09-02', 'Ανακοίνωση για το επίδομα του πετρελαίου θέρμανσης', 'Sed mundi primis scripta at, cu facer aperiri argumentum eos. Eos ea mundi viderer, at mel paulo accusam contentiones. Nam consul perpetua cu, eu nam sale populo labitur, nec ea possit phaedrum recusabo. Eum ut sale nemore percipit, pri ei nisl vitae adipiscing. Ne erat nominavi vim, unum harum eum ea. Duo ad sanctus blandit. Mel porro regione insolens ad.\n\nNe corpora delicata vulputate per, vim commune mentitum at. Ei mediocrem sapientem vis, ad sonet semper legendos sed. Quo zril propriae eu. Malis imperdiet ad pri, an has error veniam laboramus.\n\nQuo ex possim labores dissentias, quo placerat repudiandae ut, ei eum putent imperdiet. Ius id soleat praesent imperdiet, est ex sint maiorum. In dicunt feugiat nominati sed, vis in virtute invenire. Ut soleat recteque consetetur nam, quo id eloquentiam suscipiantur. Graece altera an eam.');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `dimos`
--

DROP TABLE IF EXISTS `dimos`;
CREATE TABLE IF NOT EXISTS `dimos` (
  `id_kentrou` int NOT NULL AUTO_INCREMENT,
  `name_dimos` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_kentrou`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Άδειασμα δεδομένων του πίνακα `dimos`
--

INSERT INTO `dimos` (`id_kentrou`, `name_dimos`) VALUES
(1, 'Αγρινίου'),
(2, 'Ακτίου - Βόνιτσας'),
(3, 'Αμφιλοχίας'),
(4, 'Θέρμου'),
(5, 'Ιεράς Πόλης Μεσολογγίου'),
(6, 'Ναυπακτίας'),
(7, 'Ξηρομέρου'),
(8, 'Αθηναίων'),
(9, 'Ταύρος'),
(10, 'Γέρακας'),
(11, 'Χαλκίδα'),
(12, 'Πάτρα');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `kausimo`
--

DROP TABLE IF EXISTS `kausimo`;
CREATE TABLE IF NOT EXISTS `kausimo` (
  `id_kausimou` int NOT NULL AUTO_INCREMENT,
  `tipos_kausimou` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_kausimou`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Άδειασμα δεδομένων του πίνακα `kausimo`
--

INSERT INTO `kausimo` (`id_kausimou`, `tipos_kausimou`) VALUES
(1, 'Αμόλυβδη βενζίνη 95'),
(2, 'Αμόλυβδη βενζίνη 98'),
(3, 'Αμόλυβδη βενζίνη 100'),
(4, 'Πετρέλαιο κίνησης'),
(5, 'Πετρέλαιο θέρμανσης');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `id_menu` int NOT NULL AUTO_INCREMENT,
  `title_menu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `controller_menu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `menu_access` int NOT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Άδειασμα δεδομένων του πίνακα `menu`
--

INSERT INTO `menu` (`id_menu`, `title_menu`, `controller_menu`, `menu_access`) VALUES
(1, 'Αρχική', 'home', 1),
(2, 'Αναζήτηση', 'search', 1),
(3, 'Καταχώρηση', 'submit', 2),
(4, 'Ανακοινώσεις', 'announcements', 1);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `nomos`
--

DROP TABLE IF EXISTS `nomos`;
CREATE TABLE IF NOT EXISTS `nomos` (
  `id_nomou` int NOT NULL AUTO_INCREMENT,
  `onomasia_nomou` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_nomou`),
  KEY `onomasia_nomou` (`onomasia_nomou`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Άδειασμα δεδομένων του πίνακα `nomos`
--

INSERT INTO `nomos` (`id_nomou`, `onomasia_nomou`) VALUES
(1, 'Αιτωλοακαρνανίας'),
(2, 'Αργολίδας'),
(3, 'Αρκαδίας'),
(4, 'Άρτας'),
(5, 'Αττικής'),
(6, 'Αχαΐας'),
(7, 'Βοιωτίας'),
(8, 'Γρεβενών'),
(9, 'Δράμας'),
(10, 'Δωδεκανήσου'),
(11, 'Έβρου'),
(12, 'Ευβοίας'),
(13, 'Ευρυτανίας'),
(14, 'Ζακύνθου'),
(15, 'Ηλείας'),
(16, 'Ημαθίας'),
(17, 'Ηρακλείου'),
(18, 'Θεσπρωτίας'),
(19, 'Θεσσαλονίκης'),
(20, 'Ιωαννίνων'),
(21, 'Καβάλας'),
(22, 'Καρδίτσας'),
(23, 'Καστοριάς'),
(24, 'Κέρκυρας'),
(25, 'Κεφαλληνίας'),
(26, 'Κιλκίς'),
(27, 'Κοζάνης'),
(28, 'Κορινθίας'),
(29, 'Κυκλάδων'),
(30, 'Λακωνίας'),
(31, 'Λάρισας'),
(32, 'Λασιθίου'),
(33, 'Λέσβου'),
(34, 'Λευκάδας'),
(35, 'Μαγνησίας'),
(36, 'Μεσσηνίας'),
(37, 'Ξάνθης'),
(38, 'Πέλλας'),
(39, 'Πιερίας'),
(40, 'Πρέβεζας'),
(41, 'Ρεθύμνης'),
(42, 'Ροδόπης'),
(43, 'Σάμου'),
(44, 'Σερρών'),
(45, 'Τρικάλων'),
(46, 'Φθιώτιδας'),
(47, 'Φλώρινας'),
(48, 'Φωκίδας'),
(49, 'Χαλκιδικής'),
(50, 'Χανίων'),
(51, 'Χίου');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `prosfores`
--

DROP TABLE IF EXISTS `prosfores`;
CREATE TABLE IF NOT EXISTS `prosfores` (
  `id_prosforas` int NOT NULL AUTO_INCREMENT,
  `id_user` int NOT NULL,
  `id_kausimou` int NOT NULL,
  `ending_date_prosforas` date NOT NULL,
  `price_prosforas` decimal(4,2) NOT NULL,
  PRIMARY KEY (`id_prosforas`),
  KEY `id_user` (`id_user`),
  KEY `id_kausimou` (`id_kausimou`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Άδειασμα δεδομένων του πίνακα `prosfores`
--

INSERT INTO `prosfores` (`id_prosforas`, `id_user`, `id_kausimou`, `ending_date_prosforas`, `price_prosforas`) VALUES
(1, 3, 1, '2023-04-06', '1.75'),
(2, 4, 2, '2023-04-06', '1.97'),
(3, 5, 3, '2023-04-06', '1.99'),
(4, 6, 4, '2023-04-06', '1.57'),
(5, 7, 5, '2023-04-06', '1.75'),
(6, 8, 1, '2023-04-12', '1.67'),
(7, 9, 2, '2023-04-13', '1.85'),
(8, 10, 3, '2023-04-13', '1.97'),
(9, 11, 4, '2023-04-13', '1.65'),
(10, 12, 5, '2023-04-20', '1.74');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `eponimia_user` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `afm_user` int NOT NULL,
  `address_user` varchar(2000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `dimos_user` int NOT NULL,
  `nomos_user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `eidos_kausimou` int NOT NULL,
  `email_user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `role_user` int NOT NULL,
  `username_user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password_user` varchar(10000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  KEY `nomos_user` (`nomos_user`),
  KEY `dimos_user` (`dimos_user`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Άδειασμα δεδομένων του πίνακα `user`
--

INSERT INTO `user` (`id_user`, `eponimia_user`, `afm_user`, `address_user`, `dimos_user`, `nomos_user`, `eidos_kausimou`, `email_user`, `role_user`, `username_user`, `password_user`) VALUES
(2, 'Διαχειρηστής', 999999999, 'Διευθηνση 0', 9, 'Αθηναίων', 1, 'std080926@ac.eap.gr', 2, 'std080926', '$2y$10$oeAHzEnmXHcjJ9H7BmBI3.J.ek8DW7IR8wA/QYiUDP5JVzFZTJgGS'),
(3, 'BP Τάυρος', 888888881, 'Λεωφόρος Πειραιώς 240, Ταύρος, 177 78', 9, 'Αττικής', 1, 'bp_tavros@gmail.com', 1, 'bp_tavros', '$2y$10$SGhMC/zqng6DOeJC8CXrIerOq0MwA9q9TMKWAC0RUl/Pv0WDVYqUW'),
(4, 'Shell Ταύρος', 888888882, 'Πειραιώς 187, Ταύρος Αττικής', 9, 'Αττικής', 2, 'shell_tauros@gmail.com', 1, 'shell_tauros', '$2y$10$qhJvvqloms6UEEvRsW9VoOTA939T1MSPVhjPpg.F/NehNyVulYSYy'),
(5, 'REVOIL Ταύρος', 888888883, 'Λεωφόρος Πειραιώς 198, Ταύρος, 177 78', 9, 'Αττικής', 3, 'revoil_tavros@gmail.com', 1, 'revoil_tavros', '$2y$10$X4FpT3UUPoFwxEgBvOF7E.SadvfN5zfFNwMatHKW3RKMYAA9qFDXa'),
(6, 'AVIN Χαλκίδα', 888888884, 'Ορέστη Μακρή 7, Χαλκίδα 34100', 11, 'Ευβοίας', 4, 'avin_xalkida@gmail.com', 1, 'avin_xalkida', '$2y$10$p5MKi15Bz8B.WG8HlgmbeOcE4Z5to9Abqe57B8eSipJdZEvxhYI2G'),
(7, 'Shell Πάτρας', 888888885, 'Ν.Ε.Ο. Πατρών - Αθηνών 18, 264 41', 12, 'Αχαΐας', 5, 'shell_patras@gmail.com', 1, 'shell_patras', '$2y$10$hu4EMafeymw.txuI/ARIiOG90Ytr8ONpENhWU1Ly40jE.jVEtASOq'),
(8, 'Avin Πατρας', 888888886, 'Αμερικής 44, 26442', 12, 'Αχαΐας', 1, 'avin_patras@gmail.com', 1, 'avin_patras', '$2y$10$vwpZU.9LzaSr1tMZTY6s9uScgLsceAGb1EO8J1IkPDDNqsK1CxRlO'),
(9, 'ETEKA Πάτρας', 888888887, 'Γλαύκου 58, 26500', 12, 'Αχαΐας', 2, 'eteka_patras@gmail.com', 1, 'eteka_patras', '$2y$10$Tvqxvd9A.DkuOA/EyB5KhuNichsEf2iNIWJVxW74UgVie0tO47ePK'),
(10, 'SHELL - ΕΡΜΗΣ ΑΕΜΕΕ', 888888888, 'Ακτή Δυμαίων 108, Πάτρα, 26333', 12, 'Αχαΐας', 3, 'shell_ermis@gmail.com', 1, 'shell_ermis', '$2y$10$wPtYsE9Dt1ubo8ALPHYNd.bo8d04KVw9lfXFRi9z5aCB5Wa2eOWqu'),
(11, 'AVIN - ΣΤΑΪΚΟΣ ΓΕΩΡΓΙΟΣ', 888888889, 'Αμερικής 44, Πάτρα - Αγυιά, 26441', 12, 'Αχαΐας', 4, 'avin_staikos@gmail.com', 1, 'avin_staikos', '$2y$10$kvesQK/trZD.HNEXtzJVku5TuY.FnY29y.Oua56LUCQ0ttOIQfNJe'),
(12, 'ΕΤΕΚΑ (Λιβάνης Αντώνιος Β.)', 888888890, 'Ελύτη Οδυσσέα 12, Πάτρα, 26333', 12, 'Αχαΐας', 5, 'eteka_staikos@gmail.com', 1, 'eteka_staikos_konstantinos', '$2y$10$UmMrSxy69HtNrsdowz5JLOAPO9OdsSugbD46Pw7Ry5jRnV9MkQRhi');

--
-- Περιορισμοί για άχρηστους πίνακες
--

--
-- Περιορισμοί για πίνακα `kausimo`
--
ALTER TABLE `kausimo`
  ADD CONSTRAINT `kausimo_ibfk_1` FOREIGN KEY (`id_kausimou`) REFERENCES `prosfores` (`id_kausimou`) ON DELETE CASCADE;

--
-- Περιορισμοί για πίνακα `prosfores`
--
ALTER TABLE `prosfores`
  ADD CONSTRAINT `prosfores_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE;

--
-- Περιορισμοί για πίνακα `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`nomos_user`) REFERENCES `nomos` (`onomasia_nomou`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`dimos_user`) REFERENCES `dimos` (`id_kentrou`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
