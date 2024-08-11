-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2024 at 04:53 AM
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
-- Database: `fields`
--

-- --------------------------------------------------------

--
-- Table structure for table `agricultural_types`
--

CREATE TABLE `agricultural_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `agriculturalTypes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agricultural_types`
--

INSERT INTO `agricultural_types` (`id`, `agriculturalTypes`) VALUES
(1, 'Fertilizer'),
(2, 'Pesticides'),
(3, 'Seeds');

-- --------------------------------------------------------

--
-- Table structure for table `animal_types`
--

CREATE TABLE `animal_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `animalTypes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `animal_types`
--

INSERT INTO `animal_types` (`id`, `animalTypes`) VALUES
(1, 'Carabao'),
(2, 'Cattle'),
(3, 'Chicken'),
(4, 'Duck'),
(5, 'Goat'),
(6, 'Honeybee'),
(7, 'Sheep'),
(8, 'Swine');

-- --------------------------------------------------------

--
-- Table structure for table `association_profiles`
--

CREATE TABLE `association_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `association` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `municipality` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `barangay` varchar(255) NOT NULL,
  `houseNumber` varchar(255) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `zipCode` int(11) NOT NULL,
  `office` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `registrationNumber` varchar(255) NOT NULL,
  `registrationDate` date NOT NULL,
  `expirationDate` date NOT NULL,
  `registrationCertificate` varchar(255) NOT NULL,
  `goodStandingCertificate` varchar(255) NOT NULL,
  `approvedByLaws` varchar(255) NOT NULL,
  `latestAuditedFinancialStatement` varchar(255) NOT NULL,
  `userId` int(11) NOT NULL,
  `cocStatus` varchar(255) DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `attended_trainings`
--

CREATE TABLE `attended_trainings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `trainingsAttended` varchar(255) DEFAULT NULL,
  `trainingConductor` varchar(255) DEFAULT NULL,
  `yearAttended` int(11) DEFAULT NULL,
  `userId` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `barangays`
--

CREATE TABLE `barangays` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `district_id` bigint(20) UNSIGNED NOT NULL,
  `barangay_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `barangays`
--

INSERT INTO `barangays` (`id`, `district_id`, `barangay_name`) VALUES
(1, 1, 'Allangigan Primero'),
(2, 1, 'Allangigan Segundo'),
(3, 1, 'Amguid'),
(4, 1, 'Ayudante'),
(5, 1, 'Bagani Camposanto'),
(6, 1, 'Bagani Gabor'),
(7, 1, 'Bagani Tocgo'),
(8, 1, 'Bagani Ubbog'),
(9, 1, 'Bagar'),
(10, 1, 'Balingaoan'),
(11, 1, 'Bugnay'),
(12, 1, 'Calaoaan'),
(13, 1, 'Calongbuyan'),
(14, 1, 'Caterman'),
(15, 1, 'Cubcubboot'),
(16, 1, 'Darapidap'),
(17, 1, 'Langlangca Primero'),
(18, 1, 'Langlangca Segundo'),
(19, 1, 'Oaig-Daya'),
(20, 1, 'Palacapac'),
(21, 1, 'Paras'),
(22, 1, 'Parioc Primero'),
(23, 1, 'Parioc Segundo'),
(24, 1, 'Patpata Primero'),
(25, 1, 'Patpata Segundo'),
(26, 1, 'Paypayad'),
(27, 1, 'Salvador Primero'),
(28, 1, 'Salvador Segundo'),
(29, 1, 'San Agustin'),
(30, 1, 'San Andres'),
(31, 1, 'San Antonio'),
(32, 1, 'San Isidro'),
(33, 1, 'San Jose'),
(34, 1, 'San Juan'),
(35, 1, 'San Nicolas'),
(36, 1, 'San Pedro'),
(37, 1, 'Santo Tomas'),
(38, 1, 'Tablac'),
(39, 1, 'Talogtog'),
(40, 1, 'Tamurong Primero'),
(41, 1, 'Tamurong Segundo'),
(42, 1, 'Villarica'),
(43, 2, 'Ayusan Norte'),
(44, 2, 'Ayusan Sur'),
(45, 2, 'Barangay I'),
(46, 2, 'Barangay II'),
(47, 2, 'Barangay III'),
(48, 2, 'Barangay IV'),
(49, 2, 'Barangay V'),
(50, 2, 'Barangay VI'),
(51, 2, 'Barraca'),
(52, 2, 'Beddeng Laud'),
(53, 2, 'Beddeng Daya'),
(54, 2, 'Bongtolan'),
(55, 2, 'Bulala'),
(56, 2, 'Cabalangegan'),
(57, 2, 'Cabaroan Daya'),
(58, 2, 'Cabaroan Laud'),
(59, 2, 'Camangaan'),
(60, 2, 'Capangpangan'),
(61, 2, 'Mindoro'),
(62, 2, 'Nagsangalan'),
(63, 2, 'Pantay Daya'),
(64, 2, 'Pantay Fatima'),
(65, 2, 'Pantay Laud'),
(66, 2, 'Paoa'),
(67, 2, 'Paratong'),
(68, 2, 'Pong-ol'),
(69, 2, 'Purok-a-bassit'),
(70, 2, 'Purok-a-dackel'),
(71, 2, 'Raois'),
(72, 2, 'Rugsuanan'),
(73, 2, 'Salindeg'),
(74, 2, 'San Jose'),
(75, 2, 'San Julian Norte'),
(76, 2, 'San Julian Sur'),
(77, 2, 'San Pedro'),
(78, 2, 'Tamag'),
(79, 2, 'Barangay VII'),
(80, 2, 'Barangay VIII'),
(81, 2, 'Barangay IX'),
(82, 3, 'Alilem Daya'),
(83, 3, 'Amilongan'),
(84, 3, 'Anaao'),
(85, 3, 'Apang'),
(86, 3, 'Apaya'),
(87, 3, 'Batbato'),
(88, 3, 'Daddaay'),
(89, 3, 'Dalawa'),
(90, 3, 'Kiat'),
(91, 4, 'Bagbagotot'),
(92, 4, 'Banbanaal'),
(93, 4, 'Bisangol'),
(94, 4, 'Cadanglaan'),
(95, 4, 'Casilagan Norte'),
(96, 4, 'Casilagan Sur'),
(97, 4, 'Elefante'),
(98, 4, 'Guardia'),
(99, 4, 'Lintic'),
(100, 4, 'Lopez'),
(101, 4, 'Montero'),
(102, 4, 'Naguimba'),
(103, 4, 'Pila'),
(104, 4, 'Poblacion'),
(105, 5, 'Aggay'),
(106, 5, 'An-annam'),
(107, 5, 'Balaleng'),
(108, 5, 'Banaoang'),
(109, 5, 'Bulag'),
(110, 5, 'Buquig'),
(111, 5, 'Cabalanggan'),
(112, 5, 'Cabaroan'),
(113, 5, 'Cabusligan'),
(114, 5, 'Capangdanan'),
(115, 5, 'Guimod'),
(116, 5, 'Lingsat'),
(117, 5, 'Malingeb'),
(118, 5, 'Mira'),
(119, 5, 'Naguiddayan'),
(120, 5, 'Ora'),
(121, 5, 'Paing'),
(122, 5, 'Puspus'),
(123, 5, 'Quimmarayan'),
(124, 5, 'Sagneb'),
(125, 5, 'Sagpat'),
(126, 5, 'San Mariano'),
(127, 5, 'San Isidro'),
(128, 5, 'San Julian'),
(129, 5, 'Sinabaan'),
(130, 5, 'Taguiporo'),
(131, 5, 'Taleb'),
(132, 5, 'Tay-ac'),
(133, 5, 'Barangay 1'),
(134, 5, 'Barangay 2'),
(135, 5, 'Barangay 3'),
(136, 5, 'Barangay 4'),
(137, 5, 'Barangay 5'),
(138, 5, 'Barangay 6'),
(139, 6, 'Ambugat'),
(140, 6, 'Balugang'),
(141, 6, 'Bangbangar'),
(142, 6, 'Bessang'),
(143, 6, 'Cabcaburao'),
(144, 6, 'Cadacad'),
(145, 6, 'Callitong'),
(146, 6, 'Dayanki'),
(147, 6, 'Lesseb'),
(148, 6, 'Lubing'),
(149, 6, 'Lucaban'),
(150, 6, 'Luna'),
(151, 6, 'Macaoayan'),
(152, 6, 'Mambug'),
(153, 6, 'Manaboc'),
(154, 6, 'Mapanit'),
(155, 6, 'Poblacion Sur'),
(156, 6, 'Nagpanaoan'),
(157, 6, 'Dirdirig'),
(158, 6, 'Paduros'),
(159, 6, 'Patac'),
(160, 6, 'Poblacion Norte'),
(161, 6, 'Sabangan Pinggan'),
(162, 6, 'Subadi Norte'),
(163, 6, 'Subadi Sur'),
(164, 6, 'Taliao'),
(165, 7, 'Alinaay'),
(166, 7, 'Aragan'),
(167, 7, 'Arnap'),
(168, 7, 'Baclig'),
(169, 7, 'Bato'),
(170, 7, 'Bonifacio'),
(171, 7, 'Bungro'),
(172, 7, 'Cacadiran'),
(173, 7, 'Caellayan'),
(174, 7, 'Carusipan'),
(175, 7, 'Catucdaan'),
(176, 7, 'Cuancabal'),
(177, 7, 'Cuantacla'),
(178, 7, 'Daclapan'),
(179, 7, 'Dardarat'),
(180, 7, 'Lipit'),
(181, 7, 'Maradodon'),
(182, 7, 'Margaay'),
(183, 7, 'Nagsantaan'),
(184, 7, 'Nagsincaoan'),
(185, 7, 'Namruangan'),
(186, 7, 'Pila'),
(187, 7, 'Pug-os'),
(188, 7, 'Quezon'),
(189, 7, 'Reppaac'),
(190, 7, 'Rizal'),
(191, 7, 'Sabang'),
(192, 7, 'Sagayaden'),
(193, 7, 'Salapasap'),
(194, 7, 'Salomague'),
(195, 7, 'Sisim'),
(196, 7, 'Turod'),
(197, 7, 'Turod-Patac'),
(198, 8, 'Anonang Mayor'),
(199, 8, 'Anonang Menor'),
(200, 8, 'Baggoc'),
(201, 8, 'Callaguip'),
(202, 8, 'Caparacadan'),
(203, 8, 'Fuerte'),
(204, 8, 'Manangat'),
(205, 8, 'Naguilian'),
(206, 8, 'Nansuagao'),
(207, 8, 'Pandan'),
(208, 8, 'Pantay-Quitiquit'),
(209, 8, 'Don Dimas Querubin'),
(210, 8, 'Puro'),
(211, 8, 'Pantay Tamurong'),
(212, 8, 'Villamar'),
(213, 8, 'Don Alejandro Quirolgico'),
(214, 8, 'Don Lorenzo Querubin'),
(215, 9, 'Aluling'),
(216, 9, 'Comillas North'),
(217, 9, 'Comillas South'),
(218, 9, 'Concepcion'),
(219, 9, 'Dinwede East'),
(220, 9, 'Dinwede West'),
(221, 9, 'Libang'),
(222, 9, 'Pilipil'),
(223, 9, 'Remedios'),
(224, 9, 'Rosario'),
(225, 9, 'San Juan'),
(226, 9, 'San Luis'),
(227, 9, 'Malaya'),
(228, 10, 'Abaya'),
(229, 10, 'Baracbac'),
(230, 10, 'Bidbiday'),
(231, 10, 'Bitong'),
(232, 10, 'Borobor'),
(233, 10, 'Calimugtong'),
(234, 10, 'Calongbuyan'),
(235, 10, 'Calumbaya'),
(236, 10, 'Daldagan'),
(237, 10, 'Kilang'),
(238, 10, 'Legaspi'),
(239, 10, 'Mabayag'),
(240, 10, 'Matanubong'),
(241, 10, 'Mckinley'),
(242, 10, 'Nagsingcaoan'),
(243, 10, 'Oaig-Daya'),
(244, 10, 'Pagangpang'),
(245, 10, 'Patac'),
(246, 10, 'Poblacion'),
(247, 10, 'Rubio'),
(248, 10, 'Sabangan-Bato'),
(249, 10, 'Sacaang'),
(250, 10, 'San Vicente'),
(251, 10, 'Sapang'),
(252, 11, 'Alfonso'),
(253, 11, 'Bussot'),
(254, 11, 'Concepcion'),
(255, 11, 'Dapdappig'),
(256, 11, 'Matue-Butarag'),
(257, 11, 'Poblacion Norte'),
(258, 11, 'Poblacion Sur'),
(259, 12, 'Banucal'),
(260, 12, 'Bequi-Walin'),
(261, 12, 'Bugui'),
(262, 12, 'Calungbuyan'),
(263, 12, 'Carcarabasa'),
(264, 12, 'Labut'),
(265, 12, 'Poblacion Norte'),
(266, 12, 'Poblacion Sur'),
(267, 12, 'San Vicente'),
(268, 12, 'Suysuyan'),
(269, 12, 'Tay-ac'),
(270, 13, 'Alangan'),
(271, 13, 'Bacar'),
(272, 13, 'Barbarit'),
(273, 13, 'Bungro'),
(274, 13, 'Cabaroan'),
(275, 13, 'Cadanglaan'),
(276, 13, 'Caraisan'),
(277, 13, 'Dacutan'),
(278, 13, 'Labut'),
(279, 13, 'Maas-asin'),
(280, 13, 'Macatcatud'),
(281, 13, 'Namalpalan'),
(282, 13, 'Manzante'),
(283, 13, 'Maratudo'),
(284, 13, 'Miramar'),
(285, 13, 'Napo'),
(286, 13, 'Pagsanaan Norte'),
(287, 13, 'Pagsanaan Sur'),
(288, 13, 'Panay Norte'),
(289, 13, 'Panay Sur'),
(290, 13, 'Patong'),
(291, 13, 'Puro'),
(292, 13, 'San Basilio'),
(293, 13, 'San Clemente'),
(294, 13, 'San Julian'),
(295, 13, 'San Lucas'),
(296, 13, 'San Ramon'),
(297, 13, 'San Vicente'),
(298, 13, 'Santa Monica'),
(299, 13, 'Sarsaracat'),
(300, 14, 'Balaweg'),
(301, 14, 'Bandril'),
(302, 14, 'Bantugo'),
(303, 14, 'Cadacad'),
(304, 14, 'Casilagan'),
(305, 14, 'Cosocos'),
(306, 14, 'Lapting'),
(307, 14, 'Mapisi'),
(308, 14, 'Mission'),
(309, 14, 'Poblacion East'),
(310, 14, 'Poblacion West'),
(311, 14, 'Taleb'),
(312, 15, 'Abuor'),
(313, 15, 'Ambulogan'),
(314, 15, 'Aquib'),
(315, 15, 'Banglayan'),
(316, 15, 'Bulanos'),
(317, 15, 'Cadacad'),
(318, 15, 'Cagayungan'),
(319, 15, 'Camarao'),
(320, 15, 'Casilagan'),
(321, 15, 'Codoog'),
(322, 15, 'Dasay'),
(323, 15, 'Dinalaoan'),
(324, 15, 'Estancia'),
(325, 15, 'Lanipao'),
(326, 15, 'Lungog'),
(327, 15, 'Margaay'),
(328, 15, 'Marozo'),
(329, 15, 'Naguneg'),
(330, 15, 'Orence'),
(331, 15, 'Pantoc'),
(332, 15, 'Paratong'),
(333, 15, 'Parparia'),
(334, 15, 'Quinarayan'),
(335, 15, 'Rivadavia'),
(336, 15, 'San Antonio'),
(337, 15, 'San Jose'),
(338, 15, 'San Pablo'),
(339, 15, 'San Pedro'),
(340, 15, 'Santa Lucia'),
(341, 15, 'Sarmingan'),
(342, 15, 'Sucoc'),
(343, 15, 'Sulvec'),
(344, 15, 'Turod'),
(345, 15, 'Bantay Abot'),
(346, 16, 'Banoen'),
(347, 16, 'Cayus'),
(348, 16, 'Patungcaleo'),
(349, 16, 'Malideg'),
(350, 16, 'Namitpit'),
(351, 16, 'Patiacan'),
(352, 16, 'Legleg'),
(353, 16, 'Suagayan'),
(354, 16, 'Lamag'),
(355, 17, 'Atabay'),
(356, 17, 'Calangcuasan'),
(357, 17, 'Balidbid'),
(358, 17, 'Baluarte'),
(359, 17, 'Baybayading'),
(360, 17, 'Boguibog'),
(361, 17, 'Bulala-Leguey'),
(362, 17, 'Kaliwakiw'),
(363, 17, 'Culiong'),
(364, 17, 'Dinaratan'),
(365, 17, 'Kinmarin'),
(366, 17, 'Lucbuban'),
(367, 17, 'Madarang'),
(368, 17, 'Maligcong'),
(369, 17, 'Pias'),
(370, 17, 'Poblacion Norte'),
(371, 17, 'Poblacion Sur'),
(372, 17, 'San Gaspar'),
(373, 17, 'San Tiburcio'),
(374, 17, 'Sorioan'),
(375, 17, 'Ubbog'),
(376, 18, 'Cabaroan'),
(377, 18, 'Kalumsing'),
(378, 18, 'Lancuas'),
(379, 18, 'Matibuey'),
(380, 18, 'Paltoc'),
(381, 18, 'Sibsibbu'),
(382, 18, 'Tiagan'),
(383, 18, 'San Miliano'),
(384, 19, 'Ansad'),
(385, 19, 'Apatot'),
(386, 19, 'Bateria'),
(387, 19, 'Cabaroan'),
(388, 19, 'Cappa-cappa'),
(389, 19, 'Poblacion'),
(390, 19, 'San Nicolas'),
(391, 19, 'San Pablo'),
(392, 19, 'San Rafael'),
(393, 19, 'Villa Quirino'),
(394, 20, 'Arnap'),
(395, 20, 'Bahet'),
(396, 20, 'Belen'),
(397, 20, 'Bungro'),
(398, 20, 'Busiing Sur'),
(399, 20, 'Busiing Norte'),
(400, 20, 'Dongalo'),
(401, 20, 'Gongogong'),
(402, 20, 'Iboy'),
(403, 20, 'Otol-Patac'),
(404, 20, 'Poblacion East'),
(405, 20, 'Poblacion West'),
(406, 20, 'Kinamantirisan'),
(407, 20, 'Sagneb'),
(408, 20, 'Sagsagat'),
(409, 21, 'Bacsil'),
(410, 21, 'Baliw'),
(411, 21, 'Bannuar'),
(412, 21, 'Barbar'),
(413, 21, 'Cabanglotan'),
(414, 21, 'Cacandongan'),
(415, 21, 'Camanggaan'),
(416, 21, 'Camindoroan'),
(417, 21, 'Caronoan'),
(418, 21, 'Darao'),
(419, 21, 'Dardarat'),
(420, 21, 'Guimod Norte'),
(421, 21, 'Guimod Sur'),
(422, 21, 'Immayos Norte'),
(423, 21, 'Immayos Sur'),
(424, 21, 'Labnig'),
(425, 21, 'Lapting'),
(426, 21, 'Lira'),
(427, 21, 'Malamin'),
(428, 21, 'Muraya'),
(429, 21, 'Nagsabaran'),
(430, 21, 'Nagsupotan'),
(431, 21, 'Pandayan'),
(432, 21, 'Refaro'),
(433, 21, 'Resurreccion'),
(434, 21, 'Sabangan'),
(435, 21, 'San Isidro'),
(436, 21, 'Saoang'),
(437, 21, 'Solotsolot'),
(438, 21, 'Sunggiam'),
(439, 21, 'Surngit'),
(440, 21, 'Asilang'),
(441, 22, 'Bantaoay'),
(442, 22, 'Bayubay Norte'),
(443, 22, 'Bayubay Sur'),
(444, 22, 'Lubong'),
(445, 22, 'Poblacion'),
(446, 22, 'Pudoc'),
(447, 22, 'San Sebastian'),
(448, 23, 'Ampandula'),
(449, 23, 'Banaoang'),
(450, 23, 'Basug'),
(451, 23, 'Bucalag'),
(452, 23, 'Cabangaran'),
(453, 23, 'Calungboyan'),
(454, 23, 'Casiber'),
(455, 23, 'Dammay'),
(456, 23, 'Labut Norte'),
(457, 23, 'Labut Sur'),
(458, 23, 'Mabilbila Sur'),
(459, 23, 'Mabilbila Norte'),
(460, 23, 'Magsaysay District'),
(461, 23, 'Manueva'),
(462, 23, 'Marcos'),
(463, 23, 'Nagpanaoan'),
(464, 23, 'Namalangan'),
(465, 23, 'Oribi'),
(466, 23, 'Pasungol'),
(467, 23, 'Quezon'),
(468, 23, 'Quirino'),
(469, 23, 'Rancho'),
(470, 23, 'Rizal'),
(471, 23, 'Sacuyya Norte'),
(472, 23, 'Sacuyya Sur'),
(473, 23, 'Tabucolan'),
(474, 24, 'Cabaroan'),
(475, 24, 'Cabittaogan'),
(476, 24, 'Cabuloan'),
(477, 24, 'Pangada'),
(478, 24, 'Paratong'),
(479, 24, 'Poblacion'),
(480, 24, 'Sinabaan'),
(481, 24, 'Subec'),
(482, 24, 'Tamorong'),
(483, 25, 'Amarao'),
(484, 25, 'Babayoan'),
(485, 25, 'Bacsayan'),
(486, 25, 'Banay'),
(487, 25, 'Bayugao Este'),
(488, 25, 'Bayugao Oeste'),
(489, 25, 'Besalan'),
(490, 25, 'Bugbuga'),
(491, 25, 'Calaoaan'),
(492, 25, 'Camanggaan'),
(493, 25, 'Candalican'),
(494, 25, 'Capariaan'),
(495, 25, 'Casilagan'),
(496, 25, 'Coscosnong'),
(497, 25, 'Daligan'),
(498, 25, 'Dili'),
(499, 25, 'Gabor Norte'),
(500, 25, 'Gabor Sur'),
(501, 25, 'Lalong'),
(502, 25, 'Lantag'),
(503, 25, 'Las-ud'),
(504, 25, 'Mambog'),
(505, 25, 'Mantanas'),
(506, 25, 'Nagtengnga'),
(507, 25, 'Padaoil'),
(508, 25, 'Paratong'),
(509, 25, 'Pattiqui'),
(510, 25, 'Pidpid'),
(511, 25, 'Pilar'),
(512, 25, 'Pinipin'),
(513, 25, 'Poblacion Este'),
(514, 25, 'Poblacion Norte'),
(515, 25, 'Poblacion Weste'),
(516, 25, 'Poblacion Sur'),
(517, 25, 'Quinfermin'),
(518, 25, 'Quinsoriano'),
(519, 25, 'Sagat'),
(520, 25, 'San Antonio'),
(521, 25, 'San Jose'),
(522, 25, 'San Pedro'),
(523, 25, 'Saoat'),
(524, 25, 'Sevilla'),
(525, 25, 'Sidaoen'),
(526, 25, 'Suyo'),
(527, 25, 'Tampugo'),
(528, 25, 'Turod'),
(529, 25, 'Villa Garcia'),
(530, 25, 'Villa Hermosa'),
(531, 25, 'Villa Laurencia'),
(532, 26, 'Alincaoeg'),
(533, 26, 'Angkileng'),
(534, 26, 'Arangin'),
(535, 26, 'Ayusan'),
(536, 26, 'Banbanaba'),
(537, 26, 'Bao-as'),
(538, 26, 'Barangobong'),
(539, 26, 'Buliclic'),
(540, 26, 'Burgos'),
(541, 26, 'Cabaritan'),
(542, 26, 'Catayagan'),
(543, 26, 'Conconig East'),
(544, 26, 'Conconig West'),
(545, 26, 'Damacuag'),
(546, 26, 'Lubong'),
(547, 26, 'Luba'),
(548, 26, 'Nagrebcan'),
(549, 26, 'Nagtablaan'),
(550, 26, 'Namatican'),
(551, 26, 'Nangalisan'),
(552, 26, 'Palali Norte'),
(553, 26, 'Palali Sur'),
(554, 26, 'Paoc Norte'),
(555, 26, 'Paoc Sur'),
(556, 26, 'Paratong'),
(557, 26, 'Pila East'),
(558, 26, 'Pila West'),
(559, 26, 'Quinabalayangan'),
(560, 26, 'Ronda'),
(561, 26, 'Sabuanan'),
(562, 26, 'San Juan'),
(563, 26, 'San Pedro'),
(564, 26, 'Sapang'),
(565, 26, 'Suagayan'),
(566, 26, 'Vical'),
(567, 26, 'Bani'),
(568, 27, 'Ag-agrao'),
(569, 27, 'Ampuagan'),
(570, 27, 'Baballasioan'),
(571, 27, 'Baliw Daya'),
(572, 27, 'Baliw Laud'),
(573, 27, 'Bia-o'),
(574, 27, 'Butir'),
(575, 27, 'Cabaroan'),
(576, 27, 'Danuman East'),
(577, 27, 'Danuman West'),
(578, 27, 'Dunglayan'),
(579, 27, 'Gusing'),
(580, 27, 'Langaoan'),
(581, 27, 'Laslasong Norte'),
(582, 27, 'Laslasong Sur'),
(583, 27, 'Laslasong West'),
(584, 27, 'Lesseb'),
(585, 27, 'Lingsat'),
(586, 27, 'Lubong'),
(587, 27, 'Maynganay Norte'),
(588, 27, 'Maynganay Sur'),
(589, 27, 'Nagsayaoan'),
(590, 27, 'Nagtupacan'),
(591, 27, 'Nalvo'),
(592, 27, 'Pacang'),
(593, 27, 'Penned'),
(594, 27, 'Poblacion Norte'),
(595, 27, 'Poblacion Sur'),
(596, 27, 'Silag'),
(597, 27, 'Sumagui'),
(598, 27, 'Suso'),
(599, 27, 'Tangaoan'),
(600, 27, 'Tinaan'),
(601, 28, 'Al-aludig'),
(602, 28, 'Ambucao'),
(603, 28, 'San Jose'),
(604, 28, 'Baybayabas'),
(605, 28, 'Bigbiga'),
(606, 28, 'Bulbulala'),
(607, 28, 'Busel-busel'),
(608, 28, 'Butol'),
(609, 28, 'Caburao'),
(610, 28, 'Dan-ar'),
(611, 28, 'Gabao'),
(612, 28, 'Guinabang'),
(613, 28, 'Imus'),
(614, 28, 'Lang-ayan'),
(615, 28, 'Mambug'),
(616, 28, 'Nalasin'),
(617, 28, 'Olo-olo Norte'),
(618, 28, 'Olo-olo Sur'),
(619, 28, 'Poblacion Norte'),
(620, 28, 'Poblacion Sur'),
(621, 28, 'Sabangan'),
(622, 28, 'Salincub'),
(623, 28, 'San Roque'),
(624, 28, 'Ubbog'),
(625, 29, 'Binalayangan'),
(626, 29, 'Binongan'),
(627, 29, 'Borobor'),
(628, 29, 'Cabaritan'),
(629, 29, 'Cabigbigaan'),
(630, 29, 'Calautit'),
(631, 29, 'Calay-ab'),
(632, 29, 'Camestizoan'),
(633, 29, 'Casili'),
(634, 29, 'Flora'),
(635, 29, 'Lagatit'),
(636, 29, 'Laoingen'),
(637, 29, 'Lussoc'),
(638, 29, 'Nalasin'),
(639, 29, 'Nagbettedan'),
(640, 29, 'Naglaoa-an'),
(641, 29, 'Nambaran'),
(642, 29, 'Nanerman'),
(643, 29, 'Napo'),
(644, 29, 'Padu Chico'),
(645, 29, 'Padu Grande'),
(646, 29, 'Paguraper'),
(647, 29, 'Panay'),
(648, 29, 'Pangpangdan'),
(649, 29, 'Parada'),
(650, 29, 'Paras'),
(651, 29, 'Poblacion'),
(652, 29, 'Puerta Real'),
(653, 29, 'Pussuac'),
(654, 29, 'Quimmarayan'),
(655, 29, 'San Pablo'),
(656, 29, 'Santa Cruz'),
(657, 29, 'Santo Tomas'),
(658, 29, 'Sived'),
(659, 29, 'Vacunero'),
(660, 29, 'Suksukit'),
(661, 30, 'Abaccan'),
(662, 30, 'Mabileg'),
(663, 30, 'Matallucod'),
(664, 30, 'Poblacion'),
(665, 30, 'San Elias'),
(666, 30, 'San Ramon'),
(667, 30, 'Santo Rosario'),
(668, 31, 'Aguing'),
(669, 31, 'Ballaigui'),
(670, 31, 'Baliw'),
(671, 31, 'Baracbac'),
(672, 31, 'Barikir'),
(673, 31, 'Battog'),
(674, 31, 'Binacud'),
(675, 31, 'Cabangtalan'),
(676, 31, 'Cabarambanan'),
(677, 31, 'Cabulalaan'),
(678, 31, 'Cadanglaan'),
(679, 31, 'Calingayan'),
(680, 31, 'Curtin'),
(681, 31, 'Dadalaquiten Norte'),
(682, 31, 'Dadalaquiten Sur'),
(683, 31, 'Duyayyat'),
(684, 31, 'Jordan'),
(685, 31, 'Calanutian'),
(686, 31, 'Katipunan'),
(687, 31, 'Macabiag'),
(688, 31, 'Magsaysay'),
(689, 31, 'Marnay'),
(690, 31, 'Masadag'),
(691, 31, 'Nagcullooban'),
(692, 31, 'Nagbalioartian'),
(693, 31, 'Nagongburan'),
(694, 31, 'Namnama'),
(695, 31, 'Pacis'),
(696, 31, 'Paratong'),
(697, 31, 'Dean Leopoldo Yabes'),
(698, 31, 'Purag'),
(699, 31, 'Quibit-quibit'),
(700, 31, 'Quimmallogong'),
(701, 31, 'Rang-ay'),
(702, 31, 'Ricudo'),
(703, 31, 'Sabañgan'),
(704, 31, 'Sallacapo'),
(705, 31, 'Santa Cruz'),
(706, 31, 'Sapriana'),
(707, 31, 'Tapao'),
(708, 31, 'Teppeng'),
(709, 31, 'Tubigay'),
(710, 31, 'Ubbog'),
(711, 31, 'Zapat'),
(712, 32, 'Banga'),
(713, 32, 'Caoayan'),
(714, 32, 'Licungan'),
(715, 32, 'Danac'),
(716, 32, 'Pangotan'),
(717, 32, 'Balbalayang'),
(718, 33, 'Baringcucurong'),
(719, 33, 'Cabugao'),
(720, 33, 'Man-atong'),
(721, 33, 'Patoc-ao'),
(722, 33, 'Poblacion'),
(723, 33, 'Suyo Proper'),
(724, 33, 'Urzadan'),
(725, 33, 'Uso'),
(726, 34, 'Ag-aguman'),
(727, 34, 'Ambalayat'),
(728, 34, 'Baracbac'),
(729, 34, 'Bario-an'),
(730, 34, 'Baritao'),
(731, 34, 'Borono'),
(732, 34, 'Becques'),
(733, 34, 'Bimmanga'),
(734, 34, 'Bio'),
(735, 34, 'Bitalag'),
(736, 34, 'Bucao East'),
(737, 34, 'Bucao West'),
(738, 34, 'Cabaroan'),
(739, 34, 'Cabugbugan'),
(740, 34, 'Cabulanglangan'),
(741, 34, 'Dacutan'),
(742, 34, 'Dardarat'),
(743, 34, 'Del Pilar'),
(744, 34, 'Farola'),
(745, 34, 'Gabur'),
(746, 34, 'Garitan'),
(747, 34, 'Jardin'),
(748, 34, 'Lacong'),
(749, 34, 'Lantag'),
(750, 34, 'Las-ud'),
(751, 34, 'Libtong'),
(752, 34, 'Lubnac'),
(753, 34, 'Magsaysay'),
(754, 34, 'Malacañang'),
(755, 34, 'Pacac'),
(756, 34, 'Pallogan'),
(757, 34, 'Pudoc East'),
(758, 34, 'Pudoc West'),
(759, 34, 'Pula'),
(760, 34, 'Quirino'),
(761, 34, 'Ranget'),
(762, 34, 'Rizal'),
(763, 34, 'Salvacion'),
(764, 34, 'San Miguel'),
(765, 34, 'Sawat'),
(766, 34, 'Tallaoen'),
(767, 34, 'Tampugo'),
(768, 34, 'Tarangotong'),
(769, 35, 'Aglipay'),
(770, 35, 'Baay'),
(771, 35, 'Baligat'),
(772, 35, 'Bungon'),
(773, 35, 'Baoa East'),
(774, 35, 'Baoa West'),
(775, 35, 'Barani'),
(776, 35, 'Ben-agan'),
(777, 35, 'Bil-loca'),
(778, 35, 'Biningan'),
(779, 35, 'Callaguip'),
(780, 35, 'Camandingan'),
(781, 35, 'Camguidan'),
(782, 35, 'Cangrunaan'),
(783, 35, 'Capacuan'),
(784, 35, 'Caunayan'),
(785, 35, 'Valdez Pob.'),
(786, 35, 'Colo'),
(787, 35, 'Pimentel'),
(788, 35, 'Dariwdiw'),
(789, 35, 'Acosta Pob.'),
(790, 35, 'Ablan Pob.'),
(791, 35, 'Lacub'),
(792, 35, 'Mabaleng'),
(793, 35, 'Magnuang'),
(794, 35, 'Maipalig'),
(795, 35, 'Nagbacalan'),
(796, 35, 'Naguirangan'),
(797, 35, 'Ricarte Pob.'),
(798, 35, 'Palongpong'),
(799, 35, 'Palpalicong'),
(800, 35, 'Parangopong'),
(801, 35, 'Payao'),
(802, 35, 'Quiling Norte'),
(803, 35, 'Quiling Sur'),
(804, 35, 'Quiom'),
(805, 35, 'Rayuray'),
(806, 35, 'San Julian'),
(807, 35, 'San Mateo'),
(808, 35, 'San Pedro'),
(809, 35, 'Suabit'),
(810, 35, 'Sumader'),
(811, 35, 'Tabug'),
(812, 36, 'Bgy. No. 42, Apaya'),
(813, 36, 'Bgy. No. 36, Araniw'),
(814, 36, 'Bgy. No. 56-A, Bacsil North'),
(815, 36, 'Bgy. No. 56-B, Bacsil South'),
(816, 36, 'Bgy. No. 41, Balacad'),
(817, 36, 'Bgy. No. 40, Balatong'),
(818, 36, 'Bgy. No. 55-A, Barit-Pandan'),
(819, 36, 'Bgy. No. 47, Bengcag'),
(820, 36, 'Bgy. No. 50, Buttong'),
(821, 36, 'Bgy. No. 60-A, Caaoacan'),
(822, 36, 'Bry. No. 48-A, Cabungaan North'),
(823, 36, 'Bgy. No. 48-B, Cabungaan South'),
(824, 36, 'Bgy. No. 37, Calayab'),
(825, 36, 'Bgy. No. 54-B, Camangaan'),
(826, 36, 'Bgy. No. 58, Casili'),
(827, 36, 'Bgy. No. 61, Cataban'),
(828, 36, 'Bgy. No. 43, Cavit'),
(829, 36, 'Bgy. No. 49-A, Darayday'),
(830, 36, 'Bgy. No. 59-B, Dibua North'),
(831, 36, 'Bgy. No. 59-A, Dibua South'),
(832, 36, 'Bgy. No. 34-B, Gabu Norte East'),
(833, 36, 'Bgy. No. 34-A, Gabu Norte West'),
(834, 36, 'Bgy. No. 35, Gabu Sur'),
(835, 36, 'Bgy. No. 32-C La Paz East'),
(836, 36, 'Bgy. No. 33-B, La Paz Proper'),
(837, 36, 'Bgy. No. 32-B, La Paz West'),
(838, 36, 'Bgy. No. 54-A, Lagui-Sail'),
(839, 36, 'Bgy. No. 32-A, La Paz East'),
(840, 36, 'Bgy. No. 33-A, La Paz Proper'),
(841, 36, 'Bgy. No. 52-B, Lataag'),
(842, 36, 'Bgy. No. 60-B, Madiladig'),
(843, 36, 'Bgy. No. 38-A, Mangato East'),
(844, 36, 'Bgy. No. 38-B, Mangato West'),
(845, 36, 'Bgy. No. 62-A, Navotas North'),
(846, 36, 'Bgy. No. 62-B, Navotas South'),
(847, 36, 'Bgy. No. 46, Nalbo'),
(848, 36, 'Bgy. No. 51-A, Nangalisan East'),
(849, 36, 'Bgy. No. 51-B, Nangalisan West'),
(850, 36, 'Bgy. No. 24, Nstra. Sra. De Consolacion'),
(851, 36, 'Bgy. No. 7-A, Nstra. Sra. De Natividad'),
(852, 36, 'Bgy. No. 7-B, Nstra. Sra. De Natividad'),
(853, 36, 'Bgy. No. 27, Nstra. Sra. De Soledad'),
(854, 36, 'Bgy. No. 13, Nstra. Sra. De Visitacion'),
(855, 36, 'Bgy. No. 3, Nstra. Sra. Del Rosario'),
(856, 36, 'Bgy. No. 57, Pila'),
(857, 36, 'Bgy. No. 49-B, Raraburan'),
(858, 36, 'Bgy. No. 53, Rioeng'),
(859, 36, 'Bgy. No. 55-B, Salet-Bulangon'),
(860, 36, 'Bgy. No. 6, San Agustin'),
(861, 36, 'Bgy. No. 22, San Andres'),
(862, 36, 'Bgy. No. 28, San Bernardo'),
(863, 36, 'Bgy. No. 17, San Francisco'),
(864, 36, 'Bgy. No. 4, San Guillermo'),
(865, 36, 'Bgy. No. 15, San Guillermo'),
(866, 36, 'Bgy. No. 12, San Isidro'),
(867, 36, 'Bgy. No. 16, San Jacinto'),
(868, 36, 'Bgy. No. 10, San Jose'),
(869, 36, 'Bgy. No. 1, San Lorenzo'),
(870, 36, 'Bgy. No. 26, San Marcelino'),
(871, 36, 'Bgy. No. 52-A, San Mateo'),
(872, 36, 'Bgy. No. 23, San Matias'),
(873, 36, 'Bgy. No. 20, San Miguel'),
(874, 36, 'Bgy. No. 21, San Pedro'),
(875, 36, 'Bgy. No. 5, San Pedro'),
(876, 36, 'Bry. No. 18, San Quirino'),
(877, 36, 'Bgy. No. 8, San Vicente'),
(878, 36, 'Bgy. No. 9, Santa Angela'),
(879, 36, 'Bgy. No. 11, Santa Balbina'),
(880, 36, 'Bgy. No. 25, Santa Cayetana'),
(881, 36, 'Bgy. No. 2, Santa Joaquina'),
(882, 36, 'Bgy. No. 19, Santa Marcela'),
(883, 36, 'Bgy. No. 30-B, Santa Maria'),
(884, 36, 'Bgy. No. 39, Santa Rosa'),
(885, 36, 'Bgy. No. 14, Santo Tomas'),
(886, 36, 'Bgy. No. 29, Santo Tomas'),
(887, 36, 'Bgy. No. 30-A, Suyo'),
(888, 36, 'Bgy. No. 31, Talingaan'),
(889, 36, 'Bgy. No. 45, Tangid'),
(890, 36, 'Bgy. No. 55-C, Vira'),
(891, 36, 'Bgy. No. 44, Zamboanga'),
(892, 37, 'Adams'),
(893, 38, 'Bani'),
(894, 38, 'Buyon'),
(895, 38, 'Cabaruan'),
(896, 38, 'Cabulalaan'),
(897, 38, 'Cabusligan'),
(898, 38, 'Cadaratan'),
(899, 38, 'Calioet-Libong'),
(900, 38, 'Casilian'),
(901, 38, 'Corocor'),
(902, 38, 'Duripes'),
(903, 38, 'Ganagan'),
(904, 38, 'Libtong'),
(905, 38, 'Macupit'),
(906, 38, 'Nambaran'),
(907, 38, 'Natba'),
(908, 38, 'Paninaan'),
(909, 38, 'Pasiocan'),
(910, 38, 'Pasngal'),
(911, 38, 'Pipias'),
(912, 38, 'Pulangi'),
(913, 38, 'Pungto'),
(914, 38, 'San Agustin I'),
(915, 38, 'San Agustin II'),
(916, 38, 'San Andres I'),
(917, 38, 'San Andres II'),
(918, 38, 'San Gabriel I'),
(919, 38, 'San Gabriel II'),
(920, 38, 'San Pedro I'),
(921, 38, 'San Pedro II'),
(922, 38, 'San Roque I'),
(923, 38, 'San Roque II'),
(924, 38, 'San Simon I'),
(925, 38, 'San Simon II'),
(926, 38, 'San Vicente'),
(927, 38, 'Sangil'),
(928, 38, 'Santa Filomena I'),
(929, 38, 'Santa Filomena II'),
(930, 38, 'Santa Rita'),
(931, 38, 'Santo Cristo I'),
(932, 38, 'Santo Cristo II'),
(933, 38, 'Tambidao'),
(934, 38, 'Teppang'),
(935, 38, 'Tubburan'),
(936, 39, 'Alay-Nangbabaan'),
(937, 39, 'Alogoog'),
(938, 39, 'Ar-arusip'),
(939, 39, 'Aring'),
(940, 39, 'Balbaldez'),
(941, 39, 'Bato'),
(942, 39, 'Camanga'),
(943, 39, 'Canaan'),
(944, 39, 'Caraitan'),
(945, 39, 'Gabut Norte'),
(946, 39, 'Gabut Sur'),
(947, 39, 'Garreta'),
(948, 39, 'Labut'),
(949, 39, 'Lacuben'),
(950, 39, 'Lubigan'),
(951, 39, 'Mabusag Norte'),
(952, 39, 'Mabusag Sur'),
(953, 39, 'Madupayas'),
(954, 39, 'Morong'),
(955, 39, 'Nagrebcan'),
(956, 39, 'Napu'),
(957, 39, 'La Virgen Milagrosa'),
(958, 39, 'Pagsanahan Norte'),
(959, 39, 'Pagsanahan Sur'),
(960, 39, 'Paltit'),
(961, 39, 'Parang'),
(962, 39, 'Pasuc'),
(963, 39, 'Santa Cruz Norte'),
(964, 39, 'Santa Cruz Sur'),
(965, 39, 'Saud'),
(966, 39, 'Turod'),
(967, 40, 'Abaca'),
(968, 40, 'Bacsil'),
(969, 40, 'Banban'),
(970, 40, 'Baruyen'),
(971, 40, 'Dadaor'),
(972, 40, 'Lanao'),
(973, 40, 'Malasin'),
(974, 40, 'Manayon'),
(975, 40, 'Masikil'),
(976, 40, 'Nagbalagan'),
(977, 40, 'Payac'),
(978, 40, 'San Lorenzo'),
(979, 40, 'Taguiporo'),
(980, 40, 'Utol'),
(981, 41, 'Ablan Sarat'),
(982, 41, 'Agaga'),
(983, 41, 'Bayog'),
(984, 41, 'Bobon'),
(985, 41, 'Buduan'),
(986, 41, 'Nagsurot'),
(987, 41, 'Paayas'),
(988, 41, 'Pagali'),
(989, 41, 'Poblacion'),
(990, 41, 'Saoit'),
(991, 41, 'Tanap'),
(992, 42, 'Angset'),
(993, 42, 'Barbaqueso'),
(994, 42, 'Virbira'),
(995, 43, 'Anggapang Norte'),
(996, 43, 'Anggapang Sur'),
(997, 43, 'Bimmanga'),
(998, 43, 'Cabuusan'),
(999, 43, 'Comcomloong'),
(1000, 43, 'Gaang'),
(1001, 43, 'Lang-ayan-Baramban'),
(1002, 43, 'Lioes'),
(1003, 43, 'Maglaoi Centro'),
(1004, 43, 'Maglaoi Norte'),
(1005, 43, 'Maglaoi Sur'),
(1006, 43, 'Paguludan-Salindeg'),
(1007, 43, 'Pangil'),
(1008, 43, 'Pias Norte'),
(1009, 43, 'Pias Sur'),
(1010, 43, 'Poblacion I'),
(1011, 43, 'Poblacion II'),
(1012, 43, 'Salugan'),
(1013, 43, 'San Simeon'),
(1014, 43, 'Santa Cruz'),
(1015, 43, 'Tapao-Tigue'),
(1016, 43, 'Torre'),
(1017, 43, 'Victoria'),
(1018, 44, 'Albano'),
(1019, 44, 'Bacsil'),
(1020, 44, 'Bagut'),
(1021, 44, 'Parado'),
(1022, 44, 'Baresbes'),
(1023, 44, 'Barong'),
(1024, 44, 'Bungcag'),
(1025, 44, 'Cali'),
(1026, 44, 'Capasan'),
(1027, 44, 'Dancel'),
(1028, 44, 'Foz'),
(1029, 44, 'Guerrero'),
(1030, 44, 'Lanas'),
(1031, 44, 'Lumbad'),
(1032, 44, 'Madamba'),
(1033, 44, 'Mandaloque'),
(1034, 44, 'Medina'),
(1035, 44, 'Ver'),
(1036, 44, 'San Marcelino'),
(1037, 44, 'Puruganan'),
(1038, 44, 'Peralta'),
(1039, 44, 'Root'),
(1040, 44, 'Sagpatan'),
(1041, 44, 'Saludares'),
(1042, 44, 'San Esteban'),
(1043, 44, 'Espiritu'),
(1044, 44, 'Sulquiano'),
(1045, 44, 'San Francisco'),
(1046, 44, 'Suyo'),
(1047, 44, 'San Marcos'),
(1048, 44, 'Elizabeth'),
(1049, 45, 'Cabaritan'),
(1050, 45, 'San Isidro'),
(1051, 45, 'Kalaw'),
(1052, 45, 'Quibel'),
(1053, 46, 'Balioeg'),
(1054, 46, 'Bangsar'),
(1055, 46, 'Barbarangay'),
(1056, 46, 'Bomitog'),
(1057, 46, 'Bugasi'),
(1058, 46, 'Caestebanan'),
(1059, 46, 'Caribquib'),
(1060, 46, 'Catagtaguen'),
(1061, 46, 'Crispina'),
(1062, 46, 'Hilario'),
(1063, 46, 'Imelda'),
(1064, 46, 'Lorenzo'),
(1065, 46, 'Macayepyep'),
(1066, 46, 'Marcos'),
(1067, 46, 'Nagpatayan'),
(1068, 46, 'Valdez'),
(1069, 46, 'Sinamar'),
(1070, 46, 'Tabtabagan'),
(1071, 46, 'Valenciano'),
(1072, 46, 'Binacag'),
(1073, 47, 'Pacifico'),
(1074, 47, 'Imelda'),
(1075, 47, 'Elizabeth'),
(1076, 47, 'Daquioag'),
(1077, 47, 'Escoda'),
(1078, 47, 'Ferdinand'),
(1079, 47, 'Fortuna'),
(1080, 47, 'Lydia'),
(1081, 47, 'Mabuti'),
(1082, 47, 'Valdez'),
(1083, 47, 'Tabucbuc'),
(1084, 47, 'Santiago'),
(1085, 47, 'Cacafean'),
(1086, 48, 'Acnam'),
(1087, 48, 'Barangobong'),
(1088, 48, 'Barikir'),
(1089, 48, 'Bugayong'),
(1090, 48, 'Cabittauran'),
(1091, 48, 'Caray'),
(1092, 48, 'Garnaden'),
(1093, 48, 'Naguillan'),
(1094, 48, 'Poblacion'),
(1095, 48, 'Santo Niño'),
(1096, 48, 'Uguis'),
(1097, 49, 'Aggasi'),
(1098, 49, 'Baduang'),
(1099, 49, 'Balaoi'),
(1100, 49, 'Burayoc'),
(1101, 49, 'Caunayan'),
(1102, 49, 'Dampig'),
(1103, 49, 'Ligaya'),
(1104, 49, 'Pancian'),
(1105, 49, 'Pasaleng'),
(1106, 49, 'Poblacion 1'),
(1107, 49, 'Poblacion 2'),
(1108, 49, 'Saguigui'),
(1109, 49, 'Saud'),
(1110, 49, 'Subec'),
(1111, 49, 'Tarrag'),
(1112, 49, 'Caparispisan'),
(1113, 50, 'Bacsil'),
(1114, 50, 'Cabagoan'),
(1115, 50, 'Cabangaran'),
(1116, 50, 'Callaguip'),
(1117, 50, 'Cayubog'),
(1118, 50, 'Dolores'),
(1119, 50, 'Laoa'),
(1120, 50, 'Masintoc'),
(1121, 50, 'Monte'),
(1122, 50, 'Mumulaan'),
(1123, 50, 'Nagbacalan'),
(1124, 50, 'Nalasin'),
(1125, 50, 'Nanguyudan'),
(1126, 50, 'Oaig-Upay-Abulao'),
(1127, 50, 'Pambaran'),
(1128, 50, 'Pannaratan'),
(1129, 50, 'Paratong'),
(1130, 50, 'Pasil'),
(1131, 50, 'Salbang'),
(1132, 50, 'San Agustin'),
(1133, 50, 'San Blas'),
(1134, 50, 'San Juan'),
(1135, 50, 'San Pedro'),
(1136, 50, 'San Roque'),
(1137, 50, 'Sangladan Pob.'),
(1138, 50, 'Santa Rita'),
(1139, 50, 'Sideg'),
(1140, 50, 'Suba'),
(1141, 50, 'Sungadan'),
(1142, 50, 'Surgui'),
(1143, 50, 'Veronica'),
(1144, 51, 'Batuli'),
(1145, 51, 'Binsang'),
(1146, 51, 'Nalvo'),
(1147, 51, 'Caruan'),
(1148, 51, 'Carusikis'),
(1149, 51, 'Carusipan'),
(1150, 51, 'Dadaeman'),
(1151, 51, 'Darupidip'),
(1152, 51, 'Davila'),
(1153, 51, 'Dilanis'),
(1154, 51, 'Dilavo'),
(1155, 51, 'Estancia'),
(1156, 51, 'Naglicuan'),
(1157, 51, 'Nagsanga'),
(1158, 51, 'Ngabangab'),
(1159, 51, 'Pangil'),
(1160, 51, 'Poblacion 1'),
(1161, 51, 'Poblacion 2'),
(1162, 51, 'Poblacion 3'),
(1163, 51, 'Poblacion 4'),
(1164, 51, 'Pragata'),
(1165, 51, 'Puyupuyan'),
(1166, 51, 'Sulongan'),
(1167, 51, 'Salpad'),
(1168, 51, 'San Juan'),
(1169, 51, 'Santa Catalina'),
(1170, 51, 'Santa Matilde'),
(1171, 51, 'Sapat'),
(1172, 51, 'Sulbec'),
(1173, 51, 'Surong'),
(1174, 51, 'Susugaen'),
(1175, 51, 'Tabungao'),
(1176, 51, 'Tadao'),
(1177, 52, 'Ab-abut'),
(1178, 52, 'Abucay'),
(1179, 52, 'Anao'),
(1180, 52, 'Arua-ay'),
(1181, 52, 'Bimmanga'),
(1182, 52, 'Boyboy'),
(1183, 52, 'Cabaroan'),
(1184, 52, 'Calambeg'),
(1185, 52, 'Callusa'),
(1186, 52, 'Dupitac'),
(1187, 52, 'Estancia'),
(1188, 52, 'Gayamat'),
(1189, 52, 'Lagandit'),
(1190, 52, 'Libnaoan'),
(1191, 52, 'Loing'),
(1192, 52, 'Maab-abaca'),
(1193, 52, 'Mangitayag'),
(1194, 52, 'Maruaya'),
(1195, 52, 'San Antonio'),
(1196, 52, 'Santa Maria'),
(1197, 52, 'Sucsuquen'),
(1198, 52, 'Tangaoan'),
(1199, 52, 'Tonoton'),
(1200, 53, 'Aglipay'),
(1201, 53, 'Apatut-Lubong'),
(1202, 53, 'Badio'),
(1203, 53, 'Barbar'),
(1204, 53, 'Buanga'),
(1205, 53, 'Bulbulala'),
(1206, 53, 'Bungro'),
(1207, 53, 'Cabaroan'),
(1208, 53, 'Capangdanan'),
(1209, 53, 'Dalayap'),
(1210, 53, 'Darat'),
(1211, 53, 'Gulpeng'),
(1212, 53, 'Liliputen'),
(1213, 53, 'Lumbaan-Bicbica'),
(1214, 53, 'Nagtrigoan'),
(1215, 53, 'Pagdilao'),
(1216, 53, 'Pugaoan'),
(1217, 53, 'Puritac'),
(1218, 53, 'Sacritan'),
(1219, 53, 'Salanap'),
(1220, 53, 'Santo Tomas'),
(1221, 53, 'Tartarabang'),
(1222, 53, 'Puzol'),
(1223, 53, 'Upon'),
(1224, 53, 'Valbuena'),
(1225, 54, 'San Francisco'),
(1226, 54, 'San Ildefonso'),
(1227, 54, 'San Agustin'),
(1228, 54, 'San Baltazar'),
(1229, 54, 'San Bartolome'),
(1230, 54, 'San Cayetano'),
(1231, 54, 'San Eugenio'),
(1232, 54, 'San Fernando'),
(1233, 54, 'San Gregorio'),
(1234, 54, 'San Guillermo'),
(1235, 54, 'San Jose'),
(1236, 54, 'San Juan Bautista'),
(1237, 54, 'San Lorenzo'),
(1238, 54, 'San Lucas'),
(1239, 54, 'San Marcos'),
(1240, 54, 'San Miguel'),
(1241, 54, 'San Pablo'),
(1242, 54, 'San Paulo'),
(1243, 54, 'San Pedro'),
(1244, 54, 'San Rufino'),
(1245, 54, 'San Silvestre'),
(1246, 54, 'Santa Asuncion'),
(1247, 54, 'Santa Cecilia'),
(1248, 54, 'Santa Monica'),
(1249, 55, 'San Agustin'),
(1250, 55, 'San Andres'),
(1251, 55, 'San Antonio'),
(1252, 55, 'San Bernabe'),
(1253, 55, 'San Cristobal'),
(1254, 55, 'San Felipe'),
(1255, 55, 'San Francisco'),
(1256, 55, 'San Isidro'),
(1257, 55, 'San Joaquin'),
(1258, 55, 'San Jose'),
(1259, 55, 'San Juan'),
(1260, 55, 'San Leandro'),
(1261, 55, 'San Lorenzo'),
(1262, 55, 'San Manuel'),
(1263, 55, 'San Marcos'),
(1264, 55, 'San Nicolas'),
(1265, 55, 'San Pedro'),
(1266, 55, 'San Roque'),
(1267, 55, 'San Vicente'),
(1268, 55, 'Santa Barbara'),
(1269, 55, 'Santa Magdalena'),
(1270, 55, 'Santa Rosa'),
(1271, 55, 'Santo Santiago'),
(1272, 55, 'Santo Tomas'),
(1273, 56, 'Aguitap'),
(1274, 56, 'Bagbag'),
(1275, 56, 'Bagbago'),
(1276, 56, 'Barcelona'),
(1277, 56, 'Bubuos'),
(1278, 56, 'Capurictan'),
(1279, 56, 'Catangraran'),
(1280, 56, 'Darasdas'),
(1281, 56, 'Juan'),
(1282, 56, 'Laureta'),
(1283, 56, 'Lipay'),
(1284, 56, 'Maananteng'),
(1285, 56, 'Manalpac'),
(1286, 56, 'Mariquet'),
(1287, 56, 'Nagpatpatan'),
(1288, 56, 'Nalasin'),
(1289, 56, 'Puttao'),
(1290, 56, 'San Juan'),
(1291, 56, 'San Julian'),
(1292, 56, 'Santa Ana'),
(1293, 56, 'Santiago'),
(1294, 56, 'Talugtog'),
(1295, 57, 'Abkir'),
(1296, 57, 'Alsem'),
(1297, 57, 'Bago'),
(1298, 57, 'Bulbulala'),
(1299, 57, 'Cabangaran'),
(1300, 57, 'Cabayo'),
(1301, 57, 'Cabisocolan'),
(1302, 57, 'Canaam'),
(1303, 57, 'Columbia'),
(1304, 57, 'Dagupan'),
(1305, 57, 'Pedro F. Alviar'),
(1306, 57, 'Dipilat'),
(1307, 57, 'Esperanza'),
(1308, 57, 'Ester'),
(1309, 57, 'Isic Isic'),
(1310, 57, 'Lubnac'),
(1311, 57, 'Mabanbanag'),
(1312, 57, 'Alejo Malasig'),
(1313, 57, 'Manarang'),
(1314, 57, 'Margaay'),
(1315, 57, 'Namoroc'),
(1316, 57, 'Malampa'),
(1317, 57, 'Parparoroc'),
(1318, 57, 'Parut'),
(1319, 57, 'Salsalamagui'),
(1320, 57, 'San Jose'),
(1321, 57, 'San Nicolas'),
(1322, 57, 'San Pedro'),
(1323, 57, 'San Ramon'),
(1324, 57, 'San Roque'),
(1325, 57, 'Santa Maria'),
(1326, 57, 'Tamdagan'),
(1327, 57, 'Visaya'),
(1328, 58, 'Abut'),
(1329, 58, 'Apaleng'),
(1330, 58, 'Bacsil'),
(1331, 58, 'Bangbangolan'),
(1332, 58, 'Bangcusay'),
(1333, 58, 'Barangay I'),
(1334, 58, 'Barangay II'),
(1335, 58, 'Barangay III'),
(1336, 58, 'Barangay IV'),
(1337, 58, 'Baraoas'),
(1338, 58, 'Bato'),
(1339, 58, 'Biday'),
(1340, 58, 'Birunget'),
(1341, 58, 'Bungro'),
(1342, 58, 'Cabaroan'),
(1343, 58, 'Cabarsican'),
(1344, 58, 'Cadaclan'),
(1345, 58, 'Calabugao'),
(1346, 58, 'Camansi'),
(1347, 58, 'Canaoay'),
(1348, 58, 'Carlatan'),
(1349, 58, 'Catbangen'),
(1350, 58, 'Dallangayan Este'),
(1351, 58, 'Dallangayan Oeste'),
(1352, 58, 'Dalumpinas Este'),
(1353, 58, 'Dalumpinas Oeste'),
(1354, 58, 'Ilocanos Norte'),
(1355, 58, 'Ilocanos Sur'),
(1356, 58, 'Langcuas'),
(1357, 58, 'Lingsat'),
(1358, 58, 'Madayegdeg'),
(1359, 58, 'Mameltac'),
(1360, 58, 'Masicong'),
(1361, 58, 'Nagyubuyuban'),
(1362, 58, 'Namtutan'),
(1363, 58, 'Narra Este'),
(1364, 58, 'Narra Oeste'),
(1365, 58, 'Pacpaco'),
(1366, 58, 'Pagdalagan'),
(1367, 58, 'Pagdaraoan'),
(1368, 58, 'Pagudpud'),
(1369, 58, 'Pao Norte'),
(1370, 58, 'Pao Sur'),
(1371, 58, 'Parian'),
(1372, 58, 'Pias'),
(1373, 58, 'Poro'),
(1374, 58, 'Puspus'),
(1375, 58, 'Sacyud'),
(1376, 58, 'Sagayad'),
(1377, 58, 'San Agustin'),
(1378, 58, 'San Francisco'),
(1379, 58, 'San Vicente'),
(1380, 58, 'Santiago Norte'),
(1381, 58, 'Santiago Sur'),
(1382, 58, 'Saoay'),
(1383, 58, 'Sevilla'),
(1384, 58, 'Siboan-Otong'),
(1385, 58, 'Tanqui'),
(1386, 58, 'Tanquigan'),
(1387, 59, 'Ambitacay'),
(1388, 59, 'Balawarte'),
(1389, 59, 'Capas'),
(1390, 59, 'Consolacion'),
(1391, 59, 'Macalva Central'),
(1392, 59, 'Macalva Norte'),
(1393, 59, 'Macalva Sur'),
(1394, 59, 'Nazareno'),
(1395, 59, 'Purok'),
(1396, 59, 'San Agustin East'),
(1397, 59, 'San Agustin Norte'),
(1398, 59, 'San Agustin Sur'),
(1399, 59, 'San Antonino'),
(1400, 59, 'San Antonio'),
(1401, 59, 'San Francisco'),
(1402, 59, 'San Isidro'),
(1403, 59, 'San Joaquin Norte'),
(1404, 59, 'San Joaquin Sur'),
(1405, 59, 'San Jose Norte'),
(1406, 59, 'San Jose Sur'),
(1407, 59, 'San Juan'),
(1408, 59, 'San Julian Central'),
(1409, 59, 'San Julian East'),
(1410, 59, 'San Julian Norte'),
(1411, 59, 'San Julian West'),
(1412, 59, 'San Manuel Norte'),
(1413, 59, 'San Manuel Sur'),
(1414, 59, 'San Marcos'),
(1415, 59, 'San Miguel'),
(1416, 59, 'San Nicolas Central'),
(1417, 59, 'San Nicolas East'),
(1418, 59, 'San Nicolas Norte'),
(1419, 59, 'San Nicolas West'),
(1420, 59, 'San Nicolas Sur'),
(1421, 59, 'San Pedro'),
(1422, 59, 'San Roque West'),
(1423, 59, 'San Roque East'),
(1424, 59, 'San Vicente Norte'),
(1425, 59, 'San Vicente Sur'),
(1426, 59, 'Santa Ana'),
(1427, 59, 'Santa Barbara'),
(1428, 59, 'Santa Fe'),
(1429, 59, 'Santa Maria'),
(1430, 59, 'Santa Monica'),
(1431, 59, 'Santa Rita'),
(1432, 59, 'Santa Rita East'),
(1433, 59, 'Santa Rita Norte'),
(1434, 59, 'Santa Rita Sur'),
(1435, 59, 'Santa Rita West'),
(1436, 60, 'Alaska'),
(1437, 60, 'Basca'),
(1438, 60, 'Dulao'),
(1439, 60, 'Gallano'),
(1440, 60, 'Macabato'),
(1441, 60, 'Manga'),
(1442, 60, 'Pangao-aoan East'),
(1443, 60, 'Pangao-aoan West'),
(1444, 60, 'Poblacion'),
(1445, 60, 'Samara'),
(1446, 60, 'San Antonio'),
(1447, 60, 'San Benito Norte'),
(1448, 60, 'San Benito Sur'),
(1449, 60, 'San Eugenio'),
(1450, 60, 'San Juan East'),
(1451, 60, 'San Juan West'),
(1452, 60, 'San Simon East'),
(1453, 60, 'San Simon West'),
(1454, 60, 'Santa Cecilia'),
(1455, 60, 'Santa Lucia'),
(1456, 60, 'Santa Rita East'),
(1457, 60, 'Santa Rita West'),
(1458, 60, 'Santo Rosario East'),
(1459, 60, 'Santo Rosario West'),
(1460, 61, 'Agtipal'),
(1461, 61, 'Arosip'),
(1462, 61, 'Bacqui'),
(1463, 61, 'Bacsil'),
(1464, 61, 'Bagutot'),
(1465, 61, 'Ballogo'),
(1466, 61, 'Baroro'),
(1467, 61, 'Bitalag'),
(1468, 61, 'Bulala'),
(1469, 61, 'Burayoc'),
(1470, 61, 'Bussaoit'),
(1471, 61, 'Cabaroan'),
(1472, 61, 'Cabarsican'),
(1473, 61, 'Cabugao'),
(1474, 61, 'Calautit'),
(1475, 61, 'Carcarmay'),
(1476, 61, 'Casiaman'),
(1477, 61, 'Galongen'),
(1478, 61, 'Guinabang'),
(1479, 61, 'Legleg'),
(1480, 61, 'Lisqueb'),
(1481, 61, 'Mabanengbeng 1st'),
(1482, 61, 'Mabanengbeng 2nd'),
(1483, 61, 'Maragayap'),
(1484, 61, 'Nangalisan'),
(1485, 61, 'Nagatiran'),
(1486, 61, 'Nagsaraboan'),
(1487, 61, 'Nagsimbaanan'),
(1488, 61, 'Narra'),
(1489, 61, 'Ortega'),
(1490, 61, 'Paagan'),
(1491, 61, 'Pandan'),
(1492, 61, 'Pang-pang'),
(1493, 61, 'Poblacion'),
(1494, 61, 'Quirino'),
(1495, 61, 'Raois'),
(1496, 61, 'Salincob'),
(1497, 61, 'San Martin'),
(1498, 61, 'Santa Cruz'),
(1499, 61, 'Santa Rita'),
(1500, 61, 'Sapilang'),
(1501, 61, 'Sayoan'),
(1502, 61, 'Sipulo'),
(1503, 61, 'Tammocalao'),
(1504, 61, 'Ubbog'),
(1505, 61, 'Oya-oy'),
(1506, 61, 'Zaragosa'),
(1507, 62, 'Alibangsay'),
(1508, 62, 'Baay'),
(1509, 62, 'Cambaly'),
(1510, 62, 'Cardiz'),
(1511, 62, 'Dagup'),
(1512, 62, 'Libbo'),
(1513, 62, 'Suyo'),
(1514, 62, 'Tagudtud'),
(1515, 62, 'Tio-angan'),
(1516, 62, 'Wallayan'),
(1517, 63, 'Apatut'),
(1518, 63, 'Ar-arampang'),
(1519, 63, 'Baracbac Este'),
(1520, 63, 'Baracbac Oeste'),
(1521, 63, 'Bet-ang'),
(1522, 63, 'Bulbulala'),
(1523, 63, 'Bungol'),
(1524, 63, 'Butubut Este'),
(1525, 63, 'Butubut Norte'),
(1526, 63, 'Butubut Oeste'),
(1527, 63, 'Butubut Sur'),
(1528, 63, 'Cabuaan Oeste'),
(1529, 63, 'Calliat'),
(1530, 63, 'Calungbuyan'),
(1531, 63, 'Camiling'),
(1532, 63, 'Guinaburan'),
(1533, 63, 'Masupe'),
(1534, 63, 'Nagsabaran Norte'),
(1535, 63, 'Nagsabaran Sur'),
(1536, 63, 'Nalasin'),
(1537, 63, 'Napaset'),
(1538, 63, 'Pagbennecan'),
(1539, 63, 'Pagleddegan'),
(1540, 63, 'Pantar Norte'),
(1541, 63, 'Pantar Sur'),
(1542, 63, 'Pa-o'),
(1543, 63, 'Almeida'),
(1544, 63, 'Paraoir'),
(1545, 63, 'Patpata'),
(1546, 63, 'Dr. Camilo Osias Pob.'),
(1547, 63, 'Sablut'),
(1548, 63, 'San Pablo'),
(1549, 63, 'Sinapangan Norte'),
(1550, 63, 'Sinapangan Sur'),
(1551, 63, 'Tallipugo'),
(1552, 63, 'Antonino'),
(1553, 64, 'Agdeppa'),
(1554, 64, 'Alzate'),
(1555, 64, 'Bangaoilan East'),
(1556, 64, 'Bangaoilan West'),
(1557, 64, 'Barraca'),
(1558, 64, 'Cadapli'),
(1559, 64, 'Caggao'),
(1560, 64, 'Consuegra'),
(1561, 64, 'General Prim East'),
(1562, 64, 'General Prim West'),
(1563, 64, 'General Terrero'),
(1564, 64, 'Luzong Norte'),
(1565, 64, 'Luzong Sur'),
(1566, 64, 'Maria Cristina East'),
(1567, 64, 'Maria Cristina West'),
(1568, 64, 'Mindoro'),
(1569, 64, 'Nagsabaran'),
(1570, 64, 'Paratong Norte'),
(1571, 64, 'Paratong No. 3'),
(1572, 64, 'Paratong No. 4'),
(1573, 64, 'Central East No. 1'),
(1574, 64, 'Central East No. 2'),
(1575, 64, 'Central West No. 1'),
(1576, 64, 'Central West No. 2'),
(1577, 64, 'Central West No. 3'),
(1578, 64, 'Quintarong'),
(1579, 64, 'Reyna Regente'),
(1580, 64, 'Rissing'),
(1581, 64, 'San Blas'),
(1582, 64, 'San Cristobal'),
(1583, 64, 'Sinapangan Norte'),
(1584, 64, 'Sinapangan Sur'),
(1585, 64, 'Ubbog'),
(1586, 65, 'Acao'),
(1587, 65, 'Baccuit Norte'),
(1588, 65, 'Baccuit Sur'),
(1589, 65, 'Bagbag'),
(1590, 65, 'Ballay'),
(1591, 65, 'Bawanta'),
(1592, 65, 'Boy-utan'),
(1593, 65, 'Bucayab'),
(1594, 65, 'Cabalayangan'),
(1595, 65, 'Cabisilan'),
(1596, 65, 'Calumbaya'),
(1597, 65, 'Carmay'),
(1598, 65, 'Casilagan'),
(1599, 65, 'Central East'),
(1600, 65, 'Central West'),
(1601, 65, 'Dili'),
(1602, 65, 'Disso-or'),
(1603, 65, 'Guerrero'),
(1604, 65, 'Nagrebcan'),
(1605, 65, 'Pagdalagan Sur'),
(1606, 65, 'Palintucang'),
(1607, 65, 'Palugsi-Limmansangan'),
(1608, 65, 'Parian Oeste'),
(1609, 65, 'Parian Este'),
(1610, 65, 'Paringao'),
(1611, 65, 'Payocpoc Norte Este'),
(1612, 65, 'Payocpoc Norte Oeste'),
(1613, 65, 'Payocpoc Sur'),
(1614, 65, 'Pilar'),
(1615, 65, 'Pudoc'),
(1616, 65, 'Pottot'),
(1617, 65, 'Pugo'),
(1618, 65, 'Quinavite'),
(1619, 65, 'Lower San Agustin'),
(1620, 65, 'Santa Monica'),
(1621, 65, 'Santiago'),
(1622, 65, 'Taberna'),
(1623, 65, 'Upper San Agustin'),
(1624, 65, 'Urayong'),
(1625, 66, 'Agpay'),
(1626, 66, 'Bilis'),
(1627, 66, 'Caoayan'),
(1628, 66, 'Dalacdac'),
(1629, 66, 'Delles'),
(1630, 66, 'Imelda'),
(1631, 66, 'Libtong'),
(1632, 66, 'Linuan'),
(1633, 66, 'New Poblacion'),
(1634, 66, 'Old Poblacion'),
(1635, 66, 'Lower Tumapoc'),
(1636, 66, 'Upper Tumapoc'),
(1637, 67, 'Bautista'),
(1638, 67, 'Gana'),
(1639, 67, 'Juan Cartas'),
(1640, 67, 'Las-ud'),
(1641, 67, 'Liquicia'),
(1642, 67, 'Poblacion Norte'),
(1643, 67, 'Poblacion Sur'),
(1644, 67, 'San Carlos'),
(1645, 67, 'San Cornelio'),
(1646, 67, 'San Fermin'),
(1647, 67, 'San Gregorio'),
(1648, 67, 'San Jose'),
(1649, 67, 'Santiago Norte'),
(1650, 67, 'Santiago Sur'),
(1651, 67, 'Sobredillo'),
(1652, 67, 'Urayong'),
(1653, 67, 'Wenceslao'),
(1654, 68, 'Alcala'),
(1655, 68, 'Ayaoan'),
(1656, 68, 'Barangobong'),
(1657, 68, 'Barrientos'),
(1658, 68, 'Bungro'),
(1659, 68, 'Buselbusel'),
(1660, 68, 'Cabalitocan'),
(1661, 68, 'Cantoria No. 1'),
(1662, 68, 'Cantoria No. 2'),
(1663, 68, 'Cantoria No. 3'),
(1664, 68, 'Cantoria No. 4'),
(1665, 68, 'Carisquis'),
(1666, 68, 'Darigayos'),
(1667, 68, 'Magallanes'),
(1668, 68, 'Magsiping'),
(1669, 68, 'Mamay'),
(1670, 68, 'Nagrebcan'),
(1671, 68, 'Nalvo Norte'),
(1672, 68, 'Nalvo Sur'),
(1673, 68, 'Napaset'),
(1674, 68, 'Oaqui No. 1'),
(1675, 68, 'Oaqui No. 2'),
(1676, 68, 'Oaqui No. 3'),
(1677, 68, 'Oaqui No. 4'),
(1678, 68, 'Pila'),
(1679, 68, 'Pitpitac'),
(1680, 68, 'Rimos No. 1'),
(1681, 68, 'Rimos No. 2'),
(1682, 68, 'Rimos No. 3'),
(1683, 68, 'Rimos No. 4'),
(1684, 68, 'Rimos No. 5'),
(1685, 68, 'Rissing'),
(1686, 68, 'Salcedo'),
(1687, 68, 'Santo Domingo Norte'),
(1688, 68, 'Santo Domingo Sur'),
(1689, 68, 'Sucoc Norte'),
(1690, 68, 'Sucoc Sur'),
(1691, 68, 'Suyo'),
(1692, 68, 'Tallaoen'),
(1693, 68, 'Victoria'),
(1694, 69, 'Aguioas'),
(1695, 69, 'Al-alinao Norte'),
(1696, 69, 'Al-alinao Sur'),
(1697, 69, 'Ambaracao Norte'),
(1698, 69, 'Ambaracao Sur'),
(1699, 69, 'Angin'),
(1700, 69, 'Balecbec'),
(1701, 69, 'Bancagan'),
(1702, 69, 'Baraoas Norte'),
(1703, 69, 'Baraoas Sur'),
(1704, 69, 'Bariquir'),
(1705, 69, 'Bato'),
(1706, 69, 'Bimmotobot'),
(1707, 69, 'Cabaritan Norte'),
(1708, 69, 'Cabaritan Sur'),
(1709, 69, 'Casilagan'),
(1710, 69, 'Dal-lipaoen'),
(1711, 69, 'Daramuangan'),
(1712, 69, 'Guesset'),
(1713, 69, 'Gusing Norte'),
(1714, 69, 'Gusing Sur'),
(1715, 69, 'Imelda'),
(1716, 69, 'Lioac Norte'),
(1717, 69, 'Lioac Sur'),
(1718, 69, 'Magungunay'),
(1719, 69, 'Mamat-ing Norte'),
(1720, 69, 'Mamat-ing Sur'),
(1721, 69, 'Nagsidorisan'),
(1722, 69, 'Natividad'),
(1723, 69, 'Ortiz'),
(1724, 69, 'Ribsuan'),
(1725, 69, 'San Antonio'),
(1726, 69, 'San Isidro'),
(1727, 69, 'Sili'),
(1728, 69, 'Suguidan Norte'),
(1729, 69, 'Suguidan Sur'),
(1730, 69, 'Tuddingan'),
(1731, 70, 'Ambalite'),
(1732, 70, 'Ambangonan'),
(1733, 70, 'Cares'),
(1734, 70, 'Cuenca'),
(1735, 70, 'Duplas'),
(1736, 70, 'Maoasoas Norte'),
(1737, 70, 'Maoasoas Sur'),
(1738, 70, 'Palina'),
(1739, 70, 'Poblacion East'),
(1740, 70, 'San Luis'),
(1741, 70, 'Saytan'),
(1742, 70, 'Tavora East'),
(1743, 70, 'Tavora Proper'),
(1744, 70, 'Poblacion West'),
(1745, 71, 'Alipang'),
(1746, 71, 'Ambangonan'),
(1747, 71, 'Amlang'),
(1748, 71, 'Bacani'),
(1749, 71, 'Bangar'),
(1750, 71, 'Bani'),
(1751, 71, 'Benteng-Sapilang'),
(1752, 71, 'Cadumanian'),
(1753, 71, 'Camp One'),
(1754, 71, 'Carunuan East'),
(1755, 71, 'Carunuan West'),
(1756, 71, 'Casilagan'),
(1757, 71, 'Cataguingtingan'),
(1758, 71, 'Concepcion'),
(1759, 71, 'Damortis'),
(1760, 71, 'Gumot-Nagcolaran'),
(1761, 71, 'Inabaan Norte'),
(1762, 71, 'Inabaan Sur'),
(1763, 71, 'Nagtagaan'),
(1764, 71, 'Nangcamotian'),
(1765, 71, 'Parasapas'),
(1766, 71, 'Poblacion East'),
(1767, 71, 'Poblacion West'),
(1768, 71, 'Puzon'),
(1769, 71, 'Rabon'),
(1770, 71, 'San Jose'),
(1771, 71, 'Marcos'),
(1772, 71, 'Subusub'),
(1773, 71, 'Tabtabungao'),
(1774, 71, 'Tanglag'),
(1775, 71, 'Tay-ac'),
(1776, 71, 'Udiao'),
(1777, 71, 'Vila'),
(1778, 72, 'Amontoc'),
(1779, 72, 'Apayao'),
(1780, 72, 'Balbalayang'),
(1781, 72, 'Bayabas'),
(1782, 72, 'Bucao'),
(1783, 72, 'Bumbuneg'),
(1784, 72, 'Lacong'),
(1785, 72, 'Lipay Este'),
(1786, 72, 'Lipay Norte'),
(1787, 72, 'Lipay Proper'),
(1788, 72, 'Lipay Sur'),
(1789, 72, 'Lon-oy'),
(1790, 72, 'Poblacion'),
(1791, 72, 'Polipol'),
(1792, 72, 'Daking'),
(1793, 73, 'Allangigan'),
(1794, 73, 'Aludaid'),
(1795, 73, 'Bacsayan'),
(1796, 73, 'Balballosa'),
(1797, 73, 'Bambanay'),
(1798, 73, 'Bugbugcao'),
(1799, 73, 'Caarusipan'),
(1800, 73, 'Cabaroan'),
(1801, 73, 'Cabugnayan'),
(1802, 73, 'Cacapian'),
(1803, 73, 'Caculangan'),
(1804, 73, 'Calincamasan'),
(1805, 73, 'Casilagan'),
(1806, 73, 'Catdongan'),
(1807, 73, 'Dangdangla'),
(1808, 73, 'Dasay'),
(1809, 73, 'Dinanum'),
(1810, 73, 'Duplas'),
(1811, 73, 'Guinguinabang'),
(1812, 73, 'Ili Norte'),
(1813, 73, 'Ili Sur'),
(1814, 73, 'Legleg'),
(1815, 73, 'Lubing'),
(1816, 73, 'Nadsaag'),
(1817, 73, 'Nagsabaran'),
(1818, 73, 'Naguirangan'),
(1819, 73, 'Naguituban'),
(1820, 73, 'Nagyubuyuban'),
(1821, 73, 'Oaquing'),
(1822, 73, 'Pacpacac'),
(1823, 73, 'Pagdildilan'),
(1824, 73, 'Panicsican'),
(1825, 73, 'Quidem'),
(1826, 73, 'San Felipe'),
(1827, 73, 'Santa Rosa'),
(1828, 73, 'Santo Rosario'),
(1829, 73, 'Saracat'),
(1830, 73, 'Sinapangan'),
(1831, 73, 'Taboc'),
(1832, 73, 'Talogtog'),
(1833, 73, 'Urbiztondo'),
(1834, 74, 'Ambitacay'),
(1835, 74, 'Bail'),
(1836, 74, 'Balaoc'),
(1837, 74, 'Balsaan'),
(1838, 74, 'Baybay'),
(1839, 74, 'Cabaruan'),
(1840, 74, 'Casantaan'),
(1841, 74, 'Casilagan'),
(1842, 74, 'Cupang'),
(1843, 74, 'Damortis'),
(1844, 74, 'Fernando'),
(1845, 74, 'Linong'),
(1846, 74, 'Lomboy'),
(1847, 74, 'Malabago'),
(1848, 74, 'Namboongan'),
(1849, 74, 'Namonitan'),
(1850, 74, 'Narvacan'),
(1851, 74, 'Patac'),
(1852, 74, 'Poblacion'),
(1853, 74, 'Pongpong'),
(1854, 74, 'Raois'),
(1855, 74, 'Tubod'),
(1856, 74, 'Tococ'),
(1857, 74, 'Ubagan'),
(1858, 75, 'Corrooy'),
(1859, 75, 'Lettac Norte'),
(1860, 75, 'Lettac Sur'),
(1861, 75, 'Mangaan'),
(1862, 75, 'Paagan'),
(1863, 75, 'Poblacion'),
(1864, 75, 'Puguil'),
(1865, 75, 'Ramot'),
(1866, 75, 'Sapdaan'),
(1867, 75, 'Sasaba'),
(1868, 75, 'Tubaday'),
(1869, 76, 'Bigbiga'),
(1870, 76, 'Castro'),
(1871, 76, 'Duplas'),
(1872, 76, 'Ipet'),
(1873, 76, 'Ilocano'),
(1874, 76, 'Maliclico'),
(1875, 76, 'Old Central'),
(1876, 76, 'Namaltugan'),
(1877, 76, 'Poblacion'),
(1878, 76, 'Porporiket'),
(1879, 76, 'San Francisco Norte'),
(1880, 76, 'San Francisco Sur'),
(1881, 76, 'San Jose'),
(1882, 76, 'Sengngat'),
(1883, 76, 'Turod'),
(1884, 76, 'Up-uplas'),
(1885, 76, 'Bulalaan'),
(1886, 77, 'Amallapay'),
(1887, 77, 'Anduyan'),
(1888, 77, 'Caoigue'),
(1889, 77, 'Francia Sur'),
(1890, 77, 'Francia West'),
(1891, 77, 'Garcia'),
(1892, 77, 'Gonzales'),
(1893, 77, 'Halog East'),
(1894, 77, 'Halog West'),
(1895, 77, 'Leones East'),
(1896, 77, 'Leones West'),
(1897, 77, 'Linapew'),
(1898, 77, 'Magsaysay'),
(1899, 77, 'Pideg'),
(1900, 77, 'Poblacion'),
(1901, 77, 'Rizal'),
(1902, 77, 'Santa Teresa'),
(1903, 77, 'Lloren'),
(1904, 78, 'Alos'),
(1905, 78, 'Amandiego'),
(1906, 78, 'Amangbangan'),
(1907, 78, 'Balangobong'),
(1908, 78, 'Balayang'),
(1909, 78, 'Bisocol'),
(1910, 78, 'Bolaney'),
(1911, 78, 'Baleyadaan'),
(1912, 78, 'Bued'),
(1913, 78, 'Cabatuan'),
(1914, 78, 'Cayucay'),
(1915, 78, 'Dulacac'),
(1916, 78, 'Inerangan'),
(1917, 78, 'Linmansangan'),
(1918, 78, 'Lucap'),
(1919, 78, 'Macatiw'),
(1920, 78, 'Magsaysay'),
(1921, 78, 'Mona'),
(1922, 78, 'Palamis'),
(1923, 78, 'Pangapisan'),
(1924, 78, 'Poblacion'),
(1925, 78, 'Pocalpocal'),
(1926, 78, 'Pogo'),
(1927, 78, 'Polo'),
(1928, 78, 'Quibuar'),
(1929, 78, 'Sabangan'),
(1930, 78, 'San Jose'),
(1931, 78, 'San Roque'),
(1932, 78, 'San Vicente'),
(1933, 78, 'Santa Maria'),
(1934, 78, 'Tanaytay'),
(1935, 78, 'Tangcarang'),
(1936, 78, 'Tawintawin'),
(1937, 78, 'Telbang'),
(1938, 78, 'Victoria'),
(1939, 78, 'Landoc'),
(1940, 78, 'Maawi'),
(1941, 78, 'Pandan'),
(1942, 78, 'San Antonio'),
(1943, 79, 'Bacayao Norte'),
(1944, 79, 'Bacayao Sur'),
(1945, 79, 'Barangay II'),
(1946, 79, 'Barangay IV'),
(1947, 79, 'Bolosan'),
(1948, 79, 'Bonuan Binloc'),
(1949, 79, 'Bonuan Boquig'),
(1950, 79, 'Bonuan Gueset'),
(1951, 79, 'Calmay'),
(1952, 79, 'Carael'),
(1953, 79, 'Caranglaan'),
(1954, 79, 'Herrero'),
(1955, 79, 'Lasip Chico'),
(1956, 79, 'Lasip Grande'),
(1957, 79, 'Lomboy'),
(1958, 79, 'Lucao'),
(1959, 79, 'Malued'),
(1960, 79, 'Mamalingling'),
(1961, 79, 'Mangin'),
(1962, 79, 'Mayombo'),
(1963, 79, 'Pantal'),
(1964, 79, 'Poblacion Oeste'),
(1965, 79, 'Barangay I'),
(1966, 79, 'Pogo Chico'),
(1967, 79, 'Pogo Grande'),
(1968, 79, 'Pugaro Suit'),
(1969, 79, 'Salapingao'),
(1970, 79, 'Salisay'),
(1971, 79, 'Tambac'),
(1972, 79, 'Tapuac'),
(1973, 79, 'Tebeng'),
(1974, 80, 'Abanon'),
(1975, 80, 'Agdao'),
(1976, 80, 'Anando'),
(1977, 80, 'Ano'),
(1978, 80, 'Antipangol'),
(1979, 80, 'Aponit'),
(1980, 80, 'Bacnar'),
(1981, 80, 'Balaya'),
(1982, 80, 'Balayong'),
(1983, 80, 'Baldog'),
(1984, 80, 'Balite Sur'),
(1985, 80, 'Balococ'),
(1986, 80, 'Bani'),
(1987, 80, 'Bega'),
(1988, 80, 'Bocboc'),
(1989, 80, 'Bugallon-Posadas Street'),
(1990, 80, 'Bogaoan'),
(1991, 80, 'Bolingit'),
(1992, 80, 'Bolosan'),
(1993, 80, 'Bonifacio'),
(1994, 80, 'Buenglat'),
(1995, 80, 'Burgos Padlan'),
(1996, 80, 'Cacaritan'),
(1997, 80, 'Caingal'),
(1998, 80, 'Calobaoan'),
(1999, 80, 'Calomboyan'),
(2000, 80, 'Capataan'),
(2001, 80, 'Caoayan-Kiling'),
(2002, 80, 'Cobol'),
(2003, 80, 'Coliling'),
(2004, 80, 'Cruz'),
(2005, 80, 'Doyong'),
(2006, 80, 'Gamata'),
(2007, 80, 'Guelew'),
(2008, 80, 'Ilang'),
(2009, 80, 'Inerangan'),
(2010, 80, 'Isla'),
(2011, 80, 'Libas'),
(2012, 80, 'Lilimasan'),
(2013, 80, 'Longos'),
(2014, 80, 'Lucban'),
(2015, 80, 'Mabalbalino'),
(2016, 80, 'Mabini'),
(2017, 80, 'Magtaking'),
(2018, 80, 'Malacañang'),
(2019, 80, 'Maliwara'),
(2020, 80, 'Mamarlao'),
(2021, 80, 'Manzon'),
(2022, 80, 'Matagdem'),
(2023, 80, 'Mestizo Norte'),
(2024, 80, 'Naguilayan'),
(2025, 80, 'Nilentap'),
(2026, 80, 'Padilla-Gomez'),
(2027, 80, 'Pagal'),
(2028, 80, 'Palaming'),
(2029, 80, 'Palaris'),
(2030, 80, 'Palospos'),
(2031, 80, 'Pangalangan'),
(2032, 80, 'Pangoloan'),
(2033, 80, 'Pangpang'),
(2034, 80, 'Paitan-Panoypoy'),
(2035, 80, 'Parayao'),
(2036, 80, 'Payapa'),
(2037, 80, 'Payar'),
(2038, 80, 'Perez Boulevard'),
(2039, 80, 'Polo'),
(2040, 80, 'Quezon Boulevard'),
(2041, 80, 'Quintong'),
(2042, 80, 'Rizal'),
(2043, 80, 'Roxas Boulevard'),
(2044, 80, 'Salinap'),
(2045, 80, 'San Juan'),
(2046, 80, 'San Pedro-Taloy'),
(2047, 80, 'Sapinit'),
(2048, 80, 'PNR Station Site'),
(2049, 80, 'Supo'),
(2050, 80, 'Talang'),
(2051, 80, 'Tamayo'),
(2052, 80, 'Tandoc'),
(2053, 80, 'Tarece'),
(2054, 80, 'Tarectec'),
(2055, 80, 'Tayambani'),
(2056, 80, 'Tebag'),
(2057, 80, 'Turac'),
(2058, 80, 'M. Soriano'),
(2059, 80, 'Tandang Sora'),
(2060, 81, 'Anonas'),
(2061, 81, 'Bactad East'),
(2062, 81, 'Dr. Pedro T. Orata'),
(2063, 81, 'Bayaoas'),
(2064, 81, 'Bolaoen'),
(2065, 81, 'Cabaruan'),
(2066, 81, 'Cabuloan'),
(2067, 81, 'Camanang'),
(2068, 81, 'Camantiles'),
(2069, 81, 'Casantaan'),
(2070, 81, 'Catablan'),
(2071, 81, 'Cayambanan'),
(2072, 81, 'Consolacion'),
(2073, 81, 'Dilan Paurido'),
(2074, 81, 'Labit Proper'),
(2075, 81, 'Labit West'),
(2076, 81, 'Mabanogbog'),
(2077, 81, 'Macalong'),
(2078, 81, 'Nancalobasaan'),
(2079, 81, 'Nancamaliran East'),
(2080, 81, 'Nancamaliran West'),
(2081, 81, 'Nancayasan'),
(2082, 81, 'Oltama'),
(2083, 81, 'Palina East'),
(2084, 81, 'Palina West'),
(2085, 81, 'Pinmaludpod'),
(2086, 81, 'Poblacion'),
(2087, 81, 'San Jose'),
(2088, 81, 'San Vicente'),
(2089, 81, 'Santa Lucia'),
(2090, 81, 'Santo Domingo'),
(2091, 81, 'Sugcong'),
(2092, 81, 'Tipuso'),
(2093, 81, 'Tulong'),
(2094, 82, 'Allabon'),
(2095, 82, 'Aloleng'),
(2096, 82, 'Bangan-Oda'),
(2097, 82, 'Baruan'),
(2098, 82, 'Boboy'),
(2099, 82, 'Cayungnan'),
(2100, 82, 'Dangley'),
(2101, 82, 'Gayusan'),
(2102, 82, 'Macaboboni'),
(2103, 82, 'Magsaysay'),
(2104, 82, 'Namatucan'),
(2105, 82, 'Patar'),
(2106, 82, 'Poblacion East'),
(2107, 82, 'Poblacion West'),
(2108, 82, 'San Juan'),
(2109, 82, 'Tupa'),
(2110, 82, 'Viga'),
(2111, 83, 'Bayaoas'),
(2112, 83, 'Baybay'),
(2113, 83, 'Bocacliw'),
(2114, 83, 'Bocboc East'),
(2115, 83, 'Bocboc West'),
(2116, 83, 'Buer'),
(2117, 83, 'Calsib'),
(2118, 83, 'Niñoy'),
(2119, 83, 'Poblacion'),
(2120, 83, 'Pogomboa'),
(2121, 83, 'Pogonsili'),
(2122, 83, 'San Jose'),
(2123, 83, 'Tampac'),
(2124, 83, 'Laoag'),
(2125, 83, 'Manlocboc'),
(2126, 83, 'Panacol'),
(2127, 84, 'Anulid'),
(2128, 84, 'Atainan'),
(2129, 84, 'Bersamin'),
(2130, 84, 'Canarvacanan'),
(2131, 84, 'Caranglaan'),
(2132, 84, 'Curareng'),
(2133, 84, 'Gualsic'),
(2134, 84, 'Kisikis'),
(2135, 84, 'Laoac'),
(2136, 84, 'Macayo'),
(2137, 84, 'Pindangan Centro'),
(2138, 84, 'Pindangan East'),
(2139, 84, 'Pindangan West'),
(2140, 84, 'Poblacion East'),
(2141, 84, 'Poblacion West'),
(2142, 84, 'San Juan'),
(2143, 84, 'San Nicolas'),
(2144, 84, 'San Pedro Apartado'),
(2145, 84, 'San Pedro Ili'),
(2146, 84, 'San Vicente'),
(2147, 84, 'Vacante'),
(2148, 85, 'Awile'),
(2149, 85, 'Awag'),
(2150, 85, 'Batiarao'),
(2151, 85, 'Cabungan'),
(2152, 85, 'Carot'),
(2153, 85, 'Dolaoan'),
(2154, 85, 'Imbo'),
(2155, 85, 'Macaleeng'),
(2156, 85, 'Macandocandong'),
(2157, 85, 'Mal-ong'),
(2158, 85, 'Namagbagan'),
(2159, 85, 'Poblacion'),
(2160, 85, 'Roxas'),
(2161, 85, 'Sablig'),
(2162, 85, 'San Jose'),
(2163, 85, 'Siapar'),
(2164, 85, 'Tondol'),
(2165, 85, 'Toritori'),
(2166, 86, 'Ariston Este'),
(2167, 86, 'Ariston Weste'),
(2168, 86, 'Bantog'),
(2169, 86, 'Baro'),
(2170, 86, 'Bobonan'),
(2171, 86, 'Cabalitian'),
(2172, 86, 'Calepaan'),
(2173, 86, 'Carosucan Norte'),
(2174, 86, 'Carosucan Sur'),
(2175, 86, 'Coldit'),
(2176, 86, 'Domanpot'),
(2177, 86, 'Dupac'),
(2178, 86, 'Macalong'),
(2179, 86, 'Palaris'),
(2180, 86, 'Poblacion East'),
(2181, 86, 'Poblacion West');
INSERT INTO `barangays` (`id`, `district_id`, `barangay_name`) VALUES
(2182, 86, 'San Vicente Este'),
(2183, 86, 'San Vicente Weste'),
(2184, 86, 'Sanchez'),
(2185, 86, 'Sobol'),
(2186, 86, 'Toboy'),
(2187, 87, 'Angayan Norte'),
(2188, 87, 'Angayan Sur'),
(2189, 87, 'Capulaan'),
(2190, 87, 'Esmeralda'),
(2191, 87, 'Kita-kita'),
(2192, 87, 'Mabini'),
(2193, 87, 'Mauban'),
(2194, 87, 'Poblacion'),
(2195, 87, 'Pugaro'),
(2196, 87, 'Rajal'),
(2197, 87, 'San Andres'),
(2198, 87, 'San Aurelio 1st'),
(2199, 87, 'San Aurelio 2nd'),
(2200, 87, 'San Aurelio 3rd'),
(2201, 87, 'San Joaquin'),
(2202, 87, 'San Julian'),
(2203, 87, 'San Leon'),
(2204, 87, 'San Marcelino'),
(2205, 87, 'San Miguel'),
(2206, 87, 'San Raymundo'),
(2207, 88, 'Ambabaay'),
(2208, 88, 'Aporao'),
(2209, 88, 'Arwas'),
(2210, 88, 'Ballag'),
(2211, 88, 'Banog Norte'),
(2212, 88, 'Banog Sur'),
(2213, 88, 'Centro Toma'),
(2214, 88, 'Colayo'),
(2215, 88, 'Dacap Norte'),
(2216, 88, 'Dacap Sur'),
(2217, 88, 'Garrita'),
(2218, 88, 'Luac'),
(2219, 88, 'Macabit'),
(2220, 88, 'Masidem'),
(2221, 88, 'Poblacion'),
(2222, 88, 'Quinaoayanan'),
(2223, 88, 'Ranao'),
(2224, 88, 'Ranom Iloco'),
(2225, 88, 'San Jose'),
(2226, 88, 'San Miguel'),
(2227, 88, 'San Simon'),
(2228, 88, 'San Vicente'),
(2229, 88, 'Tiep'),
(2230, 88, 'Tipor'),
(2231, 88, 'Tugui Grande'),
(2232, 88, 'Tugui Norte'),
(2233, 88, 'Calabeng'),
(2234, 89, 'Anambongan'),
(2235, 89, 'Bayoyong'),
(2236, 89, 'Cabeldatan'),
(2237, 89, 'Dumpay'),
(2238, 89, 'Malimpec East'),
(2239, 89, 'Mapolopolo'),
(2240, 89, 'Nalneran'),
(2241, 89, 'Navatat'),
(2242, 89, 'Obong'),
(2243, 89, 'Osmena Sr.'),
(2244, 89, 'Palma'),
(2245, 89, 'Patacbo'),
(2246, 89, 'Poblacion'),
(2247, 90, 'Artacho'),
(2248, 90, 'Cabuaan'),
(2249, 90, 'Cacandongan'),
(2250, 90, 'Diaz'),
(2251, 90, 'Nandacan'),
(2252, 90, 'Nibaliw Norte'),
(2253, 90, 'Nibaliw Sur'),
(2254, 90, 'Palisoc'),
(2255, 90, 'Poblacion East'),
(2256, 90, 'Poblacion West'),
(2257, 90, 'Pogo'),
(2258, 90, 'Poponto'),
(2259, 90, 'Primicias'),
(2260, 90, 'Ketegan'),
(2261, 90, 'Sinabaan'),
(2262, 90, 'Vacante'),
(2263, 90, 'Villanueva'),
(2264, 90, 'Baluyot'),
(2265, 91, 'Alinggan'),
(2266, 91, 'Amanperez'),
(2267, 91, 'Amancosiling Norte'),
(2268, 91, 'Amancosiling Sur'),
(2269, 91, 'Ambayat I'),
(2270, 91, 'Ambayat II'),
(2271, 91, 'Apalen'),
(2272, 91, 'Asin'),
(2273, 91, 'Ataynan'),
(2274, 91, 'Bacnono'),
(2275, 91, 'Balaybuaya'),
(2276, 91, 'Banaban'),
(2277, 91, 'Bani'),
(2278, 91, 'Batangcaoa'),
(2279, 91, 'Beleng'),
(2280, 91, 'Bical Norte'),
(2281, 91, 'Bical Sur'),
(2282, 91, 'Bongato East'),
(2283, 91, 'Bongato West'),
(2284, 91, 'Buayaen'),
(2285, 91, 'Buenlag 1st'),
(2286, 91, 'Buenlag 2nd'),
(2287, 91, 'Cadre Site'),
(2288, 91, 'Carungay'),
(2289, 91, 'Caturay'),
(2290, 91, 'Duera'),
(2291, 91, 'Dusoc'),
(2292, 91, 'Hermoza'),
(2293, 91, 'Idong'),
(2294, 91, 'Inanlorenza'),
(2295, 91, 'Inirangan'),
(2296, 91, 'Iton'),
(2297, 91, 'Langiran'),
(2298, 91, 'Ligue'),
(2299, 91, 'M. H. del Pilar'),
(2300, 91, 'Macayocayo'),
(2301, 91, 'Magsaysay'),
(2302, 91, 'Maigpa'),
(2303, 91, 'Malimpec'),
(2304, 91, 'Malioer'),
(2305, 91, 'Managos'),
(2306, 91, 'Manambong Norte'),
(2307, 91, 'Manambong Parte'),
(2308, 91, 'Manambong Sur'),
(2309, 91, 'Mangayao'),
(2310, 91, 'Nalsian Norte'),
(2311, 91, 'Nalsian Sur'),
(2312, 91, 'Pangdel'),
(2313, 91, 'Pantol'),
(2314, 91, 'Paragos'),
(2315, 91, 'Poblacion Sur'),
(2316, 91, 'Pugo'),
(2317, 91, 'Reynado'),
(2318, 91, 'San Gabriel 1st'),
(2319, 91, 'San Gabriel 2nd'),
(2320, 91, 'San Vicente'),
(2321, 91, 'Sancagulis'),
(2322, 91, 'Sanlibo'),
(2323, 91, 'Sapang'),
(2324, 91, 'Tamaro'),
(2325, 91, 'Tambac'),
(2326, 91, 'Tampog'),
(2327, 91, 'Darawey'),
(2328, 91, 'Tanolong'),
(2329, 91, 'Tatarac'),
(2330, 91, 'Telbang'),
(2331, 91, 'Tococ East'),
(2332, 91, 'Tococ West'),
(2333, 91, 'Warding'),
(2334, 91, 'Wawa'),
(2335, 91, 'Zone I'),
(2336, 91, 'Zone II'),
(2337, 91, 'Zone III'),
(2338, 91, 'Zone IV'),
(2339, 91, 'Zone V'),
(2340, 91, 'Zone VI'),
(2341, 91, 'Zone VII'),
(2342, 92, 'Balangobong'),
(2343, 92, 'Bued'),
(2344, 92, 'Bugayong'),
(2345, 92, 'Camangaan'),
(2346, 92, 'Canarvacanan'),
(2347, 92, 'Capas'),
(2348, 92, 'Cili'),
(2349, 92, 'Dumayat'),
(2350, 92, 'Linmansangan'),
(2351, 92, 'Mangcasuy'),
(2352, 92, 'Moreno'),
(2353, 92, 'Pasileng Norte'),
(2354, 92, 'Pasileng Sur'),
(2355, 92, 'Poblacion'),
(2356, 92, 'San Felipe Central'),
(2357, 92, 'San Felipe Sur'),
(2358, 92, 'San Pablo'),
(2359, 92, 'Sta. Catalina'),
(2360, 92, 'Sta. Maria Norte'),
(2361, 92, 'Santiago'),
(2362, 92, 'Sto. Niño'),
(2363, 92, 'Sumabnit'),
(2364, 92, 'Tabuyoc'),
(2365, 92, 'Vacante'),
(2366, 93, 'Amancoro'),
(2367, 93, 'Balagan'),
(2368, 93, 'Balogo'),
(2369, 93, 'Basing'),
(2370, 93, 'Baybay Lopez'),
(2371, 93, 'Baybay Polong'),
(2372, 93, 'Biec'),
(2373, 93, 'Buenlag'),
(2374, 93, 'Calit'),
(2375, 93, 'Caloocan Norte'),
(2376, 93, 'Caloocan Sur'),
(2377, 93, 'Camaley'),
(2378, 93, 'Canaoalan'),
(2379, 93, 'Dulag'),
(2380, 93, 'Gayaman'),
(2381, 93, 'Linoc'),
(2382, 93, 'Lomboy'),
(2383, 93, 'Nagpalangan'),
(2384, 93, 'Malindong'),
(2385, 93, 'Manat'),
(2386, 93, 'Naguilayan'),
(2387, 93, 'Pallas'),
(2388, 93, 'Papagueyan'),
(2389, 93, 'Parayao'),
(2390, 93, 'Poblacion'),
(2391, 93, 'Pototan'),
(2392, 93, 'Sabangan'),
(2393, 93, 'Salapingao'),
(2394, 93, 'San Isidro Norte'),
(2395, 93, 'San Isidro Sur'),
(2396, 93, 'Santa Rosa'),
(2397, 93, 'Tombor'),
(2398, 93, 'Caloocan Dupo'),
(2399, 94, 'Arnedo'),
(2400, 94, 'Balingasay'),
(2401, 94, 'Binabalian'),
(2402, 94, 'Cabuyao'),
(2403, 94, 'Catuday'),
(2404, 94, 'Catungi'),
(2405, 94, 'Concordia'),
(2406, 94, 'Culang'),
(2407, 94, 'Dewey'),
(2408, 94, 'Estanza'),
(2409, 94, 'Germinal'),
(2410, 94, 'Goyoden'),
(2411, 94, 'Ilogmalino'),
(2412, 94, 'Lambes'),
(2413, 94, 'Liwa-liwa'),
(2414, 94, 'Lucero'),
(2415, 94, 'Luciente 1.0'),
(2416, 94, 'Luciente 2.0'),
(2417, 94, 'Luna'),
(2418, 94, 'Patar'),
(2419, 94, 'Pilar'),
(2420, 94, 'Salud'),
(2421, 94, 'Samang Norte'),
(2422, 94, 'Samang Sur'),
(2423, 94, 'Sampaloc'),
(2424, 94, 'San Roque'),
(2425, 94, 'Tara'),
(2426, 94, 'Tupa'),
(2427, 94, 'Victory'),
(2428, 94, 'Zaragoza'),
(2429, 95, 'Angarian'),
(2430, 95, 'Asinan'),
(2431, 95, 'Banaga'),
(2432, 95, 'Bacabac'),
(2433, 95, 'Bolaoen'),
(2434, 95, 'Buenlag'),
(2435, 95, 'Cabayaoasan'),
(2436, 95, 'Cayanga'),
(2437, 95, 'Gueset'),
(2438, 95, 'Hacienda'),
(2439, 95, 'Laguit Centro'),
(2440, 95, 'Laguit Padilla'),
(2441, 95, 'Magtaking'),
(2442, 95, 'Pangascasan'),
(2443, 95, 'Pantal'),
(2444, 95, 'Poblacion'),
(2445, 95, 'Polong'),
(2446, 95, 'Portic'),
(2447, 95, 'Salasa'),
(2448, 95, 'Salomague Norte'),
(2449, 95, 'Salomague Sur'),
(2450, 95, 'Samat'),
(2451, 95, 'San Francisco'),
(2452, 95, 'Umanday'),
(2453, 96, 'Anapao'),
(2454, 96, 'Cacayasen'),
(2455, 96, 'Concordia'),
(2456, 96, 'Ilio-ilio'),
(2457, 96, 'Papallasen'),
(2458, 96, 'Poblacion'),
(2459, 96, 'Pogoruac'),
(2460, 96, 'Don Matias'),
(2461, 96, 'San Miguel'),
(2462, 96, 'San Pascual'),
(2463, 96, 'San Vicente'),
(2464, 96, 'Sapa Grande'),
(2465, 96, 'Sapa Pequeña'),
(2466, 96, 'Tambacan'),
(2467, 97, 'Ambonao'),
(2468, 97, 'Ambuetel'),
(2469, 97, 'Banaoang'),
(2470, 97, 'Bued'),
(2471, 97, 'Buenlag'),
(2472, 97, 'Cabilocaan'),
(2473, 97, 'Dinalaoan'),
(2474, 97, 'Doyong'),
(2475, 97, 'Gabon'),
(2476, 97, 'Lasip'),
(2477, 97, 'Longos'),
(2478, 97, 'Lumbang'),
(2479, 97, 'Macabito'),
(2480, 97, 'Malabago'),
(2481, 97, 'Mancup'),
(2482, 97, 'Nagsaing'),
(2483, 97, 'Nalsian'),
(2484, 97, 'Poblacion East'),
(2485, 97, 'Poblacion West'),
(2486, 97, 'Quesban'),
(2487, 97, 'San Miguel'),
(2488, 97, 'San Vicente'),
(2489, 97, 'Songkoy'),
(2490, 97, 'Talibaew'),
(2491, 98, 'Alilao'),
(2492, 98, 'Amalbalan'),
(2493, 98, 'Bobonot'),
(2494, 98, 'Eguia'),
(2495, 98, 'Gais-Guipe'),
(2496, 98, 'Hermosa'),
(2497, 98, 'Macalang'),
(2498, 98, 'Magsaysay'),
(2499, 98, 'Malacapas'),
(2500, 98, 'Malimpin'),
(2501, 98, 'Osmeña'),
(2502, 98, 'Petal'),
(2503, 98, 'Poblacion'),
(2504, 98, 'San Vicente'),
(2505, 98, 'Tambac'),
(2506, 98, 'Tambobong'),
(2507, 98, 'Uli'),
(2508, 98, 'Viga'),
(2509, 99, 'Bamban'),
(2510, 99, 'Batang'),
(2511, 99, 'Bayambang'),
(2512, 99, 'Cato'),
(2513, 99, 'Doliman'),
(2514, 99, 'Fatima'),
(2515, 99, 'Maya'),
(2516, 99, 'Nangalisan'),
(2517, 99, 'Nayom'),
(2518, 99, 'Pita'),
(2519, 99, 'Poblacion'),
(2520, 99, 'Potol'),
(2521, 99, 'Babuyan'),
(2522, 100, 'Bolo'),
(2523, 100, 'Bongalon'),
(2524, 100, 'Dulig'),
(2525, 100, 'Laois'),
(2526, 100, 'Magsaysay'),
(2527, 100, 'Poblacion'),
(2528, 100, 'San Gonzalo'),
(2529, 100, 'San Jose'),
(2530, 100, 'Tobuan'),
(2531, 100, 'Uyong'),
(2532, 101, 'Aliwekwek'),
(2533, 101, 'Baay'),
(2534, 101, 'Balangobong'),
(2535, 101, 'Balococ'),
(2536, 101, 'Bantayan'),
(2537, 101, 'Basing'),
(2538, 101, 'Capandanan'),
(2539, 101, 'Domalandan Center'),
(2540, 101, 'Domalandan East'),
(2541, 101, 'Domalandan West'),
(2542, 101, 'Dorongan'),
(2543, 101, 'Dulag'),
(2544, 101, 'Estanza'),
(2545, 101, 'Lasip'),
(2546, 101, 'Libsong East'),
(2547, 101, 'Libsong West'),
(2548, 101, 'Malawa'),
(2549, 101, 'Malimpuec'),
(2550, 101, 'Maniboc'),
(2551, 101, 'Matalava'),
(2552, 101, 'Naguelguel'),
(2553, 101, 'Namolan'),
(2554, 101, 'Pangapisan North'),
(2555, 101, 'Pangapisan Sur'),
(2556, 101, 'Poblacion'),
(2557, 101, 'Quibaol'),
(2558, 101, 'Rosario'),
(2559, 101, 'Sabangan'),
(2560, 101, 'Talogtog'),
(2561, 101, 'Tonton'),
(2562, 101, 'Tumbar'),
(2563, 101, 'Wawa'),
(2564, 102, 'Bacnit'),
(2565, 102, 'Barlo'),
(2566, 102, 'Caabiangaan'),
(2567, 102, 'Cabanaetan'),
(2568, 102, 'Cabinuangan'),
(2569, 102, 'Calzada'),
(2570, 102, 'Caranglaan'),
(2571, 102, 'De Guzman'),
(2572, 102, 'Luna'),
(2573, 102, 'Magalong'),
(2574, 102, 'Nibaliw'),
(2575, 102, 'Patar'),
(2576, 102, 'Poblacion'),
(2577, 102, 'San Pedro'),
(2578, 102, 'Tagudin'),
(2579, 102, 'Villacorta'),
(2580, 103, 'Abonagan'),
(2581, 103, 'Agdao'),
(2582, 103, 'Alacan'),
(2583, 103, 'Aliaga'),
(2584, 103, 'Amacalan'),
(2585, 103, 'Anolid'),
(2586, 103, 'Apaya'),
(2587, 103, 'Asin Este'),
(2588, 103, 'Asin Weste'),
(2589, 103, 'Bacundao Este'),
(2590, 103, 'Bacundao Weste'),
(2591, 103, 'Bakitiw'),
(2592, 103, 'Balite'),
(2593, 103, 'Banawang'),
(2594, 103, 'Barang'),
(2595, 103, 'Bawer'),
(2596, 103, 'Binalay'),
(2597, 103, 'Bobon'),
(2598, 103, 'Bolaoit'),
(2599, 103, 'Bongar'),
(2600, 103, 'Butao'),
(2601, 103, 'Cabatling'),
(2602, 103, 'Cabueldatan'),
(2603, 103, 'Calbueg'),
(2604, 103, 'Canan Norte'),
(2605, 103, 'Canan Sur'),
(2606, 103, 'Cawayan Bogtong'),
(2607, 103, 'Don Pedro'),
(2608, 103, 'Gatang'),
(2609, 103, 'Goliman'),
(2610, 103, 'Gomez'),
(2611, 103, 'Guilig'),
(2612, 103, 'Ican'),
(2613, 103, 'Ingalagala'),
(2614, 103, 'Lareg-lareg'),
(2615, 103, 'Lasip'),
(2616, 103, 'Lepa'),
(2617, 103, 'Loqueb Este'),
(2618, 103, 'Loqueb Norte'),
(2619, 103, 'Loqueb Sur'),
(2620, 103, 'Lunec'),
(2621, 103, 'Mabulitec'),
(2622, 103, 'Malimpec'),
(2623, 103, 'Manggan-Dampay'),
(2624, 103, 'Nancapian'),
(2625, 103, 'Nalsian Norte'),
(2626, 103, 'Nalsian Sur'),
(2627, 103, 'Nansangaan'),
(2628, 103, 'Olea'),
(2629, 103, 'Pacuan'),
(2630, 103, 'Palapar Norte'),
(2631, 103, 'Palapar Sur'),
(2632, 103, 'Palong'),
(2633, 103, 'Pamaranum'),
(2634, 103, 'Pasima'),
(2635, 103, 'Payar'),
(2636, 103, 'Poblacion'),
(2637, 103, 'Polong Norte'),
(2638, 103, 'Polong Sur'),
(2639, 103, 'Potiocan'),
(2640, 103, 'San Julian'),
(2641, 103, 'Tabo-Sili'),
(2642, 103, 'Tobor'),
(2643, 103, 'Talospatang'),
(2644, 103, 'Taloy'),
(2645, 103, 'Taloyan'),
(2646, 103, 'Tambac'),
(2647, 103, 'Tolonguat'),
(2648, 103, 'Tomling'),
(2649, 103, 'Umando'),
(2650, 103, 'Viado'),
(2651, 103, 'Waig'),
(2652, 103, 'Warey'),
(2653, 104, 'Babasit'),
(2654, 104, 'Baguinay'),
(2655, 104, 'Baritao'),
(2656, 104, 'Bisal'),
(2657, 104, 'Bucao'),
(2658, 104, 'Cabanbanan'),
(2659, 104, 'Calaocan'),
(2660, 104, 'Inamotan'),
(2661, 104, 'Lelemaan'),
(2662, 104, 'Licsi'),
(2663, 104, 'Lipit Norte'),
(2664, 104, 'Lipit Sur'),
(2665, 104, 'Parian'),
(2666, 104, 'Matolong'),
(2667, 104, 'Mermer'),
(2668, 104, 'Nalsian'),
(2669, 104, 'Oraan East'),
(2670, 104, 'Oraan West'),
(2671, 104, 'Pantal'),
(2672, 104, 'Pao'),
(2673, 104, 'Poblacion'),
(2674, 104, 'Pugaro'),
(2675, 104, 'San Ramon'),
(2676, 104, 'Santa Ines'),
(2677, 104, 'Sapang'),
(2678, 104, 'Tebuel'),
(2679, 105, 'Alitaya'),
(2680, 105, 'Amansabina'),
(2681, 105, 'Anolid'),
(2682, 105, 'Banaoang'),
(2683, 105, 'Bantayan'),
(2684, 105, 'Bari'),
(2685, 105, 'Bateng'),
(2686, 105, 'Buenlag'),
(2687, 105, 'David'),
(2688, 105, 'Embarcadero'),
(2689, 105, 'Gueguesangen'),
(2690, 105, 'Guesang'),
(2691, 105, 'Guiguilonen'),
(2692, 105, 'Guilig'),
(2693, 105, 'Inlambo'),
(2694, 105, 'Lanas'),
(2695, 105, 'Landas'),
(2696, 105, 'Maasin'),
(2697, 105, 'Macayug'),
(2698, 105, 'Malabago'),
(2699, 105, 'Navaluan'),
(2700, 105, 'Nibaliw'),
(2701, 105, 'Osiem'),
(2702, 105, 'Palua'),
(2703, 105, 'Poblacion'),
(2704, 105, 'Pogo'),
(2705, 105, 'Salaan'),
(2706, 105, 'Salay'),
(2707, 105, 'Tebag'),
(2708, 105, 'Talogtog'),
(2709, 106, 'Andangin'),
(2710, 106, 'Arellano Street'),
(2711, 106, 'Bantay'),
(2712, 106, 'Bantocaling'),
(2713, 106, 'Baracbac'),
(2714, 106, 'Peania Pedania'),
(2715, 106, 'Bogtong Bolo'),
(2716, 106, 'Bogtong Bunao'),
(2717, 106, 'Bogtong Centro'),
(2718, 106, 'Bogtong Niog'),
(2719, 106, 'Bogtong Silag'),
(2720, 106, 'Buaya'),
(2721, 106, 'Buenlag'),
(2722, 106, 'Bueno'),
(2723, 106, 'Bunagan'),
(2724, 106, 'Bunlalacao'),
(2725, 106, 'Burgos Street'),
(2726, 106, 'Cabaluyan 1st'),
(2727, 106, 'Cabaluyan 2nd'),
(2728, 106, 'Cabarabuan'),
(2729, 106, 'Cabaruan'),
(2730, 106, 'Cabayaoasan'),
(2731, 106, 'Cabayugan'),
(2732, 106, 'Cacaoiten'),
(2733, 106, 'Calomboyan Norte'),
(2734, 106, 'Calomboyan Sur'),
(2735, 106, 'Calvo'),
(2736, 106, 'Casilagan'),
(2737, 106, 'Catarataraan'),
(2738, 106, 'Caturay Norte'),
(2739, 106, 'Caturay Sur'),
(2740, 106, 'Caviernesan'),
(2741, 106, 'Dorongan Ketaket'),
(2742, 106, 'Dorongan Linmansangan'),
(2743, 106, 'Dorongan Punta'),
(2744, 106, 'Dorongan Sawat'),
(2745, 106, 'Dorongan Valerio'),
(2746, 106, 'General Luna'),
(2747, 106, 'Historia'),
(2748, 106, 'Lawak Langka'),
(2749, 106, 'Linmansangan'),
(2750, 106, 'Lopez'),
(2751, 106, 'Mabini'),
(2752, 106, 'Macarang'),
(2753, 106, 'Malabobo'),
(2754, 106, 'Malibong'),
(2755, 106, 'Malunec'),
(2756, 106, 'Maravilla'),
(2757, 106, 'Maravilla-Arellano Ext.'),
(2758, 106, 'Muelang'),
(2759, 106, 'Naguilayan East'),
(2760, 106, 'Naguilayan West'),
(2761, 106, 'Nancasalan'),
(2762, 106, 'Niog-Cabison-Bulaney'),
(2763, 106, 'Olegario-Caoile'),
(2764, 106, 'Olo Cacamposan'),
(2765, 106, 'Olo Cafabrosan'),
(2766, 106, 'Olo Cagarlitan'),
(2767, 106, 'Osmeña'),
(2768, 106, 'Pacalat'),
(2769, 106, 'Pampano'),
(2770, 106, 'Parian'),
(2771, 106, 'Paul'),
(2772, 106, 'Pogon-Aniat'),
(2773, 106, 'Pogon-Lomboy'),
(2774, 106, 'Ponglo-Baleg'),
(2775, 106, 'Ponglo-Muelag'),
(2776, 106, 'Quetegan'),
(2777, 106, 'Quezon'),
(2778, 106, 'Salavante'),
(2779, 106, 'Sapang'),
(2780, 106, 'Sonson Ongkit'),
(2781, 106, 'Suaco'),
(2782, 106, 'Tagac'),
(2783, 106, 'Takipan'),
(2784, 106, 'Talogtog'),
(2785, 106, 'Tococ Barikir'),
(2786, 106, 'Torre 1st'),
(2787, 106, 'Torre 2nd'),
(2788, 106, 'Torres Bugallon'),
(2789, 106, 'Umangan'),
(2790, 106, 'Zamora'),
(2791, 107, 'Amanoaoac'),
(2792, 107, 'Apaya'),
(2793, 107, 'Aserda'),
(2794, 107, 'Baloling'),
(2795, 107, 'Coral'),
(2796, 107, 'Golden'),
(2797, 107, 'Jimenez'),
(2798, 107, 'Lambayan'),
(2799, 107, 'Luyan'),
(2800, 107, 'Nilombot'),
(2801, 107, 'Pias'),
(2802, 107, 'Poblacion'),
(2803, 107, 'Primicias'),
(2804, 107, 'Santa Maria'),
(2805, 107, 'Torres'),
(2806, 108, 'Barangobong'),
(2807, 108, 'Batchelor East'),
(2808, 108, 'Batchelor West'),
(2809, 108, 'Burgos'),
(2810, 108, 'Cacandungan'),
(2811, 108, 'Calapugan'),
(2812, 108, 'Canarem'),
(2813, 108, 'Luna'),
(2814, 108, 'Poblacion East'),
(2815, 108, 'Poblacion West'),
(2816, 108, 'Rizal'),
(2817, 108, 'Salud'),
(2818, 108, 'San Eugenio'),
(2819, 108, 'San Macario Norte'),
(2820, 108, 'San Macario Sur'),
(2821, 108, 'San Maximo'),
(2822, 108, 'San Miguel'),
(2823, 108, 'Silag'),
(2824, 109, 'Alipangpang'),
(2825, 109, 'Amagbagan'),
(2826, 109, 'Balacag'),
(2827, 109, 'Banding'),
(2828, 109, 'Bantugan'),
(2829, 109, 'Batakil'),
(2830, 109, 'Bobonan'),
(2831, 109, 'Buneg'),
(2832, 109, 'Cablong'),
(2833, 109, 'Castaño'),
(2834, 109, 'Dilan'),
(2835, 109, 'Don Benito'),
(2836, 109, 'Haway'),
(2837, 109, 'Imbalbalatong'),
(2838, 109, 'Inoman'),
(2839, 109, 'Laoac'),
(2840, 109, 'Maambal'),
(2841, 109, 'Malasin'),
(2842, 109, 'Malokiat'),
(2843, 109, 'Manaol'),
(2844, 109, 'Nama'),
(2845, 109, 'Nantangalan'),
(2846, 109, 'Palacpalac'),
(2847, 109, 'Palguyod'),
(2848, 109, 'Poblacion I'),
(2849, 109, 'Poblacion II'),
(2850, 109, 'Poblacion III'),
(2851, 109, 'Poblacion IV'),
(2852, 109, 'Rosario'),
(2853, 109, 'Sugcong'),
(2854, 109, 'Talogtog'),
(2855, 109, 'Tulnac'),
(2856, 109, 'Villegas'),
(2857, 109, 'Casanfernandoan'),
(2858, 110, 'Acop'),
(2859, 110, 'Bakit-Bakit'),
(2860, 110, 'Balingcanaway'),
(2861, 110, 'Cabalaoangan Norte'),
(2862, 110, 'Cabalaoangan Sur'),
(2863, 110, 'Camangaan'),
(2864, 110, 'Capitan Tomas'),
(2865, 110, 'Carmay West'),
(2866, 110, 'Carmen East'),
(2867, 110, 'Carmen West'),
(2868, 110, 'Casanicolasan'),
(2869, 110, 'Coliling'),
(2870, 110, 'Calanutan'),
(2871, 110, 'Guiling'),
(2872, 110, 'Palakipak'),
(2873, 110, 'Pangaoan'),
(2874, 110, 'Rabago'),
(2875, 110, 'Rizal'),
(2876, 110, 'Salvacion'),
(2877, 110, 'San Antonio'),
(2878, 110, 'San Bartolome'),
(2879, 110, 'San Isidro'),
(2880, 110, 'San Luis'),
(2881, 110, 'San Pedro East'),
(2882, 110, 'San Pedro West'),
(2883, 110, 'San Vicente'),
(2884, 110, 'San Angel'),
(2885, 110, 'Station District'),
(2886, 110, 'Tomana East'),
(2887, 110, 'Tomana West'),
(2888, 110, 'Zone I'),
(2889, 110, 'Zone IV'),
(2890, 110, 'Carmay East'),
(2891, 110, 'Don Antonio Village'),
(2892, 110, 'Zone II'),
(2893, 110, 'Zone III'),
(2894, 110, 'Zone V'),
(2895, 111, 'Ambalangan-Dalin'),
(2896, 111, 'Angio'),
(2897, 111, 'Anonang'),
(2898, 111, 'Aramal'),
(2899, 111, 'Bigbiga'),
(2900, 111, 'Binday'),
(2901, 111, 'Bolaoen'),
(2902, 111, 'Bolasi'),
(2903, 111, 'Cayanga'),
(2904, 111, 'Gumot'),
(2905, 111, 'Inmalog'),
(2906, 111, 'Lekep-Butao'),
(2907, 111, 'Longos'),
(2908, 111, 'Mabilao'),
(2909, 111, 'Nibaliw Central'),
(2910, 111, 'Nibaliw East'),
(2911, 111, 'Nibaliw Magliba'),
(2912, 111, 'Palapad'),
(2913, 111, 'Poblacion'),
(2914, 111, 'Rabon'),
(2915, 111, 'Sagud-Bahley'),
(2916, 111, 'Sobol'),
(2917, 111, 'Tempra-Guilig'),
(2918, 111, 'Tocok'),
(2919, 111, 'Lipit-Tomeeng'),
(2920, 111, 'Colisao'),
(2921, 111, 'Nibaliw Narvarte'),
(2922, 111, 'Nibaliw Vidal'),
(2923, 111, 'Alacan'),
(2924, 111, 'Cabaruan'),
(2925, 111, 'Inmalog Norte'),
(2926, 111, 'Longos-Amangonan-Parac-Parac Fabrica'),
(2927, 111, 'Longos Proper'),
(2928, 111, 'Tiblong'),
(2929, 112, 'Awai'),
(2930, 112, 'Bolo'),
(2931, 112, 'Capaoay'),
(2932, 112, 'Casibong'),
(2933, 112, 'Imelda'),
(2934, 112, 'Guibel'),
(2935, 112, 'Labney'),
(2936, 112, 'Magsaysay'),
(2937, 112, 'Lobong'),
(2938, 112, 'Macayug'),
(2939, 112, 'Bagong Pag-asa'),
(2940, 112, 'San Guillermo'),
(2941, 112, 'San Jose'),
(2942, 112, 'San Juan'),
(2943, 112, 'San Roque'),
(2944, 112, 'San Vicente'),
(2945, 112, 'Santa Cruz'),
(2946, 112, 'Santa Maria'),
(2947, 112, 'Santo Tomas'),
(2948, 113, 'San Antonio-Arzadon'),
(2949, 113, 'Cabacaraan'),
(2950, 113, 'Cabaritan'),
(2951, 113, 'Flores'),
(2952, 113, 'Guiset Norte'),
(2953, 113, 'Guiset Sur'),
(2954, 113, 'Lapalo'),
(2955, 113, 'Nagsaag'),
(2956, 113, 'Narra'),
(2957, 113, 'San Bonifacio'),
(2958, 113, 'San Juan'),
(2959, 113, 'San Roque'),
(2960, 113, 'San Vicente'),
(2961, 113, 'Sto. Domingo'),
(2962, 114, 'Bensican'),
(2963, 114, 'Cabitnongan'),
(2964, 114, 'Cabuloan'),
(2965, 114, 'Cacabugaoan'),
(2966, 114, 'Calanutian'),
(2967, 114, 'Calaocan'),
(2968, 114, 'Camangaan'),
(2969, 114, 'Camindoroan'),
(2970, 114, 'Casaratan'),
(2971, 114, 'Dalumpinas'),
(2972, 114, 'Fianza'),
(2973, 114, 'Lungao'),
(2974, 114, 'Malico'),
(2975, 114, 'Malilion'),
(2976, 114, 'Nagkaysa'),
(2977, 114, 'Nining'),
(2978, 114, 'Poblacion East'),
(2979, 114, 'Poblacion West'),
(2980, 114, 'Salingcob'),
(2981, 114, 'Salpad'),
(2982, 114, 'San Felipe East'),
(2983, 114, 'San Felipe West'),
(2984, 114, 'San Isidro'),
(2985, 114, 'San Jose'),
(2986, 114, 'San Rafael Centro'),
(2987, 114, 'San Rafael East'),
(2988, 114, 'San Rafael West'),
(2989, 114, 'San Roque'),
(2990, 114, 'Santa Maria East'),
(2991, 114, 'Santa Maria West'),
(2992, 114, 'Santo Tomas'),
(2993, 114, 'Siblot'),
(2994, 114, 'Sobol'),
(2995, 115, 'Alac'),
(2996, 115, 'Baligayan'),
(2997, 115, 'Bantog'),
(2998, 115, 'Bolintaguen'),
(2999, 115, 'Cabangaran'),
(3000, 115, 'Cabalaoangan'),
(3001, 115, 'Calomboyan'),
(3002, 115, 'Carayacan'),
(3003, 115, 'Casantamarian'),
(3004, 115, 'Gonzalo'),
(3005, 115, 'Labuan'),
(3006, 115, 'Lagasit'),
(3007, 115, 'Lumayao'),
(3008, 115, 'Mabini'),
(3009, 115, 'Mantacdang'),
(3010, 115, 'Nangapugan'),
(3011, 115, 'San Pedro'),
(3012, 115, 'Ungib'),
(3013, 115, 'Poblacion Zone I'),
(3014, 115, 'Poblacion Zone II'),
(3015, 115, 'Poblacion Zone III'),
(3016, 116, 'Alibago'),
(3017, 116, 'Balingueo'),
(3018, 116, 'Banaoang'),
(3019, 116, 'Banzal'),
(3020, 116, 'Botao'),
(3021, 116, 'Cablong'),
(3022, 116, 'Carusocan'),
(3023, 116, 'Dalongue'),
(3024, 116, 'Erfe'),
(3025, 116, 'Gueguesangen'),
(3026, 116, 'Leet'),
(3027, 116, 'Malanay'),
(3028, 116, 'Maningding'),
(3029, 116, 'Maronong'),
(3030, 116, 'Maticmatic'),
(3031, 116, 'Minien East'),
(3032, 116, 'Minien West'),
(3033, 116, 'Nilombot'),
(3034, 116, 'Patayac'),
(3035, 116, 'Payas'),
(3036, 116, 'Poblacion Norte'),
(3037, 116, 'Poblacion Sur'),
(3038, 116, 'Sapang'),
(3039, 116, 'Sonquil'),
(3040, 116, 'Tebag East'),
(3041, 116, 'Tebag West'),
(3042, 116, 'Tuliao'),
(3043, 116, 'Ventinilla'),
(3044, 116, 'Primicias'),
(3045, 117, 'Bal-loy'),
(3046, 117, 'Bantog'),
(3047, 117, 'Caboluan'),
(3048, 117, 'Cal-litang'),
(3049, 117, 'Capandanan'),
(3050, 117, 'Cauplasan'),
(3051, 117, 'Dalayap'),
(3052, 117, 'Libsong'),
(3053, 117, 'Namagbagan'),
(3054, 117, 'Paitan'),
(3055, 117, 'Pataquid'),
(3056, 117, 'Pilar'),
(3057, 117, 'Poblacion East'),
(3058, 117, 'Poblacion West'),
(3059, 117, 'Pugot'),
(3060, 117, 'Samon'),
(3061, 117, 'San Alejandro'),
(3062, 117, 'San Mariano'),
(3063, 117, 'San Pablo'),
(3064, 117, 'San Patricio'),
(3065, 117, 'San Vicente'),
(3066, 117, 'Santa Cruz'),
(3067, 117, 'Sta. Rosa'),
(3068, 118, 'La Luna'),
(3069, 118, 'Poblacion East'),
(3070, 118, 'Poblacion West'),
(3071, 118, 'Salvacion'),
(3072, 118, 'San Agustin'),
(3073, 118, 'San Antonio'),
(3074, 118, 'San Jose'),
(3075, 118, 'San Marcos'),
(3076, 118, 'Santo Domingo'),
(3077, 118, 'Santo Niño'),
(3078, 119, 'Agat'),
(3079, 119, 'Alibeng'),
(3080, 119, 'Amagbagan'),
(3081, 119, 'Artacho'),
(3082, 119, 'Asan Norte'),
(3083, 119, 'Asan Sur'),
(3084, 119, 'Bantay Insik'),
(3085, 119, 'Bila'),
(3086, 119, 'Binmeckeg'),
(3087, 119, 'Bulaoen East'),
(3088, 119, 'Bulaoen West'),
(3089, 119, 'Cabaritan'),
(3090, 119, 'Calunetan'),
(3091, 119, 'Camangaan'),
(3092, 119, 'Cauringan'),
(3093, 119, 'Dungon'),
(3094, 119, 'Esperanza'),
(3095, 119, 'Killo'),
(3096, 119, 'Labayug'),
(3097, 119, 'Paldit'),
(3098, 119, 'Pindangan'),
(3099, 119, 'Pinmilapil'),
(3100, 119, 'Poblacion Central'),
(3101, 119, 'Poblacion Norte'),
(3102, 119, 'Poblacion Sur'),
(3103, 119, 'Sagunto'),
(3104, 119, 'Inmalog'),
(3105, 119, 'Tara-tara'),
(3106, 120, 'Baquioen'),
(3107, 120, 'Baybay Norte'),
(3108, 120, 'Baybay Sur'),
(3109, 120, 'Bolaoen'),
(3110, 120, 'Cabalitian'),
(3111, 120, 'Calumbuyan'),
(3112, 120, 'Camagsingalan'),
(3113, 120, 'Caoayan'),
(3114, 120, 'Capantolan'),
(3115, 120, 'Macaycayawan'),
(3116, 120, 'Paitan East'),
(3117, 120, 'Paitan West'),
(3118, 120, 'Pangascasan'),
(3119, 120, 'Poblacion'),
(3120, 120, 'Santo Domingo'),
(3121, 120, 'Seselangen'),
(3122, 120, 'Sioasio East'),
(3123, 120, 'Sioasio West'),
(3124, 120, 'Victoria'),
(3125, 121, 'Agno'),
(3126, 121, 'Amistad'),
(3127, 121, 'Barangobong'),
(3128, 121, 'Carriedo'),
(3129, 121, 'C. Lichauco'),
(3130, 121, 'Evangelista'),
(3131, 121, 'Guzon'),
(3132, 121, 'Lawak'),
(3133, 121, 'Legaspi'),
(3134, 121, 'Libertad'),
(3135, 121, 'Magallanes'),
(3136, 121, 'Panganiban'),
(3137, 121, 'Barangay A'),
(3138, 121, 'Barangay B'),
(3139, 121, 'Barangay C'),
(3140, 121, 'Barangay D'),
(3141, 121, 'Saleng'),
(3142, 121, 'Santo Domingo'),
(3143, 121, 'Toketec'),
(3144, 121, 'Trenchera'),
(3145, 121, 'Zamora'),
(3146, 122, 'Abot Molina'),
(3147, 122, 'Alo-o'),
(3148, 122, 'Amaronan'),
(3149, 122, 'Annam'),
(3150, 122, 'Bantug'),
(3151, 122, 'Baracbac'),
(3152, 122, 'Barat'),
(3153, 122, 'Buenavista'),
(3154, 122, 'Cabalitian'),
(3155, 122, 'Cabaruan'),
(3156, 122, 'Cabatuan'),
(3157, 122, 'Cadiz'),
(3158, 122, 'Calitlitan'),
(3159, 122, 'Capas'),
(3160, 122, 'Carosalesan'),
(3161, 122, 'Casilan'),
(3162, 122, 'Caurdanetaan'),
(3163, 122, 'Concepcion'),
(3164, 122, 'Decreto'),
(3165, 122, 'Diaz'),
(3166, 122, 'Diket'),
(3167, 122, 'Don Justo Abalos'),
(3168, 122, 'Don Montano'),
(3169, 122, 'Esperanza'),
(3170, 122, 'Evangelista'),
(3171, 122, 'Flores'),
(3172, 122, 'Fulgosino'),
(3173, 122, 'Gonzales'),
(3174, 122, 'La Paz'),
(3175, 122, 'Labuan'),
(3176, 122, 'Lauren'),
(3177, 122, 'Lubong'),
(3178, 122, 'Luna Weste'),
(3179, 122, 'Luna Este'),
(3180, 122, 'Mantacdang'),
(3181, 122, 'Maseil-seil'),
(3182, 122, 'Nampalcan'),
(3183, 122, 'Nancalabasaan'),
(3184, 122, 'Pangangaan'),
(3185, 122, 'Papallasen'),
(3186, 122, 'Pemienta'),
(3187, 122, 'Poblacion East'),
(3188, 122, 'Poblacion West'),
(3189, 122, 'Prado'),
(3190, 122, 'Resurreccion'),
(3191, 122, 'Ricos'),
(3192, 122, 'San Andres'),
(3193, 122, 'San Juan'),
(3194, 122, 'San Leon'),
(3195, 122, 'San Pablo'),
(3196, 122, 'San Vicente'),
(3197, 122, 'Santa Maria'),
(3198, 122, 'Santa Rosa'),
(3199, 122, 'Sinabaan'),
(3200, 122, 'Tanggal Sawang'),
(3201, 122, 'Cabangaran'),
(3202, 122, 'Carayungan Sur'),
(3203, 122, 'Del Rosario'),
(3204, 123, 'Angatel'),
(3205, 123, 'Balangay'),
(3206, 123, 'Batancaoa'),
(3207, 123, 'Baug'),
(3208, 123, 'Bayaoas'),
(3209, 123, 'Bituag'),
(3210, 123, 'Camambugan'),
(3211, 123, 'Dalanguiring'),
(3212, 123, 'Duplac'),
(3213, 123, 'Galarin'),
(3214, 123, 'Gueteb'),
(3215, 123, 'Malaca'),
(3216, 123, 'Malayo'),
(3217, 123, 'Malibong'),
(3218, 123, 'Pasibi East'),
(3219, 123, 'Pasibi West'),
(3220, 123, 'Pisuac'),
(3221, 123, 'Poblacion'),
(3222, 123, 'Real'),
(3223, 123, 'Salavante'),
(3224, 123, 'Sawat'),
(3225, 124, 'Amamperez'),
(3226, 124, 'Bacag'),
(3227, 124, 'Barangobong'),
(3228, 124, 'Barraca'),
(3229, 124, 'Capulaan'),
(3230, 124, 'Caramutan'),
(3231, 124, 'La Paz'),
(3232, 124, 'Labit'),
(3233, 124, 'Lipay'),
(3234, 124, 'Lomboy'),
(3235, 124, 'Piaz'),
(3236, 124, 'Zone V'),
(3237, 124, 'Zone I'),
(3238, 124, 'Zone II'),
(3239, 124, 'Zone III'),
(3240, 124, 'Zone IV'),
(3241, 124, 'Puelay'),
(3242, 124, 'San Blas'),
(3243, 124, 'San Nicolas'),
(3244, 124, 'Tombod'),
(3245, 124, 'Unzad'),
(3246, 125, 'Anis'),
(3247, 125, 'Botigue'),
(3248, 125, 'Caaringayan'),
(3249, 125, 'Domingo Alarcio'),
(3250, 125, 'Cabilaoan West'),
(3251, 125, 'Cabulalaan'),
(3252, 125, 'Calaoagan'),
(3253, 125, 'Calmay'),
(3254, 125, 'Casampagaan'),
(3255, 125, 'Casanestebanan'),
(3256, 125, 'Casantiagoan'),
(3257, 125, 'Inmanduyan'),
(3258, 125, 'Poblacion'),
(3259, 125, 'Lebueg'),
(3260, 125, 'Maraboc'),
(3261, 125, 'Nanbagatan'),
(3262, 125, 'Panaga'),
(3263, 125, 'Talogtog'),
(3264, 125, 'Turko'),
(3265, 125, 'Yatyat'),
(3266, 125, 'Balligi'),
(3267, 125, 'Banuar');

-- --------------------------------------------------------

--
-- Table structure for table `buyer_e_linkages`
--

CREATE TABLE `buyer_e_linkages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `commodity` varchar(255) NOT NULL,
  `subCommodity` varchar(255) NOT NULL,
  `variety` varchar(255) NOT NULL,
  `frequency` varchar(255) NOT NULL,
  `volume` varchar(255) NOT NULL,
  `userId` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `commodities`
--

CREATE TABLE `commodities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `commodity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `commodities`
--

INSERT INTO `commodities` (`id`, `commodity`) VALUES
(1, 'Rice'),
(2, 'Corn'),
(3, 'HVCDP'),
(4, 'Livestock');

-- --------------------------------------------------------

--
-- Table structure for table `cso_accreditations`
--

CREATE TABLE `cso_accreditations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `association` varchar(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `amendedOmnibusSwornStatement` varchar(255) NOT NULL,
  `checklistCsoRequirement` varchar(255) NOT NULL,
  `csoApplicationForm` varchar(255) NOT NULL,
  `secretaryCertificate` varchar(255) NOT NULL,
  `swornAffidavit` varchar(255) NOT NULL,
  `userId` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `municipality_id` bigint(20) UNSIGNED NOT NULL,
  `district_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `municipality_id`, `district_name`) VALUES
(1, 1, 'District II'),
(2, 2, 'District I'),
(3, 3, 'District II'),
(4, 4, 'District II'),
(5, 5, 'District I'),
(6, 6, 'District II'),
(7, 7, 'District I'),
(8, 8, 'District I'),
(9, 9, 'District II'),
(10, 10, 'District II'),
(11, 11, 'District II'),
(12, 12, 'District II'),
(13, 13, 'District I'),
(14, 14, 'District II'),
(15, 15, 'District II'),
(16, 16, 'District II'),
(17, 17, 'District II'),
(18, 18, 'District II'),
(19, 19, 'District II'),
(20, 20, 'District I'),
(21, 21, 'District I'),
(22, 22, 'District I'),
(23, 23, 'District II'),
(24, 24, 'District I'),
(25, 25, 'District II'),
(26, 26, 'District II'),
(27, 27, 'District II'),
(28, 28, 'District II'),
(29, 29, 'District I'),
(30, 30, 'District II'),
(31, 31, 'District I'),
(32, 32, 'District II'),
(33, 33, 'District II'),
(34, 34, 'District II'),
(35, 35, 'District II'),
(36, 36, 'District I'),
(37, 37, 'District I'),
(38, 38, 'District I'),
(39, 39, 'District II'),
(40, 40, 'District I'),
(41, 41, 'District I'),
(42, 42, 'District I'),
(43, 43, 'District II'),
(44, 44, 'District II'),
(45, 45, 'District I'),
(46, 46, 'District II'),
(47, 47, 'District II'),
(48, 48, 'District II'),
(49, 49, 'District I'),
(50, 50, 'District II'),
(51, 51, 'District I'),
(52, 52, 'District I'),
(53, 53, 'District II'),
(54, 54, 'District II'),
(55, 55, 'District I'),
(56, 56, 'District II'),
(57, 57, 'District I'),
(58, 58, 'District I'),
(59, 59, 'District II'),
(60, 60, 'District II'),
(61, 61, 'District I'),
(62, 62, 'District II'),
(63, 63, 'District I'),
(64, 64, 'District I'),
(65, 65, 'District II'),
(66, 66, 'District II'),
(67, 67, 'District II'),
(68, 68, 'District I'),
(69, 69, 'District II'),
(70, 70, 'District II'),
(71, 71, 'District II'),
(72, 72, 'District I'),
(73, 73, 'District I'),
(74, 74, 'District II'),
(75, 75, 'District I'),
(76, 76, 'District I'),
(77, 77, 'District II'),
(78, 78, 'District I'),
(79, 79, 'District IV'),
(80, 80, 'District III'),
(81, 81, 'District V'),
(82, 82, 'District I'),
(83, 83, 'District II'),
(84, 84, 'District V'),
(85, 85, 'District I'),
(86, 86, 'District VI'),
(87, 87, 'District VI'),
(88, 88, 'District I'),
(89, 89, 'District II'),
(90, 90, 'District V'),
(91, 91, 'District III'),
(92, 92, 'District V'),
(93, 93, 'District II'),
(94, 94, 'District I'),
(95, 95, 'District II'),
(96, 96, 'District I'),
(97, 97, 'District III'),
(98, 98, 'District I'),
(99, 99, 'District I'),
(100, 100, 'District II'),
(101, 101, 'District II'),
(102, 102, 'District I'),
(103, 103, 'District III'),
(104, 104, 'District IV'),
(105, 105, 'District IV'),
(106, 106, 'District II'),
(107, 107, 'District III'),
(108, 108, 'District VI'),
(109, 109, 'District V'),
(110, 110, 'District VI'),
(111, 111, 'District IV'),
(112, 112, 'District IV'),
(113, 113, 'District VI'),
(114, 114, 'District VI'),
(115, 115, 'District VI'),
(116, 116, 'District III'),
(117, 117, 'District VI'),
(118, 118, 'District V'),
(119, 119, 'District V'),
(120, 120, 'District I'),
(121, 121, 'District VI'),
(122, 122, 'District VI'),
(123, 123, 'District II'),
(124, 124, 'District V'),
(125, 125, 'District V');

-- --------------------------------------------------------

--
-- Table structure for table `equipment_types`
--

CREATE TABLE `equipment_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `equipment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `equipment_types`
--

INSERT INTO `equipment_types` (`id`, `equipment`) VALUES
(1, '4 Wheel Drive Tractor'),
(2, 'Rice Combine Harvester'),
(3, 'Hand Tractor with Accessories'),
(4, 'Hauling Truck'),
(5, 'Precision Seeder'),
(6, 'Pump and Engine Set'),
(7, 'Recirculating Dryer'),
(8, 'Riding-Type Transplanter'),
(9, 'Seed Cleaner'),
(10, 'Compact Ricemill'),
(11, 'Walk-Behind Transplanter'),
(12, 'Rice Thresher'),
(13, 'Seed Spreader'),
(14, 'Incubator'),
(15, 'Forage Chopper'),
(16, 'Power Sprayer');

-- --------------------------------------------------------

--
-- Table structure for table `equipment_values`
--

CREATE TABLE `equipment_values` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `equipmentTypes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `equipment_values`
--

INSERT INTO `equipment_values` (`id`, `equipmentTypes`) VALUES
(1, 'Tractor'),
(2, 'Sprayer'),
(3, 'Cultivator');

-- --------------------------------------------------------

--
-- Table structure for table `e_linkages`
--

CREATE TABLE `e_linkages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `association` varchar(255) NOT NULL,
  `commodity` varchar(255) NOT NULL,
  `subCommodity` varchar(255) DEFAULT NULL,
  `variety` varchar(255) NOT NULL,
  `volume` varchar(255) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `userId` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `e_requests`
--

CREATE TABLE `e_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `referenceNumber` varchar(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `natureOfRequest` varchar(255) DEFAULT NULL,
  `letterOfIntent` varchar(255) DEFAULT NULL,
  `boardResolution` varchar(255) DEFAULT NULL,
  `endorsementLetter1` varchar(255) DEFAULT NULL,
  `endorsementLetter2` varchar(255) DEFAULT NULL,
  `certificateOfAvailability` varchar(255) DEFAULT NULL,
  `machineriesProposal` varchar(255) DEFAULT NULL,
  `geoTaggedPhotos` varchar(255) DEFAULT NULL,
  `geoTaggedLocation` varchar(255) DEFAULT NULL,
  `businessPlan` varchar(255) DEFAULT NULL,
  `usufruct` varchar(255) DEFAULT NULL,
  `productionManagementPlan` varchar(255) DEFAULT NULL,
  `requestStatus` varchar(255) DEFAULT NULL,
  `updatedRequestDate` date DEFAULT NULL,
  `validationForm` varchar(255) DEFAULT NULL,
  `userId` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `e_request_types`
--

CREATE TABLE `e_request_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `association` varchar(255) NOT NULL,
  `referenceNumber` varchar(255) NOT NULL,
  `requestType` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `houseNumber` varchar(255) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `office` varchar(255) NOT NULL,
  `contactNumber` varchar(255) NOT NULL,
  `emailAddress` varchar(255) NOT NULL,
  `birthDate` date NOT NULL,
  `maleCount` int(11) NOT NULL,
  `femaleCount` int(11) NOT NULL,
  `serviceArea` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `association` varchar(255) NOT NULL,
  `intervention` varchar(255) NOT NULL,
  `specification` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `fundingAgency` varchar(255) NOT NULL,
  `fundSource` varchar(255) NOT NULL,
  `moa` varchar(255) NOT NULL,
  `certificateOfAcceptance` varchar(255) NOT NULL,
  `geoTaggedPicture` varchar(255) NOT NULL,
  `cms` varchar(255) NOT NULL,
  `userId` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `facility_types`
--

CREATE TABLE `facility_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `facility` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `facility_types`
--

INSERT INTO `facility_types` (`id`, `facility`) VALUES
(1, 'Inspire'),
(2, 'LEED'),
(3, 'RPC I, RPC II, RPC III'),
(4, 'Warehouse'),
(5, 'Greenhouse'),
(6, 'Cold Storage');

-- --------------------------------------------------------

--
-- Table structure for table `facility_values`
--

CREATE TABLE `facility_values` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `facilityTypes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `facility_values`
--

INSERT INTO `facility_values` (`id`, `facilityTypes`) VALUES
(1, 'Cold Storage'),
(2, 'Greenhouse'),
(3, 'Monolithic Dome'),
(4, 'Multiplier Farm'),
(5, 'RPC'),
(6, 'Warehouse');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `funding_agencies`
--

CREATE TABLE `funding_agencies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `agency` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `funding_agencies`
--

INSERT INTO `funding_agencies` (`id`, `agency`) VALUES
(1, 'DAR'),
(2, 'DA'),
(3, 'DOLE'),
(4, 'DTI'),
(5, 'DOST'),
(6, 'PhilMech');

-- --------------------------------------------------------

--
-- Table structure for table `fund_sources`
--

CREATE TABLE `fund_sources` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `source` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `fund_sources`
--

INSERT INTO `fund_sources` (`id`, `source`) VALUES
(1, 'CORN'),
(2, 'RICE'),
(3, 'HVCDP'),
(4, 'NLP'),
(5, 'NOAP'),
(6, '4K'),
(7, 'SAAD'),
(8, 'AMIA'),
(9, 'BP2');

-- --------------------------------------------------------

--
-- Table structure for table `machineries`
--

CREATE TABLE `machineries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `association` varchar(255) NOT NULL,
  `intervention` varchar(255) NOT NULL,
  `specification` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `fundingAgency` varchar(255) NOT NULL,
  `fundSource` varchar(255) NOT NULL,
  `engineNumber` varchar(255) NOT NULL,
  `moa` varchar(255) NOT NULL,
  `certificateOfAcceptance` varchar(255) NOT NULL,
  `geoTaggedPicture` varchar(255) NOT NULL,
  `cms` varchar(255) NOT NULL,
  `userId` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `machinery_types`
--

CREATE TABLE `machinery_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `machinery_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `machinery_types`
--

INSERT INTO `machinery_types` (`id`, `machinery_type`) VALUES
(1, '4 Wheel Drive Tractor'),
(2, 'Rice Combine Harvester'),
(3, 'Hand Tractor with Accessories'),
(4, 'Hauling Truck'),
(5, 'Precision Seeder'),
(6, 'Pump and Engine Set'),
(7, 'Recirculating Dryer'),
(8, 'Riding-Type Transplanter'),
(9, 'Seed Cleaner'),
(10, 'Compact Ricemill'),
(11, 'Walk-Behind Transplanter'),
(12, 'Rice Thresher'),
(13, 'Seed Spreader');

-- --------------------------------------------------------

--
-- Table structure for table `member_profiles`
--

CREATE TABLE `member_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `maleCount` int(11) NOT NULL,
  `femaleCount` int(11) NOT NULL,
  `totalCount` int(11) DEFAULT NULL,
  `serviceArea` varchar(255) NOT NULL,
  `farmerProfile` varchar(255) NOT NULL,
  `userId` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(5, '2024_01_30_060701_add_user_level_to_users_table', 2),
(6, '2024_01_30_065425_add_position_to_users_table', 3),
(8, '2014_10_12_100000_create_password_reset_tokens_table', 4),
(9, '2019_08_19_000000_create_failed_jobs_table', 4),
(10, '2019_12_14_000001_create_personal_access_tokens_table', 4),
(11, '2024_01_30_070126_create_users_table', 4),
(12, '2024_02_05_083709_create_province_table', 5),
(13, '2024_02_05_084229_create_municipality_table', 6),
(14, '2024_02_05_084244_create_district_table', 6),
(15, '2024_02_05_084250_create_barangay_table', 6),
(16, '2024_02_05_092302_create_provinces_table', 6),
(17, '2024_02_05_101649_create_municipalities_table', 7),
(18, '2024_02_05_103213_create_districts_table', 8),
(19, '2024_02_05_103219_create_barangays_table', 8),
(20, '2024_02_05_104219_create_barangays_table', 9),
(21, '2024_02_05_104324_create_barangays_table', 10),
(22, '2024_02_18_053334_create_association_profile_table', 11),
(23, '2024_02_18_053334_create_association_profiles_table', 12),
(24, '2024_02_19_023823_create_trainings_attended_table', 12),
(25, '2024_02_19_023823_create_attended_trainings_table', 13),
(26, '2024_02_19_034916_create_president_profiles_table', 14),
(27, '2024_02_19_071733_create_member_profiles_table', 15),
(28, '2024_02_19_072054_create_member_profiles_table', 16),
(29, '2024_02_19_073346_create_rsbsa_numbers_table', 17),
(30, '2024_02_19_074629_create_rsbsa_numbers_table', 18),
(31, '2024_02_19_075416_create_member_numbers_table', 19),
(32, '2024_02_20_021123_create_water_source_profiles_table', 20),
(33, '2024_03_06_024440_create_e_requests_table', 21),
(34, '2024_03_10_051743_create_cso_accreditations_table', 22),
(35, '2024_03_11_002534_create_rcef_accreditations_table', 23),
(36, '2024_03_11_052900_create_e_linkages_table', 24),
(37, '2024_03_11_054822_create_commodities_table', 25),
(38, '2024_03_14_023116_create_machineries_table', 26),
(39, '2024_03_14_025923_create_intervention_types_table', 27),
(40, '2024_03_14_030336_create_equipment_types_table', 28),
(41, '2024_03_14_031413_create_funding_agencies_table', 29),
(42, '2024_03_14_031423_create_fund_sources_table', 29),
(43, '2024_03_14_073211_create_facility_types_table', 30),
(44, '2024_03_14_073653_create_facilities_table', 31),
(45, '2024_03_15_023534_create_rtdmf_lists_table', 32),
(46, '2024_03_15_023935_create_rtdmf_lists_table', 33),
(47, '2024_03_21_065234_create_buyer_e_linkages_table', 34),
(48, '2024_03_25_081016_create_sub_commodities_table', 35),
(49, '2024_05_20_060355_create_e_request_types_table', 36),
(50, '2024_05_20_152212_create_e_request_types_table', 37),
(51, '2024_05_21_002844_create_nature_of_requests_table', 38),
(52, '2024_05_21_010204_create_machinery_types_table', 39),
(53, '2024_05_21_014836_create_facility_values_table', 40),
(54, '2024_05_21_021300_create_tool_types_table', 41),
(55, '2024_05_21_021318_create_equipment_values_table', 41),
(56, '2024_05_21_021335_create_agricultural_types_table', 41),
(57, '2024_05_21_021351_create_animal_types_table', 41),
(58, '2024_05_21_021406_create_other_types_table', 41),
(59, '2024_05_21_063348_create_sub_commodities_table', 42),
(60, '2024_05_29_044352_create_training_needs_table', 43),
(61, '2024_05_29_044636_create_training_types_table', 44),
(62, '2024_06_10_130152_create_request_histories_table', 45),
(63, '2024_06_15_064104_create_water_source_types_table', 46),
(64, '2024_08_08_012940_create_rsbsa_details_table', 47);

-- --------------------------------------------------------

--
-- Table structure for table `municipalities`
--

CREATE TABLE `municipalities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `province_id` bigint(20) UNSIGNED NOT NULL,
  `municipality_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `municipalities`
--

INSERT INTO `municipalities` (`id`, `province_id`, `municipality_name`) VALUES
(1, 1, 'City of Candon'),
(2, 1, 'City of Vigan'),
(3, 1, 'Alilem'),
(4, 1, 'Banayoyo'),
(5, 1, 'Bantay'),
(6, 1, 'Burgos'),
(7, 1, 'Cabugao'),
(8, 1, 'Caoayan'),
(9, 1, 'Cervantes'),
(10, 1, 'Galimuyod'),
(11, 1, 'Gregorio del Pilar'),
(12, 1, 'Lidlidda'),
(13, 1, 'Magsingal'),
(14, 1, 'Nagbukel'),
(15, 1, 'Narvacan'),
(16, 1, 'Quirino'),
(17, 1, 'Salcedo'),
(18, 1, 'San Emilio'),
(19, 1, 'San Esteban'),
(20, 1, 'San Ildefonso'),
(21, 1, 'San Juan'),
(22, 1, 'San Vicente'),
(23, 1, 'Santa'),
(24, 1, 'Santa Catalina'),
(25, 1, 'Santa Cruz'),
(26, 1, 'Santa Lucia'),
(27, 1, 'Santa Maria'),
(28, 1, 'Santiago'),
(29, 1, 'Santo Domingo'),
(30, 1, 'Sigay'),
(31, 1, 'Sinait'),
(32, 1, 'Sugpon'),
(33, 1, 'Suyo'),
(34, 1, 'Tagudin'),
(35, 2, 'City of Batac'),
(36, 2, 'City of Laoag'),
(37, 2, 'Adams'),
(38, 2, 'Bacarra'),
(39, 2, 'Badoc'),
(40, 2, 'Bangui'),
(41, 2, 'Burgos'),
(42, 2, 'Carasi'),
(43, 2, 'Currimao'),
(44, 2, 'Dingras'),
(45, 2, 'Dumalneg'),
(46, 2, 'Banna'),
(47, 2, 'Marcos'),
(48, 2, 'Nueva Era'),
(49, 2, 'Pagudpud'),
(50, 2, 'Paoay'),
(51, 2, 'Pasuquin'),
(52, 2, 'Piddig'),
(53, 2, 'Pinili'),
(54, 2, 'San Nicolas'),
(55, 2, 'Sarrat'),
(56, 2, 'Solsona'),
(57, 2, 'Vintar'),
(58, 3, 'City of San Fernando'),
(59, 3, 'Agoo'),
(60, 3, 'Aringay'),
(61, 3, 'Bacnotan'),
(62, 3, 'Bagulin'),
(63, 3, 'Balaoan'),
(64, 3, 'Bangar'),
(65, 3, 'Bauang'),
(66, 3, 'Burgos'),
(67, 3, 'Caba'),
(68, 3, 'Luna'),
(69, 3, 'Naguilian'),
(70, 3, 'Pugo'),
(71, 3, 'Rosario'),
(72, 3, 'San Gabriel'),
(73, 3, 'San Juan'),
(74, 3, 'Santo Tomas'),
(75, 3, 'Santol'),
(76, 3, 'Sudipen'),
(77, 3, 'Tubao'),
(78, 4, 'City of Alaminos'),
(79, 4, 'City of Dagupan'),
(80, 4, 'City of San Carlos'),
(81, 4, 'City of Urdaneta'),
(82, 4, 'Agno'),
(83, 4, 'Aguilar'),
(84, 4, 'Alcala'),
(85, 4, 'Anda'),
(86, 4, 'Asingan'),
(87, 4, 'Balungao'),
(88, 4, 'Bani'),
(89, 4, 'Basista'),
(90, 4, 'Bautista'),
(91, 4, 'Bayambang'),
(92, 4, 'Binalonan'),
(93, 4, 'Binmaley'),
(94, 4, 'Bolinao'),
(95, 4, 'Bugallon'),
(96, 4, 'Burgos'),
(97, 4, 'Calasiao'),
(98, 4, 'Dasol'),
(99, 4, 'Infanta'),
(100, 4, 'Labrador'),
(101, 4, 'Lingayen'),
(102, 4, 'Mabini'),
(103, 4, 'Malasiqui'),
(104, 4, 'Manaoag'),
(105, 4, 'Mangaldan'),
(106, 4, 'Mangatarem'),
(107, 4, 'Mapandan'),
(108, 4, 'Natividad'),
(109, 4, 'Pozorrubio'),
(110, 4, 'Rosales'),
(111, 4, 'San Fabian'),
(112, 4, 'San Jacinto'),
(113, 4, 'San Manuel'),
(114, 4, 'San Nicolas'),
(115, 4, 'San Quintin'),
(116, 4, 'Santa Barbara'),
(117, 4, 'Santa Maria'),
(118, 4, 'Santo Tomas'),
(119, 4, 'Sison'),
(120, 4, 'Sual'),
(121, 4, 'Tayug'),
(122, 4, 'Umingan'),
(123, 4, 'Urbiztondo'),
(124, 4, 'Villasis'),
(125, 4, 'Laoac');

-- --------------------------------------------------------

--
-- Table structure for table `nature_of_requests`
--

CREATE TABLE `nature_of_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `natureOfRequest` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nature_of_requests`
--

INSERT INTO `nature_of_requests` (`id`, `natureOfRequest`, `created_at`, `updated_at`) VALUES
(1, 'Machinery', NULL, NULL),
(2, 'Facility', NULL, NULL),
(3, 'Tools', NULL, NULL),
(4, 'Equipments', NULL, NULL),
(5, 'Agricultural', NULL, NULL),
(6, 'Animals', NULL, NULL),
(7, 'Others', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('christiantejano18@gmail.com', '$2y$12$jtFAe7LYODbnoPT2KoUp7ev88IpwxC9Fh8HnqaBu/0o/ZsYwaXKAa', '2024-03-21 22:01:26'),
('cjave08@gmail.com', '$2y$12$pry0IqFHayy7KTBaBvbbAe/L/YomOZRUIaGqvsZl2k.7F1B4mAy1G', '2024-01-29 23:15:20');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `president_profiles`
--

CREATE TABLE `president_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `middleName` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) NOT NULL,
  `suffix` varchar(255) DEFAULT NULL,
  `province` varchar(255) NOT NULL,
  `municipality` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `barangay` varchar(255) NOT NULL,
  `houseNumber` varchar(255) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `zipCode` int(11) NOT NULL,
  `position` varchar(255) NOT NULL,
  `presidentId` varchar(255) DEFAULT NULL,
  `contactNumber` varchar(255) NOT NULL,
  `birthDate` date NOT NULL,
  `userId` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE `provinces` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `province_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`id`, `province_name`) VALUES
(1, 'Ilocos Sur'),
(2, 'Ilocos Norte'),
(3, 'La Union'),
(4, 'Pangasinan');

-- --------------------------------------------------------

--
-- Table structure for table `rcef_accreditations`
--

CREATE TABLE `rcef_accreditations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `association` varchar(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `endorsementLetter` varchar(255) NOT NULL,
  `farmerProfile` varchar(255) NOT NULL,
  `letterOfIntent` varchar(255) NOT NULL,
  `omnibusSwornCertificateNotary` varchar(255) NOT NULL,
  `userId` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `request_histories`
--

CREATE TABLE `request_histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `validationForm` varchar(255) DEFAULT NULL,
  `updatedDate` date NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `referenceNumber` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rsbsa_details`
--

CREATE TABLE `rsbsa_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rsbsaNo` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `middleName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `extName` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `birthDate` date NOT NULL,
  `userId` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rtdmf_lists`
--

CREATE TABLE `rtdmf_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `commodity` varchar(255) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `attachedResult` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `municipality` varchar(255) NOT NULL,
  `userId` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `sub_commodities`
--

CREATE TABLE `sub_commodities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subCommodities` varchar(255) NOT NULL,
  `commodities_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_commodities`
--

INSERT INTO `sub_commodities` (`id`, `subCommodities`, `commodities_id`) VALUES
(1, 'Inbred', '1'),
(2, 'Hybrid', '1'),
(3, 'Opv', '2'),
(4, 'Hybrids', '2'),
(5, 'Spices', '3'),
(6, 'Lowland Vegetables', '3'),
(7, 'Others', '3'),
(8, 'Small Ruminant', '4'),
(9, 'Large Ruminant', '4'),
(10, 'Swine', '4'),
(11, 'Poultry', '4');

-- --------------------------------------------------------

--
-- Table structure for table `tool_types`
--

CREATE TABLE `tool_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `toolTypes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tool_types`
--

INSERT INTO `tool_types` (`id`, `toolTypes`) VALUES
(1, 'Garden Rake'),
(2, 'Shovel'),
(3, 'Spading Fork'),
(4, 'Water Sprinkle');

-- --------------------------------------------------------

--
-- Table structure for table `training_needs`
--

CREATE TABLE `training_needs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `trainingNeeds` varchar(255) DEFAULT NULL,
  `userId` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `training_types`
--

CREATE TABLE `training_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `trainingTypes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `training_types`
--

INSERT INTO `training_types` (`id`, `trainingTypes`) VALUES
(1, 'Entrepreneurial Training'),
(2, 'Business Plan Preparation Training'),
(3, 'Financial Literacy Training'),
(4, 'Business Modelling'),
(5, 'Simple Bookkeeping and Recording'),
(6, 'Business Operation Manual Preparation Training'),
(7, 'Agricultural Marketing'),
(8, 'Warehouse Operation and Management'),
(9, 'Preparation of Cluster Development Plan'),
(10, 'Orientation, Formulation and Profiling'),
(11, 'Training on the Preparation of Enterprise Operations Manual'),
(12, 'Training on AECA and Enterprise Assessment'),
(13, 'Workshop on Business Proposals');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `userType` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `municipality` varchar(255) NOT NULL,
  `district` varchar(255) DEFAULT '',
  `barangay` varchar(255) NOT NULL,
  `birthDate` date NOT NULL,
  `phoneNumber` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `userType`, `province`, `municipality`, `district`, `barangay`, `birthDate`, `phoneNumber`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Christian Jave Tejano', 'christiantejano18@gmail.com', 'FCA', '3', '60', NULL, '1455', '2001-08-18', '09393922025', NULL, '$2y$12$UHJPmqSmRQzMfoQ/YmuNVuR5zwHrRAKnfKaeIIqqovZUBAr.N8o5y', NULL, '2024-06-06 07:51:24', '2024-06-06 07:51:24'),
(2, 'APCO LA UNION', 'launionapco@gmail.com', 'APCOLAUNION', '', '', NULL, '', '0000-00-00', '', NULL, '$2y$12$yehOnathoL511zG4zhRdIuOe9aPK3LjsScAehp27UwVNXrRdZK.XS', NULL, '2024-06-10 01:33:04', '2024-06-10 01:33:04'),
(3, 'John Doe', 'testbuyer@gmail.com', 'BUYER', '3', '60', NULL, '1455', '2001-08-18', '09393922025', NULL, '$2y$12$5iO4R9zKcph16rLmMO8ETevBtC6pAtx8yUIvbuNpXaTVPBoVO4hgK', NULL, '2024-06-12 18:16:02', '2024-06-30 17:01:05'),
(4, 'APCO ILOCOS SUR', 'ilocossurapco@gmail.com', 'APCOILOCOSSUR', '', '', NULL, '', '0000-00-00', '', NULL, '$2y$12$ihMZsON/dBAHgS1ZypmaKOz5Cyctys8kmvbr4afkpdkBXIAHH0r2e', NULL, '2024-06-12 18:17:16', '2024-06-12 18:17:16'),
(5, 'APCO ILOCOS NORTE', 'ilocosnorteapco@gmail.com', 'APCOILOCOSNORTE', '', '', NULL, '', '0000-00-00', '', NULL, '$2y$12$jQzcab0ckQ0/BQiLiQBh5.F16/wE3rV8YuFLUoZZ.6WeVv7W.TcfO', NULL, '2024-06-12 18:18:31', '2024-06-12 18:18:31'),
(6, 'APCO PANGASINAN', 'pangasinanapco@gmail.com', 'APCOPANGASINAN', '', '', NULL, '', '0000-00-00', '', NULL, '$2y$12$KWTeUEDTKpbn2AR3EAeVSOMx4wIVp8VfNpm4nNaTF9wd75WYTYAoa', NULL, '2024-06-12 18:19:22', '2024-06-12 18:19:22'),
(7, 'ADMINISTRATOR', 'fieldsdarfo1@gmail.com', 'ADMIN', '', '', NULL, '', '0000-00-00', '', NULL, '$2y$12$nDHGDlwqmzIP2/iFuvFTsecCPcz2rxwuT1VsoxlLyR6vL06k.cnm2', NULL, '2024-06-13 17:01:25', '2024-06-13 17:01:25'),
(8, 'Christian', 'cjave08@gmail.com', 'FCA', '3', '60', '60', '1455', '2001-08-18', '09393922025', NULL, '$2y$12$5n5z9WpIW7IMO9HPtoId8eNhzAYH4M9WGou0ialQ8x9aW0DBhZX52', NULL, '2024-06-21 23:08:15', '2024-06-21 23:08:15');

-- --------------------------------------------------------

--
-- Table structure for table `water_source_profiles`
--

CREATE TABLE `water_source_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `SWIPHectares` varchar(240) DEFAULT NULL,
  `SFRHectares` varchar(240) DEFAULT NULL,
  `CISTERNHectares` varchar(240) DEFAULT NULL,
  `STWHectares` varchar(240) DEFAULT NULL,
  `PISOSHectares` varchar(240) DEFAULT NULL,
  `PIPHectares` varchar(240) DEFAULT NULL,
  `RPISHectares` varchar(240) DEFAULT NULL,
  `SPISHectares` varchar(240) DEFAULT NULL,
  `WPISHectares` varchar(240) DEFAULT NULL,
  `DDHectares` varchar(240) DEFAULT NULL,
  `CDHectares` varchar(240) DEFAULT NULL,
  `SDHectares` varchar(240) DEFAULT NULL,
  `rainfallHectares` varchar(240) DEFAULT NULL,
  `grandHectares` varchar(240) DEFAULT NULL,
  `userId` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `water_source_types`
--

CREATE TABLE `water_source_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `waterSourceTypes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `water_source_types`
--

INSERT INTO `water_source_types` (`id`, `waterSourceTypes`) VALUES
(1, 'SWIPHectares'),
(2, 'SFRHectares'),
(3, 'CISTERNHectares'),
(4, 'STWHectares'),
(5, 'PISOSHectares'),
(6, 'PIPHectares'),
(7, 'RPISHectares'),
(8, 'SPISHectares'),
(9, 'WPISHectares'),
(10, 'DDHectares'),
(11, 'CDHectares'),
(12, 'SDHectares'),
(13, 'rainfallHectares');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agricultural_types`
--
ALTER TABLE `agricultural_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `animal_types`
--
ALTER TABLE `animal_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `association_profiles`
--
ALTER TABLE `association_profiles`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `attended_trainings`
--
ALTER TABLE `attended_trainings`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `barangays`
--
ALTER TABLE `barangays`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `buyer_e_linkages`
--
ALTER TABLE `buyer_e_linkages`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `commodities`
--
ALTER TABLE `commodities`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `cso_accreditations`
--
ALTER TABLE `cso_accreditations`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `equipment_types`
--
ALTER TABLE `equipment_types`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `equipment_values`
--
ALTER TABLE `equipment_values`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e_linkages`
--
ALTER TABLE `e_linkages`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `e_requests`
--
ALTER TABLE `e_requests`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `e_request_types`
--
ALTER TABLE `e_request_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `facility_types`
--
ALTER TABLE `facility_types`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `facility_values`
--
ALTER TABLE `facility_values`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`) USING BTREE;

--
-- Indexes for table `funding_agencies`
--
ALTER TABLE `funding_agencies`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `fund_sources`
--
ALTER TABLE `fund_sources`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `machineries`
--
ALTER TABLE `machineries`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `machinery_types`
--
ALTER TABLE `machinery_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member_profiles`
--
ALTER TABLE `member_profiles`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `municipalities`
--
ALTER TABLE `municipalities`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `nature_of_requests`
--
ALTER TABLE `nature_of_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`) USING BTREE;

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`) USING BTREE,
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`) USING BTREE;

--
-- Indexes for table `president_profiles`
--
ALTER TABLE `president_profiles`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `rcef_accreditations`
--
ALTER TABLE `rcef_accreditations`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `request_histories`
--
ALTER TABLE `request_histories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rsbsa_details`
--
ALTER TABLE `rsbsa_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rtdmf_lists`
--
ALTER TABLE `rtdmf_lists`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `sub_commodities`
--
ALTER TABLE `sub_commodities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tool_types`
--
ALTER TABLE `tool_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `training_needs`
--
ALTER TABLE `training_needs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `training_types`
--
ALTER TABLE `training_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `users_email_unique` (`email`) USING BTREE;

--
-- Indexes for table `water_source_profiles`
--
ALTER TABLE `water_source_profiles`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `water_source_types`
--
ALTER TABLE `water_source_types`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agricultural_types`
--
ALTER TABLE `agricultural_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `animal_types`
--
ALTER TABLE `animal_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `association_profiles`
--
ALTER TABLE `association_profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attended_trainings`
--
ALTER TABLE `attended_trainings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `barangays`
--
ALTER TABLE `barangays`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3268;

--
-- AUTO_INCREMENT for table `buyer_e_linkages`
--
ALTER TABLE `buyer_e_linkages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `commodities`
--
ALTER TABLE `commodities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cso_accreditations`
--
ALTER TABLE `cso_accreditations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `equipment_types`
--
ALTER TABLE `equipment_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `equipment_values`
--
ALTER TABLE `equipment_values`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `e_linkages`
--
ALTER TABLE `e_linkages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `e_requests`
--
ALTER TABLE `e_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `e_request_types`
--
ALTER TABLE `e_request_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `facility_types`
--
ALTER TABLE `facility_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `facility_values`
--
ALTER TABLE `facility_values`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `funding_agencies`
--
ALTER TABLE `funding_agencies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `fund_sources`
--
ALTER TABLE `fund_sources`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `machineries`
--
ALTER TABLE `machineries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `machinery_types`
--
ALTER TABLE `machinery_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `member_profiles`
--
ALTER TABLE `member_profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `municipalities`
--
ALTER TABLE `municipalities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `nature_of_requests`
--
ALTER TABLE `nature_of_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `president_profiles`
--
ALTER TABLE `president_profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `provinces`
--
ALTER TABLE `provinces`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rcef_accreditations`
--
ALTER TABLE `rcef_accreditations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `request_histories`
--
ALTER TABLE `request_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rsbsa_details`
--
ALTER TABLE `rsbsa_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rtdmf_lists`
--
ALTER TABLE `rtdmf_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_commodities`
--
ALTER TABLE `sub_commodities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tool_types`
--
ALTER TABLE `tool_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `training_needs`
--
ALTER TABLE `training_needs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `training_types`
--
ALTER TABLE `training_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `water_source_profiles`
--
ALTER TABLE `water_source_profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `water_source_types`
--
ALTER TABLE `water_source_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
