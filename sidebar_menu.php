<?php
// pengecekan menu aktif
// jika menu dashboard dipilih, menu dashboard aktif
if ($_GET['module'] == 'dashboard') { ?>
	<div class="item active d-flex align-items-center">
		<i class="fa-solid fa-chart-simple"></i>
		<a href="?module=dashboard"> Dashboard </a>
	</div>
<?php
}
// jika tidak dipilih, menu dashboard tidak aktif
else { ?>
	<div class="item d-flex align-items-center">
		<i class="fa-solid fa-chart-simple"></i>
		<a href="?module=dashboard"> Dashboard </a>
	</div>
<?php
}

// jika menu siswa (tampil data / tampil detail / form entri / form ubah / tampil pencarian) dipilih, menu siswa aktif
if ($_GET['module'] == 'siswa' || $_GET['module'] == 'tampil_detail_siswa' || $_GET['module'] == 'form_entri_siswa' || $_GET['module'] == 'form_ubah_siswa' || $_GET['module'] == 'tampil_pencarian_siswa') { ?>
	<div class="item active d-flex align-items-center">
		<i class="fa-regular fa-user"></i>
		<a href="?module=siswa"> Siswa </a>
	</div>
<?php
}
// jika tidak dipilih, menu siswa tidak aktif
else { ?>
	<div class="item d-flex align-items-center">
		<i class="fa-regular fa-user"></i>
		<a href="?module=siswa"> Siswa </a>
	</div>
<?php
}

// jika menu kelas (tampil data / tampil detail / form entri / form ubah / tampil pencarian) dipilih, menu kelas aktif
if ($_GET['module'] == 'kelas' || $_GET['module'] == 'tampil_detail_kelas' || $_GET['module'] == 'form_entri_kelas' || $_GET['module'] == 'form_ubah_kelas' || $_GET['module'] == 'tampil_pencarian_kelas') { ?>
	<div class="item active d-flex align-items-center">
		<i class="fa-solid fa-chalkboard"></i>
		<a href="?module=kelas"> Kelas </a>
	</div>
<?php
}
// jika tidak dipilih, menu kelas tidak aktif
else { ?>
	<div class="item d-flex align-items-center">
		<i class="fa-solid fa-chalkboard"></i>
		<a href="?module=kelas"> Kelas </a>
	</div>
<?php
}

// jika menu laporan dipilih, menu laporan aktif
if ($_GET['module'] == 'laporan') { ?>
	<div class="item active d-flex align-items-center">
		<i class="fa-regular fa-file-lines"></i>
		<a href="?module=laporan"> Laporan </a>
	</div>
<?php
}
// jika tidak dipilih, menu laporan tidak aktif
else { ?>
	<div class="item d-flex align-items-center">
		<i class="fa-regular fa-file-lines"></i>
		<a href="?module=laporan"> Laporan </a>
	</div>
<?php
}

// jika menu tentang aplikasi dipilih, menu tentang aplikasi aktif
if ($_GET['module'] == 'tentang') { ?>
	<div class="item active d-flex align-items-center">
		<i class="fa-solid fa-info"></i>
		<a href="?module=tentang"> Tentang Aplikasi </a>
	</div>
<?php
}
// jika tidak dipilih, menu tentang aplikasi tidak aktif
else { ?>
	<div class="item d-flex align-items-center">
		<i class="fa-solid fa-info"></i>
		<a href="?module=tentang"> Tentang Aplikasi </a>
	</div>
<?php
}
?>