-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Apr 2019 pada 06.59
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ticket_booking`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(40) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id`, `name`, `address`, `phone`, `gender`, `email`) VALUES
(26, 'salsabila', 'addas', '09876', 'l', 'sall'),
(27, 'salsabila amara putri', 'Cilacap', '081391666207', 'l', 'salsabilaamrp@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `passengers`
--

CREATE TABLE `passengers` (
  `id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `reservation_id` int(10) NOT NULL,
  `seat` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `passengers`
--

INSERT INTO `passengers` (`id`, `customer_id`, `reservation_id`, `seat`) VALUES
(1, 0, 2, 3),
(2, 2, 5, 2),
(3, 3, 6, 9),
(4, 4, 6, 3),
(5, 5, 6, 4),
(6, 6, 6, 1),
(7, 7, 7, 7),
(8, 8, 7, 8),
(9, 9, 7, 10),
(10, 10, 7, 5),
(11, 11, 8, 3),
(12, 12, 8, 2),
(13, 13, 8, 1),
(14, 14, 8, 10),
(15, 15, 9, 1),
(16, 16, 9, 6),
(17, 17, 10, 2),
(18, 18, 11, 8),
(19, 19, 12, 3),
(20, 20, 13, 4),
(21, 21, 14, 4),
(22, 22, 15, 2),
(23, 23, 16, 10),
(24, 24, 17, 8),
(25, 25, 18, 3),
(26, 26, 19, 2),
(27, 27, 20, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `reservation`
--

CREATE TABLE `reservation` (
  `id` int(5) NOT NULL,
  `reservation_code` varchar(9) NOT NULL,
  `reservation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(5) NOT NULL,
  `rute_id` int(5) NOT NULL,
  `status` int(1) NOT NULL,
  `proof_of_payment` varchar(222) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `reservation`
--

INSERT INTO `reservation` (`id`, `reservation_code`, `reservation_date`, `user_id`, `rute_id`, `status`, `proof_of_payment`) VALUES
(19, 'PSWT64752', '2019-04-22 16:53:57', 15, 2, 1, '14db169e525601f1596efe117c901226a20f67ae879843aa3a93bb393393b651.png'),
(20, 'PSWT67061', '2019-04-23 04:22:23', 15, 2, 0, 'a4eb5169acb4b7a5823f46a4ed93e6f64c8828c9dc04708a9bdec2a4c618592f.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rute`
--

CREATE TABLE `rute` (
  `id` int(5) NOT NULL,
  `depart` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `arrive` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `rute_from` varchar(20) NOT NULL,
  `rute_to` varchar(20) NOT NULL,
  `price` float NOT NULL,
  `class` varchar(10) NOT NULL,
  `transportation_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rute`
--

INSERT INTO `rute` (`id`, `depart`, `arrive`, `rute_from`, `rute_to`, `price`, `class`, `transportation_id`) VALUES
(1, '2019-04-22 09:13:43', '2019-04-22 13:13:47', 'Jakarta', 'Jogjakarta', 1500000, 'First', 1),
(2, '2019-04-22 04:14:11', '2019-04-22 07:14:18', 'Jogjakarta', 'Makassar', 1500000, 'Economy', 1),
(4, '2019-04-23 04:17:07', '2019-04-23 08:17:25', 'Surabaya', 'Jakarta', 2000000, 'Bussiness', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transportation`
--

CREATE TABLE `transportation` (
  `id` int(5) NOT NULL,
  `code` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `seat_qty` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transportation`
--

INSERT INTO `transportation` (`id`, `code`, `description`, `seat_qty`) VALUES
(1, 'JOGJAAIR', 'Jogja Air', '10'),
(2, 'WOWAIR', 'Wow Air', '10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(40) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `fullname`, `level`) VALUES
(15, 'sall', '$2y$10$Xm/Bsz0we3lAkfnWGQPeJOntYxWXdhy2s5FDeYxyIutYLkfNMCWVO', 'salsa', '1'),
(16, 'salsa', '$2y$10$9EPIiGhbtNp26jLJcpzlS.mdIL1lG3Rj8wvsG9LUGcH.xSMORZ7ie', 'salsa', '2'),
(17, 'qwerty', '$2y$10$hijeeiULdDRpqENQJwiFr.3MWwTyWMUeGs1BCwjy5zYR9VY9LqNcO', 'qwerty', '1'),
(18, 'chandra', '$2y$10$gqyp1z0TI7OlbVtIJrkL1e1l9wcxAi.0qDtZqy0CSKwiA0YMtkYza', 'chandra maolid pratama', '1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `passengers`
--
ALTER TABLE `passengers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `reservation_id` (`reservation_id`);

--
-- Indeks untuk tabel `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `rute_id` (`rute_id`);

--
-- Indeks untuk tabel `rute`
--
ALTER TABLE `rute`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_transportation` (`transportation_id`);

--
-- Indeks untuk tabel `transportation`
--
ALTER TABLE `transportation`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `passengers`
--
ALTER TABLE `passengers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `rute`
--
ALTER TABLE `rute`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `transportation`
--
ALTER TABLE `transportation`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
