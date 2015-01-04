-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 23. Desember 2014 jam 12:47
-- Versi Server: 5.5.8
-- Versi PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `registrasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `IDadmin` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(150) NOT NULL,
  PRIMARY KEY (`IDadmin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`IDadmin`, `username`, `password`) VALUES
(1, 'admin', 'b49728019442d090c225428f9a2ea611');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gantinama`
--

CREATE TABLE IF NOT EXISTS `gantinama` (
  `Nama Pemohon` varchar(30) NOT NULL,
  `NOP Lama` varchar(30) NOT NULL,
  `Kecamatan` text NOT NULL,
  `Nama Penerima` varchar(30) NOT NULL,
  `NOP Baru` varchar(30) NOT NULL,
  `Tanggal Proses` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gantinama`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `kecamatan`
--

CREATE TABLE IF NOT EXISTS `kecamatan` (
  `idkecamatan` int(11) NOT NULL AUTO_INCREMENT,
  `namakecamatan` varchar(20) NOT NULL,
  PRIMARY KEY (`idkecamatan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data untuk tabel `kecamatan`
--

INSERT INTO `kecamatan` (`idkecamatan`, `namakecamatan`) VALUES
(5, 'Sarang'),
(6, 'Kragan'),
(7, 'Sluke'),
(8, 'Lasem'),
(9, 'Sedan'),
(10, 'Sale'),
(11, 'Pamotan'),
(12, 'Gunem'),
(13, 'Bulu'),
(15, 'Sulang'),
(16, 'Sumber'),
(17, 'Kaliori'),
(18, 'Rembang'),
(19, 'Pancur');

-- --------------------------------------------------------

--
-- Struktur dari tabel `melakukan`
--

CREATE TABLE IF NOT EXISTS `melakukan` (
  `idmelakukan` int(11) NOT NULL AUTO_INCREMENT,
  `tglmasuk` date NOT NULL,
  `tglproses` date NOT NULL,
  `Penerima` varchar(30) NOT NULL,
  `nopbaru` varchar(30) NOT NULL,
  `idpemohon` int(11) NOT NULL,
  `kodepelayanan` int(11) NOT NULL,
  PRIMARY KEY (`idmelakukan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Dumping data untuk tabel `melakukan`
--

INSERT INTO `melakukan` (`idmelakukan`, `tglmasuk`, `tglproses`, `Penerima`, `nopbaru`, `idpemohon`, `kodepelayanan`) VALUES
(38, '2014-08-06', '2014-11-04', 'Radite Indriya Sasongko', '331705000500411460', 32, 4),
(39, '2014-08-06', '2014-11-04', 'Saniscaya Caksa Pamungkas', '331705000500411470', 32, 4),
(40, '2014-08-06', '2014-11-04', 'Agustina Mayasari', '331705000500411480', 32, 4),
(41, '2014-07-16', '2014-11-04', 'H. Warsidi', '331706002000101430', 33, 2),
(42, '2014-07-22', '2014-11-04', 'H. Asir', '331706002000200400', 34, 3),
(43, '2014-08-05', '2014-11-04', 'Rohmad', '331706002000300090', 35, 5),
(44, '2014-07-31', '2014-11-04', 'Zaenal Arifin', '331706002000600540', 36, 6),
(45, '2014-12-11', '2014-12-11', 'faza', '678954', 37, 2),
(46, '2014-12-11', '2014-12-11', 'budi', '3437894', 38, 2),
(47, '2014-12-11', '2014-12-11', 'gaga', '987654', 39, 3),
(48, '2014-12-11', '2014-12-12', 'yoyo', '678954', 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelayanan`
--

CREATE TABLE IF NOT EXISTS `pelayanan` (
  `kodepelayanan` int(11) NOT NULL AUTO_INCREMENT,
  `jenispelayanan` varchar(30) NOT NULL,
  PRIMARY KEY (`kodepelayanan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `pelayanan`
--

INSERT INTO `pelayanan` (`kodepelayanan`, `jenispelayanan`) VALUES
(2, 'Ganti Nama'),
(3, 'OP Baru'),
(4, 'Pemecahan'),
(5, 'Pergantian Luas'),
(6, 'Penghapusan Bangunan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemohon`
--

CREATE TABLE IF NOT EXISTS `pemohon` (
  `idpemohon` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `idkecamatan` int(11) NOT NULL,
  `nop` varchar(30) NOT NULL,
  PRIMARY KEY (`idpemohon`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data untuk tabel `pemohon`
--

INSERT INTO `pemohon` (`idpemohon`, `nama`, `idkecamatan`, `nop`) VALUES
(32, 'Margomo', 18, '331706003000100340'),
(33, 'Warkilan', 19, '331706002000600260'),
(34, 'H. Asir', 17, '331706002000200440'),
(35, 'Rohmad', 10, '331706002000300090'),
(36, 'Zaenal Arifin', 7, '331706002000600540'),
(37, 'azka', 18, '123456'),
(38, 'dede', 5, '5678923'),
(39, 'yoyo', 9, '3456789');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE IF NOT EXISTS `petugas` (
  `idpetugas` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`idpetugas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`idpetugas`, `nama`, `username`, `password`) VALUES
(6, 'agustina', 'mayasari', 'maya'),
(8, 'azkaghausta', 'azka', 'azka'),
(10, 'PDE', 'dppkad', 'pendapatan');
