create table Hayvanlar(
	hayvan_no int  primary key,
	hayvan_adi varchar (255),
	hayvan_yas int,
	hayvan_turu varchar (255),
	hayvan_cinsi varchar (255)
);

create table Mamalar (
	mama_no int  primary key,
	mama_turu varchar (255),
	mama_marka varchar (255),
	mama_fiyat int,
	mama_agirlik int,
	hayvan_no int
);

create table Yasam_alanlari (
	alan_no int  primary key,
	alan_turu varchar (255),
	alan_boyut varchar (255),
	alan_fiyat int,
	hayvan_no int
);

create table Hayvan_kiyafeti_ve_aksesuarlari(
	kiyafet_aksesuar_no int  primary key,
	kiyafet_aksesuar_turu varchar (255),
	kiyafet_aksesuar_marka varchar (255),
	kiyafet_aksesuar_renk varchar (255),
	kiyafet_aksesuar_fiyat int,
	satis_no int
);

create table Hayvan_bakim_esyalari (
	bakim_esyasi_no int  primary key,
	bakim_esyasi_turu varchar (255),
	bakim_esyasi_marka varchar (255),
	bakim_esyasi_fiyat int,
	satis_no int
);

create table Oyuncaklar (
	oyuncak_no int  primary key,
	oyuncak_turu varchar (255),
	oyuncak_fiyat int,
	hayvan_no int,
	satis_no int
);

create table Satis (
	satis_no int  primary key,
	hayvan_no int,
	mama_no int,
	alan_no int,
	kiyafet_aksesuar_no int,
	bakim_esyasi_no int,
	oyuncak_no int,
	satis_miktari int,
	satis_tarihi datetime,
	sube_no int
);

create table Petshop_subeleri (
	sube_no int  primary key,
	sube_adi varchar (255),
	sube_sehir varchar (255),
	sube_adres varchar (255),
	sube_telefon varchar (255),
	satis_no int
);

ALTER TABLE Mamalar ADD CONSTRAINT FK_Mamalar_Hayvanlar FOREIGN KEY (hayvan_no) REFERENCES Hayvanlar(hayvan_no);

ALTER TABLE Yasam_alanlari ADD CONSTRAINT FK_Yasam_alanlari_Hayvanlar FOREIGN KEY (hayvan_no) REFERENCES Hayvanlar(hayvan_no);

ALTER TABLE Oyuncaklar ADD CONSTRAINT FK_Oyuncaklar_Satis FOREIGN KEY (satis_no) REFERENCES Satis(satis_no);

ALTER TABLE Satis ADD CONSTRAINT FK_Satis_Hayvanlar FOREIGN KEY (hayvan_no) REFERENCES Hayvanlar(hayvan_no);

ALTER TABLE Satis ADD CONSTRAINT FK_Satis_Mamalar FOREIGN KEY (mama_no) REFERENCES Mamalar(mama_no);

ALTER TABLE Satis ADD CONSTRAINT FK_Satis_Yasam_alanlari FOREIGN KEY (alan_no) REFERENCES Yasam_alanlari(alan_no);

ALTER TABLE Satis ADD CONSTRAINT FK_Satis_Hayvan_kiyafeti_ve_aksesuarlari FOREIGN KEY (kiyafet_aksesuar_no) REFERENCES Hayvan_kiyafeti_ve_aksesuarlari(kiyafet_aksesuar_no);

ALTER TABLE Satis ADD CONSTRAINT FK_Satis_Hayvan_bakim_esyalari FOREIGN KEY (bakim_esyasi_no)  REFERENCES Hayvan_bakim_esyalari(bakim_esyasi_no);

ALTER TABLE Satis ADD CONSTRAINT FK_Satis_Oyuncaklar FOREIGN KEY (oyuncak_no) REFERENCES Oyuncaklar(oyuncak_no);

ALTER TABLE Satis ADD CONSTRAINT FK_Satis_Petshop_subeleri FOREIGN KEY (sube_no) REFERENCES Petshop_subeleri(sube_no);