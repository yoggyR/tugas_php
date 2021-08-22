<?php
session_start();
$userDummy = [
    'username' => 'admin',
    'password' => 'admin',
    'isi'      => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est neque quod, alias labore corporis quibusdam dolorem cumque dolorum voluptatem, velit omnis tenetur! Officiis, distinctio aut! Itaque illo quaerat repellendus culpa! Dignissimos id, provident quasi inventore in enim. Reprehenderit esse impedit quasi laudantium quae possimus quidem obcaecati labore quam? Consequatur, perferendis? Odit, aspernatur dicta. Reprehenderit, quasi? Dignissimos sapiente iusto quis hic, quasi consequatur nisi! Nostrum ut maxime provident eaque minima dolores maiores incidunt nulla corporis? Sunt illum enim beatae perspiciatis cumque quidem iure, fuga dolorem iste! Pariatur amet eaque a iste obcaecati minima nam eligendi, autem odit atque eos minus odio tenetur impedit, ipsum corrupti dolores recusandae quo. Dolorem aut velit quis a possimus officiis eos ut distinctio error. Explicabo esse, omnis ullam sint sit, eaque accusamus necessitatibus veritatis qui iure quidem porro ex id distinctio quia saepe voluptatibus nulla illo repellat ea impedit perferendis cupiditate quos! Pariatur nesciunt eos magnam, esse voluptate odio beatae laboriosam ab voluptatum aperiam reiciendis vel voluptas debitis obcaecati? Ad aperiam similique impedit modi dolor nulla tempore repudiandae nostrum. Ipsam nihil soluta, veniam saepe veritatis a nam, quod suscipit modi cum molestiae? Ipsam earum animi delectus voluptatum velit, voluptatibus minus inventore expedita voluptas sit temporibus, cum tempora adipisci, quibusdam libero atque praesentium blanditiis? A, temporibus eum non esse aperiam molestiae maxime eligendi consequuntur beatae optio eaque placeat corrupti voluptates repellendus nulla doloribus facere. Nulla aspernatur tenetur deserunt consequatur nobis pariatur vitae quis possimus sequi ullam, doloribus quaerat ut, fuga voluptates? Sint dolorem atque hic adipisci odio, ab cupiditate molestiae aliquid, magnam nostrum temporibus, voluptatibus placeat pariatur! Reprehenderit sed quaerat sapiente sit est laborum aperiam deleniti aspernatur laudantium nulla nostrum debitis rem, maiores maxime dolorum eveniet exercitationem inventore quia veritatis totam labore, nisi repudiandae. Impedit labore nihil doloribus, itaque totam sunt alias porro nulla provident? Soluta, modi?'
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['name']) && !empty($_POST['password'])) {
        $name = $_POST['name'];
        $password = $_POST['password'];
        if ($name == $userDummy['username'] && $password == $userDummy['password']) {
            $_SESSION["name"] = $name;
            $_SESSION["isi"] = $userDummy['isi'];
            header("Location: Dashboard.php");
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