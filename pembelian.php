<?php
    // $nama = "Rini Permata";
    // $email = "rinipermata@gmail.com";
    // $buku = "PHP Uncover";
    // $jumlah = 3;
    // $alamat = "Jl. Perintis Kemerdekaan No. 14";
    // $kurir = "JNE";
    // $ongkir = "25000";
    // $tgl = "5"; $bln="6"; $thn="2019";
    // $tambahan_dvd = "+ DVD eBook";
    // $tambahan_kado = "+ Bungkus Kado";
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
        table{
            border-collapse:collapse;
            border-spacing: 0;
            border: 1px black solid;
            width: 100%;
        }
        th,td{
            padding: 8px 15px;
            border: 1px black solid;
        }
        td:first-child{
            background-color:#F2F2F2;
        }
   </style>
    <title>Data Pembelian</title>
</head>
<body>
    <div class="container">
        <h1>Pembelian Buku Rainusa</h1>
        <table>
            <tr>
                <td>Nama</td>
                <td><?php echo $nama; ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?php echo $email; ?></td>
            </tr>
            <tr>
                <td>Buku</td>
                <td><?php echo $buku; ?></td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td><?php echo $jumlah; ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><?php echo $alamat; ?></td>
            </tr>
            <tr>
                <td>Kurir Pengiriman</td>
                <td><?php echo $kurir; ?></td>
            </tr>
            <tr>
                <td>Ongkos Kirim</td>
                <td><?php echo "Rp. ".number_format($ongkir,2,",","."); ?></td>
            </tr>
            <tr>
                <td>Tanggal Pengiriman</td>
                <td><?php echo "$tgl-$bln-$thn"; ?></td>
            </tr>
            <tr>
                <td>Tambahan</td>
                <td><?php echo $tambahan_dvd; $tambahan_kado; ?></td>
            </tr>
            <tr>
                <td>Total Biaya</td>
                <td>
                    <?php 
                        $total = ($jumlah * 100000) + $ongkir;
                        echo "<strong>";
                        echo "<strong>Rp. ".number_format($total,2,",",".");
                        echo "</strong>";
                    ?>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>