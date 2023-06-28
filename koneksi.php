<?php
$koneksi = new mysqli("localhost","root","","latihan");

if($koneksi){
    echo "eror koneksi :".mysqli_connect_error();
}
?>