<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$connection = new mysqli("localhost", "root", "", "petshop", 3306);

$result = $connection->query("SELECT * FROM oyuncaklar");
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
            <a href="mamalar.php">MAMALAR</a>
            <a href="#" class="active">OYUNCAKLAR</a>
            <a href="yaşamalanları.php">YAŞAM ALANLARI</a>
            <a href="hayvaneşyaları.php">HAYVAN BAKIM EŞYALARI</a>
            <a href="aksesuarlar.php">AKSESUARLAR</a>
            <a href="şubelerimiz.php">ŞUBELERİMİZ</a>
        </nav>
      
      

    </header>
      <!--!header bitiş-->
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
        <a href="mamalar.php">MAMALAR</a>
        <a href="#" class="active">OYUNCAKLAR</a>
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