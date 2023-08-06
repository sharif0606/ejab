-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2022 at 01:27 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mfsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `chieldheadones`
--

CREATE TABLE `chieldheadones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subhead_id` int(11) NOT NULL,
  `head_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chieldone_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opening_balance` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `company_id` int(11) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chieldheadones`
--

INSERT INTO `chieldheadones` (`id`, `subhead_id`, `head_name`, `chieldone_code`, `opening_balance`, `company_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'Cash', '11001', NULL, 1, '2022-01-24 00:43:31', '2022-02-15 01:01:27'),
(2, 1, 'Bank', '11002', NULL, 1, '2022-01-24 00:43:31', '2022-01-24 00:43:31'),
(3, 1, 'Short term deposits', '11003', NULL, 1, '2022-01-24 00:43:31', '2022-01-24 00:43:31'),
(4, 1, 'Accounts receivables', '11004', NULL, 1, '2022-01-24 00:43:31', '2022-01-24 00:43:31'),
(5, 1, 'Inventory', '11005', NULL, 1, '2022-01-24 00:43:31', '2022-01-24 00:43:31'),
(6, 1, 'Marketable securities', '11006', NULL, 1, '2022-01-24 00:43:31', '2022-01-24 00:43:31'),
(7, 1, 'Office supplies', '11007', NULL, 1, '2022-01-24 00:43:31', '2022-01-24 00:43:31'),
(8, 2, 'Land', '12001', NULL, 1, '2022-01-24 00:43:31', '2022-01-24 00:43:31'),
(9, 2, 'Building', '12002', NULL, 1, '2022-01-24 00:43:31', '2022-01-24 00:43:31'),
(10, 2, 'Machinery', '12003', NULL, 1, '2022-01-24 00:43:31', '2022-01-24 00:43:31'),
(11, 2, 'Equipment', '12004', NULL, 1, '2022-01-24 00:43:31', '2022-01-24 00:43:31'),
(12, 2, 'Patents', '12005', NULL, 1, '2022-01-24 00:43:31', '2022-01-24 00:43:31'),
(13, 2, 'Trademarks', '12006', NULL, 1, '2022-01-24 00:43:31', '2022-01-24 00:43:31'),
(14, 3, 'Accounts payable', '21001', NULL, 1, '2022-01-24 00:43:31', '2022-01-24 00:43:31'),
(15, 3, 'Interest payable', '21002', NULL, 1, '2022-01-24 00:43:31', '2022-01-24 00:43:31'),
(16, 3, 'Income taxes payable', '21003', NULL, 1, '2022-01-24 00:43:31', '2022-01-24 00:43:31'),
(17, 3, 'Bills payable', '21004', NULL, 1, '2022-01-24 00:43:31', '2022-01-24 00:43:31'),
(18, 3, 'Bank account overdrafts', '21005', NULL, 1, '2022-01-24 00:43:31', '2022-01-24 00:43:31'),
(19, 3, 'Accrued expenses', '21006', NULL, 1, '2022-01-24 00:43:31', '2022-01-24 00:43:31'),
(20, 3, 'Short-term loans', '21007', NULL, 1, '2022-01-24 00:43:31', '2022-01-24 00:43:31'),
(21, 4, 'Bonds payable', '22001', NULL, 1, '2022-01-24 00:43:31', '2022-01-24 00:43:31'),
(22, 4, 'Long-term notes payable', '22002', NULL, 1, '2022-01-24 00:43:31', '2022-01-24 00:43:31'),
(23, 4, 'Deferred tax liabilities', '22003', NULL, 1, '2022-01-24 00:43:31', '2022-01-24 00:43:31'),
(24, 4, 'Mortgage payable', '22004', NULL, 1, '2022-01-24 00:43:31', '2022-01-24 00:43:31'),
(25, 4, 'Capital leases', '22007', NULL, 1, '2022-01-24 00:43:31', '2022-01-24 00:43:31'),
(26, 5, 'Lawsuits', '23001', NULL, 1, '2022-01-24 00:43:31', '2022-01-24 00:43:31'),
(27, 5, 'Product warranties', '23002', NULL, 1, '2022-01-24 00:43:31', '2022-01-24 00:43:31'),
(28, 8, 'Donor', '41001', NULL, 1, '2022-01-25 00:23:37', '2022-04-26 21:45:41'),
(29, 9, 'Bank Interests', '42001', NULL, 1, '2022-01-25 00:27:01', '2022-01-25 00:27:01'),
(30, 9, 'Rent revenue', '42002', NULL, 1, '2022-01-25 00:27:23', '2022-01-25 00:27:23'),
(31, 9, 'Dividend revenue', '42003', NULL, 1, '2022-01-25 00:27:23', '2022-01-25 00:27:23'),
(32, 9, 'Interest revenue', '42004', NULL, 1, '2022-01-25 00:27:23', '2022-01-25 00:27:23'),
(33, 8, 'Contra revenue (sales return and sales discount) ', '41002', NULL, 1, '2022-01-25 00:27:23', '2022-01-25 00:27:23'),
(34, 11, 'Patient', '52001', NULL, 1, '2022-01-25 00:27:23', '2022-04-26 21:44:33'),
(35, 11, 'Medical', '52002', NULL, 1, '2022-01-25 00:27:23', '2022-04-26 21:44:55'),
(36, 11, 'Jakat', '52003', NULL, 1, '2022-01-25 00:27:23', '2022-04-26 21:45:13'),
(37, 11, 'Advertising Expense', '52004', NULL, 1, '2022-01-25 00:27:23', '2022-01-25 00:27:23'),
(38, 11, 'Bank Service Charge', '52005', NULL, 1, '2022-01-25 00:27:23', '2022-01-25 00:27:23'),
(39, 11, 'Delivery Expense', '52006', NULL, 1, '2022-01-25 00:27:23', '2022-01-25 00:27:23'),
(40, 10, 'Depreciation Expense', '51001', NULL, 1, '2022-01-25 00:27:23', '2022-01-25 00:27:23'),
(41, 11, 'Insurance Expense', '52007', NULL, 1, '2022-01-25 00:27:23', '2022-01-25 00:27:23'),
(42, 11, 'Interest Expense', '52008', NULL, 1, '2022-01-25 00:27:23', '2022-01-25 00:27:23'),
(43, 11, 'Rent Expense', '52009', NULL, 1, '2022-01-25 00:27:23', '2022-01-25 00:27:23'),
(44, 11, 'Repairs and Maintenance', '52010', NULL, 1, '2022-01-25 00:27:23', '2022-01-25 00:27:23'),
(45, 11, 'Representation Expense', '52011', NULL, 1, '2022-01-25 00:27:23', '2022-01-25 00:27:23'),
(46, 11, 'Salaries Expense', '52012', NULL, 1, '2022-01-25 00:27:23', '2022-01-25 00:27:23'),
(47, 11, 'License Fees and Taxes', '52013', NULL, 1, '2022-01-25 00:27:23', '2022-01-25 00:27:23'),
(48, 11, 'Telecommunications Expense', '52014', NULL, 1, '2022-01-25 00:27:23', '2022-01-25 00:27:23'),
(49, 11, 'Training and Development', '52015', NULL, 1, '2022-01-25 00:27:23', '2022-01-25 00:27:23'),
(50, 11, 'Utilities Expense', '52016', NULL, 1, '2022-01-25 00:27:23', '2022-01-25 00:27:23'),
(51, 11, 'Unearned Advertising Fees', '6020', NULL, 1, '2022-02-07 11:58:36', '2022-02-07 11:58:36'),
(52, 11, 'Art Supplies Exp.', '6021', NULL, 1, '2022-02-07 11:59:54', '2022-02-07 11:59:54'),
(53, 1, 'Supplies', '1020', NULL, 1, '2022-02-07 12:02:08', '2022-02-07 12:02:08'),
(54, 11, 'Insurance Exp', '6022', NULL, 1, '2022-02-07 12:03:20', '2022-02-07 12:03:20'),
(55, 1, 'Prepaid Insurance', '1021', NULL, 1, '2022-02-07 12:03:44', '2022-02-07 12:03:44'),
(56, 11, 'Depreciation Expense', '6023', NULL, 1, '2022-02-07 12:05:16', '2022-02-07 12:05:16'),
(57, 2, 'Accumulated Depreciation', '6024', NULL, 1, '2022-02-07 12:07:12', '2022-02-07 12:07:12'),
(58, 3, 'Salary Payable', '2020', NULL, 1, '2022-02-07 12:09:28', '2022-02-07 12:09:28');

-- --------------------------------------------------------

--
-- Table structure for table `chieldheadtwos`
--

CREATE TABLE `chieldheadtwos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `chieldheadone_id` int(11) NOT NULL,
  `head_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chieldtwo_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opening_balance` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `company_id` int(11) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chieldheadtwos`
--

INSERT INTO `chieldheadtwos` (`id`, `chieldheadone_id`, `head_name`, `chieldtwo_code`, `opening_balance`, `company_id`, `created_at`, `updated_at`) VALUES
(1, 2, 'IFIC', '110021', '50000', 1, '2022-02-06 22:42:33', '2022-02-15 01:08:58'),
(2, 2, 'Islami Bank', '110022', '50000', 1, '2022-02-15 01:09:43', '2022-02-15 01:09:43');

-- --------------------------------------------------------

--
-- Table structure for table `creditvoucherbkdns`
--

CREATE TABLE `creditvoucherbkdns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `creditvoucher_id` int(11) NOT NULL,
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_id` int(11) NOT NULL,
  `debit` double(14,2) NOT NULL,
  `credit` double(14,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `creditvouchers`
--

CREATE TABLE `creditvouchers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `voucher_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `v_date` date NOT NULL,
  `particular` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `debit_sum` double(14,2) NOT NULL,
  `credit_sum` double(14,2) NOT NULL,
  `cheque_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cheque_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `company_id` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `debitvoucherbkdns`
--

CREATE TABLE `debitvoucherbkdns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `debitvoucher_id` int(11) NOT NULL,
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_id` int(11) NOT NULL,
  `debit` double(14,2) NOT NULL,
  `credit` double(14,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `debitvouchers`
--

CREATE TABLE `debitvouchers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `voucher_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `v_date` date NOT NULL,
  `particular` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `debit_sum` double(14,2) NOT NULL,
  `credit_sum` double(14,2) NOT NULL,
  `cheque_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cheque_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `company_id` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donorfunds`
--

CREATE TABLE `donorfunds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jv_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fund_type` int(11) NOT NULL DEFAULT 1 COMMENT '1 patient, 2 Medical, 3 Zakat',
  `donor_id` int(11) NOT NULL,
  `amount` double(14,2) NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donorfunds`
--

INSERT INTO `donorfunds` (`id`, `jv_id`, `fund_type`, `donor_id`, `amount`, `note`, `created_at`, `updated_at`) VALUES
(1, '10000002', 1, 1, 500.00, 'donor voucher', '2022-04-27 04:20:07', '2022-04-27 04:20:07'),
(2, '10000001', 1, 1, 500.00, 'donor voucher', '2022-04-27 05:05:56', '2022-04-27 05:05:56');

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `e_mail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `national_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profession` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `donor_cat` int(11) NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0 inactive 1 active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`id`, `name`, `father`, `mobile`, `e_mail`, `national_id`, `address`, `profession`, `donor_cat`, `password`, `status`, `created_at`, `updated_at`) VALUES
(1, 'kamal', NULL, '01687295469', NULL, NULL, 'Agrabad, CTG', NULL, 1, NULL, 1, NULL, NULL),
(2, 'Jamal', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `donorvoucherbkdns`
--

CREATE TABLE `donorvoucherbkdns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `donorvoucher_id` int(11) NOT NULL,
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_id` int(11) NOT NULL,
  `debit` double(14,2) NOT NULL,
  `credit` double(14,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donorvoucherbkdns`
--

INSERT INTO `donorvoucherbkdns` (`id`, `donorvoucher_id`, `remarks`, `account_code`, `table_name`, `table_id`, `debit`, `credit`, `created_at`, `updated_at`) VALUES
(1, 1, '', '11001-Cash', 'chieldheadones', 1, 500.00, 0.00, '2022-04-27 05:05:56', '2022-04-27 05:05:56'),
(2, 1, 'Received for Patient-52001', '41001-Donor', 'chieldheadones', 28, 0.00, 500.00, '2022-04-27 05:05:56', '2022-04-27 05:05:56');

-- --------------------------------------------------------

--
-- Table structure for table `donorvouchers`
--

CREATE TABLE `donorvouchers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `voucher_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `v_date` date NOT NULL,
  `particular` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `debit_sum` double(14,2) NOT NULL,
  `credit_sum` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cheque_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cheque_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `company_id` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donorvouchers`
--

INSERT INTO `donorvouchers` (`id`, `voucher_no`, `v_date`, `particular`, `debit_sum`, `credit_sum`, `cheque_no`, `bank_name`, `cheque_date`, `created_by`, `company_id`, `created_at`, `updated_at`) VALUES
(1, '10000001', '2022-04-27', 'donor voucher', 500.00, '500', NULL, NULL, NULL, 2, 1, '2022-04-27 05:05:56', '2022-04-27 05:05:56');

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
-- Table structure for table `generalledgers`
--

CREATE TABLE `generalledgers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `journal_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dr` double(14,2) DEFAULT 0.00,
  `cr` double(14,2) DEFAULT 0.00,
  `v_date` date NOT NULL,
  `jv_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `masterhead_id` int(11) DEFAULT NULL,
  `subhead_id` int(11) DEFAULT NULL,
  `chieldheadone_id` int(11) DEFAULT NULL,
  `chieldheadtwo_id` int(11) DEFAULT NULL,
  `journalvoucher_id` int(11) DEFAULT NULL,
  `journalvoucherbkdn_id` int(11) DEFAULT NULL,
  `debitvoucher_id` int(11) DEFAULT NULL,
  `debitvoucherbkdn_id` int(11) DEFAULT NULL,
  `creditvoucher_id` int(11) DEFAULT NULL,
  `creditvoucherbkdn_id` int(11) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `company_id` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `generalledgers`
--

INSERT INTO `generalledgers` (`id`, `journal_title`, `dr`, `cr`, `v_date`, `jv_id`, `masterhead_id`, `subhead_id`, `chieldheadone_id`, `chieldheadtwo_id`, `journalvoucher_id`, `journalvoucherbkdn_id`, `debitvoucher_id`, `debitvoucherbkdn_id`, `creditvoucher_id`, `creditvoucherbkdn_id`, `created_by`, `company_id`, `created_at`, `updated_at`) VALUES
(1, 'donor voucher', 500.00, 0.00, '2022-04-27', '10000001', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 1, '2022-04-27 05:05:56', '2022-04-27 05:05:56'),
(2, 'Received for Patient-52001', 0.00, 500.00, '2022-04-27', '10000001', NULL, NULL, 28, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 1, '2022-04-27 05:05:56', '2022-04-27 05:05:56');

-- --------------------------------------------------------

--
-- Table structure for table `generalvouchers`
--

CREATE TABLE `generalvouchers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `voucher_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `generalvouchers`
--

INSERT INTO `generalvouchers` (`id`, `voucher_no`, `company_id`, `created_at`, `updated_at`) VALUES
(1, '10000001', 1, '2022-04-27 05:05:56', '2022-04-27 05:05:56');

-- --------------------------------------------------------

--
-- Table structure for table `journalvoucherbkdns`
--

CREATE TABLE `journalvoucherbkdns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `journalvoucher_id` int(11) NOT NULL,
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_id` int(11) NOT NULL,
  `debit` double(14,2) NOT NULL,
  `credit` double(14,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `journalvoucherbkdns`
--

INSERT INTO `journalvoucherbkdns` (`id`, `journalvoucher_id`, `remarks`, `account_code`, `table_name`, `table_id`, `debit`, `credit`, `created_at`, `updated_at`) VALUES
(1, 1, '', '11001-Cash', 'chieldheadones', 1, 7000.00, 0.00, '2022-04-04 13:49:20', '2022-04-04 13:49:20'),
(2, 1, '', '3100-Paid Up Capital', 'subheads', 6, 0.00, 7000.00, '2022-04-04 13:49:20', '2022-04-04 13:49:20'),
(3, 2, '', '52014-Telecommunications Expense', 'chieldheadones', 48, 5000.00, 0.00, '2022-04-04 14:00:19', '2022-04-04 14:00:19'),
(4, 2, '', '11001-Cash', 'chieldheadones', 1, 0.00, 5000.00, '2022-04-04 14:00:19', '2022-04-04 14:00:19'),
(5, 3, '', '52014-Telecommunications Expense', 'chieldheadones', 48, 1000.00, 0.00, '2022-04-04 14:09:27', '2022-04-04 14:09:27'),
(6, 3, '', '11001-Cash', 'chieldheadones', 1, 0.00, 1000.00, '2022-04-04 14:09:27', '2022-04-04 14:09:27');

-- --------------------------------------------------------

--
-- Table structure for table `journalvouchers`
--

CREATE TABLE `journalvouchers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `voucher_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `v_date` date NOT NULL,
  `particular` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `debit_sum` double(14,2) NOT NULL,
  `credit_sum` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cheque_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cheque_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `company_id` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `journalvouchers`
--

INSERT INTO `journalvouchers` (`id`, `voucher_no`, `v_date`, `particular`, `debit_sum`, `credit_sum`, `cheque_no`, `bank_name`, `cheque_date`, `created_by`, `company_id`, `created_at`, `updated_at`) VALUES
(1, '10000001', '2022-04-04', 'End of 2021', 7000.00, '7000', NULL, NULL, NULL, 2, 1, '2022-04-04 13:49:20', '2022-04-04 13:49:20'),
(2, '10000004', '2022-04-04', NULL, 5000.00, '5000', NULL, NULL, NULL, 2, 1, '2022-04-04 14:00:19', '2022-04-04 14:00:19'),
(3, '10000005', '2022-04-04', NULL, 1000.00, '1000', NULL, NULL, NULL, 2, 1, '2022-04-04 14:09:27', '2022-04-04 14:09:27');

-- --------------------------------------------------------

--
-- Table structure for table `masterheads`
--

CREATE TABLE `masterheads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `head_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `head_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` int(11) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `masterheads`
--

INSERT INTO `masterheads` (`id`, `head_name`, `head_code`, `company_id`, `created_at`, `updated_at`) VALUES
(1, 'Asset', '1000', 1, '2022-01-18 23:55:33', '2022-01-18 23:55:33'),
(2, 'Liability', '2000', 1, '2022-01-18 23:55:55', '2022-01-18 23:55:55'),
(3, 'Capital', '3000', 1, '2022-01-18 23:56:22', '2022-01-18 23:56:22'),
(4, 'Income', '4000', 1, '2022-01-18 23:56:46', '2022-01-18 23:56:46'),
(5, 'Expense', '5000', 1, '2022-01-18 23:57:12', '2022-01-18 23:57:12');

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
(1, '2013_11_22_053354_create_roles_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(14, '2021_12_04_065950_create_customers_table', 2),
(15, '2021_12_04_094827_create_invoices_table', 3),
(16, '2021_12_05_111605_create_masterheads_table', 3),
(17, '2021_12_05_113741_create_subheads_table', 3),
(18, '2021_12_05_113848_create_chieldheadones_table', 3),
(19, '2021_12_05_113908_create_chieldheadtwos_table', 3),
(20, '2021_12_05_134100_create_invoiceitems_table', 3),
(21, '2021_12_05_143858_create_suppliers_table', 3),
(22, '2021_12_05_144029_create_purchaseinvoices_table', 3),
(23, '2021_12_05_144646_create_purchaseinvoiceitems_table', 3),
(24, '2021_12_05_164820_create_journalvouchers_table', 4),
(25, '2021_12_05_164852_create_journalvoucherbkdns_table', 4),
(26, '2021_12_05_170004_create_debitvouchers_table', 4),
(27, '2021_12_05_170027_create_debitvoucherbkdns_table', 4),
(28, '2021_12_05_170052_create_creditvouchers_table', 4),
(29, '2021_12_05_170112_create_creditvoucherbkdns_table', 4),
(30, '2021_12_05_170209_create_generalvouchers_table', 4),
(31, '2021_12_05_170243_create_generalledgers_table', 4),
(32, '2022_04_05_151516_create_patients_table', 5),
(33, '2022_04_07_091646_create_donors_table', 5),
(34, '2022_04_12_151452_create_volunteers_table', 5),
(35, '2022_04_24_062802_create_donorvouchers_table', 6),
(36, '2022_04_24_062911_create_donorvoucherbkdns_table', 6),
(37, '2022_04_24_063653_create_patientfunds_table', 7),
(38, '2022_04_24_063758_create_donorfunds_table', 7);

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
-- Table structure for table `patientfunds`
--

CREATE TABLE `patientfunds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jv_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patient_id` int(11) NOT NULL,
  `donor_id` int(11) NOT NULL,
  `amount` double(14,2) NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patientfunds`
--

INSERT INTO `patientfunds` (`id`, `jv_id`, `patient_id`, `donor_id`, `amount`, `note`, `created_at`, `updated_at`) VALUES
(1, '10000002', 3, 1, 500.00, 'donor voucher', '2022-04-27 04:20:07', '2022-04-27 04:20:07'),
(2, '10000001', 2, 1, 500.00, 'donor voucher', '2022-04-27 05:05:56', '2022-04-27 05:05:56');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_occupation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_occupation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patient_occupation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disease_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disease_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hospital_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doctor_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spouse_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marital_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `treatment_cost` double(14,2) NOT NULL,
  `apply_amount` double(14,2) NOT NULL,
  `contact_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alter_contactno` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `family_member` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `present_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permanent_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nid_birthid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pdf_documents` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_card_font` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_card_back` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT 0 COMMENT '0 inactive 1 active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `name`, `father`, `father_occupation`, `mother`, `mother_occupation`, `patient_occupation`, `disease_name`, `age`, `disease_description`, `hospital_name`, `doctor_name`, `spouse_name`, `marital_status`, `treatment_cost`, `apply_amount`, `contact_no`, `alter_contactno`, `family_member`, `present_address`, `permanent_address`, `nid_birthid`, `picture`, `pdf_documents`, `id_card_font`, `id_card_back`, `status`, `created_at`, `updated_at`) VALUES
(1, 'kil', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 250000.00, 200000.00, '2', '2', '2', 'l', 'l', '5', '2', NULL, NULL, NULL, 1, NULL, NULL),
(2, 'jony', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 250000.00, 200000.00, '2', '2', '2', 'l', 'l', '5', '2', NULL, NULL, NULL, 1, NULL, NULL),
(3, 'jeny', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 250000.00, 200000.00, '2', '2', '2', 'l', 'l', '5', '2', NULL, NULL, NULL, 1, NULL, NULL),
(4, 'joy', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 250000.00, 200000.00, '2', '2', '2', 'l', 'l', '5', '2', NULL, NULL, NULL, 1, NULL, NULL);

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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `identity` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `type`, `identity`, `created_at`, `updated_at`) VALUES
(1, 'Superadmin', 'superadmin', '2021-11-30 08:01:46', NULL),
(2, 'Admin', 'admin', '2021-11-30 08:01:46', NULL),
(3, 'User', 'user', '2021-11-30 08:01:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subheads`
--

CREATE TABLE `subheads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `masterhead_id` int(11) NOT NULL,
  `head_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subhead_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opening_balance` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `company_id` int(11) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subheads`
--

INSERT INTO `subheads` (`id`, `masterhead_id`, `head_name`, `subhead_code`, `opening_balance`, `company_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'Current Asset', '1100', '0', 1, '2021-12-05 23:15:53', '2022-02-15 00:49:30'),
(2, 1, 'Fixed Asset', '1200', NULL, 1, '2022-01-18 23:58:41', '2022-01-18 23:58:41'),
(3, 2, 'Current Liability’s', '2100', NULL, 1, '2022-01-19 00:00:34', '2022-01-19 00:00:34'),
(4, 2, 'No-Current Liability’s', '2200', NULL, 1, '2022-01-19 00:01:00', '2022-01-19 00:01:00'),
(5, 2, 'Contingent Liabilities', '2300', NULL, 1, '2022-01-19 00:06:07', '2022-01-19 00:06:07'),
(6, 3, 'Paid up Capital', '3100', NULL, 1, '2022-01-19 00:06:35', '2022-01-19 00:06:35'),
(7, 3, 'Market Share', '3200', NULL, 1, '2022-01-19 00:07:02', '2022-01-19 00:07:02'),
(8, 4, 'Operating Income', '4100', NULL, 1, '2022-01-19 00:08:51', '2022-04-24 01:08:35'),
(9, 4, 'Non operating Income', '4200', NULL, 1, '2022-01-19 00:09:06', '2022-01-19 00:09:06'),
(10, 5, 'Capital Expenses', '5100', NULL, 1, '2022-01-19 00:13:17', '2022-01-19 00:13:17'),
(11, 5, 'Revenue Expenses', '5200', NULL, 1, '2022-01-19 00:13:17', '2022-01-19 00:13:17');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `group_company_id` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `company`, `contact`, `email`, `address`, `status`, `category`, `reference`, `note`, `group_company_id`, `created_at`, `updated_at`) VALUES
(1, 'Razibul', 'MuktoMart', '01712910325', 'razibul@gmail.com', 'Address', 1, '1', 'reff', 'Client', 1, '2021-12-06 05:43:05', '2021-12-06 05:43:05'),
(2, 'Razibul', 'MuktoMart', '01712910325', 'razibul@gmail.com', 'Address', 1, '1', 'reff', 'Client', 1, '2021-12-06 05:43:59', '2021-12-06 05:43:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0 => inactive, 1=> active, 2=> pending, 3=> freez, 4=> block',
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `company_id` int(11) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `contact`, `status`, `role_id`, `company_id`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mizanur Rahman', 'mizan', 'bdworkers24@gmail.com', NULL, '01712910325', 1, 1, 1, '95b83276b6210898ddd8a2bffae20e0684c8707d', NULL, '2021-11-30 08:02:58', '2021-11-30 08:02:58'),
(2, 'Shariful Islam', 'admin', 'shariful_islam0606@yahoo.com', NULL, '01687295469', 1, 1, 1, '10470c3b4b1fed12c3baac014be15fac67c6e815', NULL, '2022-01-18 23:17:06', '2022-01-18 23:17:06');

-- --------------------------------------------------------

--
-- Table structure for table `volunteers`
--

CREATE TABLE `volunteers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `e_mail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `national_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profession` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volunteer_cat` int(11) NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chieldheadones`
--
ALTER TABLE `chieldheadones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chieldheadtwos`
--
ALTER TABLE `chieldheadtwos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `creditvoucherbkdns`
--
ALTER TABLE `creditvoucherbkdns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `creditvouchers`
--
ALTER TABLE `creditvouchers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `debitvoucherbkdns`
--
ALTER TABLE `debitvoucherbkdns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `debitvouchers`
--
ALTER TABLE `debitvouchers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donorfunds`
--
ALTER TABLE `donorfunds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donorvoucherbkdns`
--
ALTER TABLE `donorvoucherbkdns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donorvouchers`
--
ALTER TABLE `donorvouchers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `generalledgers`
--
ALTER TABLE `generalledgers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `generalvouchers`
--
ALTER TABLE `generalvouchers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `journalvoucherbkdns`
--
ALTER TABLE `journalvoucherbkdns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `journalvouchers`
--
ALTER TABLE `journalvouchers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masterheads`
--
ALTER TABLE `masterheads`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `patientfunds`
--
ALTER TABLE `patientfunds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_type_unique` (`type`),
  ADD UNIQUE KEY `roles_identity_unique` (`identity`);

--
-- Indexes for table `subheads`
--
ALTER TABLE `subheads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_contact_unique` (`contact`),
  ADD KEY `users_role_id_index` (`role_id`);

--
-- Indexes for table `volunteers`
--
ALTER TABLE `volunteers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chieldheadones`
--
ALTER TABLE `chieldheadones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `chieldheadtwos`
--
ALTER TABLE `chieldheadtwos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `creditvoucherbkdns`
--
ALTER TABLE `creditvoucherbkdns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `creditvouchers`
--
ALTER TABLE `creditvouchers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `debitvoucherbkdns`
--
ALTER TABLE `debitvoucherbkdns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `debitvouchers`
--
ALTER TABLE `debitvouchers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donorfunds`
--
ALTER TABLE `donorfunds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `donorvoucherbkdns`
--
ALTER TABLE `donorvoucherbkdns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `donorvouchers`
--
ALTER TABLE `donorvouchers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `generalledgers`
--
ALTER TABLE `generalledgers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `generalvouchers`
--
ALTER TABLE `generalvouchers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `journalvoucherbkdns`
--
ALTER TABLE `journalvoucherbkdns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `journalvouchers`
--
ALTER TABLE `journalvouchers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `masterheads`
--
ALTER TABLE `masterheads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `patientfunds`
--
ALTER TABLE `patientfunds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subheads`
--
ALTER TABLE `subheads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `volunteers`
--
ALTER TABLE `volunteers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
