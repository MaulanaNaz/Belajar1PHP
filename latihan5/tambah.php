<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
</head>
<body>
    <h1>Tambah Data Buku</h1>
    <form method="post">
        <table>
            <tr>
                <td><label for="judul">Judul: </label></td>
                <td><input type="text" id="judul" name="judul"></td>
            </tr>
            <tr>
                <td><label for="penulis">Penulis: </label></td>
                <td><input type="text" id="penulis" name="penulis"></td>
            </tr>
            <tr>
                <td><label for="tahun">Tahun: </label></td>
                <td><input type="text" id="tahun" name="tahun"></td>
            </tr>
            <tr>
                <td><label for="penerbit">Penerbit: </label></td>
                <td><input type="text" id="penerbit" name="penerbit"></td>
            </tr>
            <tr>
                <td><label for="harga">Harga: </label></td>
                <td><input type="text" id="harga" name="harga"></td>
            </tr>
        </table>
        <button type="submit" name="submit">Simpan</button>
    </form>
    
    <?php

// cek apakah tombol submit sudah diklik
if (isset($_POST["submit"])) {
    //buka file json
    $getFileJSON = file_get_contents("buku.json");

    // decode file json
    $dataBuku = json_decode($getFileJSON);

    // membuat aaray associative untuk menampung data dari form
    $buku = [
        "judul" => $_POST["judul"],
        "penulis" => $_POST["penulis"],
        "tahun" => $_POST["tahun"],
        "penerbit" => $_POST["penerbit"],
        "harga" => $_POST["harga"]
    ];

    // tambahkan $kontak ke dalam array $datakontak
    $dataBuku[] = $buku;

    // kembalikan ke bentuk json
    $data = json_encode($dataBuku, JSON_PRETTY_PRINT);
    file_put_contents("buku.json", $data);

    //arrahkan kembali kembali ke index.php
    header("Location: index.php");
}


?>     
</body>
</html>