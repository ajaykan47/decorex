-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2018 at 12:15 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
(14, 'LED Filament Lamp', 'LED Filament Lamp', 'Null', 'Null', 'Null', '2018-07-03 12:01:59', '', 'Active', 'led-filament-land'),
(15, 'LED Street Light', 'LED Street Light', 'Null', 'Null', 'Null', '2018-07-03 12:02:21', '', 'Active', 'led-street-light'),
(16, 'LED Solar Street Light', 'LED Solar Street Light', 'Null', 'Null', 'Null', '2018-07-03 12:02:41', '', 'Active', 'led-solar-street-light'),
(17, 'LED Flood Light', 'LED Flood Light', 'Null', 'Null', 'Null', '2018-07-03 12:03:09', '', 'Active', 'led-flood-light'),
(18, 'Highway/Mediumway Fitting', 'Highway/Mediumway Fitting', 'Null', 'Null', 'Null', '2018-07-03 12:03:31', '', 'Active', 'highway-mediumway-fitting'),
(19, 'LED Decorative Holder', 'LED Decorative Holder', 'Null', 'Null', 'Null', '2018-07-03 12:03:51', '', 'Active', 'led-decorative-holder'),
(20, 'Candle Lamp', 'Candle Lamp', 'Null', 'Null', 'Null', '2018-07-03 12:04:08', '', 'Active', 'candle-land'),
(21, 'Drivers', 'Drivers', 'Null', 'Null', 'Null', '2018-07-03 12:04:25', '', 'Active', 'drivers'),
(22, 'LED Strip Light', 'LED Strip Light', 'Null', 'Null', 'Null', '2018-07-03 12:04:51', '', 'Active', 'led-strip-light');

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
(1, '1', 'Our story', '<h6><em>Rapidiously productize clicks-and-mortar schemas via magnetic supply chains. Holisticly extend customer directed total linkage with standards compliant best practices. Dramatically monetize prospective paradigms and client-centered catalysts for change.</em></h6>\r\n\r\n<p>Rapidiously productize clicks-and-mortar schemas via magnetic supply chains. Holisticly extend customer directed total linkage with standards compliant best practices. Dramatically monetize prospective paradigms and client-centered catalysts for change.</p>\r\n\r\n<p>Uniquely grow out-of-the-box benefits after performance based data. Completely formulate pandemic relationships after impactful testing procedures. Dynamically incentivize interactive convergence with standards compliant best practices. Phosfluorescently reintermediate effective imperatives vis-a-vis standardized convergence. Appropriately synthesize diverse functionalities and highly efficient web-readiness.</p>\r\n', '2018-07-05 11:27:26', '2018-07-05 11:30:59', 'Active'),
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
(1, 'Ajay', '8882029116', 'ajay@flawlessindia.in', '25f9e794323b453885f5181f1b624d0b', '1', '2018-04-09', 1),
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
(1, 'SRI JSB LIGHTING COMPANY', '3 GOKUL PURA RAMTE RAM ROAD GHAZIABAD U.P. 201001 INDIA', '0120-270083', '+91 9457154581', 'srijsblighting@yahoo.in', '10.00 - 06.00 ', 'OFF', 'Null', 'Null', 'Null', 'logo', 'logo2.png', 'E:/xampp/htdocs/decorex/uploads/logo/logo2.png', '2018-07-05 06:58:00', '2018-07-09 11:51:55', 'Active');

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
(1, '1', 'OPEN YOUR EYES TO THE BRILLIANCE OF LED', '<h3>LIGHT UP FOR A GREENER TOMORROW</h3>\r\n', 'eye.png', 'E:/xampp/htdocs/decorex/uploads/page_img/eye.png', '', '', '', '2018-07-05 08:41:16', '2018-07-05 09:07:31', 'Active'),
(2, '2', 'Who we are', '<p>Phosfluorescently synthesize end-to-end infrastructures without performance based intellectual capital. Completely productivate 2.0 sources for magnetic vortals. Uniquely evisculate robust meta-services via dynamic methods of empowerment.</p>\r\n\r\n<p>Assertively network enterprise best practices vis-a-vis B2B intellectual capital. Continually innovate impactful services whereas ethical imperatives. Energistically integrate client-centric manufactured products for interactive meta-services.</p>\r\n', 'eye+logo1.jpg', 'E:/xampp/htdocs/decorex/uploads/page_img/eye+logo1.jpg', '', '', '', '2018-07-05 08:53:26', '', 'Active');

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
  `product_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `cat_id`, `p_name`, `page_title`, `new_arrival`, `new_price`, `old_price`, `availability`, `short_descr`, `full_descr`, `info_descr`, `filename`, `file_path`, `seo_title`, `meta_tag`, `meta_descr`, `meta_keyword_descr`, `created_at`, `updated_at`, `status`, `cf1`, `cf2`, `product_url`) VALUES
(1, '1', 'testt', '1', '2', '123.0', '233.0', '5', '<p>Globally expedite real-time best practices whereas collaborative catalysts for change. Efficiently extend enterprise imperatives</p>\r\n\r\n<p>Globally expedite real-time best practices whereas collaborative catalysts for change. Efficiently extend enterprise imperatives</p>\r\n', '<p>Compellingly formulate customized functionalities vis-a-vis orthogonal leadership skills. Holisticly reconceptualize go forward interfaces and tactical action items. Enthusiastically provide access to user friendly markets rather than equity invested technologies. Appropriately coordinate enterprise-wide imperatives for empowered solutions. Collaboratively monetize state of the art deliverables rather than transparent total linkage.</p>\r\n\r\n<p>.</p>\r\n', '<p>Globally expedite real-time best practices whereas collaborative catalysts for change. Efficiently extend enterprise imperatives</p>\r\n', 'product8.jpg', '', 'TITLE', '', 'META DESCRIPTION', 'META KEYWORDS', '2018-07-03 13:46:07', '2018-07-04 14:44:49', 'Active', '', '', 'testt'),
(2, '1', 'testing', '1', '2', '123.00', '233.0', '5', '<p style=\"text-align: justify;\">Compellingly formulate customized functionalities vis-a-vis orthogonal leadership skills. Holisticly reconceptualize go forward interfaces and tactical action items. Enthusiastically&nbsp;</p>\r\n', '<p>Compellingly formulate customized functionalities vis-a-vis orthogonal leadership skills. Holisticly reconceptualize go forward interfaces and tactical action items. Enthusiastically&nbsp;</p>\r\n', '<p>Compellingly formulate customized functionalities vis-a-vis orthogonal leadership skills. Holisticly reconceptualize go forward interfaces and tactical action items. Enthusiastically&nbsp;</p>\r\n', 'product2.jpg', '', 'TITLE', '', 'META DESCRIPTION', 'META KEYWORDS', '2018-07-04 06:51:22', '2018-07-04 14:44:57', 'Active', '', '', 'testing'),
(3, '1', 'PRODUCT NAME', '1', '2', '123.00', '233.0', '5', '<p>Compellingly formulate customized functionalities vis-a-vis orthogonal leadership skills. Holisticly reconceptualize go forward interfaces and tactical action items. Enthusiastically</p>\r\n', '<p>Compellingly formulate customized functionalities vis-a-vis orthogonal leadership skills. Holisticly reconceptualize go forward interfaces and tactical action items. Enthusiastically&nbsp;</p>\r\n', '<p>Compellingly formulate customized functionalities vis-a-vis orthogonal leadership skills. Holisticly reconceptualize go forward interfaces and tactical action items. Enthusiastically&nbsp;</p>\r\n', 'product3.jpg', '', 'TITLE', '', 'META DESCRIPTION', 'META KEYWORDS', '2018-07-04 06:53:18', '2018-07-04 14:43:14', 'Active', '', '', 'product-name'),
(4, '3', 'testtest', '1', '2', '123.00', '233.0', '5', '<p>Compellingly formulate customized functionalities vis-a-vis orthogonal leadership skills. Holisticly reconceptualize go forward interfaces and tactical action items. Enthusiastically&nbsp;</p>\r\n', '<p>Compellingly formulate customized functionalities vis-a-vis orthogonal leadership skills. Holisticly reconceptualize go forward interfaces and tactical action items. Enthusiastically&nbsp;</p>\r\n', '<p>Compellingly formulate customized functionalities vis-a-vis orthogonal leadership skills. Holisticly reconceptualize go forward interfaces and tactical action items. Enthusiastically&nbsp;</p>\r\n', 'product4.jpg', '', 'TITLE', '', 'META DESCRIPTION', 'META KEYWORDS', '2018-07-04 06:54:10', '2018-07-04 14:45:08', 'Active', '', '', 'testtest'),
(5, '1', 'product name 01', '1', '2', '123.00', '233.00', '5', '<p>Compellingly formulate customized functionalities vis-a-vis orthogonal leadership skills. Holisticly reconceptualize go forward interfaces and tactical action items. Enthusiastically&nbsp;</p>\r\n', '<p>Compellingly formulate customized functionalities vis-a-vis orthogonal leadership skills. Holisticly reconceptualize go forward interfaces and tactical action items. Enthusiastically&nbsp;</p>\r\n', '<p>Compellingly formulate customized functionalities vis-a-vis orthogonal leadership skills. Holisticly reconceptualize go forward interfaces and tactical action items. Enthusiastically&nbsp;</p>\r\n', 'product41.jpg', '', 'TITLE', '', '', '', '2018-07-04 09:36:00', '2018-07-04 14:45:26', 'Active', '', '', 'product-name-01'),
(6, '1', 'product name 02', '1', '', '123.00', '233.00', '5', '<p>Compellingly formulate customized functionalities vis-a-vis orthogonal leadership skills. Holisticly reconceptualize go forward interfaces and tactical action items. Enthusiastically&nbsp;</p>\r\n', '<p>Compellingly formulate customized functionalities vis-a-vis orthogonal leadership skills. Holisticly reconceptualize go forward interfaces and tactical action items. Enthusiastically&nbsp;</p>\r\n', '<p>Compellingly formulate customized functionalities vis-a-vis orthogonal leadership skills. Holisticly reconceptualize go forward interfaces and tactical action items. Enthusiastically&nbsp;</p>\r\n', 'product5.jpg', '', '', '', '', '', '2018-07-04 09:36:34', '2018-07-04 12:35:00', 'Active', '', '', 'product-name-02'),
(7, '1', 'product name 03', '1', '', '123.0', '233.00', '5', '<p>lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm</p>\r\n\r\n<p>lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm</p>\r\n', '<p>lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm</p>\r\n\r\n<p>lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm</p>\r\n', '<p>lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm</p>\r\n\r\n<p>lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm</p>\r\n', 'product6.jpg', 'E:/xampp/htdocs/decorex/uploads/product/product6.jpg', '', '', '', '', '2018-07-04 09:37:13', '', 'Active', '', '', 'product-name-03'),
(8, '1', 'product name 04', '', '', '123.00', '233.00', '5', '<p>lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm</p>\r\n\r\n<p>lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm</p>\r\n', '<p>lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm</p>\r\n\r\n<p>lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm</p>\r\n', '<p>lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm</p>\r\n\r\n<p>lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm</p>\r\n', 'product7.jpg', 'E:/xampp/htdocs/decorex/uploads/product/product7.jpg', '', '', '', '', '2018-07-04 09:37:46', '', 'Active', '', '', 'product-name-04'),
(9, '1', 'product name 05', '1', '2', '123.00', '233.00', '5', '<p>lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm</p>\r\n\r\n<p>lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm</p>\r\n', '<p>lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm</p>\r\n\r\n<p>lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm</p>\r\n', '<p>lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm</p>\r\n\r\n<p>lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm</p>\r\n', 'product81.jpg', '', '', '', '', '', '2018-07-04 09:38:25', '2018-07-04 14:45:36', 'Active', '', '', 'product-name-05'),
(10, '1', 'product name 06', '', '', '123.00', '233.00', '5', '<p>lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm</p>\r\n\r\n<p>lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm</p>\r\n', '<p>lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm</p>\r\n\r\n<p>lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm</p>\r\n', '', 'product31.jpg', 'E:/xampp/htdocs/decorex/uploads/product/product31.jpg', '', '', '', '', '2018-07-04 09:39:42', '', 'Active', '', '', 'product-name-06'),
(11, '1', 'product name 07', '', '', '123.00', '233.00', '5', '<p>lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm</p>\r\n\r\n<p>lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm</p>\r\n', '<p>lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm</p>\r\n\r\n<p>lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm</p>\r\n', '', 'product51.jpg', 'E:/xampp/htdocs/decorex/uploads/product/product51.jpg', '', '', '', '', '2018-07-04 09:40:15', '', 'Active', '', '', 'product-name-07'),
(12, '1', 'product name 08', '', '', '123.0', '233.00', '5', '<p>lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm</p>\r\n\r\n<p>lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm</p>\r\n', '<p>lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm</p>\r\n\r\n<p>lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm</p>\r\n', '', 'product82.jpg', 'E:/xampp/htdocs/decorex/uploads/product/product82.jpg', '', '', '', '', '2018-07-04 09:40:50', '', 'Active', '', '', 'product-name-08'),
(13, '1', 'product name 10', '', '', '123.00', '233.00', '5', '<p>lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm</p>\r\n\r\n<p>lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm</p>\r\n', '<p>lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm</p>\r\n\r\n<p>lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm</p>\r\n', '', 'product42.jpg', 'E:/xampp/htdocs/decorex/uploads/product/product42.jpg', '', '', '', '', '2018-07-04 09:41:36', '', 'Active', '', '', 'product-name-10'),
(14, '1', 'product name 11', '', '', '123.0', '233.00', '5', '<p>lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm</p>\r\n\r\n<p>lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm</p>\r\n', '<p>lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm</p>\r\n\r\n<p>lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm&nbsp;lorem lipsm</p>\r\n', '', 'product43.jpg', 'E:/xampp/htdocs/decorex/uploads/product/product43.jpg', '', '', '', '', '2018-07-04 09:42:08', '', 'Active', '', '', 'product-name-11'),
(15, '3', 'product name 14', '', '2', '123.00', '233.00', '5', '<p>Compellingly formulate customized functionalities vis-a-vis orthogonal leadership skills. Holisticly reconceptualize go forward interfaces and tactical action items. Enthusiastically&nbsp;</p>\r\n', '<p>Compellingly formulate customized functionalities vis-a-vis orthogonal leadership skills. Holisticly reconceptualize go forward interfaces and tactical action items. Enthusiastically&nbsp;</p>\r\n', '<p>Compellingly formulate customized functionalities vis-a-vis orthogonal leadership skills. Holisticly reconceptualize go forward interfaces and tactical action items. Enthusiastically&nbsp;</p>\r\n', 'product32.jpg', 'E:/xampp/htdocs/decorex/uploads/product/product32.jpg', '', '', '', '', '2018-07-04 14:46:38', '', 'Active', '', '', 'product-name-14');

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
(1, '3', 'testing', '4', 'ab@gmail.com', 'cart-pdt-thumb33.jpg', 'Your email address will not be published. Required fields are marked *', '10-07-18 09:33:21', '', 'active'),
(2, '3', 'testing', '2', 'ab@gmail.com567', '1531208202-cmnt-athr.jpg', 'Your email address will not be published. Required fields are marked *', '10-07-18 09:36:42', '', 'active'),
(3, '3', 'testing', '3', 'ab@gmail.com', '', 'Your email address will not be published. Required fields are marked *', '10-07-18 09:37:04', '', 'active'),
(4, '2', 'Dr Renu Yadav', '4', 'ab@gmail.com', '1531209337-cart-pdt-thumb1.jpg', 'Your email address will not be published. Required fields are marked *', '10-07-18 09:55:37', '', 'active'),
(5, '2', 'testing', '3', 'ab@gmail.com', '', 'Your email address will not be published. Required fields are marked *', '10-07-18 09:56:05', '', 'active');

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
(1, 'youtube', '', '2018-07-05 07:36:43', '', 'Active'),
(2, 'facebook', '', '2018-07-05 07:36:56', '', 'Active'),
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
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `e_mail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `conf_pass` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_userdetail`
--

INSERT INTO `tbl_userdetail` (`user_id`, `name`, `mobile`, `e_mail`, `password`, `conf_pass`, `created_at`, `updated_at`, `status`) VALUES
(1, 'shyam singh', '9627465255', 'ab@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e', '2018-07-07 08:00:46', '', 'inactive');

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
  ADD PRIMARY KEY (`user_id`);

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
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

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
-- AUTO_INCREMENT for table `tbl_page`
--
ALTER TABLE `tbl_page`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_profiledetail`
--
ALTER TABLE `tbl_profiledetail`
  MODIFY `profile_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_quality`
--
ALTER TABLE `tbl_quality`
  MODIFY `quality_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_review`
--
ALTER TABLE `tbl_review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_seo`
--
ALTER TABLE `tbl_seo`
  MODIFY `seo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
