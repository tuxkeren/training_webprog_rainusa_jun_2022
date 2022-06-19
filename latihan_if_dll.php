<?php
// Operator 
$a = 100;
if($a % 2 == 0){
    echo "$a adalah angka genap<br/>";
}else{
    echo "$a adalah angka ganjil<br/>";
}

// Operator pembanding
$b = 8;
$c = 10;
if($b < $c){
    echo "$b lebih kecil dari $c <br/>";
}
elseif($b > $c){
    echo "$b lebih besar dari $c <br/>";
}else{
    echo "$b sama dengan $c <br/>";
}

// Operator Logika
$username = "admin";
$password = "qwerty";
if($username=="admin" AND $password=="qwerty"){
    echo "Username dan Password sesuai, hak akses diberikan. <br/>";
}else{
    echo "Username dan Password tidak sesuai! <br/>";
}

//if dalam if
if ($username=="admin"){
    if($password=="qwerty"){
        echo "Nama dan Password sesuai, akses diberikan. <br/>";
    }
    else{
        echo "Nama sesuai password tidak sesuai! <br/>";
    }
}elseif($password=="qwerty"){
    echo "Nama tidak sesuai, password sudah sesuai <br/>";
}else{
    echo "Nama dan Password tidak sesuai! <br/>";
}

// If menampilkan nama hari
$hari = 1;
if($hari == 1){echo "Hari Senin<br>";}
else
if($hari == 2){echo "Hari Selasa<br>";}
else
if($hari == 3){echo "Hari Rabu<br>";}
else
if($hari == 4){echo "Hari Kamis<br>";}
else
if($hari == 5){echo "Hari Jum'at<br>";}
else
if($hari == 6){echo "Hari Sabtu<br>";}
else
if($hari == 7){echo "Hari Ahad<br>";}
else{
    echo "Nama hari cuma 7!.<br>";
}

// IF sederhana dengan operator pembanding
if(7 > 5){
    $hasil ="Benar!<br>";
}else{
    $hasil = "Salah!<br>";
}
echo "$hasil";

// Penulisan IF sederhana
$hasil2 = (7 > 5) ? "Benar<br>" : "Salah<br>";
echo $hasil2;

//Contoh lainnya
$pengguna = "guest";
$salam = ($pengguna == "admin") ? "Welcome Admin!<br>" : "Maaf, anda bukan Admin<br>";
echo  $salam;

