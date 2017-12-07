CREATE DATABASE  IF NOT EXISTS `blog` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `blog`;
-- MySQL dump 10.13  Distrib 5.5.58, for debian-linux-gnu (x86_64)
--
-- Host: 192.168.33.30    Database: blog
-- ------------------------------------------------------
-- Server version	5.7.20-0ubuntu0.16.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `date_create` date DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,'Lệnh RENAME Table trong SQL','Lệnh RENAME Table được sử dụng để thay tên một bảng. Đôi khi bạn chọn một tên không mang nhiều ý nghĩa cho bảng, do đó cần thiết phải thay đổi lại. Cú pháp để thay tên bảng từ cơ sở dữ liệu như sau: ALTER TABLE ten_bang RENAME TO ten_bang_moi;. Một cách khác, bạn có thể viết lệnh sau để thay tên cho ...','2017-12-06',3),(2,'','Lệnh RENAME Table được sử dụng để thay tên một bảng. Đôi khi bạn chọn một tên không mang nhiều ý nghĩa cho bảng, do đó cần thiết phải thay đổi lại. Cú pháp để thay tên bảng từ cơ sở dữ liệu như sau: ALTER TABLE ten_bang RENAME TO ten_bang_moi;. Một cách khác, bạn có thể viết lệnh sau để thay tên cho ...','2017-12-08',3),(3,'Lệnh RENAME Table trong SQL','Lệnh RENAME Table được sử dụng để thay tên một bảng. Đôi khi bạn chọn một tên không mang nhiều ý nghĩa cho bảng, do đó cần thiết phải thay đổi lại. Cú pháp để thay tên bảng từ cơ sở dữ liệu như sau: ALTER TABLE ten_bang RENAME TO ten_bang_moi;. Một cách khác, bạn có thể viết lệnh sau để thay tên cho ..','2017-12-20',3),(4,'Lệnh RENAME Table trong SQL ','Lệnh RENAME Table được sử dụng để thay tên một bảng. Đôi khi bạn chọn một tên không mang nhiều ý nghĩa cho bảng, do đó cần thiết phải thay đổi lại. Cú pháp để thay tên bảng từ cơ sở dữ liệu như sau: ALTER TABLE ten_bang RENAME TO ten_bang_moi;. Một cách khác, bạn có thể viết lệnh sau để thay tên cho ...','2017-12-12',6),(5,'Lệnh ALTER TABLE trong SQL ','Lệnh ALTER TABLE trong SQL được sử dụng để thêm, xóa hoặc sửa đổi các cột trong một bảng đang tồn tại. Bạn cũng sẽ sử dụng lệnh ALTER TABLE để thêm và xóa các ràng buộc đa dạng trên một bảng đang tồn tại.','2017-12-06',6),(6,'MySQL - Đổi tên cột trong bảng','Lệnh RENAME Table được sử dụng để thay tên một bảng. Đôi khi bạn chọn một tên không mang nhiều ý nghĩa cho bảng, do đó cần thiết phải thay đổi lại. Cú pháp để thay tên bảng từ cơ sở dữ liệu như sau: ALTER TABLE ten_bang RENAME TO ten_bang_moi;. Một cách khác, bạn có thể viết lệnh sau để thay tên cho ...','2017-12-29',5),(7,'Làm thế nào để đổi tên một cột trong database table sử dụng SQL','Nếu tôi muốn chỉ cần đổi tên một cột (thay đổi type hoặc ràng buộc, chỉ tên của mình) tại một database SQL sử dụng SQL, làm thế nào để tôi làm điều đó? Hoặc là nó không thể? Điều này là dành cho bất kỳ database tuyên bố để hỗ trợ SQL, tôi chỉ đơn giản là tìm kiếm một SQL-query cụ thể sẽ làm việc bất kể database thực ...','2017-12-22',5),(8,'Khởi tạo, xóa, sửa Table trong SQL Server','ALTER COLUMN <Tên Column> <Kiểu dữ liệu cần sửa>. Ngoài thêm/ sửa column trong bảng, lệnh ALTER còn có thể thêm/ sửa khóa chính, khóa ngoại, các ràng buộc, hàm/thủ tục,… sẽ đề cập ở các bài sau trong khóa SỬ DỤNG SQL SERVER. Ví dụ: Thêm cột NGAYSINH có kiểu dữ liệu DATA vào bảng GIANGVIEN.','2017-12-20',5),(9,'Convert from MySQL datetime to another format with PHP','\r\n	\r\n\r\nIf you\'re looking for a way to normalize a date into MySQL format, use the following\r\n\r\n$phpdate = strtotime( $mysqldate );\r\n$mysqldate = date( \'Y-m-d H:i:s\', $phpdate );\r\n\r\nThe line $phpdate = strtotime( $mysqldate ) accepts a string and performs a series of heuristics to turn that string into a unix timestamp.\r\n\r\nThe line $mysqldate = date( \'Y-m-d H:i:s\', $phpdate ) uses that timestamp and PHP\'s date function to turn that timestamp back into MySQL\'s standard date format.','2017-12-14',3);
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `avata` varchar(255) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'adsdf','sdfafdsa','dsafas','fsdafsda'),(2,'Array',NULL,NULL,NULL),(3,'admin','admin','LeThanhLuan.jpg',NULL),(4,'Array',NULL,NULL,NULL),(5,'quan le nguyen','nguyenle','LeThanhLuan.jpg','123456'),(6,'chi le trinh','chile','LeThanhLuan.jpg','123456'),(7,'1weqtwet','weqtert','LeThanhLuan.jpg','trewtrewt'),(8,'asfdsa','sadfdasf','LeThanhLuan.jpg','safdsaf'),(9,'sfgdsgfd','gfdsgdsg','LeThanhLuan.jpg','sadfasdfdsfd'),(10,'asfdsafasf','asadfa','LeThanhLuan.jpg','qwreqwrewqrewr'),(11,'linh nguyen le','linhle@gmail.com','projects_9.jpg','123456');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-12-07  9:15:06
