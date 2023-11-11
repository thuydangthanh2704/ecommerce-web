-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 24, 2022 lúc 10:03 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `hihaclothingss`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietgiohang`
--

CREATE TABLE `chitietgiohang` (
  `id_chitietgiohang` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `soluong_sanpham` int(11) NOT NULL,
  `gia_sanpham` int(11) NOT NULL,
  `id_giohang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chitietgiohang`
--

INSERT INTO `chitietgiohang` (`id_chitietgiohang`, `id_sanpham`, `soluong_sanpham`, `gia_sanpham`, `id_giohang`) VALUES
(9, 5, 1, 99000, 14),
(10, 1, 1, 129000, 15),
(11, 6, 2, 129000, 15),
(12, 5, 1, 99000, 16),
(13, 1, 1, 129000, 16),
(14, 0, 1, 200000, 0),
(15, 1, 1, 129000, 0),
(16, 9, 1, 200000, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietsanpham`
--

CREATE TABLE `chitietsanpham` (
  `id_sanpham` int(11) NOT NULL,
  `ten_sanpham` varchar(255) NOT NULL,
  `gia_sanpham` int(11) NOT NULL,
  `hinhanh_sanpham` varchar(255) NOT NULL,
  `khuyenmai` int(11) NOT NULL,
  `mota` text NOT NULL,
  `id_loaisanpham` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chitietsanpham`
--

INSERT INTO `chitietsanpham` (`id_sanpham`, `ten_sanpham`, `gia_sanpham`, `hinhanh_sanpham`, `khuyenmai`, `mota`, `id_loaisanpham`) VALUES
(1, 'Áo sơ mi nữ nhũ', 129000, 'ao-so-mi-nu-nhu-1.jpg', 15, 'Áo sơ mi nữ bóng ChaCha phong cách vintage, chất liệu nhũ mềm mại co giãn tốt , thoáng mát. Thiết kế thời trang phù hợp xu hướng hiện nay. Kiểu dáng đa phong cách Đường may tinh tế sắc sảo Áo sơ mi được thiết kế với vẻ đẹp trẻ trung năng động nhưng không kém phần cá tính. Áo được thiết kế đẹp, chuẩn form, đường may sắc xảo, vải nhũ dày, mịn, thấm hút mồ hôi tạo sự thoải mái khi mặc! Dễ dàng phối trang phục , thích hợp đi chơi đi làm đi dạo phố Thích hợp cho sự kết hợp với quần jean, tây!', 1),
(2, 'Áo sơ mi nữ họa tiết', 150000, 'ao-so-mi-nu-tay-dai-hoa-tiet-2.jpg', 10, 'Áo sơ mi nữ tay dài họa tiết vintage thời trang. Chất liệu thun mềm mại co giãn tốt , thoáng mát Thiết kế thời trang phù hợp xu hướng hiện nay Kiểu dáng đa phong cách Đường may tinh tế sắc sảo Áo sơ mi được thiết kế vẻ đẹp trẻ trung năng động nhưng không kém phần cá tính. Áo được thiết kế đẹp, chuẩn form, đường may sắc xảo, vải  Polyester dày, mịn, thấm hút mồ hôi tạo sự thoải mái khi mặc! Dễ dàng phối trang phục , thích hợp đi chơi đi làm đi dạo phố Thích hợp cho sự kết hợp với quần jean, tây!', 1),
(3, 'Áo sơ mi hoa nhí', 139000, 'ao-so-mi-hoa-nhi-3.jpg', 12, 'Áo sơ mi nữ họa tiết hoa cỏ nhí, tay dài, phong cách vintage thời trang Chất liệu vôn mềm mại co giãn tốt , thoáng mát Thiết kế thời trang phù hợp xu hướng hiện nay Kiểu dáng đa phong cách Đường may tinh tế sắc sảo Áo sơ mi được thiết kế vẻ đẹp trẻ trung năng động nhưng không kém phần cá tính. Áo được thiết kế đẹp, chuẩn form, đường may sắc xảo, vải vôn dày, mịn, thấm hút mồ hôi tạo sự thoải mái khi mặc! Dễ dàng phối trang phục , thích hợp đi chơi đi làm đi dạo phố Thích hợp cho sự kết hợp với quần jean, tây!', 1),
(4, 'Áo sơ mi vintage phong cách Hàn Quốc ', 179000, 'ao-so-mi-phong-cach-HQ-4.jpg', 10, 'Áo sơ mi vintage phong cách Hàn Quốc Chất liệu Polyester mềm mại co giãn tốt , thoáng mát Thiết kế thời trang phù hợp xu hướng hiện nay Kiểu dáng đa phong cách Đường may tinh tế sắc sảo Áo sơ mi được thiết kế vẻ đẹp trẻ trung năng động nhưng không kém phần cá tính. Áo được thiết kế đẹp, chuẩn form, đường may sắc xảo, vải  Polyester dày, mịn, thấm hút mồ hôi tạo sự thoải mái khi mặc! Dễ dàng phối trang phục , thích hợp đi chơi đi làm đi dạo phố Thích hợp cho sự kết hợp với quần jean, tây!', 1),
(5, 'Áo thun nữ Retro tay ngắn', 99000, 'ao-thun-1.jpg', 8, 'Áo thun tay ngắn in họa tiết phong cách Retro cho nữ Áo thun tay ngắn họa tiết vintage thời trang. Chất liệu thun mềm mại co giãn tốt , thoáng mát Thiết kế thời trang phù hợp xu hướng hiện nay Kiểu dáng đa phong cách Đường may tinh tế sắc sảo Áo sơ mi được thiết kế vẻ đẹp trẻ trung năng động nhưng không kém phần cá tính. Áo được thiết kế đẹp, chuẩn form, đường may sắc xảo, vải  thun dày, mịn, thấm hút mồ hôi tạo sự thoải mái khi mặc! Dễ dàng phối trang phục , thích hợp đi chơi đi làm đi dạo phố Thích hợp cho sự kết hợp với quần jean, tây!', 2),
(6, 'Áo thun Hallywoon vintage', 129000, 'ao-thun-2.jpg', 5, 'Áo thun Hallywoon vintage Áo thun tay ngắn hình ảnh vintage thời trang. Chất liệu thun mềm mại co giãn tốt , thoáng mát Thiết kế thời trang phù hợp xu hướng hiện nay Kiểu dáng đa phong cách Đường may tinh tế sắc sảo Áo sơ mi được thiết kế vẻ đẹp trẻ trung năng động nhưng không kém phần cá tính. Áo được thiết kế đẹp, chuẩn form, đường may sắc xảo, vải  thun dày, mịn, thấm hút mồ hôi tạo sự thoải mái khi mặc! Dễ dàng phối trang phục , thích hợp đi chơi đi làm đi dạo phố Thích hợp cho sự kết hợp với quần jean, tây!', 2),
(7, 'Áo thun tay ngắn dáng rộng', 99000, 'ao-thun-3.jpg', 5, 'Áo thun tay ngắn họa tiết vintage thời trang. Chất liệu thun mềm mại co giãn tốt , thoáng mát Thiết kế thời trang phù hợp xu hướng hiện nay Kiểu dáng đa phong cách Đường may tinh tế sắc sảo Áo sơ mi được thiết kế vẻ đẹp trẻ trung năng động nhưng không kém phần cá tính. Áo được thiết kế đẹp, chuẩn form, đường may sắc xảo, vải  thun dày, mịn, thấm hút mồ hôi tạo sự thoải mái khi mặc! Dễ dàng phối trang phục , thích hợp đi chơi đi làm đi dạo phố Thích hợp cho sự kết hợp với quần jean, tây!', 2),
(8, 'Áo thun Netro oversize', 109000, 'ao-thun-4.jpg', 5, 'Áo thun tay ngắn họa tiết vintage thời trang. Chất liệu thun mềm mại co giãn tốt , thoáng mát Thiết kế thời trang phù hợp xu hướng hiện nay Kiểu dáng đa phong cách Đường may tinh tế sắc sảo Áo sơ mi được thiết kế vẻ đẹp trẻ trung năng động nhưng không kém phần cá tính. Áo được thiết kế đẹp, chuẩn form, đường may sắc xảo, vải  thun dày, mịn, thấm hút mồ hôi tạo sự thoải mái khi mặc! Dễ dàng phối trang phục , thích hợp đi chơi đi làm đi dạo phố Thích hợp cho sự kết hợp với quần jean, tây!', 2),
(9, 'Áo len vintage thổ cẩm', 200000, 'ao-len-1.jpg', 10, 'Áo len vintage họa tiết thổ cẩm Áo len tay dài họa tiết vintage thời trang. Chất liệu len mềm mại co giãn tốt , thoáng mát Thiết kế thời trang phù hợp xu hướng hiện nay Kiểu dáng đa phong cách Đường may tinh tế sắc sảo Áo len được thiết kế vẻ đẹp trẻ trung năng động nhưng không kém phần cá tính. Áo được thiết kế đẹp, chuẩn form, đường may sắc xảo, vải thổ cẩm dày, mịn, thấm hút mồ hôi tạo sự thoải mái khi mặc! Dễ dàng phối trang phục , thích hợp đi chơi đi làm đi dạo phố Thích hợp cho sự kết hợp với quần jean, tây!', 3),
(10, 'Áo len cadigan nữ đỏ, phối nơ', 300000, 'ao-len-2.jpg', 15, 'Áo len nữ đỏ, cổ có phối nơ tay phồng cài cúc Áo len tay dài họa tiết vintage thời trang. Chất liệu len mềm mại co giãn tốt , thoáng mát Thiết kế thời trang phù hợp xu hướng hiện nay Kiểu dáng đa phong cách Đường may tinh tế sắc sảo Áo len được thiết kế vẻ đẹp trẻ trung năng động nhưng không kém phần cá tính. Áo được thiết kế đẹp, chuẩn form, đường may sắc xảo, vải thổ cẩm dày, mịn, thấm hút mồ hôi tạo sự thoải mái khi mặc! Dễ dàng phối trang phục , thích hợp đi chơi đi làm đi dạo phố Thích hợp cho sự kết hợp với quần jean, tây!', 3),
(11, 'Áo len vintage cổ vuông', 200000, 'ao-len-3.jpg', 10, 'Áo len vintage cổ vuông Áo len tay dài họa tiết vintage thời trang. Chất liệu len mềm mại co giãn tốt , thoáng mát Thiết kế thời trang phù hợp xu hướng hiện nay Kiểu dáng đa phong cách Đường may tinh tế sắc sảo Áo len được thiết kế vẻ đẹp trẻ trung năng động nhưng không kém phần cá tính. Áo được thiết kế đẹp, chuẩn form, đường may sắc xảo, vải thổ cẩm dày, mịn, thấm hút mồ hôi tạo sự thoải mái khi mặc! Dễ dàng phối trang phục , thích hợp đi chơi đi làm đi dạo phố Thích hợp cho sự kết hợp với quần jean, tây!', 3),
(12, 'Áo len Gile nâu đơn giản', 250000, 'ao-len-4.jpg', 15, 'Áo len Gile vintage nâu đơn giản Chất liệu len mềm mại co giãn tốt , thoáng mát Thiết kế thời trang phù hợp xu hướng hiện nay Kiểu dáng đa phong cách Đường may tinh tế sắc sảo Áo len được thiết kế vẻ đẹp trẻ trung năng động nhưng không kém phần cá tính. Áo được thiết kế đẹp, chuẩn form, đường may sắc xảo, vải thổ cẩm dày, mịn, thấm hút mồ hôi tạo sự thoải mái khi mặc! Dễ dàng phối trang phục , thích hợp đi chơi đi làm đi dạo phố Thích hợp cho sự kết hợp với quần jean, tây!', 3),
(13, 'Áo len Gile phối chân váy', 250000, 'ao-len-5.jpg', 10, 'Áo len Gile vintage nâu đơn giản Chất liệu len mềm mại co giãn tốt , thoáng mát Thiết kế thời trang phù hợp xu hướng hiện nay Kiểu dáng đa phong cách Đường may tinh tế sắc sảo Áo len được thiết kế vẻ đẹp trẻ trung năng động nhưng không kém phần cá tính. Áo được thiết kế đẹp, chuẩn form, đường may sắc xảo, vải thổ cẩm dày, mịn, thấm hút mồ hôi tạo sự thoải mái khi mặc! Dễ dàng phối trang phục , thích hợp đi chơi đi làm đi dạo phố Thích hợp cho sự kết hợp với quần jean, tây!', 3),
(14, 'Quần tây kaki màu nâu suông', 199000, 'quan-tay-1.jpg', 12, 'Quần tây kaki màu nâu suông Chất liệu kaki mềm mại co giãn tốt , thoáng mát Thiết kế thời trang phù hợp xu hướng hiện nay Kiểu dáng đa phong cách Đường may tinh tế sắc sảo Quần kaki được thiết kế vẻ đẹp trẻ trung năng động nhưng không kém phần cá tính. Quần được thiết kế đẹp, chuẩn form, đường may sắc xảo, chất kaki dày, mịn, thấm hút mồ hôi tạo sự thoải mái khi mặc! Dễ dàng phối trang phục , thích hợp đi chơi đi làm đi dạo phố Thích hợp cho sự kết hợp với áo thun, áo sơ mi, áo len!', 4),
(15, 'Quần tây dáng rộng công sở', 250000, 'quan-tay-2.jpg', 12, 'Quần tây dáng rộng công sở Chất liệu mềm mại co giãn tốt , thoáng mát Thiết kế thời trang phù hợp xu hướng hiện nay Kiểu dáng đa phong cách Đường may tinh tế sắc sảo Quần được thiết kế vẻ đẹp trẻ trung năng động nhưng không kém phần cá tính. Quần được thiết kế đẹp, chuẩn form, đường may sắc xảo, chất dày, mịn, thấm hút mồ hôi tạo sự thoải mái khi mặc! Dễ dàng phối trang phục , thích hợp đi chơi đi làm đi dạo phố Thích hợp cho sự kết hợp với áo thun, áo sơ mi, áo len!', 4),
(16, 'Quần tây baggy lưng cao', 300000, 'quan-tay-3.jpg', 20, 'Quần tây baggy màu đen Chất liệu mềm mại co giãn tốt , thoáng mát Thiết kế thời trang phù hợp xu hướng hiện nay Kiểu dáng đa phong cách Đường may tinh tế sắc sảo Quần được thiết kế vẻ đẹp trẻ trung năng động nhưng không kém phần cá tính. Quần được thiết kế đẹp, chuẩn form, đường may sắc xảo, chất dày, mịn, thấm hút mồ hôi tạo sự thoải mái khi mặc! Dễ dàng phối trang phục , thích hợp đi chơi đi làm đi dạo phố Thích hợp cho sự kết hợp với áo thun, áo sơ mi, áo len!', 4),
(17, 'Quần tây nữ ống rộng suông dáng rũ', 200000, 'quan-tay-4.jpg', 10, 'Quần tây nữ ống rộng suông dáng rũ Chất liệu mềm mại co giãn tốt , thoáng mát Thiết kế thời trang phù hợp xu hướng hiện nay Kiểu dáng đa phong cách Đường may tinh tế sắc sảo Quần được thiết kế vẻ đẹp trẻ trung năng động nhưng không kém phần cá tính. Quần được thiết kế đẹp, chuẩn form, đường may sắc xảo, chất dày, mịn, thấm hút mồ hôi tạo sự thoải mái khi mặc! Dễ dàng phối trang phục , thích hợp đi chơi đi làm đi dạo phố Thích hợp cho sự kết hợp với áo thun, áo sơ mi, áo len!', 4),
(18, 'Quần Jeans Ống Rộng Đen', 200000, 'quan-jeans-1.jpg', 5, 'Quần Jeans Ống Rộng Đen - Quần Ống Rộng Nữ Dáng Suông Jeans Lưng Cao Ulzzang,dễ phối đồ Chất liệu mềm mịn, thấm hút mồ hôi Dễ dàng phối hợp với áo thun, áo croptop, áo sơ mi!', 5),
(19, 'Quần Jeans Nữ Ống Suông Lưng Cao', 300000, 'quan-jeans-2.png', 5, 'Quần jean nữ ống suông lưng cao mẫu mới năm 2022 Chất liệu mềm mịn, thấm hút mồ hôi Dễ dàng phối hợp với áo thun, áo croptop, áo sơ mi!', 5),
(20, 'Quần Jeans Nữ Lưng Cao', 200000, 'quan-jeans-3.jpg', 5, 'Quần jean nữ lưng cao là một trong những mẫu quần vô cùng tôn dáng. Với chiếc quần này, các chị em có thể khéo léo khoe được vòng eo thon thả. Quần jean nữ lưng cao dáng dài có thể sơ – vin cùng áo sơ mi, mang đến nét hiện đại, trẻ trung và lịch sự. Quần jean nữ lưng cao dáng ngắn có thể phối cùng áo thun, là trang phục dạo phố cực chuẩn cho những chị em yêu thích phong cách thoải mái, năng động. ', 5),
(21, 'Quần Jeans Lưng Cao Phong Cách Retro', 250000, 'quan-jeans-4.jpg', 5, 'Quần Jean Lưng Cao Ống Rộng Độc Đáo Phong Cách Retro Hàn Quốc Chất liệu mềm mịn, thấm hút mồ hôi Dễ dàng phối hợp với áo thun, áo croptop, áo sơ mi!', 5),
(22, 'Quần Jeans Ống Loe Xẻ Gối', 200000, 'quan-jeans-5.jpg', 12, 'Quần Jean Ống Loe Xẻ Gấu Lưng Cao Phong Cách Retro Thời Trang Cho Nữ Chất liệu mềm mịn, thấm hút mồ hôi Dễ dàng phối hợp với áo thun, áo croptop, áo sơ mi!', 5),
(23, 'Quần Jeans Ống Loe Phong Cách Hàn Quốc', 300000, 'quan-jeans-6.jpg', 5, 'Quần bò nữ quần jeans ống loe cạp cao phong cách hàn quốc ulzzang Chất liệu mềm mịn, thấm hút mồ hôi Dễ dàng phối hợp với áo thun, áo croptop, áo sơ mi!', 5),
(24, 'Quần Jeans Loe Xước Lai Cá Tính', 290000, 'quan-jeans-7.jpg', 12, 'Quần jean nữ ống loe lưng cao rách xước lai cá tính Chất liệu mềm mịn, thấm hút mồ hôi Dễ dàng phối hợp với áo thun, áo croptop, áo sơ mi!', 5),
(25, 'Quần Short Nữ Vintage', 300000, 'quan-short-1.jpg', 10, 'Quần Short Nữ Cao Cấp Vintage Phong Cách Quần Short Nữ 2022 Khoác Quần Short Nữ Dạo Phố Nữ Quần Short Cổ Điển', 6),
(26, 'Quần Short Nữ', 250000, 'quan-short-2.jpg', 5, 'Quần Short Nữ Vải Nhung Thời Trang Cá Tính\r\nChất Liệu Mềm Mịn Phù Hợp Dạo Phố Đi Chơi', 6),
(27, 'Quần Short Vintage Sọc', 270000, 'quan-short-3.jpg', 0, 'Phụ Nữ Mùa Hè Phong Cách Anh Giữa Eo Uốn Quần Short Vintage Sọc Quần Short Cách Học Thời Trang Dạo Phố Thẳng Quần Áo', 6),
(28, 'Quần Short Jeans Ngố', 99000, 'quan-short-4.jpg', 0, 'Quần Short Jean,Quần Ngố Bò Nút Hông Ulzzang short jean nữ ống rộng nữ chất bò trơn mềm xinh xắn', 6),
(29, 'Quần Short Nữ Vải Nhung', 200000, 'quan-short-5.jpg', 5, 'Quần Short Nữ vải Nhung Thời Trang Cá Tính\r\nChất Liệu Mềm Mịn Xinh Xắn Phù Hợp Dạo Phố Đi Chơi Mát Mẻ', 6),
(30, 'Quần Short Vintage Sọc', 250000, 'quan-short-6.jpg', 5, 'Phụ Nữ Mùa Hè Phong Cách Anh Giữa Eo Uốn Quần Short Vintage Sọc Quần Short Cách Học Thời Trang Dạo Phố Thẳng Quần Áo', 6),
(31, 'Quần Short Jean Ngố', 99000, 'quan-short-7.jpg', 0, 'Quần Short Jean,Quần Ngố Bò Nút Hông Ulzzang short jean nữ ống rộng nữ chất bò trơn mềm xinh xắn', 6),
(32, 'Quần KaKi Nữ Vintage', 190000, 'quan-kaki-1.jpg', 5, 'Quần KaKi Nữ Vintage Quần KaKi Dáng Suông Vải Đẹp Mịn Phong Cách Thời Trang trẻ Trung Năng Động Phù Hợp Công Sở Đi Chơi Đi Học', 7),
(33, 'Quần KaKi Phiên Bản Hàn Quốc', 150000, 'quan-kaki-2.jpg', 5, 'Quần KaKi Phiên Bản Hàn Quốc Nhỏ Gọn Đơn Giản Vải Đẹp Mịn Phong Cách Thời Trang trẻ Trung Năng Động Phù Hợp Công Sở Đi Chơi Đi Học', 7),
(34, 'Quần KaKi Nữ Nâu Basic', 200000, 'quan-kaki-3.jpg', 5, 'Quần Ống Suông Nữ, Quần KaKi Nữ Ống Rộng Lưng Cao Có Khóa Kéo Hàng Cao Cấp Đủ Size Màu Cơ Bản Dễ Phối Đồ.', 7),
(35, 'Quần KaKi Nữ', 290000, 'quan-kaki-4.jpg', 10, 'Quần Kaki Nữ Cao Cấp BOO Dáng Rộng Ống Suông Cạp Cao Phối Túi Hộp Hai Bên Cá Tính Năng Động', 7),
(36, 'Tất vintage nữ', 39000, 'tat-1.jpg', 0, 'Tất vintage nữ, tất ulzzang phong cách Hàn Quốc. Nhiều màu sắc đẹp.\r\nTất dày cổ cao thích hợp cho các cô nàng thích phong cách vintage.', 8),
(37, 'Tất vintage giá rẻ', 29000, 'tat-2.jpg', 2, 'Tất chất len tăm đanh, mịn đẹp.\r\nLựa chọn phù hợp cho các bạn thích phong cách vintage.', 8),
(38, 'Tất len vintage', 29000, 'tat-3.jpg', 2, 'Tất chất len tăm đanh, mịn đẹp.\r\nLựa chọn phù hợp cho các bạn thích phong cách vintage.', 8),
(39, 'Tất vớ vintage', 29000, 'tat-4.jpg', 1, 'Tất chất len tăm đanh, mịn đẹp.\r\nLựa chọn phù hợp cho các bạn thích phong cách vintage.', 8),
(40, 'Tất vintage đủ màu', 19000, 'tat-5.jpg', 0, 'Tất chất len tăm đanh, mịn đẹp.\r\nLựa chọn phù hợp cho các bạn thích phong cách vintage.', 8),
(41, 'Tất sọc vintage', 29000, 'tat-6.jpg', 5, 'Tất chất len tăm đanh, mịn đẹp.\r\nLựa chọn phù hợp cho các bạn thích phong cách vintage.', 8),
(42, 'Tất cổ cao vintage', 29000, 'tat-7.jpg', 2, 'Tất chất len tăm đanh, mịn đẹp.\r\nLựa chọn phù hợp cho các bạn thích phong cách vintage.', 8),
(43, 'Tất thổ cẩm vintage', 39000, 'tat-8.jpg', 2, 'Tất chất len tăm đanh, mịn đẹp.\r\nLựa chọn phù hợp cho các bạn thích phong cách vintage.', 8),
(44, 'Tất pastel vintage', 29000, 'tat-9.jpg', 5, 'Tất chất len tăm đanh, mịn đẹp.\r\nLựa chọn phù hợp cho các bạn thích phong cách vintage.', 8),
(45, 'Giày-Dép vintage', 99000, 'dep-1.jpg', 0, 'Dáng giày mũi tròn vintage rất phổ biến và hot trendy trong thời gian gần đây, kiểu dáng mới mẻ bắt mắt, thời trang rất tinh tế 😋 Phần quai ngang của em giày này được đính một hàng hoa cúc hoạ mi , đáng yêu và dễ thương vô cùngg, như một cánh đồng hoa hoạ mi được đem gắn vào đôi dép, mang lên chân duyên dáng lại rất tươi trẻ . Giày có ba màu : Trắng/ Đen/ Nâu, ba màu basic nhưng rất Tây ,không bao giờ lỗi mốt, giúp đôi giày trở nên hấp dẫn hơn rất nhiều 💓💓\r\nGọi là giày/ hay dép đều được nha các nàng, giày đế xuồng hoặc dép đều được , dễ đi lại dễ mix đồ nữa 🤩\r\nĐế dẻo gập lại được, đi được với tất cả địa hình luôn.\r\n', 9),
(46, 'Giày - Dép vintage', 100000, 'dep-2.jpg', 5, 'Dáng giày mũi tròn vintage rất phổ biến và hot trendy trong thời gian gần đây, kiểu dáng mới mẻ bắt mắt, thời trang rất tinh tế 😋 Phần quai ngang của em giày này được đính một hàng hoa cúc hoạ mi , đáng yêu và dễ thương vô cùngg, như một cánh đồng hoa hoạ mi được đem gắn vào đôi dép, mang lên chân duyên dáng lại rất tươi trẻ . Giày có ba màu : Trắng/ Đen/ Nâu, ba màu basic nhưng rất Tây ,không bao giờ lỗi mốt, giúp đôi giày trở nên hấp dẫn hơn rất nhiều 💓💓\r\nGọi là giày/ hay dép đều được nha các nàng, giày đế xuồng hoặc dép đều được , dễ đi lại dễ mix đồ nữa 🤩\r\nĐế dẻo gập lại được, đi được với tất cả địa hình luôn.\r\n', 9),
(47, 'Giày - Dép vintage', 120000, 'dep-3.jpg', 8, 'Dáng giày mũi tròn vintage rất phổ biến và hot trendy trong thời gian gần đây, kiểu dáng mới mẻ bắt mắt, thời trang rất tinh tế 😋 Phần quai ngang của em giày này được đính một hàng hoa cúc hoạ mi , đáng yêu và dễ thương vô cùngg, như một cánh đồng hoa hoạ mi được đem gắn vào đôi dép, mang lên chân duyên dáng lại rất tươi trẻ . Giày có ba màu : Trắng/ Đen/ Nâu, ba màu basic nhưng rất Tây ,không bao giờ lỗi mốt, giúp đôi giày trở nên hấp dẫn hơn rất nhiều 💓💓\r\nGọi là giày/ hay dép đều được nha các nàng, giày đế xuồng hoặc dép đều được , dễ đi lại dễ mix đồ nữa 🤩\r\nĐế dẻo gập lại được, đi được với tất cả địa hình luôn.\r\n', 9),
(48, 'Giày - Dép vintage', 160000, 'dep-4.jpg', 3, 'Dáng giày mũi tròn vintage rất phổ biến và hot trendy trong thời gian gần đây, kiểu dáng mới mẻ bắt mắt, thời trang rất tinh tế 😋 Phần quai ngang của em giày này được đính một hàng hoa cúc hoạ mi , đáng yêu và dễ thương vô cùngg, như một cánh đồng hoa hoạ mi được đem gắn vào đôi dép, mang lên chân duyên dáng lại rất tươi trẻ . Giày có ba màu : Trắng/ Đen/ Nâu, ba màu basic nhưng rất Tây ,không bao giờ lỗi mốt, giúp đôi giày trở nên hấp dẫn hơn rất nhiều 💓💓\r\nGọi là giày/ hay dép đều được nha các nàng, giày đế xuồng hoặc dép đều được , dễ đi lại dễ mix đồ nữa 🤩\r\nĐế dẻo gập lại được, đi được với tất cả địa hình luôn.\r\n', 9),
(49, 'Giày - Dép vintage', 160000, 'dep-5.jpg', 0, 'Dáng giày mũi tròn vintage rất phổ biến và hot trendy trong thời gian gần đây, kiểu dáng mới mẻ bắt mắt, thời trang rất tinh tế 😋 Phần quai ngang của em giày này được đính một hàng hoa cúc hoạ mi , đáng yêu và dễ thương vô cùngg, như một cánh đồng hoa hoạ mi được đem gắn vào đôi dép, mang lên chân duyên dáng lại rất tươi trẻ . Giày có ba màu : Trắng/ Đen/ Nâu, ba màu basic nhưng rất Tây ,không bao giờ lỗi mốt, giúp đôi giày trở nên hấp dẫn hơn rất nhiều 💓💓\r\nGọi là giày/ hay dép đều được nha các nàng, giày đế xuồng hoặc dép đều được , dễ đi lại dễ mix đồ nữa 🤩\r\nĐế dẻo gập lại được, đi được với tất cả địa hình luôn.\r\n', 9),
(50, 'Giày - Dép vintage', 140000, 'dep-6.jpg', 4, 'Dáng giày mũi tròn vintage rất phổ biến và hot trendy trong thời gian gần đây, kiểu dáng mới mẻ bắt mắt, thời trang rất tinh tế 😋 Phần quai ngang của em giày này được đính một hàng hoa cúc hoạ mi , đáng yêu và dễ thương vô cùngg, như một cánh đồng hoa hoạ mi được đem gắn vào đôi dép, mang lên chân duyên dáng lại rất tươi trẻ . Giày có ba màu : Trắng/ Đen/ Nâu, ba màu basic nhưng rất Tây ,không bao giờ lỗi mốt, giúp đôi giày trở nên hấp dẫn hơn rất nhiều 💓💓\r\nGọi là giày/ hay dép đều được nha các nàng, giày đế xuồng hoặc dép đều được , dễ đi lại dễ mix đồ nữa 🤩\r\nĐế dẻo gập lại được, đi được với tất cả địa hình luôn.\r\n', 9),
(51, 'Áo khoác vintage', 200000, 'khoac-1.jpg', 2, 'Áo khoác Vintage vải nỉ bông cotton, đẹp, không co rút, Hình in không bong tróc, đặc biệt không những giúp bạn giữ ấm trong mùa lạnh mà còn có thể chống nắng, chống gió, chống bụi, chống rét, chống tia UV cực tốt, rất tiện lợi nhé!!!', 10),
(52, 'Áo khoác vintage', 199000, 'khoac-2.jpg', 0, 'Áo khoác Vintage vải nỉ bông cotton, đẹp, không co rút, Hình in không bong tróc, đặc biệt không những giúp bạn giữ ấm trong mùa lạnh mà còn có thể chống nắng, chống gió, chống bụi, chống rét, chống tia UV cực tốt, rất tiện lợi nhé!!!', 10),
(53, 'Áo khoác vintage', 250000, 'khoac-3.jpg', 15, 'Áo khoác Vintage vải nỉ bông cotton, đẹp, không co rút, Hình in không bong tróc, đặc biệt không những giúp bạn giữ ấm trong mùa lạnh mà còn có thể chống nắng, chống gió, chống bụi, chống rét, chống tia UV cực tốt, rất tiện lợi nhé!!!', 10),
(54, 'Áo khoác vintage', 260000, 'khoac-4.jpg', 5, 'Áo khoác Vintage vải nỉ bông cotton, đẹp, không co rút, Hình in không bong tróc, đặc biệt không những giúp bạn giữ ấm trong mùa lạnh mà còn có thể chống nắng, chống gió, chống bụi, chống rét, chống tia UV cực tốt, rất tiện lợi nhé!!!', 10),
(55, 'Áo khoác vintage', 300000, 'khoac-5.jpg', 6, 'Áo khoác Vintage vải nỉ bông cotton, đẹp, không co rút, Hình in không bong tróc, đặc biệt không những giúp bạn giữ ấm trong mùa lạnh mà còn có thể chống nắng, chống gió, chống bụi, chống rét, chống tia UV cực tốt, rất tiện lợi nhé!!!', 10),
(56, 'Áo khoác vintage', 240000, 'khoac-6.jpg', 10, 'Áo khoác Vintage vải nỉ bông cotton, đẹp, không co rút, Hình in không bong tróc, đặc biệt không những giúp bạn giữ ấm trong mùa lạnh mà còn có thể chống nắng, chống gió, chống bụi, chống rét, chống tia UV cực tốt, rất tiện lợi nhé!!!', 10),
(57, 'Áo khoác vintage', 279000, 'khoac-7.jpg', 12, 'Áo khoác Vintage vải nỉ bông cotton, đẹp, không co rút, Hình in không bong tróc, đặc biệt không những giúp bạn giữ ấm trong mùa lạnh mà còn có thể chống nắng, chống gió, chống bụi, chống rét, chống tia UV cực tốt, rất tiện lợi nhé!!!', 10),
(58, 'Áo khoác vintage', 280000, 'khoac-8.jpg', 7, 'Áo khoác Vintage vải nỉ bông cotton, đẹp, không co rút, Hình in không bong tróc, đặc biệt không những giúp bạn giữ ấm trong mùa lạnh mà còn có thể chống nắng, chống gió, chống bụi, chống rét, chống tia UV cực tốt, rất tiện lợi nhé!!!', 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `id_giohang` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `hoten` varchar(255) NOT NULL,
  `sdt` varchar(15) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `ngaydat` date NOT NULL DEFAULT current_timestamp(),
  `trangthai` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `giohang`
--

INSERT INTO `giohang` (`id_giohang`, `username`, `hoten`, `sdt`, `diachi`, `ngaydat`, `trangthai`) VALUES
(1, 'hi', 'xuyen', '0123', 'xuyen', '2022-05-17', 0),
(2, '', 'xuyen', '0123', 'mmmm', '2022-06-21', 0),
(3, '', 'xuyen', '0123', 'mmmm', '2022-06-21', 0),
(4, '', 'xuyen', '5555', 'rr', '2022-06-21', 0),
(5, 'hi', 'xuyen', '5555', 'rr', '2022-06-21', 0),
(6, 'hi', 'xuyen', '5555', 'rr', '2022-06-21', 0),
(7, 'hi', 'v', '111', 'ưeee', '2022-06-21', 0),
(8, 'hi', 'v', '111', 'ưeee', '2022-06-21', 0),
(9, 'hi', 'dd', '11111111', 'qqqqqqqq', '2022-06-21', 0),
(10, 'hi', '111', '1111', 'www', '2022-06-21', 0),
(11, '19d', 'e', '0123', 'e', '2022-06-21', 0),
(12, 'hi', 'ư', '0000', 'ddd', '2022-06-21', 0),
(13, 'hi', 'zz', '1', 'zzzz', '2022-06-21', 0),
(14, '19d', 'Nhung Nhung', '111', '1111', '2022-06-21', 0),
(15, '19d', 'Đào Đào', '2222', '2222', '2022-06-21', 0),
(16, '19d', 'huuu', '8888', '4444', '2022-06-22', 0),
(17, 'hi', 'xuyen', '23652', 'phú tài', '2022-06-24', 0),
(18, 'hi', 'xuyen', '0325698545', 'phú tài', '2022-06-24', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `id_loaisanpham` int(11) NOT NULL,
  `ten_loaisanpham` varchar(255) NOT NULL,
  `id_loailoaisanpham` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loaisanpham`
--

INSERT INTO `loaisanpham` (`id_loaisanpham`, `ten_loaisanpham`, `id_loailoaisanpham`) VALUES
(1, 'Áo Sơ Mi', 1),
(2, 'Áo Thun', 1),
(3, 'Áo Len', 1),
(4, 'Quần Tây', 0),
(5, 'Quần Jeans', 0),
(6, 'Quần Short', 0),
(7, 'Quần Kaki', 0),
(8, 'Tất', 2),
(9, 'Giày-Dép', 2),
(10, 'Áo Khoác', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `maNV` int(11) NOT NULL,
  `tenNV` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `hinhanh` varchar(255) NOT NULL,
  `linkfb` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`maNV`, `tenNV`, `facebook`, `email`, `hinhanh`, `linkfb`) VALUES
(1, 'Trần Thị Kim Xuyên', 'Trần Thị Kim Xuyên', 'tranxuyen376@gmail.com', 'xuyenne.jpg', 'https://www.facebook.com/asari.tran.568'),
(2, 'Võ Thị Nguyệt Nga', 'Võ Thị Nguyệt Nga', 'vothinguyetnga@gmail.com', 'ngane.png', 'https://www.facebook.com/nnguyet.ngaa.02.02'),
(3, 'Nguyễn Hồng Bảo Lâm', 'Nguyễn Hồng Bảo Lâm', 'nguyenbaolam@gmail.com', 'lamne.jpg', 'https://www.facebook.com/baolam.nguyen.5245961');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `price`
--

CREATE TABLE `price` (
  `id_rangePrice` int(11) NOT NULL,
  `rangePrice` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `price`
--

INSERT INTO `price` (`id_rangePrice`, `rangePrice`, `status`) VALUES
(1, '0-100 nghìn', 1),
(2, '100-200 nghìn', 1),
(3, '200-300 nghìn', 1),
(4, '300-400 nghìn', 1),
(5, 'Từ 400 nghìn', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `quyen` varchar(50) NOT NULL DEFAULT 'Khách hàng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `quyen`) VALUES
(1, 'xuyen', 'thỹuyen', 'thuythu@gmail.com', 'Khách hàng'),
(2, 'thuy', 'thuy', 'thuy@domain', 'Khách hàng'),
(3, 'hi', 'hihi', 'hihuhu', 'Khách hàng'),
(4, 'hihiujiklll', '125487', 'mmmmm', 'Khách hàng'),
(5, 'ttt', 'ttt', 'ttt', 'Khách hàng'),
(6, 'ssss', 'ssss', 'ssss', 'Khách hàng'),
(7, 'xxx', 'xxxx', 'xxxx', 'Khách hàng'),
(8, 'thuy222', '222', 'ttt', 'Admin');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietgiohang`
--
ALTER TABLE `chitietgiohang`
  ADD PRIMARY KEY (`id_chitietgiohang`);

--
-- Chỉ mục cho bảng `chitietsanpham`
--
ALTER TABLE `chitietsanpham`
  ADD PRIMARY KEY (`id_sanpham`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`id_giohang`);

--
-- Chỉ mục cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`id_loaisanpham`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`maNV`);

--
-- Chỉ mục cho bảng `price`
--
ALTER TABLE `price`
  ADD PRIMARY KEY (`id_rangePrice`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitietgiohang`
--
ALTER TABLE `chitietgiohang`
  MODIFY `id_chitietgiohang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `chitietsanpham`
--
ALTER TABLE `chitietsanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `id_giohang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `id_loaisanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `maNV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
