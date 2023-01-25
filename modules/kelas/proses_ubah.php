<?php
// panggil file "database.php" untuk koneksi ke database
require_once "../../config/database.php";

// mengecek data hasil submit dari form
if (isset($_POST['simpan'])) {
    // ambil data hasil submit dari form
    $id_kelas   = mysqli_real_escape_string($mysqli, $_POST['id_kelas']);
    $nama_kelas = mysqli_real_escape_string($mysqli, trim($_POST['nama_kelas']));
    $deskripsi  = mysqli_real_escape_string($mysqli, trim($_POST['deskripsi']));

    // sql statement untuk update data di tabel "tbl_kelas" berdasarkan "id_kelas"
    $update = mysqli_query($mysqli, "UPDATE tbl_kelas SET nama_kelas='$nama_kelas', deskripsi='$deskripsi'
                                     WHERE id_kelas='$id_kelas'")
                                     or die('Ada kesalahan pada query update : ' . mysqli_error($mysqli));
    // cek query
    // jika proses update berhasil
    if ($update) {
        // alihkan ke halaman detail data kelas dan tampilkan pesan berhasil ubah data
        header("location: ../../main.php?module=tampil_detail_kelas&id=$id_kelas&pesan=1");
    }
}
