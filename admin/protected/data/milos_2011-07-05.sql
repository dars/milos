# ************************************************************
# Sequel Pro SQL dump
# Version 3348
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.1.44)
# Database: milos
# Generation Time: 2011-07-04 19:58:50 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table boards
# ------------------------------------------------------------

DROP TABLE IF EXISTS `boards`;

CREATE TABLE `boards` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `tips` text,
  `content` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `taxonomy_id` int(11) DEFAULT NULL,
  `publish` int(1) NOT NULL DEFAULT '1',
  `weight` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;



# Dump of table content
# ------------------------------------------------------------

DROP TABLE IF EXISTS `content`;

CREATE TABLE `content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) DEFAULT NULL,
  `tips` text,
  `content` text,
  `service` text,
  `taxonomy_id` int(1) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `weight` float NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

LOCK TABLES `content` WRITE;
/*!40000 ALTER TABLE `content` DISABLE KEYS */;

INSERT INTO `content` (`id`, `uuid`, `tips`, `content`, `service`, `taxonomy_id`, `created_at`, `updated_at`, `weight`)
VALUES
	(2,'p16367o59o3vo1g5d195o1q8090b3.jpg','想要有美好的上半身曲線是每個女性的夢想，無奈亞洲人普遍的問題是尺寸就是差那麼一截，出門總是又墊又擠的才能勉強撐出線條，要是卸下衣著就原形畢露了。但現在不必擔心，擁有尖端技術與器材的我們，可以讓您抬頭挺胸，趁年輕不再為此煩惱。','<p>\r\n	<img alt=\"\" src=\"/~Dars/milos/admin/upload/1aea4d7cd2361306f19c6421d43877f9dcb56a23.jpg\" style=\"width: 312px; height: 300px; margin: 5px; float: left; border-width: 1px; border-style: solid;padding:3px;\" /><span style=\"font-family:arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\">想要有美好的上半身曲線是每個女性的夢想，無奈亞洲人普遍的問題是尺寸就是差那麼一截，出門總是又墊又擠的才能勉強撐出線條，要是卸下衣著就原形畢露了。但現在不必擔心，擁有尖端技術與器材的我們，可以讓您抬頭挺胸，趁年輕不再為此煩惱。</span></span></p>\r\n<p>\r\n	<span style=\"font-family:arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><span style=\"font-size: 16px;\"><strong><span style=\"color: rgb(198, 77, 148);\">全程內視鏡技術</span></strong></span><br />\r\n	不論任何植入物，任何手術位置，只要有人工義乳，一定要從組織間撥出一個空間，才能將植入物放入。組織剝離時不可避免會有出血的情形，全程內視鏡技術可以在從一開始手術到結束為止，讓出血的量少到&rdquo;不到數滴&rdquo;的情形。出血愈少，術後發生各種併發症(如血腫、感染、莢膜攣縮)的機會就大幅降低。而經由內視鏡的直接視野下，任何剝離不完全導致術後形狀不好看的情況能降至最低。在米洛斯，全程內<br />\r\n	視鏡技術已經是最基本的要求，為的是讓每位追求好身材的女性，都有最滿意最安全的結果。</span></span></p>\r\n<p>\r\n	<br />\r\n	<span style=\"font-family:arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><strong><span style=\"font-size: 16px;\"><span style=\"color: rgb(198, 77, 148);\">水刀自體脂肪隆乳</span></span></strong><br />\r\n	今天如果有一個隆乳方法，可以讓乳房&rdquo;完全沒有假的感覺&rdquo;，只有自體脂肪移植才辦得到，果凍矽膠義乳已經是比鹽水袋自然得多，可是和自體脂肪隆乳一比，還是有些差距，當作平躺動作的時候更是明顯，自體脂肪隆乳的乳房，會隨著重力的方向〝作應該有的動作〞，而且可以順便抽脂，一舉兩得。而很多人害怕的術後按摩，在自體脂肪隆乳是完全不需要。追求副作用少的妳，真的是超完美選擇。</span></span></p>\r\n<p>\r\n	<br />\r\n	<span style=\"font-family:arial,helvetica,sans-serif;\"><span style=\"font-size: 14px;\"><strong><span style=\"font-size: 16px;\"><span style=\"color: rgb(198, 77, 148);\">多種傷口選擇與義乳位置選擇</span></span></strong><br />\r\n	隆乳對整形外科醫師來說是一門藝術，每個人適合的手術方式可能稍有不同。要選擇鹽水袋、果凍矽膠、或是自體脂肪，會因為條件問題與自身考量的問題而不同。要將義乳放在胸大肌下或筋膜下也因個人條件有不同的建議，當然傷口要放在腋下、乳暈旁或是胸下緣，個人考量也不同。建議一定要找經驗豐富的醫師諮詢。我們會有耐心的分析給您聽並給予最好的建議。<br />\r\n	&sect; 版權所有，如需轉載請註明出處！( 米洛斯整形外科診所 - 張博全院長 )</span></span></p>\r\n','內視鏡隆乳(果凍矽膠、鹽水袋)  水刀自體脂肪隆乳  縮乳  提乳  乳頭縮小  乳頭凹陷  乳暈縮小  副乳修正',12,'2011-06-21 22:47:32','2011-06-27 01:35:49',0),
	(4,NULL,'精緻鼻雕簡介','<p>\r\n	內文說明</p>\r\n','雕你的鼻子...',13,'2011-06-21 22:51:35','2011-06-21 22:51:35',0),
	(5,NULL,'精緻鼻雕簡介','<p>\r\n	內文說明</p>\r\n','雕你的鼻子...',14,'2011-06-21 22:51:35','2011-06-21 22:51:35',0),
	(6,NULL,'精緻鼻雕簡介','<p>\r\n	內文說明</p>\r\n','雕你的鼻子...',15,'2011-06-21 22:51:35','2011-06-21 22:51:35',0),
	(7,NULL,'精緻鼻雕簡介','<p>\r\n	內文說明</p>\r\n','雕你的鼻子...',16,'2011-06-21 22:51:35','2011-06-21 22:51:35',0),
	(8,NULL,'精緻鼻雕簡介','<p>\r\n	內文說明</p>\r\n','雕你的鼻子...',17,'2011-06-21 22:51:35','2011-06-21 22:51:35',0),
	(9,'p163ghfqqb349je71ndg1abnvq61.jpeg','最新消息','','about_05.html',22,'0000-00-00 00:00:00','2011-06-30 23:09:57',0),
	(10,'p163ghgkvl1ea1aqu4gf1s4t16ns1.jpeg','電眼再現','','plastic_03.html',22,'0000-00-00 00:00:00','2011-06-30 23:09:57',0),
	(11,'p163ghh21pl4c11lb16ul1ikc2s1.jpeg','精緻鼻雕','','plastic_02.html',22,'0000-00-00 00:00:00','2011-06-30 23:09:57',0),
	(12,'p163ghh96p8l52l7og91n0rfm81.jpeg','肉毒桿菌','','beauty_03.html',22,'0000-00-00 00:00:00','2011-06-30 23:09:57',0),
	(13,'p163ghhlmr1tfa3e6h1njf1isi1.jpeg','臉型美化','','beauty_05.html',22,'0000-00-00 00:00:00','2011-06-30 23:09:57',0),
	(14,'p163ghi09c1hos1s9p8rb1734v1.jpeg','缺陷修正','','plastic_06.html',22,'0000-00-00 00:00:00','2011-06-30 23:09:57',0),
	(16,'p16368cr3glujp991q18uc1v893.jpg','〝玻尿酸〞 這三個字，應該已經沒有人沒聽過了。它常常和所謂”保水保濕”畫上等號，其實玻尿酸的應用十分廣泛，各種玻尿酸製品也是現代人的福音。','<p>\r\n	<span style=\"font-size:14px;\"><img alt=\"\" src=\"/~Dars/milos/admin/upload/f15825ddd7e143b99d9f9866192461e77281fd13.jpg\" style=\"width: 312px; height: 300px; border-width: 1px; border-style: solid; margin: 5px; padding: 5px; float: left;\" />〝玻尿酸〞 這三個字，應該已經沒有人沒聽過了。它常常和所謂&rdquo;保水保濕&rdquo;畫上等號，其實玻尿酸的應用十分廣泛，各種玻尿酸製品也是現代人的福音。</span></p>\r\n<p>\r\n	<span style=\"font-size:14px;\"><strong><span style=\"font-size:16px;\"><span style=\"color: rgb(198, 77, 148);\">就差那麼一點、請玻尿酸幫幫忙</span></span></strong><br />\r\n	整形用的玻尿酸是一種皮下填充物，當他打入我們的組織，能夠適當的填補不夠的空間和形狀。有的時候美女們會嘆：要是我的臉頰再多飽滿一點就好了、要是下巴形狀再尖一點點、明天要出國旅行，能不能照相看起來再好看一點點.&hellip;..，玻尿酸總是能適時的補上這一點點，由於玻尿酸和人體高度相容，也不會像以前的小針美容(液態矽膠)一樣發炎又下垂，現在玻尿酸的普及就像出門選衣服一樣簡單。</span></p>\r\n<p>\r\n	<span style=\"font-size:14px;\"><strong><span style=\"font-size:16px;\"><span style=\"color: rgb(198, 77, 148);\">玻尿酸應用廣泛，不同製品有不同用途</span></span></strong><br />\r\n	其實玻尿酸在醫療上的應用已經很多年了，由於有吸水潤滑<br />\r\n	的特性，很適合用在退化性關節炎的病患，好像機器的潤滑油一樣，隔一陣子稍加補充，比較不會有關節軟骨磨損的情形。另外一個廣泛的應用則是保養品，一樣因為吸水的特性，保濕效果很好，當然可以讓皮膚水嫩水嫩。當然以整形來說，用的是它可以維持體積的特性，可以拿來填補組織不足的地方。不過特別重要的是，不同用途的玻尿酸在許多特性上差別很多，拿來做關節補充液的玻尿酸，價格便宜，但代謝很快，拿它來打在皮下，不用一個月就消失殆盡。在價格混亂的醫美市場裡，一定要確定是專門用來整形美容用的玻尿酸(例如瑞斯朗)，才不會省了荷包但完全無效。</span></p>\r\n<p>\r\n	<span style=\"font-size:14px;\"><strong><span style=\"font-size:16px;\"><span style=\"color: rgb(198, 77, 148);\">分子量不同，為不同的部位加分</span></span></strong><br />\r\n	小分子玻尿酸可以用在填補皺紋、填補淚溝；中分子玻尿酸可以用在豐唇、隆鼻、墊下巴；大分子玻尿酸可以豐頰、豐太陽穴、豐蘋果肌；還有一種超大分子玻尿酸(Macrolane)，可以用在填補凹凸不平的皮膚、豐臀等。如此多樣化的選擇，加上幾乎不會有等待腫脹恢復的時間，讓玻尿酸成為一種非常方便的醫美產品。</span></p>\r\n<p>\r\n	<span style=\"font-size: 14px;\"><strong><span style=\"font-size:16px;\"><span style=\"color: rgb(198, 77, 148);\">&sect; 版權所有，如需轉載請註明出處！</span>( 米洛斯整形外科診所 - 張博全院長 )</span></strong></span></p>\r\n','玻尿酸隆鼻、墊下巴、豐唇、豐頰、豐太陽穴、法令紋填補、豐蘋果肌、皺紋填補、抽脂術後凹凸不平填補、雞爪手改善、豐臀',18,'2011-06-26 18:32:43','2011-06-27 01:43:14',0),
	(17,NULL,'〝玻尿酸〞 這三個字，應該已經沒有人沒聽過了。它常常和所謂”保水保濕”畫上等號，其實玻尿酸的應用十分廣泛，各種玻尿酸製品也是現代人的福音。','<p>\r\n	<span style=\"font-size:14px;\"><img alt=\"\" src=\"/~Dars/milos/admin/upload/f15825ddd7e143b99d9f9866192461e77281fd13.jpg\" style=\"width: 312px; height: 300px; border-width: 1px; border-style: solid; margin: 5px; padding: 5px; float: left;\" />〝玻尿酸〞 這三個字，應該已經沒有人沒聽過了。它常常和所謂&rdquo;保水保濕&rdquo;畫上等號，其實玻尿酸的應用十分廣泛，各種玻尿酸製品也是現代人的福音。</span></p>\r\n<p>\r\n	<span style=\"font-size:14px;\"><strong><span style=\"font-size:16px;\"><span style=\"color: rgb(198, 77, 148);\">就差那麼一點、請玻尿酸幫幫忙</span></span></strong><br />\r\n	整形用的玻尿酸是一種皮下填充物，當他打入我們的組織，能夠適當的填補不夠的空間和形狀。有的時候美女們會嘆：要是我的臉頰再多飽滿一點就好了、要是下巴形狀再尖一點點、明天要出國旅行，能不能照相看起來再好看一點點.&hellip;..，玻尿酸總是能適時的補上這一點點，由於玻尿酸和人體高度相容，也不會像以前的小針美容(液態矽膠)一樣發炎又下垂，現在玻尿酸的普及就像出門選衣服一樣簡單。</span></p>\r\n<p>\r\n	<span style=\"font-size:14px;\"><strong><span style=\"font-size:16px;\"><span style=\"color: rgb(198, 77, 148);\">玻尿酸應用廣泛，不同製品有不同用途</span></span></strong><br />\r\n	其實玻尿酸在醫療上的應用已經很多年了，由於有吸水潤滑<br />\r\n	的特性，很適合用在退化性關節炎的病患，好像機器的潤滑油一樣，隔一陣子稍加補充，比較不會有關節軟骨磨損的情形。另外一個廣泛的應用則是保養品，一樣因為吸水的特性，保濕效果很好，當然可以讓皮膚水嫩水嫩。當然以整形來說，用的是它可以維持體積的特性，可以拿來填補組織不足的地方。不過特別重要的是，不同用途的玻尿酸在許多特性上差別很多，拿來做關節補充液的玻尿酸，價格便宜，但代謝很快，拿它來打在皮下，不用一個月就消失殆盡。在價格混亂的醫美市場裡，一定要確定是專門用來整形美容用的玻尿酸(例如瑞斯朗)，才不會省了荷包但完全無效。</span></p>\r\n<p>\r\n	<span style=\"font-size:14px;\"><strong><span style=\"font-size:16px;\"><span style=\"color: rgb(198, 77, 148);\">分子量不同，為不同的部位加分</span></span></strong><br />\r\n	小分子玻尿酸可以用在填補皺紋、填補淚溝；中分子玻尿酸可以用在豐唇、隆鼻、墊下巴；大分子玻尿酸可以豐頰、豐太陽穴、豐蘋果肌；還有一種超大分子玻尿酸(Macrolane)，可以用在填補凹凸不平的皮膚、豐臀等。如此多樣化的選擇，加上幾乎不會有等待腫脹恢復的時間，讓玻尿酸成為一種非常方便的醫美產品。</span></p>\r\n<p>\r\n	<span style=\"font-size: 14px;\"><strong><span style=\"font-size:16px;\"><span style=\"color: rgb(198, 77, 148);\">&sect; 版權所有，如需轉載請註明出處！</span>( 米洛斯整形外科診所 - 張博全院長 )</span></strong></span></p>\r\n','玻尿酸隆鼻、墊下巴、豐唇、豐頰、豐太陽穴、法令紋填補、豐蘋果肌、皺紋填補、抽脂術後凹凸不平填補、雞爪手改善、豐臀',19,'2011-06-26 18:32:43','2011-06-26 18:32:43',0),
	(18,NULL,'〝玻尿酸〞 這三個字，應該已經沒有人沒聽過了。它常常和所謂”保水保濕”畫上等號，其實玻尿酸的應用十分廣泛，各種玻尿酸製品也是現代人的福音。','<p>\r\n	<span style=\"font-size:14px;\"><img alt=\"\" src=\"/~Dars/milos/admin/upload/f15825ddd7e143b99d9f9866192461e77281fd13.jpg\" style=\"width: 312px; height: 300px; border-width: 1px; border-style: solid; margin: 5px; padding: 5px; float: left;\" />〝玻尿酸〞 這三個字，應該已經沒有人沒聽過了。它常常和所謂&rdquo;保水保濕&rdquo;畫上等號，其實玻尿酸的應用十分廣泛，各種玻尿酸製品也是現代人的福音。</span></p>\r\n<p>\r\n	<span style=\"font-size:14px;\"><strong><span style=\"font-size:16px;\"><span style=\"color: rgb(198, 77, 148);\">就差那麼一點、請玻尿酸幫幫忙</span></span></strong><br />\r\n	整形用的玻尿酸是一種皮下填充物，當他打入我們的組織，能夠適當的填補不夠的空間和形狀。有的時候美女們會嘆：要是我的臉頰再多飽滿一點就好了、要是下巴形狀再尖一點點、明天要出國旅行，能不能照相看起來再好看一點點.&hellip;..，玻尿酸總是能適時的補上這一點點，由於玻尿酸和人體高度相容，也不會像以前的小針美容(液態矽膠)一樣發炎又下垂，現在玻尿酸的普及就像出門選衣服一樣簡單。</span></p>\r\n<p>\r\n	<span style=\"font-size:14px;\"><strong><span style=\"font-size:16px;\"><span style=\"color: rgb(198, 77, 148);\">玻尿酸應用廣泛，不同製品有不同用途</span></span></strong><br />\r\n	其實玻尿酸在醫療上的應用已經很多年了，由於有吸水潤滑<br />\r\n	的特性，很適合用在退化性關節炎的病患，好像機器的潤滑油一樣，隔一陣子稍加補充，比較不會有關節軟骨磨損的情形。另外一個廣泛的應用則是保養品，一樣因為吸水的特性，保濕效果很好，當然可以讓皮膚水嫩水嫩。當然以整形來說，用的是它可以維持體積的特性，可以拿來填補組織不足的地方。不過特別重要的是，不同用途的玻尿酸在許多特性上差別很多，拿來做關節補充液的玻尿酸，價格便宜，但代謝很快，拿它來打在皮下，不用一個月就消失殆盡。在價格混亂的醫美市場裡，一定要確定是專門用來整形美容用的玻尿酸(例如瑞斯朗)，才不會省了荷包但完全無效。</span></p>\r\n<p>\r\n	<span style=\"font-size:14px;\"><strong><span style=\"font-size:16px;\"><span style=\"color: rgb(198, 77, 148);\">分子量不同，為不同的部位加分</span></span></strong><br />\r\n	小分子玻尿酸可以用在填補皺紋、填補淚溝；中分子玻尿酸可以用在豐唇、隆鼻、墊下巴；大分子玻尿酸可以豐頰、豐太陽穴、豐蘋果肌；還有一種超大分子玻尿酸(Macrolane)，可以用在填補凹凸不平的皮膚、豐臀等。如此多樣化的選擇，加上幾乎不會有等待腫脹恢復的時間，讓玻尿酸成為一種非常方便的醫美產品。</span></p>\r\n<p>\r\n	<span style=\"font-size: 14px;\"><strong><span style=\"font-size:16px;\"><span style=\"color: rgb(198, 77, 148);\">&sect; 版權所有，如需轉載請註明出處！</span>( 米洛斯整形外科診所 - 張博全院長 )</span></strong></span></p>\r\n','玻尿酸隆鼻、墊下巴、豐唇、豐頰、豐太陽穴、法令紋填補、豐蘋果肌、皺紋填補、抽脂術後凹凸不平填補、雞爪手改善、豐臀',20,'2011-06-26 18:32:43','2011-06-26 18:32:43',0),
	(19,NULL,'〝玻尿酸〞 這三個字，應該已經沒有人沒聽過了。它常常和所謂”保水保濕”畫上等號，其實玻尿酸的應用十分廣泛，各種玻尿酸製品也是現代人的福音。','<p>\r\n	<span style=\"font-size:14px;\"><img alt=\"\" src=\"/~Dars/milos/admin/upload/f15825ddd7e143b99d9f9866192461e77281fd13.jpg\" style=\"width: 312px; height: 300px; border-width: 1px; border-style: solid; margin: 5px; padding: 5px; float: left;\" />〝玻尿酸〞 這三個字，應該已經沒有人沒聽過了。它常常和所謂&rdquo;保水保濕&rdquo;畫上等號，其實玻尿酸的應用十分廣泛，各種玻尿酸製品也是現代人的福音。</span></p>\r\n<p>\r\n	<span style=\"font-size:14px;\"><strong><span style=\"font-size:16px;\"><span style=\"color: rgb(198, 77, 148);\">就差那麼一點、請玻尿酸幫幫忙</span></span></strong><br />\r\n	整形用的玻尿酸是一種皮下填充物，當他打入我們的組織，能夠適當的填補不夠的空間和形狀。有的時候美女們會嘆：要是我的臉頰再多飽滿一點就好了、要是下巴形狀再尖一點點、明天要出國旅行，能不能照相看起來再好看一點點.&hellip;..，玻尿酸總是能適時的補上這一點點，由於玻尿酸和人體高度相容，也不會像以前的小針美容(液態矽膠)一樣發炎又下垂，現在玻尿酸的普及就像出門選衣服一樣簡單。</span></p>\r\n<p>\r\n	<span style=\"font-size:14px;\"><strong><span style=\"font-size:16px;\"><span style=\"color: rgb(198, 77, 148);\">玻尿酸應用廣泛，不同製品有不同用途</span></span></strong><br />\r\n	其實玻尿酸在醫療上的應用已經很多年了，由於有吸水潤滑<br />\r\n	的特性，很適合用在退化性關節炎的病患，好像機器的潤滑油一樣，隔一陣子稍加補充，比較不會有關節軟骨磨損的情形。另外一個廣泛的應用則是保養品，一樣因為吸水的特性，保濕效果很好，當然可以讓皮膚水嫩水嫩。當然以整形來說，用的是它可以維持體積的特性，可以拿來填補組織不足的地方。不過特別重要的是，不同用途的玻尿酸在許多特性上差別很多，拿來做關節補充液的玻尿酸，價格便宜，但代謝很快，拿它來打在皮下，不用一個月就消失殆盡。在價格混亂的醫美市場裡，一定要確定是專門用來整形美容用的玻尿酸(例如瑞斯朗)，才不會省了荷包但完全無效。</span></p>\r\n<p>\r\n	<span style=\"font-size:14px;\"><strong><span style=\"font-size:16px;\"><span style=\"color: rgb(198, 77, 148);\">分子量不同，為不同的部位加分</span></span></strong><br />\r\n	小分子玻尿酸可以用在填補皺紋、填補淚溝；中分子玻尿酸可以用在豐唇、隆鼻、墊下巴；大分子玻尿酸可以豐頰、豐太陽穴、豐蘋果肌；還有一種超大分子玻尿酸(Macrolane)，可以用在填補凹凸不平的皮膚、豐臀等。如此多樣化的選擇，加上幾乎不會有等待腫脹恢復的時間，讓玻尿酸成為一種非常方便的醫美產品。</span></p>\r\n<p>\r\n	<span style=\"font-size: 14px;\"><strong><span style=\"font-size:16px;\"><span style=\"color: rgb(198, 77, 148);\">&sect; 版權所有，如需轉載請註明出處！</span>( 米洛斯整形外科診所 - 張博全院長 )</span></strong></span></p>\r\n','玻尿酸隆鼻、墊下巴、豐唇、豐頰、豐太陽穴、法令紋填補、豐蘋果肌、皺紋填補、抽脂術後凹凸不平填補、雞爪手改善、豐臀',21,'2011-06-26 18:32:43','2011-06-26 18:32:43',0),
	(20,'p16369qo6r1k8upa91v6e6abh4v3.jpg','整形是在自己身體上做改變，選擇好的診所是非常重要的。很多診所是商人看上醫學美容這塊大品而匆匆忙忙開來賺錢，這類','<table border=\"0\" cellpadding=\"3\" cellspacing=\"1\" style=\"width: 500px; \">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"background-color: rgb(255, 232, 255); \">\r\n				<strong><span style=\"color:#c64d94;\">Ｑ：<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>整形醫美診所這麼多，該如何選擇呢?</span></strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				Ａ：<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>整形是在自己身體上做改變，選擇好的診所是非常重要的。很多診所是商人看上醫學美容這塊大餅而匆匆忙忙開來賺錢，這類型的診所通常會有很多的促銷活動、很多贈品、很多療程、很多點數等等。這些診所會找比較沒有經驗的醫師(而且通常不是整形外科專科醫師)來看診與執行醫療行為。應該優先從醫師本身的資歷與口碑來做判斷，很有名的醫師不一定就是適合妳的醫師，建議要親自和醫師談談，可以感受到醫師的誠懇與細心，才是對自己身體的保障。</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color: rgb(255, 232, 255); \">\r\n				<strong><span style=\"color:#c64d94;\">Ｑ：<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>那整形醫師又要怎麼選擇?</span></strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				Ａ：<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>首先要看是不是真的是科班訓練出來的&rdquo;整形外科專科醫師&rdquo;，很多說自己是&rdquo;美容醫師&rdquo;的人原本並不是整外專科醫師，而是一般外科、其他外科甚至連外科醫師都不是(家醫科、耳鼻喉科、婦產科&hellip;..)。接下來就是看醫師本人對於您狀況的解說是否誠懇而適當，有沒有強迫推銷妳原本不想要做的療程。一個有醫德的醫師不但解說清楚，術中會用心，術後會關心與負責。</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color: rgb(255, 232, 255); \">\r\n				<strong><span style=\"color:#c64d94;\">Ｑ：<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>同樣的手術為什麼價格差那麼多?</span></strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				Ａ：<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>這和外觀看起來差不多的衣服在不同地方的價格不同道理是一樣的，很多低價的療程後面帶來的是品質不良與術後服務的缺乏。一個對自己手藝有自信而且很仔細的醫師，應該不會狂砍自己手工的價格，至於很貴很貴的價格，可能是診所花在行銷的費用太高，或是仗著知名度抬高價格。當然同樣部位的手術(例如隆鼻)，也有可能是方法和材料不同，而有價格上的差異。</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>\r\n	&nbsp;</p>\r\n',NULL,3,'2011-06-20 00:08:57','2011-06-26 23:43:02',0),
	(21,NULL,NULL,'<table border=\"0\" cellpadding=\"3\" cellspacing=\"1\" style=\"width: 500px; \">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"background-color: rgb(255, 232, 255); \">\r\n				<strong><span style=\"color:#c64d94;\">Ｑ：<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>整形醫美診所這麼多，該如何選擇呢?</span></strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				Ａ：<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>整形是在自己身體上做改變，選擇好的診所是非常重要的。很多診所是商人看上醫學美容這塊大餅而匆匆忙忙開來賺錢，這類型的診所通常會有很多的促銷活動、很多贈品、很多療程、很多點數等等。這些診所會找比較沒有經驗的醫師(而且通常不是整形外科專科醫師)來看診與執行醫療行為。應該優先從醫師本身的資歷與口碑來做判斷，很有名的醫師不一定就是適合妳的醫師，建議要親自和醫師談談，可以感受到醫師的誠懇與細心，才是對自己身體的保障。</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color: rgb(255, 232, 255); \">\r\n				<strong><span style=\"color:#c64d94;\">Ｑ：<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>那整形醫師又要怎麼選擇?</span></strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				Ａ：<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>首先要看是不是真的是科班訓練出來的&rdquo;整形外科專科醫師&rdquo;，很多說自己是&rdquo;美容醫師&rdquo;的人原本並不是整外專科醫師，而是一般外科、其他外科甚至連外科醫師都不是(家醫科、耳鼻喉科、婦產科&hellip;..)。接下來就是看醫師本人對於您狀況的解說是否誠懇而適當，有沒有強迫推銷妳原本不想要做的療程。一個有醫德的醫師不但解說清楚，術中會用心，術後會關心與負責。</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color: rgb(255, 232, 255); \">\r\n				<strong><span style=\"color:#c64d94;\">Ｑ：<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>同樣的手術為什麼價格差那麼多?</span></strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				Ａ：<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>這和外觀看起來差不多的衣服在不同地方的價格不同道理是一樣的，很多低價的療程後面帶來的是品質不良與術後服務的缺乏。一個對自己手藝有自信而且很仔細的醫師，應該不會狂砍自己手工的價格，至於很貴很貴的價格，可能是診所花在行銷的費用太高，或是仗著知名度抬高價格。當然同樣部位的手術(例如隆鼻)，也有可能是方法和材料不同，而有價格上的差異。</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>\r\n	&nbsp;</p>\r\n',NULL,4,'2011-06-20 00:08:57','2011-06-26 23:32:03',0),
	(22,NULL,NULL,'<table border=\"0\" cellpadding=\"3\" cellspacing=\"1\" style=\"width: 500px; \">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"background-color: rgb(255, 232, 255); \">\r\n				<strong><span style=\"color:#c64d94;\">Ｑ：<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>整形醫美診所這麼多，該如何選擇呢?</span></strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				Ａ：<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>整形是在自己身體上做改變，選擇好的診所是非常重要的。很多診所是商人看上醫學美容這塊大餅而匆匆忙忙開來賺錢，這類型的診所通常會有很多的促銷活動、很多贈品、很多療程、很多點數等等。這些診所會找比較沒有經驗的醫師(而且通常不是整形外科專科醫師)來看診與執行醫療行為。應該優先從醫師本身的資歷與口碑來做判斷，很有名的醫師不一定就是適合妳的醫師，建議要親自和醫師談談，可以感受到醫師的誠懇與細心，才是對自己身體的保障。</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color: rgb(255, 232, 255); \">\r\n				<strong><span style=\"color:#c64d94;\">Ｑ：<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>那整形醫師又要怎麼選擇?</span></strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				Ａ：<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>首先要看是不是真的是科班訓練出來的&rdquo;整形外科專科醫師&rdquo;，很多說自己是&rdquo;美容醫師&rdquo;的人原本並不是整外專科醫師，而是一般外科、其他外科甚至連外科醫師都不是(家醫科、耳鼻喉科、婦產科&hellip;..)。接下來就是看醫師本人對於您狀況的解說是否誠懇而適當，有沒有強迫推銷妳原本不想要做的療程。一個有醫德的醫師不但解說清楚，術中會用心，術後會關心與負責。</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color: rgb(255, 232, 255); \">\r\n				<strong><span style=\"color:#c64d94;\">Ｑ：<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>同樣的手術為什麼價格差那麼多?</span></strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				Ａ：<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>這和外觀看起來差不多的衣服在不同地方的價格不同道理是一樣的，很多低價的療程後面帶來的是品質不良與術後服務的缺乏。一個對自己手藝有自信而且很仔細的醫師，應該不會狂砍自己手工的價格，至於很貴很貴的價格，可能是診所花在行銷的費用太高，或是仗著知名度抬高價格。當然同樣部位的手術(例如隆鼻)，也有可能是方法和材料不同，而有價格上的差異。</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>\r\n	&nbsp;</p>\r\n',NULL,5,'2011-06-20 00:08:57','2011-06-26 23:32:03',0),
	(23,NULL,NULL,'<table border=\"0\" cellpadding=\"3\" cellspacing=\"1\" style=\"width: 500px; \">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"background-color: rgb(255, 232, 255); \">\r\n				<strong><span style=\"color:#c64d94;\">Ｑ：<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>整形醫美診所這麼多，該如何選擇呢?</span></strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				Ａ：<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>整形是在自己身體上做改變，選擇好的診所是非常重要的。很多診所是商人看上醫學美容這塊大餅而匆匆忙忙開來賺錢，這類型的診所通常會有很多的促銷活動、很多贈品、很多療程、很多點數等等。這些診所會找比較沒有經驗的醫師(而且通常不是整形外科專科醫師)來看診與執行醫療行為。應該優先從醫師本身的資歷與口碑來做判斷，很有名的醫師不一定就是適合妳的醫師，建議要親自和醫師談談，可以感受到醫師的誠懇與細心，才是對自己身體的保障。</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color: rgb(255, 232, 255); \">\r\n				<strong><span style=\"color:#c64d94;\">Ｑ：<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>那整形醫師又要怎麼選擇?</span></strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				Ａ：<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>首先要看是不是真的是科班訓練出來的&rdquo;整形外科專科醫師&rdquo;，很多說自己是&rdquo;美容醫師&rdquo;的人原本並不是整外專科醫師，而是一般外科、其他外科甚至連外科醫師都不是(家醫科、耳鼻喉科、婦產科&hellip;..)。接下來就是看醫師本人對於您狀況的解說是否誠懇而適當，有沒有強迫推銷妳原本不想要做的療程。一個有醫德的醫師不但解說清楚，術中會用心，術後會關心與負責。</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color: rgb(255, 232, 255); \">\r\n				<strong><span style=\"color:#c64d94;\">Ｑ：<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>同樣的手術為什麼價格差那麼多?</span></strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				Ａ：<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>這和外觀看起來差不多的衣服在不同地方的價格不同道理是一樣的，很多低價的療程後面帶來的是品質不良與術後服務的缺乏。一個對自己手藝有自信而且很仔細的醫師，應該不會狂砍自己手工的價格，至於很貴很貴的價格，可能是診所花在行銷的費用太高，或是仗著知名度抬高價格。當然同樣部位的手術(例如隆鼻)，也有可能是方法和材料不同，而有價格上的差異。</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>\r\n	&nbsp;</p>\r\n',NULL,6,'2011-06-20 00:08:57','2011-06-26 23:32:03',0),
	(24,NULL,NULL,'<table border=\"0\" cellpadding=\"3\" cellspacing=\"1\" style=\"width: 500px; \">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"background-color: rgb(255, 232, 255); \">\r\n				<strong><span style=\"color:#c64d94;\">Ｑ：<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>整形醫美診所這麼多，該如何選擇呢?</span></strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				Ａ：<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>整形是在自己身體上做改變，選擇好的診所是非常重要的。很多診所是商人看上醫學美容這塊大餅而匆匆忙忙開來賺錢，這類型的診所通常會有很多的促銷活動、很多贈品、很多療程、很多點數等等。這些診所會找比較沒有經驗的醫師(而且通常不是整形外科專科醫師)來看診與執行醫療行為。應該優先從醫師本身的資歷與口碑來做判斷，很有名的醫師不一定就是適合妳的醫師，建議要親自和醫師談談，可以感受到醫師的誠懇與細心，才是對自己身體的保障。</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color: rgb(255, 232, 255); \">\r\n				<strong><span style=\"color:#c64d94;\">Ｑ：<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>那整形醫師又要怎麼選擇?</span></strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				Ａ：<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>首先要看是不是真的是科班訓練出來的&rdquo;整形外科專科醫師&rdquo;，很多說自己是&rdquo;美容醫師&rdquo;的人原本並不是整外專科醫師，而是一般外科、其他外科甚至連外科醫師都不是(家醫科、耳鼻喉科、婦產科&hellip;..)。接下來就是看醫師本人對於您狀況的解說是否誠懇而適當，有沒有強迫推銷妳原本不想要做的療程。一個有醫德的醫師不但解說清楚，術中會用心，術後會關心與負責。</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color: rgb(255, 232, 255); \">\r\n				<strong><span style=\"color:#c64d94;\">Ｑ：<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>同樣的手術為什麼價格差那麼多?</span></strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				Ａ：<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>這和外觀看起來差不多的衣服在不同地方的價格不同道理是一樣的，很多低價的療程後面帶來的是品質不良與術後服務的缺乏。一個對自己手藝有自信而且很仔細的醫師，應該不會狂砍自己手工的價格，至於很貴很貴的價格，可能是診所花在行銷的費用太高，或是仗著知名度抬高價格。當然同樣部位的手術(例如隆鼻)，也有可能是方法和材料不同，而有價格上的差異。</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>\r\n	&nbsp;</p>\r\n',NULL,7,'2011-06-20 00:08:57','2011-06-26 23:32:03',0),
	(25,NULL,NULL,'<table border=\"0\" cellpadding=\"3\" cellspacing=\"1\" style=\"width: 500px; \">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"background-color: rgb(255, 232, 255); \">\r\n				<strong><span style=\"color:#c64d94;\">Ｑ：<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>整形醫美診所這麼多，該如何選擇呢?</span></strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				Ａ：<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>整形是在自己身體上做改變，選擇好的診所是非常重要的。很多診所是商人看上醫學美容這塊大餅而匆匆忙忙開來賺錢，這類型的診所通常會有很多的促銷活動、很多贈品、很多療程、很多點數等等。這些診所會找比較沒有經驗的醫師(而且通常不是整形外科專科醫師)來看診與執行醫療行為。應該優先從醫師本身的資歷與口碑來做判斷，很有名的醫師不一定就是適合妳的醫師，建議要親自和醫師談談，可以感受到醫師的誠懇與細心，才是對自己身體的保障。</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color: rgb(255, 232, 255); \">\r\n				<strong><span style=\"color:#c64d94;\">Ｑ：<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>那整形醫師又要怎麼選擇?</span></strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				Ａ：<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>首先要看是不是真的是科班訓練出來的&rdquo;整形外科專科醫師&rdquo;，很多說自己是&rdquo;美容醫師&rdquo;的人原本並不是整外專科醫師，而是一般外科、其他外科甚至連外科醫師都不是(家醫科、耳鼻喉科、婦產科&hellip;..)。接下來就是看醫師本人對於您狀況的解說是否誠懇而適當，有沒有強迫推銷妳原本不想要做的療程。一個有醫德的醫師不但解說清楚，術中會用心，術後會關心與負責。</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color: rgb(255, 232, 255); \">\r\n				<strong><span style=\"color:#c64d94;\">Ｑ：<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>同樣的手術為什麼價格差那麼多?</span></strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				Ａ：<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>這和外觀看起來差不多的衣服在不同地方的價格不同道理是一樣的，很多低價的療程後面帶來的是品質不良與術後服務的缺乏。一個對自己手藝有自信而且很仔細的醫師，應該不會狂砍自己手工的價格，至於很貴很貴的價格，可能是診所花在行銷的費用太高，或是仗著知名度抬高價格。當然同樣部位的手術(例如隆鼻)，也有可能是方法和材料不同，而有價格上的差異。</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>\r\n	&nbsp;</p>\r\n',NULL,8,'2011-06-20 00:08:57','2011-06-26 23:32:03',0),
	(26,NULL,NULL,'<table border=\"0\" cellpadding=\"3\" cellspacing=\"1\" style=\"width: 500px; \">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"background-color: rgb(255, 232, 255); \">\r\n				<strong><span style=\"color:#c64d94;\">Ｑ：<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>整形醫美診所這麼多，該如何選擇呢?</span></strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				Ａ：<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>整形是在自己身體上做改變，選擇好的診所是非常重要的。很多診所是商人看上醫學美容這塊大餅而匆匆忙忙開來賺錢，這類型的診所通常會有很多的促銷活動、很多贈品、很多療程、很多點數等等。這些診所會找比較沒有經驗的醫師(而且通常不是整形外科專科醫師)來看診與執行醫療行為。應該優先從醫師本身的資歷與口碑來做判斷，很有名的醫師不一定就是適合妳的醫師，建議要親自和醫師談談，可以感受到醫師的誠懇與細心，才是對自己身體的保障。</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color: rgb(255, 232, 255); \">\r\n				<strong><span style=\"color:#c64d94;\">Ｑ：<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>那整形醫師又要怎麼選擇?</span></strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				Ａ：<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>首先要看是不是真的是科班訓練出來的&rdquo;整形外科專科醫師&rdquo;，很多說自己是&rdquo;美容醫師&rdquo;的人原本並不是整外專科醫師，而是一般外科、其他外科甚至連外科醫師都不是(家醫科、耳鼻喉科、婦產科&hellip;..)。接下來就是看醫師本人對於您狀況的解說是否誠懇而適當，有沒有強迫推銷妳原本不想要做的療程。一個有醫德的醫師不但解說清楚，術中會用心，術後會關心與負責。</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color: rgb(255, 232, 255); \">\r\n				<strong><span style=\"color:#c64d94;\">Ｑ：<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>同樣的手術為什麼價格差那麼多?</span></strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				Ａ：<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>這和外觀看起來差不多的衣服在不同地方的價格不同道理是一樣的，很多低價的療程後面帶來的是品質不良與術後服務的缺乏。一個對自己手藝有自信而且很仔細的醫師，應該不會狂砍自己手工的價格，至於很貴很貴的價格，可能是診所花在行銷的費用太高，或是仗著知名度抬高價格。當然同樣部位的手術(例如隆鼻)，也有可能是方法和材料不同，而有價格上的差異。</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>\r\n	&nbsp;</p>\r\n',NULL,9,'2011-06-20 00:08:57','2011-06-26 23:32:03',0);

/*!40000 ALTER TABLE `content` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table ip_records
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ip_records`;

CREATE TABLE `ip_records` (
  `id` int(11) DEFAULT NULL,
  `ip_addr` varchar(20) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



# Dump of table pix
# ------------------------------------------------------------

DROP TABLE IF EXISTS `pix`;

CREATE TABLE `pix` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `content` text,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `taxonomy_id` int(11) DEFAULT NULL,
  `weight` float NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

LOCK TABLES `pix` WRITE;
/*!40000 ALTER TABLE `pix` DISABLE KEYS */;

INSERT INTO `pix` (`id`, `name`, `content`, `created_at`, `updated_at`, `taxonomy_id`, `weight`)
VALUES
	(4,'p1636gm07r8mv1innuofcbg1qkb3.jpg','測試上傳圖片','2011-06-27 01:41:48','2011-06-27 01:43:14',18,0),
	(2,'p1636gakv11g1s13phuno16i11keu3.jpg','大小明顯的差別!!!!!','2011-06-27 01:35:36','2011-06-27 01:35:49',12,0),
	(5,'p1636gocln1ro01doe1r85bgs1l913.jpg','hahahahahaaaaa','2011-06-27 01:43:07','2011-06-27 01:43:14',18,0);

/*!40000 ALTER TABLE `pix` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table taxonomy
# ------------------------------------------------------------

DROP TABLE IF EXISTS `taxonomy`;

CREATE TABLE `taxonomy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

LOCK TABLES `taxonomy` WRITE;
/*!40000 ALTER TABLE `taxonomy` DISABLE KEYS */;

INSERT INTO `taxonomy` (`id`, `name`, `parent_id`)
VALUES
	(1,'最新消息',0),
	(2,'常見問題',0),
	(3,'整形新手請進',2),
	(4,'關於隆乳手術 ',2),
	(5,'關於隆鼻手術',2),
	(6,'關於雙眼皮手術',2),
	(7,'關於眼袋手術',2),
	(8,'關於抽脂',2),
	(9,'關於玻尿酸',2),
	(10,'整形手術',0),
	(11,'醫學美容',0),
	(12,'美胸塑造',10),
	(13,'精緻鼻雕',10),
	(14,'電眼再現',10),
	(15,'體態雕刻',10),
	(16,'臉型美化',10),
	(17,'缺陷修正',10),
	(18,'玻尿酸',11),
	(19,'微晶瓷',11),
	(20,'肉毒桿菌',11),
	(21,'美白針',11),
	(22,'Index',0);

/*!40000 ALTER TABLE `taxonomy` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
