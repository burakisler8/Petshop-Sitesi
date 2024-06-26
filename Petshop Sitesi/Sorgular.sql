use Petshop

--Petshop Þubelerini listeleyen sorgu
select * from Petshop_subeleri

--Toplam hayvan sayýsýný veren sorgu
select count(*) as Hayvanlarin_toplam_sayisi from Hayvanlar;

--50 ile 150 Tl fiyat aralýðýndaki ürünleri listeleyen sorgu
SELECT * FROM Mamalar WHERE mama_fiyat BETWEEN 50 AND 150;

--Ankara þehrindeki þubeleri listeleyen sorgu
SELECT * FROM Petshop_subeleri WHERE sube_sehir = 'Ankara';

-- 11 tane Oyuncak listeleyen sorgu 
Select top 11 * from Oyuncaklar

--Markasý 'Eurocat' olan hayvan kýyafeti ve aksesuarlarýný listeleyen sorgu 
select * from Hayvan_kiyafeti_ve_aksesuarlari where kiyafet_aksesuar_marka = 'Eurocat';

--Hayvan Nosu 5 olan hayvan hangi tarihte satýldýðýný veren sorgu
select satis_tarihi from Satis where hayvan_no = 5;

-- Kedi oyuncaklarýný listeleyen sorgu
SELECT oyuncak_turu FROM Oyuncaklar WHERE oyuncak_turu LIKE 'Kedi%';

-- Bakým eþyasý adýna göre fiyatýný veren sorgu
select bakim_esyasi_fiyat from Hayvan_bakim_esyalari where bakim_esyasi_marka = 'Eheim';

--Hayvan adýný büyük harf ile, hayvan türünü küçük harf ile veren sorgu
select upper(hayvan_adi), lower(hayvan_turu) from Hayvanlar 

-- En pahalý hayvan bakým eþyasýný veren sorgu
select bakim_esyasi_fiyat from Hayvan_bakim_esyalari where bakim_esyasi_fiyat = (select max(bakim_esyasi_fiyat) from  Hayvan_bakim_esyalari)

-- En ucuz yaþam alanýný veren sorgu
select alan_fiyat from Yasam_alanlari where alan_fiyat = (select min(alan_fiyat) from  Yasam_alanlari)

--Hayvan cinslerini A'dan Z'ye sýralayan sorgu
select * from Hayvanlar ORDER BY hayvan_cinsi ASC;






