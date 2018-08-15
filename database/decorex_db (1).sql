-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 15, 2018 at 10:26 AM
-- Server version: 5.6.29-76.2-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `decorex_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_accountdetail`
--

CREATE TABLE `tbl_accountdetail` (
  `account_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `e_mail` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `ifsc_code` varchar(255) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_banner`
--

CREATE TABLE `tbl_banner` (
  `banner_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `file_path` longtext NOT NULL,
  `descr` longtext NOT NULL,
  `status` varchar(20) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_banner`
--

INSERT INTO `tbl_banner` (`banner_id`, `title`, `filename`, `file_path`, `descr`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Home Lighting', 'slider-bg1.jpg', 'E:/xampp/htdocs/decorex/uploads/banner/slider-bg1.jpg', ' UPTO <span class=\"pri-color\">50<sup>%<br>OFF</sup></span>', 'active', '2018-07-05 08:07:15', '2018-07-05 08:13:22'),
(2, 'Outdoor Lighting', 'slider-bg2.jpg', 'E:/xampp/htdocs/decorex/uploads/banner/slider-bg2.jpg', ' UPTO <span class=\"pri-color\">50<sup>%<br>OFF</sup></span>', 'active', '2018-07-05 08:14:26', ''),
(3, 'Commercial Lighting', 'slider-bg4.jpg', 'E:/xampp/htdocs/decorex/uploads/banner/slider-bg4.jpg', ' UPTO <span class=\"pri-color\">50<sup>%<br>OFF</sup></span>', 'active', '2018-07-05 08:15:14', ''),
(4, 'Decorative Lighting', 'slider-bg3.jpg', 'E:/xampp/htdocs/decorex/uploads/banner/slider-bg3.jpg', ' UPTO <span class=\"pri-color\">50<sup>%<br>OFF</sup></span>', 'active', '2018-07-05 08:16:08', ''),
(5, 'Special LED Lamp', 'slider-bg5.jpg', 'E:/xampp/htdocs/decorex/uploads/banner/slider-bg5.jpg', ' UPTO <span class=\"pri-color\">50<sup>%<br>OFF</sup></span>', 'active', '2018-07-05 08:16:46', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `blog_id` int(11) NOT NULL,
  `blog_title` varchar(255) NOT NULL,
  `blog_img` varchar(255) NOT NULL,
  `blog_imgpath` varchar(255) NOT NULL,
  `blog_date` date NOT NULL,
  `blog_descr` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog_comment`
--

CREATE TABLE `tbl_blog_comment` (
  `bc_id` int(11) NOT NULL,
  `blog_id` varchar(20) NOT NULL,
  `bc_name` varchar(255) NOT NULL,
  `bc_email` varchar(100) NOT NULL,
  `bc_decr` text NOT NULL,
  `createdate` datetime NOT NULL,
  `modifydate` datetime NOT NULL,
  `active` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tbl_blog_comment`
--

INSERT INTO `tbl_blog_comment` (`bc_id`, `blog_id`, `bc_name`, `bc_email`, `bc_decr`, `createdate`, `modifydate`, `active`) VALUES
(2, '3', 'Ajay', 'ajaykan47@gmail.com', 'Donec tempor nunc at augue viverra ultrices.Donec tempor nunc at augue viverra ultrices.', '2018-01-12 23:09:50', '2018-01-14 16:33:06', 1),
(4, '3', 'Suresh Jaiswal', 'suresh@gmail.com', 'Lorem ipsum dolor sit amet, consectetuer adip iscing elit. Aenean commodo ligula eget uis dolor. Aenean mas Donec pede justo, fringilla vel, aliquet nec, vulputate sa. Cum sociis mag natoque penatibus et magnis dis parturient montes.\r\n\r\nLorem ipsum dolor sit amet, consectetuer adip iscing elit. Aenean commodo ligula eget uis dolor. Aenean mas Donec pede justo, fringilla vel, aliquet nec, vulputate sa. Cum sociis mag natoque penatibus et magnis dis parturient montes.', '2018-01-12 23:11:32', '2018-01-13 00:29:41', 1),
(5, '3', 'Raj', 'raj@gmail.com', 'augue rutrum sed. Praesent id urna non lectus volutpat efficitur. Mauris vitae enim acede\r\naugue rutrum sed. Praesent id urna non lectus volutpat efficitur. Mauris vitae enim acede\r\naugue rutrum sed. Praesent id urna non lectus volutpat efficitur. Mauris vitae enim acede\r\n\r\n\r\naugue rutrum sed. Praesent id urna non lectus volutpat efficitur. Mauris vitae enim acedeaugue rutrum sed. Praesent id urna non lectus volutpat efficitur. Mauris vitae enim acedeaugue rutrum sed. Praesent id urna non lectus volutpat efficitur. Mauris vitae enim acede', '2018-01-12 23:15:41', '2018-01-13 00:32:06', 1),
(6, '3', 'Amit Kumar Singh', 'amit@gmail.com', 'I agree with you. Lorem ipsum dolor sit amet.', '2018-01-13 00:42:31', '0000-00-00 00:00:00', 1),
(7, '3', 'Swati', 'swati@gmail.com', 'I agree with you. Lorem ipsum dolor sit amet.\r\nI agree with you. Lorem ipsum dolor sit amet.', '2018-01-13 00:44:13', '2018-01-14 19:36:52', 1),
(8, '3', 'Clint Eastwood', 'clst@gmail.com', 'Aliquam at faucibus arcu. Sed nec mi nunc. Pellentesque porta viverra justo, eu pretium sapien lobortis in. Pellentesque vel porttitor orci. Donec id ante id magna volutpat ullamcorper eget et magna. Proin nec dolor sit', '2018-01-13 00:45:02', '0000-00-00 00:00:00', 2),
(9, '3', 'Ajay Kumar', 'ajaykan47@gmail.com', 'Before blogging became popular, digital communities took many forms, including Usenet, commercial online services such as GEnie, Byte Information Exchange (BIX) and the early CompuServe, e-mail lists,[14] and Bulletin ', '2018-01-13 23:57:14', '2018-01-14 16:33:14', 1),
(12, '7', 'Deepak Kumar', 'design@panchalcomputers.com', 'COMING SOON ! AAWAHAN ! ', '2018-01-14 20:20:14', '2018-01-14 20:20:29', 1),
(14, '8', 'Deepak Kumar', 'dkpmdh@gmail.com', 'Nice website design', '2018-01-15 08:17:57', '2018-01-15 08:18:16', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `cat_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `seo_title` varchar(255) NOT NULL,
  `meta_tag` varchar(255) NOT NULL,
  `meta_descr` varchar(255) NOT NULL,
  `meta_keyword_descr` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `cat_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`cat_id`, `name`, `seo_title`, `meta_tag`, `meta_descr`, `meta_keyword_descr`, `created_at`, `updated_at`, `status`, `cat_url`) VALUES
(1, 'Slim LED Panels', 'Slim LED Panels', 'Null', 'Null', 'Null', '2018-07-03 11:44:58', '2018-07-05 13:10:05', 'Active', 'slim-led-panels'),
(2, 'Back LIT LED Down Light', 'Back LIT LED Down Light', 'Null', 'Null', 'Null', '2018-07-03 11:51:46', '2018-07-03 11:57:17', 'Active', 'back-lit-led-down-light'),
(3, 'Surface LED Panels', 'Surface LED Panels', 'Null', 'META DESCRIPTION', 'META KEYWORDS', '2018-07-03 11:54:19', '2018-07-03 11:57:49', 'Active', 'surface-led-panels'),
(4, 'LED Concealed Light', 'LED Concealed Light', 'Null', 'Null', 'Null', '2018-07-03 11:58:15', '', 'Active', 'led-concealed-light'),
(5, 'COB Spot Light', 'COB Spot Light', 'Null', 'Null', 'Null', '2018-07-03 11:58:37', '', 'Active', 'cob-spot-light'),
(6, 'LED Track Light', 'LED Track Light', 'Null', 'Null', 'Null', '2018-07-03 11:58:55', '', 'Active', 'led-track-light'),
(7, '1 Meter Track', '1 Meter Track', 'Null', 'Null', 'Null', '2018-07-03 11:59:22', '', 'Active', '1-meter-track'),
(8, 'Single Track', 'Single Track', 'Null', 'Null', 'Null', '2018-07-03 11:59:43', '', 'Active', 'single-track'),
(9, 'Falecealing Track', 'Falecealing Track', 'Null', 'Null', 'Null', '2018-07-03 12:00:05', '', 'Active', 'falecealing-track'),
(10, 'LED Bulbs', 'LED Bulbs', 'Null', 'Null', 'Null', '2018-07-03 12:00:25', '', 'Active', 'led-bulbs'),
(11, 'GU 10 Lamp', 'GU 10 Lamp', 'Null', 'Null', 'Null', '2018-07-03 12:00:48', '', 'Active', 'gu-10-land'),
(12, 'GU10 Fitting', 'GU10 Fitting', 'Null', 'Null', 'Null', '2018-07-03 12:01:13', '', 'Active', 'gu10-fitting'),
(13, 'GU 10 Lamp Holder', 'GU 10 Lamp Holder', 'Null', 'Null', 'Null', '2018-07-03 12:01:36', '', 'Active', 'gu-10-land-holder'),
(14, 'LED Filament Lamp', 'LED Filament Lamp', 'Null', 'Null', 'Null', '2018-07-03 12:01:59', '', 'Active', 'led-filament-lamp'),
(15, 'LED Street Light', 'LED Street Light', 'Null', 'Null', 'Null', '2018-07-03 12:02:21', '', 'Active', 'led-street-light'),
(16, 'LED Solar Street Light', 'LED Solar Street Light', 'Null', 'Null', 'Null', '2018-07-03 12:02:41', '', 'Active', 'led-solar-street-light'),
(17, 'LED Flood Light', 'LED Flood Light', 'Null', 'Null', 'Null', '2018-07-03 12:03:09', '', 'Active', 'led-flood-light'),
(18, 'Highway/Mediumway Fitting', 'Highway/Mediumway Fitting', 'Null', 'Null', 'Null', '2018-07-03 12:03:31', '', 'Active', 'highway-mediumway-fitting'),
(19, 'LED Decorative Holder', 'LED Decorative Holder', 'Null', 'Null', 'Null', '2018-07-03 12:03:51', '', 'Active', 'led-decorative-holder'),
(20, 'Candle Lamp', 'Candle Lamp', 'Null', 'Null', 'Null', '2018-07-03 12:04:08', '', 'Active', 'candle-land'),
(21, 'Drivers', 'Drivers', 'Null', 'Null', 'Null', '2018-07-03 12:04:25', '', 'Active', 'drivers'),
(22, 'LED Strip Light', 'LED Strip Light', 'Null', 'Null', 'Null', '2018-07-03 12:04:51', '', 'Active', 'led-strip-light'),
(23, 'Aluminum Pendant Holder', 'Aluminum Pendant Holder', 'Null', 'Null', 'Null', '2018-07-27 06:32:12', '', 'Active', 'aluminum-pendant-holder'),
(24, 'Wooden Pendant Holder', 'Null', 'Null', 'Null', 'Null', '2018-07-27 06:32:31', '', 'Active', 'wooden-pendant-holder'),
(25, 'LED Filament Candle', 'LED FILAMENT CANDLE', 'Null', 'Null', 'Null', '2018-07-27 10:27:18', '2018-07-27 10:30:56', 'Active', 'led-filament-candle'),
(26, 'LED Candle', 'LED Candle', 'Null', 'Null', 'Null', '2018-07-27 10:31:30', '', 'Active', 'led-candle');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_catgst`
--

CREATE TABLE `tbl_catgst` (
  `catgst_id` int(11) NOT NULL,
  `tax_id` varchar(255) NOT NULL,
  `cat_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `tax_perctg` varchar(255) NOT NULL,
  `from_date` varchar(255) NOT NULL,
  `end_date` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `shipping_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_catgst`
--

INSERT INTO `tbl_catgst` (`catgst_id`, `tax_id`, `cat_id`, `name`, `tax_perctg`, `from_date`, `end_date`, `status`, `created_at`, `updated_at`, `shipping_id`) VALUES
(1, '4', '2', 'Back LIT LED Down Light', '18', '2018-08-22', '', 'Active', '2018-08-14 14:43:36', '', 2),
(2, '4', '2', 'Back LIT LED Down Light', '12', '2018-08-14', '', 'Active', '2018-08-14 14:43:51', '', 3),
(3, '4', '2', 'Back LIT LED Down Light', '12', '2018-08-15', '2018-08-15', 'Active', '2018-08-14 14:44:22', '', 2),
(4, '4', '1', 'Slim LED Panels', '18', '2018-08-14', '', 'Active', '2018-08-14 15:07:21', '', 2),
(5, '5', '1', 'Slim LED Panels', '12', '2018-08-21', '', 'Active', '2018-08-14 15:07:41', '', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_clients`
--

CREATE TABLE `tbl_clients` (
  `client_id` int(11) NOT NULL,
  `client_title` varchar(255) NOT NULL,
  `client_logo` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_clients`
--

INSERT INTO `tbl_clients` (`client_id`, `client_title`, `client_logo`, `created_at`, `updated_at`, `status`) VALUES
(1, '', 'NSIC.png', '2018-07-05 09:45:40', '2018-07-05 09:49:19', 'Active'),
(2, '', 'is09.png', '2018-07-05 09:50:42', '2018-07-05 10:00:33', 'Active'),
(3, '', 'bisc.png', '2018-07-05 09:51:09', '2018-07-05 10:00:59', 'Active'),
(4, '', 'msme.png', '2018-07-05 09:51:24', '2018-07-05 10:01:17', 'Active'),
(5, '', 'gem.png', '2018-07-05 09:51:48', '2018-07-05 10:01:33', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comments`
--

CREATE TABLE `tbl_comments` (
  `comment_id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `post_id` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `created_date` varchar(255) NOT NULL,
  `mdify_date` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_copyright`
--

CREATE TABLE `tbl_copyright` (
  `cpy_id` int(11) NOT NULL,
  `years` varchar(255) NOT NULL,
  `cmp_name` varchar(255) NOT NULL,
  `reserved` varchar(255) NOT NULL,
  `powered_by` varchar(255) NOT NULL,
  `terms_condition` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `status` tinyint(255) NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `cust_id` int(11) NOT NULL,
  `cust_name` varchar(255) NOT NULL,
  `cust_mob` varchar(255) NOT NULL,
  `cust_mail` varchar(255) NOT NULL,
  `cust_address` varchar(255) NOT NULL,
  `cust_nof_ticket` varchar(255) NOT NULL,
  `total_price` varchar(255) NOT NULL,
  `created_date` varchar(255) NOT NULL,
  `privacy_detail` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `gallery_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `file_path` longtext NOT NULL,
  `status` varchar(20) NOT NULL,
  `createdate` datetime NOT NULL,
  `modifydate` datetime NOT NULL,
  `gal_type` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_happyclient`
--

CREATE TABLE `tbl_happyclient` (
  `tml_id` int(11) NOT NULL,
  `icon_class` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `counting` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_happyclient`
--

INSERT INTO `tbl_happyclient` (`tml_id`, `icon_class`, `name`, `counting`, `status`, `created_at`, `updated_at`) VALUES
(1, '+', 'Employees', '100', 'Active', '2018-07-05 11:40:21', ''),
(2, '%', 'Satisfaction', '100', 'Active', '2018-07-05 11:40:46', ''),
(3, '+', 'Stores', '10', 'Active', '2018-07-05 11:41:08', ''),
(4, '+', 'Satisfied customers', '1500', 'Active', '2018-07-05 11:41:34', '2018-07-09 12:13:55');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_heading`
--

CREATE TABLE `tbl_heading` (
  `hd_id` int(11) NOT NULL,
  `title_name` varchar(255) NOT NULL,
  `head_title` varchar(255) NOT NULL,
  `head_descr` longtext NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_heading`
--

INSERT INTO `tbl_heading` (`hd_id`, `title_name`, `head_title`, `head_descr`, `created_at`, `updated_at`, `status`) VALUES
(1, '1', 'Our story', '<h6><em>Rapidiously productize clicks-and-mortar schemas via magnetic supply chains. Holisticly extend customer directed total linkage with standards compliant best practices. Dramatically monetize prospective paradigms and client-centered catalysts for change.</em></h6>\r\n\r\n<p>Rapidiously productize clicks-and-mortar schemas via magnetic supply chains. Holisticly extend customer directed total linkage with standards compliant best practices. Dramatically monetize prospective paradigms and client-centered catalysts for change.</p>\r\n\r\n<p>Uniquely grow out-of-the-box benefits after performance based data. Completely formulate pandemic relationships after impactful testing procedures. Dynamically incentivize interactive convergence with standards compliant best practices. Phosfluorescently reintermediate effective imperatives vis-a-vis standardized convergence. Appropriately synthesize diverse functionalities and highly efficient web-readiness.</p>\r\n', '2018-07-05 11:27:26', '2018-08-01 11:36:12', 'Active'),
(2, '2', 'Privacy & Policy', '<h2>PRIVACY STATEMENT</h2>\r\n<h4>SECTION 1 - WHAT DO WE DO WITH YOUR INFORMATION?</h4>\r\n\r\n<p>When you purchase something from our store, as part of the buying and selling process, we collect the personal information you give us such as your name, address and email address.</p>\r\n\r\n<p>Email marketing: It is only with your explicit permission that we may send you emails about our store, new products and other updates. Signing up for an account with us or making a purchase from our website <strong>does not</strong> automatically enroll you into our email marketing program.</p>\r\n\r\n<h4>SECTION 2 - CONSENT</h4>\r\n\r\n<h6>How do you get my consent?</h6>\r\n\r\n<p>When you provide us with personal information to complete a transaction, verify your credit card, place an order, arrange for a delivery or return a purchase, we imply that you consent to our collecting it and using it for that specific reason only.</p>\r\n\r\n<p>If we ask for your personal information for a secondary reason, like marketing, we will either ask you directly for your expressed consent, or provide you with an opportunity to say no.</p>\r\n\r\n<h6>How do I withdraw my consent?</h6>\r\n\r\n<p>If after you opt-in, you change your mind, you may withdraw your consent for us to contact you, for the continued collection, use or disclosure of your information, at anytime, by contacting us via email or mailing us at:</p>\r\n\r\n<h6>SRI JSB Lighting Company</h6>\r\n\r\n<h6>3, gokul pura Ramte Ram Road</h6>\r\n\r\n<h6>Ghaziabad .U.P. 201001, INDIA</h6>\r\n\r\n<h4>SECTION 3 - DISCLOSURE</h4>\r\n\r\n<p>We may disclose your personal information if we are required by law to do so or if you violate our Terms of Service.</p>\r\n\r\n<h4>SECTION 4 - PAYMENT GATEWAY</h4>\r\n\r\n<p>Neither do we have access to, nor do we store your credit card data. Your payment is handled by a payment gateway that is encrypted through the Payment Card Industry Data Security Standard (PCI-DSS). All direct payment gateways adhere to the standards set by PCI-DSS as managed by the PCI Security Standards Council, which is a joint effort of brands like Visa, MasterCard, American Express and Discover. PCI-DSS requirements help ensure the secure handling of credit card information by its service providers.</p>\r\n\r\n<h4>SECTION 5 - THIRD-PARTY SERVICES</h4>\r\n\r\n<p>In general, the third-party providers used by us will only collect, use and disclose your information to the extent necessary to allow them to perform the services they provide to us.</p>\r\n\r\n<p>However, certain third-party service providers, such as payment gateways and other payment transaction processors, have their own privacy policies in respect to the information we are required to provide to them for your purchase-related transactions. For these providers, we recommend that you read their privacy policies so you can understand the manner in which your personal information will be handled by these providers.</p>\r\n\r\n<p>In particular, remember that certain providers may be located in or have facilities that are located a different jurisdiction than either you or us. So if you elect to proceed with a transaction that involves the services of a third-party service provider, then your information may become subject to the laws of the jurisdiction(s) in which that service provider or its facilities are located.</p>\r\n\r\n<p>As an example, if you are located in Canada and your transaction is processed by a payment gateway located in the United States, then your personal information used in completing that transaction may be subject to disclosure under United States legislation, including the Patriot Act.</p>\r\n\r\n<p>Once you leave our store&rsquo;s website or are redirected to a third-party website or application, you are no longer governed by this Privacy Policy or our website&rsquo;s Terms of Service.</p>\r\n\r\n<h6>Links</h6>\r\n\r\n<p>When you click on links on our store, they may direct you away from our site. We are not responsible for the privacy practices of other sites and encourage you to read their privacy statements.</p>\r\n\r\n<h4>SECTION 6 - SECURITY</h4>\r\n\r\n<p>To protect your personal information, we take reasonable precautions and follow industry best practices to make sure it is not inappropriately lost, misused, accessed, disclosed, altered or destroyed.</p>\r\n\r\n<p>When you make an online payment on our website, the information is encrypted using secure socket layer technology (SSL) and stored with a AES-256 encryption. We follow all PCI-DSS requirements and implement additional generally accepted industry standards.</p>\r\n\r\n<h4>SECTION 7 - COOKIES</h4>\r\n\r\n<p>Here is a list of cookies that we use. We&rsquo;ve listed them here so you that you can choose if you want to opt-out of cookies or not.</p>\r\n\r\n<p>_session_id, unique token, sessional, Allows us to store information about your session (referrer, landing page, etc).</p>\r\n\r\n<p>cart, unique token, persistent for 2 weeks, Stores information about the contents of your cart.</p>\r\n\r\n<p>_secure_session_id, unique token, sessional storefront_digest, unique token, indefinite If the shop has a password, this is used to determine if the current visitor has access.</p>\r\n\r\n<h4>SECTION 8 - AGE OF CONSENT</h4>\r\n\r\n<p>By using this site, you represent that you are at least the age of majority in your state or province of residence, or that you are the age of majority in your state or province of residence and you have given us your consent to allow any of your minor dependents to use this site.</p>\r\n\r\n<h4>SECTION 9 - CHANGES TO THIS PRIVACY POLICY</h4>\r\n\r\n<p>We reserve the right to modify this privacy policy at any time, so please review it frequently. Changes and clarifications will take effect immediately upon their posting on the website. If we make material changes to this policy, we will notify you here that it has been updated, so that you are aware of what information we collect, how we use it, and under what circumstances, if any, we use and/or disclose it.</p>\r\n\r\n<p>If our store is acquired or merged with another company, your information may be transferred to the new owners so that we may continue to sell products to you.</p>\r\n\r\n<h6>QUESTIONS AND CONTACT INFORMATION</h6>\r\n\r\n<p>If you would like to: access, correct, amend or delete any personal information we have about you, register a complaint, or simply want more information contact our Privacy Compliance Officer by mail at</p>\r\n\r\n<h6>SRI JSB Lighting Company</h6>\r\n\r\n<h6>3, gokul pura Ramte Ram Road</h6>\r\n\r\n<h6>Ghaziabad .U.P. 201001, INDIA</h6>\r\n', '2018-07-05 11:51:09', '2018-07-05 12:06:44', 'Active'),
(3, '3', 'TERMS OF SERVICE', '<h6>OVERVIEW</h6>\r\n\r\n<p>www.Decorex.in is owned and operated by Shri JSB LIGHTING COMPANY. Shri JSB LIGHTING COMPANY offers this website, including all information, tools and services available from this site to you, the user, conditioned upon your acceptance of all terms, conditions, policies and notices stated here.</p>\r\n\r\n<p>By visiting our site and/ or purchasing something from us, you engage in our &ldquo;Service&rdquo; and agree to be bound by the following terms and conditions (&ldquo;Terms of Service&rdquo;, &ldquo;Terms&rdquo;), including those additional terms and conditions and policies referenced herein and/or available by hyperlink. These Terms of Service apply to all users of the site, including without limitation users who are browsers, vendors, customers, merchants, and/ or contributors of content.</p>\r\n\r\n<p>Please read these Terms of Service carefully before accessing or using our website. By accessing or using any part of the site, you agree to be bound by these Terms of Service. If you do not agree to all the terms and conditions of this agreement, then you may not access the website or use any services. If these Terms of Service are considered an offer, acceptance is expressly limited to these Terms of Service.</p>\r\n\r\n<p>Any new features or tools which are added to the current store shall also be subject to the Terms of Service. You can review the most current version of the Terms of Service at any time on this page. We reserve the right to update, change or replace any part of these Terms of Service by posting updates and/or changes to our website. It is your responsibility to check this page periodically for changes. Your continued use of or access to the website following the posting of any changes constitutes acceptance of those changes.</p>\r\n\r\n<h4>SECTION 1 - ONLINE STORE TERMS</h4>\r\n\r\n<p>By agreeing to these Terms of Service, you represent that you are at least the age of majority in your state or province of residence, or that you are the age of majority in your state or province of residence and you have given us your consent to allow any of your minor dependents to use this site.</p>\r\n\r\n<p>You may not use our products for any illegal or unauthorized purpose nor may you, in the use of the Service, violate any laws in your jurisdiction (including but not limited to copyright laws).</p>\r\n\r\n<p>You must not transmit any worms or viruses or any code of a destructive nature. A breach or violation of any of the Terms will result in an immediate termination of your Services.</p>\r\n\r\n<h4>SECTION 2 - GENERAL CONDITIONS</h4>\r\n\r\n<p>We reserve the right to refuse service to anyone for any reason at any time. You understand that your content (not including credit card information), may be transferred unencrypted and involve (a) transmissions over various networks; and (b) changes to conform and adapt to technical requirements of connecting networks or devices. Credit card information is always encrypted during transfer over networks. You agree not to reproduce, duplicate, copy, sell, resell or exploit any portion of the Service, use of the Service, or access to the Service or any contact on the website through which the service is provided, without express written permission by us. The headings used in this agreement are included for convenience only and will not limit or otherwise affect these Terms.</p>\r\n\r\n<h4>SECTION 3 - ACCURACY, COMPLETENESS AND TIMELINESS OF INFORMATION</h4>\r\n\r\n<p>We are not responsible if information made available on this site is not accurate, complete or current. The material on this site is provided for general information only and should not be relied upon or used as the sole basis for making decisions without consulting primary, more accurate, more complete or more timely sources of information. Any reliance on the material on this site is at your own risk.</p>\r\n\r\n<p>This site may contain certain historical information. Historical information, necessarily, is not current and is provided for your reference only. We reserve the right to modify the contents of this site at any time, but we have no obligation to update any information on our site. You agree that it is your responsibility to monitor changes to our site.</p>\r\n\r\n<h4>SECTION 4 - MODIFICATIONS TO THE SERVICE AND PRICES</h4>\r\n\r\n<p>Prices for our products are subject to change without notice.We reserve the right at any time to modify or discontinue the Service (or any part or content thereof) without notice at any time.</p>\r\n\r\n<p>We shall not be liable to you or to any third-party for any modification, price change, suspension or discontinuance of the Service.</p>\r\n\r\n<h4>SECTION 5 - PRODUCTS OR SERVICES</h4>\r\n\r\n<p>Certain products or services may be available exclusively online through the website. These products or services may have limited quantities and are subject to return or exchange only according to our Return Policy.</p>\r\n\r\n<p>We have made every effort to display as accurately as possible the colors and images of our products that appear at the store. We cannot guarantee that your computer monitor&#39;s display of any color will be accurate.</p>\r\n\r\n<p>We reserve the right, but are not obligated, to limit the sales of our products or Services to any person, geographic region or jurisdiction. We may exercise this right on a case-by-case basis. We reserve the right to limit the quantities of any products or services that we offer. All descriptions of products or product pricing are subject to change at anytime without notice, at the sole discretion of us. We reserve the right to discontinue any product at any time. Any offer for any product or service made on this site is void where prohibited.</p>\r\n\r\n<p>We do not warrant that the quality of any products, services, information, or other material purchased or obtained by you will meet your expectations, or that any errors in the Service will be corrected.</p>\r\n\r\n<h4>SECTION 6 - ACCURACY OF BILLING AND ACCOUNT INFORMATION</h4>\r\n\r\n<p>We reserve the right to refuse any order you place with us. We may, in our sole discretion, limit or cancel quantities purchased per person, per household or per order. These restrictions may include orders placed by or under the same customer account, the same credit card, and/or orders that use the same billing and/or shipping address. In the event that we make a change to or cancel an order, we may attempt to notify you by contacting the e-mail and/or billing address/phone number provided at the time the order was made. We reserve the right to limit or prohibit orders that, in our sole judgment, appear to be placed by dealers, resellers or distributors.</p>\r\n\r\n<p>You agree to provide current, complete and accurate purchase and account information for all purchases made at our store. You agree to promptly update your account and other information, including your email address and credit card numbers and expiration dates, so that we can complete your transactions and contact you as needed.</p>\r\n\r\n<p>For more detail, please review our Returns Policy.</p>\r\n\r\n<h4>SECTION 7 - OPTIONAL TOOLS</h4>\r\n\r\n<p>We may provide you with access to third-party tools over which we neither monitor nor have any control nor input.</p>\r\n\r\n<p>You acknowledge and agree that we provide access to such tools &rdquo;as is&rdquo; and &ldquo;as available&rdquo; without any warranties, representations or conditions of any kind and without any endorsement. We shall have no liability whatsoever arising from or relating to your use of optional third-party tools.</p>\r\n\r\n<p>Any use by you of optional tools offered through the site is entirely at your own risk and discretion and you should ensure that you are familiar with and approve of the terms on which tools are provided by the relevant third-party provider(s).</p>\r\n\r\n<p>We may also, in the future, offer new services and/or features through the website (including, the release of new tools and resources). Such new features and/or services shall also be subject to these Terms of Service.</p>\r\n\r\n<h4>SECTION 8 - THIRD-PARTY LINKS</h4>\r\n\r\n<p>Certain content, products and services available via our Service may include materials from third-parties.</p>\r\n\r\n<p>Third-party links on this site may direct you to third-party websites that are not affiliated with us. We are not responsible for examining or evaluating the content or accuracy and we do not warrant and will not have any liability or responsibility for any third-party materials or websites, or for any other materials, products, or services of third-parties. We are not liable for any harm or damages related to the purchase or use of goods, services, resources, content, or any other transactions made in connection with any third-party websites. Please review carefully the third-party&#39;s policies and practices and make sure you understand them before you engage in any transaction. Complaints, claims, concerns, or questions regarding third-party products should be directed to the third-party.</p>\r\n\r\n<h4>SECTION 9 - USER COMMENTS, FEEDBACK AND OTHER SUBMISSIONS</h4>\r\n\r\n<p>If, at our request, you send certain specific submissions (for example contest entries) or without a request from us you send creative ideas, suggestions, proposals, plans, or other materials, whether online, by email, by postal mail, or otherwise (collectively, &#39;comments&#39;), you agree that we may, at any time, without restriction, edit, copy, publish, distribute, translate and otherwise use in any medium any comments that you forward to us. We are and shall be under no obligation (1) to maintain any comments in confidence; (2) to pay compensation for any comments; or (3) to respond to any comments.</p>\r\n\r\n<p>We may, but have no obligation to, monitor, edit or remove content that we determine in our sole discretion are unlawful, offensive, threatening, libelous, defamatory, pornographic, obscene or otherwise objectionable or violates any party&rsquo;s intellectual property or these Terms of Service.</p>\r\n\r\n<p>You agree that your comments will not violate any right of any third-party, including copyright, trademark, privacy, personality or other personal or proprietary right. You further agree that your comments will not contain libelous or otherwise unlawful, abusive or obscene material, or contain any computer virus or other malware that could in any way affect the operation of the Service or any related website. You may not use a false e-mail address, pretend to be someone other than yourself, or otherwise mislead us or third-parties as to the origin of any comments. You are solely responsible for any comments you make and their accuracy. We take no responsibility and assume no liability for any comments posted by you or any third-party.</p>\r\n\r\n<h4>SECTION 10 - PERSONAL INFORMATION</h4>\r\n\r\n<p>Your submission of personal information through the store is governed by our Privacy Policy.</p>\r\n\r\n<h4>SECTION 11 - ERRORS, INACCURACIES AND OMISSIONS</h4>\r\n\r\n<p>Occasionally there may be information on our site or in the Service that contains typographical errors, inaccuracies or omissions that may relate to product descriptions, pricing, promotions, offers, product shipping charges, transit times and availability. We reserve the right to correct any errors, inaccuracies or omissions, and to change or update information or cancel orders if any information in the Service or on any related website is inaccurate at any time without prior notice (including after you have submitted your order).</p>\r\n\r\n<p>We undertake no obligation to update, amend or clarify information in the Service or on any related website, including without limitation, pricing information, except as required by law. No specified update or refresh date applied in the Service or on any related website, should be taken to indicate that all information in the Service or on any related website has been modified or updated.</p>\r\n\r\n<h4>SECTION 12 - PROHIBITED USES</h4>\r\n\r\n<p>In addition to other prohibitions as set forth in the Terms of Service, you are prohibited from using the site or its content: (a) for any unlawful purpose; (b) to solicit others to perform or participate in any unlawful acts; (c) to violate any international, federal, provincial or state regulations, rules, laws, or local ordinances; (d) to infringe upon or violate our intellectual property rights or the intellectual property rights of others; (e) to harass, abuse, insult, harm, defame, slander, disparage, intimidate, or discriminate based on gender, sexual orientation, religion, ethnicity, race, age, national origin, or disability; (f) to submit false or misleading information; (g) to upload or transmit viruses or any other type of malicious code that will or may be used in any way that will affect the functionality or operation of the Service or of any related website, other websites, or the Internet; (h) to collect or track the personal information of others; (i) to spam, phish, pharm, pretext, spider, crawl, or scrape; (j) for any obscene or immoral purpose; or (k) to interfere with or circumvent the security features of the Service or any related website, other websites, or the Internet. We reserve the right to terminate your use of the Service or any related website for violating any of the prohibited uses.</p>\r\n\r\n<h4>SECTION 13 - DISCLAIMER OF WARRANTIES; LIMITATION OF LIABILITY</h4>\r\n\r\n<p>We do not guarantee, represent or warrant that your use of our service will be uninterrupted, timely, secure or error-free. We do not warrant that the results that may be obtained from the use of the service will be accurate or reliable.</p>\r\n\r\n<p>You agree that from time to time we may remove the service for indefinite periods of time or cancel the service at any time, without notice to you.</p>\r\n\r\n<p>You expressly agree that your use of, or inability to use, the service is at your sole risk. The service and all products and services delivered to you through the service are (except as expressly stated by us) provided &#39;as is&#39; and &#39;as available&#39; for your use, without any representation, warranties or conditions of any kind, either express or implied, including all implied warranties or conditions of merchantability, merchantable quality, fitness for a particular purpose, durability, title, and non-infringement. In no case shall SRI JSB LIGHTING COMPANY, our directors, officers, employees, affiliates, agents, contractors, interns, suppliers, service providers or licensors be liable for any injury, loss, claim, or any direct, indirect, incidental, punitive, special, or consequential damages of any kind, including, without limitation lost profits, lost revenue, lost savings, loss of data, replacement costs, or any similar damages, whether based in contract, tort (including negligence), strict liability or otherwise, arising from your use of any of the service or any products procured using the service, or for any other claim related in any way to your use of the service or any product, including, but not limited to, any errors or omissions in any content, or any loss or damage of any kind incurred as a result of the use of the service or any content (or product) posted, transmitted, or otherwise made available via the service, even if advised of their possibility. Because some states or jurisdictions do not allow the exclusion or the limitation of liability for consequential or incidental damages, in such states or jurisdictions, our liability shall be limited to the maximum extent permitted by law.</p>\r\n\r\n<h4>SECTION 14 - INDEMNIFICATION</h4>\r\n\r\n<p>You agree to indemnify, defend and hold harmless SRI JSB LIGHTING COMPANY and our parent, subsidiaries, affiliates, partners, officers, directors, agents, contractors, licensors, service providers, subcontractors, suppliers, interns and employees, harmless from any claim or demand, including reasonable attorneys&rsquo; fees, made by any third-party due to or arising out of your breach of these Terms of Service or the documents they incorporate by reference, or your violation of any law or the rights of a third-party.</p>\r\n\r\n<h4>SECTION 15 - SEVERABILITY</h4>\r\n\r\n<p>In the event that any provision of these Terms of Service is determined to be unlawful, void or unenforceable, such provision shall nonetheless be enforceable to the fullest extent permitted by applicable law, and the unenforceable portion shall be deemed to be severed from these Terms of Service, such determination shall not affect the validity and enforceability of any other remaining provisions.</p>\r\n\r\n<h4>SECTION 16 - TERMINATION</h4>\r\n\r\n<p>The obligations and liabilities of the parties incurred prior to the termination date shall survive the termination of this agreement for all purposes.</p>\r\n\r\n<p>These Terms of Service are effective unless and until terminated by either you or us. You may terminate these Terms of Service at any time by notifying us that you no longer wish to use our Services, or when you cease using our site.</p>\r\n\r\n<p>If in our sole judgment you fail, or we suspect that you have failed, to comply with any term or provision of these Terms of Service, we also may terminate this agreement at any time without notice and you will remain liable for all amounts due up to and including the date of termination; and/or accordingly may deny you access to our Services (or any part thereof).</p>\r\n\r\n<h4>SECTION 17 - ENTIRE AGREEMENT</h4>\r\n\r\n<p>The failure of us to exercise or enforce any right or provision of these Terms of Service shall not constitute a waiver of such right or provision.</p>\r\n\r\n<p>These Terms of Service and any policies or operating rules posted by us on this site or in respect to The Service constitutes the entire agreement and understanding between you and us and govern your use of the Service, superseding any prior or contemporaneous agreements, communications and proposals, whether oral or written, between you and us (including, but not limited to, any prior versions of the Terms of Service).</p>\r\n\r\n<p>Any ambiguities in the interpretation of these Terms of Service shall not be construed against the drafting party.</p>\r\n\r\n<h4>SECTION 18 - GOVERNING LAW</h4>\r\n\r\n<p>These Terms of Service and any separate agreements whereby we provide you Services shall be governed by Hyderabad jurisdiction only.</p>\r\n\r\n<h4>SECTION 19 - CHANGES TO TERMS OF SERVICE</h4>\r\n\r\n<p>You can review the most current version of the Terms of Service at any time at this page.</p>\r\n\r\n<p>We reserve the right, at our sole discretion, to update, change or replace any part of these Terms of Service by posting updates and changes to our website. It is your responsibility to check our website periodically for changes. Your continued use of or access to our website or the Service following the posting of any changes to these Terms of Service constitutes acceptance of those changes.</p>\r\n\r\n<h4>SECTION 20 - CONTACT INFORMATION</h4>\r\n\r\n<p>Questions about the Terms of Service should be sent to us at</p>\r\n\r\n<h6>SRI JSB LIGHTING COMPANY</h6>\r\n\r\n<h6>3 Gokul PURA RAMTE RAM ROAD,</h6>\r\n\r\n<h6>Ghaziabad .U.P. 201001, INDIA</h6>\r\n', '2018-07-05 11:57:59', '', 'Active'),
(4, '4', 'Return and Cancellation Policy', '<h2>What is the 7 Calendar Day Replacement Guarantee? How do I get a defective item ordered replaced?</h2>\r\n\r\n<p>All products sold at our online store are covered under our 7 Calendar Day Replacement Guarantee. Notify us of any problems, damages or defects within 7 calendar days from the date of delivery, and we will issue a brand new replacement to you at no extra cost.</p>\r\n\r\n<h5>In order to get a defective item replaced:</h5>\r\n\r\n<p>Contact Customer Care via the Contact Us form, within 7 calendar days from the date of delivery.</p>\r\n\r\n<p>The defective product or part will be recalled, checked for defects and if found defective, a replacement will be shipped immediately and return shipping costs so incurred by you refunded.</p>\r\n\r\n<p><strong>Note:</strong> All products are insured against theft and damages incurred during transit. If you receive a package that is open or looks to have been tampered with, do not accept it. Contact our Customer Care and we will have the issue quickly resolved.</p>\r\n\r\n<h6>Apart from condition reserved herein above, the following products shall not be eligible for return or replacement under this 7 Calendar Day Replacement Guarantee:</h6>\r\n\r\n<ul>\r\n	<li>Any product that exhibits physical damage to the box or to the product.</li>\r\n	<li>Any product that is returned without all original packaging and accessories, including the retail box, manuals, cables, and all other items originally included with the product at the time of delivery.</li>\r\n	<li>Any product without a valid, readable, un-tampered serial number, including but not limited to products with missing, damaged, altered, or otherwise unreadable serial number.</li>\r\n</ul>\r\n', '2018-07-05 12:08:18', '', 'Active'),
(5, '5', 'Delivery Information', '<h2>What are the shipping charges?</h2>\r\n\r\n<h5>India:</h5>\r\n\r\n<p>We provide shipping anywhere in India.Shipping Charges will be extra as mention in our web site</p>\r\n\r\n<h5>Rest of World:</h5>\r\n\r\n<p><strong>International Shipping:</strong> This option is available worldwide for packages weighing up to 20 kg (20,000 grams). Shipping charge is based on the weight of the package. The charge is on actual basis .The total shipping charge will appear during checkout.</p>\r\n\r\n<h2>What is the estimated dispatch time?</h2>\r\n\r\n<p>For your convenience, dispatch time is mentioned on the item page for all items.</p>\r\n\r\n<h2>You do not/cannot ship to my area. Why?</h2>\r\n\r\n<p>There are instances when we cannot ship to some locations. This could be a consequence of general regulations or serviceability issues.</p>\r\n', '2018-07-05 12:13:04', '', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `created` date NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `name`, `mobile`, `username`, `password`, `user_type`, `created`, `status`) VALUES
(1, 'Ajay', '8882029116', 'ajay@flawlessindia.in', '055e47515b4c44f79eddf184f0bb06ec', '1', '2018-04-09', 1),
(2, 'Flawless', '9456902819', 'flawless@flawlessindia.in', '4ca6b46c8ce101996900650c77c267a1', '2', '2018-04-08', 1),
(3, 'admin', '9456902819', 'admin@flawlessindia.in', 'ad9a2da2e264a97b0ea481109da50f3f', '1', '2018-04-04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_loginhistory`
--

CREATE TABLE `tbl_loginhistory` (
  `loginh_id` int(11) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `active_date` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_logo`
--

CREATE TABLE `tbl_logo` (
  `logo_id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `branch_add` varchar(255) NOT NULL,
  `alt_mob` text NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `personal_email` varchar(255) NOT NULL,
  `mon_sat` varchar(255) NOT NULL,
  `sunday` varchar(255) NOT NULL,
  `cf1` varchar(255) NOT NULL,
  `cf2` varchar(255) NOT NULL,
  `cf3` varchar(255) NOT NULL,
  `logo_title` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_logo`
--

INSERT INTO `tbl_logo` (`logo_id`, `company_name`, `branch_add`, `alt_mob`, `mobile`, `personal_email`, `mon_sat`, `sunday`, `cf1`, `cf2`, `cf3`, `logo_title`, `filename`, `file_path`, `created_at`, `updated_at`, `status`) VALUES
(1, 'SRI JSB LIGHTING COMPANY', '3 GOKUL PURA RAMTE RAM ROAD GHAZIABAD U.P. 201001 INDIA', '0120-270083', '+91 9457154581', 'srijsblighting@yahoo.in', '10.00 - 06.00 ', 'OFF', 'Null', 'Null', 'Null', 'logo', 'logo2.png', 'E:/xampp/htdocs/decorex/uploads/logo/logo2.png', '2018-07-05 06:58:00', '2018-08-01 11:30:01', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_newslater`
--

CREATE TABLE `tbl_newslater` (
  `news_id` int(11) NOT NULL,
  `news_title` varchar(255) NOT NULL,
  `short_descr` varchar(255) NOT NULL,
  `cf1` varchar(255) NOT NULL,
  `cf2` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(11) NOT NULL,
  `mkey` varchar(255) NOT NULL,
  `tid` varchar(255) NOT NULL,
  `hash` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `productinfo` varchar(255) NOT NULL,
  `mailid` varchar(255) NOT NULL,
  `phoneno` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `action` varchar(255) NOT NULL,
  `sucess` varchar(255) NOT NULL,
  `failure` varchar(255) NOT NULL,
  `cancel` varchar(255) NOT NULL,
  `purchase_date` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page`
--

CREATE TABLE `tbl_page` (
  `p_id` int(11) NOT NULL,
  `title_name` varchar(255) NOT NULL,
  `page_title` varchar(255) NOT NULL,
  `full_descr` longtext NOT NULL,
  `filename` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `vision` varchar(255) NOT NULL,
  `mission` varchar(255) NOT NULL,
  `worldwide` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_page`
--

INSERT INTO `tbl_page` (`p_id`, `title_name`, `page_title`, `full_descr`, `filename`, `file_path`, `vision`, `mission`, `worldwide`, `created_at`, `updated_at`, `status`) VALUES
(1, '1', 'OPEN YOUR EYES TO THE BRILLIANCE OF LED', '<h3>LIGHT UP FOR A GREENER TOMORROW</h3>\r\n', 'eye.png', 'E:/xampp/htdocs/decorex/uploads/page_img/eye.png', '', '', '', '2018-07-05 08:41:16', '2018-08-01 11:26:10', 'Active'),
(2, '2', 'Who we are', '<p>Phosfluorescently synthesize end-to-end infrastructures without performance based intellectual capital. Completely productivate 2.0 sources for magnetic vortals. Uniquely evisculate robust meta-services via dynamic methods of empowerment.</p>\r\n\r\n<p>Assertively network enterprise best practices vis-a-vis B2B intellectual capital. Continually innovate impactful services whereas ethical imperatives. Energistically integrate client-centric manufactured products for interactive meta-services.</p>\r\n', 'eye+logo1.jpg', 'E:/xampp/htdocs/decorex/uploads/page_img/eye+logo1.jpg', '', '', '', '2018-07-05 08:53:26', '2018-08-01 11:24:17', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(11) NOT NULL,
  `cat_id` varchar(255) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `page_title` varchar(255) NOT NULL,
  `new_arrival` varchar(255) NOT NULL,
  `new_price` varchar(255) NOT NULL,
  `old_price` varchar(255) NOT NULL,
  `availability` varchar(255) NOT NULL,
  `short_descr` longtext NOT NULL,
  `full_descr` longtext NOT NULL,
  `info_descr` longtext NOT NULL,
  `filename` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `seo_title` varchar(255) NOT NULL,
  `meta_tag` mediumtext NOT NULL,
  `meta_descr` longtext NOT NULL,
  `meta_keyword_descr` longtext NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `cf1` varchar(255) NOT NULL,
  `cf2` varchar(255) NOT NULL,
  `product_url` varchar(255) NOT NULL,
  `col1` varchar(255) NOT NULL,
  `col2` varchar(255) NOT NULL,
  `col3` varchar(255) NOT NULL,
  `col4` varchar(255) NOT NULL,
  `col5` varchar(255) NOT NULL,
  `col6` varchar(255) NOT NULL,
  `col7` varchar(255) NOT NULL,
  `p_tax_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `cat_id`, `p_name`, `page_title`, `new_arrival`, `new_price`, `old_price`, `availability`, `short_descr`, `full_descr`, `info_descr`, `filename`, `file_path`, `seo_title`, `meta_tag`, `meta_descr`, `meta_keyword_descr`, `created_at`, `updated_at`, `status`, `cf1`, `cf2`, `product_url`, `col1`, `col2`, `col3`, `col4`, `col5`, `col6`, `col7`, `p_tax_type`) VALUES
(2, '14', 'LED FILAMENT LAMP(G-125, 4 WATT)', '1', '2', '230.00', '233.0', '1000', '<p style=\"text-align: justify;\"><strong>LED FILAMENT LAMP</strong></p>\r\n\r\n<ul>\r\n	<li style=\"text-align: justify;\">G-125</li>\r\n	<li style=\"text-align: justify;\">4 WATT AMBER</li>\r\n	<li style=\"text-align: justify;\">&nbsp;IC CIRCUIT&nbsp;</li>\r\n</ul>\r\n', '', '', 'G-125-4-WATT.png', '', 'G-125, 4 WATT', '', 'META DESCRIPTION', 'META KEYWORDS', '2018-07-04 06:51:22', '2018-08-11 13:55:57', 'Active', '', '', 'led-filament-lamp-g-125-4-watt', '#f8f8f8', '#ffebc0', '#f5e4c9', 'Red', 'Blue', '#ff599e', '', ''),
(3, '14', 'LED FILAMENT LAMP ( G-125, 7 WATT)', '1', '2', '250.00', '255.0', '1000', '<p><strong>LED FILAMENT LAMP</strong></p>\r\n\r\n<ul>\r\n	<li>G-125</li>\r\n	<li>7 WATT CLEAR</li>\r\n	<li>&nbsp;IC CIRCUIT</li>\r\n</ul>\r\n', '', '', 'G-125-7-WATT.png', '', 'TITLE', '', 'META DESCRIPTION', 'META KEYWORDS', '2018-07-04 06:53:18', '2018-08-11 13:56:13', 'Active', '', '', 'led-filament-lamp-g-125-7-watt', '#f8f8f8', '#ffebc0', '#f5e4c9', 'Red', 'Blue', '#ff599e', '', ''),
(4, '14', 'LED FILAMENT LAMP (G-95, 4 WATT)', '1', '2', '210.00', '220.00', '1000', '<p><strong>LED FILAMENT LAMP</strong></p>\r\n\r\n<ul>\r\n	<li>G-95&nbsp;</li>\r\n	<li>4 WATT AMBER &nbsp;</li>\r\n	<li>IC CIRCUIT&nbsp;</li>\r\n</ul>\r\n', '', '', 'G-95-4-WATT.png', '', 'TITLE', '', 'META DESCRIPTION', 'META KEYWORDS', '2018-07-04 06:54:10', '2018-08-08 13:51:11', 'Active', '', '', 'led-filament-lamp-g-95-4-watt', '', '', '', '', '', '', '', ''),
(5, '14', 'LED FILAMENT LAMP ( G-95, 7 WATT)', '', '', '230.00', '233.00', '1000', '<p><strong>LED FILAMENT LAMP</strong></p>\r\n\r\n<ul>\r\n	<li>G-95</li>\r\n	<li>7 WATT AMBER</li>\r\n	<li>IC CIRCUIT</li>\r\n</ul>\r\n', '', '', 'G-95-4-WATT1.png', '', 'TITLE', '', '', '', '2018-07-04 09:36:00', '2018-08-08 13:51:24', 'Active', '', '', 'led-filament-lamp-g-95-7-watt', '', '', '', '', '', '', '', ''),
(6, '14', 'LED FILAMENT LAMP (G-95, 7 WATT)', '1', '', '180.00', '195.00', '1000', '<p><strong>LED FILAMENT LAMP</strong></p>\r\n\r\n<ul>\r\n	<li>G-95</li>\r\n	<li>7 WATT CLEAR&nbsp;</li>\r\n	<li>IC CIRCUIT</li>\r\n</ul>\r\n', '', '', 'G-125-7-WATT1.png', '', 'LED FILAMENT LAMP G-95, 7 WATT', '', '', '', '2018-07-04 09:36:34', '2018-08-08 13:51:47', 'Active', '', '', 'led-filament-lamp-g-95-7-watt', '', '', '', '', '', '', '', ''),
(7, '14', 'LED FILAMENT LAMP  (ST 64, 4 WATT)', '1', '', '165.00', '170.00', '1000', '<p><strong>LED FILAMENT LAMP</strong></p>\r\n\r\n<ul>\r\n	<li>ST 64&nbsp;</li>\r\n	<li>4 WATT AMBER&nbsp;</li>\r\n	<li>IC CIRCUIT</li>\r\n</ul>\r\n', '', '', 'ST-64-4-WATT.png', '', 'LED FILAMENT LAMP ST 64, 4 WATT ', '', '', '', '2018-07-04 09:37:13', '2018-08-08 13:52:00', 'Active', '', '', 'led-filament-lamp-st-64-4-watt', '', '', '', '', '', '', '', ''),
(8, '14', 'LED FILAMENT LAMP (ST 64, 7 WATT)', '', '2', '145.00', '155.00', '1000', '<p><strong>LED FILAMENT LAMP</strong></p>\r\n\r\n<ul>\r\n	<li>ST 64&nbsp;</li>\r\n	<li>7 WATT AMBER</li>\r\n	<li>IC CIRCUIT</li>\r\n</ul>\r\n', '', '', 'ST-64-4-WATT1.png', '', 'LED FILAMENT LAMP ST 64, 7 WATT', '', '', '', '2018-07-04 09:37:46', '2018-08-08 13:52:14', 'Active', '', '', 'led-filament-lamp-st-64-7-watt', '', '', '', '', '', '', '', ''),
(9, '14', 'LED FILAMENT LAMP (ST 64, 7 WATT)', '1', '2', '140.00', '145.00', '1000', '<p><strong>LED FILAMENT LAMP</strong></p>\r\n\r\n<ul>\r\n	<li>ST 64</li>\r\n	<li>7 WATT CLEAR</li>\r\n	<li>IC CIRCUIT</li>\r\n</ul>\r\n', '', '', 'ST-64-7-WATT.png', '', 'LED FILAMENT LAMP ST 64, 7 WATT ', '', '', '', '2018-07-04 09:38:25', '2018-08-08 13:52:25', 'Active', '', '', 'led-filament-lamp-st-64-7-watt', '', '', '', '', '', '', '', ''),
(10, '14', 'LED FILAMENT LAMP (A 60, 7 WATT)', '1', '', '135.00', '140.00', '1000', '<p><strong>LED FILAMENT LAMP</strong></p>\r\n\r\n<ul>\r\n	<li>A 60</li>\r\n	<li>7 WATT CLEAR</li>\r\n	<li>IC CIRCUIT</li>\r\n</ul>\r\n', '', '', 'A-60-7-WATT.png', '', '', '', '', '', '2018-07-04 09:39:42', '2018-08-08 13:52:35', 'Active', '', '', 'led-filament-lamp-a-60-7-watt', '', '', '', '', '', '', '', ''),
(11, '23', 'Sanded black', '', '2', '450.00', '460.00', '1000', '<p>Sanded black with 100mm ceilling cover with one meter wire</p>\r\n', '', '', 'Sanded-black.png', '', 'Sanded black', '', '', '', '2018-07-04 09:40:15', '2018-08-08 13:52:53', 'Active', '', '', 'sanded-black', '', '', '', '', '', '', '', ''),
(12, '23', 'Pearl black', '', '2', '450.0', '455.00', '1000', '<p>Pearl black with 100mm ceilling cover with one meter wire</p>\r\n', '', '', 'Pearl-black.png', '', 'Pearl black ', '', '', '', '2018-07-04 09:40:50', '2018-08-08 13:53:07', 'Active', '', '', 'pearl-black', '', '', '', '', '', '', '', ''),
(13, '23', 'Bullet', '1', '', '450.00', '460.00', '1000', '<p>Bullet with 100mm ceilling cover with one meter wire</p>\r\n', '', '', 'Bullet1.png', '', 'Bullet with', '', '', '', '2018-07-04 09:41:36', '2018-08-08 13:53:25', 'Active', '', '', 'bullet', '', '', '', '', '', '', '', ''),
(14, '23', 'Trapezoid antique', '', '', '450.00', '460.00', '1000', '<p>Trapezoid antique with 100mm ceilling cover with one meter wire</p>\r\n', '', '', 'Trapezoid-antique1.png', '', 'Trapezoid antique', '', '', '', '2018-07-04 09:42:08', '2018-08-08 13:53:42', 'Active', '', '', 'trapezoid-antique', '', '', '', '', '', '', '', ''),
(15, '23', 'Thick waist rose gold', '', '2', '450.00', '455.00', '1000', '<p>Thick waist rose gold with 100mm ceilling coverwith one meter wire</p>\r\n', '', '', 'Thick-waist-rose-gold.png', '', 'Thick waist rose gold ', '', '', '', '2018-07-04 14:46:38', '2018-08-08 13:53:55', 'Active', '', '', 'thick-waist-rose-gold', '', '', '', '', '', '', '', ''),
(16, '23', 'Calabash Brothers', '', '2', '450.00', '455.00', '1000', '<p>Calabash Brothers with 100mm ceilling coverwith one meter wire</p>\r\n', '', '', 'Calabash-Brothers.png', '', '', '', '', '', '2018-07-27 09:28:34', '2018-08-08 13:54:09', 'Active', '', '', 'calabash-brothers', '', '', '', '', '', '', '', ''),
(17, '23', 'Separated antique gold', '', '2', '450.00', '460.00', '1000', '<p>Separated antique gold with 100mm ceilling coverwith one meter wire</p>\r\n', '', '', 'Separated-antique-gold.png', '', '', '', '', '', '2018-07-27 09:30:15', '2018-08-08 13:54:44', 'Active', '', '', 'separated-antique-gold', '', '', '', '', '', '', '', ''),
(18, '23', 'Winebottle Chrome', '', '2', '450.00', '455.00', '1000', '<p>Winebottle Chrome with 100mm ceilling coverwith one meter wire</p>\r\n', '', '', 'Winebottle-Chrome.png', '', 'Winebottle Chrome ', '', '', '', '2018-07-27 09:31:52', '2018-08-08 13:54:57', 'Active', '', '', 'winebottle-chrome', '', '', '', '', '', '', '', ''),
(19, '23', 'Binodal bronze', '', '', '450.00', '460.00', '1000', '<p>Binodal bronze with 100mm ceilling cover with one meter wire</p>\r\n', '', '', 'product7.png', '', 'Binodal bronze', '', '', '', '2018-07-27 09:33:52', '2018-08-08 13:55:10', 'Active', '', '', 'binodal-bronze', '', '', '', '', '', '', '', ''),
(20, '24', 'Oval wooden', '1', '', '500.00', '510.00', '1000', '<p>Oval wooden with 100mm ceilling coverwith one meter wire</p>\r\n', '', '', 'Oval-wooden.png', '', 'Oval wooden', '', '', '', '2018-07-27 09:36:09', '2018-08-08 13:55:22', 'Active', '', '', 'oval-wooden', '', '', '', '', '', '', '', ''),
(21, '24', 'Common wooden', '', '2', '500.00', '510.00', '1000', '<p>Common wooden with 100mm ceilling coverwith one meter wire</p>\r\n', '', '', 'Common-wooden.png', '', 'Common wooden', '', '', '', '2018-07-27 09:49:34', '2018-08-08 13:55:41', 'Active', '', '', 'common-wooden', '', '', '', '', '', '', '', ''),
(22, '24', 'Square wooden', '', '', '500.00', '', '1000', '<p>Square wooden with 100mm ceilling coverwith one meter wire</p>\r\n', '', '', 'Square-wooden.png', '', 'Square wooden', '', '', '', '2018-07-27 09:52:39', '2018-08-08 13:55:55', 'Active', '', '', 'square-wooden', '', '', '', '', '', '', '', ''),
(23, '24', 'Multidimensional wooden', '', '', '500.00', '505.00', '1000', '<p>Multidimensional wooden with 100mm ceilling coverwith one meter wire</p>\r\n', '', '', 'Multidimensional-wooden.png', '', 'Multidimensional wooden', '', '', '', '2018-07-27 09:56:10', '2018-08-08 14:04:01', 'Active', '', '', 'multidimensional-wooden', '', '', '', '', '', '', '', ''),
(24, '25', 'LED FILAMENT CANDLE (LONG TAIL )', '1', '', '115.00', '110.00', '1000', '<p><strong>LED FILAMENT CANDEL</strong></p>\r\n\r\n<ul>\r\n	<li>C 35</li>\r\n	<li>E -14</li>\r\n	<li>LONG TAIL</li>\r\n	<li>4 WATT CLEAR &nbsp;</li>\r\n	<li>IC CIRCUIT</li>\r\n</ul>\r\n', '', '', 'c-35-e-14.png', '', 'LED FILAMENT CANDLE (C 35,LONG TAIL )', '', '', '', '2018-07-27 10:36:42', '2018-08-08 14:03:51', 'Active', '', '', 'led-filament-candle-long-tail', '', '', '', '', '', '', '', ''),
(25, '25', 'LED FILAMENT CANDLE (AMBER )', '', '', '115.00', '110.00', '1000', '<p><strong>LED FILAMENT CANDLE</strong></p>\r\n\r\n<ul>\r\n	<li>C 35</li>\r\n	<li>E-14&nbsp;</li>\r\n	<li>4 WATT AMBER</li>\r\n	<li>IC CIRCUIT</li>\r\n</ul>\r\n', '', '', 'C-35-E14-AMBER.png', '', 'LED FILAMENT CANDLE (4 WATT AMBER )', '', '', '', '2018-07-27 10:40:53', '2018-08-08 14:03:36', 'Active', '', '', 'led-filament-candle-amber', '', '', '', '', '', '', '', ''),
(26, '25', 'LED FILAMENT CANDLE  (CLEAR)', '', '', '115.00', '110.00', '1000', '<p><strong>LED FILAMENT CANDLE</strong></p>\r\n\r\n<ul>\r\n	<li>C 35</li>\r\n	<li>E-14</li>\r\n	<li>4 WATT CLEAR&nbsp;</li>\r\n	<li>IC CIRCUIT</li>\r\n</ul>\r\n', '', '', 'C-35-E27-B22.png', '', 'LED FILAMENT CANDLE  (4 WATT CLEAR)', '', '', '', '2018-07-27 10:44:53', '2018-08-08 14:03:21', 'Active', '', '', 'led-filament-candle-clear', '', '', '', '', '', '', '', ''),
(27, '25', 'LED FILAMENT CANDLE (E-27/B-22)', '1', '', '115.00', '110.00', '1000', '<p><strong>LED FILAMENT CANDLE</strong></p>\r\n\r\n<ul>\r\n	<li>C 35</li>\r\n	<li>E-27/B-22&nbsp;</li>\r\n	<li>4 WATT CLEAR</li>\r\n	<li>IC CIRCUIT</li>\r\n</ul>\r\n', '', '', 'C-35-E27-B22(1).png', '', 'LED FILAMENT CANDLE C 35,E-27/B-22, 4 WATT CLEAR ', '', '', '', '2018-07-27 10:54:17', '2018-07-27 11:27:32', 'Active', '', '', 'led-filament-candle-e-27-b-22', '', '', '', '', '', '', '', ''),
(28, '26', 'LED CANDLE (5 WATT ,LONG TAIL)		', '', '', '115.00', '', '100O', '<p><strong>LED CANDLE</strong></p>\r\n\r\n<ul>\r\n	<li>5 WATT&nbsp;</li>\r\n	<li>E-14</li>\r\n	<li>LONG TAIL</li>\r\n</ul>\r\n', '', '', 'product11.png', '', '', '', '', '', '2018-07-27 11:08:14', '2018-08-08 14:03:09', 'Active', '', '', 'led-candle-5-watt-long-tail', '', '', '', '', '', '', '', ''),
(29, '26', 'LED CANDLE (5 WATT, E-14) ', '', '', '115.00', '110.00', '1000', '<p><strong>LED CANDLE</strong></p>\r\n\r\n<ul>\r\n	<li>5 WATT&nbsp;</li>\r\n	<li>E-14</li>\r\n</ul>\r\n', '', '', 'C-35-B-22.png', '', 'LED CANDLE (5 WATT, E-14)', '', '', '', '2018-07-27 11:11:57', '2018-08-08 14:02:39', 'Active', '', '', 'led-candle-5-watt-e-14', '', '', '', '', '', '', '', ''),
(30, '26', 'LED CANDLE (5 WATT, E-27)', '', '', '115.00', '110.00', '1000', '<p><strong>LED CANDLE</strong></p>\r\n\r\n<ul>\r\n	<li>5 WATT&nbsp;</li>\r\n	<li>E-27</li>\r\n</ul>\r\n', '', '', 'C-35-B-221.png', '', 'LED CANDLE (5 WATT, E-27)', '', '', '', '2018-07-27 11:13:50', '2018-08-09 05:00:28', 'Active', '', '', 'led-candle-5-watt-e-27', '', '', '', '', '', '', '', ''),
(31, '26', 'LED CANDLE (E-27, FROSTED)', '', '', '115.00', '110.00', '1000', '<p><strong>LED CANDLE</strong></p>\r\n\r\n<ul>\r\n	<li>5 WATT&nbsp;</li>\r\n	<li>E-27&nbsp;</li>\r\n	<li>FROSTED</li>\r\n</ul>\r\n', '', '', 'C-35-FROSTED-(1).png', '', 'LED CANDLE (E-27, FROSTED)', '', '', '', '2018-07-27 11:16:56', '2018-08-09 05:00:40', 'Active', '', '', 'led-candle-e-27-frosted', '', '', '', '', '', '', '', ''),
(32, '15', 'Decorex LED Street Light 90 Watt', '1', '2', '4400', '5200', '60', '<p>Pole Mounting Dia - 60mm</p>\r\n\r\n<p>LED MAKE - SAMSUNG&nbsp;/ EDISION / EVERLIGHT</p>\r\n\r\n<p>Input Voltage - 220-240Volts</p>\r\n\r\n<p>Power Factor - &gt;0.95</p>\r\n\r\n<p>Light Source - SMD LED Chip as per LM 80/IS16106</p>\r\n\r\n<p>IS - 10322</p>\r\n\r\n<p>Part - 5/sec-3/2012</p>\r\n\r\n<p>BIS - R-93005169</p>\r\n\r\n<p>&nbsp;</p>\r\n', '<p>2 Year&nbsp; Manufacturing Warranty</p>\r\n', '', 'SL_90.png', '', '', '', '', '', '2018-07-31 07:58:23', '2018-08-09 05:00:54', 'Active', '', '', 'decorex-led-street-light-90-watt', '', '', '', '', '', '', '', ''),
(33, '15', 'Decorex LED Street Light 45 Watt', '1', '', '2900', '3700', '40', '<p>Pole mounting Dia - 40mm</p>\r\n\r\n<p>LED MAKE - SAMSUNG&nbsp;/ EDISION / EVERLIGHT</p>\r\n\r\n<p>Input Voltage - 220-240Volts</p>\r\n\r\n<p>Power Factor - &gt;0.95</p>\r\n\r\n<p>Light Source - SMD LED Chip as per LM 80/IS16106</p>\r\n\r\n<p>IS - 10322</p>\r\n\r\n<p>Part - 5/sec-3/2012</p>\r\n\r\n<p>BIS - R-93005169</p>\r\n', '<p>2 year Manufacturing Warranty</p>\r\n', '', 'SL_9012.png', '', '', '', '', '', '2018-07-31 08:43:46', '2018-08-09 05:01:11', 'Active', '', '', 'decorex-led-street-light-45-watt', '', '', '', '', '', '', '', ''),
(35, '15', 'Decorex LED Street Light 120 Watt', '1', '', '5600', '6800', '65', '<p>Pole Mounting Dia - 60mm</p>\r\n\r\n<p>LED MAKE - SAMSUNG&nbsp;/ EDISION / EVERLIGHT</p>\r\n\r\n<p>Input Voltage - 220-240Volts</p>\r\n\r\n<p>Power Factor - &gt;0.95</p>\r\n\r\n<p>Light Source - SMD LED Chip as per LM 80/IS16106</p>\r\n\r\n<p>IS - 10322</p>\r\n\r\n<p>Part - 5/sec-3/2012</p>\r\n\r\n<p>BIS - R-93005169</p>\r\n', '<p>2 Year Manufactruring Warranty</p>\r\n', '', 'SL_1254.png', '', '', '', '', '', '2018-07-31 08:47:49', '2018-08-09 05:01:26', 'Active', '', '', 'decorex-led-street-light-120-watt', '', '', '', '', '', '', '', ''),
(37, '15', 'Decorex LED Street Light 150 Watt', '1', '', '6500', '7800', '54', '<p>Pole Mounting Dia - 60mm</p>\r\n\r\n<p>LED MAKE - SAMSUNG&nbsp;/ EDISION / EVERLIGHT</p>\r\n\r\n<p>Input Voltage - 220-240Volts</p>\r\n\r\n<p>Power Factor - &gt;0.95</p>\r\n\r\n<p>Light Source - SMD LED Chip as per LM 80/IS16106</p>\r\n\r\n<p>IS - 10322</p>\r\n\r\n<p>Part - 5/sec-3/2012</p>\r\n\r\n<p>BIS - R-93005169</p>\r\n', '<p>2 Year Manufacturing Warranty</p>\r\n', '', 'SL_1252.png', '', '', '', '', '', '2018-07-31 08:50:44', '2018-08-09 05:01:39', 'Active', '', '', 'decorex-led-street-light-150-watt', '', '', '', '', '', '', '', ''),
(38, '17', 'Decorex LED Flood Light 50 Watt', '1', '', '2375', '4200', '40', '<p>LED MAKE - SAMSUNG&nbsp;/ EDISION / EVERLIGHT</p>\r\n\r\n<p>Input Voltage - 220-240Volts</p>\r\n\r\n<p>Power Factor - &gt;0.95</p>\r\n\r\n<p>Light Source - SMD LED Chip as per LM 80/IS16106</p>\r\n\r\n<p>IS - 10322</p>\r\n\r\n<p>Part - 5/sec-3/2012</p>\r\n\r\n<p>BIS - R-93005169</p>\r\n', '<p>2 Year Manufacturing Warranty</p>\r\n', '', 'FL_50.png', '', '', '', '', '', '2018-07-31 08:56:09', '2018-08-09 05:01:57', 'Active', '', '', 'decorex-led-flood-light-50-watt', '', '', '', '', '', '', '', ''),
(39, '17', 'Decorex LED Flood Light 100 Watt', '1', '', '4800', '6300', '35', '<p>LED MAKE - SAMSUNG&nbsp;/ EDISION / EVERLIGHT</p>\r\n\r\n<p>Input Voltage - 220-240Volts</p>\r\n\r\n<p>Power Factor - &gt;0.95</p>\r\n\r\n<p>Light Source - SMD LED Chip as per LM 80/IS16106</p>\r\n\r\n<p>IS - 10322</p>\r\n\r\n<p>Part - 5/sec-3/2012</p>\r\n\r\n<p>BIS - R-93005169</p>\r\n', '<p>2 Year Manufacturing Warranty</p>\r\n', '', 'FL.png', '', '', '', '', '', '2018-07-31 08:57:36', '2018-08-09 05:02:25', 'Active', '', '', 'decorex-led-flood-light-100-watt', '', '', '', '', '', '', '', ''),
(40, '17', 'Decorex LED Flood Light 150 Watt', '1', '', '6000', '11000', '25', '<p>LED MAKE - SAMSUNG&nbsp;/ EDISION / EVERLIGHT</p>\r\n\r\n<p>Input Voltage - 220-240Volts</p>\r\n\r\n<p>Power Factor - &gt;0.95</p>\r\n\r\n<p>Light Source - SMD LED Chip as per LM 80/IS16106</p>\r\n\r\n<p>IS - 10322</p>\r\n\r\n<p>Part - 5/sec-3/2012</p>\r\n\r\n<p>BIS - R-93005169</p>\r\n', '<p>2 Year Manufacturing Warranty</p>\r\n', '', 'FL1.png', '', '', '', '', '', '2018-07-31 08:59:22', '2018-08-09 05:02:39', 'Active', '', '', 'decorex-led-flood-light-150-watt', '', '', '', '', '', '', '', ''),
(41, '17', 'Decorex LED Flood Light 125 Watt', '1', '', '5400', '6500', '28', '<p>LED MAKE - SAMSUNG&nbsp;/ EDISION / EVERLIGHT</p>\r\n\r\n<p>Input Voltage - 220-240Volts</p>\r\n\r\n<p>Power Factor - &gt;0.95</p>\r\n\r\n<p>Light Source - SMD LED Chip as per LM 80/IS16106</p>\r\n\r\n<p>IS - 10322</p>\r\n\r\n<p>Part - 5/sec-3/2012</p>\r\n\r\n<p>BIS - R-93005169</p>\r\n', '<p>2 Year Warranty</p>\r\n', '', 'FL2.png', '', '', '', '', '', '2018-07-31 09:00:51', '2018-08-09 05:02:55', 'Active', '', '', 'decorex-led-flood-light-125-watt', '', '', '', '', '', '', '', ''),
(42, '1', 'Decorex Led Round Pannel 3 Watt', '1', '', '220', '500', '90', '<p>Outer - 85mm</p>\r\n\r\n<p>Cut Out - 75mm</p>\r\n\r\n<p>Alluminium Body&nbsp;</p>\r\n\r\n<p>Warranty - 2 years</p>\r\n', '', '', 'pannel.png', '', '', '', '', '', '2018-08-01 05:17:03', '2018-08-09 05:03:10', 'Active', '', '', 'decorex-led-round-pannel-3-watt', '', '', '', '', '', '', '', ''),
(43, '1', 'Decorex Led Pannel Square 3 Watt', '1', '', '220', '500', '95', '<p>Outer - 85m</p>\r\n\r\n<p>Cut out - 75mm</p>\r\n\r\n<p>Alluminium Body</p>\r\n\r\n<p>Warranty - 2 Years</p>\r\n', '', '', 'pannel1.png', '', '', '', '', '', '2018-08-01 05:18:15', '2018-08-09 05:03:27', 'Active', '', '', 'decorex-led-pannel-square-3-watt', '', '', '', '', '', '', '', ''),
(44, '1', 'Decorex Led Pannel Round 6 Watt', '1', '', '300', '650', '65', '<p>Outer - 120mm</p>\r\n\r\n<p>Cut out - 105mm</p>\r\n\r\n<p>Alluminium Body</p>\r\n\r\n<p>Warranty - 2 Years</p>\r\n', '', '', 'pannel2.png', '', '', '', '', '', '2018-08-01 05:23:23', '2018-08-09 05:03:44', 'Active', '', '', 'decorex-led-pannel-round-6-watt', '', '', '', '', '', '', '', ''),
(45, '1', 'Decorex Led Pannel Square 6 Watt', '1', '', '300', '550', '90', '<p>Outer - 120mm</p>\r\n\r\n<p>Cut out - 105mm</p>\r\n\r\n<p>Alluminium Body</p>\r\n\r\n<p>Warranty - 2 Years</p>\r\n', '', '', 'pannel3.png', '', '', '', '', '', '2018-08-01 05:58:54', '2018-08-09 05:03:58', 'Active', '', '', 'decorex-led-pannel-square-6-watt', '', '', '', '', '', '', '', ''),
(46, '1', 'Decorex Led Pannel Round 12 Watt', '1', '', '350', '600', '60', '<p>Outer - 170mm&nbsp;</p>\r\n\r\n<p>Cut out - 155mm</p>\r\n\r\n<p>Alluminium Body</p>\r\n\r\n<p>Warranty - 2 Years</p>\r\n', '', '', 'pannel4.png', '', '', '', '', '', '2018-08-01 06:08:15', '2018-08-09 05:04:13', 'Active', '', '', 'decorex-led-pannel-round-12-watt', '', '', '', '', '', '', '', ''),
(47, '1', 'Decorex Led Pannel Square 12 Watt', '1', '', '350', '600', '65', '<p>Outer - 170mm</p>\r\n\r\n<p>Cut out - 155mm</p>\r\n\r\n<p>Alluminium Body</p>\r\n\r\n<p>Warranty - 2 Years</p>\r\n', '', '', 'pannel5.png', '', '', '', '', '', '2018-08-01 06:10:13', '2018-08-09 05:04:27', 'Active', '', '', 'decorex-led-pannel-square-12-watt', '', '', '', '', '', '', '', ''),
(48, '1', 'Decorex Led Pannel Round 15 Watt', '1', '', '400', '650', '25', '<p>Outer - 170mm</p>\r\n\r\n<p>Cut out - 155mm</p>\r\n\r\n<p>Alluminium Body</p>\r\n\r\n<p>Warranty - 2 years</p>\r\n', '', '', 'pannel6.png', '', '', '', '', '', '2018-08-01 06:12:39', '2018-08-09 05:04:49', 'Active', '', '', 'decorex-led-pannel-round-15-watt', '', '', '', '', '', '', '', ''),
(49, '1', 'Decorex Led Pannel Square 15 Watt', '1', '', '400', '650', '25', '<p>Outer - 170mm</p>\r\n\r\n<p>Cut out - 155mm</p>\r\n\r\n<p>Alluminium Body</p>\r\n\r\n<p>Warranty - 2 Years</p>\r\n', '', '', 'pannel7.png', '', '', '', '', '', '2018-08-01 06:15:18', '2018-08-09 05:05:03', 'Active', '', '', 'decorex-led-pannel-square-15-watt', '', '', '', '', '', '', '', ''),
(50, '1', 'Decorex Led Pannel Round 18 Watt', '1', '', '500', '700', '60', '<p>Outer - 225mm</p>\r\n\r\n<p>Cut out - 205mm</p>\r\n\r\n<p>Alluminium Body</p>\r\n\r\n<p>Warranty - 2 Years</p>\r\n', '', '', 'pannel8.png', '', '', '', '', '', '2018-08-02 04:48:17', '2018-08-09 05:05:25', 'Active', '', '', 'decorex-led-pannel-round-18-watt', '', '', '', '', '', '', '', ''),
(51, '1', 'Decorex Led Pannel Square 18 Watt', '1', '', '500', '700', '60', '<p>Outer - 225mm</p>\r\n\r\n<p>Cu out - 205mm</p>\r\n\r\n<p>Alluminium Body</p>\r\n\r\n<p>Warranty - 2 Years</p>\r\n', '', '', 'pannel9.png', '', '', '', '', '', '2018-08-02 04:50:47', '2018-08-09 05:05:39', 'Active', '', '', 'decorex-led-pannel-square-18-watt', '', '', '', '', '', '', '', ''),
(52, '1', 'Decorex Led Pannel Round 22 Watt', '1', '', '550', '750', '10', '<p>Outer - 225mm</p>\r\n\r\n<p>Cut out - 205mm</p>\r\n\r\n<p>Alluminium Body</p>\r\n\r\n<p>Warranty - 2 Years</p>\r\n\r\n<p>&nbsp;</p>\r\n', '', '', 'pannel10.png', '', '', '', '', '', '2018-08-02 04:52:25', '2018-08-09 05:05:57', 'Active', '', '', 'decorex-led-pannel-round-22-watt', '', '', '', '', '', '', '', ''),
(53, '1', 'Decorex Led Pannel Square 22 Watt', '1', '', '550', '750', '20', '<p>Outer - 225mm</p>\r\n\r\n<p>Cut out - 205mm</p>\r\n\r\n<p>Alluminium Body</p>\r\n\r\n<p>Warranty - 2 Years</p>\r\n\r\n<p>&nbsp;</p>\r\n', '', '', 'pannel11.png', '', '', '', '', '', '2018-08-02 04:53:51', '2018-08-09 05:06:14', 'Active', '', '', 'decorex-led-pannel-square-22-watt', '', '', '', '', '', '', '', ''),
(54, '1', 'Decorex Led Pannel Sqare 24 Watt', '1', '', '750', '900', '20', '<p>Outer - 300mm</p>\r\n\r\n<p>Cut out - 275mm</p>\r\n\r\n<p>Alluminium Body</p>\r\n\r\n<p>Warranty - 2 Years</p>\r\n', '', '', 'pannel12.png', '', '', '', '', '', '2018-08-02 05:01:48', '2018-08-09 05:06:35', 'Active', '', '', 'decorex-led-pannel-sqare-24-watt', '', '', '', '', '', '', '', ''),
(55, '1', 'Decorex Led Pannel Square 36 Watt', '1', '', '1650', '2000', '25', '<p>Outer - 600mm</p>\r\n\r\n<p>Cut out - 562</p>\r\n\r\n<p>Alluminium Body</p>\r\n\r\n<p>Warranty - 2 Years</p>\r\n', '', '', 'pannel13.png', '', '', '', '', '', '2018-08-02 05:04:00', '2018-08-09 05:06:54', 'Active', '', '', 'decorex-led-pannel-square-36-watt', '', '', '', '', '', '', '', ''),
(56, '2', 'Decorex Backlit Led Down Light Round 6 Watt', '1', '', '300', '500', '100', '<p>Outer - 90mm</p>\r\n\r\n<p>Cut out - 75</p>\r\n\r\n<p>Alluminium Body</p>\r\n\r\n<p>Warranty - 2 Year</p>\r\n\r\n<p>&nbsp;</p>\r\n', '', '', 'product-250x250.png', '', '', '', '', '', '2018-08-02 05:06:28', '2018-08-09 05:07:13', 'Active', '', '', 'decorex-backlit-led-down-light-round-6-watt', '', '', '', '', '', '', '', ''),
(57, '2', 'Decorex Backlit Led Down Light Square 6 Watt', '1', '', '300', '650', '60', '<p>Outer - 90mm</p>\r\n\r\n<p>Cut out - 75mm</p>\r\n\r\n<p>Alluminium Body</p>\r\n\r\n<p>Warranty - 2 Years</p>\r\n\r\n<p>&nbsp;</p>\r\n', '', '', 'product-250x2501.png', '', '', '', '', '', '2018-08-02 05:08:03', '2018-08-09 05:07:40', 'Active', '', '', 'decorex-backlit-led-down-light-square-6-watt', '', '', '', '', '', '', '', ''),
(58, '2', 'Decorex Backlit Led Down Light Round 12 Watt', '1', '', '350', '700', '60', '<p>Outer - 120mm</p>\r\n\r\n<p>Cut out - 105mm</p>\r\n\r\n<p>Alluminium Body</p>\r\n\r\n<p>Warranty - 2 Years</p>\r\n\r\n<p>&nbsp;</p>\r\n', '', '', 'product-250x2502.png', '', '', '', '', '', '2018-08-02 05:09:49', '2018-08-09 05:07:56', 'Active', '', '', 'decorex-backlit-led-down-light-round-12-watt', '', '', '', '', '', '', '', ''),
(59, '2', 'Decorex Backlit Led Down Light Square 12 Watt', '1', '', '350', '700', '60', '<p>Outer - 120mm</p>\r\n\r\n<p>Cut out - 105mm</p>\r\n\r\n<p>Alluminium Body</p>\r\n\r\n<p>Warranty - 2Years</p>\r\n', '', '', 'product-250x2503.png', '', '', '', '', '', '2018-08-02 05:11:23', '2018-08-09 05:08:16', 'Active', '', '', 'decorex-backlit-led-down-light-square-12-watt', '', '', '', '', '', '', '', ''),
(60, '2', 'Decorex Backlit Led Down Light Round 18 Watt', '1', '', '500', '900', '25', '<p>Outer - 170mm</p>\r\n\r\n<p>Cut out - 155mm</p>\r\n\r\n<p>Alluminium Body</p>\r\n\r\n<p>Warranty - 2 Years</p>\r\n', '', '', 'product-250x2504.png', '', '', '', '', '', '2018-08-02 05:13:46', '2018-08-09 05:08:31', 'Active', '', '', 'decorex-backlit-led-down-light-round-18-watt', '', '', '', '', '', '', '', ''),
(61, '2', 'Decorex Backlit Led Down Light Square 18 Watt', '1', '', '500', '900', '32', '<p>Outer - 170mm</p>\r\n\r\n<p>Cut out - 155mm</p>\r\n\r\n<p>Alluminium Body</p>\r\n\r\n<p>Warranty - 2 Years</p>\r\n', '', '', 'product-250x2505.png', '', '', '', '', '', '2018-08-02 05:15:16', '2018-08-09 05:08:46', 'Active', '', '', 'decorex-backlit-led-down-light-square-18-watt', '', '', '', '', '', '', '', ''),
(62, '3', 'Decorex Surface Led Pannel Round 6 Watt ', '1', '', '350', '650', '60', '<p>Size - 120mm</p>\r\n\r\n<p>Alluminium Body&nbsp;</p>\r\n\r\n<p>Warranty - 2 Year</p>\r\n', '', '', 'Surface.png', '', '', '', '', '', '2018-08-02 05:17:40', '2018-08-09 05:09:00', 'Active', '', '', 'decorex-surface-led-pannel-round-6-watt', '', '', '', '', '', '', '', ''),
(63, '3', 'Decorex Surface Led Pannel Square 6 Watt ', '1', '', '350', '650', '60', '<p>Size - 120mm</p>\r\n\r\n<p>Alluminium Body</p>\r\n\r\n<p>Warranty - 2 Year</p>\r\n', '', '', 'Surface1.png', '', '', '', '', '', '2018-08-02 05:19:24', '2018-08-09 05:09:21', 'Active', '', '', 'decorex-surface-led-pannel-square-6-watt', '', '', '', '', '', '', '', ''),
(64, '3', 'Decorex Surface Led Pannel Round 12 Watt ', '1', '', '400', '700', '60', '<p>Size - 170mm</p>\r\n\r\n<p>Alluminium Body</p>\r\n\r\n<p>Warranty - 2 Year</p>\r\n', '', '', 'Surface2.png', '', '', '', '', '', '2018-08-02 05:28:12', '2018-08-09 05:09:33', 'Active', '', '', 'decorex-surface-led-pannel-round-12-watt', '', '', '', '', '', '', '', ''),
(65, '3', 'Decorex Surface Led Pannel Square 12 Watt ', '1', '', '400', '700', '60', '<p>Size - 170mm</p>\r\n\r\n<p>Alluminium Body</p>\r\n\r\n<p>Warranty - 2 Year</p>\r\n\r\n<p>&nbsp;</p>\r\n', '', '', 'Surface3.png', '', '', '', '', '', '2018-08-02 05:29:52', '2018-08-09 05:09:46', 'Active', '', '', 'decorex-surface-led-pannel-square-12-watt', '', '', '', '', '', '', '', ''),
(66, '3', 'Decorex Surface Led Pannel Round 18 Watt ', '1', '', '550', '900', '60', '<p>Size - 220mm</p>\r\n\r\n<p>Alluminium Body</p>\r\n\r\n<p>Warranty - 2 Year</p>\r\n', '', '', 'Surface4.png', '', '', '', '', '', '2018-08-02 05:31:29', '2018-08-09 05:10:14', 'Active', '', '', 'decorex-surface-led-pannel-round-18-watt', '', '', '', '', '', '', '', ''),
(67, '6', 'Decorex Led 25 Watt Track Light', '1', '', '1600', '3500', '25', '<p>Body Clour - White / Black</p>\r\n\r\n<p>Without Lense</p>\r\n\r\n<p>Warranty - 2 Year</p>\r\n\r\n<p>&nbsp;</p>\r\n', '', '', 'IMG_2840.png', '', '', '', '', '', '2018-08-02 05:46:24', '2018-08-09 05:10:37', 'Active', '', '', 'decorex-led-25-watt-track-light', '', '', '', '', '', '', '', ''),
(68, '6', 'Decorex Led 25 Watt Track Light With Lense', '1', '', '1850', '3500', '25', '<p>Body Colour - Black / White</p>\r\n\r\n<p>With Lense</p>\r\n\r\n<p>Warranty - 2 Year</p>\r\n', '', '', 'IMG_28401.png', '', '', '', '', '', '2018-08-02 06:55:42', '2018-08-09 05:10:49', 'Active', '', '', 'decorex-led-25-watt-track-light-with-lense', '', '', '', '', '', '', '', ''),
(69, '6', 'Decorex Led 35 Watt Track Light', '1', '', '1950', '2300', '25', '<p>Body Colour - Black / White</p>\r\n\r\n<p>Without Lense</p>\r\n\r\n<p>Warranty - 2 Years</p>\r\n', '', '', 'IMG_2847_(1).png', '', '', '', '', '', '2018-08-02 06:58:06', '2018-08-09 05:11:01', 'Active', '', '', 'decorex-led-35-watt-track-light', '', '', '', '', '', '', '', ''),
(70, '6', 'Decorex Led 35 Watt Track Light With Lense', '1', '', '2100', '2800', '25', '<p>Body Colour - Black / White</p>\r\n\r\n<p>With Lense</p>\r\n\r\n<p>Warranty - 2 Years</p>\r\n', '', '', 'IMG_2847_(1)1.png', '', '', '', '', '', '2018-08-02 07:00:06', '2018-08-09 05:11:15', 'Active', '', '', 'decorex-led-35-watt-track-light-with-lense', '', '', '', '', '', '', '', ''),
(71, '7', 'Decorex 1 Meter Track', '1', '', '500', '750', '60', '<p>Body Colour - Black / White</p>\r\n\r\n<p>Length - 1&nbsp;Meter</p>\r\n', '', '', '1_METER_TRACK.jpg', '', '', '', '', '', '2018-08-02 07:06:12', '2018-08-09 05:11:39', 'Active', '', '', 'decorex-1-meter-track', '', '', '', '', '', '', '', ''),
(72, '8', 'Decorex Single Track', '1', '', '300', '650', '60', '', '', '', 'SINGLE_TRACK.jpg', '', '', '', '', '', '2018-08-02 07:07:48', '2018-08-09 05:11:56', 'Active', '', '', 'decorex-single-track', '', '', '', '', '', '', '', ''),
(73, '9', 'Decorex Falecealing Track', '1', '', '400', '900', '25', '', '', '', 'FALECEALING_TRACK.jpg', '', '', '', '', '', '2018-08-02 07:09:27', '2018-08-09 05:12:12', 'Active', '', '', 'decorex-falecealing-track', '', '', '', '', '', '', '', ''),
(74, '12', 'Decorex GU10 Fittings', '1', '', '550', '1000', '25', '', '', '', 'GU_10_FITTING.jpg', '', '', '', '', '', '2018-08-02 07:11:53', '2018-08-09 05:12:26', 'Active', '', '', 'decorex-gu10-fittings', '', '', '', '', '', '', '', ''),
(75, '13', 'Decorex Gu10 Lamp Holder', '1', '', '30', '50', '60', '', '', '', '20180206_161032-1.jpg', '', '', '', '', '', '2018-08-02 07:19:01', '2018-08-09 05:12:42', 'Active', '', '', 'decorex-gu10-land-holder', '', '', '', '', '', '', '', ''),
(76, '11', 'Decorex GU10 Lamp 5 Watt', '1', '', '225', '500', '60', '<p>Body - Metal</p>\r\n\r\n<p>Base - 36D&nbsp;</p>\r\n', '', '', 'GU10_1.JPG', '', '', '', '', '', '2018-08-02 07:21:51', '2018-08-09 05:12:59', 'Active', '', '', 'decorex-gu10-land-5-watt', '', '', '', '', '', '', '', ''),
(77, '11', 'Decorex GU10 Lamp 7 Watt', '1', '', '250', '650', '60', '<p>Base - 36D</p>\r\n', '', '', 'GU10_11.JPG', '', '', '', '', '', '2018-08-02 07:27:38', '2018-08-09 05:13:14', 'Active', '', '', 'decorex-gu10-land-7-watt', '', '', '', '', '', '', '', ''),
(78, '11', 'Decorex GU10 Lamp 6 Watt', '1', '', '280', '700', '60', '<p>Dimmable</p>\r\n\r\n<p>Angle Change</p>\r\n\r\n<p>Base - 36D</p>\r\n\r\n<p>Body - Metal</p>\r\n', '', '', 'GU10.jpg', '', '', '', '', '', '2018-08-02 07:39:37', '2018-08-09 05:13:44', 'Active', '', '', 'decorex-gu10-land-6-watt', '', '', '', '', '', '', '', ''),
(79, '11', 'Decorex GU10 Lamp 5.5 Watt', '1', '', '350', '600', '25', '<p>Angle chane&nbsp;</p>\r\n\r\n<p>Base 5.3</p>\r\n\r\n<p>Body -&nbsp; Metal</p>\r\n', '', '', '0T4A9905.png', '', '', '', '', '', '2018-08-02 07:42:04', '2018-08-09 05:13:58', 'Active', '', '', 'decorex-gu10-land-5-5-watt', '', '', '', '', '', '', '', ''),
(80, '18', 'Decorex Highway Fitting', '1', '', '2900', '4500', '60', '<p>Wattage - 65 watt</p>\r\n', '', '', 'highway_fitting.jpg', '', '', '', '', '', '2018-08-02 07:44:37', '2018-08-09 05:14:25', 'Active', '', '', 'decorex-highway-fitting', '', '', '', '', '', '', '', ''),
(81, '18', 'Decorex Mediumway Fitting', '1', '', '2400', '5500', '60', '<p>Wattage - 45 watt</p>\r\n', '', '', 'medium_bay.jpg', '', '', '', '', '', '2018-08-02 07:45:44', '2018-08-09 05:14:43', 'Active', '', '', 'decorex-mediumway-fitting', '', '', '', '', '', '', '', ''),
(82, '15', 'JSBLEDSL30', '1', '', '8500', '9500', '52', '<p>LED MAKE - SAMSUNG&nbsp;/ EDISION / EVERLIGHT</p>\r\n\r\n<p>Input Voltage - 90-300 Volts</p>\r\n\r\n<p>Power Factor - &gt;0.95</p>\r\n\r\n<p>Colour Temp. - 6000+ / -500k</p>\r\n\r\n<p>Light Source - SMD LED Chip as per LM 80/IS16106</p>\r\n\r\n<p>IS - 10322</p>\r\n\r\n<p>Part - 5/sec-3/2012</p>\r\n\r\n<p>BIS - R-93005169</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '', '', 'SL_903.png', '', '', '', '', '', '2018-08-03 09:01:39', '2018-08-09 05:19:56', 'Active', '', '', 'jsbledsl30', '', '', '', '', '', '', '', ''),
(83, '15', 'JSBLEDSL50', '1', '', '5200', '6500', '60', '<p>LED MAKE - SAMSUNG&nbsp;/ EDISION / EVERLIGHT</p>\r\n\r\n<p>Input Voltage - 90-300 Volts</p>\r\n\r\n<p>Power Factor - &gt;0.95</p>\r\n\r\n<p>Colour Temp. - 6000+ / -500k</p>\r\n\r\n<p>Light Source - SMD LED Chip as per LM 80/IS16106</p>\r\n\r\n<p>IS - 10322</p>\r\n\r\n<p>Part - 5/sec-3/2012</p>\r\n\r\n<p>BIS - R-93005169</p>\r\n', '', '', 'SL_904.png', '', '', '', '', '', '2018-08-03 09:03:08', '2018-08-09 05:20:10', 'Active', '', '', 'jsbledsl50', '', '', '', '', '', '', '', ''),
(84, '15', 'JSBLEDSL70', '1', '', '8500', '9200', '65', '<p>LED MAKE - SAMSUNG&nbsp;/ EDISION / EVERLIGHT</p>\r\n\r\n<p>Input Voltage - 90-300 Volts</p>\r\n\r\n<p>Power Factor - &gt;0.95</p>\r\n\r\n<p>Colour Temp. - 6000+ / -500k</p>\r\n\r\n<p>Light Source - SMD LED Chip as per LM 80/IS16106</p>\r\n\r\n<p>IS - 10322</p>\r\n\r\n<p>Part - 5/sec-3/2012</p>\r\n\r\n<p>BIS - R-93005169</p>\r\n', '', '', 'SL_905.png', '', '', '', '', '', '2018-08-03 09:04:23', '2018-08-09 05:20:45', 'Active', '', '', 'jsbledsl70', '', '', '', '', '', '', '', ''),
(85, '15', 'JSBLEDSL90', '1', '', '9300', '10500', '60', '<p>LED MAKE - SAMSUNG&nbsp;/ EDISION / EVERLIGHT</p>\r\n\r\n<p>Input Voltage - 90-300 Volts</p>\r\n\r\n<p>Power Factor - &gt;0.95</p>\r\n\r\n<p>Colour Temp. - 6000+ / -500k</p>\r\n\r\n<p>Light Source - SMD LED Chip as per LM 80/IS16106</p>\r\n\r\n<p>IS - 10322</p>\r\n\r\n<p>Part - 5/sec-3/2012</p>\r\n\r\n<p>BIS - R-93005169</p>\r\n', '', '', 'SL_906.png', '', '', '', '', '', '2018-08-03 09:26:15', '2018-08-09 05:20:59', 'Active', '', '', 'jsbledsl90', '', '', '', '', '', '', '', ''),
(86, '15', 'JSBLEDSL110', '1', '', '10800', '11500', '60', '<p>LED MAKE - SAMSUNG&nbsp;/ EDISION / EVERLIGHT</p>\r\n\r\n<p>Input Voltage - 90-300 Volts</p>\r\n\r\n<p>Power Factor - &gt;0.95</p>\r\n\r\n<p>Colour Temp. - 6000+ / -500k</p>\r\n\r\n<p>Light Source - SMD LED Chip as per LM 80/IS16106</p>\r\n\r\n<p>IS - 10322</p>\r\n\r\n<p>Part - 5/sec-3/2012</p>\r\n\r\n<p>BIS - R-93005169</p>\r\n', '', '', 'SL_907.png', '', '', '', '', '', '2018-08-03 09:28:13', '2018-08-09 05:21:14', 'Active', '', '', 'jsbledsl110', '', '', '', '', '', '', '', ''),
(87, '15', 'JSBLEDSL120', '1', '', '10800', '11500', '60', '<p>LED MAKE - SAMSUNG&nbsp;/ EDISION / EVERLIGHT</p>\r\n\r\n<p>Input Voltage - 90-300 Volts</p>\r\n\r\n<p>Power Factor - &gt;0.95</p>\r\n\r\n<p>Colour Temp. - 6000+ / -500k</p>\r\n\r\n<p>Light Source - SMD LED Chip as per LM 80/IS16106</p>\r\n\r\n<p>IS - 10322</p>\r\n\r\n<p>Part - 5/sec-3/2012</p>\r\n\r\n<p>BIS - R-93005169</p>\r\n', '', '', 'SL_908.png', '', '', '', '', '', '2018-08-03 09:55:36', '2018-08-09 05:21:48', 'Active', '', '', 'jsbledsl120', '', '', '', '', '', '', '', ''),
(88, '15', 'JSBLEDSL45', '1', '', '6000', '6700', '60', '<p>LED MAKE - SAMSUNG&nbsp;/ EDISION / EVERLIGHT</p>\r\n\r\n<p>Input Voltage - 90-300 Volts</p>\r\n\r\n<p>Power Factor - &gt;0.95</p>\r\n\r\n<p>Colour Temp. - 6000+ / -500k</p>\r\n\r\n<p>Light Source - SMD LED Chip as per LM 80/IS16106</p>\r\n\r\n<p>IS - 10322</p>\r\n\r\n<p>Part - 5/sec-3/2012</p>\r\n\r\n<p>BIS - R-93005169</p>\r\n', '', '', 'SL_909.png', '', '', '', '', '', '2018-08-03 09:57:03', '2018-08-09 05:22:00', 'Active', '', '', 'jsbledsl45', '', '', '', '', '', '', '', ''),
(89, '15', 'JSBLEDSL60', '1', '', '7800', '8700', '60', '<p>LED MAKE - SAMSUNG&nbsp;/ EDISION / EVERLIGHT</p>\r\n\r\n<p>Input Voltage - 90-300 Volts</p>\r\n\r\n<p>Power Factor - &gt;0.95</p>\r\n\r\n<p>Colour Temp. - 6000+ / -500k</p>\r\n\r\n<p>Light Source - SMD LED Chip as per LM 80/IS16106</p>\r\n\r\n<p>IS - 10322</p>\r\n\r\n<p>Part - 5/sec-3/2012</p>\r\n\r\n<p>BIS - R-93005169</p>\r\n', '', '', 'SL_9010.png', '', '', '', '', '', '2018-08-03 09:57:49', '2018-08-09 05:22:11', 'Active', '', '', 'jsbledsl60', '', '', '', '', '', '', '', ''),
(90, '15', 'JSBLEDSL150', '1', '', '15000', '16500', '60', '<p>LED MAKE - SAMSUNG&nbsp;/ EDISION / EVERLIGHT</p>\r\n\r\n<p>Input Voltage - 90-300 Volts</p>\r\n\r\n<p>Power Factor - &gt;0.95</p>\r\n\r\n<p>Colour Temp. - 6000+ / -500k</p>\r\n\r\n<p>Light Source - SMD LED Chip as per LM 80/IS16106</p>\r\n\r\n<p>IS - 10322</p>\r\n\r\n<p>Part - 5/sec-3/2012</p>\r\n\r\n<p>BIS - R-93005169</p>\r\n', '', '', 'SL_1253.png', '', '', '', '', '', '2018-08-03 10:01:42', '2018-08-09 05:22:22', 'Active', '', '', 'jsbledsl150', '', '', '', '', '', '', '', ''),
(91, '17', 'JSBLEDFL50', '1', '', '5100', '5600', '60', '<p>LED MAKE - SAMSUNG&nbsp;/ EDISION / EVERLIGHT</p>\r\n\r\n<p>Input Voltage - 90-300 Volts</p>\r\n\r\n<p>Power Factor - &gt;0.95</p>\r\n\r\n<p>Colour Temp. - 6000+ / -500k</p>\r\n\r\n<p>Light Source - SMD LED Chip as per LM 80/IS16106</p>\r\n\r\n<p>IS - 10322</p>\r\n\r\n<p>Part - 5/sec-3/2012</p>\r\n\r\n<p>BIS - R-93005169</p>\r\n', '', '', 'FL_501.png', '', '', '', '', '', '2018-08-03 10:31:29', '2018-08-09 05:22:34', 'Active', '', '', 'jsbledfl50', '', '', '', '', '', '', '', ''),
(92, '17', 'JSBLEDFL100', '1', '', '8200', '8700', '60', '<p>LED MAKE - SAMSUNG&nbsp;/ EDISION / EVERLIGHT</p>\r\n\r\n<p>Input Voltage - 90-300 Volts</p>\r\n\r\n<p>Power Factor - &gt;0.95</p>\r\n\r\n<p>Colour Temp. - 6000+ / -500k</p>\r\n\r\n<p>Light Source - SMD LED Chip as per LM 80/IS16106</p>\r\n\r\n<p>IS - 10322</p>\r\n\r\n<p>Part - 5/sec-3/2012</p>\r\n\r\n<p>BIS - R-93005169</p>\r\n', '', '', 'FL3.png', '', '', '', '', '', '2018-08-03 10:36:07', '2018-08-09 05:22:59', 'Active', '', '', 'jsbledfl100', '', '', '', '', '', '', '', ''),
(93, '17', 'JSBLEDFL150', '1', '', '13500', '15000', '60', '<p>LED MAKE - SAMSUNG&nbsp;/ EDISION / EVERLIGHT</p>\r\n\r\n<p>Input Voltage - 90-300 Volts</p>\r\n\r\n<p>Power Factor - &gt;0.95</p>\r\n\r\n<p>Colour Temp. - 6000+ / -500k</p>\r\n\r\n<p>Light Source - SMD LED Chip as per LM 80/IS16106</p>\r\n\r\n<p>IS - 10322</p>\r\n\r\n<p>Part - 5/sec-3/2012</p>\r\n\r\n<p>BIS - R-93005169</p>\r\n', '', '', 'FL4.png', '', '', '', '', '', '2018-08-03 11:33:28', '2018-08-09 05:23:10', 'Active', '', '', 'jsbledfl150', '', '', '', '', '', '', '', ''),
(94, '17', 'JSBLEDFL200', '1', '', '17500', '19500', '60', '<p>LED MAKE - SAMSUNG&nbsp;/ EDISION / EVERLIGHT</p>\r\n\r\n<p>Input Voltage - 90-300 Volts</p>\r\n\r\n<p>Power Factor - &gt;0.95</p>\r\n\r\n<p>Colour Temp. - 6000+ / -500k</p>\r\n\r\n<p>Light Source - SMD LED Chip as per LM 80/IS16106</p>\r\n\r\n<p>IS - 10322</p>\r\n\r\n<p>Part - 5/sec-3/2012</p>\r\n\r\n<p>BIS - R-93005169</p>\r\n', '', '', 'FL5.png', '', '', '', '', '', '2018-08-03 11:34:18', '2018-08-09 05:23:22', 'Active', '', '', 'jsbledfl200', '', '', '', '', '', '', '', ''),
(95, '17', 'Decorex LED Flood Light 90 Watt', '1', '', '4400', '5300', '60', '<p>LED MAKE - SAMSUNG&nbsp;/ EDISION / EVERLIGHT</p>\r\n\r\n<p>Input Voltage - 220-240Volts</p>\r\n\r\n<p>Power Factor - &gt;0.95</p>\r\n\r\n<p>Light Source - SMD LED Chip as per LM 80/IS16106</p>\r\n\r\n<p>IS - 10322</p>\r\n\r\n<p>Part - 5/sec-3/2012</p>\r\n\r\n<p>BIS - R-93005169</p>\r\n', '<p>2 Year Warranty</p>\r\n', '', 'FL6.png', '', '', '', '', '', '2018-08-04 06:25:09', '2018-08-09 05:23:33', 'Active', '', '', 'decorex-led-flood-light-90-watt', '', '', '', '', '', '', '', ''),
(96, '17', 'Decorex LED Flood Light 25 Watt', '1', '', '1100', '1700', '25', '<p>LED MAKE - SAMSUNG&nbsp;/ EDISION / EVERLIGHT</p>\r\n\r\n<p>Input Voltage - 220-240Volts</p>\r\n\r\n<p>Power Factor - &gt;0.95</p>\r\n\r\n<p>Light Source - SMD LED Chip as per LM 80/IS16106</p>\r\n\r\n<p>IS - 10322</p>\r\n\r\n<p>Part - 5/sec-3/2012</p>\r\n\r\n<p>BIS - R-93005169</p>\r\n', '<p>2 Year Warranty</p>\r\n', '', 'FL_502.png', '', '', '', '', '', '2018-08-04 06:26:37', '2018-08-09 05:23:44', 'Active', '', '', 'decorex-led-flood-light-25-watt', '', '', '', '', '', '', '', ''),
(97, '15', 'Decorex LED Street Light 125 Watt', '', '', '6000', '8200', '60', '<p>Pole Mounting Dia - 60mm</p>\r\n\r\n<p>LED MAKE - SAMSUNG&nbsp;/ EDISION / EVERLIGHT</p>\r\n\r\n<p>Input Voltage - 220-240Volts</p>\r\n\r\n<p>Power Factor - &gt;0.95</p>\r\n\r\n<p>Light Source - SMD LED Chip as per LM 80/IS16106</p>\r\n\r\n<p>IS - 10322</p>\r\n\r\n<p>Part - 5/sec-3/2012</p>\r\n\r\n<p>BIS - R-93005169</p>\r\n', '', '', 'SL_1255.png', '', '', '', '', '', '2018-08-04 06:34:21', '2018-08-09 05:23:57', 'Active', '', '', 'decorex-led-street-light-125-watt', '', '', '', '', '', '', '', ''),
(98, '15', 'Decorex LED Street Light 100 Watt', '1', '', '4800', '5200', '25', '<p>Pole Mounting Dia - 60mm</p>\r\n\r\n<p>LED MAKE - SAMSUNG&nbsp;/ EDISION / EVERLIGHT</p>\r\n\r\n<p>Input Voltage - 220-240Volts</p>\r\n\r\n<p>Power Factor - &gt;0.95</p>\r\n\r\n<p>Light Source - SMD LED Chip as per LM 80/IS16106</p>\r\n\r\n<p>IS - 10322</p>\r\n\r\n<p>Part - 5/sec-3/2012</p>\r\n\r\n<p>BIS - R-93005169</p>\r\n', '', '', 'SL_1256.png', '', '', '', '', '', '2018-08-04 06:35:43', '2018-08-09 05:24:08', 'Active', '', '', 'decorex-led-street-light-100-watt', '', '', '', '', '', '', '', ''),
(99, '15', 'Decorex LED Street Light 60 Watt', '1', '', '3800', '4300', '25', '<p>Pole Mounting Dia - 60mm</p>\r\n\r\n<p>LED MAKE - SAMSUNG&nbsp;/ EDISION / EVERLIGHT</p>\r\n\r\n<p>Input Voltage - 220-240Volts</p>\r\n\r\n<p>Power Factor - &gt;0.95</p>\r\n\r\n<p>Light Source - SMD LED Chip as per LM 80/IS16106</p>\r\n\r\n<p>IS - 10322</p>\r\n\r\n<p>Part - 5/sec-3/2012</p>\r\n\r\n<p>BIS - R-93005169</p>\r\n', '', '', 'SL_9013.png', '', '', '', '', '', '2018-08-04 06:37:16', '2018-08-09 05:24:19', 'Active', '', '', 'decorex-led-street-light-60-watt', '', '', '', '', '', '', '', ''),
(100, '15', 'Decorex LED Street Light 65 Watt', '1', '', '4000', '5000', '60', '<p>Pole Mounting Dia - 60mm</p>\r\n\r\n<p>LED MAKE - SAMSUNG&nbsp;/ EDISION / EVERLIGHT</p>\r\n\r\n<p>Input Voltage - 220-240Volts</p>\r\n\r\n<p>Power Factor - &gt;0.95</p>\r\n\r\n<p>Light Source - SMD LED Chip as per LM 80/IS16106</p>\r\n\r\n<p>IS - 10322</p>\r\n\r\n<p>Part - 5/sec-3/2012</p>\r\n\r\n<p>BIS - R-93005169</p>\r\n', '', '', 'SL_1257.png', '', '', '', '', '', '2018-08-04 06:38:11', '2018-08-09 05:24:32', 'Active', '', '', 'decorex-led-street-light-65-watt', '', '', '', '', '', '', '', ''),
(101, '15', 'Decorex LED Street Light 70 Watt', '1', '', '4100', '5200', '25', '<p>Pole Mounting Dia - 60mm</p>\r\n\r\n<p>LED MAKE - SAMSUNG&nbsp;/ EDISION / EVERLIGHT</p>\r\n\r\n<p>Input Voltage - 220-240Volts</p>\r\n\r\n<p>Power Factor - &gt;0.95</p>\r\n\r\n<p>Light Source - SMD LED Chip as per LM 80/IS16106</p>\r\n\r\n<p>IS - 10322</p>\r\n\r\n<p>Part - 5/sec-3/2012</p>\r\n\r\n<p>BIS - R-93005169</p>\r\n', '', '', 'SL_1258.png', '', '', '', '', '', '2018-08-04 06:38:59', '2018-08-09 05:24:42', 'Active', '', '', 'decorex-led-street-light-70-watt', '', '', '', '', '', '', '', ''),
(102, '15', 'Decorex LED Street Light 40 Watt', '1', '', '2800', '3400', '25', '<p>Pole Mounting Dia - 40mm</p>\r\n\r\n<p>LED MAKE - SAMSUNG&nbsp;/ EDISION / EVERLIGHT</p>\r\n\r\n<p>Input Voltage - 220-240Volts</p>\r\n\r\n<p>Power Factor - &gt;0.95</p>\r\n\r\n<p>Light Source - SMD LED Chip as per LM 80/IS16106</p>\r\n\r\n<p>IS - 10322</p>\r\n\r\n<p>Part - 5/sec-3/2012</p>\r\n\r\n<p>BIS - R-93005169</p>\r\n\r\n<p>2 Year Manufacturing Warranty</p>\r\n', '', '', 'SL_9014.png', '', '', '', '', '', '2018-08-04 06:41:25', '2018-08-09 05:25:16', 'Active', '', '', 'decorex-led-street-light-40-watt', '', '', '', '', '', '', '', ''),
(103, '15', 'Decorex LED Street Light 30 Watt', '1', '', '2100', '2800', '25', '<p>Pole Mounting Dia - 40mm</p>\r\n\r\n<p>LED MAKE - SAMSUNG&nbsp;/ EDISION / EVERLIGHT</p>\r\n\r\n<p>Input Voltage - 220-240Volts</p>\r\n\r\n<p>Power Factor - &gt;0.95</p>\r\n\r\n<p>Light Source - SMD LED Chip as per LM 80/IS16106</p>\r\n\r\n<p>IS - 10322</p>\r\n\r\n<p>Part - 5/sec-3/2012</p>\r\n\r\n<p>BIS - R-93005169</p>\r\n\r\n<p>2 Year Manufacturing Warranty</p>\r\n', '', '', 'SL_9015.png', '', '', '', '', '', '2018-08-04 06:42:20', '2018-08-09 05:25:27', 'Active', '', '', 'decorex-led-street-light-30-watt', '', '', '', '', '', '', '', ''),
(104, '15', 'Decorex LED Street Light 25 Watt', '1', '', '2000', '2500', '25', '<p>Pole Mounting Dia - 22mm</p>\r\n\r\n<p>LED MAKE - SAMSUNG&nbsp;/ EDISION / EVERLIGHT</p>\r\n\r\n<p>Input Voltage - 220-240Volts</p>\r\n\r\n<p>Power Factor - &gt;0.95</p>\r\n\r\n<p>Light Source - SMD LED Chip as per LM 80/IS16106</p>\r\n\r\n<p>IS - 10322</p>\r\n\r\n<p>Part - 5/sec-3/2012</p>\r\n\r\n<p>BIS - R-93005169</p>\r\n\r\n<p>2 Year Manufacturing Warranty</p>\r\n', '', '', 'SL_9016.png', '', '', '', '', '', '2018-08-04 06:43:26', '2018-08-09 05:26:55', 'Active', '', '', 'decorex-led-street-light-25-watt', '', '', '', '', '', '', '', ''),
(105, '15', 'Decorex LED Street Light 20 Watt', '1', '', '1600', '1900', '65', '<p>Pole Mounting Dia - 22mm</p>\r\n\r\n<p>LED MAKE - SAMSUNG&nbsp;/ EDISION / EVERLIGHT</p>\r\n\r\n<p>Input Voltage - 220-240Volts</p>\r\n\r\n<p>Power Factor - &gt;0.95</p>\r\n\r\n<p>Light Source - SMD LED Chip as per LM 80/IS16106</p>\r\n\r\n<p>IS - 10322</p>\r\n\r\n<p>Part - 5/sec-3/2012</p>\r\n\r\n<p>BIS - R-93005169</p>\r\n\r\n<p>2 Year Manufacturing Warranty</p>\r\n', '', '', 'SL_9017.png', '', '', '', '', '', '2018-08-04 06:44:36', '2018-08-09 05:27:07', 'Active', '', '', 'decorex-led-street-light-20-watt', '', '', '', '', '', '', '', ''),
(106, '15', 'Decorex LED Street Light 10 Watt', '1', '', '1100', '1600', '25', '<p>Pole Mounting Dia - 22mm</p>\r\n\r\n<p>LED MAKE - SAMSUNG&nbsp;/ EDISION / EVERLIGHT</p>\r\n\r\n<p>Input Voltage - 220-240Volts</p>\r\n\r\n<p>Power Factor - &gt;0.95</p>\r\n\r\n<p>Light Source - SMD LED Chip as per LM 80/IS16106</p>\r\n\r\n<p>IS - 10322</p>\r\n\r\n<p>Part - 5/sec-3/2012</p>\r\n\r\n<p>BIS - R-93005169</p>\r\n\r\n<p>2 Year Manufacturing Warranty</p>\r\n', '', '', 'SL_9018.png', '', '', '', '', '', '2018-08-04 06:45:23', '2018-08-09 05:27:18', 'Active', '', '', 'decorex-led-street-light-10-watt', '', '', '', '', '', '', '', ''),
(107, '5', 'Decorex Cob Spot Light 7 Watt Round', '1', '', '560', '650', '12', '<p>Outer - 100mm</p>\r\n\r\n<p>Cutout - 75mm</p>\r\n\r\n<p>Shape - Round</p>\r\n\r\n<p>Warranty - 2 Year&nbsp;</p>\r\n', '', '', 'IMG_2855.JPG', '', '', '', '', '', '2018-08-04 06:59:29', '2018-08-09 05:27:33', 'Active', '', '', 'decorex-cob-spot-light-7-watt-round', '', '', '', '', '', '', '', ''),
(108, '5', 'Decorex Cob Spot Light 7 Watt Square', '1', '', '700', '900', '15', '<p>Outer - 90mm</p>\r\n\r\n<p>Cutout - 65mm</p>\r\n\r\n<p>Shape - Square</p>\r\n\r\n<p>Warranty - 2 Year</p>\r\n', '', '', 'IMG_2861.JPG', '', '', '', '', '', '2018-08-04 07:02:18', '2018-08-09 05:28:28', 'Active', '', '', 'decorex-cob-spot-light-7-watt-square', '', '', '', '', '', '', '', ''),
(109, '5', 'Decorex Cob Spot Light 15 Watt Square', '1', '', '1100', '1700', '25', '<p>Outer - 120mm</p>\r\n\r\n<p>Cutout - 85mm</p>\r\n\r\n<p>Shape - Square</p>\r\n\r\n<p>Warranty - 2 Year</p>\r\n', '', '', 'IMG_28611.JPG', '', '', '', '', '', '2018-08-04 07:05:11', '2018-08-09 05:28:17', 'Active', '', '', 'decorex-cob-spot-light-15-watt-square', '', '', '', '', '', '', '', ''),
(110, '5', 'Decorex Cob Spot Light 20 Watt Square', '', '', '1200', '1900', '25', '<p>Outer - 140mm</p>\r\n\r\n<p>Cutout - 115mm</p>\r\n\r\n<p>Shape - Square</p>\r\n\r\n<p>Warranty - 2 Year</p>\r\n', '', '', 'IMG_28612.JPG', '', '', '', '', '', '2018-08-04 07:06:34', '2018-08-09 05:28:38', 'Active', '', '', 'decorex-cob-spot-light-20-watt-square', '', '', '', '', '', '', '', ''),
(111, '5', 'Decorex Cob Spot Light 15 Watt Round', '1', '', '950', '1350', '25', '<p>Outer - 130mm</p>\r\n\r\n<p>Cutout - 120mm</p>\r\n\r\n<p>Shape - Round</p>\r\n\r\n<p>Warranty - 2 Year</p>\r\n', '', '', 'IMG_28551.JPG', '', '', '', '', '', '2018-08-04 07:07:34', '2018-08-09 05:28:51', 'Active', '', '', 'decorex-cob-spot-light-15-watt-round', '', '', '', '', '', '', '', ''),
(112, '5', 'Decorex Cob Spot Light 25 Watt Round', '1', '', '1500', '2500', '20', '<p>Outer - 140mm</p>\r\n\r\n<p>Cutout - 115mm</p>\r\n\r\n<p>Shape - Round</p>\r\n\r\n<p>Warranty - 2 Year</p>\r\n', '', '', 'IMG_28552.JPG', '', '', '', '', '', '2018-08-04 07:09:47', '2018-08-09 05:29:03', 'Active', '', '', 'decorex-cob-spot-light-25-watt-round', '', '', '', '', '', '', '', ''),
(113, '5', 'Decorex Cob Spot Light 35 Watt Round', '1', '', '2750', '3250', '25', '<p>Outer - 170mm</p>\r\n\r\n<p>Cutout - 140mm</p>\r\n\r\n<p>Shape - Round</p>\r\n\r\n<p>Warranty - 2 Year</p>\r\n', '', '', 'IMG_28553.JPG', '', '', '', '', '', '2018-08-04 07:12:46', '2018-08-09 05:29:14', 'Active', '', '', 'decorex-cob-spot-light-35-watt-round', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profiledetail`
--

CREATE TABLE `tbl_profiledetail` (
  `profile_id` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_progst`
--

CREATE TABLE `tbl_progst` (
  `progst_id` int(11) NOT NULL,
  `tax_id` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `tax_perctg` varchar(255) NOT NULL,
  `from_date` varchar(255) NOT NULL,
  `end_date` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_progst`
--

INSERT INTO `tbl_progst` (`progst_id`, `tax_id`, `product_id`, `tax_perctg`, `from_date`, `end_date`, `status`, `created_at`, `updated_at`, `shipping_id`, `product_name`) VALUES
(3, '5', '1', '12', '2018-08-14', '', 'Active', '2018-08-13 08:48:04', '2018-08-13 10:20:16', 2, 'LED FILAMENT LAMP (A 60, 4 WATT)'),
(6, '5', '1', '12', '2018-08-13', '', 'Active', '2018-08-13 10:20:00', '', 1, 'LED FILAMENT LAMP (A 60, 4 WATT)'),
(7, '4', '3', '18', '2018-08-21', '', 'Active', '2018-08-13 10:20:46', '', 2, 'LED FILAMENT LAMP ( G-125, 7 WATT)'),
(8, '4', '1', '12', '2018-08-13', '', 'Active', '2018-08-13 17:58:43', '', 1, 'LED FILAMENT LAMP (A 60, 4 WATT)'),
(9, '5', '1', '15', '2018-08-15', '', 'Active', '2018-08-14 03:17:56', '', 2, 'LED FILAMENT LAMP (A 60, 4 WATT)'),
(10, '5', '1', '15', '2018-08-22', '2018-08-14', 'Active', '2018-08-14 14:41:16', '', 2, 'LED FILAMENT LAMP (A 60, 4 WATT)');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quality`
--

CREATE TABLE `tbl_quality` (
  `quality_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_review`
--

CREATE TABLE `tbl_review` (
  `review_id` int(11) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `star_rating` varchar(255) NOT NULL,
  `e_mail` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `full_descr` longtext NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_review`
--

INSERT INTO `tbl_review` (`review_id`, `product_id`, `name`, `star_rating`, `e_mail`, `filename`, `full_descr`, `created_at`, `updated_at`, `status`) VALUES
(4, '2', 'Dr Renu Yadav', '4', 'ab@gmail.com', '1531209337-cart-pdt-thumb1.jpg', 'Your email address will not be published. Required fields are marked *', '10-07-18 09:55:37', '', 'active'),
(9, '15', 'Ajay Kumar', '0', 'ajay@flawlessindia.in', '', '  Testing ', '10-07-18 14:22:27', '04-08-2018 12:33:35', 'active'),
(10, '2', 'Ajay Kumar', '3', 'ajay@flawlessindia.in', '1531227118-avator.png', ' laralipsum laralipsum laralipsum laralipsumlaralipsumlaralipsum ', '10-07-18 14:51:58', '10-07-2018 15:22:34', 'inactive'),
(11, '2', 'Rishu', '0', 'rishu@gmail.com', '', 'My  Invoice num 14324354676 last time  ', '12-07-18 09:44:12', '', 'active'),
(12, '42', 'rahul verma', '5', 'rv547727@gmail.com', '1533287008-pannel.png', ' This Product Is Very Usefull', '03-08-18 09:03:28', '04-08-2018 12:33:59', 'active'),
(13, '42', 'bhuvnesh kumar', '0', 'bhuvnesh@gmail.com', '', 'good product', '03-08-18 09:13:57', '', 'active'),
(14, '42', 'bhuvnesh', '5', 'bhuvnesh@gmail.com', '', 'good product', '03-08-18 09:14:46', '', 'active'),
(15, '42', 'ajay', '4', 'ajay@flawlessindia.in', '', 'good product', '03-08-18 09:21:49', '', 'active'),
(16, '42', 'rahul verma', '4', 'rv547727@gmail.com', '', 'yes', '03-08-18 09:22:26', '', 'active'),
(17, '5', 'Ajay Kumar', '0', 'ajay@flawlessindia.in', '1533385851-XmItF38z_400x400.jpg', 'Great Product !!!!!', '04-08-18 12:30:51', '', 'active'),
(18, '21', 'Jameshic', '0', 'elcia_8@op.pl', '', 'Hello. \r\n \r\nDownloads music club Dj\'s, mp3 private server. \r\nhttps://0daymusic.org/ \r\n \r\nPrivate FTP Music/Albums/mp3 1990-2018: \r\nPlan A: 20 EUR - 200GB - 30 Days \r\nPlan B: 45 EUR - 600GB - 90 Days \r\nPlan C: 80 EUR - 1500GB - 180 Days \r\n \r\nBest Regards, \r\nRobert', '07-08-18 11:50:36', '', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_seo`
--

CREATE TABLE `tbl_seo` (
  `seo_id` int(11) NOT NULL,
  `seo_title` varchar(255) NOT NULL,
  `seo_keyword` varchar(255) NOT NULL,
  `seo_descr` text NOT NULL,
  `seo_matatag` text NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `page_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_seo`
--

INSERT INTO `tbl_seo` (`seo_id`, `seo_title`, `seo_keyword`, `seo_descr`, `seo_matatag`, `created_at`, `updated_at`, `page_name`) VALUES
(1, 'Sri JSB Lighting Company', ' key', ' descriptionn', '', '2018-07-05 12:49:35', '2018-07-05 12:51:52', 'Home'),
(2, 'Sri JSB Lighting Company', '', '', '', '2018-07-05 13:06:13', '', 'About'),
(3, 'Sri JSB Lighting Company', '', '', '', '2018-07-05 13:06:32', '', 'Privacypolicy'),
(4, 'Sri JSB Lighting Company', '', '', '', '2018-07-05 13:06:38', '2018-07-05 13:07:00', 'Termscondition'),
(5, 'Sri JSB Lighting Company', '', '', '', '2018-07-05 13:07:08', '', 'Returnpolicy'),
(6, 'Sri JSB Lighting Company', '', '', '', '2018-07-05 13:07:16', '', 'Deliveryinformation'),
(7, 'Sri JSB Lighting Company', '', '', '', '2018-07-05 13:07:22', '', 'Cart'),
(8, 'Sri JSB Lighting Company', '', '', '', '2018-07-05 13:07:27', '', 'Checkout'),
(9, 'Sri JSB Lighting Company', '', '', '', '2018-07-05 13:07:33', '', 'Login'),
(10, 'Sri JSB Lighting Company', '', '', '', '2018-07-05 13:07:41', '', 'Signup'),
(11, 'Sri JSB Lighting Company', '', '', '', '2018-07-05 13:07:51', '', 'Contact');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shipping`
--

CREATE TABLE `tbl_shipping` (
  `shipping_id` int(11) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_shipping`
--

INSERT INTO `tbl_shipping` (`shipping_id`, `weight`, `amount`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', '10', 'Active', '2018-08-13 06:54:25', ''),
(2, '20', '20', 'Active', '2018-08-13 06:54:47', ''),
(3, '10', '20', 'Active', '2018-08-13 06:55:05', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_socialicon`
--

CREATE TABLE `tbl_socialicon` (
  `socialicon_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_socialicon`
--

INSERT INTO `tbl_socialicon` (`socialicon_id`, `name`, `link`, `created_at`, `updated_at`, `status`) VALUES
(1, 'youtube', 'https://youtu.be/ZfVHV66aNt8', '2018-08-07 06:06:46', '', 'Active'),
(2, 'facebook', 'https://www.facebook.com/decorex.led', '2018-08-07 06:06:07', '', 'Active'),
(3, 'linkedin', '', '2018-07-05 07:37:21', '', 'Active'),
(4, 'twitter', '', '2018-07-05 07:37:31', '', 'Active'),
(5, 'google-plus', '', '2018-07-05 07:37:48', '', 'Active'),
(6, 'instagram', '', '2018-07-05 07:37:58', '', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subcategory`
--

CREATE TABLE `tbl_subcategory` (
  `subcat_id` int(11) NOT NULL,
  `cat_id` varchar(255) NOT NULL,
  `subcat_name` varchar(255) NOT NULL,
  `seo_title` varchar(255) NOT NULL,
  `meta_tag` varchar(255) NOT NULL,
  `meta_descr` varchar(255) NOT NULL,
  `meta_keyword_descr` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tax`
--

CREATE TABLE `tbl_tax` (
  `tax_id` int(11) NOT NULL,
  `tax_type` varchar(255) NOT NULL,
  `tax_pcnt` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tax`
--

INSERT INTO `tbl_tax` (`tax_id`, `tax_type`, `tax_pcnt`, `status`, `created_at`, `updated_at`) VALUES
(4, 'SGST', 18, 'Active', '2018-08-09 11:37:29', ''),
(5, 'CGST', 12, 'Active', '2018-08-09 11:37:35', ''),
(6, 'IGST', 23, 'Active', '2018-08-09 11:37:46', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_technical`
--

CREATE TABLE `tbl_technical` (
  `ts_id` int(11) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `top_dimension` varchar(255) NOT NULL,
  `height_adjustment` varchar(255) NOT NULL,
  `table_top_sliding` varchar(255) NOT NULL,
  `battery_backup` varchar(255) NOT NULL,
  `trendelenburg` varchar(255) NOT NULL,
  `lateral_tilt` varchar(255) NOT NULL,
  `kidney` varchar(255) NOT NULL,
  `back_rest` varchar(255) NOT NULL,
  `leg_rest` varchar(255) NOT NULL,
  `head_rest` varchar(255) NOT NULL,
  `Power_supply` varchar(255) NOT NULL,
  `capacity_supply` varchar(255) NOT NULL,
  `cf1` varchar(255) NOT NULL,
  `cf2` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_testimonial`
--

CREATE TABLE `tbl_testimonial` (
  `tml_id` int(11) NOT NULL,
  `tml_name` varchar(255) NOT NULL,
  `image_file` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `status` varchar(20) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_userdetail`
--

CREATE TABLE `tbl_userdetail` (
  `userd_id` int(11) NOT NULL,
  `reguser_name` varchar(255) NOT NULL,
  `reguser_lastname` varchar(255) DEFAULT NULL,
  `reguser_mobile` varchar(255) NOT NULL,
  `reguser_altmail` varchar(255) NOT NULL,
  `reguser_agent` varchar(255) NOT NULL,
  `reguser_ip` varchar(255) NOT NULL,
  `reguser_add` varchar(255) DEFAULT NULL,
  `reguser_alterAdd` varchar(255) DEFAULT NULL,
  `reguser_dob` varchar(255) DEFAULT NULL,
  `cnf1` varchar(255) DEFAULT NULL,
  `cnf2` varchar(255) DEFAULT NULL,
  `cnf3` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `reguser_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_userdetail`
--

INSERT INTO `tbl_userdetail` (`userd_id`, `reguser_name`, `reguser_lastname`, `reguser_mobile`, `reguser_altmail`, `reguser_agent`, `reguser_ip`, `reguser_add`, `reguser_alterAdd`, `reguser_dob`, `cnf1`, `cnf2`, `cnf3`, `created_at`, `updated_at`, `reguser_id`) VALUES
(1, 'Ajay Kumar', 'null', '8882029116', 'null', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '103.203.69.175', 'null', 'null', NULL, 'null', 'null', 'null', '2018-07-26 10:14:29', '', 4),
(2, 'testing', 'null', '2324234454', 'null', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '103.203.69.84', 'null', 'null', NULL, 'null', 'null', 'null', '2018-08-01 09:18:41', '', 5),
(3, 'rohan', 'kumar', '2324234454', 'null', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '103.84.186.196', 'njjkjhfysdklsajsi jhngdruwdlksju', 'testing address', '2131-02-01', 'null', 'null', 'null', '2018-08-01 09:26:49', '2018-08-01 12:55:29', 6),
(4, 'Ajay ', 'Kumar', '8882029116', 'null', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '103.203.69.39', 'Mayur vihar', 'Above', '2018-08-15', 'null', 'null', 'null', '2018-08-04 11:49:07', '2018-08-04 11:50:51', 7),
(5, 'Ajay', 'Kumar', '8882029116', 'null', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '103.203.69.54', 'Mayur Vihar Phase -1', 'Mayur Vihar', '2018-08-15', 'null', 'null', 'null', '2018-08-06 06:31:52', '2018-08-15 07:25:57', 9),
(6, 'Ajay Kumar', 'null', '8882029116', 'null', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '103.203.69.96', 'null', 'null', NULL, 'null', 'null', 'null', '2018-08-06 10:07:56', '', 10),
(7, 'Ajay Kumar', 'null', '8882029116', 'null', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '103.203.69.96', 'null', 'null', NULL, 'null', 'null', 'null', '2018-08-06 10:23:12', '', 11),
(8, 'Ajay Kumar', 'null', '8882029116', 'null', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '103.203.69.96', 'null', 'null', NULL, 'null', 'null', 'null', '2018-08-06 10:35:45', '', 1),
(9, 'Ajay Kumar', 'null', '8882029116', 'null', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '103.203.69.96', 'null', 'null', NULL, 'null', 'null', 'null', '2018-08-06 10:49:32', '', 2),
(10, 'Ajay Kumar', 'null', '8882029116', 'null', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '103.203.69.96', 'null', 'null', NULL, 'null', 'null', 'null', '2018-08-06 11:06:53', '', 1),
(11, 'Ajay Kumar', 'null', '8882029116', 'null', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '103.203.69.96', 'null', 'null', NULL, 'null', 'null', 'null', '2018-08-06 11:09:49', '', 1),
(12, 'Ajay Kumar', 'null', '8882029116', 'null', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '103.203.69.96', 'null', 'null', NULL, 'null', 'null', 'null', '2018-08-06 11:11:43', '', 1),
(13, 'Ajay Kumar', 'null', '8882029116', 'null', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '103.203.69.96', 'null', 'null', NULL, 'null', 'null', 'null', '2018-08-06 11:15:10', '', 2),
(14, 'Ajay Kumar', 'null', '8882029116', 'null', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '103.203.69.96', 'null', 'null', NULL, 'null', 'null', 'null', '2018-08-06 11:24:06', '', 3),
(15, 'Ajay Kumar', 'null', '8882029116', 'null', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '103.203.69.96', 'null', 'null', NULL, 'null', 'null', 'null', '2018-08-06 11:31:51', '', 4),
(16, 'Ajay Kumar', 'null', '8882029116', 'null', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '103.203.69.96', 'null', 'null', NULL, 'null', 'null', 'null', '2018-08-06 11:36:52', '', 5),
(17, 'Ajay Kumar', 'null', '8882029116', 'null', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '103.203.69.96', 'null', 'null', NULL, 'null', 'null', 'null', '2018-08-06 11:42:02', '', 6),
(18, 'Ajay Kumar', 'null', '8882029116', 'null', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '103.203.69.96', 'null', 'null', NULL, 'null', 'null', 'null', '2018-08-06 11:44:23', '', 7),
(19, 'Bal Jee Verma', 'null', '8882029116', 'null', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '103.203.69.225', 'null', 'null', NULL, 'null', 'null', 'null', '2018-08-06 18:54:38', '', 1),
(20, 'mohan', 'null', '9627436587', 'null', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '103.84.186.167', 'null', 'null', NULL, 'null', 'null', 'null', '2018-08-07 06:21:57', '', 2),
(21, 'mohan singh', 'null', '9627465266', 'null', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '103.84.186.167', 'null', 'null', NULL, 'null', 'null', 'null', '2018-08-07 06:23:21', '', 3),
(22, 'Ajay Kumar', 'null', '8882029116', 'null', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '103.203.69.96', 'null', 'null', NULL, 'null', 'null', 'null', '2018-08-07 13:07:08', '', 4),
(23, 'Dr Renu Yadav', 'null', '9627436587', 'null', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '103.84.186.200', 'null', 'null', NULL, 'null', 'null', 'null', '2018-08-09 05:50:24', '', 5),
(24, 'Bal Jee Verma', 'null', '8882029116', 'null', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '103.203.69.54', 'null', 'null', NULL, 'null', 'null', 'null', '2018-08-15 07:02:20', '', 6),
(25, 'Rajesh', 'null', '8882029116', 'null', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '103.203.69.54', 'null', 'null', NULL, 'null', 'null', 'null', '2018-08-15 07:19:54', '', 7),
(26, 'flawlessindia', 'null', '8882029116', 'null', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '103.203.69.54', 'null', 'null', NULL, 'null', 'null', 'null', '2018-08-15 07:22:26', '', 8),
(27, 'Ajay', 'Kumar', '8882029116', 'null', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '103.203.69.54', 'Mayur Vihar Phase -1', 'Mayur Vihar', '2018-08-15', 'null', 'null', 'null', '2018-08-15 07:24:11', '2018-08-15 07:25:57', 9),
(28, 'flawlessindia', 'null', '8882029116', 'null', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '103.203.69.155', 'null', 'null', NULL, 'null', 'null', 'null', '2018-08-15 08:07:16', '', 10);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_userLogin`
--

CREATE TABLE `tbl_userLogin` (
  `reguser_id` int(11) NOT NULL,
  `reguser_email` varchar(255) DEFAULT NULL,
  `reguser_pass` varchar(255) DEFAULT NULL,
  `verify` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_userLogin`
--

INSERT INTO `tbl_userLogin` (`reguser_id`, `reguser_email`, `reguser_pass`, `verify`) VALUES
(5, 'shyam@flawlessindia.in', '5a4cd850fc787d454416aa3a47580468', 'no'),
(10, 'ajaykan47@gmail.com', '01a2f8028f6a33828338c5d6a6dda76f', 'yes'),
(11, 'baljee@gmail.com', '19805ceace034a22f56fb340c7eccab0', 'yes'),
(12, 'ajaykan47@gmail.com', '01a2f8028f6a33828338c5d6a6dda76f', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_video_gallery`
--

CREATE TABLE `tbl_video_gallery` (
  `video_glry_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `createdate` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_whychose`
--

CREATE TABLE `tbl_whychose` (
  `faq_id` int(11) NOT NULL,
  `faq_title` varchar(255) NOT NULL,
  `faq_content` varchar(255) NOT NULL,
  `paragraph_first` varchar(255) NOT NULL,
  `paragraph_second` varchar(255) NOT NULL,
  `paragraph_third` varchar(255) NOT NULL,
  `paragraph_fourth` varchar(255) NOT NULL,
  `cf1` varchar(255) NOT NULL,
  `cf2` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_accountdetail`
--
ALTER TABLE `tbl_accountdetail`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `tbl_blog_comment`
--
ALTER TABLE `tbl_blog_comment`
  ADD PRIMARY KEY (`bc_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `tbl_catgst`
--
ALTER TABLE `tbl_catgst`
  ADD PRIMARY KEY (`catgst_id`);

--
-- Indexes for table `tbl_clients`
--
ALTER TABLE `tbl_clients`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `tbl_comments`
--
ALTER TABLE `tbl_comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `tbl_copyright`
--
ALTER TABLE `tbl_copyright`
  ADD PRIMARY KEY (`cpy_id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `tbl_happyclient`
--
ALTER TABLE `tbl_happyclient`
  ADD PRIMARY KEY (`tml_id`);

--
-- Indexes for table `tbl_heading`
--
ALTER TABLE `tbl_heading`
  ADD PRIMARY KEY (`hd_id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_loginhistory`
--
ALTER TABLE `tbl_loginhistory`
  ADD PRIMARY KEY (`loginh_id`);

--
-- Indexes for table `tbl_logo`
--
ALTER TABLE `tbl_logo`
  ADD PRIMARY KEY (`logo_id`);

--
-- Indexes for table `tbl_newslater`
--
ALTER TABLE `tbl_newslater`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_page`
--
ALTER TABLE `tbl_page`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_profiledetail`
--
ALTER TABLE `tbl_profiledetail`
  ADD PRIMARY KEY (`profile_id`);

--
-- Indexes for table `tbl_progst`
--
ALTER TABLE `tbl_progst`
  ADD PRIMARY KEY (`progst_id`);

--
-- Indexes for table `tbl_quality`
--
ALTER TABLE `tbl_quality`
  ADD PRIMARY KEY (`quality_id`);

--
-- Indexes for table `tbl_review`
--
ALTER TABLE `tbl_review`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `tbl_seo`
--
ALTER TABLE `tbl_seo`
  ADD PRIMARY KEY (`seo_id`);

--
-- Indexes for table `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Indexes for table `tbl_socialicon`
--
ALTER TABLE `tbl_socialicon`
  ADD PRIMARY KEY (`socialicon_id`);

--
-- Indexes for table `tbl_subcategory`
--
ALTER TABLE `tbl_subcategory`
  ADD PRIMARY KEY (`subcat_id`);

--
-- Indexes for table `tbl_tax`
--
ALTER TABLE `tbl_tax`
  ADD PRIMARY KEY (`tax_id`);

--
-- Indexes for table `tbl_technical`
--
ALTER TABLE `tbl_technical`
  ADD PRIMARY KEY (`ts_id`);

--
-- Indexes for table `tbl_testimonial`
--
ALTER TABLE `tbl_testimonial`
  ADD PRIMARY KEY (`tml_id`);

--
-- Indexes for table `tbl_userdetail`
--
ALTER TABLE `tbl_userdetail`
  ADD PRIMARY KEY (`userd_id`);

--
-- Indexes for table `tbl_userLogin`
--
ALTER TABLE `tbl_userLogin`
  ADD PRIMARY KEY (`reguser_id`);

--
-- Indexes for table `tbl_video_gallery`
--
ALTER TABLE `tbl_video_gallery`
  ADD PRIMARY KEY (`video_glry_id`);

--
-- Indexes for table `tbl_whychose`
--
ALTER TABLE `tbl_whychose`
  ADD PRIMARY KEY (`faq_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_accountdetail`
--
ALTER TABLE `tbl_accountdetail`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_blog_comment`
--
ALTER TABLE `tbl_blog_comment`
  MODIFY `bc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `tbl_catgst`
--
ALTER TABLE `tbl_catgst`
  MODIFY `catgst_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_clients`
--
ALTER TABLE `tbl_clients`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_comments`
--
ALTER TABLE `tbl_comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_copyright`
--
ALTER TABLE `tbl_copyright`
  MODIFY `cpy_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_happyclient`
--
ALTER TABLE `tbl_happyclient`
  MODIFY `tml_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_heading`
--
ALTER TABLE `tbl_heading`
  MODIFY `hd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_loginhistory`
--
ALTER TABLE `tbl_loginhistory`
  MODIFY `loginh_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_logo`
--
ALTER TABLE `tbl_logo`
  MODIFY `logo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_newslater`
--
ALTER TABLE `tbl_newslater`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_page`
--
ALTER TABLE `tbl_page`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;
--
-- AUTO_INCREMENT for table `tbl_profiledetail`
--
ALTER TABLE `tbl_profiledetail`
  MODIFY `profile_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_progst`
--
ALTER TABLE `tbl_progst`
  MODIFY `progst_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_quality`
--
ALTER TABLE `tbl_quality`
  MODIFY `quality_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_review`
--
ALTER TABLE `tbl_review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tbl_seo`
--
ALTER TABLE `tbl_seo`
  MODIFY `seo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  MODIFY `shipping_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_socialicon`
--
ALTER TABLE `tbl_socialicon`
  MODIFY `socialicon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_subcategory`
--
ALTER TABLE `tbl_subcategory`
  MODIFY `subcat_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_tax`
--
ALTER TABLE `tbl_tax`
  MODIFY `tax_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_technical`
--
ALTER TABLE `tbl_technical`
  MODIFY `ts_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_testimonial`
--
ALTER TABLE `tbl_testimonial`
  MODIFY `tml_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_userdetail`
--
ALTER TABLE `tbl_userdetail`
  MODIFY `userd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `tbl_userLogin`
--
ALTER TABLE `tbl_userLogin`
  MODIFY `reguser_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_video_gallery`
--
ALTER TABLE `tbl_video_gallery`
  MODIFY `video_glry_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_whychose`
--
ALTER TABLE `tbl_whychose`
  MODIFY `faq_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
