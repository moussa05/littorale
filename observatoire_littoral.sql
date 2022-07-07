-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 07 juil. 2022 à 23:11
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `observatoire_littoral`
--

-- --------------------------------------------------------

--
-- Structure de la table `alertes`
--

DROP TABLE IF EXISTS `alertes`;
CREATE TABLE IF NOT EXISTS `alertes` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `idPub` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `alertes_idpub_foreign` (`idPub`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `idPub` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `articles_idpub_foreign` (`idPub`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `idPub`, `description`, `created_at`, `updated_at`) VALUES
(2, 3, 'L’érosion côtière constitue déjà une menace réelle pour le littoral sénégalais (figures 7, 8, 9) qui se verra renforcée par l’impact du changement climatique et notamment l’élévation du niveau marin.\r\n\r\nL’érosion côtière intervient lorsque la perte de sédiments n’est plus compensée par les apports. Deux facteurs contribuent à ce phénomène (ACMAD, 2012) :\r\n\r\nLes facteurs naturels :\r\nLes facteurs hydrodynamiques : vent, houle, courants littoraux, le marnage, le niveau moyen de la mer ;\r\nLes facteurs géomorphologiques : relief côtier, largeur du plateau continental ;\r\nLes facteurs anthropiques \r\nLa construction d’ouvrage (port, immeuble, barrages sur les cours d’eau) ;\r\nExtraction de sable et de gravier.', '2022-07-07 12:57:26', '2022-07-07 12:57:26'),
(3, 4, 'L’érosion côtière constitue déjà une menace réelle pour le littoral sénégalais (figures 7, 8, 9) qui se verra renforcée par l’impact du changement climatique et notamment l’élévation du niveau marin.\r\n\r\nL’érosion côtière intervient lorsque la perte de sédiments n’est plus compensée par les apports. Deux facteurs contribuent à ce phénomène (ACMAD, 2012) :\r\n\r\nLes facteurs naturels :\r\nLes facteurs hydrodynamiques : vent, houle, courants littoraux, le marnage, le niveau moyen de la mer ;\r\nLes facteurs géomorphologiques : relief côtier, largeur du plateau continental ;\r\nLes facteurs anthropiques \r\nLa construction d’ouvrage (port, immeuble, barrages sur les cours d’eau) ;\r\nExtraction de sable et de gravier.', '2022-07-07 12:58:28', '2022-07-07 12:58:28');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `libellle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `libellle`, `created_at`, `updated_at`) VALUES
(2, 'Erosion Côtière', '2022-06-13 17:51:50', '2022-06-13 17:51:50'),
(3, 'Foret Classe', '2022-06-13 17:53:27', '2022-06-13 17:53:27');

-- --------------------------------------------------------

--
-- Structure de la table `documents`
--

DROP TABLE IF EXISTS `documents`;
CREATE TABLE IF NOT EXISTS `documents` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `idPub` bigint(20) UNSIGNED NOT NULL,
  `chemin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `documents_idpub_foreign` (`idPub`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `documents`
--

INSERT INTO `documents` (`id`, `idPub`, `chemin`, `type`, `created_at`, `updated_at`) VALUES
(1, 3, 'Docs/1655731122.docx', '3', '2022-06-20 13:18:42', '2022-06-20 13:18:42'),
(2, 4, 'images/62c6d7e221ceb_MO4_4.2_figure7.jpg', NULL, '2022-07-07 12:58:28', '2022-07-07 12:58:28'),
(3, 4, 'images/62c6d7e564220_MO4_4.2_figure8.jpg', NULL, '2022-07-07 12:58:28', '2022-07-07 12:58:28');

-- --------------------------------------------------------

--
-- Structure de la table `document_articles`
--

DROP TABLE IF EXISTS `document_articles`;
CREATE TABLE IF NOT EXISTS `document_articles` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `idArticle` bigint(20) UNSIGNED NOT NULL,
  `idDocument` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `document_articles_idarticle_foreign` (`idArticle`),
  KEY `document_articles_iddocument_foreign` (`idDocument`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `document_articles`
--

INSERT INTO `document_articles` (`id`, `idArticle`, `idDocument`, `created_at`, `updated_at`) VALUES
(1, 3, 2, '2022-07-07 12:58:28', '2022-07-07 12:58:28'),
(2, 3, 3, '2022-07-07 12:58:28', '2022-07-07 12:58:28');

-- --------------------------------------------------------

--
-- Structure de la table `evenements`
--

DROP TABLE IF EXISTS `evenements`;
CREATE TABLE IF NOT EXISTS `evenements` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `idPub` bigint(20) UNSIGNED NOT NULL,
  `date_evenement` timestamp NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `evenements_idpub_foreign` (`idPub`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `evenements`
--

INSERT INTO `evenements` (`id`, `idPub`, `date_evenement`, `created_at`, `updated_at`) VALUES
(2, 5, '2022-07-30 00:00:00', '2022-07-07 13:00:14', '2022-07-07 13:00:14'),
(3, 6, '2022-08-07 00:00:00', '2022-07-07 13:00:44', '2022-07-07 13:00:44');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `media`
--

DROP TABLE IF EXISTS `media`;
CREATE TABLE IF NOT EXISTS `media` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversions_disk` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `manipulations` json NOT NULL,
  `custom_properties` json NOT NULL,
  `generated_conversions` json NOT NULL,
  `responsive_images` json NOT NULL,
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `media_uuid_unique` (`uuid`),
  KEY `media_model_type_model_id_index` (`model_type`,`model_id`),
  KEY `media_order_column_index` (`order_column`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2022_05_04_204619_create_categories_table', 1),
(5, '2022_06_03_204750_create_organisations_table', 1),
(6, '2022_06_05_000000_create_users_table', 1),
(15, '2022_06_24_204154_create_publications_table', 4),
(8, '2022_06_25_204929_create_documents_table', 1),
(9, '2022_06_25_205717_create_articles_table', 1),
(10, '2022_06_25_205852_create_evenements_table', 1),
(11, '2022_06_26_205349_create_document_articles_table', 1),
(12, '2022_06_25_185628_alerte', 2),
(13, '0000_00_00_000000_create_websockets_statistics_entries_table', 3),
(14, '2022_06_24_213729_create_media_table', 3);

-- --------------------------------------------------------

--
-- Structure de la table `organisations`
--

DROP TABLE IF EXISTS `organisations`;
CREATE TABLE IF NOT EXISTS `organisations` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `publications`
--

DROP TABLE IF EXISTS `publications`;
CREATE TABLE IF NOT EXISTS `publications` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `idcat` bigint(20) UNSIGNED NOT NULL,
  `iduser` bigint(20) UNSIGNED NOT NULL,
  `datePublication` timestamp NOT NULL,
  `actifYN` int(11) DEFAULT NULL,
  `titre` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `publications_idcat_foreign` (`idcat`),
  KEY `publications_iduser_foreign` (`iduser`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `publications`
--

INSERT INTO `publications` (`id`, `idcat`, `iduser`, `datePublication`, `actifYN`, `titre`, `created_at`, `updated_at`) VALUES
(2, 2, 1, '2022-07-07 12:56:08', 1, 'L’érosion côtière : une menace sérieuse pour le littoral sénégalais', '2022-07-07 12:56:08', '2022-07-07 12:56:08'),
(3, 2, 1, '2022-07-07 12:57:26', 1, 'L’érosion côtière : une menace sérieuse pour le littoral sénégalais', '2022-07-07 12:57:26', '2022-07-07 12:57:26'),
(4, 2, 1, '2022-07-07 12:58:28', 1, 'L’érosion côtière : une menace sérieuse pour le littoral sénégalais', '2022-07-07 12:58:28', '2022-07-07 12:58:28'),
(5, 2, 1, '2022-07-07 13:00:14', 1, 'Manifestation Pour la Sauvegarde du littoral', '2022-07-07 13:00:14', '2022-07-07 13:00:14'),
(6, 2, 1, '2022-07-07 13:00:44', 1, 'Symposium sur l\'avancée de la mer', '2022-07-07 13:00:44', '2022-07-07 13:00:44');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `prenom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idOrg` bigint(20) UNSIGNED DEFAULT NULL,
  `poste` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numero_telephone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(155) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `actifYN` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `datenaissance` date DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_idorg_foreign` (`idOrg`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `prenom`, `nom`, `idOrg`, `poste`, `numero_telephone`, `status`, `actifYN`, `email`, `deleted_at`, `datenaissance`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'test@gmail.com', '2022-06-14 00:01:36', NULL, NULL, '$2y$10$wkvO7U9gg3n5XJx95zydfuJdnd7u8CfnfOCs7hwYF230KjmVrXPgO', NULL, '2022-06-20 00:01:36', '2022-06-20 00:01:36'),
(2, 'Admin', 'Admin', NULL, NULL, '772329703', '2', NULL, 'admin@admin.com', NULL, '2022-07-21', NULL, '$2y$10$ltNTkQ5EhuFoPsq0Kl6.1ebRep3BP8Ks31wIs3eElmAf9liHZlKca', NULL, '2022-07-07 23:10:46', '2022-07-07 23:10:46');

-- --------------------------------------------------------

--
-- Structure de la table `websockets_statistics_entries`
--

DROP TABLE IF EXISTS `websockets_statistics_entries`;
CREATE TABLE IF NOT EXISTS `websockets_statistics_entries` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `app_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peak_connection_count` int(11) NOT NULL,
  `websocket_message_count` int(11) NOT NULL,
  `api_message_count` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
