<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama Mahasiswa</th>
        </tr>
    <?php 
            for ($i = 1;  $i <= 100; $i++)
            {
                echo "<tr>";
                echo "<td>$i</td>";
                echo "<td>Nama Mahasiswa ke-$i</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>