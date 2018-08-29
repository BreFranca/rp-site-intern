-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 186.202.152.190
-- Generation Time: 22-Ago-2018 às 16:07
-- Versão do servidor: 5.6.35-81.0-log
-- PHP Version: 5.6.30-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rpx_v1`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `atividades`
--

CREATE TABLE `atividades` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `texto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `categoria_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `atividades`
--

INSERT INTO `atividades` (`id`, `nome`, `texto`, `created_at`, `updated_at`, `deleted_at`, `categoria_id`) VALUES
(1, 'Desenvolvimento', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porta eros libero, posuere viverra mi volutpat venenatis. Suspendisse potenti.', '2018-08-22 17:23:30', '2018-08-22 20:07:09', '2018-08-22 20:07:09', 3),
(2, 'Realidade Virtual', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porta eros libero, posuere viverra mi volutpat venenatis. Suspendisse potenti.', '2018-08-22 17:23:30', '2018-08-22 20:07:09', '2018-08-22 20:07:09', 3),
(3, 'Teste de Software', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porta eros libero, posuere viverra mi volutpat venenatis. Suspendisse potenti.', '2018-08-22 17:23:30', '2018-08-22 20:07:10', '2018-08-22 20:07:10', 1),
(4, 'Treinamento SCRUM', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porta eros libero, posuere viverra mi volutpat venenatis. Suspendisse potenti.', '2018-08-22 17:23:30', '2018-08-22 20:07:10', '2018-08-22 20:07:10', 2),
(5, 'Sustentação', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porta eros libero, posuere viverra mi volutpat venenatis. Suspendisse potenti.', '2018-08-22 17:23:30', '2018-08-22 20:07:10', '2018-08-22 20:07:10', 4),
(6, 'Tecnologia', 'Desenvolvimento de aplicações web com alto valor agregado.', '2018-08-22 20:06:51', '2018-08-22 20:06:51', NULL, 3),
(7, 'Inovação', 'Experiências incríveis para seus clientes com Realidade Virtual, Aumentada, Chatbot, Impressão 3D, Holografia, etc', '2018-08-22 20:07:35', '2018-08-22 20:07:35', NULL, 3),
(8, 'Produtora', 'Produção de fotos e vídeos para melhor exposição de sua marca, produto e idéias!', '2018-08-22 20:07:57', '2018-08-22 20:07:57', NULL, 3),
(9, 'Mindset', 'Treinamento e Workshops para quebrar paradigmas e entendimento de novos processos e metodologias.', '2018-08-22 20:08:11', '2018-08-22 20:08:11', NULL, 2),
(10, 'Agile Coaching', 'Treinamento e Workshops para entendimento de processos e práticas ágeis.', '2018-08-22 20:08:24', '2018-08-22 20:08:24', NULL, 2),
(11, 'UX Design', 'Treinamento e Workshops sobre elementos e fatores relativos à interação do usuário com um determinado produto, sistema ou serviço.', '2018-08-22 20:08:40', '2018-08-22 20:08:40', NULL, 2),
(12, 'QUALIDADE', 'Software com confiabilidade, aderência aos requisitos, melhor integração e maior disponibilidade.', '2018-08-22 20:11:12', '2018-08-22 21:31:01', NULL, 4),
(13, 'OVERSEA', 'Todos os produtos e serviços da RP Group no Brasil são abordados no exterior.', '2018-08-22 20:11:23', '2018-08-22 21:41:06', NULL, 1),
(14, 'TESTE DE SOFTWARE', 'Software com maior qualidade, maior segurança, menor custo e maior valor agregado.', '2018-08-22 21:31:31', '2018-08-22 21:31:31', NULL, 4),
(15, 'SUSTENTAÇÃO', 'Melhoria Contínua, Consumo de Recursos e Capacity Planning.', '2018-08-22 21:32:00', '2018-08-22 21:32:00', NULL, 4),
(16, 'PEOPLE OUTSOURCING', 'Em Qualidade, Testes, Desenvolvedores, Arquitetos Técnicos e Funcionais,  Mainframe, Plataforma Distribuída, Web, Mobile, Cloud e BigData.', '2018-08-22 21:32:29', '2018-08-22 21:32:29', NULL, 4),
(17, 'PRODUÇÃO', 'Eliminação de gargalos de sua infra-estrutura, racionalizando seus recursos e retardando novos investimentos.', '2018-08-22 21:32:47', '2018-08-22 21:32:47', NULL, 4),
(18, 'SCRUM', 'Práticas, Conceitos, Planejamento e Monitoramento de Projetos', '2018-08-22 21:38:25', '2018-08-22 21:38:45', NULL, 2),
(19, 'Startups', 'Projetos diferenciados e de alto valor agregado.', '2018-08-22 21:39:32', '2018-08-22 21:39:32', NULL, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `banners`
--

CREATE TABLE `banners` (
  `id` int(10) UNSIGNED NOT NULL,
  `texto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `banner` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `banners`
--

INSERT INTO `banners` (`id`, `texto`, `created_at`, `updated_at`, `deleted_at`, `banner`, `slug`, `link`) VALUES
(1, 'A RPerformance Technology leva todos os serviços do grupo RPerformance Group para o resto do mundo ...', '2018-08-22 18:03:01', '2018-08-22 20:48:47', NULL, '1534950180-bg_tech.png', 'orange', '#'),
(2, 'A RPerformance Academy oferece treinamento no modelo Agile, UX, Mindset e Coaching/Mentoring empresarial para seus colaboradores, além de conhecimentos e formação técnica continuada ...', '2018-08-22 18:03:30', '2018-08-22 20:48:58', NULL, '1534950209-bg_academy.png', 'purple', '#'),
(3, 'A RPerformance Innovation oferece tecnologias inovadoras, como apps, hologramas, foto/vídeo 360, drones, realidade virtual, chatbot, produção de fotos e vídeos, ...', '2018-08-22 18:03:58', '2018-08-22 20:49:11', NULL, '1534950238-bg_inovation.png', 'yellow', '#'),
(4, 'A RPerformance Consulting disponibiliza a metodologia adequada para o modelo de negócios do cliente com melhorias na autonomia, performance e produtividade ...', '2018-08-22 18:04:40', '2018-08-22 20:49:19', NULL, '1534950279-bg_Consulting.png', 'blue', '#');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(10) UNSIGNED NOT NULL,
  `categoria` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `categoria`, `slug`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Technology', 'yellow', '2018-08-22 17:23:30', '2018-08-22 17:23:30', NULL),
(2, 'Academy', 'purple', '2018-08-22 17:23:30', '2018-08-22 17:23:30', NULL),
(3, 'Innovation', 'orange', '2018-08-22 17:23:30', '2018-08-22 17:23:30', NULL),
(4, 'Consulting', 'blue', '2018-08-22 17:23:30', '2018-08-22 17:23:30', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagem` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `imagem`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Shire', '1534949848-imagem(1).png', '2018-08-22 17:57:28', '2018-08-22 17:57:28', NULL),
(2, 'Mars', '1534949865-imagem(2).png', '2018-08-22 17:57:45', '2018-08-22 17:57:45', NULL),
(3, 'Natura', '1534949876-imagem(3).png', '2018-08-22 17:57:56', '2018-08-22 17:57:56', NULL),
(4, 'VisaNet', '1534950753-imagem(4).png', '2018-08-22 17:58:13', '2018-08-22 18:12:33', NULL),
(5, 'SKY', '1534949902-imagem(5).png', '2018-08-22 17:58:22', '2018-08-22 17:58:22', NULL),
(6, 'Sercompe', '1534950765-imagem(6).png', '2018-08-22 17:58:45', '2018-08-22 18:12:45', NULL),
(7, 'BankBoston', '1534950775-imagem(7).png', '2018-08-22 17:59:00', '2018-08-22 18:12:56', NULL),
(8, 'Santander', '1534949950-imagem(8).png', '2018-08-22 17:59:10', '2018-08-22 17:59:10', NULL),
(9, 'Citi', '1534949959-imagem(9).png', '2018-08-22 17:59:19', '2018-08-22 17:59:19', NULL),
(10, 'HP', '1534949967-imagem(10).png', '2018-08-22 17:59:27', '2018-08-22 17:59:27', NULL),
(11, 'GetNet', '1534949980-imagem(11).png', '2018-08-22 17:59:40', '2018-08-22 17:59:40', NULL),
(12, 'Produban', '1534949991-imagem(12).png', '2018-08-22 17:59:51', '2018-08-22 17:59:51', NULL),
(13, 'NET', '1534950002-imagem(13).png', '2018-08-22 18:00:02', '2018-08-22 18:00:02', NULL),
(14, 'Neoris', '1534950015-imagem(14).png', '2018-08-22 18:00:15', '2018-08-22 18:00:15', NULL),
(15, 'Porto_Seguro', '1534950034-imagem(15).png', '2018-08-22 18:00:34', '2018-08-22 18:00:34', NULL),
(16, 'Prodam', '1534950741-imagem(16).png', '2018-08-22 18:00:53', '2018-08-22 18:12:21', NULL),
(17, 'Embratel', '1534950065-imagem(17).png', '2018-08-22 18:01:05', '2018-08-22 18:01:05', NULL),
(18, 'Banamex', '1534950076-imagem(18).png', '2018-08-22 18:01:16', '2018-08-22 18:01:16', NULL),
(19, 'Prefeitura_Sao_Paulo', '1534950098-imagem(19).png', '2018-08-22 18:01:38', '2018-08-22 18:01:38', NULL),
(20, 'Telemar', '1534950108-imagem(20).png', '2018-08-22 18:01:48', '2018-08-22 18:01:48', NULL),
(21, 'IBI', '1534950119-imagem(21).png', '2018-08-22 18:01:59', '2018-08-22 18:01:59', NULL),
(22, 'GaleGale', '1534950130-imagem(22).png', '2018-08-22 18:02:10', '2018-08-22 18:02:10', NULL),
(23, 'Hildebrando', '1534950154-imagem(23).png', '2018-08-22 18:02:34', '2018-08-22 18:02:34', NULL),
(24, 'EDS', '1534950169-imagem(24).png', '2018-08-22 18:02:49', '2018-08-22 18:02:49', NULL),
(25, 'Nextel', '1534950179-imagem(25).png', '2018-08-22 18:02:59', '2018-08-22 18:02:59', NULL),
(26, 'Prudential', '1534950197-imagem(26).png', '2018-08-22 18:03:17', '2018-08-22 18:03:17', NULL),
(27, 'REDECARD', '1534950215-imagem(27).png', '2018-08-22 18:03:35', '2018-08-22 18:03:35', NULL),
(28, 'ITAU', '1534950224-imagem(28).png', '2018-08-22 18:03:44', '2018-08-22 18:03:44', NULL),
(29, 'TELEFONICA', '1534950236-imagem(29).png', '2018-08-22 18:03:56', '2018-08-22 18:03:56', NULL),
(30, 'IBM', '1534950245-imagem(30).png', '2018-08-22 18:04:05', '2018-08-22 18:04:05', NULL),
(31, 'CARREFOUR', '1534950256-imagem(31).png', '2018-08-22 18:04:16', '2018-08-22 18:04:16', NULL),
(32, 'MICHELIN', '1534950349-imagem(33).png', '2018-08-22 18:05:50', '2018-08-22 18:05:50', NULL),
(33, 'NIKE', '1534950362-imagem(34).png', '2018-08-22 18:06:02', '2018-08-22 18:06:02', NULL),
(34, 'ELIZABETH', '1534950384-imagem(35).png', '2018-08-22 18:06:24', '2018-08-22 18:06:24', NULL),
(35, 'EVEN', '1534950395-imagem(36).png', '2018-08-22 18:06:35', '2018-08-22 18:06:35', NULL),
(36, 'SYMANTEC', '1534950416-imagem(37).png', '2018-08-22 18:06:56', '2018-08-22 18:06:56', NULL),
(37, 'EXCLUSIVA_SEX_SHOP', '1534950465-imagem(38).png', '2018-08-22 18:07:45', '2018-08-22 18:07:45', NULL),
(38, 'FABRE_CASTELL', '1534950483-imagem(39).png', '2018-08-22 18:08:03', '2018-08-22 18:08:03', NULL),
(39, 'FVA', '1534950498-imagem(40).png', '2018-08-22 18:08:18', '2018-08-22 18:08:18', NULL),
(40, 'HAYAT_PILATES', '1534950545-imagem(41).png', '2018-08-22 18:09:05', '2018-08-22 18:09:05', NULL),
(41, 'PETROBRAS', '1534950565-imagem(42).png', '2018-08-22 18:09:25', '2018-08-22 18:09:25', NULL),
(42, 'HERBALIFE', '1534950577-imagem(43).png', '2018-08-22 18:09:37', '2018-08-22 18:09:37', NULL),
(43, 'HONDA', '1534950588-imagem(44).png', '2018-08-22 18:09:48', '2018-08-22 18:09:48', NULL),
(44, 'INOVATECH', '1534950600-imagem(45).png', '2018-08-22 18:10:00', '2018-08-22 18:10:00', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `depoimentos`
--

CREATE TABLE `depoimentos` (
  `id` int(10) UNSIGNED NOT NULL,
  `cliente` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `empresa` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `depoimento` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `depoimentos`
--

INSERT INTO `depoimentos` (`id`, `cliente`, `empresa`, `depoimento`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Multicanal', 'Porto Seguro', 'Ter a RP Innovation como fornecedor nos dá a segurança de que teremos sempre o foco na Inovação, uma das competências mais importantes para a Porto Seguro, além do desafio de manter a qualidade na produção de soluções educacionais priorizando sempre a entrega e a excelência no atendimento.', '2018-08-22 17:59:22', '2018-08-22 21:29:32', NULL),
(2, 'Escola de Negócios', 'Porto Seguro', 'A RP Innovation se diferencia pela personalização ao atendimento de seus clientes, oferece-nos soluções inovadoras que se adequam às nossas necessidades. Uma sintonia muito boa que desde o primeiro contato mostrou ser promissora e aderente as necessidades da Porto Seguro.', '2018-08-22 17:59:44', '2018-08-22 21:29:18', NULL),
(3, 'Ellen Junqueira', 'Clipe de Casamento', 'A palavra comprometimento resume. O atendimento, a assistência, a qualidade são mantidas do começa ao fim! Ficamos mega satisfeitos com o resultado apresentado, aliás eles cuidaram com muito carinho de cada detalhe para que tudo ocorresse como havíamos falado. E buscaram trazer pra nós o que havia de melhor no mercado, assim nosso pré wedding ficou com a nossa cara, e o melhor, surpreendente!', '2018-08-22 18:00:01', '2018-08-22 21:42:50', NULL),
(4, 'EdCarlos Carreto', NULL, 'Com um site objetivo e um sistema CRM customizado, a Master Web Solutions nos proporcionou um aumento de contatos e cotações, melhorando nosso atendimento ao cliente e consequentemente elevando nosso faturamento. Estamos felizes com essa essa escolha e parceria!', '2018-08-22 18:00:14', '2018-08-22 21:28:57', '2018-08-22 21:28:57'),
(5, 'Studio Hayat', NULL, 'Atendem as necessidades do cliente e em caso de dúvidas não demoram para dar o suporte. Estamos muito felizes com os serviços prestados pela Master! Recomendo!', '2018-08-22 18:00:35', '2018-08-22 21:29:02', '2018-08-22 21:29:02');

-- --------------------------------------------------------

--
-- Estrutura da tabela `infos`
--

CREATE TABLE `infos` (
  `id` int(10) UNSIGNED NOT NULL,
  `email_contato` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linked_in` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vimeo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `infos`
--

INSERT INTO `infos` (`id`, `email_contato`, `linked_in`, `facebook`, `instagram`, `vimeo`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'contato@rperformance.com.br', 'https://www.linkedin.com/company/rpgroup/', 'https://www.facebook.com/rperformancegroup/', 'https://www.instagram.com/rperformancegroup/', 'https://vimeo.com/rperformancegroup/', '2018-08-22 17:58:56', '2018-08-22 17:58:56', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `media`
--

CREATE TABLE `media` (
  `id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_id` bigint(20) UNSIGNED DEFAULT NULL,
  `collection_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` int(10) UNSIGNED NOT NULL,
  `manipulations` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `custom_properties` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_08_14_182331_create_1534260211_permissions_table', 1),
(4, '2018_08_14_182332_create_1534260212_roles_table', 1),
(5, '2018_08_14_182333_create_1534260213_users_table', 1),
(6, '2018_08_14_182336_create_5b72f3f5117cf_permission_role_table', 1),
(7, '2018_08_14_182337_create_5b72f3f69e20a_role_user_table', 1),
(8, '2018_08_14_183253_create_1534260773_categorias_table', 1),
(9, '2018_08_14_183509_create_1534260909_banners_table', 1),
(10, '2018_08_14_183509_create_media_table', 1),
(11, '2018_08_14_183719_create_1534261039_videos_table', 1),
(12, '2018_08_14_183957_create_1534261196_atividades_table', 1),
(13, '2018_08_14_183958_add_5b72f7cd3febb_relationships_to_atividade_table', 1),
(14, '2018_08_14_184100_create_1534261260_clientes_table', 1),
(15, '2018_08_14_184322_add_5b72f89abd115_relationships_to_atividade_table', 1),
(16, '2018_08_14_185122_create_1534261881_user_actions_table', 1),
(17, '2018_08_14_185123_add_5b72fa7aa4f85_relationships_to_useraction_table', 1),
(18, '2018_08_14_185209_drop_5b72faa953442_user_actions_table', 1),
(19, '2018_08_14_203434_add_5b7312aaabe82_relationships_to_banner_table', 1),
(20, '2018_08_14_203434_update_1534268074_banners_table', 1),
(21, '2018_08_14_204240_update_1534268560_banners_table', 1),
(22, '2018_08_14_204241_add_5b7314910ab93_relationships_to_banner_table', 1),
(23, '2018_08_14_204918_update_1534268958_banners_table', 1),
(24, '2018_08_14_212105_update_1534270865_banners_table', 1),
(25, '2018_08_21_203209_create_1534872729_depoimentos_table', 1),
(26, '2018_08_21_204303_create_1534873383_infos_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `permissions`
--

INSERT INTO `permissions` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'user_management_access', '2018-08-22 17:23:30', '2018-08-22 17:23:30'),
(2, 'permission_access', '2018-08-22 17:23:30', '2018-08-22 17:23:30'),
(3, 'permission_create', '2018-08-22 17:23:30', '2018-08-22 17:23:30'),
(4, 'permission_edit', '2018-08-22 17:23:30', '2018-08-22 17:23:30'),
(5, 'permission_view', '2018-08-22 17:23:30', '2018-08-22 17:23:30'),
(6, 'permission_delete', '2018-08-22 17:23:30', '2018-08-22 17:23:30'),
(7, 'role_access', '2018-08-22 17:23:30', '2018-08-22 17:23:30'),
(8, 'role_create', '2018-08-22 17:23:30', '2018-08-22 17:23:30'),
(9, 'role_edit', '2018-08-22 17:23:30', '2018-08-22 17:23:30'),
(10, 'role_view', '2018-08-22 17:23:31', '2018-08-22 17:23:31'),
(11, 'role_delete', '2018-08-22 17:23:31', '2018-08-22 17:23:31'),
(12, 'user_access', '2018-08-22 17:23:31', '2018-08-22 17:23:31'),
(13, 'user_create', '2018-08-22 17:23:31', '2018-08-22 17:23:31'),
(14, 'user_edit', '2018-08-22 17:23:31', '2018-08-22 17:23:31'),
(15, 'user_view', '2018-08-22 17:23:31', '2018-08-22 17:23:31'),
(16, 'user_delete', '2018-08-22 17:23:31', '2018-08-22 17:23:31'),
(17, 'categoria_access', '2018-08-22 17:23:31', '2018-08-22 17:23:31'),
(18, 'categoria_create', '2018-08-22 17:23:31', '2018-08-22 17:23:31'),
(19, 'categoria_edit', '2018-08-22 17:23:31', '2018-08-22 17:23:31'),
(20, 'categoria_view', '2018-08-22 17:23:31', '2018-08-22 17:23:31'),
(21, 'categoria_delete', '2018-08-22 17:23:31', '2018-08-22 17:23:31'),
(22, 'banner_access', '2018-08-22 17:23:31', '2018-08-22 17:23:31'),
(23, 'banner_create', '2018-08-22 17:23:31', '2018-08-22 17:23:31'),
(24, 'banner_edit', '2018-08-22 17:23:31', '2018-08-22 17:23:31'),
(25, 'banner_view', '2018-08-22 17:23:31', '2018-08-22 17:23:31'),
(26, 'banner_delete', '2018-08-22 17:23:31', '2018-08-22 17:23:31'),
(27, 'video_access', '2018-08-22 17:23:31', '2018-08-22 17:23:31'),
(28, 'video_create', '2018-08-22 17:23:31', '2018-08-22 17:23:31'),
(29, 'video_edit', '2018-08-22 17:23:31', '2018-08-22 17:23:31'),
(30, 'video_view', '2018-08-22 17:23:31', '2018-08-22 17:23:31'),
(31, 'video_delete', '2018-08-22 17:23:31', '2018-08-22 17:23:31'),
(32, 'atividade_access', '2018-08-22 17:23:31', '2018-08-22 17:23:31'),
(33, 'atividade_create', '2018-08-22 17:23:31', '2018-08-22 17:23:31'),
(34, 'atividade_edit', '2018-08-22 17:23:31', '2018-08-22 17:23:31'),
(35, 'atividade_view', '2018-08-22 17:23:31', '2018-08-22 17:23:31'),
(36, 'atividade_delete', '2018-08-22 17:23:31', '2018-08-22 17:23:31'),
(37, 'cliente_access', '2018-08-22 17:23:31', '2018-08-22 17:23:31'),
(38, 'cliente_create', '2018-08-22 17:23:31', '2018-08-22 17:23:31'),
(39, 'cliente_edit', '2018-08-22 17:23:31', '2018-08-22 17:23:31'),
(40, 'cliente_view', '2018-08-22 17:23:31', '2018-08-22 17:23:31'),
(41, 'cliente_delete', '2018-08-22 17:23:31', '2018-08-22 17:23:31'),
(43, 'home_access', '2018-08-22 17:23:31', '2018-08-22 17:23:31'),
(44, 'depoimento_access', '2018-08-22 17:23:31', '2018-08-22 17:23:31'),
(45, 'depoimento_create', '2018-08-22 17:23:31', '2018-08-22 17:23:31'),
(46, 'depoimento_edit', '2018-08-22 17:23:31', '2018-08-22 17:23:31'),
(47, 'depoimento_view', '2018-08-22 17:23:31', '2018-08-22 17:23:31'),
(48, 'depoimento_delete', '2018-08-22 17:23:31', '2018-08-22 17:23:31'),
(49, 'info_access', '2018-08-22 17:23:31', '2018-08-22 17:23:31'),
(50, 'info_create', '2018-08-22 17:23:31', '2018-08-22 17:23:31'),
(51, 'info_edit', '2018-08-22 17:23:31', '2018-08-22 17:23:31'),
(52, 'info_view', '2018-08-22 17:23:31', '2018-08-22 17:23:31'),
(53, 'info_delete', '2018-08-22 17:23:31', '2018-08-22 17:23:31');

-- --------------------------------------------------------

--
-- Estrutura da tabela `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED DEFAULT NULL,
  `role_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(43, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(17, 2),
(18, 2),
(19, 2),
(20, 2),
(21, 2),
(22, 2),
(23, 2),
(24, 2),
(25, 2),
(26, 2),
(27, 2),
(28, 2),
(29, 2),
(30, 2),
(31, 2),
(32, 2),
(33, 2),
(34, 2),
(35, 2),
(36, 2),
(37, 2),
(38, 2),
(39, 2),
(40, 2),
(41, 2),
(43, 2),
(44, 2),
(45, 2),
(46, 2),
(47, 2),
(2, 2),
(3, 2),
(4, 2),
(5, 2),
(48, 2),
(49, 2),
(50, 2),
(51, 2),
(52, 2),
(53, 2),
(1, 3),
(2, 3),
(3, 3),
(4, 3),
(5, 3),
(6, 3),
(7, 3),
(8, 3),
(9, 3),
(10, 3),
(11, 3),
(12, 3),
(13, 3),
(14, 3),
(15, 3),
(16, 3),
(17, 3),
(18, 3),
(19, 3),
(20, 3),
(21, 3),
(22, 3),
(23, 3),
(24, 3),
(25, 3),
(26, 3),
(27, 3),
(28, 3),
(29, 3),
(30, 3),
(31, 3),
(32, 3),
(33, 3),
(34, 3),
(35, 3),
(36, 3),
(37, 3),
(38, 3),
(39, 3),
(40, 3),
(41, 3),
(43, 3),
(44, 3),
(45, 3),
(46, 3),
(47, 3),
(48, 3),
(49, 3),
(50, 3),
(51, 3),
(52, 3),
(53, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `roles`
--

INSERT INTO `roles` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Administrador', '2018-08-22 17:23:31', '2018-08-22 17:23:31'),
(2, 'Usuário simples', '2018-08-22 17:23:31', '2018-08-22 17:23:31'),
(3, 'teste', '2018-08-22 17:41:55', '2018-08-22 17:41:55');

-- --------------------------------------------------------

--
-- Estrutura da tabela `role_user`
--

CREATE TABLE `role_user` (
  `role_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`) VALUES
(1, 1),
(3, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
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
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', '$2y$10$hAWmVqCtJg/74cz9OftgDuaZeYzNNshQoQhSIb3MRSwNeB0oGFhWC', 'Dd2kJaQrcAvKp5cfqP4NKZ3c6RdxVzuPvRp8MUQ0HIqeSM11Kwd9nt1HHvHk', '2018-08-22 17:23:31', '2018-08-22 17:23:31'),
(2, 'teste', 'teste@teste.com', '$2y$10$Pc1NJ5t0eNbq034eXWDbbu56KIIfwBO6igzOyvgpPeHvqcEbOMx0m', 'oarNNFyweOMpbOrsTbTcwfSew5TY5VBiysxVfaaPRUgWbAA1y0aBpGMfxUjk', '2018-08-22 17:42:18', '2018-08-22 17:42:18');

-- --------------------------------------------------------

--
-- Estrutura da tabela `videos`
--

CREATE TABLE `videos` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `texto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `videos`
--

INSERT INTO `videos` (`id`, `titulo`, `texto`, `url`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Pensamos na estratégia do seu negócio!', 'Nossa proposta é analisar, planejar, desenvolver e trazer resultados efetivos para cada cliente. Estamos comprometidos com a entrega de projetos escaláveis e de qualidade!', 'http://www.youtube.com/embed/KGYLe3Liopo?autoplay=1&controls=0&modestbranding=1&rel=0&showinfo=0&loop=1', '2018-08-22 18:02:02', '2018-08-22 18:22:39', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atividades`
--
ALTER TABLE `atividades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `atividades_deleted_at_index` (`deleted_at`),
  ADD KEY `196440_5b72f7ccbd1e4` (`categoria_id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`),
  ADD KEY `banners_deleted_at_index` (`deleted_at`);

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categorias_deleted_at_index` (`deleted_at`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `clientes_deleted_at_index` (`deleted_at`);

--
-- Indexes for table `depoimentos`
--
ALTER TABLE `depoimentos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `depoimentos_deleted_at_index` (`deleted_at`);

--
-- Indexes for table `infos`
--
ALTER TABLE `infos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `infos_deleted_at_index` (`deleted_at`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`);

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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD KEY `fk_p_196430_196431_role_p_5b72f3f511964` (`permission_id`),
  ADD KEY `fk_p_196431_196430_permis_5b72f3f511a73` (`role_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD KEY `fk_p_196431_196432_user_r_5b72f3f69e3cf` (`role_id`),
  ADD KEY `fk_p_196432_196431_role_u_5b72f3f69e4b9` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `videos_deleted_at_index` (`deleted_at`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atividades`
--
ALTER TABLE `atividades`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `depoimentos`
--
ALTER TABLE `depoimentos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `infos`
--
ALTER TABLE `infos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `atividades`
--
ALTER TABLE `atividades`
  ADD CONSTRAINT `196440_5b72f7ccbd1e4` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `fk_p_196430_196431_role_p_5b72f3f511964` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_p_196431_196430_permis_5b72f3f511a73` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `fk_p_196431_196432_user_r_5b72f3f69e3cf` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_p_196432_196431_role_u_5b72f3f69e4b9` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
