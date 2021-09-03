<?php
session_start();
include './config/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // GET DATA USER DARI DATABASE
        $sql = "select * from users u where email = '".$email."'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $dataUser = mysqli_fetch_assoc($result); // data user ditemukan
        } else {
            $erorAuthUserNotFound = true;
        }
        mysqli_close($conn); // untuk close connection database
        
        if ($email == $dataUser['email'] && hash('sha256',$password) == $dataUser['password'] ) {
            $_SESSION["id"] = $dataUser['id'];
            $_SESSION["username"] = $dataUser['username'];
            $_SESSION["nama"] = $dataUser['nama'];
            $_SESSION["email"] = $dataUser['email'];
            header("Location: ./layouts/main.php?page=dashboard");
        } else {
            $erorAuth = true;
        }
    } else {
        $eror = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In Page</title>
    <link rel="stylesheet" href="">
    <!-- bagian penghubung css -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <!-- /bagian penghubung css -->

    <!-- bagian google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- /bagian google fonts -->
</head>

<body class="text-center ody">
    <main class="form-signin shadow">
        <?php if (isset($eror)) : ?>
            <p style="color: red;">TOLONG USERNAME DAN PASSWORD DIISI !!!</p>
        <?php endif; ?>
        <?php if (isset($erorAuth)) : ?>
            <p style="color: red;">USERNAME DAN PASSWORD TIDAK COCOK !!!</p>
        <?php endif; ?>
        <?php if (isset($erorAuthUserNotFound)) : ?>
            <p style="color: red;">USERNAME TIDAK TERDAFTAR DI SISTEM !!!</p>
        <?php endif; ?>
        <form class="orm" action=" " method="POST">
            <img class="mb-4 gm" src="../icon/svg.svg" alt="">
            <h1 class="h3 mb-3 fw-normal deh">Easy Camper</h1>
            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="Email" name="email">
                <label for="floatingInput">Email </label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                <label for="floatingPassword">Password</label>
            </div>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="w-100 btn btn-lg sas " type="submit" name="submit">Sign in</button>
            <p class="mt-5 mb-3 text-muted sas1">Doesn't have an account yet ? <a href="../html_php/signup.php"> Sing
                    Up</a>
            </p>
        </form>
    </main>

    <!-- bagian js -->
    <script src="../js/bootstrap.js"></script>
    <!-- /bagian js -->
</body>

</html>