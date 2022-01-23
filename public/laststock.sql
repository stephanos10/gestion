-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 23 jan. 2022 à 22:49
-- Version du serveur : 10.4.20-MariaDB
-- Version de PHP : 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `laststock`
--

-- --------------------------------------------------------

--
-- Structure de la table `allocations`
--

CREATE TABLE `allocations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `materiel_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `succes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `allocations`
--

INSERT INTO `allocations` (`id`, `materiel_id`, `user_id`, `succes`, `adresse`, `date`, `created_at`, `updated_at`) VALUES
(1, 4, 4, 'pas', 'Diourbel', '2021-11-12', '2021-11-30 17:03:45', '2021-11-30 17:03:45');

-- --------------------------------------------------------

--
-- Structure de la table `approtampons`
--

CREATE TABLE `approtampons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marque` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `garantie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `fournisseur_id` int(11) NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provenance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `etat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `materiel_imagename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `materiel_imagepath` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `approvisionnements`
--

CREATE TABLE `approvisionnements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `approvisionnements`
--

INSERT INTO `approvisionnements` (`id`, `date`, `created_at`, `updated_at`) VALUES
(1, '2021-11-13', '2021-11-04 07:16:10', '2021-11-04 07:16:10'),
(2, '2021-11-24', '2021-11-30 16:42:49', '2021-11-30 16:42:49'),
(3, '2021-12-13', '2021-12-13 16:10:39', '2021-12-13 16:10:39');

-- --------------------------------------------------------

--
-- Structure de la table `bdcommandes`
--

CREATE TABLE `bdcommandes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `bdcommandes`
--

INSERT INTO `bdcommandes` (`id`, `date`, `created_at`, `updated_at`) VALUES
(2, '2021-11-11', '2021-11-29 23:58:56', '2021-11-29 23:58:56'),
(3, '2021-11-11', '2021-11-30 16:52:04', '2021-11-30 16:52:04');

-- --------------------------------------------------------

--
-- Structure de la table `campuses`
--

CREATE TABLE `campuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `libelle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `campuses`
--

INSERT INTO `campuses` (`id`, `libelle`, `adresse`, `created_at`, `updated_at`) VALUES
(1, 'ISI Dakar', 'Dakar', '2021-11-11 06:42:48', '2021-11-25 06:42:48'),
(2, 'ISI Kaolac', 'Kaolac', '2021-11-05 06:43:27', '2021-11-08 06:43:27');

-- --------------------------------------------------------

--
-- Structure de la table `demandes`
--

CREATE TABLE `demandes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `libelle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reponse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `update` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `archive` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `demandes`
--

INSERT INTO `demandes` (`id`, `libelle`, `reponse`, `valid`, `update`, `archive`, `type_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Besoin de dix Ordinateurs pour le service informatique', 'Cette demande a été validée', 'Oui', 'Oui', 0, 1, 2, '2021-11-10 07:04:11', '2021-11-30 17:00:57'),
(2, '5 Tenue manquantes dans le total reçu, besoin d\'envoyer ces tenues', 'new', 'new', 'new', 0, 2, 1, '2021-11-10 07:10:39', '2021-11-10 07:10:39'),
(3, 'Besoin d\'un Mac-OS i7 16Go RAM, 1To', 'new', 'new', 'new', 0, 1, 4, '2021-11-10 07:13:09', '2021-11-10 07:13:09'),
(4, 'Besoin d\'un lot de 10 crayon', 'new', 'new', 'new', 0, 1, 1, '2021-11-30 16:55:34', '2021-11-30 16:55:34');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
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
-- Structure de la table `fournisseurs`
--

CREATE TABLE `fournisseurs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `fournisseurs`
--

INSERT INTO `fournisseurs` (`id`, `nom`, `adresse`, `contact`, `created_at`, `updated_at`) VALUES
(8, 'stephanos', 'Lib6', '777639298', '2021-11-04 07:14:15', '2021-11-04 07:14:15'),
(9, 'Gaston', 'Sahm', '782915465', '2021-11-04 07:15:54', '2021-11-04 07:15:54'),
(10, 'Fass', 'Sahm', '789076543', '2021-11-30 16:37:44', '2021-11-30 16:37:44'),
(11, 'Fasso', 'Lib6', '785697834', '2021-11-30 16:40:50', '2021-11-30 16:40:50'),
(12, 'LANG', 'Grand Dakar', '776543231', '2021-12-13 16:07:45', '2021-12-13 16:07:45'),
(13, 'GUEYE', 'Keur-massar', '778976568', '2021-12-13 16:09:18', '2021-12-13 16:09:18');

-- --------------------------------------------------------

--
-- Structure de la table `i_materiels`
--

CREATE TABLE `i_materiels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marque` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `garantie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `fournisseur_id` int(11) NOT NULL,
  `etat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `repartition` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provenance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `materiel_imagename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `materiel_imagepath` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ident` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `i_materiels`
--

INSERT INTO `i_materiels` (`id`, `model`, `marque`, `code`, `numero`, `adresse`, `garantie`, `prix`, `type_id`, `fournisseur_id`, `etat`, `repartition`, `provenance`, `designation`, `materiel_imagename`, `materiel_imagepath`, `date`, `created_at`, `updated_at`, `ident`, `service`) VALUES
(1, 'i7 Ram 16', 'Mac Os', '01GL500000', '01GL', 'ISI Dakar', '1 ans', 500000, 1, 8, 'nickel', 'no', 'ISI Dakar', 'Ordinateur', 'visa.png', 'public/images/LoCG9jvEtKiOUVQCDb3HgiXLrIliwjjvftWIjyg0.png', '2021-11-05', '2021-11-04 07:16:11', '2021-11-04 07:16:11', '051121ISIDKR5MAC', ''),
(2, 'V34', 'Lenovo', '4010ISI200000', '4010ISI', 'ISI Keur-massar', '2 ans', 200000, 1, 9, 'nickel', 'no', 'ISI Kaolac', 'Ordinateur', 'favicon.ico', 'public/images/R8Tza3AsdCqkzaeVZCcH0vQcb5gV4VXsWKrJG3yE.ico', '2021-11-13', '2021-11-04 07:16:11', '2021-11-04 07:16:11', '131121ISIKAO6MAC', ''),
(3, 'H4', 'Lenovo', '13DG200000', '13DG', 'ISI Dakar', '1 ans', 200000, 1, 10, 'nickel', 'no', 'ISI Dakar', 'Ordinateur', 'media.jpg', 'public/images/yTkVBT9WRp10n8W836uXaaNiDXEJJKB2hxU8EhHN.jpg', '2021-11-24', '2021-11-30 16:42:49', '2021-11-30 16:42:49', '241121ISIDKR7MAC', ''),
(4, 'V34', 'Mac Os', '4010ISI150000', '4010ISI', 'ISI Diourbel', '2 ans', 150000, 1, 11, 'nickel', 'no', 'ISI Dakar', 'Ordinateur', 'media.jpg', 'public/images/dQr69eLjnNlyvqjjRWiiEmK7xc9y7IR7xx1chYpI.jpg', '2021-11-24', '2021-11-30 16:42:50', '2021-11-30 16:42:50', '241121ISIDKR8MAC', ''),
(5, 'V23', 'Mac Os', '23DEC750000', '23DEC', 'ISI Dakar', '1 ans', 750000, 1, 12, 'nickel', 'no', 'DiourBel', 'Ordinateur perf', 'signup-image.jpg', 'public/images/ELi9fZcxuTz6AHaRqYU44v33h7NFcB3SiZ4odXYR.jpg', '2021-12-04', '2021-12-13 16:10:40', '2021-12-13 16:10:40', '041221ISIDKR9MAC', ''),
(6, 'HP', 'HP7', 'QS12200000', 'QS12', 'ISI Dakar', '2 ans', 200000, 1, 13, 'nickel', 'no', 'Keur-massar', 'Ordinateur', 'signin-image.jpg', 'public/images/d4csS8NGSY2BNB4SAwllcJS5qBBPAtTUQU6gDqw6.jpg', '2021-12-13', '2021-12-13 16:10:40', '2021-12-13 16:10:40', '131221ISIDKR10HP7', '');

-- --------------------------------------------------------

--
-- Structure de la table `ligneapprovs`
--

CREATE TABLE `ligneapprovs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marque` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `garantie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `appro_id` int(11) NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provenance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `etat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `materiel_imagename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `materiel_imagepath` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `ligneapprovs`
--

INSERT INTO `ligneapprovs` (`id`, `model`, `marque`, `code`, `numero`, `adresse`, `garantie`, `prix`, `type_id`, `appro_id`, `designation`, `provenance`, `etat`, `materiel_imagename`, `materiel_imagepath`, `date`, `created_at`, `updated_at`) VALUES
(1, 'i7 Ram 16', 'Mac Os', '01GL500000', '01GL', 'ISI Dakar', '1 ans', 500000, 1, 1, 'Ordinateur', 'ISI Dakar', 'nickel', 'visa.png', 'public/images/LoCG9jvEtKiOUVQCDb3HgiXLrIliwjjvftWIjyg0.png', '2021-11-05', '2021-11-04 07:16:10', '2021-11-04 07:16:10'),
(2, 'V34', 'Lenovo', '4010ISI200000', '4010ISI', 'ISI Dakar', '2 ans', 200000, 1, 1, 'Ordinateur', 'ISI Kaolac', 'nickel', 'favicon.ico', 'public/images/R8Tza3AsdCqkzaeVZCcH0vQcb5gV4VXsWKrJG3yE.ico', '2021-11-13', '2021-11-04 07:16:11', '2021-11-04 07:16:11'),
(3, 'H4', 'Lenovo', '13DG200000', '13DG', 'ISI Dakar', '1 ans', 200000, 1, 2, 'Ordinateur', 'ISI Dakar', 'nickel', 'media.jpg', 'public/images/yTkVBT9WRp10n8W836uXaaNiDXEJJKB2hxU8EhHN.jpg', '2021-11-24', '2021-11-30 16:42:49', '2021-11-30 16:42:49'),
(4, 'V34', 'Mac Os', '4010ISI150000', '4010ISI', 'ISI Dakar', '2 ans', 150000, 1, 2, 'Ordinateur', 'ISI Dakar', 'nickel', 'media.jpg', 'public/images/dQr69eLjnNlyvqjjRWiiEmK7xc9y7IR7xx1chYpI.jpg', '2021-11-24', '2021-11-30 16:42:49', '2021-11-30 16:42:49'),
(5, 'V23', 'Mac Os', '23DEC750000', '23DEC', 'ISI Dakar', '1 ans', 750000, 1, 3, 'Ordinateur perf', 'DiourBel', 'nickel', 'signup-image.jpg', 'public/images/ELi9fZcxuTz6AHaRqYU44v33h7NFcB3SiZ4odXYR.jpg', '2021-12-04', '2021-12-13 16:10:39', '2021-12-13 16:10:39'),
(6, 'HP', 'HP7', 'QS12200000', 'QS12', 'ISI Dakar', '2 ans', 200000, 1, 3, 'Ordinateur', 'Keur-massar', 'nickel', 'signin-image.jpg', 'public/images/d4csS8NGSY2BNB4SAwllcJS5qBBPAtTUQU6gDqw6.jpg', '2021-12-13', '2021-12-13 16:10:39', '2021-12-13 16:10:39');

-- --------------------------------------------------------

--
-- Structure de la table `matbons`
--

CREATE TABLE `matbons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` int(11) NOT NULL,
  `nombre` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `bon_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nfournisseur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numerof` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `matbons`
--

INSERT INTO `matbons` (`id`, `designation`, `date`, `prix`, `nombre`, `user_id`, `bon_id`, `created_at`, `updated_at`, `nfournisseur`, `numerof`) VALUES
(1, 'feuille d\'examen', '12-11-2021', 1000, 12, 1, 1, '2021-11-29 21:54:40', '2021-11-29 21:54:40', '', ''),
(2, 'Crayon', '2021-11-11', 50, 25, 1, 2, '2021-11-29 22:19:07', '2021-11-29 23:58:57', '', ''),
(4, 'Stylo', '2021-11-11', 100, 25, 1, 3, '2021-11-30 16:50:35', '2021-11-30 16:52:05', '', ''),
(5, 'Gomme', '2021-11-11', 200, 10, 1, 3, '2021-11-30 16:51:05', '2021-11-30 16:52:05', '', ''),
(6, 'Marqueur', '2021-11-11', 150, 15, 1, 3, '2021-11-30 16:51:39', '2021-11-30 16:52:05', '', ''),
(7, 'Ordi Mac', '2021-12-13', 1500000, 10, 1, 0, '2021-12-13 14:59:16', '2021-12-13 14:59:16', 'Stephen', '777639298');

-- --------------------------------------------------------

--
-- Structure de la table `materiels`
--

CREATE TABLE `materiels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marque` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `garantie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `designation` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `materiel_image` blob NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_10_16_122919_create_roles_table', 1),
(6, '2021_10_16_205057_create_type_materiels_table', 1),
(7, '2021_10_16_205334_create_materiels_table', 1),
(8, '2021_10_17_110228_create_i_materiels_table', 1),
(9, '2021_10_18_054258_create_demandes_table', 1),
(10, '2021_10_18_113703_create_campuses_table', 1),
(11, '2021_10_18_113735_create_ligneapprovs_table', 1),
(12, '2021_10_18_234136_create_type_demandes_table', 1),
(13, '2021_10_20_205841_create_allocations_table', 1),
(14, '2021_10_22_164105_create_signalers_table', 1),
(15, '2021_10_23_122026_create_approtampons_table', 1),
(16, '2021_10_23_122222_create_approvisionnements_table', 1),
(17, '2021_10_24_120652_create_repartitions_table', 1),
(18, '2021_10_24_190446_create_repartis_table', 1),
(19, '2021_10_31_133138_create_fournisseurs_table', 1),
(20, '2021_11_29_205447_create_bdcommandes_table', 2),
(21, '2021_11_29_210404_create_matbons_table', 2),
(22, '2021_12_13_143410_add_additional_columns_to_matbons_table', 3),
(23, '2021_12_13_143646_add_additional_columns_to_i_materiels_table', 3),
(24, '2021_12_13_144016_add_additional_columns_to_i_materiels_table', 4),
(25, '2021_12_13_144600_add_additional_columns_to_matbons_table', 5),
(26, '2021_12_13_144720_add_additional_columns_to_i_materiels_table', 5),
(27, '2022_01_10_180659_add_service_colums_to_i_materiels_table', 6),
(28, '2022_01_10_181042_create_services_table', 6),
(29, '2022_01_10_231439_add_service_colums_to_repartis_table', 7);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
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
-- Déchargement des données de la table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 1, 'myapptoken', '534a194b62d20c131b5dedd0955956b6725b4eacd4966b83d3f0cb951078c364', '[\"*\"]', NULL, '2021-11-04 06:49:30', '2021-11-04 06:49:30'),
(2, 'App\\Models\\User', 1, 'myapptoken', 'd5e029baaa721ce1e0c5641f644d036295109210bac2f0bc2f7cf2d3f2136083', '[\"*\"]', NULL, '2021-11-04 06:51:38', '2021-11-04 06:51:38'),
(3, 'App\\Models\\User', 1, 'myapptoken', '749092a08f151f85a182cead8c6f4cb42d7a93d8527b4c3cba3ae53745d302b1', '[\"*\"]', NULL, '2021-11-04 06:52:41', '2021-11-04 06:52:41'),
(4, 'App\\Models\\User', 1, 'myapptoken', 'ee249e7a9ef937ccab8e4c00751237f5e3f448ed0a6ca1c6486f54018d481a47', '[\"*\"]', NULL, '2021-11-10 07:01:01', '2021-11-10 07:01:01'),
(5, 'App\\Models\\User', 1, 'myapptoken', 'cce11172c68d7f5e5da29f44b6284cd88c7069adf74835919248ffd1e0e52745', '[\"*\"]', NULL, '2021-11-26 14:39:10', '2021-11-26 14:39:10'),
(6, 'App\\Models\\User', 1, 'myapptoken', 'c0d271d4c8e0ee9fa06cdac3d3169a9baba42a224296123abfa337c3d3cbd57b', '[\"*\"]', NULL, '2021-11-26 14:46:52', '2021-11-26 14:46:52'),
(7, 'App\\Models\\User', 1, 'myapptoken', 'be19918598375dc3792586515768638d610b7b142bd51b098360284b2cca2b38', '[\"*\"]', NULL, '2021-11-26 14:49:27', '2021-11-26 14:49:27'),
(8, 'App\\Models\\User', 1, 'myapptoken', '63b72004dc40c73d3350f6cc801c1a9b059b60ec6f156c9d77e978e72a4f9e30', '[\"*\"]', NULL, '2021-11-26 14:52:05', '2021-11-26 14:52:05'),
(9, 'App\\Models\\User', 1, 'myapptoken', '77e666994108b40002897c412b846bc21124f593e386b7f0d18a2084bf6588c2', '[\"*\"]', NULL, '2021-11-26 14:54:01', '2021-11-26 14:54:01'),
(10, 'App\\Models\\User', 1, 'myapptoken', '480b41a77664ca4eb320f9106f19832e2e769326fa177ee218b5d83551acdd6c', '[\"*\"]', NULL, '2021-11-26 14:55:11', '2021-11-26 14:55:11'),
(11, 'App\\Models\\User', 1, 'myapptoken', '07ce2ef9bacbaa31af3c549d13dc5872c94592458d4cde0727da95ca65bd4cc7', '[\"*\"]', NULL, '2021-11-26 14:56:13', '2021-11-26 14:56:13'),
(12, 'App\\Models\\User', 1, 'myapptoken', '2d34128bf83c83394f1dca7b2cd0fc037a7bba970ab8e4c6588226dcb78a77a8', '[\"*\"]', NULL, '2021-11-26 14:56:47', '2021-11-26 14:56:47'),
(13, 'App\\Models\\User', 1, 'myapptoken', 'fb2988556cf3c119244d748e222e88062adc0f3a5894740de83c4131dd38e34a', '[\"*\"]', NULL, '2021-11-26 14:57:09', '2021-11-26 14:57:09'),
(14, 'App\\Models\\User', 1, 'myapptoken', '30e1c78b9c64aa46b2909b249546d3e8d8d8d48580f9fba556255c85ab89d04d', '[\"*\"]', NULL, '2021-11-26 14:58:14', '2021-11-26 14:58:14'),
(15, 'App\\Models\\User', 1, 'myapptoken', '3e7b47747aa5b1c8a2f50003de8004412d39acf251b4966808cbbbacb621159b', '[\"*\"]', NULL, '2021-11-26 14:58:50', '2021-11-26 14:58:50'),
(16, 'App\\Models\\User', 1, 'myapptoken', 'fa4d266dd74250dbfaaafcf2565bb09921d1cbd96687bd2d01177650407d2a42', '[\"*\"]', NULL, '2021-11-26 14:59:14', '2021-11-26 14:59:14'),
(17, 'App\\Models\\User', 1, 'myapptoken', 'c4f77f1c2af1cffc31a83d2b7a6a2605caad1b7d247f832e21f07c18ef2e1970', '[\"*\"]', NULL, '2021-11-26 15:01:01', '2021-11-26 15:01:01'),
(18, 'App\\Models\\User', 1, 'myapptoken', '32a014c6666c2c04b820620867b0d814151318f1c0f3b938e4f414d83e91ff5a', '[\"*\"]', NULL, '2021-11-26 15:02:23', '2021-11-26 15:02:23'),
(19, 'App\\Models\\User', 1, 'myapptoken', 'bd8bb1ef8a780e7dc8a096d0af3532b7f4aa8e3f7222427500004a2effa3fc97', '[\"*\"]', NULL, '2021-11-26 15:02:54', '2021-11-26 15:02:54'),
(20, 'App\\Models\\User', 1, 'myapptoken', '134e107f9b32bf4cb1bc5b6f55aa949d5fb822d20db2bb98cc55d39960bf7b02', '[\"*\"]', NULL, '2021-11-26 15:04:34', '2021-11-26 15:04:34'),
(21, 'App\\Models\\User', 1, 'myapptoken', '6e3bef28ae4a92af8dcc8904e96f990e3427adca014ffedebfa262273761521c', '[\"*\"]', NULL, '2021-11-26 15:06:32', '2021-11-26 15:06:32'),
(22, 'App\\Models\\User', 1, 'myapptoken', '00d32e360fd093b0c6cc5128df694db7aa447eaed50f5f4f68e5f94470b3118c', '[\"*\"]', NULL, '2021-11-26 15:07:40', '2021-11-26 15:07:40'),
(23, 'App\\Models\\User', 1, 'myapptoken', 'f906bc93400ccd5b5f247ed779c53c3f0468451fb7271b2843ea7d170b3eb289', '[\"*\"]', NULL, '2021-11-28 18:40:56', '2021-11-28 18:40:56'),
(24, 'App\\Models\\User', 1, 'myapptoken', '97c7d3ea6ad6a8361c75b805ffd57c1ca235564a0a4e42c50793a2aa436d9208', '[\"*\"]', NULL, '2021-11-28 18:51:11', '2021-11-28 18:51:11'),
(25, 'App\\Models\\User', 1, 'myapptoken', 'ca223800921cb582537c22abc8c00f6c2e9ae93fd3b881621494d4c2e73cca46', '[\"*\"]', NULL, '2021-11-28 18:56:18', '2021-11-28 18:56:18'),
(26, 'App\\Models\\User', 1, 'myapptoken', '8293d175e753dfe4fd7e4c222488e08c991b420068a5e429f1759f20007502fe', '[\"*\"]', NULL, '2021-11-28 18:58:16', '2021-11-28 18:58:16'),
(27, 'App\\Models\\User', 1, 'myapptoken', '64871eb765e0cf8fed785c84aa693a2847152f78ff1455aff2ca42a090181a09', '[\"*\"]', NULL, '2021-11-29 22:17:23', '2021-11-29 22:17:23'),
(28, 'App\\Models\\User', 1, 'myapptoken', '8235a7f439ebc85f679dc4c282078abdeae2f0a234208641cdf60707165bc5cf', '[\"*\"]', NULL, '2021-11-30 10:53:11', '2021-11-30 10:53:11'),
(29, 'App\\Models\\User', 1, 'myapptoken', '18be044db45544e5ad12e98042f09a0c66437890c5cab6279bfd44c82c099240', '[\"*\"]', NULL, '2021-11-30 11:05:18', '2021-11-30 11:05:18'),
(30, 'App\\Models\\User', 1, 'myapptoken', '699e88d84b2ab6e503b3812abdf0e4d994b251e92253f5fec92887344a012aaf', '[\"*\"]', NULL, '2021-11-30 14:46:40', '2021-11-30 14:46:40'),
(31, 'App\\Models\\User', 1, 'myapptoken', '8345370433f838ec54db3102b8448f986c9e35f3b2d042484819ccf6191ada47', '[\"*\"]', NULL, '2021-11-30 14:46:57', '2021-11-30 14:46:57'),
(32, 'App\\Models\\User', 2, 'myapptoken', '2646d4fcdef8b251303cdebfa3e52012c310e334dde96ac66347d465cb41c9c6', '[\"*\"]', NULL, '2021-11-30 14:55:05', '2021-11-30 14:55:05'),
(33, 'App\\Models\\User', 3, 'myapptoken', '6b5e4c3d906772bcbc01d51b57b9c645262b6865f14c9c061121dbb61fe32dde', '[\"*\"]', NULL, '2021-11-30 14:57:45', '2021-11-30 14:57:45'),
(34, 'App\\Models\\User', 1, 'myapptoken', '70e16806ad31101696c592ec0f4199466c668d09e0ee48633aa6dadae6aeba3a', '[\"*\"]', NULL, '2021-11-30 16:21:54', '2021-11-30 16:21:54'),
(35, 'App\\Models\\User', 4, 'myapptoken', '5be922f22a161e6b058638146b87357a903378e538b7f8cd431ef52d47bb2caa', '[\"*\"]', NULL, '2021-11-30 16:31:45', '2021-11-30 16:31:45'),
(36, 'App\\Models\\User', 5, 'myapptoken', 'b2fca35763a6758051b08085e5953315a43edb1d8f69847f4934f9f118a10750', '[\"*\"]', NULL, '2021-11-30 17:02:27', '2021-11-30 17:02:27'),
(37, 'App\\Models\\User', 5, 'myapptoken', 'f24f363713ae461417fe0188029032c0cfa2dfb613ec43e5fe1c0de56ff307d7', '[\"*\"]', NULL, '2021-11-30 17:03:05', '2021-11-30 17:03:05'),
(38, 'App\\Models\\User', 5, 'myapptoken', '37a7b54c7c9964a05f050ab422451754d35ab890b97827a112e4ecb6f4389d00', '[\"*\"]', NULL, '2021-11-30 17:03:55', '2021-11-30 17:03:55'),
(39, 'App\\Models\\User', 1, 'myapptoken', '3aef3cfeb39aed0928e977522b7a099f245c643a520cf071d0ceb6a1ad0d35ec', '[\"*\"]', NULL, '2021-11-30 17:08:41', '2021-11-30 17:08:41'),
(40, 'App\\Models\\User', 1, 'myapptoken', 'acffc2f1ec8c321b1f6a305a0d68c750de132dcdcbb276814447163502f48d26', '[\"*\"]', NULL, '2021-12-08 18:38:41', '2021-12-08 18:38:41'),
(41, 'App\\Models\\User', 1, 'myapptoken', '41dbc073774960ecb45750118ffdaeb4223b9a696afd9e589aea48648cf9bd25', '[\"*\"]', NULL, '2021-12-13 12:47:51', '2021-12-13 12:47:51'),
(42, 'App\\Models\\User', 1, 'myapptoken', '8c8047287c9634bdf0da679cd2204459d969f59cba18e8d720b1acf12d2e1300', '[\"*\"]', NULL, '2021-12-13 13:07:29', '2021-12-13 13:07:29'),
(43, 'App\\Models\\User', 1, 'myapptoken', 'b3dcb55b8a88cbc7b5c92006f8a5852a8e1f646d9dc5f97f6720caf66b18016f', '[\"*\"]', NULL, '2021-12-13 13:08:40', '2021-12-13 13:08:40'),
(44, 'App\\Models\\User', 1, 'myapptoken', '205c4f3b4020579f545f37347bdd9dc36642d049a4389a53da6fa5e807b6a628', '[\"*\"]', NULL, '2021-12-13 14:50:02', '2021-12-13 14:50:02'),
(45, 'App\\Models\\User', 6, 'myapptoken', '9171709549d0c1b319f03823e0388e1e356bb7435efe326ff81b96ce65acb89d', '[\"*\"]', NULL, '2021-12-20 19:58:53', '2021-12-20 19:58:53'),
(46, 'App\\Models\\User', 6, 'myapptoken', '4ccb7884298bd16cfab7bf457d7fef6b1cbfb6cd4c6dbb7896c52de5b896f571', '[\"*\"]', NULL, '2021-12-20 20:14:29', '2021-12-20 20:14:29'),
(47, 'App\\Models\\User', 1, 'myapptoken', 'd0a06477caf31fe30d05bfdcd218ca7c64edc0ca6e36e142be23692a7c2ef7f3', '[\"*\"]', NULL, '2021-12-20 20:17:31', '2021-12-20 20:17:31'),
(48, 'App\\Models\\User', 1, 'myapptoken', 'e6bdf270a963832dffad5d4e2ded14aa04a4e5d11ea67255abdc28dadd517103', '[\"*\"]', NULL, '2022-01-07 12:30:34', '2022-01-07 12:30:34'),
(49, 'App\\Models\\User', 7, 'myapptoken', '13218a6f82cd3ac5c291f05e58468f601121452736aa085c46b56d71f3ef9cc8', '[\"*\"]', NULL, '2022-01-10 17:17:54', '2022-01-10 17:17:54'),
(50, 'App\\Models\\User', 7, 'myapptoken', '9eb9a6448d50c19aa8c09bdc43db58a0abdb5d27f967b238a19c059496a4af26', '[\"*\"]', NULL, '2022-01-10 17:35:06', '2022-01-10 17:35:06'),
(51, 'App\\Models\\User', 7, 'myapptoken', '530d2065089558632d57050d18e971c924b73af925f85ba431900230414997eb', '[\"*\"]', NULL, '2022-01-10 20:27:04', '2022-01-10 20:27:04'),
(52, 'App\\Models\\User', 7, 'myapptoken', 'a8de4286e3fbf221e0072a3316bc68b907b2958413831440de3d24027bda9078', '[\"*\"]', NULL, '2022-01-10 22:58:12', '2022-01-10 22:58:12'),
(53, 'App\\Models\\User', 7, 'myapptoken', 'e215ea7d054b8034127584ad93172123abe48cf06996412d1f84f2016a31c10b', '[\"*\"]', NULL, '2022-01-11 10:35:59', '2022-01-11 10:35:59'),
(54, 'App\\Models\\User', 7, 'myapptoken', '74cf21414e19e811716952e9159c380b08a3d351541e8491694829f78f880b5c', '[\"*\"]', NULL, '2022-01-11 12:42:33', '2022-01-11 12:42:33'),
(55, 'App\\Models\\User', 7, 'myapptoken', 'd27146e462cfd8541e7f938041eaa0c13f8ca27adabbac272ca5df007cf7e4e9', '[\"*\"]', NULL, '2022-01-12 18:05:48', '2022-01-12 18:05:48'),
(56, 'App\\Models\\User', 7, 'myapptoken', 'f97bdbb5dfaecc04a70bb4971a6a4c7b5b3d9cf40bcdbac14267698fb89053ab', '[\"*\"]', NULL, '2022-01-12 18:36:29', '2022-01-12 18:36:29'),
(57, 'App\\Models\\User', 7, 'myapptoken', 'e792351d01202cd502834fcf60a4650c942334a6afc11004273592c1c17e4a47', '[\"*\"]', NULL, '2022-01-12 18:40:45', '2022-01-12 18:40:45'),
(58, 'App\\Models\\User', 7, 'myapptoken', 'ff29265dd7dbddd9b4cf4474e2c2c09d86ddd0f54eabd2091008fa1b81d581e4', '[\"*\"]', NULL, '2022-01-19 23:30:19', '2022-01-19 23:30:19'),
(59, 'App\\Models\\User', 7, 'myapptoken', '77cae875131bb1eedea63d57814c5508211b5ae7d76d2161e187a8ef295e95f9', '[\"*\"]', NULL, '2022-01-20 17:33:44', '2022-01-20 17:33:44'),
(60, 'App\\Models\\User', 7, 'myapptoken', 'e3e8ba9bf7080be0e1df55af02180da03dcce5f722375d840316b886521fc4a5', '[\"*\"]', NULL, '2022-01-20 19:21:07', '2022-01-20 19:21:07'),
(61, 'App\\Models\\User', 7, 'myapptoken', '0b44f362a651581c75ae9a54ef41c5026a3f3cffe87291c8729c0389f3ad056e', '[\"*\"]', NULL, '2022-01-22 11:44:58', '2022-01-22 11:44:58'),
(62, 'App\\Models\\User', 7, 'myapptoken', '6045346e386445b8fdfef165d1a2824180b4fec217b245a666341c4c19cd56dd', '[\"*\"]', NULL, '2022-01-22 17:35:54', '2022-01-22 17:35:54'),
(63, 'App\\Models\\User', 7, 'myapptoken', 'f212cf8fd744f13e8773f9ff53e27b47c8cd5a7ae2e0142372c338127711f30c', '[\"*\"]', NULL, '2022-01-23 14:58:28', '2022-01-23 14:58:28'),
(64, 'App\\Models\\User', 7, 'myapptoken', 'c49c764324d8befa1f1fd8315af0fe117b5f5a74e6aedd9314b1907eaaae39a3', '[\"*\"]', NULL, '2022-01-23 15:00:24', '2022-01-23 15:00:24'),
(65, 'App\\Models\\User', 7, 'myapptoken', 'bdf9f84140c8db4cfabd1105a9e9b9832e4130e45de3fb0e5c6f8dbec3ea0c9c', '[\"*\"]', NULL, '2022-01-23 15:09:33', '2022-01-23 15:09:33'),
(66, 'App\\Models\\User', 7, 'myapptoken', '2f4eccfab91e67fa4cc0d2119ed8ea9eeda2360678248fef4f3f7d218cfad427', '[\"*\"]', NULL, '2022-01-23 15:10:21', '2022-01-23 15:10:21'),
(67, 'App\\Models\\User', 7, 'myapptoken', '99f573eb7898f2a6e6f6b9097a192f64a659d67ff8541fdf11894a90c499884e', '[\"*\"]', NULL, '2022-01-23 15:19:55', '2022-01-23 15:19:55'),
(68, 'App\\Models\\User', 7, 'myapptoken', 'd4b895115c607821dc6825c1827b883adc2f503690272221b3db6d1a3a85e809', '[\"*\"]', NULL, '2022-01-23 15:20:24', '2022-01-23 15:20:24'),
(69, 'App\\Models\\User', 7, 'myapptoken', '918ce26a7a910fd09f8222c02a1878fb422885b93789ebdbc8e8641c1ef4074f', '[\"*\"]', NULL, '2022-01-23 15:22:56', '2022-01-23 15:22:56'),
(70, 'App\\Models\\User', 7, 'myapptoken', '24e9bc52b8e7bcbc989e0380667ff7f01a17ff95f411d3db1dbb6e57f3557ee1', '[\"*\"]', NULL, '2022-01-23 15:24:02', '2022-01-23 15:24:02'),
(71, 'App\\Models\\User', 7, 'myapptoken', 'fbe401735c0f4b2058595b55c20053e533c3c87048efb51249deec1694500a0f', '[\"*\"]', NULL, '2022-01-23 15:24:58', '2022-01-23 15:24:58'),
(72, 'App\\Models\\User', 7, 'myapptoken', '864e6f94b006ae489982e7dae9759419b2c563172e905b10095b51c91287242f', '[\"*\"]', NULL, '2022-01-23 15:26:35', '2022-01-23 15:26:35'),
(73, 'App\\Models\\User', 7, 'myapptoken', '5d4bee9962dbace08a9dc458f1139470516145e5f021315348aedbaf19ef1b67', '[\"*\"]', NULL, '2022-01-23 15:27:02', '2022-01-23 15:27:02'),
(74, 'App\\Models\\User', 7, 'myapptoken', 'f7509fa4ead550b0d7e1be5a1f37a0929e14f0423460300f38f25a1e4af96d9e', '[\"*\"]', NULL, '2022-01-23 15:27:42', '2022-01-23 15:27:42'),
(75, 'App\\Models\\User', 7, 'myapptoken', '76cec699d44b65df980fe8b703b1e8db1f0f3ab2c5a841309286d2d7a66ce64c', '[\"*\"]', NULL, '2022-01-23 15:29:37', '2022-01-23 15:29:37'),
(76, 'App\\Models\\User', 7, 'myapptoken', 'b7c2e15fffe34c484e9ed9fe5dbf5d6c069dfa5bad4b5d92d20e993cf0a045e7', '[\"*\"]', NULL, '2022-01-23 15:29:59', '2022-01-23 15:29:59'),
(77, 'App\\Models\\User', 7, 'myapptoken', '90b1f0038bace0193b8d911c5e8ba5311c6cfd2738f61ba923901f73d50a8bf4', '[\"*\"]', NULL, '2022-01-23 15:30:50', '2022-01-23 15:30:50'),
(78, 'App\\Models\\User', 7, 'myapptoken', 'f1b091274d61d68c14a69baf7e81d1340d8fc799327abb0496a16b15c5c78a6c', '[\"*\"]', NULL, '2022-01-23 15:31:08', '2022-01-23 15:31:08'),
(79, 'App\\Models\\User', 7, 'myapptoken', '14de8183c49dab4ffd2abb2a805b9777f8b64a421fa1cd4740772692e06d7872', '[\"*\"]', NULL, '2022-01-23 15:41:19', '2022-01-23 15:41:19'),
(80, 'App\\Models\\User', 7, 'myapptoken', 'fe93a4ec199ed3715a3cc2417df6fcf40e936c335358d2d8c4ea65396efe835c', '[\"*\"]', NULL, '2022-01-23 15:48:13', '2022-01-23 15:48:13');

-- --------------------------------------------------------

--
-- Structure de la table `repartis`
--

CREATE TABLE `repartis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marque` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `garantie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `repartition_id` int(11) NOT NULL,
  `etat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `repartition` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provenance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `materiel_imagename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `materiel_imagepath` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `libelle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `repartis`
--

INSERT INTO `repartis` (`id`, `model`, `marque`, `code`, `numero`, `adresse`, `garantie`, `prix`, `type_id`, `user_id`, `repartition_id`, `etat`, `repartition`, `provenance`, `designation`, `materiel_imagename`, `materiel_imagepath`, `date`, `created_at`, `updated_at`, `libelle`) VALUES
(1, 'H4', 'Lenovo', '13DG200000', '13DG', 'ISI Dakar', '1 ans', 200000, 1, 7, 5, 'nickel', 'no', 'ISI Dakar', 'Ordinateur', 'media.jpg', 'public/images/yTkVBT9WRp10n8W836uXaaNiDXEJJKB2hxU8EhHN.jpg', '2021-11-24', '2021-11-30 16:44:43', '2022-01-11 00:22:11', 'Technique'),
(3, 'i7 Ram 16', 'Mac Os', '01GL500000', '01GL', 'ISI Dakar', '1 ans', 500000, 1, 7, 5, 'nickel', 'no', 'ISI Dakar', 'Ordinateur', 'visa.png', 'public/images/LoCG9jvEtKiOUVQCDb3HgiXLrIliwjjvftWIjyg0.png', '2021-11-05', '2021-11-30 16:45:25', '2022-01-11 00:22:11', 'Technique'),
(7, 'V34', 'Mac Os', '4010ISI150000', '4010ISI', 'ISI Diourbel', '2 ans', 150000, 1, 7, 5, 'nickel', 'no', 'ISI Dakar', 'Ordinateur', 'media.jpg', 'public/images/dQr69eLjnNlyvqjjRWiiEmK7xc9y7IR7xx1chYpI.jpg', '2021-11-24', '2022-01-11 00:19:20', '2022-01-11 00:22:11', 'Technique'),
(8, 'V34', 'Mac Os', '4010ISI150000', '4010ISI', 'ISI Diourbel', '2 ans', 150000, 1, 7, 6, 'nickel', 'no', 'ISI Dakar', 'Ordinateur', 'media.jpg', 'public/images/dQr69eLjnNlyvqjjRWiiEmK7xc9y7IR7xx1chYpI.jpg', '2021-11-24', '2022-01-11 00:42:20', '2022-01-11 00:44:15', 'Commerciale'),
(9, 'V23', 'Mac Os', '23DEC750000', '23DEC', 'ISI Dakar', '1 ans', 750000, 1, 7, 6, 'nickel', 'no', 'DiourBel', 'Ordinateur perf', 'signup-image.jpg', 'public/images/ELi9fZcxuTz6AHaRqYU44v33h7NFcB3SiZ4odXYR.jpg', '2021-12-04', '2022-01-11 00:43:08', '2022-01-11 00:44:15', 'Commerciale'),
(10, 'i7 Ram 16', 'Mac Os', '01GL500000', '01GL', 'ISI Dakar', '1 ans', 500000, 1, 7, 0, 'nickel', 'no', 'ISI Dakar', 'Ordinateur', 'visa.png', 'public/images/LoCG9jvEtKiOUVQCDb3HgiXLrIliwjjvftWIjyg0.png', '2021-11-05', '2022-01-11 13:01:13', '2022-01-11 13:01:13', 'no');

-- --------------------------------------------------------

--
-- Structure de la table `repartitions`
--

CREATE TABLE `repartitions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `repartitions`
--

INSERT INTO `repartitions` (`id`, `user_id`, `adresse`, `created_at`, `updated_at`) VALUES
(4, 7, 'ISI Dakar', '2022-01-10 22:08:30', '2022-01-10 22:08:30'),
(5, 7, 'ISI Dakar', '2022-01-11 00:22:10', '2022-01-11 00:22:10'),
(6, 7, 'ISI Dakar', '2022-01-11 00:44:15', '2022-01-11 00:44:15');

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `libelle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `libelle`, `created_at`, `updated_at`) VALUES
(1, 'Admins', '2021-11-05 06:44:23', '2021-11-06 06:44:23'),
(2, 'UtilSimple', '2021-11-07 06:44:23', '2021-11-07 06:44:23'),
(5, 'Gestionnaire', '2021-11-30 16:29:35', '2021-11-30 16:29:35');

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `libelle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`id`, `libelle`, `created_at`, `updated_at`) VALUES
(1, 'Technique', '2022-01-10 18:30:44', '2022-01-10 18:30:44'),
(3, 'Commerciale', '2022-01-11 00:43:49', '2022-01-11 00:43:49');

-- --------------------------------------------------------

--
-- Structure de la table `signalers`
--

CREATE TABLE `signalers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `materiel_id` int(11) NOT NULL,
  `etat` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `signalers`
--

INSERT INTO `signalers` (`id`, `message`, `user_id`, `materiel_id`, `etat`, `created_at`, `updated_at`) VALUES
(1, 'abimé', 5, 4, 0, '2021-11-30 17:04:48', '2021-11-30 17:04:48');

-- --------------------------------------------------------

--
-- Structure de la table `type_demandes`
--

CREATE TABLE `type_demandes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `libelle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `type_demandes`
--

INSERT INTO `type_demandes` (`id`, `libelle`, `created_at`, `updated_at`) VALUES
(1, 'Allocation', '2021-11-17 07:02:33', '2021-11-24 07:02:33'),
(2, 'Ré-allocation', '2021-11-16 07:02:33', '2021-11-23 07:02:33');

-- --------------------------------------------------------

--
-- Structure de la table `type_materiels`
--

CREATE TABLE `type_materiels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `libelle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_ide` int(11) NOT NULL,
  `campus_id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `telephone`, `role_ide`, `campus_id`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'NZOUX Stephanos', '777639298', 1, 1, 'st@gmail.com', NULL, '$2y$10$KCC8F.cZlIPP1jEAExYPY.MRLbVMGMD1SAj5CRTz2G1021GEcfy8a', NULL, '2021-11-04 06:49:30', '2021-11-28 18:56:37'),
(2, 'SAMBE Abdou', '773456789', 1, 1, 'sabdou@gmail.com', NULL, '$2y$10$6hv2aBfs4PTxGD4voC90aO0Y.od1MRiEcDA2xYKAT9IAzpXoIgaQO', NULL, '2021-11-30 14:55:05', '2021-11-30 14:55:05'),
(4, 'FAYE SOUKEYE', '77739298', 5, 2, 'fs@gmail.com', NULL, '$2y$10$M3ZlB2aKl/hiqoDz5jMbS.C6Yu/MelRkktraqR7qdU9k/JGtDhkoS', NULL, '2021-11-30 16:31:45', '2021-11-30 16:31:45'),
(7, 'testisi', '777639298', 1, 1, 'testisi@gmail.com', NULL, '$2y$10$meo9FtRNiLaMk.cdksG80ehMPEsNCh3zj6Iw9GTQhSonVRneqmXri', NULL, '2022-01-10 17:17:54', '2022-01-10 17:17:54');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `allocations`
--
ALTER TABLE `allocations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `approtampons`
--
ALTER TABLE `approtampons`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `approvisionnements`
--
ALTER TABLE `approvisionnements`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `bdcommandes`
--
ALTER TABLE `bdcommandes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `campuses`
--
ALTER TABLE `campuses`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `demandes`
--
ALTER TABLE `demandes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `fournisseurs`
--
ALTER TABLE `fournisseurs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `i_materiels`
--
ALTER TABLE `i_materiels`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ligneapprovs`
--
ALTER TABLE `ligneapprovs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `matbons`
--
ALTER TABLE `matbons`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `materiels`
--
ALTER TABLE `materiels`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `repartis`
--
ALTER TABLE `repartis`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `repartitions`
--
ALTER TABLE `repartitions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `signalers`
--
ALTER TABLE `signalers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `type_demandes`
--
ALTER TABLE `type_demandes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `type_materiels`
--
ALTER TABLE `type_materiels`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `allocations`
--
ALTER TABLE `allocations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `approtampons`
--
ALTER TABLE `approtampons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `approvisionnements`
--
ALTER TABLE `approvisionnements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `bdcommandes`
--
ALTER TABLE `bdcommandes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `campuses`
--
ALTER TABLE `campuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `demandes`
--
ALTER TABLE `demandes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `fournisseurs`
--
ALTER TABLE `fournisseurs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `i_materiels`
--
ALTER TABLE `i_materiels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `ligneapprovs`
--
ALTER TABLE `ligneapprovs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `matbons`
--
ALTER TABLE `matbons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `materiels`
--
ALTER TABLE `materiels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT pour la table `repartis`
--
ALTER TABLE `repartis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `repartitions`
--
ALTER TABLE `repartitions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `signalers`
--
ALTER TABLE `signalers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `type_demandes`
--
ALTER TABLE `type_demandes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `type_materiels`
--
ALTER TABLE `type_materiels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
