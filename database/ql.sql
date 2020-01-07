-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Dim 27 Juin 2010 à 16:35
-- Version du serveur: 5.1.36
-- Version de PHP: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `ql`
--

-- --------------------------------------------------------

--
-- Structure de la table `chucvu`
--

CREATE TABLE IF NOT EXISTS `chucvu` (
  `MaNV` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `MaPB` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `TenPB` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `MaCV` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `TenCV` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MaNV`,`MaPB`,`MaCV`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `chucvu`
--

INSERT INTO `chucvu` (`MaNV`, `MaPB`, `TenPB`, `MaCV`, `TenCV`) VALUES
('nv01', 'GD', 'Phòng giám đốc', '1', 'Giám đốc'),
('nv02', 'GD', 'Phòng giám đốc', '2', 'Phó giám đốc'),
('nv03', 'HC', 'Phòng hành chính', '3', 'Trưởng phòng'),
('nv04', 'HC', 'Phòng hành chính', '4', 'Phó phòng'),
('nv05', 'HC', 'Phòng hành chính', '5', 'Nhân viên'),
('nv06', 'KD', 'Phòng kinh doanh', '3', 'Trưởng phòng'),
('nv07', 'KD', 'Phòng kinh doanh', '4', 'Phó phòng'),
('nv08', 'KD', 'Phòng kinh doanh', '5', 'Nhân viên'),
('nv09', 'KT', 'Phòng kế toán', '3', 'Trưởng phòng'),
('nv10', 'KT', 'Phòng kế toán', '4', 'Phó phòng'),
('nv10', 'KT', 'Phòng kế toán', '5', 'Nhân viên'),
('nv11', 'PX', 'Phân xưởng', '6', 'Tổ trưởng'),
('nv12', 'PX', 'Phân xưởng', '7', 'Tổ phó'),
('nv13', 'PX', 'Phân xưởng', '8', 'Công nhân'),
('nv14', 'PX', 'Phân xưởng', '8', 'Công nhân'),
('nv15', 'PX', 'Phân xưởng', '8', 'Công nhân'),
('nv16', 'PX', 'Phân xưởng', '8', 'Công nhân'),
('nv17', 'PX', 'Phân xưởng', '8', 'Công nhân'),
('nv18', 'PX', 'Phân xưởng', '8', 'Công nhân'),
('nv19', 'BV', 'Phòng bảo vệ', '9', 'Bảo vệ'),
('nv20', 'BV', 'Phòng bảo vệ', '9', 'Bảo vệ'),
('nv21', 'NS', 'Nhân sự', '3', 'Trưởng phòng'),
('nv22', 'NS', 'Nhân sự', '4', 'Phó phòng'),
('nv23', 'NS', 'Nhân sự', '4', 'Phó phòng');

-- --------------------------------------------------------

--
-- Structure de la table `thongtinnhanvien`
--

CREATE TABLE IF NOT EXISTS `thongtinnhanvien` (
  `MaNV` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `Hoten` text COLLATE utf8_unicode_ci NOT NULL,
  `Ngaysinh` date DEFAULT NULL,
  `Noisinh` text COLLATE utf8_unicode_ci,
  `Nguyenquan` text COLLATE utf8_unicode_ci,
  `Quoctich` text COLLATE utf8_unicode_ci,
  `Dantoc` text COLLATE utf8_unicode_ci,
  `Tongiao` text COLLATE utf8_unicode_ci,
  `Tinhtranghonnhan` text COLLATE utf8_unicode_ci,
  `Tinhtrangsuckhoe` text COLLATE utf8_unicode_ci,
  `Anh` char(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`MaNV`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `thongtinnhanvien`
--

INSERT INTO `thongtinnhanvien` (`MaNV`, `Hoten`, `Ngaysinh`, `Noisinh`, `Nguyenquan`, `Quoctich`, `Dantoc`, `Tongiao`, `Tinhtranghonnhan`, `Tinhtrangsuckhoe`, `Anh`) VALUES
('nv01', 'Phạm Tuấn Anh (B)', '1987-11-24', 'Hà Nội', 'Hà Nội', 'Việt Nam', 'Kinh', 'phật giáo', 'Chưa', 'Tốt', 'anh/1.jpg'),
('nv02', 'Trần Thị Thu Hằng', '1988-03-06', 'Ninh Bình', 'Ninh Bình', 'Việt Nam', 'Miền núi', 'Không', 'Chưa', 'Tốt', NULL),
('nv03', 'Lê Hồng Phúc', '1988-06-21', 'Hà Nội', 'Hà Nội', 'Việt Nam', 'Kinh', 'Không', 'Chưa', 'Tốt', NULL),
('nv04', 'Nguyễn Thu Huyền', '1989-12-07', 'Quản Ninh', 'Quảng Ninh', 'Việt Nam', 'Kinh', 'Không', 'Chưa', 'Tốt', NULL),
('nv05', 'Nguyễn Hòa Bình', '1986-04-09', 'Thái Bình', 'Thái Bình', 'Việt Nam', 'Kinh', 'Không', 'Chưa', 'Tốt', NULL),
('nv06', 'Đào Văn Ánh', '1987-06-21', 'Thanh Hóa', 'Thanh Hóa', 'Việt Nam', 'Kinh', 'Không', 'Chưa', 'Tốt', NULL),
('nv07', 'Chu Anh Tiến', '1988-06-17', 'Hà Nội', 'Hà Nội', 'Việt Nam', 'Kinh', 'Không', 'Chưa', 'Tốt', NULL),
('nv08', 'Hoàng Thị Nguyệt', '1988-07-22', 'Hưng Yên', 'Hưng Yên', 'Việt Nam', 'Kinh', 'Không', 'Chưa', 'Tốt', NULL),
('nv09', 'Bùi Trọng Đạt', '1988-10-18', 'Hà Nội', 'Hà Nội', 'Việt Nam', 'Kinh', 'Không', 'Chưa', 'Tốt', NULL),
('nv10', 'Ninh Thị Huyền Trang', '1987-10-01', 'Hải Dương', 'Hải Dương', 'Việt Nam', 'Kinh', 'Không', 'Chưa', 'Tốt', NULL),
('nv11', 'Vũ Quốc Huy', '1988-08-26', 'Hưng Yên', 'Hưng Yên', 'Việt Nam', 'Kinh', 'Không', 'Chưa', 'Tốt', NULL),
('nv12', 'Lưu Tuấn Anh', '1986-06-09', 'Hà Nội', 'Hà Nội', 'Việt Nam', 'Kinh', 'Không', 'Chưa', 'Tốt', NULL),
('nv13', 'Trần Ngọc Anh', '1987-04-20', 'Hà Nội', 'Hà Nội', 'Việt Nam', 'Kinh', 'Không', 'Chưa', 'Tốt', NULL),
('nv14', 'Nguyễn Diệu Hương', '1988-10-15', 'Hà Nội', 'Hà Nội', 'Việt Nam', 'Kinh', 'Không', 'Chưa', 'Tốt', NULL),
('nv15', 'Hoàng Thị Thương', '1988-03-03', 'Hưng Yên', 'Hưng Yên', 'Việt Nam', 'Kinh', 'Không', 'Chưa', 'Tốt', NULL),
('nv16', 'Lê Thùy Dung', '1988-11-15', 'Bắc Ninh', 'Bắc Ninh', 'Việt Nam', 'Kinh', 'Không', 'Chưa', 'Tốt', NULL),
('nv17', 'Nguyễn Ngọc Linh', '1987-07-16', 'Bắc Ninh', 'Bắc Ninh', 'Việt Nam', 'Kinh', 'Không', 'Chưa', 'Tốt', NULL),
('nv18', 'Nguyễn Nhật Thành', '1988-08-24', 'Điện Biên Phủ', 'Điện Biên Phủ', 'Việt Nam', 'Kinh', 'Không', 'Chưa', 'Tốt', NULL),
('nv19', 'Lê Việt Anh', '1987-04-13', 'Hà Nội', 'Hà Nội', 'Việt Nam', 'Kinh', 'Không', 'Chưa', 'Tốt', NULL),
('nv20', 'Hà Viết Khương', '1988-12-29', 'Hà Nội', 'Hà Nội', 'Việt Nam', 'Kinh', 'Không', 'Chưa', 'Tốt', NULL),
('nv21', 'Đỗ Tiến Thắng', '1988-08-02', 'Hà Nội', 'Hà Nội', 'Việt Nam', 'Kinh', 'Không', 'Chưa', 'Tốt', NULL),
('nv22', 'Vũ Quang Thắng', '1988-01-18', 'Hà Nội', 'Hà Nội', 'Việt Nam', 'Kinh', 'ko', 'Chưa', '', NULL),
('nv24', 'pta', '1987-11-24', 'hn', '', '', '', '', '', '', ''),
('nv25', 'pta', '0000-00-00', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `MaNV` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `quyen` int(2) NOT NULL,
  `ghichu` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`MaNV`,`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`MaNV`, `username`, `password`, `quyen`, `ghichu`) VALUES
('nv01', 'tuananh', '12345', 1, NULL),
('nv02', 'thuhang', '12345', 1, NULL),
('nv21', 'tienthang', '12345', 1, NULL),
('nv22', 'quangthang', '12345', 1, NULL),
('nv03', 'hongphuc', '12345', 0, NULL),
('nv04', 'thuhuyen', '12345', 0, NULL),
('nv05', 'hoabinh', '12345', 0, NULL),
('nv06', 'vananh', '12345', 0, NULL),
('nv07', 'anhtien', '12345', 0, NULL),
('nv08', 'thinguyet', '12345', 0, NULL),
('nv09', 'trongdat', '12345', 0, NULL),
('nv10', 'huyentrang', '12345', 0, NULL),
('nv11', 'quochuy', '12345', 0, NULL),
('nv12', 'ltuananh', '12345', 0, NULL),
('nv13', 'ngocanh', '12345', 0, NULL),
('nv14', 'dieuhuong', '12345', 0, NULL),
('nv15', 'thithuong', '12345', 0, NULL),
('nv16', 'thuydung', '12345', 0, NULL),
('nv17', 'ngoclinh', '12345', 0, NULL),
('nv18', 'nhatthanh', '12345', 0, NULL),
('nv19', 'vietanh', '12345', 0, NULL),
('nv20', 'vietkhuong', '12345', 0, NULL),
('nv23', 'ngocthuy', '12345', 0, NULL);
