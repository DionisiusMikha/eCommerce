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
  `IdBarang` int(11) NOT NULL,
  `NamaBarang` varchar(255) NOT NULL,
  `Harga` int(11) NOT NULL,
  `Stok` int(11) NOT NULL,
  `gambar` varchar(500) NOT NULL,
  `brand` varchar(500) NOT NULL,
  `seller` varchar(255) NOT NULL,
  `rating` varchar(5) NOT NULL,
  `Deskripsi` varchar(500) NOT NULL,
  PRIMARY KEY (`IdBarang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `barang` */

insert  into `barang`(`IdBarang`,`NamaBarang`,`Harga`,`Stok`,`gambar`,`brand`,`seller`,`rating`,`Deskripsi`) values 
(1,'sailor-moon-eternal-super-sailor-moon-ii-ver-a-q-glitter-glamours-banpresto',45956,122,'sailor-moon-eternal-super-sailor-moon-ii-ver-a-q-glitter-glamours-banpresto','Suruga-ya','','1','Merol muspi rolod tis tema rutetcesnoc gnicisipida tile. Eropmet mairepa tnuicsen muitnesearp atidepxe orebil silicaf mainev rutnuuqesnoc mauqsiuq? Eadnaiduper siroproc aguf tnuicsen eadnasucer saila murolod muspi mallu tis siitidnalb etneipas ouq atcid, silicaf sunim, tu euqmuc tse taecalp irutpecxe orev di. Satpulov isin tiredneherper, rorre sitaicipsrep apluc saitselom tua oitpo?esr ereh'),
(2,'bleach-ichigo-kurosaki-mub-tsume',55193,56,'bleach-ichigo-kurosaki-mub-tsume','Aniplex+','','1.5',''),
(3,'dc-multiverse-batman-dc-future-state-mcfarlane-toys',11434,4,'dc-multiverse-batman-dc-future-state-mcfarlane-toys','MelonBooks','','1.5',''),
(4,'dragon-ball-super-broly-full-power-sh-figuarts-bandai',27767,64,'dragon-ball-super-broly-full-power-sh-figuarts-bandai','Cdjapan','','1.5',''),
(5,'dragon-ball-super-gohan-ss-chousenshi-retsuden-banpresto',22286,17,'dragon-ball-super-gohan-ss-chousenshi-retsuden-banpresto','','','1',''),
(6,'final-fantasy-vii-advent-children-cloud-strife-fenrir-play-arts-kai-square-enix',75609,74,'final-fantasy-vii-advent-children-cloud-strife-fenrir-play-arts-kai-square-enix','','','2',''),
(7,'fortnite-victory-royale-ragsy-hasbro',29215,13,'fortnite-victory-royale-ragsy-hasbro','','','1',''),
(8,'infinity-saga-dlx-iron-man-mark-44-hulkbuster-marvel-threezero',90781,55,'infinity-saga-dlx-iron-man-mark-44-hulkbuster-marvel-threezero','','','0.5',''),
(9,'naruto-shippuden-gaara-gem-megahouse',49277,34,'naruto-shippuden-gaara-gem-megahouse','','','1.5',''),
(10,'naruto-shippuden-nara-shikamaru-vibration-stars-banpresto',89628,74,'naruto-shippuden-nara-shikamaru-vibration-stars-banpresto','','','0.5',''),
(11,'naruto-shippuden-naruto-uzumaki-vibration-stars-banpresto',76779,70,'naruto-shippuden-naruto-uzumaki-vibration-stars-banpresto','','','1.5',''),
(12,'one-piece-kozuki-oden-portrait-of-pirates-warriors-alliance-megahouse-',49894,87,'one-piece-kozuki-oden-portrait-of-pirates-warriors-alliance-megahouse-','','','1',''),
(13,'Original Character by MaJO neala～Red Rabbit～Kaitendoh',37703,43,'original-character-by-majo-nealared-rabbitkaitendoh','','','0.5',''),
(14,'Original Character by MaJO neala～Black Rabbit～Kaitendoh',13426,2,'original-character-by-majo-nealablack-rabbitkaitendoh','','','2.5',''),
(15,'Azur Lane Penelope Salty Maid Ver. WINGS inc.',39733,60,'azur-lane-penelope-salty-maid-ver-wings-inc','','','1',''),
(16,'Original Character by Natsuki Mibu Kasumi Creators Opinion BINDing',11844,82,'original-character-by-natsuki-mibu-kasumi-creators-opinion-binding','','','0.5',''),
(17,'Maitetsu Paulette Hinai Bikini Ver. Q-six',78304,5,'maitetsu-paulette-hinai-bikini-ver-q-six','','','1',''),
(18,'Tokyo Revengers Ken Ryuguji Ver.A Q Posket Banpresto',34401,78,'tokyo-revengers-ken-ryuguji-vera-q-posket-banpresto','','','1',''),
(19,'Jujutsu Kaisen Kento Nanami Banpresto',12124,88,'jujutsu-kaisen-kento-nanami-banpresto','','','1.5',''),
(20,'Original Character Alp Switch Q-six',70522,29,'original-character-alp-switch-q-six','','','1',''),
(21,'Original Character Neige Binding',19798,10,'original-character-neige-binding','','','0.5',''),
(22,'[Limited Production] Nendoroid Inumaki Toge - Jujutsu Kaisen',46693,61,'98709-limited-production-nendoroid-inumaki-toge-jujutsu-kaisen','','','0.5',''),
(23,'Shingeki no Kyojin Levi Ackerman The Final Season Ver. Nendoroid Good Smile Company',92226,22,'shingeki-no-kyojin-levi-ackerman-the-final-season-ver-nendoroid-good-smile-company','','','2.5',''),
(24,'My Hero Academia Izuku Midoriya Chronicle Super Master Stars Piece Chronicle Banpresto',70631,45,'my-hero-academia-izuku-midoriya-super-master-stars-piece-chronicle-banpresto','','','0.5',''),
(25,'Jujutsu Kaisen Sukuna QPosket Ver. A Banpresto',54043,18,'jujutsu-kaisen-sukuna-qposket-ver-a-banpresto','','','2.5',''),
(26,'Sailor Moon Eternal Princess Usagi Small Lady Serenity Ver.A Q Posket Banpresto',76924,12,'sailor-moon-eternal-princess-usagi-small-lady-serenity-vera-q-posket-banpresto','','','2',''),
(27,'BTS Tiny TAN MIC Drop Junk Kook Q Posket Banpresto',36269,80,'bts-tiny-tan-mic-drop-junk-kook-q-posket-banpresto','','','2.5',''),
(28,'BTS Tiny TAN MIC Drop V Q Posket Banpresto',17687,91,'bts-tiny-tan-mic-drop-v-q-posket-banpresto','','','1.5',''),
(29,'BTS Tiny TAN MIC Drop Jimin Q Posket Banpresto',65930,89,'bts-tiny-tan-mic-drop-jimin-q-posket-banpresto','','','2.5',''),
(30,'BTS Tiny TAN MIC Drop Hope Q Posket Banpresto',62326,1,'bts-tiny-tan-mic-drop-hope-q-posket-banpresto','','','1',''),
(31,'BTS Tiny TAN MIC Drop Suga Q Posket Banpresto',56182,98,'bts-tiny-tan-mic-drop-suga-q-posket-banpresto','','','1.5',''),
(32,'BTS Tiny TAN MIC Drop Jin Q Posket Banpresto',62043,31,'bts-tiny-tan-mic-drop-jin-q-posket-banpresto','','','2',''),
(33,'BTS Tiny TAN MIC Drop RM Q Posket Banpresto',46253,30,'bts-tiny-tan-mic-drop-rm-q-posket-banpresto','','','2.5',''),
(34,'Kuroko\'s Basketball Atsushi Murasakibara Q Posket Banpresto',29811,1,'kuroko-s-basketball-atsushi-murasakibara-q-posket-banpresto','','','1.5',''),
(35,'Dragon Ball Goku (Childhood) Match Makers Banpresto',43221,45,'dragon-ball-goku-childhood-match-makers-banpresto','','','2.5',''),
(36,'Dragon Ball Z Super Saiyan Vegeta Clearise Banpresto',91831,26,'dragon-ball-z-super-saiyan-vegeta-clearise-banpresto','','','2.5',''),
(37,'Naruto Shippuden Itachi Uchiha Vibration Stars II Banpresto',18665,54,'naruto-shippuden-itachi-uchiha-vibration-stars-ii-banpresto','','','1',''),
(38,'Summer Time Rendering Hizuru Minamikata Banpresto',63466,22,'summer-time-rendering-hizuru-minamikata-banpresto','','','1.5',''),
(39,'One Piece Yamato DXF The Grandline Series Wano Country Vol. 4 Banpresto',39564,90,'one-piece-yamato-dxf-the-grandline-series-wano-country-vol-4-banpresto','','','2.5',''),
(40,'Sailor Moon Eternal Princess Mercury Ver.A Q Posket Banpresto',48808,2,'sailor-moon-eternal-princess-mercury-vera-q-posket-banpresto','','','1',''),
(41,'Naruto Shippuden Naruto Uzumaki III Vibration Stars Banpresto',74610,1,'naruto-shippuden-naruto-uzumaki-iii-vibration-stars-banpresto','','','1.5',''),
(42,'My Hero Academia World Heroes Mission Shoto Todoroki The Amazing Heroes Banpresto',23543,40,'my-hero-academia-world-heroes-mission-shoto-todoroki-the-amazing-heroes-banpresto','','','2',''),
(43,'One Piece Dracule Mihawk DXF Special Banpresto',23376,73,'one-piece-vinsmoke-reiju-chronicle-glitter-glamours-banpresto','','','2.5',''),
(44,'One Piece Monkey D. Luffy Shukko Banpresto',85733,95,'one-piece-monkey-d-luffy-shukko-banpresto','','','1.5',''),
(45,'Mazinkaiser GX-75SP 20th Anniversary Ver. Soul of Chogokin Tamashii Nations',99643,9,'mazinkaiser-gx-75sp-20th-anniversary-ver-soul-of-chogokin-tamashii-nations','','','0.5',''),
(46,'Batman Last Knight on Earth ARTFX DC UNIVERSE Kotobukiya',84128,97,'batman-last-knight-on-earth-artfx-dc-universe-kotobukiya','','','1',''),
(47,'Haikyu!! Second Season Kenma Kozume Nendoroid Orange Rouge',95746,86,'haikyu-second-season-kenma-kozume-nendoroid-orange-rouge','','','2',''),
(48,'Kimetsu no Yaiba Tanjiro Hinokami Kagura Figuarts Zero Tamashii Nations Bandai Spirits',81078,67,'kimetsu-no-yaiba-tanjiro-hinokami-kagura-figuarts-zero-tamashii-nations-bandai-spirits','','','2',''),
(49,'The Legend of Zelda: Skyward Sword Link Good Smile Company',78911,60,'the-legend-of-zelda-skyward-sword-link-good-smile-company','','','0.5',''),
(50,'The Legend of Zelda: Skyward Sword Link Figma Good Smile Company',47732,33,'the-legend-of-zelda-skyward-sword-link-figma-good-smile-company','','','2.5',''),
(51,'Naruto Shippuden Sasuke Uchiha Grandista Manga Dimensions Banpresto',27834,34,'naruto-shippuden-sasuke-uchiha-grandista-manga-dimensions-banpresto','','','1.5',''),
(52,'Spy x Family Anya Forger Pop Up Parade Good Smile Company',35939,43,'spy-x-family-anya-forger-pop-up-parade-good-smile-company','','','2',''),
(53,'S.H. FIGUARTS BATTLE HOPPER KAMEN RIDER BLACK SUN',24473,94,'sh-figuarts-vice-lovekov-option-parts-set','','','2.5',''),
(54,'POP UP PARADE Tiz Arrior (Bravely Default)',21908,58,'enx37039_0_1668741086','','','0.5',''),
(55,'POP UP PARADE Nobeta (Little Witch Nobeta)',68710,69,'gsc94655_0_1668741010','','','1.5',''),
(56,'1/7 Dream Tech Azur Lane: Honolulu (Festival for Two)',85537,70,'wavdt-169_0_1668652221','','','1',''),
(57,'1/4 B-Style Azur Lane Vittorio Veneto: The Flower of La Spezia',34145,30,'fre51136_0_1668650440','','','1.5',''),
(58,'INFINITY STUDIO Elegant Beauties Series - Prince Lanling in Battle',33172,100,'iso92579_0_1668654630','','','2.5',''),
(59,'Cutie1 Chainsaw Man: Chainsaw Man',74211,17,'prs04212_0_1668558613','','','2',''),
(60,'Sengoku Busho Figure Collection 10 Body Set',55276,47,'plzsp-163_0_1668561033','','','2.5',''),
(61,'1/6 Azur Lane: Reno Biggest Little Cheerleader',97762,71,'goh91806_0_1668586210','','','1.5',''),
(62,'1/7 Soul Land: Xiao Wu: Lifelong Protection ver. Figure',60381,22,'mye92469_0_1668482569','','','2.5',''),
(63,'1/7 Shangri-La Frontier: Emul (Human) Figure',61264,37,'hls30006_0_1668482495','','','1.5',''),
(64,'Sailor Moon Eternal Q Posket Princess Neptune B',15266,50,'bnp2589298-b_0_1668648012','','','2',''),
(65,'POP UP PARADE Yang Xiao Long: Lucid Dream (RWBY: Ice Queendom)',79530,35,'gsc94638_0_1668482503','','','1.5',''),
(66,'1/7 THE IDOLM@STER Cinderella Girls Kanade Hayami Mystic Dawn Ver.',79147,74,'alt20699_0_1668558628','','','1.5',''),
(67,'Sailor Moon Eternal Q Posket Princess Neptune A',39409,94,'bnp2589298-a_0_1668648060','','','2',''),
(68,'POP UP PARADE Weiss Schnee: Nightmare Side (RWBY: Ice Queendom)',12850,35,'gsc94636_0_1668482563','','','1.5',''),
(69,'POP UP PARADE Blake Belladonna: Lucid Dream (RWBY: Ice Queendom)',60919,32,'gsc94637_0_1668482420','','','1',''),
(70,'POP UP PARADE Ruby Rose: Lucid Dream (RWBY: Ice Queendom)',89659,58,'gsc94635_0_1668482475','','','1',''),
(71,'Sailor Moon Eternal Q Posket Princess Uranus B',10887,88,'bnp2589297-b_0_1668648064','','','2',''),
(72,'Sailor Moon Eternal Q Posket Princess Uranus A',11229,67,'bnp2589297-a_0_1668648033','','','2',''),
(74,'1/32 WW.II German Tank Destroyer Jagdtiger Porsche Type',35225,85,'wltws55702_0_1668743422','','','',''),
(75,'[Bonus] Azur Lane JUUs Time Chibi Figure Le Malin(Provisional Pre-order)',12012,45,'FIGURE-145850','','','',''),
(76,'One Piece Nico Robin Glitter & Glamours Wano County Style Ver. B Banpresto',24026,134,'one-piece-nico-robin-glitter-glamours-wano-county-style-ver-b-banpresto.jpg','','','','One Piece Nico Robin Glitter & Glamours Wano County Style Ver. B Banpresto'),
(77,'Star Wars: The Mandalorian Axe Woves The Black Series Hasbro',45612,9,'1670661925122.jpeg','','','','Star Wars: The Mandalorian Axe Woves The Black Series Hasbro'),
(78,'Tokyo Revengers Manjiro Sano Vol.2 Banpresto',9000,14,'1670662015695.jpeg','','','','Tokyo Revengers Manjiro Sano Vol.2 Banpresto'),
(79,'Star Wars: Andor Imperial Officer Dark Times The Black Series Hasbro',28,14,'1670662091515.jpeg','','','','Star Wars: Andor Imperial Officer Dark Times The Black Series Hasbro'),
(80,'Star Wars: Andor Cassian Andor Aldhani Mission The Black Series Hasbro',28,19,'1670662160176.jpeg','','','','Star Wars: Andor Cassian Andor Aldhani Mission The Black Series Hasbro'),
(81,'Star Wars: Andor Shoretrooper The Black Series Hasbro',27,43,'1670662404497.jpeg','','','','Star Wars: Andor Shoretrooper The Black Series Hasbro'),
(82,'Star Wars: Andor Imperial Officer (Ferrix) The Black Series Hasbro',26,64,'1670662492558.jpeg','','','','Star Wars: Andor Imperial Officer (Ferrix) The Black Series Hasbro'),
(83,'Marvel Comics Ghost Rider Marvel Legends Series Hasbro',22,133,'1670662645033.jpeg','','','','Marvel Comics Ghost Rider Marvel Legends Series Hasbro'),
(84,'She-Hulk BAF Infinity Ultron Marvel Legends Series Hasbro',25,2,'1670662741783.jpeg','','','','She-Hulk BAF Infinity Ultron Marvel Legends Series Hasbro'),
(85,'Black Panther Everett Ross BAF Marvel Legends Series Hasbro',23,17,'1670662770669.jpeg','','','','Black Panther Everett Ross BAF Marvel Legends Series Hasbro'),
(86,'Bungo Stray Dogs Osamu Dazai Orange Rouge',45,121,'bungo-stray-dogs-osamu-dazai-orange-rouge.jpeg','','','','Bungo Stray Dogs Osamu Dazai Orange Rouge'),
(87,'Bungo Stray Dogs Osamu Dazai Orange Rouge',45,121,'bungo-stray-dogs-osamu-dazai-orange-rouge.jpeg','','','','Bungo Stray Dogs Osamu Dazai Orange Rouge'),
(88,'River Nendoroid Good Smile Arts Shanghai',44,14,'river-nendoroid-good-smile-arts-shanghai.jpeg','','','','River Nendoroid Good Smile Arts Shanghai'),
(90,'Horimiya Kyoko Hori Nendoroid Good Smile Company',227,14,'horimiya-kyoko-hori-nendoroid-good-smile-company.jpeg','','','','Horimiya Kyoko Hori Nendoroid Good Smile Company'),
(91,'NIJISANJI Lize Helesta Nendoroid Good Smile Company',2,9,'nijisanji-lize-helesta-nendoroid-good-smile-company (1).png','','','','NIJISANJI Lize Helesta Nendoroid Good Smile Company'),
(92,'The Rising of the Shield Hero Season 2 Raphtalia L Pop Up Parade Good Smile Company',17,60,'the-rising-of-the-shield-hero-season-2-raphtalia-l-pop-up-parade-good-smile-company.jpeg','','','','The Rising of the Shield Hero Season 2 Raphtalia L Pop Up Parade Good Smile Company'),
(93,'The Rising of the Shield Hero Season 2 Raphtalia L Pop Up Parade Good Smile Company',17,60,'the-rising-of-the-shield-hero-season-2-raphtalia-l-pop-up-parade-good-smile-company.jpeg','','','','The Rising of the Shield Hero Season 2 Raphtalia L Pop Up Parade Good Smile Company'),
(94,'The Rising of the Shield Hero Season 2 Raphtalia L Pop Up Parade Good Smile Company',17,60,'the-rising-of-the-shield-hero-season-2-raphtalia-l-pop-up-parade-good-smile-company.jpeg','','','','The Rising of the Shield Hero Season 2 Raphtalia L Pop Up Parade Good Smile Company'),
(95,'Azur Lane Pola Seaside Coincidence Ver. Alter',79,65,'azur-lane-pola-seaside-coincidence-ver-alter.jpeg','','','','Azur Lane Pola Seaside Coincidence Ver. Alter'),
(96,'Azur Lane Takao Beach Rhapsody Ver. Alter',29,79,'azur-lane-takao-beach-rhapsody-ver-alter.jpeg','','','','Azur Lane Takao Beach Rhapsody Ver. Alter'),
(97,'Azur Lane Atago Summer March Ver. Alter',786,80,'azur-lane-atago-summer-march-ver-alter.jpeg','','','','Azur Lane Atago Summer March Ver. Alter'),
(98,'Marvel The Infinity Saga Black Panther DLX Threezero',91,80,'marvel-the-infinity-saga-black-panther-dlx-threezero.jpeg','','','','Marvel The Infinity Saga Black Panther DLX Threezero'),
(99,'Chainsaw Man Makima Taito',98,39,'chainsaw-man-makima-taito.jpeg','','','','Chainsaw Man Makima Taito'),
(100,'Senren Banka Yoshino Tomotake AliceGlint',55,43,'senren-banka-yoshino-tomotake-aliceglint.jpeg','','','','Senren Banka Yoshino Tomotake AliceGlint'),
(101,'Sword Art Online Asuna PRISMA WING Prime 1 Studio',57,68,'sword-art-online-asuna-prisma-wing-prime-1-studio.jpeg','','','','Sword Art Online Asuna PRISMA WING Prime 1 Studio'),
(102,'Kimetsu no Yaiba Kagaya Ubuyashiki Figuarts Mini Tamashii Nations',83,89,'kimetsu-no-yaiba-kagaya-ubuyashiki-figuarts-mini-tamashii-nations.jpeg','','','','Kimetsu no Yaiba Kagaya Ubuyashiki Figuarts Mini Tamashii Nations'),
(103,'Kimetsu no Yaiba Muzan Kibutsuji Figuarts Mini Tamashii Nations',90,34,'kimetsu-no-yaiba-muzan-kibutsuji-figuarts-mini-tamashii-nations.jpeg','','','','Kimetsu no Yaiba Muzan Kibutsuji Figuarts Mini Tamashii Nations'),
(104,'Mobile Suit Gundam 0083: STARDUST MEMORY RX-78GP01Fb GUNDAM FULL BURNERN Gundam Universe Bandai Spirits',82,98,'mobile-suit-gundam-0083-stardust-memory-rx-78gp01fb-gundam-full-burnern-gundam-universe-bandai-spirits.jpeg','','','','Mobile Suit Gundam 0083: STARDUST MEMORY RX-78GP01Fb GUNDAM FULL BURNERN Gundam Universe Bandai Spirits'),
(105,'Mobile Suit Gundam 00 GN-0000+GNR-010 00 RAISER Gundam Universe Bandai Spirits',9,87,'mobile-suit-gundam-00-gn-0000gnr-010-00-raiser-gundam-universe-bandai-spirits.jpeg','','','','Mobile Suit Gundam 00 GN-0000+GNR-010 00 RAISER Gundam Universe Bandai Spirits'),
(106,'Digimon Adventure Dukemon / Gallantmon: Crimsonmode NXEDGE STYLE Tamashii Nations Bandai Spirits',3,92,'digimon-adventure-dukemon-gallantmon-crimsonmode-nxedge-style-tamashii-nations-bandai-spirits.jpeg','','','','Digimon Adventure Dukemon / Gallantmon: Crimsonmode NXEDGE STYLE Tamashii Nations Bandai Spirits'),
(107,'Digimon Adventure Beelzemon: Blastmode NXEDGE STYLE Tamashii Nations Bandai Spirits',83,40,'digimon-adventure-beelzemon-blastmode-nxedge-style-tamashii-nations-bandai-spirits.jpeg','','','','Digimon Adventure Beelzemon: Blastmode NXEDGE STYLE Tamashii Nations Bandai Spirits'),
(108,'Sailor Moon Princess Serenity Figuarts Mini Bandai',13,9,'sailor-moon-princess-serenity-figuarts-mini-bandai.jpeg','','','','Sailor Moon Princess Serenity Figuarts Mini Bandai'),
(109,'Sailor Moon Prince Endymion Figuarts Mini Bandai',97,24,'sailor-moon-prince-endymion-figuarts-mini-bandai.jpeg','','','','Sailor Moon Prince Endymion Figuarts Mini Bandai'),
(110,'EDENS ZERO Homura Kougetsu Bunny Ver. Freeing',79,47,'edens-zero-homura-kougetsu-bunny-ver-freeing.jpeg','','','','EDENS ZERO Homura Kougetsu Bunny Ver. Freeing'),
(111,'Chainsaw Man Kobeni Nendoroid Good Smile Company',52,27,'chainsaw-man-kobeni-nendoroid-good-smile-company.jpeg','','','','Chainsaw Man Kobeni Nendoroid Good Smile Company'),
(112,'Busou Shinki TYPE EVIL STRARF Megami Device Plastic Model Kit Kotobukiya',23,51,'busou-shinki-type-evil-strarf-megami-device-plastic-model-kit-kotobukiya.jpeg','','','','Busou Shinki TYPE EVIL STRARF Megami Device Plastic Model Kit Kotobukiya'),
(113,'To Love-Ru Darkness Yui Kotegawa Nurse Cos Union Creative',41,19,'to-love-ru-darkness-yui-kotegawa-nurse-cos-union-creative.jpeg','','','','To Love-Ru Darkness Yui Kotegawa Nurse Cos Union Creative'),
(114,'Girls Frontline StG-940 Union Creative',14,44,'girls-frontline-stg-940-union-creative.jpeg','','','','Girls Frontline StG-940 Union Creative'),
(115,'Chainsaw Man Power Cutie1 Prime 1 Studio',55,23,'chainsaw-man-power-cutie1-prime-1-studio.jpeg','','','','Chainsaw Man Power Cutie1 Prime 1 Studio'),
(116,'Venom: Let There Be Carnage Carnage S.H. Figuarts Tamashii Nations Bandai Spirits',24,28,'venom-let-there-be-carnage-carnage-sh-figuarts-tamashii-nations-bandai-spirits.jpeg','','','','Venom: Let There Be Carnage Carnage S.H. Figuarts Tamashii Nations Bandai Spirits'),
(117,'Gamera 3: Revenge of Iris Gamera (1999) Kyoto Battle Ver. S.H. MonsterArts Tamashii Nations',96,69,'gamera-3-revenge-of-iris-gamera-1999-kyoto-battle-ver-sh-monsterarts-tamashii-nations.jpeg','','','','Gamera 3: Revenge of Iris Gamera (1999) Kyoto Battle Ver. S.H. MonsterArts Tamashii Nations'),
(118,'Saekano Utaha Kasumigaoka Aqua Float Girls Ver. Taito',82,68,'saekano-utaha-kasumigaoka-aqua-float-girls-ver-taito.jpeg','','','','Saekano Utaha Kasumigaoka Aqua Float Girls Ver. Taito'),
(119,'Vocaloid Hatsune Miku Wonderland Puss in Boots Ver. Taito',76,26,'vocaloid-hatsune-miku-wonderland-puss-in-boots-ver-taito.jpeg','','','','Vocaloid Hatsune Miku Wonderland Puss in Boots Ver. Taito'),
(120,'Chainsaw Man Power Taito',35,63,'chainsaw-man-power-taito.jpeg','','','','Chainsaw Man Power Taito'),
(121,'Ultraman ULTRAMAN SUIT TARO -the Animation- S.H.Figuarts Bandai Spirits',30,66,'ultraman-ultraman-suit-taro-the-animation-shfiguarts-bandai-spirits.jpeg','','','','Ultraman ULTRAMAN SUIT TARO -the Animation- S.H.Figuarts Bandai Spirits'),
(122,'Macross Movie: Absolut Live YF-29 Durandal DX Chogokin Bandai Spirits',64,64,'macross-movie-absolut-live-yf-29-durandal-dx-chogokin-bandai-spirits.jpeg','','','','Macross Movie: Absolut Live YF-29 Durandal DX Chogokin Bandai Spirits'),
(123,'Jujutsu Kaisen 0: The Movie Satoru Gojo S.H. Figuarts Bandai Spirits',84,6,'jujutsu-kaisen-0-the-movie-satoru-gojo-sh-figuarts-bandai-spirits.jpeg','','','','Jujutsu Kaisen 0: The Movie Satoru Gojo S.H. Figuarts Bandai Spirits'),
(124,'Godzilla Final Wars Monster-X S.H. MonsterArts Tamashii Nations',83,32,'godzilla-final-wars-monster-x-sh-monsterarts-tamashii-nations.jpeg','','','','Godzilla Final Wars Monster-X S.H. MonsterArts Tamashii Nations'),
(125,'Zatch Bell! Red Spell Book Proplica Tamashii Nations Bandai',50,62,'zatch-bell-red-spell-book-proplica-tamashii-nations-bandai.jpeg','','','','Zatch Bell! Red Spell Book Proplica Tamashii Nations Bandai'),
(126,'Ultraman Z Original S.H.Figuarts Tamashii Nations Bandai Spirits',95,84,'ultraman-z-original-shfiguarts-tamashii-nations-bandai-spirits.jpeg','','','','Ultraman Z Original S.H.Figuarts Tamashii Nations Bandai Spirits'),
(127,'Ultraman Ginga S.H.Figuarts Tamashii Nations Bandai Spirits',1,5,'ultraman-ginga-shfiguarts-tamashii-nations-bandai-spirits.jpeg','','','','Ultraman Ginga S.H.Figuarts Tamashii Nations Bandai Spirits'),
(128,'Ultraman Gomora S.H.Figuarts Tamashii Nations Bandai Spirits',44,43,'ultraman-gomora-shfiguarts-tamashii-nations-bandai-spirits.jpeg','','','','Ultraman Gomora S.H.Figuarts Tamashii Nations Bandai Spirits'),
(129,'Saint Seiya Andromeda Shun Final Bronce Cloth Revival Saint Myth Cloth Ex Tamashii Nations Bandai',39,52,'saint-seiya-andromeda-shun-final-bronce-cloth-revival-saint-myth-cloth-ex-tamashii-nations-bandai.jpeg','','','','Saint Seiya Andromeda Shun Final Bronce Cloth Revival Saint Myth Cloth Ex Tamashii Nations Bandai'),
(130,'Chainsaw Man Chainsaw Man S.H. Figuarts Tamashii Nations Bandai Spirits',43,24,'chainsaw-man-chainsaw-man-sh-figuarts-tamashii-nations-bandai-spirits.jpeg','','','','Chainsaw Man Chainsaw Man S.H. Figuarts Tamashii Nations Bandai Spirits'),
(131,'Dragon Ball Super Super Hero Pan S.H. Figuarts Bandai',21,87,'dragon-ball-super-super-hero-pan-sh-figuarts-bandai.jpeg','','','','Dragon Ball Super Super Hero Pan S.H. Figuarts Bandai'),
(132,'Ultra Seven Alien Metron S.H.Figuarts Tamashii Nations Bandai Spirits',12,40,'ultra-seven-alien-metron-shfiguarts-tamashii-nations-bandai-spirits.jpeg','','','','Ultra Seven Alien Metron S.H.Figuarts Tamashii Nations Bandai Spirits'),
(133,'Godzilla Resurgence Godzilla (2016) 4th Form Night Battle Ver. S.H. MonsterArts Tamashii Nations',78,74,'godzilla-resurgence-godzilla-2016-4th-form-night-battle-ver-sh-monsterarts-tamashii-nations.jpeg','','','','Godzilla Resurgence Godzilla (2016) 4th Form Night Battle Ver. S.H. MonsterArts Tamashii Nations'),
(134,'Mobile Suit Gundam: The Witch from Mercury Suletta Mercury S.H. Figuarts Tamashii Nations Bandai Spirits',6,96,'mobile-suit-gundam-the-witch-from-mercury-suletta-mercury-sh-figuarts-tamashii-nations-bandai-spirits.jpeg','','','','Mobile Suit Gundam: The Witch from Mercury Suletta Mercury S.H. Figuarts Tamashii Nations Bandai Spirits'),
(135,'Spy x Family Anya Forger & Bond Forger -Mission Complete!- Figuarts Zero Bandai Spirits',42,99,'spy-x-family-anya-forger-bond-forger-mission-complete-figuarts-zero-bandai-spirits.jpeg','','','','Spy x Family Anya Forger & Bond Forger -Mission Complete!- Figuarts Zero Bandai Spirits'),
(136,'Digimon Adventure Angewomon S.H. Figuarts Tamashii Nations Bandai',20,8,'digimon-adventure-angewomon-sh-figuarts-tamashii-nations-bandai.jpeg','','','','Digimon Adventure Angewomon S.H. Figuarts Tamashii Nations Bandai'),
(137,'Sailor Moon Usagi & Luna Antique Style Ichibansho Bandai',4,98,'sailor-moon-usagi-luna-antique-style-ichibansho-bandai.jpeg','','','','Sailor Moon Usagi & Luna Antique Style Ichibansho Bandai'),
(138,'Yu-Gi-Oh! Blue-Eyes White Dragon Figure Rise Amplified Bandai Hobby',44,96,'yu-gi-oh-blue-eyes-white-dragon-figure-rise-amplified-bandai-hobby.jpeg','','','','Yu-Gi-Oh! Blue-Eyes White Dragon Figure Rise Amplified Bandai Hobby'),
(139,'Jujutsu Kaisen Sukuna S.H. Figuarts Bandai Spirits',35,36,'jujutsu-kaisen-sukuna-sh-figuarts-bandai-spirits.jpeg','','','','Jujutsu Kaisen Sukuna S.H. Figuarts Bandai Spirits'),
(140,'Dragon Ball Z Super Saiyan Vegeta -Awakening Super Saiyan Blood- S.H. Figuarts Tamashii Nations Bandai',79,26,'dragon-ball-z-super-saiyan-vegeta-awakening-super-saiyan-blood-sh-figuarts-tamashii-nations-bandai.jpeg','','','','Dragon Ball Z Super Saiyan Vegeta -Awakening Super Saiyan Blood- S.H. Figuarts Tamashii Nations Bandai'),
(141,'Saint Seiya Cancer Deathmask Revival Saint Myth Cloth Ex Tamashii Nations Bandai',97,77,'saint-seiya-cancer-deathmask-revival-saint-myth-cloth-ex-tamashii-nations-bandai.jpeg','','','','Saint Seiya Cancer Deathmask Revival Saint Myth Cloth Ex Tamashii Nations Bandai'),
(142,'Dragon Ball Z Frieza & Frieza Pod S.H. Figuarts Tamashii Nations Bandai',81,88,'dragon-ball-z-frieza-frieza-pod-sh-figuarts-tamashii-nations-bandai.jpeg','','','','Dragon Ball Z Frieza & Frieza Pod S.H. Figuarts Tamashii Nations Bandai'),
(143,'Dragon Ball Z Goku A Saiyan Raised On Earth S.H. Figuarts Tamashii Nations Bandai',30,22,'dragon-ball-z-goku-a-saiyan-raised-on-earth-sh-figuarts-tamashii-nations-bandai.jpeg','','','','Dragon Ball Z Goku A Saiyan Raised On Earth S.H. Figuarts Tamashii Nations Bandai'),
(144,'Dragon Ball Super Goku SSGSS S.H. Figuarts Tamashii Nations Bandai',99,38,'dragon-ball-super-goku-ssgss-sh-figuarts-tamashii-nations-bandai.jpeg','','','','Dragon Ball Super Goku SSGSS S.H. Figuarts Tamashii Nations Bandai'),
(145,'Godzilla x Mechagodzilla GX-103 MFS-3 Type 3 Kiryu Ver. Soul of Chogokin Tamashii Nations Bandai Spirits',14,7,'godzilla-x-mechagodzilla-gx-103-mfs-3-type-3-kiryu-ver-soul-of-chogokin-tamashii-nations-bandai-spirits.jpeg','','','','Godzilla x Mechagodzilla GX-103 MFS-3 Type 3 Kiryu Ver. Soul of Chogokin Tamashii Nations Bandai Spirits'),
(146,'Saint Seiya Polaris Hilda -Odin\'s Ground Agent- Myth Cloth Tamashii Nations Bandai',15,63,'saint-seiya-centaurus-babel-myth-cloth-tamashii-nations-bandai.jpeg','','','','Saint Seiya Polaris Hilda -Odin\'s Ground Agent- Myth Cloth Tamashii Nations Bandai'),
(147,'Persona 5 Royal Morgana HELLO! GOOD SMILE Good Smile Company',11,15,'persona-5-royal-morgana-hello-good-smile-good-smile-company.jpeg','','','','Persona 5 Royal Morgana HELLO! GOOD SMILE Good Smile Company'),
(148,'Persona 5 Royal Panther HELLO! GOOD SMILE Good Smile Company',21,89,'persona-5-royal-panther-hello-good-smile-good-smile-company.jpeg','','','','Persona 5 Royal Panther HELLO! GOOD SMILE Good Smile Company'),
(149,'Azur Lane Chen Hai Vestibule of Wonders Ver. AniGift',56,48,'azur-lane-chen-hai-vestibule-of-wonders-ver-anigift.jpeg','','','','Azur Lane Chen Hai Vestibule of Wonders Ver. AniGift'),
(150,'Monster Hunter Teostra CFB Creators Model Capcom',64,98,'monster-hunter-teostra-cfb-creators-model-capcom.jpeg','','','','Monster Hunter Teostra CFB Creators Model Capcom'),
(151,'Monster Hunter Kushala Daora CFB Creators Model Capcom',93,76,'monster-hunter-kushala-daora-cfb-creators-model-capcom.jpeg','','','','Monster Hunter Kushala Daora CFB Creators Model Capcom'),
(152,'Persona 5 Royal Joker HELLO! GOOD SMILE Good Smile Company',59,80,'persona-5-royal-joker-hello-good-smile-good-smile-company.jpeg','','','','Persona 5 Royal Joker HELLO! GOOD SMILE Good Smile Company'),
(153,'The Battle Cats Cat Nendoroid Good Smile Company',67,60,'the-battle-cats-cat-nendoroid-good-smile-company.jpeg','','','','The Battle Cats Cat Nendoroid Good Smile Company'),
(154,'Fire Emblem Veronica Intelligent Systems',88,98,'fire-emblem-veronica-intelligent-systems.jpeg','','','','Fire Emblem Veronica Intelligent Systems'),
(155,'Samurai Shodown VI Rasetsumaru Storm Collectibles',44,14,'samurai-shodown-vi-rasetsumaru-storm-collectibles.jpeg','','','','Samurai Shodown VI Rasetsumaru Storm Collectibles'),
(156,'Pokemon Replica Cherish Ball Wand Company',39,45,'pokemon-replica-cherish-ball-wand-company.jpeg','','','','Pokemon Replica Cherish Ball Wand Company'),
(157,'Azur Lane Baltimore After-School Ace Ver. Alter',35,87,'azur-lane-baltimore-after-school-ace-ver-alter.jpeg','','','','Azur Lane Baltimore After-School Ace Ver. Alter'),
(158,'Demon’s Souls Fluted Armor Figma Good Smile Company',45,56,'demons-souls-fluted-armor-figma-good-smile-company.jpeg','','','','Demon’s Souls Fluted Armor Figma Good Smile Company'),
(159,'Danganronpa 1.2 Reload Chihiro Fujisaki Pop Up Parade Good Smile Company',89,24,'danganronpa-12-reload-chihiro-fujisaki-pop-up-parade-good-smile-company.jpeg','','','','Danganronpa 1.2 Reload Chihiro Fujisaki Pop Up Parade Good Smile Company'),
(160,'Danganronpa 1.2 Reload Junko Enoshima Pop Up Parade Good Smile Company',8,87,'danganronpa-12-reload-junko-enoshima-pop-up-parade-good-smile-company.jpeg','','','','Danganronpa 1.2 Reload Junko Enoshima Pop Up Parade Good Smile Company'),
(161,'Azur Lane New Jersey Exhilarating Steps! Nendoroid Good Smile Arts Shanghai',33,1,'azur-lane-new-jersey-exhilarating-steps-nendoroid-good-smile-arts-shanghai.jpeg','','','','Azur Lane New Jersey Exhilarating Steps! Nendoroid Good Smile Arts Shanghai'),
(162,'Azur Lane U-110 A Cute, Sharky Reverie RIBOSE',8,71,'azur-lane-u-110-a-cute-sharky-reverie-ribose.jpeg','','','','Azur Lane U-110 A Cute, Sharky Reverie RIBOSE'),
(163,'Kirby Waddle Dee Mine Play In The Flower C Fluffy Puffy Banpresto',9,77,'kirby-waddle-dee-mine-play-in-the-flower-c-fluffy-puffy-banpresto.jpeg','','','','Kirby Waddle Dee Mine Play In The Flower C Fluffy Puffy Banpresto'),
(164,'Kirby Mine Play In The Flower B Fluffy Puffy Banpresto',35,19,'kirby-mine-play-in-the-flower-b-fluffy-puffy-banpresto.jpeg','','','','Kirby Mine Play In The Flower B Fluffy Puffy Banpresto'),
(165,'Kirby Mine Play In The Flower A Fluffy Puffy Banpresto',98,81,'kirby-mine-play-in-the-flower-a-fluffy-puffy-banpresto.jpeg','','','','Kirby Mine Play In The Flower A Fluffy Puffy Banpresto'),
(166,'Blue Archive Shirom Iori Swimsuit Ver. Wings Inc.',75,68,'blue-archive-shirom-iori-swimsuit-ver-wings-inc.jpeg','','','','Blue Archive Shirom Iori Swimsuit Ver. Wings Inc.'),
(167,'Girls\' Frontline Am RFB Wings Inc.',89,45,'girls-frontline-am-rfb-wings-inc.jpeg','','','','Girls\' Frontline Am RFB Wings Inc.'),
(168,'Persona 5 The Royal Fox (Yusuke Kitagawa) Lucrea Megahouse',38,6,'persona-5-the-royal-fox-yusuke-kitagawa-lucrea-megahouse.jpeg','','','','Persona 5 The Royal Fox (Yusuke Kitagawa) Lucrea Megahouse'),
(169,'Azur Lane Unicorn Light Equipment ver. Wanderer',52,66,'azur-lane-unicorn-light-equipment-ver-wanderer.jpeg','','','','Azur Lane Unicorn Light Equipment ver. Wanderer'),
(170,'Azur Lane Unicorn Wanderer',49,24,'azur-lane-unicorn-wanderer.jpeg','','','','Azur Lane Unicorn Wanderer'),
(171,'Honkai Impact 3rd Elysia Pink Maid APEX',30,22,'honkai-impact-3rd-elysia-pink-maid-apex.jpeg','','','','Honkai Impact 3rd Elysia Pink Maid APEX'),
(172,'Girls\' Frontline R93 Holiday Lucky Star Ver. Phat!',47,73,'girls-frontline-r93-holiday-lucky-star-ver-phat.jpeg','','','','Girls\' Frontline R93 Holiday Lucky Star Ver. Phat!'),
(173,'Azur Lane Agir Light Equipment Ver. ACTOYS',36,86,'azur-lane-agir-light-equipment-ver-actoys.jpeg','','','','Azur Lane Agir Light Equipment Ver. ACTOYS'),
(174,'Neural Cloud Persicaria Nendoroid Good Smile Arts Shanghai',41,29,'neural-cloud-persicaria-nendoroid-good-smile-arts-shanghai.jpeg','','','','Neural Cloud Persicaria Nendoroid Good Smile Arts Shanghai'),
(175,'King of Fighters \'98: Ultimate Match Mai Shiranui Storm Collectibles',47,76,'king-of-fighters-98-ultimate-match-mai-shiranui-storm-collectibles.jpeg','','','','King of Fighters \'98: Ultimate Match Mai Shiranui Storm Collectibles'),
(176,'Azur Lane Prinz Eugen Alter',29,99,'azur-lane-prinz-eugen-alter.jpeg','','','','Azur Lane Prinz Eugen Alter'),
(177,'Azur Lane Unicorn Nendoroid Good Smile Arts Shanghai',73,28,'azur-lane-unicorn-nendoroid-good-smile-arts-shanghai.jpeg','','','','Azur Lane Unicorn Nendoroid Good Smile Arts Shanghai'),
(178,'Atelier Ryza: Ever Darkness & the Secret Hideout Ryza Alter',35,36,'atelier-ryza-ever-darkness-the-secret-hideout-ryza-alter-.jpeg','','','','Atelier Ryza: Ever Darkness & the Secret Hideout Ryza Alter'),
(179,'Fate/Grand Order Foreigner/Abigail Williams (Summer) Aniplex',51,64,'fategrand-order-foreignerabigail-williams-summer-aniplex.jpeg','','','','Fate/Grand Order Foreigner/Abigail Williams (Summer) Aniplex'),
(180,'Arknights Amiya DX [Promotion Ver.] Nendoroid Good Smile Company',57,85,'arknights-amiya-dx-promotion-ver-nendoroid-good-smile-company.jpeg','','','','Arknights Amiya DX [Promotion Ver.] Nendoroid Good Smile Company'),
(181,'Pokemon Replica Quick Ball Wand Company',91,2,'pokemon-replica-quick-ball-wand-company.jpeg','','','','Pokemon Replica Quick Ball Wand Company'),
(182,'Azur Lane Azuma Soft Voice of Spring Light Equipment Ver. Alter',52,84,'azur-lane-azuma-soft-voice-of-spring-light-equipment-ver-alter.jpeg','','','','Azur Lane Azuma Soft Voice of Spring Light Equipment Ver. Alter'),
(183,'Azur Lane Ayanami Nendoroid Good Smile Arts Shanghai',65,17,'azur-lane-ayanami-nendoroid-good-smile-arts-shanghai.jpeg','','','','Azur Lane Ayanami Nendoroid Good Smile Arts Shanghai'),
(184,'Azur Lane Ayanami Nendoroid DX Good Smile Arts Shanghai',92,55,'azur-lane-ayanami-nendoroid-dx-good-smile-arts-shanghai.jpeg','','','','Azur Lane Ayanami Nendoroid DX Good Smile Arts Shanghai'),
(185,'Arknights Ch\'en Ageless Afterglow Ver. APEX',94,99,'arknights-ch-en-ageless-afterglow-ver-apex.jpeg','','','','Arknights Ch\'en Ageless Afterglow Ver. APEX'),
(186,'Seikatsu Shuukan The Animation Ayaka Hinamori by Michikingu PINK CAT',67,5,'seikatsu-shuukan-the-animation-ayaka-hinamori-by-michikingu-pink-cat.jpeg','','','','Seikatsu Shuukan The Animation Ayaka Hinamori by Michikingu PINK CAT'),
(187,'Evangelion Rei Ayanami [Tentative Name] Millennials Illust Ver. EVA GLOBAL x Alter',24,32,'evangelion-rei-ayanami-tentative-name-millennials-illust-ver-eva-global-x-alter.jpeg','','','','Evangelion Rei Ayanami [Tentative Name] Millennials Illust Ver. EVA GLOBAL x Alter'),
(188,'Fate/Grand Order Archer/Gilgamesh Alter',64,45,'fategrand-order-archergilgamesh-alter.jpeg','','','','Fate/Grand Order Archer/Gilgamesh Alter'),
(189,'Fate/Grand Order Berserker/Mysterious Heroine X (Alter) Figma Max Factory',29,66,'fategrand-order-berserkermysterious-heroine-x-alter-figma-max-factory.jpeg','','','','Fate/Grand Order Berserker/Mysterious Heroine X (Alter) Figma Max Factory'),
(190,'Azur Lane St. Louis Light Equipment Ver. Alter',70,48,'azur-lane-st-louis-light-equipment-ver-alter.jpeg','','','','Azur Lane St. Louis Light Equipment Ver. Alter'),
(191,'Azur Lane St. Louis Alter',2,80,'azur-lane-st-louis-alter.jpeg','','','','Azur Lane St. Louis Alter'),
(192,'Azur Lane Azuma Soft Voice of Spring Ver. Alter',96,68,'azur-lane-azuma-soft-voice-of-spring-ver-alter.jpeg','','','','Azur Lane Azuma Soft Voice of Spring Ver. Alter'),
(193,'Azur Lane Graf Zeppelin Beachside Urd Ver. Alter',59,76,'azur-lane-graf-zeppelin-beachside-urd-ver-alter.jpeg','','','','Azur Lane Graf Zeppelin Beachside Urd Ver. Alter'),
(194,'Fate Grand Order Caster Murasaki Shikibu Alter',32,47,'fate-grand-order-caster-murasaki-shikibu-alter.jpeg','','','','Fate Grand Order Caster Murasaki Shikibu Alter'),
(195,'Saekano How to Raise a Boring Girlfriend Megumi Kato Alter',33,36,'saekano-how-to-raise-a-boring-girlfriend-megumi-kato-alter.jpeg','','','','Saekano How to Raise a Boring Girlfriend Megumi Kato Alter'),
(196,'Azur Lane Baltimore Light Equipment Ver. Alter',56,34,'azur-lane-baltimore-light-equipment-ver-alter.jpeg','','','','Azur Lane Baltimore Light Equipment Ver. Alter'),
(197,'Azur Lane Atago Weirdly Beautiful Max Speed Ver. Alter',99,27,'azur-lane-atago-weirdly-beautiful-max-speed-ver-alter.jpeg','','','','Azur Lane Atago Weirdly Beautiful Max Speed Ver. Alter'),
(198,'Fuuki Midashichaimasu ka...? Kanon Misaki illustration by Cut Daiki Kougyou',28,51,'fuuki-midashichaimasu-ka-kanon-misaki-illustration-by-cut-daiki-kougyou.jpeg','Suruga-ya','','','Fuuki Midashichaimasu ka...? Kanon Misaki illustration by Cut Daiki Kougyou'),
(199,'Original Character Miyan NEONMAX',38,90,'original-character-miyan-neonmax.jpeg','Suruga-ya','','','Original Character Miyan NEONMAX'),
(200,'Original Character by Warabino Festival Ayaka Sagara Barefoot Bunny Ver. Creators Opinion BINDing',54,64,'original-character-by-warabino-festival-ayaka-sagara-barefoot-bunny-ver-creators-opinion-binding.jpeg','Suruga-ya','','','Original Character by Warabino Festival Ayaka Sagara Barefoot Bunny Ver. Creators Opinion BINDing');

/*Table structure for table `cart` */

DROP TABLE IF EXISTS `cart`;

CREATE TABLE `cart` (
  `IdCart` int(11) NOT NULL AUTO_INCREMENT,
  `c_username` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `c_harga` int(11) NOT NULL,
  `c_IdBarang` int(11) NOT NULL,
  PRIMARY KEY (`IdCart`,`c_username`,`c_IdBarang`),
  KEY `IdCart` (`c_IdBarang`)
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=utf8mb4;

/*Data for the table `cart` */

insert  into `cart`(`IdCart`,`c_username`,`quantity`,`c_harga`,`c_IdBarang`) values 
(1,'mikha_ion',1,89628,10),
(2,'check1',18,63466,38),
(2,'check2',19,37703,13);

/*Table structure for table `sold` */

DROP TABLE IF EXISTS `sold`;

CREATE TABLE `sold` (
  `s_username` varchar(20) NOT NULL,
  `s_date` date NOT NULL,
  `inv_num` varchar(15) NOT NULL,
  `s_IdBarang` int(10) NOT NULL,
  `qty` int(10) NOT NULL,
  `total` int(10) NOT NULL,
  PRIMARY KEY (`s_username`,`inv_num`,`s_IdBarang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `sold` */

insert  into `sold`(`s_username`,`s_date`,`inv_num`,`s_IdBarang`,`qty`,`total`) values 
('check1','2022-12-18','INV20221218004',38,12,761592),
('check1','2022-12-18','INV20221218005',38,12,761592),
('check1','2022-12-18','INV20221218006',38,12,761592),
('check1','2022-12-18','INV20221218007',38,12,761592),
('check1','2022-12-18','INV20221218008',38,12,761592),
('check1','2022-12-18','INV20221218009',38,12,761592),
('check1','2022-12-18','INV20221218010',38,12,761592),
('check1','2022-12-18','INV20221218011',38,12,761592),
('check1','2022-12-18','INV20221218012',38,12,761592),
('check2','2022-05-12','INV20221217001',123,1,84),
('check2','2022-12-17','INV20221217002',9,1,49277),
('check2','2022-12-17','INV20221217003',3,2,98477),
('check2','2022-12-17','INV20221217003',6,1,98477),
('mikha_ion','2022-12-19','INV20221219013',10,1,89628),
('mikha_ion','2022-12-19','INV20221219014',10,1,89628),
('mikha_ion','2022-12-19','INV20221219015',10,1,89628),
('mikha_ion','2022-12-19','INV20221219016',10,1,89628),
('mikha_ion','2022-12-19','INV20221219017',10,1,89628);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `username` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` char(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `token` varchar(40) NOT NULL,
  `saldo` int(11) NOT NULL,
  `status` varchar(1) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `users` */

insert  into `users`(`username`,`email`,`password`,`full_name`,`token`,`saldo`,`status`) values 
('check1','Check1@Check1.com','$2y$10$zfzVA7c0jb287LgBWa0mZebNT/SO1qMAmAIS.RPlquIir7K7C9fIK','check1','a6e950b96dfd53a1dbbad5d3635a55b1',99999999,'1'),
('check2','Check2@Check2.com','$2y$10$a/.HGOvC2H8mrauMLXQ.seyOQJvPRuFMzeEOtlBi2HooljnDnPyhq','check2','f7d170a5977357a8bbd314ccd791cd9b',99999999,'1'),
('check3','check3@check3.com','$2y$10$1ubnU4m.60wEml7WqeeXNOT3STHKGRbDLhGaepZBONgv.CEM1NRmi','check3','c8bcd9df3f8f0943da8b2dceac601d94',99999999,'1'),
('Mikha_ion','vitoutama82@gmail.com','$2y$10$qq1R4H8OpdHAnQn2DUkfGOFraCxrap53XJJ1PI1ZCnlf7kCVZO2li','Dionisius MIkha','150ce2fd696a406be9c8694d5de1cc96',99999999,'1');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
