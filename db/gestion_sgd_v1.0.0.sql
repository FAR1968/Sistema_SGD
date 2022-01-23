-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2021 at 03:38 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gestion_sgd`
--

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `uid` int(10) NOT NULL,
  `username` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `email` varchar(120) COLLATE utf8_spanish_ci DEFAULT NULL,
  `password` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `name` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `profile_pic` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`uid`, `username`, `email`, `password`, `name`, `profile_pic`) VALUES
(1, 'cazcona', 'cazcona@hotmail.com', '7699159865804d45f91f1f58a82063e8ab53c3096e2d3a490435133675feb276', 'Carla Azcona', 'Empleado'),
(2, 'mortiz', 'mortiz@gmail.com', '1ec0986db122d6ab0f46babcae7893c0fbd5edeb3365abe41a7b3049c5a54c81', 'Marta Ortiz', 'Empleado'),
(3, 'agonzales', 'agonzales@yahoo.com', 'c2db5e3ef91e5844d3f86ab1d747c0c98caafae4d4a13506a30e8afb98df04b0', 'Pedro González', 'Empleado'),
(4, 'mdiaz', 'diaz@yahoo.com', '475852443a6e4e30a86621674c146bbc49495ef5a4aeebca9c607836cb4c6071', 'Mirta Velazquez de Diaz', 'Afiliado'),
(5, 'jtorres', 'jtorres@gmail', '5c2e43aa3897446ba2aa03e07538b9987ddb356e6e36659f963880a680c2b00e', 'Jose Torres', 'Afiliado'),
(6, 'mnieves', 'mnieves@hotmail', 'f6fb117dafb4dec6486a390bc04296aa3f5432d9898b2cb2a9787caecdd6ada0', 'Matilde Nieves', 'Afiliado'),
(7, 'arosas', 'arosas@yahoo.com', '406092e8e1111a952f2264de265d86d2301b6d6c6899ddd58909c45e84760b2d', 'Ana Maria Rosas', 'Afiliado'),
(8, 'alavalle', 'alavalle@gmail.com', '7af83f2e3efa8823f6b4d3cdedfd2afc0a5512faf955cec016d8a517267e69e0', 'Andres Lavalle', 'Empresa'),
(9, 'atobal', 'atobal@gmail.com', '1a64568115480bfef97939d30013a01e21e1a76748473abb92dbe9f641b9e311', 'Anahi Tobal', 'Empresa'),
(10, 'ncuenca', 'ncuenca@hotmail.com.ar', '4e9b5b1b3be6b8fced34ce01ba30d25ad1361e60c22e53223c4b8c661396d368', 'Nicolas Cuenca', 'Empresa'),
(11, 'jcutro', 'jcutro@gmail.com', 'ca8c457d12d4d9f7102186dc30bdbd4b486ae5b879e340a4893a819960f929b7', 'Jose Maria Cutro', 'Administracion'),
(12, 'mdorian', 'mdorian@gmail.com', 'b22eb6e4559306b07a7566f14aea308e7f1003db286ce5d576fac1f0bfeb7d44', 'Maria Raquel Dorian', 'Empresa Afiliada'),
(13, 'jdimarco', 'jdimarco@gmail.com', '7d9b7b7ce3aaf6fef70489247dddd33ecdbe4c657a25ad05a523d54ad57e6051', 'Jose Luis Dimarco', 'Empresa Afiliada'),
(14, 'druiz', 'druiz@hotmail.com', '1e6760fd18ebe589e95ccd31f851c2dc92e411594ea3d009dd813ab721c8fbe5', 'Debora Ruiz', 'Empresa Afiliada'),
(15, 'ccallares', 'ccallares@gmail.com', '4414a730c5c7bbfb22d567c725c5726379850f89c9bad9b6923ed7ac30a862d5', 'Carlos Callares', 'Empresa Afiliada'),
(16, 'gmangrenis', 'mangrenis@gmail.com', '430ea52ab3ea8c1507a401962469b2c6a83e5f8f9476a19f1242756a242aa03d', 'Guillermo Mangrenis', 'Administrador');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `uid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
