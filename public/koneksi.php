<?php

    if(!isset($_SESSION)){
        session_start();
    }

    $host = 'localhost';
    $user = 'root';
    $pass ='';
    $database = 'moovit';

    $koneksi = mysqli_connect($host,$user,$pass,$database);

    if ($koneksi->connect_error){
        die("koneksi gagal: ".$koneksi->connect_error);
    } //else echo "koneksi berhasil";
?>
