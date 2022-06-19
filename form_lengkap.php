<?php
    // menyiapkan array nama bulan
    // $arr_bln = array("1" => "Januari",
    //                  "2" => "Pebruari",
    //                  "3" => "Maret",
    //                  "4" => "April",
    //                  "5" => "Mei",
    //                  "6" => "Juni",
    //                  "7" => "Juli",
    //                  "8" => "Agustus",
    //                  "9" => "September",
    //                  "10" => "Oktober",
    //                  "11" => "November",
    //                  "12" => "Desember");

    // cek apakah form sudah disubmit
    if(isset($_POST["submit"])){
        // data dari form
        $nama = htmlentities(strip_tags(trim($_POST["nama"])));
        $email = htmlentities(strip_tags(trim($_POST["email"])));;
        $buku = htmlentities(strip_tags(trim($_POST["buku"])));;
        $jumlah = htmlentities(strip_tags(trim($_POST["jumlah"])));;
        $alamat = htmlentities(strip_tags(trim($_POST["alamat"])));;
        $kurir = htmlentities(strip_tags(trim($_POST["kurir"])));;
        $ongkir = htmlentities(strip_tags(trim($_POST["ongkir"])));;
        $tgl = htmlentities(strip_tags(trim($_POST["tgl"])));
        $bln = htmlentities(strip_tags(trim($_POST["bln"])));
        $thn = htmlentities(strip_tags(trim($_POST["thn"])));
        // untuk checkbox
        $tambahan_dvd = "+ DVD eBook";
        $tambahan_kado = "+ Bungkus Kado";
        // panggil halaman pembelian untuk menampilkan form.
        include("pembelian.php");
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{
            background-color: #F8F8F8;
        }
        div.container{
            width: 500px;
            padding: 10px 80px 30px;
            background-color:white;
            margin: 20px auto;
            box-shadow: 1px 0px 10px, -1px 0px 10px;
        }
        h1{
            text-align: center;
            font-family: Cambria, "Times New Roman", serif;
        }
        p{
            margin: 5px 0;
        }
        fieldset{
            padding: 20px;
        }
        input, select, textarea{
            margin-bottom: 10px;
        }
        label{
            width: 150px;
            float: left;
            margin-right: 10px;
        }
        .radio{
            width: 55px;
            float: none;
        }
        label[for="dvd"], label[for="kado"]{
            float: none;
        }
    </style>
    <title>Latihan membuat Form Lengkap</title>
</head>
<body>
    <div class="container">
        <h1>Pembelian buku Rainusa</h1>
        <form action="form_lengkap.php" method="POST">
            <fieldset>
                <legend>Form Order</legend>
                <p>
                    <label for="nama">Nama :</label>
                    <input type="text" name="nama" id="nama">
                </p>
                <p>
                    <label for="email">Email :</label>
                    <input type="text" name="email" id="email">
                </p>
                <p>
                    <label for="buku">Jenis Buku :</label>
                    <select name="buku" id="buku">
                        <option value="HTML Undercover">HTML Undercover</option>
                        <option value="CSS Undercover">CSS Undercover</option>
                        <option value="Python Undercover">Python Undercover</option>
                        <option value="Laravel Undercover">Laravel Undercover</option>
                        <option value="Django Undercover">Django Undercover</option>
                    </select>
                </p>
                <p>
                    <label for="jumlah">Jumlah Buku :</label>
                    <select name="jumlah" id="jumlah">
                        <?php 
                            for($i = 1; $i <= 10; $i++){
                                echo "<option value = $i >";
                                echo $i;
                                echo "</option>";
                            }
                        ?>
                    </select>
                </p>
                <p>
                    <label for="alamat">Alamat Pengiriman :</label>
                    <textarea name="alamat" id="alamat" cols="25"></textarea>
                </p>
                <p>
                    <label for="kurir">Kurir Pengiriman :</label>
                    <label class="radio"><input type="radio" name="kurir" value="pos">POS</label>
                    <label class="radio"><input type="radio" name="kurir" value="jne">JNE</label>
                    <label class="radio"><input type="radio" name="kurir" value="tiki">TIKI</label>
                </p>
                <p>
                    <label for="ongkir">Ongkos Kirim :</label>
                    <input type="text" name="ongkir" id="ongkir">
                </p>
                <p>
                    <label for="tgl">Tanggal Kirim :</label>
                    <select name="tgl" id="tgl">
                        <?php 
                            for($i = 1; $i <= 31; $i++){
                                echo "<option value = $i>";
                                echo str_pad($i,2,"0", STR_PAD_LEFT);
                                echo "</option>";
                            }
                        ?>
                    </select>
                    <select name="bln" id="bln">
                        <option value="1">Januari</option>
                        <option value="2">Pebruari</option>
                        <option value="3">Maret</option>
                        <option value="4">April</option>
                        <option value="5">Mei</option>
                        <option value="6">Juni</option>
                        <option value="7">Juli</option>
                        <option value="8">Agustus</option>
                        <option value="9">September</option>
                        <option value="10">Oktober</option>
                        <option value="11">November</option>
                        <option value="12">Desember</option>
                    </select>
                    <select name="thn" id="thn">
                        <?php 
                            for ($i = 2019; $i <= 2025; $i++){
                                echo "<option value=$i>$i</option>";
                            }
                        ?>
                    </select>
                </p>
                <p>
                    <label for="tambahan">Tambahan :</label>
                    <input type="checkbox" name="dvd" value="ok" id="dvd">
                    <label for="dvd">DVD eBook</label>
                    <input type="checkbox" name="kado" value="ok" id="kado">
                    <label for="kado">Bungkus Kado</label>
                </p>
            </fieldset>
            <br>
            <p><input type="submit" name="submit" value="Pesan Buku"></p>
        </form>      
    </div>
</body>
</html>
