<?php
$hostname ="localhost";
$username = "root";
$password = "";
$database = "rainusa";

$konek = mysqli_connect($hostname,$username,$password,$database);

if(!$konek){
    die("Koneksi dengan database gagal: ".mysqli_connect_errno()." - ".mysqli_connect_error());
}
