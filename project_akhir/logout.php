<?php 
session_unset();
session_destroy();

echo "Logout berhasil";
header('location:login.php');