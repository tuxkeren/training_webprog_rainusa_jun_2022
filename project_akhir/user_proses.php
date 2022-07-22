<?php
    $pengguna= trim($_POST['username']);
    $sandi = trim($_POST['password']);
    $rule = trim($_POST['rule']);
    
    include('koneksi.php');
    $query ="INSERT INTO users(username,password,rule) VALUES('$pengguna',SHA1('$sandi'),'$rule')";
    $hasil = mysqli_query($konek, $query);
    if(!$hasil){
        die('Query error: '.mysqli_errno($konek).' - '.mysqli_error($konek));
    }else{
        echo "Data berhasil disimpan!";
        header("location:user.php");
        mysqli_free_result($hasil);
        mysqli_close($konek);
    }
?>