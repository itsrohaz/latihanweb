<?php
require"koneksi.php";


$id =$_POST['txt_id'];
$nim =$_POST['txt_nim'];
$nama =$_POST['txt_nama'];
$alamat =$_POST['txt_alamat'];
$jenis_kelamin =$_POST['txt_jk'];
$created_at =$_POST['txt_ca'];

$insert = mysqli_query($koneksi,"insert into mahasiswa (id,nim,nama,alamat,jenis_kelamin,created_at)
values ('$id','$nim','$nama','alamat','$jenis_kelamin','$created_at')");

if ($insert){
    header("location:tampil_mahasiswa.php");
}else{
    echo"Gagal Tersimpan";
}