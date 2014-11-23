
CREATE TABLE `avenants` (
`id` INTEGER PRIMARY KEY ASC,
  `avenant_name` TEXT,
  `avenant_date` TEXT,
  `avenant_description` TEXT,
  `projects_id` INTEGER,
  `status_id` INTEGER
);

--
-- Dumping data for table `avenants`
--

INSERT INTO `avenants` (`id`, `avenant_name`, `avenant_date`, `avenant_description`, `projects_id`, `status_id`) VALUES
(2, 'Garage Municipal Charlesbourg', '2014-11-23', 'Calfeutrage additionnel horizontal', 72, 1),
(3, 'Agrand Monarch, Laval', '2014-11-23', 'Temps supplementaire et location de grue', 75, 2),
(4, 'Tenaquip, Senneville', '2014-11-23', 'Mobilisation-Demobilisation', 76, 2),
(5, 'Assante', '2014-11-23', 'Deplacement du panneau pour permettre de gicier l''urethane', 78, 2),
(6, 'College Durocher', '2014-11-23', 'Nettoyage panneaux interieurs', 84, 2);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
`id` INTEGER PRIMARY KEY ASC,
  `name` TEXT
);

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Main d''oeuvre d''installation'),
(2, 'Main d''oeuvre d''usine'),
(3, 'Equipement d''installations'),
(4, 'Equipements de bureau et d''outillage'),
(5, 'Dessin / Ingenerie');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
`id` INTEGER PRIMARY KEY ASC,
  `name` TEXT,
  `Reference` TEXT
);

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `Reference`) VALUES
(1, 'Beauvais et Verret Inc.', 'Email'),
(2, 'Groupe Montoni', 'Email'),
(3, 'Broccolini', 'Email'),
(4, 'Espace Construction', 'Email'),
(5, 'Construction Longer', 'Email');

-- --------------------------------------------------------

--
-- Table structure for table `employes`
--

CREATE TABLE `employes` (
`id` INTEGER PRIMARY KEY ASC,
  `first_name` TEXT,
  `last_name` TEXT,
  `titles_id` INTEGER
);

--
-- Dumping data for table `employes`
--

INSERT INTO `employes` (`id`, `first_name`, `last_name`, `titles_id`) VALUES
(1, 'Frank', 'Boire', 1),
(2, 'Maxime', 'Riopelle', 2),
(3, 'Thomas', 'Courtier', 9);

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
`id` INTEGER PRIMARY KEY ASC,
  `name` TEXT,
  `tarifs` REAL,
  `category_id` INTEGER
);

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`id`, `name`, `tarifs`, `category_id`) VALUES
(1, 'Grue', 275, 3),
(2, 'Nacelle a mat articule', 25, 3),
(3, 'Echaffauds et supports', 7, 3),
(4, 'set de torches', 3, 3),
(5, 'Generatrice 7kw', 9.63, 3),
(6, 'Machine a souder', 13.75, 3),
(7, 'Ciseaux lift', 34.4, 3),
(8, 'Petits outillsages', 3.43, 3),
(9, 'Outils de percage et coupage pour ciment', 10, 3),
(10, 'Pompe a beton', 120, 3),
(11, 'Tour d''eclairage', 16.75, 3),
(12, 'Remorque d''outils varie', 5.63, 3),
(13, 'Camions de chantier', 5.56, 3),
(14, 'Roulotte', 2.36, 4),
(15, 'Telephone', 0.69, 4),
(16, 'Cosommables Bureau', 1.39, 4),
(17, 'Radio', 3.13, 4),
(18, 'Climatiseur / Chauffage', 0.38, 4);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
`id` INTEGER PRIMARY KEY ASC,
  `title` TEXT,
  `usines_id` INTEGER,
  `clients_id` INTEGER,
  `materials_id` INTEGER
);

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `usines_id`, `clients_id`, `materials_id`) VALUES
(72, 'Cafeutrage additionnel horizontal', 1, 1, 3),
(75, 'Temps supplementaire et location de grue', 1, 2, 1),
(76, 'Mobilisation-Demolisation', 1, 3, 13),
(78, 'Deplacement du panneau pour permettre de gicier l''urethane', 1, 4, 13),
(84, 'Nettoyage panneaux interieurs', 1, 5, 12);

-- --------------------------------------------------------

--
-- Table structure for table `rapport`
--

CREATE TABLE `rapport` (
`id` INTEGER PRIMARY KEY ASC,
  `avenants_id` INTEGER,
  `clients_id` INTEGER,
  `projects_id` INTEGER
);

--
-- Dumping data for table `rapport`
--

INSERT INTO `rapport` (`id`, `avenants_id`, `clients_id`, `projects_id`) VALUES
(1, 2, 1, 72),
(2, 3, 2, 75),
(3, 4, 3, 76),
(4, 5, 4, 78),
(5, 6, 5, 84);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
`id` INTEGER PRIMARY KEY ASC,
  `title` TEXT
);

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `title`) VALUES
(1, 'EN SUSPENS'),
(2, 'APPROUVE'),
(3, 'DECLIN');

-- --------------------------------------------------------

--
-- Table structure for table `titles`
--

CREATE TABLE `titles` (
`id` INTEGER PRIMARY KEY ASC,
  `title` TEXT,
  `pay_regulier` REAL,
  `pay_supp` REAL,
  `category_id` INTEGER
);

--
-- Dumping data for table `titles`
--

INSERT INTO `titles` (`id`, `title`, `pay_regulier`, `pay_supp`, `category_id`) VALUES
(1, 'Ingenieur', 75, 0, 5),
(2, 'Technician', 55, 0, 5),
(3, 'Monteurs d''acier', 62.5, 45, 1),
(4, 'Contremaitre moteur d''acier', 70, 50, 1),
(5, 'Arpenteur', 62.5, 50, 1),
(6, 'Cimentier applicateur', 60, 43, 1),
(7, 'Contremaitre cimentier applicateur', 65, 46, 1),
(8, 'Soudeur', 65, 45, 1),
(9, 'Grutier', 62.5, 45, 1),
(10, 'Manoeuvre', 55, 37, 1),
(11, 'Coordonnateur', 70, 70, 1),
(12, 'Mon demob', 62.5, 45, 1),
(13, 'Camionneur', 65, 45, 1);

-- --------------------------------------------------------

--
-- Table structure for table `usines`
--

CREATE TABLE `usines` (
`id` INTEGER PRIMARY KEY ASC,
  `name` TEXT
);

--
-- Dumping data for table `usines`
--

INSERT INTO `usines` (`id`, `name`) VALUES
(1, 'S'),
(2, 'D'),
(3, 'C');

