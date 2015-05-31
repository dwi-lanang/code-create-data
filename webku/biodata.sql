-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 30 Mei 2015 pada 16.48
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `belajar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata`
--

CREATE TABLE IF NOT EXISTS `biodata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(25) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `jenis_kelamin` enum('l','p') NOT NULL,
  `email` varchar(15) NOT NULL,
  `hobi` varchar(100) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `foto` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `biodata`
--

INSERT INTO `biodata` (`id`, `nama`, `alamat`, `no_telp`, `jenis_kelamin`, `email`, `hobi`, `agama`, `foto`) VALUES
(2, 'dwi', 'jl.xxxx', '123456', 'l', 'd@mail.com', 'membaca,menulis', 'contoh2', 'logo.png'),
(3, 'dwi lanang', 'jl.cccc', '123456', 'l', 'd@mail.com', 'membaca,menulis,main game', 'contoh3', 'apple-icon.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
