<?php
    session_start();

    include('koneksi.php');
    // die();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
<style>
    div.container {
        width: 1000px;
        padding: 10px 80px 30px;
        background-color: white;
        margin: 20px auto;
        box-shadow: 1px 0px 10px, -1px 0px 10px ;
    }
</style>
    <title>Operasi Database</title>
</head>
<body>
    <div class="container">
        <h1>Daftar Data Buku Rainusa</h1>
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
        <table>
            <th>
                <td><strong>JUDUL BUKU</strong></td>
                <td><strong>PENGARANG</strong></td>
                <td><strong>KATEGORI</strong></td>
                <td><strong>JML.HALAMAN</strong></td>
                <td><strong>AKSI</strong></td>
            </th>
            <?php 
                $query = "SELECT * FROM buku";
                $hasil_query = mysqli_query($konek, $query);
                if(!$hasil_query){
                    die("Query gagal dijalankan: ".mysqli_errno($konek)." - ".mysqli_error($konek));
                }
                while($data = mysqli_fetch_assoc($hasil_query)){
                    echo "<tr>";
                    echo "<td><a href='detail.php?id=$data[id]'>$data[id]</a></td>";
                    echo "<td>$data[judul]</td>";
                    echo "<td>$data[pengarang]</td>";
                    echo "<td>$data[jenis]</td>";
                    echo "<td>$data[jumhal]</td>";
                    echo "<td>
                            <a href='edit.php?id=$data[id]'>Sunting</a> | 
                            <a href='delete.php?id=$data[id]'>Hapus</a>
                          </td>";

                };

            ?>
        </table>
    </div>
    <?php mysqli_close($konek); ?>
</body>
</html>