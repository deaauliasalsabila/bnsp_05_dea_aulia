-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05 Apr 2019 pada 10.07
-- Versi Server: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bnsp_05_dea_aulia_salsabila`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `alldata`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `alldata` (
`id_user` varchar(12)
,`nama_user` varchar(20)
,`username` varchar(20)
,`password` text
,`id_transaksi` varchar(12)
,`tanggal_transaksi` date
,`total_bayar` bigint(20)
,`id_order` varchar(12)
,`no_meja` varchar(50)
,`status_order` varchar(100)
,`id_detail_order` int(11)
,`qty` varchar(12)
,`keterangan` varchar(50)
,`status_detail_order` varchar(50)
,`id_masakan` int(12)
,`nama_masakan` varchar(50)
,`harga` bigint(20)
,`status_masakan` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `count_order`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `count_order` (
`total_order` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `count_pelanggan`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `count_pelanggan` (
`total_pelanggan` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `count_transaksi`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `count_transaksi` (
`total_transaksi` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `count_user`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `count_user` (
`total_user` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `detailorder`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `detailorder` (
`id_order` varchar(12)
,`tanggal_order` date
,`no_meja` varchar(50)
,`status_order` varchar(100)
,`nama_user` varchar(20)
,`id_user` varchar(12)
,`id_transaksi` varchar(12)
,`total_bayar` bigint(20)
,`nama_masakan` varchar(50)
,`harga` bigint(20)
,`qty` varchar(12)
,`keterangan` varchar(50)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_order`
--

CREATE TABLE `detail_order` (
  `id_detail_order` int(11) NOT NULL,
  `id_order` varchar(12) DEFAULT NULL,
  `id_masakan` int(11) DEFAULT NULL,
  `qty` varchar(12) DEFAULT NULL,
  `subtotal` bigint(20) NOT NULL,
  `keterangan` varchar(50) DEFAULT NULL,
  `status_detail_order` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_order`
--

INSERT INTO `detail_order` (`id_detail_order`, `id_order`, `id_masakan`, `qty`, `subtotal`, `keterangan`, `status_detail_order`) VALUES
(19, 'ORD-0527-001', 1, '1', 26000, 'pedas', 'Dipesan'),
(20, 'ORD-0527-001', 2, '1', 20000, 'pedas', 'Dipesan'),
(21, 'ORD-0527-002', 1, '1', 0, 'isi disini', 'Dipesan');

-- --------------------------------------------------------

--
-- Stand-in structure for view `gettransaksi`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `gettransaksi` (
`id_transaksi` varchar(12)
,`tanggal_transaksi` date
,`total_bayar` bigint(20)
,`id_order` varchar(12)
,`no_meja` varchar(50)
,`tanggal_order` date
,`status_order` varchar(100)
,`id_user` varchar(12)
,`username` varchar(20)
,`password` text
,`nama_user` varchar(20)
,`id_detail_order` int(11)
,`qty` varchar(12)
,`subtotal` bigint(20)
,`keterangan` varchar(50)
,`status_detail_order` varchar(50)
,`id_masakan` int(12)
,`nama_masakan` varchar(50)
,`harga` bigint(20)
,`status_masakan` varchar(50)
,`foto` text
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `level`
--

CREATE TABLE `level` (
  `id_level` int(11) NOT NULL,
  `nama_level` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `level`
--

INSERT INTO `level` (`id_level`, `nama_level`) VALUES
(1, 'Admin'),
(2, 'Kasir'),
(3, 'Owner'),
(4, 'Waiter'),
(5, 'Pelanggan');

-- --------------------------------------------------------

--
-- Stand-in structure for view `listlaporan`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `listlaporan` (
`id_transaksi` varchar(12)
,`tanggal_transaksi` date
,`total_bayar` bigint(20)
,`id_order` varchar(12)
,`tanggal_order` date
,`no_meja` varchar(50)
,`status_order` varchar(100)
,`id_user` varchar(12)
,`nama_user` varchar(20)
,`username` varchar(20)
,`password` text
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `listpelanggan`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `listpelanggan` (
`nama_user` varchar(20)
,`id_user` varchar(12)
,`username` varchar(20)
,`password` text
,`id_level` int(11)
,`nama_level` varchar(20)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `lorder`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `lorder` (
`id_user` varchar(12)
,`id_order` varchar(12)
,`tanggal_transaksi` date
,`no_meja` varchar(50)
,`nama_user` varchar(20)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `masakan`
--

CREATE TABLE `masakan` (
  `id_masakan` int(12) NOT NULL,
  `nama_masakan` varchar(50) DEFAULT NULL,
  `harga` bigint(20) DEFAULT NULL,
  `status_masakan` varchar(50) DEFAULT NULL,
  `foto` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `masakan`
--

INSERT INTO `masakan` (`id_masakan`, `nama_masakan`, `harga`, `status_masakan`, `foto`) VALUES
(1, 'Ayam Balado', 26000, 'Ada', 'ayambalado.jpg'),
(2, 'Bakso', 20000, 'Ada', 'baso.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `torder`
--

CREATE TABLE `torder` (
  `id_order` varchar(12) NOT NULL,
  `id_user` varchar(12) DEFAULT NULL,
  `tanggal_order` date DEFAULT NULL,
  `no_meja` varchar(50) DEFAULT NULL,
  `status_order` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `torder`
--

INSERT INTO `torder` (`id_order`, `id_user`, `tanggal_order`, `no_meja`, `status_order`) VALUES
('ORD-0527-001', 'USR-0527-001', '2019-04-04', '01', 'Dipesan'),
('ORD-0527-002', 'USR-0527-004', '2019-04-05', '01', 'Dipesan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` varchar(12) NOT NULL,
  `id_user` varchar(12) DEFAULT NULL,
  `id_order` varchar(12) DEFAULT NULL,
  `tanggal_transaksi` date DEFAULT NULL,
  `total_bayar` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_user`, `id_order`, `tanggal_transaksi`, `total_bayar`) VALUES
('TRK-0527-001', 'USR-0527-001', 'ORD-0527-001', '2019-04-04', 46000),
('TSR-0527-002', 'USR-0527-004', 'ORD-0527-002', '2019-04-05', 26000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` varchar(12) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` text,
  `nama_user` varchar(20) DEFAULT NULL,
  `id_level` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_user`, `id_level`) VALUES
('USR-0527-001', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 1),
('USR-0527-002', 'kasir', 'c7911af3adbd12a035b289556d96470a', 'Dea Aulia Salsabila', 2),
('USR-0527-003', 'dheaa', '7f78f06d2d1262a0a222ca9834b15d9d', 'Dea AS', 5),
('USR-0527-004', 'ranirnzn', '449e68e0bce24fbe95a5454dd03645b9', 'Rani Rinzani', 5),
('USR-0527-005', 'waiter', 'f64cff138020a2060a9817272f563b3c', 'Waiter', 4),
('USR-0527-006', 'owner', '72122ce96bfec66e2396d2e25225d70a', 'Owner', 3);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_all_order`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_all_order` (
`id_order` varchar(12)
,`tanggal_order` date
,`no_meja` varchar(50)
,`status_order` varchar(100)
,`id_user` varchar(12)
,`username` varchar(20)
,`password` text
,`nama_user` varchar(20)
,`id_level` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_all_pelanggan`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_all_pelanggan` (
`id_user` varchar(12)
,`username` varchar(20)
,`password` text
,`nama_user` varchar(20)
,`id_level` int(11)
,`nama_level` varchar(20)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_all_users`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_all_users` (
`id_user` varchar(12)
,`username` varchar(20)
,`password` text
,`nama_user` varchar(20)
,`id_level` int(11)
,`nama_level` varchar(20)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_cmasakan`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_cmasakan` (
`data_masakan` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_corder`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_corder` (
`data_order` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_ctransaksi`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_ctransaksi` (
`data_transaksi` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_cuser`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_cuser` (
`data_user` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_transaksi`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_transaksi` (
`id_transaksi` varchar(12)
,`tanggal_transaksi` date
,`total_bayar` bigint(20)
,`id_user` varchar(12)
,`nama_user` varchar(20)
,`id_order` varchar(12)
,`tanggal_order` date
,`status_order` varchar(100)
);

-- --------------------------------------------------------

--
-- Struktur untuk view `alldata`
--
DROP TABLE IF EXISTS `alldata`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `alldata`  AS  select `u`.`id_user` AS `id_user`,`u`.`nama_user` AS `nama_user`,`u`.`username` AS `username`,`u`.`password` AS `password`,`t`.`id_transaksi` AS `id_transaksi`,`t`.`tanggal_transaksi` AS `tanggal_transaksi`,`t`.`total_bayar` AS `total_bayar`,`o`.`id_order` AS `id_order`,`o`.`no_meja` AS `no_meja`,`o`.`status_order` AS `status_order`,`d`.`id_detail_order` AS `id_detail_order`,`d`.`qty` AS `qty`,`d`.`keterangan` AS `keterangan`,`d`.`status_detail_order` AS `status_detail_order`,`m`.`id_masakan` AS `id_masakan`,`m`.`nama_masakan` AS `nama_masakan`,`m`.`harga` AS `harga`,`m`.`status_masakan` AS `status_masakan` from ((((`user` `u` join `transaksi` `t`) join `torder` `o`) join `detail_order` `d`) join `masakan` `m`) where ((`t`.`id_order` = `o`.`id_order`) and (`t`.`id_user` = `u`.`id_user`) and (`o`.`id_user` = `u`.`id_user`) and (`d`.`id_order` = `o`.`id_order`) and (`d`.`id_masakan` = `m`.`id_masakan`)) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `count_order`
--
DROP TABLE IF EXISTS `count_order`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `count_order`  AS  select count(`torder`.`id_order`) AS `total_order` from `torder` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `count_pelanggan`
--
DROP TABLE IF EXISTS `count_pelanggan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `count_pelanggan`  AS  select count(`user`.`id_user`) AS `total_pelanggan` from `user` where (`user`.`id_level` = '5') ;

-- --------------------------------------------------------

--
-- Struktur untuk view `count_transaksi`
--
DROP TABLE IF EXISTS `count_transaksi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `count_transaksi`  AS  select count(`transaksi`.`id_transaksi`) AS `total_transaksi` from `transaksi` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `count_user`
--
DROP TABLE IF EXISTS `count_user`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `count_user`  AS  select count(`user`.`id_user`) AS `total_user` from `user` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `detailorder`
--
DROP TABLE IF EXISTS `detailorder`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `detailorder`  AS  select `o`.`id_order` AS `id_order`,`o`.`tanggal_order` AS `tanggal_order`,`o`.`no_meja` AS `no_meja`,`o`.`status_order` AS `status_order`,`u`.`nama_user` AS `nama_user`,`u`.`id_user` AS `id_user`,`t`.`id_transaksi` AS `id_transaksi`,`t`.`total_bayar` AS `total_bayar`,`m`.`nama_masakan` AS `nama_masakan`,`m`.`harga` AS `harga`,`d`.`qty` AS `qty`,`d`.`keterangan` AS `keterangan` from ((((`user` `u` join `torder` `o`) join `transaksi` `t`) join `detail_order` `d`) join `masakan` `m`) where ((`o`.`id_user` = `u`.`id_user`) and (`t`.`id_order` = `o`.`id_order`) and (`t`.`id_user` = `u`.`id_user`) and (`d`.`id_order` = `o`.`id_order`) and (`d`.`id_masakan` = `m`.`id_masakan`)) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `gettransaksi`
--
DROP TABLE IF EXISTS `gettransaksi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `gettransaksi`  AS  select `tr`.`id_transaksi` AS `id_transaksi`,`tr`.`tanggal_transaksi` AS `tanggal_transaksi`,`tr`.`total_bayar` AS `total_bayar`,`t`.`id_order` AS `id_order`,`t`.`no_meja` AS `no_meja`,`t`.`tanggal_order` AS `tanggal_order`,`t`.`status_order` AS `status_order`,`u`.`id_user` AS `id_user`,`u`.`username` AS `username`,`u`.`password` AS `password`,`u`.`nama_user` AS `nama_user`,`d`.`id_detail_order` AS `id_detail_order`,`d`.`qty` AS `qty`,`d`.`subtotal` AS `subtotal`,`d`.`keterangan` AS `keterangan`,`d`.`status_detail_order` AS `status_detail_order`,`m`.`id_masakan` AS `id_masakan`,`m`.`nama_masakan` AS `nama_masakan`,`m`.`harga` AS `harga`,`m`.`status_masakan` AS `status_masakan`,`m`.`foto` AS `foto` from ((((`transaksi` `tr` join `torder` `t` on((`tr`.`id_order` = `t`.`id_order`))) join `user` `u` on((`tr`.`id_user` = `u`.`id_user`))) join `detail_order` `d` on((`t`.`id_order` = `d`.`id_order`))) join `masakan` `m` on((`d`.`id_masakan` = `m`.`id_masakan`))) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `listlaporan`
--
DROP TABLE IF EXISTS `listlaporan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `listlaporan`  AS  select `t`.`id_transaksi` AS `id_transaksi`,`t`.`tanggal_transaksi` AS `tanggal_transaksi`,`t`.`total_bayar` AS `total_bayar`,`o`.`id_order` AS `id_order`,`o`.`tanggal_order` AS `tanggal_order`,`o`.`no_meja` AS `no_meja`,`o`.`status_order` AS `status_order`,`u`.`id_user` AS `id_user`,`u`.`nama_user` AS `nama_user`,`u`.`username` AS `username`,`u`.`password` AS `password` from ((`transaksi` `t` join `torder` `o`) join `user` `u`) where ((`t`.`id_order` = `o`.`id_order`) and (`t`.`id_user` = `u`.`id_user`) and (`o`.`id_user` = `u`.`id_user`)) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `listpelanggan`
--
DROP TABLE IF EXISTS `listpelanggan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `listpelanggan`  AS  select `u`.`nama_user` AS `nama_user`,`u`.`id_user` AS `id_user`,`u`.`username` AS `username`,`u`.`password` AS `password`,`l`.`id_level` AS `id_level`,`l`.`nama_level` AS `nama_level` from (`user` `u` join `level` `l` on((`u`.`id_level` = `l`.`id_level`))) where (`l`.`id_level` = '5') ;

-- --------------------------------------------------------

--
-- Struktur untuk view `lorder`
--
DROP TABLE IF EXISTS `lorder`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `lorder`  AS  select `u`.`id_user` AS `id_user`,`o`.`id_order` AS `id_order`,`t`.`tanggal_transaksi` AS `tanggal_transaksi`,`o`.`no_meja` AS `no_meja`,`u`.`nama_user` AS `nama_user` from ((`user` `u` join `torder` `o`) join `transaksi` `t`) where ((`t`.`id_order` = `o`.`id_order`) and (`t`.`id_user` = `u`.`id_user`) and (`o`.`id_user` = `u`.`id_user`)) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_all_order`
--
DROP TABLE IF EXISTS `v_all_order`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_all_order`  AS  select `t`.`id_order` AS `id_order`,`t`.`tanggal_order` AS `tanggal_order`,`t`.`no_meja` AS `no_meja`,`t`.`status_order` AS `status_order`,`u`.`id_user` AS `id_user`,`u`.`username` AS `username`,`u`.`password` AS `password`,`u`.`nama_user` AS `nama_user`,`u`.`id_level` AS `id_level` from (`torder` `t` join `user` `u` on((`t`.`id_user` = `u`.`id_user`))) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_all_pelanggan`
--
DROP TABLE IF EXISTS `v_all_pelanggan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_all_pelanggan`  AS  select `u`.`id_user` AS `id_user`,`u`.`username` AS `username`,`u`.`password` AS `password`,`u`.`nama_user` AS `nama_user`,`l`.`id_level` AS `id_level`,`l`.`nama_level` AS `nama_level` from (`user` `u` join `level` `l` on((`u`.`id_level` = `l`.`id_level`))) where (`l`.`id_level` = '5') ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_all_users`
--
DROP TABLE IF EXISTS `v_all_users`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_all_users`  AS  select `u`.`id_user` AS `id_user`,`u`.`username` AS `username`,`u`.`password` AS `password`,`u`.`nama_user` AS `nama_user`,`l`.`id_level` AS `id_level`,`l`.`nama_level` AS `nama_level` from (`user` `u` join `level` `l` on((`u`.`id_level` = `l`.`id_level`))) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_cmasakan`
--
DROP TABLE IF EXISTS `v_cmasakan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_cmasakan`  AS  select count(`masakan`.`id_masakan`) AS `data_masakan` from `masakan` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_corder`
--
DROP TABLE IF EXISTS `v_corder`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_corder`  AS  select count(`torder`.`id_order`) AS `data_order` from `torder` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_ctransaksi`
--
DROP TABLE IF EXISTS `v_ctransaksi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ctransaksi`  AS  select count(`transaksi`.`id_transaksi`) AS `data_transaksi` from `transaksi` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_cuser`
--
DROP TABLE IF EXISTS `v_cuser`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_cuser`  AS  select count(`user`.`id_user`) AS `data_user` from `user` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_transaksi`
--
DROP TABLE IF EXISTS `v_transaksi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_transaksi`  AS  select `t`.`id_transaksi` AS `id_transaksi`,`t`.`tanggal_transaksi` AS `tanggal_transaksi`,`t`.`total_bayar` AS `total_bayar`,`u`.`id_user` AS `id_user`,`u`.`nama_user` AS `nama_user`,`ord`.`id_order` AS `id_order`,`ord`.`tanggal_order` AS `tanggal_order`,`ord`.`status_order` AS `status_order` from ((`transaksi` `t` join `user` `u` on((`t`.`id_user` = `u`.`id_user`))) join `torder` `ord` on((`t`.`id_order` = `ord`.`id_order`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_order`
--
ALTER TABLE `detail_order`
  ADD PRIMARY KEY (`id_detail_order`),
  ADD KEY `id_order` (`id_order`),
  ADD KEY `id_masakan` (`id_masakan`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `masakan`
--
ALTER TABLE `masakan`
  ADD PRIMARY KEY (`id_masakan`);

--
-- Indexes for table `torder`
--
ALTER TABLE `torder`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `transaksi_ibfk_2` (`id_order`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_level` (`id_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_order`
--
ALTER TABLE `detail_order`
  MODIFY `id_detail_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `masakan`
--
ALTER TABLE `masakan`
  MODIFY `id_masakan` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_order`
--
ALTER TABLE `detail_order`
  ADD CONSTRAINT `detail_order_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `torder` (`id_order`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_order_ibfk_2` FOREIGN KEY (`id_masakan`) REFERENCES `masakan` (`id_masakan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `torder`
--
ALTER TABLE `torder`
  ADD CONSTRAINT `torder_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_order`) REFERENCES `torder` (`id_order`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `level` (`id_level`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
