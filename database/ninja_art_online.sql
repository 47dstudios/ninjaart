-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Aug 23, 2020 at 11:00 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ninja_art_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(15) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_desc` longtext NOT NULL,
  `price` int(10) NOT NULL,
  `units` int(5) NOT NULL,
  `total` int(15) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `email` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_code`, `product_name`, `product_desc`, `price`, `units`, `total`, `date`, `email`) VALUES
(1, 'oil_pastel', 'Oil Pastel', 'Oil pastel (also called wax oil crayon) is a painting and drawing medium with characteristics similar to pastels and wax crayons. Unlike \"soft\" or \"Japanese\" pastel sticks, which are made with a gum or methyl cellulose binder, oil pastels consist of pigment mixed with a non-drying oil and wax binder. The surface of an oil pastel painting is therefore less powdery, but more difficult to protect with a fixative. Oil pastels provide a harder edge than \"soft\" or \"French\" pastels but are more difficult to blend.', 20000, 5, 100000, '2020-08-23 21:17:34', 'test@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_code` varchar(60) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `product_desc` longtext NOT NULL,
  `product_img_name` varchar(65000) NOT NULL,
  `qty` int(5) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_code`, `product_name`, `product_desc`, `product_img_name`, `qty`, `price`) VALUES
(1, 'pencil_drawing', 'Pencil Drawing', 'Pencil drawing, drawing executed with an instrument composed of graphite enclosed in a wood casing and intended either as a sketch for a more elaborate work in another medium, an exercise in visual expression, or a finished work. The cylindrical graphite pencil, because of its usefulness in easily producing linear gray-black strokes, became the successor of the older, metallic drawing stylus, with which late medieval and Renaissance artists and tradesmen sketched or wrote on paper, parchment, or wood.', 'ninjaartlogo.png', 157, '10000.00'),
(2, 'oil_pastel', 'Oil Pastel', 'Oil pastel (also called wax oil crayon) is a painting and drawing medium with characteristics similar to pastels and wax crayons. Unlike \"soft\" or \"Japanese\" pastel sticks, which are made with a gum or methyl cellulose binder, oil pastels consist of pigment mixed with a non-drying oil and wax binder. The surface of an oil pastel painting is therefore less powdery, but more difficult to protect with a fixative. Oil pastels provide a harder edge than \"soft\" or \"French\" pastels but are more difficult to blend.', 'https://cloudinary.com/console/c-6a47fc026a649edd484d8fb10cf197/media_library/folders/home/asset/a7ab422bcc7fbcf0de1abb127c2cd746/manage/summary', 48, '20000.00'),
(3, 'watercolor', 'Watercolor', 'Watercolour, also spelled Watercolor, pigment ground in gum, usually gum arabic, and applied with brush and water to a painting surface, usually paper; the term also denotes a work of art executed in this medium. The pigment is ordinarily transparent but can be made opaque by mixing with a whiting and in this form is known as body colour, or gouache (q.v.); it can also be mixed with casein, a phosphoprotein of milk.', 'ninjaartlogo.png', 42, '50000.00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `pin` int(6) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(15) NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `address`, `city`, `pin`, `email`, `password`, `type`) VALUES
(1, 'Admin', 'Admin', 'Metro Manila', 'Manila', 1000, 'admin@capstone.com', '12341234', 'admin'),
(2, 'Skye', 'Morrison', 'Metro Manila', 'Taguig', 1634, 'skyemorrison@gmail.com', '12341234', 'user'),
(5, 'test', 'test', 'test', 'test', 1234, 'jscosto@gmail.com', '12341234', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`product_code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
