<?php

include('koneksi.php');
// mengupdate data ke database.
    if(isset($_POST["submit"])){
        $id = htmlentities(strip_tags(trim($_POST['id'])));
        $judul = htmlentities(strip_tags(trim($_POST['judul'])));
        $pengarang = htmlentities(strip_tags(trim($_POST['pengarang'])));
        $tipe = htmlentities(strip_tags(trim($_POST['tipe'])));
        $jum_hal = htmlentities(strip_tags(trim($_POST['jum_hal'])));
    }
    $query ="UPDATE buku SET judul=?, pengarang=?, jenis=?, jumhal=? WHERE id=?";
    $stmt = mysqli_prepare($konek, $query);
    mysqli_stmt_bind_param($stmt,"sssii", $judul, $pengarang, $tipe, $jum_hal, $id);

    $sukses = mysqli_stmt_execute($stmt);

    if(!$sukses){
        die('Query error: '.mysqli_errno($konek).' - '.mysqli_error($konek));
    }else{
        echo "Data berhasil diupdate!";
    }
    mysqli_stmt_close($stmt);
    mysqli_close($konek);
    
    header("location:lihat.php");