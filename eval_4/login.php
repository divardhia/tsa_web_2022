<?php
//Koneksi 
function koneksi(){
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "tsa_web";
    return mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
}

    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];
    $koneksi = koneksi();

    $query = "SELECT * FROM user where username = '$username' and password = '$password'";
    $result = mysqli_query($koneksi, $query);

    $cek = mysqli_num_rows($result);

    if($cek > 0){
        $_SESSION['username'] = $username;
        $_SESSION['login'] = "login";
        echo "<script type='text/javascript'>alert('Berhasil');</script>";
        header("location:profil_view.php");
    }else{
        echo "<script type='text/javascript'>alert('Gagal');</script>";
        header("location:company_login.php");
    }
