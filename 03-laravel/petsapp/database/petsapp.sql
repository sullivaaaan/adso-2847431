-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-03-2025 a las 16:25:44
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `petsapp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adoptions`
--

CREATE TABLE `adoptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `pet_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
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
-- Estructura de tabla para la tabla `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_03_06_210902_create_pets_table', 1),
(5, '2025_03_06_210923_create_adoptions_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pets`
--

CREATE TABLE `pets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'no-imagen.png',
  `kind` varchar(255) NOT NULL,
  `weight` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `breed` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pets`
--

INSERT INTO `pets` (`id`, `name`, `image`, `kind`, `weight`, `age`, `breed`, `location`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'hagenes', 'no-imagen.png', 'Dog', 5, 19, 'Snow', 'Ramiroborough', 'Quae quam provident nemo rerum rerum dicta earum reiciendis voluptatibus quaerat iste.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(2, 'miller', 'no-imagen.png', 'Cat', 1, 65, 'DarkSalmon', 'Lake Dasialand', 'Possimus consequuntur ut quo aliquam laborum velit eum nobis.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(3, 'murphy', 'no-imagen.png', 'Fish', 6, 92, 'LightCyan', 'Cummingsberg', 'Omnis rerum ut cum sequi dolore rem quas possimus laborum et quibusdam quia numquam.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(4, 'walsh', 'no-imagen.png', 'Cat', 4, 34, 'DarkTurquoise', 'Jevontown', 'Officia quia blanditiis sint reprehenderit ut harum quaerat suscipit consequatur quia saepe aut sequi.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(5, 'howe', 'no-imagen.png', 'Mouse', 4, 68, 'Linen', 'South Irmaport', 'Dolorum libero ad quo placeat dolor molestiae hic a tempora delectus.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(6, 'sawayn', 'no-imagen.png', 'Mouse', 2, 34, 'MediumOrchid', 'McDermottshire', 'Accusamus omnis ex eos ab voluptas dolorem fuga consequatur enim autem quis enim.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(7, 'fisher', 'no-imagen.png', 'Cat', 5, 98, 'MediumAquaMarine', 'Hammesbury', 'Odio ipsam voluptatem autem consequatur eum saepe.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(8, 'roob', 'no-imagen.png', 'Dog', 9, 98, 'Fuchsia', 'Carterfort', 'Culpa ea et possimus cum iusto et voluptas voluptatum eligendi sunt explicabo.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(9, 'quitzon', 'no-imagen.png', 'Dog', 2, 96, 'RoyalBlue', 'Waltershire', 'Ut eos ea odio aut et tempore voluptatem exercitationem autem.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(10, 'smith', 'no-imagen.png', 'Mouse', 2, 48, 'DeepPink', 'South Lanefort', 'Sed illum enim eligendi magnam aut impedit quibusdam molestias perferendis.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(11, 'cremin', 'no-imagen.png', 'Fish', 4, 80, 'BlueViolet', 'Macejkovictown', 'Praesentium aut eos rerum soluta saepe aliquam sapiente est libero eos repellendus.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(12, 'goyette', 'no-imagen.png', 'Dog', 6, 94, 'Plum', 'Lake Gaylemouth', 'Facilis at qui explicabo nesciunt suscipit voluptatibus provident.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(13, 'connelly', 'no-imagen.png', 'Bird', 9, 63, 'LightSlateGray', 'West Vida', 'Cum inventore adipisci libero aut corporis iusto ipsam tenetur blanditiis.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(14, 'langosh', 'no-imagen.png', 'Cat', 1, 94, 'BlueViolet', 'South Gilesstad', 'Corporis excepturi quod sed alias optio natus beatae incidunt qui quo rem neque quia.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(15, 'runte', 'no-imagen.png', 'Mouse', 3, 73, 'Blue', 'Willieton', 'Similique veniam maxime quia voluptatem omnis porro accusantium enim.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(16, 'davis', 'no-imagen.png', 'Bird', 2, 30, 'OliveDrab', 'Stantonchester', 'Qui sunt et modi non vel a nesciunt magni aut sapiente sapiente laudantium praesentium minus.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(17, 'greenfelder', 'no-imagen.png', 'Mouse', 3, 27, 'Purple', 'South Abbeybury', 'Ad excepturi libero error doloremque expedita ut sint est blanditiis autem ut consequuntur.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(18, 'rodriguez', 'no-imagen.png', 'Cat', 9, 77, 'RoyalBlue', 'Bartonstad', 'Amet maiores possimus temporibus perspiciatis quibusdam voluptatem id sed alias illo assumenda quos.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(19, 'baumbach', 'no-imagen.png', 'Mouse', 9, 20, 'DarkSalmon', 'South Albinashire', 'Fugit ut repudiandae magnam culpa quisquam sint ut quisquam soluta ut qui.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(20, 'ryan', 'no-imagen.png', 'Mouse', 3, 35, 'Navy', 'West Uriahton', 'Corrupti nulla error dolores magnam qui perferendis reiciendis ullam dolor sint soluta.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(21, 'schmeler', 'no-imagen.png', 'Mouse', 4, 27, 'PapayaWhip', 'Lake Angelochester', 'Et doloribus possimus consequatur incidunt aut eveniet reiciendis.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(22, 'abshire', 'no-imagen.png', 'Fish', 7, 22, 'CornflowerBlue', 'Lake Eladio', 'Voluptates aut maxime iure eius dolor rerum amet laborum rerum delectus perspiciatis enim quia.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(23, 'hartmann', 'no-imagen.png', 'Cat', 1, 86, 'AliceBlue', 'Desireeside', 'Architecto dolorum qui blanditiis sit dolorem repellat consequatur incidunt est pariatur quis commodi amet.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(24, 'wiza', 'no-imagen.png', 'Bird', 4, 73, 'Tan', 'West Vestaville', 'Ratione ratione eaque illum consequuntur nulla quod aut non modi deleniti.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(25, 'moen', 'no-imagen.png', 'Mouse', 6, 75, 'DarkGoldenRod', 'Handland', 'Ab nihil et vel eum sed autem quis quas.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(26, 'casper', 'no-imagen.png', 'Bird', 4, 30, 'GhostWhite', 'Dawnview', 'Fuga ad ullam deserunt ut possimus quo reiciendis expedita dolorum id est asperiores.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(27, 'oreilly', 'no-imagen.png', 'Mouse', 9, 73, 'SlateGray', 'Julieberg', 'Odio quae et quam qui est est dolorem.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(28, 'bartell', 'no-imagen.png', 'Dog', 1, 51, 'HotPink', 'Treutelburgh', 'Quasi atque quo et excepturi quas fugiat impedit dignissimos quo perspiciatis sit et quasi.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(29, 'schimmel', 'no-imagen.png', 'Dog', 6, 64, 'Blue', 'Armstrongfort', 'In ut est nemo natus et sint ut qui nihil eos tenetur aut fugiat.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(30, 'barrows', 'no-imagen.png', 'Cat', 8, 69, 'MediumBlue', 'Jameyshire', 'Fuga saepe commodi laborum nisi officiis laboriosam placeat magnam.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(31, 'mitchell', 'no-imagen.png', 'Fish', 7, 53, 'DarkGray', 'Keelingborough', 'Iure maxime aut consequuntur ipsam omnis reprehenderit aliquam in.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(32, 'jakubowski', 'no-imagen.png', 'Mouse', 3, 47, 'GreenYellow', 'North Lesly', 'Qui cumque voluptates id et reiciendis dolor ut.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(33, 'witting', 'no-imagen.png', 'Cat', 2, 55, 'PaleGoldenRod', 'North Javonton', 'Quidem atque quo et dolorem aliquam quod quam.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(34, 'crooks', 'no-imagen.png', 'Dog', 8, 90, 'Violet', 'New Busterfort', 'Nostrum et ipsa atque et neque facilis rerum voluptatem perferendis id.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(35, 'davis', 'no-imagen.png', 'Mouse', 4, 11, 'Pink', 'East Christop', 'Nostrum est voluptas quidem explicabo nihil eligendi sapiente quod.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(36, 'ruecker', 'no-imagen.png', 'Dog', 2, 75, 'Snow', 'Lake Candice', 'Sed pariatur at accusantium odio porro cumque cupiditate perspiciatis recusandae accusantium.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(37, 'hintz', 'no-imagen.png', 'Dog', 8, 45, 'DarkCyan', 'Wisokychester', 'Sint dolores optio eligendi excepturi dicta cumque et adipisci sit ut et libero asperiores.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(38, 'smith', 'no-imagen.png', 'Fish', 4, 89, 'Tan', 'New Paxton', 'Assumenda aut fuga qui quia omnis modi similique quae corporis necessitatibus fugiat distinctio.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(39, 'farrell', 'no-imagen.png', 'Cat', 9, 14, 'LightSalmon', 'Osinskiberg', 'Ea illo et aliquam qui numquam accusantium esse ut et dolorem quos esse.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(40, 'schoen', 'no-imagen.png', 'Bird', 1, 33, 'SpringGreen', 'South Judson', 'Porro quibusdam harum laudantium delectus quaerat fuga rerum recusandae.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(41, 'rice', 'no-imagen.png', 'Dog', 3, 49, 'FireBrick', 'McKenziefort', 'Natus voluptatem recusandae molestiae consectetur voluptatem magni voluptatem velit.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(42, 'schultz', 'no-imagen.png', 'Dog', 7, 51, 'NavajoWhite', 'Gudrunside', 'Ab repellendus ratione iste necessitatibus vero consectetur repellat exercitationem laboriosam eveniet aspernatur eveniet.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(43, 'kub', 'no-imagen.png', 'Bird', 8, 96, 'GoldenRod', 'Paucekstad', 'Delectus dolorem qui distinctio mollitia distinctio impedit officiis dolor dolore maiores expedita qui aut.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(44, 'larson', 'no-imagen.png', 'Dog', 5, 29, 'Silver', 'Yasminemouth', 'Rerum error ullam eum non vero blanditiis.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(45, 'wisoky', 'no-imagen.png', 'Dog', 6, 84, 'MediumAquaMarine', 'Mohrfurt', 'Impedit molestias sed qui neque iusto temporibus.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(46, 'bartoletti', 'no-imagen.png', 'Fish', 9, 44, 'Cornsilk', 'North Jamaal', 'Amet in ut occaecati sed optio nihil commodi vel sit dolorem.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(47, 'stark', 'no-imagen.png', 'Fish', 2, 42, 'Coral', 'Aufderharborough', 'Et voluptatem quidem consequatur vel ut dolore consequatur et ab.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(48, 'kozey', 'no-imagen.png', 'Dog', 1, 34, 'NavajoWhite', 'Lucyborough', 'Odit maiores aut quisquam dolorem et aliquam et est magnam voluptatibus.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(49, 'shields', 'no-imagen.png', 'Cat', 9, 94, 'SkyBlue', 'Handmouth', 'Modi natus et culpa non vitae voluptatibus dolorum.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(50, 'ernser', 'no-imagen.png', 'Bird', 2, 89, 'DarkRed', 'Lake Erna', 'Ut qui totam deserunt tempore laudantium et blanditiis nihil error.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(51, 'reilly', 'no-imagen.png', 'Cat', 3, 20, 'SeaShell', 'Leuschkeville', 'Animi suscipit qui quam eos odit consequatur asperiores nemo occaecati qui voluptatum.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(52, 'gutmann', 'no-imagen.png', 'Cat', 3, 97, 'DarkBlue', 'West Dalemouth', 'Tenetur perferendis repellat consequatur modi fugiat laborum quia ea exercitationem soluta id illo temporibus.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(53, 'toy', 'no-imagen.png', 'Dog', 4, 48, 'DarkSeaGreen', 'Jimmyberg', 'Nostrum distinctio sed libero accusantium ex eveniet est sunt autem voluptatibus.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(54, 'osinski', 'no-imagen.png', 'Cat', 3, 69, 'FloralWhite', 'West Retha', 'Sit porro unde est iusto quasi quos pariatur veritatis autem.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(55, 'weissnat', 'no-imagen.png', 'Mouse', 3, 23, 'MediumBlue', 'Port Keaton', 'Autem provident eum numquam iste libero non ut maiores officiis laudantium iure.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(56, 'reichert', 'no-imagen.png', 'Mouse', 9, 40, 'Bisque', 'Port Camylle', 'Quia autem fugiat fugit voluptatibus incidunt aperiam eius quidem id facilis sunt sint.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(57, 'cole', 'no-imagen.png', 'Fish', 4, 25, 'Gray', 'North Oral', 'At molestiae sint voluptatum facilis voluptatem et voluptate enim facere aliquam vitae.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(58, 'keebler', 'no-imagen.png', 'Cat', 6, 72, 'LightGray', 'Koelpinview', 'Sed sed provident natus omnis nihil dolores voluptates et illum ipsum aliquam voluptas.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(59, 'brekke', 'no-imagen.png', 'Dog', 1, 87, 'GreenYellow', 'New Lincoln', 'Ex ipsam iure a placeat dolores nobis autem.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(60, 'thiel', 'no-imagen.png', 'Cat', 9, 70, 'SaddleBrown', 'Port Nellaland', 'Non aliquid debitis tempora id deserunt ipsa facere quibusdam atque maxime nihil perferendis repudiandae.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(61, 'nitzsche', 'no-imagen.png', 'Mouse', 1, 96, 'Turquoise', 'Ricefort', 'Ut repellat dolorem facilis optio aut blanditiis sint debitis voluptatem voluptate eos numquam ex.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(62, 'jones', 'no-imagen.png', 'Cat', 7, 26, 'Beige', 'South Mina', 'Veritatis iusto eos id et consequatur qui quo consequatur.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(63, 'becker', 'no-imagen.png', 'Fish', 8, 96, 'Maroon', 'Denischester', 'Culpa aliquam iusto labore rem blanditiis sapiente laborum repellat.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(64, 'weber', 'no-imagen.png', 'Mouse', 6, 63, 'Indigo', 'North Torey', 'Voluptas officiis corporis incidunt et eum mollitia accusamus vel consequatur vitae.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(65, 'lowe', 'no-imagen.png', 'Cat', 3, 22, 'HotPink', 'New Adan', 'Iure qui in omnis quam omnis vitae eos repellendus vitae.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(66, 'monahan', 'no-imagen.png', 'Bird', 6, 59, 'DarkSlateGray', 'East Delia', 'Repudiandae et et voluptas omnis corporis iste voluptatem enim et illum fugit ex molestias.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(67, 'kiehn', 'no-imagen.png', 'Dog', 5, 21, 'RosyBrown', 'Port Eudoraside', 'Quasi perspiciatis dolor sit voluptates quo facilis temporibus reiciendis et dolor labore.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(68, 'price', 'no-imagen.png', 'Mouse', 9, 62, 'Gainsboro', 'North Jesus', 'Voluptas accusantium error officia adipisci illum quos quidem quibusdam maiores alias in in.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(69, 'baumbach', 'no-imagen.png', 'Dog', 6, 41, 'DarkTurquoise', 'Port Tyriquechester', 'Quibusdam nulla adipisci nam voluptatem qui libero sunt enim.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(70, 'schoen', 'no-imagen.png', 'Bird', 5, 96, 'CadetBlue', 'Bergstromtown', 'Illum occaecati reprehenderit ad velit est quia ab laboriosam deleniti voluptatibus.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(71, 'bartell', 'no-imagen.png', 'Cat', 3, 31, 'Aquamarine', 'Uptonview', 'Fugit enim est accusamus et et repellendus.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(72, 'keeling', 'no-imagen.png', 'Mouse', 2, 45, 'OldLace', 'Lake Ima', 'Esse eaque aliquid quia porro illum perspiciatis.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(73, 'parker', 'no-imagen.png', 'Bird', 3, 55, 'Peru', 'Doyleberg', 'Ad nesciunt quae sed quis consequatur qui quia dignissimos ipsam illo ad molestiae ipsum ut.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(74, 'tremblay', 'no-imagen.png', 'Cat', 5, 73, 'Peru', 'Sanfordton', 'Ducimus tempora explicabo aliquid tenetur corporis aut deserunt repellat eum.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(75, 'maggio', 'no-imagen.png', 'Dog', 8, 91, 'BlanchedAlmond', 'Leannmouth', 'Tenetur placeat mollitia dicta accusantium perferendis qui labore nihil soluta ut eius quidem.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(76, 'abernathy', 'no-imagen.png', 'Fish', 3, 39, 'Lavender', 'Port Davion', 'Natus sed porro ea impedit voluptatum mollitia voluptatem soluta qui nostrum repudiandae et.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(77, 'strosin', 'no-imagen.png', 'Mouse', 8, 33, 'HotPink', 'Huelfort', 'Nam earum doloremque tenetur dolor et laborum eius.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(78, 'haag', 'no-imagen.png', 'Mouse', 8, 31, 'LightSkyBlue', 'East Alaynaville', 'Id possimus eligendi et nam et qui soluta animi facere.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(79, 'hickle', 'no-imagen.png', 'Bird', 3, 57, 'Cyan', 'Franeckitown', 'Velit ratione amet perspiciatis sed qui suscipit et sequi velit totam mollitia.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(80, 'brown', 'no-imagen.png', 'Cat', 4, 14, 'IndianRed', 'North Eriberto', 'Non ea corrupti magni error porro omnis voluptas.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(81, 'schowalter', 'no-imagen.png', 'Dog', 2, 46, 'Darkorange', 'West Johnsonview', 'Enim sint qui beatae rerum quia inventore iste.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(82, 'purdy', 'no-imagen.png', 'Dog', 3, 69, 'MediumSlateBlue', 'Shyanntown', 'Temporibus error repudiandae ducimus sunt optio aut eveniet cum temporibus rerum repudiandae.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(83, 'weimann', 'no-imagen.png', 'Dog', 3, 26, 'LightSteelBlue', 'Dewaynebury', 'Debitis eaque iste eos aut architecto aut error assumenda sit aut voluptas.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(84, 'runte', 'no-imagen.png', 'Cat', 4, 92, 'HoneyDew', 'South Germainefurt', 'Omnis tempore maiores animi occaecati ratione at velit et dignissimos corrupti.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(85, 'auer', 'no-imagen.png', 'Fish', 7, 98, 'DarkGoldenRod', 'Lake Destini', 'Eius atque amet voluptas est modi est harum cupiditate corrupti aliquid reprehenderit.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(86, 'crooks', 'no-imagen.png', 'Fish', 3, 27, 'Orchid', 'Tommiestad', 'Eum at illo recusandae consequuntur consequatur porro aut qui ratione natus quae.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(87, 'bergstrom', 'no-imagen.png', 'Cat', 1, 95, 'LavenderBlush', 'Koletown', 'Vel cupiditate aspernatur sint quod quia ea ut amet neque cum.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(88, 'reilly', 'no-imagen.png', 'Bird', 6, 34, 'YellowGreen', 'Thadfurt', 'Odit reprehenderit debitis quia sed est iusto quidem unde sunt omnis possimus aliquid similique.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(89, 'fadel', 'no-imagen.png', 'Bird', 6, 82, 'Gold', 'West Reece', 'Aliquam voluptates est est quas voluptas eius quia nemo mollitia reiciendis laudantium quo.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(90, 'sporer', 'no-imagen.png', 'Fish', 2, 87, 'Aquamarine', 'Hayliefurt', 'Vel ipsam eius similique sit hic et eos cumque quidem ut ipsum.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(91, 'spinka', 'no-imagen.png', 'Mouse', 5, 69, 'Teal', 'Lake Ashtonchester', 'Sed earum illo et necessitatibus molestias reiciendis quae ut corrupti architecto.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(92, 'sawayn', 'no-imagen.png', 'Cat', 7, 29, 'SeaGreen', 'O\'Connertown', 'Voluptatem ut consequatur et alias tenetur voluptatibus.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(93, 'hettinger', 'no-imagen.png', 'Fish', 6, 32, 'RoyalBlue', 'Kayatown', 'Ut quae et dolores ab libero corporis quidem tenetur laudantium nostrum quas.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(94, 'reynolds', 'no-imagen.png', 'Bird', 7, 99, 'OliveDrab', 'New Arnulfo', 'Voluptas ab id voluptas occaecati accusantium voluptatem eum.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(95, 'bernhard', 'no-imagen.png', 'Mouse', 4, 49, 'DarkSlateGray', 'Metaton', 'Quaerat maiores quis quisquam in earum eum nulla.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(96, 'mckenzie', 'no-imagen.png', 'Fish', 2, 22, 'PaleTurquoise', 'Tanyafort', 'Delectus fugiat officia quae non autem maxime odio ducimus vel autem sit qui ipsam magnam.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(97, 'cormier', 'no-imagen.png', 'Fish', 9, 14, 'Gray', 'Annabelstad', 'Nam autem corrupti cupiditate itaque culpa porro illo quisquam accusantium.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(98, 'murphy', 'no-imagen.png', 'Cat', 3, 44, 'Orange', 'Port Jessika', 'Doloremque et dolor quis ratione reprehenderit doloribus.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(99, 'flatley', 'no-imagen.png', 'Cat', 4, 64, 'Indigo', 'Schuppeburgh', 'Quis autem minima officia sapiente voluptate et sint.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44'),
(100, 'gutmann', 'no-imagen.png', 'Bird', 5, 19, 'Orange', 'Mallorychester', 'Ut dolor incidunt ab est omnis accusamus voluptas maxime.', 0, '2025-03-20 17:48:44', '2025-03-20 17:48:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
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
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('q9uuomGcTLkOqVoHyHhAd8VFv7cfHGIz47917Cs0', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidUtlNjlFeFJTOFNTM2l2bXhxT1ZJVWx2cXJ1aXRUOE9HekhFQW40UCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zaG93L3VzZXJzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1742480030);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `document` bigint(20) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `photo` varchar(255) NOT NULL DEFAULT 'no-photo.png',
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'customer',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `document`, `fullname`, `gender`, `birthdate`, `photo`, `phone`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 75792452, 'Elenor DuBuque', 'Female', '1992-08-16', '75792452.png', '320855253', 'gay.miller@example.net', '2025-03-20 17:48:58', '$2y$12$uhtSauFpL1JlGkS48LYiPu/p/5qYpu.t.c49hANgBLdm1y9vy8u4K', 'customer', 'szrpwS18T6', '2025-03-20 17:49:51', '2025-03-20 17:49:51'),
(2, 75387141, 'Casimer Kozey', 'Male', '1999-01-16', '75387141.png', '320166423', 'sonny71@example.net', '2025-03-20 17:49:00', '$2y$12$uhtSauFpL1JlGkS48LYiPu/p/5qYpu.t.c49hANgBLdm1y9vy8u4K', 'customer', 'A71BOjBexn', '2025-03-20 17:49:51', '2025-03-20 17:49:51'),
(3, 75291154, 'Noel O\'Connell', 'Male', '1977-10-30', '75291154.png', '320822801', 'benton.muller@example.net', '2025-03-20 17:49:02', '$2y$12$uhtSauFpL1JlGkS48LYiPu/p/5qYpu.t.c49hANgBLdm1y9vy8u4K', 'customer', 'rbZwSJ2Ye1', '2025-03-20 17:49:51', '2025-03-20 17:49:51'),
(4, 75477728, 'Alexa Feest', 'Female', '1997-11-14', '75477728.png', '320690985', 'koelpin.julia@example.com', '2025-03-20 17:49:05', '$2y$12$uhtSauFpL1JlGkS48LYiPu/p/5qYpu.t.c49hANgBLdm1y9vy8u4K', 'customer', 'sKPjXm5U97', '2025-03-20 17:49:51', '2025-03-20 17:49:51'),
(5, 75648155, 'Alba Bayer', 'Female', '1996-08-11', '75648155.png', '320379575', 'berenice93@example.com', '2025-03-20 17:49:07', '$2y$12$uhtSauFpL1JlGkS48LYiPu/p/5qYpu.t.c49hANgBLdm1y9vy8u4K', 'customer', 'RpCzRFmdGo', '2025-03-20 17:49:51', '2025-03-20 17:49:51'),
(6, 75268583, 'Mathias Konopelski', 'Male', '1982-12-31', '75268583.png', '320792290', 'ellis.aufderhar@example.com', '2025-03-20 17:49:09', '$2y$12$uhtSauFpL1JlGkS48LYiPu/p/5qYpu.t.c49hANgBLdm1y9vy8u4K', 'customer', 'LT18PQ2TFV', '2025-03-20 17:49:51', '2025-03-20 17:49:51'),
(7, 75724486, 'Amari Moen', 'Male', '1999-11-01', '75724486.png', '320307003', 'pkoss@example.com', '2025-03-20 17:49:11', '$2y$12$uhtSauFpL1JlGkS48LYiPu/p/5qYpu.t.c49hANgBLdm1y9vy8u4K', 'customer', 'GhESid4bmK', '2025-03-20 17:49:51', '2025-03-20 17:49:51'),
(8, 75123118, 'Jean Hegmann', 'Male', '2004-08-05', '75123118.png', '320255042', 'walker.maximillian@example.net', '2025-03-20 17:49:14', '$2y$12$uhtSauFpL1JlGkS48LYiPu/p/5qYpu.t.c49hANgBLdm1y9vy8u4K', 'customer', 'aBD5mHdW5m', '2025-03-20 17:49:51', '2025-03-20 17:49:51'),
(9, 75714396, 'Sadye Marks', 'Female', '1979-11-04', '75714396.png', '320897384', 'tromp.ahmed@example.com', '2025-03-20 17:49:16', '$2y$12$uhtSauFpL1JlGkS48LYiPu/p/5qYpu.t.c49hANgBLdm1y9vy8u4K', 'customer', 'VFVaEyxtQN', '2025-03-20 17:49:51', '2025-03-20 17:49:51'),
(10, 75528217, 'Dangelo Ortiz', 'Male', '1991-11-14', '75528217.png', '320343071', 'pondricka@example.net', '2025-03-20 17:49:18', '$2y$12$uhtSauFpL1JlGkS48LYiPu/p/5qYpu.t.c49hANgBLdm1y9vy8u4K', 'customer', 'm4zF12Pgsg', '2025-03-20 17:49:51', '2025-03-20 17:49:51'),
(11, 75504429, 'Treva Johns', 'Female', '1981-10-26', '75504429.png', '320391733', 'ariane92@example.com', '2025-03-20 17:49:20', '$2y$12$uhtSauFpL1JlGkS48LYiPu/p/5qYpu.t.c49hANgBLdm1y9vy8u4K', 'customer', 'Yz8Q7bl2yk', '2025-03-20 17:49:51', '2025-03-20 17:49:51'),
(12, 75707250, 'Rickie Tromp', 'Male', '1986-06-28', '75707250.png', '320721698', 'schultz.lance@example.net', '2025-03-20 17:49:23', '$2y$12$uhtSauFpL1JlGkS48LYiPu/p/5qYpu.t.c49hANgBLdm1y9vy8u4K', 'customer', 'zQnNXOLocC', '2025-03-20 17:49:51', '2025-03-20 17:49:51'),
(13, 75378744, 'Katelynn Bergstrom', 'Female', '1996-03-11', '75378744.png', '320383649', 'rwuckert@example.com', '2025-03-20 17:49:25', '$2y$12$uhtSauFpL1JlGkS48LYiPu/p/5qYpu.t.c49hANgBLdm1y9vy8u4K', 'customer', 'AULEfq7ABq', '2025-03-20 17:49:51', '2025-03-20 17:49:51'),
(14, 75795686, 'Eda Okuneva', 'Female', '1991-05-10', '75795686.png', '320260341', 'geovanni03@example.com', '2025-03-20 17:49:27', '$2y$12$uhtSauFpL1JlGkS48LYiPu/p/5qYpu.t.c49hANgBLdm1y9vy8u4K', 'customer', 'jpf1CJpmYR', '2025-03-20 17:49:51', '2025-03-20 17:49:51'),
(15, 75316985, 'Lillian Nader', 'Female', '2003-09-28', '75316985.png', '320294982', 'eulalia.kerluke@example.com', '2025-03-20 17:49:29', '$2y$12$uhtSauFpL1JlGkS48LYiPu/p/5qYpu.t.c49hANgBLdm1y9vy8u4K', 'customer', 'wRhYieqwFx', '2025-03-20 17:49:51', '2025-03-20 17:49:51'),
(16, 75434571, 'Alexandra Champlin', 'Female', '1990-06-02', '75434571.png', '320281643', 'murazik.ivy@example.com', '2025-03-20 17:49:31', '$2y$12$uhtSauFpL1JlGkS48LYiPu/p/5qYpu.t.c49hANgBLdm1y9vy8u4K', 'customer', 'eTZfhl1D7G', '2025-03-20 17:49:51', '2025-03-20 17:49:51'),
(17, 75865501, 'Breanne Murazik', 'Female', '1993-08-17', '75865501.png', '320618891', 'witting.don@example.net', '2025-03-20 17:49:33', '$2y$12$uhtSauFpL1JlGkS48LYiPu/p/5qYpu.t.c49hANgBLdm1y9vy8u4K', 'customer', 'umlqLKlKsq', '2025-03-20 17:49:51', '2025-03-20 17:49:51'),
(18, 75049989, 'Kurtis Johnston', 'Male', '1987-06-07', '75049989.png', '320561157', 'eturner@example.org', '2025-03-20 17:49:36', '$2y$12$uhtSauFpL1JlGkS48LYiPu/p/5qYpu.t.c49hANgBLdm1y9vy8u4K', 'customer', '8U0wrKKMQm', '2025-03-20 17:49:51', '2025-03-20 17:49:51'),
(19, 75554421, 'Jaida Okuneva', 'Female', '1988-01-02', '75554421.png', '320704889', 'monahan.kathryn@example.com', '2025-03-20 17:49:38', '$2y$12$uhtSauFpL1JlGkS48LYiPu/p/5qYpu.t.c49hANgBLdm1y9vy8u4K', 'customer', 'fMQ8y59kRN', '2025-03-20 17:49:51', '2025-03-20 17:49:51'),
(20, 75710285, 'Bridie Pollich', 'Female', '1974-11-02', '75710285.png', '320687554', 'haylie73@example.org', '2025-03-20 17:49:40', '$2y$12$uhtSauFpL1JlGkS48LYiPu/p/5qYpu.t.c49hANgBLdm1y9vy8u4K', 'customer', 'jmdZBjE3Ft', '2025-03-20 17:49:51', '2025-03-20 17:49:51'),
(21, 75195962, 'Emelie Runolfsdottir', 'Female', '1987-02-22', '75195962.png', '320919832', 'qmraz@example.com', '2025-03-20 17:49:42', '$2y$12$uhtSauFpL1JlGkS48LYiPu/p/5qYpu.t.c49hANgBLdm1y9vy8u4K', 'customer', 'Pr119JYwRB', '2025-03-20 17:49:51', '2025-03-20 17:49:51'),
(22, 75863726, 'Federico Steuber', 'Male', '1992-10-18', '75863726.png', '320440875', 'kasey86@example.com', '2025-03-20 17:49:44', '$2y$12$uhtSauFpL1JlGkS48LYiPu/p/5qYpu.t.c49hANgBLdm1y9vy8u4K', 'customer', 'vDKd8RSU9Q', '2025-03-20 17:49:51', '2025-03-20 17:49:51'),
(23, 75820241, 'Lorena Gleichner', 'Female', '2004-01-30', '75820241.png', '320133634', 'gbreitenberg@example.com', '2025-03-20 17:49:46', '$2y$12$uhtSauFpL1JlGkS48LYiPu/p/5qYpu.t.c49hANgBLdm1y9vy8u4K', 'customer', 'rEJOQ7nCJL', '2025-03-20 17:49:51', '2025-03-20 17:49:51'),
(24, 75067342, 'Abdul Batz', 'Male', '1993-01-28', '75067342.png', '320660157', 'bonnie.stiedemann@example.org', '2025-03-20 17:49:48', '$2y$12$uhtSauFpL1JlGkS48LYiPu/p/5qYpu.t.c49hANgBLdm1y9vy8u4K', 'customer', 'swRm6xojy1', '2025-03-20 17:49:51', '2025-03-20 17:49:51'),
(25, 75485517, 'Shanny Bosco', 'Female', '2004-08-03', '75485517.png', '320719163', 'xnolan@example.net', '2025-03-20 17:49:51', '$2y$12$uhtSauFpL1JlGkS48LYiPu/p/5qYpu.t.c49hANgBLdm1y9vy8u4K', 'customer', 'FK09adp980', '2025-03-20 17:49:51', '2025-03-20 17:49:51');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `adoptions`
--
ALTER TABLE `adoptions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `adoptions_user_id_foreign` (`user_id`),
  ADD KEY `adoptions_pet_id_foreign` (`pet_id`);

--
-- Indices de la tabla `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indices de la tabla `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indices de la tabla `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_document_unique` (`document`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `adoptions`
--
ALTER TABLE `adoptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `pets`
--
ALTER TABLE `pets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `adoptions`
--
ALTER TABLE `adoptions`
  ADD CONSTRAINT `adoptions_pet_id_foreign` FOREIGN KEY (`pet_id`) REFERENCES `pets` (`id`),
  ADD CONSTRAINT `adoptions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
