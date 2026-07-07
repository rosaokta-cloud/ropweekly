<?php

require 'fungsi.php';

$query = "SELECT *  FROM  mahasiswa";

///panggil function
$mahasiswas = tampildata($query); ///wadah isi data mahasiswa yang masih dibawa lemari (database) ke wadah baru (array) agar bisa digunakan di function



//ambil data (fetch) mahasiswa dari object result
//mysqli_fetch_row() -> mengembalikan array numerik
//mysqli_fetch_assoc() -> mengembalikan array associative
//mysqli_fetch_array() -> mengembalikan keduanya
//mysqli_fetch_object() -> mengembalikan object
//while ($mhs = mysqli_fetch_assoc($result)) {
    //var_dump($mhs);
    //echo $mhs["nama"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    
    <h1 align="center">
        WEB TI ROP - 2026
    </h1>
    <div class="content-wrapper">
    <table border="1" align="center" cellspacing="0" cellpadding="10px">
        <tr>
            <td>
                <a href="index.php">Home</a>
            </td>
            <td>
                <a href="profile.php">Profile</a>
            </td>
            <td>
                <a href="contact.php">Contact</a>
            </td>
            <td>
                <a href="mahasiswa.php">Data Mahasiswa</a>
            </td>
            <td>
                <a href="latihan.php">Latihan</a>
            </td>
            <td>
                <a href="tambahdata.php">Form</a>
            </td>
        </tr>
    </table>
    <br><br>
    
    <a href="tambahdata.php"><button>Tambah Data</button></a>
    
    <h2>
        Data Mahasiswa
    </h2>
    
    <table border="1" cellpadding="5px">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Program Studi</th>
            <th>Email</th>
            <th>Nomor Whatsapp</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        foreach ($mahasiswas as $mhs)
        {
        ?>
            <tr>
                <td><?= $no ?></td> 
                <td><?php echo $mhs["nama"]?></td>
                <td><?php echo $mhs["nim"]?></td>
                <td><?= $mhs["prodi"]; ?></td>
                <td><?= $mhs["email"]; ?></td>
                <td><?= $mhs["no_hp"]; ?></td>
                <td>
                    <img src="image/<?= $mhs['foto']; ?>" width="45px" height="auto">
                </td>
                <td>
                    <a href="editdata.php?id=<?= $mhs['id']; ?>">Edit</a> | 
                    <a href="hapusdata.php?id=<?= $mhs['id']; ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
                </td>
            </tr>
        <?php
        $no++;
        }
        ?>
    </table>
    </div>
    
    <hr>
    <footer align="center">
        <p>
            <small>Developed by: Rosa Oktaviana P (13242520071)</small>
        </p>
    </footer>
    
</body>
</html>