-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 30, 2023 at 10:47 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `panjibook`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobileNo` bigint NOT NULL,
  `emailID` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(255) NOT NULL,
  `roleID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `mobileNo`, `emailID`, `password`, `roleID`) VALUES
(1, 'Golam Gous', 9087655443, 'golam@gmail.com', '123', 1),
(2, 'Shekhar Roy', 8927672725, 'shekar@gmail.com', '123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE `offer` (
  `offerID` int NOT NULL,
  `name` varchar(150) NOT NULL,
  `description` varchar(200) NOT NULL,
  `season` enum('autumn','winter','summer','spring') NOT NULL,
  `festival` enum('big billons','mega offer','puja offer') NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `discount` int NOT NULL,
  `status` enum('active','disable') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `offer`
--

INSERT INTO `offer` (`offerID`, `name`, `description`, `season`, `festival`, `startDate`, `endDate`, `discount`, `status`) VALUES
(1, 'Winter Clearance', 'Get amazing discounts on winter items', 'winter', 'mega offer', '2023-01-01', '2023-01-31', 20, 'active'),
(2, 'Summer Sale', 'Enjoy hot deals on summer essentials', 'summer', 'big billons', '2023-06-01', '2023-06-30', 15, 'active'),
(3, 'Autumn Special', 'Fall in love with our autumn collection', 'autumn', 'puja offer', '2023-09-01', '2023-09-30', 25, 'active'),
(4, 'Holiday Extravaganza', 'Celebrate the season with exclusive offers', 'winter', 'mega offer', '2023-12-01', '2023-12-31', 30, 'disable'),
(5, 'Spring Fling', 'Blossoming deals on springtime favorites', 'spring', 'big billons', '2023-03-01', '2023-03-31', 18, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `orderitems`
--

CREATE TABLE `orderitems` (
  `orderItemID` int NOT NULL,
  `orderID` int NOT NULL,
  `productID` int NOT NULL,
  `Quantity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `orderitems`
--

INSERT INTO `orderitems` (`orderItemID`, `orderID`, `productID`, `Quantity`) VALUES
(1, 101, 201, 5),
(2, 101, 202, 3),
(3, 102, 203, 2),
(4, 103, 201, 7),
(5, 104, 204, 1),
(6, 105, 205, 4),
(7, 105, 206, 2),
(8, 106, 207, 6),
(9, 106, 208, 3),
(10, 107, 209, 1),
(11, 108, 210, 5),
(12, 108, 211, 2),
(13, 109, 212, 3),
(14, 110, 213, 4),
(15, 110, 214, 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` int NOT NULL,
  `partnerID` int NOT NULL,
  `userID` int NOT NULL,
  `orderDate` datetime NOT NULL,
  `totalAmount` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderID`, `partnerID`, `userID`, `orderDate`, `totalAmount`) VALUES
(101, 3, 1, '2023-01-15 10:30:00', 150),
(102, 1, 2, '2023-02-20 14:45:00', 200),
(103, 3, 1, '2023-03-05 09:15:00', 120),
(104, 2, 3, '2023-04-10 16:00:00', 80),
(105, 2, 2, '2023-05-25 12:00:00', 300),
(106, 1, 1, '2023-06-08 18:30:00', 180),
(107, 3, 3, '2023-07-15 08:45:00', 90),
(108, 2, 2, '2023-08-22 11:20:00', 250),
(109, 2, 1, '2023-09-30 13:00:00', 200),
(110, 1, 3, '2023-10-12 15:45:00', 160);

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `partnerID` int NOT NULL,
  `partnerName` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `countryCode` int NOT NULL,
  `mobileNo` bigint NOT NULL,
  `emailID` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `planID` int NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `roleID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`partnerID`, `partnerName`, `address`, `countryCode`, `mobileNo`, `emailID`, `planID`, `password`, `roleID`) VALUES
(1, 'ABC Electronics', '123 Main St', 1, 1234567899, 'abc@example.com', 1, 'password1', 2),
(2, 'XYZ Solutions', '456 Oak St', 2, 987654321, 'xyz@example.com', 2, 'password2', 2),
(3, 'PQR Services', '789 Maple St', 3, 5555555555, 'pqr@example.com', 1, 'password3', 2),
(4, 'LMN Technologies', '321 Pine St', 1, 1111111111, 'lmn@example.com', 3, 'password4', 2),
(5, 'EFG Innovations', '654 Birch St', 2, 9999999999, 'efg@example.com', 2, 'password5', 2),
(6, 'GHI Solutions', '987 Cedar St', 3, 7777777777, 'ghi@example.com', 1, 'password6', 2),
(7, 'JKL Enterprises', '456 Elm St', 1, 8888888888, 'jkl@example.com', 3, 'password7', 2),
(8, 'MNO Systems', '789 Walnut St', 2, 4444444444, 'mno@example.com', 2, 'password8', 2),
(9, 'RST Technologies', '321 Spruce St', 2, 6666666666, 'rst@example.com', 1, 'password9', 2),
(10, 'UVW Solutions', '654 Pine St', 1, 2222222222, 'uvw@example.com', 2, 'password10', 2);

-- --------------------------------------------------------

--
-- Table structure for table `partner_user`
--

CREATE TABLE `partner_user` (
  `partnerID` int NOT NULL,
  `userID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `partner_user`
--

INSERT INTO `partner_user` (`partnerID`, `userID`) VALUES
(1, 1),
(3, 1),
(5, 1),
(2, 2),
(4, 2),
(1, 3),
(3, 3),
(5, 3),
(2, 4),
(4, 4),
(1, 5),
(3, 5),
(5, 5),
(2, 6),
(4, 6),
(1, 7),
(3, 7),
(5, 7),
(2, 8),
(4, 8),
(1, 9),
(3, 9),
(5, 9),
(2, 10),
(4, 10);

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE `price` (
  `priceID` int NOT NULL,
  `productID` int NOT NULL,
  `price` int NOT NULL,
  `startDate` datetime NOT NULL,
  `endDate` datetime NOT NULL,
  `ExpireDate` datetime NOT NULL,
  `status` enum('active','disable') NOT NULL,
  `offerID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`priceID`, `productID`, `price`, `startDate`, `endDate`, `ExpireDate`, `status`, `offerID`) VALUES
(301, 201, 100, '2023-01-01 00:00:00', '2023-02-01 23:59:59', '2023-02-15 23:59:59', 'active', 1),
(302, 202, 150, '2023-02-01 00:00:00', '2023-03-01 23:59:59', '2023-03-15 23:59:59', 'active', 2),
(303, 203, 200, '2023-03-01 00:00:00', '2023-04-01 23:59:59', '2023-04-15 23:59:59', 'active', 3),
(304, 204, 80, '2023-04-01 00:00:00', '2023-05-01 23:59:59', '2023-05-15 23:59:59', 'active', 4),
(305, 205, 250, '2023-05-01 00:00:00', '2023-06-01 23:59:59', '2023-06-15 23:59:59', 'active', 5),
(306, 206, 120, '2023-06-01 00:00:00', '2023-07-01 23:59:59', '2023-07-15 23:59:59', 'active', 6),
(307, 207, 180, '2023-07-01 00:00:00', '2023-08-01 23:59:59', '2023-08-15 23:59:59', 'active', 7),
(308, 208, 300, '2023-08-01 00:00:00', '2023-09-01 23:59:59', '2023-09-15 23:59:59', 'active', 8),
(309, 209, 90, '2023-09-01 00:00:00', '2023-10-01 23:59:59', '2023-10-15 23:59:59', 'active', 9),
(310, 210, 200, '2023-10-01 00:00:00', '2023-11-01 23:59:59', '2023-11-15 23:59:59', 'active', 10),
(311, 211, 120, '2023-01-01 00:00:00', '2023-02-01 23:59:59', '2023-02-15 23:59:59', 'active', 11),
(312, 212, 180, '2023-02-01 00:00:00', '2023-03-01 23:59:59', '2023-03-15 23:59:59', 'active', 12),
(313, 213, 250, '2023-03-01 00:00:00', '2023-04-01 23:59:59', '2023-04-15 23:59:59', 'active', 13),
(314, 214, 150, '2023-04-01 00:00:00', '2023-05-01 23:59:59', '2023-05-15 23:59:59', 'active', 14),
(315, 215, 200, '2023-05-01 00:00:00', '2023-06-01 23:59:59', '2023-06-15 23:59:59', 'active', 15),
(316, 216, 100, '2023-06-01 00:00:00', '2023-07-01 23:59:59', '2023-07-15 23:59:59', 'active', 16),
(317, 217, 300, '2023-07-01 00:00:00', '2023-08-01 23:59:59', '2023-08-15 23:59:59', 'active', 17),
(318, 218, 80, '2023-08-01 00:00:00', '2023-09-01 23:59:59', '2023-09-15 23:59:59', 'active', 18),
(319, 219, 160, '2023-09-01 00:00:00', '2023-10-01 23:59:59', '2023-10-15 23:59:59', 'active', 19),
(320, 220, 220, '2023-10-01 00:00:00', '2023-11-01 23:59:59', '2023-11-15 23:59:59', 'active', 20);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productID` int NOT NULL,
  `partnerID` int NOT NULL,
  `productName` varchar(100) NOT NULL,
  `description` varchar(150) NOT NULL,
  `productQuantity` int NOT NULL,
  `status` enum('available','out of stock') NOT NULL,
  `stockQuantity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productID`, `partnerID`, `productName`, `description`, `productQuantity`, `status`, `stockQuantity`) VALUES
(201, 1, 'Product A', 'High-quality product with great features', 50, 'available', 50),
(202, 2, 'Product B', 'Versatile and durable product for various needs', 30, 'available', 30),
(203, 1, 'Product C', 'Premium product designed for excellence', 20, 'available', 20),
(204, 3, 'Product D', 'Innovative and modern product for tech enthusiasts', 10, 'available', 10),
(205, 2, 'Product E', 'Sleek and stylish product with advanced functionality', 15, 'available', 15),
(206, 1, 'Product F', 'Compact and efficient product for everyday use', 25, 'available', 25),
(207, 3, 'Product G', 'Cutting-edge technology in a compact form factor', 12, 'available', 12),
(208, 2, 'Product H', 'Reliable and sturdy product for long-term use', 18, 'available', 18),
(209, 1, 'Product I', 'Eco-friendly and sustainable product option', 22, 'available', 22),
(210, 3, 'Product J', 'High-performance product for demanding applications', 8, 'available', 8),
(211, 2, 'Product K', 'Versatile product for everyday needs', 35, 'available', 35),
(212, 1, 'Product L', 'Elegant design with advanced features', 28, 'available', 28),
(213, 3, 'Product M', 'Compact and portable product for on-the-go use', 17, 'available', 17),
(214, 2, 'Product N', 'Modern and stylish product with premium materials', 12, 'available', 12),
(215, 1, 'Product O', 'Innovative technology for enhanced performance', 25, 'available', 25),
(216, 3, 'Product P', 'Durable and robust product for industrial use', 10, 'available', 10),
(217, 2, 'Product Q', 'High-quality materials for a reliable user experience', 20, 'available', 20),
(218, 1, 'Product R', 'Sleek and slim design for a modern lifestyle', 15, 'available', 15),
(219, 3, 'Product S', 'Efficient and powerful product for professional use', 18, 'available', 18),
(220, 2, 'Product T', 'Smart and connected product for the IoT era', 22, 'available', 22),
(221, 1, 'Product U', 'Energy-efficient product with eco-friendly features', 30, 'available', 30),
(222, 3, 'Product V', 'Versatile and customizable product for various applications', 14, 'available', 14),
(223, 2, 'Product W', 'Classic design with modern functionality', 26, 'available', 26),
(224, 1, 'Product X', 'Advanced technology packed into a compact form factor', 8, 'available', 8),
(225, 3, 'Product Y', 'Premium materials and craftsmanship for a luxurious experience', 13, 'available', 13),
(226, 2, 'Product Z', 'Innovative features for a cutting-edge user experience', 19, 'available', 19);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `roleID` int NOT NULL,
  `role` enum('admin','vendor','client') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`roleID`, `role`) VALUES
(1, 'admin'),
(2, 'vendor'),
(3, 'client');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `serviceID` int NOT NULL,
  `serviceName` varchar(255) NOT NULL,
  `feature` varchar(255) NOT NULL,
  `status` enum('active','disable') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`serviceID`, `serviceName`, `feature`, `status`) VALUES
(1, 'Sync data across devices', 'Synchronize data across multiple devices', 'active'),
(2, 'Create multiple companies', 'Ability to create and manage multiple companies', 'active'),
(3, 'Remove advertisement on invoices', 'Remove ads from generated invoices', 'active'),
(4, 'Set multiple pricing for items', 'Assign different prices for items', 'active'),
(5, 'Quick Billing', 'Fast and efficient billing process', 'active'),
(6, 'Restore deleted transactions', 'Recover deleted transactions', 'active'),
(7, 'Update Items in bulk', 'Bulk update of items in the system', 'active'),
(8, 'Export data to Tally', 'Export financial data to Tally software', 'active'),
(9, 'Generate E-way Bills', 'Generate electronic way bills for transportation of goods', 'active'),
(10, 'Generate barcodes for items', 'Create barcodes for items in the inventory', 'active'),
(11, 'Set credit limit for parties', 'Define credit limits for customer parties', 'active'),
(12, 'Add Fixed Assets', 'Record and manage fixed assets', 'active'),
(13, 'Billwise Profit and Loss Reports', 'Generate profit and loss reports on a billwise basis', 'active'),
(14, 'Partywise Profit and Loss Report', 'Generate profit and loss reports on a partywise basis', 'active'),
(15, 'Balance Sheet', 'Generate a balance sheet for financial reporting', 'active'),
(16, 'Item Batch Report', 'Generate a report on item batches', 'active'),
(17, 'Item Serial Report', 'Generate a report on item serial numbers', 'active'),
(18, 'Create Multiple Firms', 'Ability to create and manage multiple business firms', 'active'),
(19, 'Add Expenses with input tax credit', 'Record expenses with consideration of input tax credit', 'active'),
(20, 'Add TCS on invoices', 'Include Tax Collected at Source on invoices', 'active'),
(21, 'Check Profit on Invoices', 'Calculate profit margins on invoices', 'active'),
(22, 'Add additional fields to items', 'Customize items with additional fields', 'active'),
(23, 'Keep different rates for each party', 'Set different pricing rates for each customer party', 'active'),
(24, 'Send transaction message to self', 'Send transaction-related messages to oneself', 'active'),
(25, 'Send message on updating any transaction', 'Receive notifications on updating transactions', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `planID` int NOT NULL,
  `planType` varchar(255) NOT NULL,
  `PlanDescription` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `serviceID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`planID`, `planType`, `PlanDescription`, `serviceID`) VALUES
(101, 'Basic Plan', 'Standard features with basic service', 201),
(102, 'Premium Plan', 'Advanced features with premium service', 202),
(103, 'Business Plan', 'Comprehensive features for business users', 203);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transactionID` int NOT NULL,
  `partnerID` int NOT NULL,
  `userID` int NOT NULL,
  `transactionDate` timestamp NOT NULL,
  `totalAmount` int NOT NULL,
  `paymentStatus` enum('successfull','fail') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transactionID`, `partnerID`, `userID`, `transactionDate`, `totalAmount`, `paymentStatus`) VALUES
(301, 1, 3, '2023-01-15 05:00:00', 200, 'successfull'),
(302, 2, 2, '2023-02-20 09:15:00', 150, 'successfull'),
(303, 1, 3, '2023-03-05 03:45:00', 300, 'successfull'),
(304, 3, 1, '2023-04-10 10:30:00', 120, 'successfull'),
(305, 1, 3, '2023-05-25 06:30:00', 180, 'successfull'),
(306, 1, 5, '2023-06-08 13:00:00', 250, 'successfull'),
(307, 3, 3, '2023-07-15 03:15:00', 90, 'fail'),
(308, 2, 4, '2023-08-22 05:50:00', 160, 'successfull'),
(309, 1, 1, '2023-09-30 07:30:00', 220, 'successfull'),
(310, 1, 1, '2023-10-12 10:15:00', 180, 'successfull'),
(311, 2, 2, '2023-01-01 07:00:00', 120, 'successfull'),
(312, 1, 1, '2023-02-01 09:15:00', 180, 'successfull'),
(313, 3, 7, '2023-03-01 03:45:00', 220, 'successfull'),
(314, 2, 2, '2023-04-01 10:30:00', 90, 'successfull'),
(315, 1, 3, '2023-05-01 13:00:00', 300, 'fail'),
(316, 3, 1, '2023-06-01 03:15:00', 150, 'successfull'),
(317, 2, 4, '2023-07-01 05:50:00', 200, 'successfull'),
(318, 1, 1, '2023-08-01 07:30:00', 120, 'successfull'),
(319, 3, 5, '2023-09-01 10:15:00', 250, 'successfull'),
(320, 2, 2, '2023-10-01 04:30:00', 180, 'successfull');

-- --------------------------------------------------------

--
-- Table structure for table `transactionitem`
--

CREATE TABLE `transactionitem` (
  `transactionItemsID` int NOT NULL,
  `transactionID` int NOT NULL,
  `productID` int NOT NULL,
  `productQuantity` int NOT NULL,
  `priceID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `transactionitem`
--

INSERT INTO `transactionitem` (`transactionItemsID`, `transactionID`, `productID`, `productQuantity`, `priceID`) VALUES
(401, 301, 201, 2, 301),
(402, 301, 202, 1, 302),
(403, 302, 203, 3, 303),
(404, 303, 201, 5, 304),
(405, 304, 204, 1, 305),
(406, 305, 205, 4, 306),
(407, 306, 206, 2, 307),
(408, 307, 207, 6, 308),
(409, 308, 208, 3, 309),
(410, 309, 209, 1, 310);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int NOT NULL,
  `userName` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `address` varchar(50) NOT NULL,
  `countryCode` int NOT NULL,
  `mobileNo` bigint NOT NULL,
  `emailID` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `roleID` int NOT NULL,
  `loginTime` datetime DEFAULT NULL,
  `status` enum('active','disable') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `userName`, `address`, `countryCode`, `mobileNo`, `emailID`, `password`, `roleID`, `loginTime`, `status`) VALUES
(1, 'JohnDoe', '123 Main St', 1, 1234567890, 'john.doe@example.com', 'password123', 3, '2023-01-01 12:00:00', 'active'),
(2, 'JaneSmith', '456 Oak Ave', 1, 9876543210, 'jane.smith@example.com', 'pass456', 3, '2023-01-02 14:30:00', 'active'),
(3, 'BobJohnson', '789 Pine Rd', 2, 5551234567, 'bob.johnson@example.com', 'secure789', 3, '2023-01-03 10:45:00', 'active'),
(4, 'AliceWilliams', '321 Cedar Ln', 3, 9998887777, 'alice.williams@example.com', 'p@ssw0rd', 3, '2023-01-04 08:15:00', 'active'),
(5, 'CharlieBrown', '555 Elm St', 2, 4445556666, 'charlie.brown@example.com', 'letmein', 3, '2023-01-05 16:20:00', 'active'),
(6, 'EveJohnson', '888 Birch Ave', 3, 111222333333, 'eve.johnson@example.com', 'qwerty', 3, '2023-01-06 18:00:00', 'disable'),
(7, 'SamSmith', '777 Maple Rd', 1, 6667778888, 'sam.smith@example.com', 'password123', 3, '2023-01-07 09:30:00', 'disable'),
(8, 'GraceDavis', '222 Walnut Ln', 2, 3334445555, 'grace.davis@example.com', 'pass456', 3, '2023-01-08 11:45:00', 'active'),
(9, 'MaxMiller', '999 Pine Ave', 3, 8889990000, 'max.miller@example.com', 'secure789', 3, '2023-01-09 13:15:00', 'active'),
(10, 'OliviaBrown', '444 Oak Rd', 1, 2223334444, 'olivia.brown@example.com', 'p@ssw0rd', 3, '2023-01-10 15:00:00', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `visitorID` int NOT NULL,
  `countryCode` int NOT NULL,
  `mobileNo` bigint NOT NULL,
  `loginDate` date NOT NULL,
  `productID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`visitorID`, `countryCode`, `mobileNo`, `loginDate`, `productID`) VALUES
(501, 1, 1234567890, '2023-01-15', 201),
(502, 2, 9876543210, '2023-02-20', 202),
(503, 3, 5555555555, '2023-03-05', 203),
(504, 1, 1111111111, '2023-04-10', 204),
(505, 2, 9999999999, '2023-05-25', 205),
(506, 3, 7777777777, '2023-06-08', 206),
(507, 1, 8888888888, '2023-07-15', 207),
(508, 2, 4444444444, '2023-08-22', 208),
(509, 3, 6666666666, '2023-09-30', 209),
(510, 1, 2222222222, '2023-10-12', 210);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderitems`
--
ALTER TABLE `orderitems`
  ADD PRIMARY KEY (`orderItemID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`partnerID`);

--
-- Indexes for table `partner_user`
--
ALTER TABLE `partner_user`
  ADD PRIMARY KEY (`partnerID`,`userID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`serviceID`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`planID`),
  ADD UNIQUE KEY `serviceID` (`serviceID`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transactionID`);

--
-- Indexes for table `transactionitem`
--
ALTER TABLE `transactionitem`
  ADD PRIMARY KEY (`transactionItemsID`),
  ADD UNIQUE KEY `priceID` (`priceID`),
  ADD KEY `transactionID` (`transactionID`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`visitorID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `partnerID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `serviceID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `planID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `partner_user`
--
ALTER TABLE `partner_user`
  ADD CONSTRAINT `partner_user_ibfk_1` FOREIGN KEY (`partnerID`) REFERENCES `partners` (`partnerID`),
  ADD CONSTRAINT `partner_user_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
