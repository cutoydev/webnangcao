-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 09, 2023 lúc 12:07 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `do_an`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `caid` int(10) NOT NULL,
  `caname` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`caid`, `caname`) VALUES
(1, 'Tin Tức\r\n'),
(2, 'Xã hội'),
(3, 'Giải trí');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `cid` int(10) NOT NULL,
  `nid` int(10) NOT NULL,
  `cauthor` varchar(100) NOT NULL,
  `c_content` varchar(300) NOT NULL,
  `c_date` date NOT NULL DEFAULT current_timestamp(),
  `crate` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `new`
--

CREATE TABLE `new` (
  `nid` int(10) NOT NULL,
  `ntitle` varchar(100) NOT NULL,
  `ncontent` text NOT NULL,
  `ndate` datetime NOT NULL DEFAULT current_timestamp(),
  `caid` int(10) NOT NULL,
  `nauthor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `new`
--

INSERT INTO `new` (`nid`, `ntitle`, `ncontent`, `ndate`, `caid`, `nauthor`) VALUES
(1, 'Xin chào', 'I\'ve seen the world, done it all, had my cake now\r\nDiamonds, brilliant, and Bel Air now\r\nHot summer nights, mid-July\r\nWhen you and I were forever wild\r\nThe crazy days, city lights\r\nThe way you\'d play with me like a child\r\nWill you still love me when I\'m no longer young and beautiful?\r\nWill you still love me when I got nothing but my aching soul?\r\nI know you will, I know you will, I know that you will\r\nWill you still love me when I\'m no longer beautiful?\r\nI\'ve seen the world, lit it up as my stage now\r\nChanneling angels in the new age now\r\nHot summer days, rock and roll\r\nThe way you\'d play for me at your show\r\nAnd all the ways I got to know\r\nYour pretty face and electric soul\r\nWill you still love me when I\'m no longer young and beautiful?\r\nWill you still love me when I got nothing but my aching soul?\r\nI know you will, I know you will, I know that you will\r\nWill you still love me when I\'m no longer beautiful?\r\nDear Lord, when I get to Heaven\r\nPlease let me bring my man\r\nWhen he comes, tell me that you\'ll let him in\r\nFather, tell me if you can\r\nAll that grace, all that body\r\nAll that face makes me wanna party\r\nHe\'s my sun, he makes me shine like diamonds\r\nWill you still love me when I\'m no longer young and beautiful?\r\nWill you still love me when I got nothing but my aching soul?\r\nI know you will, I know you will, I know that you will\r\nWill you still love me when I\'m no longer beautiful?\r\nWill you still love me when I\'m no longer beautiful?\r\nWill you still love me when I\'m not young and beautiful?', '2023-12-08 20:05:33', 1, 'Hợp đẹp trai'),
(2, 'Thất lạc cõi người', '- Quyển sổ ghi chép thứ nhất\r\n\r\nYozo từ nhỏ đã cảm thấy không thể nào hiểu được con người. Cậu buộc phải làm trò hề để có thể quan hệ với người khác và cũng để nhằm quên đi việc bị gia nhân xâm hại thuở nhỏ.\r\n\r\n- Quyển sổ ghi chép thứ hai\r\n\r\nYozo trở nên cực kì nhạy cảm với những ai có thể bóc mẽ màn giả vờ của cậu. Sau khi quen với Horiki, một sinh viên cùng học ở trường mỹ thuật tư thục, cậu bắt đầu sao nhãng việc học mà rượu chè, hút hít và mại dâm. Đỉnh điểm, cậu quan hệ với một phụ nữ đã có chồng và cùng tự sát đôi với cô ta. Nhưng người phụ nữ thì chết, chỉ Yozo được cứu sống, mang trên mình mặc cảm tội lỗi.\r\n\r\n- Quyển sổ ghi chép thứ ba\r\n\r\nYozo bị đuổi học khỏi trường đại học và sau đó, sống nhờ nhà một người bạn của cha cậu. Một thời gian sau, cậu sống với một bà mẹ đơn thân là chỗ quen biết của Horiki, nhưng cũng không lâu sau lại đến sống với một madam quán bar. Về sau, Yozo yêu thương và cưới một cô gái trẻ và ngây thơ. Nhờ cô mà trong một thời gian, Yozo tu chí làm việc là một hoạ sĩ truyện tranh và vẽ minh hoạ. Tuy nhiên, Horiki lại xuất hiện và Yozo lại ngựa quen đường cũ. Qua thời gian, Yozo nghiện rượu và ma túy. Cậu bị đưa vào viện tâm thần và sau đó được đưa về nhà một người phụ nữ do anh cả cậu sắp xếp. Chuỗi ngày như ác mộng của cậu tiếp tục khi quanh năm bị người phụ nữ đó lạm dụng nhưng bây giờ cậu không còn thấy vui hay buồn. Tóc Yozao trở nên bạc như người đã qua 40 dù mới 27 tuổi.', '2023-12-08 20:26:01', 3, 'Hợp nè'),
(3, 'đi chơi sợ ma', 'đừng hỏi tại sao', '2023-12-08 20:26:49', 3, 'vẫn là Hợp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `uid` int(10) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `upassword` varchar(50) NOT NULL,
  `urole` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`uid`, `uname`, `upassword`, `urole`) VALUES
(1, 'TranVanQuyet', '123456', b'0'),
(2, 'hophiphip', '231311', b'1'),
(4, 'NguyenPhucHop', '123456', b'0'),
(5, 'NguyenVietDuyAnh', '654321', b'0'),
(6, 'PhanHuuTrung', '567890', b'0');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`caid`),
  ADD KEY `caid` (`caid`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`cid`);

--
-- Chỉ mục cho bảng `new`
--
ALTER TABLE `new`
  ADD PRIMARY KEY (`nid`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `new`
--
ALTER TABLE `new`
  MODIFY `nid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
