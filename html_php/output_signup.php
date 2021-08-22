<?php
session_start();
if (!isset($_SESSION["email"])) {
    header("Location: signup.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
</head>

<body>
    <h4>Full Name : <?= $_SESSION["firstName"]; ?> <?= $_SESSION["lastName"]; ?></h4>
    <h4>Email : <?= $_SESSION["email"]; ?></h4>
    <h4>Password : <?= $_SESSION["password"]; ?></h4>
    <h4>Date of birth : <?= $_SESSION["month"]; ?>-<?= $_SESSION["date"]; ?>-<?= $_SESSION["year"]; ?></h4>
    <h4>Gender : <?= $_SESSION["gender"]; ?></h4>
    <a href="signout.php">SIGN OUT</a>
</body>

</html>