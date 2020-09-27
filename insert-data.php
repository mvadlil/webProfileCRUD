<?php
    include "koneksi.php";

    $sql = "INSERT INTO user(id,name,role,availability,age,location,experience,email) 
        VALUES ('1','Muhammad Fadlil','Front End Web Developer','Full time','24','Jakarta Selatan',
        '6','fadlilmuhammad27@gmail.com')";

    if ($koneksi->query($sql) == TRUE) {
        echo "Insert data berhasil";
    } else {
        echo "Insert data gagal";
    }
?>