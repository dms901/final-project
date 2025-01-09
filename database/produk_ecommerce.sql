-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 09 Jan 2025 pada 10.52
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `produk_ecommerce`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `keranjang`
--

CREATE TABLE `keranjang` (
  `id` int(11) NOT NULL,
  `size` varchar(25) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `keranjang`
--

INSERT INTO `keranjang` (`id`, `size`, `id_user`, `id_produk`) VALUES
(23, 'L', 4, 7),
(68, 'M', 1, 1),
(71, 'XL', 1, 2),
(78, 'XL', 4, 16),
(79, 'XL', 2, 4),
(83, 'XL', 2, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(250) NOT NULL,
  `harga_produk` double NOT NULL,
  `kategori` varchar(45) NOT NULL,
  `gender` varchar(45) NOT NULL,
  `image` varchar(225) NOT NULL,
  `deskripsi` varchar(250) NOT NULL,
  `ukuran_1` varchar(250) NOT NULL,
  `ukuran_2` varchar(250) NOT NULL,
  `ukuran_3` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga_produk`, `kategori`, `gender`, `image`, `deskripsi`, `ukuran_1`, `ukuran_2`, `ukuran_3`) VALUES
(1, 'KAOS PENDEK', 52000, 'baju', 'pria', 'baju1.jpeg', 'Baju dengan kulaitas tinggi menggunakan bahan katun yang tebal dan tidak penas saat digunakan\r\nWARNING SIZE', 'XL = 102-114 cm', 'L = 98-108 cm', 'M = 94-104 cm'),
(2, 'KAOS PENDEK', 60000, 'baju', 'pria', 'baju1.png', 'Baju dengan kulaitas tinggi menggunakan bahan katun yang tebal dan tidak penas saat digunakan\r\nWARNING SIZE', 'XL = 102-114 cm', 'L = 98-108 cm', 'M = 94-104 cm'),
(3, 'KAOS PENDEK', 50000, 'baju', 'pria', 'baju2.jpeg', 'Baju dengan kulaitas tinggi menggunakan bahan katun yang tebal dan tidak penas saat digunakan\r\nWARNING SIZE', 'XL = 102-114 cm', 'L = 98-108 cm', 'M = 94-104 cm'),
(4, 'KAOS PENDEK', 100000, 'baju', 'pria', '3d5af8aea4a5e5d90092b87f5f2fcaf8422cb3e8.jpg', 'Baju dengan kulaitas tinggi menggunakan bahan katun yang tebal dan tidak penas saat digunakan\r\nWARNING SIZE', 'XL = 102-114 cm', 'L = 98-108 cm', 'M = 94-104 cm'),
(5, 'KAOS PENDEK', 52000, 'baju', 'pria', 'kaos1.jpeg', 'Baju dengan kulaitas tinggi menggunakan bahan katun yang tebal dan tidak penas saat digunakan\r\nWARNING SIZE', 'XL = 102-114 cm', 'L = 98-108 cm', 'M = 94-104 cm'),
(6, 'BATIK LENGAN PENDEK', 120000, 'baju', 'pria', 'batik3.jpeg', 'Baju dengan kulaitas tinggi menggunakan bahan katun yang tebal dan tidak penas saat digunakan\r\nWARNING SIZE', 'XL = 102-114 cm', 'L = 98-108 cm', 'M = 94-104 cm'),
(7, 'BATIK LENGAN PANJANG', 134000, 'baju', 'pria', 'batik2.jpeg', 'Baju dengan kulaitas tinggi menggunakan bahan katun yang tebal dan tidak penas saat digunakan\r\nWARNING SIZE', 'XL = 102-114 cm', 'L = 98-108 cm', 'M = 94-104 cm'),
(8, 'BATIK LENGAN PANJANG', 114000, 'baju', 'pria', 'batik1.jpeg', 'Baju dengan kulaitas tinggi menggunakan bahan katun yang tebal dan tidak penas saat digunakan\r\nWARNING SIZE', 'XL = 102-114 cm', 'L = 98-108 cm', 'M = 94-104 cm'),
(9, 'KAOS PENDEK', 50000, 'baju', 'wanita', '0f365e9604cbf0d4f616f6156dad06b2fedca2a8.jpg', 'Baju dengan kulaitas tinggi menggunakan bahan katun yang tebal dan tidak penas saat digunakan\r\nWARNING SIZE', 'XL = 100-110 cm', 'L = 75-95 cm', 'M = 60-75 cm'),
(11, 'DRESS LENGAN PENDEK', 150000, 'baju', 'wanita', '4cc8b9d6c03dd330b39190a00eadc688408fcef6.jpg', 'Baju dengan kulaitas tinggi menggunakan bahan katun yang tebal dan tidak penas saat digunakan\r\nWARNING SIZE', 'XL = 100-110 cm', 'L = 75-95 cm', 'M = 60-75 cm'),
(12, 'BAJU KNIT KEKINIAN', 60000, 'baju', 'wanita', 'download (1).jpg', 'Baju dengan kulaitas tinggi menggunakan bahan katun yang tebal dan tidak penas saat digunakan\r\nWARNING SIZE', 'XL = 100-110 cm', 'L = 75-95 cm', 'M = 60-75 cm'),
(13, 'BAJU BLUOSE KOREAN', 70000, 'baju', 'wanita', 'download (2).jpg', 'Baju dengan kulaitas tinggi menggunakan bahan katun yang tebal dan tidak penas saat digunakan\r\nWARNING SIZE', 'XL = 100-110 cm', 'L = 75-95 cm', 'M = 60-75 cm'),
(14, 'BAJU ATASAN KANAYA', 75000, 'baju', 'wanita', 'download (3).jpg', 'Baju dengan kulaitas tinggi menggunakan bahan katun yang tebal dan tidak penas saat digunakan\r\nWARNING SIZE', 'XL = 100-110 cm', 'L = 75-95 cm', 'M = 60-75 cm'),
(15, 'CARDIGAN RAJUT', 80000, 'baju', 'wanita', 'images (17).jpg', 'Baju dengan kulaitas tinggi menggunakan bahan katun yang tebal dan tidak penas saat digunakan\r\nWARNING SIZE', 'XL = 100-110 cm', 'L = 75-95 cm', 'M = 60-75 cm'),
(16, 'BAJU KOREAN PREMIUM', 70000, 'baju', 'wanita', 'download (4).jpg', 'Baju dengan kulaitas tinggi menggunakan bahan katun yang tebal dan tidak penas saat digunakan\r\nWARNING SIZE', 'XL = 100-110 cm', 'L = 75-95 cm', 'M = 60-75 cm'),
(18, 'CELANA PANJANG', 70000, 'celana', 'pria', '5a147cc4a00e64b2fadec2b6fe75da8a02719f06.jpg', 'Baju dengan kulaitas tinggi menggunakan bahan yang berkualitas tebal dan tidak penas saat digunakan\r\nWARNING SIZE', 'XL = 70-100 kg', 'L = 60-70 kg', 'M = 45-60 cm'),
(19, 'CELANA JEANS CARGO', 75000, 'celana', 'pria', 'download (5).jpg', 'Baju dengan kulaitas tinggi menggunakan bahan yang berkualitas tebal dan tidak penas saat digunakan\r\nWARNING SIZE', 'XL = 70-100 kg', 'L = 60-70 kg', 'M = 45-60 cm'),
(20, 'CELANA JOB ARION', 52000, 'celana', 'pria', 'download (6).jpg', 'Baju dengan kulaitas tinggi menggunakan bahan yang berkualitas tebal dan tidak penas saat digunakan\r\nWARNING SIZE', 'XL = 70-100 kg', 'L = 60-70 kg', 'M = 45-60 cm'),
(21, 'CELANA TACTIKAL', 60000, 'celana', 'pria', 'download (7).jpg', 'Baju dengan kulaitas tinggi menggunakan bahan yang berkualitas tebal dan tidak penas saat digunakan\r\nWARNING SIZE', 'XL = 70-100 kg', 'L = 60-70 kg', 'M = 45-60 cm'),
(22, 'CELANA WANITA BAGGY PANTS', 52000, 'celana', 'wanita', 'download (8).jpg', 'Baju dengan kulaitas tinggi menggunakan bahan yang berkualitas tebal dan tidak penas saat digunakan\r\nWARNING SIZE', 'XL = 70-100 kg', 'L = 60-70 kg', 'M = 45-60 cm'),
(23, 'CELANA WANITA KULOT RAYON', 60000, 'celana', 'wanita', 'download (9).jpg', 'Baju dengan kulaitas tinggi menggunakan bahan yang berkualitas tebal dan tidak penas saat digunakan\r\nWARNING SIZE', 'XL = 70-100 kg', 'L = 60-70 kg', 'M = 45-60 cm'),
(24, 'CELANA WANITA CHAEWON JOGER CARGO', 60000, 'celana', 'wanita', 'download (10).jpg', 'Baju dengan kulaitas tinggi menggunakan bahan yang berkualitas tebal dan tidak penas saat digunakan\r\nWARNING SIZE', 'XL = 70-100 kg', 'L = 60-70 kg', 'M = 45-60 cm'),
(27, 'CELANA CLARISSA', 90000, 'celana', 'wanita', 'images (19).jpg', 'Baju dengan kulaitas tinggi menggunakan bahan yang berkualitas tebal dan tidak penas saat digunakan\r\nWARNING SIZE', 'XL = 70-100 kg', 'L = 60-70 kg', 'M = 45-60 cm'),
(29, 'HODIE PRIA', 90000, 'hodie', 'pria', 'images (2).jpg', 'Baju dengan kulaitas tinggi menggunakan bahan yang berkualitas tebal dan tidak penas saat digunakan\r\nWARNING SIZE', 'XL = 102-114 cm', 'L = 98-108 cm', 'M = 94-104 cm'),
(30, 'HODIE TIDE ALL CHILD', 100000, 'hodie', 'pria', 'images (3).jpg', 'Baju dengan kulaitas tinggi menggunakan bahan yang berkualitas tebal dan tidak penas saat digunakan\r\nWARNING SIZE', 'XL = 102-114 cm', 'L = 98-108 cm', 'M = 94-104 cm'),
(31, 'HODIE HANDLW WITH CARE', 90000, 'hodie', 'pria', 'images (1).jpg', 'Baju dengan kulaitas tinggi menggunakan bahan yang berkualitas tebal dan tidak penas saat digunakan\r\nWARNING SIZE', 'XL = 102-114 cm', 'L = 98-108 cm', 'M = 94-104 cm'),
(32, 'HODIE PRIA KEKINIAN\r\n', 120000, 'hodie', 'pria', 'images (10).jpg', 'Baju dengan kulaitas tinggi menggunakan bahan yang berkualitas tebal dan tidak penas saat digunakan\r\nWARNING SIZE', 'XL = 102-114 cm', 'L = 98-108 cm', 'M = 94-104 cm'),
(33, 'GAMIS IVALOVA MUSLIM', 60000, 'gamis', 'wanita', 'download (12).jpg', 'MAXI sleting belakang\r\ndetail ruffles, tangan wudhu friendly ,TALI pinggang, bisa 2 cara pakai ,TALInya TILE DOT lapis MAXMARA VELVET', 'XL = 100-110 cm', 'L = 75-95 cm', 'M = 60-75 cm'),
(34, 'GAMIS SHINTA MAXY DRESS', 100000, 'gamis', 'wanita', 'download (13).jpg', 'Baju Gamis Syari Muslim Murah Wanita Remaja Terbaru Shinta Maxy Dress Katun Supernova Terbaru', 'XL = 102-114 cm', 'L = 98-108 cm', 'M = 94-104 cm'),
(35, 'GAMIS VEBINA WANITA', 130000, 'gamis', 'wanita', 'images (20).jpg', 'INNER MAXY BAHAN SATIN VELVET SILK\r\nLD104 PJ140 LEBAR ROK 1.7M, SLETING DEPAN.', 'XL = 102-114 cm', 'L = 98-108 cm', 'M = 94-104 cm'),
(36, 'GAMIS NALINI WANITA', 150000, 'gamis', 'wanita', 'images (21).jpg', 'Dari Katun standar mutu ISO yang Nyaman, Halus dan Adem ,tidak kaku, tidak ngeplak, dan menyerap keringat \r\nDitangani pengerajin LOKAL terampil dengan tehnik terbaik dan tidak Mudah Luntur,  Kuat dan Presisi', 'XL = 102-114 cm', 'L = 98-108 cm', 'M = 94-104 cm'),
(38, 'GAMIS LARISA MAXY', 90000, 'gamis', '', 'download (14).jpg', 'Bahan : moscrepe\r\nSIZE FIT M L XL LD 100 SD 102\r\n3 WARNA', 'XL = 100-110 cm', 'L = 75-95 cm', 'M = 60-75 cm'),
(39, 'GAMIS DRESSLIM LENGAN PANJANG', 60000, 'gamis', 'wanita', 'c31da0eb46141be997fcfe1696454040.jpg', 'Dresslim Elinar mencoba mengafirmasi karakter tokoh Ummu Ri’llah Al Qusyairiyah kedalam style dresslim formal untuk mencerminkan karakter wanita yang lugas dan tegas..\r\nDresslim Elinar diatas fabric Woolpeach Crincle yang ringan melangsai dengan cuti', 'XL = 100-110 cm', 'L = 75-95 cm', 'M = 60-75 cm'),
(45, 'GAMIS CRINCLE BUSUI FRIENDLY', 143000, 'gamis', 'wanita', 'download (16).jpg', 'Bahan: Crinkle\r\nBerat: 600gr\r\nSletting Depan Busui Friendly,Aplikasi Bor', 'XL = 102-114 cm', 'L = 98-108 cm', 'M = 94-104 cm'),
(46, 'GAMIS AMARA MAXI DRESS', 123000, 'gamis', 'wanita', 'images (22).jpg', 'Gamis saja tidak trmasuk hijabBAHAN : moscrepe\r\n\r\nKualitas di jamin bagus', 'XL = 100-110 cm', 'L = 75-95 cm', 'M = 60-75 cm'),
(47, 'HODIE SUCK STORY', 90000, 'hodie', 'pria', 'download (17).jpg', 'Menggunakan bahan kain flecee gramasi 280\r\n“tebal - lembut & tidak tembus pandang”\r\nsehingga memberikan jaminan bahwa produk kami\r\nnyaman di pakai dan memiliki daya tahan yang lebih lama\r\ndari produk serupa.', 'XL = 102-114 cm', 'L = 98-108 cm', 'M = 94-104 cm'),
(48, 'HODIE RISRUS APPAREL MIX', 100000, 'hodie', 'pria', 'images (23).jpg', 'Pakaian yang sangat cocok untuk sista yang selalu terlihat fashionable dan mengikuti trend kekinian ', 'XL = 102-114 cm', 'L = 98-108 cm', 'M = 94-104 cm');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_aplikasi`
--

CREATE TABLE `user_aplikasi` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(225) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `type_user` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user_aplikasi`
--

INSERT INTO `user_aplikasi` (`id_user`, `nama_user`, `username`, `password`, `alamat`, `type_user`) VALUES
(1, 'Administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3', '', 'admin'),
(2, 'Dimas Mulyadi', 'dimasmulyadi1237', '51947e3cf64ee746b6f2c73d174d525a', 'kamp, Kamurang, RT/RW 01/05, Kec. Cikarang Barat, Kab. Bekasi', 'user'),
(4, 'Riski Nugroho', 'riskinugroho', 'dda9c451931b7da8e00e957da383809e', 'Jejalanjaya, Kect. Tambun Utara, Kab. Bekasi, 17510', 'user'),
(5, 'Rafky Imansyah', 'rifkyimansyah', 'ddfcfdd038fc13491cb9c21c2aacd5c7', 'Bekasi', 'user'),
(6, 'Siti Fadilah', 'fadilahsiti', '5c2e4a2563f9f4427955422fe1402762', 'klareyan', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `user_aplikasi`
--
ALTER TABLE `user_aplikasi`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT untuk tabel `user_aplikasi`
--
ALTER TABLE `user_aplikasi`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  ADD CONSTRAINT `keranjang_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`),
  ADD CONSTRAINT `keranjang_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user_aplikasi` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
