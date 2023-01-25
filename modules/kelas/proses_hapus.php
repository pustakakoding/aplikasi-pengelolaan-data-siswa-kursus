<?php
// panggil file "database.php" untuk koneksi ke database
require_once "../../config/database.php";

// mengecek data GET "id_kelas"
if (isset($_GET['id'])) {
    // ambil data GET dari tombol hapus
    $id_kelas = mysqli_real_escape_string($mysqli, $_GET['id']);

    // sql statement untuk delete data dari tabel "tbl_kelas" berdasarkan "id_kelas"
    $delete = mysqli_query($mysqli, "DELETE FROM tbl_kelas WHERE id_kelas='$id_kelas'")
                                     or die('Ada kesalahan pada query delete : ' . mysqli_error($mysqli));
    // cek query
    // jika proses delete berhasil
    if ($delete) {
        // alihkan ke halaman data kelas dan tampilkan pesan berhasil hapus data
        header('location: ../../main.php?module=kelas&pesan=2');
    }
}
