<?php
    include("koneksi.php");

    $tbel = "CREATE TABLE tbDOSEN(
        id INT AUTO_INCREMENT PRIMARY KEY,
        nama VARCHAR (30),
        nip VARCHAR (50),
        notlp int(12),
        email varchar(255),
        jk VARCHAR (255),
        id_dsn VARCHAR(255)
    )"; 

 $hsl = mysqli_query($cnn,$tbel);
 if($hsl){
    echo "Table tbDOSEN ==> sukses 🔥";
 }