-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2023 at 06:19 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blacksmith`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cat_name`, `details`, `contact`, `image`, `created_at`, `updated_at`) VALUES
(3, 'حداد مظلات', 'حداد تركيب مظلات عادية ومظلات كيربي لكل المنشآت بالكويت, للحدائق والمطاعم والفنادق والمقاهي والفلل والقصور, وكل المنشآت السياحية والصناعية والتجارية والخدمية والسكنية بالكويت.\r\n\r\nنعمل في هذا المجال منذ أكثر من 20 عام, ولدينا حداد هندي وحداد باكستاني وحداد ايراني محترفين في مجال تصنيع وتركيب وصيانة مظلات فخمة وجميلة.\r\n\r\nاتصل على رقم حداد مظلات الكويت على الرقم 56585569 في أي وقت ومن أي محافظة بالكويت.', '56585569525', 'upload/categories/1759780714831102.PNG', '2023-03-08 04:25:12', '2023-03-08 04:41:10'),
(4, 'حداد درابزين', 'رقم حداد درابزين هندي الكويت 56585569 لأحدث خدمات تركيب درابزين مظلات ودرابزين المنزل والحديقة, بالاضافة إلى درابزين للأبواب والنوافذ والشبابيك والفلل والقصور والمطاعم والفنادق والشركات والمكاتب.\r\n\r\nكما ونعمل على تركيب درابزين للدرج المنحني والمستقيم, وكل أنواع المظلات العادية وكيربي, وابواب درابزين.\r\n\r\nخدمات حداد درابزين الكويت متاحة 24 ساعة بكل محافظات الكويت (العاصمة – الاحمدي – حولي – الجهراء – مبارك الكبير- الفروانية – المنطقة العاشرة).', '56585569', 'upload/categories/1759780778885322.PNG', '2023-03-08 04:29:19', '2023-03-08 04:42:11'),
(5, 'حداد شبابيك', 'حداد شبابيك معدن الكويت 56585569 حداد تركيب شبابيك ونوافذ ودرابزين\r\n\r\nحداد شبابيك الكويت لكافة خدمات الحدادة المتعلقة بالشبابيك والأبواب والدرابزين وحداد المظلات حيث نوفر لكم اعمال التصميم والتفصيل والتصليح والصيانة والتركيب بأسعار رخيصة وبجودة ممتازة\r\n\r\nعلى أيدي حدادين مهرة ومختصين من جنسيات عربية أو اجنبية حداد هندي و ايراني وباكستاني حيث نؤمن حداد شبابيك هندي الكويت، حداد درابزين وأبواب وادراج باكستاني الكويت.\r\n\r\nنعمل على تصميم أو تركيب الشبابيك الحديد أو الخشب أو الالمنيوم بخبرة عالية.\r\nاصلاح وصيانة مختلف انواع الشبابيك القلاب والسحاب والمفصلية والشبابيك ذات الشكل الطبقي\r\nنؤمن مختلف خدمات تفصيل أو تركيب الابواب، الدرابزين، المظلات من كل احجامها.', '56585569', 'upload/categories/1759780760531717.PNG', '2023-03-08 04:30:56', '2023-03-08 04:41:54'),
(6, 'حداد درج حديد', 'حداد درج حديد الكويت يوفر لكم خدمات متنوعة في شركتنا من خلال فنيين محترفين في تصنيع وتفصيل وتصميم كافة أنواع الادراج المعلقة الداخلية والخارجية وبأفضل الخامات تصميم مظلات وتصنيع شبابيك حديد تفصيل ابواب حديد وتصنيع الدرايش للفلل والشقق والشركات\r\n\r\nخدمتنا متاحة في كافة مناطق الكويت ونعمل على تركيب وصيانة وفك أدراج متحركة كيسبان وتركيب درابزين وغيرها ونقدم خدمات مختلفة منها:\r\n\r\nتركيب وصيانة درج حديد متحرك كيسبان ودرج كيربي بكافة الأنواع.\r\nتصميم وتفصيل درج حديد دائري بكافة الأنواع وبتصاميم إيطالية أنيقة\r\nنعمل في تركيب درج خارجي وداخلي باستخدام أفضل الأنواع من الستيل والفولاذ الصلب المقاوم للصدأ\r\nتركيب سلم درج حديد الكويت بكافة الأنواع كما نوفر عبر حداد درج حديد الكويت خدمة تركيب درج الطوارئ الخارجي\r\nتصميم درابزين للدريشة بكافة الأنواع وباستخدام أدوات ومعدات خاصة.\r\nتركيب مظلات للسيارات والحدائق بموديلات متنوعة وتركيب غرف كيربي للمؤسسات.\r\nافضل أعمال حداد لحام متنقل وحداد محجر درج حلزوني وافضل معلم حداد نوفر أفضل حداد عام الكويت لصيانة كافة أنواع الأبواب وتركيب درابزين وتصليح وصيانة كافة الادراج بمختلف أنواعها وموديلاتها ونعمل على مدار 24 ساعة وطيلة أيام الأسبوع وبأسعار رخيصة جداً', '56585569', 'upload/categories/1759780769991242.PNG', '2023-03-08 04:32:08', '2023-03-08 04:42:03'),
(7, 'حداد أبواب', 'حداد أبواب الكويت نوفر لكم خدمة تصميم وتفصيل أبواب حديد بمختلف الأحجام للمنازل والفلل والشركات خدمة تركيب شبابيك حديد تصميم درابزين حديد للأبواب والشبابيك والشرفات تفصيل أبواب حديد جرارة ومفصلية ومتحركة لدينا حداد عام الكويت لخدمة تركيب مظلات بروجولات تصميم ديوانيات حديد تركيب كلادينيج واجهات وساندوتش بانل تصميم سواتر حديد تفصيل مقاعد حديد وتركيب خزانات حديد تصميم أسرة حديد.\r\n\r\nخدمتنا متاحة في كافة مناطق الكويت ونعمل من خلال معلم حداد أبواب الكويت في صيانة وتصليح ابواب وشبابيك الحديد والشبابيك ونمتاز ب:\r\n\r\nتفصيل وتصميم أبواب حديد متحركة وابواب قلاب وبزخرفات حديد مميزة\r\nنوفر فني تركيب أبواب حديد الكويت لتركيب وتغير قفل باب الحديد دون خدش طلاء الباب.\r\nتبديل القطع المتصدأ ونوفر قطع غيار بأفضل الماركات ومن أفخم المواد وبجودة عالية\r\nنعمل من خلال حداد أبواب هندي الكويت في تركيب شبابيك حديد وابواب حديد للحدائق العامة والخاصة.\r\nحداد مظلات الكويت وجلسات وسواتر حديد وصيانة شبكات حديد زراعية بخبرة حداد عام الكويت\r\nخدمة 24 ساعة ونقدم خدمة توريد كافة أنواع التصاميم لأبواب الحديد وشبابيك مع خدمة التركيب والفك والصيانة وبخبرات أفضل فني تركيب أبواب حديد سرعة في الإنجاز والإتقان في العمل وبأسعار مناسبة.', '56585569', 'upload/categories/1759780749109949.PNG', '2023-03-08 04:33:13', '2023-03-08 04:41:43');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(4, 'Ahmed Mostafa', 'ahmedalamir521@gmail.com', 'Question', '01012921224', 'drfgynh', '2023-06-12 11:29:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_04_143023_create_categories_table', 2),
(7, '2023_03_08_063519_create_services_table', 3),
(8, '2023_03_08_085131_create_types_table', 4),
(9, '2023_03_08_091912_create_questions_table', 5),
(10, '2023_03_08_093807_create_privacies_table', 6),
(11, '2023_03_08_112035_create_queries_table', 7),
(12, '2023_03_08_114649_create_contacts_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `privacies`
--

CREATE TABLE IF NOT EXISTS `privacies` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `privacies`
--

INSERT INTO `privacies` (`id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(1, 'من نحن', 'عنوان موقعنا على الويب: https://ads-kuwait.net/blacksmith.', '2023-03-08 07:47:00', NULL),
(2, 'تعليقات', 'عندما يترك الزائرون تعليقاتهم على الموقع، نجمع البيانات الموضحة في نموذج التعليقات، وكذلك عنوان IP الخاص بالزائر وسلسلة وكلاء متصفح المستخدم للمساعدة في اكتشاف الرسائل غير المرغوب فيها.\r\n\r\nقد يتم توفير سلسلة مجهولة المصدر تم إنشاؤها من عنوان بريدك الإلكتروني (وتسمى أيضًا hash) إلى خدمة Gravatar لمعرفة ما إذا كنت تستخدمها. سياسة خصوصية خدمة Gravatar متوفرة هنا: https://automattic.com/privacy/. بعد الموافقة على تعليقك، ستكون صورة ملفك الشخصي مرئية للعامة في سياق تعليقك.', '2023-03-08 07:47:26', NULL),
(3, 'وسائط', 'إذا قمت بتحميل الصور إلى موقع الويب، يجب تجنب تحميل الصور مع بيانات الموقع المضمنة (EXIF GPS). يمكن لزوّار الموقع تنزيل واستخراج أي بيانات موقع من الصور على موقع الويب.', '2023-03-08 07:48:20', NULL),
(4, 'ملفات تعريف الارتباط', 'إذا تركت تعليقًا على موقعنا، فيمكنك تمكين حفظ اسمك وعنوان بريدك الإلكتروني وموقعك الإلكتروني في ملفات تعريف الارتباط. هذه هي لراحتك حتى لا تضطر إلى ملء التفاصيل الخاصة بك مرة أخرى عند ترك تعليق آخر. ستستمر ملفات تعريف الارتباط هذه لمدة عام واحد.\r\n\r\nإذا قمت بزيارة صفحة تسجيل الدخول الخاصة بنا، فسنهيئ ملف تعريف ارتباط مؤقت لتحديد ما إذا كان مستعرضك يقبل هذه الملفات. لايحوي ملف تعريف الارتباط هذا أي بيانات شخصية كما يتم التخلص منه عندما تقوم بإغلاق متصفحك.\r\n\r\nعندما تسجّل الدخول نقوم أيضاً بتهيئة ملفات عديدة لتعريف الارتباط من أجل حفظ معلومات دخولك وخيارات شاشة العرض الخاصة بك. ملفات تعريف الارتباط لمعلومات الدخول تبقى ليومين، بينما تبقى ملفات تعريف ارتباط خيارات شاشة العرض لمدة سنة. سيستمر تسجيل دخولك طيلة أسبوعين عندما تختار “تذكرني”، وإذا قمت بتسجيل خروجك من الحساب، سيتم حذف ملفات تعريف ارتباط تسجيل الدخول.\r\n\r\nسيُحفظ ملف إضافي لتعريف الارتباط في مستعرضك إذا قمت بتحرير أو نشر مقال. وهذا الملف لايتضمن أي بيانات شخصية فكل ما في الأمر أنه يشير إلى معرّف المقالة التي حررتها. وستنتهي صلاحيته بعد يوم واحد.', '2023-03-08 07:48:38', NULL),
(5, 'المحتوى المضمّن من مواقع ويب أخرى', 'لمقالات على هذا الموقع قد تشمل محتوى مضمّناً (على سبيل المثال: كمقاطع الفيديو، الصور، المقالات .. الخ). يتصرّف المحتوى المضمَّن من مواقع ويب أخرى بالطريقة نفسها تماماً كما لو أن الزائر زار الموقع الآخر.\r\n\r\nقد تجمع مواقع الويب هذه بيانات عنك، وتستخدم ملفات تعريف الارتباط، وتقوم بضمين تتبعًا إضافيًا – تابعًا لجهة ثالثة خارجية، وتراقب تفاعلك مع هذا المحتوى المضمّن، بما في ذلك تتبع تفاعلك مع المحتوى المضمن إذا كان لديك حساب وتم تسجيل دخولك إلى ذلك الموقع.', '2023-03-08 07:48:55', NULL),
(6, 'مع من نشارك بياناتك', 'إذا طلبت إعادة تعيين كلمة المرور، فسيتم تضمين عنوان IP الخاص بك في رسالة البريد الإلكتروني لإعادة التعيين.\r\n\r\nلا نشارك بياناتك مع أي جهة أو مؤسسة أو شركة, جميع بياناتك آمنة لدينا, ويمكنك التأكد من شهادة SSL الموجودة أعلى المتصفح والتي تُفيد بأن الموقع آمن.', '2023-03-08 07:49:11', NULL),
(7, 'ماهي مدة احتفاظنا ببياناتك', 'إذا تركت تعليقاً، فسيتم الاحتفاظ بالتعليق والبيانات الوصفية الخاصة به إلى أجل غير مسمى. وهذا حتى يمكننا التعرّف على أي تعليقات متتابعة والموافقة عليها تلقائياً بدلاً من الاحتفاظ بها في قائمة انتظار المراجعة للموافقة عليها.\r\n\r\nبالنسبة للمستخدمين الذين قاموا بالتسجيل على موقعنا (إن وجد)، نقوم أيضًا بتخزين المعلومات الشخصية التي يقدمونها في ملف تعريف المستخدم الخاص بهم. يمكن لجميع المستخدمين الاطلاع على معلوماتهم الشخصية أو تعديلها أو حذفها في أي وقت (باستثناء أنه لا يمكنهم تغيير اسم المستخدم الخاص بهم). يمكن لمسؤولي مواقع الويب أيضًا رؤية هذه المعلومات وتحريرها.', '2023-03-08 07:49:27', NULL),
(8, 'ماهي الحقوق العائدة لك على بياناتك', 'إذا كان لديك حساب على هذا الموقع، أو تركت تعليقات، يمكنك طلب الحصول على ملف يتم تصديره من البيانات الشخصية التي نحتفظ بها عنك، بما في ذلك أي بيانات قدمتها لنا. يمكنك أيضًا طلب حذف أي بيانات شخصية نحتفظ بها عنك. هذا لا يشمل أي بيانات نحن ملزمون بالحفاظ عليها لأغراض إدارية أو قانونية أو أمنية', '2023-03-08 07:49:44', NULL),
(9, 'إلى أين نرسل بياناتك', 'يمكن التحقق من تعليقات الزوار من خلال خدمة الكشف عن الرسائل غير المرغوب فيها تلقائيًا.\r\n\r\nلا نرسل بياناتك إلى جهة خارجية ثالثة, يمكن التأكد من أن الموقع آمن للاستخدام من متصفحك في الأعلى والذي يفيد بأن الموقع آمن.', '2023-03-08 07:49:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE IF NOT EXISTS `queries` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`id`, `email`, `contact`, `location`, `details`, `created_at`, `updated_at`) VALUES
(1, 'ahmedalamir521@gmail.com', '56585569', 'الكويت', 'نعمل في مجال الحدادة بالكويت منذ أكثر من 20 عام, ولدينا حداد ايراني وباكستاني وهندي ومصري محترفين في كافة أعمال الحدادة من:\r\n\r\nتركيب مظلات للسيارات والحدائق\r\nتركيب سواتر\r\nتركيب أبواب حديد5\r\nتركيب شبابيك حديد\r\nتركيب درج حديد\r\nتركيب درابزين\r\nوكل ما يتعلق بخدمات الحديد والمعادن, اتصل بنا الآن ولا تتردد.', NULL, '2023-03-08 09:41:32');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(1, 'هل يعمل الحداد على تركيب سواتر؟', 'لدينا حداد سواتر ايراني محترف يعمل على تركيب السواتر المعدنية الحديد للشركات والفلل والمساجد والمدارس والكافيهات والمقاهي والمخازن وكل المنشآت الصناعية والسياحية والخدمة والسكنية في الكويت.', '2023-03-08 07:33:52', '2023-03-08 07:35:41'),
(2, 'هل حداد المظلات يُركب المظلات لكل المنشآت؟', 'بكل تأكيد, يعمل الحداد على تركيب مظلات معدنية للسيارات في الكراج و الحدائق والمدارس والمخازن بكل أنواعها, بالاضافة الى تركيب مظلات كيربي و كيسبان بالاضافة لأعمال تفصيل المظلات بحسب الرغبة.', '2023-03-08 07:34:19', NULL),
(3, 'ما المناطق التي يصل إليها الحداد بالكويت؟', 'يصل الحداد لجميع مناطق الكويت حيث يعمل في العاصمة والاحمدي والمنطقة العاشرة وحولي والجهراء والفروانية ومبارك الكبير والقرين والمنطقة الصناعية وغيرها من المناطق في كل محافظات الكويت.', '2023-03-08 07:34:37', NULL),
(4, 'ما الخدمات التي يقدمها الحداد؟', 'يقدم الكثير من الخدمات وأهمها تركيب سواتر و تركيب مظلات و تركيب درج حديد و درابزين حديد و شبابيك و أبواب وشبرات, وتركيب حديد تحت القرميد, وغيرها من الخدمات الكثيرة.', '2023-03-08 07:34:56', NULL),
(5, 'ما رقم حداد الكويت؟', 'يمكنك التواصل مع حداد الكويت (هندي - باكستاني - ايراني) على الرقم 56585569 في أي وقت ومن أي محافظة في الكويت, مستعدون لتلبية كل الطلبات.', '2023-03-08 07:35:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ser_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_id` bigint(20) UNSIGNED NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `services_cat_id_foreign` (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `ser_name`, `cat_id`, `details`, `image`, `created_at`, `updated_at`) VALUES
(1, 'مظلات كيربي', 3, 'نوفر خدمة تصميم مظلات كيربي تفصيل مظلات بكافة الأحجام حداد مظلات كيريي للسيارات نوفر مظلات كيريي للحدائق صيانة مظلات كيربي ثابتة ومتحركة تركيب مخازن حديد كيربي تفصيل غرف كيريي مقاومة للصدأ والرطوبة تركيب مظلات كيريي للدرج الخارجي نوفر خدماتتا للشركات والفلل والمنازل خدمة ٢٤ ساعة وبأسعار رخيصة جدا, أفضل خدمات حدادة من تركيب وصيانة تجدها لدينا, رقم حداد مظلات سيارات متاح دائماً.', 'upload/services/1759782009293463.PNG', '2023-03-08 05:01:44', NULL),
(2, 'حداد مظلات سيارات', 3, 'نوفر خدمة تفصيل مظلات كيربي للسيارات تصميم مظلات للسيارات بكافة الأحجام تركيب مظلات للباركينج والمواقف صيانة مظلات السيارات الثابتة والمتحركة حداد مظلات مقاومة للرطوبة ومصممة بأفخم المواد تصليح مظلات للسيارات العادية والشاحنة تفصيل مظلات مظلات كيربي وغرف كيربي عبر حداد مظلات سيارات هندي وباكستاني محترف خدمة ٢٤ ساعة وبأرخص الأسعار', 'upload/services/1759782220546226.PNG', '2023-03-08 05:05:06', NULL),
(3, 'مظلات حدائق', 3, 'نؤمن لكم أفضل خدمة تصميم وتفصيل مظلات للحدائق عبر حداد مظلات حدائق هندي وباكستاني تركيب مظلات للحدائق العامة والخاصة تصميم مظلات كيريي للسيارات وللفلل وللمسابح بخامات متميزة وجودة عالية مقاومة للحرارة وضغط و الصدأ بأحجام وقياسات متفاوتة صيانة حدادة دورية وتبديل القطع التالفة بتكلفة بسيطة تصميم سور حدائق خدمة ٢٤ ساعة, تواصل على رقم حداد مظلات 56585569', 'upload/services/1759782277584738.PNG', '2023-03-08 05:06:00', NULL),
(4, 'تفصيل مظلات', 3, 'نوفر لكم خدمة تفصيل مظلات من مواد عالية الجودة ومطلية بمواد مقاومة للصدأ نركب مظلات في الكويت ثابتة ومتحركة وبعدة أشكال وموديلات ومناسبة للحدائق والفلل والسيارات والشرفات وبأسعار رخيصة جدا مع خدمة فك وتركيب وصيانة على مدار ٢٤ ساعة, اعمال حدادة الكويت نعمل فيها منذ أكثر من 20 عام, كما ونعمل على تركيب مظلات كيسبان باحترافية عالية جداً.', 'upload/services/1759782341387334.PNG', '2023-03-08 05:07:01', NULL),
(5, 'درابزين مظلات', 4, 'خدمة تركيب صيانة وتصليح درابزين مظلات كيريي كيسبان خدمة تصميم وتفصيل مظلات ثابتة ومتحركة بأحجام مختلفة للسيارات والحدائق تفصيل درابزين مظلات للمسابح بكافة النقشات والرسومات الهندسية تركيب درابزين مظلات فك وصيانة درابزين بالاضافة لخدمة تركيب شبرات حديد ذات جودة عالية.', 'upload/services/1759782427138893.PNG', '2023-03-08 05:08:23', NULL),
(6, 'درابزين حدائق', 4, 'خدمة تركيب درابزين حدائق مصمم بطريقة عصرية وبأشكال هندسية ومصنع من خامات معدنية عالية الجودة وبعدة أطوال ومقاسات مختلفة ومطلية بمواد مقاومة للصدأ وبعدة الوان صيانة وتصليح درابزين حدائق تركيب درابزين للحدائق العامة ودرابزين حديقة المنازل والفلل والابراج والمنشآت وصيانة سور حدائق وتركيب أبواب حدائق أسعارنا مدروسة', 'upload/services/1759782472725511.PNG', '2023-03-08 05:09:06', NULL),
(7, 'درابزين المنزل', 4, 'نؤمن لكم خدمة تصنيع درابزين للمنزل والفلل والمكاتب والشركات بأحجام مختلفة واشكال متنوعة والمصنوعة من أجود أنواع الحديد المقاومة للصدأ والحرارة تركيب درابزين ثابتة ومتحركة وبأسعار جدا رخيصة صيانة درابزين درايش وشبابيك وإصلاح درابزين الدرج و الدرابزين الدائري, لدينا أيضاً خدمات حدادة تركيب شبرات بجودة ممتازة', 'upload/services/1759782516898567.PNG', '2023-03-08 05:09:48', NULL),
(8, 'درابزين بلكون', 4, 'نوفر لكم أجود أنواع درابزين بلكون المتين ومقاوم للضغط وعوامل الطقس ومطلي بمواد مضادة للصدأ وبعدة ألوان ومصمم بعد أشكال وموديلات منها الدائري والعادي ومنها درابزين مخصص لحماية الاطفال عبر امهر حداد هندي وايراني وباكستاني مصنع من أجود أنواع الحديد الصلب خدمة ٢٤ ساعة وبأسعار تناسب الجميع', 'upload/services/1759782556763216.PNG', '2023-03-08 05:10:26', NULL),
(9, 'حداد درابزين للأبواب', 4, 'نقدم لكم ورشة حدادة كاملة لتصنيع الدرابزين الخاصة للأبواب الكبيرة والصغيرة خدمتنا متاحة للفلل والمنازل والشركات حيث يتوفر لدينا درابزين خاص للأبواب الداخلية والخارجية ومنها باب ثابت ومتحرك و الأبواب المصنعة بخبرة أشطر حداد ايراني مع خدمة الفك والتركيب باستخدام أفضل المعدات الحديثة وبأسعار متميزة.', 'upload/services/1759782621320169.PNG', '2023-03-08 05:11:28', NULL),
(10, 'حداد درابزين للنوافذ', 4, 'نؤمن لكم خدمة تصنيع درابزين حديد للنوافذ بأحجام ومقاسات دقيقة واشكال عصرية وحديثة منها الدائري والعادي والمصنوعة بواسطة أشطر حداد هندي حيث نوفر لكم أيضا خدمة فك وتركيب اسوار الأبواب والنوافذ بدقة عالية عبر أفضل فريق عمل خبير نحن على تواجد طيلة أيام الاسبوع راسلنا ولا تتردد', 'upload/services/1759782676990489.PNG', '2023-03-08 05:12:21', NULL),
(11, 'حداد درابزين للدرج', 4, 'يوفر لكم معلم حدادة أحدث موديلات درابزين الدرج المصنعة على ايدي أفضل حداد باكستاني حيث نؤمن لكم درابزين متين للدرج الداخلي والخارجي حيث يتميز بسماكة عالية مقاوم للصدأ وبمقاسات مختلفة وأسعار مميزة, ويتم تركيب درابزين للدرج المستقيم والمنحني وحتى درج الحديد.', 'upload/services/1759782731927864.PNG', '2023-03-08 05:13:13', NULL),
(12, 'حداد شبابيك', 4, 'نقوم لكم خدمة حداد شبابيك حديد متميزة باجمل التصاميم العصرية والهندسية مع اشكال دائرية وعادية وبمقاسات مختلفة وبسماكات متفاوتة بخبرة حداد ايراني وحداد هندي مصنعة بأجود انواع الحديد الخام الصلب المتين والمقاوم للرطوبة والحرارة خدمة فك وتركيب ٢٤ ساعة وتثبيت عالي الكفاءة والجودة وبأسعار رخيصة جدا, و حداد ابواب معلم ذو خبرة عالية.', 'upload/services/1759782772512849.PNG', '2023-03-08 05:13:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE IF NOT EXISTS `types` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `thename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `thename`, `details`, `image`, `created_at`, `updated_at`) VALUES
(1, 'حداد هندي', 'نؤمن لعملائنا الاعزاء خدمات حداد هندي المحترف و صاحب الخبرة العالية في كافة خدمات الحدادة من تفصيل أو تصميم الشبابيك و الابواب مع تركيبها، تصنيع و تصميم المظلات من كل قياساتها مع حداد مظلات ماهر، صناعة و تركيب الدرابزين، اسعار مميزة و مدروسة، اعمال حداد هندي متاحة للجميع في كل وقت, تركيب شبرات مخازن.', 'upload/types/1759789666733428.PNG', '2023-03-08 07:03:27', NULL),
(2, 'حداد ايراني', 'يعمل حداد ايراني على تامين مختلف الاعمال و الخدمات في عالم الحدادة، تفصيل ابواب أو شبابيك، تصميم أو تركيب مظلات للحدائق و كرجات السيارات و الفلل مع أمهر حداد مظلات، تصنيع مختلف انواع الدرابزين و درج الحديد، صيانة أو اصلاح الابواب للمنازل و الشركات، انسب الاسعار تجدونها لدينا, فني تركيب وتصميم شبرات.', 'upload/types/1759789725723668.PNG', '2023-03-08 07:04:23', NULL),
(3, 'حداد باكستاني', 'نوفر امهر فني حداد باكستاني لخدمات تصنيع أو تفصيل الدرابزين و الابواب، تصميم مختلف الموديلات و القياسات للشبابيك بكافة انواعها، تأمين حداد مظلات لصناعة أو تركيب المظلات للسيارات أو الشاليهات أو الحدائق، صيانة أو تصليح ابواب و شبابيك، تركيب درج حديد، اسعار رخيصة و منافسة, معلم تركيب شبرات مخازن.', 'upload/types/1759789754253822.PNG', '2023-03-08 07:04:51', NULL),
(4, 'حداد مصري', 'يقوم فني حداد مصري بتقديم العديد من خدمات تركيب أو تصميم الابواب و الشبابيك و درج حديد بقياسات و احجام متنوعة، تصنيع و تفصيل الدرابزين بأنواعها كافة، صناعة مختلف الموديلات و المقاسات من المظلات على يد امهر حداد مظلات، تامين خدمات حداد مصري للمنازل و الشركات و الفنادق، اسعار منافسة و مدروسة.', 'upload/types/1759789779329218.PNG', '2023-03-08 07:05:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `contact`, `address`, `country`, `city`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'سوبر أدمن', 'admin123@gmail.com', NULL, '$2y$10$pKxnxsXmDpfGdtj1o2eTSuoSayOMmmc5j9ByAWDOq7QRVQYzmC2ji', '01012921244', 'مصر - المنيا - ديرمواس - الناصرية', 'مصر', 'المنيا', NULL, '2023-03-03 06:08:20', '2023-03-03 07:22:51');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
