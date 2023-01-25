<?php
// pengecekan menu aktif
// jika menu dashboard dipilih, menu dashboard aktif
if ($_GET['module'] == 'dashboard') { ?>
    <div class="col-2 item-menu active text-center">
        <a href="?module=dashboard">
            <i class="fa-solid fa-chart-simple"></i>
        </a>
    </div>
<?php
}
// jika tidak dipilih, menu dashboard tidak aktif
else { ?>
    <div class="col-2 item-menu text-center">
        <a href="?module=dashboard">
            <i class="fa-solid fa-chart-simple"></i>
        </a>
    </div>
<?php
}

// jika menu siswa (tampil data / tampil detail / form entri / form ubah / tampil pencarian) dipilih, menu siswa aktif
if ($_GET['module'] == 'siswa' || $_GET['module'] == 'tampil_detail_siswa' || $_GET['module'] == 'form_entri_siswa' || $_GET['module'] == 'form_ubah_siswa' || $_GET['module'] == 'tampil_pencarian_siswa') { ?>
    <div class="col-2 item-menu active text-center">
        <a href="?module=siswa">
            <i class="fa-regular fa-user"></i>
        </a>
    </div>
<?php
}
// jika tidak dipilih, menu siswa tidak aktif
else { ?>
    <div class="col-2 item-menu text-center">
        <a href="?module=siswa">
            <i class="fa-regular fa-user"></i>
        </a>
    </div>
<?php
}

// jika menu kelas (tampil data / tampil detail / form entri / form ubah / tampil pencarian) dipilih, menu kelas aktif
if ($_GET['module'] == 'kelas' || $_GET['module'] == 'tampil_detail_kelas' || $_GET['module'] == 'form_entri_kelas' || $_GET['module'] == 'form_ubah_kelas' || $_GET['module'] == 'tampil_pencarian_kelas') { ?>
    <div class="col-2 item-menu active text-center">
        <a href="?module=kelas">
            <i class="fa-solid fa-chalkboard"></i>
        </a>
    </div>
<?php
}
// jika tidak dipilih, menu kelas tidak aktif
else { ?>
    <div class="col-2 item-menu text-center">
        <a href="?module=kelas">
            <i class="fa-solid fa-chalkboard"></i>
        </a>
    </div>
<?php
}

// jika menu laporan dipilih, menu laporan aktif
if ($_GET['module'] == 'laporan') { ?>
    <div class="col-2 item-menu active text-center">
        <a href="?module=laporan">
            <i class="fa-regular fa-file-lines"></i>
        </a>
    </div>
<?php
}
// jika tidak dipilih, menu laporan tidak aktif
else { ?>
    <div class="col-2 item-menu text-center">
        <a href="?module=laporan">
            <i class="fa-regular fa-file-lines"></i>
        </a>
    </div>
<?php
}

// jika menu tentang aplikasi dipilih, menu tentang aplikasi aktif
if ($_GET['module'] == 'tentang') { ?>
    <div class="col-2 item-menu active text-center">
        <a href="?module=tentang">
            <i class="fa-solid fa-info"></i>
        </a>
    </div>
<?php
}
// jika tidak dipilih, menu tentang aplikasi tidak aktif
else { ?>
    <div class="col-2 item-menu text-center">
        <a href="?module=tentang">
            <i class="fa-solid fa-info"></i>
        </a>
    </div>
<?php
}
?>