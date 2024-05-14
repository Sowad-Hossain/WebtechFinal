-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2024 at 02:10 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online-book-shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `isbn` varchar(20) NOT NULL,
  `price` decimal(10,2) NOT NULL DEFAULT 0.00,
  `description` text NOT NULL DEFAULT '',
  `stock_quantity` int(11) NOT NULL DEFAULT 0,
  `imgdir` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `title`, `author`, `genre`, `isbn`, `price`, `description`, `stock_quantity`, `imgdir`) VALUES
(1, 'The Great Gatsby', 'F. Scott Fitzgerald', 'Classic', '978-0-7432-7356-5', 12.99, '11111          ', 50, 'vendor/book1.jpg'),
(2, 'To Kill a Mockingbird', 'Harper Lee', 'Classic', '978-0-06-112008-4', 10.99, 'The novel is renowned for its warmth and humor, despite dealing with serious issues such as racial inequality and rape.', 40, 'vendor/book2.jpg'),
(4, 'Pride and Prejudice', 'Jane Austen', 'Romance', '978-0-14-139140-3', 11.99, 'The story follows the main character Elizabeth Bennet as she deals with issues of manners, upbringing, morality, education, and marriage in the society of the landed gentry of the British Regency.', 55, 'vendor/book3.jpg'),
(5, 'The Catcher in the Rye', 'J.D. Salinger', 'Coming-of-age', '978-0-316-76948-4', 8.99, 'The novel details two days in the life of 16-year-old Holden Caulfield after he has been expelled from prep school.', 45, 'vendor/book4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `book_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `total_price` decimal(10,2) DEFAULT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('Pending','Completed','Cancelled','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `book_id`, `quantity`, `total_price`, `order_date`, `status`) VALUES
(1, 1, 1, 1, 0.00, '2024-05-10 15:36:08', 'Cancelled'),
(2, 1, 2, 1, 10.99, '2024-05-10 16:29:31', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `payment_methods`
--

CREATE TABLE `payment_methods` (
  `payment_method_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `card_type` varchar(50) NOT NULL DEFAULT '',
  `card_number` varchar(20) NOT NULL DEFAULT '',
  `expiry_date` date NOT NULL DEFAULT '9999-12-31',
  `cvv` varchar(5) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `rating_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `book_id` int(11) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `rating_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`rating_id`, `user_id`, `book_id`, `rating`, `rating_date`) VALUES
(1, 1, 1, 5, '2024-05-10 14:43:18'),
(2, 1, 1, 1, '2024-05-10 15:16:54'),
(3, 1, 1, 5, '2024-05-10 15:17:05'),
(4, 1, 1, 5, '2024-05-10 15:17:11'),
(5, 1, 1, 5, '2024-05-10 15:17:13'),
(6, 1, 1, 5, '2024-05-10 15:17:15'),
(7, 1, 1, 5, '2024-05-10 15:17:17'),
(8, 1, 1, 5, '2024-05-10 15:17:18'),
(9, 1, 1, 5, '2024-05-10 15:17:20'),
(10, 1, 1, 5, '2024-05-10 15:17:22'),
(11, 1, 1, 1, '2024-05-10 15:17:24'),
(12, 1, 1, 1, '2024-05-10 15:17:25'),
(13, 1, 1, 1, '2024-05-10 15:17:27'),
(14, 1, 2, 5, '2024-05-10 16:29:45');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `book_id` int(11) DEFAULT NULL,
  `review_text` text DEFAULT NULL,
  `review_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review_id`, `user_id`, `book_id`, `review_text`, `review_date`) VALUES
(1, 1, 1, 'Are osthir book', '2024-05-10 15:46:08'),
(3, 1, 1, 'osthir', '2024-05-10 15:54:40'),
(4, 1, 1, '0000000', '2024-05-10 15:55:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('Customer','Admin','Manager','Employee') NOT NULL DEFAULT 'Customer',
  `status` enum('Active','Inactive','Pending') NOT NULL DEFAULT 'Active',
  `full_name` varchar(255) NOT NULL DEFAULT '',
  `nid` varchar(20) NOT NULL DEFAULT '',
  `address` varchar(255) NOT NULL,
  `mobile_number` varchar(20) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `role`, `status`, `full_name`, `nid`, `address`, `mobile_number`) VALUES
(1, 'Nila', 'nila@gmail.com', 'asdfghjkl', 'Customer', 'Active', 'Nilar', '987654321', 'khilga, Dhaka', '12354698741'),
(2, 'admin', 'admin@gmail.com', 'admin', 'Admin', 'Active', 'ADMINADMIN', '123-654-789', 'Bagichar bagane', '1230215698'),
(11, 'yasin', 'yasin@gmail.com', 'asdfghjkl', 'Employee', 'Active', 'Yasin islam', '1234567890', '', '01706210750'),
(12, 'yasin66', 'yasin@gmail.com', 'asdfghjkl', 'Employee', 'Active', 'Yasin islam', '1234567890', '', '01706210750'),
(13, 'yasin', 'yasin@gmail.com', 'asdfghjkl', 'Employee', 'Active', 'yasin ahmed', '1234567890', '', '01706210750'),
(23, 'nilima', 'nilima@gmail.com', 'asdfghjkl', 'Customer', 'Active', 'nilima', '1234567890', 'Basundhara R/A house 166 floor 2B block g road  8', '01706210750');

-- --------------------------------------------------------

--
-- Table structure for table `user_attendance`
--

CREATE TABLE `user_attendance` (
  `user_id` int(11) NOT NULL,
  `attendance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_attendance`
--

INSERT INTO `user_attendance` (`user_id`, `attendance`) VALUES
(5, 16),
(6, 2),
(9, 2);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `wishlist_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`wishlist_id`, `user_id`, `book_id`) VALUES
(11, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `payment_methods`
--
ALTER TABLE `payment_methods`
  ADD PRIMARY KEY (`payment_method_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`rating_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`wishlist_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `book_id` (`book_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment_methods`
--
ALTER TABLE `payment_methods`
  MODIFY `payment_method_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `rating_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `wishlist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `books` (`book_id`);

--
-- Constraints for table `payment_methods`
--
ALTER TABLE `payment_methods`
  ADD CONSTRAINT `payment_methods_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `rating_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `books` (`book_id`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `books` (`book_id`);

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `wishlist_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `books` (`book_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
