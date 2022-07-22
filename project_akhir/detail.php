<?php 
session_start();
include('koneksi.php'); 
$id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <title>Operasi Database</title>
    <style>
        div.container {
            width: 1000px;
            padding: 10px 80px 30px;
            background-color: white;
            margin: 20px auto;
            box-shadow: 1px 0px 10px, -1px 0px 10px ;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Detail Buku</h1>
        <?php 
            include('koneksi.php');

            // menampilkan menu susuai rule
            $nama = $_SESSION['name'];
            include('koneksi.php');
            $sql = "SELECT rule FROM users WHERE username='$nama'";
            $hasil_query = mysqli_query($konek, $sql);
            if(!$hasil_query){
                die("Query gagal dijalankan: ".mysqli_errno($konek)." - ".mysqli_error($konek));
            }else{
                while ($data = mysqli_fetch_assoc($hasil_query)){
                    if($data['rule'] == 'admin'){
                        include('menu.php');
                    }elseif($data['rule'] == 'staff'){
                        include('menu_staff.php');
                    }else{
                        include('menu_kasir.php');
                    }
                }
            }

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