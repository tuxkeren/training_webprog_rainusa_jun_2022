<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <h1>Aplikasi Katalog Buku Rainusa</h1>
        <form action="login_proses.php" method="post">
         <fieldset>
             <legend>Login</legend>
             <p>
                <label for="judul">Username:</label>
                <input type="text" name="username" id="username">
             </p>
             <p>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password">
             </p> 
         </fieldset>
         <br>
         <input type="submit" name="submit" value="LOGIN">
        </form>
    </div>
</body>
</html>