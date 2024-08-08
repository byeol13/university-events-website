-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2024 at 01:45 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `polisgather_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(50) DEFAULT NULL,
  `imageUrl` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `date`, `time`, `imageUrl`) VALUES
(24, 'UNPROTECTED AREAS: A documentary film by Ola Mitre', '2024-05-07', '10:00 AM', 'allEvents_img/event7.png'),
(48, 'WORKSHOP: The intersection of fashion and architecture', '2024-05-11', '9:00 AM', 'allEvents_img/event24.png'),
(49, 'Space 01 Lectures ', '2024-05-12', '10:00 AM - 12:30 PM', 'allEvents_img/event23.png'),
(50, 'DHURONI GJAK SHPËTONI JETË', '2024-05-13', '9:00 AM - 2:00 PM', 'allEvents_img/event29.png'),
(51, 'EXHIBITION: “Tangible Forecast\"', '2024-05-21', '5:30 - 7:30 PM', 'allEvents_img/event20.png'),
(52, 'OPEN LECTURE: Junction Tirana 2024', '2024-05-23', '9:00 AM', 'allEvents_img/event25.png'),
(53, 'Sfidat dhe mundësitë e menaxhimit të të dhënave në epokën dixhitale', '2024-05-28', '9:00 AM - 12:00 PM', 'allEvents_img/event31.png'),
(54, 'Regional Leadership 2024', '2024-05-31', '11:00 AM', 'allEvents_img/event21.png'),
(56, 'OPEN DAY OF PHD PROGRAM', '2024-05-31', '1:00 PM', 'allEvents_img/event28.png'),
(57, 'Ekrani i Artit', '2024-06-05', '-', 'allEvents_img/event22.png');

-- --------------------------------------------------------

--
-- Table structure for table `event_details`
--

CREATE TABLE `event_details` (
  `id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `description` text DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event_details`
--

INSERT INTO `event_details` (`id`, `event_id`, `description`, `location`) VALUES
(4, 24, 'Fakulteti I Planifikimit, Mjedisit dhe Menaxhimit Urban (FPMMU) në Universitetin POLIS ka kënaqësinë që t’ju ftojë në shfaqjen e dokumentarit mbi \\\"Zonat e Mbrojtura\\\" prodhuar nga Ola Mitre, një \\\"betejë\\\" vizuale që përfaqëson jo vetëm bukurinë e këtyre vendeve, por edhe thelbin e rëndësisë së tyre.', 'Aula A5, Universiteti Polis'),
(21, 48, '🟢🟢🟢 Departamenti Art-Dizajn pranë Universitetit POLIS organizon #Workshopin_e_Talentit për të gjithë maturantët e talentuar në fushat e artit 👨‍🎨👩‍💻 me temë: “The Intersection of Fashion and Architecture” nga pedagogët Vjola Ziu & Sara Trebicka\r\n\r\nRegjistrohu në këtë link\r\n👉 https://docs.google.com/forms/d/1Pvz-GDem7xD0OylhEKanLjxZgSOjdKMBTPGcwwOo-xM/edit\r\nPjesëmarrja e lirë !\r\n\r\n💬 Përshkrim\r\n\r\nFashion Design bën pjesë në një nga fushat e dizajnit e cila merret me krijimin e veshjeve dhe aksesorëve. Të jesh një fashion designer do të thotë të keni një profesion që ju lejon të çlironi kreativitetin dhe t\'i vini në jetë idetë tuaja. Fashion Architecture, e njohur gjithashtu si \"Të Veshim Arkitekturën\" , është një term që përdoret për të përshkruar bashkimin e arkitekturës dhe modës. Që kur arkitektura u bë një subjekt për kritikë dhe vlerësim, fashion architecture ka qenë një tendencë për të eksperimentuar nga shumë njerëz.\r\n\r\nTë gjithë pjesëmarrësit do të pajisen me çertifikatë pjesëmarrjeje dhe do të ketë Bursa për Maturantët (viti 3 shkolla e mesme)\r\n', 'Aula C6, Polis University'),
(22, 49, 'MENTOR\r\nNana Radenković (Belgrade, Serbia) \r\nPosition: Co-founder / Education Manager at Nova Iskra\r\n\r\n12 May\r\n“Pitching Techniques”\r\n\r\nIntroducing Nana Radenković, our next mentor for .S.E.A.M. Space 01. With her experience in creative entrepreneurship and education, Nana will guide participants through the journey from prototype to product and pitching techniques.\r\n\r\nNana is the co-founder of Nova Iskra, the first creative hub in the Balkans, and a key initiator of the European Creative Hubs Network (ECHN). She specializes in designing and implementing mentoring programs, workshops, and training aimed at transforming businesses and fostering innovation. As a member of the Advisory Board of the Creative Mentorship program, Nana supports startups and teams across various programs and initiatives.\r\n\r\nWith a passion for design thinking and a commitment to fostering collaboration and innovation, Nana brings a wealth of knowledge and expertise to the .S.E.A.M. Space 01 workshop series.\r\n\r\nThis project is implemented by Destil Creative Hub in cooperation with Polis University and Polytechnic University of Tirana and curated by Venera Mustafa, with the support of EU4Innovation.', '-'),
(23, 50, '🔴🔴🔴 BASHKOJUNI FUSHATES SË KRYQIT TË KUQ \"DHURONI GJAK, SHPËTONI JETË\" NË DATAT 13-17 MAJ, NË UNIVERSITETIN POLIS, NGA ORA 09:00 DERI NË ORËN 14:00.\r\n\r\nAshtu si çdo vit tjeter, Universiteti POLIS mbështet nismën e Kryqit të Kuq për dhurimin e gjakut.\r\n\r\nNë Shqipëri 600 femijë janë të prekur nga sëmundja e talasemisë. Këta femijë marrin një herë në 2 javë gjak. Ky gjak nuk sigurohet nga prindërit, pasi prindërit janë bartës të talasemisë. Perveç të semurëve me talasemi ka të sëmurë me tumore, leuçemi etj, kështu që nevojat për gjak janë mjaft emergjente.\r\n\r\nNdaj për t’i ardhur në ndihmë të gjithë njerëzve që kanë nevojë për gjak, veçanërisht fëmijëve talesemik, ju bejmë apel të kontribuoni në shpëtimin e një jete.\r\n\r\nJu ftojmë të bëheni pjesë e kësaj fushate.', 'Polis University'),
(24, 51, 'Exhibition: “Tangible Forecast” showcasing the work of .S.E.A.M. participants.\r\n\r\nJoin us in celebrating the conclusion of the first edition of the S.E.A.M. Open Call Program. Over the past four months, we\'ve embarked on an incredible journey, transforming creative ideas into tangible realities.\r\nWith an array of exciting activities prepared for the event, we are delighted to have Thibaut De Ruyter delivering the closing talk. This marks the end of our program but also a celebratory beginning for future editions of the S.E.A.M. Open Call Program.\r\n\r\nJoin us for an evening of great encounters, powered by Destil Bistro. We look forward to seeing and celebrating with all of you.\r\n\r\nThis project is implemented by Destil Creative Hub in cooperation with Polis University and Polytechnic University of Tirana and curated by Venera Mustafa, with the support of EU4Innovation.', '-'),
(25, 52, '🟣🟣🟣 Open Lecture @ Universiteti Polis\r\n\r\nDitën e enjte më 23 Maj, ora 09:00, Aula A3, Departamenti i Shkencave Kompjuterike organizon leksionin e hapur \"JUNCTION TIRANA 2024\" ku të ftuara do të jenë Enxhia Sala dhe Boralda Minaj.\r\nLeksioni do të zhvillohet me studentët e Shkencave Kompjuterike.', 'Aula A3, Polis University'),
(26, 53, '🔵🔵🔵 Kemi kënaqësinë t’Ju ftojmë në Forumin “Sfidat dhe mundësitë e menaxhimit të të dhënave në epokën dixhitale” të organizuar nga Universiteti POLIS (FKZH, Shkenca Kompjuterike & FPMMU, Administrim Biznesi)               \r\n\r\nNë Forumin “Sfidat dhe mundësitë e menaxhimit të të dhënave në epokën dixhitale”, përfaqësues të biznesit dhe botës akademike do të bashkohen në një diskutim mbi sfidat e menaxhimit të dhënave dhe përdorimin korrekt të tyre. Diskutimi mes aktorëve vjen si një përpjekje të vazhdueshme për të gjetur praktika, procedura dhe standarde që synojnë forcimin e sistemeve, aktiviteteve të kontrollit dhe qartësimit të përgjegjësive në biznes.\r\n\r\nNë një kohë të mbipopulluar me informacion, ku zbulimi i prirjeve, risive tregtare, identifikimi i mundësive dhe sfidave në treg është në qendër të vëmendjes, aftësia për të nxjerrë rezultate të përdorshme dhe të vlefshme nga të dhënat është domosdoshmëri. Përdorimi teknologjisë së informacionit në analizën dhe paraqitjen e dhënave (business intelligence) mundëson vendimmarrje efikase.\r\n\r\nRritja e rasteve të cenimit të të dhënave, kërcënimet kibernetike si dhe mbrojtja e të dhënave që sot konsiderohen si asete strategjike për organizatat, nuk ka qenë kurrë më të rëndësishme. Në këtë kuadër, forumi sjell në vëmendje rëndësinë e identifikimit të rreziqeve potenciale, vlerësimin të ndikimit dhe zbatimin e strategjive për ti zvogëluar apo transferuar ato.', 'MAD CENTER, Polis University'),
(27, 54, '🎉 Join us in celebrating Mr. Dritan Abazović, the first Albanian Prime Minister of Montenegro, as he receives the \"Regional Leadership 2024\" Award!\r\n\r\n🤝 His dedication to fostering cooperation and positive change in the region is truly inspiring. The ceremony will be held at POLIS University in Tirana on May 31st.\r\n\r\n🇦🇱\r\n🎉 Bashkohuni me ne për të festuar z. Dritan Abazović, Kryeministri i parë shqiptar i Malit të Zi, teksa merr çmimin \"Lidershipi Rajonal 2024\"!\r\n\r\n🤝 Përkushtimi i tij për të nxitur bashkëpunimin dhe ndryshimet pozitive në rajon është vërtet frymëzues. Ceremonia do të mbahet në Universitetin POLIS në Tiranë më 31 maj.', 'Polis University'),
(29, 56, 'Ju bejmë me dije se në oren 13:00 eshte parashikuar takimi informativ ne lidhje me aplikimet e reja per te filluar studimet PhD ne Universitetin Polis dhe Universitetin Ferrara Itali - Diplome e Dyfishte (Double Degree) ne Arkitekture dhe Planifikim Urban, dhe fusha te peraferta me to.\r\n\r\nNe linkun e meposhtem mund te lidheni per te degjuar prezantimin online.\r\nhttps://meet.google.com/cbo-qfbx-gfa\r\n\r\nZyra e Koordinimit te Programit Doktoral\r\nUPOLIS - UNIFE 🇦🇱🇮🇹', 'Biblioteka, Universiteti Polis'),
(30, 57, '🟡🟡🟡 Instituti Italian i Kulturës në bashkëpunim me Ambasadën Italiane në Tiranë ka kënaqësinë të mbështesë Festivalin “Ekrani i Artit” - Edicioni VI\r\n\r\nFestivali do të mbahet në Shkodër nga data 5 deri më 9 qershor 2024, me shfaqje filmash nga regjisorë të mirënjohur, dokumentarë, si dhe me takime e performanca muzikore. Personalitete të shumta nga bota e artit shqiptar, italian dhe ndërkombëtar do të marrin pjesë në festivalin Ekrani i Artit, duke u bërë pjesë e prezantimeve, takimeve dhe debateve mbi tendencat e reja në video art.\r\n', 'Shkodër');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `event` varchar(255) NOT NULL,
  `submission_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `event_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `name`, `email`, `tel`, `event`, `submission_date`, `event_id`) VALUES
(35, 'Matthew Hasrama', 'matthew@gmail.com', '+8210555745', 'Regional Leadership 2024', '2024-06-04 10:49:29', 54),
(36, 'Noah Steele', 'noah@gmail.com', '+4452169731', 'Regional Leadership 2024', '2024-06-04 10:51:39', 54),
(37, 'Holden Wang', 'holden@gmail.com', '+3543763468', 'Space 01 Lectures ', '2024-06-04 10:55:27', 49),
(38, 'Aubree White', 'aubree@gmail.com', '+8274943754', 'Space 01 Lectures ', '2024-06-04 10:56:16', 49),
(39, 'Zara Lindsey', 'zara@gmail.com', '+42183325491', 'Space 01 Lectures ', '2024-06-04 10:56:47', 49),
(40, 'Leslie Garcia', 'leslie@gmail.com', '+12756901020', 'Space 01 Lectures ', '2024-06-04 10:57:26', 49),
(41, 'Giovanni Henson', 'giovanni@gmail.com', '+33335162334', 'WORKSHOP: The intersection of fashion and architecture', '2024-06-04 10:58:34', 48),
(43, 'Monica Booker', 'monica@gmail.com', '+64243854635', 'EXHIBITION: “Tangible Forecast', '2024-06-04 11:11:56', 51),
(44, 'Sierra Young', 'sierra@gmail.com', '+3210590418', 'UNPROTECTED AREAS: A documentary film by Ola Mitre', '2024-06-04 11:12:57', 24),
(45, 'Cailyn Harper', 'cailyn@gmail.com', '+3644400149', 'OPEN DAY OF PHD PROGRAM', '2024-06-04 11:13:52', 56),
(46, 'Frances Henderson', 'frances@gmail.com', '+38971936593', 'OPEN DAY OF PHD PROGRAM', '2024-06-04 11:14:36', 56),
(47, 'Alaina Miles', 'alaina@gmail.com', '+438607698796', 'EXHIBITION: “Tangible Forecast', '2024-06-04 11:17:09', 51),
(48, 'Alaina Miles', 'alaina@gmail.com', '+438607698796', 'Space 01 Lectures ', '2024-06-04 13:01:13', 49),
(49, 'Alaina Miles', 'alaina@gmail.com', '+438607698796', 'Regional Leadership 2024', '2024-06-04 14:37:26', 54),
(50, 'Alaina Miles', 'alaina@gmail.com', '+438607698796', 'UNPROTECTED AREAS: A documentary film by Ola Mitre', '2024-06-05 08:15:36', 24),
(51, 'Alaina Miles', 'alaina@gmail.com', '+438607698796', 'Space 01 Lectures ', '2024-06-05 08:26:55', 49);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `user_type` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `user_type`, `password`) VALUES
(1, 'test', 'test@test.com', 'admin', '098f6bcd4621d373cade4e832627b4f6'),
(2, 'test1', 'test1@test.com', 'user', '5a105e8b9d40e1329780d62ea2265d8a'),
(3, 'f', 'siizinorman@gmail.com', 'user', '8277e0910d750195b448797616e091ad'),
(4, 'ttt', 'ttt@gmail.com', 'user', '9990775155c3518a0d7917f7780b24aa'),
(5, 'xxx', 'x@gmail.com', 'user', 'f561aaf6ef0bf14d4208bb46a4ccb3ad'),
(6, 'matthew', 'matthew@gmail.com', 'user', 'e6a5ba0842a531163425d66839569a68'),
(7, 'admin', 'admin@admin.com', 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_details`
--
ALTER TABLE `event_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `event_details_ibfk_1` (`event_id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_event_id` (`event_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `event_details`
--
ALTER TABLE `event_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `event_details`
--
ALTER TABLE `event_details`
  ADD CONSTRAINT `event_details_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `fk_event_id` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
