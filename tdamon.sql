-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 04, 2018 at 01:32 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tdamon`
--

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `id` int(11) NOT NULL,
  `title_ar` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `title_ur` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `country_id` int(11) NOT NULL,
  `url` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`id`, `title_ar`, `title_en`, `title_ur`, `image`, `country_id`, `url`, `created_at`, `updated_at`) VALUES
(1, 'وكيل 1', 'agent 1', 'وكيل 1', 'images/agents/LV0hlg_1517224508_summer_Maldives_beaches_1920x1080.jpg', 1, NULL, '2018-01-29 09:15:08', '2018-01-29 09:15:08'),
(2, 'وكيل 2', 'agent 2', 'وكيل 2', 'images/agents/JJ0OIS_1517224529_Sveti_Stefan_Montenegro_Adriatic_sea_island_beach_building_1920x1200.jpg', 1, NULL, '2018-01-29 09:15:29', '2018-01-29 09:15:29');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title_ar` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `title_ur` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title_ar`, `title_en`, `title_ur`, `created_at`, `updated_at`) VALUES
(1, 'عمرة شعبان', 'Shabaan umrah', 'عمرة شعبان', '2018-01-29 09:33:10', '2018-01-29 09:33:10'),
(2, 'عمرة المولد النبوى', 'Moled Umrah', 'عمرة المولد النبوى', '2018-01-29 09:34:30', '2018-01-29 09:34:30');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `title_ar` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `title_ur` varchar(255) NOT NULL,
  `content_ar` text NOT NULL,
  `content_en` text NOT NULL,
  `content_ur` text NOT NULL,
  `image` text NOT NULL,
  `country_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `keywords_ar` text NOT NULL,
  `keywords_en` text NOT NULL,
  `keywords_ur` text NOT NULL,
  `description_ar` text NOT NULL,
  `description_en` text NOT NULL,
  `description_ur` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `title_ar`, `title_en`, `title_ur`, `content_ar`, `content_en`, `content_ur`, `image`, `country_id`, `created_at`, `updated_at`, `keywords_ar`, `keywords_en`, `keywords_ur`, `description_ar`, `description_en`, `description_ur`) VALUES
(1, 'مكة المكرمة', 'Makkah', 'مکہ', 'مكة المكرمة هي مدينة مقدسة لدى المسلمين، بها المسجد الحرام، والكعبة التي تعد قبلة المسلمين في صلاتهم. تقع غرب المملكة العربية السعودية، تبعد عن المدينة المنورة حوالي 400 كيلومتر في الاتجاه الجنوبي الغربي، وعن مدينة الطائف حوالي 120 كيلومترا في الاتجاه الشرقي، وعلى بعد 72 كيلومترا من مدينة جدة وساحل البحر الأحمر، وأقرب الموانئ لها هو ميناء جدة الإسلامي، وأقرب المطارات الدولية لها هو مطار الملك عبد العزيز الدولي', 'Makkah (Arabic ‎ Makkah   is a city in the Tihamah plain in Saudi Arabia and is also the capital and administrative headquarters of the Makkah Region.  The city is located 70 km (43 mi) inland from Jeddah in a narrow valley at a height of 277 m (909 ft) above sea level, and 340 kilometres (210 mi) south of Medina. Its resident population in 2012 was roughly 2 million, although visitors more than triple this number every year during the hajj (\"pilgrimage\") period held in the twelfth Muslim lunar month of Dhu al-Hijjah.', 'مكة المكرمة هي مدينة مقدسة لدى المسلمين، بها المسجد الحرام، والكعبة التي تعد قبلة المسلمين في صلاتهم. تقع غرب المملكة العربية السعودية، تبعد عن المدينة المنورة حوالي 400 كيلومتر في الاتجاه الجنوبي الغربي، وعن مدينة الطائف حوالي 120 كيلومترا في الاتجاه الشرقي، وعلى بعد 72 كيلومترا من مدينة جدة وساحل البحر الأحمر، وأقرب الموانئ لها هو ميناء جدة الإسلامي، وأقرب المطارات الدولية لها هو مطار الملك عبد العزيز الدولي', 'images/cities/UcQ1iu_1517224796_egyptian-pyramids-oriental-tours-egypt.jpg', 1, '2018-01-29 11:19:56', '2018-01-29 09:19:56', 'مكة المكرمة هي مدينة مقدسة لدى المسلمين، بها المسجد الحرام، والكعبة التي تعد قبلة المسلمين في صلاتهم. تقع غرب المملكة العربية السعودية، تبعد عن المدينة المنورة حوالي 400 كيلومتر في الاتجاه الجنوبي الغربي، وعن مدينة الطائف حوالي 120 كيلومترا في الاتجاه الشرقي، وعلى بعد 72 كيلومترا من مدينة جدة وساحل البحر الأحمر، وأقرب الموانئ لها هو ميناء جدة الإسلامي، وأقرب المطارات الدولية لها هو مطار الملك عبد العزيز الدولي', 'Makkah (Arabic ‎ Makkah   is a city in the Tihamah plain in Saudi Arabia and is also the capital and administrative headquarters of the Makkah Region.  The city is located 70 km (43 mi) inland from Jeddah in a narrow valley at a height of 277 m (909 ft) above sea level, and 340 kilometres (210 mi) south of Medina. Its resident population in 2012 was roughly 2 million, although visitors more than triple this number every year during the hajj (\"pilgrimage\") period held in the twelfth Muslim lunar month of Dhu al-Hijjah.', 'مكة المكرمة هي مدينة مقدسة لدى المسلمين، بها المسجد الحرام، والكعبة التي تعد قبلة المسلمين في صلاتهم. تقع غرب المملكة العربية السعودية، تبعد عن المدينة المنورة حوالي 400 كيلومتر في الاتجاه الجنوبي الغربي، وعن مدينة الطائف حوالي 120 كيلومترا في الاتجاه الشرقي، وعلى بعد 72 كيلومترا من مدينة جدة وساحل البحر الأحمر، وأقرب الموانئ لها هو ميناء جدة الإسلامي، وأقرب المطارات الدولية لها هو مطار الملك عبد العزيز الدولي', 'مكة المكرمة هي مدينة مقدسة لدى المسلمين، بها المسجد الحرام، والكعبة التي تعد قبلة المسلمين في صلاتهم. تقع غرب المملكة العربية السعودية، تبعد عن المدينة المنورة حوالي 400 كيلومتر في الاتجاه الجنوبي الغربي، وعن مدينة الطائف حوالي 120 كيلومترا في الاتجاه الشرقي، وعلى بعد 72 كيلومترا من مدينة جدة وساحل البحر الأحمر، وأقرب الموانئ لها هو ميناء جدة الإسلامي، وأقرب المطارات الدولية لها هو مطار الملك عبد العزيز الدولي', 'Makkah (Arabic ‎ Makkah   is a city in the Tihamah plain in Saudi Arabia and is also the capital and administrative headquarters of the Makkah Region.  The city is located 70 km (43 mi) inland from Jeddah in a narrow valley at a height of 277 m (909 ft) above sea level, and 340 kilometres (210 mi) south of Medina. Its resident population in 2012 was roughly 2 million, although visitors more than triple this number every year during the hajj (\"pilgrimage\") period held in the twelfth Muslim lunar month of Dhu al-Hijjah.', 'مكة المكرمة هي مدينة مقدسة لدى المسلمين، بها المسجد الحرام، والكعبة التي تعد قبلة المسلمين في صلاتهم. تقع غرب المملكة العربية السعودية، تبعد عن المدينة المنورة حوالي 400 كيلومتر في الاتجاه الجنوبي الغربي، وعن مدينة الطائف حوالي 120 كيلومترا في الاتجاه الشرقي، وعلى بعد 72 كيلومترا من مدينة جدة وساحل البحر الأحمر، وأقرب الموانئ لها هو ميناء جدة الإسلامي، وأقرب المطارات الدولية لها هو مطار الملك عبد العزيز الدولي'),
(2, 'المدينة المنورة', 'Madina El Monawara', 'مدینہ', 'المدينة المنورة يلقبها المسلمون \"طيبة الطيبة\" أول عاصمة في تاريخ الإسلام، وثاني أقدس الأماكن لدى المسلمين بعد مكة. هي عاصمة منطقة المدينة المنورة الواقعة على أرض الحجاز التاريخية غرب المملكة العربية السعودية، تبعد المدينة المنورة حوالي 400 كم عن مكة المكرمة في الاتجاه الشمالي الشرقي، وعلى بعد حوالي 150 كم شرق البحر الأحمر، وأقرب الموانئ لها هو ميناء ينبع والذي يقع في الجهة الغربية الجنوبية منها ويبعد عنها 220 كم،تبلغ مساحة المدينة المنورة حوالي 589 كم²  منها 99 كم² تشغلها المنطقة العمرانية، أما باقي المساحة فهي خارج المنطقة العمرانية، وتتكون من جبال ووديان ومنحدرات سيول وأراض صحراوية وأخرى زراعية ومقابر وأجزاء من شبكة الطرق السريعة.', 'is a city and administrative headquarters of the Al-Madinah Region of Saudi Arabia. At the city\'s heart is al-Masjid an-Nabawi (\"the Prophet\'s Mosque\"), which is the burial place of the Islamic prophet Muhammad, and is the second-holiest city in Islam after Mecca.', 'المدينة المنورة يلقبها المسلمون \"طيبة الطيبة\" أول عاصمة في تاريخ الإسلام، وثاني أقدس الأماكن لدى المسلمين بعد مكة. هي عاصمة منطقة المدينة المنورة الواقعة على أرض الحجاز التاريخية غرب المملكة العربية السعودية، تبعد المدينة المنورة حوالي 400 كم عن مكة المكرمة في الاتجاه الشمالي الشرقي، وعلى بعد حوالي 150 كم شرق البحر الأحمر، وأقرب الموانئ لها هو ميناء ينبع والذي يقع في الجهة الغربية الجنوبية منها ويبعد عنها 220 كم،تبلغ مساحة المدينة المنورة حوالي 589 كم²  منها 99 كم² تشغلها المنطقة العمرانية، أما باقي المساحة فهي خارج المنطقة العمرانية، وتتكون من جبال ووديان ومنحدرات سيول وأراض صحراوية وأخرى زراعية ومقابر وأجزاء من شبكة الطرق السريعة.', 'images/cities/1SJmCN_1517224777_1.jpg', 1, '2018-01-29 11:19:37', '2018-01-29 09:19:37', 'المدينة المنورة يلقبها المسلمون \"طيبة الطيبة\" أول عاصمة في تاريخ الإسلام، وثاني أقدس الأماكن لدى المسلمين بعد مكة. هي عاصمة منطقة المدينة المنورة الواقعة على أرض الحجاز التاريخية غرب المملكة العربية السعودية، تبعد المدينة المنورة حوالي 400 كم عن مكة المكرمة في الاتجاه الشمالي الشرقي، وعلى بعد حوالي 150 كم شرق البحر الأحمر، وأقرب الموانئ لها هو ميناء ينبع والذي يقع في الجهة الغربية الجنوبية منها ويبعد عنها 220 كم،تبلغ مساحة المدينة المنورة حوالي 589 كم²  منها 99 كم² تشغلها المنطقة العمرانية، أما باقي المساحة فهي خارج المنطقة العمرانية، وتتكون من جبال ووديان ومنحدرات سيول وأراض صحراوية وأخرى زراعية ومقابر وأجزاء من شبكة الطرق السريعة.', 'is a city and administrative headquarters of the Al-Madinah Region of Saudi Arabia. At the city\'s heart is al-Masjid an-Nabawi (\"the Prophet\'s Mosque\"), which is the burial place of the Islamic prophet Muhammad, and is the second-holiest city in Islam after Mecca.', 'المدينة المنورة يلقبها المسلمون \"طيبة الطيبة\" أول عاصمة في تاريخ الإسلام، وثاني أقدس الأماكن لدى المسلمين بعد مكة. هي عاصمة منطقة المدينة المنورة الواقعة على أرض الحجاز التاريخية غرب المملكة العربية السعودية، تبعد المدينة المنورة حوالي 400 كم عن مكة المكرمة في الاتجاه الشمالي الشرقي، وعلى بعد حوالي 150 كم شرق البحر الأحمر، وأقرب الموانئ لها هو ميناء ينبع والذي يقع في الجهة الغربية الجنوبية منها ويبعد عنها 220 كم،تبلغ مساحة المدينة المنورة حوالي 589 كم²  منها 99 كم² تشغلها المنطقة العمرانية، أما باقي المساحة فهي خارج المنطقة العمرانية، وتتكون من جبال ووديان ومنحدرات سيول وأراض صحراوية وأخرى زراعية ومقابر وأجزاء من شبكة الطرق السريعة.', 'المدينة المنورة يلقبها المسلمون \"طيبة الطيبة\" أول عاصمة في تاريخ الإسلام، وثاني أقدس الأماكن لدى المسلمين بعد مكة. هي عاصمة منطقة المدينة المنورة الواقعة على أرض الحجاز التاريخية غرب المملكة العربية السعودية، تبعد المدينة المنورة حوالي 400 كم عن مكة المكرمة في الاتجاه الشمالي الشرقي، وعلى بعد حوالي 150 كم شرق البحر الأحمر، وأقرب الموانئ لها هو ميناء ينبع والذي يقع في الجهة الغربية الجنوبية منها ويبعد عنها 220 كم،تبلغ مساحة المدينة المنورة حوالي 589 كم²  منها 99 كم² تشغلها المنطقة العمرانية، أما باقي المساحة فهي خارج المنطقة العمرانية، وتتكون من جبال ووديان ومنحدرات سيول وأراض صحراوية وأخرى زراعية ومقابر وأجزاء من شبكة الطرق السريعة.', 'is a city and administrative headquarters of the Al-Madinah Region of Saudi Arabia. At the city\'s heart is al-Masjid an-Nabawi (\"the Prophet\'s Mosque\"), which is the burial place of the Islamic prophet Muhammad, and is the second-holiest city in Islam after Mecca.', 'المدينة المنورة يلقبها المسلمون \"طيبة الطيبة\" أول عاصمة في تاريخ الإسلام، وثاني أقدس الأماكن لدى المسلمين بعد مكة. هي عاصمة منطقة المدينة المنورة الواقعة على أرض الحجاز التاريخية غرب المملكة العربية السعودية، تبعد المدينة المنورة حوالي 400 كم عن مكة المكرمة في الاتجاه الشمالي الشرقي، وعلى بعد حوالي 150 كم شرق البحر الأحمر، وأقرب الموانئ لها هو ميناء ينبع والذي يقع في الجهة الغربية الجنوبية منها ويبعد عنها 220 كم،تبلغ مساحة المدينة المنورة حوالي 589 كم²  منها 99 كم² تشغلها المنطقة العمرانية، أما باقي المساحة فهي خارج المنطقة العمرانية، وتتكون من جبال ووديان ومنحدرات سيول وأراض صحراوية وأخرى زراعية ومقابر وأجزاء من شبكة الطرق السريعة.');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `title_ar` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `title_ur` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `title_ar`, `title_en`, `title_ur`, `created_at`, `updated_at`) VALUES
(1, 'المملكة العربية السعودية', 'Kingdom of Saudi Arabia', 'سعودی عرب کا دورہ', '2018-01-16 13:07:54', '2018-01-16 13:07:54');

-- --------------------------------------------------------

--
-- Table structure for table `currencies`
--

CREATE TABLE `currencies` (
  `id` int(11) NOT NULL,
  `title_ar` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `title_ur` varchar(255) NOT NULL,
  `sign` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `currencies`
--

INSERT INTO `currencies` (`id`, `title_ar`, `title_en`, `title_ur`, `sign`, `price`, `created_at`, `updated_at`) VALUES
(1, 'الدولار الأمريكى', 'Dollar', 'الدولار الأمريكى', '$', 1, '2018-01-29 09:09:47', '2018-01-29 09:09:47'),
(2, 'الجنية المصرى', 'Egyption Pound', 'الدولار الأمريكى', 'EGP', 0.06, '2018-01-29 09:10:12', '2018-01-29 09:10:12'),
(3, 'جنية إسترلينى', 'Esterliny', 'جنية إسترلينى', 'ES', 5, '2018-01-30 11:53:59', '2018-01-30 11:53:59');

-- --------------------------------------------------------

--
-- Table structure for table `dates`
--

CREATE TABLE `dates` (
  `id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `dates_programs`
--

CREATE TABLE `dates_programs` (
  `date_id` int(11) NOT NULL,
  `program_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `designs`
--

CREATE TABLE `designs` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `date_id` int(11) NOT NULL,
  `makka_hotel` varchar(255) NOT NULL,
  `makka_nights` int(11) NOT NULL,
  `madina_hotel` varchar(255) NOT NULL,
  `modina_nights` int(11) NOT NULL,
  `going_from` varchar(255) NOT NULL,
  `going_to` varchar(255) NOT NULL,
  `departing_from` varchar(255) NOT NULL,
  `departing_to` varchar(255) NOT NULL,
  `note` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `designs_rooms`
--

CREATE TABLE `designs_rooms` (
  `id` int(11) NOT NULL,
  `design_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `adults` int(11) NOT NULL,
  `children` int(11) NOT NULL,
  `infants` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `designs_services`
--

CREATE TABLE `designs_services` (
  `design_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` int(11) NOT NULL,
  `title_ar` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `title_ur` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `title_ar`, `title_en`, `title_ur`, `image`, `created_at`, `updated_at`) VALUES
(1, 'واي فاي', 'Wifi', 'واي فاي', 'images/features/WbYDit_1517225266_20160111-003950-1968.png', '2018-01-29 11:27:46', '2018-01-29 09:27:46'),
(2, 'مسجد', 'Masjed', 'مسجد', 'images/features/gLhtFD_1517225253_20160111-004007-555.png', '2018-01-29 11:27:33', '2018-01-29 09:27:33'),
(3, 'ممنوع التدخين', 'No smoking', 'ممنوع التدخين', 'images/features/JmvD3J_1517225244_20160111-003925-1209.png', '2018-01-29 11:27:24', '2018-01-29 09:27:24');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(11) NOT NULL,
  `title_ar` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `title_ur` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title_ar`, `title_en`, `title_ur`, `image`, `created_at`, `updated_at`) VALUES
(1, 'صورة 1', 'photo 1', 'صورة 1', 'images/gallery/sPwSxI_1517224558_Superb_Summer_Landscape_1920x1080.jpg', '2018-01-29 09:15:58', '2018-01-29 09:15:58'),
(2, 'صورة 2', 'image 2', 'صورة 2', 'images/gallery/n1Je41_1517224575_summer_Pier_Pier_sea___u_1920x1200.jpg', '2018-01-29 09:16:15', '2018-01-29 09:16:15'),
(3, 'صورة 3', 'image 3', 'صورة 3', 'images/gallery/voS7xx_1517224591_summer_palm_beach_Tropical_Island_1440x900.jpg', '2018-01-29 09:16:31', '2018-01-29 09:16:31');

-- --------------------------------------------------------

--
-- Table structure for table `hotelreservations`
--

CREATE TABLE `hotelreservations` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `note` text NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `end_date` varchar(255) NOT NULL,
  `room_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id` int(11) NOT NULL,
  `title_ar` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `title_ur` varchar(255) NOT NULL,
  `content_ar` text NOT NULL,
  `content_en` text NOT NULL,
  `content_ur` text NOT NULL,
  `keywords_ar` text NOT NULL,
  `keywords_en` text NOT NULL,
  `keywords_ur` text NOT NULL,
  `description_ar` text NOT NULL,
  `description_en` text NOT NULL,
  `description_ur` text NOT NULL,
  `image` text NOT NULL,
  `country_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `features` text,
  `distance_from_the_haram` varchar(255) NOT NULL,
  `stars` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `title_ar`, `title_en`, `title_ur`, `content_ar`, `content_en`, `content_ur`, `keywords_ar`, `keywords_en`, `keywords_ur`, `description_ar`, `description_en`, `description_ur`, `image`, `country_id`, `city_id`, `features`, `distance_from_the_haram`, `stars`, `created_at`, `updated_at`) VALUES
(1, 'إيلاف المشاعر مكه المكرمه', 'ELAF ALMASHAER HOTEL MAKKAH', 'إيلاف المشاعر مكه المكرمه', 'يقع فندق إيلاف المشاعر فى شارع أجياد العام , ويبعد عن المسجد الحرام خطوات على مسافة 400 متر \r\nيضم فندق إيلاف المشاعر 304 غرفه وجناح مزينة بالالوان الهادئة والدافئة والمكيفة , وتحتوى كل الغرف على شاشة مسطحة ومكتب عمل ومينى بار مجهز و خزنة شخصية\r\nيوفر الفندق خدمة الواى فاى المجانية\r\nيضم الفندق مطعمان وهما مطعم الملتزم الذى يقدم المأكولات العربية والعالمية ومقهى المقام المطل على شارع أجياد', 'Elaf Al Mashaer features non-smoking rooms with free Wi-Fi and fresh pastries in its lobby lounge. On Ajyad Road, the hotel is just over a quarter mile from the Al-Masjid al-Ḥarām.\r\nAll air-conditioned rooms are decorated in soft, neutral colors and feature an armchair and work desk in the living area. Each room has a flat-screen TV, a tea / coffee maker and well-stocked minibar.\r\n\r\nRegional dishes such as Arabic bread, spicy stews and international cuisine are served in Al Multazim restaurant. Al Maqam Coffee Shop overlooks Ajyad Street and is open for breakfast, lunch and dinner.\r\n\r\nHotel Elaf Al Mashaer is 90.1 km from Jeddah international Airport. Al Jamrah al Wusţá is a 5-minute drive away.', 'يقع فندق إيلاف المشاعر فى شارع أجياد العام , ويبعد عن المسجد الحرام خطوات على مسافة 400 متر \r\nيضم فندق إيلاف المشاعر 304 غرفه وجناح مزينة بالالوان الهادئة والدافئة والمكيفة , وتحتوى كل الغرف على شاشة مسطحة ومكتب عمل ومينى بار مجهز و خزنة شخصية\r\nيوفر الفندق خدمة الواى فاى المجانية\r\nيضم الفندق مطعمان وهما مطعم الملتزم الذى يقدم المأكولات العربية والعالمية ومقهى المقام المطل على شارع أجياد', 'يقع فندق إيلاف المشاعر فى شارع أجياد العام , ويبعد عن المسجد الحرام خطوات على مسافة 400 متر \r\nيضم فندق إيلاف المشاعر 304 غرفه وجناح مزينة بالالوان الهادئة والدافئة والمكيفة , وتحتوى كل الغرف على شاشة مسطحة ومكتب عمل ومينى بار مجهز و خزنة شخصية\r\nيوفر الفندق خدمة الواى فاى المجانية\r\nيضم الفندق مطعمان وهما مطعم الملتزم الذى يقدم المأكولات العربية والعالمية ومقهى المقام المطل على شارع أجياد', 'Elaf Al Mashaer features non-smoking rooms with free Wi-Fi and fresh pastries in its lobby lounge. On Ajyad Road, the hotel is just over a quarter mile from the Al-Masjid al-Ḥarām.\r\nAll air-conditioned rooms are decorated in soft, neutral colors and feature an armchair and work desk in the living area. Each room has a flat-screen TV, a tea / coffee maker and well-stocked minibar.\r\n\r\nRegional dishes such as Arabic bread, spicy stews and international cuisine are served in Al Multazim restaurant. Al Maqam Coffee Shop overlooks Ajyad Street and is open for breakfast, lunch and dinner.\r\n\r\nHotel Elaf Al Mashaer is 90.1 km from Jeddah international Airport. Al Jamrah al Wusţá is a 5-minute drive away.', 'يقع فندق إيلاف المشاعر فى شارع أجياد العام , ويبعد عن المسجد الحرام خطوات على مسافة 400 متر \r\nيضم فندق إيلاف المشاعر 304 غرفه وجناح مزينة بالالوان الهادئة والدافئة والمكيفة , وتحتوى كل الغرف على شاشة مسطحة ومكتب عمل ومينى بار مجهز و خزنة شخصية\r\nيوفر الفندق خدمة الواى فاى المجانية\r\nيضم الفندق مطعمان وهما مطعم الملتزم الذى يقدم المأكولات العربية والعالمية ومقهى المقام المطل على شارع أجياد', 'يقع فندق إيلاف المشاعر فى شارع أجياد العام , ويبعد عن المسجد الحرام خطوات على مسافة 400 متر \r\nيضم فندق إيلاف المشاعر 304 غرفه وجناح مزينة بالالوان الهادئة والدافئة والمكيفة , وتحتوى كل الغرف على شاشة مسطحة ومكتب عمل ومينى بار مجهز و خزنة شخصية\r\nيوفر الفندق خدمة الواى فاى المجانية\r\nيضم الفندق مطعمان وهما مطعم الملتزم الذى يقدم المأكولات العربية والعالمية ومقهى المقام المطل على شارع أجياد', 'Elaf Al Mashaer features non-smoking rooms with free Wi-Fi and fresh pastries in its lobby lounge. On Ajyad Road, the hotel is just over a quarter mile from the Al-Masjid al-Ḥarām.\r\nAll air-conditioned rooms are decorated in soft, neutral colors and feature an armchair and work desk in the living area. Each room has a flat-screen TV, a tea / coffee maker and well-stocked minibar.\r\n\r\nRegional dishes such as Arabic bread, spicy stews and international cuisine are served in Al Multazim restaurant. Al Maqam Coffee Shop overlooks Ajyad Street and is open for breakfast, lunch and dinner.\r\n\r\nHotel Elaf Al Mashaer is 90.1 km from Jeddah international Airport. Al Jamrah al Wusţá is a 5-minute drive away.', 'يقع فندق إيلاف المشاعر فى شارع أجياد العام , ويبعد عن المسجد الحرام خطوات على مسافة 400 متر \r\nيضم فندق إيلاف المشاعر 304 غرفه وجناح مزينة بالالوان الهادئة والدافئة والمكيفة , وتحتوى كل الغرف على شاشة مسطحة ومكتب عمل ومينى بار مجهز و خزنة شخصية\r\nيوفر الفندق خدمة الواى فاى المجانية\r\nيضم الفندق مطعمان وهما مطعم الملتزم الذى يقدم المأكولات العربية والعالمية ومقهى المقام المطل على شارع أجياد', 'images/hotels/Ondrg8_1517225349_750_fbf55964fb.jpg', 1, 1, '[\"1\",\"2\"]', '100 متر', 3, '2018-02-04 12:10:54', '2018-01-29 09:29:09');

-- --------------------------------------------------------

--
-- Table structure for table `hotelsliders`
--

CREATE TABLE `hotelsliders` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hotelsliders`
--

INSERT INTO `hotelsliders` (`id`, `image`, `hotel_id`, `created_at`, `updated_at`) VALUES
(1, 'images/hotels/images/FZVxfP_1517225363_Exotic-Raja-Ampat.jpg', 1, '2018-01-29 09:29:23', '2018-01-29 09:29:23'),
(2, 'images/hotels/images/pHH37k_1517225363_hat_sky_beach_sand_sea_mood_summer_ocean_model_1920x1200.jpg', 1, '2018-01-29 09:29:23', '2018-01-29 09:29:23'),
(3, 'images/hotels/images/5FCoX5_1517225363_Hotel_Malvivy_pool_interior_ocean_sea_houses_buildings_sky_sunset_800x600.jpg', 1, '2018-01-29 09:29:23', '2018-01-29 09:29:23'),
(4, 'images/hotels/images/1bPqXj_1517225363_khashayar_khastoui_Australia_Gold_Coast_hotels_resort_world_cities_architecture_buildings_skyscrapers_hdr_roads_bridges_window_lights_neon_sign_marina_bay_harbor_beaches_waves_sand_seascape_landscape_ocean_sea_sky_clouds_.jpg', 1, '2018-01-29 09:29:23', '2018-01-29 09:29:23');

-- --------------------------------------------------------

--
-- Table structure for table `hotels_programs`
--

CREATE TABLE `hotels_programs` (
  `hotel_id` int(11) NOT NULL,
  `program_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `hotels_rooms`
--

CREATE TABLE `hotels_rooms` (
  `id` int(11) NOT NULL,
  `meal_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `currency_id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `end_date` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hotels_rooms`
--

INSERT INTO `hotels_rooms` (`id`, `meal_id`, `room_id`, `currency_id`, `hotel_id`, `start_date`, `end_date`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 2, 1, '2018-02-02', '2018-02-03', 5000, '2018-01-29 09:31:56', '2018-01-29 09:31:56');

-- --------------------------------------------------------

--
-- Table structure for table `make_your_umrah`
--

CREATE TABLE `make_your_umrah` (
  `id` int(11) NOT NULL,
  `season_id` int(11) NOT NULL,
  `trip_date` varchar(255) NOT NULL,
  `makka_hotel` varchar(255) NOT NULL,
  `makka_nights` int(11) NOT NULL,
  `madina_hotel` varchar(255) NOT NULL,
  `madina_nights` int(11) NOT NULL,
  `services` text NOT NULL,
  `rooms` text NOT NULL,
  `number_of_rooms` text NOT NULL,
  `number_of_adults` text NOT NULL,
  `number_of_children` text NOT NULL,
  `number_of_infants` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) NOT NULL,
  `notes` text,
  `type` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `make_your_umrah`
--

INSERT INTO `make_your_umrah` (`id`, `season_id`, `trip_date`, `makka_hotel`, `makka_nights`, `madina_hotel`, `madina_nights`, `services`, `rooms`, `number_of_rooms`, `number_of_adults`, `number_of_children`, `number_of_infants`, `name`, `email`, `phone`, `notes`, `type`, `created_at`, `updated_at`) VALUES
(1, 1, '2018-02-01', 'فندق مكة', 10, 'فندق المدينة', 12, '[\"2\",\"3\"]', '[\"1\"]', '[\"2\"]', '[\"2\"]', '[\"0\"]', '[\"0\"]', 'محمود هشام جبر', 'mhmudhsham8@gmail.com', '01063855615', 'ملاحظات', 0, '2018-01-29 10:57:13', '2018-01-29 10:57:13'),
(2, 2, '2018-02-02', 'فندق مكة', 3, 'فندق المدينة', 5, '[\"1\"]', '[\"3\"]', '[\"1\"]', '[\"3\"]', '[null]', '[null]', 'Mahmoud Gabr', 'mhmudhsham8@gmail.com', '01063855615', 'سيبيبسييسب', 0, '2018-01-29 11:01:53', '2018-01-29 11:01:53'),
(3, 2, '2018-02-03', 'dddddd', 3, 'fffffffff', 2, '[\"1\",\"2\",\"3\"]', '[\"1\"]', '[\"2\"]', '[\"2\"]', '[null]', '[null]', 'vdcbgd', 'mhmudhsham8@gmail.com', '01063855615', 'dfgfdfdg', 0, '2018-01-29 11:29:18', '2018-01-29 11:29:18'),
(4, 1, '2018-02-02', 'dfsdfsdf', 3, 'vcbcbvb', 3, '[\"2\",\"3\"]', '[\"1\"]', '[\"3\"]', '[\"3\"]', '[\"3\"]', '[\"3\"]', 'fdxgfdg', 'dfgdfg', '4556456456', 'fdgfdgfdgfdg', 1, '2018-01-29 13:33:26', '2018-01-29 13:33:26'),
(5, 1, '2018-02-02', 'sdfsdf', 3, 'fxdffdg', 2, 'null', '[\"1\",\"2\"]', '[\"2\",\"2\"]', '[\"2\",\"4\"]', '[\"0\",\"0\"]', '[\"0\",\"0\"]', 'gdhfghfgh', NULL, '01063855615', NULL, 0, '2018-01-30 07:17:47', '2018-01-30 07:17:47');

-- --------------------------------------------------------

--
-- Table structure for table `meals`
--

CREATE TABLE `meals` (
  `id` int(11) NOT NULL,
  `title_ar` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `title_ur` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `meals`
--

INSERT INTO `meals` (`id`, `title_ar`, `title_en`, `title_ur`, `created_at`, `updated_at`) VALUES
(1, 'إفطار', 'breakfast', 'إفطار', '2018-01-29 09:25:26', '2018-01-29 09:25:26');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(33, '2014_10_12_000000_create_users_table', 1),
(34, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nationalities`
--

CREATE TABLE `nationalities` (
  `id` int(11) NOT NULL,
  `title_ar` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `title_ur` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nationalities`
--

INSERT INTO `nationalities` (`id`, `title_ar`, `title_en`, `title_ur`, `created_at`, `updated_at`) VALUES
(1, 'مصرى', 'Egyption', 'مصرى', '2018-01-29 09:11:59', '2018-01-29 09:11:59'),
(2, 'سعودى', 'Suadi', 'سعودى', '2018-01-29 09:12:12', '2018-01-29 09:12:12');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title_ar` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `title_ur` varchar(255) NOT NULL,
  `content_ar` text NOT NULL,
  `content_en` text NOT NULL,
  `content_ur` text NOT NULL,
  `keywords_ar` text NOT NULL,
  `keywords_en` text NOT NULL,
  `keywords_ur` text NOT NULL,
  `description_ar` text NOT NULL,
  `description_en` text NOT NULL,
  `description_ur` text NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title_ar`, `title_en`, `title_ur`, `content_ar`, `content_en`, `content_ur`, `keywords_ar`, `keywords_en`, `keywords_ur`, `description_ar`, `description_en`, `description_ur`, `image`, `created_at`, `updated_at`) VALUES
(1, 'خبر 1', 'news 1', 'خبر 1', 'خبر 1   خبر 1   خبر 1   خبر 1   خبر 1   خبر 1   خبر 1   خبر 1   خبر 1   خبر 1   خبر 1   خبر 1   خبر 1   خبر 1   خبر 1', 'news 1  news 1  news 1  news 1  news 1  news 1  news 1  news 1  news 1  news 1  news 1  news 1  news 1', 'خبر 1   خبر 1   خبر 1   خبر 1   خبر 1   خبر 1   خبر 1   خبر 1   خبر 1   خبر 1   خبر 1   خبر 1   خبر 1   خبر 1   خبر 1   خبر 1', 'خبر 1   خبر 1   خبر 1   خبر 1   خبر 1   خبر 1   خبر 1   خبر 1   خبر 1   خبر 1   خبر 1', 'news 1  news 1  news 1  news 1  news 1  news 1  news 1  news 1  news 1  news 1', 'خبر 1   خبر 1   خبر 1   خبر 1   خبر 1   خبر 1   خبر 1   خبر 1   خبر 1', 'خبر 1   خبر 1   خبر 1   خبر 1   خبر 1   خبر 1   خبر 1   خبر 1   خبر 1   خبر 1   خبر 1   خبر 1   خبر 1   خبر 1   خبر 1   خبر 1   خبر 1   خبر 1   خبر 1   خبر 1   خبر 1   خبر 1   خبر 1   خبر 1   خبر 1   خبر 1', 'news 1  news 1  news 1  news 1  news 1  news 1  news 1  news 1  news 1  news 1  news 1  news 1  news 1', 'خبر 1   خبر 1   خبر 1   خبر 1   خبر 1   خبر 1   خبر 1   خبر 1   خبر 1   خبر 1   خبر 1   خبر 1   خبر 1   خبر 1', 'images/news/IPkW0T_1517224693_clouds_landscapes_coast_beach_sand_trees_palm_trees_2560x1600.jpg', '2018-01-29 09:18:13', '2018-01-29 09:18:13');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(11) NOT NULL,
  `title_ar` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `title_ur` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `url` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `title_ar`, `title_en`, `title_ur`, `image`, `url`, `created_at`, `updated_at`) VALUES
(1, 'شريك 1', 'Partner 1', 'شريك 1', 'images/partners/8hbF98_1517224365_f5939edd25300343310da59bb11aee12_1363689249_l.jpg', 'https://www.youtube.com/channel/UCguGKuG-7ZDWJOjmis8nQfg', '2018-01-29 09:12:45', '2018-01-29 09:12:45'),
(2, 'شريك 2', 'Partner 2', 'شريك 2', 'images/partners/MCUsi0_1517224396_beach_City_Florida_floride_Miami_ocean_Sea_USA_architecture_art_bridges_buildings_cities_port_towers_roads_night_light_1600x1200.jpg', 'http://hotels.agazabook.com/', '2018-01-29 09:13:16', '2018-01-29 09:13:16');

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
-- Table structure for table `programdates`
--

CREATE TABLE `programdates` (
  `id` int(11) NOT NULL,
  `program_id` int(11) NOT NULL,
  `nationality_id` int(11) NOT NULL,
  `currency_id` int(11) NOT NULL,
  `price` float NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `programdates`
--

INSERT INTO `programdates` (`id`, `program_id`, `nationality_id`, `currency_id`, `price`, `start_date`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 2, 2000, '2018-02-01', '2018-02-04 09:35:24', '2018-02-01 07:50:19'),
(2, 1, 1, 1, 6000, '2018-02-03', '2018-02-01 10:09:31', '2018-02-01 08:09:31'),
(3, 1, 1, 3, 5000, '2018-02-08', '2018-02-04 11:07:44', '2018-02-01 09:03:24'),
(4, 2, 1, 3, 6000, '2018-02-22', '2018-02-01 12:39:16', '2018-02-01 12:39:16'),
(5, 2, 2, 2, 5000, '2018-02-02', '2018-02-04 09:28:25', '2018-02-01 12:39:35');

-- --------------------------------------------------------

--
-- Table structure for table `programreservations`
--

CREATE TABLE `programreservations` (
  `id` int(11) NOT NULL,
  `program_id` int(11) NOT NULL,
  `date_id` varchar(255) NOT NULL,
  `nationality_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) NOT NULL,
  `notes` text,
  `room_type` varchar(255) DEFAULT NULL,
  `number_of_rooms` varchar(255) NOT NULL,
  `adults` varchar(255) DEFAULT NULL,
  `children` varchar(255) DEFAULT NULL,
  `infants` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `programreservations`
--

INSERT INTO `programreservations` (`id`, `program_id`, `date_id`, `nationality_id`, `name`, `email`, `phone`, `notes`, `room_type`, `number_of_rooms`, `adults`, `children`, `infants`, `created_at`, `updated_at`) VALUES
(1, 1, '1', 1, 'xcvxvxcv', NULL, '01063855615', 'ghfgh', '[\"1\"]', '[\"1\"]', '[\"1\"]', 'null', '[\"0\"]', '2018-02-01 07:17:45', '2018-02-01 07:17:45'),
(2, 1, '1', 1, 'xcvxvxcv', NULL, '01063855615', 'ghfgh', '[\"1\"]', '[\"1\"]', '[\"1\"]', '[\"0\"]', '[\"0\"]', '2018-02-01 07:21:12', '2018-02-01 07:21:12'),
(3, 1, '1', 1, 'xcvxvxcv', NULL, '01063855615', 'ghfgh', '[\"1\"]', '[\"1\"]', '[\"1\"]', '[\"0\"]', '[\"0\"]', '2018-02-01 07:21:38', '2018-02-01 07:21:38'),
(4, 1, '1', 1, 'xfcsdfsdf', NULL, '45345345345', 'fdgdfg', '[\"1\",\"2\"]', '[\"3\",\"3\"]', '[\"3\",\"3\"]', '[\"0\",\"0\"]', '[\"0\",\"0\"]', '2018-02-01 07:41:43', '2018-02-01 07:41:43'),
(5, 1, '1', 1, 'fdgdfg', NULL, '01063855615', NULL, '[\"1\"]', '[\"2\"]', '[\"2\"]', '[\"0\"]', '[\"0\"]', '2018-02-01 07:43:06', '2018-02-01 07:43:06');

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` int(11) NOT NULL,
  `title_ar` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `title_ur` varchar(255) NOT NULL,
  `content_ar` text NOT NULL,
  `content_en` text NOT NULL,
  `content_ur` text NOT NULL,
  `keywords_ar` text,
  `keywords_en` text,
  `keywords_ur` text,
  `description_ar` text,
  `description_en` text,
  `description_ur` text,
  `image` text NOT NULL,
  `stars` int(11) NOT NULL,
  `nights` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `city_id` text,
  `hotel_id` text,
  `services` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `title_ar`, `title_en`, `title_ur`, `content_ar`, `content_en`, `content_ur`, `keywords_ar`, `keywords_en`, `keywords_ur`, `description_ar`, `description_en`, `description_ur`, `image`, `stars`, `nights`, `category_id`, `country_id`, `city_id`, `hotel_id`, `services`, `created_at`, `updated_at`) VALUES
(1, 'برنامج 1', 'برنامج 1', 'برنامج 1', 'برنامج 1   برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1', 'برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1', 'برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1', 'برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1', NULL, 'برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1', 'برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1', NULL, 'برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1برنامج 1', 'images/programs/effRzQ_1517226564_f5939edd25300343310da59bb11aee12_1363689249_l.jpg', 4, '[\"3\",null]', 1, 1, '[\"1\",\"2\"]', '[\"1\"]', '[\"1\",\"2\",\"3\"]', '2018-02-04 07:52:50', '2018-01-29 09:49:24'),
(2, 'برنامج 2', 'program 2', 'برنامج 2', 'برنامج 2  برنامج 2  برنامج 2  برنامج 2  برنامج 2  برنامج 2  برنامج 2  برنامج 2  برنامج 2  برنامج 2  برنامج 2  برنامج 2  برنامج 2  برنامج 2', 'program 2  program 2  program 2  program 2  program 2  program 2  program 2  program 2  program 2  program 2  program 2  program 2  program 2  program 2  program 2  program 2', 'برنامج 2  برنامج 2  برنامج 2  برنامج 2  برنامج 2  برنامج 2  برنامج 2  برنامج 2  برنامج 2  برنامج 2  برنامج 2', 'برنامج 2  برنامج 2  برنامج 2  برنامج 2  برنامج 2  برنامج 2  برنامج 2  برنامج 2', 'program 2  program 2  program 2  program 2  program 2  program 2  program 2  program 2  program 2  program 2  program 2  program 2  program 2  program 2  program 2', 'برنامج 2  برنامج 2  برنامج 2  برنامج 2  برنامج 2  برنامج 2  برنامج 2  برنامج 2  برنامج 2  برنامج 2  برنامج 2', 'برنامج 2  برنامج 2  برنامج 2  برنامج 2  برنامج 2  برنامج 2  برنامج 2  برنامج 2  برنامج 2  برنامج 2  برنامج 2  برنامج 2  برنامج 2', 'program 2  program 2  program 2  program 2  program 2  program 2  program 2  program 2  program 2  program 2  program 2', 'برنامج 2  برنامج 2  برنامج 2  برنامج 2  برنامج 2  برنامج 2  برنامج 2  برنامج 2  برنامج 2  برنامج 2  برنامج 2', 'images/programs/13OFWU_1517495942_Cool_summer_scenary_1440x900.jpg', 5, '[\"4\",\"5\"]', 2, 1, '[\"1\",\"1\"]', '[\"1\",\"1\"]', '[\"1\",\"2\",\"3\"]', '2018-02-01 12:39:02', '2018-02-01 12:39:02');

-- --------------------------------------------------------

--
-- Table structure for table `programservices`
--

CREATE TABLE `programservices` (
  `id` int(11) NOT NULL,
  `title_ar` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `title_ur` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `programservices`
--

INSERT INTO `programservices` (`id`, `title_ar`, `title_en`, `title_ur`, `image`, `created_at`, `updated_at`) VALUES
(1, 'واي فاي', 'Wifi', 'واي فاي', 'images/features/WbYDit_1517225266_20160111-003950-1968.png', '2018-01-29 11:27:46', '2018-01-29 09:27:46'),
(2, 'مسجد', 'Masjed', 'مسجد', 'images/features/gLhtFD_1517225253_20160111-004007-555.png', '2018-01-29 11:27:33', '2018-01-29 09:27:33'),
(3, 'ممنوع التدخين', 'No smoking', 'ممنوع التدخين', 'images/features/JmvD3J_1517225244_20160111-003925-1209.png', '2018-01-29 11:27:24', '2018-01-29 09:27:24');

-- --------------------------------------------------------

--
-- Table structure for table `programsliders`
--

CREATE TABLE `programsliders` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `program_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `programsliders`
--

INSERT INTO `programsliders` (`id`, `image`, `program_id`, `created_at`, `updated_at`) VALUES
(1, 'images/programs/images/CZMsKe_1517226616_beach_City_Florida_floride_Miami_ocean_Sea_USA_architecture_art_bridges_buildings_cities_port_towers_roads_night_light_1600x1200.jpg', 1, '2018-01-29 09:50:16', '2018-01-29 09:50:16'),
(2, 'images/programs/images/e1tBEt_1517226616_beaches_hammock_palm_trees_ocean_sea_tropical_1920x1080.jpg', 1, '2018-01-29 09:50:16', '2018-01-29 09:50:16'),
(3, 'images/programs/images/9I2KrL_1517226616_Beach_summer__season__hawaii_tropical_holidays_palm_trees_classic_cars_1440x900.jpg', 1, '2018-01-29 09:50:16', '2018-01-29 09:50:16'),
(4, 'images/programs/images/H8xJHc_1517226616_business-class-fares.jpg', 1, '2018-01-29 09:50:16', '2018-01-29 09:50:16'),
(5, 'images/programs/images/MiJ7xS_1517226616_clouds_landscapes_coast_beach_sand_trees_palm_trees_2560x1600.jpg', 1, '2018-01-29 09:50:16', '2018-01-29 09:50:16');

-- --------------------------------------------------------

--
-- Table structure for table `programs_services`
--

CREATE TABLE `programs_services` (
  `program_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content_ar` text NOT NULL,
  `content_en` text NOT NULL,
  `content_ur` text NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `title`, `content_ar`, `content_en`, `content_ur`, `image`, `created_at`, `updated_at`) VALUES
(1, 'فور عمرة', 'فور عمرة  فور عمرة  فور عمرة  فور عمرة  فور عمرة  فور عمرة  فور عمرة  فور عمرة  فور عمرة  فور عمرة  فور عمرة  فور عمرة  فور عمرة  فور عمرة  فور عمرة  فور عمرة  فور عمرة  فور عمرة  فور عمرة  فور عمرة  فور عمرة  فور عمرة  فور عمرة', 'فور عمرة  فور عمرة  فور عمرة  فور عمرة  فور عمرة  فور عمرة  فور عمرة  فور عمرة  فور عمرة  فور عمرة  فور عمرة  فور عمرة', 'فور عمرة  فور عمرة  فور عمرة  فور عمرة  فور عمرة  فور عمرة  فور عمرة  فور عمرة  فور عمرة  فور عمرة  فور عمرة  فور عمرة  فور عمرة  فور عمرة  فور عمرة  فور عمرة  فور عمرة  فور عمرة', 'images/reviews/THnOvJ_1517224427_Exotic-Raja-Ampat.jpg', '2018-01-29 09:13:47', '2018-01-29 09:13:47'),
(2, 'ماستر فيجن', 'ماستر فيجن   ماستر فيجن   ماستر فيجن   ماستر فيجن   ماستر فيجن   ماستر فيجن   ماستر فيجن   ماستر فيجن   ماستر فيجن   ماستر فيجن   ماستر فيجن   ماستر فيجن   ماستر فيجن   ماستر فيجن   ماستر فيجن   ماستر فيجن   ماستر فيجن   ماستر فيجن   ماستر فيجن   ماستر فيجن   ماستر فيجن   ماستر فيجن   ماستر فيجن   ماستر فيجن   ماستر فيجن   ماستر فيجن   ماستر فيجن   ماستر فيجن   ماستر فيجن', 'ماستر فيجن   ماستر فيجن   ماستر فيجن   ماستر فيجن   ماستر فيجن   ماستر فيجن   ماستر فيجن   ماستر فيجن   ماستر فيجن   ماستر فيجن   ماستر فيجن   ماستر فيجن   ماستر فيجن   ماستر فيجن   ماستر فيجن   ماستر فيجن   ماستر فيجن', 'ماستر فيجن   ماستر فيجن   ماستر فيجن   ماستر فيجن   ماستر فيجن   ماستر فيجن   ماستر فيجن   ماستر فيجن   ماستر فيجن   ماستر فيجن   ماستر فيجن   ماستر فيجن   ماستر فيجن   ماستر فيجن   ماستر فيجن   ماستر فيجن   ماستر فيجن   ماستر فيجن   ماستر فيجن   ماستر فيجن', 'images/reviews/s6jvUT_1517224445_landscapes_nature_beach_Hawaii_1920x1200.jpg', '2018-01-29 09:14:05', '2018-01-29 09:14:05');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `title_ar` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `title_ur` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `title_ar`, `title_en`, `title_ur`, `created_at`, `updated_at`) VALUES
(1, 'فردى', 'Single', 'فردى', '2018-01-16 13:31:47', '2018-01-16 13:31:47'),
(2, 'زوجى', 'Double', 'زوجى', '2018-01-16 13:32:02', '2018-01-16 13:32:02'),
(3, 'ثلاثى', 'trpl', 'trpl', '2018-01-16 17:18:25', '2018-01-16 17:18:25');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title_ar` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `title_ur` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `content_en` text NOT NULL,
  `content_ur` text NOT NULL,
  `content_ar` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title_ar`, `title_en`, `title_ur`, `image`, `content_en`, `content_ur`, `content_ar`, `created_at`, `updated_at`) VALUES
(1, 'خدمة 1', 'service 1', 'خدمة 1', 'images/services/IWu3Td_1517224734_sea_landscape_summer_nature_beach_sky_1440x900.jpg', 'service 1  service 1  service 1  service 1  service 1  service 1  service 1  service 1  service 1  service 1  service 1  service 1  service 1  service 1', 'خدمة 1  خدمة 1  خدمة 1  خدمة 1  خدمة 1  خدمة 1  خدمة 1  خدمة 1  خدمة 1  خدمة 1  خدمة 1  خدمة 1  خدمة 1  خدمة 1', 'خدمة 1  خدمة 1  خدمة 1  خدمة 1  خدمة 1  خدمة 1  خدمة 1  خدمة 1  خدمة 1  خدمة 1  خدمة 1  خدمة 1', '2018-01-29 09:18:54', '2018-01-29 09:18:54');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 'site_title_en', 'Tdamon Umrah', '2018-01-01 22:00:00', '2018-01-16 13:44:39'),
(2, 'site_logo', 'images/settings/DoBKes_1517226720_ajtPcf_1516090538_logo.png', '2018-01-01 22:00:00', '2018-01-29 09:52:00'),
(3, 'site_description_en', 'Tdamon Umrah', '2018-01-01 22:00:00', '2018-01-16 13:44:39'),
(4, 'site_keywords_en', 'Tdamon Umrah', '2018-01-01 22:00:00', '2018-01-16 13:44:39'),
(5, 'site_email', 'gmtravelbookingonline@gmail.com', '2018-01-01 22:00:00', '2018-01-16 13:47:27'),
(6, 'site_phone', '0000000000', '2018-01-01 22:00:00', '2018-01-16 13:47:27'),
(7, 'site_fax', '0000000000', '2018-01-01 22:00:00', '2018-01-16 13:47:28'),
(8, 'site_address_en', 'bbbbbbbbbbbbbbbbbbbbbb', '2018-01-01 22:00:00', '2018-01-16 13:47:28'),
(9, 'site_map', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d13810.974983245604!2d31.302677099999997!3d30.072878999999997!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2seg!4v1514712095212\" width=\"100%\" height=\"100%\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', '2018-01-01 22:00:00', '2018-01-02 10:31:45'),
(10, 'site_facebook', NULL, '2018-01-01 22:00:00', '2018-01-16 13:47:40'),
(11, 'site_twitter', NULL, '2018-01-01 22:00:00', '2018-01-08 13:28:54'),
(12, 'site_linkedin', NULL, '2018-01-01 22:00:00', '2018-01-08 13:28:54'),
(13, 'site_instagram', NULL, '2018-01-01 22:00:00', '2018-01-08 13:28:54'),
(14, 'site_gplus', NULL, '2018-01-01 22:00:00', '2018-01-08 13:28:54'),
(15, 'site_youtube', NULL, '2018-01-01 22:00:00', '2018-01-08 13:28:54'),
(20, 'about_us_en', '000000000000000', NULL, '2018-01-16 13:48:44'),
(21, 'vision_en', '000000000000000000', NULL, '2018-01-16 13:48:44'),
(22, 'mission_en', '000000000000000000', NULL, '2018-01-16 13:48:44'),
(23, 'goal_en', '0000000000000000000', NULL, '2018-01-16 13:48:44'),
(24, 'site_title_ar', 'تضامن العمرة', NULL, '2018-01-16 06:14:58'),
(25, 'site_title_ur', 'تضامن العمرة', NULL, '2018-01-16 13:44:39'),
(26, 'site_description_ar', 'تضامن العمرة', NULL, '2018-01-16 13:44:39'),
(27, 'site_description_ur', 'تضامن العمرة', NULL, '2018-01-16 13:44:39'),
(28, 'site_keywords_ar', 'تضامن العمرة', NULL, '2018-01-16 13:44:39'),
(29, 'site_keywords_ur', 'تضامن العمرة', NULL, '2018-01-16 13:44:39'),
(30, 'about_us_ar', 'about_us_ar', NULL, NULL),
(31, 'about_us_ur', 'about_us_ur', NULL, NULL),
(32, 'vision_ar', 'vision_ar', NULL, NULL),
(33, 'vision_ur', 'vision_ur', NULL, NULL),
(34, 'mission_ar', 'mission_ar', NULL, NULL),
(35, 'mission_ur', 'mission_ur', NULL, NULL),
(36, 'goal_ar', 'goal_ar', NULL, NULL),
(37, 'goal_ur', 'goal_ur', NULL, NULL),
(38, 'site_address_ar', 'bbbbbbbbbbbbbbbbbbbbbbb', NULL, '2018-01-15 13:38:47'),
(39, 'site_address_ur', 'bbbbbbbbbbbbbbbbbbbbbb', NULL, '2018-01-16 13:47:28'),
(40, 'site_video', '-site_video', NULL, '2018-01-29 09:52:00');

-- --------------------------------------------------------

--
-- Table structure for table `sightseeing`
--

CREATE TABLE `sightseeing` (
  `id` int(11) NOT NULL,
  `title_ar` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `title_ur` varchar(255) NOT NULL,
  `content_ar` text NOT NULL,
  `content_en` text NOT NULL,
  `content_ur` text NOT NULL,
  `image` text NOT NULL,
  `city_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sightseeing`
--

INSERT INTO `sightseeing` (`id`, `title_ar`, `title_en`, `title_ur`, `content_ar`, `content_en`, `content_ur`, `image`, `city_id`, `created_at`, `updated_at`) VALUES
(1, 'جبل عرفات (جبل الرحمة)', 'Mount Arafat(Jabal-ur-Rehmah)', 'جبل عرفات (جبل الرحمة)', 'سُمِّي  عرفة  بهذا  الإسم؛ لأن الناس يتعارفون به، وقيل: سُمِّي بذلك؛ لأن جبريل طاف بإبراهيم- عليه السلام- كان يريه المشاهد فيقول له: أَعَرَفْتَ؟ أَعَرَفْتَ؟ فيقول إبراهيم: عَرَفْتُ، عَرَفْتُ. وقيل: لأن آدم-عليه السلام- لما هبط من الجنة وكان من فراقه حواء ما كان فلقيها في ذلك الموضع؛ فعرفها وعرفته.', 'The above picture shows Jabal-ur-Rehmah (Mountain of Mercy) on the plain of Arafat. Standing at Arafat is the fundamental requirement of Hajj and pilgrims come here on the 9th Dhul Hijjah (second day of Hajj).', 'سُمِّي  عرفة  بهذا  الإسم؛ لأن الناس يتعارفون به، وقيل: سُمِّي بذلك؛ لأن جبريل طاف بإبراهيم- عليه السلام- كان يريه المشاهد فيقول له: أَعَرَفْتَ؟ أَعَرَفْتَ؟ فيقول إبراهيم: عَرَفْتُ، عَرَفْتُ. وقيل: لأن آدم-عليه السلام- لما هبط من الجنة وكان من فراقه حواء ما كان فلقيها في ذلك الموضع؛ فعرفها وعرفته.', 'images/sightseeing/4CvMGJ_1517224860_summer_sea_beach_Tropical_Island_1920x1200.jpg', 1, '2018-01-29 11:21:00', '2018-01-29 09:21:00'),
(2, 'جبل حراء', 'Mount Hira', 'جبل حراء', 'غار حراء، هو الغار الذي كان يختلي فيه رسول الإسلام محمد قبل نزول القرآن عليه بواسطة جبريل.', 'This is Mount Hira (Jabal Hira), which lies about two miles from the Ka’bah.', 'غار حراء، هو الغار الذي كان يختلي فيه رسول الإسلام محمد قبل نزول القرآن عليه بواسطة جبريل.', 'images/sightseeing/wKNv9f_1517224850_summer_palms_vacation_tropical_sea_paradise_beach_ocean_2560x1440.jpg', 1, '2018-01-29 11:20:50', '2018-01-29 09:20:50'),
(3, 'مقبرة البقيع', 'The Bekaa cemetery', 'مقبرة البقيع', 'البقيع هي المقبرة الرئيسة لأهل المدينة المنورة منذ عهد النبي محمد.', 'Baqi is the main cemetery of the people of Medina since thetime of the Prophet Muhammad', 'البقيع هي المقبرة الرئيسة لأهل المدينة المنورة منذ عهد النبي محمد.', 'images/sightseeing/jSYy73_1517224818_Beach_summer__season__hawaii_tropical_holidays_palm_trees_classic_cars_1440x900.jpg', 2, '2018-01-29 11:20:18', '2018-01-29 09:20:18');

-- --------------------------------------------------------

--
-- Table structure for table `sliderimages`
--

CREATE TABLE `sliderimages` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `slider_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sliderimages`
--

INSERT INTO `sliderimages` (`id`, `image`, `slider_id`, `created_at`, `updated_at`) VALUES
(1, 'images/sliders/images/M6VYs5_1517224636_summer_Maldives_beaches_1920x1080.jpg', 1, '2018-01-29 09:17:16', '2018-01-29 09:17:16'),
(2, 'images/sliders/images/luw6U8_1517224636_summer_palm_beach_Tropical_Island_1440x900.jpg', 1, '2018-01-29 09:17:17', '2018-01-29 09:17:17'),
(3, 'images/sliders/images/9nBjuc_1517224637_summer_palms_vacation_tropical_sea_paradise_beach_ocean_2560x1440.jpg', 1, '2018-01-29 09:17:17', '2018-01-29 09:17:17'),
(4, 'images/sliders/images/r8haG7_1517224637_summer_Pier_Pier_sea___u_1920x1200.jpg', 1, '2018-01-29 09:17:18', '2018-01-29 09:17:18'),
(5, 'images/sliders/images/byBfPQ_1517224647_tropical_paradise_beach_palms_sea_ocean_sunshine_summer_vacation_1920x1200.jpg', 1, '2018-01-29 09:17:27', '2018-01-29 09:17:27'),
(6, 'images/sliders/images/Q1RVmp_1517224647_tropical_swimming_pools_Pacific_palms_Hotel_800x600.jpg', 1, '2018-01-29 09:17:27', '2018-01-29 09:17:27'),
(7, 'images/sliders/images/kNybTk_1517224647_water_nature_forests_summer_falls_lakes_1920x1080.jpg', 1, '2018-01-29 09:17:28', '2018-01-29 09:17:28'),
(8, 'images/sliders/images/k2SImQ_1517224648_water_ocean_Sun_summer_tropical_Fiji_palm_trees_huts_swimming_pools_hotels_Fiji_islands_resort_relaxation_sea_beaches_1400x1050.jpg', 1, '2018-01-29 09:17:28', '2018-01-29 09:17:28'),
(9, 'images/sliders/images/hseHr1_1517224654_Sveti_Stefan_Montenegro_Adriatic_sea_island_beach_building_1920x1200.jpg', 1, '2018-01-29 09:17:34', '2018-01-29 09:17:34');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `title_ar` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `title_ur` varchar(255) NOT NULL,
  `url` text,
  `image` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title_ar`, `title_en`, `title_ur`, `url`, `image`, `created_at`, `updated_at`) VALUES
(1, 'سلايدر 1', 'Slider 1', 'سلايدر 1', NULL, 'images/sliders/ZthcCx_1517224623_hat_sky_beach_sand_sea_mood_summer_ocean_model_1920x1200.jpg', '2018-01-29 09:17:04', '2018-01-29 09:17:04');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(1, 'Mahmoud Gabr', 'admin@admin.com', '$2y$10$t87mKOdQAyez/kMvo.qYL.yTnkCJjR/XbDmfHNtjaFNireyl1084.', 'ts9PEwMrMuIlpqCKowlPcy8jLAtwd15DAjQ7MXVJMIohRy616LyKuwcv9Qjr', '2018-01-02 12:44:33', '2018-01-02 12:44:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dates`
--
ALTER TABLE `dates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designs`
--
ALTER TABLE `designs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designs_rooms`
--
ALTER TABLE `designs_rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotelreservations`
--
ALTER TABLE `hotelreservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotelsliders`
--
ALTER TABLE `hotelsliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotels_rooms`
--
ALTER TABLE `hotels_rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `make_your_umrah`
--
ALTER TABLE `make_your_umrah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meals`
--
ALTER TABLE `meals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nationalities`
--
ALTER TABLE `nationalities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `programdates`
--
ALTER TABLE `programdates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programreservations`
--
ALTER TABLE `programreservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programservices`
--
ALTER TABLE `programservices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programsliders`
--
ALTER TABLE `programsliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sightseeing`
--
ALTER TABLE `sightseeing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliderimages`
--
ALTER TABLE `sliderimages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `dates`
--
ALTER TABLE `dates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `designs`
--
ALTER TABLE `designs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `designs_rooms`
--
ALTER TABLE `designs_rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `hotelreservations`
--
ALTER TABLE `hotelreservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hotelsliders`
--
ALTER TABLE `hotelsliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `hotels_rooms`
--
ALTER TABLE `hotels_rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `make_your_umrah`
--
ALTER TABLE `make_your_umrah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `meals`
--
ALTER TABLE `meals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `nationalities`
--
ALTER TABLE `nationalities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `programdates`
--
ALTER TABLE `programdates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `programreservations`
--
ALTER TABLE `programreservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `programservices`
--
ALTER TABLE `programservices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `programsliders`
--
ALTER TABLE `programsliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `sightseeing`
--
ALTER TABLE `sightseeing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sliderimages`
--
ALTER TABLE `sliderimages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
