<?php
    include("koneksi.php");

    $tbel = "CREATE TABLE tbMATKUL(
        id INT AUTO_INCREMENT PRIMARY KEY,
        nama VARCHAR (30),
        sks VARCHAR (50),
        semester VARCHAR (255),
        id_mk VARCHAR(255)
    )"; 

 $hsl = mysqli_query($cnn,$tbel);
 if($hsl){
    echo "Table tbMATKUL ==> sukses 🔥";
 }