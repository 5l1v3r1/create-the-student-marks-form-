-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 20 Şub 2016, 23:14:01
-- Sunucu sürümü: 5.6.17
-- PHP Sürümü: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `notlar`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ogrenciler`
--

CREATE TABLE IF NOT EXISTS `ogrenciler` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `adı` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vize` int(11) NOT NULL,
  `final` int(11) NOT NULL,
  `ortalama` int(11) NOT NULL,
  `durum` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `ogrenciler`
--

INSERT INTO `ogrenciler` (`no`, `adı`, `vize`, `final`, `ortalama`, `durum`) VALUES
(1, 'huseyin', 55, 45, 50, 'geçti');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
