<?php

$mhs = [
    [
        "nim" => "2340982456",
        "nama" => "Akbar",
        "alamat" => "Cikampek",
        "prodi" => "Informatika"
    ],
    [
        "nim" => "2356789387",
        "nama" => "Fajar",
        "alamat" => "telagasari",
        "prodi" => "Informatika"
    ],
    [
        "nim" => "2309867532",
        "nama" => "Bisma",
        "alamat" => "Isekai",
        "prodi" => "Informatika"
    ],
    [
        "nim" => "2365743422",
        "nama" => "Putra",
        "alamat" => "Purwasari",
        "prodi" => "Informatika"
    ],
    [
        "nim" => "2312776546",
        "nama" => "Fahri",
        "alamat" => "Tegasari",
        "prodi" => "Informatika"
    ],
]

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
</head>
<body>
    <h1 align="center" >Daftar Mahasiswa</h1>
    <table border="1" cellpadding="5" align="center">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Prodi</th>
        </tr>

         <tr>
       <?php foreach($mhs as $a) : ?>
            <td><?php echo $a ["nim"]; ?></td>
            <td><?php echo $a ["nama"]; ?></td>
            <td><?php echo $a ["alamat"]; ?></td>
            <td><?php echo $a ["prodi"]; ?></td>
        </tr>
        <?php endforeach;?>
    </table>
</body>
</html>