<?php
// membuat koneksi ke database
$konek = mysqli_connect('localhost','root','');

if(!$konek){
    die("Koneksi dengan database gagal: ".mysqli_connect_errno()." - ".mysqli_connect_error());
}

// menghapus database jika sudah ada.
$sql_drop = "DROP DATABASE IF EXISTS belajar_php";
$hasil_drop = mysqli_query($konek,$sql_drop);
if(!$hasil_drop){
    die("Query ada masalah: ".mysqli_errno($konek)." - ".mysqli_error($konek)."<br>");
}else{
    echo "Database berhasil dihapus!<br>";
}

// membuat sebuah database jika belum ada
$sql_create = "CREATE DATABASE belajar_php";
$hasil_create = mysqli_query($konek,$sql_create);
if(!$hasil_create){
    die("Query ada masalah: ".mysqli_errno($konek)." - ".mysqli_error($konek)."<br>");
}else{
    echo "Database berhasil dibuat!<br>";
}

// menggunakan database yang dibuat
$sql_use = "USE belajar_php";
$hasil_use = mysqli_query($konek,$sql_use);
if(!$hasil_use){
    die("Query ada masalah: ".mysqli_errno($konek)." - ".mysqli_error($konek)."<br>");
}else{
    echo "Database berhasil dipilih!<br>";
}

// menghapus jika sudah ada dan membuat table mahasiswa
$sql_hapus_table = "DROP TABLE IF EXISTS mahasiswa";
$hasil_hapus_table = mysqli_query($konek, $sql_hapus_table);
if(!$hasil_hapus_table){
    die("Query ada masalah: ".mysqli_errno($konek)." - ".mysqli_error($konek)."<br>");
}else{
    echo "Table berhasil dihapus!<br>";
}
$sql_buat_table = "CREATE TABLE mahasiswa (nim VARCHAR(8), nama VARCHAR(100),tempat_lahir VARCHAR(50),tanggal_lahir DATE,fakultas VARCHAR(50),jurusan VARCHAR(50),ipk DECIMAL(3,2),PRIMARY KEY(nim))";
$hasil_buat_table = mysqli_query($konek, $sql_buat_table);
if(!$hasil_buat_table){
    die("Query ada masalah: ".mysqli_errno($konek)." - ".mysqli_error($konek)."<br>");
}else{
    echo "Table berhasil dibuat!<br>";
}

// menambahkan data mahasiswa ke dalam table
$sql_insert_data = "INSERT INTO mahasiswa VALUES ";
$sql_insert_data .= "('14005011','Riana Putria','Padang','1996-11-23','FMIPA','Kimia',3.1),";
$sql_insert_data .= "('15021044','Rudi Permana','Bandung','1994-08-22','FASILKOM','Ilmu Komputer',2.9),";
$sql_insert_data .= "('15003036','Sari Citra Lestari','Jakarta','1997-12-31','Ekonomi','Manajemen',3.5)";
$hasil_query_insert = mysqli_query($konek, $sql_insert_data);
if(!$hasil_query_insert){
    die("Query ada masalah: ".mysqli_errno($konek)." - ".mysqli_error($konek)."<br>");
}else{
    echo "Data berhasil ditambahkan!<br>";
}

// menampilkan data yang sudah ditambahkan ke table.
echo "<br>";
echo "Hasil data dari database adalah: ";
$sql_select = "SELECT * FROM mahasiswa";
$hasil_select = mysqli_query($konek,$sql_select);
if(!$hasil_select){
    die("Query ada masalah: ".mysqli_errno($konek)." - ".mysqli_error($konek)."<br>");
}else{
    echo "<table border='1'>";
    while($data = mysqli_fetch_assoc($hasil_select)){
        echo "<tr>";
        echo "<td>$data[nim]</td>";
        echo "<td>$data[nama]</td>";
        echo "<td>$data[tempat_lahir]</td>";
        echo "<td>$data[tanggal_lahir]</td>";
        echo "<td>$data[fakultas]</td>";
        echo "<td>$data[jurusan]</td>";
        echo "<td>$data[ipk]</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<br>";
}