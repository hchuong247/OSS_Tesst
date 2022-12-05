-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th12 02, 2022 lúc 06:44 PM
-- Phiên bản máy phục vụ: 5.7.36
-- Phiên bản PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webphukien`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

DROP TABLE IF EXISTS `chitiethoadon`;
CREATE TABLE IF NOT EXISTS `chitiethoadon` (
  `ma_chitiet` int(11) NOT NULL AUTO_INCREMENT,
  `id_giohang` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `dongia` int(11) NOT NULL,
  PRIMARY KEY (`ma_chitiet`),
  KEY `id_giohang` (`id_giohang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietsp`
--

DROP TABLE IF EXISTS `chitietsp`;
CREATE TABLE IF NOT EXISTS `chitietsp` (
  `ma_chitiet` int(11) NOT NULL AUTO_INCREMENT,
  `mau` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `mahinh` int(11) NOT NULL,
  `mota` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `soluong` int(11) NOT NULL,
  PRIMARY KEY (`ma_chitiet`),
  KEY `mahinh` (`mahinh`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietsp`
--

INSERT INTO `chitietsp` (`ma_chitiet`, `mau`, `mahinh`, `mota`, `soluong`) VALUES
(1, 'Trắng', 1, ' Tình trạng:Mới, đầy đủ phụ kiện từ nhà sản xuất\r\nPhụ kiện kèm theo:\r\nAirpods\r\nHộp Sạc\r\nCáp Lightnong to USB-A\r\nSách hướng dẫn sử dụng\r\n1 ĐỔI 1 trong vòng 30 ngày nếu có lỗi từ nhà sản xuất.\r\nBảo hành: 12 tháng', 35),
(2, 'Đen', 2, 'Tình trạng: Mới, đầy đủ phụ kiện từ nhà sản xuất.\r\nPhụ kiện kèm: \r\nTai nghe\r\nCase + Vỏ Case (Tặng kèm)\r\nCáp sạc USB-C\r\nSách hướng dẫn sử dụng\r\n1 ĐỔI 1 Trong vòng 30 ngày nếu phát sinh lỗi từ nhà sản xuất.\r\nBảo Hành: 12 Tháng\r\n', 12),
(3, 'Đen', 3, 'Tình trạng: Mới, đầy đủ phụ kiện từ nhà sản xuất.\r\nPhụ kiện kèm: \r\nTai nghe\r\nCase + Vỏ Case (Tặng kèm)\r\nCáp sạc USB-C\r\nSách hướng dẫn sử dụng\r\n1 ĐỔI 1 Trong vòng 30 ngày nếu phát sinh lỗi từ nhà sản xuất.\r\nBảo Hành: 12 Tháng\r\n', 36),
(4, 'Xanh - Đen', 4, 'Thương hiệu: Royal Kludge\r\nXuất xứ thương hiệu: Trung Quốc\r\nKết nối:	BLUETOOTH, USB, DÂY\r\nModel: ROYAL KLUDGE RK84\r\nXuất xứ:Trung Quốc', 55),
(5, 'Đen', 5, 'Thương hiệu: DragonEG\r\nXuất xứ thương hiệu: Trung Quốc\r\nKết nối:CÓ DÂY\r\nModel: ROYAL KLUDGE RK84\r\nXuất xứ: Trung Quốc', 3),
(6, 'Trắng', 6, 'Thương hiệu: MAC\r\nXuất xứ thương hiệu: Mỹ\r\nKết nối	BLUETOOTH, USB, DÂY\r\nModel: MAC OS\r\nXuất xứ: Mỹ', 45),
(7, 'Đen', 7, '1 ĐỔI 1 trong 30 ngày nếu có lỗi phần cứng nhà sản xuất. Bảo hành 12 tháng tại trung tâm bảo hành chính hãng Apple : CD Store', 7),
(8, 'Đen', 8, '1 ĐỔI 1 trong 30 ngày nếu có lỗi phần cứng nhà sản xuất. Bảo hành 12 tháng tại trung tâm bảo hành chính hãng Apple : CD Store', 11),
(9, 'Xám - Đen', 9, ' 1 ĐỔI 1 trong 30 ngày nếu có lỗi phần cứng nhà sản xuất. Bảo hành 12 tháng tại trung tâm bảo hành chính hãng Apple : CD Store', 24);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinhanh`
--

DROP TABLE IF EXISTS `hinhanh`;
CREATE TABLE IF NOT EXISTS `hinhanh` (
  `mahinh` int(11) NOT NULL,
  `hinhanh` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  PRIMARY KEY (`mahinh`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `hinhanh`
--

INSERT INTO `hinhanh` (`mahinh`, `hinhanh`) VALUES
(1, 'product_2.jpg'),
(2, 'product_3.jpg'),
(3, 'product_7.jpg'),
(4, 'product_4.jpg'),
(5, 'product_6.jpg'),
(6, 'product_8.jpg'),
(7, 'product_9.jpg'),
(8, 'product_11.jpg'),
(9, 'product_10.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

DROP TABLE IF EXISTS `hoadon`;
CREATE TABLE IF NOT EXISTS `hoadon` (
  `id_giohang` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `tongtien` int(11) NOT NULL,
  `trangthai` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  PRIMARY KEY (`id_giohang`),
  KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisp`
--

DROP TABLE IF EXISTS `loaisp`;
CREATE TABLE IF NOT EXISTS `loaisp` (
  `maloai` int(11) NOT NULL AUTO_INCREMENT,
  `tenloai` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  PRIMARY KEY (`maloai`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisp`
--

INSERT INTO `loaisp` (`maloai`, `tenloai`) VALUES
(1, 'Tai Nghe'),
(2, 'Bàn Phím'),
(3, 'SmartWatch');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

DROP TABLE IF EXISTS `sanpham`;
CREATE TABLE IF NOT EXISTS `sanpham` (
  `id_sp` int(11) NOT NULL AUTO_INCREMENT,
  `maloai` int(11) NOT NULL,
  `tensp` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `nsx` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `ma_chitiet` int(11) NOT NULL,
  `gia` int(11) NOT NULL,
  PRIMARY KEY (`id_sp`),
  KEY `maloai` (`maloai`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id_sp`, `maloai`, `tensp`, `nsx`, `ma_chitiet`, `gia`) VALUES
(1, 1, 'Tai nghe airpods 2', 'Mỹ', 1, 2549000),
(2, 1, 'Tai nghe Skullcandy', 'Trung Quốc', 2, 420000),
(3, 1, 'Tai nghe Mashall', 'Mỹ', 3, 2690000),
(4, 2, 'RK84', 'Trung Quốc', 4, 1190000),
(5, 2, 'Bàn Phím giả cơ Gaming', 'Trung Quốc', 5, 1190000),
(6, 2, 'Bàn Phím MAC', 'Mỹ', 6, 1290000),
(7, 3, 'Đồng Hồ Xiaomi', 'Trung Quốc', 7, 1190000),
(8, 3, 'Apple Watch', 'Mỹ', 8, 3289000),
(9, 3, 'Đồng hồ Comi2', 'Trung Quoc', 9, 899000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `email` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `matkhau` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `hoten` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `sdt` varchar(10) COLLATE utf8_vietnamese_ci NOT NULL,
  `diachi` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `loai` int(11) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`email`, `matkhau`, `hoten`, `sdt`, `diachi`, `loai`) VALUES
('hoangchuong906@gmail.com', '202cb962ac59075b964b07152d234b70', 'nguyễn hoàng chương', '0962906471', 'ảo ma ca na đa', 0),
('toidihoc113@gmail.com', '202cb962ac59075b964b07152d234b70', 'hieu', '345252342', 'ádfasdhnf', 1);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon_ibfk_2` FOREIGN KEY (`ma_chitiet`) REFERENCES `chitietsp` (`ma_chitiet`),
  ADD CONSTRAINT `chitiethoadon_ibfk_3` FOREIGN KEY (`id_giohang`) REFERENCES `hoadon` (`id_giohang`);

--
-- Các ràng buộc cho bảng `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD CONSTRAINT `hinhanh_ibfk_1` FOREIGN KEY (`mahinh`) REFERENCES `chitietsp` (`mahinh`);

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`email`) REFERENCES `user` (`email`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`maloai`) REFERENCES `loaisp` (`maloai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
