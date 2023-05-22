<?php
    include("cmd/user.php");
    $psn = "";
    if(isset($_POST["txPASS1"])){
        if($_POST["txPASS1"] == $_POST["txPASS2"]){
            $nama = $_POST["txNAMA"];
            $email = $_POST["txEMAIL"];
            $user = $_POST["txUSER"];
            $pass = $_POST["txPASS1"];
            if(createuser($nama,$email,$user,$pass)){
                $psn = "Create Data Berhasil";
            }else{
                $psn = "Create Data Gagal"; 
            }
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
    <body style="margin-top: 100px;">
        <form action="register.php" method="POST" class="m-auto border p-4 mt-4 w-50">
            <?php
                echo "<div>$psn</div>";
            ?>
                <div class="mb-2">
                <label class="mb-2 text-white">Nama Lengkap 🔥</label>
                <input type="text" name="txNAMA" placeholder="Nama Lengkap" class="form-control">
            </div>
            <div class="mb-2 ">
        <label class="mb-2 text-white">Email 🔥</label>
            <input type="email" name="txEMAIL" placeholder="Email" class="form-control">
        </div>
        <div class="mb-2">
        <label class="mb-2 text-white">Username 🔥</label>
        <input type="text" name="txUSER" placeholder="Username" class="form-control">
    </div>
    <div class="mb-2">
        <label class="mb-2 text-white">Password 🔥</label>
        <input type="password" name="txPASS1" placeholder="Password" class="form-control">
    </div>
    <div class="mb-2">
        <label class="mb-2 text-white">Verifikasi Password 🔥</label>
        <input type="password" name="txPASS2" placeholder="Verifikasi" class="form-control ">
    </div>
        <div>
            <button type="submit" class="btn btn-primary mt-2"> Register </button>
        </div>
    </form>
</body>
</html>