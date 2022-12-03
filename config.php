<?php
$koneksi = mysqli_connect("localhost","root","","test");

if(mysqli_connect_errno()){
    echo "Koneksi Gagal : ".mysqli_error();
}
?>