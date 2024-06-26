<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$connection = new mysqli("localhost", "root", "", "petshop", 3306);

$result = $connection->query("SELECT * FROM hayvan_bakim_esyalari");
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
            <a href="#" class="active">HAYVAN BAKIM EŞYALARI</a>
            <a href="aksesuarlar.php">AKSESUARLAR</a>
            <a href="şubelerimiz.php">ŞUBELERİMİZ</a>
        </nav>
      
      

    </header>
      <!--!header bitiş-->

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
        <a href="#" class="active">HAYVAN BAKIM EŞYALARI</a>
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