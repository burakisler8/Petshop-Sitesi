<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$connection = new mysqli("localhost", "root", "", "petshop", 3306);

$result = $connection->query("SELECT * FROM hayvan_kiyafeti_ve_aksesuarlari");
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
            <a href="index.php">ANASAYFA</a>
            <a href="hayvanlar.php" >HAYVANLAR</a>
            <a href="mamalar.php">MAMALAR</a>
            <a href="oyuncaklar.php">OYUNCAKLAR</a>
            <a href="yaşamalanları.php">YAŞAM ALANLARI</a>
            <a href="hayvaneşyaları.php">HAYVAN BAKIM EŞYALARI</a>
            <a href="#" class="active">AKSESUARLAR</a>
            <a href="şubelerimiz.php">ŞUBELERİMİZ</a>
        </nav>
      
      

    </header>
      <!--!header bitiş-->

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
        <a href="index.php">ANASAYFA</a>
        <a href="hayvanlar.php" >HAYVANLAR</a>
        <a href="mamalar.php">MAMALAR</a>
        <a href="oyuncaklar.php">OYUNCAKLAR</a>
        <a href="yaşamalanları.php">YAŞAM ALANLARI</a>
        <a href="hayvaneşyaları.php">HAYVAN BAKIM EŞYALARI</a>
        <a href="#" class="active">AKSESUARLAR</a>
        <a href="şubelerimiz.php">ŞUBELERİMİZ</a>
    </div>
    <div class="credit">
        created by <span>Tuğçe Yaşar   |  Yaren Akarsu   | Gizem Nur Çetin | Burak İşler | Batuhan Sevin | Süleyman Demir</span> |  all rights reserved
    </div>
</section>

     <!--! FOOTER bitiş--->


     



  </body>
</html>
<?=$connection->close();?>