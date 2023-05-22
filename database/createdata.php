<?php
     include("koneksi.php");

     $sql = "INSERT INTO tbmhs(id,nama,nim,prodi,tgl_lahir,jk,id_mhs) VALUES ('1','Mang Deny','220696969','TI','12/2/2003','L','1')";
     if(mysqli_query($cnn, $sql)){
        echo "New Record sukses 🔥";
    }else{
        echo "Error";
    }
    mysqli_close($cnn);
?>