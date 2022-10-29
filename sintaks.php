<?php
echo "Hello World";
echo "<br>";
print "Hello World";
echo "<br>";
print_r ("Hello World");
echo "<br>";
var_dump (1000);

$nama = "'Tria'";
echo $nama;

//operator + - % * /
$angka1 = 10;
$angka2 = 20;
echo $angka1 + $angka2;

//Assignment = += -= /= %m .=
$m = 1;
$m .= 2;
echo $m;

//Concat
$nama_depan = "tria";
$nama_belakang = "dp";
echo $nama_depan . "dp <br>";
echo $nama_depan . " " . $nama_belakang;

//Perbandingan <, >, <=, >=, ==, != (tidak sama dengan)
var_dump (1!=5);
var_dump (1=="2"); //kalo pake == ga peduli dalemnya

//identitas : === !==
var_dump (1!==1);

//Logika : AND (&&) harus semua sama
// OR (||) salah satu dia bener jawabnya bener
//NOT kebalikan kondisi
var_dump(1<5&&2>3);
