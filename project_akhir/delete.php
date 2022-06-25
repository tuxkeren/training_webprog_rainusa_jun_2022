<?php
$id = $_GET['id'];
include('koneksi.php');
$sql = "DELETE from buku WHERE id=$id";
$hasil_query = mysqli_query($konek, $sql);
if(!$hasil_query){
    die("Query gagal dijalankan: ".mysqli_errno($konek)." - ".mysqli_error($konek));
}else{
    echo "Data buku berhasil dihapus!";
}

mysqli_close($konek);
header("location:lihat.php");