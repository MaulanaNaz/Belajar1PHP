<?php

$angka = 20;

echo $angka, "<br>";

 
// sperglobals = variabel PHP yang bisa diakses
// dimana saja

// $_GET, $_POST, $_SERVER, $_SESSION, $_COOKIE, $_REQUEST

// METHOG GET dan POST adalah sebuah array associative
// GET = metode pengiriman data melalui link
// POST = metode pengiriman data lewat form

//GET


$_GET ["nama"] = "Maulana";
$_GET ["alamat"] = "Karawang";
$_GET ["umur"] = 23;
var_dump($_GET);

$siswa = [
    [
        "image" => "https://c.stocksy.com/a/IpI600/z9/1502340.jpg",
        "nama" => "Asep Balon",
        "alamat" => "Cikampek",
        "no_hp" => "087834562343"

    ],
    [
        "image" => "https://th.bing.com/th/id/OIP.Z607E6-xyAAcenFSGgz3lwHaKd?w=745&h=1053&rs=1&pid=ImgDetMain",
        "nama" => "Budi Busi",
        "alamat" => "Telagasari",
        "no_hp" => "08780099844"

    ],
    [
        "image" => "https://picfiles.alphacoders.com/545/54545.png",
        "nama" => "Cecep Pancing",
        "alamat" => "Tempuran",
        "no_hp" => "08124455678"

    ],
]

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Selamat Datang, <?php echo $_GET ["nama"]?>!</h1>
</body>
</html>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Siswa</h1>
    <ul>
        <li>Nama : <?php echo $_GET ["nama"] ?></li>
        <li>Alamat : <?php echo $_GET ["alamat"] ?></li>
        <li>umur : <?php echo $_GET ["umur"] ?></li>
    </ul>
</body>
</html>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Siswa Bandung</h1>
    <ul>
        <?php foreach($siswa as $s) :?>
        <li><a href="profil.php?nama=<?php echo $s["nama"] ?>
        &alamat=<?php echo $s["alamat"]?>
        &no_hp=<?php echo $s["no_hp"]?>         <?php //echo bisa pakai =?>
        &image=<?= $s["image"]?>">
        <?php echo $s["nama"]?></a>
        </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>

