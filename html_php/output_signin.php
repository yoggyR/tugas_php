<?php
    // Start the session
    session_start();
    if(!isset($_SESSION["name"])){
        header("Location: signin.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>siginin</title>
</head>
<body>
    <h1>ANDA BERHASIL SIGN IN <?= $_SESSION["name"]; ?> !!!</h1>
    <h1>EMAIL ANDA <?= $_SESSION["email"]; ?> !!!</h1>
    <h1>ALAMAT ANDA <?= $_SESSION["alamat"]; ?> !!!</h1>

    <a href="logout.php">LOGOUT</a>
</body>
</html>