-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2021 at 01:24 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lg-supermarket`
--

-- --------------------------------------------------------

--
-- Table structure for table `lgs-customers`
--

CREATE TABLE `lgs-customers` (
  `customer_id` int(10) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `contact_number` varchar(50) NOT NULL,
  `customer_address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lgs-deliveries`
--

CREATE TABLE `lgs-deliveries` (
  `transaction_id` int(10) NOT NULL,
  `receipt_number` varchar(50) NOT NULL,
  `product_barcode` varchar(50) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_description` varchar(250) NOT NULL,
  `product_quantity` varchar(50) NOT NULL,
  `cost_per_item` varchar(50) NOT NULL,
  `supplier_code` varchar(50) NOT NULL,
  `supplier_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lgs-deliveries`
--

INSERT INTO `lgs-deliveries` (`transaction_id`, `receipt_number`, `product_barcode`, `product_name`, `product_description`, `product_quantity`, `cost_per_item`, `supplier_code`, `supplier_name`) VALUES
(4, '0001', '115-000-001', 'Viva', 'Bottled Water', '500', '10', '12-001', 'Uniliver');

-- --------------------------------------------------------

--
-- Table structure for table `lgs-sales`
--

CREATE TABLE `lgs-sales` (
  `transaction_id` int(50) NOT NULL,
  `receipt_number` varchar(50) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_quantity` varchar(50) NOT NULL,
  `unit_price` varchar(50) NOT NULL,
  `customer_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lgs-suppliers`
--

CREATE TABLE `lgs-suppliers` (
  `supplier_id` int(10) NOT NULL,
  `supplier_code` varchar(50) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `contact_number` varchar(50) NOT NULL,
  `company_address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lgs-suppliers`
--

INSERT INTO `lgs-suppliers` (`supplier_id`, `supplier_code`, `company_name`, `contact_number`, `company_address`) VALUES
(2, '12-001', 'Uniliver', '63-999-252-4339', 'Manila');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lgs-customers`
--
ALTER TABLE `lgs-customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `lgs-deliveries`
--
ALTER TABLE `lgs-deliveries`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `lgs-sales`
--
ALTER TABLE `lgs-sales`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `lgs-suppliers`
--
ALTER TABLE `lgs-suppliers`
  ADD PRIMARY KEY (`supplier_id`),
  ADD UNIQUE KEY `unique_code` (`supplier_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lgs-customers`
--
ALTER TABLE `lgs-customers`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `lgs-deliveries`
--
ALTER TABLE `lgs-deliveries`
  MODIFY `transaction_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lgs-sales`
--
ALTER TABLE `lgs-sales`
  MODIFY `transaction_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `lgs-suppliers`
--
ALTER TABLE `lgs-suppliers`
  MODIFY `supplier_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
