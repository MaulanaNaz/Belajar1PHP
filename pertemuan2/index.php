<?php
// function -> program di dalam program

// 1. Built-in function -> fungsi yang sudah tersedia di PHP
// 2. User-Definned -> fungsi yang dibuat oleh programmer

// date, time, mktime, strtotime

// date -> tanggal
echo date_default_timezone_set("Asia/Jakarta");
echo date("l, j F Y H:i:s "), "<br>";

/*
l -> nama hari yang lengkap
d -> hari format 01 sampai 31
j -> hari format 1 sampai 31
M -> Bulan format 3 karakter (Jan,Feb,Mar,...)
F -> nama bulan lengkap
Y -> Tahun

H -> jam
i -> menit
s -> detik
*/

//time = jumlah detik dari bulan 1 januari 1970
echo time(), "<br>"; 

// mk time 
echo mktime(0,0,0,2,23,2001),"<br>"; // jumlah detik dari 1 januari 1970 sampai 23 februari 2001

// strtotime -> mengubah string jadi tanggal
echo strtotime("24 april 2024"),"<br>";

//date_parse -> memecah tanggal 
print_r(date_parse ("2024-04-24"));





?>