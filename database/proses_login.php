<?php
include('koneksi.php');

$name = trim($_POST['username']);
$pass = trim(SHA1($_POST['password']));

$sql = "SELECT USERNAME, PASSWORD FROM employees WHERE USERNAME='$name' AND PASSWORD='$pass'";
$result = mysqli_query($con, $sql);
if($data = mysqli_fetch_assoc($result) == 0){
    echo "Username atau Password Salah!";
}else{
    header("location:entry_users.php");
}
