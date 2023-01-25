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
                <li class="breadcrumb-item" aria-current="page">Pencarian</li>
            </ol>
        </nav>
    </div>
</div>

<div class="mb-5">
    <div class="row flex-lg-row-reverse align-items-center">
        <!-- button kembali ke halaman tampil data -->
        <div class="col-lg-5 col-xl-3">
            <a href="?module=kelas" class="btn btn-outline-secondary float-lg-end px-4 mb-4 mb-lg-0">
                <i class="fa-solid fa-angle-left me-2"></i> Kembali
            </a>
        </div>
        <!-- form pencarian -->
        <div class="col-lg-7 col-xl-9">
            <form action="?module=tampil_pencarian_kelas" method="post" class="form-search needs-validation" novalidate>
                <input type="text" name="kata_kunci" class="form-control rounded-pill" placeholder="Cari Kelas ..." autocomplete="off" required>
                <div class="invalid-feedback">Masukan Nama Kelas yang ingin Anda cari.</div>
            </form>
        </div>
    </div>
</div>

<div class="row">
    <?php
    // mengecek data hasil submit dari form
    if (isset($_POST['kata_kunci'])) {
        // ambil data hasil submit dari form
        $kata_kunci = $_POST['kata_kunci'];
    ?>
        <div class="col-12">
            <div class="alert alert-secondary rounded-4 mb-5" role="alert">
                <i class="fa-solid fa-hand-point-right me-2"></i> Hasil Pencarian <span class="fw-bold fst-italic">"<?php echo $kata_kunci; ?>"</span>
            </div>
        </div>

        <?php
        // sql statement untuk menampilkan data dari tabel "tbl_kelas" berdasarkan "kata_kunci"
        $query = mysqli_query($mysqli, "SELECT * FROM tbl_kelas WHERE nama_kelas LIKE '%$kata_kunci%' ORDER BY nama_kelas ASC")
                                        or die('Ada kesalahan pada query tampil data : ' . mysqli_error($mysqli));
        // ambil jumlah data hasil query
        $rows = mysqli_num_rows($query);

        // cek hasil query
        // jika data kelas ada
        if ($rows <> 0) {
            // ambil data hasil query
            while ($data = mysqli_fetch_assoc($query)) { ?>
                <!-- tampilkan data -->
                <div class="col-lg-6 col-xl-3">
                    <div class="bg-white rounded-4 shadow-sm text-center p-4 p-lg-4-2 mb-4">
                        <div class="foto-profil mb-2">
                            <i class="fa-solid fa-chalkboard icon-widget-kelas"></i>
                        </div>
                        <p class="text-muted mb-2">Kelas</p>
                        <h6 class="mb-4"><?php echo $data['nama_kelas']; ?></h6>
                        <!-- button detail data -->
                        <a href="?module=tampil_detail_kelas&id=<?php echo $data['id_kelas']; ?>" class="btn btn-outline-brand btn-sm px-4">
                            Detail <i class="fa-solid fa-angle-right ms-2"></i>
                        </a>
                    </div>
                </div>
            <?php
            }
        }
        // jika data kelas tidak ada
        else { ?>
            <!-- tampilkan pesan data tidak ditemukan -->
            <div class="col-12">
                <i class="fa-regular fa-circle-question me-1"></i>
                Data kelas dengan kata kunci <span class="text-brand fst-italic px-2">"<?php echo $kata_kunci; ?>"</span> tidak ditemukan.
            </div>
    <?php
        }
    }
    ?>
</div>