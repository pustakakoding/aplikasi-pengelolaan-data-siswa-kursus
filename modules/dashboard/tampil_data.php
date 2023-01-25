<div class="d-flex flex-column flex-lg-row mb-4">
    <!-- judul halaman -->
    <div class="flex-grow-1 d-flex align-items-center">
        <i class="fa-solid fa-chart-simple icon-title"></i>
        <h3>Dashboard</h3>
    </div>
    <!-- breadcrumbs -->
    <div class="ms-5 ms-lg-0 pt-lg-2">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="https://pustakakoding.com/" class="text-dark text-decoration-none"><i class="fa-solid fa-house"></i></a></li>
                <li class="breadcrumb-item"><a href="?module=dashboard" class="text-dark text-decoration-none">Dashboard</a></li>
            </ol>
        </nav>
    </div>
</div>

<!-- tampilkan pesan selamat datang -->
<div class="bg-white rounded-4 shadow-sm p-4 mb-5">
    <div class="row align-items-center justify-content-between">
        <div class="col-lg-3 d-block mt-xxl-n4">
            <img class="img-fluid px-xl-4 mt-xxl-n5" src="assets/img/bg-dashboard.jpg">
        </div>
        <div class="col-lg-9">
            <h4 class="mt-3 mt-lg-0 mb-2">Selamat datang di <strong>Pustaka Koding</strong>!</h4>
            <p class="text-muted fw-light mb-4">Pustaka Koding merupakan platform belajar koding online yang akan membantu mengembangkan skill koding Kamu dengan belajar melalui beragam studi kasus pembuatan aplikasi yang dapat dipraktekan secara langsung.</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <a href="https://pustakakoding.com/" target="_blank" class="btn btn-outline-brand">Lihat Project <i class="fa-solid fa-angle-right ms-3"></i></a>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <!-- menampilkan informasi jumlah siswa kelas web design -->
    <div class="col-lg-6 col-xl-4">
        <div class="bg-white rounded-4 shadow-sm p-4 p-lg-4-2 mb-4">
            <div class="d-flex align-items-center justify-content-start">
                <div class="me-4">
                    <i class="fa-brands fa-html5 icon-widget"></i>
                </div>
                <div>
                    <p class="text-muted mb-1"><small>Web Design</small></p>
                    <?php
                    // sql statement untuk menampilkan jumlah data pada tabel "tbl_siswa" berdasarkan "kelas"
                    $query = mysqli_query($mysqli, "SELECT COUNT(a.id_siswa) as jumlah FROM tbl_siswa as a INNER JOIN tbl_kelas as b ON a.kelas=b.id_kelas 
                                                    WHERE b.nama_kelas='Web Design'")
                                                    or die('Ada kesalahan pada query jumlah data siswa gratis : ' . mysqli_error($mysqli));
                    // ambil data hasil query
                    $data = mysqli_fetch_assoc($query);
                    // buat variabel untuk menampilkan data
                    $jumlah_siswa = $data['jumlah'];
                    ?>
                    <!-- tampilkan data -->
                    <h5 class="fw-bold mb-0"><?php echo number_format($jumlah_siswa, 0, '', '.'); ?></h5>
                </div>
            </div>
        </div>
    </div>
    <!-- menampilkan informasi jumlah siswa pelajar -->
    <div class="col-lg-6 col-xl-4">
        <div class="bg-white rounded-4 shadow-sm p-4 p-lg-4-2 mb-4">
            <div class="d-flex align-items-center justify-content-start">
                <div class="me-4">
                    <i class="fa-solid fa-laptop-code icon-widget"></i>
                </div>
                <div>
                    <p class="text-muted mb-1"><small>Web Development</small></p>
                    <?php
                    // sql statement untuk menampilkan jumlah data pada tabel "tbl_siswa" berdasarkan "kelas"
                    $query = mysqli_query($mysqli, "SELECT COUNT(a.id_siswa) as jumlah FROM tbl_siswa as a INNER JOIN tbl_kelas as b ON a.kelas=b.id_kelas 
                                                    WHERE b.nama_kelas='Web Development'")
                                                    or die('Ada kesalahan pada query jumlah data siswa gratis : ' . mysqli_error($mysqli));
                    // ambil data hasil query
                    $data = mysqli_fetch_assoc($query);
                    // buat variabel untuk menampilkan data
                    $jumlah_siswa = $data['jumlah'];
                    ?>
                    <!-- tampilkan data -->
                    <h5 class="fw-bold mb-0"><?php echo number_format($jumlah_siswa, 0, '', '.'); ?></h5>
                </div>
            </div>
        </div>
    </div>
    <!-- menampilkan informasi jumlah siswa personal -->
    <div class="col-lg-6 col-xl-4">
        <div class="bg-white rounded-4 shadow-sm p-4 p-lg-4-2 mb-4">
            <div class="d-flex align-items-center justify-content-start">
                <div class="text-muted me-4">
                    <i class="fa-solid fa-mobile-screen icon-widget"></i>
                </div>
                <div>
                    <p class="mb-1"><small>Mobile Development</small></p>
                    <?php
                    // sql statement untuk menampilkan jumlah data pada tabel "tbl_siswa" berdasarkan "kelas"
                    $query = mysqli_query($mysqli, "SELECT COUNT(a.id_siswa) as jumlah FROM tbl_siswa as a INNER JOIN tbl_kelas as b ON a.kelas=b.id_kelas 
                                                    WHERE b.nama_kelas='Mobile Development'")
                                                    or die('Ada kesalahan pada query jumlah data siswa gratis : ' . mysqli_error($mysqli));
                    // ambil data hasil query
                    $data = mysqli_fetch_assoc($query);
                    // buat variabel untuk menampilkan data
                    $jumlah_siswa = $data['jumlah'];
                    ?>
                    <!-- tampilkan data -->
                    <h5 class="fw-bold mb-0"><?php echo number_format($jumlah_siswa, 0, '', '.'); ?></h5>
                </div>
            </div>
        </div>
    </div>
    <!-- menampilkan informasi jumlah siswa bisnis -->
    <div class="col-lg-6 col-xl-4">
        <div class="bg-white rounded-4 shadow-sm p-4 p-lg-4-2 mb-4">
            <div class="d-flex align-items-center justify-content-start">
                <div class="text-muted me-4">
                    <i class="fa-solid fa-gamepad icon-widget"></i>
                </div>
                <div>
                    <p class="mb-1"><small>Game Development</small></p>
                    <?php
                    // sql statement untuk menampilkan jumlah data pada tabel "tbl_siswa" berdasarkan "kelas"
                    $query = mysqli_query($mysqli, "SELECT COUNT(a.id_siswa) as jumlah FROM tbl_siswa as a INNER JOIN tbl_kelas as b ON a.kelas=b.id_kelas 
                                                    WHERE b.nama_kelas='Game Development'")
                                                    or die('Ada kesalahan pada query jumlah data siswa gratis : ' . mysqli_error($mysqli));
                    // ambil data hasil query
                    $data = mysqli_fetch_assoc($query);
                    // buat variabel untuk menampilkan data
                    $jumlah_siswa = $data['jumlah'];
                    ?>
                    <!-- tampilkan data -->
                    <h5 class="fw-bold mb-0"><?php echo number_format($jumlah_siswa, 0, '', '.'); ?></h5>
                </div>
            </div>
        </div>
    </div>
    <!-- menampilkan informasi jumlah siswa bisnis -->
    <div class="col-lg-6 col-xl-4">
        <div class="bg-white rounded-4 shadow-sm p-4 p-lg-4-2 mb-4">
            <div class="d-flex align-items-center justify-content-start">
                <div class="text-muted me-4">
                    <i class="fa-solid fa-chart-column icon-widget"></i>
                </div>
                <div>
                    <p class="mb-1"><small>Data Analysis</small></p>
                    <?php
                    // sql statement untuk menampilkan jumlah data pada tabel "tbl_siswa" berdasarkan "kelas"
                    $query = mysqli_query($mysqli, "SELECT COUNT(a.id_siswa) as jumlah FROM tbl_siswa as a INNER JOIN tbl_kelas as b ON a.kelas=b.id_kelas 
                                                    WHERE b.nama_kelas='Data Analysis'")
                                                    or die('Ada kesalahan pada query jumlah data siswa gratis : ' . mysqli_error($mysqli));
                    // ambil data hasil query
                    $data = mysqli_fetch_assoc($query);
                    // buat variabel untuk menampilkan data
                    $jumlah_siswa = $data['jumlah'];
                    ?>
                    <!-- tampilkan data -->
                    <h5 class="fw-bold mb-0"><?php echo number_format($jumlah_siswa, 0, '', '.'); ?></h5>
                </div>
            </div>
        </div>
    </div>
    <!-- menampilkan informasi jumlah siswa bisnis -->
    <div class="col-lg-6 col-xl-4">
        <div class="bg-white rounded-4 shadow-sm p-4 p-lg-4-2 mb-4">
            <div class="d-flex align-items-center justify-content-start">
                <div class="text-muted me-4">
                    <i class="fa-solid fa-people-group icon-widget"></i>
                </div>
                <div>
                    <p class="mb-1"><small>Digital Marketing</small></p>
                    <?php
                    // sql statement untuk menampilkan jumlah data pada tabel "tbl_siswa" berdasarkan "kelas"
                    $query = mysqli_query($mysqli, "SELECT COUNT(a.id_siswa) as jumlah FROM tbl_siswa as a INNER JOIN tbl_kelas as b ON a.kelas=b.id_kelas 
                                                    WHERE b.nama_kelas='Digital Marketing'")
                                                    or die('Ada kesalahan pada query jumlah data siswa gratis : ' . mysqli_error($mysqli));
                    // ambil data hasil query
                    $data = mysqli_fetch_assoc($query);
                    // buat variabel untuk menampilkan data
                    $jumlah_siswa = $data['jumlah'];
                    ?>
                    <!-- tampilkan data -->
                    <h5 class="fw-bold mb-0"><?php echo number_format($jumlah_siswa, 0, '', '.'); ?></h5>
                </div>
            </div>
        </div>
    </div>
</div>