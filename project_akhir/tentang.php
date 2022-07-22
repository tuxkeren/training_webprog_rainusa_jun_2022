<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
    body {
        background-color: #F8F8F8;
    }

    div.container {
        width: 1000px;
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
        <h1>Tentang Program</h1>
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
        <p>
            Program ini adalah lorem ipsum...
        </p>
       
    </div>
</body>
</html>