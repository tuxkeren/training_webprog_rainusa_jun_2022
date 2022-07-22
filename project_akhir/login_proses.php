<?php
session_start();

include('koneksi.php');
$username = trim($_POST['username']);
$password = trim(SHA1($_POST['password']));

$nama = $_SESSION['name'] = $username;

$sql_login = "SELECT username, password, rule FROM users WHERE username='$username' AND password='$password'";
$query_login = mysqli_query($konek, $sql_login);

if($data = mysqli_fetch_assoc($query_login) == 0)
{
    echo "Password atau password salah!";
    mysqli_close($konek);
}else{
    $sql = "SELECT rule FROM users WHERE username='$nama'";
    $hasil_query = mysqli_query($konek, $sql);
    if(!$hasil_query){
        die("Query gagal dijalankan: ".mysqli_errno($konek)." - ".mysqli_error($konek));
    }else{
        while ($data = mysqli_fetch_assoc($hasil_query)){
            if($data['rule'] == 'admin'){
                header('location:index.php');
            }elseif($data['rule'] == 'staff'){
                include('lihat.php');
            }else{
                include('tentang.php');
            }
        }
    }
}