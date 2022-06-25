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

            $query = "SELECT b.judul, b.pengarang, b.jenis, s.sypnosis1 FROM buku as b, sypnosis as s WHERE b.id = s.id_buku AND b.id=$id";
            $hasil_query = mysqli_query($konek, $query);
            if(!$hasil_query){
                die("Query gagal dijalankan: ".mysqli_errno($konek)." - ".mysqli_error($konek));
            }
            $data = mysqli_fetch_assoc($hasil_query);
            foreach ($data as $dat) {
                echo"<pre>";
                print_r($dat);
                echo"</pre>";
            }
        ?>
        
    </div>
</body>
</html>