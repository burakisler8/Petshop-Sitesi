use Petshop

--Petshop �ubelerini listeleyen sorgu
select * from Petshop_subeleri

--Toplam hayvan say�s�n� veren sorgu
select count(*) as Hayvanlarin_toplam_sayisi from Hayvanlar;

--50 ile 150 Tl fiyat aral���ndaki �r�nleri listeleyen sorgu
SELECT * FROM Mamalar WHERE mama_fiyat BETWEEN 50 AND 150;

--Ankara �ehrindeki �ubeleri listeleyen sorgu
SELECT * FROM Petshop_subeleri WHERE sube_sehir = 'Ankara';

-- 11 tane Oyuncak listeleyen sorgu 
Select top 11 * from Oyuncaklar

--Markas� 'Eurocat' olan hayvan k�yafeti ve aksesuarlar�n� listeleyen sorgu 
select * from Hayvan_kiyafeti_ve_aksesuarlari where kiyafet_aksesuar_marka = 'Eurocat';

--Hayvan Nosu 5 olan hayvan hangi tarihte sat�ld���n� veren sorgu
select satis_tarihi from Satis where hayvan_no = 5;

-- Kedi oyuncaklar�n� listeleyen sorgu
SELECT oyuncak_turu FROM Oyuncaklar WHERE oyuncak_turu LIKE 'Kedi%';

-- Bak�m e�yas� ad�na g�re fiyat�n� veren sorgu
select bakim_esyasi_fiyat from Hayvan_bakim_esyalari where bakim_esyasi_marka = 'Eheim';

--Hayvan ad�n� b�y�k harf ile, hayvan t�r�n� k���k harf ile veren sorgu
select upper(hayvan_adi), lower(hayvan_turu) from Hayvanlar 

-- En pahal� hayvan bak�m e�yas�n� veren sorgu
select bakim_esyasi_fiyat from Hayvan_bakim_esyalari where bakim_esyasi_fiyat = (select max(bakim_esyasi_fiyat) from  Hayvan_bakim_esyalari)

-- En ucuz ya�am alan�n� veren sorgu
select alan_fiyat from Yasam_alanlari where alan_fiyat = (select min(alan_fiyat) from  Yasam_alanlari)

--Hayvan cinslerini A'dan Z'ye s�ralayan sorgu
select * from Hayvanlar ORDER BY hayvan_cinsi ASC;






