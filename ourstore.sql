-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 20, 2018 at 05:26 AM
-- Server version: 5.7.22-0ubuntu0.16.04.1
-- PHP Version: 7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ourstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `advantages`
--

CREATE TABLE `advantages` (
  `id_advantages` int(11) NOT NULL,
  `bkg_icon` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `advantages`
--

INSERT INTO `advantages` (`id_advantages`, `bkg_icon`, `title`, `text`) VALUES
(1, 'fa fa-heart', 'We love our customers', 'We are known to provide best possible service ever'),
(2, 'fa fa-tags', 'Best prices', 'You can check that the height of the boxes adjust when longer text like this one is used in one of them.'),
(3, 'fa fa-thumbs-up', '100% satisfaction guaranteed', 'Free returns on everything for 3 months.');

-- --------------------------------------------------------

--
-- Table structure for table `main_slider`
--

CREATE TABLE `main_slider` (
  `id_slider` int(11) NOT NULL,
  `alt_slider` varchar(160) COLLATE utf8_unicode_ci NOT NULL,
  `path_slider` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `main_slider`
--

INSERT INTO `main_slider` (`id_slider`, `alt_slider`, `path_slider`) VALUES
(1, 'main slider image', 'img/slider/mainslider1.jpg'),
(2, 'main slider 2', 'img/slider/mainslider2.jpg'),
(3, 'main slider 3', 'img/slider/mainslider3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `navigation`
--

CREATE TABLE `navigation` (
  `id_link` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent` int(10) NOT NULL,
  `level` int(10) NOT NULL,
  `position` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `navigation`
--

INSERT INTO `navigation` (`id_link`, `name`, `path`, `parent`, `level`, `position`) VALUES
(1, 'Home', 'index.php?page=home', 0, 0, 1),
(2, 'Men', 'index.php?page=category-full', 0, 0, 2),
(3, 'Ladies', 'index.php?page=category-full', 0, 0, 3),
(4, 'Clothing', 'index.php?page=category-full', 2, 1, 1),
(5, 'Shoes', 'index.php?page=category-full', 2, 1, 2),
(7, 'Clothing', 'index.php?page=category-full', 3, 1, 1),
(8, 'Shoes', 'index.php?page=category-full', 3, 1, 2),
(9, 'Accessories', 'index.php?page=category-full', 3, 1, 3),
(12, 'Blog', 'index.php?page=blog', 0, 0, 4),
(13, 'Info', 'index.php?page=faq', 0, 0, 5);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id_post` int(11) NOT NULL,
  `post_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post_summary` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `post_text` text COLLATE utf8_unicode_ci NOT NULL,
  `publishing_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id_post`, `post_title`, `post_summary`, `post_text`, `publishing_date`, `user_id`) VALUES
(3, 'Summer dresses’ styles and patterns', 'What dresses we will wear this summer? The trends for Summer 2018 suggest various styles, colors and patterns. With a constant thread: a nostalgic penchant for vintage styles.', '<p>Like the pretty 50s style dresses  worn by  Saoirse Ronan in Brooklyn, or the patterns sported by  Duchess Sarah Ferguson in the 80s. A strong-hued déjà-vu with a few pastel tones. Of course, there are also more innovative styles that play with patchwork and layering, but the apron and baby doll dresses will be all the rage on the beach and in town. See in the gallery a selection of the best summer dresses spotted on the runway and follow our smart guide to choose the dress that will suit you best:</p>\n<ul>\n<li><b>The patterned summer dress</b>, patchwork styles featuring different layered panels and patterns for a vibrant look. Try an oversized and light style also for work</li>\n<li><b>The check & plaid mania</b>: not just for winter, as seen at Prada, where models wore ample pinafore dresses over polo shirts or lightweight blouses. A perfect multi-layered ensembleto flaunt come Spring.</li>\n<li><b>The oversized, lightweight dress.</b> Perfect for those who are looking for comfort without sacrificing glamour.</li>\n<li><b>The shirtdress</b>: a totally versatile garment, especially in classic white. It’s like a white canvas you can personalize with accessories.</li>\n<li><b>The floral dress:</b> leave in your closet tropical prints and embrace botanical patterns. Pastel hued micro florals are back.</li>\n<li><b>The polka dot dress:</b> in our opinion it’s the must-have piece for this Summer</li>\n<li><b>The baby doll dress:</b> from Chanel to Emporio Armani to John Galliano, many designers offered romantic mini dressesin lace, satin and tweed, perfect for a ‘Lolita’ look.</li>\n<li><b>The sequined dress</b>: a go-anywhere and go-to piece for the Summer, see the long style from Attico in lavender tones, or the short cocktail dresses from Alcoolique and Halpern.</li>\n<ul>', '2018-06-06 00:27:19', 1),
(4, 'Summer Clothes', 'Shopping for summer clothes? Get ready to face the usual dilemma: select all-time-classic pieces or go with the flow and adore the latest trends of the season? A smart mix of the two is the answer! ', '<p>Be smart and choose items that combine trends with fashion’s classic values in order to own items that are worth your money and are fashionable too. Which are those? Keep on reading.</p>\n<h2>White shirt: the new edition</h2>\n<p>The white shirt is a classic summer clothes must-have. In order for your look to not appear dated, adopt the latest trend: go short! The reveal-your-navel trend is a refreshing alternative to the classic white shirt we all love. Wear it with colourful shorts to the beach or select a floral skirt for your city errands. </p>\n<h2>Bright shorts: trend-alert</h2>\n<p>Summer clothes’ shopping always starts with the shorts. They should be comfortable, well above the knee and in a bright summery colour. The key trend you should also look for this summer is… the pom-pom trend! On shorts it creates just the creative twist you need for a fresh and funky look.</p>\n<h2>The dress: seasonal theme</h2>\n<p>Summer clothes are all about bright colours -and your everyday dress should not be an exception. This summer’s trend features dresses with patterns inspired by ocean life: corals, sea shells and starfish. If you head to the beach, pair it with flat sandals. If you are getting ready for a long walk in the city pair it with your favourite white sneakers.</p>', '2018-06-06 00:27:19', 1),
(5, 'How to dress like… Sarah Jessica Parker', 'Most famously known for portraying fashion maven (and the source of the world’s wardrobe envy) Carrie Bradshaw from Sex and the City, Sarah Jessica Parker (SJP) has become a fashion icon in her own right. ', '<p>In today’s article, we go behind the scenes of Sarah Jessica Parker’s iconic look and style, and translate her wardrobe into one that is both replicable and affordable. So, what does it take to get your version of Sarah Jessica Parker’s look? Be playful SJP has fun with her looks. She goes beyond function and dresses for her personality and aesthetic pleasure. </p>\n<p>The key to dressing like SJP is letting what strikes your fancy to shine and bringing couture onto main street. Know your body type and flaunt it at every opportunity you will often see SJP showing off her toned arms and shoulders and dressing for her body type. She sticks with what looks best on her and wears variations of the most flattering pieces. What we certainly love SJP for are her unique statement pieces. From one off hats to the largest, multicolored brooches, she has eye and show stopping pieces that somehow pull the whole look together and are uniquely SJP. </p>\n<p>Whether throwing on a leather jacket over a feminine ruffled dress or a black tuxedo blazer over a long evening gown, SJP is known for taking feminine pieces and adding a dark and edgy spin to make the look more unique and approachable. Run towards color SJP doesn’t incorporate a few pops of color, she embraces color with a passion. She’s more often seen in grand schemes of color, as opposed to black and other neutrals.</p> <p>Furthermore, she often clashes color for a very unique and couture look that once again delivers a look that is effortless to put together but looks way more time intensive. Shoes are anything but basic SJP’s ability and desire to make a statement goes beyond her clothing and accessories. Shoes make a statement al on their own. From pointed toe satin pumps in shades of teal and red to glitter encased mary jane pumps, SJP’s shoes are always the type that bring an entire look together without being a departure from her style choices.</p>', '2018-06-07 00:27:19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(100) NOT NULL,
  `details` text COLLATE utf8_unicode_ci NOT NULL,
  `material` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sale` bit(1) NOT NULL,
  `new` bit(1) NOT NULL,
  `hot` bit(1) NOT NULL,
  `publ_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `parent` int(11) NOT NULL,
  `product_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `name`, `price`, `details`, `material`, `size`, `image`, `sale`, `new`, `hot`, `publ_date`, `parent`, `product_category`) VALUES
(1, 'Cotton Dress with Openwork', 25, 'Solid colour dress with elbow-length sleeves. Boat neck. Deep V back. Semi-sheer insert on upper part.', 'Polyester', 'XS, S, M, L, XL', 'img/products/women-clothes/cotton-dress-with-openwork.jpg', b'1', b'1', b'1', '2018-06-16 23:51:30', 3, 7),
(2, 'Dress in Viscose Blend Lace', 45, 'Solid colour viscose blend lace dress. Three-quarter sleeves. Round neck. Flounces on edge of sleeves. Matching lining.', 'Viscose', 'XS, S, M', 'img/products/women-clothes/dress-in-viscose-blend-lace.jpg', b'0', b'0', b'1', '2018-06-16 01:51:30', 3, 7),
(3, 'Dress with Semi-Sheer Insert', 42, 'Solid colour dress with elbow-length sleeves. Boat neck. Deep V back. Semi-sheer insert on upper part. Zip fastening on the back.', 'Cotton', 'X, S, M, L, XL', 'img/products/women-clothes/dress-with-semi-sheer-insert.jpg', b'1', b'0', b'1', '2018-06-16 23:51:30', 3, 7),
(5, 'Casual Shirt', 40, 'The 100% cotton casual shirts by OVS are made of delicate materials which are perfect for everyday wear: ideal for wearing on all occasions, they are designed to offer a particular versatility and functionality.', 'Cotton', 'S, M, L, XL, XXL', 'img/products/men-clothes/casual-cotton-shirt.jpg', b'1', b'1', b'1', '2018-06-17 20:39:57', 2, 4),
(6, 'Casual Polo Shirt', 50, 'The 100% cotton casual polo shirts are made of delicate materials which are perfect for everyday wear: ideal for wearing on all occasions, they are designed to offer a particular versatility and functionality.', 'Cotton', 'S, M, L, XL, XXL', 'img/products/men-clothes/casual-polo-shirt-grey.jpg', b'0', b'1', b'1', '2018-06-17 20:39:59', 2, 4),
(9, 'Grey Skinny Fit Suit', 120, 'Our Skinny Fit Suits are made of delicate materials which are perfect for everyday wear: ideal for wearing on all occasions, they are designed to offer a particular versatility and functionality.', 'Cotton', 'S, M, L, XL, XXL', 'img/products/men-clothes/grey-skinny-fit-suit.jpg', b'0', b'0', b'0', '2018-06-17 20:39:57', 2, 4),
(10, 'Casual Plaid Shirts', 48, 'The 100% cotton casual shirts are made of delicate materials which are perfect for everyday wear: ideal for wearing on all occasions, they are designed to offer a particular versatility and functionality.', 'Cotton', 'S, M, L, XL, XXL', 'img/products/men-clothes/men-casual-plaid-shirts-long-sleeve-slim-fit.jpg', b'0', b'0', b'0', '2018-06-17 20:39:59', 2, 4),
(11, 'Pullover', 80, 'The 100% cotton casual pullovers are made of delicate materials which are perfect for everyday wear: ideal for wearing on all occasions, they are designed to offer a particular versatility and functionality.', 'Cotton', 'S, M, L, XL, XXL', 'img/products/men-clothes/men-fashion-brand-pullover.jpg', b'1', b'1', b'0', '2018-06-17 20:39:59', 2, 4),
(12, 'Plaid Shirt Men Casual Long Sleeve', 43, 'Plaid shirts are made of delicate materials which are perfect for everyday wear: ideal for wearing on all occasions, they are designed to offer a particular versatility and functionality.', 'Cotton', 'S, M, L, XL, XXL', 'img/products/men-clothes/plaid-shirt-men-casual-long-sleeve.jpg', b'1', b'0', b'1', '2018-06-17 20:39:57', 2, 4),
(13, 'Slim Fit Men Shirt', 55, 'The 100% cotton slim fit men shirt are made of delicate materials which are perfect for everyday wear: ideal for wearing on all occasions, they are designed to offer a particular versatility and functionality.', 'Cotton', 'S, M, L, XL, XXL', 'img/products/men-clothes/slim-fit-men-shirt.jpg', b'1', b'1', b'0', '2018-06-17 20:39:59', 2, 4),
(14, 'Johnston and Murphy', 187, 'Men\'s XC4 Waterproof Stanton Run Off Venetians. Highly-durable, rubber outsole ', 'Leather upper', '38-44', 'img/products/men-shoes/johnston-and-murphy.jpg', b'0', b'1', b'0', '2018-06-17 21:14:01', 2, 5),
(15, 'Waterproof Stanton', 200, 'Men\'s XC4 Waterproof Stanton Run Off Venetians. Highly-durable, rubber outsole.', 'Leather upper', '38-44', 'img/products/men-shoes/johnston-and-murphy-waterproof-stanton.jpg', b'1', b'0', b'0', '2018-06-17 21:14:01', 2, 5),
(16, 'Black Shoes', 187, 'Men\'s XC4 Waterproof Stanton Run Off Venetians. Highly-durable, rubber outsole ', 'Leather', '38-44', 'img/products/men-shoes/men-dress-shoes.jpg', b'0', b'1', b'0', '2018-06-17 21:14:01', 2, 5),
(17, 'Waterproof Stanton', 200, 'Men\'s XC4 Waterproof Stanton Run Off Venetians. Highly-durable, rubber outsole.', 'Leather upper', '38-44', 'img/products/men-shoes/johnston-and-murphy-waterproof-stanton.jpg', b'0', b'0', b'0', '2018-06-17 21:14:01', 2, 5),
(18, 'Polo Ralph Lauren Men Vaughn Canvas Lace Up Sneakers', 240, 'Men\'s XC4 Waterproof Stanton Run Off Venetians. Highly-durable, rubber outsole ', 'Leather', '38-44', 'img/products/men-shoes/polo-ralph-lauren-men-vaughn-canvas-lace-up-sneakers.jpg', b'1', b'1', b'1', '2018-06-17 21:14:01', 2, 5),
(19, 'Men Founder Oxfords', 140, 'Men\'s XC4 Waterproof Stanton Run Off Venetians. Highly-durable, rubber outsole.', 'Leather upper', '38-44', 'img/products/men-shoes/men-founder-oxfords.jpg', b'0', b'0', b'0', '2018-06-17 21:14:01', 2, 5),
(20, 'New York Sneakers', 100, 'Men\'s XC4 Waterproof Stanton Run Off Venetians. Highly-durable, rubber outsole.', 'Leather upper', '38-44', 'img/products/men-shoes/men-new-york-sneakers.jpg', b'1', b'0', b'0', '2018-06-17 21:14:01', 2, 5),
(21, 'Long Solid Colour Dress with V Neck', 40, 'Solid colour dress with elbow-length sleeves. Boat neck. Deep V back. Semi-sheer insert on upper part.', 'Cotton', 'XS, S, M, L, XL', 'img/products/women-clothes/long-solid-colour-dress-with-v-neck.jpg', b'0', b'0', b'0', '2018-06-16 23:51:30', 3, 7),
(22, 'Solid Colour Jumpsuit with V Neck', 55, 'Solid colour viscose blend lace dress. Three-quarter sleeves. Round neck. Flounces on edge of sleeves. Matching lining.', 'Cotton', 'XS, S, M', 'img/products/women-clothes/solid-colour-jumpsuit-with-v-neck.jpg', b'0', b'1', b'0', '2018-06-16 01:51:30', 3, 7),
(23, 'Solid Colour Lace Dress', 42, 'Solid colour cotton blend lace dress. Long sleeves. Round neck. Elastic waist band. Skirt with light pleated motif. Matching lining. Zip fastening on the back.', 'Cotton', 'X, S, M, L, XL', 'img/products/women-clothes/solid-colour-lace-dress.jpg', b'1', b'0', b'1', '2018-06-16 23:51:30', 3, 7),
(24, 'Flip Flops with Canvas Straps and Pompoms', 20, 'Flip flops with canvas straps and pompoms. Braided sole. Contrasting sole.', 'Fabric plastic', '37-42', 'img/products/women-shoes/flip-flops-with-canvas-straps-and-pompoms.jpg', b'1', b'0', b'0', '2018-06-17 22:26:43', 3, 8),
(26, 'Rubber Flip-Flops with Braided Straps', 10, 'Rubber flip flops with braided straps. Floral pattern on the insole.', '100% Polypropylene', '37-42', 'img/products/women-shoes/rubber-flip-flops-with-braided-straps.jpg', b'1', b'0', b'0', '2018-06-17 22:26:43', 3, 8),
(29, 'Openwork Ankle Boots with Opening', 50, 'Ankle boots with openwork canvas upper. Opening on the toe. Zip fastening on the back. Stiletto heel.', '100% fabric cork plastic', '37-42', 'img/products/women-shoes/openwork-ankle-boots-with-opening.jpg', b'0', b'1', b'1', '2018-06-17 22:26:43', 3, 8),
(30, 'Suede Slip Ons with Trim', 28, 'Slip-ons with suede-effect canvas upper. Contrasting trim. Elasticated side bands. Rubber sole in contrasting colour.', '100% fabric cork plastic', '37-42', 'img/products/women-shoes/suede-slip-ons-with-trim.jpg', b'0', b'1', b'0', '2018-06-17 22:26:43', 3, 8),
(31, 'Slip Ons with Shiny Toe', 18, 'Slip-on with textured-effect upper. Shiny toe in contrasting colour. Elasticated side bands. Rubber sole in contrasting colour.', '100% Fabric Cork Plastic', '37-42', 'img/products/women-shoes/slip-ons-with-shiny-toe.jpg', b'0', b'0', b'0', '2018-06-17 22:26:43', 3, 8),
(32, 'Sandals with Chunky Heel and Straps', 60, 'Sandals with fabric upper. Wide heel. Zip fastening on the back and adjustable buckles on the straps.', '100% fabric cork plastic', '37-42', 'img/products/women-shoes/sandals-with-chunky-heel-and-straps.jpg', b'1', b'1', b'0', '2018-06-17 22:26:43', 3, 8),
(33, 'Shoulder Bag with Adjustable Handle', 50, 'Saffiano-effect shoulder bag with adjustable handle and contrasting trim. Made in Italy.', 'Polyurethane', '', 'img/products/women-accessorize/shoulder-bag-with-adjustable-handle.jpg', b'1', b'1', b'1', '2018-06-17 22:59:23', 3, 9),
(34, 'Floral Scarf with Fringing', 15, 'Scarf with fringed trim. Floral pattern.', 'Polyester', '', 'img/products/women-accessorize/floral-scarf-with-fringing.jpg', b'0', b'1', b'0', '2018-06-17 22:59:23', 3, 9),
(35, 'Reversible Multicolour Shoulder Bag', 60, 'Multicolour saffiano-effect reversible shoulder bag Contrasting double handles for swinging from the shoulder or carrying by hand. Made in Italy.', 'Polyurethane', '', 'img/products/women-accessorize/reversible-multicolour-shoulder-bag\r\n.jpg', b'0', b'1', b'0', '2018-06-17 22:59:23', 3, 9),
(36, 'Wide Brim Two Tone Hat', 23, 'Hat with wide brim in two-tone paper fabric with braided weave. Openwork strap with fringed hem around the crown. Contrasting trim on the brim.\r\n\r\n', 'Textile paper and polyester', '', 'img/products/women-accessorize/wide-brim-two-tone-hat.jpg', b'1', b'0', b'0', '2018-06-17 22:59:23', 3, 9);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id_role` int(11) NOT NULL,
  `role_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id_role`, `role_name`) VALUES
(1, 'admin'),
(2, 'user'),
(3, 'editor'),
(4, 'writer'),
(44, 'editor1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `first_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `date_registr` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `active` bit(1) NOT NULL,
  `role_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `biography` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `first_name`, `last_name`, `email`, `pass`, `date_registr`, `active`, `role_id`, `image`, `biography`) VALUES
(1, 'Jasmina', 'Sevic', 'jasminasevic@yahoo.com', '6e79cd1d129ad799761b8124327de527', '2018-06-19 21:26:27', b'1', 1, 'img/jasmina-sevic-portrait.jpg', 'Jasmina Šević graduated from the Faculty of Political Science, Department of Journalism and Communication Studies in 2013. Currently, she is on her third year at the ICT College of Vocational Studies in Belgrade. She made this project for Web programming \n PHP exam.'),
(2, 'Marija', 'Jovanovic', 'marija@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2018-06-20 02:56:08', b'1', 2, 'img/unknown-user.jpg', 'Marija Jovanovic is an author for Our Store blog.'),
(3, 'Zikica', 'Zikic', 'zikica@gmail.com', '0d9c2dc18e9bb7656ee45aed1df17a34', '2018-06-20 02:56:27', b'1', 2, 'img/unknown-user.jpg', 'Zikica Zikic is an author for Our Store blog.'),
(4, 'Pera', 'Peric', 'pera@gmail.com', '087a7b80e974b2434837a8300dfa54d1', '2018-06-20 02:56:33', b'1', 2, 'img/unknown-user.jpg', 'Pera Peric Marija Jovanovic is an author for Our Store blog.'),
(5, 'Mika', 'Mikic', 'mika@mail.com', 'cfb16e8826a1312f56b61a933ea81211', '2018-06-20 02:57:18', b'1', 2, 'img/unknown-user.jpg', 'Mika Mikic is Marija Jovanovic is an author for Our Store blog.'),
(45, 'admin', 'admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', '2018-06-20 02:57:30', b'1', 1, 'img/unknown-user.jpg', 'Website Administrator'),
(46, 'Jelena', 'Jovic', 'jelena@gmail.com', '268b3976011f620c180803168440b7c1', '2018-06-20 02:57:37', b'1', 2, 'img/unknown-user.jpg', 'Jelena Jovic Marija Jovanovic is an author for Our Store blog.'),
(51, 'Luka', 'Lukic', 'luka@gmail.com', 'c476c0ff320e191dee0aae6ce7ce561b', '2018-06-20 03:17:32', b'1', 1, 'img/unknown-user.jpg', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advantages`
--
ALTER TABLE `advantages`
  ADD PRIMARY KEY (`id_advantages`);

--
-- Indexes for table `main_slider`
--
ALTER TABLE `main_slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indexes for table `navigation`
--
ALTER TABLE `navigation`
  ADD PRIMARY KEY (`id_link`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `korisnik_id` (`user_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `parent` (`parent`),
  ADD KEY `product_category` (`product_category`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advantages`
--
ALTER TABLE `advantages`
  MODIFY `id_advantages` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `main_slider`
--
ALTER TABLE `main_slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `navigation`
--
ALTER TABLE `navigation`
  MODIFY `id_link` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`product_category`) REFERENCES `navigation` (`id_link`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id_role`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
