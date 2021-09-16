<?php
//koneksi
$Conn = mysqli_connect("localhost", "mahasiswa", "mahasiswa","mahasiswa");

//ambil data 
$data = mysqli_query($Conn, "SELECT * FROM siswa");
// var_dump($data);
if(!$data){
    echo mysqli_error($Conn);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gin-sugin.github.io</title>
</head>
<body>
    <h1>Tabel Siswa</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>
        <?php $nurut =1 ?>
        <?php while ($row = mysqli_fetch_assoc($data) ): ?>
        <tr>
            <td><?= $nurut ?></td>
            <td><?= $row["nrp"]; ?> </td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["email"]; ?></td>
            <td><img src="<?= $row["gambar"]; ?>" width="50"></td>
            <td><a href="">Ubah </a>| <a href="">Hapus</a></td>
        </tr><?php $nurut++; ?>
        <?php endwhile; ?>
    </table>
</body>
</html>