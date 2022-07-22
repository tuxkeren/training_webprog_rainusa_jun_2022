<?php
include('koneksi.php');
$username = trim($_POST['username']);
$password = trim(SHA1($_POST['password']));
$_SESSION['username'] = $username;

$sql_login = "SELECT username, password, rule FROM users WHERE username='$username' AND password='$password'";
$query_login = mysqli_query($konek, $sql_login);

if($data = mysqli_fetch_assoc($query_login) == 0)
{
    echo "Password atau password salah!";
    mysqli_close($konek);
}else{
    header('location:lihat.php');
}