-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2024 at 06:57 AM
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
-- Database: `febulait`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_en` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_bn` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_bn` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_bn` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_name_en` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_name_bn` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=>Active, 0=>Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `name_en`, `name_bn`, `slug`, `title_en`, `title_bn`, `about_image`, `description_en`, `description_bn`, `button_name_en`, `button_name_bn`, `status`, `created_at`, `updated_at`) VALUES
(1, 'About Us', 'WHAT WE DO?', 'the-best-digital-marketing', 'The Best Digital Marketing', 'The service we offer is specifically designed to meet your needs.', 'upload/about/1809260984430327.png', '<span style=\"color: rgb(119, 119, 119); font-family: Roboto, sans-serif; font-size: 15px;\">Suspendisse dignissim tellus quis lacus consectetur placerat. Nullam aliquet mauris et volutpat pretium aliquam sem turpis.</span>', 'Company that believes in the power of creative strategy.', 'Find Solution', 'Find Solution', 1, '2022-11-11 07:06:43', '2024-09-04 04:28:52');

-- --------------------------------------------------------

--
-- Table structure for table `about_facilities`
--

CREATE TABLE `about_facilities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `about_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_facilities`
--

INSERT INTO `about_facilities` (`id`, `about_id`, `name`, `created_at`, `updated_at`) VALUES
(4, 4, 'one', '2024-09-04 04:09:12', '2024-09-04 04:09:12'),
(5, 4, 'two', '2024-09-04 04:09:12', '2024-09-04 04:09:12'),
(14, 1, 'Nunc faucibus lectus ut felis auctor, nec sagittis leo tempus. Phasellus augue urna, blandit eu elementum ut, sodales sed est.', '2024-09-04 04:28:52', '2024-09-04 04:28:52'),
(15, 1, 'Sed fringilla hendrerit mi non porta. Cras pulvinar a turpis varius. Suspendis varius non lacus quis fringilla.', '2024-09-04 04:28:52', '2024-09-04 04:28:52'),
(16, 1, 'Curabitur dui nulla, tincidunt varius mattis ut, porta at justo. Integer vel erat in augue hendrerit pulvinar.', '2024-09-04 04:28:52', '2024-09-04 04:28:52'),
(17, 1, NULL, '2024-09-04 04:28:52', '2024-09-04 04:28:52'),
(18, 1, NULL, '2024-09-04 04:28:52', '2024-09-04 04:28:52');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_en` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_bn` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_bn` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_name_en` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_name_bn` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_description_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_description_bn` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_date` date DEFAULT NULL,
  `button_name_en` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_name_bn` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=>Active, 0=>Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `menu_id`, `name_en`, `name_bn`, `title_en`, `title_bn`, `slug`, `blog_name_en`, `blog_name_bn`, `blog_description_en`, `blog_description_bn`, `blog_date`, `button_name_en`, `button_name_bn`, `blog_image`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', 'SEO', 'SEO', 'By Ashraful', 'By Ashraful', 'by-ashraful', '6 Ways to Find If Your Sites Been Hacked', '6 Ways to Find If Your Sites Been Hacked', '<p style=\"margin-bottom: 15px; line-height: 1.8; color: var(--paragraph-color); font-family: &quot;Open Sans&quot;, sans-serif;\">Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore dolore magna aliquyam erat sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Steter clita kasd gubergren no sea takimata sanctus est Lorem ipsum dolor sit amet.</p><p style=\"margin-bottom: 15px; line-height: 1.8; color: var(--paragraph-color); font-family: &quot;Open Sans&quot;, sans-serif;\">Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore dolore magna aliquyam erat sed diam voluptua.</p><ul class=\"list\" style=\"padding: 0px; margin-top: 30px; margin-bottom: 0px; font-family: &quot;Open Sans&quot;, sans-serif;\"><li style=\"list-style-type: none; margin-bottom: 20px; color: var(--paragraph-color); position: relative; padding-left: 0px;\"><h4 style=\"margin-bottom: 0px; font-weight: bold; font-size: 22px; font-family: var(--heading-font-family);\">What You Will Get Under This Service</h4></li><li style=\"list-style-type: none; margin-bottom: 20px; color: var(--paragraph-color); position: relative; padding-left: 25px;\"><span class=\"ri-checkbox-circle-line\" style=\"line-height: normal; -webkit-font-smoothing: antialiased; position: absolute; left: 0px; top: 2.8px; font-size: 18px; color: rgb(166, 107, 255); font-family: remixicon !important;\"></span>Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut</li><li style=\"list-style-type: none; margin-bottom: 20px; color: var(--paragraph-color); position: relative; padding-left: 25px;\"><span class=\"ri-checkbox-circle-line\" style=\"line-height: normal; -webkit-font-smoothing: antialiased; position: absolute; left: 0px; top: 2.8px; font-size: 18px; color: rgb(166, 107, 255); font-family: remixicon !important;\"></span>Dolor sit amet consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt.</li><li style=\"list-style-type: none; margin-bottom: 20px; color: var(--paragraph-color); position: relative; padding-left: 25px;\"><span class=\"ri-checkbox-circle-line\" style=\"line-height: normal; -webkit-font-smoothing: antialiased; position: absolute; left: 0px; top: 2.8px; font-size: 18px; color: rgb(166, 107, 255); font-family: remixicon !important;\"></span>Consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt.</li><li style=\"list-style-type: none; margin-bottom: 20px; color: var(--paragraph-color); position: relative; padding-left: 25px;\"><span class=\"ri-checkbox-circle-line\" style=\"line-height: normal; -webkit-font-smoothing: antialiased; position: absolute; left: 0px; top: 2.8px; font-size: 18px; color: rgb(166, 107, 255); font-family: remixicon !important;\"></span>Sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore dolore magna aliquyam erat.</li><li style=\"list-style-type: none; margin-bottom: 0px; color: var(--paragraph-color); position: relative; padding-left: 25px;\"><span class=\"ri-checkbox-circle-line\" style=\"line-height: normal; -webkit-font-smoothing: antialiased; position: absolute; left: 0px; top: 2.8px; font-size: 18px; color: rgb(166, 107, 255); font-family: remixicon !important;\"></span>Sed diam nonumy eirmod tempor invidunt ut labore dolore magna aliquyam erat.</li></ul><div class=\"row justify-content-center\" style=\"--bs-gutter-x:1.5rem; --bs-gutter-y:0; margin-top: calc(-1 * var(--bs-gutter-y)); margin-right: calc(-0.5 * var(--bs-gutter-x)); margin-left: calc(-0.5 * var(--bs-gutter-x)); font-family: &quot;Open Sans&quot;, sans-serif;\"><div class=\"col-lg-6 col-sm-6\" style=\"flex-basis: auto; width: 380px; max-width: 100%; padding-right: calc(var(--bs-gutter-x) * 0.5); padding-left: calc(var(--bs-gutter-x) * 0.5); margin-top: var(--bs-gutter-y);\"><span style=\"color: var(--paragraph-color); font-size: 1rem;\"><br></span></div><div class=\"col-lg-6 col-sm-6\" style=\"flex-basis: auto; width: 380px; max-width: 100%; padding-right: calc(var(--bs-gutter-x) * 0.5); padding-left: calc(var(--bs-gutter-x) * 0.5); margin-top: var(--bs-gutter-y);\"><span style=\"color: var(--paragraph-color); font-size: 1rem;\">rem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore dolore magna aliquyam erat sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Steter clita kasd gubergren no sea takimata sanctus est Lorem ipsum dolor sit amet.</span><div class=\"block-item\" style=\"position: relative; overflow: hidden; border-radius: 15px; margin-top: 30px; margin-bottom: 30px;\"></div></div><div class=\"col-lg-6 col-sm-6\" style=\"flex-basis: auto; width: 380px; max-width: 100%; padding-right: calc(var(--bs-gutter-x) * 0.5); padding-left: calc(var(--bs-gutter-x) * 0.5); margin-top: var(--bs-gutter-y);\"><div class=\"block-item\" style=\"position: relative; overflow: hidden; border-radius: 15px; margin-top: 30px; margin-bottom: 30px;\"></div></div></div><p style=\"margin-bottom: 15px; line-height: 1.8; color: var(--paragraph-color); font-family: &quot;Open Sans&quot;, sans-serif;\">Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore dolore magna aliquyam erat sed diam voluptua.</p><div class=\"article-quote\" style=\"background-color: rgb(245, 245, 245); padding: 30px 30px 30px 90px; border-radius: 15px; position: relative; z-index: 1; margin-top: 30px; margin-bottom: 30px; font-family: &quot;Open Sans&quot;, sans-serif;\"><span class=\"ri-double-quotes-l\" style=\"line-height: normal; -webkit-font-smoothing: antialiased; color: rgb(207, 195, 226); font-size: 65px; position: absolute; left: 45px; top: 10px; z-index: -1; animation: 2s linear 0s infinite normal none running moveleftbounce; font-family: remixicon !important;\"></span><p style=\"margin-bottom: 0px; line-height: 1.8; color: var(--black-color); font-family: var(--heading-font-family); font-size: 22px;\">Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat sed diam.</p><div class=\"quote-shape\" style=\"position: absolute; right: -45px; bottom: -45px; max-width: 100px;\"><img src=\"file:///G:/Admin%20Teamplate/It%20Solutions/coze/default/assets/images/blog-details/circle-shape.png\" alt=\"image\" style=\"max-width: 100%; height: auto; display: inline-block; animation-name: rotateme; animation-duration: 5s; animation-iteration-count: infinite; animation-timing-function: linear;\"></div></div><p style=\"margin-bottom: 15px; line-height: 1.8; color: var(--paragraph-color); font-family: &quot;Open Sans&quot;, sans-serif;\">Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore dolore magna aliquyam erat sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Steter clita kasd gubergren no sea takimata sanctus est Lorem ipsum dolor sit amet.</p><p style=\"margin-bottom: 0px; line-height: 1.8; color: var(--paragraph-color); font-family: &quot;Open Sans&quot;, sans-serif;\">Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore dolore magna aliquyam erat sed diam voluptua.</p>', '<p style=\"margin-bottom: 15px; line-height: 1.8; color: var(--paragraph-color); font-family: &quot;Open Sans&quot;, sans-serif;\">Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore dolore magna aliquyam erat sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Steter clita kasd gubergren no sea takimata sanctus est Lorem ipsum dolor sit amet.</p><p style=\"margin-bottom: 15px; line-height: 1.8; color: var(--paragraph-color); font-family: &quot;Open Sans&quot;, sans-serif;\">Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore dolore magna aliquyam erat sed diam voluptua.</p><ul class=\"list\" style=\"padding: 0px; margin-top: 30px; margin-bottom: 0px; font-family: &quot;Open Sans&quot;, sans-serif;\"><li style=\"list-style-type: none; margin-bottom: 20px; color: var(--paragraph-color); position: relative; padding-left: 0px;\"><h4 style=\"margin-bottom: 0px; font-weight: bold; font-size: 22px; font-family: var(--heading-font-family);\">What You Will Get Under This Service</h4></li><li style=\"list-style-type: none; margin-bottom: 20px; color: var(--paragraph-color); position: relative; padding-left: 25px;\"><span class=\"ri-checkbox-circle-line\" style=\"line-height: normal; -webkit-font-smoothing: antialiased; position: absolute; left: 0px; top: 2.8px; font-size: 18px; color: rgb(166, 107, 255); font-family: remixicon !important;\"></span>Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut</li><li style=\"list-style-type: none; margin-bottom: 20px; color: var(--paragraph-color); position: relative; padding-left: 25px;\"><span class=\"ri-checkbox-circle-line\" style=\"line-height: normal; -webkit-font-smoothing: antialiased; position: absolute; left: 0px; top: 2.8px; font-size: 18px; color: rgb(166, 107, 255); font-family: remixicon !important;\"></span>Dolor sit amet consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt.</li><li style=\"list-style-type: none; margin-bottom: 20px; color: var(--paragraph-color); position: relative; padding-left: 25px;\"><span class=\"ri-checkbox-circle-line\" style=\"line-height: normal; -webkit-font-smoothing: antialiased; position: absolute; left: 0px; top: 2.8px; font-size: 18px; color: rgb(166, 107, 255); font-family: remixicon !important;\"></span>Consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt.</li><li style=\"list-style-type: none; margin-bottom: 20px; color: var(--paragraph-color); position: relative; padding-left: 25px;\"><span class=\"ri-checkbox-circle-line\" style=\"line-height: normal; -webkit-font-smoothing: antialiased; position: absolute; left: 0px; top: 2.8px; font-size: 18px; color: rgb(166, 107, 255); font-family: remixicon !important;\"></span>Sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore dolore magna aliquyam erat.</li><li style=\"list-style-type: none; margin-bottom: 0px; color: var(--paragraph-color); position: relative; padding-left: 25px;\"><span class=\"ri-checkbox-circle-line\" style=\"line-height: normal; -webkit-font-smoothing: antialiased; position: absolute; left: 0px; top: 2.8px; font-size: 18px; color: rgb(166, 107, 255); font-family: remixicon !important;\"></span>Sed diam nonumy eirmod tempor invidunt ut labore dolore magna aliquyam erat.</li></ul><div class=\"row justify-content-center\" style=\"--bs-gutter-x:1.5rem; --bs-gutter-y:0; margin-top: calc(-1 * var(--bs-gutter-y)); margin-right: calc(-0.5 * var(--bs-gutter-x)); margin-left: calc(-0.5 * var(--bs-gutter-x)); font-family: &quot;Open Sans&quot;, sans-serif;\"><div class=\"col-lg-6 col-sm-6\" style=\"flex-basis: auto; width: 380px; max-width: 100%; padding-right: calc(var(--bs-gutter-x) * 0.5); padding-left: calc(var(--bs-gutter-x) * 0.5); margin-top: var(--bs-gutter-y);\"><span style=\"color: var(--paragraph-color); font-size: 1rem;\"><br></span></div><div class=\"col-lg-6 col-sm-6\" style=\"flex-basis: auto; width: 380px; max-width: 100%; padding-right: calc(var(--bs-gutter-x) * 0.5); padding-left: calc(var(--bs-gutter-x) * 0.5); margin-top: var(--bs-gutter-y);\"><span style=\"color: var(--paragraph-color); font-size: 1rem;\">rem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore dolore magna aliquyam erat sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Steter clita kasd gubergren no sea takimata sanctus est Lorem ipsum dolor sit amet.</span><div class=\"block-item\" style=\"position: relative; overflow: hidden; border-radius: 15px; margin-top: 30px; margin-bottom: 30px;\"></div></div><div class=\"col-lg-6 col-sm-6\" style=\"flex-basis: auto; width: 380px; max-width: 100%; padding-right: calc(var(--bs-gutter-x) * 0.5); padding-left: calc(var(--bs-gutter-x) * 0.5); margin-top: var(--bs-gutter-y);\"><div class=\"block-item\" style=\"position: relative; overflow: hidden; border-radius: 15px; margin-top: 30px; margin-bottom: 30px;\"></div></div></div><p style=\"margin-bottom: 15px; line-height: 1.8; color: var(--paragraph-color); font-family: &quot;Open Sans&quot;, sans-serif;\">Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore dolore magna aliquyam erat sed diam voluptua.</p><div class=\"article-quote\" style=\"background-color: rgb(245, 245, 245); padding: 30px 30px 30px 90px; border-radius: 15px; position: relative; z-index: 1; margin-top: 30px; margin-bottom: 30px; font-family: &quot;Open Sans&quot;, sans-serif;\"><span class=\"ri-double-quotes-l\" style=\"line-height: normal; -webkit-font-smoothing: antialiased; color: rgb(207, 195, 226); font-size: 65px; position: absolute; left: 45px; top: 10px; z-index: -1; animation: 2s linear 0s infinite normal none running moveleftbounce; font-family: remixicon !important;\"></span><p style=\"margin-bottom: 0px; line-height: 1.8; color: var(--black-color); font-family: var(--heading-font-family); font-size: 22px;\">Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat sed diam.</p><div class=\"quote-shape\" style=\"position: absolute; right: -45px; bottom: -45px; max-width: 100px;\"><img src=\"file:///G:/Admin%20Teamplate/It%20Solutions/coze/default/assets/images/blog-details/circle-shape.png\" alt=\"image\" style=\"max-width: 100%; height: auto; display: inline-block; animation-name: rotateme; animation-duration: 5s; animation-iteration-count: infinite; animation-timing-function: linear;\"></div></div><p style=\"margin-bottom: 15px; line-height: 1.8; color: var(--paragraph-color); font-family: &quot;Open Sans&quot;, sans-serif;\">Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore dolore magna aliquyam erat sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Steter clita kasd gubergren no sea takimata sanctus est Lorem ipsum dolor sit amet.</p><p style=\"margin-bottom: 0px; line-height: 1.8; color: var(--paragraph-color); font-family: &quot;Open Sans&quot;, sans-serif;\">Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore dolore magna aliquyam erat sed diam voluptua.</p>', '2022-10-22', 'View More', 'View More', 'upload/blog/1808616262676459.jpg', 1, '2024-08-28 01:41:18', '2024-08-28 01:41:18'),
(2, '1', 'MARKETING', 'MARKETING', 'By abdul haque sayer', 'By Sayer', 'by-abdul-haque-sayer', '6 Ways to Find If Your Sites Been Hacked', '6 Ways to Find If Your Sites Been Hacked', '<p style=\"margin-bottom: 15px; line-height: 1.8; color: var(--paragraph-color); font-family: &quot;Open Sans&quot;, sans-serif;\">Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore dolore magna aliquyam erat sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Steter clita kasd gubergren no sea takimata sanctus est Lorem ipsum dolor sit amet.</p><p style=\"margin-bottom: 15px; line-height: 1.8; color: var(--paragraph-color); font-family: &quot;Open Sans&quot;, sans-serif;\">Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore dolore magna aliquyam erat sed diam voluptua.</p><ul class=\"list\" style=\"padding: 0px; margin-top: 30px; margin-bottom: 0px; font-family: &quot;Open Sans&quot;, sans-serif;\"><li style=\"list-style-type: none; margin-bottom: 20px; color: var(--paragraph-color); position: relative; padding-left: 0px;\"><h4 style=\"margin-bottom: 0px; font-weight: bold; font-size: 22px; font-family: var(--heading-font-family);\">What You Will Get Under This Service</h4></li><li style=\"list-style-type: none; margin-bottom: 20px; color: var(--paragraph-color); position: relative; padding-left: 25px;\"><span class=\"ri-checkbox-circle-line\" style=\"line-height: normal; -webkit-font-smoothing: antialiased; position: absolute; left: 0px; top: 2.8px; font-size: 18px; color: rgb(166, 107, 255); font-family: remixicon !important;\"></span>Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut</li><li style=\"list-style-type: none; margin-bottom: 20px; color: var(--paragraph-color); position: relative; padding-left: 25px;\"><span class=\"ri-checkbox-circle-line\" style=\"line-height: normal; -webkit-font-smoothing: antialiased; position: absolute; left: 0px; top: 2.8px; font-size: 18px; color: rgb(166, 107, 255); font-family: remixicon !important;\"></span>Dolor sit amet consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt.</li><li style=\"list-style-type: none; margin-bottom: 20px; color: var(--paragraph-color); position: relative; padding-left: 25px;\"><span class=\"ri-checkbox-circle-line\" style=\"line-height: normal; -webkit-font-smoothing: antialiased; position: absolute; left: 0px; top: 2.8px; font-size: 18px; color: rgb(166, 107, 255); font-family: remixicon !important;\"></span>Consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt.</li><li style=\"list-style-type: none; margin-bottom: 20px; color: var(--paragraph-color); position: relative; padding-left: 25px;\"><span class=\"ri-checkbox-circle-line\" style=\"line-height: normal; -webkit-font-smoothing: antialiased; position: absolute; left: 0px; top: 2.8px; font-size: 18px; color: rgb(166, 107, 255); font-family: remixicon !important;\"></span>Sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore dolore magna aliquyam erat.</li><li style=\"list-style-type: none; margin-bottom: 0px; color: var(--paragraph-color); position: relative; padding-left: 25px;\"><span class=\"ri-checkbox-circle-line\" style=\"line-height: normal; -webkit-font-smoothing: antialiased; position: absolute; left: 0px; top: 2.8px; font-size: 18px; color: rgb(166, 107, 255); font-family: remixicon !important;\"></span>Sed diam nonumy eirmod tempor invidunt ut labore dolore magna aliquyam erat.</li></ul>', 'sdfsa', '2022-11-12', 'View More', 'View More', 'upload/blog/1808616250196447.jpg', 1, '2024-08-31 07:37:29', '2024-08-31 07:37:29'),
(3, '1', 'ADVERTISING', 'ADVERTISING', 'By Developers', 'By Ashraful', 'by-developers', '6 Ways to Find If Your Sites Been Hacked', '6 Ways to Find If Your Sites Been Hacked', '<p style=\"margin-bottom: 15px; line-height: 1.8; color: var(--paragraph-color); font-family: &quot;Open Sans&quot;, sans-serif;\">Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore dolore magna aliquyam erat sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Steter clita kasd gubergren no sea takimata sanctus est Lorem ipsum dolor sit amet.</p><p style=\"margin-bottom: 15px; line-height: 1.8; color: var(--paragraph-color); font-family: &quot;Open Sans&quot;, sans-serif;\">Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore dolore magna aliquyam erat sed diam voluptua.</p><ul class=\"list\" style=\"padding: 0px; margin-top: 30px; margin-bottom: 0px; font-family: &quot;Open Sans&quot;, sans-serif;\"><li style=\"list-style-type: none; margin-bottom: 20px; color: var(--paragraph-color); position: relative; padding-left: 0px;\"><h4 style=\"margin-bottom: 0px; font-weight: bold; font-size: 22px; font-family: var(--heading-font-family);\">What You Will Get Under This Service</h4></li><li style=\"list-style-type: none; margin-bottom: 20px; color: var(--paragraph-color); position: relative; padding-left: 25px;\"><span class=\"ri-checkbox-circle-line\" style=\"line-height: normal; -webkit-font-smoothing: antialiased; position: absolute; left: 0px; top: 2.8px; font-size: 18px; color: rgb(166, 107, 255); font-family: remixicon !important;\"></span>Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut</li><li style=\"list-style-type: none; margin-bottom: 20px; color: var(--paragraph-color); position: relative; padding-left: 25px;\"><span class=\"ri-checkbox-circle-line\" style=\"line-height: normal; -webkit-font-smoothing: antialiased; position: absolute; left: 0px; top: 2.8px; font-size: 18px; color: rgb(166, 107, 255); font-family: remixicon !important;\"></span>Dolor sit amet consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt.</li><li style=\"list-style-type: none; margin-bottom: 20px; color: var(--paragraph-color); position: relative; padding-left: 25px;\"><span class=\"ri-checkbox-circle-line\" style=\"line-height: normal; -webkit-font-smoothing: antialiased; position: absolute; left: 0px; top: 2.8px; font-size: 18px; color: rgb(166, 107, 255); font-family: remixicon !important;\"></span>Consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt.</li><li style=\"list-style-type: none; margin-bottom: 20px; color: var(--paragraph-color); position: relative; padding-left: 25px;\"><span class=\"ri-checkbox-circle-line\" style=\"line-height: normal; -webkit-font-smoothing: antialiased; position: absolute; left: 0px; top: 2.8px; font-size: 18px; color: rgb(166, 107, 255); font-family: remixicon !important;\"></span>Sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore dolore magna aliquyam erat.</li><li style=\"list-style-type: none; margin-bottom: 0px; color: var(--paragraph-color); position: relative; padding-left: 25px;\"><span class=\"ri-checkbox-circle-line\" style=\"line-height: normal; -webkit-font-smoothing: antialiased; position: absolute; left: 0px; top: 2.8px; font-size: 18px; color: rgb(166, 107, 255); font-family: remixicon !important;\"></span>Sed diam nonumy eirmod tempor invidunt ut labore dolore magna aliquyam erat.</li></ul>', '<p style=\"margin-bottom: 15px; line-height: 1.8; color: var(--paragraph-color); font-family: &quot;Open Sans&quot;, sans-serif;\">Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore dolore magna aliquyam erat sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Steter clita kasd gubergren no sea takimata sanctus est Lorem ipsum dolor sit amet.</p><p style=\"margin-bottom: 15px; line-height: 1.8; color: var(--paragraph-color); font-family: &quot;Open Sans&quot;, sans-serif;\">Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore dolore magna aliquyam erat sed diam voluptua.</p><ul class=\"list\" style=\"padding: 0px; margin-top: 30px; margin-bottom: 0px; font-family: &quot;Open Sans&quot;, sans-serif;\"><li style=\"list-style-type: none; margin-bottom: 20px; color: var(--paragraph-color); position: relative; padding-left: 0px;\"><h4 style=\"margin-bottom: 0px; font-weight: bold; font-size: 22px; font-family: var(--heading-font-family);\">What You Will Get Under This Service</h4></li><li style=\"list-style-type: none; margin-bottom: 20px; color: var(--paragraph-color); position: relative; padding-left: 25px;\"><span class=\"ri-checkbox-circle-line\" style=\"line-height: normal; -webkit-font-smoothing: antialiased; position: absolute; left: 0px; top: 2.8px; font-size: 18px; color: rgb(166, 107, 255); font-family: remixicon !important;\"></span>Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut</li><li style=\"list-style-type: none; margin-bottom: 20px; color: var(--paragraph-color); position: relative; padding-left: 25px;\"><span class=\"ri-checkbox-circle-line\" style=\"line-height: normal; -webkit-font-smoothing: antialiased; position: absolute; left: 0px; top: 2.8px; font-size: 18px; color: rgb(166, 107, 255); font-family: remixicon !important;\"></span>Dolor sit amet consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt.</li><li style=\"list-style-type: none; margin-bottom: 20px; color: var(--paragraph-color); position: relative; padding-left: 25px;\"><span class=\"ri-checkbox-circle-line\" style=\"line-height: normal; -webkit-font-smoothing: antialiased; position: absolute; left: 0px; top: 2.8px; font-size: 18px; color: rgb(166, 107, 255); font-family: remixicon !important;\"></span>Consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt.</li><li style=\"list-style-type: none; margin-bottom: 20px; color: var(--paragraph-color); position: relative; padding-left: 25px;\"><span class=\"ri-checkbox-circle-line\" style=\"line-height: normal; -webkit-font-smoothing: antialiased; position: absolute; left: 0px; top: 2.8px; font-size: 18px; color: rgb(166, 107, 255); font-family: remixicon !important;\"></span>Sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore dolore magna aliquyam erat.</li><li style=\"list-style-type: none; margin-bottom: 0px; color: var(--paragraph-color); position: relative; padding-left: 25px;\"><span class=\"ri-checkbox-circle-line\" style=\"line-height: normal; -webkit-font-smoothing: antialiased; position: absolute; left: 0px; top: 2.8px; font-size: 18px; color: rgb(166, 107, 255); font-family: remixicon !important;\"></span>Sed diam nonumy eirmod tempor invidunt ut labore dolore magna aliquyam erat.</li></ul>', '2022-11-16', 'View More', 'View More', 'upload/blog/1808616238115979.jpg', 1, '2024-08-28 01:40:54', '2024-08-28 01:40:54');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_name_bn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_slug_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_slug_bn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=>Active, 0=>Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chooses`
--

CREATE TABLE `chooses` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_en` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_bn` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_bn` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_bn` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `choose_name_en` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `choose_name_bn` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `choose_description_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `choose_description_bn` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `choose_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=>Active, 0=>Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chooses`
--

INSERT INTO `chooses` (`id`, `name_en`, `name_bn`, `slug`, `title_en`, `title_bn`, `description_en`, `description_bn`, `choose_name_en`, `choose_name_bn`, `choose_description_en`, `choose_description_bn`, `choose_image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'WHY CHOOSE US', 'WHY CHOOSE US', 'we-help-you-to-increase-your-sale-through-solutions', 'We Help You To Increase Your Sale Through Solutions', 'We Help You To Increase Your Sale Through Solutions', '<span style=\"color: rgb(100, 100, 100); font-family: &quot;Open Sans&quot;, sans-serif; text-align: center; background-color: rgb(245, 245, 245);\">We are leading technology solutions providing company all over the world doing over 40 years lorem ipsum dolor sit amet.</span>', '<span style=\"color: rgb(100, 100, 100); font-family: &quot;Open Sans&quot;, sans-serif; text-align: center; background-color: rgb(245, 245, 245);\">We are leading technology solutions providing company all over the world doing over 40 years lorem ipsum dolor sit amet.</span>', 'Graphic Design', 'Graphic Design', '<span style=\"color: rgb(100, 100, 100); font-family: &quot;Open Sans&quot;, sans-serif; background-color: rgb(245, 245, 245);\">Lorem ipsum dolor sit amet conset sadipscing elitr sed diam nonumy eirm od tempor invidunt ut labore.</span>', '<span style=\"color: rgb(100, 100, 100); font-family: &quot;Open Sans&quot;, sans-serif; background-color: rgb(245, 245, 245);\">Lorem ipsum dolor sit amet conset sadipscing elitr sed diam nonumy eirm od tempor invidunt ut labore.</span>', 'upload/choose/1749462319894081.png', 1, '2022-11-14 14:14:42', '2022-11-14 14:14:42'),
(2, 'WHY CHOOSE US', 'WHY CHOOSE US', 'we-help-you-to-increase-your-sale-through-solutions', 'We Help You To Increase Your Sale Through Solutions', 'We Help You To Increase Your Sale Through Solutions', '<span style=\"color: rgb(100, 100, 100); font-family: &quot;Open Sans&quot;, sans-serif; text-align: center; background-color: rgb(245, 245, 245);\">We are leading technology solutions providing company all over the world doing over 40 years lorem ipsum dolor sit amet.</span>', '<span style=\"color: rgb(100, 100, 100); font-family: &quot;Open Sans&quot;, sans-serif; text-align: center; background-color: rgb(245, 245, 245);\">We are leading technology solutions providing company all over the world doing over 40 years lorem ipsum dolor sit amet.</span>', 'Mobile Apps', 'Mobile Apps', '<span style=\"color: rgb(100, 100, 100); font-family: &quot;Open Sans&quot;, sans-serif; background-color: rgb(245, 245, 245);\">Lorem ipsum dolor sit amet conset sadipscing elitr sed diam nonumy eirm od tempor invidunt ut labore.</span>', '<span style=\"color: rgb(100, 100, 100); font-family: &quot;Open Sans&quot;, sans-serif; background-color: rgb(245, 245, 245);\">Lorem ipsum dolor sit amet conset sadipscing elitr sed diam nonumy eirm od tempor invidunt ut labore.</span>', 'upload/choose/1749462242132498.png', 1, '2022-11-14 14:13:27', '2022-11-14 14:13:27'),
(3, 'WHY CHOOSE US', 'WHY CHOOSE US', 'we-help-you-to-increase-your-sale-through-solutions', 'We Help You To Increase Your Sale Through Solutions', 'We Help You To Increase Your Sale Through Solutions', '<span style=\"color: rgb(100, 100, 100); font-family: &quot;Open Sans&quot;, sans-serif; text-align: center; background-color: rgb(245, 245, 245);\">We are leading technology solutions providing company all over the world doing over 40 years lorem ipsum dolor sit amet.</span>', '<span style=\"color: rgb(100, 100, 100); font-family: &quot;Open Sans&quot;, sans-serif; text-align: center; background-color: rgb(245, 245, 245);\">We are leading technology solutions providing company all over the world doing over 40 years lorem ipsum dolor sit amet.</span>', 'Web Design', 'Web Design', '<span style=\"color: rgb(100, 100, 100); font-family: &quot;Open Sans&quot;, sans-serif; background-color: rgb(245, 245, 245);\">Lorem ipsum dolor sit amet conset sadipscing elitr sed diam nonumy eirm od tempor invidunt ut labore.</span>', '<span style=\"color: rgb(100, 100, 100); font-family: &quot;Open Sans&quot;, sans-serif; background-color: rgb(245, 245, 245);\">Lorem ipsum dolor sit amet conset sadipscing elitr sed diam nonumy eirm od tempor invidunt ut labore.</span>', 'upload/choose/1749462391979462.png', 1, '2022-11-14 14:15:50', '2022-11-14 14:15:50'),
(4, 'WHY CHOOSE US', 'WHY CHOOSE US', 'we-help-you-to-increase-your-sale-through-solutions', 'We Help You To Increase Your Sale Through Solutions', 'We Help You To Increase Your Sale Through Solutions', '<p><span style=\"color: rgb(100, 100, 100); font-family: &quot;Open Sans&quot;, sans-serif; text-align: center; background-color: rgb(245, 245, 245);\">We are leading technology solutions providing company all over the world doing over 40 years lorem ipsum dolor sit amet.</span><br></p>', '<p><span style=\"color: rgb(100, 100, 100); font-family: &quot;Open Sans&quot;, sans-serif; text-align: center; background-color: rgb(245, 245, 245);\">We are leading technology solutions providing company all over the world doing over 40 years lorem ipsum dolor sit amet.</span><br></p>', 'Web Development', 'Web Development', '<p><span style=\"color: rgb(100, 100, 100); font-family: &quot;Open Sans&quot;, sans-serif; background-color: rgb(245, 245, 245);\">Lorem ipsum dolor sit amet conset sadipscing elitr sed diam nonumy eirm od tempor invidunt ut labore.</span><br></p>', '<p><span style=\"color: rgb(100, 100, 100); font-family: &quot;Open Sans&quot;, sans-serif; background-color: rgb(245, 245, 245);\">Lorem ipsum dolor sit amet conset sadipscing elitr sed diam nonumy eirm od tempor invidunt ut labore.</span><br></p>', 'upload/choose/1749462444990236.png', 1, '2022-11-14 14:16:41', '2022-11-14 14:16:41');

-- --------------------------------------------------------

--
-- Table structure for table `countdown_timers`
--

CREATE TABLE `countdown_timers` (
  `id` int(11) NOT NULL,
  `launch_date` datetime(6) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `softDeletes` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `created_at` timestamp(6) NOT NULL DEFAULT '0000-00-00 00:00:00.000000',
  `updated_at` timestamp(6) NOT NULL DEFAULT '0000-00-00 00:00:00.000000'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE `emails` (
  `id` int(11) NOT NULL,
  `name` varchar(256) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `subject` varchar(256) DEFAULT NULL,
  `phone` varchar(256) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emails`
--

INSERT INTO `emails` (`id`, `name`, `email`, `subject`, `phone`, `message`, `status`, `created_at`, `updated_at`) VALUES
(2, 'user', 'user@gmail.com', 'ME', '014777777778', 'hi', 1, '2022-11-27 22:35:23', '2022-11-27 22:35:23'),
(3, 'user', 'rakibul@gmail.com', 'ME', '0174124011', 'Hi!', 1, '2022-11-27 22:39:56', '2022-11-27 23:10:15'),
(5, 'Siyam Ahmed', 'siyam@gmail.com', 'ME', '01721523644', 'Hi! I am Siyam Ahmed', 1, '2022-11-27 23:12:11', '2022-11-27 23:12:11'),
(7, 'Md Nazrul Islam', 'admin@gmail.com', 'sms', '01768603251', 'hi i am shar fjalkdfjklsd', 1, '2022-11-28 12:55:01', '2022-11-28 12:55:01'),
(8, 'Toni Capra', 'toni.capra@gmail.com', 'Hi!', '457 96 022', 'Hello!', 1, '2022-11-28 13:38:37', '2022-11-28 13:38:37'),
(9, 'Bernardo Sousa', 'marshall.holmwood@gmail.com', 'Do you have an ambition to extend your website\'s scope more?', '078 8915 0009', 'Hi there!\r\nI\'m writing to let you know about an incredible new AI tool that can help with various tasks related to website copywriting and SEO.\r\nIt\'s been used by some of the biggest companies in the world, such as Airbnb and Microsoft.\r\nSo if you\'re looking for a powerful tool to help take your website to the next level, this is definitely worth considering! Plus, to make things even better, I\'m giving away 10,000 words for free so that you can try it out for yourself.\r\nTo get 10k words, just go to https://www.aiwritingmachine.com/', 1, '2022-11-28 19:04:16', '2022-11-28 19:04:16'),
(10, 'DavidLal', 'atoncetry@gmail.com', 'Thoughts?', '83882526183', 'Hey, have you checked this out? \r\n \r\nLooks like you could write some of your blog posts and ads with AtOnce. \r\n \r\nSaves 90% of your time. Lets you write around 20 blog articles in 2 mins... and answer emails 10x faster \r\n \r\ntry it here: https://atoncetry.com', 1, '2022-11-29 04:29:38', '2022-11-29 04:29:38'),
(11, 'Mike Ramacey', 'no-replycoitly@gmail.com', 'Monthly SEO plans from 49$ ONLY', '89797889337', 'Greetings \r\n \r\nI have just analyzed  febulait.com for its SEO metrics and saw that your website could use a boost. \r\n \r\nWe will increase your SEO metrics and ranks organically and safely, using only whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nPlease check our services below, we offer SEO at cheap rates. \r\nhttps://www.hilkom-digital.de/cheap-seo-packages/ \r\n \r\nRegards \r\nMike Ramacey\r\n \r\n \r\nPS: Quality SEO content is included', 1, '2022-12-01 23:55:36', '2022-12-01 23:55:36'),
(12, 'Justin McCarty', 'justinmccarty@mailerking.xyz', 'Do you accept link inserts?', '(02) 4974 2850', 'Hello,\r\n\r\nWondering if you accept link inserts on existing posts on febulait.com?\r\n\r\nHow much would you charge for this?\r\n\r\nAlso, do you have any other sites for link inserts?\r\n\r\nJustin\r\n\r\nIf you\'d like to unsubscribe click the following link.\r\n\r\nhttps://mailerking.xyz/optout/?site=febulait.com', 1, '2022-12-03 01:55:02', '2022-12-03 01:55:02'),
(13, 'Md Hafizur Rahman', 'hr567574@gmail.com', 'Project Solutions', '01945687895', 'hello please. Allow me to go', 0, '2022-12-07 22:38:28', '2022-12-07 22:39:13'),
(14, 'WilliamDougs', 'no.reply.Skync@gmail.com', 'A new method of email distribution.', '82719257595', 'Gооd dаy!  febulait.com \r\n \r\nDid yоu knоw thаt it is pоssiblе tо sеnd prоpоsаl еntirеly lеgit? \r\nWе prоpоsе а nеw wаy оf sеnding lеttеr thrоugh fееdbасk fоrms. Suсh fоrms аrе lосаtеd оn mаny sitеs. \r\nWhеn suсh соmmеrсiаl оffеrs аrе sеnt, nо pеrsоnаl dаtа is usеd, аnd mеssаgеs аrе sеnt tо fоrms spесifiсаlly dеsignеd tо rесеivе mеssаgеs аnd аppеаls. \r\nаlsо, mеssаgеs sеnt thrоugh соmmuniсаtiоn Fоrms dо nоt gеt intо spаm bесаusе suсh mеssаgеs аrе соnsidеrеd impоrtаnt. \r\nWе оffеr yоu tо tеst оur sеrviсе fоr frее. Wе will sеnd up tо 50,000 mеssаgеs fоr yоu. \r\nThе соst оf sеnding оnе milliоn mеssаgеs is 49 USD. \r\n \r\nThis lеttеr is сrеаtеd аutоmаtiсаlly. Plеаsе usе thе соntасt dеtаils bеlоw tо соntасt us. \r\n \r\nContact us. \r\nTelegram - @FeedbackMessages \r\nSkype  live:contactform_18 \r\nWhatsApp - +375259112693 \r\nWe only use chat. \r\nno.reply.Dougs@gmail.com', 1, '2022-12-09 02:09:17', '2022-12-09 02:09:17'),
(15, 'Sophia Fogg', 'sophia.fogg@yahoo.com', 'W On Dy', '(03) 9108 8712', 'Give your new site a boost, submit your site now to our free directory and start getting more clients bit.ly/submit_site_9jxc1c6t8mpn', 1, '2022-12-09 03:00:08', '2022-12-09 03:00:08'),
(16, 'Siobhan Jaime', 'siobhan.jaime@hotmail.com', 'Would you like to take your website to the next level?', '427 5388', 'Hi there!\r\nI\'m writing to let you know about an incredible new AI tool that can help with various tasks related to website copywriting and SEO.\r\nIt\'s been used by some of the biggest companies in the world, such as Airbnb and google.\r\nSo if you\'re looking for a powerful tool to help take your website to the next level, this is definitely worth considering! Plus, to make things even better, I\'m giving away 10,000 words for free so that you can try it out for yourself.\r\nTo get 10k words, just go to https://aiwritingmeta.com/', 1, '2022-12-11 14:10:35', '2022-12-11 14:10:35'),
(17, 'Tyronefum', 'support@capitalfund-hk.com', 'Business Funding', '83834678921', 'Capital Fund International Limited has been working in close partnership with various Business/Financial Consultants and every business and industrial sector all over the world. \r\n \r\nOur Financial services; Funding, Loan, collateral Facilities/Instrument and expertise is the safety net that you require in your Business. \r\n \r\nRequire funding/ Loan from 1 Million to 10 Billion USD/EURO/GBP and Above? \r\n \r\n+852 3008 8373 \r\nCapital Fund International Limited \r\nhttp://www.capitalfund-hk.com/ \r\ninfo@capitalfund-hk.com', 1, '2022-12-12 06:02:16', '2022-12-12 06:02:16'),
(18, 'owooreexixi', 'efudocel@elesa.sibicomail.com', 'Most sausages intended supplements continuously.', '82876375553', 'http://slkjfdf.net/ - Esopopaj <a href=\"http://slkjfdf.net/\">Idiguvi</a> huh.jnnt.febulait.com.qrz.ak http://slkjfdf.net/', 1, '2022-12-14 20:06:56', '2022-12-14 20:06:56'),
(19, 'Donaldsulge', 'jasonward9681@gmail.com', 'Are you in need of professional support for your WordPress website?', '83545999839', 'Hello, \r\n \r\nAre you in need of professional support for your WordPress website? We offer a range of services, including WordPress support, customization, maintenance, and security. Our team of experienced developers is here to help you with any issues you may be having with your website. \r\nWe can provide solutions to keep your website running smoothly, customize your site to make it truly unique, and implement security measures to protect your site from attacks. Contact us today to learn more about how we can help you get the most out of your WordPress website. \r\n \r\nJust go on our website and choose the package that best fits your needs at https://www.cywebsecurity.com/ \r\n \r\nThank you', 1, '2022-12-16 12:53:39', '2022-12-16 12:53:39'),
(20, 'ElenachiG', 'elenachiG@crosenoutinabsi.tk', 'I\'m nоt jеаlous. Сan Ι find hеre ѕеrіous man? :)', '+420 2635993898', 'Hellоǃ\r\nΡеrhарs mу meѕѕаgе iѕ too sресifіc.\r\nВut my оldеr siѕter found а wonderful man hеrе аnd they hаvе a grеat rеlаtіonshір, but whаt аbоut mе?\r\nΙ аm 24 yeаrs old, Elenа, frоm the Czеch Rерublіc, know Еngliѕh lаnguаgе alѕо\r\nAnd... bеtter to ѕау іt іmmedіаtelу. I am biѕeхual. I am not jealоus of аnоther womаn... esресiallу іf wе mаkе lovе togеthеr.\r\nAh уes, I сook verу taѕtyǃ аnd Ι lоve not оnly сook ;))\r\nΙm real gіrl аnd lоoking fоr sеrіоuѕ аnd hоt relatiоnѕhip...\r\nΑnуwау, уоu cаn fіnd mу рrofile hеre: http://cmominar.ml/topic-56027/', 1, '2022-12-19 13:39:37', '2022-12-19 13:39:37'),
(21, 'Katy Trilly', 'katytrilly9@gmail.com', 'Explainer Videos for febulait.com', '07633 92 89 83', 'Hi,\r\n\r\nWe\'d like to introduce to you our explainer video service, which we feel can benefit your site febulait.com.\r\n\r\nCheck out some of our existing videos here:\r\nhttps://www.youtube.com/watch?v=bWz-ELfJVEI\r\nhttps://www.youtube.com/watch?v=Y46aNG-Y3rM\r\nhttps://www.youtube.com/watch?v=hJCFX1AjHKk\r\n\r\nAll of our videos are in a similar animated format as the above examples, and we have voice over artists with US/UK/Australian accents.\r\nWe can also produce voice overs in languages other than English.\r\n\r\nThey can show a solution to a problem or simply promote one of your products or services. They are concise, can be uploaded to video sites such as YouTube, and can be embedded into your website or featured on landing pages.\r\n\r\nOur prices are as follows depending on video length:\r\nUp to 1 minute = $269\r\n1-2 minutes = $379\r\n2-3 minutes = $489\r\n\r\n*All prices above are in USD and include a full script, voice-over and video.\r\n\r\nIf this is something you would like to discuss further, don\'t hesitate to reply.\r\n\r\nKind Regards,\r\nKaty', 1, '2022-12-21 05:08:28', '2022-12-21 05:08:28'),
(22, 'Irene Herzog', 'irene.herzog@gmail.com', 'febulait.com Website Needs Fixing', '06745 46 43 89', 'Hello, febulait.com Did you know that people do 8.5 billion searches on\r\nGoogle every day? That’s why it’s important to rank your website on the\r\nFirst Page of Google?\r\nSo to rank your website #1 on google you need to take care of:\r\n\r\n1-Technical S E O Audit\r\n2-Keyword Research\r\n3-Competitor Research\r\n4-Finding backlinks opportunities\r\n5-Local Optimization of the site (On-Page S E O)\r\n6-Build Backlinks (Off-Page S E O)\r\n7-Build Local S E O Citations\r\n\r\nDon’t worry you don’t have to do anything you can hire someone to do it for you\r\nYou can get +1,000 visitors to your website every day\r\n\r\nyou can try it from here: https://fiverrseo.com/\r\n\r\nI hope you will enjoy it.', 1, '2023-01-02 06:38:09', '2023-01-02 06:38:09'),
(23, 'Raymond', 's1.thecctvpro@gmail.com', 'Underwater cameras', '87781926259', 'Dear Sir/mdm, \r\nHope you are doing well \r\nWe supply 4G solar cameras, explosion-proof cameras and underwater cameras for commercial use. Use of applications: ships, construction sites, oil rigs and nuclear reactor etc.. \r\nDo contact us for any enquiries and visit our website below \r\nWe also have nitrile gloves if you need some \r\nWhatsapp: +65 87695655 \r\nEmail: sales@thecctvpro.com \r\nW: https://www.thecctvpro.com/ \r\nIf you wish to unsubscribe, do reply to our email. \r\nregards, \r\nRaymond', 1, '2023-01-07 15:59:38', '2023-01-07 15:59:38'),
(24, 'Christinapex', 'christinapex@denpelatucarenn.tk', 'Women\'ѕ couрlе. We wаnt to meet а man!...', '+40 2879238249', 'Нelloǃ\r\nΙ aроlogіze for thе ovеrly spесifіс mesѕаge.\r\nМy girlfriеnd аnd Ι love еaсh othеr. And we аre all grеаt.\r\nΒut... wе need а man.\r\nԜе аrе 23 yеаrѕ old, frоm Rоmаnia, wе аlso knоw englіѕh.\r\nWe nеvеr get bоrеd! And nоt onlу in tаlk...\r\nMy nаme iѕ Сhrіѕtіnа, my prоfilе is hеrе: http://macaterca.tk/item-61656/', 1, '2023-01-14 15:13:44', '2023-01-14 15:13:44'),
(25, 'James Osei', 'jamesosei1@gmx.com', 'Fund Transfer $8.9 Million USD', '87865165823', 'Hello, \r\n \r\nHappy New Year , \r\n \r\nI am the Auditing Director in the Bank of Ghana which is the Apex Bank of Ghana; I direct the auditing of accounting and financial data of various departments within the Bank of Ghana. During the Bank independent examination of financial information, I found out about this dormant account containing a contract balance fund $8.9 Million Dollars, The funds $8.9 Million dollars belongs to Late American Contractor Late Timothy Truax , he executed LNG pipeline contract for Ghana Petroleum commission , i will Tell you how the funds will be transferred to your bank account legitimately immediately i receive your response indicating your readiness to receive the funds and i want 50% of the funds after it is transferred to your bank account nominated by you. \r\nReply to private email address : jamesosei@gmx.com \r\n \r\nWarm Regards \r\nJames Osei', 1, '2023-01-24 00:48:33', '2023-01-24 00:48:33'),
(26, 'Harold Johnson', 'digitalaievolution@proton.me', 'Hi febulait.com Admin.', '423-664-4751', 'Hey,\r\n\r\nYou are being replaced with AI ( artificial intelligence ) software.\r\n\r\nIt is still early, and you can start using the power of AI before anyone else:\r\n\r\nhttps://rcl.ink/OACP0\r\n\r\nPS:\r\nI\'m sending this to you first so you can get your early start. Don\'t miss out.\r\n\r\nBest, \r\nHarold Johnson', 1, '2023-01-28 09:38:07', '2023-01-28 09:38:07'),
(27, 'Jeanett Mccollum', 'mccollum.jeanett@hotmail.com', 'Of g D', '070 7108 7717', 'Maximize your new website\'s potential by submitting it to our directory. https://bit.ly/g5tig5', 1, '2023-02-01 17:03:12', '2023-02-01 17:03:12'),
(28, 'Judy Chatfield', 'judy.chatfield@outlook.com', 'U afvrap pg zw', '078 1354 5459', 'Get listed in our directory and give your new website the exposure it needs. http://bit.ly/3Yjum2a', 1, '2023-02-03 14:35:12', '2023-02-03 14:35:12'),
(29, 'JHBUYEDSXC2023  www.google.com', 'aff_marketing_2020@mail.ru', 'JHBUYEDSXC2023  www.google.com', '+74954179556', 'JHBUYEDSXC2023  www.google.com', 1, '2023-02-05 15:30:45', '2023-02-05 15:30:45'),
(30, 'Christy Distefano', 'distefano.christy91@gmail.com', 'This is How I am going to Get 500K Visitors', '06-94025123', 'I am going get 500k visitor per month through squirrly AI..\r\n\r\nWhat is Squirrly?\r\n\r\nFounded in 2012 in London, United Kingdom, Squirrly makes insanely great business products through our process of designing and coding artificially intelligent digital assistants inside every SaaS we build.\r\n\r\nWe focus on creating innovative yet easy-to-use solutions to help our customers never fail at online marketing.\r\n\r\nSquirrly SEO is an AI-powered, all-in-one SEO suite that takes the guesswork out of search engine optimization.\r\n\r\n✔️ Get the perfect SEO setup - instantly! Over 650 features are pre-configured for you during install.\r\n\r\n✔️ All hand-holding. Completely educational. Squirrly provides a fail-proof, paint-by-numbers way of managing and improving your site’s SEO.\r\n\r\n✔️ Use one tool for keyword research, content optimization, SEO settings, technical SEO, site audits, rank tracking, and more.\r\n\r\nLink : https://aiwritingmeta.com/\r\n\r\ncustomer Review : https://www.g2.com/products/squirrly/reviews', 1, '2023-02-14 17:31:04', '2023-02-14 17:31:04'),
(31, 'Libby Evans', 'libbyevans461@gmail.com', 'Accelerate Your Instagram Growth: Gain 400-1200 New Followers Monthly', '(02) 4063 6906', 'Hi there,\r\n\r\nWe run an Instagram growth service, which increases your number of followers both safely and practically. \r\n\r\n- We guarantee to gain you 400-1000+ followers per month.\r\n- People follow you because they are interested in you, increasing likes, comments and interaction.\r\n- All actions are made manually by our team. We do not use any \'bots\'.\r\n\r\nThe price is just $60 (USD) per month, and we can start immediately.\r\n\r\nIf you\'d like to see some of our previous work, let me know, and we can discuss it further.\r\n\r\nKind Regards,\r\nLibby', 1, '2023-02-21 17:35:52', '2023-02-21 17:35:52'),
(32, 'Janie Minahan', 'minahan.janie@gmail.com', 'Hi febulait.com Admin.', '0378 3893532', 'This message was sent to you via your website contact form. I get literally dozens of leads this way every day from people like yourself responding to my message. Now I want to offer this service to you. I will generate leads for your business using this exact same method. Proof that it works? Well if you are writing a reply to me right now then you just proved it can work for you too! Please email me here for details: fclod@dmxs8.com', 1, '2023-02-24 20:55:39', '2023-02-24 20:55:39'),
(33, 'RobertSoith', 'michaelrp62@gmail.com', 'Tax credit', '85737598783', 'Hi. I\'m reaching out to see whether you’ve applied for the covid-related Employee Retention Tax Credit? This credit is worth up to $26k per employee, and you *can* qualify for both this and PPP (the rules changed Nov 2021).  We can help you maximize this credit and have already done this for more than 250 businesses. All our work is free until you receive a refund. Give us a call at 888-479-6055 or email hello@refundspro.com for more info.', 1, '2023-02-25 01:39:17', '2023-02-25 01:39:17'),
(34, 'Paulina Foxall', 'foxall.paulina@outlook.com', 'Take Your Business to the Next Level with We LinkedIn Lead Generation Services', '(07) 4012 8254', 'Dear febulait.com Owner.\r\n\r\nAre you looking to expand your business and attract more clients? Look no further than Cleverly, the leading provider of LinkedIn lead generation services.\r\n\r\nAt Cleverly, we understand that generating high-quality leads can be a daunting task. That\'s why we offer a comprehensive range of services to help you attract and connect with potential clients on LinkedIn. From crafting compelling messages to managing your LinkedIn account, we take care of everything so you can focus on what you do best - growing your business.\r\n\r\nOur services include:\r\n\r\nCrafting personalized messaging that resonates with your target audience\r\nOptimizing your LinkedIn profile to attract and engage potential clients\r\nConnecting with potential clients and nurturing relationships on your behalf\r\nProviding real-time reporting and analytics to help you measure your ROI\r\nOur team of experts uses cutting-edge technology and proven strategies to help you achieve your business goals. Whether you\'re looking to generate leads, increase your visibility on LinkedIn, or build your brand, we\'ve got you covered.\r\n\r\nVisit our website at https://cleverlys.biz/ to learn more about our services and how we can help take your business to the next level.\r\n\r\nBest regards,\r\nMike Miln\r\nCleverly Team', 1, '2023-02-26 04:26:32', '2023-02-26 04:26:32'),
(35, 'Harrylen', 'jackholman36@gmail.com', 'Documents Services, Hacking Service And Counterfeit Bank Notes. Passport, Visa, Drivers License', '85289598911', 'We are a Team of IT Experts specialized in the production of authentic Documents and Counterfeit bank notes. We work with government officials, professors and professional hackers from China, US, Russia, Taiwan etc. All these documents are registered into the Government database. Documents such as Passport, Visa\'s, Driving License, Covid19 Vaccine Card, University Certificates, PMP etc. We also have Canadian dollars, US dollars, pounds and euros. We also have our money in categories, Grade A quality that works at ATMs and bypasses the fake money detector and we also have the normal stage money that was used in jokes, commercials, music and movie videos. Bank account and routing numbers, Employee login credentials and other personally identifiable information \r\nFullz” datasets – complete profiles of information used to commit identity theft. Hacking service available. \r\nFacebook Hacking \r\nSocial media Hacking \r\nHacking Banks \r\nDark web and Deep web service \r\nWhatsApp..... +44 7459 530545 \r\nEmail Address.... jameskinds65@gmail.com \r\nTelegram ID..... @Jameskind65', 1, '2023-02-28 06:09:06', '2023-02-28 06:09:06'),
(37, 'abdul haque sayer', 'sayer@gmail.com', 'sms', '01768603255', 'hi', 1, '2024-08-28 02:48:47', '2024-08-28 02:48:47'),
(38, 'sayer', 'a@gmail.com', 'sms', '01788888888', 'hi', 1, '2024-08-31 07:31:53', '2024-08-31 07:31:53');

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
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=>Active, 0=>Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `logo_image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'upload/logo/1808095766766383.png', 1, '2024-08-22 07:48:14', '2024-08-22 07:48:14'),
(2, 'upload/logo/1808095758346791.png', 1, '2024-08-22 07:48:06', '2024-08-22 07:48:06'),
(3, 'upload/logo/1808095749497049.png', 1, '2024-08-22 07:47:57', '2024-08-22 07:47:57'),
(4, 'upload/logo/1808095775703770.png', 1, '2024-08-22 07:48:22', '2024-08-31 07:33:45'),
(5, 'upload/logo/1808095784747811.png', 1, '2024-08-22 07:48:31', '2024-08-31 07:33:47'),
(6, 'upload/logo/1808095792852140.png', 1, '2024-08-22 07:48:39', '2024-08-31 07:33:49');

-- --------------------------------------------------------

--
-- Table structure for table `media_sliders`
--

CREATE TABLE `media_sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slider_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=>Active, 0=>Inactive',
  `location` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=>left, 0=>right',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_bn` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=>Active, 0=>Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name_en`, `name_bn`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'About', 'সম্পর্কে', 'about', 1, '2022-11-11 06:54:28', '2022-11-11 06:54:28'),
(2, 'Services', 'সেবা', 'services', 1, '2022-11-11 06:54:34', '2022-12-24 12:36:34'),
(3, 'Projects', 'প্রকল্প', 'projects', 1, '2022-11-28 14:26:39', '2024-08-22 07:01:29'),
(4, 'Team', 'টীম', 'team', 0, '2022-11-28 14:21:30', '2022-11-28 14:21:30'),
(5, 'Blog', 'ব্লগ', 'blog', 0, '2022-11-28 14:21:18', '2024-08-28 03:00:07'),
(6, 'Shop', 'দোকান', 'shop', 1, '2022-11-28 14:21:04', '2024-08-22 07:02:01'),
(7, 'Contact Us', 'যোগাযোগ করুন', 'contact-us', 1, '2022-11-29 07:50:36', '2022-11-29 07:50:36'),
(8, 'Mobile App', 'মোবাইল অ্যাপ', 'mobile-app', 0, '2022-11-28 14:20:04', '2022-11-28 14:20:04'),
(9, 'Web Development', 'ওয়েব ডেভেলপমেন্ট', 'web-development', 0, '2022-11-28 14:20:40', '2022-11-28 14:20:40'),
(10, 'Web Design', 'ওয়েব ডিজাইন', 'web-design', 0, '2022-11-28 14:20:23', '2022-11-28 14:20:23'),
(11, 'Live Project', 'লাইভ প্রজেক্ট', 'live-project', 0, '2022-11-29 07:51:10', '2024-08-22 06:58:30'),
(12, 'Pricing', 'মূল্য নির্ধারণ', 'pricing', 1, '2024-08-28 04:15:30', '2024-08-28 04:15:30');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_08_01_045408_create_pages_table', 1),
(7, '2022_10_15_162637_create_menus_table', 1),
(8, '2022_10_16_093213_create_sections_table', 1),
(9, '2022_10_16_112038_create_abouts_table', 1),
(10, '2022_10_16_150707_create_services_table', 1),
(11, '2022_10_17_022311_create_projects_table', 1),
(12, '2022_10_17_032945_create_testimonials_table', 1),
(13, '2022_10_17_040318_create_teams_table', 1),
(14, '2022_10_17_101307_create_blogs_table', 1),
(15, '2022_10_17_123745_create_logos_table', 1),
(16, '2022_10_18_035034_create_submenus_table', 1),
(17, '2022_10_18_113412_create_skills_table', 1),
(18, '2022_10_19_064229_create_categories_table', 1),
(19, '2022_11_11_043514_create_sliders_table', 1),
(20, '2022_11_11_053903_create_chooses_table', 1),
(21, '2022_08_14_045916_create_settings_table', 2),
(22, '2022_11_21_151428_create_seos_table', 3),
(23, '2022_11_27_054049_create_offers_table', 4),
(24, '2022_11_27_143430_create_emails_table', 5),
(25, '2022_11_28_051540_create_subscribes_table', 6),
(26, '2024_08_28_104949_create_pricing_facilities_table', 7),
(27, '2024_09_02_060847_create_about_facilities_table', 8),
(28, '2024_09_10_115731_create_media_sliders_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_en` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `regular_price` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=>Active, 0=>Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `name_en`, `slug`, `title_en`, `regular_price`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Yearly Package', 'yearly-package', 'Pro Plan', '50000', 1, '2022-11-27 03:26:54', '2024-08-30 02:02:49'),
(3, 'Weekly Package', 'weekly-package', 'ultra Plan', '25000', 1, '2022-11-27 03:28:04', '2024-08-30 02:02:28'),
(4, 'Monthly Package', 'monthly-package', 'Basic Plan', '30000', 1, '2022-11-27 03:29:41', '2024-08-30 02:01:40'),
(9, 'all time', 'all-time', 'premium', '1000', 1, '2024-08-31 07:29:09', '2024-08-31 07:29:09');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_bn` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_bn` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_bn` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'nav',
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=>Active, 0=>Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name_en`, `name_bn`, `title_en`, `title_bn`, `slug`, `description_en`, `description_bn`, `position`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Services', 'Services', 'This is Services Page', 'This is Services Page', 'services', 'Terms of Use\r\nThis website contains materials which are owned by us. These materials include, but are not limited to, the design, look, appearance, data, and graphics. Reproduction is prohibited other than in accordance with the copyright law. Unauthorized use of this site may give rise to a claim for damages. Products at this e-commerce portal are sold by respective sellers. All materials on this site are protected by copyrights, trademarks, and other intellectual property rights. Material on website is solely for personal and non-commercial use of users. Without the prior written consent of the owner, modification or use of the materials on any other website is violation of the law, and is prohibited.\r\nTerms of Use\r\nThis website contains materials which are owned by us. These materials include, but are not limited to, the design, look, appearance, data, and graphics. Reproduction is prohibited other than in accordance with the copyright law. Unauthorized use of this site may give rise to a claim for damages. Products at this e-commerce portal are sold by respective sellers. All materials on this site are protected by copyrights, trademarks, and other intellectual property rights. Material on website is solely for personal and non-commercial use of users. Without the prior written consent of the owner, modification or use of the materials on any other website is violation of the law, and is prohibited.\r\nTerms of Use\r\nThis website contains materials which are owned by us. These materials include, but are not limited to, the design, look, appearance, data, and graphics. Reproduction is prohibited other than in accordance with the copyright law. Unauthorized use of this site may give rise to a claim for damages. Products at this e-commerce portal are sold by respective sellers. All materials on this site are protected by copyrights, trademarks, and other intellectual property rights. Material on website is solely for personal and non-commercial use of users. Without the prior written consent of the owner, modification or use of the materials on any other website is violation of the law, and is prohibited.', 'Terms of Use\r\nThis website contains materials which are owned by us. These materials include, but are not limited to, the design, look, appearance, data, and graphics. Reproduction is prohibited other than in accordance with the copyright law. Unauthorized use of this site may give rise to a claim for damages. Products at this e-commerce portal are sold by respective sellers. All materials on this site are protected by copyrights, trademarks, and other intellectual property rights. Material on website is solely for personal and non-commercial use of users. Without the prior written consent of the owner, modification or use of the materials on any other website is violation of the law, and is prohibited.\r\nTerms of Use\r\nThis website contains materials which are owned by us. These materials include, but are not limited to, the design, look, appearance, data, and graphics. Reproduction is prohibited other than in accordance with the copyright law. Unauthorized use of this site may give rise to a claim for damages. Products at this e-commerce portal are sold by respective sellers. All materials on this site are protected by copyrights, trademarks, and other intellectual property rights. Material on website is solely for personal and non-commercial use of users. Without the prior written consent of the owner, modification or use of the materials on any other website is violation of the law, and is prohibited.\r\nTerms of Use\r\nThis website contains materials which are owned by us. These materials include, but are not limited to, the design, look, appearance, data, and graphics. Reproduction is prohibited other than in accordance with the copyright law. Unauthorized use of this site may give rise to a claim for damages. Products at this e-commerce portal are sold by respective sellers. All materials on this site are protected by copyrights, trademarks, and other intellectual property rights. Material on website is solely for personal and non-commercial use of users. Without the prior written consent of the owner, modification or use of the materials on any other website is violation of the law, and is prohibited.', 'Bottom', 1, '2022-11-14 11:36:19', '2022-11-14 11:36:19'),
(5, 'About Us', 'About Us', 'This is About Page', 'This is About Page', 'about-us', 'Terms of Use\r\nThis website contains materials which are owned by us. These materials include, but are not limited to, the design, look, appearance, data, and graphics. Reproduction is prohibited other than in accordance with the copyright law. Unauthorized use of this site may give rise to a claim for damages. Products at this e-commerce portal are sold by respective sellers. All materials on this site are protected by copyrights, trademarks, and other intellectual property rights. Material on website is solely for personal and non-commercial use of users. Without the prior written consent of the owner, modification or use of the materials on any other website is violation of the law, and is prohibited.Terms of Use\r\nThis website contains materials which are owned by us. These materials include, but are not limited to, the design, look, appearance, data, and graphics. Reproduction is prohibited other than in accordance with the copyright law. Unauthorized use of this site may give rise to a claim for damages. Products at this e-commerce portal are sold by respective sellers. All materials on this site are protected by copyrights, trademarks, and other intellectual property rights. Material on website is solely for personal and non-commercial use of users. Without the prior written consent of the owner, modification or use of the materials on any other website is violation of the law, and is prohibited.Terms of Use\r\nThis website contains materials which are owned by us. These materials include, but are not limited to, the design, look, appearance, data, and graphics. Reproduction is prohibited other than in accordance with the copyright law. Unauthorized use of this site may give rise to a claim for damages. Products at this e-commerce portal are sold by respective sellers. All materials on this site are protected by copyrights, trademarks, and other intellectual property rights. Material on website is solely for personal and non-commercial use of users. Without the prior written consent of the owner, modification or use of the materials on any other website is violation of the law, and is prohibited.', 'Terms of Use\r\nThis website contains materials which are owned by us. These materials include, but are not limited to, the design, look, appearance, data, and graphics. Reproduction is prohibited other than in accordance with the copyright law. Unauthorized use of this site may give rise to a claim for damages. Products at this e-commerce portal are sold by respective sellers. All materials on this site are protected by copyrights, trademarks, and other intellectual property rights. Material on website is solely for personal and non-commercial use of users. Without the prior written consent of the owner, modification or use of the materials on any other website is violation of the law, and is prohibited.Terms of Use\r\nThis website contains materials which are owned by us. These materials include, but are not limited to, the design, look, appearance, data, and graphics. Reproduction is prohibited other than in accordance with the copyright law. Unauthorized use of this site may give rise to a claim for damages. Products at this e-commerce portal are sold by respective sellers. All materials on this site are protected by copyrights, trademarks, and other intellectual property rights. Material on website is solely for personal and non-commercial use of users. Without the prior written consent of the owner, modification or use of the materials on any other website is violation of the law, and is prohibited.Terms of Use\r\nThis website contains materials which are owned by us. These materials include, but are not limited to, the design, look, appearance, data, and graphics. Reproduction is prohibited other than in accordance with the copyright law. Unauthorized use of this site may give rise to a claim for damages. Products at this e-commerce portal are sold by respective sellers. All materials on this site are protected by copyrights, trademarks, and other intellectual property rights. Material on website is solely for personal and non-commercial use of users. Without the prior written consent of the owner, modification or use of the materials on any other website is violation of the law, and is prohibited.', 'Bottom', 1, '2022-11-14 11:37:34', '2022-11-14 11:37:34'),
(6, 'Contact Us', 'Contact Us', 'This is Contact Page', 'This is Contact Page', 'contact-us', 'Terms of Use\r\nThis website contains materials which are owned by us. These materials include, but are not limited to, the design, look, appearance, data, and graphics. Reproduction is prohibited other than in accordance with the copyright law. Unauthorized use of this site may give rise to a claim for damages. Products at this e-commerce portal are sold by respective sellers. All materials on this site are protected by copyrights, trademarks, and other intellectual property rights. Material on website is solely for personal and non-commercial use of users. Without the prior written consent of the owner, modification or use of the materials on any other website is violation of the law, and is prohibited.Terms of Use\r\nThis website contains materials which are owned by us. These materials include, but are not limited to, the design, look, appearance, data, and graphics. Reproduction is prohibited other than in accordance with the copyright law. Unauthorized use of this site may give rise to a claim for damages. Products at this e-commerce portal are sold by respective sellers. All materials on this site are protected by copyrights, trademarks, and other intellectual property rights. Material on website is solely for personal and non-commercial use of users. Without the prior written consent of the owner, modification or use of the materials on any other website is violation of the law, and is prohibited. Terms of Use\r\nThis website contains materials which are owned by us. These materials include, but are not limited to, the design, look, appearance, data, and graphics. Reproduction is prohibited other than in accordance with the copyright law. Unauthorized use of this site may give rise to a claim for damages. Products at this e-commerce portal are sold by respective sellers. All materials on this site are protected by copyrights, trademarks, and other intellectual property rights. Material on website is solely for personal and non-commercial use of users. Without the prior written consent of the owner, modification or use of the materials on any other website is violation of the law, and is prohibited.\r\nTerms of Use\r\nThis website contains materials which are owned by us. These materials include, but are not limited to, the design, look, appearance, data, and graphics. Reproduction is prohibited other than in accordance with the copyright law. Unauthorized use of this site may give rise to a claim for damages. Products at this e-commerce portal are sold by respective sellers. All materials on this site are protected by copyrights, trademarks, and other intellectual property rights. Material on website is solely for personal and non-commercial use of users. Without the prior written consent of the owner, modification or use of the materials on any other website is violation of the law, and is prohibited.', 'Terms of Use\r\nThis website contains materials which are owned by us. These materials include, but are not limited to, the design, look, appearance, data, and graphics. Reproduction is prohibited other than in accordance with the copyright law. Unauthorized use of this site may give rise to a claim for damages. Products at this e-commerce portal are sold by respective sellers. All materials on this site are protected by copyrights, trademarks, and other intellectual property rights. Material on website is solely for personal and non-commercial use of users. Without the prior written consent of the owner, modification or use of the materials on any other website is violation of the law, and is prohibited.Terms of Use\r\nThis website contains materials which are owned by us. These materials include, but are not limited to, the design, look, appearance, data, and graphics. Reproduction is prohibited other than in accordance with the copyright law. Unauthorized use of this site may give rise to a claim for damages. Products at this e-commerce portal are sold by respective sellers. All materials on this site are protected by copyrights, trademarks, and other intellectual property rights. Material on website is solely for personal and non-commercial use of users. Without the prior written consent of the owner, modification or use of the materials on any other website is violation of the law, and is prohibited. Terms of Use\r\nThis website contains materials which are owned by us. These materials include, but are not limited to, the design, look, appearance, data, and graphics. Reproduction is prohibited other than in accordance with the copyright law. Unauthorized use of this site may give rise to a claim for damages. Products at this e-commerce portal are sold by respective sellers. All materials on this site are protected by copyrights, trademarks, and other intellectual property rights. Material on website is solely for personal and non-commercial use of users. Without the prior written consent of the owner, modification or use of the materials on any other website is violation of the law, and is prohibited.\r\nTerms of Use\r\nThis website contains materials which are owned by us. These materials include, but are not limited to, the design, look, appearance, data, and graphics. Reproduction is prohibited other than in accordance with the copyright law. Unauthorized use of this site may give rise to a claim for damages. Products at this e-commerce portal are sold by respective sellers. All materials on this site are protected by copyrights, trademarks, and other intellectual property rights. Material on website is solely for personal and non-commercial use of users. Without the prior written consent of the owner, modification or use of the materials on any other website is violation of the law, and is prohibited.', 'Bottom', 1, '2022-11-14 11:38:03', '2022-11-14 11:38:03'),
(7, 'Terms & Policy', 'Terms & Policy', 'This is Terms & Policy Page', 'This is Terms & Policy Page', 'terms--policy', 'Terms of Use\r\nThis website contains materials which are owned by us. These materials include, but are not limited to, the design, look, appearance, data, and graphics. Reproduction is prohibited other than in accordance with the copyright law. Unauthorized use of this site may give rise to a claim for damages. Products at this e-commerce portal are sold by respective sellers. All materials on this site are protected by copyrights, trademarks, and other intellectual property rights. Material on website is solely for personal and non-commercial use of users. Without the prior written consent of the owner, modification or use of the materials on any other website is violation of the law, and is prohibited.\r\nTerms of Use\r\nThis website contains materials which are owned by us. These materials include, but are not limited to, the design, look, appearance, data, and graphics. Reproduction is prohibited other than in accordance with the copyright law. Unauthorized use of this site may give rise to a claim for damages. Products at this e-commerce portal are sold by respective sellers. All materials on this site are protected by copyrights, trademarks, and other intellectual property rights. Material on website is solely for personal and non-commercial use of users. Without the prior written consent of the owner, modification or use of the materials on any other website is violation of the law, and is prohibited.\r\nTerms of Use\r\nThis website contains materials which are owned by us. These materials include, but are not limited to, the design, look, appearance, data, and graphics. Reproduction is prohibited other than in accordance with the copyright law. Unauthorized use of this site may give rise to a claim for damages. Products at this e-commerce portal are sold by respective sellers. All materials on this site are protected by copyrights, trademarks, and other intellectual property rights. Material on website is solely for personal and non-commercial use of users. Without the prior written consent of the owner, modification or use of the materials on any other website is violation of the law, and is prohibited.', 'Terms of Use\r\nThis website contains materials which are owned by us. These materials include, but are not limited to, the design, look, appearance, data, and graphics. Reproduction is prohibited other than in accordance with the copyright law. Unauthorized use of this site may give rise to a claim for damages. Products at this e-commerce portal are sold by respective sellers. All materials on this site are protected by copyrights, trademarks, and other intellectual property rights. Material on website is solely for personal and non-commercial use of users. Without the prior written consent of the owner, modification or use of the materials on any other website is violation of the law, and is prohibited.\r\nTerms of Use\r\nThis website contains materials which are owned by us. These materials include, but are not limited to, the design, look, appearance, data, and graphics. Reproduction is prohibited other than in accordance with the copyright law. Unauthorized use of this site may give rise to a claim for damages. Products at this e-commerce portal are sold by respective sellers. All materials on this site are protected by copyrights, trademarks, and other intellectual property rights. Material on website is solely for personal and non-commercial use of users. Without the prior written consent of the owner, modification or use of the materials on any other website is violation of the law, and is prohibited.\r\nTerms of Use\r\nThis website contains materials which are owned by us. These materials include, but are not limited to, the design, look, appearance, data, and graphics. Reproduction is prohibited other than in accordance with the copyright law. Unauthorized use of this site may give rise to a claim for damages. Products at this e-commerce portal are sold by respective sellers. All materials on this site are protected by copyrights, trademarks, and other intellectual property rights. Material on website is solely for personal and non-commercial use of users. Without the prior written consent of the owner, modification or use of the materials on any other website is violation of the law, and is prohibited.', 'Bottom', 1, '2022-11-14 11:39:15', '2022-11-14 11:39:15');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `pricing_facilities`
--

CREATE TABLE `pricing_facilities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `offer_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pricing_facilities`
--

INSERT INTO `pricing_facilities` (`id`, `offer_id`, `name`, `created_at`, `updated_at`) VALUES
(14, 8, '25 Analytics', '2024-08-29 08:56:32', '2024-08-29 08:56:32'),
(15, 8, '1,300 Keywords', '2024-08-29 08:56:32', '2024-08-29 08:56:32'),
(16, 8, '25 Social Media Reviews', '2024-08-29 08:56:32', '2024-08-29 08:56:32'),
(17, 8, 'four facility', '2024-08-29 08:56:32', '2024-08-29 08:56:32'),
(18, 8, NULL, '2024-08-29 08:56:32', '2024-08-29 08:56:32'),
(19, 4, '25 Analytics Campaign', '2024-08-30 02:01:40', '2024-08-30 02:01:40'),
(20, 4, '1,300 Keywords', '2024-08-30 02:01:40', '2024-08-30 02:01:40'),
(21, 4, '25 Social Media Reviews', '2024-08-30 02:01:40', '2024-08-30 02:01:40'),
(22, 4, '1 Free Optimization', '2024-08-30 02:01:40', '2024-08-30 02:01:40'),
(23, 4, '24/7 Support', '2024-08-30 02:01:40', '2024-08-30 02:01:40'),
(24, 3, '25 Analytics Campaign', '2024-08-30 02:02:28', '2024-08-30 02:02:28'),
(25, 3, '1,300 Keywords', '2024-08-30 02:02:28', '2024-08-30 02:02:28'),
(26, 3, '25 Social Media Reviews', '2024-08-30 02:02:28', '2024-08-30 02:02:28'),
(27, 3, '1 Free Optimization', '2024-08-30 02:02:28', '2024-08-30 02:02:28'),
(28, 3, '24/7 Support', '2024-08-30 02:02:28', '2024-08-30 02:02:28'),
(29, 2, '25 Analytics Campaign', '2024-08-30 02:02:49', '2024-08-30 02:02:49'),
(30, 2, '1,300 Keywords', '2024-08-30 02:02:49', '2024-08-30 02:02:49'),
(31, 2, '25 Social Media Reviews', '2024-08-30 02:02:49', '2024-08-30 02:02:49'),
(32, 2, '1 Free Optimization', '2024-08-30 02:02:49', '2024-08-30 02:02:49'),
(33, 2, '24/7 Support', '2024-08-30 02:02:49', '2024-08-30 02:02:49'),
(34, 9, '25 Analytics Campaign', '2024-08-31 07:29:09', '2024-08-31 07:29:09'),
(35, 9, '25 Analytics', '2024-08-31 07:29:09', '2024-08-31 07:29:09');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(11) DEFAULT NULL,
  `submenu_id` int(11) DEFAULT NULL,
  `name_en` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_bn` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_bn` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_title_en` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_title_bn` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_name_en` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_name_bn` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_description_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_description_bn` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_name_en` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_name_bn` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=>Active, 0=>Inactive',
  `launch_date` datetime(6) DEFAULT NULL,
  `switch` tinyint(1) NOT NULL,
  `softDeletes` timestamp(6) NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `menu_id`, `submenu_id`, `name_en`, `name_bn`, `title_en`, `title_bn`, `short_title_en`, `short_title_bn`, `client_name`, `duration`, `location`, `slug`, `project_name_en`, `project_name_bn`, `project_description_en`, `project_description_bn`, `button_name_en`, `button_name_bn`, `project_image`, `status`, `launch_date`, `switch`, `softDeletes`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 9, NULL, 'PROJECTS', 'PROJECTS', 'Our Latest Incredible Client\'s Projects', 'Our Latest Incredible Client\'s Projects', NULL, NULL, NULL, NULL, NULL, 'projects', 'School Management Software', 'School Management Software', 'Lorem ipsum dolor sit amet conset sadipscing elitr sed diam nonumy eirm od tempor invidunt ut labore.', 'Lorem ipsum dolor sit amet conset sadipscing elitr sed diam nonumy eirm od tempor invidunt ut labore.', 'Read More', 'Read More', 'upload/project/1750628250287470.jpg', 1, '2022-10-22 00:00:00.000000', 0, '2022-11-20 00:34:28.625011', '2022-11-11 07:02:16', '2022-11-27 00:06:39', NULL),
(2, 9, 4, 'PROJECTS', 'PROJECTS', 'Our Latest Incredible Client\'s Projects', 'Our Latest Incredible Client\'s Projects', NULL, NULL, NULL, NULL, NULL, 'projects', 'Accounting Software', 'Accounting Software', 'Lorem ipsum dolor sit amet conset sadipscing elitr sed diam nonumy eirm od tempor invidunt ut labore.', 'Lorem ipsum dolor sit amet conset sadipscing elitr sed diam nonumy eirm od tempor invidunt ut labore.', 'View More', 'View More', 'upload/project/1749464425116820.jpg', 1, '0000-00-00 00:00:00.000000', 0, '2022-11-20 00:34:28.625011', '2022-11-11 09:57:26', '2022-11-21 09:26:23', NULL),
(3, 9, NULL, 'PROJECTS', 'PROJECTS', 'Our Latest Incredible Client\'s Projects', 'Our Latest Incredible Client\'s Projects', NULL, NULL, NULL, NULL, NULL, 'projects', 'Pharmacy Management Software', 'Pharmacy Management Software', 'Lorem ipsum dolor sit amet conset sadipscing elitr sed diam nonumy eirm od tempor invidunt ut labore.', 'Lorem ipsum dolor sit amet conset sadipscing elitr sed diam nonumy eirm od tempor invidunt ut labore.', 'View More', 'View More', 'upload/project/1750628241122678.jpg', 1, NULL, 0, '2022-11-20 00:34:28.625011', '2022-11-11 09:57:43', '2022-11-27 00:06:31', NULL),
(4, 1, 1, 'PROJECTS', 'PROJECTS', 'Our Latest Incredible Client\'s Projects', 'Our Latest Incredible Client\'s Projects', NULL, NULL, NULL, NULL, NULL, 'projects', 'Ecommerce Website', 'Ecommerce Website', 'Lorem ipsum dolor sit amet conset sadipscing elitr sed diam nonumy eirm od tempor invidunt ut labore.', 'Lorem ipsum dolor sit amet conset sadipscing elitr sed diam nonumy eirm od tempor invidunt ut labore.', 'View More', 'View More', 'upload/project/1750628228745723.jpg', 1, NULL, 0, '2022-11-20 00:34:28.625011', '2022-11-11 09:58:03', '2022-11-27 00:06:19', NULL),
(5, 3, 5, 'We', 'We', 'md', 'md', NULL, NULL, NULL, NULL, NULL, 'we', 'sdg', 'ffhg', 'dgdfg', 'dgdf', 'dgf', 'dgfd', 'upload/project/1749947934406475.jpg', 1, '0000-00-00 00:00:00.000000', 0, '2022-11-20 00:34:28.625011', '2022-11-19 22:53:20', '2022-11-20 07:46:48', '2022-11-20 02:46:48.000000'),
(6, 11, NULL, 'Feed Ltd', 'Feed Ltd', 'We bring solutions to make life easier for our customers.', 'We bring solutions to make life easier for our customers.', NULL, NULL, NULL, NULL, NULL, 'feed-ltd', 'DKI Foundation Membership Management', 'DKI Foundation Membership Management', 'werf', 'werwa', NULL, NULL, 'upload/project/1749987325348202.jpg', 1, '2022-12-08 10:19:00.000000', 1, NULL, '2022-11-20 07:57:49', '2022-11-21 07:06:55', '2022-11-21 02:06:55.000000'),
(7, 11, 4, 's', 's', 's', 's', NULL, NULL, NULL, NULL, NULL, 's', 's', 's', 's', 's', 's', 's', 'upload/project/1749982193195922.jpg', 1, '2022-11-22 08:53:00.000000', 1, NULL, '2022-11-20 07:57:51', '2022-11-21 07:06:41', '2022-11-21 02:06:41.000000'),
(8, 11, NULL, 'Md Hafizur Rahman', 'Md Hafizur Rahman', 'DKI Foundation Membership Management', 'DKI Foundation Membership Management', 'Messaging App', 'Messaging App', 'Solit IT Group', 'August 2020 - January 2022', 'Bangladesh', 'md-hafizur-rahman', 'DKI Foundation Membership Management', 'DKI Foundation Membership Management', 'DKI Foundation Member Advisor Management with Dynamic Payment Gateway', 'DKI Foundation Member Advisor Management with Dynamic Payment Gateway', NULL, NULL, 'upload/project/1750628162387869.jpg', 1, '2022-11-08 10:45:00.000000', 1, NULL, '2022-11-21 07:14:43', '2022-11-27 00:05:16', NULL),
(9, 3, 2, 'Rhoda Nash', 'Hammett Harrison', 'Sint officiis fuga', 'Voluptate nostrud qu', NULL, NULL, NULL, NULL, NULL, 'rhoda-nash', 'Joy Ward', 'Drake Reilly', 'Quas duis fugiat qu', 'Aut qui voluptatem', 'Elton Mercer', 'Farrah Drake', 'upload/project/1750084745679485.png', 1, '2023-06-08 10:44:00.000000', 1, NULL, '2022-11-21 11:07:53', '2022-11-21 11:11:12', '2022-11-21 06:11:12.000000'),
(10, 7, NULL, 'Wallace Garcia', 'Laith Salas', 'Culpa tenetur elige', 'Eum est fugit conse', NULL, NULL, NULL, NULL, NULL, 'wallace-garcia', 'Ira Allen', 'Constance Casey', 'Laboris consectetur', 'Commodi iste aliquid', 'Lewis Ortega', 'Remedios Kirkland', 'upload/project/1750085031707517.png', 1, '2023-07-06 22:31:00.000000', 1, NULL, '2022-11-21 11:12:26', '2022-11-21 13:09:27', '2022-11-21 08:09:27.000000'),
(11, 2, 2, 'Axel Noel', 'Troy Lynn', 'Tenetur vero officia', 'Fuga Sapiente repud', NULL, NULL, NULL, NULL, NULL, 'axel-noel', 'Cassady Suarez', 'Bree Daugherty', 'Dolor corrupti haru', 'Corrupti beatae ass', 'Shafira Hatfield', 'Jermaine Jensen', 'upload/project/1750092420917386.png', 1, '1972-05-26 22:21:00.000000', 1, NULL, '2022-11-21 13:09:53', '2022-11-21 13:10:06', '2022-11-21 08:10:06.000000'),
(12, 3, 6, 'sadf', 'adfs', 'asdf', 'adfa', 'asdfa', 'asdfasd', 'asdf', 'asfda', 'asdfas', 'sadf', 'asdf', 'asdf', 'asdf', 'asdfasd', 'asdfasdf', 'asdfasd', 'upload/project/1750097918496209.jpg', 1, '2022-11-24 15:37:00.000000', 1, NULL, '2022-11-21 14:37:16', '2022-11-21 14:37:25', '2022-11-21 09:37:25.000000');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_en` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_bn` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_bn` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_bn` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_name_en` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_name_bn` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=>Active, 0=>Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seos`
--

CREATE TABLE `seos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_analytics` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seos`
--

INSERT INTO `seos` (`id`, `meta_title`, `meta_author`, `meta_keyword`, `meta_description`, `google_analytics`, `created_at`, `updated_at`) VALUES
(1, 'Febula IT | Modern Information Technology Solution Company', NULL, 'IT, Information Technology, Febula IT, Febula', 'Febula IT is a Modern Information Technology Solution Company in Bangladesh. We lead with trust and confident with the innovative creation in Bangladesh.', NULL, '2022-12-07 22:34:15', '2022-12-07 22:34:15');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(11) DEFAULT NULL,
  `submenu_id` int(11) DEFAULT NULL,
  `name_en` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_bn` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_bn` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_bn` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_name_en` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_name_bn` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_description_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_description_bn` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_button_en` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_button_bn` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=>Active, 0=>Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `menu_id`, `submenu_id`, `name_en`, `name_bn`, `title_en`, `title_bn`, `slug`, `description_en`, `description_bn`, `service_name_en`, `service_name_bn`, `service_description_en`, `service_description_bn`, `service_button_en`, `service_button_bn`, `service_image`, `status`, `created_at`, `updated_at`) VALUES
(1, 10, 1, 'SERVICES', 'SERVICES', 'We Provide the Best Quality', 'Culpa repellendu', 'services', 'We are technology solutions providing company all over the world doing over 40 years. lorem ipsum dolor sit amet.', 'We are technology solutions providing company all over the world doing over 40 years. lorem ipsum dolor sit amet.', 'Web Design', 'Web Design', 'Lorem ipsum dolor sit amet con setetur sadipscing elitr sed…', 'Lorem ipsum dolor sit amet con setetur sadipscing elitr sed…', 'View More', 'View More', 'upload/services/1749463740806732.jpg', 1, '2022-11-11 07:03:47', '2022-11-14 14:37:17'),
(2, 11, 3, 'SERVICES', 'SERVICES', 'We Provide the Best Quality', 'We Provide the Best Quality', 'services', 'We are technology solutions providing company all over the world doing over 40 years. lorem ipsum dolor sit amet.', 'We are technology solutions providing company all over the world doing over 40 years. lorem ipsum dolor sit amet.', 'Graphics Design', 'Graphics Design', 'Lorem ipsum dolor sit amet con setetur sadipscing elitr sed…', 'Lorem ipsum dolor sit amet con setetur sadipscing elitr sed…', 'View More', 'View More', 'upload/services/1749463620923273.jpg', 1, '2022-11-12 01:16:18', '2022-11-14 14:35:22'),
(3, 6, 2, 'SERVICES', 'SERVICES', 'We Provide the Best Quality', 'We Provide the Best Quality', 'services', 'We are technology solutions providing company all over the world doing over 40 years. lorem ipsum dolor sit amet.', 'We are technology solutions providing company all over the world doing over 40 years. lorem ipsum dolor sit amet.', 'Digital Marketing', 'Digital Marketing', 'Lorem ipsum dolor sit amet con setetur sadipscing elitr sed…', 'Lorem ipsum dolor sit amet con setetur sadipscing elitr sed…', 'View More', 'View More', 'upload/services/1749463520221453.jpg', 1, '2022-11-12 01:16:26', '2022-11-14 14:33:46'),
(4, 9, 1, 'SERVICES', 'SERVICES', 'We Provide the Best Quality', 'We Provide the Best Quality', 'services', 'We are technology solutions providing company all over the world doing over 40 years. lorem ipsum dolor sit amet.', 'We are technology solutions providing company all over the world doing over 40 years. lorem ipsum dolor sit amet.', 'Software Development', 'Software Development', 'Lorem ipsum dolor sit amet con setetur sadipscing elitr sed…', 'Lorem ipsum dolor sit amet con setetur sadipscing elitr sed…', 'Do ea voluptate esse', 'View More', 'upload/services/1749463394008485.jpg', 1, '2022-11-12 01:16:41', '2022-11-14 14:31:46');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, 'site_name', 'Hex Gency', '2022-08-22 02:57:04', '2024-08-28 02:16:36'),
(2, 'site_logo', 'upload/setting/logo/1671647707Febula-IT-Logo-Main.png', '2022-08-03 12:46:20', '2022-12-21 18:35:07'),
(3, 'site_favicon', 'upload/setting/favicon/1668395589Fav-Icon.png', '2022-08-04 12:46:20', '2022-11-14 08:13:09'),
(4, 'site_footer_logo', 'upload/setting/logo/17248330641671648101febula-technology-logo-final-concept.png', '2022-08-03 12:46:20', '2024-08-28 02:17:44'),
(5, 'phone', '01763795373', '2022-08-04 12:47:27', '2024-08-28 02:16:36'),
(6, 'email', 'sayer@gmail.com', '2022-08-12 12:47:52', '2024-08-28 02:16:36'),
(7, 'business_name', 'Modern Art and Technology Solutions', '2022-08-08 12:48:27', '2022-12-24 18:26:52'),
(8, 'business_address', 'Kazipara , Mirpur , Dhaka', '2022-08-04 12:48:53', '2024-08-28 02:16:36'),
(9, 'business_hours', '10:00 - 8:00, Sa - Thu', '2022-08-01 12:49:29', NULL),
(10, 'copy_right', '©Hex Gency Technology', '2022-08-05 12:49:58', '2024-08-28 02:16:36'),
(11, 'developed_by', 'It Solutions', '2022-08-14 12:50:24', NULL),
(12, 'developer_link', 'https://www.itsolutions.com.bd/', '2022-08-13 12:50:56', NULL),
(13, 'facebook_url', 'https://www.facebook.com/febulait', '2022-08-18 12:51:19', '2022-11-14 08:31:12'),
(14, 'twitter_url', 'https://www.twitter.com/', '2022-08-17 12:51:45', NULL),
(15, 'linkedin_url', 'https://www.linkedin.com/company/febula-it', '2022-08-12 12:52:12', '2022-11-14 08:31:12'),
(16, 'youtube_url', 'https://www.youtube.com/', '2022-08-04 12:52:42', NULL),
(17, 'instagram_url', 'https://www.instagram.com/', '2022-08-11 12:53:11', NULL),
(18, 'pinterest_url', 'https://www.pinterest.com/', '2022-08-05 12:53:45', NULL),
(22, 'site_contact_logo', 'upload/setting/contact/1668968407Support-Banner.jpg', NULL, '2022-11-20 23:20:07');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_en` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_bn` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_bn` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skill_name_en` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skill_name_bn` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skill_percen_en` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skill_percen_bn` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_name_en` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_name_bn` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skill_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=>Active, 0=>Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `name_en`, `name_bn`, `title_en`, `title_bn`, `slug`, `skill_name_en`, `skill_name_bn`, `skill_percen_en`, `skill_percen_bn`, `button_name_en`, `button_name_bn`, `skill_image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'SKILLSET', 'SKILLSET', 'We Have A Set Of Skill With High Quality', 'We Have A Set Of Skill With High Quality', 'we-have-a-set-of-skill-with-high-quality', 'Cassandra Charles', 'Yardley Ferrell', '90', 'Voluptates non aut s', 'Christopher Huffman', 'Claudia Mcneil', 'upload/skill/1752612217521357.png', 1, '2022-12-19 03:40:58', '2022-12-19 03:40:58'),
(2, 'SKILLSET', 'SKILLSET', 'We Have A Set Of Skill With High Quality', 'We Have A Set Of Skill With High Quality', 'we-have-a-set-of-skill-with-high-quality', 'Lacota Chapman', 'Cameran Randall', '70', 'Ut alias qui sunt ip as', 'Bianca Watkins', 'Florence Weeks', 'upload/skill/1752612236225572.png', 1, '2022-12-19 03:41:16', '2022-12-19 03:41:16'),
(3, 'SKILLSET', 'SKILLSET', 'We Have A Set Of Skill With High Quality', 'We Have A Set Of Skill With High Quality', 'we-have-a-set-of-skill-with-high-quality', 'Software Development', 'Software Development', '95', '95', 'Explore More', 'Explore More', 'upload/skill/1752612199693136.png', 1, '2022-12-19 03:40:41', '2022-12-19 03:40:41');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_en` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_name_en` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=>Active, 0=>Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `name_en`, `slug`, `title_en`, `slider_image`, `description_en`, `button_name_en`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Increase Web Traffice', 'increase-web-traffice', 'Get Business Marketing', 'upload/slider/1809063072845382.png', 'We have considered our solutions to support every stage of your growth.&nbsp;', 'GET STARTED', 1, '2024-09-02 00:03:09', '2024-09-02 00:03:09');

-- --------------------------------------------------------

--
-- Table structure for table `submenus`
--

CREATE TABLE `submenus` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(11) DEFAULT NULL,
  `name_en` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_bn` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=>Active, 0=>Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `submenus`
--

INSERT INTO `submenus` (`id`, `menu_id`, `name_en`, `name_bn`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'Software Development', 'Software Development', 'software-development', 1, '2022-11-11 06:57:52', '2022-11-11 06:57:52'),
(2, 2, 'Digital Marketing', 'Digital Marketing', 'digital-marketing', 1, '2022-11-11 06:58:18', '2022-11-11 06:58:18'),
(3, 2, 'Graphics Design', 'Graphics Design', 'graphics-design', 1, '2022-11-11 06:58:31', '2022-11-11 06:58:31'),
(4, 3, 'live Project', 'Project 1', 'project-1', 0, '2022-11-11 06:58:50', '2022-11-18 10:26:11'),
(5, 3, 'Past Project', 'Project 2', 'project-2', 1, '2022-11-11 06:58:57', '2022-11-11 06:58:57'),
(6, 1, 'Team', 'Team', 'team', 1, '2022-11-18 10:25:24', '2022-11-18 10:25:24'),
(7, 1, 'Blog', 'Blog', 'blog', 1, '2022-11-27 02:47:54', '2022-11-27 02:47:54');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscribes`
--

CREATE TABLE `subscribes` (
  `id` int(11) NOT NULL,
  `email` varchar(256) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscribes`
--

INSERT INTO `subscribes` (`id`, `email`, `created_at`, `updated_at`) VALUES
(9, 'asraful9355@gmail.com', '2024-08-28 02:06:28', '2024-08-28 02:06:28');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(10) UNSIGNED NOT NULL,
  `submenu_id` int(11) DEFAULT NULL,
  `name_en` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_bn` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_bn` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_bn` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `team_name_en` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `team_name_bn` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation_en` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation_bn` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `github` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `team_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=>Active, 0=>Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `submenu_id`, `name_en`, `name_bn`, `title_en`, `title_bn`, `description_en`, `description_bn`, `team_name_en`, `team_name_bn`, `designation_en`, `designation_bn`, `facebook`, `github`, `linkedin`, `instagram`, `team_image`, `status`, `created_at`, `updated_at`) VALUES
(1, 6, 'TEAM MEMBER', 'TEAM MEMBER', 'Our Expert IT Consultants Team', 'Our Expert IT Consultants Team', '<span style=\"color: rgb(100, 100, 100); font-family: &quot;Open Sans&quot;, sans-serif; text-align: center;\">We are leading technology solutions providing company all over the world doing over 40 years lorem ipsum dolor sit amet.</span>', '<span style=\"color: rgb(100, 100, 100); font-family: &quot;Open Sans&quot;, sans-serif; text-align: center;\">We are leading technology solutions providing company all over the world doing over 40 years lorem ipsum dolor sit amet.</span>', 'Md Ashraful Islam', 'Md Ashraful Islam', 'CFO & Founder', 'designation_bn', 'https://www.facebook.com/', 'https://www.github.com/', 'https://www.linkedin.com/', 'https://www.instagram.com/', 'upload/team/1750076057228794.png', 0, '2022-11-21 08:49:47', '2022-12-08 16:59:29'),
(2, 6, 'TEAM MEMBER', 'TEAM MEMBER', 'Our Expert IT Consultants Team', 'Our Expert IT Consultants Team', '<span style=\"color: rgb(100, 100, 100); font-family: &quot;Open Sans&quot;, sans-serif; text-align: center;\">We are leading technology solutions providing company all over the world doing over 40 years lorem ipsum dolor sit amet.</span>', '<span style=\"color: rgb(100, 100, 100); font-family: &quot;Open Sans&quot;, sans-serif; text-align: center;\">We are leading technology solutions providing company all over the world doing over 40 years lorem ipsum dolor sit amet.</span>', 'Nazrul Islam Suzon', 'Nazrul Islam Suzon', 'Software Enginners', 'designation_bn', 'https://www.facebook.com/', 'https://www.github.com/', 'https://www.linkedin.com/', 'https://www.instagram.com/', 'upload/team/1750076877861293.png', 0, '2022-11-21 09:02:50', '2022-12-08 16:59:32'),
(3, 6, 'TEAM MEMBER', 'TEAM MEMBER', 'Our Expert IT Consultants Team', 'Our Expert IT Consultants Team', '<span style=\"color: rgb(100, 100, 100); font-family: &quot;Open Sans&quot;, sans-serif; text-align: center;\">We are leading technology solutions providing company all over the world doing over 40 years lorem ipsum dolor sit amet.</span>', '<span style=\"color: rgb(100, 100, 100); font-family: &quot;Open Sans&quot;, sans-serif; text-align: center;\">We are leading technology solutions providing company all over the world doing over 40 years lorem ipsum dolor sit amet.</span>', 'Hafizur Rahman', 'Asraful Islam', 'CEO & Founder', 'designation_bn', 'https://www.facebook.com/mhrfaysal', 'https://www.github.com/', 'https://www.linkedin.com/', 'https://www.instagram.com/', 'upload/team/1750076918599856.png', 0, '2022-11-21 09:03:29', '2022-12-08 16:59:35');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_en` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_bn` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_bn` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `testimonial_name_en` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `testimonial_name_bn` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `testimonial_designation_en` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `testimonial_designation_bn` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `testimonial_description_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `testimonial_description_bn` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `testimonial_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=>Active, 0=>Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name_en`, `name_bn`, `title_en`, `title_bn`, `testimonial_name_en`, `testimonial_name_bn`, `testimonial_designation_en`, `testimonial_designation_bn`, `testimonial_description_en`, `testimonial_description_bn`, `testimonial_image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'TESTIMONIALS', 'TESTIMONIALS', 'Some Sweet Talk Of Our Happy Clients', 'Some Sweet Talk Of Our Happy Clients', 'Shakibul Islam', 'Shakibul Islam', 'Software Enginners', NULL, '<span style=\"color: rgb(32, 33, 36); font-family: consolas, &quot;lucida console&quot;, &quot;courier new&quot;, monospace; font-size: 12px; white-space: pre-wrap;\">The professionalism, collaboration and the design they come up with is pheno-menal. Thanks a lot the Coze Team.</span>', '<span style=\"color: rgb(32, 33, 36); font-family: consolas, &quot;lucida console&quot;, &quot;courier new&quot;, monospace; font-size: 12px; white-space: pre-wrap;\">The professionalism, collaboration and the design they come up with is pheno-menal. Thanks a lot the Coze Team.</span>', 'upload/testimonial/1749464871629475.jpg', 1, '2022-11-14 14:55:15', '2022-11-14 14:55:15'),
(2, 'TESTIMONIALS', 'TESTIMONIALS', 'Some Sweet Talk Of Our Happy Clients', 'Some Sweet Talk Of Our Happy Clients', 'Nusrat Ontora', 'Nusrat Ontora', 'Software Enginners', NULL, '<span style=\"color: rgb(32, 33, 36); font-family: consolas, &quot;lucida console&quot;, &quot;courier new&quot;, monospace; font-size: 12px; white-space: pre-wrap;\">We look and sound so good! I am still in shock at how smooth this process was. The professionalism, collaboration and the design they come up is great.</span>', '<span style=\"color: rgb(32, 33, 36); font-family: consolas, &quot;lucida console&quot;, &quot;courier new&quot;, monospace; font-size: 12px; white-space: pre-wrap;\">We look and sound so good! I am still in shock at how smooth this process was. The professionalism, collaboration and the design they come up is great.</span>', 'upload/testimonial/1749464811923793.jpg', 1, '2022-11-14 14:54:18', '2022-11-14 14:54:21'),
(3, 'TESTIMONIALS', 'TESTIMONIALS', 'Some Sweet Talk Of Our Happy Clients', 'Some Sweet Talk Of Our Happy Clients', 'Kamrul Islam', 'Kamrul Islam', 'Software Enginners', NULL, '<span style=\"color: rgb(32, 33, 36); font-family: consolas, &quot;lucida console&quot;, &quot;courier new&quot;, monospace; font-size: 12px; white-space: pre-wrap;\">We look and sound so good! I am still in shock at how smooth this process was. The professionalism, collaboration and the design they come up is great.</span>', '<span style=\"color: rgb(32, 33, 36); font-family: consolas, &quot;lucida console&quot;, &quot;courier new&quot;, monospace; font-size: 12px; white-space: pre-wrap;\">We look and sound so good! I am still in shock at how smooth this process was. The professionalism, collaboration and the design they come up is great.</span>', 'upload/testimonial/1749464728133345.jpg', 1, '2022-11-14 14:52:58', '2022-11-14 14:52:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobaile` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=>Active, 0=>Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobaile`, `email_verified_at`, `password`, `remember_token`, `current_team_id`, `profile_photo_path`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '01768603251', NULL, '$2y$10$PlNx2UXdO7nqNo8DqvMt0OxfZzUPbtLAGZjOeVp4XlvRiZKsCw02y', NULL, NULL, 'upload/users/16687859261668736561Febula-IT-Logo-Web.png', 1, '2022-11-11 06:44:33', '2024-08-28 01:45:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_facilities`
--
ALTER TABLE `about_facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chooses`
--
ALTER TABLE `chooses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countdown_timers`
--
ALTER TABLE `countdown_timers`
  ADD PRIMARY KEY (`id`,`launch_date`,`status`,`softDeletes`,`created_at`,`updated_at`);

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media_sliders`
--
ALTER TABLE `media_sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
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
-- Indexes for table `pricing_facilities`
--
ALTER TABLE `pricing_facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seos`
--
ALTER TABLE `seos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`),
  ADD KEY `value` (`value`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submenus`
--
ALTER TABLE `submenus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribes`
--
ALTER TABLE `subscribes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `about_facilities`
--
ALTER TABLE `about_facilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chooses`
--
ALTER TABLE `chooses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `emails`
--
ALTER TABLE `emails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `media_sliders`
--
ALTER TABLE `media_sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pricing_facilities`
--
ALTER TABLE `pricing_facilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seos`
--
ALTER TABLE `seos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `submenus`
--
ALTER TABLE `submenus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscribes`
--
ALTER TABLE `subscribes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
