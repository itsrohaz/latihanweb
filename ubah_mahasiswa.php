<?php
include "koneksi.php";
$id;
$nim = $_GET['Dataku'];
$nama;
$alamat;
$jenis_kelamin;
$created_at;
$query =mysqli_query($koneksi, "select * from mahasiswa where nim = '$nim'");
if ($data = mysqli_fetch_array($query)){
     $nama = $data ['nama'];
     $alamat = $data ['alamat'];
     $jenis_kelamin = $data ['jenis_kelamin'];
     $created_at = $data ['created_at'];
}
?>
<head>  
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ubah Data Mahasiswa</title>
    </head>
    <body>
        <table>
            <h3>Ubah Data Mahasiswa</h3>
            <form action="ubah_mahasiswa_aksi.php" method="get">
                 <tr>
                    <td><label for="">ID</label></td>
                    <td><input type="text" name="txt_id" id="" value="<?php echo $id?>"></td>
                </tr>
                <tr>
                    <td><label for="">NIM</label></td>
                    <td><input type="text" name="txt_nim" id="" value="<?php echo $nim?>"></td>
                </tr>
                <tr>
                    <td><label for="">Nama</label></td>
                    <td><input type="text" name="txt_nama" id="" value="<?php echo $nama?>"></td>
                </tr>
                <tr>
                    <td><label for="">Alamat</label></td>
                    <td><input type="text" name="txt_alamat" id="" value="<?php echo $alamat?>"></td>
                </tr>
                <tr>
                    <td><label for="">Jenis Kelamin</label></td>
                    <td><input type="text" name="txt_jk" id="" value="<?php echo $jenis_kelamin?>"></td>
                </tr>
                <tr>
                    <td><label for="">Created at</label></td>
                    <td><input type="date" name="txt_ca" id="" value="<?php echo $created_at?>"></td>
                </tr>
                <tr>
                    <th><input type="submit" value="ubah"><input type="reset" value="Reset"></th>
                </tr>
            </form>
        </table>
    </body>
    </html>
</head>