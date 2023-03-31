-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2022 at 04:34 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coffeeshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `product_desc` text NOT NULL,
  `price` float NOT NULL,
  `product_img` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_desc`, `price`, `product_img`) VALUES
(10, 'ماكينة تحضير القهوة والاسبريسو من ديلونجي EC221R، 1.4 لتر، احمر', 'العلامة التجارية: ديلونجي\r\nاللون: أحمر\r\nالنوع: ماكينة تحضير الاسبريسو\r\nشكل المشروب: مسحوق\r\nالوزن: 3.1 كجم\r\nالجهد الكهربي المقدر/التردد: 220-240 فولت / 50-60 هرتز\r\nالطاقة: 1100 وات\r\nنظام الحليب: يدوي\r\nنظام التسخين: غلاية من الستانلس ستيل\r\nفلتر كوب واحد و2: نعم\r\nمفتاح تشغيل/إيقاف: نعم\r\nالمادة: بلاستيك\r\nعدد الفلاتر: 2', 300, '166698815251BwlDfp5-L.__AC_SX300_SY300_QL70_ML2_.jpg'),
(11, 'ماكينة تحضير القهوة التركي اوكا مينيو جيت من ارزوم - نحاسي - موديل OK0013', 'بنظام منع انسكاب القهوة ونظام تنبيه بالصوت والضوء عند إعداد القهوة، كما تتميز بسهولة الاستخدام مع وعاء للقهوة مثالي ويناسب اليد اليمنى أو اليسرى.', 300, '166698818351BOOAnmQ4S._AC_SX679_.jpg'),
(12, 'الة تحضير القهوة التركي مينيو OK004 من ارزوم اوكا - احمر واسود', '220 - 240 فولت\r\n400 - 480 وات\r\nالقدرة على صنع من 1 إلى 4 أكواب في دورة واحدة\r\nإضاءة ومنبه صوت بعد الانتهاء\r\nالقدرة على إضافة الماء - والقهوة - والسكر يدويًا\r\nملعقة لقياس مثالي للقهوة\r\nالقدرة على تنظيف الوعاء يدويًا', 400, '166698825161MNOAtGR5L._AC_SX679_.jpg'),
(13, 'ارزوم اوكا - ماكينة قهوة تركى بـــــ وش منيوا بروا - اسود/نحاسى - OK0010', 'العلامة التجارية: ارزوم اوكا\r\nاللون: متعدد الألوان\r\nوزن العبوة بالكيلو جرام: 1.85 كجم\r\nشكل المشروب: مسحوق\r\nرقم الموديل: OK0010\r\nالنوع: ماكينة تحضير القهوة التركية\r\nهل يحتاج المُنتج إلى بطاريات للعمل أم أنه بطارية في حد ذاته: لا\r\nهل هذا منتج خطر أو مادة خطرة أو نفايات تخضع لقوانين ولوائح فيما يخص نقلها و/أو تخزينها و/أو التخلص منها؟ : لا\r\nنوع معرف المنتج الخارجي: EAN-13', 400, '166698834461Ssoc1mJQL._AC_SY879_.jpg'),
(14, 'ماكينة تحضير الاسبريسو بمضخة من ديلونجي EC685.BK - اسود', 'لعلامة التجارية: ديلونجي\r\nوزن العبوة (كغم): 4.2\r\nرمز المنتج: EC685.BK\r\nالنوع: ماكينة تحضير الاسبريسو\r\nشكل المشروب: حبوب', 1000, '1666988419611ujY1rztL._AC_SX679_.jpg'),
(15, 'ماكينة قهوة واسبرسو من ديلونجي - BCO 420', 'هل تحب شرب القهوة؟ يمكنك إعدادها في المنزل في أي وقت، بأقل جهد، عندما يكون لديك بنفسك ماكينة تحضير القهوة والاسبريسو BCO 420 من ديلونجي يتيح لك صنع كوب مثالي من الاسبريسو أو القهوة المفلترة مع مجموعة متقدمة من الميزات ونظام تحضير سهل الاستخدام. ماكينة صنع الكابتشينو هذه مصنوعة من الستانلس ستيل الذي يوفر متانة كبيرة ولديها القدرة على الاستمرار لفترة طويلة. تتيح منطقة إعادة التعبئة المحورية الحصرية الحاصلة على براءة اختراع سهولة تعبئة الماء والقهوة دون تحريك الجهاز. يتضمن الجهاز خزان مياه اسبريسو سعة 1.2 لتر يوفر سهولة إعادة تعبئة وتنظيف المياه. يقوم بإعداد قهوة غنية وناعمة وكريمية مع نظام الاستحلبات الخاص به. للمساعدة في الحفاظ على قهوتك دافئة لفترة طويلة يوجد لوح تسخين الكوب.', 1050, '166698848861jasnzMncL._AC_SX679_.jpg'),
(16, 'ماكينة تحضير القهوة نيسبريسو ايسينزا بحجم صغير، C30-EU2-WH-NE1', 'تجمع آلة صنع القهوة هذه بين سهولة الاستخدام والجمال البسيط وجودة لا مثيل لها لتحضير كوب مثالي في كل مرة. إنها الآلة الصغيرة المفتحة بالكامل على العالم من قهوة نسبرسو.\r\n\r\nاستمتع الآن بقهوة الصباح مع آلة صنع القهوة الرائعة هذه من المنزل من نسبرسو.', 800, '166698858731I2FI9nQDL._AC_.jpg'),
(17, 'ماكينة تحضير قهوة مع دورق زجاج من بلاك اند ديكر DCM750S، اسود - 750 وات', 'دلل نفسك بفنجان القهوة المفضل لديك كل يوم مع ماكينة تحضير القهوة بلاك اند ديكر موديل DCM750S-B5 بقدرة تشغيل 750 واط. تشمل العبوة إبريقًا زجاجيًا لصب القهوة لضيوفك. تتميز الماكينة بـ 10 علامات للأكواب على وعاء المياه لضمان ملء الماء والقهوة بشكل معياري. بفضل التصميم صغير الحجم لماكينة تحضير القهوة، يمكن وضعها بشكل مثالي في المكاتب الصغيرة والمنازل. يضمن هيكل الجهاز المصنوع من الستانلس ستيل مقاومة التآكل والمتانة.', 250, '166698863651cRSJYZgdL._AC_SY879_.jpg'),
(18, 'ورق ترشيح قهوة تشيبو مقاس 4 ، 80 حبة', 'ورق فلتر قهوة من تشيبو - مقاس 4، 80 قطعة، ابيض', 40, '1666988673514F64g-7kL._AC_SX679_.jpg'),
(19, 'قهوة عربية مطحونة روبوستا كواليتا روزا من لافاتزا - تحميص متوسط، 250 جم', 'مزيج قهوة مطحونة كواليتا روسا ارابيكا وروبوستا من لافازا - تحميص متوسط، 250 جرام', 35, '166698871041gyYJU9CTL._AC_.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `is_admin` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`, `is_admin`) VALUES
(1, 'admin', 'admin@test.com', '', '123456', 1),
(10, 'leen mohammed', 'leen828@yahoo.com', '054423567', '123456', 0),
(11, 'maha', 'maha@test.com', '1234567', '123456', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
