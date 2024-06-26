<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$connection = new mysqli("localhost", "root", "", "petshop", 3306);

$result = $connection->query("SELECT * FROM yasam_alanlari");
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
            <a href="#" class="active">YAŞAM ALANLARI</a>
            <a href="hayvaneşyaları.php">HAYVAN BAKIM EŞYALARI</a>
            <a href="aksesuarlar.php">AKSESUARLAR</a>
            <a href="şubelerimiz.php">ŞUBELERİMİZ</a>
        </nav>
      
      

    </header>
      <!--!header bitiş-->
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


    <!--! Yaşam Alanları bitiş---
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
        <a href="#" class="active">YAŞAM ALANLARI</a>
        <a href="hayvaneşyaları.php">HAYVAN BAKIM EŞYALARI</a>
        <a href="aksesuarlar.php">AKSESUARLAR</a>
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