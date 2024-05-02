<?php
//Array
// Cara lama bikin array di PHP
$arr = array(1,3,4,7,9,11,30);

print_r ($arr);
print "<br>";

// Cara baru bikin Array di PHP
$arr2 = ["Maulana","Chandra","Yudha","Naufal"];

print_r($arr2);
print "<br>";
var_dump($arr2);
print "<br>";
echo $arr[3];

// mengedit isi array
$arr2[3] = "Jabbar" ;

// menambah isi array
$arr2[4] = "Naufal" ;
print "<br>";
print_r($arr2);

//menambah isi array
$arr2[] = "Saeful";
print_r($arr2);

// foreach
foreach ($arr2 as $a){
    echo $a , "<br>";
}
?>