<?php
    //Koneksi 
    function koneksi(){
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $dbname = "tsa_web";
        return mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    }

    // Cek session
    function checkSession(){
        if(empty($_SESSION['login'])){
            header("Location: company_login.php");
        }
    }

    function logout(){
        session_destroy();
        header("Location: company_login.php");
    }

    // Login
    // function login(){
    //     session_start();

    //     $username = $_POST['username'];
    //     $password = $_POST['password'];
    //     $koneksi = koneksi();

    //     $query = "SELECT * FROM user where username = '$username' and password = '$password'";
    //     $result = mysqli_query($koneksi, $query);

    //     $cek = mysqli_num_rows($result);

    //     if($cek > 0){
    //         $_SESSION['username'] = $username;
    //         return "<script type='text/javascript'>alert('Berhasil');</script>";
    //     }else{
    //         return "<script type='text/javascript'>alert('Gagal');</script>";
    //     }
    // }
