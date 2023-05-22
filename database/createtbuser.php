<?php
    include("koneksi.php");

    $tbel = "CREATE TABLE tbUSER(
        id INT AUTO_INCREMENT PRIMARY KEY,
        nama VARCHAR (30),
        email VARCHAR (255),
        username VARCHAR (10),
        passkey VARCHAR (255),
        iduser VARCHAR(255)
    )"; 

 $hsl = mysqli_query($cnn,$tbel);
 if($hsl){
    echo "Table tbUSER ==> sukses 🔥";
 }