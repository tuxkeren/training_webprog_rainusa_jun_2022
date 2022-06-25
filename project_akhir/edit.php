<?php
    $id = $_GET['id'];
    include('koneksi.php');
    // Mengambil data buku dari database
    $sql = "SELECT * FROM buku WHERE id=$id";
    $hasil_query = mysqli_query($konek, $sql);
    if(!$hasil_query){
        die("Query gagal dijalankan: ".mysqli_errno($konek)." - ".mysqli_error($konek));
    }
    while($data = mysqli_fetch_assoc($hasil_query)){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <title>Operasi Database</title>
</head>
<body>
    <div class="container">
        <h1>Sunting data Buku Rainusa</h1>
        <?php include('menu.php') ?>
        <form action="update.php" method="post" enctype="multipart/form-data">
         <fieldset>
             <legend>Rekam Data Buku</legend>
             <p>
                <input type="hidden" name="id" value="<?php echo $data['id'];?>">
             </p>
             <p>
                <label for="judul">Judul Buku:</label>
                <input type="text" name="judul" id="judul" value="<?php echo $data['judul'];?>">
             </p>
             <p>
                <label for="pengarang">Pengarang:</label>
                <input type="text" name="pengarang" id="pengarang" value="<?php echo $data['pengarang'];?>">
             </p>
             <p>
                <label for="tipe">Jenis Buku:</label>
                <select name="tipe" id="tipe">
                    <option value="<?php echo $data['jenis'];?>" selected><?php echo $data['jenis'];?></option>
                    <option value="Novel">Novel</option>
                    <option value="Fiksi">Fiksi</option>
                    <option value="Manajemen">Manajemen</option>
                    <option value="Keuangan">Keuangan</option>
                    <option value="TI">TI</option>
                </select>    
             </p>
             <p>
                <label for="jum_hal">Jumlah Halaman:</label>
                <input type="text" name="jum_hal" id="jum_hal" value="<?php echo $data['jumhal'];?>">
             </p>
         </fieldset>
         <?php }; ?>
         <br>
         <input type="submit" name="submit" value="Update Data">
        </form>
    </div>
</body>
</html>