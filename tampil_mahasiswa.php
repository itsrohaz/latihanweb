<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <a href="tambah_mahasiswa.php">Tambah</a>
    <table border="1">
        <tr>
            <td>No</td>
            <td>Id</td>
            <td>NIM</td>
            <td>Nama</td>
            <td>Alamat</td>
            <td>Jenis Kelamin</td>
            <td>Created at</td>
            <td>Proses</td>
        </tr>
        <?php
        require "koneksi.php";

        $data = mysqli_query($koneksi, "select * from mahasiswa");
        $jml = mysqli_num_rows($data);

        if ($jml ==0){
            echo "<tr>
            <td colspan='4'>Tidak Ada Data</td>
            </tr>";
        }else{
            $nomor = 1;
            while($d = mysqli_fetch_assoc($data)){
                ?>
                <tr>
                    <td><?php echo $nomor;?></td>
                    <td><?php echo $d['id'];?></td>
                    <td><?php echo $d['nim'];?></td>
                    <td><?php echo $d['nama'];?></td>
                    <td><?php echo $d['alamat'];?></td>
                    <td><?php echo $d['jenis_kelamin'];?></td>
                    <td><?php echo $d['created_at'];?></td>
                    <td><a href="ubah_mahasiswa.php?Dataku=<?php echo $d['nim'];?>">Edit</a>|<a href="hapus.php?Dataku=<?php echo $d['nim'];?>">Hapus</td>
                </tr>
                <?php
                $nomor++;
            }
            ?>
            <tr>
                <td colspan="5" align="center">Jumlah Data</td>
                <td><?php echo $jml;?></td>
            </tr>
        <?php }?>
    </table>
    
</body>
</html>