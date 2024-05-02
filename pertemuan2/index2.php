<?php

// buit-in function untuk memanipulasi string

// Explode, implode, strlen, strcmp

// strlen => mengetahui panjang string
echo strlen("Hello Word"), "<br>";
echo strlen("Selamat datang di BLk Karawang"), "<br>";

// str_word_count -> menghiung jumlah angka
echo str_word_count("Maulana Nazmudin"),"<br>";

//strcmp -> membandingkan 2 buah string/kata
//strcasecmp -> membandingkan 2 string berdasarkan ukuran huruf
$kata1 = "katak";
$kata2 = "katak";

if (strcmp($kata1, $kata2) !== 0) {
    echo "$kata1 tidak sama dengan $kata2";
}else{
    echo "$kata1 sama dengan $kata2";
}

//exlode -> memecahkan string menjadi array
echo "<br>";
print_r(explode("-", "AYAM-GOYENG-ENAK-SEKALI"));
echo "<br>";
print_r(explode(",", "Topik, Faisal, Rian"));
echo "<br>";

// implode -> menggabungkan array menjadi string
$str = array("selamat", "datang", "di", "pemerograman", "PHP");
echo implode(" ", $str), "<br>";

// strtolower -> merubah huruf besar menjadi huruf kecil
echo strtolower("HARAP TENANG SEDANG BELAJAR"), "<br>";

// strtoupper -> merubah huruf kecil jadi huruf besar
echo strtoupper("ada udang di balik batu"), "<br>";

// substr -> mengambil beberapa karakter didalam string
$kata3 = "pelatihan";
echo substr($kata3, 2, 5), "<br>"; // dari depan
echo substr($kata3, -7, 5); //ngambil dari belakang pakai - minus


?>
