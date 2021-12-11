-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 11, 2021 at 01:33 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_banhang`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_status` int(11) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`, `admin_status`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_baiviet`
--

DROP TABLE IF EXISTS `tbl_baiviet`;
CREATE TABLE IF NOT EXISTS `tbl_baiviet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tenbaiviet` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `tomtat` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `noidung` longtext COLLATE utf8_unicode_ci NOT NULL,
  `id_danhmuc` int(11) NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `hinhanh` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_baiviet`
--

INSERT INTO `tbl_baiviet` (`id`, `tenbaiviet`, `tomtat`, `noidung`, `id_danhmuc`, `tinhtrang`, `hinhanh`) VALUES
(2, 'anh khÃ´ng thÃ­ch em', '<p>dsadsadsads</p>\r\n', '<p>sadsadada</p>\r\n', 3, 1, '1638954922_20210311_182841.jpg'),
(4, 'bÃ³ng Ä‘Ã¡ host', '<p>dsadasds</p>\r\n', '<p>dsadasÄ‘sa</p>\r\n', 2, 1, '1638958333_codon.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

DROP TABLE IF EXISTS `tbl_cart`;
CREATE TABLE IF NOT EXISTS `tbl_cart` (
  `id_cart` int(11) NOT NULL AUTO_INCREMENT,
  `id_khachhang` int(11) NOT NULL,
  `code_cart` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `cart_status` int(11) NOT NULL,
  `cart_date` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_cart`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`id_cart`, `id_khachhang`, `code_cart`, `cart_status`, `cart_date`) VALUES
(11, 27, '8077', 1, ''),
(10, 25, '3748', 0, ''),
(9, 18, '4262', 1, ''),
(8, 18, '7041', 1, ''),
(12, 27, '1704', 1, ''),
(13, 27, '8534', 1, ''),
(14, 27, '3626', 1, ''),
(15, 27, '2865', 1, ''),
(16, 27, '315', 1, ''),
(17, 28, '9659', 0, ''),
(18, 28, '609', 1, ''),
(19, 28, '9152', 1, ''),
(20, 28, '8988', 1, ''),
(21, 28, '8547', 0, ''),
(22, 28, '9811', 0, ''),
(23, 28, '6778', 0, ''),
(24, 28, '5658', 0, ''),
(25, 28, '2637', 0, ''),
(26, 28, '7577', 0, ''),
(27, 28, '2429', 0, ''),
(28, 28, '5148', 0, ''),
(29, 28, '8502', 0, ''),
(30, 28, '4902', 0, '2021-12-10 20:00:50'),
(31, 27, '9110', 0, '2021-12-10 23:09:13'),
(32, 27, '5764', 0, '2021-12-10 23:58:27'),
(33, 27, '250', 0, '2021-12-11 00:01:06'),
(34, 27, '3143', 0, '2021-12-11 00:02:19'),
(35, 27, '2739', 0, '2021-12-11 00:04:52'),
(36, 27, '2308', 0, '2021-12-11 00:10:59'),
(37, 27, '6129', 0, '2021-12-11 00:13:10'),
(38, 27, '616', 1, '2021-12-11 00:13:13'),
(39, 27, '9529', 0, '2021-12-11 00:15:03'),
(40, 27, '4291', 0, '2021-12-11 00:16:20'),
(41, 27, '5586', 0, '2021-12-11 00:18:20'),
(42, 27, '1251', 0, '2021-12-11 00:19:13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart_details`
--

DROP TABLE IF EXISTS `tbl_cart_details`;
CREATE TABLE IF NOT EXISTS `tbl_cart_details` (
  `id_cart_details` int(11) NOT NULL AUTO_INCREMENT,
  `code_cart` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL,
  PRIMARY KEY (`id_cart_details`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_cart_details`
--

INSERT INTO `tbl_cart_details` (`id_cart_details`, `code_cart`, `id_sanpham`, `soluongmua`) VALUES
(13, '8077', 24, 2),
(12, '3748', 22, 1),
(11, '3748', 24, 2),
(10, '4262', 23, 1),
(9, '4262', 24, 3),
(8, '7041', 25, 1),
(14, '8077', 23, 1),
(15, '1704', 24, 1),
(16, '8534', 24, 2),
(17, '3626', 23, 1),
(18, '2865', 24, 6),
(19, '315', 22, 2),
(20, '9659', 24, 3),
(21, '609', 23, 2),
(22, '609', 21, 1),
(23, '8547', 23, 2),
(24, '8547', 25, 1),
(25, '9811', 25, 1),
(26, '6778', 25, 1),
(27, '5658', 25, 2),
(28, '2637', 23, 2),
(29, '2637', 25, 1),
(30, '2637', 20, 1),
(31, '7577', 25, 1),
(32, '7577', 20, 1),
(33, '2429', 24, 1),
(34, '2429', 25, 1),
(35, '5148', 24, 1),
(36, '8502', 24, 1),
(37, '8502', 22, 1),
(38, '4902', 23, 2),
(39, '9110', 22, 2),
(40, '5764', 24, 1),
(41, '250', 24, 1),
(42, '3143', 25, 1),
(43, '2739', 25, 1),
(44, '2739', 24, 1),
(45, '2308', 24, 2),
(46, '2308', 25, 1),
(47, '6129', 25, 2),
(48, '9529', 24, 2),
(49, '4291', 24, 3),
(50, '4291', 25, 1),
(51, '5586', 24, 2),
(52, '5586', 25, 1),
(53, '1251', 24, 3),
(54, '1251', 25, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dangky`
--

DROP TABLE IF EXISTS `tbl_dangky`;
CREATE TABLE IF NOT EXISTS `tbl_dangky` (
  `id_khachhang` int(11) NOT NULL AUTO_INCREMENT,
  `tenkhachhang` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dienthoai` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_khachhang`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_dangky`
--

INSERT INTO `tbl_dangky` (`id_khachhang`, `tenkhachhang`, `email`, `diachi`, `matkhau`, `dienthoai`) VALUES
(27, 'xuÃ¢n nhÆ¡n', 'kevintran351996@gmail.com', 'long an', 'e10adc3949ba59abbe56e057f20f883e', '0968222502'),
(28, 'long', 'nhontrau04@gmail.com', 'hcm', '900150983cd24fb0d6963f7d28e17f72', '32423423');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_danhmuc`
--

DROP TABLE IF EXISTS `tbl_danhmuc`;
CREATE TABLE IF NOT EXISTS `tbl_danhmuc` (
  `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT,
  `tendanhmuc` varchar(100) NOT NULL,
  `thutu` int(11) NOT NULL,
  PRIMARY KEY (`id_danhmuc`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id_danhmuc`, `tendanhmuc`, `thutu`) VALUES
(3, 'Iphone', 1),
(2, 'Sam Sung ', 2),
(7, 'Nokia ', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_danhmucbaiviet`
--

DROP TABLE IF EXISTS `tbl_danhmucbaiviet`;
CREATE TABLE IF NOT EXISTS `tbl_danhmucbaiviet` (
  `id_baiviet` int(11) NOT NULL AUTO_INCREMENT,
  `tendanhmuc_baiviet` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thutu` int(11) NOT NULL,
  PRIMARY KEY (`id_baiviet`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_danhmucbaiviet`
--

INSERT INTO `tbl_danhmucbaiviet` (`id_baiviet`, `tendanhmuc_baiviet`, `thutu`) VALUES
(2, 'Tin thá»i sá»±', 1),
(3, 'Tin cÃ´ng nghá»‡ má»›i', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lienhe`
--

DROP TABLE IF EXISTS `tbl_lienhe`;
CREATE TABLE IF NOT EXISTS `tbl_lienhe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `thongtinlienhe` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_lienhe`
--

INSERT INTO `tbl_lienhe` (`id`, `thongtinlienhe`) VALUES
(1, '<ol>\r\n	<li>Sá»‘ Ä‘iá»‡n thoáº¡i : 90876578056</li>\r\n	<li>zalo : 07658795087</li>\r\n	<li>Facebook : <a href=\"https://www.facebook.com/xuannhon.tran.7/\" target=\"_blank\">https://www.facebook.com/xuannhon.tran.7/</a></li>\r\n	<li>youtobe: ....</li>\r\n</ol>\r\n\r\n<p><big><strong><em>Chuy&ecirc;n cung cáº¥p c&aacute;c sáº£n pháº©m ho&agrave;n há»a cho qu&yacute; kh&aacute;ch h&agrave;ng&nbsp;</em></strong></big></p>\r\n\r\n<p><img alt=\"\" src=\"https://scontent.fsgn13-2.fna.fbcdn.net/v/t1.6435-1/s200x200/119063294_1474166866109259_3279623335133626402_n.jpg?_nc_cat=108&amp;ccb=1-5&amp;_nc_sid=7206a8&amp;_nc_ohc=VKeO4a6AxaIAX8T8ScM&amp;_nc_ht=scontent.fsgn13-2.fna&amp;oh=17e91e819afff190e89d4d3ca111419c&amp;oe=61D905E7\" style=\"height:200px; width:199px\" /></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sanpham`
--

DROP TABLE IF EXISTS `tbl_sanpham`;
CREATE TABLE IF NOT EXISTS `tbl_sanpham` (
  `id_sanpham` int(11) NOT NULL AUTO_INCREMENT,
  `tensanpham` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `masp` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `giasp` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `soluong` int(11) NOT NULL,
  `hinhanh` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `tomtat` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `id_danhmuc` int(11) NOT NULL,
  PRIMARY KEY (`id_sanpham`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id_sanpham`, `tensanpham`, `masp`, `giasp`, `soluong`, `hinhanh`, `tomtat`, `noidung`, `tinhtrang`, `id_danhmuc`) VALUES
(17, 'Galaxy A20', '1', '10000000', 10, '1638436224_A21.png', 'Samsung chÃ­nh thá»©c ra máº¯t Galaxy A20 táº¡i Viá»‡t Nam â€“ MÃ n hÃ¬nh vÃ´ cá»±c, camera  kÃ©p gÃ³c siÃªu rá»™ng â€“ Samsung Newsroom Viá»‡t Nam', 'Samsung chÃ­nh thá»©c ra máº¯t Galaxy A20 táº¡i Viá»‡t Nam â€“ MÃ n hÃ¬nh vÃ´ cá»±c, camera  kÃ©p gÃ³c siÃªu rá»™ng â€“ Samsung Newsroom Viá»‡t Nam', 1, 2),
(16, 'op lung', '012', '21000', 2, '1638413155_acer.jpg', 'sadsad', 'Ã¡dsadsa', 0, 5),
(18, 'Galaxy A7', '2', '12000000', 12, '1638436359_A7.png', 'Samsung Galaxy A7 2018 - GiÃ¡ bÃ¡n, cáº¥u hÃ¬nh chi tiáº¿t, khuyáº¿n mÃ£i', 'Samsung Galaxy A7 2018 - GiÃ¡ bÃ¡n, cáº¥u hÃ¬nh chi tiáº¿t, khuyáº¿n mÃ£i', 1, 2),
(19, 'Galaxy A02', '3', '10500000', 8, '1638437045_A02.png', 'Äiá»‡n thoáº¡i Samsung Galaxy A02s - White -64GB Dual Sim - SiÃªu thá»‹ Ä‘iá»‡n mÃ¡y  CPN Viá»‡t Nam', 'Äiá»‡n thoáº¡i Samsung Galaxy A02s - White -64GB Dual Sim - SiÃªu thá»‹ Ä‘iá»‡n mÃ¡y  CPN Viá»‡t Nam', 1, 2),
(20, 'Galaxy Note 20', '12', '18500000', 5, '1638437413_not20.png', 'SiÃªu pháº©m Samsung Galaxy Note 20 cÃ³ gÃ¬ má»›i khiáº¿n Apple pháº£i dÃ¨ chá»«ng?', 'SiÃªu pháº©m Samsung Galaxy Note 20 cÃ³ gÃ¬ má»›i khiáº¿n Apple pháº£i dÃ¨ chá»«ng?', 1, 2),
(21, 'Galaxy Note 20 Ultra', 'ass', '21000000', 8, '1638437673_utra.png', 'Lá»™ diá»‡n Samsung Galaxy Note 20 Ultra, mÃ n hÃ¬nh Infinity-O, camera 108 MP', 'Lá»™ diá»‡n Samsung Galaxy Note 20 Ultra, mÃ n hÃ¬nh Infinity-O, camera 108 MP', 1, 2),
(22, 'iPhone 13 Pro Max', 'iphone13', '45000000', 4, '1638437830_13promax.png', 'Tá»« 15/9 - 14/10, Ä‘Äƒng kÃ½ nháº­n thÃ´ng tin iPhone 13 Pro Max: Táº·ng PMH 1.5  triá»‡u hoáº·c tráº£ gÃ³p NTC 0%, thu cÅ© Ä‘á»•i má»›i tÃ i trá»£ Ä‘áº¿n 1.5 triá»‡u, Æ°u Ä‘Ã£i  VNPay, ...', 'Tá»« 15/9 - 14/10, Ä‘Äƒng kÃ½ nháº­n thÃ´ng tin iPhone 13 Pro Max: Táº·ng PMH 1.5  triá»‡u hoáº·c tráº£ gÃ³p NTC 0%, thu cÅ© Ä‘á»•i má»›i tÃ i trá»£ Ä‘áº¿n 1.5 triá»‡u, Æ°u Ä‘Ã£i  VNPay, ...', 1, 3),
(23, 'iPhone 12 Mini', '12Mini', '21000000', 8, '1638438237_iphone12mini.png', 'Äiá»‡n thoáº¡i iPhone 12 Mini 64GB VN/A Xanh lÃ¡ - HÃ ng chÃ­nh hÃ£ng', 'Äiá»‡n thoáº¡i iPhone 12 Mini 64GB VN/A Xanh lÃ¡ - HÃ ng chÃ­nh hÃ£ng', 1, 3),
(24, 'Nokia 150', 'sdadasdas', '320000', 12, '1638438690_10045763-dien-thoai-nokia-150-4mb-den-1.jpg', 'Mua online Äiá»‡n thoáº¡i Nokia 150 Äen chÃ­nh hÃ£ng, giÃ¡ tá»‘t táº¡i Nguyá»…n Kim.  Miá»…n phÃ­ váº­n chuyá»ƒn. Giao hÃ ng táº­n nÆ¡i. Mua ngay!', 'Mua online Äiá»‡n thoáº¡i Nokia 150 Äen chÃ­nh hÃ£ng, giÃ¡ tá»‘t táº¡i Nguyá»…n Kim.  Miá»…n phÃ­ váº­n chuyá»ƒn. Giao hÃ ng táº­n nÆ¡i. Mua ngay!', 1, 7),
(25, 'NOKIA 105', 'nokia105', '120000', 30, '1638440528_105.png', 'Äiá»‡n thoáº¡i NOKIA 105 TA-1174 DS Black', 'Äiá»‡n thoáº¡i NOKIA 105 TA-1174 DS Black', 1, 7);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_thongke`
--

DROP TABLE IF EXISTS `tbl_thongke`;
CREATE TABLE IF NOT EXISTS `tbl_thongke` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ngaydat` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `donhang` int(11) NOT NULL,
  `doanhthu` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `soluongban` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_thongke`
--

INSERT INTO `tbl_thongke` (`id`, `ngaydat`, `donhang`, `doanhthu`, `soluongban`) VALUES
(1, '2021-12-01', 50, '15000000', 25),
(2, '2021-12-03', 55, '3000000', 0),
(3, '2021-12-05', 30, '2500000', 20),
(4, '2021-12-06', 34, '5500000', 20),
(5, '2021-12-07', 30, '500000', 20),
(6, '2021-12-09', 34, '500000', 20),
(8, '2021-11-11', 340, '5500000', 200),
(9, '2021-10-11', 340, '7500000', 200),
(15, '2021-12-11', 2, '1960000', 8);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
