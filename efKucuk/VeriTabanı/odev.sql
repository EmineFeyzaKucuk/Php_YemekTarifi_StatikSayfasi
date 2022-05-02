-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 05 Haz 2021, 11:27:00
-- Sunucu sürümü: 10.4.19-MariaDB
-- PHP Sürümü: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `odev`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `icerikler`
--

CREATE TABLE `icerikler` (
  `id` int(11) NOT NULL,
  `icerik` varchar(5000) COLLATE utf8mb4_turkish_ci NOT NULL,
  `anaBolumIndex` int(11) NOT NULL,
  `linkId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `icerikler`
--

INSERT INTO `icerikler` (`id`, `icerik`, `anaBolumIndex`, `linkId`) VALUES
(1, '../ÖDEV/Giris/giris.png', 1, 0),
(2, '../ÖDEV/logo/logo.png', 2, 0),
(3, 'LİMOON CHEF', 3, 0),
(5, 'Tariflerim', 4, 0),
(6, 'Tarif Gönder', 4, 0),
(7, 'Yazarlar', 4, 0),
(8, 'Favorilerim', 4, 0),
(9, 'Üye Ol', 4, 0),
(10, 'Giriş Yap', 4, 0),
(11, 'Yardım', 4, 0),
(12, 'Tariflerim', 5, 0),
(13, 'Kurabiyeler', 6, 0),
(14, '../ÖDEV/fotolar/A1.jpg', 6, 0),
(15, 'Çikolatalı Kurabiye', 6, 0),
(16, '30 Dk', 6, 0),
(17, '8 Kişilik', 6, 0),
(18, 'Tarifi Oku', 6, 0),
(19, 'Limoon Chef', 6, 0),
(20, 'Tatlılar', 6, 0),
(21, '../ÖDEV/fotolar/A2.jpg', 6, 0),
(22, 'Renkli Makaronlar', 6, 0),
(23, '25 DK', 6, 0),
(24, '5 Kişilik', 6, 0),
(25, 'Tarifi Oku', 6, 0),
(26, 'Limoon Chef', 6, 0),
(27, 'Fast Food', 6, 0),
(28, '../ÖDEV/fotolar/A3.jpg', 6, 0),
(29, 'Hamburger', 6, 0),
(30, '30 DK', 6, 0),
(31, '3 Kişilik', 6, 0),
(32, 'Tarifi Oku', 6, 0),
(33, 'Limoon Chef', 6, 0),
(34, 'Kurabiyeler', 6, 0),
(35, '../ÖDEV/fotolar/A4.jpg', 6, 0),
(36, 'Çiçek Kurabiye', 6, 0),
(37, '40 DK', 6, 0),
(38, '6 Kişilik', 6, 0),
(39, 'Tarifi Oku', 6, 0),
(40, 'Limoon Chef', 6, 0),
(41, 'Kurabiyeler', 7, 0),
(42, '../ÖDEV/fotolar/A5.jpg', 7, 0),
(43, 'Tuzlu Kurabiye', 7, 0),
(44, '40 DK', 7, 0),
(45, '6 Kişilik', 7, 0),
(46, 'Tarifi Oku', 7, 0),
(47, 'Limoon Chef', 7, 0),
(48, 'Hamur İşleri', 7, 0),
(49, '../ÖDEV/fotolar/A6.jpg', 7, 0),
(50, 'Meyveli Turta', 7, 0),
(51, '25 DK', 7, 0),
(52, '4 Kişilik', 7, 0),
(53, 'Tarifi Oku', 7, 0),
(54, 'Limoon Chef', 7, 0),
(55, 'Hamur İşleri', 7, 0),
(56, '../ÖDEV/fotolar/A7.jpg', 7, 0),
(57, 'Çikolatalı Pasta', 7, 0),
(58, '20 DK', 7, 0),
(59, '2 Kişilik', 7, 0),
(60, 'Tarifi Oku', 7, 0),
(61, 'Limoon Chef', 7, 0),
(62, 'İçecekler', 7, 0),
(63, '../ÖDEV/fotolar/A8.jpg', 7, 0),
(64, 'Karamelli Milkshake', 7, 0),
(65, '15 DK', 7, 0),
(66, '1 Kişilik', 7, 0),
(67, 'Tarifi Oku', 7, 0),
(68, 'Limoon Chef', 7, 0),
(69, 'Hakkımda', 8, 0),
(70, 'İletişim', 8, 0),
(71, 'Gizlilik İlkesi', 8, 0),
(72, 'Tüm Kategoriler', 8, 0);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `icerikler`
--
ALTER TABLE `icerikler`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
