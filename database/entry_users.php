<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entry Users</title>
</head>
<body>
    <br/>
    <br/>
<center>
    <form action="save_user.php" method="post">
    <table border=0>
        <tr>
            <td>Username</td><td>:</td>
            <td>
                <input type="text" name="username" id="username">
            </td>
        </tr>
        <tr>
            <td>Password</td><td>:</td>
            <td>
                <input type="password" name="password" id="password">
            </td>
        </tr>
        <tr>
            <td>Rule</td><td>:</td>
            <td>
                <select name="rule">
                    <option value="admin">Administrator</option>
                    <option value="staff">Staff</option>
                    <option value="kasir">Kasir</option>
                </select>
            </td>
        </tr>
        <tr>
            <td align="center" colspan="3"><input type="submit" name="save" value="Simpan"></td>
        </tr>
    </table>
    </form>
    </center>
</body>
</html>