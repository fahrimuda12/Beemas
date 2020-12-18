-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 23. Agustus 2016 jam 00:04
-- Versi Server: 5.1.37
-- Versi PHP: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kriminal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kapolsek`
--

CREATE TABLE IF NOT EXISTS `kapolsek` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nrp` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `pangkat` varchar(30) NOT NULL,
  `gambar` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data untuk tabel `kapolsek`
--

INSERT INTO `kapolsek` (`id`, `nrp`, `nama`, `pangkat`, `gambar`) VALUES
(41, 'jhe', 'jhe', 'jhe', '6513139104_279687919037061_1110670678149448301_n.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kasus`
--

CREATE TABLE IF NOT EXISTS `kasus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `namakasus` varchar(30) NOT NULL,
  `masatahanan` varchar(30) NOT NULL,
  `denda` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data untuk tabel `kasus`
--

INSERT INTO `kasus` (`id`, `namakasus`, `masatahanan`, `denda`) VALUES
(42, 'maling ayam', 'maling ayam', '300');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembantu`
--

CREATE TABLE IF NOT EXISTS `pembantu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nrp` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `pangkat` varchar(30) NOT NULL,
  `gambar` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data untuk tabel `pembantu`
--

INSERT INTO `pembantu` (`id`, `nrp`, `nama`, `pangkat`, `gambar`) VALUES
(42, 'dfsdsf', 'dsfdsfds', 'fdsfds', '7713139104_279687919037061_1110670678149448301_n.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penerima`
--

CREATE TABLE IF NOT EXISTS `penerima` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nrp` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `pangkat` varchar(30) NOT NULL,
  `gambar` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data untuk tabel `penerima`
--

INSERT INTO `penerima` (`id`, `nrp`, `nama`, `pangkat`, `gambar`) VALUES
(44, 'penerima laporan edit', 'penerima laporan edit ', 'penerima laporan edit', '2113139104_279687919037061_1110670678149448301_n.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penerimaperintah`
--

CREATE TABLE IF NOT EXISTS `penerimaperintah` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nrp` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `pangkat` varchar(30) NOT NULL,
  `gambar` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data untuk tabel `penerimaperintah`
--

INSERT INTO `penerimaperintah` (`id`, `nrp`, `nama`, `pangkat`, `gambar`) VALUES
(41, 'penerimaperintahedit', 'penerimaperintahedit', 'penerimaperintahedit', '5813139104_279687919037061_1110670678149448301_n.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyidik`
--

CREATE TABLE IF NOT EXISTS `penyidik` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nrp` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `pangkat` varchar(30) NOT NULL,
  `gambar` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data untuk tabel `penyidik`
--

INSERT INTO `penyidik` (`id`, `nrp`, `nama`, `pangkat`, `gambar`) VALUES
(42, 'anton', 'anton', 'anton', '3313139104_279687919037061_1110670678149448301_n.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tersangka`
--

CREATE TABLE IF NOT EXISTS `tersangka` (
  `idtersangka` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `jk` varchar(30) NOT NULL,
  `tempat` varchar(30) NOT NULL,
  `tgl` varchar(30) NOT NULL,
  `umur` int(5) NOT NULL,
  `suku` varchar(30) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `warga` varchar(30) NOT NULL,
  `agama` varchar(30) NOT NULL,
  `tempattgl` varchar(30) NOT NULL,
  `ket` text NOT NULL,
  `gambar` text NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`idtersangka`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `tersangka`
--

INSERT INTO `tersangka` (`idtersangka`, `nama`, `jk`, `tempat`, `tgl`, `umur`, `suku`, `pekerjaan`, `warga`, `agama`, `tempattgl`, `ket`, `gambar`, `status`) VALUES
(3, 'baim', 'laki', 'payakumvbuh', '10-10-1992', 23, 'minang', 'dev', 'indonesia', 'islam', 'subaladung', 'fdsfdsfsdfds dsfgdsfsd sdfdsfd s', '6213139104_279687919037061_1110670678149448301_n.jpg', 'ditangkap');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
