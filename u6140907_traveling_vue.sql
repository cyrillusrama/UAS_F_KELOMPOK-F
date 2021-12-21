-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 09 Des 2021 pada 21.42
-- Versi server: 10.3.31-MariaDB-cll-lve
-- Versi PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u6140907_traveling_vue`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `paket_wisata_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `booking_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `bookings`
--

INSERT INTO `bookings` (`id`, `paket_wisata_id`, `user_id`, `booking_date`, `first_name`, `last_name`, `phone`, `address`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, '2021-12-09 17:00:00', 'wwww', 'wwww', '08636882822', 'magelang', '2021-12-09 07:00:43', '2021-12-09 07:00:43', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_11_26_075409_create_tb_kategori_paket_wisata_table', 1),
(6, '2021_11_26_075417_create_tb_paket_wisata_table', 1),
(7, '2021_11_26_081218_create_tb_pengaturan_table', 1),
(8, '2021_12_09_020555_create_bookings_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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

--
-- Dumping data untuk tabel `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 11, 'token', 'f0d08de8cdfbb2b6d6f044f9e848ff8d4e0f825f903e969cd8ad23211aad56cf', '[\"customers\"]', NULL, '2021-12-09 05:33:34', '2021-12-09 05:33:34'),
(2, 'App\\Models\\User', 17, 'token', 'a4e3e5612157a237da61cb4413bbc2ec924dc0244a66baec863c74da8cebb432', '[\"customers\"]', NULL, '2021-12-09 05:58:05', '2021-12-09 05:58:05'),
(3, 'App\\Models\\User', 11, 'token', '9329a2e21b705b821c7cfabffc76bcae6760aff1e0905bd8ba319191c5205b16', '[\"customers\"]', NULL, '2021-12-09 06:25:20', '2021-12-09 06:25:20'),
(4, 'App\\Models\\User', 11, 'token', 'abf02cf8d0d76098b4bb50330dfa12ceb4e62221a92c0535d0f3d4cc4bdc0892', '[\"customers\"]', NULL, '2021-12-09 06:28:57', '2021-12-09 06:28:57'),
(5, 'App\\Models\\User', 19, 'token', '93be5581d72121d9f6efdc8f7a8ffa71c6de90b9e7a0d75ad967cef412011e7e', '[\"customers\"]', NULL, '2021-12-09 06:39:02', '2021-12-09 06:39:02'),
(6, 'App\\Models\\User', 21, 'token', 'add8abb32d9964aeca1705a3e8419af9a5e0786743b173be7fab62b077026bfb', '[\"customers\"]', NULL, '2021-12-09 06:41:15', '2021-12-09 06:41:15'),
(7, 'App\\Models\\User', 21, 'token', '3371ca844c8eb4be61c20ef1039f4a2e8e2b09668c0ff588b9c14a5071cd65c5', '[\"customers\"]', NULL, '2021-12-09 06:55:29', '2021-12-09 06:55:29'),
(8, 'App\\Models\\User', 22, 'token', 'b21694f99efa08f65c858da2b252f5634aa978c2befb397fb40c30581439aca1', '[\"customers\"]', NULL, '2021-12-09 06:58:11', '2021-12-09 06:58:11'),
(9, 'App\\Models\\User', 21, 'token', 'bd07859428eeb8fe528839a3f1cef4bc69b96fd0d4ee08f604769729b638593a', '[\"customers\"]', NULL, '2021-12-09 07:03:02', '2021-12-09 07:03:02'),
(10, 'App\\Models\\User', 22, 'token', 'a09cc004751060657f206d5425998b1b7e43dec8844d6c62d094915005ee4461', '[\"customers\"]', NULL, '2021-12-09 07:08:06', '2021-12-09 07:08:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori_paket_wisata`
--

CREATE TABLE `tb_kategori_paket_wisata` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_kategori_paket_wisata`
--

INSERT INTO `tb_kategori_paket_wisata` (`id`, `nama`, `slug`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Jayme Legros', 'autem-sapiente-explicabo-consequatur-amet-voluptates', '2021-12-09 04:28:00', '2021-12-09 04:28:00', NULL),
(2, 'Dr. Electa Champlin V', 'iste-maxime-rerum-illo-eius-totam', '2021-12-09 04:28:00', '2021-12-09 04:28:00', NULL),
(3, 'renang', 'renang', '2021-12-09 07:01:40', '2021-12-09 07:01:40', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_paket_wisata`
--

CREATE TABLE `tb_paket_wisata` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori_paket_wisata_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga` int(11) NOT NULL DEFAULT 0,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_paket_wisata`
--

INSERT INTO `tb_paket_wisata` (`id`, `kategori_paket_wisata_id`, `image`, `nama`, `slug`, `deskripsi`, `harga`, `address`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, NULL, 'Miss Alize Metz Jr.', 'quisquam-rerum-qui-iste-sunt-sapiente-voluptas', 'Necessitatibus eaque consequatur voluptatem facere explicabo autem et. Veritatis cum recusandae consequatur rerum et et debitis. Impedit autem velit aut dolores itaque dolorum consequatur voluptate. Sunt recusandae fugiat fugiat aperiam culpa.', 2, 'Nobis velit error explicabo quod perferendis.', '2021-12-09 04:28:00', '2021-12-09 04:28:00', NULL),
(2, 1, NULL, 'Prof. Alec Flatley', 'repellat-exercitationem-nisi-in-nobis', 'Dolor rerum qui unde molestiae. Aut possimus distinctio qui qui quis a nesciunt. Et et aut enim qui eaque repellat. Modi deleniti ad autem minima et molestiae non.', 5, 'Ut consequuntur reiciendis ad neque quam quos. Veritatis consequatur optio ducimus alias.', '2021-12-09 04:28:00', '2021-12-09 04:28:00', NULL),
(3, 1, NULL, 'Ms. Jeanette Beier', 'error-voluptatem-laboriosam-voluptatibus-distinctio-quidem', 'Debitis tempore quam molestias maiores fugit. Saepe similique deleniti aut qui quia ea eligendi debitis. Voluptatem officiis fuga quam fugiat asperiores mollitia sunt.', 7, 'Repellendus sequi minima facilis eum hic. Itaque itaque deleniti tenetur nihil perferendis ratione voluptas.', '2021-12-09 04:28:00', '2021-12-09 04:28:00', NULL),
(4, 1, NULL, 'Lupe Rogahn', 'ea-consequatur-omnis-id-ducimus-sit-omnis-vitae-qui', 'Rerum iure vel perspiciatis qui optio. Esse cum corrupti ex architecto molestiae occaecati. Enim ut quia magni molestias quasi necessitatibus necessitatibus repudiandae.', 2, 'Odio voluptatem et et. Iste dolor laborum ipsa odit ea.', '2021-12-09 04:28:00', '2021-12-09 04:28:00', NULL),
(5, 1, NULL, 'Mr. Marco Howe I', 'et-ex-voluptatem-tempora-labore-vitae', 'Officiis itaque in aut sunt maiores eaque quia saepe. Praesentium soluta voluptatem cupiditate sit qui accusamus. Et iure nam natus saepe. Id aperiam et architecto tempore rerum at quae.', 3, 'Aut nesciunt repellat sequi cupiditate quo perspiciatis.', '2021-12-09 04:28:00', '2021-12-09 04:28:00', NULL),
(6, 1, NULL, 'Jany Pfeffer DDS', 'qui-vitae-deserunt-dolorum-quia-velit-eveniet-quasi', 'Dolor libero consequatur neque consectetur eligendi. Nulla omnis natus totam tempora tenetur veritatis. Ratione laborum aut vitae magni ducimus qui. Quia impedit quidem aut minus.', 2, 'Ipsam quo sapiente rerum quidem. Dignissimos placeat sit eius quo.', '2021-12-09 04:28:00', '2021-12-09 04:28:00', NULL),
(7, 1, NULL, 'Mrs. Carissa O\'Reilly', 'et-doloremque-eum-voluptatem-omnis-ea', 'Nam fugit ratione a. Provident quia maiores error doloribus. Aliquam totam sequi molestiae rerum occaecati labore voluptatem rerum. Repellendus hic nihil ea repellat amet. Quia sed qui saepe.', 8, 'Sed et praesentium autem ut voluptates et sit. Ea qui animi tempora et.', '2021-12-09 04:28:00', '2021-12-09 04:28:00', NULL),
(8, 1, NULL, 'Mr. Otho Hodkiewicz Jr.', 'quis-qui-odit-reiciendis-et', 'Ab minima officia fugit ea perferendis est. Debitis reiciendis voluptas rerum ut aliquam. Nobis id magni nihil autem. Quidem sequi enim ut voluptatum dolor in laudantium.', 8, 'Magni possimus rem non aut ea nemo praesentium. Ab non nulla et ad consectetur qui et consectetur.', '2021-12-09 04:28:00', '2021-12-09 04:28:00', NULL),
(9, 1, NULL, 'Prof. Keshaun Schmitt IV', 'iste-tenetur-eum-totam-animi-aut', 'Eligendi veritatis non autem minus. Magnam non qui beatae minima. Rerum incidunt quasi aut quia maiores quia dolorem quis. Et repellat voluptatibus harum officiis est.', 6, 'Corrupti ex voluptates quas quia sed ut deserunt.', '2021-12-09 04:28:00', '2021-12-09 04:28:00', NULL),
(10, 1, NULL, 'Ivy Ziemann', 'accusantium-esse-doloribus-et-laborum-labore', 'Minus est saepe reprehenderit ut. Minima fuga voluptates ut amet facere ut. Alias unde sequi eaque praesentium aut tenetur sit. Rerum hic repellat reprehenderit eum.', 2, 'Aut consequatur et ratione et tempore. Qui ex tempore reprehenderit.', '2021-12-09 04:28:00', '2021-12-09 04:28:00', NULL),
(11, 1, NULL, 'Carolyne Herman', 'et-occaecati-voluptatem-quia', 'Molestiae qui sequi sit sit asperiores aut. Nisi molestias ex at ullam eaque consectetur facere. Ut sunt et molestias et. Delectus fugit quibusdam rerum ipsam qui qui ad.', 4, 'Nulla saepe facere odio amet. Magnam et quia est delectus est blanditiis.', '2021-12-09 04:28:00', '2021-12-09 04:28:00', NULL),
(12, 1, NULL, 'Miss Aniyah Terry V', 'magnam-quaerat-non-quia', 'Consequatur aliquam voluptas ipsam praesentium molestiae enim quas. Et voluptatem natus cupiditate suscipit voluptatem facere voluptatem. Exercitationem velit ipsum dolorem. Suscipit commodi quis libero.', 4, 'Non est voluptate aspernatur numquam.', '2021-12-09 04:28:00', '2021-12-09 04:28:00', NULL),
(13, 1, NULL, 'Gaetano Skiles', 'facere-repellat-possimus-ipsum-voluptatibus', 'Deleniti ipsum id asperiores distinctio sit sint pariatur deleniti. Commodi quia reprehenderit voluptatem id. Reprehenderit beatae est consequatur laboriosam ut temporibus sit.', 3, 'Tempore est debitis quam.', '2021-12-09 04:28:00', '2021-12-09 04:28:00', NULL),
(14, 1, NULL, 'Mattie Sauer', 'totam-ut-sunt-nisi-ratione', 'Dolore nobis quia perspiciatis consequatur. Dolore quisquam molestias maxime qui eos. Sunt recusandae reprehenderit molestias sunt.', 4, 'Consectetur temporibus occaecati omnis quia veniam. Qui vero ut ipsum et dolorem.', '2021-12-09 04:28:00', '2021-12-09 04:28:00', NULL),
(15, 1, NULL, 'Mrs. Kathryn Keeling Sr.', 'quia-autem-et-rerum-ut-sed-est-blanditiis', 'Quo omnis architecto sunt quia culpa esse sequi. Fuga ad corporis ea et. Neque et qui distinctio molestiae. Et delectus blanditiis totam sit.', 5, 'Mollitia dolorem ex eligendi quibusdam autem. Quis doloremque quaerat ut atque mollitia et.', '2021-12-09 04:28:00', '2021-12-09 04:28:00', NULL),
(16, 1, NULL, 'Marshall Wehner', 'aliquam-exercitationem-voluptates-tempora-sed', 'Assumenda non debitis ut in rem ullam et. Ut ut hic iusto suscipit accusantium amet. Cum ut laboriosam provident iure incidunt unde eum. Nisi ex sit quod perspiciatis voluptas quod. Id est et veniam exercitationem expedita aliquam.', 2, 'Fuga reprehenderit qui qui eius molestiae reiciendis. Magnam et vitae animi.', '2021-12-09 04:28:00', '2021-12-09 04:28:00', NULL),
(17, 1, NULL, 'Zander Pollich', 'dolor-doloremque-pariatur-aut-earum-maiores-ea', 'Omnis rerum nisi quis repellendus nemo saepe doloremque aliquid. Consequuntur quae impedit voluptatem molestiae. Qui quidem dolorem delectus quam excepturi omnis. Vel nihil porro rerum odit eius quo.', 0, 'Nihil possimus corporis quae eius. Non quae amet id et nemo id porro.', '2021-12-09 04:28:00', '2021-12-09 04:28:00', NULL),
(18, 1, NULL, 'Hillary Sanford', 'repudiandae-aut-magnam-veniam-dolores-fugiat-et-est', 'Et ut eveniet fugiat veniam sapiente sit. Tenetur saepe repellat similique ea voluptate iusto aut. Quae consectetur minima laboriosam aut.', 3, 'Qui est nam labore. Ipsam dolorem in magni omnis rerum.', '2021-12-09 04:28:00', '2021-12-09 04:28:00', NULL),
(19, 1, NULL, 'Keira Schuppe IV', 'esse-molestiae-ab-odio', 'Ea sunt sapiente enim incidunt. Id ab soluta quam sed sit quidem.', 2, 'Quam recusandae aut sed sequi qui.', '2021-12-09 04:28:00', '2021-12-09 04:28:00', NULL),
(20, 1, NULL, 'Camylle D\'Amore', 'asperiores-consectetur-quis-quis-rerum-est-earum-ut-voluptatem', 'Possimus culpa atque distinctio laborum at dolor assumenda consequatur. Minus nihil itaque adipisci repellat quos reprehenderit. Provident vitae asperiores mollitia a et debitis nihil dolor. Atque ut enim et quisquam nisi laborum magnam.', 9, 'Alias labore ullam molestiae fugit esse ea.', '2021-12-09 04:28:00', '2021-12-09 04:28:00', NULL),
(21, 2, NULL, 'Dr. Mark Toy Sr.', 'est-vel-exercitationem-quas-magnam-autem', 'Ea necessitatibus eaque deserunt a pariatur quis enim. Voluptatem deserunt sunt facere odit commodi qui. Non itaque est eos aut. Laborum libero repudiandae minus omnis ex. Mollitia quia qui dolor quia.', 9, 'Rerum dolore nostrum ea similique et repellat eos culpa. Quasi illo ipsam quo vitae beatae magni.', '2021-12-09 04:28:00', '2021-12-09 04:28:00', NULL),
(22, 2, NULL, 'Mariela Beier', 'sit-qui-sunt-at-est-sit', 'Et eligendi laudantium sequi at exercitationem ea ut. Rerum praesentium placeat eveniet iure cumque velit incidunt est. Dolorem dolores ut dolorum possimus repellendus repellendus magni.', 0, 'Et unde labore quam esse explicabo doloremque. Non dignissimos accusantium sit placeat veniam aut.', '2021-12-09 04:28:00', '2021-12-09 04:28:00', NULL),
(23, 2, NULL, 'Brock Steuber', 'eos-natus-nulla-minus-quasi-exercitationem-ea-sed-a', 'Aut neque quasi numquam ut amet animi laboriosam. Quo perspiciatis rerum omnis fuga. Id voluptates accusantium quia in perspiciatis voluptatibus aperiam. In dolorem ipsa libero a dolore similique consequatur.', 8, 'Rerum ad natus odit natus sunt quas. Magni repudiandae voluptatem atque et.', '2021-12-09 04:28:00', '2021-12-09 04:28:00', NULL),
(24, 2, NULL, 'Miss Theodora Gibson PhD', 'similique-et-ut-fugit-commodi-quo-odit', 'Repellendus qui accusantium culpa voluptatem ea est dignissimos aperiam. Nesciunt consequatur non aut sit sit. Sapiente qui assumenda quia excepturi sed placeat ex.', 9, 'Voluptatibus nostrum labore aut mollitia quos sunt odit. Soluta odio sit similique ex rem.', '2021-12-09 04:28:00', '2021-12-09 04:28:00', NULL),
(25, 2, NULL, 'Nicole Bartell', 'omnis-deleniti-enim-sint', 'Odit ut nostrum unde fuga. Id nulla optio amet veniam et beatae commodi. Atque ducimus sed est error inventore est sunt. Aspernatur eveniet porro praesentium alias dignissimos ut aspernatur deleniti.', 4, 'Totam at repellat ut delectus iste velit enim. Non quos et officia iste qui.', '2021-12-09 04:28:00', '2021-12-09 04:28:00', NULL),
(26, 2, NULL, 'Arne Russel', 'odio-ipsa-et-eos-iure-cum', 'Repellendus omnis eveniet perspiciatis voluptatum exercitationem rem voluptatem beatae. Architecto voluptas quis sed sunt et molestiae. Inventore sequi labore quos molestiae.', 6, 'Assumenda optio dolor consequatur impedit et est voluptas voluptatem.', '2021-12-09 04:28:00', '2021-12-09 04:28:00', NULL),
(27, 2, NULL, 'Trystan Cummings', 'dolore-fuga-aut-accusantium-unde-est', 'Eius praesentium itaque molestiae vero. Alias quos nihil vel dolor amet aliquid. Excepturi nihil id recusandae architecto molestiae qui est. Et porro eius odit ea porro officia modi.', 5, 'Voluptas temporibus est non assumenda. Et id odio et in aut.', '2021-12-09 04:28:00', '2021-12-09 04:28:00', NULL),
(28, 2, NULL, 'Paxton Schroeder I', 'a-eos-aperiam-cum-qui', 'Sint repellat aperiam ea recusandae deleniti animi. Rerum distinctio eveniet deleniti perspiciatis. Hic aut nobis eligendi deserunt quas. Culpa minima qui fuga illum sit necessitatibus.', 5, 'Consequatur sunt sint dolores. Velit necessitatibus consequuntur sit incidunt.', '2021-12-09 04:28:00', '2021-12-09 04:28:00', NULL),
(29, 2, NULL, 'Dr. Otho Bernier', 'ut-voluptatum-minima-iste-ab', 'Architecto ipsa architecto ad ex velit provident quae. Eos quaerat enim nesciunt eaque maxime eaque. Ratione eos doloremque sint et quaerat consequatur qui.', 5, 'Est sed culpa nam.', '2021-12-09 04:28:00', '2021-12-09 04:28:00', NULL),
(30, 2, NULL, 'Dr. Reggie Daniel DDS', 'quia-vel-beatae-aliquam', 'Magnam et modi ullam amet iure modi est. Ab dicta tempore explicabo eius consequatur eaque exercitationem. Consequatur voluptatem tempora consequuntur et. Sit placeat at vero eaque tenetur est nulla ut.', 1, 'Ducimus numquam voluptate repudiandae pariatur commodi aliquid qui.', '2021-12-09 04:28:00', '2021-12-09 04:28:00', NULL),
(31, 2, NULL, 'Justen Bahringer', 'aliquam-rerum-ea-et-consequuntur', 'Nostrum voluptatum et quibusdam hic quia possimus ex. Quibusdam optio doloribus voluptatem odit labore. Laboriosam ut ut laboriosam qui.', 1, 'Nisi similique voluptas rerum ullam facere sit quia perferendis.', '2021-12-09 04:28:00', '2021-12-09 04:28:00', NULL),
(32, 2, NULL, 'Prof. Dayton Murray', 'tempora-repudiandae-beatae-autem-aspernatur-modi', 'Aliquid eaque assumenda aut rerum ut fugit. Id et amet possimus praesentium aut dolorum. Voluptates sapiente accusamus quia velit.', 7, 'Sit consequatur eum ipsa.', '2021-12-09 04:28:00', '2021-12-09 04:28:00', NULL),
(33, 2, NULL, 'Emilie Sanford', 'alias-error-ea-cum-alias', 'Quae fugit alias dolor pariatur. Non officia qui ea magnam cupiditate labore pariatur. Esse perferendis ut voluptatum. Quod illo neque nihil qui.', 7, 'Iure vel et ex architecto eos.', '2021-12-09 04:28:00', '2021-12-09 04:28:00', NULL),
(34, 2, NULL, 'Raegan Nader Sr.', 'maxime-minima-quia-animi-rem-voluptates-sit-earum-et', 'Eum voluptatem aut ipsa maiores est et saepe. Doloribus magni vel est adipisci. Aspernatur non et exercitationem consequatur ipsum.', 2, 'Optio dolores aliquid omnis molestiae blanditiis rerum possimus. Ut quis molestiae nemo quae atque.', '2021-12-09 04:28:00', '2021-12-09 04:28:00', NULL),
(35, 2, NULL, 'Greyson Rodriguez PhD', 'qui-voluptatem-non-ut-excepturi-asperiores-vero-cum', 'Beatae dolore saepe dolores ut. Hic recusandae quis necessitatibus perferendis molestiae. Nam in neque autem alias quis et voluptas.', 3, 'Id saepe maiores maxime aut blanditiis facere sit.', '2021-12-09 04:28:00', '2021-12-09 04:28:00', NULL),
(36, 2, NULL, 'Jaqueline Kilback', 'ut-facilis-eaque-omnis-nulla', 'Sequi praesentium dolores voluptatibus est aliquid. Neque magni fugiat sit repellendus et aut et. Velit praesentium corrupti cupiditate consectetur perferendis. Doloribus sed unde molestiae modi.', 3, 'Et soluta eos nemo dolor modi corporis tempore.', '2021-12-09 04:28:00', '2021-12-09 04:28:00', NULL),
(37, 2, NULL, 'Leonardo Pagac', 'eveniet-in-sequi-dicta-consequatur-dolorum', 'Dolore dolores eaque nostrum sed consequatur quae accusamus ipsam. Non atque aperiam laborum molestias. Veritatis quaerat ipsam eos quasi molestiae qui ea expedita. Laborum illum officia nemo voluptate ad.', 7, 'Voluptatem cupiditate officiis sequi id aperiam et. Veniam et repellendus voluptatibus facilis impedit natus.', '2021-12-09 04:28:00', '2021-12-09 04:28:00', NULL),
(38, 2, NULL, 'Bryce Veum', 'explicabo-dolores-omnis-nihil-dolore-vitae-rem-omnis', 'Itaque praesentium architecto sed provident delectus. Natus eum ut et minus sunt. Expedita non quos voluptatem magni quia iure sint.', 2, 'Adipisci deleniti sed ad enim nesciunt. Non aliquam quae modi voluptatem deserunt et beatae quidem.', '2021-12-09 04:28:00', '2021-12-09 04:28:00', NULL),
(39, 2, NULL, 'Garrett Steuber III', 'ab-consequuntur-enim-deserunt-minus-eum-mollitia', 'Fuga in sit atque. Et nostrum aperiam et aperiam voluptatibus at.', 0, 'Assumenda doloremque ducimus optio in laborum molestiae ut sint.', '2021-12-09 04:28:00', '2021-12-09 04:28:00', NULL),
(40, 2, NULL, 'Guadalupe Swift', 'perspiciatis-molestiae-perspiciatis-dolor-cum-nihil-ex', 'Omnis nulla aperiam distinctio nihil. Omnis ad nam maxime aut similique maxime iure recusandae. Sunt rem dolor suscipit repellat sequi consequuntur nobis. Eos doloribus delectus eligendi saepe at modi.', 5, 'Odio sit et sunt eveniet. Illum dicta odio sequi fugit saepe suscipit mollitia.', '2021-12-09 04:28:00', '2021-12-09 04:28:00', NULL),
(41, 2, '20211209140107-1639058467-6DOuwRrLXOvqketr3qdJDEOVWGdLV51b7BWMgPsfvPfQkNCeHW.JPG', 'borobudur', 'borobudur', 'nkjhkjhkhjkhjkh', 68888, 'jogjakarta', '2021-12-09 07:01:07', '2021-12-09 07:01:07', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengaturan`
--

CREATE TABLE `tb_pengaturan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(4) DEFAULT 1,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `email`, `email_verified_at`, `password`, `role`, `phone`, `address`, `image`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'nova07', 'Schuyler Botsford', 'bobby.gutkowski@example.org', '2021-12-09 04:28:00', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, NULL, NULL, NULL, 'b24pilR3Bf', '2021-12-09 04:28:00', '2021-12-09 04:28:00', NULL),
(2, 'kihn.bruce', 'Dr. Milan Hermiston V', 'edwin.fay@example.net', '2021-12-09 04:28:00', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, NULL, NULL, NULL, 'h2pspTVxWH', '2021-12-09 04:28:00', '2021-12-09 04:28:00', NULL),
(3, 'zbruen', 'Dillan Torphy', 'lenny00@example.net', '2021-12-09 04:28:00', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, NULL, NULL, NULL, '7nds9FAnpW', '2021-12-09 04:28:00', '2021-12-09 04:28:00', NULL),
(4, 'pfeffer.aryanna', 'Dallin Becker', 'breanna27@example.org', '2021-12-09 04:28:00', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, NULL, NULL, NULL, 'rlxMOU401q', '2021-12-09 04:28:00', '2021-12-09 04:28:00', NULL),
(5, 'moen.lois', 'Nicolette Ernser', 'bahringer.alexis@example.net', '2021-12-09 04:28:00', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, NULL, NULL, NULL, 'CesMjcqwYT', '2021-12-09 04:28:00', '2021-12-09 04:28:00', NULL),
(6, 'koss.jenifer', 'Elyssa Bayer I', 'sporer.verla@example.net', '2021-12-09 04:28:00', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, NULL, NULL, NULL, 'TKyvGectCJ', '2021-12-09 04:28:00', '2021-12-09 04:28:00', NULL),
(7, 'marianne33', 'Miss Charlene Lubowitz', 'mccullough.elisha@example.com', '2021-12-09 04:28:00', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, NULL, NULL, NULL, 'D3cmDKJRxV', '2021-12-09 04:28:00', '2021-12-09 04:28:00', NULL),
(8, 'pmclaughlin', 'Ms. Aniyah Jenkins MD', 'nicholaus.graham@example.net', '2021-12-09 04:28:00', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, NULL, NULL, NULL, 'kft2Y9u93e', '2021-12-09 04:28:00', '2021-12-09 04:28:00', NULL),
(9, 'kbarrows', 'Prof. Vivien Hamill', 'rempel.boris@example.net', '2021-12-09 04:28:00', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, NULL, NULL, NULL, 'Tr3Sc1vs0V', '2021-12-09 04:28:00', '2021-12-09 04:28:00', NULL),
(10, 'maida.kerluke', 'Ms. Kallie Wolf', 'dubuque.orion@example.net', '2021-12-09 04:28:00', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, NULL, NULL, NULL, 'sBu6WVMptV', '2021-12-09 04:28:00', '2021-12-09 04:28:00', NULL),
(11, 'admin', 'admin', 'admin@gmail.com', '2021-12-09 12:28:14', '$2y$10$eo3WQgYsQG7iroB/0yEVLeOWCS21n8Du4zFxIgjEYVm/UsAJn6yCe', 0, NULL, NULL, NULL, '1b5reFU2F1C0Fw3XLy4vSQ4ad58xmKLiAwbkLqFZpAanaEN2jcej3COQdvKf', NULL, NULL, NULL),
(19, 'agus', 'agus', 'agussalvatru@gmail.com', '2021-12-09 06:13:30', '$2y$10$ksgt6n7H.3Wdq0DTC4d6e.yjCWzaVGTV.MqJGMnMpnZ0Udn.eZlom', 1, '0361', 'denpasar', NULL, NULL, '2021-12-09 06:12:20', '2021-12-09 06:13:30', NULL),
(20, 'cyrama', 'Cyrillus Rama', '190710120@students.uajy.ac.id', NULL, '$2y$10$TnEa9q7VJywa2vFAsVRjt.bsIyNPsSkUKexmtlpjSxU22R15IrTbe', 1, '085729154231', 'sssss', NULL, NULL, '2021-12-09 06:15:10', '2021-12-09 06:15:10', NULL),
(21, 'Alfan123', 'Alfan dinda', 'alfanno8@gmail.com', '2021-12-09 06:35:00', '$2y$10$iHnJWWvLzOcznXURZtQ2EOUhhLIxyU3K/v5Bae4/ZBeewth0Xnd8u', 1, '082232469415', 'Wonosari', NULL, NULL, '2021-12-09 06:34:10', '2021-12-09 06:35:00', NULL),
(22, 'cyrillusrama', 'Cyrillus Rama', 'cyrillusrama81@gmail.com', '2021-12-09 06:57:54', '$2y$10$yr3qPFyQZ9FPoly.ciPY3eq.vNpv0rD1v.sZtYNKRtc6FdzXRHUGe', 1, '085729154231', 'Tampirkulon', NULL, NULL, '2021-12-09 06:57:16', '2021-12-09 06:57:54', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookings_paket_wisata_id_foreign` (`paket_wisata_id`),
  ADD KEY `bookings_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `tb_kategori_paket_wisata`
--
ALTER TABLE `tb_kategori_paket_wisata`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_paket_wisata`
--
ALTER TABLE `tb_paket_wisata`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_paket_wisata_kategori_paket_wisata_id_foreign` (`kategori_paket_wisata_id`);

--
-- Indeks untuk tabel `tb_pengaturan`
--
ALTER TABLE `tb_pengaturan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_kategori_paket_wisata`
--
ALTER TABLE `tb_kategori_paket_wisata`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_paket_wisata`
--
ALTER TABLE `tb_paket_wisata`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT untuk tabel `tb_pengaturan`
--
ALTER TABLE `tb_pengaturan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_paket_wisata_id_foreign` FOREIGN KEY (`paket_wisata_id`) REFERENCES `tb_paket_wisata` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bookings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `tb_paket_wisata`
--
ALTER TABLE `tb_paket_wisata`
  ADD CONSTRAINT `tb_paket_wisata_kategori_paket_wisata_id_foreign` FOREIGN KEY (`kategori_paket_wisata_id`) REFERENCES `tb_kategori_paket_wisata` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
