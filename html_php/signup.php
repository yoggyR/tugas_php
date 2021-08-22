<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (
        !empty($_POST['firstName'])
        && !empty($_POST['lastName'])
        && !empty($_POST['email'])
        && !empty($_POST['password'])
        && !empty($_POST['date'])
        && !empty($_POST['month'])
        && !empty($_POST['year'])
        && !empty($_POST['gender'])
    ) {
        $firstName = $_POST['firstName'];
        $_SESSION["firstName"] = $firstName;
        $lastName = $_POST['lastName'];
        $_SESSION["lastName"] = $lastName;
        $email = $_POST['email'];
        $_SESSION["email"] = $email;
        $password = $_POST['password'];
        $_SESSION["password"] = $password;
        $date = $_POST['date'];
        $_SESSION["date"] = $date;
        $month = $_POST['month'];
        $_SESSION["month"] = $month;
        $year = $_POST['year'];
        $_SESSION["year"] = $year;
        $gender = $_POST['gender'];
        $_SESSION["gender"] = $gender;
        header("Location: output_signup.php");
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
    <title>Sign Up Page</title>
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

<body class="boy">
    <div class="container">
        <?php
        if (isset($eror)) : ?>
            <p style="color: red; text-align: center; background-color: white;">TOLONG DIISI SEMUA !!!</p>
        <?php endif; ?>
        <div class="row ger">
            <div class="col-4 dar">
                <img src="../img/undraw_Login_re_4vu2.svg" alt="" class="gan">
                <h3 class="cou">Create an Account</h3>
                <p class="cen"><img src="../icon/svg.svg" alt="" height="30" width="30"> Easy Camper</p>
            </div>
            <div class="col-8 cz">
                <div class="row">
                    <div class="col-md-7 col-lg-8">
                        <form action=" " method="POST">
                            <div class="row g-3">
                                <p class="zy"><img src="../icon/svg.svg" alt=""> Easy Camper</p>
                                <div class="col-sm-6">
                                    <label for="firstName" class="form-label pir">First name</label>
                                    <input type="text" class="form-control" id="firstName" placeholder="" name="firstName">
                                </div>

                                <div class="col-sm-6">
                                    <label for="lastName" class="form-label">Last name</label>
                                    <input type="text" class="form-control" id="lastName" placeholder="" name="lastName">
                                </div>
                                <div class="col-12">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="easyeamper@easy.com" name="email">
                                </div>

                                <div class="col-12">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>

                                <label for="of" class="form-label">Date of birth</label>
                                <div class="col-md-4 ccv">
                                    <select class="form-select" id="date" name="date">
                                        <?php
                                        for ($i = 1; $i <= 31; $i++) {
                                            echo "<option value='$i'>$i</option>";
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="col-md-4 ccv">
                                    <select class="form-select" id="month" name="month">
                                        <?php
                                        $month = [
                                            '01' => 'January',
                                            '02' => 'February',
                                            '03' => 'March',
                                            '04' => 'April',
                                            '05' => 'May',
                                            '06' => 'June',
                                            '07' => 'July',
                                            '08' => 'August',
                                            '09' => 'September',
                                            '10' => 'October',
                                            '11' => 'November',
                                            '12' => 'December',
                                        ];
                                        foreach ($month as $key => $val) {
                                            echo "<option value='$key'>$val</option>";
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="col-md-4 ccv">
                                    <select class="form-select" id="year" name="year">
                                        <?php
                                        $th_awal = date('Y') - 5;
                                        $th_akhir = date('Y') + 4;
                                        for ($i = $th_akhir; $i >= $th_awal; $i--) {
                                            if (date('Y') == $i) {
                                                $isSelected = 'selected="selected"';
                                            }
                                            echo "<option value='$i' $isSelected>$i</option>";
                                            $isSelected = '';
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="state" class="form-label">Gender</label>
                                    <select class="form-select" id="gender" name="gender">
                                        <option value="">Choose...</option>
                                        <option value='male'>Male</option>
                                        <option value='female'>Female</option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <button class="w-100 btn btn-dark btn-lg" type="submit" name="submit">Create your account</button>
                            <p class="mt-3 das text-muted sas1">Already Registred ? <a href="../html_php/signin.php">
                                    Sing
                                    In</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- bagian js -->
    <script src="../js/bootstrap.js"></script>
    <!-- /bagian js -->
</body>

</html>