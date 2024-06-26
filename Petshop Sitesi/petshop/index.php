<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$connection = new mysqli("localhost", "root", "", "petshop", 3306);

$result = $connection->query("SELECT * FROM hayvanlar GROUP BY hayvan_turu ORDER BY hayvan_no ASC");
$hayvanlar = array();
while ($row = $result->fetch_assoc()) {
    array_push($hayvanlar, array(
        "hayvan_no" => $row['hayvan_no'],
        "hayvan_adi" => $row['hayvan_adi'],
        "hayvan_yas" => $row['hayvan_yas'],
        "hayvan_turu" => $row['hayvan_turu'],
        "hayvan_cinsi" => $row['hayvan_cinsi']
    ));
}

$result = $connection->query("SELECT * FROM mamalar WHERE mama_agirlik < 2 ORDER BY mama_no ASC");
$mamalar = array();
while ($row = $result->fetch_assoc()) {
    array_push($mamalar, array(
        "mama_no" => $row['mama_no'],
        "mama_turu" => $row['mama_turu'],
        "mama_marka" => $row['mama_marka'],
        "mama_fiyat" => $row['mama_fiyat'],
        "mama_agirlik" => $row['mama_agirlik'],
        "hayvan_no" => $row['hayvan_no']
    ));
}

$result = $connection->query("SELECT * FROM oyuncaklar WHERE oyuncak_fiyat <= 200 ORDER BY oyuncak_no ASC");
$oyuncaklar = array();
while ($row = $result->fetch_assoc()) {
    array_push($oyuncaklar, array(
        "oyuncak_no" => $row['oyuncak_no'],
        "oyuncak_turu" => $row['oyuncak_turu'],
        "oyuncak_fiyat" => $row['oyuncak_fiyat'],
        "hayvan_no" => $row['hayvan_no'],
        "satis_no" => $row['satis_no']
    ));
}

$result = $connection->query("SELECT * FROM yasam_alanlari WHERE alan_fiyat <= 1750 ORDER BY alan_no ASC");
$yasam_alanlari = array();
while ($row = $result->fetch_assoc()) {
    array_push($yasam_alanlari, array(
        "alan_no" => $row['alan_no'],
        "alan_turu" => $row['alan_turu'],
        "alan_boyut" => $row['alan_boyut'],
        "alan_fiyat" => $row['alan_fiyat'],
        "hayvan_no" => $row['hayvan_no']
    ));
}

$result = $connection->query("SELECT * FROM hayvan_bakim_esyalari WHERE bakim_esyasi_fiyat < 150 ORDER BY bakim_esyasi_no ASC");
$hayvan_esyalari = array();
while ($row = $result->fetch_assoc()) {
    array_push($hayvan_esyalari, array(
        "bakim_esyasi_no" => $row['bakim_esyasi_no'],
        "bakim_esyasi_turu" => $row['bakim_esyasi_turu'],
        "bakim_esyasi_marka" => $row['bakim_esyasi_marka'],
        "bakim_esyasi_fiyat" => $row['bakim_esyasi_fiyat'],
        "satis_no" => $row['satis_no']
    ));
}

$result = $connection->query("SELECT * FROM hayvan_kiyafeti_ve_aksesuarlari WHERE kiyafet_aksesuar_fiyat < 450 ORDER BY kiyafet_aksesuar_no ASC");
$aksesuarlar = array();
while ($row = $result->fetch_assoc()) {
    array_push($aksesuarlar, array(
        "kiyafet_aksesuar_no" => $row['kiyafet_aksesuar_no'],
        "kiyafet_aksesuar_turu" => $row['kiyafet_aksesuar_turu'],
        "kiyafet_aksesuar_marka" => $row['kiyafet_aksesuar_marka'],
        "kiyafet_aksesuar_renk" => $row['kiyafet_aksesuar_renk'],
        "kiyafet_aksesuar_fiyat" => $row['kiyafet_aksesuar_fiyat'],
        "satis_no" => $row['satis_no']
    ));
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>PETSHOP</title>
  </head>
  <body>
    <!--!header başlangıcı -->
   
    <header class= "header">  
        <a href="#" class="logo">
            <img src="logo.webp" alt="logo" />
        </a>
        <nav class="navbar">
            <a href="#" class="active">ANASAYFA</a>
            <a href="hayvanlar.php" >HAYVANLAR</a>
            <a href="mamalar.php">MAMALAR</a>
            <a href="oyuncaklar.php">OYUNCAKLAR</a>
            <a href="#YORUMLAR">YAŞAM ALANLARI</a>
            <a href="hayvaneşyaları.php">HAYVAN BAKIM EŞYALARI</a>
            <a href="aksesuarlar.php">AKSESUARLAR</a>
            <a href="şubelerimiz.php">ŞUBELERİMİZ</a>
        </nav>
      
      

    </header>
      <!--!header bitiş-->

     <!--!ANASAYFA başlangıç-->

    <section class="ANASAYFA" id="ANASAYFA">
    
        <div class="content"> <h1> PETSHOPUMUZA HOŞGELDİNİZ</h1>
           
        </div>
    </section>


       <!--ANASAYFA bitiş->

              <!-- Hayvanlar Başlangıcı -->
<section class="HAYVANLAR" id="HAYVANLAR">

<h1 class="heading">HAYVANLAR</h1>
<div class="box-container">
<?php
        foreach ($hayvanlar as $key => $value) {
            $resim = "";
            switch ($value['hayvan_turu']) {
                case 'Kedi':
                    $resim = "images/vankedisi.jpeg";
                    break;
                case 'Köpek':
                    $resim = "images/pomerian.jpeg";
                    break;
                case 'Balık':
                    $resim = "images/koi.jpeg";
                    break;
                case 'Tavşan':
                    $resim = "images/tavsan.jpg";
                    break;
                case 'Kuş':
                    $resim = "images/kus.jpeg";
                    break;
            }
            echo '<div class="box">
                <div class="box-head">
                    <img src="'.$resim.'" alt="Hayvan '.$value["hayvan_yas"].'" />
                    <span class="menu-category">HAYVANLAR</span>
                    <h3>'.$value["hayvan_turu"].' - '.$value["hayvan_cinsi"].'</h3>
                    <div class="price">'.$value['hayvan_adi'].'</div>
                </div>
                <div class="box-bottom">
                    <a href="#" class="btn">DETAYLAR</a>
                </div>
            </div>';
        }
    ?>
</div>

</section>
<!-- Hayvanlar Bitişi -->

         <!--! mamalar başlangıç--->
         <section class="MAMALAR" id="MAMALAR">

<h1 class="heading">MAMALAR</h1>
<div class="box-container">
    <?php
        foreach ($mamalar as $key => $value) {
            $resim = "";
            if (str_contains($value['mama_turu'], "Kedi")) $resim = "images/kedimama.jpeg";
            else if (str_contains($value['mama_turu'], "Köpek")) $resim = "images/köpekmama.jpeg";
            else if (str_contains($value['mama_turu'], "Balık")) $resim = "images/balıkyemi.jpeg";
            else if (str_contains($value['mama_turu'], "Kuş")) $resim = "images/kusyemi.jpeg";
            else if (str_contains($value['mama_turu'], "Tavşan")) $resim = "images/tavsanyemi.jpg";
            else $resim = "images/kraker.jpg";

            echo '<div class="box">
                <div class="box-head">
                    <img src="'.$resim.'" alt="Mama '.$value['mama_marka'].'" />
                    <span class="menu-category">MAMALAR</span>
                    <h3>'.$value['mama_turu'].' - '.$value['mama_marka'].'</h3>
                    <div class="price">Ağırlığı: '.$value['mama_agirlik'].'kg | Fiyatı: '.$value['mama_fiyat'].'TL</div>
                </div>
                <div class="box-bottom">
                    <a href="#" class="btn">DETAYLAR</a>
                </div>
            </div>';
        }
    ?>
</div>

</section>

   <!--! mamalar bitiş--->


    <!--! oyucaklar başlanıç--->
    <section class="OYUNCAKLAR" id="OYUNCAKLAR">
    <h1 class="heading">OYUNCAKLAR</h1>
    <div class="box-container">
        <?php
            foreach ($oyuncaklar as $key => $value) {
                $resim = "";
                if (str_contains($value['oyuncak_turu'], "Kedi")) $resim = "images/keditopu.jpeg";
                else if (str_contains($value['oyuncak_turu'], "Köpek")) $resim = "images/köpekkemik.jpeg";
                else if (str_contains($value['oyuncak_turu'], "Tavşan")) $resim = "images/tavşanoyuncak.jpeg";
                else if (str_contains($value['oyuncak_turu'], "Kuş")) $resim = "images/kuşoyuncak.jpeg";

                echo '<div class="box">
                    <div class="box-head">
                        <img src="'.$resim.'" alt="Oyuncak '.$value['oyuncak_no'].'" />
                        <span class="menu-category">OYUNCAKLAR</span>
                        <h3>'.$value['oyuncak_turu'].'</h3>
                        <div class="price">Fiyatı: '.$value['oyuncak_fiyat'].'TL</div>
                    </div>
                    <div class="box-bottom">
                        <a href="#" class="btn">DETAYLAR</a>
                    </div>
                </div>';
            }
        ?>
    </div>
</section>


    
    <!--! oyucaklar bitiş--->


    <!--! Yaşam Alanları başlangıç--->
    <section class="YASAM_ALANLARI" id="YASAM_ALANLARI">
    <h1 class="heading">YAŞAM ALANLARI</h1>
    <div class="box-container">
        <?php
            foreach ($yasam_alanlari as $key => $value) {
                $resim = "";
                if (str_contains($value['alan_turu'], "Kedi")) $resim = "images/kedievi.jpeg";
                else if (str_contains($value['alan_turu'], "Köpek")) $resim = "images/köpekkafesi.jpeg";
                else if (str_contains($value['alan_turu'], "Tavşan")) $resim = "images/tavsan_kafesi.jpg";
                else if (str_contains($value['alan_turu'], "Kuş")) $resim = "images/kafes.jpeg";
                else if (str_contains($value['alan_turu'], "Akvaryum")) $resim = "images/akvaryum.jpeg";
                else $resim = "https://placehold.co/248x200/png?text=BULUNAMADI";

                echo '<div class="box">
                    <div class="box-head">
                        <img src="'.$resim.'" alt="Yaşam Alanlanı '.$value["alan_no"].'" />
                        <span class="menu-category">YAŞAM ALANLARI</span>
                        <h3>'.$value["alan_turu"].' - '.$value["alan_boyut"].'</h3>
                        <div class="price">Fiyatı: '.$value['alan_fiyat'].'</div>
                    </div>
                    <div class="box-bottom">
                        <a href="#" class="btn">DETAYLAR</a>
                    </div>
                </div>';
            }
        ?>
    </div>
</section>


    <!--! Yaşam Alanları bitiş--->


     <!--! HAYVAN BAKIM EŞYALARI başlangıç--->
     <section class="Hayvan_BAKIM_ESYALARI" id="Hayvan_BAKIM_ESYALARI">
    <h1 class="heading">HAYVAN BAKIM EŞYALARI</h1>
    <div class="box-container">
        <?php
            foreach ($hayvan_esyalari as $key => $value) {
                $resim = "";
                if (str_contains($value['bakim_esyasi_turu'], "Kedi")) $resim = "images/kedibakım.webp";
                else if (str_contains($value['bakim_esyasi_turu'], "Köpek")) $resim = "images/köpekbakım.jpeg";
                else if (str_contains($value['bakim_esyasi_turu'], "Tavşan")) $resim = "images/tavşanbakım.webp";
                else if (str_contains($value['bakim_esyasi_turu'], "Gaga")) $resim = "images/gaga_tasi.jpg";
                else if (str_contains($value['bakim_esyasi_turu'], "Akvaryum") || str_contains($value['bakim_esyasi_turu'], "Balık")) $resim = "images/balıkbakım.jpeg";

                echo '<div class="box">
                    <div class="box-head">
                        <img src="'.$resim.'" alt="Bakım Eşyası '.$value["bakim_esyasi_no"].'" />
                        <span class="menu-category">BAKIM EŞYALARI</span>
                        <h3>'.$value["bakim_esyasi_turu"].' - '.$value["bakim_esyasi_marka"].'</h3>
                        <div class="price">Fiyatı: '.$value['bakim_esyasi_fiyat'].'</div>
                    </div>
                    <div class="box-bottom">
                        <a href="#" class="btn">DETAYLAR</a>
                    </div>
                </div>';
            }
        ?>
    </div>
</section>

   

     <!--! HAYVAN BAKIM EŞYALARI bitiş--->


     <!--! AKSESUARLAR başlangıç--->
     <section class="AKSESUAR" id="AKSESUAR">
    <h1 class="heading">HAYVAN BAKIM AKSESUARLARI</h1>
    <div class="box-container">
        <?php
            foreach ($aksesuarlar as $key => $value) {
                $resim = "";
                if (str_contains($value['kiyafet_aksesuar_turu'], "Kedi")) $resim = "images/keditasma.jpeg";
                else if (str_contains($value['kiyafet_aksesuar_turu'], "Köpek")) $resim = "images/köpektasma.jpeg";
                else if (str_contains($value['kiyafet_aksesuar_turu'], "Tavşan")) $resim = "images/tavşantasma.webp";
                else if (str_contains($value['kiyafet_aksesuar_turu'], "Kuş")) $resim = "images/kus_banyolugu.jpg";
                else if (str_contains($value['kiyafet_aksesuar_turu'], "Akvaryum")) $resim = "images/balıkkumu.jpeg";

                echo '<div class="box">
                    <div class="box-head">
                        <img src="'.$resim.'" alt="Aksesuar '.$value["kiyafet_aksesuar_no"].'" />
                        <span class="menu-category">AKSESUAR</span>
                        <h3>'.$value["kiyafet_aksesuar_renk"].' | '.$value["kiyafet_aksesuar_turu"].' - '.$value["kiyafet_aksesuar_marka"].'</h3>
                        <div class="price">Fiyatı: '.$value['kiyafet_aksesuar_fiyat'].'</div>
                    </div>
                    <div class="box-bottom">
                        <a href="#" class="btn">DETAYLAR</a>
                    </div>
                </div>';
            }
        ?>
    </div>
</section>

    


     <!--! AKSESUARLAR bitiş--->

     <!--! FOOTER başlangıç-->

     <section class="footer">
    <div class="search">
        <input type="text" class="search-input" placeholder="search"/>
        <button class="btn bnt-primary">search</button>
    </div>
    <div class="share">
        <a href="#" class="fab fa-facebook"> </a>
        <a href="#" class="fab fa-twitter"> </a>
        <a href="#" class="fab fa-instagram"> </a>
        <a href="#" class="fab fa-linkedin"> </a>
        <a href="#" class="fab fa-github"> </a>
    </div>

    <div class="links">
        <a href="#" class="active">ANASAYFA</a>
        <a href="hayvanlar.php" >HAYVANLAR</a>
        <a href="mamalar.php">MAMALAR</a>
        <a href="oyuncaklar.php">OYUNCAKLAR</a>
        <a href="#YORUMLAR">YAŞAM ALANLARI</a>
        <a href="hayvaneşyaları.php">HAYVAN BAKIM EŞYALARI</a>
        <a href="aksesuarlar.php">AKSESUARLAR</a>
        <a href="şubelerimiz.php">ŞUBELERİMİZ</a>
    </div>
    <div class="credit">
        created by <span>Tuğçe Yaşar   |  Yaren Akarsu   | Gizem Nur Çetin | Burak İşler | Batuhan Sevin | Süleyman Demir</span> |  all rights reserved
    </div>
</section>

     <!--! FOOTER bitiş--->

     <script src="js/script.js"></script>
     <script src="login.php"></script>
     



  </body>
</html>
<?=$connection->close();?>