-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Mar 2023 pada 06.42
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logins`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(1, 'Gilang A.L', 'hawkoffer@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(2, 'gilang', 'hawkoffer@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(3, 'asas', 'sas@asaas', 'baa7a52965b99778f38ef37f235e9053'),
(4, 'assasas', 'sas@saas', 'baa7a52965b99778f38ef37f235e9053'),
(5, 'gilang', 'hawk@gmail.com', 'eba3c99dfc57cb7f6c2cee25b07c3d68'),
(6, 'ibnu', '$2y$10$QlkCaSvJUAVMoxYDJyOf6OWrH8m1SJbSvJ30FMUFcCexr7PcQqe.i', ''),
(7, 'lang', '$2y$10$ulHgy2py5Hd/WZE9dPccyOAS.NSOtloh0X.Ymdx8faoYAtujgvks2', 'sasoo@gmail.com'),
(8, 'erik', 'tenhag@gmail.com', '$2y$10$.PfEMoOU8ku/Us.J8EoH9uz1oeIyjsE6w0HksOStTeRy0CdmD29XG'),
(9, 'ajis', 'ajis@gmail', '$2y$10$KBIBkws/MrQjBh4V.zBCiO3nP4dWjcRZ3b1Nw3v0Ki8lcsU.l0UXW');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
