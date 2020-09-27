<?php

    include "koneksi.php";

    $sql = "CREATE TABLE user(
        id int PRIMARY KEY,
        name varchar(50),
        role varchar(50),
        avalability varchar(50),
        age int,
        location varchar(50),
        experience varchar(50),
        email varchar(50)
    )";

    if($koneksi->query($sql) == TRUE) {
        echo "Table berhasil dibuat";
    } else {
        echo "Table gagal dibuat";
    }

?>