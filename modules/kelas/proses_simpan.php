<?php
// panggil file "database.php" untuk koneksi ke database
require_once "../../config/database.php";

// mengecek data hasil submit dari form
if (isset($_POST['simpan'])) {
    // ambil data hasil submit dari form
    $nama_kelas = mysqli_real_escape_string($mysqli, trim($_POST['nama_kelas']));
    $deskripsi  = mysqli_real_escape_string($mysqli, trim($_POST['deskripsi']));

    // sql statement untuk insert data ke tabel "tbl_kelas"
    $insert = mysqli_query($mysqli, "INSERT INTO tbl_kelas(nama_kelas, deskripsi) VALUES('$nama_kelas', '$deskripsi')")
                                     or die('Ada kesalahan pada query insert : ' . mysqli_error($mysqli));
    // cek query
    // jika proses insert berhasil
    if ($insert) {
        // alihkan ke halaman data kelas dan tampilkan pesan berhasil simpan data
        header('location: ../../main.php?module=kelas&pesan=1');
    }
}
