<?php
include("./database/koneksi.php");
function createuser($nama, $email, $user, $pass)
{
    global $cnn;
    $stt = false;
    $iduser = md5($user);
    $sql = "INSERT INTO tbUSER(nama, email, username, passkey, iduser) 
        VALUES('$nama','$email','$user','$pass','$iduser');";
    $stt = mysqli_query($cnn, $sql);
    return $stt;
}

function ceklogin($user, $pwd)
{
    global $cnn;
    $hsl["STATUS"] = false;

    $sql = "SELECT nama,email,username,passkey,iduser FROM tbUSER WHERE username='$user';";

    $hs = mysqli_query($cnn, $sql);
    $jdata = mysqli_num_rows($hs);

    if ($jdata > 0) {
        $h = mysqli_fetch_assoc($hs);
        if ($h["passkey"] == $pwd) {
            $hsl["STATUS"] = true;
            $hsl["NAMA"] = $h["nama"];
            $hsl["EMAIL"] = $h["email"];
            $hsl["IDUSER"] = $h["iduser"];
        }
    }
    return $hsl;
}
