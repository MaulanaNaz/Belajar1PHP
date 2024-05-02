<?php

// User define function
/*
function namafungsi ($param1, $param2, $param3,...){
    //perintah dieksekusi
}
*/

//camelCase
// pemjumlahan => biasanya digunakan ketika class => OOP
function penjumlahan($a, $b)
{
    return $a + $b;
}
echo penjumlahan(4, 3);

function luasSegitiga($alas,$tinggi)
{
    return 0.5 * $alas * $tinggi;
}
echo penjumlahan(4, 3), "<br>";

$alas = 4;
$tinggi = 5;

echo "Luas segitiga dengan panjang alas $alas dan tinggi $tinggi adalah". luasSegitiga($alas, $tinggi)

// function inifungsi ($param1 = "", $param2 = "")

// }

//echo fungsi 

// contoh parameter default
function sapa($waktu = "", $nama = "")
{
if($waktu === "" && $nama === ""){
    return "Selamat Datang User !";
}else{
    return "Selamat $waktu, $nama";
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php  echo sapa ("pagi", "Maulana"); ?></h1>
</body>
</html>