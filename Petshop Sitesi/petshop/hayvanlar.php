<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$connection = new mysqli("localhost", "root", "", "petshop", 3306);

$result = $connection->query("SELECT * FROM hayvanlar");
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
            <a href="#" class="active">HAYVANLAR</a>
            <a href="mamalar.php">MAMALAR</a>
            <a href="oyuncaklar.php">OYUNCAKLAR</a>
            <a href="yaşamalanları.php">YAŞAM ALANLARI</a>
            <a href="hayvaneşyaları.php">HAYVAN BAKIM EŞYALARI</a>
            <a href="aksesuarlar.php">AKSESUARLAR</a>
            <a href="şubelerimiz.php">ŞUBELERİMİZ</a>
        </nav>
      
      

    </header>
      <!--!header bitiş-->
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
     <!--! FOOTER başlangıç-->

     <section class="footer">
    <div class="search">
        <input type="text" class="search-input" placeholder="ara"/>
        <button class="btn bnt-primary">ara</button>
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
        <a href="#" class="active">HAYVANLAR</a>
        <a href="mamalar.php">MAMALAR</a>
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