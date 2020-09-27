<?php

    $host = "localhost"; //host database
    $username = "root"; //username database
    $password = ""; //password database
    $db = "profile";

    $koneksi = new mysqli($host, $username, $password, $db); //membuat koneksi ke database mysql

    // if($koneksi -> connect_error) {
    //     die("koneksi ke database gagal");
    // } else {
    //     echo "koneksi ke databse berhasil";
    // }
?>