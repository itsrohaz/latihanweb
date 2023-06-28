<?php
require "koneksi.php";

$id = $_POST['txt_id'];
$nim = $_POST['txt_nim'];
$nama = $_POST['txt_nama'];
$alamat = $_POST['txt_alamat'];
$jenis_kelamin = $_POST['txt_jk'];

$insert = mysqli_query($koneksi, "update mahasiswa set nama='$nama', alamat='$alamat', jenis kelamin='$jenis_kelamin,where nim='$nim'");
if ($insert){
    header("location:tampil_mahasiswa.php");
}else{
    echo "Gagal Tersimpan";
}
