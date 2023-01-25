<?php
// panggil file "database.php" untuk koneksi ke database
require_once "config/database.php";
// panggil file "fungsi_tanggal_indo.php" untuk membuat format tanggal indonesia
require_once "helper/fungsi_tanggal_indo.php";

// pemanggilan file halaman konten sesuai "module" yang dipilih
// jika module yang dipilih "dashboard"
if ($_GET['module'] == 'dashboard') {
    // panggil file tampil data dashboard
    include "modules/dashboard/tampil_data.php";
}
// jika module yang dipilih "siswa"
elseif ($_GET['module'] == 'siswa') {
    // panggil file tampil data siswa
    include "modules/siswa/tampil_data.php";
}
// jika module yang dipilih "form_entri_siswa"
elseif ($_GET['module'] == 'form_entri_siswa') {
    // panggil file form entri siswa
    include "modules/siswa/form_entri.php";
}
// jika module yang dipilih "form_ubah_siswa"
elseif ($_GET['module'] == 'form_ubah_siswa') {
    // panggil file form ubah siswa
    include "modules/siswa/form_ubah.php";
}
// jika module yang dipilih "tampil_detail_siswa"
elseif ($_GET['module'] == 'tampil_detail_siswa') {
    // panggil file tampil detail siswa
    include "modules/siswa/tampil_detail.php";
}
// jika module yang dipilih "tampil_pencarian_siswa"
elseif ($_GET['module'] == 'tampil_pencarian_siswa') {
    // panggil file tampil pencarian siswa
    include "modules/siswa/tampil_pencarian.php";
}
// jika module yang dipilih "kelas"
elseif ($_GET['module'] == 'kelas') {
    // panggil file tampil data kelas
    include "modules/kelas/tampil_data.php";
}
// jika module yang dipilih "form_entri_kelas"
elseif ($_GET['module'] == 'form_entri_kelas') {
    // panggil file form entri kelas
    include "modules/kelas/form_entri.php";
}
// jika module yang dipilih "form_ubah_kelas"
elseif ($_GET['module'] == 'form_ubah_kelas') {
    // panggil file form ubah kelas
    include "modules/kelas/form_ubah.php";
}
// jika module yang dipilih "tampil_detail_kelas"
elseif ($_GET['module'] == 'tampil_detail_kelas') {
    // panggil file tampil detail kelas
    include "modules/kelas/tampil_detail.php";
}
// jika module yang dipilih "tampil_pencarian_kelas"
elseif ($_GET['module'] == 'tampil_pencarian_kelas') {
    // panggil file tampil pencarian kelas
    include "modules/kelas/tampil_pencarian.php";
}
// jika module yang dipilih "laporan"
elseif ($_GET['module'] == 'laporan') {
    // panggil file form filter laporan
    include "modules/laporan/form_filter.php";
}
// jika module yang dipilih "tentang"
elseif ($_GET['module'] == 'tentang') {
    // panggil file tampil data tentang
    include "modules/tentang/tampil_data.php";
}
