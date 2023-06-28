<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <table>
        <h3>Tambah Data Mahasiswa</h3>
        <form action="tambah_mahasiswa_aksi.php" method="post">
            <tr>
                <td><label for="">Id</td>
                <td><input type="text" name="txt_id"></td>
            </tr>
            <tr>
                <td><label for="">NIM</td>
                <td><input type="text" name="txt_nim"></td>
            </tr>
            <tr>
                <td><label for="">Nama</td>
                <td><input type="text" name="txt_nama"></td>
            </tr>
            <tr>
                <td><label for="">Alamat</td>
                <td><input type="text" name="txt_alamat"></td>
            </tr>
            <tr>
                <td><label for="">Jenis Kelamin</td>
                <td><input type="text" name="txt_jk"></td>
            </tr>
            <tr>
                <td><label for="">Created at</td>
                <td><input type="date" name="txt_cr"></td>
            </tr>
            <tr>
                <th><input type="submit" value="Tambah"><input type="reset" value="Reset"></th>
            </tr>
        </form>
    </table>
    
</body>
</html>