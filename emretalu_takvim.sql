-- phpMyAdmin SQL Dump
-- version 4.0.8
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 06 Kas 2013, 20:40:21
-- Sunucu sürümü: 5.5.32-cll
-- PHP Sürümü: 5.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `emretalu_takvim`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `olaylar`
--

CREATE TABLE IF NOT EXISTS `olaylar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `olay_adi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `olay_tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `olaylar`
--

INSERT INTO `olaylar` (`id`, `olay_adi`, `olay_tarih`) VALUES
(1, '0', '2013-10-21 21:43:17');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
