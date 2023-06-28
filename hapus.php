<?php
require "koneksi.php";


$nim = $_GET['Dataku'];
$insert = mysqli_query($koneksi,"delete from mahasiswa where nim='$nim'");
if ($insert){
    header("location:tampil_mahasiswa.php");
}else{
    echo "Gagal Tersimpan";
}
?>