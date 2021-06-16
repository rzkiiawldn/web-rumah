-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jun 2021 pada 12.57
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_blog`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(11) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `keterangan` text NOT NULL,
  `created_by` varchar(225) NOT NULL,
  `created_date` date NOT NULL,
  `foto` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `blog`
--

INSERT INTO `blog` (`id_blog`, `judul`, `keterangan`, `created_by`, `created_date`, `foto`) VALUES
(3, 'Rumah Minimalis Bagus', 'Membangun rumah bukanlah hal yang sederhana. Segala persiapannya harus matang termasuk tahap mendesain rumah. Penting untuk kita mengetahui sebanyak-banyaknya referensi gambar rumah bagus sebelum merancang rumah kita sendiri.\r\n\r\nJika kita ingin rumah yang nantinya dibangun sesuai dengan imaji di kepala, kita harus benar-benar memperhatikan desain rumah yang dibuat meskipun kita menggunakan jasa arsitek. \r\n\r\nNah, berikut gambar-gambar rumah pilihan yang bisa anda jadikan referensi dalam membangun hunian impian. ', 'rzkiiawldn', '2021-06-14', '60c75c093bf28.jpg'),
(4, 'Rumah Modern', 'Umumnya konsep rumah bergaya mediterania menggunakan furniture yang tergolong klasik dan elegan yang kaya ornamen, seperti sofa, meja makan, tempat tidur, lemari, serta perabotan lainnya.  Tidak hanya perabotan, pemilihan barang-barang untuk aksesoris yang menghiasi interior rumah tersebut juga kaya akan ornamen, seperti guci, vas, atau hiasan lainnya yang biasanya terbuat dari tanah liat. Ruangan dapur bergaya mediterania memiliki gaya arsitektur tersendiri yang membuatnya berbeda dengan interior dapur pada desain rumah lainnya. Dominasi warna pada dapur rumah bergaya mediterania menggunakan warna kuning tua atau putih, dan pada bagian dinding dapurnya dipasangi ubin. Untuk bagian permukaan meja dapur biasanya menggunakan material marmer, granit, atau batuan alam lainnya sehingga terkesan sangat alami, natural, dan dekat dengan alam. Untuk ornamen lainnya yang kerap di jumpai pada dapur rumah bergaya mediterania adalah keberadaan ubin lukis. Ubin-ubin yang permukaannya di lukis ini umumnya di pasang pada dinding  mempercantik area dapur karena dapur merupakan salah satu bagian penting dari rumah bergaya mediterania. Tidak heran jika dapur rumah bergaya mediterania terbilang sangat elegan dan mewah jika di bandingkan desain rumah lainnya.', 'rzkiiawldn', '2021-06-14', '60c75c16ad981.jpg'),
(5, 'Rumah Kayu Minimalis', 'Saat ini, kiblat arsitektur di Indonesia tengah mengarah pada konsep minimalis yang tidak banyak menggunakan dekorasi baik untuk eksterior maupun interior rumah. Gambar rumah bagus di atas ini misalnya. Dengan warna cat yang dominan putih dan bentuk yang sederhana, membuat keunikannya terpancar dan memberi kesan tenang. \r\n\r\nTak hanya didominasi dengan cat putih, rumah minimalis yang bagus juga dapat menggunakan material kayu dengan warna natural. Eksterior rumah masih bertahan pada bentuk-bentuk dasar geometris dan dekorasi yang sangat minim.', 'rzkiiawldn', '2021-06-14', '60c75cbe9980e.jpg'),
(6, 'Rumah Minimalis', 'Rumah minimalis berikutnya menggunakan konsep semi terbuka. Rumah minimalis yang tampak depannya berbentuk persegi empat ini memiliki lantai dasar yang dirancang untuk kegiatan semi outdoor, menyambung langsung ke halaman yang luas dan kolam renang\r\n\r\nRumah minimalis tak selalu juga terlihat kaku, seperti gambar rumah bagus yang hangat ini misalnya. Dengan paduan warna putih dan warna natural kayu juga lampu-lampu kuning, rumah kecil ini sukses membuat orang yang melihatnya penasaran dengan kehangatan yang ditawarkan', 'rizki awaludin', '2021-06-14', '60c75db7f15ce.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
