<?php
//cek apakah form sudah disubmit.
if(isset($_POST['submit'])){
    //form telah disubmit, proses data.
    echo "<h1>Form Berhasil diproses</h1>";
    echo "Nama : {$_POST["nama"]} <br/>";
    echo "Email : {$_POST["email"]}";
    die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Proses form di hal yg sama</title>
</head>
<body>
    <h1>Form regestrasi</h1>
    <form action="memproses_form_pada_hal_yang_sama.php" method="POST">
        <p>Nama: <input type="text" name="nama"></p>
        <p>Email: <input type="text" name="email"></p>
        <input type="submit" name="submit" value="Proses Data">
    </form>
</body>
</html>