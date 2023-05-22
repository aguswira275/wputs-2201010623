<?php
session_start();
include("cmd/user.php");
if (isset($_POST["txUSER"])) {
    $user = $_POST["txUSER"];
    $pwd = $_POST["txPASS"];


    $islogin = ceklogin($user, $pwd);
    if ($islogin["STATUS"]) {
        $_SESSION["login"] = md5($user);
        $_SESSION["NAMA"] = $islogin["NAMA"];
        header("location: dashboard.php");
    } else {
        $_SESSION["login"] = "";
        $_SESSION["NAMA"] = "";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        Dashboard
    </title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<link href="assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
</head>
<title>Form Login</title>
</head>

<body style="margin-top: 200px;">
    <form action="login.php" method="POST" class="m-auto border p-4 w-25">
        <h3 class="mb-4">Form Login 🔥</h3>
        <div class="mb-2">
            User Name 🔥
            <input type="text" name="txUSER" class="form-control">
        </div>
        <div class="mb-2">
            Password 🔥
            <input type="password" name="txPASS" class="form-control mb-2">
        </div>
        <button type="submit" class="btn btn-primary mt-2"> Login 🔥 </button>
       <a href="./register.php" class="btn btn-danger mt-2">Sign Up</a>
    </form>
</body>

</html>