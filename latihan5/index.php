<?php

// buka file json dari explorer
$getFileJSON = file_get_contents("buku.json");

// Decode file json
$dataBuku = json_decode($getFileJSON);

//var_dump($dataKontak);

$index = 0;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>
</head>
<body>
<h1>Data Buku</h1>

<a href="tambah.php">Add Buku</a>


<table border="1" cellpadding="5">
    <tr>
        <th>NO.</th>
        <th>Judul</th>
        <th>Penulis</th>
        <th>Tahun</th>
        <th>Penerbit</th>
        <th>Harga</th>
        <th colspan="2">aksi</th>
    </tr>
    <?php foreach($dataBuku as $buku) : ?>
        <tr>
            <td><?php echo $index + 1 ?></td>
            <td><?php echo $buku->judul; ?></td>
            <td><?php echo $buku->penulis; ?></td>
            <td><?php echo $buku->tahun; ?></td>
            <td><?php echo $buku->penerbit; ?></td>
            <td><?php echo $buku->harga; ?></td>
            <td>
                <a href="edit.php?index=<?php echo $index?>">Edit</a>
            </td>
            <td>
                <a href="delete.php?index=<?php echo $index?>">Delete</a>
            </td>
        </tr>
    <?php 
    $index++;
endforeach;
?>
</table>
</body>
</html>