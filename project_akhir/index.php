<?php
    session_start();

    if(isset($_POST["submit"])){
        $judul = htmlentities(strip_tags(trim($_POST['judul'])));
        $pengarang = htmlentities(strip_tags(trim($_POST['pengarang'])));
        $tipe = htmlentities(strip_tags(trim($_POST['tipe'])));
        $jum_hal = htmlentities(strip_tags(trim($_POST['jum_hal'])));
        $temp       = $_FILES['cover']['tmp_name'];
        $name       = $_FILES['cover']['name'];
        $size       = $_FILES['cover']['size'];
        $type       = $_FILES['cover']['type'];
        $folder     = "./covers/";

        if($type == 'image/jpg' or $type == 'image/png' or $type == 'image/jpeg'){
            move_uploaded_file($temp, $folder.$name);
            include('koneksi.php');
            $query ="INSERT INTO buku(judul,pengarang,jenis,jumhal,cover) VALUES(?,?,?,?,?)";
            $stmt = mysqli_prepare($konek, $query);
            mysqli_stmt_bind_param($stmt,"sssis", $judul, $pengarang, $tipe, $jum_hal, $name);
        
            $sukses = mysqli_stmt_execute($stmt);
            if(!$sukses){
                die('Query error: '.mysqli_errno($konek).' - '.mysqli_error($konek));
            }else{
                echo "Data berhasil disimpan!";
            }
            mysqli_stmt_close($stmt);
            mysqli_close($konek);
        }else{
            echo 'Tipe file salah.';
        }
        header("location:index.php");
        die();
        
    }

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
        <h1>Rekam data Buku Rainusa</h1>

        <?php
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
        ?>

        <form action="index.php" method="post" enctype="multipart/form-data">
         <fieldset>
             <legend>Rekam Data Buku</legend>
             <p>
                <label for="judul">Judul Buku:</label>
                <input type="text" name="judul" id="judul">
             </p>
             <p>
                <label for="pengarang">Pengarang:</label>
                <input type="text" name="pengarang" id="pengarang">
             </p>
             <p>
                <label for="tipe">Jenis Buku:</label>
                <select name="tipe" id="tipe">
                    <option value="Novel">Novel</option>
                    <option value="Fiksi">Fiksi</option>
                    <option value="Manajemen">Manajemen</option>
                    <option value="Keuangan">Keuangan</option>
                    <option value="TI">TI</option>
                </select>    
             </p>
             <p>
                <label for="jum_hal">Jumlah Halaman:</label>
                <input type="text" name="jum_hal" id="jum_hal">
             </p>
             <p>
                <label for="upload_cover">Upload Cover:</label>
                <input type="file" name="cover" id="cover">
             </p> 
         </fieldset>
         <br>
         <input type="submit" name="submit" value="Simpan Data">
        </form>
    </div>
</body>
</html>