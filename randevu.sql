-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 19 Haz 2022, 12:38:47
-- Sunucu sürümü: 10.4.22-MariaDB
-- PHP Sürümü: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `randevu`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kisiler`
--

CREATE TABLE `kisiler` (
  `kullanici_adi` varchar(55) NOT NULL,
  `şifre` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `kisiler`
--

INSERT INTO `kisiler` (`kullanici_adi`, `şifre`) VALUES
('turgay', '12345');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `randevubilgi`
--

CREATE TABLE `randevubilgi` (
  `Ad` varchar(55) DEFAULT NULL,
  `Soyad` varchar(55) DEFAULT NULL,
  `Klinik` varchar(55) DEFAULT NULL,
  `Doktor_adı` varchar(55) DEFAULT NULL,
  `Randevu_tarihi` varchar(55) DEFAULT NULL,
  `saat` varchar(55) DEFAULT NULL,
  `kullanici_adi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `randevubilgi`
--

INSERT INTO `randevubilgi` (`Ad`, `Soyad`, `Klinik`, `Doktor_adı`, `Randevu_tarihi`, `saat`, `kullanici_adi`) VALUES
('Süleyman', 'demir', 'Endokrin', 'Ayşegül Kaya', '12.12.2023', '18:00', 'turgay'),
('AHMET HAKAN', 'ÇELİK', 'Endodonti', 'Mahmut Yılmaz', '06.04.2023', '16:30', 'turgay');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kisiler`
--
ALTER TABLE `kisiler`
  ADD PRIMARY KEY (`kullanici_adi`);

--
-- Tablo için indeksler `randevubilgi`
--
ALTER TABLE `randevubilgi`
  ADD KEY `kullanıcı_adı` (`kullanici_adi`);

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `randevubilgi`
--
ALTER TABLE `randevubilgi`
  ADD CONSTRAINT `randevubilgi_ibfk_1` FOREIGN KEY (`kullanici_adi`) REFERENCES `kisiler` (`kullanici_adi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
