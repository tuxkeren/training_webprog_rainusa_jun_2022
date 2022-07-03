<?php
$host ="localhost";
$user = "root";
$pass = "";
$db   = "rainusa";

$konek = mysqli_connect($host,$user,$pass,$db);

if(!$konek){
    die("Koneksi dengan database gagal: ".mysqli_connect_errno()." - ".mysqli_connect_error());
}
