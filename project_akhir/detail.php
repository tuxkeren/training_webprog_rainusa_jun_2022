<?php include('koneksi.php'); 
$id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <title>Operasi Database</title>
</head>
<body>
    <div class="container">
        <h1>Detail Buku</h1>
        <?php 
            include('menu.php');
            include('koneksi.php');

            $query = "SELECT b.judul, b.pengarang, b.jenis, b.cover, s.sypnosis1 FROM buku as b, sypnosis as s WHERE b.id = s.id_buku AND b.id=$id";
            $hasil_query = mysqli_query($konek, $query);
            if(!$hasil_query){
                die("Query gagal dijalankan: ".mysqli_errno($konek)." - ".mysqli_error($konek));
            }
            echo "<center>";
            while($data = mysqli_fetch_assoc($hasil_query)){
                echo "<img src='./covers/$data[cover]' style='width:200px;height:300px'><br/><br/>";
                echo "<h2>".$data['judul']."</h2><br>";
                echo "<h3>".$data['pengarang']."</h3><br/>";
                echo "<p>".$data['sypnosis1']."</p><br/>";
            };
            echo "</center>";
        ?>
        
    </div>
</body>
</html>