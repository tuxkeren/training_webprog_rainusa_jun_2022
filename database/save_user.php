<?php
include('koneksi.php');

$name = trim($_POST['username']);
$pass = trim($_POST['password']);
$rule = trim($_POST['rule']);

$sql = "INSERT INTO employees(USERNAME,PASSWORD,RULE) VALUES('$name',SHA1('$pass'),'$rule')";
$result = mysqli_query($con, $sql);
if(!$result){
    die("Query ada masalah: ".mysqli_errno($con)." - ".mysqli_error($con)."<br>");
}else{
    header("location:entry_users.php");
}

