-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2017 at 11:11 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `raj`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_desc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_desc`, `created_at`, `updated_at`) VALUES
(1, 'Fort', 'fort', '2017-12-02 05:29:30', '2017-12-02 05:29:30'),
(2, 'palace', 'palace', '2017-12-02 13:31:11', '2017-12-02 13:31:11'),
(3, 'garden', 'garden', '2017-12-02 13:31:30', '2017-12-02 13:31:30'),
(4, 'lake', 'lake', '2017-12-02 13:31:41', '2017-12-02 13:31:41'),
(5, 'monuments', NULL, '2017-12-02 13:32:00', '2017-12-02 13:32:00'),
(6, 'temple', 'temple', '2017-12-02 13:33:39', '2017-12-02 13:33:39');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2017_12_02_075543_create_places_table', 1),
(10, '2017_12_02_081451_create_categories_table', 1),
(11, '2017_12_02_081636_create_photos_table', 1),
(12, '2017_12_02_081825_create_sessions_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(10) UNSIGNED NOT NULL,
  `place_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo_desc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `place_id`, `photo`, `photo_name`, `photo_desc`, `created_at`, `updated_at`) VALUES
(3, '8', 'city 1.jpg', 'amer fort', NULL, '2017-12-02 14:03:15', '2017-12-02 14:03:15'),
(4, '9', 'city 2.jpg', 'Hawa Mahal', NULL, '2017-12-02 14:04:14', '2017-12-02 14:04:14'),
(6, '10', 'city 3.jpg', 'City Palace', NULL, '2017-12-02 14:05:36', '2017-12-02 14:05:36'),
(7, '4', 'city 4.jpg', 'Mandore Garden', NULL, '2017-12-02 14:05:54', '2017-12-02 14:05:54'),
(8, '5', 'city 5.JPG', 'Sagar Talab', NULL, '2017-12-02 14:06:14', '2017-12-02 14:06:14'),
(9, '13', 'city 6.jpg', 'Lake Pichola', NULL, '2017-12-02 14:06:54', '2017-12-02 14:06:54'),
(10, '6', 'city 7.jpg', 'Rao Jodha', NULL, '2017-12-02 14:07:23', '2017-12-02 14:07:23'),
(11, '11', 'city 8.JPG', 'Jantar Mantar', NULL, '2017-12-02 14:07:45', '2017-12-02 14:07:45'),
(12, '1', 'haldighati.jpg', 'Haldi Ghati', NULL, '2017-12-02 16:27:56', '2017-12-02 16:27:56');

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place_history` varchar(2056) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place_address` varchar(2056) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timing_open` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timing_close` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entry_fee` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`id`, `category_id`, `place_name`, `place_history`, `lang`, `lat`, `place_address`, `timing_open`, `timing_close`, `entry_fee`, `created_at`, `updated_at`) VALUES
(1, '1', 'Haldi Ghati Fort', 'Udaipur', '10.2200', '10.253', 'ajbfjag', '9.00', '10.00', '100', '2017-12-02 05:30:24', '2017-12-02 05:30:24'),
(2, '1', 'Mehrangarh', 'Mehrangarh, located in Jodhpur, Rajasthan, is one of the largest forts in India. Built around 1460 by Rao Jodha, the fort is situated 410 feet above the city and is enclosed by imposing thick walls', '26.2978', '73.0185', NULL, NULL, NULL, NULL, '2017-12-02 13:42:47', '2017-12-02 13:42:47'),
(3, '2', 'Umaid Bhawan Palace', ': Umaid Bhawan Palace. Umaid Bhawan Palace, located at Jodhpur in Rajasthan, India, is one of the world\'s largest private residences. A part of thepalace is managed by Taj Hotels. ... The Palace was built to provide employment to thousands of people during the time of famine.', '26.2811', '73.0477', 'Circuit House Rd, Cantt Area, Jodhpur, Rajasthan 342006', NULL, NULL, NULL, '2017-12-02 13:43:53', '2017-12-02 13:43:53'),
(4, '3', 'Mandore Garden', ': The \'Mandore gardens\', with its charming collection of temples and memorials, and its high rock terraces, is another major attraction. The gardens house the Chhatris (cenotaphs) of many rulers of Jodhpur state. Prominent among them is the chhatri of Maharaja Ajit Singh, built in 1793.', '26.3535', '73.0331', 'Mandore, Jodhpur, Rajasthan 342007', NULL, NULL, NULL, '2017-12-02 13:46:09', '2017-12-02 13:46:09'),
(5, '4', 'Gulab Sagar Talab', ': Gulab Sagar. Gulab Sagar Lake was actually constructed in a source of water storage in 1788 by Maharaja Vijay Singh, which is near Sadar market of Incredible Jodhpur, Rajasthan. It is around 150x90m in size which took approx 8years for completing the gulab sagar project.', '26.2969', '73.0245', 'Pal Haveli, Gulab Sagar Rd, Near Umed School, Rawaton Ka Bass, Jodhpur, Rajasthan 342001', NULL, NULL, NULL, '2017-12-02 13:47:16', '2017-12-02 13:47:16'),
(6, '5', 'Statue of Rao Jodha', ': Rao Jodha (28 March 1416 - 6 April 1489) was an Indian ruler of Mandore in the present-day .... References[edit]. Sharma, Dasharatha (1970). Lectures on Rajput History and Culture, Delhi:Motilal Banarsidass.', '26.30303700', '73.02263600', ': Lawaran, Jodhpur, Rajasthan 342001', NULL, NULL, NULL, '2017-12-02 13:48:42', '2017-12-02 13:48:42'),
(7, '2', 'una mahal, Dungarpur', ': Juna Mahal, a former royal residence, is located near the town ofDungarpur in the Thar Desert at the base of the picturesque Aravalli hills in southern Rajasthan. ...Juna Mahal was in use until the mid-twentieth century, after which the structure fell into a state of disrepair.\r\n:', '23.8284', '73.7158', 'Mohalla Ghati, Khadia, Dungarpur, Rajasthan 314001', NULL, NULL, NULL, '2017-12-02 13:50:06', '2017-12-02 13:50:06'),
(8, '2', 'Amer Fort', 'Amer Fort is a fort located in Amer, Rajasthan, India. Amer is a town with an area of 4 square kilometres located 11 kilometres from Jaipur, the capital of Rajasthan. Located high on a hill, it is the principal tourist attraction in the Jaipur area.', '26.9855', '75.8513', 'Devisinghpura, Amer, Jaipur, Rajasthan 302001', NULL, NULL, NULL, '2017-12-02 13:52:29', '2017-12-02 13:52:29'),
(9, '2', 'Hawa Mahal', 'Hawa Mahal is a palace in Jaipur, India, so it is named because it was essentially a high screen wall built so that the women of the royal family could observe street festivals while unseen from the outside.', '26.9239', '75.8267', NULL, NULL, NULL, NULL, '2017-12-02 13:53:21', '2017-12-02 13:53:21'),
(10, '2', 'City Palace', 'City Palace, Jaipur, which includes the Chandra Mahal and Mubarak Mahal palaces and other buildings, is a palace complex in Jaipur, the capital of the Rajasthan state, India.', '26.9258', '75.8237', 'Jaleb Chowk, Near Jantar Mantar, Tripolia Bazar, Jaipur, Rajasthan 302002', NULL, NULL, NULL, '2017-12-02 13:54:10', '2017-12-02 13:54:10'),
(11, '6', 'Jantar Mantar, Jaipur', 'The Jantar Mantar is an equinoctial sundial, consisting a gigantic triangular gnomon with the hypotenuse parallel to the Earth\'s axis. On either side of the gnomon is a quadrant of a circle, parallel to the plane of the equator.', '26.9248', '75.8246', 'Gangori Bazaar, J.D.A. Market, Kanwar Nagar, Jaipur, Rajasthan 302002', NULL, NULL, NULL, '2017-12-02 13:55:30', '2017-12-02 13:55:30'),
(12, '1', 'Jaigarh Fort', 'Jaigarh Fort is situated on the promontory called the Cheel ka Teela of the Aravalli range; it overlooks the Amber Fort and the Maota Lake, near Amber in Jaipur, Rajasthan, India.', '26.9851', '75.8456', 'Above Amber Fort, Jaipur, Rajasthan 302001', NULL, NULL, NULL, '2017-12-02 13:56:06', '2017-12-02 13:56:06'),
(13, '4', 'Lake Pichola', 'Lake Pichola, situated in Udaipur city in the Indian state of Rajasthan, is an artificial fresh water lake, created in the year 1362 AD, named after the nearby Picholi village.', '24.5720', '73.6790', NULL, NULL, NULL, NULL, '2017-12-02 13:56:46', '2017-12-02 13:56:46'),
(14, '6', 'Jag Mandir', 'Jag Mandir is a palace built on an island in the Lake Pichola. It is also called the \"Lake Garden Palace\". The palace is located in Udaipur city in the Indian state of Rajasthan.', '24.5676', '73.6778', 'Pichola, Udaipur, Rajasthan 313001', NULL, NULL, NULL, '2017-12-02 13:57:33', '2017-12-02 13:57:33');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('2VamYCQK5uMWkHJC5pF9ePT5okTSYrtvRRDcg6tW', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36', 'YTo0OntzOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjY6Il90b2tlbiI7czo0MDoid0h4T0RSY3o0SWdZeVlUbXExNnlyMDM0U1E5TWM3Y3RyclRpbkVIViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly9sb2NhbGhvc3QvcmFqL3B1YmxpYy9ob21lIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1512251883),
('yXSJx1dz7PXu9uskLwzOWfQaWruh7dpuvQc2CX5j', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.2743.116 Safari/537.36 Edge/15.15063', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTEpOZGVFT1NmbGo4aWczRTd0dldwWExmTVZmZkV1b2JXeFNwNFFBbSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly9sb2NhbGhvc3QvcmFqL3B1YmxpYy9ob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1512248293);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', '$2y$10$w/esW3TjWAzyvNcRI6dKAexC1XxkpMjcck2EowphW9TUo1eEKIgEW', 'K8Z4GSDN4giNZki7yxoABGuN9j9IK3cAPBP44MIiMKWiKtP3kUPKp6agh2rf', '2017-12-02 05:29:13', '2017-12-02 05:29:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD UNIQUE KEY `sessions_id_unique` (`id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
