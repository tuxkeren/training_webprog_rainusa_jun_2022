<?php
// membuat koneksi ke database
$host = "localhost";
$user = "root";
$pass = "";
$db = "belajar_php";

$con= mysqli_connect($host,$user,$pass,$db);

if(!$con){
    die("Koneksi dengan database gagal: ".mysqli_connect_errno()." - ".mysqli_connect_error());
}
