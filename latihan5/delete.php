<?php

// tangkap dari index.php
$index = $_GET["index"];

// buka file json
$getFileJSON = file_get_contents("buku.json");

// ubah file json ke dalam array
$dataBuku = json_decode($getFileJSON);

// hapus data dari array
unset($dataBuku[$index]);

// kembalikan lagi ke file json
$data = json_encode(array_values($dataBuku), JSON_PRETTY_PRINT);
file_put_contents("buku.json", $data);

// balikan ke index.php
header("Location: index.php");

?>