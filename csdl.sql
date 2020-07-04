SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `ketqua` (
  `MaKQ` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `MaMH` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `MaSV` int(20) NOT NULL,
  `Diem` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ketqua`
--

INSERT INTO `ketqua` (`MaKQ`, `MaMH`, `MaSV`, `Diem`) VALUES
('1', 'TinHocCoBan', 4, 4.5),
('2', 'ToanRoiRac', 6, 5.5),
('3', 'Xacsuat', 1, 6.5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoa`
--

CREATE TABLE `khoa` (
  `MaKhoa` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `TenKhoa` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `NamThanhLap` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khoa`
--

INSERT INTO `khoa` (`MaKhoa`, `TenKhoa`, `NamThanhLap`) VALUES
('CNTT', N'Cong Nghe Thong Tin', 2000),
('HoaHoc', N'Hoá Học', 2002),
('VatLy', N'vat ly', 2001);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lop`
--

CREATE TABLE `lop` (
  `MaLop` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `TenLop` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `MaKhoa` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lop`
--

INSERT INTO `lop` (`MaLop`, `TenLop`, `MaKhoa`) VALUES
('CNTTA', N'cong nghe thong tin ', 'CNTT'),
('CNTTB', N'cong nghe thong tin ', 'CNTT'),
('CNTTC', N'cong nghe thong tin ', 'CNTT'),
('VatLyA', N'vat ly A', 'VatLy'),
('VatLyB', N'vat ly B', 'VatLy'),
('VatLyC', N'vat ly C', 'VatLy');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `monhoc`
--

CREATE TABLE `monhoc` (
  `MaMH` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `TenMon` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `SoTC` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `monhoc`
--

INSERT INTO `monhoc` (`MaMH`, `TenMon`, `SoTC`) VALUES
('TinHocCoBan', N'tin hoc co ban', 3),
('ToanRoiRac', N'toan roi rac', 1),
('Xacsuat', N'xac xuat', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sinhvien`
--

CREATE TABLE `sinhvien` (
  `MaSV` int(20) NOT NULL,
  `HoTen` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `NgaySinh` date NOT NULL,
  `Email` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `MaLop` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sinhvien`
--

INSERT INTO `sinhvien` (`MaSV`, `HoTen`, `NgaySinh`, `Email`, `MaLop`) VALUES
(1, 'Nguyen To', '2020-07-01', 'nguyenvanteo@gmail.c', 'CNTTA'),
(2, N'Nguyen T', '2020-07-02', 'nguyenvanti@gmail.co', 'CNTTA'),
(3, N'Nguyen Th', '2020-07-10', 'nguyenvantho@gmail.c', 'CNTTA'),
(4, N'Nguyen A', '2020-07-22', 'nguyenvantho@gmail.c', 'CNTTB'),
(5, N'Nguyen B', '2020-07-09', 'nguyenvanb@gmail.com', 'CNTTB'),
(6, N'Nguyen C', '2020-07-22', 'nguyenvanc@gmail.com', 'CNTTB'),
(7, N'Nguyen Too', '2020-07-26', 'nguyenvanteo@gmail.c', 'CNTTC');
