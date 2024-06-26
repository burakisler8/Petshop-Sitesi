<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$connection = new mysqli("localhost", "root", "", "petshop", 3306);

$result = $connection->query("SELECT * FROM petshop_subeleri");
$subeler = array();
while ($row = $result->fetch_assoc()) {
    array_push($subeler, array(
        "sube_no" => $row['sube_no'],
        "sube_adi" => $row['sube_adi'],
        "sube_sehir" => $row['sube_sehir'],
        "sube_adres" => $row['sube_adres'],
        "sube_telefon" => $row['sube_telefon'],
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
            <a href="aksesuarlar.php">AKSESUARLAR</a>
            <a href="#" class="active">ŞUBELERİMİZ</a>
        </nav>
      
      

    </header>
      <!--!header bitiş-->
      <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Şubeler</title>
</head>
<body>

    <div class="container">
        <img src="images/mağaza.webp" alt="Şube Resmi">
        <div class="sub-branches">
            <h2>Şubeler</h2>
            <ul>
                <?php
                    foreach ($subeler as $key => $value) {
                        echo '<li no="'.$value['satis_no'].'">
                            <strong>'.$value['sube_adi'].'</strong><br>
                            Şehir: '.$value['sube_sehir'].'<br>
                            Telefon: '.$value['sube_telefon'].'<br>
                            Adres: '.$value['sube_adres'].'
                        </li>';
                    }
                ?>
            </ul>
        </div>
    </div>

</body>
</html>

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
        <a href="aksesuarlar.php">AKSESUARLAR</a>
        <a href="#" class="active">ŞUBELERİMİZ</a>
    </div>
    <div class="credit">
        created by <span>Tuğçe Yaşar   |  Yaren Akarsu   | Gizem Nur Çetin | Burak İşler | Batuhan Sevin | Süleyman Demir</span> |  all rights reserved
    </div>
</section>

     <!--! FOOTER bitiş--->


     



  </body>
</html>
<?=$connection->close();?>