-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2022 at 11:51 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tintuc`
--

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(10) NOT NULL,
  `bl_noiDung` varchar(255) NOT NULL,
  `tin_id` int(10) NOT NULL,
  `bl_trangThai` int(10) NOT NULL,
  `nguoiDung_id` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`id`, `bl_noiDung`, `tin_id`, `bl_trangThai`, `nguoiDung_id`, `created_at`, `updated_at`) VALUES
(1, 'HAy quá', 1, 0, 1, NULL, '2022-08-14 23:49:45'),
(2, 'tuyyu', 1, 1, 1, NULL, NULL),
(3, 'hay', 1, 1, 4, '2022-08-14 07:40:57', '2022-08-14 07:40:57'),
(4, 'hay', 9, 1, 4, '2022-08-14 19:32:01', '2022-08-14 19:32:01'),
(6, 'jqừaịiwjn', 9, 0, 4, '2022-08-14 22:50:02', '2022-08-14 23:51:21'),
(7, 'được', 9, 1, 5, '2022-08-15 01:49:11', '2022-08-15 01:49:11'),
(8, 'tệ', 9, 1, 5, '2022-08-15 01:49:18', '2022-08-15 01:49:18');

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(10) NOT NULL,
  `danhMuc_ten` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `danhMuc_ten`) VALUES
(1, 'Điện thoại'),
(2, 'Social'),
(3, 'Blockchain'),
(4, 'Blog'),
(19, 'Aav');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_resets_table', 1),
(15, '2019_08_19_000000_create_failed_jobs_table', 1),
(16, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(17, '2022_08_11_143901_edit_tin', 2),
(18, '2022_08_14_142224_edit_binh_luan', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('hieunqh@gmail.com', '$2y$10$9bqRp1fj80L3.ANHpMw.KuNZIjTtijGU8udOuoQZbxh1Ypy74ecam', '2022-08-02 19:26:52'),
('hieunqpd04773@fpt.edu.vn', '$2y$10$apBV3vggPqsrXk6iNQDl2O3j6DPS5TqSJZpxhCdXHQICXxvNhVID2', '2022-08-14 19:39:19');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tin`
--

CREATE TABLE `tin` (
  `id` int(10) NOT NULL,
  `danhMuc_id` int(10) NOT NULL,
  `tin_tieuDe` varchar(255) NOT NULL,
  `tin_tomTat` varchar(255) NOT NULL,
  `tin_anhBia` varchar(255) NOT NULL,
  `tin_noiDung` text NOT NULL,
  `tin_ngayDang` date NOT NULL,
  `tin_trangThai` int(1) NOT NULL,
  `tin_luotXem` int(10) NOT NULL,
  `tacGia_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tin`
--

INSERT INTO `tin` (`id`, `danhMuc_id`, `tin_tieuDe`, `tin_tomTat`, `tin_anhBia`, `tin_noiDung`, `tin_ngayDang`, `tin_trangThai`, `tin_luotXem`, `tacGia_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'Ấn tượng đầu tiên Xiaomi Pad 5 Pro 12.4: Thiết kế vuông vức, Snapdragon 870 mạnh mẽ mà giá chỉ từ 10.4 triệu', 'Tại sự kiện tối ngày 11/8, bên cạnh sự xuất hiện cực kỳ hoành tráng của chiếc smartphone gập Xiaomi MIX Fold 2 thì Xiaomi cũng đã ra mắt Xiaomi Pad 5 Pro 12.4.', '3t8_1280x720-800-resize.jpg', 'Xiaomi Pad 5 Pro 12.4 ra mắt với thiết kế vuông vức, màn hình 12.4 inch siêu to\r\nNgay từ cái nhìn đầu tiên, Xiaomi Pad 5 Pro 12.4 làm mình cực kỳ ấn tượng khi thiết bị mang một kích thước khá lớn với khung viền bằng nhôm cùng kiểu dáng vuông vức giúp mang đến cho máy sự bền bỉ đi cùng với một ngoại hình trẻ trung, năng động. Bên cạnh đó, phần mặt lưng của Xiaomi Pad 5 Pro 12.5 còn được hoàn thiện từ chất liệu kính nhám, điều này sẽ hạn chế việc bám mồ hôi, dấu vân tay trong quá trình sử dụng nhằm đảm bảo tính thẩm mỹ về lâu về dài cho thiết bị.\r\n\r\nXiaomi Pad 5 Pro 12.4 ra mắt với thiết kế vuông vức, màn hình 12.4 inch siêu to\r\nNgay từ cái nhìn đầu tiên, Xiaomi Pad 5 Pro 12.4 làm mình cực kỳ ấn tượng khi thiết bị mang một kích thước khá lớn với khung viền bằng nhôm cùng kiểu dáng vuông vức giúp mang đến cho máy sự bền bỉ đi cùng với một ngoại hình trẻ trung, năng động. Bên cạnh đó, phần mặt lưng của Xiaomi Pad 5 Pro 12.5 còn được hoàn thiện từ chất liệu kính nhám, điều này sẽ hạn chế việc bám mồ hôi, dấu vân tay trong quá trình sử dụng nhằm đảm bảo tính thẩm mỹ về lâu về dài cho thiết bị.\r\n\r\nQuay sang mặt trước, Xiaomi Pad 5 Pro 12.4 đã được thể hiện đúng như con số \'12.4\' hiện hữu ngay trên cái tên của mình, cụ thể là thiết bị được trang bị một chiếc màn hình có kích thước lên đến 12.4 inch, rộng hơn 27.2% so với thế hệ tiền nhiệm giúp dư sức mang đến cho người dùng trải nghiệm xem phim, chơi game với hình ảnh to lớn, toàn vẹn hơn. Ngoài ra, các viền màn hình của Xiaomi Pad 5 Pro 12.4 còn được trau chuốt với kích thước tương đối hợp lý, giúp cho khu vực hiển thị trông rộng rãi và tổng thể của thiết bị cũng trông gọn gàng hơn.', '2022-08-12', 1, 53, 2, NULL, '2022-08-15 01:47:43'),
(2, 1, 'Chiếc tablet rẻ nhất TGDĐ xả kho giảm đến nửa triệu, mua chỉ có lời thôi', 'Máy tính bảng Alcatel 3T8 được thiết kế mỏng nhẹ với trọng lượng chỉ 290 g, đây sẽ là người bạn lý tưởng cùng bạn di chuyển ở tất cả mọi nơi. ', '3t8_1280x720-800-resize.jpg', 'Máy tính bảng Alcatel 3T8 được thiết kế mỏng nhẹ với trọng lượng chỉ 290 g, đây sẽ là người bạn lý tưởng cùng bạn di chuyển ở tất cả mọi nơi. Bên cạnh đó, màu sắc tinh tế cùng lớp nhám mờ hoàn thiện đặc biệt giúp người sở hữu chiếc máy tính bảng này trở nên sang trọng ở bất cứ đâu.Mặt khác, chiếc máy tính bảng này sở hữu thiết kế nhựa nguyên khối, có 2 màu cơ bản gồm xanh và đen.\r\n\r\nCung cấp sức mạnh cho máy là CPU Mediatek MT8766 4 nhân, máy tính bảng có RAM 2 GB, bộ nhớ trong 32 GB đủ dùng cho các tác vụ cơ bản. Máy tính bảng Alcatel sử dụng Android 10 (phiên bản Go) đảm bảo cho bạn trải nghiệm mượt mà và liên tục. Hơn hết, viên pin 4.080 mAh có thể sử dụng đủ một ngày với các tác vụ nhẹ nhàng như xem phim, lướt web và cho thời gian chờ lên đến 400 giờ.', '2022-07-20', 1, 5562, 1, NULL, '2022-08-14 06:40:56'),
(3, 3, 'Bạn có biết đã bao nhiêu tỉnh, thành phố ở nước ta được phủ sóng 5G không?', 'Bộ TT&TT đã cấp phép thử nghiệm 5G cho các doanh nghiệp viễn thông, trong đó Viettel là nhà mạng có nhiều vị trí thử nghiệm nhất, đứng thứ hai là mạng VinaPhone.', 'h2_1280x720-800-resize.jpg', 'Bộ TT&TT đã cấp phép thử nghiệm 5G cho các doanh nghiệp viễn thông, trong đó Viettel là nhà mạng có nhiều vị trí thử nghiệm nhất, đứng thứ hai là mạng VinaPhone. Thông tin này mình vừa đọc trên ICTnews, thấy hữu ích nên muốn chia sẻ cùng mọi người.\r\nThông tin từ Bộ TT&TT cho biết, tính đến tháng 6/2022, Bộ TT&TT đã cấp phép cho các doanh nghiệp viễn thông thử nghiệm 5G tại 40 tỉnh, thành phố trực thuộc Trung ương. Trong đó, Viettel là nhà mạng có nhiều vị trí thử nghiệm nhất, đứng thứ hai là VinaPhone. Bộ TT&TT đang xem xét cấp phép thử nghiệm 5G cho MobiFone.\r\n\r\nTrong năm 2022, Bộ TT&TT khuyến khích các doanh nghiệp tiếp tục thử nghiệm những ứng dụng của 5G, đánh giá nhu cầu của thị trường, phương án kỹ thuật để xây dựng phương án kinh doanh hiệu quả nhất khi được cấp phép chính thức.\r\n\r\nMới đây, Lào Cai đã thử nghiệm phát sóng dịch vụ 5G tại Sa Pa. Ngoài ra, Sóc Trăng, Ninh Thuận cũng thử nghiệm phát sóng 5G trên địa bàn tỉnh. Các thủ tục pháp lý cho việc đấu giá băng tần 4G và 5G đang được hoàn thiện để có thể tiến hành trong năm 2022.', '2022-08-17', 1, 5554, 1, NULL, '2022-08-11 21:04:30'),
(4, 2, 'Nỗi ám ảnh mang tên Apple và TikTok', 'Khi lý giải tình hình kinh doanh đi xuống trong quý II/2022, hàng loạt ông lớn công nghệ như Google, Meta, Snap... nhắc đến hai cái tên Apple và TikTok.', '181121142007-01-tiktok-112118-1841-1659257678.jpg', 'rong nhiều năm, các hãng công nghệ hàng đầu thường mặc định kết quả tăng trưởng hàng quý, nhưng gần đây không còn như vậy. Vấn đề này được thể hiện rõ nét nhất trong báo cáo tài chính quý vừa qua của nhóm Big Tech khi họ nhắc nhiều đến sự suy giảm, cùng dự báo tương lai không mấy khả quan. Trong mỗi báo cáo, Apple và TikTok liên tục được đề cập một cách trực tiếp hoặc gián tiếp.\r\n\r\nVới TikTok, lượng người dùng hàng tháng đã tăng lên một tỷ sau 5 năm, trong khi Facebook và Instagram phải mất 8 năm mới đạt được. Còn chính sách thay đổi dữ liệu của Apple cũng khiến các công ty khác phải điều chỉnh lại mô hình của mình cho phù hợp.\r\n\r\nLogo một số mạng xã hội phổ biến. Ảnh: CNN\r\nLogo một số mạng xã hội phổ biến. Ảnh: CNN\r\n\r\nĐầu tiên là Snap. Ngày 21/7, công ty đứng sau ứng dụng Snapchat cho biết đã thu hút 347 triệu người dùng hoạt động hàng ngày, vượt dự báo của các nhà phân tích là 343 triệu người, nhưng doanh thu chỉ đạt 1,11 tỷ USD, giảm 4,5% so với cùng kỳ năm ngoái. \"Kết quả quý II/2022 không phản ánh đúng tham vọng của chúng tôi\", CEO Evan Spiegel nói.\r\n\r\nNhà phân tích Dan Ives của Wedbush Securities cho rằng kết quả của Snap như một \"con tàu đắm\", thể hiện \"sự chậm lại của quảng cáo kỹ thuật số, những trở ngại về quyền riêng tư mà Apple đưa lên iOS và sự cạnh tranh của TikTok ngày càng nóng\". Giám đốc tài chính Derek Anderson của Snap xác nhận sự phổ biến của TikTok là một trong những nguyên nhân khiến doanh thu của họ không như mong đợi.\r\n\r\nNgay sau đó, Twitter cũng thông cáo tình hình tài chính không mấy khả quan. Công ty đổ lỗi một phần cho Elon Musk, nhưng thừa nhận \"doanh thu giảm so với cùng kỳ năm trước phản ánh khó khăn trong ngành quảng cáo\". Mạng xã hội này nói có những \"cơn gió ngược\" đang cản trở kinh doanh. Theo Wired, Twitter dường như ám chỉ Apple với các thay đổi về chính sách quyền riêng tư đã tác động đến người dùng trên nền tảng.\r\n\r\nNgày 26/7, Alphabet, công ty mẹ của Google và YouTube, báo cáo tốc độ tăng trưởng doanh thu theo quý chậm nhất trong hai năm do những áp lực trên thị trường quảng cáo kỹ thuật số. Tuy nhiên, hãng nhấn mạnh YouTube Shorts, tính năng video ngắn giống TikTok, đã thu hút hơn 1,5 tỷ người xem mỗi tháng.\r\n\r\nMột ngày sau, Meta cho biết lần đầu tiên kể từ khi IPO cách đây một thập kỷ, doanh thu công ty đi xuống so với cùng kỳ năm trước do sự tác động của Apple đến quảng cáo, tình trạng thua lỗ khi kinh doanh metaverse và sự cạnh tranh từ TikTok. Tương tự Alphabet, điểm sáng là Reels, tính năng học theo TikTok, có lượng người dùng tăng mạnh.\r\n\r\n\"Sự xuất hiện của TikTok khiến các mạng xã hội nhận ra họ không còn là mạng xã hội, mà chỉ là phương tiện truyền thông. Giờ đây, Facebook, Instagram hay YouTube đang chơi trò đuổi bắt. Còn người dùng không chỉ có một mà tới ba ứng dụng cung cấp trải nghiệm video ngắn từ các công ty lớn\", Jay Owens, một chuyên gia độc lập trong lĩnh vực kỹ thuật số, nhận xét.\r\n\r\nKhi Google, Meta hay TikTok chạy đua trở thành bản sao của nhau, họ cũng phải đối mặt với một vấn đề lớn khác: Apple. Báo cáo của cả Snap, Twitter lẫn Meta đều nêu bật một vấn đề tồn tại đối với quảng cáo trực tuyến và theo dõi người dùng. Đó là tính năng App Tracking Transparency (ATT) mà Apple triển khai từ bản iOS 14.5, cho phép người dùng từ chối bị các ứng dụng theo dõi để hiển thị quảng cáo mục tiêu.', '2022-08-01', 1, 0, 1, NULL, NULL),
(5, 1, 'Màn hình luôn hiển thị trên iPhone hoạt động thế nào', 'Tính năng Always on Display trên iPhone 14 chạy iOS 16 sẽ hoạt động khác với điện thoại Android và tương tự Apple Watch.', 'video-shows-forthcoming-iphone-3477-9756-1659234907.jpg', 'Always on Display (màn hình luôn hiển thị - AOD) đã xuất hiện nhiều năm và phổ biến trên điện thoại Android, nhưng Apple vẫn chưa đưa chế độ này lên iPhone. Tuy nhiên, trang công nghệ 9to5Mac phát hiện trên iOS 16 các hình nền hệ thống đều có tính năng AOD.\r\n\r\nMàn hình khóa Always On Display trên iOS 16. Ảnh: PhoneArena\r\nMàn hình khoá Always On Display trên iOS 16. Ảnh: PhoneArena\r\n\r\nAlways on Display cho phép người dùng theo dõi các thông tin cơ bản như mức pin, thời tiết, lịch, báo thức... khi màn hình chuyển sang chế độ ngủ. Tuy nhiên, thay vì chuyển sang màu đen hoàn toàn như điện thoại Android, chế độ này trên iPhone 14 Pro sẽ giống với Apple Watch. Trong đó, màn hình tự động giảm tốc độ làm tươi, hạ độ sáng màn hình và tăng các gam màu tối nhưng vẫn đảm bảo việc hiển thị các thông tin cần thiết. Người dùng sẽ vẫn thấy hình nền ngay cả khi màn hình đã tắt. Việc chuyển đổi giữa màn hình thường và AOD diễn ra tự động và mượt mà.\r\n\r\nĐể làm điều này, iOS 16 không sử dụng hình ảnh tĩnh làm hình nền mà sử dụng hình nền mới với nhiều lớp hiển thị theo thời gian thức. Ngoài lớp hình nền gốc, máy có thêm các lớp hình nền tối và mờ dành riêng cho trạng thái tắt màn hình.\r\n\r\nAOD trên iPhone 14 vẫn hiển thị hình ảnh mờ thay vì màn hình đen như trên Android. Video: 9to5Mac\r\n\r\nTính năng Always on Display chỉ được trang bị cho bộ đôi iPhone 14 Pro và Pro Max. Theo chuyên gia Ross Young, lý do là hai phiên bản này sử dụng tấm nền LTPO cho phép điều chỉnh tần số quét từ 120 Hz đến 1 Hz, trong khi iPhone 13 Pro chỉ giảm được xuống mức tối đa 10 Hz.\r\n\r\nApple dự kiến giới thiệu bốn mẫu iPhone mới vào ngày 13/9. Trong đó, chỉ iPhone 14 Pro và 14 Pro Max được nâng cấp với thiết kế màn hình đục lỗ, chip xử lý A16 Bionic, camera chính 48 megapixel cùng khả năng quay video 8K. Còn iPhone 14 và 14 Max tích hợp chip A15 như trên iPhone 13 hoặc A15X với nhiều lõi đồ họa hơn.', '2022-08-01', 1, 5, 1, NULL, '2022-08-14 19:31:06'),
(7, 1, 'Loạt điện thoại Xiaomi giá rẻ đang giảm giá ngon mừng tuần lễ Xiaomi, MiFans chớ bỏ qua', 'Tuần lễ Xiaomi là một cơ hội mua sắm smartphone với giá cực rẻ mà Mifans không nên bỏ qua. Đến với tuần lễ Xiaomi lần này, Mifans sẽ có thể chiêm ngưỡng loạt điện thoại Xiaomi giá rẻ nay còn thêm rẻ nhờ ưu đãi giá đến nửa triệu đồng', 'redmi-10a-171-_1920x1080-800-resize.jpg', 'POCO C40 sẽ nâng tầm trải nghiệm màn ảnh của bạn với màn hình lớn kích thước 6.71 inch, kèm với tấm nền IPS LCD và độ phân giải HD+ (720 x 1650 Pixels). Đem đến cho bạn một không gian hiển thị rộng, hạn chế tình trạng mỏi mắt khi sử dụng thời gian dài và với độ sáng 400 nits, các chi tiết hiển thị ổn ở môi trường trời sáng.\r\n\r\nĐồng thời máy có một hiệu năng ổn định nhờ được trang bị con chip đến từ nhà JLQ với tên gọi JR510 sản xuất trên quy trình 11 mm - một chip với 2 cụm lõi tứ dựa trên nhân ARMv8 có tốc độ lần lượt là 1.5 GHz và 2 GHz. Dù điện thoại giá rẻ nhưng POCO C40 lại được trang bị viên pin dung lượng đến 6.000 mAh, điều mà không chiếc điện thoại nào trong tầm giá này làm được. \r\n\r\nChiếc điện thoại này được Xiaomi trang bị một cụm camera với camera chính có độ phân giải lên đến 50 MP, camera góc siêu rộng 8 MP và hai cảm biến phụ có chung độ phân giải 2 MP giúp hỗ trợ tính năng chụp ảnh xóa phông và chụp cận macro. Còn ở mặt trước, tích hợp bên trong phần nốt ruồi của máy sẽ là camera selfie 8 MP, kèm những tính năng hỗ trợ chụp ảnh.\r\n\r\nRedmi 10 (2022) sử dụng công nghệ màn hình IPS LCD có kích thước 6.5 inch cùng độ phân giải Full HD+ (1080 x 2400 Pixels), giúp tái hiện nội dung hình ảnh được sống động hơn hay giải trí đã mắt với không gian hiển thị cực lớn. Hơn hết, bạn có thể cảm nhận được độ linh hoạt trên từng cử chỉ vuốt chạm hàng ngày, bởi màn hình có tần số quét lên đến 90 Hz.', '2022-08-12', 1, 0, 1, '2022-08-12 02:24:56', '2022-08-12 02:24:56'),
(8, 1, 'Vivo V25 và 3 điện thoại Vivo khác đạt chứng nhận FCC, chuẩn bị ra mắt toàn cầu', 'Vivo đang chuẩn bị ra mắt điện thoại dòng Vivo V25 tại Ấn Độ, mẫu Vivo V25 Pro sẽ được tung ra vào ngày 17/8.', 'vivo-2_1280x721-800-resize.jpg', 'Tất cả các thiết bị nói trên cùng với Vivo V25 Pro đã xuất hiện thông tin trên cơ sở dữ liệu của trang chứng nhận FCC, cho thấy bốn điện thoại sắp ra mắt trên toàn cầu.\r\n\r\nCơ sở dữ liệu chứng nhận FCC hiển thị thông tin cho biết Vivo V25 có số model “V2202” Vivo V25 Pro có số model “V2158”. Còn hai mẫu Y22s và Y35 lần lượt có số model “V2206” và “V2205”. Tất cả bốn điện thoại đều sẽ có Wi-Fi băng tần kép và Bluetooth.\r\n\r\nNgoài ra, FCC cũng tiết lộ Vivo V25 và V25 Pro sẽ hỗ trợ 5G, Y22s và Y35 sẽ chỉ hỗ trợ 4G. Đáng tiếc FCC không cho biết thêm bất kỳ thông tin nào khác về bốn thiết bị nói trên.\r\n\r\nVivo V25 Pro đã được ấn định sẽ ra mắt tại Ấn Độ vào ngày 17/8, thiết bị dự kiến chạy bộ vi xử lý MediaTek Dimensity 1300 và có ba camera sau, trong đó có camera chính 64 MP với tính năng ổn định hình ảnh quang học (OIS). Đồng thời thiết bị sẽ có pin 4.830 mAh, hỗ trợ sạc nhanh 66 W.\r\n\r\nMặt khác, Vivo Y35 gần đây đã bị rò rỉ với bộ vi xử lý Qualcomm Snapdragon 680, sở hữu màn hình 6.58 inch Full HD+, pin 5.000 mAh và hỗ trợ sạc nhanh 44 W. Thiết bị cũng được tiết lộ có camera chính 50 MP và camera selfie 16 MP.\r\n\r\nBạn mong chờ chiếc điện thoại Vivo nào nhất? Đang có rất nhiều điện thoại Vivo dòng Y có mặt tại Thế Giới Di Động, giá tốt kèm nhiều ưu đãi hấp dẫn.', '2022-08-12', 1, 1, 2, '2022-08-12 02:32:56', '2022-08-15 01:53:33'),
(9, 1, 'Ấn tượng đầu tiên Xiaomi Pad 5 Pro 12.4: Thiết kế vuông vức, Snapdragon 870 mạnh mẽ mà giá chỉ từ 10.4 triệu', 'Tại sự kiện tối ngày 11/8, bên cạnh sự xuất hiện cực kỳ hoành tráng của chiếc smartphone gập Xiaomi MIX Fold 2 thì Xiaomi cũng đã ra mắt Xiaomi Pad 5 Pro 12.4.', 'pad6_1280x720-800-resize.jpg', 'Xiaomi Pad 5 Pro 12.4 ra mắt với thiết kế vuông vức, màn hình 12.4 inch siêu to\r\nNgay từ cái nhìn đầu tiên, Xiaomi Pad 5 Pro 12.4 làm mình cực kỳ ấn tượng khi thiết bị mang một kích thước khá lớn với khung viền bằng nhôm cùng kiểu dáng vuông vức giúp mang đến cho máy sự bền bỉ đi cùng với một ngoại hình trẻ trung, năng động. Bên cạnh đó, phần mặt lưng của Xiaomi Pad 5 Pro 12.5 còn được hoàn thiện từ chất liệu kính nhám, điều này sẽ hạn chế việc bám mồ hôi, dấu vân tay trong quá trình sử dụng nhằm đảm bảo tính thẩm mỹ về lâu về dài cho thiết bị.\r\n\r\nXiaomi Pad 5 Pro 12.4 ra mắt với thiết kế vuông vức, màn hình 12.4 inch siêu to\r\nNgay từ cái nhìn đầu tiên, Xiaomi Pad 5 Pro 12.4 làm mình cực kỳ ấn tượng khi thiết bị mang một kích thước khá lớn với khung viền bằng nhôm cùng kiểu dáng vuông vức giúp mang đến cho máy sự bền bỉ đi cùng với một ngoại hình trẻ trung, năng động. Bên cạnh đó, phần mặt lưng của Xiaomi Pad 5 Pro 12.5 còn được hoàn thiện từ chất liệu kính nhám, điều này sẽ hạn chế việc bám mồ hôi, dấu vân tay trong quá trình sử dụng nhằm đảm bảo tính thẩm mỹ về lâu về dài cho thiết bị.\r\n\r\nQuay sang mặt trước, Xiaomi Pad 5 Pro 12.4 đã được thể hiện đúng như con số \'12.4\' hiện hữu ngay trên cái tên của mình, cụ thể là thiết bị được trang bị một chiếc màn hình có kích thước lên đến 12.4 inch, rộng hơn 27.2% so với thế hệ tiền nhiệm giúp dư sức mang đến cho người dùng trải nghiệm xem phim, chơi game với hình ảnh to lớn, toàn vẹn hơn. Ngoài ra, các viền màn hình của Xiaomi Pad 5 Pro 12.4 còn được trau chuốt với kích thước tương đối hợp lý, giúp cho khu vực hiển thị trông rộng rãi và tổng thể của thiết bị cũng trông gọn gàng hơn.', '2022-08-12', 1, 18, 2, '2022-08-12 02:34:53', '2022-08-15 02:03:54'),
(10, 2, 'Apple từng có thỏa thuận đầy táo bạo với Facebook trước khi xảy ra \'xung đột\'', 'Tờ The Wall Street Journal đưa tin về câu chuyện bên trong cuộc chiến giữa Apple và Facebook. Đó là vào những năm 2016 đến 2018', '202208150310applevafacebookdacomkhonglanhcanhkhongngotketugiuanamngoai_1280x720-800-resize.jpg', 'Tờ The Wall Street Journal đưa tin về câu chuyện bên trong cuộc chiến giữa Apple và Facebook. Đó là vào những năm 2016 đến 2018, Apple đã đưa ra một thỏa thuận vô cùng \"táo bạo\" với Facebook, vốn sẽ thay đổi hướng đi của ứng dụng trong tương lai nếu mạng xã hội này đồng ý.\r\nTheo đó, Apple muốn Facebook tung ra phiên bản đăng ký thuê bao, nói cách khác, nền tảng mạng xã hội này sẽ đưa ra phiên bản Facebook không quảng cáo dành cho sản phẩm của Apple, nhưng phải trả tiền hàng tháng.\r\n\r\nApple nói rằng đây sẽ là thỏa thuận \"vẹn cả đôi đường\" bởi Facebook và Apple đều thu được lợi nhuận từ việc này. Tất nhiên sau đó, chúng ta đều biết là hợp tác này đã không xảy ra.\r\n\r\nVào tháng 5 năm ngoái, công ty Cupertino đã phát hành phiên bản iOS 14.5, là cú \"châm ngòi\" cho cuộc chiến về thu thập dữ liệu cũng như quyền riêng tư của người dùng.\r\n\r\nKhông ai khác, nền tảng mạng xã hội lớn nhất chịu ảnh hưởng nặng nề, đại diện của họ cho biết thiệt hại lên tới 10 tỷ USD (khoảng 233 nghìn 970 tỷ VND) kể từ khi xuất hiện tính năng App Tracking Transparency (giúp người dùng quyết định xem ứng dụng đó có được theo dõi họ hay không).', '2022-08-15', 1, 0, 2, '2022-08-14 20:10:56', '2022-08-14 20:10:56'),
(11, 2, 'Đăng ảnh xúc xích nhưng nói là ảnh sao do kính viễn vọng James Webb chụp được, nhà khoa học Pháp đánh lừa cả cộng đồng mạng', 'Bài đăng \"cho thấy sự thật rằng trên những mạng xã hội kiểu này, tin giả vẫn luôn thành công hơn tin thật\", ông Étienne Klein nhận định', '20220815031412314082022.webp', 'Một nhà khoa học Pháp bỗng trở thành tâm điểm của sự chú ý, đồng thời trở thành mục tiêu của của búa rìu dư luận khi “troll” cộng đồng người dùng Twitter.\r\n\r\nTrong bài đăng hôm 31/7 của mình, ông Étienne Klein đăng trên Twitter cá nhân bức ảnh một vật thể tròn đỏ to tướng, kèm dòng trạng thái nói rằng đây là hình ảnh Proxima Centauri, ngôi sao gần Mặt Trời nhất mà ta biết, được chụp bởi chính Kính viễn vọng Không gian James Webb. Ông còn viết: “Độ chi tiết chưa từng có … Một thế giới mới được mở ra mỗi ngày”.\r\n\r\nTrên thực tế, tấm ảnh cho thấy một lát xúc xích đặt trên nền đen.', '2022-08-17', 1, 0, 1, '2022-08-14 20:14:48', '2022-08-14 20:28:21'),
(12, 2, 'Rhymastic, Wowy bị đổi tên Facebook', 'Rapper Wowy, Rhymastic là nạn nhân mới nhất của trò phá hoại, đổi tên trang Facebook.', '202208150316DSCF1257.webp', 'Vấn đề xuất hiện từ cuối 2021, nhưng đến nay, mạng xã hội hơn 2 tỷ người dùng vẫn chưa khắc phục.\r\n\r\nCụ thể, trang Facebook có hơn 1,9 triệu người theo dõi của rapper Wowy bị đổi tên thành “Wówỳ Nguyễn” chiều 12/8. Cùng lúc, fanpage được lập từ 2012, có gần 2 triệu follower của nghệ sĩ Rhymastic cũng bị chỉnh sửa thành “Rhýmátic”.\r\n\r\nĐáng nói, các trang này đều đã được Facebook cấp dấu tick xanh, xác minh chính chủ, chống giả mạo, nhưng vẫn dễ dàng bị đổi tên. Thông báo trên trang, Rhymastic và Wowy cho biết việc bị đổi tên không phải do các nghệ sĩ thực hiện, chưa nắm được nguyên nhân.\r\n\r\nĐến sáng 13/8, trang của rapper Wowy đã được trả lại tên cũ. Trong khi đó, fanpage của Rhymastic vẫn hiển thị tên lạ.', '2022-08-15', 1, 0, 2, '2022-08-14 20:16:19', '2022-08-14 20:16:19'),
(13, 2, 'Gen Z ruồng bỏ Facebook', 'Nền tảng mạng xã hội đình đám một thời dần trở nên vô giá trị với giới trẻ.', '202208150317ttxvn_facebook.webp', 'Mặc dù lượng GenZ sử dụng Internet đang tăng mạnh, ngày càng ít người sử dụng Facebook. Cụ thể, theo nghiên cứu vừa được Pew Research Center công bố hôm 10/8, chỉ có 32% thanh thiếu niên 13-17 tuổi ở Mỹ sử dụng mạng xã hội của Meta.\r\n\r\nTrong khi đó, ở báo cáo hồi năm 2014-2015, nền tảng này từng chiếm đến 71% người dùng, bỏ xa Instagram hay Snapchat.\r\n\r\nTheo TechCrunch, ngay cả báo cáo vào năm 2013 cũng cho thấy mặc dù 77% sử dụng Facebook, người dùng trẻ vẫn cảm thấy tiêu cực về nền tảng.\r\n\r\n“Facebook đã len lỏi vào đời sống thường ngày của giới trẻ, nhưng thường chỉ được coi như một công cụ hoặc nghĩa vụ với gia đình hơn là một nền tảng thú vị của riêng họ”, Pew Research Center viết.\r\n\r\nBáo cáo còn chỉ ra họ thường tỏ ra hứng thú với các mạng xã hội khác dù không sử dụng thường xuyên như Facebook. Xu hướng này vẫn còn kéo dài đến tận bây giờ, khiến thế hệ trẻ dần ruồng bỏ Facebook.', '2022-08-15', 1, 0, 1, '2022-08-14 20:17:47', '2022-08-14 20:17:47'),
(14, 3, 'Tỷ phú tiền số bị khóa ví vì trò chơi khăm', 'Kẻ xấu đã cố ý gửi tiền đến ví của nhiều nhân vật có tiếng trong ngành bằng Tornado Cash, khiến họ bị khóa tài khoản.', '202208150322Justin_Sun.webp', 'Hôm 13/8, Justin Sun, Giám đốc điều hành blockchain Tron thông báo rằng ông đã bị khóa tài khoản trên nền tảng tài chính phi tập trung Aave. Sun cho biết thêm rằng đã nguyên nhân là có người dùng ẩn danh gửi cho ông 0,1 ETH bằng công cụ “trộn” giao dịch Tornado Cash, khiến tài khoản bị vô hiệu hóa.\'\r\n\r\nTrước đó, Bộ Tài chính Mỹ đã cấm Tornado Cash, vốn được nhiều tội phạm công nghệ sử dụng nhằm xóa dấu vết. Trong bài đăng của Justin Sun, nhiều người dùng đưa hướng xử lý khi ông khóa tài khoản. Đến chiều ngày 14/8, CEO Tron cho biết ông đã được mở tài khoản trở lại', '2022-08-15', 1, 0, 2, '2022-08-14 20:22:44', '2022-08-14 20:22:44'),
(15, 3, 'Binance thu hồi gần hết số tiền từ một vụ hack', 'Sàn giao dịch tiền số lớn nhất thế giới đã đóng băng 80% số tài sản bị đánh cắp từ nền tảng Curve Finance.', '20220815032404890cb8cf134a4f86b10fca40381ba6.webp', 'Trong một bài đăng trên Twitter, Changpeng Zhao (CZ), Giám đốc điều hành của Binance xác nhận sàn giao dịch này đã đóng băng tài khoản và thu hồi 450.000 USD. Số tài sản này chiếm 80% khoản tiền bị đánh cắp từ nền tảng Curve Finance.\r\n\r\nSàn giao dịch này đang truy vết để gửi số tiền nói trên về ví của chủ sở hữu trước vụ hack. Hôm 8/8, đội ngũ phát triển Curve Finance đã phát hiện ra các vụ tấn công và cảnh báo người dùng. Một giờ sau, nhóm phát triển cho biết họ đã tìm thấy lỗ hổng và sẽ giải quyết. Tuy vậy, hacker đã kịp đánh cắp khoảng 537.000 USDC.', '2022-08-15', 1, 1, 1, '2022-08-14 20:24:43', '2022-08-14 23:52:12'),
(16, 3, 'Nhà đầu tư dài hạn cắt lỗ Bitcoin', 'Trong bối cảnh kinh tế vĩ mô bất ổn, nhà đầu tư Bitcoin dài hạn vẫn bán tiền mã hoá bất chấp thua lỗ.', '2022081503264512_bitcoin21.webp', 'Theo Glassnode, giá Bitcoin đã quay đầu sau mức cảm quan trọng về mặt tâm lý, mốc 24.000 USD/đồng. Giá tăng trong bối cảnh bất ổn khiến nhiều người hoài nghi rằng liệu đây có phải đợt tăng giá bền vững hay không. Kể từ đầu tháng 5, nhóm người nắm giữ dài hạn đã phân phối ròng khoảng 222.000 BTC. Con số này tương đương 1,6% lượng nắm giữ cao nhất mọi thời đại của nhà đầu tư dài hạn.\r\n\r\nHành vi của những người nắm giữ dài hạn được phân tích qua khả năng sinh lời của khoản nắm giữ và khả năng sinh lời dựa trên số vốn bỏ ra. Theo dữ liệu on-chain (trên chuỗi khối) chỉ số LTH-MVRV>1. Điều này đồng nghĩa các nhà đầu tư dài hạn đã hoà vốn.\r\n\r\nCơ sở chi phí của nhà đầu tư dài hạn hiện dao động quanh mức 22.600 USD, cho thấy nhóm này đang lãi khoảng 5% so với thị giá hiện tại.', '2022-08-15', 1, 0, 1, '2022-08-14 20:26:05', '2022-08-14 20:26:05'),
(17, 3, 'Mỹ cấm máy trộn chuyên rửa tiền mã hóa', 'Bộ Tài chính Mỹ đã tuyên bố cấm Tornado Cash, một dịch vụ \"trộn\" tiền mã hóa cho phép người dùng che giấu thông tin giao dịch.', '202208150327tornado_cash.webp', 'Theo thông báo từ Văn phòng Kiểm soát Tài sản Nước ngoài (OFAC) của Bộ Tài chính Mỹ, Tornado Cash đã bị liệt vào danh sách Chỉ định Đặc biệt Quốc gia (SDN) bên cạnh 44 ví Ethereum và USDC liên quan. Những ví bị cấm gồm có hợp đồng thông minh vận hành Tornado Cash, địa chỉ Gitcoin và ví quyên góp Tornado Cash.\r\n\r\nHồi tháng 5, OFAC đã bổ sung Blender.io, cũng là một giao thức trộn tiền số, vào danh sách SDN. Tuy nhiên, điểm khác biệt giữa hai nền tảng là tính phi tập trung của Tornado Cash. Như vậy, đây là lần đầu tiên Mỹ giáng đòn trừng phạt vào một nền tảng tài chính phi tập trung (DeFi).', '2022-08-15', 1, 0, 2, '2022-08-14 20:27:22', '2022-08-14 20:27:22'),
(18, 3, 'Mỹ cấm máy trộn chuyên rửa tiền mã hóa', 'Bộ Tài chính Mỹ đã tuyên bố cấm Tornado Cash, một dịch vụ \"trộn\" tiền mã hóa cho phép người dùng che giấu thông tin giao dịch.', '202208150327tornado_cash.webp', 'Theo thông báo từ Văn phòng Kiểm soát Tài sản Nước ngoài (OFAC) của Bộ Tài chính Mỹ, Tornado Cash đã bị liệt vào danh sách Chỉ định Đặc biệt Quốc gia (SDN) bên cạnh 44 ví Ethereum và USDC liên quan. Những ví bị cấm gồm có hợp đồng thông minh vận hành Tornado Cash, địa chỉ Gitcoin và ví quyên góp Tornado Cash.\r\n\r\nHồi tháng 5, OFAC đã bổ sung Blender.io, cũng là một giao thức trộn tiền số, vào danh sách SDN. Tuy nhiên, điểm khác biệt giữa hai nền tảng là tính phi tập trung của Tornado Cash. Như vậy, đây là lần đầu tiên Mỹ giáng đòn trừng phạt vào một nền tảng tài chính phi tập trung (DeFi).', '2022-08-15', 1, 0, 2, '2022-08-14 20:27:22', '2022-08-14 20:27:22'),
(19, 1, 'Motorola xác nhận lại ngày ra mắt Razr 2022, X30 Pro và S30 Pro', 'ưqffhjqưh', '2022081505514512_bitcoin21.webp', 'uveh', '2022-08-15', 0, 0, 1, '2022-08-14 22:51:39', '2022-08-14 22:54:10'),
(20, 1, 'thất tình có nên buôn', 'thất tình là chuyện nhỏ', '202208150851applevafacebookdacomkhonglanhcanhkhongngotketugiuanamngoai_1280x720-800-resize.jpg', 'thất tình là gì\r\nvì sao phải buồn\r\nnên làm gì khi buồn và thất tình', '2022-01-02', 0, 1, 1, '2022-08-15 01:51:06', '2022-08-15 01:51:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `hinhAnh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangThai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `vaiTro` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `hinhAnh`, `trangThai`, `vaiTro`) VALUES
(1, 'Hiếu Nguyễn', 'hieunqpd04773@fpt.edu.vn', NULL, '$2y$10$EZKDBqeEVbYQatXPJiwBbeHX8mN7OX1Ed7Uf.zOIVUJ2/mO/dSMLa', 'OhGzeG4fcMqBdpWaQytHGZRo1qYGExMBryEMrOVxTlhfL89uf5ooU8oN8NB6', '2022-08-02 07:50:13', '2022-08-09 09:27:55', 'hieu.jpg', '1', '1'),
(2, 'Hieuu', 'hieunqh@gmail.com', NULL, '$2y$10$BkpduwiVUdhjr3xIRetZZOZLgW9gaOQe6GKUJEI7RgBeqs5vklBIe', NULL, '2022-08-02 18:00:38', '2022-08-09 18:45:55', '123', '0', '1'),
(3, 'An Dog', 'andog@gmail.com', NULL, '$2y$10$w04Tqq42bIXgpz6NIemS1eDZWcVDhBH8eKew8lOKzAAqTXvvfvQii', NULL, '2022-08-02 18:01:21', '2022-08-02 18:01:21', '123', '1', '0'),
(4, 'Nguyễn Tấn Đạt', 'datg@gmail.com', NULL, '$2y$10$zDwvlL0cpx1Yc41pw9aszeuTfJLYu4eFfEKJaqnlzskC1UQnvap.K', NULL, '2022-08-12 07:41:58', '2022-08-12 07:41:58', '202208121441efa0b7030fe0cebe97f1.jpg', '1', '0'),
(5, 'nguyễn kha', 'khantn.game@gmail.com', NULL, '$2y$10$XWxAAKYO3DuUHFNtWdxysu8GaxvOKVwv8kqd.HkjLlke4ZSoXAg0i', NULL, '2022-08-15 01:48:51', '2022-08-15 01:48:51', '202208150848ttxvn_facebook.webp', '1', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `binhLuanTin` (`tin_id`),
  ADD KEY `nguoiDungBinhLuan` (`nguoiDung_id`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `tin`
--
ALTER TABLE `tin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `danhMuc_id` (`danhMuc_id`),
  ADD KEY `tacGia_id` (`tacGia_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tin`
--
ALTER TABLE `tin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhLuanTin` FOREIGN KEY (`tin_id`) REFERENCES `tin` (`id`);

--
-- Constraints for table `tin`
--
ALTER TABLE `tin`
  ADD CONSTRAINT `tin_ibfk_1` FOREIGN KEY (`danhMuc_id`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
