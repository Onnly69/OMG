-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2022 at 10:22 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `omg`
--

-- --------------------------------------------------------

--
-- Table structure for table `armchair`
--

CREATE TABLE `armchair` (
  `armchair_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `max_weight` int(11) NOT NULL,
  `color` varchar(20) NOT NULL,
  `weight` int(11) NOT NULL,
  `material` varchar(20) NOT NULL,
  `price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `armchair`
--

INSERT INTO `armchair` (`armchair_id`, `name`, `description`, `max_weight`, `color`, `weight`, `material`, `price`, `quantity`, `img`) VALUES
(24, 'DXRacer Craft', 'Designed with aesthetics in mind, the DXRacer Craft Koi Fish gaming chair infuses your setup with new vitality. It features a stereoscopic pattern of koi fish which is flawlessly embroidered to bring gamers visual beauty. The multiple adjustments ensure gamers can experience maximum comfort and support.', 114, 'custom', 30, 'Leather', 460, 5, 'https://nex-img.dxracer.cc/20001/20220221/94945f13-f8c6-4b31-86eb-b6d6168bb79d.jpg?imageView2/2/w/820/format/webp/interlace/1'),
(25, 'DXRacer Air Pro Mesh', 'Sit comfortably for hours in DXRacer Air Pro Chair. It features breathable mesh upholstery that holds up to everyday use while keeping you cooler throughout the workday, offering all-day comfort and support.', 105, 'black', 31, 'Highly Resilent Mesh', 490, 4, 'https://nex-img.dxracer.cc/20001/20220301/3fbd86f3-fe2d-4f6d-ba31-5c3300680260.jpg?imageView2/2/w/820/format/webp/interlace/1'),
(26, 'DXRACER 2022 Prince', 'Recommended by many famous Esport players because of quality assurance and product safety, DXRACER Prince Series is engineered with ergonomic head/lumbar support and high-density foam cushions to help minimize fatigue during extended gaming sessions.', 105, 'black, white', 24, 'PVC Leather', 320, 9, 'https://nex-img.dxracer.cc/20001/20210423/549974ac-7852-4dcf-89bc-6689f8cf0958.jpg?imageView2/2/w/820/format/webp/interlace/1'),
(27, 'DXRacer Tank', 'Always be one step ahead of your opponent by sitting comfortably for hours in your gaming seat. The DXRacer gaming chair features a wide seat, tall back, and 4D armrests, giving you the style, comfort, and endurance you need for long-haul gaming sessions.', 180, 'black, blue', 39, 'PVC Leather', 680, 5, 'https://nex-img.dxracer.cc/20001/20210115/c3b5bc69-6bf2-492f-8620-caa26ef0f9e2.jpg?imageView2/2/w/820/format/webp/interlace/1'),
(28, 'Aero Cool AC100 AIR', 'Inspired by racing cars, the AC100 AIR features a sleek and stylish design and delivers the element of speed straight to your gaming room. Built with premium faux leather materials and a carbon fiber-style blend, this gaming chair rocks a modern, eSports look.', 150, 'black, red', 20, 'Leather', 135, 11, 'https://aerocool.io/wp-content/uploads/2018/12/AC100-Air-Infographic700x700px-01-BR.jpg'),
(29, 'Aaero Cool AC220 AIR', 'Built with a stylish racing seat design, the AC120 AIR delivers the look and feel of a professional gamer. With AIR Technology built into the sitting surface of the chair, you’ll feel comfortable and cool even after long hours of use.  Fully adjustable backrest and two-directional armrests allow you to adjust your chair just the way you like it. Comes with an adjustable neck pillow and back cushion to provide extra support.', 150, 'black, red', 24, 'Leather', 180, 10, 'https://aerocool.io/wp-content/uploads/2018/05/AC220-AIR-Infographic700x700px-BR-01.jpg'),
(30, 'Aero Cool AC60C AIR', 'Built with a stylish racing seat design, the AC60C AIR delivers the look and feel of a professional gamer. With AIR Technology built into the sitting surface of the chair, you’ll feel comfortable and cool even after long hours of use. With an ergonomically-friendly design and curved, cushioned armrests, you’re sure to feel nice and relaxed while you game.', 100, 'black, orange', 16, 'Leather', 120, 14, 'https://aerocool.io/wp-content/uploads/2018/11/AC60C-Air-Infographic700x700px-BR01.jpg'),
(31, 'Hator DARKSIDE', 'Luxurious design by affordable price. Darkside armchair will style to various designs from cozy home to office.', 150, 'color', 22, 'PU leather/Suede fab', 150, 8, 'https://hator.gg/wp-content/uploads/products/chairs/sport-light-darkside/original/hator-sport-light-darkside_800_2.png'),
(32, 'Hator SPORT ESSENTIAL', 'In the silhouette of the Hator Sport Essential chair easy to guess the outlines of sports car seats. Sensible lateral support, resilient seat, the ability to accurately adjust the chair for yourself with the help of complete pillows and available adjustments – all this makes the Sport model an excellent choice for installation within your playing place.', 150, 'black, yellow', 22, 'PU leather', 250, 12, 'https://hator.gg/wp-content/uploads/products/chairs/sport-essential/original/hator-sport-essential-yellow_800_6.png'),
(33, 'Secretlab TITAN Evo 2022', 'More comfort. Deeper personalization. Exceptional durability. With research-backed design innovations engineered for serious performance, the Secretlab TITAN Evo 2022 is the first gaming chair of its kind. Play better with pro-grade ergonomics — the choice of the world’s best players and professionals worldwide.', 37, 'custom', 170, 'Leather', 500, 4, 'https://cdn.shopify.com/s/files/1/2360/6457/products/SL_TitanEvoR_PU_Stealth0001_S_grande.jpg?v=1626023684'),
(34, 'Meetion CHR15', 'Remodeled from the European racing seat, the shape is cool and full of competitive colors!  ◆Sedentary without deformation. High density, high rebound sponge. ◆Curved the neck support headrest. Support the weight of the head. Disperse the strength of the spine, and continue the game without stress.  ◆2D swivel armrest. Can lift up and down rotate left and right. Support the arm for more comfortable fit.', 135, 'White, orange, red, ', 17, 'Leather', 200, 13, 'https://img80003453.weyesimg.com/uploads/meetion.com/images/16204447957278.png?imageView2/2/w/1920/q/99/format/webp');

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

CREATE TABLE `cases` (
  `case_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `form_factor` varchar(30) NOT NULL,
  `material` varchar(30) NOT NULL,
  `size` varchar(30) NOT NULL,
  `fan` int(11) DEFAULT NULL,
  `cooler_height` int(11) NOT NULL,
  `psu` varchar(30) NOT NULL,
  `color` varchar(30) NOT NULL,
  `price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cases`
--

INSERT INTO `cases` (`case_id`, `name`, `description`, `form_factor`, `material`, `size`, `fan`, `cooler_height`, `psu`, `color`, `price`, `quantity`, `img`) VALUES
(12, 'Corsair 4000D', 'The CORSAIR 4000D AIRFLOW is a distinctive, high-airflow optimized mid-tower ATX case with easy cable management and two included CORSAIR 120mm AirGuide fans for exceptional cooling.', 'MID TOWER', 'Steel, Tempered Glass, Plastic', '453x230x466', 1, 170, 'no', 'black', 95, 14, '0'),
(13, 'MSI MAG Series FORGE 100R', 'MSI MAG Forge 100R chassis can support up to ATX motherboard, side panel of 4mm tempered glass, up to 140 mm RGB fan, reserved cooling space and front USB 3.2 Gen 1 Type A Optimize Airflow ARGB Fan included 4mm Tempered Glass 330 mm Radiator Support', 'MID TOWER', 'Steel, Tempered Glass, Plastic', '421x210x499', 3, 160, 'no', 'black', 75, 7, '0'),
(14, 'be quiet! Pure Base 500DX Black', 'The be quiet! Pure Base 500DX Black is optimized for high cooling performance and designed for those who seek high airflow.  High airflow intake front panel and top cover for maximum performance Three Pure Wings 2 140mm fans guarantee high cooling performance and silent operation', 'MID TOWER', 'Steel, tempered glass', '450x232x443', 3, 190, 'no', 'black', 90, 12, '0'),
(15, 'NZXT H710i', 'This mid-tower case is excellent for ambitious builds with plenty of space for large or premium components plus two RGB strips and intuitive RGB and fan control with NZXT CAM while bringing the easy-to-build-in features of the compact H510 case series.', 'MID TOWER', 'Steel, Tempered Glass, Plastic', '516x230x494', 3, 185, 'no', 'black', 210, 5, '0'),
(16, 'Lian Li O11DXL-W O11 Dynamic XL', 'Bigger in every way a mighy powerful chassis. Modular design flexiblity for any configuration. Hot swappable drives.spacious for multiple and bigger components.Seamlessly supporting E-ATX motherboards.RGB lighting sync front panel addressable RGB. Tempered Glass on the Front, and Left Side. E-ATX ,ATX Full Tower Gaming Computer Case', 'MID TOWER', 'ALUMINUM EXTERIOR,EMPERED GLAS', '471x285x513', 0, 167, 'no', 'silver', 260, 9, '0'),
(17, 'Corsair iCUE 4000X RGB', 'The CORSAIR iCUE 4000X RGB is a distinctive and customizable tempered glass mid-tower ATX case with easy cable management and exceptional cooling, with three included CORSAIR AirGuide RGB fans', 'MID TOWER', 'Steel, Tempered Glass, Plastic', '466x453x230', 3, 170, 'no', 'white', 135, 11, '0'),
(18, 'ASUS TUF Gaming GT501', 'Build your battlestation with the TUF gaming GT501 case featuring seven drive bays, USB 3. 0 front panel, vertical GPU support and magnetic dust filters. Stay cool in battle with numerous cooling options including room for seven 120mm fans, two 360mm radiators, or custom water cooling with pre-drilled mounting holes.', 'MID TOWER', 'Steel, Tempered Glass', '552x545x251', 1, 170, 'no', 'carbon', 100, 5, '0'),
(19, 'Thermaltake V200', 'V200 TG Mid-Tower case comes with one tempered glass panel on the left, one preinstalled 120mm standard fan at the rear and supports motherboards up to ATX.', 'MID TOWER', 'Steel, Tempered Glass, Plastic', '447x217x432', 4, 160, 'no', 'black', 55, 7, '0'),
(20, 'AeroCool Cylon RGB', 'Cylon is a mid-tower case with an acrylic side window panel and liquid cooling support. Its elegantly designed RGB LED front panel displays over 13 lighting modes. Select from one of six unique RGB flows or choose from seven color modes so you can showcase your favorite color along with your own unique style. With additional support for VGA fan coolers and dual chamber design, this case allows for superior airflow and cooling for your system.', 'MID TOWER', 'Steel, Tempered Glass, Plastic', '198x459x413', 3, 155, 'no', 'black, white', 55, 22, '0'),
(21, 'Aerocool Aero One Mini Eclipse', 'High-performance mini tower case with full tempered glass side panel to showcase the inside of your rig. Mesh front panel design allows for viewing of your front LED fans while providing superior air flow and circulation.  Comes equipped with three 12cm Addressable RGB fans in the front and one 12cm Addressable RGB fan in the rear of the case. Addressable RGB fans can be controlled using one of two ways: RGB LED control button or Addressable RGB motherboard. 6-Port RGB Control Hub allows you to connect your ARGB fans or accessories.', 'Mini Tower', 'Steel, Tempered Glass, Plastic', '210x380x330', 3, 150, 'no', 'black', 65, 11, '0'),
(22, 'Cooler Master MasterBox ', 'The modular MasterBox Q500L can orient vertically and horizontally with rubberized thumbscrews that also act as feet. Depending on hardware configuration, the movable I/O panel can be relocated to multiple positions to retain its accessibility.', 'MINI TOWER', 'STEEL, PLASTIC', '386x230x381', 3, 160, 'no', 'carbon', 85, 14, '0');

-- --------------------------------------------------------

--
-- Table structure for table `cooler`
--

CREATE TABLE `cooler` (
  `cooler_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `type` varchar(10) NOT NULL DEFAULT 'air',
  `tdp` int(11) NOT NULL,
  `socket` varchar(255) NOT NULL,
  `rpm` int(11) NOT NULL,
  `size` varchar(20) NOT NULL,
  `color` varchar(20) NOT NULL,
  `weight` int(11) NOT NULL,
  `price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cooler`
--

INSERT INTO `cooler` (`cooler_id`, `name`, `description`, `type`, `tdp`, `socket`, `rpm`, `size`, `color`, `weight`, `price`, `quantity`, `img`) VALUES
(57, 'Cooler Deepcool GAMMAXX 400 V2', 'GAMMAXX 400 V2(Blue) is a new model of the legendary GAMMAXX 400 series. With an upgraded 120mm fan with blue LED, 4 high-efficiency heat pipes and the heat-resistant mounting kit, GAMMAXX 400 V2(Blue) is apt to provide better and safer cooling performance (TDP 180W).', 'air', 180, 'LGA1700/1200/1151/1150/1155/1366 AM4/AM3+/AM3/AM2+/AM2/FM2+/FM2/FM1', 1650, '129×77×155', 'silver', 606, 27, 25, 'https://enter.online/images/product/2022/30/enter-cooler-deepcool-gammaxx-400-v2.webp'),
(58, 'eepcool CASTLE 240 RGB V2', 'Anti-leak Tech Inside liquid cooling system equipped. Double window panes and immersive ambient lighting ready to provide a perfect display of aesthetic illumination. 16.7 M true color RGB flowing light system with 5 in-built effects and 36 interchangeable lighting modes. Motherboard and controller Addressable RGB SYNC control supported* Ultra-large, pure copper CPU block provides effective coverage and heat dissipation for CPUs of any size.', 'water', 240, 'LGA2066/2011-v3/2011/1151/1150/1155/1366 TR4/AM4/AM3+/AM3/AM2+/AM2/FM2+/FM2/FM1', 2550, '282x105', 'black', 1446, 135, 7, 'https://m.media-amazon.com/images/I/51OBQhMx2aL._AC_SX679_.jpg'),
(59, 'Deepcool GAMMAXX L120', 'GAMMAXX L series AIO coolers are known for their powerful performance, neat appearance, and tempting cost efficiency. The GAMMAXX L120 V2 upgraded its reliability with “Anti-leak Tech Inside” system, so users can enjoy extreme processor performance without any leakage concerns', 'water', 180, 'LGA20XX/1700/LGA1366/LGA1200/1151/1150/1155 AM4/AM3+/AM3/AM2+/AM2/FM2+/FM2/FM1 ', 2400, '159×120×27', 'black', 990, 50, 8, 'https://enter.online/images/product/2022/72/enter-cooler-cu-lichid-deepcool-gammaxx-l120.webp'),
(60, 'Cooler Deepcool NEPTWIN RGB', 'NEPTWIN RGB is a specialized 6-heatpipe CPU Cooler, which designed to support multiple PWM fan speed control. Powerful 6 U-shaped heatpipes&Twin-tower heatsinks own superb cooling performance. Aesthetic RF RGB fans bring the heatsink magic and majestic looks. Plus-sized twin-tower aluminum fins and highly polished, reflective copper base make NEPTWIN RGB to be one of the best CPU coolers and an excellent thermal solution for gaming environments.', 'air', 190, 'LGA20XX/LGA1200/1151/1150/1155/LGA775/LGA1366 AM4/AM3+/AM3/AM2+/AM2/FM2+/FM2/FM1', 1500, '126×134×158', 'silver', 1068, 55, 13, 'https://enter.online/images/product/2022/76/enter-cooler-deepcool-neptwin-rgb.webp'),
(61, 'Deepcool GamerStorm Assassin III', '7 heatpipes, dual 140mm performance fans, 280W TDP. Minimalistic style, mirror-finish nickel cover and obsidian-like spoiler. 54mm RAM clearance, 138mm wide and 165mm tall. New sinter heatpipe technology that extensively increased the heat transfer efficiency. Heatpipes and fins are assembled by solder reflow process, long-lasting deformation resistance. Patented two-layer fan blades that amplify the airflow up to 2.5m³/minute. Unique fan frame design that elevates air pressure and lower noise.', 'air', 220, 'LGA2066/2011-v3/2011/1700/LGA1200/1151/1150/1155/1366  AM4/AM3+/AM3/AM2+/AM2/FM2+/FM2/FM1', 1400, '161×140×165', 'black', 1464, 65, 7, 'https://enter.online/images/product/2022/50/enter-cooler-deepcool-gamerstorm-assassin-iii.webp'),
(62, 'Deepcool GAMMAXX GTE V2', 'Black top cover with unique print. 120mm PWM fan with upgraded performance and RGB lighting. Lighting system can be controlled by motherboard. 4 new-tech copper pipes improve heat transfer and dissipation efficiency. The new fin-mounting process elevate ventilation. The brand-new foolproof mounting kit makes it easier and safer to use.', 'water', 180, 'LGA1700/1200/1151/1150/1155/1366 AM4/AM3+/AM3/AM2+/AM2/FM2+/FM2/FM1', 1650, '129×77×157.5', 'white', 650, 35, 16, 'https://enter.online/images/product/2022/83/enter-cooler-deepcool-gammaxx-gte-v2.webp'),
(63, 'Be quiet! Dark Rock Pro 4', 'The two Silent Wings PWM fans feature advanced fluid-dynamic bearings, smooth six-pole motors and airflow-optimized fan blades. The front Silent Wings 3 fan provides extremely high air pressure, thanks to a funnel-shaped air inlet in the frame. Decoupled fan mounting with vibration-isolating elements on the heat sink.', 'air', 250, 'AM2(+) / AM3(+) / AM4 / FM1 / FM2(+)  1150 / 1151 / 1155 / 1156 / 1200 / 1366 / 2011(-3) Square ILM / 2066', 1500, '146 x 136 x 163', 'black', 1060, 110, 9, 'https://enter.online/calculatoare/cooler/be-quiet-dark-rock-pro-4-hidrodinamic-1500-rpm'),
(64, 'NZXT Kraken X73', 'This All-in-One (AIO) liquid cooler is designed for full and mid-tower cases with support for 360mm radiator mounting, this AIO delivers the highest cooling potential of any NZXT Kraken.', 'water', 270, 'LGA 1200, 115X, 1366, 2011, AM4, sTRX4*, TR4* 2011-3, 2066 ', 2800, '121 x 394 x 27', 'black', 2080, 175, 4, 'https://enter.online/images/product/2022/69/enter-cooler-cu-lichid-nzxt-kraken-x73.webp'),
(65, 'Be quiet! Shadow Rock 3', 'Shadow Rock 3 provides impressive cooling of 190W TDP and is designed for those searching for high performance air cooling and a low noise level. The brushed aluminum top cover with a bi-color surface adds a touch of elegance to this premium cooler.', 'air', 190, 'AM3(+) / AM4  1150 / 1151 / 1155 / 1200 / 2011(-3) Square ILM / 2066', 1600, '	120 x 120 x 25', 'black', 710, 75, 15, 'https://enter.online/images/product/2022/76/enter-cooler-be-quiet-shadow-rock-3.webp'),
(66, 'Be quiet! Silent Loop 2 240mm', 'Powerful pump with innovative three-chamber design ensures the very high-performance Silent Loop 2 240mm is whisper-quiet at the same time. The second of its three chambers offers enough space for the coolant to spread out and thus reduces turbulences before it leaves the pump unit. In combination with the 6-pole three-phase motor this results in a smooth and as a consequence silent operation.', 'water', 270, '1150 / 1151 / 1155 / 1200 / 2011(-3) Square ILM / 2066; AMD: AM4 / AM3(+) / sTRX4,TR4(', 2800, '274x120x52', 'black', 1050, 180, 4, 'https://enter.online/images/product/2022/33/enter-cooler-cu-lichid-be-quiet-silent-loop-2-240mm.webp');

-- --------------------------------------------------------

--
-- Table structure for table `cpu`
--

CREATE TABLE `cpu` (
  `cpu_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `multi` varchar(20) NOT NULL,
  `freq` varchar(30) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'locked',
  `graphic_cpu` varchar(50) NOT NULL DEFAULT 'no',
  `socket` varchar(10) NOT NULL,
  `price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cpu`
--

INSERT INTO `cpu` (`cpu_id`, `name`, `description`, `multi`, `freq`, `status`, `graphic_cpu`, `socket`, `price`, `quantity`, `img`) VALUES
(3, 'Intel Core i5-10400F', 'The Intel Core i5-10400F is a desktop processor with 6 cores, launched in April 2020. It is part of the Core i5 lineup, using the Comet Lake architecture with Socket 1200. Thanks to Intel Hyper-Threading the core-count is effectively doubled, to 12 threads. Core i5-10400F has 12MB of L3 cache and operates at 2.9 GHz by default, but can boost up to 4.3 GHz, depending on the workload. Intel is making the Core i5-10400F on a 14 nm production node, the transistor count is unknown. The multiplier is locked on Core i5-10400F, which limits its overclocking potential.', '6-Core 12-threads', '2.9 stock 4.3 boost', 'locked', 'no', 'LGA 1200', 125, 12, 'https://c1.neweggimages.com/ProductImageCompressAll1280/19-118-132-V01.jpg'),
(5, 'Intel Core i3-10105', 'The Intel Core i3-10105 is a desktop processor with 4 cores, launched in March 2021. It is part of the Core i3 lineup, using the Comet Lake architecture with Socket 1200. Thanks to Intel Hyper-Threading the core-count is effectively doubled, to 8 threads. Core i3-10105 has 6MB of L3 cache and operates at 3.7 GHz by default, but can boost up to 4.4 GHz, depending on the workload. Intel is making the Core i3-10105 on a 14 nm production node, the transistor count is unknown. The multiplier is locked on Core i3-10105, which limits its overclocking potential.', '4-Core 4-threads', '3.7 stock 4.4 boost', 'locked', 'UHD Graphics 630', 'LGA 1200', 130, 23, 'https://www.sngamerzindia.com/image/cache/catalog/pc-components/intel-processors/intel-i3-10th-gen-550x550.png'),
(7, 'Intel Pentium G4600', 'The Intel Pentium G4600 is a desktop processor with 2 cores, launched in January 2017. It is part of the Pentium lineup, using the Kaby Lake architecture with Socket 1151. Thanks to Intel Hyper-Threading the core-count is effectively doubled, to 4 threads. Pentium G4600 has 3MB of L3 cache and operates at 3.6 GHz. Intel is making the Pentium G4600 on a 14 nm production node, the transistor count is unknown. ', '2-Core 4-threads', '3.6', 'locked', 'Intel HD 630', 'LGA 1151', 60, 33, 'https://c1.neweggimages.com/ProductImage/19-117-739-Z01.jpg'),
(8, 'Intel Core i5-9600KF', 'The Intel Core i5-9600KF is a desktop processor with 6 cores, launched in January 2019. It is part of the Core i5 lineup, using the Coffee Lake Refresh architecture with Socket 1151. Core i5-9600KF has 9MB of L3 cache and operates at 3.7 GHz by default, but can boost up to 4.6 GHz, depending on the workload. Intel is making the Core i5-9600KF on a 14 nm production node, the transistor count is unknown. You may freely adjust the unlocked multiplier on Core i5-9600KF, which simplifies overclocking greatly, as you can easily dial in any overclocking frequency.', '6-Core 6-threads', '3.7 stock 4.6 boost', 'unlocked', 'no', 'LGA 1151', 160, 12, 'https://content.rozetka.com.ua/goods/images/original/98407964.jpg'),
(9, 'Intel Core i3-12100F', 'The Intel Core i3-12100F is a desktop processor with 4 cores, launched in January 2022. It is part of the Core i3 lineup, using the Alder Lake-S architecture with Socket 1700. Thanks to Intel Hyper-Threading the core-count is effectively doubled, to 8 threads. Core i3-12100F has 12MB of L3 cache and operates at 3.3 GHz by default, but can boost up to 4.3 GHz, depending on the workload. Intel is building the Core i3-12100F on a 10 nm production process, the transistor count is unknown. The multiplier is locked on Core i3-12100F, which limits its overclocking capabilities.', '4-Core 8-threads', '3.3 stock 4.3 boost', 'locked', 'no', 'LGA 1700', 165, 2, 'https://c1.neweggimages.com/ProductImageCompressAll1280/19-118-357-03.jpg'),
(10, 'Intel Core i7-9700F', 'The Intel Core i7-9700F is a desktop processor with 8 cores, launched in April 2019. It is part of the Core i7 lineup, using the Coffee Lake Refresh architecture with Socket 1151. Core i7-9700F has 12MB of L3 cache and operates at 3 GHz by default, but can boost up to 4.7 GHz, depending on the workload. Intel is making the Core i7-9700F on a 14 nm production node, the transistor count is unknown. The multiplier is locked on Core i7-9700F, which limits its overclocking potential.', '8-Core 8-threads', '3.0 stock 4.7 boost', 'locked', 'no', 'LGA 1151', 350, 5, 'https://c1.neweggimages.com/ProductImageCompressAll1280/19-118-058-V01.jpg'),
(11, 'Intel Core i9-11900F', 'The Intel Core i9-11900F is a desktop processor with 8 cores, launched in March 2021. It is part of the Core i9 lineup, using the Rocket Lake-S architecture with Socket 1200. Thanks to Intel Hyper-Threading the core-count is effectively doubled, to 16 threads. Core i9-11900F has 16MB of L3 cache and operates at 2.5 GHz by default, but can boost up to 5.2 GHz, depending on the workload. Intel is making the Core i9-11900F on a 14 nm production node, the transistor count is unknown. The multiplier is locked on Core i9-11900F, which limits its overclocking potential.', '8-Core 16-threads', '2.5 stock 5.2 boost', 'locked', 'no', 'LGA 1200', 400, 3, 'https://c1.neweggimages.com/ProductImageCompressAll1280/19-118-262-V01.jpg'),
(12, 'Intel Core i9-10940X', 'The Intel Core i9-10940X is a desktop processor with 14 cores, launched in October 2019. It is part of the Core i9 Extreme lineup, using the X-Series 10th Gen architecture with Socket 2066. Thanks to Intel Hyper-Threading the core-count is effectively doubled, to 28 threads. Core i9-10940X has 19.25MB of L3 cache and operates at 3.3 GHz by default, but can boost up to 4.8 GHz, depending on the workload. Intel is building the Core i9-10940X on a 14 nm production process, the transistor count is unknown. You may freely adjust the unlocked multiplier on Core i9-10940X, which simplifies overclocking greatly, as you can easily dial in any overclocking frequency.', '14-Core 28-threads', '3.3 stock 4.8 boost', 'unlocked', 'no', 'LGA 2066', 800, 2, 'https://c1.neweggimages.com/ProductImageCompressAll1280/19-118-109-V01.jpg'),
(13, 'AMD RYZEN 3 2200G', 'The AMD Ryzen 3 2200G is a desktop processor with 4 cores, launched in February 2018. It is part of the Ryzen 3 lineup, using the Zen (Raven Ridge) architecture with Socket AM4. Ryzen 3 2200G has 4MB of L3 cache and operates at 3.5 GHz by default, but can boost up to 3.7 GHz, depending on the workload. AMD is making the Ryzen 3 2200G on a 14 nm production node using 4,950 million transistors. The silicon die of the chip is not fabricated at AMD, but at the foundry of GlobalFoundries. You may freely adjust the unlocked multiplier on Ryzen 3 2200G, which simplifies overclocking greatly, as you can easily dial in any overclocking frequency.', '4-Core 4-threads', '3.5 stock 3.7 boost', 'unlocked', 'Radeon Vega 8', 'AM4', 185, 12, 'https://c1.neweggimages.com/ProductImageCompressAll1280/19-113-481-V01.jpg'),
(14, 'AMD Ryzen 5 5600G', 'The AMD Ryzen 5 5600G is a desktop processor with 6 cores, launched in April 2021. It is part of the Ryzen 5 lineup, using the Zen 3 (Cezanne) architecture with Socket AM4. Thanks to AMD Simultaneous Multithreading (SMT) the core-count is effectively doubled, to 12 threads. Ryzen 5 5600G has 16MB of L3 cache and operates at 3.9 GHz by default, but can boost up to 4.4 GHz, depending on the workload. AMD is building the Ryzen 5 5600G on a 7 nm production process using 10,700 million transistors. The silicon die of the chip is not fabricated at AMD, but at the foundry of TSMC. You may freely adjust the unlocked multiplier on Ryzen 5 5600G, which simplifies overclocking greatly, as you can easily dial in any overclocking frequency.', '6-Core 12-threads', '3.9 stock 4.4 boost', 'unlocked', 'Radeon Vega 7', 'AM4', 220, 15, 'https://c1.neweggimages.com/ProductImageCompressAll1280/19-113-683-V01.jpg'),
(15, 'AMD Ryzen 7 2700X', 'The AMD Ryzen 7 2700X is a desktop processor with 8 cores, launched in April 2018. It is part of the Ryzen 7 lineup, using the Zen+ (Pinnacle Ridge) architecture with Socket AM4. Thanks to AMD Simultaneous Multithreading (SMT) the core-count is effectively doubled, to 16 threads. Ryzen 7 2700X has 16MB of L3 cache and operates at 3.7 GHz by default, but can boost up to 4.35 GHz, depending on the workload. AMD is building the Ryzen 7 2700X on a 12 nm production process using 4,800 million transistors. The silicon die of the chip is not fabricated at AMD, but at the foundry of GlobalFoundries. You may freely adjust the unlocked multiplier on Ryzen 7 2700X, which simplifies overclocking greatly, as you can easily dial in any overclocking frequency.', '8-Core 16-threads', '3.7 stock 4.35 boost', 'unlocked', 'no', 'AM4', 320, 9, 'https://c1.neweggimages.com/ProductImageCompressAll1280/19-113-499-V01.jpg'),
(16, 'AMD Ryzen 9 5900X', 'The AMD Ryzen 9 5900X is a desktop processor with 12 cores, launched in November 2020. It is part of the Ryzen 9 lineup, using the Zen 3 (Vermeer) architecture with Socket AM4. Thanks to AMD Simultaneous Multithreading (SMT) the core-count is effectively doubled, to 24 threads. Ryzen 9 5900X has 64MB of L3 cache and operates at 3.7 GHz by default, but can boost up to 4.8 GHz, depending on the workload. AMD is building the Ryzen 9 5900X on a 7 nm production process using 4,150 million transistors. The silicon die of the chip is not fabricated at AMD, but at the foundry of TSMC. You may freely adjust the unlocked multiplier on Ryzen 9 5900X, which simplifies overclocking greatly, as you can easily dial in any overclocking frequency.', '12-Core 24-threads', '3.7 stock 4.8 boost', 'unlocked', 'no', 'AM4', 490, 6, 'https://c1.neweggimages.com/ProductImageCompressAll1280/19-113-664-V01.jpg'),
(17, 'AMD Ryzen Threadripper 3970X', 'The AMD Ryzen Threadripper 3970X is a desktop processor with 32 cores, launched in November 2019. It is part of the Ryzen Threadripper lineup, using the Zen 2 (Matisse) architecture with Socket TRX4. Thanks to AMD Simultaneous Multithreading (SMT) the core-count is effectively doubled, to 64 threads. Ryzen Threadripper 3970X has 128MB of L3 cache and operates at 3.7 GHz by default, but can boost up to 4.5 GHz, depending on the workload. AMD is building the Ryzen Threadripper 3970X on a 7 nm production process using 15,200 million transistors. The silicon die of the chip is not fabricated at AMD, but at the foundry of TSMC. You may freely adjust the unlocked multiplier on Ryzen Threadripper 3970X, which simplifies overclocking greatly, as you can easily dial in any overclocking frequency.', '32-Core 64-threads', '3.7 stock 4.5 boost', 'unlocked', 'NO', 'TRX4', 1950, 1, 'https://c1.neweggimages.com/ProductImageCompressAll1280/19-113-618-V05.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `headphones`
--

CREATE TABLE `headphones` (
  `headphones_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `impendance` int(11) NOT NULL,
  `sensivity` int(11) NOT NULL,
  `microphone` varchar(5) NOT NULL DEFAULT 'no',
  `connector` varchar(10) NOT NULL,
  `cable_length` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `keyboard`
--

CREATE TABLE `keyboard` (
  `keyboard_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'no',
  `size` varchar(20) NOT NULL,
  `rgb` varchar(5) NOT NULL DEFAULT 'no',
  `price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keyboard`
--

INSERT INTO `keyboard` (`keyboard_id`, `name`, `description`, `type`, `size`, `rgb`, `price`, `quantity`, `img`) VALUES
(32, 'G413 BACKLIT MECHANICAL GAMING KEYBOARD', 'G413 was conceived, designed, and engineered to deliver advanced performance with just the right feature set. The slim, bladelike chassis is made of of a lightweight, high-strength 5052 aluminum alloy. Underneath, there is mouse and headset cable management, plus adjustable-height feet with rubber stabilizers, so you can find the angle that fits you just right.', 'mechanical', '445x132x34', 'yes', 65, 15, 'https://resource.logitechg.com/w_1000,c_limit,q_auto,f_auto,dpr_auto/d_transparent.gif/content/dam/gaming/en/products/g413/g413-gallery-1.png?v=1'),
(33, 'Logitech PRO X', 'The tournament-proven PRO design, now with swappable pro-grade GX switches. LIGHTSYNC RGB to highlight critical keys. Built to win in collaboration with the world’s top esports athletes. ', 'mechanical', '153x361x34', 'yes', 130, 9, 'https://resource.logitechg.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/pro-x-keyboard/pro-x-keyboard-gallery-1.png?v=1'),
(34, 'Logitech G915', 'A breakthrough in engineering. Featuring LIGHTSPEED pro-grade wireless, advanced LIGHTSYNC RGB, and high-performance low-profile mechanical switches in a premium ultra-thin design. ', 'mechanical', '475x150x22', 'yes', 240, 3, 'https://resource.logitechg.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/g915/g915-gallery/us-g915-wireless-gallery-topdown.png?v=1'),
(35, 'Logitech G413 TKL', 'G413 TKL SE features tactile mechanical switches, 6-key rollover anti-ghosting, PBT keycaps and durable aluminum alloy build—all in a tenkeyless design.', 'mechanical', '355x127x36.5', 'no', 55, 25, 'https://resource.logitechg.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/g413-se-tkl/g413-se-tkl-gallery-1-new.png?v=1'),
(36, 'HyperX Alloy Elite 2', 'For gamers, streamers, and multi-taskers who need to have more control at their fingertips, the HyperX Alloy Elite™ 2 is the keyboard for you. With dedicated media keys and a large volume wheel, this fully-featured gaming keyboard’s ready for everything from video editing to watching movies. It’s built with ultra-reliable HyperX mechanical switches balanced for speed and responsiveness, so you can trust your key inputs. The switches’ exposed LEDs pair with the translucent HyperX Pudding Keycaps to give your RGB lighting extra brightness compared to solid-colour keycaps.', 'mechanical', '444x174x37.4', 'yes', 120, 14, 'https://media.kingston.com/hyperx/product/hx-product-keyboard-alloy-elite-2-us-3-zm-lg.jpg'),
(37, 'HyperX Alloy Origins Core', 'The HyperX Alloy Origins™ Core is an ultra-compact, sturdy tenkeyless keyboard featuring custom HyperX mechanical switches designed to give gamers the best blend of style, performance, and reliability. These key switches have exposed LEDs for stunning lighting with an actuation force and travel distance elegantly balanced for responsiveness and accuracy. Alloy Origins Core is built with a full aluminum body so it stays rigid and stable when keystrokes are flying, and also features keyboard feet that let you choose from three different tilt levels. Its compact TKL design frees up space for mouse movement in desktop setups where space is at a premium, and it also features a detachable USB Type-C cable for supreme portability.', 'mechanical', '360x132.5x34.5', 'yes', 80, 12, 'https://fullbuff.com/wp-content/uploads/2021/12/HyperX-Alloy-Origins-Core-TKL-tenkeyless.jpg'),
(38, 'HyperX Alloy FPS RGB', 'The HyperX Alloy FPS RGB™ is a great-looking, high-performance keyboard designed to make sure that both your skills and style are on full display. The exposed LEDs on the keyswitches amp up the brightness of the RGB backlighting which can be customised with the easy-to-use HyperX NGenuity software to make your stream really stand out. The Alloy FPS RGB has a small footprint geared for space-constrained setups so you’ll get room to manoeuvre without having to ramp up your mouse sensitivity. It also features a convenient USB charging port and a braided, detachable cable that is resistant to wear and allows for easy portability.', 'mechanical', '442.26x129.81x35.59', 'yes', 80, 21, 'https://www.ubuy.vn/productimg/?image=aHR0cHM6Ly9tLm1lZGlhLWFtYXpvbi5jb20vaW1hZ2VzL0kvNzFHQVIraWVjTUwuX0FDX1NMMTUwMF8uanBn.jpg'),
(39, 'HyperX Alloy Core RGB', 'Featuring HyperX’s signature radiant light bar and smooth, dynamic RGB lighting effects, the HyperX Alloy Core RGB™ is ideal for gamers looking to enhance their keyboard’s style and performance without breaking the bank. With six different lighting effects and three brightness levels, it balances both brilliance and budget. Crafted with a durable, reinforced plastic frame, the Alloy Core RGB was constructed for stability and reliability for gamers who want a keyboard that will last.', 'membrane', '443.20x175.31x35.68', 'yes', 30, 9, 'https://fullbuff.com/wp-content/uploads/2021/12/HyperX-Alloy-Core-RGB.jpg'),
(40, 'Logitech G213 RGB', 'The G213 gaming keyboard features Logitech G Mech-Dome keys that are specially tuned to deliver a superior tactile response and overall performance profile similar to a mechanical keyboard. Mech-Dome keys are full height, deliver a full 4mm travel distance, 50g actuation force, and a quiet sound operation.', 'membrane', '452x218x33', 'yes', 45, 11, 'https://resource.logitechg.com/w_944,c_limit,q_auto,f_auto,dpr_2.0/d_transparent.gif/content/dam/gaming/en/non-braid/g213-finch/g213-brown-hero-nb.png?v=1'),
(41, 'RAZER HUNTSMAN V2', 'If all-out advantage is more your speed, arm yourself with responsiveness that’s second to none. Meet the Razer Huntsman V2— an optical gaming keyboard with near-zero input latency and fully geared out with other high-end features to make it the complete package.', 'mechanical', '525x132x34', 'yes', 180, 9, 'https://assets3.razerzone.com/TmxaZh9x00iyubsnrPZIt8CsJto=/1199x799/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fh16%2Fhec%2F9239675011102%2F16-sep-huntsman-v2-1500x1000-1.jpg'),
(42, 'Roccat Vulcan TKL Pro ', 'Award-winning design now in tenkeyless form factor Titan Switch Optical: optical speed, mechanical feel Long-lasting 100 million keystroke lifecycle Enjoy bigger mouse movement range without bumping keyboard Ultra-low profile design eliminates wrist strain Key stabilizer tech makes keys sturdy', 'mechanical', '360x133.3x34', 'yes', 140, 5, 'https://cdn.shopify.com/s/files/1/0508/6747/0494/products/Topshot_Vulcan-TKL-Pro_Doc-Edition_550x534.png?v=1631883325');

-- --------------------------------------------------------

--
-- Table structure for table `monitor`
--

CREATE TABLE `monitor` (
  `monitor_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `resolution` varchar(20) NOT NULL,
  `freq` int(11) NOT NULL,
  `matrix_type` varchar(20) NOT NULL,
  `responsive_time` double NOT NULL,
  `inputs` varchar(20) NOT NULL,
  `price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `monitor`
--

INSERT INTO `monitor` (`monitor_id`, `name`, `description`, `resolution`, `freq`, `matrix_type`, `responsive_time`, `inputs`, `price`, `quantity`, `img`) VALUES
(56, 'Philips 243V7QJABF', 'IPS displays use advanced technology that offers extra wide viewing angles of 178/178 degrees, making it possible to view the display from almost any angle. Unlike standard TN panels, IPS displays offer remarkably clear, vivid color images, making them ideal not only for viewing photos,', '1920 x 1080', 75, 'IPS', 4, 'VGA, HDMI, Display P', 180, 15, 'https://neocomputer.md/image/cache/data/Monitors/Philips/23.8%20Philips%20243V7QDAB%20Black_1-500x500.jpg'),
(57, 'Samsung S24R650FDI', 'The image on the screen is exceptionally realistic. The IPS panel maintains the stability of brightness and color accuracy across the entire screen area. A wide 178˚ field of view improves productivity. It should be noted that the accuracy of color tones remains unchanged even if you look at the screen at a large angle.', '1920x1080', 75, 'IPS', 5, 'VGA, HDMI, Display P', 230, 13, 'https://neocomputer.md/image/cache/data/Monitors/Samsung/Samsung%20S24R650FDI%20Black_Gray_1-500x500.jpg'),
(58, 'Samsung Odyssey G7 C32G75TQS', 'Make your gaming world, more lifelike than ever before. Packing in 1.7 times the pixel density of Full HD, WQHD resolution boasts incredibly detailed, pin-sharp images. Experience a fuller view with more space to take in all the action.', '2560 x 1440', 240, 'IPS', 1, 'HDMI, Display Port', 640, 7, 'https://neocomputer.md/image/cache/data/Monitors/Samsung/Samsung%20Odyssey%20G7%20C32G75TQS%20Curved-VA%20Black_1-500x500.jpg'),
(59, 'Philips 345B1C, Curved, Black', 'The Philips B line 34\" curved UltraWide display gives a wrap-around view of your work. A crystal-clear WQHD display and ergonomic stand design make for optimal working conditions. Eye comfort features with TUV certification to reduce eye fatigue.', '3440 x 1440', 100, 'IPS', 5, 'HDMI, Display Port, ', 560, 15, 'https://neocomputer.md/image/cache/data/Monitors/Philips/Philips%20345B1C%20Black_1-500x500.jpg'),
(60, 'Lenovo L27m-28, Black', 'The Lenovo L27m-28 monitor provides an unobstructed viewing experience with the NearEdgeless screen. The full-HD, large 27-inch screen off ers enough screen real estate to have multiple working windows at once. The impressive and eye-catching display will be a centerpiece of your desktop, at home, or in the offi ce.', '1920 x 1080', 75, 'IPS', 4, 'VGA, HDMI, 3xUSB', 220, 21, 'https://neocomputer.md/image/cache/data/Monitors/LENOVO/27%20Lenovo%20L27m-28%20Black_1-500x500.jpg'),
(61, 'AOC 24B1H, Black', 'Equipped with a VA panel, the 24B1H delivers a staggering 3000:1 static contrast ratio with deep, inky blacks. Its sleek 23.6\" panel at 1080p resolution is 3-sides borderless and has an ultra-slim profile of just 12.5 mm that lets you focus on the display practically from every angle (178/178).', '1920 x 1080', 60, 'MVA', 5, 'VGA, HDMI', 170, 23, 'https://neocomputer.md/image/cache/data/Monitors/AOC/AOC%2027B1H%20Black_1-500x500.jpg'),
(62, 'Xiaomi Mi 1C, Black', 'Professional monitor with a diagonal of 23.8 inches or 60 centimeters. Ultra-narrow frames, the ability to work in diptych and triptych mode. Perfect design and impeccable technique.', '1920 x 1080', 60, 'IPS', 6, 'VGA, HDMI', 110, 17, 'https://neocomputer.md/image/cache/data/Monitors/Xiaomi/Xiaomi%20Mi%201C%20Black_1-500x500.jpg'),
(63, 'Gigabyte M32U, Black', 'As an unseen player, monitor is often being underestimated. The truth is monitors form as a synergistic effect and bring out the best performance of PC components. GIGABYTE gaming monitors offer the ultimate specifications and quality, users can truly enjoy upscale performance without the need for extravagance.', '3840 x 2160', 144, 'IPS', 0.5, 'HDMI, Display Port, ', 1080, 5, 'https://neocomputer.md/image/cache/data/Monitors/Gigabyte/Gigabyte%20M32U%20Black_1-500x500.jpg'),
(64, 'Acer Predator XB281HKBMIPRZ', 'Monitors used to sacrifice color for speed, but now you can warp to a new level of gaming on a stunning IPS1 display.  Experience a whole new smooth. NVIDIA® G-SYNCTM eliminates screen tearing and minimizes stuttering for legendary PC gaming.', '3840 x 2160', 60, 'LED TN', 1, 'HDMI, Display Port, ', 420, 6, 'https://neocomputer.md/image/cache/data/Monitors/ACER/Acer%20Predator%20XB281HKBMIPRZ%20Black_1-500x500.jpg'),
(65, 'BenQ PD3200U, Black', 'Comfortable work with graphics With BenQ monitors designed specifically for designers, all the incredible ideas come to life. Wide functionality, a large selection of professional modes, accurate color reproduction will allow you to work with the most detailed information. Each line displayed on the monitor screen will be clearly drawn. BenQ designer monitors are the perfect choice for those who care about every detail and display accuracy.', '3840 x 2160', 60, 'IPS', 4, 'HDMI, Display Port, ', 795, 2, 'https://neocomputer.md/image/cache/data/Monitors/BenQ/32%20BenQ%20PD3200U%20Black_1-500x500.jpg'),
(66, 'BenQ Zowie XL2746S, Black', 'XL-series features the premiere monitors for PC e-Sports, fine-tuned to guarantee the smoothest and responsive experience, and the clearest images to arm you for competition.', '1920 x 1080', 240, 'LED TN', 0.5, 'DVI, HDMI, Display P', 740, 4, 'https://neocomputer.md/image/cache/data/Monitors/BenQ/BenQ%20Zowie%20XL2746S%20Black_1-500x500.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mother`
--

CREATE TABLE `mother` (
  `mother_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `form_factor` varchar(10) NOT NULL,
  `socket` varchar(10) NOT NULL,
  `chipset` varchar(10) NOT NULL,
  `type_ram` varchar(10) NOT NULL,
  `nr_slot_ram` int(11) NOT NULL,
  `max_ram` int(11) NOT NULL,
  `size` varchar(20) NOT NULL,
  `price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mother`
--

INSERT INTO `mother` (`mother_id`, `name`, `description`, `form_factor`, `socket`, `chipset`, `type_ram`, `nr_slot_ram`, `max_ram`, `size`, `price`, `quantity`, `img`) VALUES
(63, 'ASUS ROG STRIX B550-F GAMING', 'Last year, AMD released the Ryzen 3000 series desktop processors in one of the most monumental hardware launches of the modern era.', 'ATX', 'PGA AM4', 'AMD B550', 'DDR4', 4, 128, '305x244 ', 230, 13, 'https://www.primeabgb.com/wp-content/uploads/2020/06/ROG-STRIX-B550-F-GAMINGWI-FI.jpg'),
(64, 'MSI B450 Tomahawk Max AM4', 'Military style with extended heatsink design for better thermal solution, plus DDR4 Boost, Core Boost, Turbo M.2 and USB 3.2 Gen2 connector', 'ATX', 'PGA AM4', 'AMD B450', 'DDR4', 4, 128, '305x244 ', 120, 17, 'https://www.primeabgb.com/wp-content/uploads/2019/08/B450-Tomahawk-Max.jpg'),
(65, 'ASUS ROG Strix X570-E Gaming', 'The ROG Strix X570-E Gaming motherboard delivers the quintessential ROG experience with a compelling mix of features and undeniable style that provide the ideal foundation for building a powerful ATX gaming system. Next-generation wireless networking delivers the smoothest online gameplay and a comprehensive cooling options ensure stable performance. ', 'ATX', 'PGA AM4', ' AMD X570', 'DDR4', 4, 128, '305x244 ', 370, 4, 'https://www.primeabgb.com/wp-content/uploads/2019/06/ASUS-ROG-Strix-X570-E-Gaming-AMD-X570-ATX-Gaming-Motherboard.jpg'),
(67, 'Gigabyte B460M AORUS PRO', 'Intel® B460 AORUS Motherboard with RGB Fusion 2.0 with Digital LEDs, Intel® GbE LAN with cFosSpeed, Advanced Thermal Design with Enlarged Heatsink, USB 3.2 Gen1 Type-C , Dual M.2 Slots, M.2 E-key Slot for PCIe WIFI Module Upgradable', 'Micro ATX', 'LGA 1200', 'Intel® B46', 'DDR4', 4, 128, '244x244 ', 120, 23, 'https://www.primeabgb.com/wp-content/uploads/2020/06/B460M-AORUS-PRO-1.jpg'),
(69, 'ASUS TUF GAMING B560M-PLUS', 'Asus B560 M-ATX Form Factor Motherboard, The TUF Gaming B560M Plus Features Unlocked Memory Support, All new 11th Gen Rocket Lake CPU Support, DDR4 5000 Mhz and Upto 128GB Memory Support, Includes Intel 2,5 Gigabit Lan, 8+1 Power Phase VRM.', 'microATX', 'LGA 1200', 'Intel® B56', 'DDR4', 4, 128, '244x244 ', 170, 11, 'https://www.primeabgb.com/wp-content/uploads/2021/03/TUF-GAMING-B560M-PLUS-WIFI-1.jpg'),
(70, 'MSI X299 PRO ATX Intel X299', 'Inspired from architectural design with the extended heatsink for having better thermal solution; high speed USB 3.2 Gen2 x2 solution, Core Boost, DDR4 Boost, Dual LAN with 1x 2.5G LAN, Twin Turbo M.2 with M.2 Shield Frozr', 'ATX', 'LGA2066', 'Intel® X29', 'DDR4', 8, 256, '305x244 ', 360, 3, 'https://www.primeabgb.com/wp-content/uploads/2020/03/X299-PRO-1.jpg'),
(72, 'ASUS ROG Strix Z690-A Gaming', 'Intel®Z690 LGA 1700 ATX motherboard with PCIe®5.0, 16+1 DrMos, Two-Way AI Noise Cancelation, AI Overclocking, AI Cooling, AI Networking, WiFi 6 (802.11ax), Intel®2.5 Gb Ethernet, four M.2 slots with heatsinks PCIe 4.0 NVMe®SSD support, M.2 backplate, PCIe®Slot Q-Release, USB 3.2 Gen 2x2 Type-C®, SATA and AURA Sync RGB lighting', 'ATX', 'LGA 1700', 'Z690', 'DDR4', 4, 128, '305x244 ', 455, 5, 'https://www.primeabgb.com/wp-content/uploads/2021/10/ROG-STRIX-Z690-A-GAMING-WIFI-D4-3.jpg'),
(73, 'ASUS ROG Maximus Z690 Extreme', 'Intel® Z690 EATX motherboard with 24+1 power stages, DDR5 with OptiMem III, Five M.2, USB 3.2 Gen 2x2 front-panel connector with Quick Charge 4+ Support, Dual Thunderbolt™ 4, PCIe® 5.0, Onboard Wi-Fi 6E and Aura Sync RGB lighting', 'Extended A', 'LGA 1700', 'Z690', 'DDR5', 4, 128, '305x277 ', 1050, 2, 'https://www.primeabgb.com/wp-content/uploads/2021/10/ROG-MAXIMUS-Z690-EXTREME-3.jpg'),
(74, 'Gigabyte TRX40 AORUS XTREME', 'AMD TRX40 AORUS Motherboard with Direct 16+3 Phases Infineon Digital VRM, Fins-Array Heatsink, NanoCarbon Baseplate, Intel Dual 10GbE LAN, 4 PCIe 4.0 M.2 with Thermal Guards , Intel® WiFi 6 802.11ax, ESS SABRE HiFi 9218 DAC, AORUS Gen4 AIC Adaptor', 'XL-ATX', 'sTRX4', 'AMD TRX40', 'DDR4', 8, 256, '325x275', 1000, 3, 'https://www.primeabgb.com/wp-content/uploads/2021/06/Gigabyte-TRX40-AORUS-XTREME-Motherboard.jpg'),
(75, 'ASRock Z590 OC FORMULA', 'Whether overclocking the CPU is your cup of morning tea/coffee/something stronger or not, there are specific motherboards built by professional overclockers and engineers designed to squeeze out as much performance as possible', 'EATX', 'LGA1200', 'Intel® Z59', 'DDR4', 2, 64, '305 x267', 630, 2, 'https://www.primeabgb.com/wp-content/uploads/2021/12/ASRock-Z590-OC-Formula-Socket-LGA-1200-EATX-Motherboard.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mouse`
--

CREATE TABLE `mouse` (
  `mouse_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `design` varchar(20) NOT NULL,
  `sensor` varchar(30) NOT NULL,
  `sens_dpi` int(11) NOT NULL,
  `conn_interface` varchar(10) NOT NULL,
  `wire_length` double NOT NULL,
  `weight` int(11) NOT NULL,
  `price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mouse`
--

INSERT INTO `mouse` (`mouse_id`, `name`, `description`, `design`, `sensor`, `sens_dpi`, `conn_interface`, `wire_length`, `weight`, `price`, `quantity`, `img`) VALUES
(57, 'XTRFY M42 RGB Retro', 'Ultra-light construction. State-of-the-art components. And a symmetrical shape with interchangeable parts that let you adjust its size. The M42 is designed to be the perfect fit for any gamer.', 'Simetric', 'Pixart 3389', 16000, 'usb cable', 180, 59, 70, 13, 'https://xtrfy.com/wp/wp-content/uploads/2020/08/Xtrfy-M42-Retro-Angle1-1024x512.jpg'),
(58, 'HyperX Pulsefire Surge RGB', 'The HyperX Pulsefire Surge™ gives gamers the best of both style and substance, providing pinpoint accuracy thanks to its state-of-the-art Pixart 3389 sensor and spectacular 360° RGB lighting effects with its unique light ring. Pulsefire Surge has native DPI settings as high as 16,000 DPI for precision that will satisfy even the most demanding digital snipers.', 'Symmetrical', 'Pixart 3389', 16000, 'usb cable', 180, 100, 65, 14, 'https://media.kingston.com/hyperx/features/hx-features-mouse-pulsefire-surge.jpg'),
(59, 'Pulsefire Dart Wireless', 'HyperX Pulsefire Dart™ is a gaming-grade wireless mouse with a reliable 2.4GHz RF connection that will make you wonder why you waited so long to cut the cord. A wireless adapter is included to extend the range for desktop PC setups. It is Qi Certified for wireless charging1 and can last up to 50 hours2 on a single charge.', 'non-Simmetrical', 'Pixart 3389', 16000, 'wireless', 0, 110, 90, 6, 'https://media.kingston.com/hyperx/product/hx-product-mouse-pulsefire-dart-3-lg.jpg'),
(60, 'Logitech PRO X', 'Less than 63 grams. Advanced low-latency LIGHTSPEED wireless. Sub-micron precision with HERO 25K sensor. Remove all obstacles with our lightest and fastest PRO mouse ever. ', 'Simmetrical', 'HERO 25K', 25600, 'wireless', 0, 63, 150, 21, 'https://resource.logitechg.com/w_572,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/pro-x-superlight/pro-x-superlight-black-gallery-6.png?v=1'),
(61, 'Logitech G502 HERO', 'G502 HERO features an advanced optical sensor for maximum tracking accuracy, customizable RGB lighting, custom game profiles, from 200 up to 25,600 DPI, and repositionable weights.', 'non-Simmetrical', 'HERO™', 25400, 'usb cable', 180, 121, 50, 7, 'https://resource.logitechg.com/w_1024,c_limit,q_auto,f_auto,dpr_2.0/d_transparent.gif/content/dam/gaming/en/non-braid/hyjal-g502-hero/g502-hero-intro-nb.png?v=1'),
(62, 'Logitecg G703 LIGHTSPEED WIRELESS', 'G703 LIGHTSPEED enters the next generation of performance with the advanced HERO 25K sensor. Get ready for next-level tracking, enhanced LIGHTSPEED, and 10X the power efficiency of the previous generation. Add POWERPLAY to never worry about charging again and complete the ultimate LIGHTSPEED loadout.', 'Simmetrical', 'Hero 25K', 25600, 'wireless', 0, 95, 80, 12, 'G703 LIGHTSPEED WIRELESS'),
(63, 'Logitech G603 LIGHTSPEED WIRELESS', 'G603, with the revolutionary HERO sensor and LIGHTSPEED wireless technology, delivers exceptionally accurate and consistent performance and a breakthrough in battery life setting a new standard in wireless gaming.', 'Simmetrical', 'Hero ', 12000, 'wireless', 0, 89, 45, 8, 'https://resource.logitechg.com/content/dam/gaming/en/products/g603/g603-gallery-1.png'),
(64, 'RAZER DEATHADDER', 'As a midweight, ergonomic right-handed gaming mouse that supports most grip styles and hand sizes, the Razer DeathAdder’s iconic form is synonymous with award-winning handling and comfort. Favored by more than 13 million gamers worldwide, let’s take a look at what makes our flagship range so popular, and the features that make each of them unique.', 'Simmetrical', 'Razer hacker', 6400, 'usb cable', 200, 96, 55, 4, 'https://assets2.razerzone.com/images/pnx.assets/9d9b182a889dc3296c0b997a4d5abc95/300x300-dav2xhyperspeed.jpg'),
(65, 'Steel series PRIME: NEO NOIR EDITION', 'Limited edition tournament-grade gaming mouse featuring the chaotic energy of the Neo Noir CS:GO skin.  Revolutionary Prestige OM Switches built to last 5x longer and harness the power of light to provide lightning-fast response times', 'Simmetrical', 'Optical', 16000, 'usb cable', 180, 69, 70, 9, 'https://media.steelseriescdn.com/thumbs/catalog/items/62535/2ba8e6f54f1e4dd78edb0f66c00065b9.png.350x280_q100_crop-fit_optimize.png'),
(66, 'Stell series SENSEI', 'he iconic ambidextrous shape of the Sensei returns All-new TrueMove Pro sensor with the best tracking on any surface Tilt tracking for advanced stabilization during intense gameplay Guaranteed crisp and consistent for 60 million clicks Hyper durable build to withstand the most intense wear and tear', 'Simmetrical', 'Otical', 18000, 'usb cable', 200, 92, 60, 4, 'https://media.steelseriescdn.com/thumbs/catalogue/products/01124-sensei-ten/77cd3ab65eca48eaa7aae3f24d81b083.png.350x280_q100_crop-fit_optimize.png');

-- --------------------------------------------------------

--
-- Table structure for table `mouse_pad`
--

CREATE TABLE `mouse_pad` (
  `pad_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `material` varchar(20) NOT NULL,
  `size` varchar(20) NOT NULL,
  `rgb` varchar(5) NOT NULL DEFAULT 'no',
  `price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mouse_pad`
--

INSERT INTO `mouse_pad` (`pad_id`, `name`, `description`, `material`, `size`, `rgb`, `price`, `quantity`, `img`) VALUES
(27, 'Razer Strider - Large', 'Hybrid mouse mat with a soft base and smooth glide', 'Polyester', '450x400', 'no', 28, 14, 'https://assets3.razerzone.com/pZuAjR_9_qBTlL7TMzs6Lngw23Y=/500x500/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fhba%2Fh1e%2F9233065148446%2Fstrider-large-500x500.png'),
(28, 'Razer Firefly V2', 'Thinner. Brighter. Better. Turn it up and illuminate your battlestation with the new, improved Razer Firefly V2—an ultra-thin mouse mat designed for brilliant performance in every sense of the word.', 'Hard', '450x400', 'yes', 45, 9, 'https://assets3.razerzone.com/nvbp9N9scFWws01W6OAutpagWRE=/1500x1000/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fh67%2Fhcf%2F9081440960542%2Ffirefly-v2-gallery-hero.jpg'),
(29, 'Razer Acari', 'Only the slickest survive—so bring swift victory with this gaming mouse mat. Armed with an ultra-low friction hard surface that satisfies your need for speed and a large surface area that offers freedom of movement, the Razer Acari is your best bet when going up against the impossible.', 'Hard', '450x400', 'no', 50, 7, 'https://assets3.razerzone.com/FO_6-mWqL0TiirFpRpPGX-O0w4s=/1500x1000/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fh4a%2Fh6a%2F9081442598942%2FRazer-Acari-Hero-1500x1000.jpg'),
(30, 'Logitech G840 XL', 'With a gigantic surface area the G840 gives you more space to play than ever before. Play with the freedom to configure your setup anyway you want without the constraints of a smaller mousepad', 'PERFORMANCE-TUNED', '400x900', 'no', 40, 12, 'https://asset.conrad.com/media10/isa/160267/c1/-/en/002298386PI00/image.jpg'),
(31, 'Logitech POWERPLAY WIRELESS CHARGING SYSTEM', 'With POWERPLAY and LIGHTSPEED technology integrated, Logitech G has solved the barriers to high performance wireless gaming. Input lag, wireless drops and dead batteries are now a thing of the past. Wireless is the future of PC gaming, made possible through advanced science and unrivaled engineering.', 'CLOTH OR HARD', '321x344 ', 'yes', 105, 19, 'POWERPLAY WIRELESS CHARGING SYSTEM'),
(32, 'HyperX FURY S Pro XL', 'HyperX™ FURY S Pro Gaming Mouse Pad has seamlessly stitched anti-fray edges to give you a flat and uniform surface. Whether you prefer speed or precision, the densely woven fabric pad provides a surface that feels smooth to the touch and is optimised for your preference. HyperX FURY S features a soft cloth surface for wrist comfort and a textured natural rubber underside designed to hold fast when the action gets frenetic. FURY S comes in four sizes to fit your setup and can be rolled up for easy portability.', 'Cloth, rubber', '900x420', 'no', 50, 15, 'https://nanoteh.md/radix/img/items/20201103/16/5fa1687da1287-202011031626.jpg'),
(33, 'HyperX FURY Ultra', 'Boost your style with the brilliant HyperX FURY Ultra RGB mouse pad. It has 360° of smooth, stunning lighting and effects that you can customize to complement your system’s style with HyperX NGENUITY Software. This hard surface mouse pad features a low-friction, micro-textured surface without raised edges so you’ll get fast, fluid mouse movement. The FURY Ultra’s non-slip grip underside helps it stay in place so you won’t have to sacrifice performance for amazing style.', 'Plastic', '360x300', 'yes', 65, 8, 'https://m.media-amazon.com/images/I/51bEYI4lAuL._SL1428_.jpg'),
(34, 'HyperX Pulsefire Mat RGB', 'The HyperX Pulsefire Mat RGB Mouse Pad is built for the gamer that loves extra flair, but still needs their mouse pad to provide a smooth, precise mouse surface. Give your setup an extra pop of eye-catching style with 2 zones of customisable lighting, and a convenient touch selector to switch between lighting profiles. With a durable, densely-woven precision surface and an anti-slip rubber underside, Pulsefire Mat ensures that your mouse pad will enhance both your gaming and glamour.', 'Cloth, rubber', '900x420', 'yes', 140, 12, 'https://media.kingston.com/hyperx/features/hx-features-pulsefire-rgb-lg.jpg'),
(35, 'Corsair MM350 PRO Premium Spill-Proof Cloth', 'Game in confidence on the CORSAIR MM350 PRO Premium Spill-Proof Cloth Gaming Mouse Pad –Extended XL, providing space for your mouse, keyboard, and more on a massive 930mm x 400mm surface with a spill-resistant coating', 'Cloth', '930x420', 'no', 35, 34, 'https://www.corsair.com/us/en/medias/sys_master/images/images/h8b/h19/9564855042078/base-mm350-pro-config/Gallery/MM350_PRO_Extended_XL_BLACK_01/-base-mm350-pro-config-Gallery-MM350-PRO-Extended-XL-BLACK-01.png_1200Wx1200H'),
(36, 'Corsair MM800 RGB POLARIS', 'The MM800 RGB POLARIS builds on the foundation of CORSAIR mouse pads excellence in durability, tracking, and precision and adds a new level of LED immersion.', 'Cloth', '450x400', 'yese', 54, 15, 'https://www.corsair.com/medias/sys_master/images/images/hd5/hbf/9111569301534/-CH-9440021-NA-Gallery-MM800-Cloth-01.png');

-- --------------------------------------------------------

--
-- Table structure for table `pc`
--

CREATE TABLE `pc` (
  `pc_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `cpu` varchar(50) NOT NULL,
  `mother` varchar(50) NOT NULL,
  `cooler` varchar(50) NOT NULL,
  `ram` varchar(50) NOT NULL,
  `storage` varchar(100) NOT NULL,
  `gpu` varchar(50) NOT NULL,
  `psu` varchar(50) NOT NULL,
  `pc_case` varchar(50) NOT NULL,
  `price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pc`
--

INSERT INTO `pc` (`pc_id`, `name`, `description`, `cpu`, `mother`, `cooler`, `ram`, `storage`, `gpu`, `psu`, `pc_case`, `price`, `quantity`, `img`) VALUES
(7, 'MEG Infinite X 11th', 'The MEG series seeks to transcend current gaming products, the flagship model designed to push the limits of what an extreme gaming series can be.', 'Intel® Core™ i9-11900K', 'Asus Z590', 'Liquid Cooler', '4x DDR4 3200Mhz U-DIMMs, up to 128GB', '2x M.2 2280 Slots', 'MSI GeForce RTX 3090 24G GDDR6X', '850W 80 Plus Gold certified (ATX)', 'MEG Infinite X', 2000, 3, 'https://asset.msi.com/resize/image/global/product/product_16036887802ebd8a9d9071b89b84327c3bc9aa5998.png62405b38c58fe0f07fcef2367d8a9ba1/1024.png'),
(12, 'OMG EPIX MAX', 'Experience the ultimate gaming experience with the HYPERPC EPIX MAX powered by an Intel® Core™ i5-12600(F) processor and powerful NVIDIA GeForce RTX 3060 graphics.', 'Intel® Core™ i5-12600(F)', 'ASUS PRIME B660M-A DDR4 (Wi-Fi)', 'OMG AirCooling 130', '16GB OMG RGB DDR4-3600 (2 x 8GB)', 'SSD drive: 500GB OMG Plus  HDD: 1TB Seagate BarraCuda', 'NVIDIA GeForce RTX 3060', 'HYPERPC PSU 80+ Bronze 700W', 'EPIX', 2600, 5, 'https://hyperpc.ru/cache/hp_product_hyperpc_epix_plus/hyperpc-epix-1-wh-t-450x450.jpg'),
(13, 'OMG EPIX PLUS', 'Optimal HYPERPC EPIX PLUS configuration with Intel® Core™ i5-12600(F) processor and NVIDIA GeForce RTX 3050 graphics card for comfortable gaming in FullHD at high and maximum graphics settings.', 'Intel® Core™ i5-12600(F)', 'ASUS PRIME B660M-A DDR4 (Wi-Fi)', 'OMG AirCooling 130', '16GB OMG RGB DDR4-3600 (2 x 8GB)', 'SSD drive: 500GB OMG Plus  HDD: 1TB Seagate BarraCuda', 'NVIDIA GeForce RTX 3050', 'OMG PSU 80+ 500W', 'EPIX', 2200, 3, 'https://hyperpc.ru/cache/hp_product_hyperpc_epix_plus/hyperpc-epix-1-wh-t-450x450.jpg'),
(14, 'OMG LUMEN MAX', 'The best choice for playing in 4K resolution on ultra settings. Built with NVIDIA GeForce RTX 3070 Ti graphics and Intel® Core™ i7-12700(F) processor.', 'Intel® Core™ i7-12700(F)', 'ASUS PRIME B660M-A DDR4 (Wi-Fi)', 'OMG WaterCooling RGB 120/240', '32GB Kingston Renegade RGB DDR4-3600 (2 x 16GB)', 'SSD drive: 1TB HYPERPC Plus  HDD: 3TB Seagate BarraCuda', 'NVIDIA GeForce RTX 3070 Ti', 'OMG PSU 80+ Gold 850W', 'LUMEN', 4700, 2, 'https://hyperpc.ru/images/product/lumen/landing-content/plus/new/hyperpc-lumen-plus-black-alt.jpg'),
(15, 'OMG LUMEN', 'The best choice for playing at 2K resolution on ultra settings. Built with NVIDIA GeForce RTX 3060 Ti graphics and Intel® Core™ i5-12600(F) processor.', 'Intel® Core™ i5-12600(F)', 'ASUS PRIME B660M-A DDR4 (Wi-Fi)', 'OMG AirCooling 130', '16GB OMG RGB DDR4-3600 (2 x 8GB)', 'SSD drive: 500GB HYPERPC Plus  HDD: 1TB Seagate BarraCuda', 'NVIDIA GeForce RTX 3060 Ti', 'OMG PSU 80+ Bronze 700W', 'LUMEN', 2400, 13, 'https://hyperpc.ru/cache/hp_part_img/hpc-lumen-standard-default-silver-paint-alt-780x439.jpg'),
(17, 'OMG DYNAMIC PLATINUM', 'Top configuration for 4K gaming. Completely water-cooled, with ASUS ROG Strix GeForce RTX 3080 Ti graphics and an Intel® Core™ i9-12900K(F) processor.', 'Intel® Core™ i9-12900K(F)', 'ASUS ROG STRIX Z690-F GAMING (Wi-Fi)', 'OMG WaterCooling RGB 360', '32GB Kingston Fury Beast DDR5-5600 (2 x 16GB)', ' SSD drive: 1TB HYPERPC MAX  HDD: 3TB Seagate BarraCuda', 'ASUS ROG Strix GeForce RTX 3080 Ti', 'HYPERPC PSU 80+ Gold 850W', 'DYNAMIC', 8400, 2, 'https://hyperpc.ru/images/product/dynamic/product_desctiption/hyperpc-dynamic.jpg'),
(18, 'OMG DYNAMIC', 'HYPERPC DYNAMIC built on NVIDIA GeForce RTX 3070 Ti graphics card and Intel® Core™ i7-12700(F) processor', 'Intel® Core™ i7-12700(F)', 'ASUS PRIME B660M-A DDR4 (Wi-Fi)', 'OMG WaterCooling RGB 360', '16GB OMG RGB DDR4-3600 (2 x 8GB)', 'SSD drive: 1TB HYPERPC Plus  HDD: 2TB Seagate BarraCuda', 'NVIDIA GeForce RTX 3070 Ti', 'OMG PSU SFX 80+ Gold 850W', 'DYNAMIC', 4500, 7, 'https://hyperpc.ru/images/product/dynamic/product_gallery/hyperpc-dynamic-build-photo-01.jpg'),
(19, 'OMG CYBER MAX', 'The best choice for playing in 4K resolution on ultra settings. Built with NVIDIA GeForce RTX 3080 Ti graphics and Intel® Core™ i9-12900K(F) processor.', 'Intel® Core™ i9-12900K(F)', 'MSI MPG Z690 TOMAHAWK (Wi-Fi)', 'OMG WaterCooling RGB 360', '32GB Kingston Fury Beast DDR5-5600 (2 x 16GB)', 'SSD drive: 1TB HYPERPC MAX  HDD: 2TB Seagate BarraCuda', 'NVIDIA GeForce RTX 3080 Ti', 'OMG PSU 80+ Gold 850W', 'CYBER', 7600, 4, 'https://hyperpc.ru/images/product/cyber/teaser/update/black/hyperpc-cyber-standard-black.jpg'),
(20, 'OMG CYBER', 'The best choice for playing at 2K resolution on ultra settings. Built with NVIDIA GeForce RTX 3080 graphics and Intel® Core™ i7-12700K(F) processor.', 'Intel® Core™ i7-12700K(F)', 'GIGABYTE Z690 UD AX (Wi-Fi)', 'OMG WaterCooling RGB 360', '32GB Kingston Fury Beast DDR5-4800 (2 x 16GB)', 'SSD drive: 1TB HYPERPC Plus  HDD: 2TB Seagate BarraCuda', 'NVIDIA GeForce RTX 3080', 'OMG PSU 80+ Gold 850W', 'CYBER', 5700, 6, 'https://hyperpc.ru/images/product/cyber/360/hpc-cyber-360-static-gray_webp.jpg?1'),
(21, 'OMG CONCEPT', 'OMG CONCEPT is a gaming computer equipped with a reliable water cooling system. Inside this PC is an ASUS ROG Strix GeForce RTX 3080 Ti graphics card and an Intel® Core™ i9-12900K(F) processor. Thanks to them, you can safely play the most technologically advanced games at the highest graphics settings without “brakes”.', 'Intel® Core™ i9-12900K(F)', 'ASUS ROG STRIX Z690-F GAMING (Wi-Fi)', 'OMG WaterCooling RGB 360', '4 x 16GB Patriot Signature Series DDR5-4800', 'SSD drive: 2TB HYPERPC MAX  HDD: 3TB Seagate BarraCuda', 'ASUS ROG Strix GeForce RTX 3080 Ti', 'OMG PSU 80+ Gold 1000W', 'CONCEPT', 10400, 3, 'https://hyperpc.ru/cache/hp_product_hyperpc_concept/hyperpc-cosmos-jove-edition-teaser-450x450.jpg'),
(22, 'OMG CONCEPT AMPERE', 'One of the most powerful gaming computers OMG - OMG CONCEPT AMPERE. The unique design carries a 2 x ASUS ROG Strix GeForce RTX 3090 video accelerator and an AMD Ryzen Threadripper 3990X processor.', 'AMD Ryzen Threadripper 3990X', 'ASUS ROG ZENITH II EXTREME ALPHA', 'OMG WaterCooling RGB 480', '128GB Kingston Renegade RGB DDR4-3600 (4 x 32GB)', ' SSD drive: 4TB HYPERPC PLUS  HDD: 6TB Seagate BarraCuda', '2 x ASUS ROG Strix GeForce RTX 3090', 'OMG PSU 80+ Platinum 1600W', 'CONCEPT', 25000, 1, 'https://hyperpc.ru/images/product/ampere/pc/hyperpc-ampere.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `psu`
--

CREATE TABLE `psu` (
  `psu_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `power` int(11) NOT NULL,
  `psu_fan` int(11) NOT NULL,
  `rpm` int(11) NOT NULL,
  `type` varchar(25) NOT NULL DEFAULT 'no',
  `price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `psu`
--

INSERT INTO `psu` (`psu_id`, `name`, `description`, `power`, `psu_fan`, `rpm`, `type`, `price`, `quantity`, `img`) VALUES
(40, 'EVGA 600 BA', '80 PLUS Bronze certified, with 85% efficiency or higher under typical loads Single 12V. Rail with DC-DC Converter to improve 3.3V/5V stability Active Power Factor Correction (PFC) Heavy-duty protections, including OVP (Over Voltage Protection), UVP (Under Voltage Protection), OCP (Over Current Protection), OPP (Over Power Protection), SCP (Short Circuit Protection), and OTP (Over Temperature Protection) Quiet and Intelligent Auto Fan for near-silent operation', 600, 120, 2000, 'non-modular', 80, 14, 'https://m.media-amazon.com/images/I/71iYfvDAiZL._AC_SX679_.jpg'),
(41, 'Corsair RMX White Series (2018), RM850x', 'CORSAIR RMx White Series fully modular power supplies are built with the highest quality components to deliver 80 PLUS Gold power to your PC, with virtually silent operation.', 850, 135, 2200, 'modular', 105, 4, 'https://www.corsair.com/medias/sys_master/images/images/h52/hf0/9112742363166/-CP-9020188-NA-Gallery-RMx-White-850-01.png'),
(42, 'GAMEMAX VP-600', 'The GameMax VP series power supply offers “Value and Performance” scheme. 80Plus ready for support high efficiency required, also it is continuing a popular for computer builds. GameMax VP RGB Range have great features that make it a good choice for people who are looking for an efficient and reliable, good value power supply. The most suitable cost/performance ratio is the best choice for system builder.', 600, 120, 1800, 'semi-modular', 60, 8, 'https://m.media-amazon.com/images/I/71hBPr9LddL._AC_SX679_.jpg'),
(43, 'be quiet! BN639 SFX L', 'be quiet! SFX L Power 600W is especially recommended for mini ITX PCs and compact gaming systems. For compact PC systems that perform beyond the ordinary, with an ideal combination of features, power, efficiency and reliability, choose SFX L Power 600W.', 600, 120, 1500, 'modular', 100, 5, 'https://www.bequiet.com/admin/ImageServer.php?ID=df6e1a10872@be-quiet.net&omitPreview=true&width=600'),
(44, 'Super Flower Leadex III Gold ARGB Pro 750W', 'LEADEX III Gold ARGB Pro series, which are based on LEADEX III platform, features RGB lighting. The Led RGB light possesses 16 light modes such as, Rainbow mode, Breathing mode, Blink mode, and single color mode etc..which can be controlled manually through the button.', 750, 130, 1600, 'modular', 220, 3, 'https://www.super-flower.com.tw/upload/product/20200306170001.jpg'),
(45, 'ASUS Rog Thor 1200', 'Aura Sync : Advanced customization with addressable RGB LEDs and Aura Sync compatibility OLED Power Display : Real-time power draw monitoring with OLED Power Display ROG Thermal Solution : 0dB cooling with dustproof IP5X Wing-blade Fan and ROG heatsink design 80 PLUS Platinum : Built with 100% Japanese capacitors and other premium components Sleeved Cables : For easy building and superior aesthetics', 1200, 140, 1500, 'modular', 350, 2, 'https://m.media-amazon.com/images/I/81u+iAQ4mWL._AC_SX679_.jpg'),
(46, 'Seasonic PRIME TX-1000', 'Seasonic’s engineers have implemented a new design feature, where instead of cables; the back panel and the PCB (Printed Circuit Board) are connected by a copper plate. This breakthrough solution not only lowers the chance of production errors during manual insertion but it also improves output power quality.', 1000, 135, 1550, 'mosular', 300, 1, 'https://m.media-amazon.com/images/I/613lpOoWqdL._AC_SX679_.jpg'),
(47, 'ASUS ROG Strix 850W White Edition PSU', 'ROG heatsinks cover critical components, delivering lower temperatures and reduced noise. Axial-tech fan design features a smaller fan hub that facilitates longer blades and a barrier ring that increases downward air pressure. Dual ball fan bearings can last up to twice as long as sleeve bearing designs. 0dB Technology lets you enjoy light gaming in relative silence. An 80 Plus Gold Certification is the result of Japanese capacitors and other premium components. White Edition Design include a white case, modular cables, stickers, and magnets. Fully modular cables keep your rig neat and tidy. 10-year warranty included.', 850, 135, 1500, 'modular', 260, 3, 'https://m.media-amazon.com/images/I/8109dbUIeqL._AC_SX679_.jpg'),
(48, 'Corsair SF Series, SF750', 'The CORSAIR SF750 80 PLUS Platinum SFX Power Supply is an extraordinarily power-dense PSU, ready to power the most cutting-edge small form factor PCs with 750 continuous watts.', 750, 95, 1800, 'modular', 180, 6, 'https://m.media-amazon.com/images/I/818VLN7WdxL._AC_SX679_.jpg'),
(49, 'DeepCool DQ750-M-V2L', 'The DQ750M-V2L fully modular 750W 80 PLUS Gold power supply features 100% Japanese capacitors and high quality switch MOSFETs. Built to deliver stable output capacity with high conversion efficiency, the DQ750-M-V2L offers better reliability for your PC system.', 750, 120, 1700, 'modular', 65, 9, 'https://m.media-amazon.com/images/I/81aBa9FPOlL._AC_SX679_.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ram`
--

CREATE TABLE `ram` (
  `ram_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `ram_type` varchar(10) NOT NULL,
  `capacity` int(11) NOT NULL,
  `mem_speed` int(11) NOT NULL,
  `form_factor` varchar(10) NOT NULL DEFAULT 'dimm',
  `price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ram`
--

INSERT INTO `ram` (`ram_id`, `name`, `description`, `ram_type`, `capacity`, `mem_speed`, `form_factor`, `price`, `quantity`, `img`) VALUES
(57, 'RAM Kingston Predator RGB HX442C19PB3K2/16', 'HyperX HX442C19PB3K2/16 is a kit of two 1G x 64-bit (8GB) DDR4-4266 CL19 SDRAM (Synchronous DRAM) 1Rx8, memory module, based on eight 1G x 8-bit FBGA components per module. Each module kit supports Intel® Extreme Memory Profiles (Intel® XMP) 2.0. Total kit capacity is 16GB.', 'DDR4', 16, 4266, 'DIMM', 180, 23, 'https://enter.online/images/product/2022/72/enter-memorie-ram-kingston-predator-rgb-hx442c19pb3k216.webp'),
(58, 'HyperX Fury RGB 16GB', 'Give your battle station a sleek upgrade thanks to the updated FURY DDR4 RGB heat dispenser and stunning, customizable RGB effects. Use powerful HyperX NGENUITY software or motherboard manufacturer software to create your own look.', 'DDR4', 16, 2666, 'DIMM', 85, 34, 'https://s13emagst.akamaized.net/products/25111/25110897/images/res_df7951e38a1abe408ffe82c6cb5c88ef.jpg'),
(59, 'RAM Samsung M471A1K43DB1 - CWE', 'Smaller than normal DIMMs Supports x8 / x16 / up to 2 ranks per DIMM and 2DPC configuration For systems with limited space issues Application : Laptop', 'DDR4', 8, 3200, 'so-DIMM', 50, 25, 'https://enter.online/images/product/2022/34/enter-memorie-ram-samsung-m471a1k43db1-cwe.webp'),
(60, 'RAM HyperX Predator 16GB', 'HyperX Predator DDR4 RGB 16GB Kit 3200MHz CL16 DIMM XMP RAM Memory / Infrared Sync Technology Black (HX432C16PB3AK2/16)', 'DDR4', 16, 3200, 'DIMM', 95, 11, 'https://enter.online/images/product/2022/93/enter-memorie-ram-hyperx-predator.webp'),
(61, 'RAM Apacer 16GB', 'Apacer 16GB 3200MHz DDR4 SODIMM Laptop RAM has a distinguished and sophisticated heat spreader design with embodies the panther’s claws on the top. It also owns meticulously screened ICs, optimized stability, and compatibility while playing in heavy workload games. The memory module supports XMP 2.0, consuming low voltage. The Apacer 16GB 3200MHz DDR4 SODIMM Laptop RAM has a lifetime warranty.', 'DDR4', 16, 2666, 'so-DIMM', 80, 43, 'https://enter.online/images/product/2022/62/enter-memorie-ram-apacer.webp'),
(62, 'RAM Kingston Beast KF426C16BB1K2/32', 'Kingston Fury Beast KF426C16BB1K2/32 32GB (16GB x2) DDR4 2666Mhz Non ECC DIMM', 'DDR4', 32, 2666, 'DIMM', 205, 4, 'https://enter.online/images/product/2022/30/enter-memorie-ram-kingston-beast-kf426c16bb1k232.webp'),
(63, 'RAM Kingston FURY Renegade KF432C16RBK2/64', 'Kingston Fury Renegade KF432C16RBK2/64 64GB (32GB x2) DDR4 3200Mhz Non ECC DIMM', 'DDR4', 64, 2600, 'DIMM', 450, 4, 'https://enter.online/images/product/2022/64/enter-memorie-ram-kingston-fury-renegade-kf432c16rbk264.webp'),
(64, 'RAM Hynix HMAA4GS6AJR8N', 'SK Hynix HMAA4GS6AJR8N-XN 32GB DDR4 3200 PC4-3200AA-SE1-11 for XPS 9700 9500 X1 Carbon Extreme Gen 3 Alienware 51M R2 Asus Laptop (32GB DDR4 PC4-3200AA)', 'DDR4', 64, 3200, 'so-DIMM', 185, 14, 'https://enter.online/images/product/2022/95/enter-memorie-ram-hynix-hmaa4gs6ajr8n.webp'),
(65, 'RAM HyperX FURY HX436C18FB3/32', 'HyperX Fury Black 32GB 3600MHz DDR4 CL18 DIMM Single Stick HX436C18FB3/32', 'DDR4', 32, 3600, 'DIMM', 210, 17, 'https://enter.online/images/product/2022/20/enter-memorie-ram-hyperx-fury-hx436c18fb332.webp'),
(66, 'RAM Kingston FURY IMPACT KF432S20IBK2/16', 'Kingston Fury Impact KF432S20IBK2/16 16GB (8GB x2) DDR4 3200MHz Non ECC Memory RAM SODIMM', 'DDR4', 16, 3200, 'so-DIMM', 95, 23, 'https://enter.online/images/product/2022/56/enter-memorie-ram-kingston-fury-impact-kf432s20ibk216.webp'),
(67, 'RAM ADATA XPG Hunter', 'Geared toward PC enthusiasts and gamers, the XPG Hunter DDR4 memory module delivers all the benefits of DDR4 with remarkable performance and efficiency. It supports XMP 2.0 for easy overclocking and offers great stability, making it ideal for performance seekers – gaming to competitive benchmarking.', 'DDR4', 16, 3200, 'DIMM', 85, 32, 'https://enter.online/images/product/2022/62/enter-memorie-ram-adata-xpg-hunter.webp');

-- --------------------------------------------------------

--
-- Table structure for table `storage`
--

CREATE TABLE `storage` (
  `storage_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `capacity` int(11) NOT NULL,
  `type` varchar(10) NOT NULL,
  `form_factor` varchar(10) NOT NULL,
  `read_speed` int(11) NOT NULL,
  `write_speed` int(11) NOT NULL,
  `price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `storage`
--

INSERT INTO `storage` (`storage_id`, `name`, `description`, `capacity`, `type`, `form_factor`, `read_speed`, `write_speed`, `price`, `quantity`, `img`) VALUES
(43, '2.5\" SATA SSD 1.0TB WD Blue', 'The Western Digital Blue WDS100T2B0A 1.0TB SSD is designed for fast performance, optimized storage and high transfer speeds with industry-leading reliability.  The right form factor for your PC', 1000, 'SSD', '2.5', 560, 530, 160, 9, 'https://s3.eu-central-1.amazonaws.com/cdn-store.esempla.com/storage/31de8680-7b5a-4fb9-8c27-a06e38b05ef4.jpg'),
(44, 'Kingston A400', 'The Kingston A400 Solid State Drive dramatically improves system performance by delivering faster startup, boot, and data transfer speeds than mechanical hard drives. This SSD is based on the latest generation controller with 450MB/s and 500MB/s read/write speeds 1 and provides 10 times faster performance than traditional hard drives. This results in improved performance, ultra-responsive multitasking and overall system acceleration. More reliable and durable than a hard drive, the A400 has capacities ranging from 120GB to 1.92TB 2 .', 120, 'SSD', '2.5', 500, 450, 30, 23, 'https://media.kingston.com/kingston/product/ktc-product-ssd-a400-sa400s37-120gb-1-lg.jpg'),
(45, ' Western Digital \"Blue (WD10EZEX)\"', 'Internal Hard Drive – suitable for all 3.5 Western Digital – Blue WD10EZEX – 21WN4 A0 – 1.0 TB, SATA III, 6Gb/s – 7200 rpm – 64 MB cache – Warranty 6 months', 1000, 'HDD', '3.5', 150, 150, 45, 25, 'https://m.media-amazon.com/images/I/51eLLBhwyIL._AC_.jpg'),
(46, 'ADATA Ultimate SU650', 'ncrease capacity and performance of your desktop or laptop with the 120GB Ultimate SU650 SATA III 2.5\" Internal SSD from ADATA, which delivers efficiency and reliability. It features sequential read speeds of up to 520 MB/s and sequential write speeds of up to 320 MB/s. Moreover, it has a 2.5\" / 7mm form factor, 3D NAND flash memory, and utilizes', 240, 'SSD', '2.5', 520, 450, 40, 27, 'https://s13emagst.akamaized.net/products/17080/17079282/images/res_ecc639be210bf8e255ff82ddfcf2874a.jpg'),
(47, 'Patriot Burst Elite PBE120GS25SSDR', 'The Patriot Burst Elite SSD delivers both fast random and sequential read/write speeds. It ensures better overall performance. Enjoy faster response and get things done in no time.', 120, 'SSD', '2.5', 520, 450, 20, 24, 'https://s13emagst.akamaized.net/products/37899/37898043/images/res_55c74a5f12479e7c63befc41257e921a.jpg'),
(48, 'Samsung 860 PRO', 'Industry leading reliability: Powered by the latest V-NAND technology and a robust algorithm-based controller, the Samsung 860 PRO SSD readily handles heavy workloads of high-end PCs, workstations and NAS (Network Attached Systems) to give lasting assurance to gamers, IT and creative professionals. Speeds are consistent and sustained, even under heavy workloads and multitasking. The 860 PRO Solid State Drive performs at sequential read speeds up to 560MB/s with the combination of the latest V-NAND and a refined controller, delivering sequential write speeds up to 530MB/s. The smart compatibility of the SSD lets you benefit from faster, more fluid communication with your host system. ', 4000, 'SSD', '2.5', 560, 530, 550, 3, 'https://s13emagst.akamaized.net/products/25426/25425515/images/res_33a1be840bb48a10e311ffa44f95192f.jpg'),
(49, 'Corsair MP400', 'The CORSAIR MP400 Gen3 PCIe x4 NVMe M.2 SSD delivers up to 3,400MB/s sequential read and up to 3,000MB/s sequential write speeds,* utilizing high-capacity 3D QLC NAND memory.* Performance and endurance vary by capacity.', 8000, 'SSD', '2.5', 3480, 3000, 1200, 2, 'https://s13emagst.akamaized.net/products/32745/32744677/images/res_5d3d43a109fb6357d7aa8765af0a4b33.jpg'),
(50, 'Seagate IronWolf NAS', 'IronWolf internal hard drives are the ideal solution for up to 8-bay, multi-user NAS environments craving powerhouse performance Store more and work faster with a NAS-optimized hard drive providing ultra-high capacity 14TB and cache of up to 256MB Purpose built for NAS enclosures, IronWolf delivers less wear and tear, little to no noise/vibration, no lags or down time, increased file-sharing performance, and much more', 14000, 'HDD', '3.5', 210, 210, 800, 4, 'https://s13emagst.akamaized.net/products/25776/25775438/images/res_12c998c9f05bcd78734a5379144bf3f5.jpg'),
(51, 'Seagate® SkyHawk™ AI', 'SkyHawk Health Management actively helps protect your surveillance storage by focusing on prevention, intervention and recovery options.', 16000, 'HDD', '3.5', 210, 210, 650, 5, 'https://s13emagst.akamaized.net/products/32911/32910301/images/res_3d7fc04cb315dd386a1f702e1affaa89.jpg'),
(52, 'WD Purple™ Pro Surveillance ', 'WD Purple™ Pro drives are designed for new generations of high-end AI-enabled recorders, video analytics appliances, deep-learning servers and cloud solutions that can benefit from high-capacity storage with high performance and additional workload capability.', 8000, 'HDD', '3.5', 210, 210, 200, 7, 'https://s13emagst.akamaized.net/products/39777/39776615/images/res_6eef1a196e7e71c824ee07bec392af81.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(70) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `country` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `cart` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `fullname`, `login`, `password`, `email`, `country`, `address`, `cart`) VALUES
(1, 'Alex Marak Middle', 'Onnly69', '696969', 'qmnbvcxz974@gmail.com', 'moldova', 's.Negresti r.Straseni', NULL),
(2, 'Ivan Mircea Trofim', 'golf123', '123123', 'trofim@mail.ru', 'transnistria', 'Dubasari str.Codrilor 45/6', '73 67 '),
(3, 'Vasile Caldare', 'IQPower', 'eusitu', 'vasile69@gmail.com', 'ucraina', 'Donbass str.Pobedi 69/9', NULL),
(4, 'Alex Kostiylev', 's1mple', 'difficult69', 's1mple69@gmail.com', 'ucraina', 'Kiyv st.Pobedi69', NULL),
(5, 'OMG Admin Adminovich', 'admin', 'theadmin', 'omg_admin@gmail.com', 'moldova', 'Chisinau str.Florilor OMG/69', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `videocard`
--

CREATE TABLE `videocard` (
  `gpu_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `memory` int(11) NOT NULL,
  `mem_type` varchar(10) NOT NULL,
  `mem_clock` int(11) NOT NULL,
  `size` varchar(20) NOT NULL,
  `price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `videocard`
--

INSERT INTO `videocard` (`gpu_id`, `name`, `description`, `memory`, `mem_type`, `mem_clock`, `size`, `price`, `quantity`, `img`) VALUES
(57, 'MSI Gaming GeForce GTX 1660 Ti', 'Get game Ready with GeForce GTX. GeForce GTX graphics cards are the most advanced ever created. Discover unprecedented performance, power efficiency, and next-generation gaming experiences. Discover next-generation VR performance, The lowest latency, and plug-and-play compatibility with leading headsets driven by NVIDIA VR works technologies. Vr audio, physics, and haptics let you hear and feel every moment. Pascal is built to meet the demands of Next generation displays, including VR, ultra-high-resolution, and multiple monitors. It features NVIDIA game works technologies for extremely smooth game play and cinematic experiences. ', 6, 'GDDR6', 1875, '247x127x46', 500, 0, 'https://m.media-amazon.com/images/I/8149aCXpDlL._AC_SX679_.jpg'),
(58, 'EVGA GeForce RTX 2060', 'EVGA GeForce RTX 2060 12GB XC GAMING, 12G-P4-2263-KR, 12GB GDDR6, Dual Fans, Metal Backplate', 6, 'GDDR6', 1680, '111x189x39', 600, 0, 'https://m.media-amazon.com/images/I/71psWySiMAL._AC_SX679_.jpg'),
(59, 'ZOTAC GAMING GeForce RTX 3060 Twin Edge', 'Get Amplified with the ZOTAC GAMING GeForce RTX™ 30 Series based on the NVIDIA Ampere architecture. Built with enhanced RT Cores and Tensor Cores, new streaming multiprocessors, and high-speed GDDR6 memory, the ZOTAC GAMING GeForce RTX 3060 Twin Edge gives rise to amplified gaming with high fidelity.', 12, 'GDDR6', 1777, '224x116x39.2', 650, 0, 'https://www.zotac.com/download/files/styles/w1024/public/product_gallery/graphics_cards/zt-a30600e-10m-image01.jpg?itok=jDvNg1ib'),
(60, 'AORUS GeForce RTX™ 3080 MASTER 10G', 'GeForce RTX™ 3080 with 10G memory and 760 GB/s memory bandwidth has 8704 CUDA® Cores, 2nd gen ray tracing cores and 3rd gen tensor cores operating in parallel. It is the most suitable solution for those who are gaming, rendering, and developing A.I. technology.', 10, 'GDDR6x', 1845, '319x140x70', 1600, 0, 'https://m.media-amazon.com/images/I/71s5CltRyWS._AC_SX679_.jpg'),
(61, 'MSI GeForce GTX 1050 Ti', 'Pascal is built to meet the demands of next generation displays, including ultra-high-resolution and multiple monitors. It features NVIDIA GameWorks technologies for extremely smooth gameplay and cinematic experiences. Plus, it includes revolutionary new 360-degree image capture.', 4, 'GDDR5', 1493, '229x131x39', 280, 0, 'https://m.media-amazon.com/images/I/71nc4XdibXS._AC_SX679_.jpg'),
(62, 'ZOTAC GeForce GTX 1060 AMP Edition,', 'The ZOTAC GeForce GTX 1060 graphics card is loaded with innovative new gaming technologies, making it the perfect choice for the latest high-definition games. Powered by NVIDIA Pascal™—the most advanced GPU architecture ever created— the ZOTAC GeForce GTX 1060 delivers brilliant performance that opens the door to virtual reality and beyond.', 6, 'GDDR5', 1600, '210x128x39', 370, 0, 'https://www.zotac.com/download/files/styles/w1024/public/product_gallery/graphics_cards/zt-p10600b-10m_inage5.jpg?itok=JqY0EFMY'),
(63, 'NVIDIA GeForce RTX 3090 Founders Edition', 'The GeForce RTX™ 3090 is a big ferocious GPU (BFGPU) with TITAN class performance. It’s powered by Ampere—NVIDIA’s 2nd gen RTX architecture—doubling down on ray tracing and AI performance with enhanced Ray Tracing (RT) Cores, Tensor Cores, and new streaming multiprocessors. Plus, it features a staggering 24 GB of G6X memory, all to deliver the ultimate gaming experience.', 24, 'GDDR6X', 1695, '336x140x61', 2500, 0, 'https://tpucdn.com/gpu-specs/images/c/3622-front.jpg'),
(64, 'ZOTAC GAMING GeForce RTX 2080 Ti', 'The all-new generation of ZOTAC GAMING GeForce graphics cards are here. Based on the new NVIDIA Turing architecture, it’s packed with more cores and all-new GDDR6 ultra-fast memory. Integrated with more smart and optimized technologies, get ready to get fast and game strong like never before.', 11, 'GDDR6', 1665, '308x113x57', 2100, 0, 'https://www.zotac.com/download/files/styles/w1024/public/product_gallery/graphics_cards/zt-t20810d-10p_image01_1.jpg?itok=Em6tXqV-'),
(65, 'MSI Gaming GeForce GTX 1070 Ti 8GB', 'Smooth heat pipes Squared shape at bottom maximize heat transfer from the copper base plate Zero Frozr Stopping the fan in low-load situations, keeping a noise-free environment Airflow Control technology Deflectors thrusts air onto heat pipes for lower temperatures and better gaming', 8, 'GDDR5', 1683, '279x140x42', 500, 0, 'https://m.media-amazon.com/images/I/71nAEa2tv9L._AC_SX679_.jpg'),
(66, 'ZOTAC Gaming GeForce GTX 1660 6GB', 'The all-new generation of ZOTAC GAMING GeForce GTX graphics cards are here. Based on the new NVIDIA Turing architecture, it’s packed with GDDR5 fast memory. Get ready to get fast and game strong.', 6, 'GDDR5', 1785, '173x111x35', 400, 0, 'https://www.zotac.com/download/files/styles/w1024/public/product_gallery/graphics_cards/zt-t16600f-10l_image2.jpg?itok=6cQkk9e0'),
(67, 'Gigabyte AORUS GeForce GTX 1080 Ti 11GB', 'AORUS graphics cards are crafted for perfection in pursuit of the ultimate graphics experience for gaming enthusiasts. Based on the revolutionary NVIDIA Pascal GPU architecture, AORUS graphics card brings you incredible gaming experience.', 11, 'GDDR5x', 1708, '293x142x55', 1000, 0, 'https://m.media-amazon.com/images/I/71JbXqyfZIL._AC_SX679_.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `armchair`
--
ALTER TABLE `armchair`
  ADD PRIMARY KEY (`armchair_id`);

--
-- Indexes for table `cases`
--
ALTER TABLE `cases`
  ADD PRIMARY KEY (`case_id`);

--
-- Indexes for table `cooler`
--
ALTER TABLE `cooler`
  ADD PRIMARY KEY (`cooler_id`);

--
-- Indexes for table `cpu`
--
ALTER TABLE `cpu`
  ADD PRIMARY KEY (`cpu_id`);

--
-- Indexes for table `keyboard`
--
ALTER TABLE `keyboard`
  ADD PRIMARY KEY (`keyboard_id`);

--
-- Indexes for table `monitor`
--
ALTER TABLE `monitor`
  ADD PRIMARY KEY (`monitor_id`);

--
-- Indexes for table `mother`
--
ALTER TABLE `mother`
  ADD PRIMARY KEY (`mother_id`);

--
-- Indexes for table `mouse`
--
ALTER TABLE `mouse`
  ADD PRIMARY KEY (`mouse_id`);

--
-- Indexes for table `mouse_pad`
--
ALTER TABLE `mouse_pad`
  ADD PRIMARY KEY (`pad_id`);

--
-- Indexes for table `pc`
--
ALTER TABLE `pc`
  ADD PRIMARY KEY (`pc_id`);

--
-- Indexes for table `psu`
--
ALTER TABLE `psu`
  ADD PRIMARY KEY (`psu_id`);

--
-- Indexes for table `ram`
--
ALTER TABLE `ram`
  ADD PRIMARY KEY (`ram_id`);

--
-- Indexes for table `storage`
--
ALTER TABLE `storage`
  ADD PRIMARY KEY (`storage_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `videocard`
--
ALTER TABLE `videocard`
  ADD PRIMARY KEY (`gpu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `armchair`
--
ALTER TABLE `armchair`
  MODIFY `armchair_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `cases`
--
ALTER TABLE `cases`
  MODIFY `case_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `cooler`
--
ALTER TABLE `cooler`
  MODIFY `cooler_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `cpu`
--
ALTER TABLE `cpu`
  MODIFY `cpu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `keyboard`
--
ALTER TABLE `keyboard`
  MODIFY `keyboard_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `monitor`
--
ALTER TABLE `monitor`
  MODIFY `monitor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `mother`
--
ALTER TABLE `mother`
  MODIFY `mother_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `mouse`
--
ALTER TABLE `mouse`
  MODIFY `mouse_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `mouse_pad`
--
ALTER TABLE `mouse_pad`
  MODIFY `pad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `pc`
--
ALTER TABLE `pc`
  MODIFY `pc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `psu`
--
ALTER TABLE `psu`
  MODIFY `psu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `ram`
--
ALTER TABLE `ram`
  MODIFY `ram_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `storage`
--
ALTER TABLE `storage`
  MODIFY `storage_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `videocard`
--
ALTER TABLE `videocard`
  MODIFY `gpu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
