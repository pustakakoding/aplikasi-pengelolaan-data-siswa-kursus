<div class="d-flex flex-column flex-lg-row mb-4">
    <!-- judul halaman -->
    <div class="flex-grow-1 d-flex align-items-center">
        <i class="fa-regular fa-user icon-title"></i>
        <h3>Siswa</h3>
    </div>
    <!-- breadcrumbs -->
    <div class="ms-5 ms-lg-0 pt-lg-2">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="https://pustakakoding.com/" class="text-dark text-decoration-none"><i class="fa-solid fa-house"></i></a></li>
                <li class="breadcrumb-item"><a href="?module=siswa" class="text-dark text-decoration-none">Siswa</a>
                </li>
                <li class="breadcrumb-item" aria-current="page">Ubah</li>
            </ol>
        </nav>
    </div>
</div>

<?php
// mengecek data GET "id_siswa"
if (isset($_GET['id'])) {
    // ambil data GET dari tombol ubah
    $id_siswa = $_GET['id'];

    // sql statement untuk menampilkan data dari tabel "tbl_siswa" berdasarkan "id_siswa" dan tabel "tbl_kelas" berdasarkan "id_siswa"
    $query = mysqli_query($mysqli, "SELECT a.id_siswa, a.tanggal_daftar, a.kelas, a.nama_lengkap, a.jenis_kelamin, a.alamat, a.email, a.whatsapp, a.foto_profil, b.nama_kelas 
                                    FROM tbl_siswa as a INNER JOIN tbl_kelas as b ON a.kelas=b.id_kelas 
                                    WHERE a.id_siswa='$id_siswa'")
                                    or die('Ada kesalahan pada query tampil data : ' . mysqli_error($mysqli));
    // ambil data hasil query
    $data = mysqli_fetch_assoc($query);
}
?>

<div class="bg-white rounded-4 shadow-sm p-4 mb-4">
    <!-- judul form -->
    <div class="alert alert-secondary rounded-4 mb-5" role="alert">
        <i class="fa-solid fa-pen-to-square me-2"></i> Ubah Data Siswa
    </div>
    <!-- form ubah data -->
    <form action="modules/siswa/proses_ubah.php" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
        <div class="row">
            <div class="col-xl-6">
                <div class="row g-0">
                    <div class="mb-3 col-xl-6 pe-xl-3">
                        <label class="form-label">ID Siswa <span class="text-danger">*</span></label>
                        <input type="text" name="id_siswa" class="form-control" value="<?php echo $data['id_siswa']; ?>" readonly>
                    </div>

                    <div class="mb-3 col-xl-6 pe-xl-3">
                        <label class="form-label">Tanggal Daftar <span class="text-danger">*</span></label>
                        <input type="text" name="tanggal_daftar" class="form-control datepicker" autocomplete="off" value="<?php echo date('d-m-Y', strtotime($data['tanggal_daftar'])); ?>" required>
                        <div class="invalid-feedback">Tanggal daftar tidak boleh kosong.</div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="mb-3 ps-xl-3">
                    <label class="form-label">Kelas <span class="text-danger">*</span></label>
                    <select name="kelas" class="form-select" autocomplete="off" required>
                        <option value="<?php echo $data['kelas']; ?>"><?php echo $data['nama_kelas']; ?></option>
                        <option disabled value="">-- Pilih --</option>
                        <?php
                        // sql statement untuk menampilkan data dari tabel "tbl_kelas"
                        $query_kelas = mysqli_query($mysqli, "SELECT id_kelas, nama_kelas FROM tbl_kelas ORDER BY nama_kelas ASC")
                                                              or die('Ada kesalahan pada query tampil data : ' . mysqli_error($mysqli));
                        // ambil data hasil query
                        while ($data_kelas = mysqli_fetch_assoc($query_kelas)) {
                            // tampilkan data
                            echo "<option value='$data_kelas[id_kelas]'>$data_kelas[nama_kelas]</option>";
                        }
                        ?>
                    </select>
                    <div class="invalid-feedback">Kelas tidak boleh kosong.</div>
                </div>
            </div>
        </div>

        <hr class="mb-4-2">

        <div class="row">
            <div class="col-xl-6">
                <div class="mb-3 pe-xl-3">
                    <label class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                    <input type="text" name="nama_lengkap" class="form-control" autocomplete="off" value="<?php echo $data['nama_lengkap']; ?>" required>
                    <div class="invalid-feedback">Nama lengkap tidak boleh kosong.</div>
                </div>

                <div class="mb-4-1-7 pe-xl-3">
                    <label class="form-label">Jenis Kelamin <span class="text-danger">*</span></label>
                    <br>
                    <?php
                    if ($data['jenis_kelamin'] == 'Laki-laki') { ?>
                        <div class="form-check form-check-inline">
                            <input type="radio" id="laki_laki" name="jenis_kelamin" class="form-check-input" value="Laki-laki" checked required>
                            <label class="form-check-label" for="laki_laki">Laki-laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" id="perempuan" name="jenis_kelamin" class="form-check-input" value="Perempuan" required>
                            <label class="form-check-label" for="perempuan">Perempuan</label>
                            <div class="invalid-feedback invalid-feedback-inline">Pilih salah satu jenis kelamin.</div>
                        </div>
                    <?php
                    } else { ?>
                        <div class="form-check form-check-inline">
                            <input type="radio" id="laki_laki" name="jenis_kelamin" class="form-check-input" value="Laki-laki" required>
                            <label class="form-check-label" for="laki_laki">Laki-laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" id="perempuan" name="jenis_kelamin" class="form-check-input" value="Perempuan" checked required>
                            <label class="form-check-label" for="perempuan">Perempuan</label>
                            <div class="invalid-feedback invalid-feedback-inline">Pilih salah satu jenis kelamin.</div>
                        </div>
                    <?php } ?>
                </div>

                <div class="mb-3 pe-xl-3">
                    <label class="form-label">Alamat <span class="text-danger">*</span></label>
                    <textarea name="alamat" rows="4" class="form-control" autocomplete="off" required><?php echo $data['alamat']; ?></textarea>
                    <div class="invalid-feedback">Alamat tidak boleh kosong.</div>
                </div>

                <div class="mb-3 pe-xl-3">
                    <label class="form-label">Email <span class="text-danger">*</span></label>
                    <input type="email" name="email" class="form-control" autocomplete="off" value="<?php echo $data['email']; ?>" required>
                    <div class="invalid-feedback">Email tidak boleh kosong.</div>
                </div>

                <div class="mb-3 pe-xl-3">
                    <label class="form-label">WhatsApp <span class="text-danger">*</span></label>
                    <input type="text" name="whatsapp" class="form-control" maxlength="13" autocomplete="off" onKeyPress="return goodchars(event,'0123456789',this)" value="<?php echo $data['whatsapp']; ?>" required>
                    <div class="invalid-feedback">WhatsApp tidak boleh kosong.</div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="mb-3 ps-xl-3">
                    <label class="form-label">Foto Profil</label>
                    <input type="file" accept=".jpg, .jpeg, .png" id="foto" name="foto" class="form-control" autocomplete="off" onchange="validasi_foto()">

                    <div class="foto-profil-detail mt-5">
                        <img src="images/<?php echo $data['foto_profil']; ?>" alt="Foto Profil" class="img-fluid rounded-circle">
                    </div>

                    <div class="form-text fs-7 mt-4">
                        Keterangan : <br>
                        - Tipe file yang bisa diunggah adalah *.jpg atau *.png. <br>
                        - Ukuran file yang bisa diunggah maksimal 1 Mb.
                    </div>
                </div>
            </div>
        </div>

        <div class="pt-4 pb-2 mt-5 border-top">
            <div class="d-grid gap-3 d-sm-flex justify-content-md-start pt-1">
                <!-- button simpan data -->
                <input type="submit" name="simpan" value="Simpan" class="btn btn-outline-brand px-4">
                <!-- button kembali ke halaman detail data -->
                <a href="?module=tampil_detail_siswa&id=<?php echo $data['id_siswa']; ?>" class="btn btn-outline-secondary px-4">Batal</a>
            </div>
        </div>
    </form>
</div>