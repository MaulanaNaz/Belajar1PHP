<?php

// Array associative

/*
let siswa = {
    nama : "Maulana"
    Alamat : "Johar"
    umur : 23
}
*/

$siswa = [
    "nama" => "Maulana", //Key value pair (Pasangan kunci nilai)
    "alamat" => "Johar",
    "umur" => 23
];

echo $siswa["nama"],"<br>";
echo $siswa["alamat"],"<br>";
echo $siswa["umur"], "<br>";

$arr = [
    [
        "nama" => "Asep Balon",
        "pekerjaan" => "web Developer",
        "alamat" => "Cikampek",
    ],
    [
        "nama" => "Budi Busi",
        "pekerjaan" => "teknisi Mobil",
        "alamat" => "Cilamaya",
    ],
    [
        "nama" => "Cecep Mancing",
        "pekerjaan" => "Nelayan",
        "alamat" => "Tempuran",
    ]
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP - Belajar Associative</title>
</head>
<body>
    <h2>Daftar Kontak</h2>
    <?php foreach($arr as $a) :?>
        <ul>
            <li>Nama : <?php echo $a["nama"]?></li>
            <li>Pekerjaan : <?= $a["pekerjaan"]?></li>  <?php //<?= sama seperti echo?>
            <li>Alamat : <?php echo $a["alamat"]?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>