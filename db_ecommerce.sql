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
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4;

/*Data for the table `barang` */

insert  into `barang`(`IdBarang`,`NamaBarang`,`Harga`,`Stok`,`gambar`,`brand`,`seller`,`rating`,`Deskripsi`) values 
(1,'sailor-moon-eternal-super-sailor-moon-ii-ver-a-q-glitter-glamours-banpresto',98942,81,'sailor-moon-eternal-super-sailor-moon-ii-ver-a-q-glitter-glamours-banpresto','','','','Merol muspi rolod tis tema rutetcesnoc gnicisipida tile. Eropmet mairepa tnuicsen muitnesearp atidepxe orebil silicaf mainev rutnuuqesnoc mauqsiuq? Eadnaiduper siroproc aguf tnuicsen eadnasucer saila murolod muspi mallu tis siitidnalb etneipas ouq atcid, silicaf sunim, tu euqmuc tse taecalp irutpecxe orev di. Satpulov isin tiredneherper, rorre sitaicipsrep apluc saitselom tua oitpo?esr ereh'),
(2,'bleach-ichigo-kurosaki-mub-tsume',75496,16,'bleach-ichigo-kurosaki-mub-tsume','','','',''),
(3,'dc-multiverse-batman-dc-future-state-mcfarlane-toys',14571,43,'dc-multiverse-batman-dc-future-state-mcfarlane-toys','','','',''),
(4,'dragon-ball-super-broly-full-power-sh-figuarts-bandai',85304,79,'dragon-ball-super-broly-full-power-sh-figuarts-bandai','','','',''),
(5,'dragon-ball-super-gohan-ss-chousenshi-retsuden-banpresto',31063,85,'dragon-ball-super-gohan-ss-chousenshi-retsuden-banpresto','','','',''),
(6,'final-fantasy-vii-advent-children-cloud-strife-fenrir-play-arts-kai-square-enix',20537,3,'final-fantasy-vii-advent-children-cloud-strife-fenrir-play-arts-kai-square-enix','','','',''),
(7,'fortnite-victory-royale-ragsy-hasbro',40018,28,'fortnite-victory-royale-ragsy-hasbro','','','',''),
(8,'infinity-saga-dlx-iron-man-mark-44-hulkbuster-marvel-threezero',24484,97,'infinity-saga-dlx-iron-man-mark-44-hulkbuster-marvel-threezero','','','',''),
(9,'naruto-shippuden-gaara-gem-megahouse',46475,46,'naruto-shippuden-gaara-gem-megahouse','','','',''),
(10,'naruto-shippuden-nara-shikamaru-vibration-stars-banpresto',79837,36,'naruto-shippuden-nara-shikamaru-vibration-stars-banpresto','','','',''),
(11,'naruto-shippuden-naruto-uzumaki-vibration-stars-banpresto',78126,46,'naruto-shippuden-naruto-uzumaki-vibration-stars-banpresto','','','',''),
(12,'one-piece-kozuki-oden-portrait-of-pirates-warriors-alliance-megahouse-',49336,50,'one-piece-kozuki-oden-portrait-of-pirates-warriors-alliance-megahouse-','','','',''),
(13,'Original Character by MaJO neala～Red Rabbit～Kaitendoh',0,0,'original-character-by-majo-nealared-rabbitkaitendoh','','','',''),
(14,'Original Character by MaJO neala～Black Rabbit～Kaitendoh',0,0,'original-character-by-majo-nealablack-rabbitkaitendoh','','','',''),
(15,'Azur Lane Penelope Salty Maid Ver. WINGS inc.',0,0,'azur-lane-penelope-salty-maid-ver-wings-inc','','','',''),
(16,'Original Character by Natsuki Mibu Kasumi Creators Opinion BINDing',0,0,'original-character-by-natsuki-mibu-kasumi-creators-opinion-binding','','','',''),
(17,'Maitetsu Paulette Hinai Bikini Ver. Q-six',0,0,'maitetsu-paulette-hinai-bikini-ver-q-six','','','',''),
(18,'Tokyo Revengers Ken Ryuguji Ver.A Q Posket Banpresto',0,0,'tokyo-revengers-ken-ryuguji-vera-q-posket-banpresto','','','',''),
(19,'Jujutsu Kaisen Kento Nanami Banpresto',0,0,'jujutsu-kaisen-kento-nanami-banpresto','','','',''),
(20,'Original Character Alp Switch Q-six',0,0,'original-character-alp-switch-q-six','','','',''),
(21,'Original Character Neige Binding',0,0,'original-character-neige-binding','','','',''),
(22,'[Limited Production] Nendoroid Inumaki Toge - Jujutsu Kaisen',0,0,'98709-limited-production-nendoroid-inumaki-toge-jujutsu-kaisen','','','',''),
(23,'Shingeki no Kyojin Levi Ackerman The Final Season Ver. Nendoroid Good Smile Company',0,0,'shingeki-no-kyojin-levi-ackerman-the-final-season-ver-nendoroid-good-smile-company','','','',''),
(24,'My Hero Academia Izuku Midoriya Chronicle Super Master Stars Piece Chronicle Banpresto',0,0,'my-hero-academia-izuku-midoriya-super-master-stars-piece-chronicle-banpresto','','','',''),
(25,'Jujutsu Kaisen Sukuna QPosket Ver. A Banpresto',0,0,'jujutsu-kaisen-sukuna-qposket-ver-a-banpresto','','','',''),
(26,'Sailor Moon Eternal Princess Usagi Small Lady Serenity Ver.A Q Posket Banpresto',0,0,'sailor-moon-eternal-princess-usagi-small-lady-serenity-vera-q-posket-banpresto','','','',''),
(27,'BTS Tiny TAN MIC Drop Junk Kook Q Posket Banpresto',0,0,'bts-tiny-tan-mic-drop-junk-kook-q-posket-banpresto','','','',''),
(28,'BTS Tiny TAN MIC Drop V Q Posket Banpresto',0,0,'bts-tiny-tan-mic-drop-v-q-posket-banpresto','','','',''),
(29,'BTS Tiny TAN MIC Drop Jimin Q Posket Banpresto',0,0,'bts-tiny-tan-mic-drop-jimin-q-posket-banpresto','','','',''),
(30,'BTS Tiny TAN MIC Drop Hope Q Posket Banpresto',0,0,'bts-tiny-tan-mic-drop-hope-q-posket-banpresto','','','',''),
(31,'BTS Tiny TAN MIC Drop Suga Q Posket Banpresto',0,0,'bts-tiny-tan-mic-drop-suga-q-posket-banpresto','','','',''),
(32,'BTS Tiny TAN MIC Drop Jin Q Posket Banpresto',0,0,'bts-tiny-tan-mic-drop-jin-q-posket-banpresto','','','',''),
(33,'BTS Tiny TAN MIC Drop RM Q Posket Banpresto',0,0,'bts-tiny-tan-mic-drop-rm-q-posket-banpresto','','','',''),
(34,'Kuroko\'s Basketball Atsushi Murasakibara Q Posket Banpresto',0,0,'kuroko-s-basketball-atsushi-murasakibara-q-posket-banpresto','','','',''),
(35,'Dragon Ball Goku (Childhood) Match Makers Banpresto',0,0,'dragon-ball-goku-childhood-match-makers-banpresto','','','',''),
(36,'Dragon Ball Z Super Saiyan Vegeta Clearise Banpresto',0,0,'dragon-ball-z-super-saiyan-vegeta-clearise-banpresto','','','',''),
(37,'Naruto Shippuden Itachi Uchiha Vibration Stars II Banpresto',0,0,'naruto-shippuden-itachi-uchiha-vibration-stars-ii-banpresto','','','',''),
(38,'Summer Time Rendering Hizuru Minamikata Banpresto',0,0,'summer-time-rendering-hizuru-minamikata-banpresto','','','',''),
(39,'One Piece Yamato DXF The Grandline Series Wano Country Vol. 4 Banpresto',0,0,'one-piece-yamato-dxf-the-grandline-series-wano-country-vol-4-banpresto','','','',''),
(40,'Sailor Moon Eternal Princess Mercury Ver.A Q Posket Banpresto',0,0,'sailor-moon-eternal-princess-mercury-vera-q-posket-banpresto','','','',''),
(41,'Naruto Shippuden Naruto Uzumaki III Vibration Stars Banpresto',0,0,'naruto-shippuden-naruto-uzumaki-iii-vibration-stars-banpresto','','','',''),
(42,'My Hero Academia World Heroes Mission Shoto Todoroki The Amazing Heroes Banpresto',0,0,'my-hero-academia-world-heroes-mission-shoto-todoroki-the-amazing-heroes-banpresto','','','',''),
(43,'One Piece Dracule Mihawk DXF Special Banpresto',0,0,'one-piece-vinsmoke-reiju-chronicle-glitter-glamours-banpresto','','','',''),
(44,'One Piece Monkey D. Luffy Shukko Banpresto',0,0,'one-piece-monkey-d-luffy-shukko-banpresto','','','',''),
(45,'Mazinkaiser GX-75SP 20th Anniversary Ver. Soul of Chogokin Tamashii Nations',0,0,'mazinkaiser-gx-75sp-20th-anniversary-ver-soul-of-chogokin-tamashii-nations','','','',''),
(46,'Batman Last Knight on Earth ARTFX DC UNIVERSE Kotobukiya',0,0,'batman-last-knight-on-earth-artfx-dc-universe-kotobukiya','','','',''),
(47,'Haikyu!! Second Season Kenma Kozume Nendoroid Orange Rouge',0,0,'haikyu-second-season-kenma-kozume-nendoroid-orange-rouge','','','',''),
(48,'Kimetsu no Yaiba Tanjiro Hinokami Kagura Figuarts Zero Tamashii Nations Bandai Spirits',0,0,'kimetsu-no-yaiba-tanjiro-hinokami-kagura-figuarts-zero-tamashii-nations-bandai-spirits','','','',''),
(49,'The Legend of Zelda: Skyward Sword Link Good Smile Company',0,0,'the-legend-of-zelda-skyward-sword-link-good-smile-company','','','',''),
(50,'The Legend of Zelda: Skyward Sword Link Figma Good Smile Company',0,0,'the-legend-of-zelda-skyward-sword-link-figma-good-smile-company','','','',''),
(51,'Naruto Shippuden Sasuke Uchiha Grandista Manga Dimensions Banpresto',0,0,'naruto-shippuden-sasuke-uchiha-grandista-manga-dimensions-banpresto','','','',''),
(52,'Spy x Family Anya Forger Pop Up Parade Good Smile Company',0,0,'spy-x-family-anya-forger-pop-up-parade-good-smile-company','','','','');

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
