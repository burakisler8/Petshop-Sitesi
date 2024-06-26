-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 29 Ara 2023, 19:44:46
-- Sunucu sürümü: 10.4.32-MariaDB
-- PHP Sürümü: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `petshop`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hayvanlar`
--

CREATE TABLE `hayvanlar` (
  `hayvan_no` int(11) NOT NULL,
  `hayvan_adi` varchar(255) DEFAULT NULL,
  `hayvan_yas` int(11) DEFAULT NULL,
  `hayvan_turu` varchar(255) DEFAULT NULL,
  `hayvan_cinsi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `hayvanlar`
--

INSERT INTO `hayvanlar` (`hayvan_no`, `hayvan_adi`, `hayvan_yas`, `hayvan_turu`, `hayvan_cinsi`) VALUES
(1, 'Boncuk', 2, 'Kedi', 'Van Kedisi'),
(2, 'Maviş', 1, 'Kedi', 'Ragdoll Kedisi'),
(3, 'Pamuk', 3, 'Kedi', 'İran Kedisi'),
(4, 'Tarçın', 3, 'Kedi', 'Scottish Fold'),
(5, 'Prenses', 2, 'Köpek', 'Pomeranian'),
(6, 'Laki', 8, 'Köpek', 'Golden Retriever'),
(7, 'Zeus', 1, 'Köpek', 'Pug'),
(8, 'Mia', 4, 'Köpek', 'Chow Chow'),
(9, 'Simbat ', 2, 'Balık', 'Koi Balığı'),
(10, 'Fiero', 3, 'Balık', 'Lepistes Balığı'),
(11, 'Doli ', 1, 'Balık', 'Beta Balığı'),
(12, 'Afacan', 0, 'Balık', 'Palyaço Balığı'),
(13, 'Alvin', 6, 'Tavşan', 'Cüce Tavşan'),
(14, 'Miki', 5, 'Tavşan', 'Hothot Tavşanı'),
(15, 'Lavinya', 4, 'Tavşan', 'Rex Tavşanı'),
(16, 'Lulu', 2, 'Tavşan', 'Aslanbaş Tavşanı'),
(17, 'Çiko', 8, 'Kuş', 'Muhabbet Kuşu'),
(18, 'Koko', 3, 'Kuş', 'Yeşil Papağan'),
(19, 'Cikcik', 5, 'Kuş', 'Kanarya'),
(20, 'Dudu', 12, 'Kuş', 'Sultan Papağanı');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hayvan_bakim_esyalari`
--

CREATE TABLE `hayvan_bakim_esyalari` (
  `bakim_esyasi_no` int(11) NOT NULL,
  `bakim_esyasi_turu` varchar(255) DEFAULT NULL,
  `bakim_esyasi_marka` varchar(255) DEFAULT NULL,
  `bakim_esyasi_fiyat` int(11) DEFAULT NULL,
  `satis_no` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `hayvan_bakim_esyalari`
--

INSERT INTO `hayvan_bakim_esyalari` (`bakim_esyasi_no`, `bakim_esyasi_turu`, `bakim_esyasi_marka`, `bakim_esyasi_fiyat`, `satis_no`) VALUES
(2, 'Gaga Taşı', 'Nature Plan', 43, NULL),
(3, 'Tavşan Tarağı', 'Lion Pets', 98, NULL),
(4, 'Tavşan Şampuan', 'Simple Solution', 212, NULL),
(5, 'Akvaryum Cam Silecekleri', 'Ista', 525, NULL),
(6, 'Balık Dip Sifonları', 'Eheim', 135, NULL),
(7, 'Köpek Tarağı', 'Ferplast', 158, NULL),
(8, 'Köpek Şampuan', 'Pets Family', 223, NULL),
(9, 'Köpek Diş Bakım Seti', 'Vets Bets', 365, NULL),
(10, 'Kedi Şampuan', 'Ferplast', 130, NULL),
(11, 'Kedi Tırnak Makası', 'Ferplast', 145, NULL),
(12, 'Kedi Antiparazit Ürünü', 'Bio Pet Active', 80, NULL),
(13, 'Kedi Tüy Yumağı Giderici', 'Purele', 170, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hayvan_kiyafeti_ve_aksesuarlari`
--

CREATE TABLE `hayvan_kiyafeti_ve_aksesuarlari` (
  `kiyafet_aksesuar_no` int(11) NOT NULL,
  `kiyafet_aksesuar_turu` varchar(255) DEFAULT NULL,
  `kiyafet_aksesuar_marka` varchar(255) DEFAULT NULL,
  `kiyafet_aksesuar_renk` varchar(255) DEFAULT NULL,
  `kiyafet_aksesuar_fiyat` int(11) DEFAULT NULL,
  `satis_no` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `hayvan_kiyafeti_ve_aksesuarlari`
--

INSERT INTO `hayvan_kiyafeti_ve_aksesuarlari` (`kiyafet_aksesuar_no`, `kiyafet_aksesuar_turu`, `kiyafet_aksesuar_marka`, `kiyafet_aksesuar_renk`, `kiyafet_aksesuar_fiyat`, `satis_no`) VALUES
(3, 'Kedi Boyun Tasması', 'Eurocat', 'Pembe', 140, 5),
(6, 'Kedi Göğüs Tasması', 'Pawise', 'Sarı', 185, 10),
(9, 'Kedi Künyesi', 'Dalis', 'Siyah', 130, 15),
(12, 'Kedi Tişörtü', 'Dolcepets', 'Gri', 320, 20),
(15, 'Köpek Boyun Tasması', 'Chicos', 'Gümüş', 90, 25),
(18, 'Köpek Eğitim Tasması', 'Doggie', 'Kahverengi', 450, 30),
(21, 'Köpek Kıyafeti', 'Pawise', 'Mavi', 235, 35),
(24, 'Köpek Ayakkabısı', 'Pawz', 'Yeşil', 450, 40),
(27, 'Akvaryum Kumu', 'Sera', 'Beyaz', 1300, 45),
(30, 'Akvaryum Çakılı', 'Oripet', 'Renkli', 308, 50),
(33, 'Akvaryum Slikon Bitki', 'Aquatic Plants', 'Yeşil', 55, 55),
(36, 'Tavşan Gezdirme Tasması', 'Karlie', 'Mor', 170, 60),
(39, 'Kuş Banyoluğu', 'Dayang', 'Turuncu', 25, 65);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mamalar`
--

CREATE TABLE `mamalar` (
  `mama_no` int(11) NOT NULL,
  `mama_turu` varchar(255) DEFAULT NULL,
  `mama_marka` varchar(255) DEFAULT NULL,
  `mama_fiyat` int(11) DEFAULT NULL,
  `mama_agirlik` int(11) DEFAULT NULL,
  `hayvan_no` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `mamalar`
--

INSERT INTO `mamalar` (`mama_no`, `mama_turu`, `mama_marka`, `mama_fiyat`, `mama_agirlik`, `hayvan_no`) VALUES
(2, 'Kedi Maması', 'Pro Plan', 210, 1, NULL),
(4, 'Kedi Ödül Maması', 'Hills', 307, 2, NULL),
(6, 'Somonlu Yavru Kedi Maması', 'Royal Canin', 200, 3, NULL),
(8, 'Kedi Yaş Mama', 'Crocus', 150, 1, NULL),
(10, 'Köpek Maması', 'Goody', 480, 3, NULL),
(12, 'Köpek Ödül Maması', 'Snow Dog', 340, 1, NULL),
(14, 'Etli Yavru Köpek Maması', 'Econature', 765, 2, NULL),
(16, 'Köpek Yaş Mama', 'Reflex', 238, 1, NULL),
(18, 'Balık Yemi', 'Tetra', 90, 1, NULL),
(20, 'Balık Vitamini', 'Ahm', 120, 1, NULL),
(22, 'Tavşan Maması', 'Tropifit', 610, 3, NULL),
(24, 'Tavşan Meyveli Yem', 'Polo', 980, 2, NULL),
(26, 'Yavru Tavşan Yemi', 'Vitakraft', 50, 2, NULL),
(28, 'Kemirgen Otu', 'Versele Laga', 135, 1, NULL),
(30, 'Kuş Yemi', 'Jungle', 65, 0, NULL),
(32, 'Kızıl Dal Darı', 'Gardenmix', 102, 1, NULL),
(34, 'Ballı-Meyveli Kraker', 'Gold Wings', 55, 1, NULL),
(36, 'Çizgili Paraket Çekirdeği', 'Nature Plan', 85, 2, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `oyuncaklar`
--

CREATE TABLE `oyuncaklar` (
  `oyuncak_no` int(11) NOT NULL,
  `oyuncak_turu` varchar(255) DEFAULT NULL,
  `oyuncak_fiyat` int(11) DEFAULT NULL,
  `hayvan_no` int(11) DEFAULT NULL,
  `satis_no` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `oyuncaklar`
--

INSERT INTO `oyuncaklar` (`oyuncak_no`, `oyuncak_turu`, `oyuncak_fiyat`, `hayvan_no`, `satis_no`) VALUES
(9, 'Zilli Aynalı Kuş Oyuncağı', 183, 18, NULL),
(10, 'PLastik Kuş Oyuncağı', 102, 17, NULL),
(11, 'Tavşan Oyun Tüneli', 144, 14, NULL),
(12, 'Tavşan Ödül Oyuncağı', 137, 13, NULL),
(13, 'Fırlatmalı Köpek Oyuncağı', 352, 8, NULL),
(14, 'Köpek Oyun Topu', 205, 7, NULL),
(15, 'Peluş Köpek Oyuncağı', 312, 6, NULL),
(16, 'Kemik Köpek Oyuncağı', 119, 5, NULL),
(17, 'Kedi Püsküllü Oyuncak', 95, 4, NULL),
(18, 'Kedi İpli Oyuncak', 53, 3, NULL),
(19, 'Kedi Oyun Tüneli', 450, 2, NULL),
(23, 'Kedi Topu', 275, 1, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `petshop_subeleri`
--

CREATE TABLE `petshop_subeleri` (
  `sube_no` int(11) NOT NULL,
  `sube_adi` varchar(255) DEFAULT NULL,
  `sube_sehir` varchar(255) DEFAULT NULL,
  `sube_adres` varchar(255) DEFAULT NULL,
  `sube_telefon` varchar(255) DEFAULT NULL,
  `satis_no` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `petshop_subeleri`
--

INSERT INTO `petshop_subeleri` (`sube_no`, `sube_adi`, `sube_sehir`, `sube_adres`, `sube_telefon`, `satis_no`) VALUES
(4, 'Pati Petshop', 'İstanbul', 'İstiklal Cad. No: 123', '5079482312', 5),
(8, 'Renkli Petshop', 'İzmir', 'Çelebi Cad. No: 423', '5905834591', 10),
(12, 'Sweet Petshop', 'Ankara', 'Kızılay Cad. No: 50', '5394851294', 15),
(16, 'Dreams Petshop', 'Bursa', 'Yenibağ Cad. No: 40', '563984511', 20),
(20, 'Dost Petshop', 'Çanakkale', 'Zeytin Cad. No: 567', '5356983422', 25),
(24, 'Pati Petshop', 'Antalya', 'Kaş Cad. No: 3', '5621233456', 30),
(28, 'Evcilcan Petshop', 'Rize', 'Ova Cad. No: 56', '5345063445', 35),
(32, 'Yuva Petshop', 'Muğla', 'Deniz Cad. No: 12', '52112312342', 40),
(36, 'Tüylü Petshop', 'Bolu', 'Kaya Cad. No: 90', '5095679854', 45),
(40, 'Meow Petshop', 'Trabzon', 'Gazipaşa Cad. No: 67', '5321009876', 50),
(44, 'Can Petshop', 'Muş', 'Cumhuriyet Cad. No: 55', '5098765432', 55),
(48, 'Peluş Petshop', 'Sivas', 'İstasyon Cad. No: 23', '5674564321', 60);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `satis`
--

CREATE TABLE `satis` (
  `satis_no` int(11) NOT NULL,
  `hayvan_no` int(11) DEFAULT NULL,
  `mama_no` int(11) DEFAULT NULL,
  `alan_no` int(11) DEFAULT NULL,
  `kiyafet_aksesuar_no` int(11) DEFAULT NULL,
  `bakim_esyasi_no` int(11) DEFAULT NULL,
  `oyuncak_no` int(11) DEFAULT NULL,
  `satis_miktari` int(11) DEFAULT NULL,
  `satis_tarihi` datetime DEFAULT NULL,
  `sube_no` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `satis`
--

INSERT INTO `satis` (`satis_no`, `hayvan_no`, `mama_no`, `alan_no`, `kiyafet_aksesuar_no`, `bakim_esyasi_no`, `oyuncak_no`, `satis_miktari`, `satis_tarihi`, `sube_no`) VALUES
(5, 1, 2, 1, 3, 13, 23, 1, '2023-11-01 13:32:00', 4),
(10, 2, 4, 3, 6, 12, 19, 2, '2023-11-02 15:20:00', 8),
(16, 3, 6, 5, 9, 11, 18, 3, '2023-11-03 09:05:00', 12),
(21, 4, 8, 7, 12, 10, 17, 3, '2023-11-04 11:30:00', 16),
(26, 5, 10, 9, 15, 9, 16, 2, '2023-11-05 13:13:00', 20),
(31, 6, 12, 11, 18, 8, 15, 1, '2023-11-06 15:30:00', 24),
(36, 7, 14, 13, 21, 7, 14, 1, '2023-11-07 17:30:00', 28),
(41, 8, 16, 15, 24, 6, 13, 2, '2023-11-08 18:18:00', 32),
(46, 9, 18, 17, 27, 5, 12, 3, '2023-11-09 10:30:00', 36),
(51, 10, 20, 19, 30, 4, 12, 3, '2023-11-10 09:06:00', 40),
(56, 11, 22, 21, 33, 3, 19, 2, '2023-11-11 16:30:00', 44),
(61, 12, 24, 23, 36, 2, 10, 1, '2023-11-12 14:25:00', 48);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yasam_alanlari`
--

CREATE TABLE `yasam_alanlari` (
  `alan_no` int(11) NOT NULL,
  `alan_turu` varchar(255) DEFAULT NULL,
  `alan_boyut` varchar(255) DEFAULT NULL,
  `alan_fiyat` int(11) DEFAULT NULL,
  `hayvan_no` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `yasam_alanlari`
--

INSERT INTO `yasam_alanlari` (`alan_no`, `alan_turu`, `alan_boyut`, `alan_fiyat`, `hayvan_no`) VALUES
(1, 'Kedi Evi', 'Orta Boy', 890, NULL),
(3, 'Kedi Kafesi', 'Büyük Boy', 3890, NULL),
(5, 'Kedi Kulübesi', 'Büyük Boy', 2100, NULL),
(7, 'Kedi Yatağı', 'Küçük Boy', 540, NULL),
(9, 'Köpek Arabası', 'Küçük', 3600, NULL),
(11, 'Köpek Kafesi', 'Büyük Boy', 6250, NULL),
(13, 'Köpek Kulübesi', 'Orta Boy', 2475, NULL),
(15, 'Köpek Yatağı', 'Büyük Boy', 370, NULL),
(17, 'Alüminyum Kapalı Akvaryum', 'Küçük', 1600, NULL),
(19, 'Plastik Kapalı Akvaryum', 'Büyük Boy', 2345, NULL),
(21, 'Filtreli Aydınlatmalı Akvaryum', 'Orta Boy', 5205, NULL),
(23, 'Nano', 'Büyük Boy', 9570, NULL),
(25, 'Tavşan Kafesi', 'Orta Boy', 920, NULL),
(27, 'Tavşan Yuvası', 'Küçük Boy', 100, NULL),
(29, 'Kuş Kafesi', 'Büyük Boy', 570, NULL),
(31, 'Kuş Yuvası', 'Küçük Boy', 130, NULL);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `hayvanlar`
--
ALTER TABLE `hayvanlar`
  ADD PRIMARY KEY (`hayvan_no`);

--
-- Tablo için indeksler `hayvan_bakim_esyalari`
--
ALTER TABLE `hayvan_bakim_esyalari`
  ADD PRIMARY KEY (`bakim_esyasi_no`);

--
-- Tablo için indeksler `hayvan_kiyafeti_ve_aksesuarlari`
--
ALTER TABLE `hayvan_kiyafeti_ve_aksesuarlari`
  ADD PRIMARY KEY (`kiyafet_aksesuar_no`);

--
-- Tablo için indeksler `mamalar`
--
ALTER TABLE `mamalar`
  ADD PRIMARY KEY (`mama_no`),
  ADD KEY `FK_Mamalar_Hayvanlar` (`hayvan_no`);

--
-- Tablo için indeksler `oyuncaklar`
--
ALTER TABLE `oyuncaklar`
  ADD PRIMARY KEY (`oyuncak_no`),
  ADD KEY `FK_Oyuncaklar_Satis` (`satis_no`);

--
-- Tablo için indeksler `petshop_subeleri`
--
ALTER TABLE `petshop_subeleri`
  ADD PRIMARY KEY (`sube_no`);

--
-- Tablo için indeksler `satis`
--
ALTER TABLE `satis`
  ADD PRIMARY KEY (`satis_no`),
  ADD KEY `FK_Satis_Hayvanlar` (`hayvan_no`),
  ADD KEY `FK_Satis_Mamalar` (`mama_no`),
  ADD KEY `FK_Satis_Yasam_alanlari` (`alan_no`),
  ADD KEY `FK_Satis_Hayvan_kiyafeti_ve_aksesuarlari` (`kiyafet_aksesuar_no`),
  ADD KEY `FK_Satis_Hayvan_bakim_esyalari` (`bakim_esyasi_no`),
  ADD KEY `FK_Satis_Oyuncaklar` (`oyuncak_no`),
  ADD KEY `FK_Satis_Petshop_subeleri` (`sube_no`);

--
-- Tablo için indeksler `yasam_alanlari`
--
ALTER TABLE `yasam_alanlari`
  ADD PRIMARY KEY (`alan_no`),
  ADD KEY `FK_Yasam_alanlari_Hayvanlar` (`hayvan_no`);

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `mamalar`
--
ALTER TABLE `mamalar`
  ADD CONSTRAINT `FK_Mamalar_Hayvanlar` FOREIGN KEY (`hayvan_no`) REFERENCES `hayvanlar` (`hayvan_no`);

--
-- Tablo kısıtlamaları `oyuncaklar`
--
ALTER TABLE `oyuncaklar`
  ADD CONSTRAINT `FK_Oyuncaklar_Satis` FOREIGN KEY (`satis_no`) REFERENCES `satis` (`satis_no`);

--
-- Tablo kısıtlamaları `satis`
--
ALTER TABLE `satis`
  ADD CONSTRAINT `FK_Satis_Hayvan_bakim_esyalari` FOREIGN KEY (`bakim_esyasi_no`) REFERENCES `hayvan_bakim_esyalari` (`bakim_esyasi_no`),
  ADD CONSTRAINT `FK_Satis_Hayvan_kiyafeti_ve_aksesuarlari` FOREIGN KEY (`kiyafet_aksesuar_no`) REFERENCES `hayvan_kiyafeti_ve_aksesuarlari` (`kiyafet_aksesuar_no`),
  ADD CONSTRAINT `FK_Satis_Hayvanlar` FOREIGN KEY (`hayvan_no`) REFERENCES `hayvanlar` (`hayvan_no`),
  ADD CONSTRAINT `FK_Satis_Mamalar` FOREIGN KEY (`mama_no`) REFERENCES `mamalar` (`mama_no`),
  ADD CONSTRAINT `FK_Satis_Oyuncaklar` FOREIGN KEY (`oyuncak_no`) REFERENCES `oyuncaklar` (`oyuncak_no`),
  ADD CONSTRAINT `FK_Satis_Petshop_subeleri` FOREIGN KEY (`sube_no`) REFERENCES `petshop_subeleri` (`sube_no`),
  ADD CONSTRAINT `FK_Satis_Yasam_alanlari` FOREIGN KEY (`alan_no`) REFERENCES `yasam_alanlari` (`alan_no`);

--
-- Tablo kısıtlamaları `yasam_alanlari`
--
ALTER TABLE `yasam_alanlari`
  ADD CONSTRAINT `FK_Yasam_alanlari_Hayvanlar` FOREIGN KEY (`hayvan_no`) REFERENCES `hayvanlar` (`hayvan_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
