<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kalkulator Sederhana</title>
</head>
<body>
    <h1>Demo Operator</h1>
    <h2>Aritmatika</h2>
    <form action="proses_operand.php" method="post">
    <table border="0">
        <tr>
            <td>Operand Kiri</td>
            <td>Operator</td>
            <td>Operand Kanan</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>
                <input type="text" name="operand_kiri" value="">
            </td>
            <td>
                <select name="operator" id="operator">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">x</option>
                    <option value="/">/</option>
                    <option value="%">%</option>
                </select>
            </td>
            <td>
                <input type="text" name="operand_kanan" value="">
            </td>
            <td>
                <input type="submit" name="proses" value="HITUNG">
            </td>
        </tr>
    </table>
    </form>
</body>
</html>