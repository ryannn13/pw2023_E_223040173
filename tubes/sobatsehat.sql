-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 10, 2023 at 06:27 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sobatsehat`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `kontak` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `email`, `kontak`, `password`) VALUES
(1, 'Ryan Hidayat', 'rynn', 'ryan.hidayat0604@gmail.com', '082114079584', '$2y$10$KtmTIPItGpmgLrOacSIznOVsmcz6rPedbxkzGqrxNSEkCY.v4Haj2'),
(2, 'Ryan', 'admin', 'ryan.hidayat@gmail.com', '081321852791', '$2y$10$WdBASAhY58uU/1B5wUzCQ.S9ddCYV2O.0YUEiLwiN8KWSv6apKygK'),
(3, 'Hidayat', 'hidayat', 'ryan.223040173@mail.unpas.ac.id', '082114079584', '$2y$10$pU0.VINUo6p2vVoN.yI4JenI44IiMzxN1LaHYu61qliI46D/Bw2t.');

-- --------------------------------------------------------

--
-- Table structure for table `category_content`
--

CREATE TABLE `category_content` (
  `id_category` int NOT NULL,
  `nama_category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `category_content`
--

INSERT INTO `category_content` (`id_category`, `nama_category`) VALUES
(1, 'Gaya Hidup Sehat'),
(2, 'Kesehatan Fisik'),
(3, 'Pengobatan Penyakit'),
(4, 'Kesehatan Masyarakat');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `detail` varchar(10000) NOT NULL,
  `id_category` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `gambar`, `judul`, `detail`, `id_category`) VALUES
(1, 'Manfaat-Air-Garam.jpg', '5 Manfaat Air Garam untuk Kaki Agar Selalu Sehat', 'Air garam juga bisa dimanfaatkan sebagai air rendaman kaki. Apalagi jika garam yang digunakan sebagai campuran adalah garam Epsom. Penggunaannya pun bukan untuk bumbu memasak, melainkan sebagai garam mandi atau berendam dan inilah manfaat air garam untuk kaki biar selalu sehat.', 2),
(13, 'Vitamin_E.jpg', 'Manfaat Vitamin E untuk Kulit', 'Vitamin E adalah vitamin larut lemak dan memiliki sifat anti-inflamasi. Manfaat vitamin E bagi tubuh sangat beragam. Vitamin E membantu mendukung sistem kekebalan tubuh, fungsi sel, dan kesehatan kulit.', 2),
(18, 'sample.png', '4 Sehat 5 Sempurna', '4 Sehat 5 Sempurna adalah makanan yang memiliki kandungan gizi yang lengkap mulai dari karbohidrat, protein, vitamin, lemak dan mineral. Makanan 4 Sehat terdiri atas makanan pokok, lauk pauk, sayur, dan buah. Sedangkan 5 Sempurna merupakan susu yang menjadi nutrisi tambahan', 1),
(43, '647c3374b845e.jpg', 'Efeknya Bagi Kesehatan Mata Saat Kekurangan Vitamin B', 'Vitamin B kompleks adalah salah satu jenis vitamin yang jangan sampai dilewatkan oleh tubuh kita. Vitamin ini memiliki peran penting dalam mendukung agar tubuh bisa berfungsi dan berkembang dengan lebih sempurna.Namun ketika tubuh mengalami kekurangan vitamin B kompleks, maka hal ini bisa berpengaruh pada kesehatan mata. Ada beberapa kondisi gangguan pada mata yang bisa terjadi di mana walaupun dianggap sepele, jangan abaikan dan segera penuhi kebutuhan vitamin B kompleks.', 2),
(44, '648415c152c1b.jpg', 'Kesadaran Kesehatan Masyarakat', 'Kesadaran kesehatan masyarakat merupakan elemen kunci dalam membangun lingkungan yang sehat dan berkelanjutan. Dengan meningkatkan kesadaran kesehatan masyarakat, kita dapat mendorong perilaku sehat, mencegah penyakit, dan meningkatkan kualitas hidup masyarakat secara keseluruhan. Dengan kerjasama dan upaya bersama, kita dapat menciptakan masyarakat yang sadar akan kesehatan dan berkomitmen untuk mencapai kesehatan yang lebih baik bagi semua.', 4),
(45, '648417458efc7.jpg', 'Mengenal dan Mengatasi Penyakit Demam Berdarah', 'Penyakit demam berdarah, juga dikenal sebagai DBD, adalah penyakit serius yang disebabkan oleh virus dengue yang ditularkan oleh nyamuk Aedes aegypti. Penyakit ini dapat menyebabkan gejala yang parah, termasuk demam tinggi, nyeri sendi dan otot, ruam, dan dalam kasus yang parah, dapat menyebabkan perdarahan internal yang mengancam jiwa. Namun, dengan penanganan yang tepat, penyakit demam berdarah dapat diatasi. \r\nPengobatan penyakit demam berdarah melibatkan perawatan medis yang tepat dan dukungan yang memadai. Jika Anda atau orang yang Anda kenal mengalami gejala yang mencurigakan demam berdarah, segera hubungi penyedia layanan kesehatan. Selalu ingat bahwa pencegahan adalah langkah terbaik dalam menghindari penyakit ini, dengan mengurangi populasi nyamuk Aedes aegypti dan mengambil langkah-langkah pencegahan untuk melindungi diri dari gigitan nyamuk.', 3);

-- --------------------------------------------------------

--
-- Table structure for table `konsultasi`
--

CREATE TABLE `konsultasi` (
  `id` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `pesan` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `konsultasi`
--

INSERT INTO `konsultasi` (`id`, `nama`, `email`, `tel`, `pesan`) VALUES
(1, 'Ryan', 'ryan.hidayat0604@gmail.com', '082114079584', 'Test'),
(3, 'Ryan Hidayat', 'ss@gmail.com', '081339458429', 'Sakit gigi'),
(8, 'Ryan Hidayat', 'ryan@gmail.com', '081339458429', 'Demam,pusing');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `kontak` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `email`, `kontak`, `password`) VALUES
(1, 'Rayen', 'rayen', 'rayen@gmail.com', '081339548429', '$2y$10$I8SsbzAqgN7skcZKJQvcoO2uXhQQMv/iLVdYNKad0nVJtPbv7JxR6'),
(3, 'Ryan Hidayat', 'ryan', 'ryan.hidayat0604@gmail.com', '082114079584', '$2y$10$Q9ZAxcZirNDMFjAMpoa.4etw4mF0X0I8J9e4oJuAU/GhcGKXLugWS'),
(4, 'sobat sehat', 'sobat', 'ss@gmail.com', '081321852791', '$2y$10$jLvgvoPJvc7zk5t.Ss59uOYuWfip3ZFehpIGKQt3TnZb7K/FUqTh6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_content`
--
ALTER TABLE `category_content`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_category` (`id_category`);

--
-- Indexes for table `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `konsultasi`
--
ALTER TABLE `konsultasi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `content`
--
ALTER TABLE `content`
  ADD CONSTRAINT `content_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category_content` (`id_category`) ON DELETE RESTRICT ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
