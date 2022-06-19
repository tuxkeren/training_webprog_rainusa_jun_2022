<?php
// Bentuk Array pertama
$siswa = array("Budi","Wati","Ika","Ike");
echo $siswa[0]."<br/>";
/* Bentuk Array
   yang ke2 */
$makanan = ["Mie Goreng", "Kopi Tubruk"," Jus Melon"];

// Menambahkan elemen array baru
$makanan[3] = "Pizza";

// Menimpa nilai element array yang sudah ada.
$makanan[0] = "Mie Tarempa";
echo $makanan[0]."<br/>";
echo $makanan[3]."<br/>";

// array data numeric
$rate_parkir = [2000,5000,10000,100000];
echo $rate_parkir[1]."<br/>";

//Menghapus elemen array
unset($rate_parkir[2]);
echo "<pre>";
var_dump($rate_parkir);
echo "<pre>";

//Array multidimesi (2)
$mahasiswa = array(
    array("Dimas","Jurusan Informatika", "Laki-laki", 23),
    array("Wati","Jurusan Hukum", "Perempuan", 17),
    array("Wahyu","Jurusan Ekonomi", "Laki-laki", 25),
);
// memanggil array 2 dimesin
echo $mahasiswa[2][3];
