-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2021 at 01:47 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ufs`
--

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `group_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`, `group_id`) VALUES
(1, 'awb_read', 'Read Awb', NULL, '2021-02-23 16:00:59', '2021-02-23 16:03:50', 1),
(2, 'awb_add', 'Add Awd', NULL, '2021-02-23 16:01:38', '2021-02-23 16:03:41', 1),
(3, 'awb_edit', 'Edit Awb', NULL, '2021-02-23 16:01:55', '2021-02-23 16:03:26', 1),
(4, 'awb_remove', 'Remove Awb', NULL, '2021-02-23 16:02:20', '2021-02-23 16:03:14', 1),
(5, 'pickup_read', 'Read pickup', NULL, '2021-02-23 16:03:00', '2021-02-23 16:03:00', 2),
(6, 'pickup_add', 'Add Pickup', NULL, '2021-02-23 16:04:16', '2021-02-23 16:04:16', 2),
(7, 'pickup_edit', 'Edit Pickup', NULL, '2021-02-23 16:04:41', '2021-02-23 16:04:41', 2),
(8, 'pickup_remove', 'Remove Pickup', NULL, '2021-02-23 16:05:10', '2021-02-23 16:05:10', 2),
(9, 'courier_sheet_read', 'Read Courier Sheet', NULL, '2021-02-23 16:05:46', '2021-02-23 16:05:46', 3),
(10, 'courier_sheet_add', 'Add Courier Sheet', NULL, '2021-02-23 16:06:36', '2021-02-23 16:06:36', 3),
(11, 'courier_sheet_edit', 'Edit Courier Sheet', NULL, '2021-02-23 16:07:16', '2021-02-23 16:07:16', 3),
(12, 'courier_sheet_remove', 'Remove Courier Sheet', NULL, '2021-02-23 16:07:51', '2021-02-23 16:07:51', 3),
(13, 'company_read', 'Read Company', NULL, '2021-02-23 16:08:48', '2021-02-23 16:08:52', 4),
(14, 'company_add', 'Add Company', NULL, '2021-02-23 16:11:10', '2021-02-23 16:11:10', 4),
(15, 'company_edit', 'Edit Company', NULL, '2021-02-23 16:11:30', '2021-02-23 16:11:30', 4),
(16, 'company_remove', 'Remove Company', NULL, '2021-02-23 16:12:20', '2021-02-23 16:12:20', 4),
(17, 'receiver_read', 'Read Receiver', NULL, '2021-02-23 16:12:52', '2021-02-23 16:12:52', 5),
(18, 'receiver_add', 'Add Receiver', NULL, '2021-02-23 16:13:11', '2021-02-23 16:13:11', 5),
(19, 'receiver_edit', 'Edit Receiver', NULL, '2021-02-23 16:13:33', '2021-02-23 16:13:33', 5),
(20, 'receiver_remove', 'Remove Receiver', NULL, '2021-02-23 16:14:00', '2021-02-23 16:14:00', 5),
(21, 'courier_read', 'Read Courier', NULL, '2021-02-23 16:14:40', '2021-02-23 16:14:40', 6),
(22, 'courier_add', 'Add Courier', NULL, '2021-02-23 16:14:56', '2021-02-23 16:14:56', 6),
(23, 'courier_edit', 'Edit Courier', NULL, '2021-02-23 16:16:37', '2021-02-23 16:16:37', 6),
(24, 'courier_remove', 'Remove Courier', NULL, '2021-02-23 16:17:09', '2021-02-23 16:17:09', 6),
(25, 'company_branch_read', 'Read Company Branch', NULL, '2021-02-23 16:17:51', '2021-02-23 16:17:51', 7),
(26, 'company_branch_add', 'Add Company Branch', NULL, '2021-02-23 16:19:02', '2021-02-23 16:19:02', 7),
(27, 'company_branch_edit', 'Edit Company Branch', NULL, '2021-02-23 16:19:33', '2021-02-23 16:20:09', 7),
(28, 'company_branch_remove', 'Remove Company Branch', NULL, '2021-02-23 16:20:03', '2021-02-23 16:20:03', 7),
(29, 'user_read', 'Read User', NULL, '2021-02-23 16:20:42', '2021-02-23 16:20:42', 8),
(30, 'user_add', 'Add User', NULL, '2021-02-23 16:20:57', '2021-02-23 16:20:57', 8),
(31, 'user_edit', 'Edit User', NULL, '2021-02-23 16:21:43', '2021-02-23 16:21:43', 8),
(32, 'user_remove', 'Remove User', NULL, '2021-02-23 16:22:19', '2021-02-23 16:22:19', 8),
(33, 'role_read', 'Read Role', NULL, '2021-02-23 16:22:45', '2021-02-23 19:09:43', 8),
(34, 'role_add', 'Add Role', NULL, '2021-02-23 16:23:07', '2021-02-23 19:09:52', 8),
(35, 'role_edit', 'Edit Role', NULL, '2021-02-23 16:23:26', '2021-02-23 19:09:58', 8),
(36, 'role_remove', 'Remove Role', NULL, '2021-02-23 16:23:44', '2021-02-23 19:10:03', 8),
(37, 'permission_read', 'Read Permission', NULL, '2021-02-23 16:24:19', '2021-02-23 19:08:32', 10),
(38, 'permission_add', 'Add Permission', NULL, '2021-02-23 16:24:40', '2021-02-23 19:08:37', 10),
(39, 'permission_edit', 'Edit Permission', NULL, '2021-02-23 16:25:17', '2021-02-23 19:08:42', 10),
(40, 'permission_remove', 'Remove Permission', NULL, '2021-02-23 16:25:40', '2021-02-23 19:08:48', 10),
(41, 'permission_group_read', 'Read Permission Group', NULL, '2021-02-23 16:26:22', '2021-02-23 19:08:52', 10),
(42, 'permission_group_add', 'Add Permission Group', NULL, '2021-02-23 16:26:44', '2021-02-23 19:08:55', 10),
(43, 'permission_group_edit', 'Edit Permission Group', NULL, '2021-02-23 16:27:16', '2021-02-23 19:08:58', 10),
(44, 'permission_group_remove', 'Remove Permission Group', NULL, '2021-02-23 16:27:37', '2021-02-23 19:09:02', 10),
(45, 'country_read', 'Read Country', NULL, '2021-02-23 16:28:05', '2021-02-23 16:28:05', 9),
(46, 'country_add', 'Add Country', NULL, '2021-02-23 16:28:28', '2021-02-23 16:28:28', 9),
(47, 'country_edit', 'Edit Country', NULL, '2021-02-23 16:28:49', '2021-02-23 16:28:49', 9),
(48, 'country_remove', 'Remove Country', NULL, '2021-02-23 16:29:20', '2021-02-23 16:29:20', 9),
(49, 'city_read', 'Read City', NULL, '2021-02-23 16:29:41', '2021-02-23 16:29:41', 9),
(50, 'city_edit', 'Edit City', NULL, '2021-02-23 16:30:11', '2021-02-23 16:30:11', 9),
(51, 'city_add', 'Add City', NULL, '2021-02-23 16:30:28', '2021-02-23 16:30:28', 9),
(52, 'city_remove', 'Remove City', NULL, '2021-02-23 16:30:49', '2021-02-23 16:30:49', 9),
(53, 'area_read', 'Read Area', NULL, '2021-02-23 16:31:13', '2021-02-23 16:31:13', 9),
(54, 'area_add', 'Add Area', NULL, '2021-02-23 16:31:43', '2021-02-23 16:31:43', 9),
(55, 'area_edit', 'Edit Area', NULL, '2021-02-23 16:32:04', '2021-02-23 16:32:04', 9),
(56, 'area_remove', 'Remove Area', NULL, '2021-02-23 16:32:52', '2021-02-23 16:32:52', 9),
(57, 'service_read', 'Read Service', NULL, '2021-02-23 16:33:19', '2021-02-23 16:33:19', 9),
(58, 'service_add', 'Add Service', NULL, '2021-02-23 16:33:48', '2021-02-23 16:33:48', 9),
(59, 'service_edit', 'Edit Service', NULL, '2021-02-23 16:34:13', '2021-02-23 16:34:13', 9),
(60, 'service_remove', 'Remove Service', NULL, '2021-02-23 16:34:36', '2021-02-23 16:34:36', 9),
(61, 'payment_type_read', 'Read Payment Type', NULL, '2021-02-23 16:35:16', '2021-02-23 16:35:16', 9),
(62, 'payment_type_add', 'Add Payment Type', NULL, '2021-02-23 16:35:39', '2021-02-23 16:35:39', 9),
(63, 'payment_type_edit', 'Edit Payment Type', NULL, '2021-02-23 16:35:59', '2021-02-23 16:35:59', 9),
(64, 'payment_type_remove', 'Remove Payment Type', NULL, '2021-02-23 16:36:30', '2021-02-23 16:36:30', 9),
(65, 'status_read', 'Read Status', NULL, '2021-02-23 16:37:14', '2021-02-23 16:37:14', 9),
(66, 'status_add', 'Add Status', NULL, '2021-02-23 16:37:34', '2021-02-23 16:37:34', 9),
(67, 'status_edit', 'Edit Status', NULL, '2021-02-23 16:37:54', '2021-02-23 16:37:54', 9),
(68, 'status_remove', 'Remove Status', NULL, '2021-02-23 16:38:28', '2021-02-23 16:38:28', 9),
(69, 'department_read', 'Read Department', NULL, '2021-02-23 16:38:58', '2021-02-23 19:49:16', 11),
(70, 'department_edit', 'Edit Department', NULL, '2021-02-23 16:39:17', '2021-02-23 19:49:20', 11),
(71, 'department_add', 'Add Department', NULL, '2021-02-23 16:39:41', '2021-02-23 19:49:24', 11),
(72, 'department_remove', 'Remove Department', NULL, '2021-02-23 16:40:08', '2021-02-23 19:49:29', 11),
(73, 'translation_read', 'Read Translation', NULL, '2021-02-23 16:41:09', '2021-02-23 16:41:09', 9),
(74, 'awb_id', 'Awb Id', NULL, '2021-02-23 17:05:08', '2021-02-23 17:05:34', 1),
(75, 'awb_track', 'Track Awb', NULL, '2021-02-23 18:22:17', '2021-02-23 18:22:17', 1),
(76, 'awb_change_ok_status', 'Change Awb Ok Status', NULL, '2021-02-24 08:35:17', '2021-02-24 08:35:17', 1),
(78, 'awb_view_trash', 'View Trash of Awb', NULL, '2021-03-02 11:39:38', '2021-03-02 11:39:38', 1),
(79, 'awb_change_status', 'Change Status In Awb Tracking', NULL, '2021-03-07 02:52:55', '2021-03-07 02:52:55', 1),
(80, 'store_read', 'Read Stores', NULL, '2021-03-09 18:31:44', '2021-03-09 18:31:44', 9),
(81, 'store_add', 'Add Store', NULL, '2021-03-09 18:31:54', '2021-03-09 18:31:54', 9),
(82, 'store_edit', 'Edit Store', NULL, '2021-03-09 18:32:06', '2021-03-09 18:32:06', 9),
(83, 'store_remove', 'Remove Store', NULL, '2021-03-09 18:32:19', '2021-03-09 18:32:19', 9),
(84, 'awb_category_read', 'Read Awb Category', NULL, '2021-03-09 18:32:38', '2021-03-09 18:32:38', 9),
(85, 'awb_category_edit', 'Edit Awb Category', NULL, '2021-03-09 18:32:54', '2021-03-09 18:32:54', 9),
(86, 'awb_category_add', 'Add Awb Category', NULL, '2021-03-09 18:33:24', '2021-03-09 18:33:24', 9),
(87, 'awb_category_remove', 'Remove Awb Category', NULL, '2021-03-09 18:34:04', '2021-03-09 18:34:04', 9),
(88, 'expense_type_read', 'Read Expenses Types', NULL, '2021-03-09 18:34:31', '2021-03-09 18:34:31', 9),
(89, 'expense_type_add', 'Add Expenses Type', NULL, '2021-03-09 18:34:51', '2021-03-09 18:34:51', 9),
(90, 'expense_type_edit', 'Edit Expenses Types', NULL, '2021-03-09 18:35:09', '2021-03-09 18:35:09', 9),
(91, 'expense_type_remove', 'Remove Expenses Types', NULL, '2021-03-09 18:35:29', '2021-03-09 18:35:29', 9),
(92, 'price_table_read', 'Read Price Table', NULL, '2021-03-09 20:07:35', '2021-03-09 20:07:35', 9),
(93, 'price_table_add', 'Add Price Table', NULL, '2021-03-09 20:07:48', '2021-03-09 20:07:48', 9),
(94, 'price_table_edit', 'Edit Price Table', NULL, '2021-03-09 20:08:03', '2021-03-09 20:08:03', 9),
(95, 'price_table_remove', 'Remove Price Table', NULL, '2021-03-09 20:08:18', '2021-03-09 20:08:18', 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`),
  ADD KEY `permissions_group_id_foreign` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
