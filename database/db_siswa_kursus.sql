-- phpMyAdmin SQL Dump
-- version 5.2.0-dev+20220102.e4dfea9a45
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 24, 2023 at 11:18 PM
-- Server version: 8.0.30
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_siswa_kursus`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelas`
--

CREATE TABLE `tbl_kelas` (
  `id_kelas` int NOT NULL,
  `nama_kelas` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_kelas`
--

INSERT INTO `tbl_kelas` (`id_kelas`, `nama_kelas`, `deskripsi`) VALUES
(1, 'Web Design', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Orci ac auctor augue mauris augue neque gravida in. Morbi enim nunc faucibus a pellentesque sit amet porttitor eget. Tempor commodo ullamcorper a lacus vestibulum sed arcu. Vulputate odio ut enim blandit volutpat maecenas volutpat. Pretium lectus quam id leo in vitae turpis. In cursus turpis massa tincidunt dui ut ornare lectus sit. Consequat interdum varius sit amet mattis vulputate enim nulla aliquet. Sed vulputate odio ut enim blandit volutpat maecenas volutpat blandit. Odio morbi quis commodo odio aenean sed adipiscing diam donec. Euismod quis viverra nibh cras pulvinar mattis nunc sed blandit. Sit amet luctus venenatis lectus magna. Sapien faucibus et molestie ac feugiat sed.'),
(2, 'Web Development', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Orci ac auctor augue mauris augue neque gravida in. Morbi enim nunc faucibus a pellentesque sit amet porttitor eget. Tempor commodo ullamcorper a lacus vestibulum sed arcu. Vulputate odio ut enim blandit volutpat maecenas volutpat. Pretium lectus quam id leo in vitae turpis. In cursus turpis massa tincidunt dui ut ornare lectus sit. Consequat interdum varius sit amet mattis vulputate enim nulla aliquet. Sed vulputate odio ut enim blandit volutpat maecenas volutpat blandit. Odio morbi quis commodo odio aenean sed adipiscing diam donec. Euismod quis viverra nibh cras pulvinar mattis nunc sed blandit. Sit amet luctus venenatis lectus magna. Sapien faucibus et molestie ac feugiat sed. Dui vivamus arcu felis bibendum ut. Duis at tellus at urna condimentum mattis pellentesque. Quis commodo odio aenean sed adipiscing diam. Nisl condimentum id venenatis a condimentum vitae sapien. Ipsum dolor sit amet consectetur adipiscing. Eu turpis egestas pretium aenean pharetra magna ac placerat vestibulum. Quam vulputate dignissim suspendisse in est ante in nibh. Est pellentesque elit ullamcorper dignissim cras tincidunt lobortis feugiat. Mauris nunc congue nisi vitae suscipit tellus mauris a. Ut placerat orci nulla pellentesque dignissim. Ac felis donec et odio pellentesque diam. Duis ut diam quam nulla porttitor massa id. Mauris rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar. Tristique magna sit amet purus gravida quis. Laoreet non curabitur gravida arcu ac tortor dignissim convallis. Ultrices in iaculis nunc sed augue lacus viverra. Ultricies mi eget mauris pharetra et ultrices neque ornare aenean. Tincidunt arcu non sodales neque sodales. Volutpat commodo sed egestas egestas.'),
(3, 'Mobile Development', 'Morbi non arcu risus quis varius quam quisque id. Maecenas accumsan lacus vel facilisis. Metus dictum at tempor commodo ullamcorper a. Consequat id porta nibh venenatis. Fermentum odio eu feugiat pretium nibh ipsum consequat. Ultricies mi quis hendrerit dolor magna eget est lorem. Et odio pellentesque diam volutpat commodo sed egestas egestas. Sed faucibus turpis in eu mi bibendum neque egestas congue. Enim eu turpis egestas pretium. Ornare arcu dui vivamus arcu felis bibendum ut tristique et. Gravida arcu ac tortor dignissim convallis aenean et tortor. Posuere urna nec tincidunt praesent semper feugiat nibh sed pulvinar. Tristique magna sit amet purus gravida quis blandit turpis cursus. Morbi leo urna molestie at elementum eu. Ac turpis egestas maecenas pharetra convallis posuere. Mi bibendum neque egestas congue quisque. Diam phasellus vestibulum lorem sed risus ultricies tristique. Vel pharetra vel turpis nunc. Sit amet mauris commodo quis imperdiet. Placerat in egestas erat imperdiet sed euismod. Molestie at elementum eu facilisis sed odio morbi quis commodo. Convallis aenean et tortor at risus viverra adipiscing at. Neque sodales ut etiam sit amet nisl purus in mollis. In nisl nisi scelerisque eu ultrices vitae auctor eu.'),
(4, 'Game Development', 'Quis risus sed vulputate odio ut enim blandit. Aliquam purus sit amet luctus venenatis lectus. Suspendisse interdum consectetur libero id faucibus nisl tincidunt. Et leo duis ut diam quam nulla. Risus in hendrerit gravida rutrum quisque non tellus. Amet volutpat consequat mauris nunc congue nisi. Arcu risus quis varius quam quisque id diam. Aenean sed adipiscing diam donec adipiscing tristique. Nunc faucibus a pellentesque sit. Libero justo laoreet sit amet cursus. Quis auctor elit sed vulputate. Nulla at volutpat diam ut venenatis tellus. Tortor at risus viverra adipiscing at in tellus integer feugiat. Massa massa ultricies mi quis hendrerit dolor. Eget est lorem ipsum dolor sit amet consectetur adipiscing. Metus aliquam eleifend mi in nulla. Diam sollicitudin tempor id eu nisl. Viverra aliquet eget sit amet tellus.'),
(5, 'Data Analysis', 'Commodo quis imperdiet massa tincidunt nunc pulvinar sapien et. Amet consectetur adipiscing elit ut aliquam purus sit amet luctus. Morbi leo urna molestie at elementum. Praesent semper feugiat nibh sed pulvinar proin. Sed risus ultricies tristique nulla aliquet enim tortor at. Egestas tellus rutrum tellus pellentesque eu tincidunt. Faucibus vitae aliquet nec ullamcorper sit amet. Diam ut venenatis tellus in metus vulputate eu. Eget sit amet tellus cras adipiscing enim. Quisque non tellus orci ac auctor augue mauris. Ullamcorper a lacus vestibulum sed. Quis ipsum suspendisse ultrices gravida dictum. Nisi est sit amet facilisis. A diam maecenas sed enim ut sem. Ullamcorper sit amet risus nullam eget. Ac tortor dignissim convallis aenean et tortor. Justo donec enim diam vulputate ut pharetra. Sed felis eget velit aliquet sagittis id. Neque ornare aenean euismod elementum nisi quis eleifend. Diam quam nulla porttitor massa id neque aliquam vestibulum morbi. In est ante in nibh mauris cursus. In hendrerit gravida rutrum quisque non tellus. Sit amet nulla facilisi morbi. Vitae congue mauris rhoncus aenean vel elit scelerisque. Metus dictum at tempor commodo. Netus et malesuada fames ac. Vivamus arcu felis bibendum ut tristique et egestas. Consectetur adipiscing elit duis tristique sollicitudin nibh.'),
(6, 'Digital Marketing', 'Purus in mollis nunc sed id semper risus. Id volutpat lacus laoreet non curabitur gravida. Viverra tellus in hac habitasse platea dictumst vestibulum. Arcu bibendum at varius vel pharetra. Pellentesque diam volutpat commodo sed egestas egestas fringilla. Condimentum id venenatis a condimentum vitae sapien pellentesque habitant. Morbi tristique senectus et netus et malesuada fames. Vitae semper quis lectus nulla at volutpat. Quam id leo in vitae turpis massa sed elementum. Consequat mauris nunc congue nisi vitae suscipit tellus. At consectetur lorem donec massa sapien faucibus et. Malesuada proin libero nunc consequat interdum varius sit amet. Dui vivamus arcu felis bibendum ut tristique et egestas. Augue neque gravida in fermentum et. Urna et pharetra pharetra massa massa. Adipiscing commodo elit at imperdiet. Risus ultricies tristique nulla aliquet enim tortor at. Tellus in metus vulputate eu scelerisque felis.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `id_siswa` varchar(8) NOT NULL,
  `tanggal_daftar` date NOT NULL,
  `kelas` int NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `whatsapp` varchar(13) NOT NULL,
  `foto_profil` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`id_siswa`, `tanggal_daftar`, `kelas`, `nama_lengkap`, `jenis_kelamin`, `alamat`, `email`, `whatsapp`, `foto_profil`) VALUES
('ID-00001', '2023-01-03', 2, 'Indra Styawantoro', 'Laki-laki', 'Tanjung Karang, Kota Bandar Lampung, Lampung', 'indra.styawantoro@gmail.com', '081377783334', 'ecdf17a5b23ce3ede07cb4d34a12a8aa110f9c03.jpg'),
('ID-00002', '2023-01-03', 5, 'Alice Doe', 'Perempuan', 'Tanjung Karang, Kota Bandar Lampung, Lampung', 'alice.doe@gmail.com', '082377883344', '2c2844eb49cb9871c84a2621e0bf28e4a11f4120.png'),
('ID-00003', '2023-01-04', 5, 'Jonathan Smart', 'Laki-laki', 'Kedaton, Kota Bandar Lampung, Lampung', 'jonathan.smart@gmail.com', '082373378448', 'dc9d4273e3e1c581959d31f8619bddaa3cabff3e.png'),
('ID-00004', '2023-01-05', 3, 'Mike Brown', 'Laki-laki', 'Rajabasa, Kota Bandar Lampung, Lampung', 'mike.brown@gmail.com', '082188669988', 'd6a1b86bfb06de5443a48ad26326e2b9cc7688ed.png'),
('ID-00005', '2023-01-05', 1, 'Pauline Smith', 'Perempuan', 'Teluk Betung, Kota Bandar Lampung, Lampung', 'pauline.smith@gmail.com', '085669919779', '135ccbd9b716c92d45b6d20e49efa397784364f4.png'),
('ID-00006', '2023-01-07', 4, 'Ronnie Blake', 'Laki-laki', 'Tanjung Karang, Kota Bandar Lampung, Lampung', 'ronnie.blake@gmail.com', '082173775544', '9738eeba999eb102aac3cd7a189a995f49dbca92.png'),
('ID-00007', '2023-01-07', 5, 'Marsha Singer', 'Perempuan', 'Teluk Betung, Kota Bandar Lampung, Lampung', 'marsha.singer@gmail.com', '085758857778', 'a3afbc61edb3786e26f10a6ef55aed2303f89545.png'),
('ID-00008', '2023-01-09', 2, 'Manver Jacobson', 'Laki-laki', 'Rajabasa, Kota Bandar Lampung, Lampung', 'manver.jacobson@gmail.com', '082189897676', '18def517962c38e1573480704185450412243968.jpg'),
('ID-00009', '2023-01-09', 1, 'Lindsay Spice', 'Perempuan', 'Kedaton, Kota Bandar Lampung, Lampung', 'lindsay.spice@gmail.com', '0895881122441', '73a7e8ac5e8a8f8e90e0976fa5e8683da5a6de42.png'),
('ID-00010', '2023-01-09', 6, 'Lynda Marquez', 'Perempuan', 'Tanjung Karang, Kota Bandar Lampung, Lampung', 'lynda.marquez@gmail.com', '0898557766889', 'c035c0d4bf502d79ea529255b32317d9ae73a81d.png'),
('ID-00011', '2023-01-10', 1, 'James Doe', 'Laki-laki', 'Rajabasa, Kota Bandar Lampung, Lampung', 'james.doe@gmail.com', '082380905643', 'ed090dd94092aa2d8e84ac9107a9b3c051c4bb58.png'),
('ID-00012', '2023-01-11', 2, 'Mark Parker', 'Laki-laki', 'Kedaton, Kota Bandar Lampung, Lampung', 'mark.parker@gmail.com', '082123459876', 'c2321cc7e7f4a2ad53f5dd60a20e11ac0353dc82.png'),
('ID-00013', '2023-01-11', 2, 'Frank Gibson', 'Laki-laki', 'Kemiling, Kota Bandar Lampung, Lampung', 'frank.gibson@gmail.com', '081379793535', 'f242257b1856c9e60db1d472abc60ed256e28448.png'),
('ID-00014', '2023-01-13', 6, 'Ashlyn Jordan', 'Perempuan', 'Langkapura, Kota Bandar Lampung, Lampung', 'ashlyn.jordan@gmail.com', '081381195335', '9f2e492ced301b587b9ea1fd13d3cac7bde55937.jpg'),
('ID-00015', '2023-01-17', 2, 'Patric Green', 'Laki-laki', 'Way Halim, Kota Bandar Lampung, Lampung', 'patric.green@gmail.com', '081366782234', '929c37dc1fcec95ffb025e0df0c969b925033c26.png'),
('ID-00016', '2023-01-25', 3, 'Jeffery Riley', 'Laki-laki', 'Labuhan Ratu, Kota Bandar Lampung, Lampung', 'jeffery.riley@gmail.com', '081376891324', 'cc18551bb2dae2040bc1d085a220bf0c7086b526.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  MODIFY `id_kelas` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
