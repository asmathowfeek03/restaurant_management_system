-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Oct 05, 2023 at 07:09 AM
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
-- Database: `restaurent`
--

-- --------------------------------------------------------

--
-- Table structure for table `breakfasts`
--

CREATE TABLE `breakfasts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `btitle` varchar(255) DEFAULT NULL,
  `bprice` varchar(255) DEFAULT NULL,
  `bimage` varchar(255) DEFAULT NULL,
  `bdescription` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `breakfasts`
--

INSERT INTO `breakfasts` (`id`, `btitle`, `bprice`, `bimage`, `bdescription`, `created_at`, `updated_at`) VALUES
(1, 'Eggs Omelette', '250/=', '1696396498.png', 'Eggs Omelette: A fluffy and savory breakfast classic', '2023-10-03 12:51:39', '2023-10-04 06:14:44'),
(2, 'Dollma Pire', '700/=', '1696357373.png', 'Dollma Pire: A culinary adventure that tantalizes the senses.', '2023-10-03 12:52:53', '2023-10-03 12:52:53'),
(3, 'Omelette & Cheese', '400/=', '1696357445.png', 'Omelette & Cheese: A perfect blend of comfort and flavor.', '2023-10-03 12:54:05', '2023-10-03 12:54:05'),
(4, 'Fresh Chicken Salad', '1540/=', '1696357498.png', 'Fresh Chicken Salad: Crisp, flavorful bites for a healthy delight.', '2023-10-03 12:54:58', '2023-10-03 12:54:58'),
(5, 'Orange Juice', '400/=', '1696357530.png', 'Orange Juice: Zesty sunshine in every refreshing sip.', '2023-10-03 12:55:30', '2023-10-03 12:55:30'),
(8, 'Fruit Salad', '700/=', '1696419837.png', 'Fruit Salad: Nature\'s vibrant medley on your plate.', '2023-10-04 06:13:57', '2023-10-04 06:13:57');

-- --------------------------------------------------------

--
-- Table structure for table `dinners`
--

CREATE TABLE `dinners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dtitle` varchar(255) DEFAULT NULL,
  `dprice` varchar(255) DEFAULT NULL,
  `dimage` varchar(255) DEFAULT NULL,
  `ddescription` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dinners`
--

INSERT INTO `dinners` (`id`, `dtitle`, `dprice`, `dimage`, `ddescription`, `created_at`, `updated_at`) VALUES
(1, 'Eggs Omelette', '200/=', '1696390831.png', 'Eggs Omelette: A fluffy and savory breakfast classic', '2023-10-03 22:10:31', '2023-10-03 22:10:31'),
(2, 'Orange Juice', '400/=', '1696390862.png', 'Orange Juice: Zesty sunshine in every refreshing sip.', '2023-10-03 22:11:02', '2023-10-03 22:11:02'),
(3, 'Fruit Salad', '700/=', '1696390906.png', 'Fruit Salad: Nature\'s vibrant medley on your plate.', '2023-10-03 22:11:46', '2023-10-03 23:50:29'),
(4, 'Fresh Chicken Salad', '1540/=', '1696390963.png', 'Fresh Chicken Salad: Crisp, flavorful bites for a healthy delight.', '2023-10-03 22:12:43', '2023-10-03 22:12:43'),
(5, 'Dollma Pire', '700/=', '1696391000.png', 'Dollma Pire: A culinary adventure that tantalizes the senses.', '2023-10-03 22:13:20', '2023-10-03 22:13:20'),
(7, 'Omelette & Cheese', '400/=', '1696400268.png', 'Omelette & Cheese: A perfect blend of comfort and flavor.', '2023-10-04 00:47:48', '2023-10-04 00:47:48');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `title`, `price`, `image`, `description`, `created_at`, `updated_at`) VALUES
(8, 'Vanilla Bliss', '800/=', '1696262765.jpg', 'A classic vanilla cake with a heavenly, fluffy texture.', '2023-09-29 13:36:42', '2023-10-02 10:36:05'),
(14, 'Chocolate Delight', '890/=', '1696263799.jpg', 'A rich cake which melts in your mouth.', '2023-10-02 10:39:36', '2023-10-02 10:53:19'),
(15, 'Red Velvet', '1200/=', '1696263701.jpg', 'blend of cocoa and cream cheese frosting.', '2023-10-02 10:51:41', '2023-10-02 10:51:41'),
(16, 'Lemon Zest', '550/=', '1696263891.jpg', 'Burst of sunshine in every bite.', '2023-10-02 10:54:51', '2023-10-02 10:54:51'),
(17, 'Coffee Caramel', '1380/=', '1696263957.jpg', 'Savor the bold flavors of coffee and caramel', '2023-10-02 10:55:57', '2023-10-02 10:55:57'),
(18, 'Carrot Crunch', '750/=', '1696264062.jpg', 'A moist carrot cake with creamy topping', '2023-10-02 10:57:42', '2023-10-02 10:57:42'),
(19, 'Strawberry Sensation', '1200/=', '1696264251.jpg', 'Delight in the sweetness of fresh strawberries', '2023-10-02 10:59:10', '2023-10-02 11:00:51');

-- --------------------------------------------------------

--
-- Table structure for table `foodchefs`
--

CREATE TABLE `foodchefs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `speciality` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `foodchefs`
--

INSERT INTO `foodchefs` (`id`, `name`, `speciality`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Alice Baker', 'Cake Artist', '1696264881.jpg', '2023-09-30 08:15:27', '2023-10-03 23:55:15'),
(2, 'Tony Pizzolini', 'Neapolitan Pizza', '1696264979.jpg', '2023-09-30 08:16:16', '2023-10-02 11:12:59'),
(4, 'Sandra Sandwichista', 'Gourmet Sandwiches', '1696265428.jpg', '2023-10-02 11:15:40', '2023-10-02 11:20:28'),
(5, 'Oliver Omeletto', 'Omelets and Sandwiches', '1696422555.jpg', '2023-10-02 11:18:27', '2023-10-04 06:59:15'),
(6, 'Ray Walker', 'Cookie Chef', '1696422575.jpg', '2023-10-02 11:22:59', '2023-10-04 06:59:35'),
(8, 'Maria DiCesare', 'Pastry Chef', '1696422341.jpg', '2023-10-04 06:55:41', '2023-10-04 06:55:41');

-- --------------------------------------------------------

--
-- Table structure for table `lunches`
--

CREATE TABLE `lunches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ltitle` varchar(255) DEFAULT NULL,
  `lprice` varchar(255) DEFAULT NULL,
  `limage` varchar(255) DEFAULT NULL,
  `ldescription` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lunches`
--

INSERT INTO `lunches` (`id`, `ltitle`, `lprice`, `limage`, `ldescription`, `created_at`, `updated_at`) VALUES
(1, 'Eggs Omelette', '200/=', '1696389591.png', 'Eggs Omelette: A fluffy and savory breakfast classic', '2023-10-03 21:49:51', '2023-10-03 21:49:51'),
(2, 'Dollma Pire', '700/=', '1696389686.png', 'Dollma Pire: A culinary adventure that tantalizes the senses.', '2023-10-03 21:51:26', '2023-10-03 23:48:27'),
(3, 'Omelette & Cheese', '400/=', '1696389732.png', 'Omelette & Cheese: A perfect blend of comfort and flavor.', '2023-10-03 21:52:12', '2023-10-03 21:52:12'),
(4, 'Fresh Chicken Salad', '1540/=', '1696389802.png', 'Fresh Chicken Salad: Crisp, flavorful bites for a healthy delight.', '2023-10-03 21:53:22', '2023-10-03 21:53:22'),
(5, 'Orange Juice', '400/=', '1696389838.png', 'Orange Juice: Zesty sunshine in every refreshing sip', '2023-10-03 21:53:58', '2023-10-03 21:53:58'),
(7, 'Fruit Salad', '700/=', '1696399958.png', 'Fruit Salad: Nature\'s vibrant medley on your plate.', '2023-10-04 00:42:38', '2023-10-04 00:42:38');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_09_28_135552_create_sessions_table', 1),
(7, '2023_09_29_135956_create_food_table', 2),
(8, '2023_09_30_080536_create_reservations_table', 3),
(9, '2023_09_30_095856_create_foodchefs_table', 4),
(10, '2023_10_03_174704_create_breakfasts_table', 5),
(11, '2023_10_04_020301_create_lunches_table', 6),
(12, '2023_10_04_020326_create_dinners_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `guest` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `name`, `email`, `phone`, `guest`, `date`, `time`, `message`, `created_at`, `updated_at`) VALUES
(3, 'Anne', 'anne003@gmail.com', '077278994', '6', '19.09.2023', '16:57', 'Can I make a reservation?', '2023-09-30 02:55:44', '2023-09-30 02:55:44'),
(4, 'User', 'user@gmail.com', '0772511003', '4', '26.09.2023', '16:00', 'Bookings available?', '2023-09-30 02:57:44', '2023-09-30 02:57:44'),
(5, 'Asma Thowfeek', 'asmathowfeek03@gmail.com', '0772511003', '2', '23.10.2023', '09:50', 'I would like to make a reservation.', '2023-10-04 06:52:04', '2023-10-04 06:52:04');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('me5uUKHqJhFUfudR2AY2HDqZCdOzjN7khSagFxgB', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.47', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibzRkYXV5eWZpbHM1WXpNc2ZrS2N4S1BTbE15V3NUbUM2S2NwOVZ4ViI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1696422582);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL DEFAULT '0',
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `usertype`, `phone`, `address`, `dob`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(3, 'Admin', 'admin@gmail.com', '1', '0773456789', '12/2,Kandy road, Kandy', '1998-09-12', NULL, '$2y$10$19iRYNTlgKNRm9zXPDq65OJDYFdwJcQj0L0yX2tTGPvP9bUzjdjRO', NULL, NULL, NULL, 'DdalbQMkSrB8GtUiR7MCCb0oOVsxX9zCZrk6UbAYyFRqwkX58K7fWobBTf3Q', NULL, NULL, '2023-09-28 22:44:31', '2023-09-28 22:44:31'),
(5, 'User', 'user@gmail.com', '0', '0772511003', '62/1,kandy road, Gampola', '2001-01-23', NULL, '$2y$10$rmxX81ZX9LIXWBI/Eeqo0uH6twsPunmIJeWFxXUG5jcXlum5O/7FK', NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-29 08:23:26', '2023-09-29 08:23:26'),
(6, 'Anne', 'anne003@gmail.com', '0', '077278994', '77, Peradeniya Road, Kandy', '1990-12-06', NULL, '$2y$10$31AA6a/1VBbuelOXsg5GaOrmgPkLBJnrEf1Y.MqLhwfklhLXPwWqm', NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-29 08:25:01', '2023-09-29 08:25:01'),
(9, 'Asma Thowfeek', 'asmathowfeek03@gmail.com', '0', '0772511003', '62/1,kandy road, Gampola', '2001-12-03', NULL, '$2y$10$3LNu6Y9bc/zv0x.UVUBdFeSaT2EUHoLyNaY30RkIbW7CatdcCUXwK', NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-04 02:40:32', '2023-10-04 02:40:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `breakfasts`
--
ALTER TABLE `breakfasts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dinners`
--
ALTER TABLE `dinners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foodchefs`
--
ALTER TABLE `foodchefs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lunches`
--
ALTER TABLE `lunches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `breakfasts`
--
ALTER TABLE `breakfasts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `dinners`
--
ALTER TABLE `dinners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `foodchefs`
--
ALTER TABLE `foodchefs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `lunches`
--
ALTER TABLE `lunches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
