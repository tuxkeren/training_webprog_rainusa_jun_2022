<?php
$username = $_POST['username'];
$password = $_POST['password'];
if($username=="admin" AND $password=="qwerty"){
    echo "Username dan Password sesuai, hak akses diberikan. <br/>";
}else{
    echo "Username dan Password tidak sesuai! <br/>";
}
die();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="demo_login.php" method="POST">
        Username:<input type="text" name="username">
        Password:<input type="password" name="password">
        <input type="submit" name="proses" value="Login">
    </form>
</body>
</html>