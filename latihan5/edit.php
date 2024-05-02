<?php

// tangkap dari index.php
$index = $_GET["index"];

// buka file json
$getFileJSON = file_get_contents("buku.json");

// ubah file json ke dalam array
$dataBuku = json_decode($getFileJSON);

// ambil satu data dari arrat
$baris = $dataBuku[$index];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
</head>
<body>
    <form method="post">
        <table>
            <tr>
                <td><label for="judul">Judul: </label></td>
                <td><input type="text" id="judul" name="judul" value="<?php echo $baris->judul?>"></td>
            </tr>
            <tr>
                <td><label for="penulis">Penulis: </label></td>
                <td><input type="text" id="penulis" name="penulis" value="<?php echo $baris->penulis?>"></td>
            </tr>
            <tr>
                <td><label for="tahun">Tahun: </label></td>
                <td><input type="text" id="tahun" name="tahun" value="<?php echo $baris->tahun?>"></td>
            </tr>
            <tr>
                <td><label for="penerbit">Penerbit: </label></td>
                <td><input type="text" id="penerbit" name="penerbit" value="<?php echo $baris->penerbit?>"></td>
            </tr>
            <tr>
                <td><label for="harga">Harga: </label></td>
                <td><input type="text" id="harga" name="harga" value="<?php echo $baris->harga?>"></td>
            </tr>
            
        </table>
        <button type="submit" name="submit">Simpan</button>
    </form>
</body>
</html>

<?php
     // cek apakah tomboh sudah diklik
     if (isset($_POST["submit"])) {
    $buku = [
        // tampung data dari form ke dalam arrayassociative
        "judul" => $_POST["judul"],
        "penulis" => $_POST["penulis"],
        "tahun" => $_POST["tahun"],
        "penerbit" => $_POST["penerbit"],
        "harga" => $_POST["harga"]
    ];

    // simpan $kontak ke array $dataKontak
    $dataBuku[$index] = $buku;

    // kembalikan lagi ke file json
    $data = json_encode($dataBuku, JSON_PRETTY_PRINT);
    file_put_contents("kontak.json", $data);

    // balikan ke index.php
    header("Location: index.php");
     }
    
    ?>