-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2022 at 06:08 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `address_id` int(10) NOT NULL,
  `address` varchar(225) NOT NULL,
  `is_default` int(2) NOT NULL,
  `customer_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`address_id`, `address`, `is_default`, `customer_id`) VALUES
(1, 'ĐH BK, TP HCM, VN', 1, 6),
(2, 'sao kim, hệ mặt trời', 0, 6),
(3, 'Hà Nội, VN', 0, 7),
(4, 'sao thổ, hệ mặt trời', 0, 7);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `user_name`, `password`) VALUES
(1, 'admin1', '1234'),
(2, 'admin2', 'abcd'),
(3, 'admin3', '123abc');

-- --------------------------------------------------------

--
-- Table structure for table `applyfor`
--

CREATE TABLE `applyfor` (
  `promotion_id` int(10) NOT NULL,
  `book_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int(10) NOT NULL,
  `name` varchar(225) NOT NULL,
  `description` text NOT NULL,
  `price` double NOT NULL,
  `author` varchar(50) NOT NULL,
  `cover_image` varchar(225) NOT NULL,
  `category_id` int(10) NOT NULL,
  `publisher` text NOT NULL DEFAULT 'Kim Đồng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `name`, `description`, `price`, `author`, `cover_image`, `category_id`, `publisher`) VALUES
(1, 'Cây Brooklyn Xanh Biếc', 'Ngay từ khi chập chững bước chân đến thế giới, Francie Nolan đã được định sẵn sẽ phải trở thành một thiếu nữ cứng rắn, bởi vì lớn lên trong khu ổ chuột Williamsburg ở Brooklyn, New York đòi hỏi con người ta phải luôn dũng cảm, khôn ngoan và mạnh mẽ. Thường bị hàng xóm khinh miệt vì những hành vi thất thường và lập dị của gia đình mình – chẳng hạn như bố cô, Johnny thích rượu và dì Sissy liên tục kết hôn nối tiếp nhau mà không ly hôn với chồng trước – không ai, kể cả là Francie, có thể nói rằng cuộc sống của gia đình Nolan thiếu kịch tính. Với những bước ngoặt choáng ngợp, đau lòng nhưng cũng đầy thăng hoa, những trải nghiệm hằng ngày của gia đình Nolan hiện lên chân thật, nguyên bản và là mối dây dịu dàng buộc những thành viên trong gia đình lại với nhau.', 269000, 'Betty Smith', 'https://cdn0.fahasa.com/media/catalog/product/8/9/8936066694810.jpg', 1, 'Kim đồng'),
(2, 'Hai Vạn Dặm Dưới Biển', 'Một con thủy quái khổng lồ bỗng nhiên xuất hiện làm điêu đứng cả ngành hàng hải.\r\n\r\nMột đoàn thám hiểm nhổ chiếc neo tàu ra khơi với nhiệm vụ tiêu diệt con quái vật ấy, dù có phải đánh đổi bằng cả mạng sống.\r\n\r\nMột chiếc tàu ngầm thoắt ẩn, thoắt hiện, cùng một vị thuyền trưởng mang trong mình lời thề sẽ không bao giờ can dự vào cuộc sống trên đất liền thêm một lần nào nữa…\r\n\r\nTất cả những bí mật sâu kín nhất của đại dương sâu thẳm, những phát minh chưa từng được biết đến, những mối nguy hiểm rình rập trong lòng biển cả… Tất cả đã quyện cùng với nhau để tạo nên một chuyến phiêu lưu li kì, hấp dẫn mà các bạn không thể bỏ qua, khi đã cầm trên tay cuốn sách “Hai vạn dặm dưới biển” của Jules Verne.', 79000, 'Jules Verne', 'https://cdn0.fahasa.com/media/catalog/product/8/9/8935244877489.jpg', 1, 'Kim đồng'),
(3, 'Không Gia Đình', 'Xuất hiện trên văn đàn từ thế kỉ 19, Không gia đình của văn hào Hector Malot là cuốn sách kinh điển về đề tài giáo dục thấm đượm hiện thực xã hội vô cùng lôi cuốn người đọc.\r\n\r\nNội dung câu chuyện nói về cuộc đời éo le của một cậu bé mồ côi Rémi, cậu được đem về nuôi tại một gia đình ở vùng Sa-va-nông. Tại đây, Rémi rất may mắn khi được mẹ nuôi Barberin thương yêu và chăm sóc như là con ruột của bà vậy. Do bị tai nạn và những vụ kiện tụng không thành công, ông Barberin vốn dĩ ngay từ đầu đã không có tình thương dành cho Remi nên đã tìm cách đem bán cậu cho ông bầu Vitalis - là chủ của một gánh xiếc rong, kể từ đó cuộc đời không gia đình của Remi bước sang một trang mới. Hai người đã đi lang thang khắp mọi miền nước Anh và Pháp trình diễn xiếc để kiếm sống, sau đó bị tù ở Anh, cuối cùng tìm thấy mẹ và em. Em bé Rémi ấy đã lớn lên trong gian khổ. Em đã chung đụng với mọi hạng người, sống khắp mọi nơi, \"Nơi thì lừa đảo, nơi thì xót thương\". Em đã lao động lấy mà sống, lúc đầu dưới quyền điều khiển của một ông già từng trải và đạo đức, cụ Vitalis, về sau thì tự lập và không những lo cho mình, còn bảo đảm việc biểu diễn và sinh sống cho cả một gánh hát rong. Đã có khi em và cả đoàn lang thang suốt mấy ngày không có chút gì trong bụng. Đã có khi em bị lụt ngầm chôn trong giếng mỏ mười mấy ngày đêm. Đã có khi em mắc oan, bị giải ra trước toà án và bị ở tù. Và cũng có khi em được nuôi nấng đàng hoàng, no ấm. Nhưng dù ở đâu, trong cảnh ngộ nào, em vẫn noi theo nếp rèn dạy của ông già Vitalis giữ phẩm chất làm người, nghĩa là ngay thẳng, gan dạ, tự trọng, thương người, ham lao động, không ngửa tay xin xỏ, không dối trá, gian giảo, nhớ ơn nghĩa, luôn luôn muốn làm người có ích.\r\n\r\nBên cạnh Rémi có chú bé nghệ sĩ Mattia khôn ngoan, linh lợi, tháo vát, tận tình với bạn, một tài hoa nghệ thuật nở sớm cộng với tấm lòng vàng, con chó Capi khôn như người và rất có nghĩa, con khỉ Joli-Cœur liến láu và đáng thương... Những con người và con vật ấy ở đây được dựng lên linh hoạt như sống, gây nhiều hứng thú cho bạn đọc nhỏ tuổi.\r\n\r\nCuối cùng em cũng tìm được gia đình thật sự của mình và sống hạnh phúc sau này.', 191000, 'Hector Malot', 'https://cdn0.fahasa.com/media/catalog/product/8/9/8935270703783.jpg', 1, 'Kim đồng'),
(4, 'Kỹ Năng Làm Việc Nhóm Của Người Nhật', 'Cuộc sống hằng ngày ở nơi làm việc là \"cuộc chiến\" tâm lý của cấp trên và nhân viên. Nhưng đứng trước các trở ngại về giao tiếp, bạn có sẵn sàng tìm cách cải thiện hay không? Nhiều người đã tự biện minh mình là người khép kín, không giỏi ăn nói... nên tham gia làm việc nhóm sẽ vô cùng khó khăn, và họ cố tình đứng ngoài các buổi hội họp và giao lưu với đồng nghiệp. Nếu cứ tiếp tục giữ tư duy như vậy, liệu bạn có thể phát triển sự nghiệp hay không? Chúng ta không nhất thiết phải trở thành một con người khác với bản chất của mình, nhưng trong vấn đề công việc, ta luôn cần ưu tiên việc kết nối tốt hơn với cấp trên, đồng nghiệp, đối tác làm ăn và các khách hàng.\r\n\r\nTác phẩm \"Kỹ năng làm việc nhóm của người Nhật\" được viết để trợ giúp những người đi làm đang loay hoay với vấn đề hòa nhập, giao tiếp và làm việc ở môi trường chuyên nghiệp. Cuốn sách cung cấp đầy đủ cho bạn:\r\n\r\n- Phương pháp giao tiếp hiệu quả nơi công sở\r\n\r\n- Kỹ năng truyền đạt thông tin dễ hiểu, không gây hiểu lầm\r\n\r\n- Kỹ năng giải quyết vấn đề đúng yêu cầu cấp trên\r\n\r\n- Kỹ năng lập kế hoạch và tổ chức công việc khoa học\r\n\r\n- Kỹ năng lắng nghe chủ động\r\n\r\n\"Kỹ năng làm việc nhóm của người Nhật\" chia sẻ những kinh nghiệm giao tiếp ở nơi có môi trường chuyên nghiệp hàng đầu thế giới, dù tính cách phổ biến của người Nhật là khép kín, ít lời, và các vị sếp ít khi truyền đạt thẳng thắn các yêu cầu của mình. Nếu như bạn có thể tận dụng tốt các bí kíp trong tác phẩm \"nhỏ nhưng có võ\" này, bạn sẽ rèn luyện được cách quan sát và thấu hiểu tốt hơn lời nói của đối phương, từ đó hành động hợp lý và cải thiện được hiệu quả công việc.', 84000, 'Hidehiko Hamada', 'https://cdn0.fahasa.com/media/catalog/product/k/y/kynanglamviecnhomcuanguoinhat_bia1.jpg', 2, 'Kim đồng'),
(5, 'Tư Duy Phản Biện', 'Tư duy phản biện là chìa khóa để bạn thoát khỏi những lối mòn trong suy nghĩ, giúp bạn giải quyết các vấn đề khó khăn một cách sáng tạo và hiệu quả hơn.\r\n\r\nCuốn sách \"Tư duy phản biện\" được viết bởi chuyên gia đào tạo Zoe McKey sẽ giúp bạn khai phá được sức mạnh trí óc của mình. Tác phẩm chứa đựng những bí quyết và chiến lược của các cá nhân thành công nhất, giúp người đọc có thể:\r\n\r\n- Khám phá chiều sâu tư duy\r\n\r\n- Đánh thức trí sáng tạo\r\n\r\n- Nắm bắt được cơ hội\r\n\r\n- Không ngại mơ ước\r\n\r\n- Vượt qua sự lo lắng\r\n\r\n- Quản lí thời gian hiệu quả\r\n\r\nĐọc xong tác phẩm, trực giác của bạn sẽ được mài sắc một cách rõ rệt, nhờ vậy khả năng đánh giá và đưa ra quyết định cũng được cải thiện, giúp bạn tự tin hơn trong mọi hành động.', 49000, 'Zoe McKey', 'https://cdn0.fahasa.com/media/catalog/product/8/9/8936066685412.jpg', 2, 'Kim đồng'),
(6, 'Nhà Khoa Học Nhí - Cùng Bay Với Bong Bóng', 'Bong bóng đến từ đâu nhỉ? Tại sao vào mùa đông, em dễ cảm thấy bị tê tê như “giật điện” khi chạm vào đồ vật kim loại? Làm thế nào để có giá đỗ? Nước tồn tại ở mấy trạng thái? Hiện tượng khúc xạ là gì?\r\n\r\nNhững câu hỏi trên sẽ được giải đáp trong bộ sách năm tập “Nhà khoa học nhí\". Ngoài ra, em còn biết thêm nhiều kiến thức mới lạ và thí nghiệm thú vị đấy.', 28000, 'Bao Dong Ni, Trà My', 'https://cdn0.fahasa.com/media/catalog/product/9/7/9786042107051.jpg', 3, 'Kim đồng'),
(7, 'Nhà Khoa Học Nhí - Chơi Trốn Tìm Với Bạn Hơi Nước', 'Bong bóng đến từ đâu nhỉ? Tại sao vào mùa đông, em dễ cảm thấy bị tê tê như “giật điện” khi chạm vào đồ vật kim loại? Làm thế nào để có giá đỗ? Nước tồn tại ở mấy trạng thái? Hiện tượng khúc xạ là gì?\r\n\r\nNhững câu hỏi trên sẽ được giải đáp trong bộ sách năm tập “Nhà khoa học nhí\". Ngoài ra, em còn biết thêm nhiều kiến thức mới lạ và thí nghiệm thú vị đấy.', 28000, 'Bao Dong Ni', 'https://cdn0.fahasa.com/media/catalog/product/i/m/image_183220.jpg', 3, 'Kim đồng'),
(8, 'Hỏi Nhỏ Biết To - Thực Vật', 'HỎI NHỎ BIẾT TO - THỰC VẬT\r\n\r\nCó phải củ cà rốt luôn có màu cam không?\r\n\r\nCây cối làm thế nào để sống qua mùa đông giá lạnh?\r\n\r\nVì sao không nên để cây cối trong phòng ngủ?\r\n\r\nVới những câu hỏi thú vị về thế giới thực vật, phần trả lời ngắn ngon, súc tích cùng hình ảnh minh họa sinh động, ngộ nghĩnh, bộ sách Hỏi nhỏ biết to cơ thể người mở ra cho các bạn nhỏ cả một kho tri thức diệu kì và thú vị về thế giới thực vật.  Không chỉ là những kiến thức thú vị về thực vận, có nhiều kiến thức bé có thể áp dụng hữu ích vào cuộc sống thường ngày nữa đấy.\r\n\r\nBộ sách sẽ là nguồn cảm hứng vô tận cho các bạn nhỏ yêu thích đam mê tìm tòi, khám phá, chắp cánh cho những ước mơ bay cao.', 27000, 'Nhiều Tác Giả', 'https://cdn0.fahasa.com/media/catalog/product/i/m/image_219450.jpg', 3, 'Kim đồng'),
(9, 'Life BRE A2-B1: Student Book With Web App Code And Online Workbook 2nd Edition', 'Life là bộ sách học tiếng Anh thú vị với 6 cấp độ dành cho người lớn. Dựa trên nội dung của National Geographic, Life biến quá trình học tập của bạn thành một cuộc hành trình tuyệt vời với những hình ảnh đẹp không thể cưỡng lại được.\r\n\r\nCác nội dung trong sách rất sống động và gần gũi vì được lấy ra từ những câu chuyện đời thực ở khắp mọi nơi trên thế giới, giúp cho bạn vừa có cơ hội khám phá nền văn hóa của nhiều quốc gia vừa học tiếng Anh. Kể từ năm 2015, Life đã được Bộ trưởng bộ Giáo dục chọn làm quyển sách giáo khoa Tiếng Anh cho 26 trường đại học với mục tiêu nâng cao kỹ năng tiếng Anh cho sinh viên. Life được chọn vì sách tập trung vào các vấn đề toàn cầu, bắt kịp sự phát triển của công nghệ, và quan trọng nhất là, rèn luyện được cho người học các kỹ năng cần thiết trong thế kỷ 21: sự sáng tạo, tư duy phản biện, sự hợp tác và hiểu biết về các nền văn hóa trên thế giới.\r\n\r\nLần đầu tiên, Life cho ra mắt phiên bản dành riêng cho thị trường Việt Nam.', 247000, 'John Hughes', 'https://cdn0.fahasa.com/media/catalog/product/i/m/image_195509_1_39154.jpg', 4, 'Kim đồng'),
(10, 'Thinking, Fast and Slow', '', 284000, 'Daniel Kahneman', 'https://cdn0.fahasa.com/media/catalog/product/i/m/image_195509_1_23665.jpg', 4, 'Kim đồng'),
(11, 'Thỏ Bảy Màu Và Những Người Nghĩ Nó Là Bạn (Tái Bản 2022)', 'Thỏ Bảy Màu là fanpage sở hữu hơn 2,6tr lượt thích trên mạng xã hội. Với hình tượng nhân vật thú vị cùng phong cách sáng tạo độc đáo, Thỏ bảy màu vẫn luôn là thu hút được số lượng lớn người quan tâm thể hiện qua nhiều bài viết với hàng chục nghìn lượt like và share. <br><br>\r\n\r\nThỏ Bảy Màu là một nhân vật hư cấu chẳng còn xa lạ gì với anh em dùng mạng xã hội với slogan “Nghe lời Thỏ, kiếp này coi như bỏ!”. <br><br>\r\n\r\nThỏ Bảy Màu đơn giản chỉ là một con thỏ trắng với sự dở hơi, ngang ngược nhưng đáng yêu vô cùng tận. Nó luôn nghĩ rằng mình không có cuộc sống và không có bạn bè. Tuy nhiên, Thỏ lại chẳng bao giờ thấy cô đơn vì đến cô đơn cũng bỏ nó mà đi.<br><br>\r\n\r\nCuốn sách là những mẩu chuyện nhỏ được ghi lại bằng tranh xoay quanh Thỏ Bảy Màu và những người nghĩ nó là bạn. Những mẩu chuyện được truyền tải rất “teen” đậm chất hài hước, châm biếm qua sự sáng tạo không kém phần “mặn mà” của tác giả càng trở nên độc đáo và thu hút.<br><br>\r\n\r\nNếu một ngày bạn lỡ cảm thấy buồn thì hãy đọc cuốn sách này để biết thế nào là cười sảng nha!\r\n', 100000, 'Huỳnh Thái Học', 'https://cdn0.fahasa.com/media/catalog/product/9/7/9786043561272.jpg', 3, 'NXB Dân Trí'),
(12, 'Tôi Tin Tôi Có Thể Làm Được - Học Cách Làm Người', 'Bộ sách Tôi tin tôi có thể làm được gồm 4 cuốn: Học cách học tập, Học cách làm việc, Học cách ứng xử, Học cách làm người, Những điều thầy cô và cha mẹ cần biết ở thế kỉ 21. Ở Trung Quốc, bộ sách này được giới thiệu trang trọng đến các trường phổ thông, chương trình giáo dục lớn của nhà nước. Bộ sách chủ yếu hướng đến các em học sinh, nhưng cũng là tài liệu bổ ích với các bậc phụ huynh và thầy cô. Bộ sách Tôi tin tôi có thể làm được được UNESCO công nhận là tài liệu cần cho các học sinh thế kỉ 21, do những chuyên gia nổi tiếng chấp bút: <br><br>\r\n- Chu Nam Chiếu - Chuyên gia giáo dục nổi tiếng thế giới, thành viên Trung Quốc duy nhất của Hiệp hội Giáo Dục Quốc tế Thế kỉ 21. <br><br>\r\n- Tôn Vân Hiểu - Phó chủ nhiệm, chuyên gia trung tâm nghiên cứu thanh thiếu niên Trung Quốc, chuyên gia giáo dục học uy tín, nhà hoạt động tâm huyết cho thanh thiếu niên.<br><br>\r\n- Trịnh Tân Dung - Giáo sư học viện giáo dục Đại học sư phạm Bắc Kinh.\r\n- Bốc Vệ - Chuyên gia Viện nghiên cứu Báo chí và truyền thông, Viện hàn lâm khoa học Trung Quốc.', 40000, 'Tôn Vân Hiểu, Chu Nam Chiếu', 'https://cdn0.fahasa.com/media/catalog/product/i/m/image_196892.jpg', 2, 'Kim Đồng');

-- --------------------------------------------------------

--
-- Table structure for table `categogy`
--

CREATE TABLE `categogy` (
  `categogy_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categogy`
--

INSERT INTO `categogy` (`categogy_id`, `name`) VALUES
(1, 'Tiểu Thuyết'),
(2, 'Sách Kỹ Năng'),
(3, 'Thiếu Nhi'),
(4, 'Sách Nước Ngoài');

-- --------------------------------------------------------

--
-- Table structure for table `contain`
--

CREATE TABLE `contain` (
  `contain_id` int(10) NOT NULL,
  `oder_id` int(10) NOT NULL,
  `book_id` int(10) NOT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contain`
--

INSERT INTO `contain` (`contain_id`, `oder_id`, `book_id`, `quantity`) VALUES
(1, 2, 2, 1),
(2, 1, 9, 1),
(3, 3, 2, 1),
(4, 3, 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `code` varchar(225) NOT NULL,
  `verify_status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `email`, `pass`, `name`, `phone`, `code`, `verify_status`) VALUES
(1, 'customer1', '123456', 'Trần Thanh Tú', '', '', 0),
(2, 'customer2', 'abcxyz', 'Trần Mai Uyên', '', '', 0),
(3, 'customer3', 'ijklou', 'Đỗ Thanh Thảo', '', '', 0),
(4, 'customer4', '123oip', 'Vũ Hoàng Sơn', '', '', 0),
(5, 'customer5', '000000', 'Nguyễn Anh Khôi', '', '', 0),
(6, 'ntdat0103@gmail.com', '123', 'Nguyễn Tiến Đạt', '0123456788', '1fa2d817fca2d9bd0483f51c1d239286', 1),
(7, 'kingharemtad@gmail.com', '123', 'Nguyễn Tiến Đạt', '0706099978', '3ae8821bb401629178b491bc0c6f105a', 1);

-- --------------------------------------------------------

--
-- Table structure for table `oder`
--

CREATE TABLE `oder` (
  `oder_id` int(10) NOT NULL,
  `cost` double NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1 COMMENT '1 la dang xu li, 2 la hoan tat',
  `oder_date` date NOT NULL,
  `payment_method` varchar(50) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `address_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `oder`
--

INSERT INTO `oder` (`oder_id`, `cost`, `status`, `oder_date`, `payment_method`, `customer_id`, `address_id`) VALUES
(1, 247000, 1, '2022-12-02', 'momo', 6, 1),
(2, 79000, 2, '2022-12-01', 'momo', 6, 1),
(3, 106000, 1, '2022-12-08', 'vnpay', 6, 2);

-- --------------------------------------------------------

--
-- Table structure for table `promotion`
--

CREATE TABLE `promotion` (
  `promotion_id` int(10) NOT NULL,
  `name` varchar(225) NOT NULL,
  `content` varchar(225) NOT NULL,
  `banner` varchar(225) NOT NULL,
  `admin_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `promotion`
--

INSERT INTO `promotion` (`promotion_id`, `name`, `content`, `banner`, `admin_id`) VALUES
(1, 'BỐC THĂM TRÚNG THƯỞNG\r\nMEGA SALE 2022', 'https://cdn0.fahasa.com/media/wysiwyg/Thang-11-2022/Mega%20sale_LDP_Banner_01_web.jpg', 'https://cdn0.fahasa.com/media/wysiwyg/Thang-11-2022/Mega%20sale_LDP_Icanconnect_Mainbanner.jpg', 1),
(2, 'Giáng sinh', 'https://cdn0.fahasa.com/media/wysiwyg/Duy-VHDT/noel-2022/Giangsinh_T11_banner_1200x411.jpg', 'https://cdn0.fahasa.com/media/wysiwyg/Duy-VHDT/noel-2022/Giangsinh_T11_1920x750.jpg', 1),
(3, 'Black Friday', 'https://cdn0.fahasa.com/media/wysiwyg/Thang-11-2022/Black%20friday_Cyber%20monday_LDP_Banner_01.jpg', 'https://cdn0.fahasa.com/media/wysiwyg/Thang-11-2022/Black%20friday_Cyber%20monday_LDP_mainbanner_web.jpg', 1),
(4, 'Vẽ', 'https://cdn0.fahasa.com/media/wysiwyg/Duy-VHDT/HOA-CU/HoaCuQuy4_banner_Banner1.jpg', 'https://cdn0.fahasa.com/media/wysiwyg/Duy-VHDT/HOA-CU/HoaCuQuy4_banner_1920x750_2.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE `rate` (
  `customer_id` int(10) NOT NULL,
  `book_id` int(10) NOT NULL,
  `comment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rate`
--

INSERT INTO `rate` (`customer_id`, `book_id`, `comment`) VALUES
(6, 1, 'Thật tuyệt vời!! Tôi chưa từng đọc cuốn sách nào hay như vậy !!'),
(7, 1, 'Cũng thường thôi.'),
(5, 1, 'Cây Brooklyn này mua ở đây được nhỉ mn ???');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`address_id`),
  ADD KEY `address1` (`customer_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `applyfor`
--
ALTER TABLE `applyfor`
  ADD KEY `apply1` (`promotion_id`),
  ADD KEY `apply2` (`book_id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `book1` (`category_id`);

--
-- Indexes for table `categogy`
--
ALTER TABLE `categogy`
  ADD PRIMARY KEY (`categogy_id`);

--
-- Indexes for table `contain`
--
ALTER TABLE `contain`
  ADD PRIMARY KEY (`contain_id`),
  ADD KEY `contain1` (`oder_id`),
  ADD KEY `contain2` (`book_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `oder`
--
ALTER TABLE `oder`
  ADD PRIMARY KEY (`oder_id`),
  ADD KEY `oder1` (`customer_id`),
  ADD KEY `oder2` (`address_id`);

--
-- Indexes for table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`promotion_id`),
  ADD KEY `promotion1` (`admin_id`);

--
-- Indexes for table `rate`
--
ALTER TABLE `rate`
  ADD KEY `rate1` (`customer_id`),
  ADD KEY `rate2` (`book_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `address_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `categogy`
--
ALTER TABLE `categogy`
  MODIFY `categogy_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contain`
--
ALTER TABLE `contain`
  MODIFY `contain_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `oder`
--
ALTER TABLE `oder`
  MODIFY `oder_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `promotion_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `applyfor`
--
ALTER TABLE `applyfor`
  ADD CONSTRAINT `apply1` FOREIGN KEY (`promotion_id`) REFERENCES `promotion` (`promotion_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `apply2` FOREIGN KEY (`book_id`) REFERENCES `book` (`book_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book1` FOREIGN KEY (`category_id`) REFERENCES `categogy` (`categogy_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `contain`
--
ALTER TABLE `contain`
  ADD CONSTRAINT `contain1` FOREIGN KEY (`oder_id`) REFERENCES `oder` (`oder_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `contain2` FOREIGN KEY (`book_id`) REFERENCES `book` (`book_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `oder`
--
ALTER TABLE `oder`
  ADD CONSTRAINT `oder1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `oder2` FOREIGN KEY (`address_id`) REFERENCES `address` (`address_id`);

--
-- Constraints for table `promotion`
--
ALTER TABLE `promotion`
  ADD CONSTRAINT `promotion1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rate`
--
ALTER TABLE `rate`
  ADD CONSTRAINT `rate1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rate2` FOREIGN KEY (`book_id`) REFERENCES `book` (`book_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
