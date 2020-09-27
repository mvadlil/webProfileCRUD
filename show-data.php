<?php

    include "koneksi.php";

    $sql = "SELECT * FROM user";
    $result = $koneksi->query($sql);

    foreach($result as $result) {
        $id = $result["id"];
        $name = $result["name"];
        $role = $result["role"];
        $availability = $result["availability"];
        $age = $result["age"];
        $location = $result["location"];
        $experience = $result["experience"];
        $email = $result["email"];
    }
?>