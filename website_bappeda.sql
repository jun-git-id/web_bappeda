CREATE TABLE `user` (
  `username` varchar(20) PRIMARY KEY,
  `password` text,
  `id_bidang` varchar(2),
  `level` char(1)
);

CREATE TABLE `bidang` (
  `id` varchar(2) PRIMARY KEY,
  `nama_bidang` varchar(50),
  `keterangan` text
);

CREATE TABLE `tags` (
  `id` varchar(3) PRIMARY KEY,
  `tags` varchar(100)
);

CREATE TABLE `posts` (
  `id` text,
  `judul` varchar(255),
  `link` varchar(255),
  `id_bidang` varchar(2),
  `readmore` text,
  `isi` text,
  `tags` text,
  `status` varchar(2),
  `tanggal` date,
  `username` varchar(20),
  `hit_count` int(30)
);

CREATE TABLE `carousel` (
  `id` varchar(4) PRIMARY KEY,
  `keterangan` text,
  `link` varchar(255),
  `status_post` varchar(2),
  `tgl_input` datetime,
  `username` varchar(20)
);

CREATE TABLE `page` (
  `id` varchar(4) PRIMARY KEY,
  `link_page` varchar(255),
  `isi` text
);

CREATE TABLE `aplikasi` (
  `id` varchar(4) PRIMARY KEY,
  `nama_aplikasi` varchar(255),
  `keterangan` text,
  `foto` varchar(255),
  `username` varchar(20)
);

CREATE TABLE `thumbnail` (
  `id` varchar(4) PRIMARY KEY,
  `id_post` text,
  `nama_file` varchar(255),
  `tgl_input` datetime
);

CREATE TABLE `kontak` (
  `id` int(5),
  `nama` varchar(100),
  `email` varchar(100),
  `no_hp` varchar(20),
  `message` text,
  `status` char(1),
  `tgl_input` datetime
);

CREATE TABLE `download` (
  `id` int(5),
  `nama_unduhan` varchar(255),
  `tgl_input` datetime,
  `hit_count` int(5),
  `keterangan` text,
  `kategori` varchar(20)
);

CREATE TABLE `galeri` (
  `id` int(5),
  `nama_foto` varchar(100),
  `tgl_input` datetime
);

CREATE TABLE `attachment` (
  `id` int(5),
  `nama_file` varchar(255),
  `id_post` varchar(100),
  `tgl_input` datetime,
  `hit_count` int(11)
);

ALTER TABLE `posts` ADD FOREIGN KEY (`username`) REFERENCES `user` (`username`);

ALTER TABLE `carousel` ADD FOREIGN KEY (`username`) REFERENCES `user` (`username`);

ALTER TABLE `aplikasi` ADD FOREIGN KEY (`username`) REFERENCES `user` (`username`);
