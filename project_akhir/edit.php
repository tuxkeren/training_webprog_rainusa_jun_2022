<?php

    // die();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
    body {
        background-color: #F8F8F8;
    }
        div.container {
        width: 500px;
        padding: 10px 80px 30px;
        background-color: white;
        margin: 20px auto;
        box-shadow: 1px 0px 10px, -1px 0px 10px ;
    }
    h1 {
        text-align: center;
        font-family: Cambria, "Times New Roman", serif;
    }
    p {
        margin: 5px 0;
    }
    fieldset {
        padding: 20px;
    }
    input, select, textarea {
        margin-bottom: 10px;
    }
    label {
        width: 150px;
        float: left;
        margin-right: 10px;
    }
    
    /* ======= MENU ========= */
    ul{
        padding: 0;
        margin: 20px 0;
        list-style:none;
        overflow:hidden;
    }
    nav li a{
        float: left;
        background-color: #E3E3E3;
        color: black;
        text-decoration: none;
        font-size: 20px;
        height:30px;
        line-height: 30px;
        padding: 5px 20px
    }
    nav li a:hover{
        background-color: #757575;
        color:white;
    }

    /* ===== TABEL ===== */
    table{
        border-collapse:collapse;
        border-spacing:0;
        border:1px black solid;
        width:100%
    }
    th, td {
        padding:8px 15px;
        border: 1px black solid;
    }
    td:first-child{
        background-color:#F2F2F2;
    }

</style>
    <title>Operasi Database</title>
</head>
<body>
    <div class="container">
        <h1>Sunting data Buku Rainusa</h1>
        <?php include('menu.php') ?>
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