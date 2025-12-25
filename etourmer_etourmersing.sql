-- MySQL dump 10.13  Distrib 8.0.40, for Linux (x86_64)
--
-- Host: localhost    Database: etourmer_etourmersing
-- ------------------------------------------------------
-- Server version	8.0.40-cll-lve

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `etourmer_etourmersing`
--


--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin` (
  `adminID` int NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`adminID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`adminID`, `username`, `password`) VALUES (1,'B1g3@dm1n','040701121008'),(2,'Firdaus','etourmersingMTA2022');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admindetail`
--

DROP TABLE IF EXISTS `admindetail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admindetail` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `adminID` int NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `phonenumber` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `address1` varchar(200) NOT NULL,
  `address2` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `postcode` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `country` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `adminID` (`adminID`),
  CONSTRAINT `adminID` FOREIGN KEY (`adminID`) REFERENCES `admin` (`adminID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admindetail`
--

LOCK TABLES `admindetail` WRITE;
/*!40000 ALTER TABLE `admindetail` DISABLE KEYS */;
INSERT INTO `admindetail` (`ID`, `adminID`, `firstname`, `lastname`, `email`, `date`, `phonenumber`, `gender`, `address1`, `address2`, `state`, `postcode`, `city`, `country`, `image`) VALUES (1,1,'Amir','Hamzah','amir@gmail.com','2022-11-09','0172090464','male','st11111111','st11111111','Shah Alam','22222','Seksyen 17','Malaysia','third.png'),(2,2,'Azrul','Hafiz Abdullah','azrulhafiz3099@gmail.com','2002-08-10','0172090464','male','ST1119, Jalan Bidara Jaya 3','Taman Bidara Jaya','Melaka','78300','Masjid Tanah','Malaysia','photo_2021-11-08_09-57-10.jpg'),(3,3,'Firdaus','','','2022-11-26','','','','','','','','','');
/*!40000 ALTER TABLE `admindetail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `booking` (
  `booking_id` int NOT NULL AUTO_INCREMENT,
  `customer_id` int NOT NULL,
  `destination` varchar(20) NOT NULL,
  `checkIn_date` date NOT NULL,
  `checkOut_date` date NOT NULL,
  `number_of_pax` int NOT NULL,
  `total_price` int NOT NULL,
  `created_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`booking_id`),
  KEY `customer` (`customer_id`),
  CONSTRAINT `customer` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=162 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `booking`
--

LOCK TABLES `booking` WRITE;
/*!40000 ALTER TABLE `booking` DISABLE KEYS */;
INSERT INTO `booking` (`booking_id`, `customer_id`, `destination`, `checkIn_date`, `checkOut_date`, `number_of_pax`, `total_price`, `created_on`) VALUES (149,183,'RAWA ISLAND RESORT','2022-11-18','2022-11-20',1,1350,'2022-11-25 19:27:05'),(150,184,'ASEANIA BEACH RESORT','2022-12-03','2022-12-05',3,1770,'2022-11-26 22:31:18'),(151,185,'ASEANIA BEACH RESORT','2022-12-06','2022-12-08',1,590,'2022-11-27 09:54:39'),(152,186,'ASEANIA BEACH RESORT','2022-12-04','2022-12-06',2,1180,'2022-11-27 10:53:03'),(153,187,'ASEANIA BEACH RESORT','2022-12-06','2022-12-08',1,590,'2022-11-27 11:02:40'),(154,188,'RAWA ISLAND RESORT','2022-12-06','2022-12-08',2,2700,'2022-11-27 11:52:05'),(155,189,'ASEANIA BEACH RESORT','2022-12-04','2022-12-06',2,1180,'2022-11-27 12:30:51'),(156,190,'RAWA ISLAND RESORT','2022-12-05','2022-12-07',2,2700,'2022-11-27 12:38:19'),(157,191,'ASEANIA BEACH RESORT','2022-12-04','2022-12-06',2,1180,'2022-11-27 12:59:32'),(158,192,'ASEANIA BEACH RESORT','2022-12-04','2022-12-06',2,1180,'2022-11-27 13:49:01'),(159,193,'ASEANIA BEACH RESORT','2022-12-07','2022-12-09',4,2360,'2022-11-28 20:46:06'),(160,194,'ASEANIA BEACH RESORT','2022-12-22','2022-12-24',1,590,'2022-11-29 09:24:11'),(161,195,'DCOCONUT RESORT','2022-12-16','2022-12-18',2,910,'2022-12-02 00:33:27');
/*!40000 ALTER TABLE `booking` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `customer` (
  `customer_id` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `email` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cust_created_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=198 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer`
--

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
INSERT INTO `customer` (`customer_id`, `fullname`, `phone_number`, `email`, `cust_created_on`) VALUES (129,'Black Eagle','+60172090464','azrulhafiz3099@gmail.com','2022-10-14 15:54:47'),(130,'AIMAN SHAUQI BIN AZHAR','+601161101558','aimanshauqi03@gmail.com','2022-10-17 23:36:26'),(131,'amir hamzah','01117570378','amirhmzh002@gmail.com','2022-10-17 23:51:21'),(132,'dsdsds','dsdssd','azrul@gmail.com','2022-10-18 21:40:20'),(133,'dsdsds','dsdssd','azrul@gmail.com','2022-10-18 21:40:40'),(134,'Azrul Hafiz bin Abdullah','+60172090464','azrulhafiz3099@gmail.com','2022-10-18 23:38:24'),(135,'Sarah','01119563149','kamaliailham86@gmail.com','2022-11-04 23:56:33'),(136,'Azrul Hafiz bin Abdullah','+60172090464','azrulhafiz3099@gmail.com','2022-11-09 14:11:45'),(137,'harun','016 2667589','harun@gmail.com','2022-11-13 11:32:14'),(138,'dgdhdtjn','010101010','gp200048@siswa.uthm.edu.my','2022-11-16 12:42:20'),(183,'Iman Akmal','0172894353','iman@gmail.com','2022-11-25 19:27:05'),(184,'amir hamzah','0172090464','etourmersingmta@gmail.com','2022-11-26 22:31:18'),(185,'amir hamzah','0172090464','etourmersingmta@gmail.com','2022-11-27 09:54:39'),(186,'amir hamzah','0111757037','etourmersingmta@gmail.com','2022-11-27 10:53:03'),(187,'amir hamzah','0111757037','etourmersingmta@gmail.com','2022-11-27 11:02:40'),(188,'amir hamzah','0111757037','etourmersingmta@gmail.com','2022-11-27 11:52:05'),(189,'amir hamzah','0111757037','etourmersingmta@gmail.com','2022-11-27 12:30:51'),(190,'amir hamzah','0111757037','etourmersingmta@gmail.com','2022-11-27 12:38:19'),(191,'amir hamzah','0111757037','etourmersingmta@gmail.com','2022-11-27 12:59:32'),(192,'amir hamzah','0111757037','etourmersingmta@gmail.com','2022-11-27 13:49:01'),(193,'ayam','0123456789','ayam@gmail.com','2022-11-28 20:46:06'),(194,'MASTURA RAMLI','0169398480','masturaramli22@gmail.com','2022-11-29 09:24:11'),(195,'Azrul Hafiz bin Abdullah','0172090464','azrulhafiz3099@gmail.com','2022-12-02 00:33:27'),(196,'amir hamzah','0111757037','amirhmzh002@gmail.com','2023-01-15 00:48:22'),(197,'amir hamzah','0111757037','amirhmzh002@gmail.com','2023-01-15 00:48:50');
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event`
--

DROP TABLE IF EXISTS `event`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `event` (
  `Event_ID` int NOT NULL AUTO_INCREMENT,
  `Year` int NOT NULL,
  `Date` varchar(200) NOT NULL,
  `Month` varchar(200) NOT NULL,
  `Title` varchar(200) NOT NULL,
  `Main_Description` varchar(500) NOT NULL,
  `Second_Description` varchar(500) NOT NULL,
  `Image1` varchar(500) NOT NULL,
  `Image2` varchar(500) NOT NULL,
  `Image3` varchar(500) NOT NULL,
  `Time` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`Event_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=316 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event`
--

LOCK TABLES `event` WRITE;
/*!40000 ALTER TABLE `event` DISABLE KEYS */;
INSERT INTO `event` (`Event_ID`, `Year`, `Date`, `Month`, `Title`, `Main_Description`, `Second_Description`, `Image1`, `Image2`, `Image3`, `Time`) VALUES (314,2023,'24-26','Jul','Scuba Diving Course','MTA mengendalikan kursus ',' Yuran penyertaan adalah sebanyak RM1,700.00.\r\nKursus ini terhad kepada 10 orang peserta sahaja.\r\nSyarat-syarat: Warga komuniti Mersing berumur 18 tahun keatas, mahir berenang dan melalukan lain-lain aktiviti air serta berdisiplin & berdedikasi.','	\nposter.jpeg','DivingSesi1.jpg','DivingSesi2.jpg','09:00');
/*!40000 ALTER TABLE `event` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `feedback` (
  `feedback_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `feedback` text NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`feedback_id`)
) ENGINE=InnoDB AUTO_INCREMENT=152 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feedback`
--

LOCK TABLES `feedback` WRITE;
/*!40000 ALTER TABLE `feedback` DISABLE KEYS */;
INSERT INTO `feedback` (`feedback_id`, `name`, `feedback`, `status`) VALUES (35,'Asnawi','Such a new improvement for tourism in Mersing 👍','Approved'),(36,'Iman ','A new advanced travelling environment in Mersing 👏🏻','Approved'),(37,'Izzudin','A simple site that gave a big impact for travelling community in Mersing ','Approved'),(38,'Nadia','Love the style of this site, simple and user-friendly! 🤍','Approved'),(40,'Thibashini','Great!','Approved'),(41,'Pizu','Mantap','Approved'),(139,'Cecilasype','Лучшие базы для Xrumer и GSA Search Engine Ranker по самым лучшим ценам \r\nhttps://dseo24.monster \r\nОнлайн магазин баз для Xrumer и GSA     лучшие цены','pending'),(140,'Phil','Want to capture the attention of millions without overspending?\r\n Let me know if you’d like more information—my contact info is listed below.\r\n\r\nRegards,\r\nWally Goulet\r\nEmail: Wally.Goulet@morebiz.my\r\nWebsite: http://7g3en6.resultswithcontactforms.my\r\nSkype: marketingwithcontactforms','pending'),(141,'AmandaJogita2','I want you tonight... just the two of us, no distractions -  https://rb.gy/ycu4is?twefiari','pending'),(142,'Masonatoni','Здравейте, исках да знам цената ви.','pending'),(143,'Tedatoni','Ndewo, achọrọ m ịmara ọnụahịa gị.','pending'),(144,'Phil','Looking to attract millions of viewers to your website or video affordably?\r\n Reach out to me below if you want more details on how I make this happen.\r\n\r\nRegards,\r\nGerardo Corwin\r\nEmail: Gerardo.Corwin@morebiz.my\r\nWebsite: http://zstchq.form-submission-masters.ink\r\nSkype: marketingwithcontactforms','pending'),(145,'Masonatoni','Dia duit, theastaigh uaim do phraghas a fháil.','pending'),(146,'Nitin','Hi, \r\n\r\nHope you are doing well,\r\n\r\nWith your permission I would like to send you an Audit report of your website \"www.etourmersing.com\" with prices showing you a few things to greatly improve these search results for you.\r\n\r\nWould you like me to send pricing/Quote?\r\n\r\nRegards,\r\nNitin Chaudhary | International Project Manager                                                    \r\nEmail:- sales@rankinghat.co            \r\nContact Number:- +1- (209) 813-5119','pending'),(147,'XRmesee','Hello! \r\n \r\nGood cheer to all on this beautiful day!!!!! \r\n \r\nGood luck :)','pending'),(148,'Masonatoni','Hi, მინდოდა ვიცოდე თქვენი ფასი.','pending'),(149,'Oscaratoni','Sveiki, es gribēju zināt savu cenu.','pending'),(150,'Phil','Looking for a way to get millions to see your ad affordably?\r\n If you’re interested in learning more about how this works, reach out to me using the contact info below.\r\n\r\nRegards,\r\nWaldo Fetherston\r\nEmail: Waldo.Fetherston@morebiz.my\r\nWebsite: http://pq9sns.form-submission-masters.ink\r\nSkype: marketingwithcontactforms','pending'),(151,'Janeatoni','Salut, ech wollt Äre Präis wëssen.','pending');
/*!40000 ALTER TABLE `feedback` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `islandbooking`
--

DROP TABLE IF EXISTS `islandbooking`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `islandbooking` (
  `booking_id` int NOT NULL AUTO_INCREMENT,
  `customer_id` int NOT NULL,
  `package` varchar(200) NOT NULL,
  `number_of_adult` int NOT NULL,
  `number_of_child` int NOT NULL,
  `Total` float NOT NULL,
  `date` date NOT NULL,
  `created_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`booking_id`),
  KEY `islandCustomer` (`customer_id`),
  CONSTRAINT `islandCustomer` FOREIGN KEY (`customer_id`) REFERENCES `islandcustomer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `islandbooking`
--

LOCK TABLES `islandbooking` WRITE;
/*!40000 ALTER TABLE `islandbooking` DISABLE KEYS */;
INSERT INTO `islandbooking` (`booking_id`, `customer_id`, `package`, `number_of_adult`, `number_of_child`, `Total`, `date`, `created_on`) VALUES (29,35,'adventure',2,1,450,'2022-12-01','2022-11-25 19:30:06'),(30,36,'adventure',1,1,270,'2022-12-01','2022-11-26 15:05:56'),(31,37,'light',1,1,210,'2022-12-01','2022-11-26 22:27:19'),(32,38,'light',2,1,350,'2022-12-14','2022-12-01 15:07:42'),(33,39,'adventure',1,2,360,'2022-12-20','2022-12-02 00:37:51'),(34,40,'light',1,0,140,'2023-05-11','2023-05-05 11:26:47');
/*!40000 ALTER TABLE `islandbooking` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `islandcustomer`
--

DROP TABLE IF EXISTS `islandcustomer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `islandcustomer` (
  `customer_id` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(200) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `cust_created_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `islandcustomer`
--

LOCK TABLES `islandcustomer` WRITE;
/*!40000 ALTER TABLE `islandcustomer` DISABLE KEYS */;
INSERT INTO `islandcustomer` (`customer_id`, `fullname`, `phone_number`, `email`, `cust_created_on`) VALUES (23,'amar','01213214','amar@gmail.com','2022-10-14 16:30:41'),(24,'amir','+60172090464','amir@gmail.com','2022-10-14 16:32:58'),(25,'Aa','1','a@yahoo.com','2022-10-14 16:39:47'),(26,'Aa','1','a@yahoo.com','2022-10-14 16:40:51'),(27,'Sir','0145461057','ikmaltarmizi64@gmail.com','2022-10-14 16:46:28'),(28,'Sir','0145461057','ikmaltarmizi64@gmail.com','2022-10-14 17:04:11'),(29,'Sir','0145461057','ikmaltarmizi64@gmail.com','2022-10-14 17:04:37'),(30,'Sir','0145461057','ikmaltarmizi64@gmail.com','2022-10-14 17:05:37'),(31,'AZRUL','+60172090464','azrul@gmail.com','2022-10-18 21:39:40'),(35,'Izzudin Roslan','0178494647','izzudin@gmail.com','2022-11-25 19:30:06'),(36,'FAZREEN','0135487848','ekinxoxoxo@gmail.com','2022-11-26 15:05:56'),(37,'amir hamzah','0172090464','etourmersingmta@gmail.com','2022-11-26 22:27:19'),(38,'Fazreen','0135487848','ekinxoxoxo@gnail.com','2022-12-01 15:07:42'),(39,'AZRUL HAFIZ BIN ABDULLAH AZRUL','0172090464','azrulhafiz0177@gmail.com','2022-12-02 00:37:51'),(40,'Black Eagle','0172090464','azrulhafiz3099@gmail.com','2023-05-05 11:26:47');
/*!40000 ALTER TABLE `islandcustomer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `islandhopping`
--

DROP TABLE IF EXISTS `islandhopping`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `islandhopping` (
  `hopping_ID` int NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `priceA` float NOT NULL,
  `priceC` float NOT NULL,
  `image1` varchar(200) NOT NULL,
  `image2` varchar(200) NOT NULL,
  `image3` varchar(200) NOT NULL,
  `image4` varchar(200) NOT NULL,
  `islandIncluded` varchar(500) NOT NULL,
  `packageIncluded` varchar(500) NOT NULL,
  `phonenum1` varchar(200) NOT NULL,
  `phonenum2` varchar(200) NOT NULL,
  `itenerary` varchar(500) NOT NULL,
  PRIMARY KEY (`hopping_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `islandhopping`
--

LOCK TABLES `islandhopping` WRITE;
/*!40000 ALTER TABLE `islandhopping` DISABLE KEYS */;
INSERT INTO `islandhopping` (`hopping_ID`, `name`, `priceA`, `priceC`, `image1`, `image2`, `image3`, `image4`, `islandIncluded`, `packageIncluded`, `phonenum1`, `phonenum2`, `itenerary`) VALUES (9,'ADVENTURE',180,90,'MTG6.jpg','3P7.jpg','MTG7.jpg','3P52.jpg','Pulau Sibu Kukus , Pulau Tokong Rakit , Pulau Lima , Pulau Mentigi , Pulau Tinggi','Boat Transfer & Guide , Snorkeling Equipment  , Lunch & Drinks , Life Jacket/ Safety Equipment','018-3835565 (Mr. Firdaus)','013-3351433 (Mrs. Azwa)','8.30am - Registration & short briefing  9.00am - Registration & short briefing  5.00pm - Depart back & arrived at jetty');
/*!40000 ALTER TABLE `islandhopping` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `islandpayment`
--

DROP TABLE IF EXISTS `islandpayment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `islandpayment` (
  `payment_id` int NOT NULL AUTO_INCREMENT,
  `booking_id` int NOT NULL,
  `reference_no` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `payment_status` varchar(200) NOT NULL DEFAULT 'pending',
  `billcode` varchar(200) NOT NULL,
  `amount` float DEFAULT NULL,
  `transaction_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `payment_created_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `payment_updated_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`payment_id`),
  KEY `islandBooking` (`booking_id`),
  CONSTRAINT `islandBooking` FOREIGN KEY (`booking_id`) REFERENCES `islandbooking` (`booking_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `islandpayment`
--

LOCK TABLES `islandpayment` WRITE;
/*!40000 ALTER TABLE `islandpayment` DISABLE KEYS */;
INSERT INTO `islandpayment` (`payment_id`, `booking_id`, `reference_no`, `payment_status`, `billcode`, `amount`, `transaction_time`, `payment_created_on`, `payment_updated_on`) VALUES (25,29,'TP149252178482819251122','success','mqw047tp',451,'2022-11-25 19:30:06','2022-11-25 19:30:06','2022-11-25 19:30:23'),(26,30,NULL,'pending','otj8e8fd',271,'2022-11-26 15:05:56','2022-11-26 15:05:56','2022-11-26 15:05:56'),(27,31,'TP149414007092622261122','success','xhitm446',211,'2022-11-26 22:27:19','2022-11-26 22:27:19','2022-11-26 22:29:39'),(28,32,NULL,'pending','a8628c6w',351,'2022-12-01 15:07:42','2022-12-01 15:07:42','2022-12-01 15:07:42'),(29,33,'TP150386291373600021222','success','x0bccx6x',361,'2022-12-02 00:37:51','2022-12-02 00:37:51','2022-12-02 00:38:08'),(30,34,NULL,'pending','611gy38q',141,'2023-05-05 11:26:47','2023-05-05 11:26:47','2023-05-05 11:26:47');
/*!40000 ALTER TABLE `islandpayment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `islandvacation`
--

DROP TABLE IF EXISTS `islandvacation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `islandvacation` (
  `vacation_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `price` float NOT NULL,
  `image1` varchar(200) NOT NULL,
  `image2` varchar(200) NOT NULL,
  `image3` varchar(200) NOT NULL,
  `image4` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `packageIncluded` varchar(500) NOT NULL,
  `phonenum1` varchar(200) NOT NULL,
  `phonenum2` varchar(200) NOT NULL,
  PRIMARY KEY (`vacation_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `islandvacation`
--

LOCK TABLES `islandvacation` WRITE;
/*!40000 ALTER TABLE `islandvacation` DISABLE KEYS */;
INSERT INTO `islandvacation` (`vacation_id`, `name`, `price`, `image1`, `image2`, `image3`, `image4`, `address`, `packageIncluded`, `phonenum1`, `phonenum2`) VALUES (19,'ASEANIA BEACH RESORT',600,'asea1.jpg','asea2.jpg','asea4.jpg','asea5.jpg','Lot 33, 34 & 35, Pulau Besar (Johor) , Pulau Babi Besar, 86800 Mersing, Johor','-2 ways Boat Transfer -2 Nights Accommodation -Full Board Meal -1 Jungle/Beach Trekking -Complimentary Coffee and Tea','018-3835565 (Mr. Firdaus)','013-3351433 (Mrs. Azwa)'),(20,'BLUEWATER RESORT',550,'aur2.jpg','aur1.jpg','aur6.jpg','aur8.jpg','Bluewater Resort, Pulau Aur, 86800 Mersing, Johor','-2 ways Boat Transfer -2 Nights Accommodation -Full Board Meal -1 Snorkeling Trip -Hiking 2 Point','018-3835565 (Mr. Firdaus)','013-3351433 (Mrs. Azwa)'),(22,'D COCONUT RESORT',455,'dcoco2.jpg','D-Coconut-Pulau-Besar-Deluxe-Chalet.jpg','D-Coconut-Pulau-Besar-Deluxe-Chalet-2.jpg','4f4ec4cc-5f98-4a31-919b-0898c249a421.jpg','D Coconut Island Resort, Pulau Besar 86810 Mersing, Johor','2 ways Boat Transfer , 2 Nights Accommodation Full Board Meal ,1 Jungle/Beach Trekking ,Free flow drink for one hour','018-3835565 (Mr. Firdaus)','013-3351433 (Mrs. Azwa)'),(23,'RAWA ISLAND RESORT',1350,'rawa6-waterfrontbunglo2.jpg','rawa4-cafe.jpg','rawa5.jpg','rawa3-hlsde.jpg','Rawa Island Resort, Rawa Island, 86800 Mersing, Johor','2 ways Boat Transfer , 2 Nights Accommodation , Full Board Meal -Welcome Drink','018-3835565 (Mr. Firdaus)','013-3351433 (Mrs. Azwa)'),(24,'BLUEWATER RESORT',550,'aur2.jpg','aur1.jpg','aur7.jpg','aur3.jpg','Bluewater Resort, Pulau Aur, 86800 Mersing, Johor','2 ways Boat Transfer , 2 Nights Accommodation , Full Board Meal ,1 Snorkeling Trip ,Hiking 2 Point','018-3835565 (Mr. Firdaus)','013-3351433 (Mrs. Azwa)'),(25,'SARI PACIFICA RESORT',560,'SP4.2.jpg','SP1.jpg','SP2.jpg','SP3.jpg','Sari Pacifica Resort, Pulau Sibu Sibu Island, 86800 Mersing, Johor','2 ways Boat Transfer ,2 Nights Accommodation , Full Board Meal , 1 Snorkeling Trip , Free flow drink for one hour','018-3835565 (Mr. Firdaus)','013-3351433 (Mrs. Azwa)');
/*!40000 ALTER TABLE `islandvacation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `payment` (
  `payment_id` int NOT NULL AUTO_INCREMENT,
  `booking_id` int NOT NULL,
  `reference_no` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `payment_status` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'pending',
  `billcode` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `amount` float DEFAULT NULL,
  `transaction_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `payment_created_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `payment_updated_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`payment_id`),
  KEY `booking` (`booking_id`)
) ENGINE=InnoDB AUTO_INCREMENT=150 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payment`
--

LOCK TABLES `payment` WRITE;
/*!40000 ALTER TABLE `payment` DISABLE KEYS */;
INSERT INTO `payment` (`payment_id`, `booking_id`, `reference_no`, `payment_status`, `billcode`, `amount`, `transaction_time`, `payment_created_on`, `payment_updated_on`) VALUES (35,96,NULL,'pending','xy7dvi6j',NULL,'2022-10-11 22:08:24','2022-10-11 22:08:24','2024-05-06 18:45:52'),(36,97,NULL,'pending','wf6wvofj',NULL,'2022-10-11 22:11:37','2022-10-11 22:11:37','2024-05-06 18:45:52'),(37,103,'TP143232121371022111022','success','vtbezlr2',NULL,'2022-10-11 22:12:48','2022-10-11 22:12:48','2024-05-06 18:45:52'),(38,98,'TP143234136391622111022','success','p30wmesx',561,'2022-10-11 22:18:51','2022-10-11 22:18:51','2024-05-06 18:45:52'),(39,105,'TP143238024422522111022','success','rbiwzbvi',561,'2022-10-11 22:27:54','2022-10-11 22:27:54','2024-05-06 18:45:52'),(40,106,'TP143240002442722111022','success','5gvg8gtn',561,'2022-10-11 22:29:55','2022-10-11 22:29:55','2024-05-06 18:45:52'),(41,107,NULL,'pending','bsc5nbxb',561,'2022-10-11 22:36:39','2022-10-11 22:36:39','2024-05-06 18:45:52'),(42,100,'TP143243156403822111022','success','l1q429lc',561,'2022-10-11 22:40:52','2022-10-11 22:40:52','2024-05-06 18:45:52'),(43,101,'TP143244007334022111022','success','3o811cov',561,'2022-10-11 22:42:45','2022-10-11 22:42:45','2024-05-06 18:45:52'),(44,102,'','fail','',591,'2022-10-12 15:06:44','2022-10-12 15:06:44','2024-05-06 18:45:52'),(45,103,'','fail','',456,'2022-10-12 15:12:38','2022-10-12 15:12:38','2024-05-06 18:45:52'),(46,104,NULL,'pending','7plv7dzd',591,'2022-10-12 15:18:34','2022-10-12 15:18:34','2024-05-06 18:45:52'),(47,113,'TP24483576012301923121022','success','juoqo5ss',591,'2022-10-12 15:19:29','2022-10-12 15:19:29','2024-05-06 18:45:52'),(48,105,'TP24483779274153023121022','success','zp4u3whu',591,'2022-10-12 15:30:15','2022-10-12 15:30:15','2024-05-06 18:45:52'),(49,106,NULL,'pending','rcpewpyb',591,'2022-10-12 15:34:46','2022-10-12 15:34:46','2024-05-06 18:45:52'),(50,107,NULL,'pending','mdpeeccz',591,'2022-10-12 15:36:17','2022-10-12 15:36:17','2024-05-06 18:45:52'),(51,108,NULL,'pending','hjam0y52',591,'2022-10-13 16:47:56','2022-10-13 16:47:56','2024-05-06 18:45:52'),(52,0,'','fail','',1,'2022-10-13 16:48:11','2022-10-13 16:48:11','2024-05-06 18:45:52'),(53,109,NULL,'pending','6gtfekh7',1351,'2022-10-13 18:12:42','2022-10-13 18:12:42','2024-05-06 18:45:52'),(54,110,NULL,'pending','8hb052ax',591,'2022-10-13 20:29:01','2022-10-13 20:29:01','2024-05-06 18:45:52'),(55,111,NULL,'pending','nmu2q91k',561,'2022-10-13 20:29:50','2022-10-13 20:29:50','2024-05-06 18:45:52'),(56,112,NULL,'pending','70whacsr',591,'2022-10-13 20:44:27','2022-10-13 20:44:27','2024-05-06 18:45:52'),(57,113,NULL,'pending','0x4ez4l0',591,'2022-10-13 21:40:17','2022-10-13 21:40:17','2024-05-06 18:45:52'),(58,114,NULL,'pending','617kktfr',1351,'2022-10-13 21:42:44','2022-10-13 21:42:44','2024-05-06 18:45:52'),(59,115,NULL,'pending','kbzl96jh',456,'2022-10-14 11:47:26','2022-10-14 11:47:26','2024-05-06 18:45:52'),(60,125,NULL,'pending','2aqd97ly',1366,'2022-10-14 11:47:36','2022-10-14 11:47:36','2024-05-06 18:45:52'),(61,116,NULL,'pending','l714l5ec',1181,'2022-10-14 11:52:48','2022-10-14 11:52:48','2024-05-06 18:45:52'),(62,127,NULL,'pending','4dnj0aih',591,'2022-10-14 12:17:53','2022-10-14 12:17:53','2024-05-06 18:45:52'),(63,128,NULL,'pending','af046e9x',2701,'2022-10-14 15:54:05','2022-10-14 15:54:05','2024-05-06 18:45:52'),(64,129,NULL,'pending','wmzve5ti',456,'2022-10-14 15:54:47','2022-10-14 15:54:47','2024-05-06 18:45:52'),(65,130,NULL,'pending','by10toal',591,'2022-10-17 23:36:26','2022-10-17 23:36:26','2024-05-06 18:45:52'),(66,131,NULL,'pending','uolm34kp',2361,'2022-10-17 23:51:21','2022-10-17 23:51:21','2024-05-06 18:45:52'),(67,132,'','fail','',1,'2022-10-18 21:40:20','2022-10-18 21:40:20','2024-05-06 18:45:52'),(68,133,NULL,'pending','99i3e53n',2731,'2022-10-18 21:40:40','2022-10-18 21:40:40','2024-05-06 18:45:52'),(69,134,NULL,'pending','f038znn7',3301,'2022-10-18 23:38:24','2022-10-18 23:38:24','2024-05-06 18:45:52'),(70,135,'TP25006913317365607051122','fail','2frirecc',456,'2022-11-04 23:56:33','2022-11-04 23:56:33','2024-05-06 18:45:52'),(71,136,NULL,'pending','bs51m6ir',2276,'2022-11-09 14:11:45','2022-11-09 14:11:45','2024-05-06 18:45:52'),(72,137,NULL,'pending','jf3hgz70',1771,'2022-11-13 11:32:14','2022-11-13 11:32:14','2024-05-06 18:45:52'),(73,138,NULL,'pending','kqrpiiet',1181,'2022-11-16 12:42:20','2022-11-16 12:42:20','2024-05-06 18:45:52'),(119,149,'TP149251393472519251122','success','dal1301r',1351,'2022-11-25 19:27:05','2022-11-25 19:27:05','2022-11-25 19:27:25'),(120,150,'TP149415221073022261122','success','vr490j97',1771,'2022-11-26 22:31:18','2022-11-26 22:31:18','2022-11-26 22:32:00'),(121,151,'TP25452528425405417271122','fail','06qktp2d',591,'2022-11-27 09:54:39','2022-11-27 09:54:39','2022-11-27 09:55:41'),(122,152,'TP149448455545110271122','success','ep8yqq46',1181,'2022-11-27 10:53:03','2022-11-27 10:53:03','2022-11-27 10:53:50'),(123,153,NULL,'pending','q7jzp09p',591,'2022-11-27 11:02:40','2022-11-27 11:02:40','2022-11-27 11:02:40'),(124,154,'TP25454621477065219271122','fail','ka1tmqbr',2701,'2022-11-27 11:52:06','2022-11-27 11:52:06','2022-11-27 11:53:11'),(125,155,'TP25455231070523020271122','fail','c3ei14rw',1181,'2022-11-27 12:30:52','2022-11-27 12:30:52','2022-11-27 12:32:40'),(126,156,'TP25455348276193820271122','fail','8ny89hrk',2701,'2022-11-27 12:38:19','2022-11-27 12:38:19','2022-11-27 12:39:14'),(127,157,'TP25455707054325920271122','fail','wm0w66cs',1181,'2022-11-27 12:59:32','2022-11-27 12:59:32','2022-11-27 13:00:56'),(128,158,'TP25456505402024921271122','fail','27dag2kq',1181,'2022-11-27 13:49:02','2022-11-27 13:49:02','2022-11-27 13:51:06'),(129,159,NULL,'pending','rymfiwxc',2361,'2022-11-28 20:46:06','2022-11-28 20:46:06','2022-11-28 20:46:06'),(130,160,NULL,'pending','ue3gvz2h',591,'2022-11-29 09:24:12','2022-11-29 09:24:12','2022-11-29 09:24:12'),(131,161,NULL,'pending','8u4haes5',911,'2022-12-02 00:33:28','2022-12-02 00:33:28','2022-12-02 00:33:28'),(132,196,NULL,'pending','xkblnf6s',456,'2023-01-15 00:48:22','2023-01-15 00:48:22','2023-01-15 00:48:22'),(133,197,NULL,'pending','0djc4faf',1366,'2023-01-15 00:48:50','2023-01-15 00:48:50','2023-01-15 00:48:50'),(134,0,NULL,'pending','',1,'2023-11-03 01:00:52','2023-11-03 01:00:52','2023-11-03 01:00:52'),(135,0,NULL,'pending','',1,'2023-11-17 15:46:44','2023-11-17 15:46:44','2023-11-17 15:46:44'),(136,0,NULL,'pending','',1,'2023-12-03 01:51:55','2023-12-03 01:51:55','2023-12-03 01:51:55'),(137,0,NULL,'pending','',1,'2023-12-22 10:28:41','2023-12-22 10:28:41','2023-12-22 10:28:41'),(138,0,NULL,'pending','',1,'2024-01-16 10:30:21','2024-01-16 10:30:21','2024-01-16 10:30:21'),(139,0,NULL,'pending','',1,'2024-05-10 14:46:25','2024-05-10 14:46:25','2024-05-10 14:46:25'),(140,0,NULL,'pending','',1,'2024-06-07 02:30:42','2024-06-07 02:30:42','2024-06-07 02:30:42'),(141,0,NULL,'pending','',1,'2024-07-04 21:38:41','2024-07-04 21:38:41','2024-07-04 21:38:41'),(142,0,NULL,'pending','',1,'2024-07-05 14:02:29','2024-07-05 14:02:29','2024-07-05 14:02:29'),(143,0,NULL,'pending','',1,'2024-07-31 19:47:32','2024-07-31 19:47:32','2024-07-31 19:47:32'),(144,0,NULL,'pending','',1,'2024-08-27 13:01:20','2024-08-27 13:01:20','2024-08-27 13:01:20'),(145,0,NULL,'pending','',1,'2024-09-06 13:42:05','2024-09-06 13:42:05','2024-09-06 13:42:05'),(146,0,NULL,'pending','',1,'2024-09-23 20:32:31','2024-09-23 20:32:31','2024-09-23 20:32:31'),(147,0,NULL,'pending','',1,'2024-10-24 04:46:05','2024-10-24 04:46:05','2024-10-24 04:46:05'),(148,0,NULL,'pending','',1,'2024-10-26 13:34:20','2024-10-26 13:34:20','2024-10-26 13:34:20'),(149,0,NULL,'pending','',1,'2024-10-31 08:31:13','2024-10-31 08:31:13','2024-10-31 08:31:13');
/*!40000 ALTER TABLE `payment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `receipt`
--

DROP TABLE IF EXISTS `receipt`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `receipt` (
  `receipt_ID` int NOT NULL AUTO_INCREMENT,
  `payment_id` varchar(200) NOT NULL,
  `billcode` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `destination` varchar(200) NOT NULL,
  `checkIn` varchar(200) NOT NULL,
  `checkOut` varchar(200) NOT NULL,
  `pax` varchar(200) NOT NULL,
  `totalPrice` varchar(200) NOT NULL,
  PRIMARY KEY (`receipt_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `receipt`
--

LOCK TABLES `receipt` WRITE;
/*!40000 ALTER TABLE `receipt` DISABLE KEYS */;
INSERT INTO `receipt` (`receipt_ID`, `payment_id`, `billcode`, `status`, `fullname`, `destination`, `checkIn`, `checkOut`, `pax`, `totalPrice`) VALUES (34,'119','dal1301r','success','Iman Akmal','RAWA ISLAND RESORT','2022-11-18','2022-11-20','1','1350'),(36,'120','vr490j97','success','amir hamzah','ASEANIA BEACH RESORT','2022-12-03','2022-12-05','3','1770'),(37,'','','fail','','','','','',''),(38,'121','06qktp2d','fail','amir hamzah','ASEANIA BEACH RESORT','2022-12-06','2022-12-08','1','590'),(39,'','','fail','','','','','',''),(40,'122','ep8yqq46','success','amir hamzah','ASEANIA BEACH RESORT','2022-12-04','2022-12-06','2','1180'),(41,'','','fail','','','','','',''),(42,'124','ka1tmqbr','fail','amir hamzah','RAWA ISLAND RESORT','2022-12-06','2022-12-08','2','2700'),(43,'','','fail','','','','','',''),(44,'125','c3ei14rw','fail','amir hamzah','ASEANIA BEACH RESORT','2022-12-04','2022-12-06','2','1180'),(45,'','','fail','','','','','',''),(46,'126','8ny89hrk','fail','amir hamzah','RAWA ISLAND RESORT','2022-12-05','2022-12-07','2','2700'),(47,'','','fail','','','','','',''),(48,'127','wm0w66cs','fail','amir hamzah','ASEANIA BEACH RESORT','2022-12-04','2022-12-06','2','1180'),(49,'','','fail','','','','','',''),(50,'128','27dag2kq','fail','amir hamzah','ASEANIA BEACH RESORT','2022-12-04','2022-12-06','2','1180');
/*!40000 ALTER TABLE `receipt` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'etourmer_etourmersing'
--

--
-- Dumping routines for database 'etourmer_etourmersing'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-11-16  3:24:37
