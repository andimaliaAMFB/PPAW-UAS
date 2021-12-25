-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Des 2021 pada 17.00
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppaw_uas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilaimahasiswa`
--

CREATE TABLE `nilaimahasiswa` (
  `id` int(11) NOT NULL,
  `NIM` int(10) NOT NULL,
  `Nama_Mahasiswa` varchar(255) NOT NULL,
  `Nilai_Tugas` float NOT NULL,
  `Nilai_UTS` float NOT NULL,
  `Nilai_UAS` float NOT NULL,
  `Grade_Total` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nilaimahasiswa`
--

INSERT INTO `nilaimahasiswa` (`id`, `NIM`, `Nama_Mahasiswa`, `Nilai_Tugas`, `Nilai_UTS`, `Nilai_UAS`, `Grade_Total`) VALUES
(1, 1178010082, 'Muhamad Munikasari', 45, 99, 76, 'B'),
(2, 1211010019, 'Wildan Mutiara', 95, 61, 97, 'A'),
(3, 1178020109, 'Omar Satriana', 65, 46, 47, 'D'),
(4, 1171020141, 'Azhar Rizky', 47, 97, 99, 'A'),
(5, 1178030112, 'Satrya Ardhi', 80, 58, 46, 'D'),
(6, 1178020092, 'Dhanu Yunika', 87, 48, 45, 'D'),
(7, 1207020026, 'Axel Singgih Isham', 78, 91, 51, 'B'),
(8, 1198010113, 'Ilham Wahyudi', 86, 76, 45, 'C'),
(9, 1215030074, 'Indra Garin Asmarandana', 78, 58, 61, 'C'),
(10, 1195010091, 'Ressy Setiawan', 46, 80, 87, 'B'),
(11, 1172030016, 'Hafizh Ulfa', 82, 73, 87, 'A'),
(12, 1173040063, 'Anugrah Jaya', 83, 97, 65, 'A'),
(13, 1173040141, 'Lukman Deviyanto', 52, 58, 69, 'C'),
(14, 1173070069, 'Aprian Teddo Usra', 79, 63, 75, 'B'),
(15, 1191010095, 'Fariz Mochammad Anindya', 55, 86, 56, 'C'),
(16, 1186050018, 'Fajri Widihastuti', 49, 72, 96, 'B'),
(17, 1181040043, 'Rifat Prasetyo', 81, 67, 81, 'B'),
(18, 1217070099, 'Sakti Randhika', 79, 85, 55, 'B'),
(19, 1197040120, 'Aldi Febriyani', 80, 70, 57, 'C'),
(20, 1185010133, 'Adam Atsila', 51, 86, 85, 'B'),
(21, 1191030144, 'Yosafat Desiana', 48, 77, 66, 'C'),
(22, 1208020106, 'Ekka Dwiki Karina', 69, 90, 62, 'B'),
(23, 1202040148, 'Andrilla Agustiana', 58, 63, 92, 'B'),
(24, 1176040044, 'Ari Lintang Rozi', 93, 48, 45, 'C'),
(25, 1177030054, 'Michael Jova Purba', 64, 63, 81, 'B'),
(26, 1212010059, 'Deristya Faradillah', 49, 62, 70, 'C'),
(27, 1175010105, 'Berian Amami', 87, 75, 55, 'B'),
(28, 1192030092, 'Lintang Aswin Primanelza', 47, 94, 58, 'C'),
(29, 1174050133, 'Fauzan Thomas Julianto', 49, 63, 92, 'B'),
(30, 1181030051, 'Arfan I Fiora', 90, 46, 46, 'D'),
(31, 1198020057, 'Revi Defri', 78, 63, 84, 'B'),
(32, 1211020078, 'Nicolas Asih', 94, 78, 67, 'B'),
(33, 1212040013, 'Rezky Junaidi', 46, 69, 70, 'C'),
(34, 1214030078, 'Abdul Saraswati', 82, 56, 81, 'B'),
(35, 1193060036, 'Dikposa Wijaya', 62, 74, 83, 'B'),
(36, 1214050022, 'Dee Maulinda', 83, 83, 48, 'C'),
(37, 1213030058, 'Ficky Primavera', 80, 87, 92, 'A'),
(38, 1178030087, 'Ramanta Firdaus Nopilianti', 45, 85, 63, 'C'),
(39, 1195020040, 'Ridhwan Mirza Harkart', 88, 48, 86, 'B'),
(40, 1202050115, 'Nicolas Asih', 87, 100, 98, 'A'),
(41, 1204040092, 'Vito Sundah', 88, 98, 90, 'A'),
(42, 1217040026, 'Axel Karina', 99, 85, 45, 'B'),
(43, 1175030122, 'Rahardianto Yulianti', 86, 90, 65, 'B'),
(44, 1204050097, 'Eka Sinuka', 83, 76, 78, 'B'),
(45, 1175010138, 'Aristyo Prasetyo', 73, 60, 45, 'D'),
(46, 1202050081, 'Fahdnul Wulandari', 60, 95, 57, 'C'),
(47, 1193030144, 'Syaibatul Atiyasari', 70, 71, 45, 'C'),
(48, 1172020082, 'Nicolas Asih', 61, 92, 67, 'B'),
(49, 1188010109, 'Christian Rahmawati', 98, 45, 61, 'C'),
(50, 1212010013, 'Irlan Fiora', 47, 70, 48, 'D'),
(51, 1193050064, 'Hana Atiyasari', 68, 49, 47, 'D'),
(52, 1216040042, 'Dewi Mubasyiroh', 61, 86, 99, 'A'),
(53, 1214050010, 'Rofiqotul Artiryani', 63, 81, 95, 'A'),
(54, 1197050136, 'Christalline Fathina Tantin', 71, 68, 47, 'C'),
(55, 1208030108, 'Ulfi Cahyadi', 61, 46, 45, 'D'),
(56, 1192070020, 'Hanindita Narimanda', 56, 49, 78, 'C'),
(57, 1184020011, 'Shelly Umi Nistiyana', 51, 46, 97, 'C'),
(58, 1212050113, 'Amalia Paramitha', 84, 78, 64, 'B'),
(59, 1195030012, 'Demi Purwanto', 99, 79, 83, 'A'),
(60, 1214010036, 'Aelda Hasan', 65, 81, 48, 'C'),
(61, 1178040020, 'Dessy Fitriyah', 63, 77, 89, 'B'),
(62, 1171020053, 'Winda Ibidemu', 94, 64, 64, 'B'),
(63, 1208010027, 'Abi Resa', 73, 100, 98, 'A'),
(64, 1216010005, 'Tania Utami', 77, 100, 97, 'A'),
(65, 1217070146, 'Gishella Ivangkia', 53, 62, 47, 'D'),
(66, 1182050013, 'Natasya Ardiansyah', 71, 77, 98, 'A'),
(67, 1194010148, 'Dina Krishti', 56, 68, 52, 'D'),
(68, 1198020062, 'Berty Khairina', 93, 94, 50, 'B'),
(69, 1205030010, 'Nita Ningsih', 65, 61, 70, 'C'),
(70, 1198030063, 'Alvina Halida', 65, 78, 99, 'A'),
(71, 1195020041, 'Syarifah Obara', 97, 69, 47, 'C'),
(72, 1204030041, 'Febby Hutria', 94, 99, 100, 'A'),
(73, 1173020096, 'Nella Arjanggi', 100, 51, 51, 'C'),
(74, 1204030045, 'Desi Nurfitria', 82, 84, 58, 'B'),
(75, 1182010112, 'Della Rosmalia', 49, 75, 100, 'B'),
(76, 1177070042, 'Arrum Atsila', 90, 73, 63, 'B'),
(77, 1187020064, 'Cintya Hadyan', 97, 65, 95, 'A'),
(78, 1182050020, 'Reny Dewi', 90, 57, 50, 'C'),
(79, 1174010041, 'Fitri Tea Amira', 77, 70, 62, 'C'),
(80, 1176050101, 'Safirah Novi Alvianto', 59, 67, 97, 'B'),
(81, 1195020027, 'Silmi Pinem', 81, 77, 82, 'A'),
(82, 1215020057, 'Tiara Aldian', 55, 82, 73, 'B'),
(83, 1215030145, 'Merlina Anisa', 49, 78, 93, 'B'),
(84, 1213050005, 'Raden Munikasari', 97, 51, 73, 'B'),
(85, 1186050011, 'Theresia Diniyah Dinanti', 58, 97, 83, 'B'),
(86, 1206040008, 'Dinni Setiarini', 66, 45, 71, 'C'),
(87, 1183030072, 'Widya Indra', 63, 100, 82, 'A'),
(88, 1191020102, 'Angel Setiawan', 92, 81, 75, 'A'),
(89, 1213010048, 'Evany Johirin', 54, 76, 95, 'B'),
(90, 1181020117, 'Cynthia Manar', 48, 92, 68, 'C'),
(91, 1211010088, 'Hilary Satria', 55, 78, 72, 'C'),
(92, 1217010104, 'Aprilia Widyaningtias', 70, 98, 84, 'A'),
(93, 1178020053, 'Umi Susanto', 67, 71, 65, 'C'),
(94, 1202020035, 'Clara Karima Nezarani', 91, 99, 100, 'A'),
(95, 1196010098, 'Shabrina Gleny Ariefandi', 61, 48, 66, 'D'),
(96, 1206020080, 'Ranea Gerard', 50, 61, 61, 'D'),
(97, 1177020138, 'Suci Ersyahputra', 98, 60, 68, 'B'),
(98, 1193050085, 'Jenifer Eylien Rizkyananta', 45, 93, 46, 'D'),
(99, 1174020030, 'Tiari Hidayati', 77, 94, 70, 'B'),
(100, 1203060019, 'Rahmah Deviyanto', 68, 84, 75, 'B'),
(101, 1213030137, 'Alfin Pawarti', 66, 61, 99, 'B'),
(102, 1215010022, 'Edy Yoedhistiera Umaeroh', 50, 92, 54, 'C'),
(103, 1185030073, 'Reynard Suandhini', 99, 84, 84, 'A'),
(104, 1193070110, 'Hizrian Rendy Purwahyuningrum', 45, 67, 75, 'C'),
(105, 1202010117, 'Riechal Oktaviaman', 60, 62, 89, 'B'),
(106, 1197040069, 'Okky Fahdnul Ridho', 60, 100, 61, 'B'),
(107, 1176030052, 'Daniel Wiratmansyah', 63, 72, 65, 'C'),
(108, 1196010045, 'Ridhwan Chaerunnisa', 49, 61, 57, 'D'),
(109, 1192060064, 'Joseph Amalia', 53, 50, 99, 'B'),
(110, 1178040082, 'Mubarak Desiana', 90, 84, 62, 'B'),
(111, 1198030057, 'Pabrela Julianto', 88, 96, 67, 'A'),
(112, 1195030041, 'Kharisma Rumanti', 100, 46, 98, 'A'),
(113, 1212060051, 'Tari Farishy', 45, 49, 49, 'E'),
(114, 1188010008, 'Arini Rabani', 94, 85, 63, 'B'),
(115, 1194010018, 'Rahmah Vernanda', 95, 99, 70, 'A'),
(116, 1175030089, 'Theresia Abelardo', 87, 57, 58, 'C'),
(117, 1191020079, 'Titiek Hutahaean', 97, 49, 65, 'C'),
(118, 1201040034, 'Hardianti Ryanda', 73, 58, 76, 'C'),
(119, 1192040052, 'Aprilita Munikasari', 83, 96, 92, 'A'),
(120, 1204010138, 'Nael Cahya', 60, 93, 52, 'C'),
(121, 1202010070, 'Arie Rahadian', 76, 91, 76, 'A'),
(122, 1207050025, 'Berian Naomi', 88, 76, 77, 'A'),
(123, 1193050072, 'Alvino Hutahaean', 47, 96, 64, 'C'),
(124, 1173040065, 'Mohammad Febrianto', 66, 77, 49, 'C'),
(125, 1178010034, 'Mubarak Azzahra', 85, 45, 67, 'C'),
(126, 1181040080, 'Amalia Ramadhan', 92, 100, 69, 'A'),
(127, 1216030132, 'Magdalena Prawita', 54, 72, 80, 'C'),
(128, 1212050138, 'Choirunnisa Alvianingrum', 71, 46, 68, 'C'),
(129, 1193030022, 'Elvina Amalia', 89, 95, 72, 'A'),
(130, 1217030040, 'Weny Sayoga', 77, 59, 79, 'B'),
(131, 1205020019, 'Dhanu Hizkia Febrian', 80, 99, 98, 'A'),
(132, 1191040105, 'Romario Julianto', 58, 83, 69, 'C'),
(133, 1185010150, 'Aggil Mubarak Cardinata', 67, 91, 95, 'A'),
(134, 1216020067, 'Haris Shalimah', 45, 70, 65, 'C'),
(135, 1194050070, 'Deristya Sukosulistiowani', 66, 85, 93, 'A'),
(136, 1192070089, 'Revi Alvianingrum', 70, 50, 79, 'C'),
(137, 1215020112, 'Rendy Aspi', 70, 77, 87, 'B'),
(138, 1201010001, 'Adrian Latifani', 51, 72, 100, 'B'),
(139, 1178020101, 'Julius Sucipto', 62, 48, 88, 'C'),
(140, 1186020144, 'Zulfi Qurniawan', 55, 88, 71, 'B'),
(141, 1172020007, 'Rheza Ardief', 45, 47, 46, 'E'),
(142, 1201020101, 'Hudzaifah Nustantomo', 69, 63, 93, 'B'),
(143, 1213060147, 'Maruto Bintang Amalia', 75, 48, 91, 'B'),
(144, 1184050059, 'Faishal Ariani', 89, 70, 69, 'B'),
(145, 1202030142, 'Syarief Al-fathan', 98, 67, 74, 'B'),
(146, 1201030089, 'Rizki Anjani', 89, 47, 46, 'D'),
(147, 1204010125, 'Ilyas Fikri', 78, 73, 81, 'B'),
(148, 1201010029, 'Mestika Paramitha', 86, 85, 85, 'A'),
(149, 1181010089, 'Indah Wahyudi', 64, 72, 88, 'B'),
(150, 1203040082, 'Shiami Khasanah', 54, 49, 49, 'D'),
(200, 1197050014, 'Andi Malia Fadilah Bahari', 80, 50, 88, 'B');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `nilaimahasiswa`
--
ALTER TABLE `nilaimahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `nilaimahasiswa`
--
ALTER TABLE `nilaimahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
