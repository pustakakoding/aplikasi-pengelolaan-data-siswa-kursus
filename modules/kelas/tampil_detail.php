<div class="d-flex flex-column flex-lg-row mb-4">
    <!-- judul halaman -->
    <div class="flex-grow-1 d-flex align-items-center">
        <i class="fa-solid fa-chalkboard icon-title"></i>
        <h3>Kelas</h3>
    </div>
    <!-- breadcrumbs -->
    <div class="ms-5 ms-lg-0 pt-lg-2">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="https://pustakakoding.com/" class="text-dark text-decoration-none"><i class="fa-solid fa-house"></i></a></li>
                <li class="breadcrumb-item"><a href="?module=kelas" class="text-dark text-decoration-none">Kelas</a></li>
                <li class="breadcrumb-item" aria-current="page">Detail</li>
            </ol>
        </nav>
    </div>
</div>

<?php
// mengecek data GET "id_kelas"
if (isset($_GET['id'])) {
    // ambil data GET dari tombol detail
    $id_kelas = $_GET['id'];

    // sql statement untuk menampilkan data dari tabel "tbl_kelas" berdasarkan "id_kelas"
    $query = mysqli_query($mysqli, "SELECT * FROM tbl_kelas WHERE id_kelas='$id_kelas'")
                                    or die('Ada kesalahan pada query tampil data : ' . mysqli_error($mysqli));
    // ambil data hasil query
    $data = mysqli_fetch_assoc($query);
}
?>

<div class="mb-5">
    <div class="d-grid gap-3 d-sm-flex flex-sm-row-reverse">
        <div class="d-grid gap-3 d-sm-flex">
            <!-- button ubah data -->
            <a href="?module=form_ubah_kelas&id=<?php echo $data['id_kelas']; ?>" class="btn btn-outline-brand px-4">
                <i class="fa-regular fa-pen-to-square me-2"></i> Ubah
            </a>
            <!-- button hapus data -->
            <a href="modules/kelas/proses_hapus.php?id=<?php echo $data['id_kelas']; ?>" onclick="return confirm('Anda yakin ingin menghapus data kelas <?php echo $data['nama_kelas']; ?>?')" class="btn btn-outline-brand px-4">
                <i class="fa-regular fa-trash-can me-2"></i> Hapus
            </a>
        </div>
        <!-- button kembali ke halaman tampil data -->
        <a href="?module=kelas" class="btn btn-outline-secondary px-4 me-sm-auto">
            <i class="fa-solid fa-angle-left me-2"></i> Kembali
        </a>
    </div>
</div>

<?php
// menampilkan pesan sesuai dengan proses yang dijalankan
// jika pesan tersedia
if (isset($_GET['pesan'])) {
    // jika pesan = 1
    if ($_GET['pesan'] == 1) {
        // tampilkan pesan sukses ubah data
        echo '<div class="alert alert-success alert-dismissible rounded-4 fade show mb-4" role="alert">
                <strong><i class="fa-solid fa-circle-check me-2"></i>Sukses!</strong> Data kelas berhasil diubah.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
    }
}
?>

<div class="bg-white rounded-4 shadow-sm p-4 mb-4">
    <!-- judul form -->
    <div class="alert alert-secondary rounded-4 mb-5" role="alert">
        <i class="fa-solid fa-list-ul me-2"></i> Detail Data Kelas
    </div>
    <!-- tampilkan data -->
    <h6 class="text-muted fw-light mb-2">Kelas</h6>
    <p class="mb-4"><?php echo $data['nama_kelas']; ?></p>

    <h6 class="text-muted fw-light mb-2">Deskripsi</h6>
    <p class="mb-4 fw-light text-justify"><?php echo $data['deskripsi']; ?></p>
</div>