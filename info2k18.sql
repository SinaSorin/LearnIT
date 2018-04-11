-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2018 at 10:21 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `info2k18`
--

-- --------------------------------------------------------

--
-- Table structure for table `capitole`
--

CREATE TABLE `capitole` (
  `id` int(11) NOT NULL,
  `titlu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `capitole`
--

INSERT INTO `capitole` (`id`, `titlu`) VALUES
(3, 'Matrice'),
(4, 'Subprograme'),
(5, 'Backtracking'),
(6, 'Grafuri');

-- --------------------------------------------------------

--
-- Table structure for table `intrebari`
--

CREATE TABLE `intrebari` (
  `id` int(11) NOT NULL,
  `continut` varchar(256) NOT NULL,
  `id_test` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `intrebari`
--

INSERT INTO `intrebari` (`id`, `continut`, `id_test`) VALUES
(6, 'Ce este un graf neorientat?', 11),
(7, 'Cum putem vizualiza un graf?', 11),
(8, 'Ce contine un graf?', 11);

-- --------------------------------------------------------

--
-- Table structure for table `lectii`
--

CREATE TABLE `lectii` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `capitol` varchar(50) NOT NULL,
  `titlu` varchar(50) DEFAULT NULL,
  `lectie` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lectii`
--

INSERT INTO `lectii` (`id`, `id_user`, `capitol`, `titlu`, `lectie`) VALUES
(2, 15, 'Grafuri', 'Grafuri neorientate. Notiuni introductive', '<p><strong>Definitie</strong></p><p>Se numeste graf neorientat o pereche ordonata de multimi (X, U) cu semnificata: X este o multime finita si nevida de elemente numite noduri, U este o multime de perechi neordonate (submultimi cu doua elemente din X), numite muchii.</p><p>Un graf neorientat se noteaza cu G=(X, U), unde Xse numeste multime nodurilor grafului G, iar U se numeste multime muchiilor.</p><p>O submultime {x, y } de varfuri din X se noteaza cu u=[x, y] (u este muchie iar x si y sunt extremitatile), u apartine multimii U.</p><p>In cazul general, intr-un graf neorientat G= (X, U), se folosesc notatiile:</p><ul><li><strong>card(X)</strong>= n numarul de noduri din graf;</li><li><strong>card(U)</strong>=m numarul de muchii din graf.</li></ul><p>Multe dintre problemele de interes practic pot fi reprezentate din grafuri. Structura unui website poate fi reprezentata folosind un graf: nodurile sunt paginile website-ului; exista o muchie care leaga pagina oarecare A de pagina oarecare B, daca si numai daca pagina A contine un link catre pagina B.</p><p>Pentru vizualizare si intelegere intuitiva, un graf poate fi reprezentat cu ajutorul unei figuri plane, in care fiecarui nod x care aparine multimii X i se ascoiaza un punct in plan, iar fiecarei muchii u= [x,y] I se asociaza o line ce uneste punctele corespunzatoare nodurilor x si y.</p><p>Fie u care apartine multimii U, u=[x,y]. Nodurile x si y din X sunt adiacente in G iar u si x sunt incidente(la fel u si y).</p>'),
(3, 15, 'Grafuri', 'Grafuri neorientate. Gradul unui nod', '<p><strong>Definitie</strong></p><p>Prin gradul unui nod x, notat d(x), se intelege numarul de muchii incidente cu nodul x.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `medii`
--

CREATE TABLE `medii` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nr` int(1) NOT NULL,
  `medie` float(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `note`
--

CREATE TABLE `note` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_test` int(11) NOT NULL,
  `nota` float(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `note`
--

INSERT INTO `note` (`id`, `id_user`, `id_test`, `nota`) VALUES
(5, 15, 11, 66.67);

-- --------------------------------------------------------

--
-- Table structure for table `raspuns`
--

CREATE TABLE `raspuns` (
  `id` int(11) NOT NULL,
  `continut` varchar(256) NOT NULL,
  `corect` int(11) NOT NULL,
  `id_intrebare` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `raspuns`
--

INSERT INTO `raspuns` (`id`, `continut`, `corect`, `id_intrebare`) VALUES
(15, 'O pereche ordonata de multimi', 1, 6),
(16, 'Un sir', 0, 6),
(17, 'Prin intermediul unui joc', 0, 7),
(18, 'Prin intermediul unei figuri', 1, 7),
(19, 'Cifre', 0, 8),
(20, 'Noduri si muchii', 1, 8);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_lectie` int(11) NOT NULL,
  `titlu` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `id_user`, `id_lectie`, `titlu`) VALUES
(11, 15, 3, 'Test 1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_uid` varchar(50) NOT NULL,
  `user_status` int(11) NOT NULL,
  `user_first` varchar(50) NOT NULL,
  `user_last` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_pwd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_uid`, `user_status`, `user_first`, `user_last`, `user_email`, `user_pwd`) VALUES
(15, 'Admin', 1, 'Sina', 'Sorin', 'admin@gmail.com', '90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `capitole`
--
ALTER TABLE `capitole`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `intrebari`
--
ALTER TABLE `intrebari`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lectii`
--
ALTER TABLE `lectii`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medii`
--
ALTER TABLE `medii`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `raspuns`
--
ALTER TABLE `raspuns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `capitole`
--
ALTER TABLE `capitole`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `intrebari`
--
ALTER TABLE `intrebari`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `lectii`
--
ALTER TABLE `lectii`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `medii`
--
ALTER TABLE `medii`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `note`
--
ALTER TABLE `note`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `raspuns`
--
ALTER TABLE `raspuns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
