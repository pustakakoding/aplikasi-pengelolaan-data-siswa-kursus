<?php
// panggil file "database.php" untuk koneksi ke database
require_once "../../config/database.php";

// mengecek data GET "id_siswa"
if (isset($_GET['id'])) {
    // ambil data GET dari tombol hapus
    $id_siswa = mysqli_real_escape_string($mysqli, $_GET['id']);

    // mengecek data foto profil
    // sql statement untuk menampilkan data "foto_profil" dari tabel "tbl_siswa" berdasarkan "id_siswa"
    $query = mysqli_query($mysqli, "SELECT foto_profil FROM tbl_siswa WHERE id_siswa='$id_siswa'")
                                    or die('Ada kesalahan pada query tampil data : ' . mysqli_error($mysqli));
    // ambil data hasil query
    $data = mysqli_fetch_assoc($query);

    // hapus file foto dari folder images
    $hapus_file = unlink("../../images/$data[foto_profil]");

    // sql statement untuk delete data dari tabel "tbl_siswa" berdasarkan "id_siswa"
    $delete = mysqli_query($mysqli, "DELETE FROM tbl_siswa WHERE id_siswa='$id_siswa'")
                                     or die('Ada kesalahan pada query delete : ' . mysqli_error($mysqli));
    // cek query
    // jika proses delete berhasil
    if ($delete) {
        // alihkan ke halaman data siswa dan tampilkan pesan berhasil hapus data
        header('location: ../../main.php?module=siswa&pesan=2');
    }
}
