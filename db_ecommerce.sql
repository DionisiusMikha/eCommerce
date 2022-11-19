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
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8mb4;

/*Data for the table `barang` */

insert  into `barang`(`IdBarang`,`NamaBarang`,`Harga`,`Stok`,`gambar`,`brand`,`seller`,`rating`,`Deskripsi`) values 
(1,'sailor-moon-eternal-super-sailor-moon-ii-ver-a-q-glitter-glamours-banpresto',79771,32,'sailor-moon-eternal-super-sailor-moon-ii-ver-a-q-glitter-glamours-banpresto','','','','Merol muspi rolod tis tema rutetcesnoc gnicisipida tile. Eropmet mairepa tnuicsen muitnesearp atidepxe orebil silicaf mainev rutnuuqesnoc mauqsiuq? Eadnaiduper siroproc aguf tnuicsen eadnasucer saila murolod muspi mallu tis siitidnalb etneipas ouq atcid, silicaf sunim, tu euqmuc tse taecalp irutpecxe orev di. Satpulov isin tiredneherper, rorre sitaicipsrep apluc saitselom tua oitpo?esr ereh'),
(2,'bleach-ichigo-kurosaki-mub-tsume',17952,11,'bleach-ichigo-kurosaki-mub-tsume','','','',''),
(3,'dc-multiverse-batman-dc-future-state-mcfarlane-toys',26082,22,'dc-multiverse-batman-dc-future-state-mcfarlane-toys','','','',''),
(4,'dragon-ball-super-broly-full-power-sh-figuarts-bandai',15398,33,'dragon-ball-super-broly-full-power-sh-figuarts-bandai','','','',''),
(5,'dragon-ball-super-gohan-ss-chousenshi-retsuden-banpresto',94622,39,'dragon-ball-super-gohan-ss-chousenshi-retsuden-banpresto','','','',''),
(6,'final-fantasy-vii-advent-children-cloud-strife-fenrir-play-arts-kai-square-enix',15699,85,'final-fantasy-vii-advent-children-cloud-strife-fenrir-play-arts-kai-square-enix','','','',''),
(7,'fortnite-victory-royale-ragsy-hasbro',72940,88,'fortnite-victory-royale-ragsy-hasbro','','','',''),
(8,'infinity-saga-dlx-iron-man-mark-44-hulkbuster-marvel-threezero',72749,2,'infinity-saga-dlx-iron-man-mark-44-hulkbuster-marvel-threezero','','','',''),
(9,'naruto-shippuden-gaara-gem-megahouse',13886,94,'naruto-shippuden-gaara-gem-megahouse','','','',''),
(10,'naruto-shippuden-nara-shikamaru-vibration-stars-banpresto',11413,48,'naruto-shippuden-nara-shikamaru-vibration-stars-banpresto','','','',''),
(11,'naruto-shippuden-naruto-uzumaki-vibration-stars-banpresto',34913,4,'naruto-shippuden-naruto-uzumaki-vibration-stars-banpresto','','','',''),
(12,'one-piece-kozuki-oden-portrait-of-pirates-warriors-alliance-megahouse-',22193,16,'one-piece-kozuki-oden-portrait-of-pirates-warriors-alliance-megahouse-','','','',''),
(13,'Original Character by MaJO neala～Red Rabbit～Kaitendoh',18349,52,'original-character-by-majo-nealared-rabbitkaitendoh','','','',''),
(14,'Original Character by MaJO neala～Black Rabbit～Kaitendoh',86197,19,'original-character-by-majo-nealablack-rabbitkaitendoh','','','',''),
(15,'Azur Lane Penelope Salty Maid Ver. WINGS inc.',66052,41,'azur-lane-penelope-salty-maid-ver-wings-inc','','','',''),
(16,'Original Character by Natsuki Mibu Kasumi Creators Opinion BINDing',26422,41,'original-character-by-natsuki-mibu-kasumi-creators-opinion-binding','','','',''),
(17,'Maitetsu Paulette Hinai Bikini Ver. Q-six',21190,94,'maitetsu-paulette-hinai-bikini-ver-q-six','','','',''),
(18,'Tokyo Revengers Ken Ryuguji Ver.A Q Posket Banpresto',12904,97,'tokyo-revengers-ken-ryuguji-vera-q-posket-banpresto','','','',''),
(19,'Jujutsu Kaisen Kento Nanami Banpresto',55820,77,'jujutsu-kaisen-kento-nanami-banpresto','','','',''),
(20,'Original Character Alp Switch Q-six',89178,52,'original-character-alp-switch-q-six','','','',''),
(21,'Original Character Neige Binding',69018,26,'original-character-neige-binding','','','',''),
(22,'[Limited Production] Nendoroid Inumaki Toge - Jujutsu Kaisen',60632,16,'98709-limited-production-nendoroid-inumaki-toge-jujutsu-kaisen','','','',''),
(23,'Shingeki no Kyojin Levi Ackerman The Final Season Ver. Nendoroid Good Smile Company',10804,50,'shingeki-no-kyojin-levi-ackerman-the-final-season-ver-nendoroid-good-smile-company','','','',''),
(24,'My Hero Academia Izuku Midoriya Chronicle Super Master Stars Piece Chronicle Banpresto',16381,78,'my-hero-academia-izuku-midoriya-super-master-stars-piece-chronicle-banpresto','','','',''),
(25,'Jujutsu Kaisen Sukuna QPosket Ver. A Banpresto',67850,91,'jujutsu-kaisen-sukuna-qposket-ver-a-banpresto','','','',''),
(26,'Sailor Moon Eternal Princess Usagi Small Lady Serenity Ver.A Q Posket Banpresto',32158,86,'sailor-moon-eternal-princess-usagi-small-lady-serenity-vera-q-posket-banpresto','','','',''),
(27,'BTS Tiny TAN MIC Drop Junk Kook Q Posket Banpresto',29552,89,'bts-tiny-tan-mic-drop-junk-kook-q-posket-banpresto','','','',''),
(28,'BTS Tiny TAN MIC Drop V Q Posket Banpresto',39620,59,'bts-tiny-tan-mic-drop-v-q-posket-banpresto','','','',''),
(29,'BTS Tiny TAN MIC Drop Jimin Q Posket Banpresto',36437,31,'bts-tiny-tan-mic-drop-jimin-q-posket-banpresto','','','',''),
(30,'BTS Tiny TAN MIC Drop Hope Q Posket Banpresto',76673,59,'bts-tiny-tan-mic-drop-hope-q-posket-banpresto','','','',''),
(31,'BTS Tiny TAN MIC Drop Suga Q Posket Banpresto',78797,86,'bts-tiny-tan-mic-drop-suga-q-posket-banpresto','','','',''),
(32,'BTS Tiny TAN MIC Drop Jin Q Posket Banpresto',27651,68,'bts-tiny-tan-mic-drop-jin-q-posket-banpresto','','','',''),
(33,'BTS Tiny TAN MIC Drop RM Q Posket Banpresto',67559,15,'bts-tiny-tan-mic-drop-rm-q-posket-banpresto','','','',''),
(34,'Kuroko\'s Basketball Atsushi Murasakibara Q Posket Banpresto',87451,11,'kuroko-s-basketball-atsushi-murasakibara-q-posket-banpresto','','','',''),
(35,'Dragon Ball Goku (Childhood) Match Makers Banpresto',18221,60,'dragon-ball-goku-childhood-match-makers-banpresto','','','',''),
(36,'Dragon Ball Z Super Saiyan Vegeta Clearise Banpresto',72740,18,'dragon-ball-z-super-saiyan-vegeta-clearise-banpresto','','','',''),
(37,'Naruto Shippuden Itachi Uchiha Vibration Stars II Banpresto',88152,89,'naruto-shippuden-itachi-uchiha-vibration-stars-ii-banpresto','','','',''),
(38,'Summer Time Rendering Hizuru Minamikata Banpresto',19846,4,'summer-time-rendering-hizuru-minamikata-banpresto','','','',''),
(39,'One Piece Yamato DXF The Grandline Series Wano Country Vol. 4 Banpresto',62304,3,'one-piece-yamato-dxf-the-grandline-series-wano-country-vol-4-banpresto','','','',''),
(40,'Sailor Moon Eternal Princess Mercury Ver.A Q Posket Banpresto',76998,33,'sailor-moon-eternal-princess-mercury-vera-q-posket-banpresto','','','',''),
(41,'Naruto Shippuden Naruto Uzumaki III Vibration Stars Banpresto',80941,69,'naruto-shippuden-naruto-uzumaki-iii-vibration-stars-banpresto','','','',''),
(42,'My Hero Academia World Heroes Mission Shoto Todoroki The Amazing Heroes Banpresto',65888,62,'my-hero-academia-world-heroes-mission-shoto-todoroki-the-amazing-heroes-banpresto','','','',''),
(43,'One Piece Dracule Mihawk DXF Special Banpresto',26289,97,'one-piece-vinsmoke-reiju-chronicle-glitter-glamours-banpresto','','','',''),
(44,'One Piece Monkey D. Luffy Shukko Banpresto',48991,64,'one-piece-monkey-d-luffy-shukko-banpresto','','','',''),
(45,'Mazinkaiser GX-75SP 20th Anniversary Ver. Soul of Chogokin Tamashii Nations',86168,63,'mazinkaiser-gx-75sp-20th-anniversary-ver-soul-of-chogokin-tamashii-nations','','','',''),
(46,'Batman Last Knight on Earth ARTFX DC UNIVERSE Kotobukiya',99609,14,'batman-last-knight-on-earth-artfx-dc-universe-kotobukiya','','','',''),
(47,'Haikyu!! Second Season Kenma Kozume Nendoroid Orange Rouge',42483,89,'haikyu-second-season-kenma-kozume-nendoroid-orange-rouge','','','',''),
(48,'Kimetsu no Yaiba Tanjiro Hinokami Kagura Figuarts Zero Tamashii Nations Bandai Spirits',55397,67,'kimetsu-no-yaiba-tanjiro-hinokami-kagura-figuarts-zero-tamashii-nations-bandai-spirits','','','',''),
(49,'The Legend of Zelda: Skyward Sword Link Good Smile Company',76587,87,'the-legend-of-zelda-skyward-sword-link-good-smile-company','','','',''),
(50,'The Legend of Zelda: Skyward Sword Link Figma Good Smile Company',90272,17,'the-legend-of-zelda-skyward-sword-link-figma-good-smile-company','','','',''),
(51,'Naruto Shippuden Sasuke Uchiha Grandista Manga Dimensions Banpresto',61219,9,'naruto-shippuden-sasuke-uchiha-grandista-manga-dimensions-banpresto','','','',''),
(52,'Spy x Family Anya Forger Pop Up Parade Good Smile Company',93250,9,'spy-x-family-anya-forger-pop-up-parade-good-smile-company','','','',''),
(53,'S.H. FIGUARTS BATTLE HOPPER KAMEN RIDER BLACK SUN',57203,42,'sh-figuarts-vice-lovekov-option-parts-set','','','',''),
(54,'POP UP PARADE Tiz Arrior (Bravely Default)',56422,46,'enx37039_0_1668741086','','','',''),
(55,'POP UP PARADE Nobeta (Little Witch Nobeta)',77330,4,'gsc94655_0_1668741010','','','',''),
(56,'1/7 Dream Tech Azur Lane: Honolulu (Festival for Two)',80317,8,'wavdt-169_0_1668652221','','','',''),
(57,'1/4 B-Style Azur Lane Vittorio Veneto: The Flower of La Spezia',28682,97,'fre51136_0_1668650440','','','',''),
(58,'INFINITY STUDIO Elegant Beauties Series - Prince Lanling in Battle',81219,62,'iso92579_0_1668654630','','','',''),
(59,'Cutie1 Chainsaw Man: Chainsaw Man',70368,92,'prs04212_0_1668558613','','','',''),
(60,'Sengoku Busho Figure Collection 10 Body Set',21499,66,'plzsp-163_0_1668561033','','','',''),
(61,'1/6 Azur Lane: Reno Biggest Little Cheerleader',64496,82,'goh91806_0_1668586210','','','',''),
(62,'1/7 Soul Land: Xiao Wu: Lifelong Protection ver. Figure',44223,74,'mye92469_0_1668482569','','','',''),
(63,'1/7 Shangri-La Frontier: Emul (Human) Figure',37917,55,'hls30006_0_1668482495','','','',''),
(64,'Sailor Moon Eternal Q Posket Princess Neptune B',82102,97,'bnp2589298-b_0_1668648012','','','',''),
(65,'POP UP PARADE Yang Xiao Long: Lucid Dream (RWBY: Ice Queendom)',55434,78,'gsc94638_0_1668482503','','','',''),
(66,'1/7 THE IDOLM@STER Cinderella Girls Kanade Hayami Mystic Dawn Ver.',85984,90,'alt20699_0_1668558628','','','',''),
(67,'Sailor Moon Eternal Q Posket Princess Neptune A',11735,33,'bnp2589298-a_0_1668648060','','','',''),
(68,'POP UP PARADE Weiss Schnee: Nightmare Side (RWBY: Ice Queendom)',41525,4,'gsc94636_0_1668482563','','','',''),
(69,'POP UP PARADE Blake Belladonna: Lucid Dream (RWBY: Ice Queendom)',75409,20,'gsc94637_0_1668482420','','','',''),
(70,'POP UP PARADE Ruby Rose: Lucid Dream (RWBY: Ice Queendom)',92888,34,'gsc94635_0_1668482475','','','',''),
(71,'Sailor Moon Eternal Q Posket Princess Uranus B',63538,7,'bnp2589297-b_0_1668648064','','','',''),
(72,'Sailor Moon Eternal Q Posket Princess Uranus A',23386,82,'bnp2589297-a_0_1668648033','','','','');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `username` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` char(40) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `users` */

insert  into `users`(`username`,`email`,`password`,`full_name`) values 
('check1','Check1@Check1.com','check1','ILrlduBSJV');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
