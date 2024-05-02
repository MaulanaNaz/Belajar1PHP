<?php
// PHP di dalam HTML
 
//cara membuat variabel di PHP
//keyword : const, let, var
// variabel $
// scope = cangkupan
// variabel global && variabel local
//varibel global = variabel yang bisa diakses dimana saja
//variabel local = variabel yang hanya bisa di akses di bagian tertentu

$angka = 20;

echo $angka;
echo "<br>";

$nama = "Maulana N";

// gaboleh pake spasi
// gaboleh diawali nomor 
// kalo mau spasi pake (_)

$nama_depan = "Budi";
$nama_belakang = "Utomo";
// concatenation -> menggabungkan string .
echo $nama_depan . " " . $nama_belakang;
echo "<br>";

// operator aritmatika = +, -, *, /, %
// operator assignment = =, +=, -=, *=
// operator perbandngan = <, >, <=, >=
// ==, !=, ===, !=
// operator logika = &&, ||, !

// Tipe data di PHP = Integer, Float, string, Boolea.

var_dump(1 === "1");


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP Dasar</title>
</head>
<body>
    <h1><?php echo "Selamat datang $nama"; ?></h1>
</body>
</html>