-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Nov 2021 pada 15.13
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bantuan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alasan_hapus`
--

CREATE TABLE `alasan_hapus` (
  `id_alasan` int(11) NOT NULL,
  `alasan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `alasan_hapus`
--

INSERT INTO `alasan_hapus` (`id_alasan`, `alasan`) VALUES
(3, 'Tidak layak menerima bantuan lagi'),
(4, 'Penerima meninggal dunia'),
(5, 'Pindah domisili'),
(6, 'KPN tidak ditemukan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bantuan`
--

CREATE TABLE `bantuan` (
  `id_bantuan` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bantuan`
--

INSERT INTO `bantuan` (`id_bantuan`, `nama`) VALUES
(1, 'bltdd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bantuan_warga`
--

CREATE TABLE `bantuan_warga` (
  `id_bantuanWarga` int(11) NOT NULL,
  `id_bantuan` int(11) NOT NULL,
  `id_warga` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `datapenerima`
--

CREATE TABLE `datapenerima` (
  `id_penerima` int(11) NOT NULL,
  `nik` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `pekerjaan` varchar(225) NOT NULL,
  `jenisKelamin` varchar(225) NOT NULL,
  `k1` tinyint(1) NOT NULL,
  `k2` tinyint(1) NOT NULL,
  `k3` tinyint(1) NOT NULL,
  `k4` tinyint(1) NOT NULL,
  `k5` tinyint(1) NOT NULL,
  `k6` tinyint(1) NOT NULL,
  `k7` tinyint(1) NOT NULL,
  `k8` tinyint(1) NOT NULL,
  `k9` tinyint(1) NOT NULL,
  `k10` tinyint(1) NOT NULL,
  `k11` tinyint(1) NOT NULL,
  `k12` tinyint(1) NOT NULL,
  `k13` tinyint(1) NOT NULL,
  `k14` tinyint(1) NOT NULL,
  `k15` tinyint(1) NOT NULL,
  `k16` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `datapenerima`
--

INSERT INTO `datapenerima` (`id_penerima`, `nik`, `nama`, `ttl`, `pekerjaan`, `jenisKelamin`, `k1`, `k2`, `k3`, `k4`, `k5`, `k6`, `k7`, `k8`, `k9`, `k10`, `k11`, `k12`, `k13`, `k14`, `k15`, `k16`) VALUES
(4, 5789976, 'Rosya', 'Malang, 12-02-2000', 'Pedagang', 'perempuan', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 32476898, 'Ristanti', 'Malang, 16-08-2000', 'Petani', 'perempuan', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_terhapus`
--

CREATE TABLE `data_terhapus` (
  `id_terhapus` int(11) NOT NULL,
  `id_warga` int(11) NOT NULL,
  `alasan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `hasil` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama`, `hasil`) VALUES
(3, 'Penerima PKH/BPNT/Pra Kerja/Calon penerima BST Kemensos', 0),
(9, 'Kehilangan mata pencaharian', 0),
(10, 'Belum Terdata DTKS (exclusion error)', 0),
(11, 'Mempunyai anggota keluarga yang rentan sakit menahun atau kronis, termasuk yang positif terkena COVID-19 dan harus melakukan isolasi diri', 0),
(12, 'Memiliki sumber penghasilan kurang dari RP.750.000,-/bulan', 0),
(13, 'Tutup usaha', 0),
(14, 'Pendapatan atau omset berkurang drastis akibat pandemi COVID-19', 0),
(15, 'Tidak mampu berobat ke pelayanan kesehatan dikarenakan tidak mempunyai uang dan jaminan kesehatan', 0),
(16, 'Tidak memiliki tabungan/barang yang mudah dijual/digadaikan dengan nilai gadai minimal Rp.1.000.000,-', 0),
(17, 'Dalam satu rumah dihuni lebih dari satu kepala keluarga', 0),
(18, 'Keluarga cerai (ibu-ibu kepala keluarga) yang tidak memiliki harta gono gini (harta warisan)', 0),
(19, 'Tidak mempunyai keluarga lain yang dapat membantu', 0),
(20, 'Mempunyai anggota keluarga disabilitas', 0),
(21, 'Rumah dengan dinding bambu/kayu murah/tembok tanpa plester', 0),
(22, 'Makan 1-2 kali/hari', 0),
(23, 'Konsumsi daging/susu/ayam hanya 1 kali/minggu', 0),
(24, 'Lansia (di atas 60 tahun) terlantar', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria_warga`
--

CREATE TABLE `kriteria_warga` (
  `id_kriteriaWarga` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `id_warga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penerimabltdd`
--

CREATE TABLE `penerimabltdd` (
  `id_penerimabltdd` int(11) NOT NULL,
  `nik` int(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `jenisKelamin` varchar(10) NOT NULL,
  `k1` tinyint(1) NOT NULL,
  `k2` tinyint(1) NOT NULL,
  `k3` tinyint(1) NOT NULL,
  `k4` tinyint(1) NOT NULL,
  `k5` tinyint(1) NOT NULL,
  `k6` tinyint(1) NOT NULL,
  `k7` tinyint(1) NOT NULL,
  `k8` tinyint(1) NOT NULL,
  `k9` tinyint(1) NOT NULL,
  `k10` tinyint(1) NOT NULL,
  `k11` tinyint(1) NOT NULL,
  `k12` tinyint(1) NOT NULL,
  `k13` tinyint(1) NOT NULL,
  `k14` tinyint(1) NOT NULL,
  `k15` tinyint(1) NOT NULL,
  `k16` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penerimakemensos`
--

CREATE TABLE `penerimakemensos` (
  `id_penerimakemensos` int(11) NOT NULL,
  `nik` int(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `jenisKelamin` varchar(10) NOT NULL,
  `jenisBantuan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `role`) VALUES
(1, 'irma', '1234', 'admin'),
(2, 'salsa', '1234', 'user'),
(9, 'bela', '56789', 'user'),
(11, 'lala', '57787989', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `warga`
--

CREATE TABLE `warga` (
  `id_warga` int(11) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `jenisKelamin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `warga`
--

INSERT INTO `warga` (`id_warga`, `nik`, `nama`, `alamat`, `ttl`, `pekerjaan`, `jenisKelamin`) VALUES
(1, '13235478', 'Irma', 'Banu rt 12 rw 02', 'Malang,16-08-2000', 'Petani', 'Perempuan'),
(3, '54787876', 'sals', 'banu rt12 rw 02', 'malang,12-02-2000', 'Petani', 'perempuan'),
(7, '13124', 'nana', 'ngantang`', 'malang, 21-01-1988', 'swasta', 'perempuan'),
(8, '', 'ana', 'ngantang', 'malang, 21-9-1880', 'guru ngaji', 'perempuan'),
(9, '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alasan_hapus`
--
ALTER TABLE `alasan_hapus`
  ADD PRIMARY KEY (`id_alasan`);

--
-- Indeks untuk tabel `bantuan`
--
ALTER TABLE `bantuan`
  ADD PRIMARY KEY (`id_bantuan`);

--
-- Indeks untuk tabel `bantuan_warga`
--
ALTER TABLE `bantuan_warga`
  ADD PRIMARY KEY (`id_bantuanWarga`);

--
-- Indeks untuk tabel `datapenerima`
--
ALTER TABLE `datapenerima`
  ADD PRIMARY KEY (`id_penerima`);

--
-- Indeks untuk tabel `data_terhapus`
--
ALTER TABLE `data_terhapus`
  ADD PRIMARY KEY (`id_terhapus`),
  ADD KEY `fk_warga_data_terhapus` (`id_warga`);

--
-- Indeks untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indeks untuk tabel `kriteria_warga`
--
ALTER TABLE `kriteria_warga`
  ADD PRIMARY KEY (`id_kriteriaWarga`);

--
-- Indeks untuk tabel `penerimabltdd`
--
ALTER TABLE `penerimabltdd`
  ADD PRIMARY KEY (`id_penerimabltdd`);

--
-- Indeks untuk tabel `penerimakemensos`
--
ALTER TABLE `penerimakemensos`
  ADD PRIMARY KEY (`id_penerimakemensos`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`id_warga`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alasan_hapus`
--
ALTER TABLE `alasan_hapus`
  MODIFY `id_alasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `bantuan`
--
ALTER TABLE `bantuan`
  MODIFY `id_bantuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `bantuan_warga`
--
ALTER TABLE `bantuan_warga`
  MODIFY `id_bantuanWarga` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `datapenerima`
--
ALTER TABLE `datapenerima`
  MODIFY `id_penerima` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `data_terhapus`
--
ALTER TABLE `data_terhapus`
  MODIFY `id_terhapus` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `kriteria_warga`
--
ALTER TABLE `kriteria_warga`
  MODIFY `id_kriteriaWarga` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `penerimabltdd`
--
ALTER TABLE `penerimabltdd`
  MODIFY `id_penerimabltdd` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `penerimakemensos`
--
ALTER TABLE `penerimakemensos`
  MODIFY `id_penerimakemensos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `warga`
--
ALTER TABLE `warga`
  MODIFY `id_warga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data_terhapus`
--
ALTER TABLE `data_terhapus`
  ADD CONSTRAINT `fk_warga_data_terhapus` FOREIGN KEY (`id_warga`) REFERENCES `warga` (`id_warga`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
