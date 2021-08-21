<?php
// Start the session
session_start();
$userDummy = [
    'username' => 'admin',
    'password' => '12345',
    'email' => 'ddd@gmail.com',
    'alamat' => 'Prabumulih'
];

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if(!empty($_POST['name']) && !empty($_POST['password']) ){
        $nama = $_POST['name'];
        $password = $_POST['password'];
        // Note : contoh authentication real
        if($nama == $userDummy['username'] && $password == $userDummy['password']){
            // Set Session, supaya data bisa dipakai di page lain
            $_SESSION["name"] = $nama;
            $_SESSION["email"] = $userDummy['email'];
            $_SESSION["alamat"] = $userDummy['alamat'];
            header("Location: output_signin.php");
        }else{
            $erorAuth = true;
        }
    }else{
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
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&family=Montserrat:wght@400;500;700&display=swap"
        rel="stylesheet">
    <!-- /bagian google fonts -->
</head>

<body class="text-center ody">
    <main class="form-signin shadow">
    <?php if(isset($eror)):?>
        <p style="color: red;">TOLONG USERNAME DAN PASSWORD DIISI !!!</p>
    <?php endif;?>
    <?php if(isset($erorAuth)):?>
        <p style="color: red;">USERNAME DAN PASSWORD TIDAK COCOK !!!</p>
    <?php endif;?>
        <form class="orm" action=" " method="POST">
            <img class="mb-4 gm" src="../icon/svg.svg" alt="">
            <h1 class="h3 mb-3 fw-normal deh">Easy Camper</h1>
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="name">
                <label for="floatingInput">Username </label>
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
            <p class="mt-5 mb-3 text-muted sas1">Doesn't have an account yet ? <a href="signup.php"> SignUp</a>
            </p>
        </form>
    </main>

    <!-- bagian js -->
    <script src="../js/bootstrap.js"></script>
    <!-- /bagian js -->
</body>

</html>