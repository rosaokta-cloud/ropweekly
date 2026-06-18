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
                <a href="form.php">Form</a>
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
        <tr>
            <td>1</td>
            <td>Rosa Oktaviana P/td>
            <td>13242520071</td>
            <td>Teknologi Informasi</td>
            <td>rosaoktap@gmail.com</td>
            <td>085876003227</td>
            <td>
                <img src="images/rop.jpg" width="60px">
            </td>
            <td>
                <a href="editdata.php"><button>Edit</button></a>
                <a href="deletedata.php"><button>Hapus</button></a>
            </td>
        </tr>
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