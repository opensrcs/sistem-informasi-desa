<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Artikel extends Seeder
{
    public function run()
    {
        // $this->db->query("INSERT INTO `artikel` (`id`, `gambar`, `isi`, `enabled`, `tgl_upload`, `id_kategori`, `id_user`, `judul`, `headline`, `gambar1`, `gambar2`, `gambar3`, `dokumen`, `link_dokumen`) VALUES
        // (1, '1485865098', '<div class="teks" style="text-align: justify;"><div class="teks" style="text-align: justify;"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris est laborum.</p></div></div>', 1, '2017-01-31 12:18:18', 999, 61, 'Profil Desa', 0, '1485865098', '1485865098', '1485865098', '', 'Profil Desa'),
        // (2, '1485865119', '<div class="teks" style="text-align: justify;"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris est laborum.</p></div>', 1, '2017-01-31 12:18:39', 999, 61, 'Sejarah Desa', 0, '1485865119', '1485865119', '1485865119', '', 'Sejarah Desa'),
        // (3, '1485865147', '<div class="teks" style="text-align: justify;"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris est laborum.</p></div>', 1, '2017-01-31 12:19:07', 999, 61, 'Kondisi Umum Desa', 0, '1485865147', '1485865147', '1485865147', '', 'Kondisi Umum Desa'),
        // (4, '1485865186', '<div class="teks" style="text-align: justify;"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris est laborum.</p></div>', 1, '2017-01-31 12:19:46', 999, 61, 'Masalah & Isu Strategis Desa', 0, '1485865186', '1485865186', '1485865186', '', 'Masalah & Isu Strategis Desa'),
        // (5, '1485865223', '<div class="teks" style="text-align: justify;"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris est laborum.</p></div>', 1, '2017-01-31 12:20:23', 999, 61, 'Kebijakan Pembangunan Desa', 0, '1485865223', '1485865223', '1485865223', '', 'Kebijakan Pembangunan Desa'),
        // (6, '1485865252', '<div class="teks" style="text-align: justify;"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris est laborum.</p></div>', 1, '2017-01-31 12:20:52', 999, 61, 'Kebijakan Keuangan Desa', 0, '1485865252', '1485865252', '1485865252', '', 'Kebijakan Keuangan Desa'),
        // (7, '1485865283', '<div class="teks" style="text-align: justify;"><div class="teks" style="text-align: justify;"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris est laborum.</p></div></div>', 1, '2017-01-31 12:21:23', 999, 61, 'Pemerintahan Desa', 0, '1485865283', '1485865283', '1485865283', '', 'Pemerintahan Desa'),
        // (8, '14864630082017 02 - Contoh Foto SID 3.10 d.jpg', '<p>Profil Kepala Desa Bumi Pertiwi</p><div class="teks" style="text-align: justify;"><div class="teks" style="text-align: justify;"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris est laborum.</p></div></div>', 1, '2017-01-31 12:21:51', 999, 61, 'Kepala Desa', 0, '1485865311', '1485865311', '1485865311', '', 'Kepala Desa'),
        // (9, '1485865337', '<p>Sekretaris Desa:</p><p>Kaur/Kabag Keuangan:</p><p>Staf Kaur/Kabag Keuangan:</p><p>Kaur/Kabag Pemerintahan:</p><p>Staf Kaur/Kabag Pemerintahan:</p><p>Kaur/Kabag Kesejahteraan Rakyat:</p><p>Staf Kaur/Kabag Kesejahteraan Rakyat:</p><p>Kaur/Kabag Ekonomi dan Pembangunan:</p><p>Staf Kaur/Kaba Ekonomi dan Pembangunan</p><p>Kepala Dusun A:</p><p>Kepala Dusun B:</p><p>Kepala Dusun C:</p><p>Kepala Dusun D:</p>', 1, '2017-01-31 12:22:17', 999, 61, 'Perangkat Desa', 0, '1485865337', '1485865337', '1485865337', '', 'Perangkat Desa'),
        // (10, '1485865366', '<p>Ketua:</p><p>Wakil Ketua:</p><p>Anggota:</p><p>1.</p><p>2.</p><p>3.</p><p>4.</p><p>5.</p><p>&nbsp;</p>', 1, '2017-01-31 12:22:46', 999, 61, 'Badan Permusyawaratan Desa', 0, '1485865366', '1485865366', '1485865366', '', 'Badan Permusyawaratan Desa'),
        // (11, '1485865388', '<p>Lembaga Masyarakat Desa</p>', 1, '2017-01-31 12:23:08', 999, 61, 'Lembaga Masyarakat Desa', 0, '1485865388', '1485865388', '1485865388', '', 'Lembaga Masyarakat Desa'),
        // (12, '1485865408', '<div class="teks" style="text-align: justify;"><div class="teks" style="text-align: justify;"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris est laborum.</p></div></div>', 1, '2017-01-31 12:23:28', 999, 61, 'LPMD', 0, '1485865408', '1485865408', '1485865408', '', 'LPMD'),
        // (13, '1485865431', '<div class="teks" style="text-align: justify;"><div class="teks" style="text-align: justify;"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris est laborum.</p></div></div>', 1, '2017-01-31 12:23:51', 999, 61, 'Lembaga Adat', 0, '1485865431', '1485865431', '1485865431', '', 'Lembaga Adat'),
        // (14, '1485865456', '<p>Tim Penggerak PKK</p>', 1, '2017-01-31 12:24:16', 999, 61, 'TP PKK', 0, '1485865456', '1485865456', '1485865456', '', 'TP PKK'),
        // (15, '1485865479', '<div class="teks" style="text-align: justify;"><div class="teks" style="text-align: justify;"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris est laborum.</p></div></div>', 1, '2017-01-31 12:24:39', 999, 61, 'BUMDes', 0, '1485865479', '1485865479', '1485865479', '', 'BUMDes'),
        // (16, '1485865503', '<p>Ketua:</p><p>Wakil Ketua:</p><p>Sekretaris:</p><p>Bendahara:</p><p>Anggota:</p><p>&nbsp;</p>', 1, '2017-01-31 12:25:03', 999, 61, 'Karang Taruna', 0, '1485865503', '1485865503', '1485865503', '', 'Karang Taruna'),
        // (17, '1485865535', '<p>Dusun A:</p><p>Ketua RW 01:</p><p>Sekretaris RW 01:</p><p>Bendahara RW 01:</p><p>Ketua RT 01</p><p>Ketua RT 02</p><p>Ketua RT 03</p><p>&nbsp;</p><p>Ketua RW 02:</p><p>Sekretaris RW 02:</p><p>Bendahara RW 02:</p><p>Ketua RT 04</p><p>Ketua RT 05</p><p>Ketua RT 06</p><p>&nbsp;</p>', 1, '2017-01-31 12:25:35', 999, 61, 'RT/RW', 0, '1485865535', '1485865535', '1485865535', '', 'RT/RW'),
        // (18, '1485865556', '<p>Ketua:</p><p>Anggota:</p><p>1.</p><p>2.</p><p>3.</p><p>4.</p><p>5.</p><p>&nbsp;</p>', 1, '2017-01-31 12:25:56', 999, 61, 'Linmas', 0, '1485865556', '1485865556', '1485865556', '', 'Linmas'),
        // (19, '1485865581', '<div class="teks" style="text-align: justify;"><div class="teks" style="text-align: justify;"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris est laborum.</p></div></div>', 1, '2017-01-31 12:26:21', 999, 61, 'Lembaga Masyarakat Lainnya', 0, '1485865581', '1485865581', '1485865581', '', 'Lembaga Masyarakat Lainnya'),
        // (20, '1485865605', '<div class="teks" style="text-align: justify;"><p style="text-align: justify;">Halaman ini berisi tautan menuju informasi mengenai Basis Data Desa. Ada dua jenis data yang dikelola dalam sistem ini, yakni basis data kependudukan dan basis data sumber daya desa. Sila klik pada tautan berikut untuk mendapatkan tampilan data statistik per kategori.</p><ol><li style="text-align: justify;"><class="statistik/wilayah">Data Wilayah Administratif </li><li style="text-align: justify;"><class="statistik/pendidikan-dalam-kk">Data Pendidikan dalam Kartu Keluarga </li><li style="text-align: justify;"><class="statistik/pendidikan-ditempuh">Data Pendidikan sedang Ditempuh </li><li style="text-align: justify;"><class="statistik/pekerjaan">Data Pekerjaan </li><li style="text-align: justify;"><class="statistik/agama">Data Agama &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;</li><li style="text-align: justify;"><class="statistik/jenis-kelamin">Data Jenis Kelamin</li><li style="text-align: justify;"><class="statistik/golongan-darah">Data Golongan Darah</li><li style="text-align: justify;"><class="statistik/kelompok-umur">Data Kelompok Umur </li><li style="text-align: justify;"><class="statistik/warga-negara">Data Warga Negara </li><li style="text-align: justify;"><class="statistik/status-perkawinan">Data Status Perkawinan </li><li style="text-align: justify;"><class="data_analisis">Data Analisis Sumber Daya</li></ol><p style="text-align: justify;">&nbsp;</p><p style="text-align: justify;">Data yang tampil adalah statistik yang didapatkan dari proses olah data yang dilakukan oleh pemerintah desa secara rutin/harian atau berkala/per periode, baik secara <em>offline</em> maupun <em>online</em>. Sila hubungi kontak pemerintah desa jika perlu akses untuk mendapatkan data dan informasi desa yang lebih lengkap dan termutakhir.</p><p style="text-align: justify;">&nbsp;</p><p style="text-align: justify;">&nbsp;</p></div>', 1, '2017-01-31 12:26:45', 999, 61, 'Data Desa', 0, '1485865605', '1485865605', '1485865605', '', 'Data Desa'),
        // (21, '1485865659', '<p>Anda dapat menghubungi kami di:</p><p>Alamat: ......</p><p>Telepon/HP: .....</p><p>e-mail: ....</p><p>&nbsp;</p>', 1, '2017-01-31 12:27:39', 999, 61, 'Kontak Desa', 0, '1485865659', '1485865659', '1485865659', '', 'Kontak Desa'),
        // (22, '1485866915', '<p>VISI:</p><div class="teks" style="text-align: justify;"><div class="teks" style="text-align: justify;"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p><p>&nbsp;</p><p>MISI:</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris est laborum.</p></div></div>', 1, '2017-01-31 12:48:35', 999, 61, 'Visi dan Misi', 0, '1485866915', '1485866915', '1485866915', '', 'Visi dan Misi'),
        // (23, '14859353562017 02 - Contoh Foto SID 3.10.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris est laborum.</p><p>&nbsp;</p>', 1, '2017-02-01 07:49:16', 6, 61, 'Dokumen RPJM Desa Bumi Pertiwi 2017-2022', 0, '1485935356', '1485935356', '1485935356', '2017 02 - Contoh Lampiran SID 3.10.pdf', 'Dokumen RPJM Desa Bumi Pertiwi 2017-2022'),
        // (24, '14859357502017 02 - Contoh Foto SID 3.10.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris est laborum.</p><p>&nbsp;</p>', 1, '2017-02-01 07:55:50', 8, 61, 'LPJ Kepala Desa Bumi Pertiwi 2010-2016', 0, '1485935750', '1485935750', '1485935750', '2017 02 - Contoh Lampiran SID 3.10.pdf', 'LPJ Kepala Desa Bumi Pertiwi 2010-2016'),
        // (25, '14859362362017 02 - Contoh Foto SID 3.10 c.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris est laborum.</p><p>&nbsp;</p>', 1, '2017-02-01 08:03:57', 5, 61, 'Perdes No 15/2016 tentang Pengelolaan Pasar Desa', 0, '1485936236', '1485936236', '1485936236', '2017 02 - Contoh Lampiran SID 3.10.pdf', 'Perdes No 15/2016 tentang Pengelolaan Pasar Desa'),
        // (26, '14859369972017 02 - Contoh Foto SID 3.10 d.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris est laborum.</p>', 1, '2017-02-01 08:16:37', 19, 61, 'Objek Wisata Air Terjun Bumi Pertiwi', 0, '1485936997', '1485936997', '1485936997', '', 'Objek Wisata Air Terjun Bumi Pertiwi'),
        // (27, '14859370772017 02 - Contoh Foto SID 3.10 b.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris est laborum.</p>', 1, '2017-02-01 08:17:57', 19, 61, 'Kerajinan Pahat Batu Dusun Sabak Mendunia', 0, '1485937077', '1485937077', '1485937077', '', 'Kerajinan Pahat Batu Dusun Sabak Mendunia'),
        // (28, '14859371542017 02 - Contoh Foto SID 3.10.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris est laborum.</p>', 1, '2017-02-01 08:19:14', 1, 61, 'Pilkades Bumi Pertiwi Diikuti 7 Calon', 0, '1485937154', '1485937154', '1485937154', '', 'Pilkades Bumi Pertiwi Diikuti 7 Calon'),
        // (29, '14859372842017 02 - Contoh Foto SID 3.10 c.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris est laborum.</p>', 1, '2017-02-01 08:21:24', 1, 61, 'Kades Canangkan Program Kesehatan Rumah Tangga', 0, '1485937284', '1485937284', '1485937284', '', 'Kades Canangkan Program Kesehatan Rumah Tangga'),
        // (30, '1485937344', '<ol><li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris est laborum.</li><li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris est laborum.</li></ol>', 1, '2017-02-01 08:22:24', 1000, 61, 'Agenda Desa per Januari 2017', 0, '1485937344', '1485937344', '1485937344', '', 'Agenda Desa per Januari 2017'),
        // (31, '1485937404', '<ol><li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris est laborum.</li><li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris est laborum.</li></ol>', 1, '2017-02-01 08:23:24', 4, 61, 'Agenda Kegiatan Desa Bumi Pertiwi per Januari 2017', 0, '1485937404', '1485937404', '1485937404', '', 'Agenda Kegiatan Desa Bumi Pertiwi per Januari 2017'),
        // (32, '14859374622017 02 - Contoh Foto SID 3.10 b.jpg', '<ol><li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris est laborum.</li><li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris est laborum.</li></ol>', 1, '2017-02-01 08:24:23', 4, 61, 'Agenda Kegiatan Desa Bumi Pertiwi per Februari 2017', 0, '1485937462', '1485937462', '1485937462', '', 'Agenda Kegiatan Desa Bumi Pertiwi per Februari 2017'),
        // (33, '1485937843', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris est laborum.</p>', 1, '2017-02-01 08:30:43', 18, 61, 'Panduan Pelayanan Satu Pintu Desa Bumi Pertiwi', 0, '1485937843', '1485937843', '1485937843', '2017 02 - Contoh Lampiran SID 3.10.pdf', 'Panduan Pelayanan Satu Pintu Desa Bumi Pertiwi'),
        // (34, '14859379462017 02 - Contoh Foto SID 3.10.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris est laborum.</p>', 1, '2017-02-01 08:32:26', 1, 61, 'Presiden RI Kunjungi Desa Bumi Pertiwi', 1, '1485937946', '1485937946', '1485937946', '', 'Presiden RI Kunjungi Desa Bumi Pertiwi'),
        // (35, '1486320009', '<p>Selamat datang di website Desa Bumi Pertiwi.</p>', 1, '2017-02-05 18:40:09', 17, 61, 'Selamat Datang', 0, '1486320009', '1486320009', '1486320009', '', 'Selamat Datang'),
        // (36, '1486320072', '<p>Kantor Desa Bumi Pertiwi membuka pelayanan publik pada hari Senin - Sabtu pukul 08.00 - 15.00.</p>', 1, '2017-02-05 18:41:12', 17, 61, 'Jam Kerja Kantor Desa', 0, '1486320072', '1486320072', '1486320072', '', 'Jam Kerja Kantor Desa'),
        // (37, '1486462195', '<div class="teks" style="text-align: justify;"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris est laborum.</p></div>', 1, '2017-02-07 10:09:55', 5, 61, 'SK Operator SID', 0, '1486462195', '1486462195', '1486462195', '2017 02 - Contoh Lampiran SID 3.10.pdf', 'SK Operator SID'),
        // (38, '14864640472017 02 - Contoh Foto SID 3.10 d.jpg', '<div class="teks" style="text-align: justify;"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris est laborum.</p></div>', 1, '2017-02-07 10:40:47', 1, 61, 'Pelatihan Jurnalistik untuk Pegiat Karang Taruna', 0, '1486464047', '1486464047', '1486464047', '', 'Pelatihan Jurnalistik untuk Pegiat Karang Taruna'),
        // (39, '1486464155', '<div class="teks" style="text-align: justify;"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris est laborum.</p></div>', 1, '2017-02-07 10:42:35', 1, 61, 'Gotong Royong Pemugaran Masjid Desa ', 0, '1486464155', '1486464155', '1486464155', '', 'Gotong Royong Pemugaran Masjid Desa '),
        // (40, '14864642872017 02 - Contoh Foto SID 3.10 c.jpg', '<div class="teks" style="text-align: justify;"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris est laborum.</p></div>', 1, '2017-02-07 10:44:10', 1, 61, 'PKK Desa Bumi Pertiwi Raih Juara 1 Tingkat Kabupaten', 0, '1486464250', '1486464250', '1486464250', '2017 02 - Contoh Foto SID 3.10 c.jpg', 'PKK Desa Bumi Pertiwi Raih Juara 1 Tingkat Kabupaten')");
    }
}
