<?php
    $con = mysqli_connect("localhost","root","","kma_warehouse");

    if (mysqli_connect_errno()){
        echo "Koneksi database gagal : " . mysqli_connect_error();
    }
?>