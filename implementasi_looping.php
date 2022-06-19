<!DOCTYPE html>
<html lang="en">
<head>
    <title>Implementasi Looping</title>
</head>
<body>
    Pilih tanggal: 
    <select name="tgl">
        <?php
            for($tgl = 1; $tgl <= 31; $tgl++){
                echo "<option value = $tgl> $tgl</option>";
            }
        ?>
    </select>
    Pilih Bulan: 
    <select name="bln">
        <?php
            for($bln = 1; $bln <= 12; $bln++){
                echo "<option value = $bln> Bulan ke-$bln</option>";
            }
        ?>
    </select>

    Pilih Tahun: 
    <select name="thn">
        <?php
            for($thn = 1945; $thn <= 2050; $thn++){
                echo "<option value = $thn> $thn</option>";
            }
        ?>
    </select>
</body>
</html>