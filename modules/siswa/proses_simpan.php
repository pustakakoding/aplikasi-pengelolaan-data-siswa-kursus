<?php
// panggil file "database.php" untuk koneksi ke database
require_once "../../config/database.php";

// mengecek data hasil submit dari form
if (isset($_POST['simpan'])) {
    // ambil data hasil submit dari form
    $id_siswa      = mysqli_real_escape_string($mysqli, $_POST['id_siswa']);
    $tanggal       = mysqli_real_escape_string($mysqli, trim($_POST['tanggal_daftar']));
    $kelas         = mysqli_real_escape_string($mysqli, $_POST['kelas']);
    $nama_lengkap  = mysqli_real_escape_string($mysqli, trim($_POST['nama_lengkap']));
    $jenis_kelamin = mysqli_real_escape_string($mysqli, $_POST['jenis_kelamin']);
    $alamat        = mysqli_real_escape_string($mysqli, trim($_POST['alamat']));
    $email         = mysqli_real_escape_string($mysqli, trim($_POST['email']));
    $whatsapp      = mysqli_real_escape_string($mysqli, trim($_POST['whatsapp']));

    // ubah format tanggal menjadi Tahun-Bulan-Hari (Y-m-d) sebelum disimpan ke database
    $tanggal_daftar = date('Y-m-d', strtotime($tanggal));

    // ambil data file hasil submit dari form
    $nama_file          = $_FILES['foto']['name'];
    $tmp_file           = $_FILES['foto']['tmp_name'];
    $extension          = array_pop(explode(".", $nama_file));
    // enkripsi nama file
    $nama_file_enkripsi = sha1(md5(time() . $nama_file)) . '.' . $extension;
    // tentukan direktori penyimpanan file
    $path               = "../../images/" . $nama_file_enkripsi;

    // lakukan proses unggah file
    // jika file berhasil diunggah
    if (move_uploaded_file($tmp_file, $path)) {
        // sql statement untuk insert data ke tabel "tbl_siswa"
        $insert = mysqli_query($mysqli, "INSERT INTO tbl_siswa(id_siswa, tanggal_daftar, kelas, nama_lengkap, jenis_kelamin, alamat, email, whatsapp, foto_profil) 
                                         VALUES('$id_siswa', '$tanggal_daftar', '$kelas', '$nama_lengkap', '$jenis_kelamin', '$alamat', '$email', '$whatsapp', '$nama_file_enkripsi')")
                                         or die('Ada kesalahan pada query insert : ' . mysqli_error($mysqli));
        // cek query
        // jika proses insert berhasil
        if ($insert) {
            // alihkan ke halaman data siswa dan tampilkan pesan berhasil simpan data
            header('location: ../../main.php?module=siswa&pesan=1');
        }
    }
}
