/*
SQLyog Community v13.1.9 (64 bit)
MySQL - 10.4.24-MariaDB : Database - db_ecommerce
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_ecommerce` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `db_ecommerce`;

/*Table structure for table `barang` */

DROP TABLE IF EXISTS `barang`;

CREATE TABLE `barang` (
  `IdBarang` int(11) NOT NULL AUTO_INCREMENT,
  `NamaBarang` varchar(255) NOT NULL,
  `Harga` int(11) NOT NULL,
  `Stok` int(11) NOT NULL,
  `gambar` varchar(500) NOT NULL,
  `brand` varchar(500) NOT NULL,
  `seller` varchar(255) NOT NULL,
  `rating` varchar(5) NOT NULL,
  `Deskripsi` varchar(500) NOT NULL,
  PRIMARY KEY (`IdBarang`)
) ENGINE=InnoDB AUTO_INCREMENT=150 DEFAULT CHARSET=utf8mb4;

/*Data for the table `barang` */

insert  into `barang`(`IdBarang`,`NamaBarang`,`Harga`,`Stok`,`gambar`,`brand`,`seller`,`rating`,`Deskripsi`) values 
(1,'1/400 An-225 Large Transport Aircraft Russia',15000,75,'af1af10171_0_1668749428','','','0.5',''),
(2,'sailor-moon-eternal-super-sailor-moon-ii-ver-a-q-glitter-glamours-banpresto',45956,13,'sailor-moon-eternal-super-sailor-moon-ii-ver-a-q-glitter-glamours-banpresto','','','1','Merol muspi rolod tis tema rutetcesnoc gnicisipida tile. Eropmet mairepa tnuicsen muitnesearp atidepxe orebil silicaf mainev rutnuuqesnoc mauqsiuq? Eadnaiduper siroproc aguf tnuicsen eadnasucer saila murolod muspi mallu tis siitidnalb etneipas ouq atcid, silicaf sunim, tu euqmuc tse taecalp irutpecxe orev di. Satpulov isin tiredneherper, rorre sitaicipsrep apluc saitselom tua oitpo?esr ereh'),
(3,'bleach-ichigo-kurosaki-mub-tsume',55193,56,'bleach-ichigo-kurosaki-mub-tsume','','','1.5',''),
(4,'dc-multiverse-batman-dc-future-state-mcfarlane-toys',11434,4,'dc-multiverse-batman-dc-future-state-mcfarlane-toys','','','1.5',''),
(5,'dragon-ball-super-broly-full-power-sh-figuarts-bandai',27767,64,'dragon-ball-super-broly-full-power-sh-figuarts-bandai','','','1.5',''),
(6,'dragon-ball-super-gohan-ss-chousenshi-retsuden-banpresto',22286,17,'dragon-ball-super-gohan-ss-chousenshi-retsuden-banpresto','','','1',''),
(7,'final-fantasy-vii-advent-children-cloud-strife-fenrir-play-arts-kai-square-enix',75609,74,'final-fantasy-vii-advent-children-cloud-strife-fenrir-play-arts-kai-square-enix','','','2',''),
(8,'fortnite-victory-royale-ragsy-hasbro',29215,13,'fortnite-victory-royale-ragsy-hasbro','','','1',''),
(9,'infinity-saga-dlx-iron-man-mark-44-hulkbuster-marvel-threezero',90781,55,'infinity-saga-dlx-iron-man-mark-44-hulkbuster-marvel-threezero','','','0.5',''),
(10,'naruto-shippuden-gaara-gem-megahouse',49277,34,'naruto-shippuden-gaara-gem-megahouse','','','1.5',''),
(11,'naruto-shippuden-nara-shikamaru-vibration-stars-banpresto',89628,74,'naruto-shippuden-nara-shikamaru-vibration-stars-banpresto','','','0.5',''),
(12,'naruto-shippuden-naruto-uzumaki-vibration-stars-banpresto',76779,70,'naruto-shippuden-naruto-uzumaki-vibration-stars-banpresto','','','1.5',''),
(13,'one-piece-kozuki-oden-portrait-of-pirates-warriors-alliance-megahouse-',49894,87,'one-piece-kozuki-oden-portrait-of-pirates-warriors-alliance-megahouse-','','','1',''),
(14,'Original Character by MaJO neala～Red Rabbit～Kaitendoh',37703,43,'original-character-by-majo-nealared-rabbitkaitendoh','','','0.5',''),
(15,'Original Character by MaJO neala～Black Rabbit～Kaitendoh',13426,2,'original-character-by-majo-nealablack-rabbitkaitendoh','','','2.5',''),
(16,'Azur Lane Penelope Salty Maid Ver. WINGS inc.',39733,60,'azur-lane-penelope-salty-maid-ver-wings-inc','','','1',''),
(17,'Original Character by Natsuki Mibu Kasumi Creators Opinion BINDing',11844,82,'original-character-by-natsuki-mibu-kasumi-creators-opinion-binding','','','0.5',''),
(18,'Maitetsu Paulette Hinai Bikini Ver. Q-six',78304,5,'maitetsu-paulette-hinai-bikini-ver-q-six','','','1',''),
(19,'Tokyo Revengers Ken Ryuguji Ver.A Q Posket Banpresto',34401,78,'tokyo-revengers-ken-ryuguji-vera-q-posket-banpresto','','','1',''),
(20,'Jujutsu Kaisen Kento Nanami Banpresto',12124,88,'jujutsu-kaisen-kento-nanami-banpresto','','','1.5',''),
(21,'Original Character Alp Switch Q-six',70522,29,'original-character-alp-switch-q-six','','','1',''),
(22,'Original Character Neige Binding',19798,10,'original-character-neige-binding','','','0.5',''),
(23,'[Limited Production] Nendoroid Inumaki Toge - Jujutsu Kaisen',46693,61,'98709-limited-production-nendoroid-inumaki-toge-jujutsu-kaisen','','','0.5',''),
(24,'Shingeki no Kyojin Levi Ackerman The Final Season Ver. Nendoroid Good Smile Company',92226,22,'shingeki-no-kyojin-levi-ackerman-the-final-season-ver-nendoroid-good-smile-company','','','2.5',''),
(25,'My Hero Academia Izuku Midoriya Chronicle Super Master Stars Piece Chronicle Banpresto',70631,45,'my-hero-academia-izuku-midoriya-super-master-stars-piece-chronicle-banpresto','','','0.5',''),
(26,'Jujutsu Kaisen Sukuna QPosket Ver. A Banpresto',54043,18,'jujutsu-kaisen-sukuna-qposket-ver-a-banpresto','','','2.5',''),
(27,'Sailor Moon Eternal Princess Usagi Small Lady Serenity Ver.A Q Posket Banpresto',76924,12,'sailor-moon-eternal-princess-usagi-small-lady-serenity-vera-q-posket-banpresto','','','2',''),
(28,'BTS Tiny TAN MIC Drop Junk Kook Q Posket Banpresto',36269,80,'bts-tiny-tan-mic-drop-junk-kook-q-posket-banpresto','','','2.5',''),
(29,'BTS Tiny TAN MIC Drop V Q Posket Banpresto',17687,91,'bts-tiny-tan-mic-drop-v-q-posket-banpresto','','','1.5',''),
(30,'BTS Tiny TAN MIC Drop Jimin Q Posket Banpresto',65930,89,'bts-tiny-tan-mic-drop-jimin-q-posket-banpresto','','','2.5',''),
(31,'BTS Tiny TAN MIC Drop Hope Q Posket Banpresto',62326,1,'bts-tiny-tan-mic-drop-hope-q-posket-banpresto','','','1',''),
(32,'BTS Tiny TAN MIC Drop Suga Q Posket Banpresto',56182,98,'bts-tiny-tan-mic-drop-suga-q-posket-banpresto','','','1.5',''),
(33,'BTS Tiny TAN MIC Drop Jin Q Posket Banpresto',62043,31,'bts-tiny-tan-mic-drop-jin-q-posket-banpresto','','','2',''),
(34,'BTS Tiny TAN MIC Drop RM Q Posket Banpresto',46253,30,'bts-tiny-tan-mic-drop-rm-q-posket-banpresto','','','2.5',''),
(35,'Kuroko\'s Basketball Atsushi Murasakibara Q Posket Banpresto',29811,1,'kuroko-s-basketball-atsushi-murasakibara-q-posket-banpresto','','','1.5',''),
(36,'Dragon Ball Goku (Childhood) Match Makers Banpresto',43221,45,'dragon-ball-goku-childhood-match-makers-banpresto','','','2.5',''),
(37,'Dragon Ball Z Super Saiyan Vegeta Clearise Banpresto',91831,26,'dragon-ball-z-super-saiyan-vegeta-clearise-banpresto','','','2.5',''),
(38,'Naruto Shippuden Itachi Uchiha Vibration Stars II Banpresto',18665,54,'naruto-shippuden-itachi-uchiha-vibration-stars-ii-banpresto','','','1',''),
(39,'Summer Time Rendering Hizuru Minamikata Banpresto',63466,22,'summer-time-rendering-hizuru-minamikata-banpresto','','','1.5',''),
(40,'One Piece Yamato DXF The Grandline Series Wano Country Vol. 4 Banpresto',39564,90,'one-piece-yamato-dxf-the-grandline-series-wano-country-vol-4-banpresto','','','2.5',''),
(41,'Sailor Moon Eternal Princess Mercury Ver.A Q Posket Banpresto',48808,2,'sailor-moon-eternal-princess-mercury-vera-q-posket-banpresto','','','1',''),
(42,'Naruto Shippuden Naruto Uzumaki III Vibration Stars Banpresto',74610,1,'naruto-shippuden-naruto-uzumaki-iii-vibration-stars-banpresto','','','1.5',''),
(43,'My Hero Academia World Heroes Mission Shoto Todoroki The Amazing Heroes Banpresto',23543,40,'my-hero-academia-world-heroes-mission-shoto-todoroki-the-amazing-heroes-banpresto','','','2',''),
(44,'One Piece Dracule Mihawk DXF Special Banpresto',23376,73,'one-piece-vinsmoke-reiju-chronicle-glitter-glamours-banpresto','','','2.5',''),
(45,'One Piece Monkey D. Luffy Shukko Banpresto',85733,95,'one-piece-monkey-d-luffy-shukko-banpresto','','','1.5',''),
(46,'Mazinkaiser GX-75SP 20th Anniversary Ver. Soul of Chogokin Tamashii Nations',99643,9,'mazinkaiser-gx-75sp-20th-anniversary-ver-soul-of-chogokin-tamashii-nations','','','0.5',''),
(47,'Batman Last Knight on Earth ARTFX DC UNIVERSE Kotobukiya',84128,97,'batman-last-knight-on-earth-artfx-dc-universe-kotobukiya','','','1',''),
(48,'Haikyu!! Second Season Kenma Kozume Nendoroid Orange Rouge',95746,86,'haikyu-second-season-kenma-kozume-nendoroid-orange-rouge','','','2',''),
(49,'Kimetsu no Yaiba Tanjiro Hinokami Kagura Figuarts Zero Tamashii Nations Bandai Spirits',81078,67,'kimetsu-no-yaiba-tanjiro-hinokami-kagura-figuarts-zero-tamashii-nations-bandai-spirits','','','2',''),
(50,'The Legend of Zelda: Skyward Sword Link Good Smile Company',78911,60,'the-legend-of-zelda-skyward-sword-link-good-smile-company','','','0.5',''),
(51,'The Legend of Zelda: Skyward Sword Link Figma Good Smile Company',47732,33,'the-legend-of-zelda-skyward-sword-link-figma-good-smile-company','','','2.5',''),
(52,'Naruto Shippuden Sasuke Uchiha Grandista Manga Dimensions Banpresto',27834,34,'naruto-shippuden-sasuke-uchiha-grandista-manga-dimensions-banpresto','','','1.5',''),
(53,'Spy x Family Anya Forger Pop Up Parade Good Smile Company',35939,43,'spy-x-family-anya-forger-pop-up-parade-good-smile-company','','','2',''),
(54,'S.H. FIGUARTS BATTLE HOPPER KAMEN RIDER BLACK SUN',24473,94,'sh-figuarts-vice-lovekov-option-parts-set','','','2.5',''),
(55,'POP UP PARADE Tiz Arrior (Bravely Default)',21908,58,'enx37039_0_1668741086','','','0.5',''),
(56,'POP UP PARADE Nobeta (Little Witch Nobeta)',68710,69,'gsc94655_0_1668741010','','','1.5',''),
(57,'1/7 Dream Tech Azur Lane: Honolulu (Festival for Two)',85537,70,'wavdt-169_0_1668652221','','','1',''),
(58,'1/4 B-Style Azur Lane Vittorio Veneto: The Flower of La Spezia',34145,30,'fre51136_0_1668650440','','','1.5',''),
(59,'INFINITY STUDIO Elegant Beauties Series - Prince Lanling in Battle',33172,100,'iso92579_0_1668654630','','','2.5',''),
(60,'Cutie1 Chainsaw Man: Chainsaw Man',74211,17,'prs04212_0_1668558613','','','2',''),
(61,'Sengoku Busho Figure Collection 10 Body Set',55276,47,'plzsp-163_0_1668561033','','','2.5',''),
(62,'1/6 Azur Lane: Reno Biggest Little Cheerleader',97762,71,'goh91806_0_1668586210','','','1.5',''),
(63,'1/7 Soul Land: Xiao Wu: Lifelong Protection ver. Figure',60381,22,'mye92469_0_1668482569','','','2.5',''),
(64,'1/7 Shangri-La Frontier: Emul (Human) Figure',61264,37,'hls30006_0_1668482495','','','1.5',''),
(65,'Sailor Moon Eternal Q Posket Princess Neptune B',15266,50,'bnp2589298-b_0_1668648012','','','2',''),
(66,'POP UP PARADE Yang Xiao Long: Lucid Dream (RWBY: Ice Queendom)',79530,35,'gsc94638_0_1668482503','','','1.5',''),
(67,'1/7 THE IDOLM@STER Cinderella Girls Kanade Hayami Mystic Dawn Ver.',79147,74,'alt20699_0_1668558628','','','1.5',''),
(68,'Sailor Moon Eternal Q Posket Princess Neptune A',39409,94,'bnp2589298-a_0_1668648060','','','2',''),
(69,'POP UP PARADE Weiss Schnee: Nightmare Side (RWBY: Ice Queendom)',12850,35,'gsc94636_0_1668482563','','','1.5',''),
(70,'POP UP PARADE Blake Belladonna: Lucid Dream (RWBY: Ice Queendom)',60919,32,'gsc94637_0_1668482420','','','1',''),
(71,'POP UP PARADE Ruby Rose: Lucid Dream (RWBY: Ice Queendom)',89659,58,'gsc94635_0_1668482475','','','1',''),
(72,'Sailor Moon Eternal Q Posket Princess Uranus B',10887,88,'bnp2589297-b_0_1668648064','','','2',''),
(73,'Sailor Moon Eternal Q Posket Princess Uranus A',11229,67,'bnp2589297-a_0_1668648033','','','2',''),
(74,'1/400 An-225 Large Transport Aircraft Ukraine',24884,82,'af1af10172_0_1668749409','','','1',''),
(75,'1/32 WW.II German Tank Destroyer Jagdtiger Porsche Type',35225,85,'wltws55702_0_1668743422','','','','');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `username` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` char(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `token` varchar(40) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `users` */

insert  into `users`(`username`,`email`,`password`,`full_name`,`token`) values 
('check1','check1@check1.com','$2y$10$iu9QVs5k94vsj0enrmsmQu.dGgXKCli9atHtpwPw.L49CRnrZb7HO','CNvSQtUkqG','09e03a90dbcb0e61aa888093acd3de1c');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
