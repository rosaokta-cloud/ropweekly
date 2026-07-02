<?php
// Sesuaikan koneksi database kamu
$koneksi = mysqli_connect("10.211.55.3", "root", "", "ropweekly");

// Cek apakah koneksi database error
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
    die();
}

function tampildata($query_string) {
    global $koneksi;
    $result = mysqli_query($koneksi, $query_string);
    
    if (!$result) {
        echo "Error SQL: " . mysqli_error($koneksi);
        return [];
    }

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function hapusdata($id) 
{
    global $koneksi;    
    $query = "DELETE FROM mahasiswa WHERE id = $id";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

// Tambahkan fungsi baru ini di paling bawah file fungsi.php
function tambahdata($data) {
    global $koneksi;

    $nama = htmlspecialchars($data["nama"]);
    $nim = htmlspecialchars($data["nim"]);
    $prodi = htmlspecialchars($data["prodi"]); // Mengambil input Program Studi yang diketik
    $email = htmlspecialchars($data["email"]);
    $no_hp = htmlspecialchars($data["no_hp"]);
    $foto = htmlspecialchars($data["foto"]); 

    $query = "INSERT INTO mahasiswa (nama, nim, prodi, email, no_hp, foto) 
              VALUES ('$nama', '$nim', '$prodi', '$email', '$no_hp', '$foto')";
              
    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}
?>