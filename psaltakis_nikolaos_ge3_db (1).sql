-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Εξυπηρετητής: 127.0.0.1:3306
-- Χρόνος δημιουργίας: 16 Φεβ 2023 στις 21:23:22
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
  `data_anakoinosis` date NOT NULL,
  `title_anakoinosis` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `text_anakoinosis` varchar(10000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_anakoinosis`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Άδειασμα δεδομένων του πίνακα `anakoinosis`
--

INSERT INTO `anakoinosis` (`id_anakoinosis`, `data_anakoinosis`, `title_anakoinosis`, `text_anakoinosis`) VALUES
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
  `name_dimos` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_kentrou`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(8, 'Αθηναίων');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `kausimo`
--

DROP TABLE IF EXISTS `kausimo`;
CREATE TABLE IF NOT EXISTS `kausimo` (
  `id_kausimou` int NOT NULL AUTO_INCREMENT,
  `tipos_kausimou` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
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
  `title_menu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `controller_menu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
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
  `onomasia_nomou` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_nomou`)
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
  `price_prosforas` int NOT NULL,
  PRIMARY KEY (`id_prosforas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `eponimia_user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `afm_user` int NOT NULL,
  `address_user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `dimos_user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nomos_user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `eidos_kausimou` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email_user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `role_user` int NOT NULL,
  `username_user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password_user` varchar(10000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Άδειασμα δεδομένων του πίνακα `user`
--

INSERT INTO `user` (`id_user`, `eponimia_user`, `afm_user`, `address_user`, `dimos_user`, `nomos_user`, `eidos_kausimou`, `email_user`, `role_user`, `username_user`, `password_user`) VALUES
(1, 'Νικόλαος Ψαλτάκης', 999999999, '-', '-', '-', '-', 'std080926@ac.eap.gr', 2, 'std080926', '$2y$10$0Y9zxKpHsyfd4UNIgJ3flecKhRGLSTGcmpVRCPL6Dp6.YNGFSccay'),
(2, 'etairia1', 888888880, 'Διευθηνση 1', 'Αθηναίων', 'Αττικής', 'Αμόλυβδη βενζίνη 95', 'etairia1@gmail.com', 1, 'etairia1', '$2y$10$WPpoKhjhoPc9jbzDTkUHsu.BTaaC2KHhnTCJYApXCHfIrh0VOyEnG'),
(3, 'etairia2', 888888881, 'Διευθηνση 2', 'Αθηναίων', 'Αττικής', 'Αμόλυβδη βενζίνη 98', 'etairia2gmail.com', 1, 'etairia2', '$2y$10$r5Zf31TICaL33rPelcQYdeJAQS6egz12fdxtaQtWHdilVz8OZsNZ6');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
