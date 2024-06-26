<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$connection = new mysqli("localhost", "root", "", "petshop", 3306);

$result = $connection->query("SELECT * FROM mamalar");
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
            <a href="hayvanlar.php">HAYVANLAR</a>
            <a href="#" class="active">MAMALAR</a>
            <a href="oyuncaklar.php">OYUNCAKLAR</a>
            <a href="yaşamalanları.php">YAŞAM ALANLARI</a>
            <a href="hayvaneşyaları.php">HAYVAN BAKIM EŞYALARI</a>
            <a href="aksesuarlar.php">AKSESUARLAR</a>
            <a href="şubelerimiz.php">ŞUBELERİMİZ</a>
        </nav>
      
      

    </header>
      <!--!header bitiş-->

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
        <a href="hayvanlar.php">HAYVANLAR</a>
        <a href="#" class="active">MAMALAR</a>
        <a href="oyuncaklar.php">OYUNCAKLAR</a>
        <a href="yaşamalanları.php">YAŞAM ALANLARI</a>
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