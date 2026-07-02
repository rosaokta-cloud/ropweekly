<?php
// Sesuaikan "nama_database_kamu" dengan nama database yang kamu buat di terminal
$koneksi = mysqli_connect("10.211.55.3", "root", "", "ropweekly");

// Cek apakah koneksi database error
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
    die();
}

// UBAH DI SINI: dari 'query' menjadi 'tampildata'
function tampildata($query_string) {
    global $koneksi;
    $result = mysqli_query($koneksi, $query_string);
    
    // Jika query SQL salah (misal nama tabel keliru), baris ini akan berteriak memberi tahu salahnya
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

?>