<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <title>Tambah User ke Database</title>
</head>
<body>
    <div class="container">
        <h1>Rekam data User Rainusa</h1>
        <form action="user_proses.php" method="post">
         <fieldset>
             <legend>Rekam Data User</legend>
             <p>
                <label for="judul">Username:</label>
                <input type="text" name="username" id="username">
             </p>
             <p>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password">
             </p> 
             <p>
                <label for="rule">Hak akses:</label>
                <select name="rule" id="rule">
                    <option value="admin">Administrator</option>
                    <option value="kasir">Kasir</option>
                    <option value="staff" selected>Staff</option>
                </select>
             </p> 
         </fieldset>
         <br>
         <input type="submit" name="submit" value="Simpan Data">
        </form>
    </div>
</body>
</html>