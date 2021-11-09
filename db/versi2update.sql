-- MariaDB dump 10.19  Distrib 10.5.12-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: siaka
-- ------------------------------------------------------
-- Server version	10.5.12-MariaDB-1:10.5.12+maria~focal

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `barang`
--

DROP TABLE IF EXISTS `barang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `barang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_barang` varchar(10) DEFAULT NULL,
  `nama_barang` varchar(100) DEFAULT NULL,
  `harga_beli` varchar(100) DEFAULT NULL,
  `harga_jual` varchar(100) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `satuan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `barang`
--

LOCK TABLES `barang` WRITE;
/*!40000 ALTER TABLE `barang` DISABLE KEYS */;
INSERT INTO `barang` VALUES (1,'53525585','Desentralisasi','10000','12500',99999990,'kg'),(2,'90598509','PNBP','1500','1750',99999991,'sachet');
/*!40000 ALTER TABLE `barang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_toko`
--

DROP TABLE IF EXISTS `data_toko`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_toko` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_toko` varchar(80) DEFAULT NULL,
  `nama_pemilik` varchar(80) DEFAULT NULL,
  `no_telepon` varchar(15) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_toko`
--

LOCK TABLES `data_toko` WRITE;
/*!40000 ALTER TABLE `data_toko` DISABLE KEYS */;
INSERT INTO `data_toko` VALUES (1,'Politeknik Negeri Jakarta ','Dr. sc. Zainal Nur Arifin, Dipl. Eng. HTL. MT.','0217270036','Jl. Prof. DR. G.A. Siwabessy, Kukusan, Kecamatan Beji, Kota Depok, Jawa Barat 16424');
/*!40000 ALTER TABLE `data_toko` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detail_penjualan`
--

DROP TABLE IF EXISTS `detail_penjualan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detail_penjualan` (
  `no_penjualan` varchar(20) DEFAULT NULL,
  `nama_barang` varchar(100) DEFAULT NULL,
  `harga_barang` varchar(20) DEFAULT NULL,
  `jumlah_barang` int(11) DEFAULT NULL,
  `satuan` varchar(20) DEFAULT NULL,
  `sub_total` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detail_penjualan`
--

LOCK TABLES `detail_penjualan` WRITE;
/*!40000 ALTER TABLE `detail_penjualan` DISABLE KEYS */;
INSERT INTO `detail_penjualan` VALUES ('SKM1636386798','Desentralisasi','12500',2,'kg','25000'),('SKM1636386888','PNBP','1750',2,'sachet','3500'),('SKM1636386979','PNBP','1750',2,'sachet','3500'),('SKM1636387565','Desentralisasi','Pengembangan Seharga',0,'kg','Pergiko cebok'),('SKM1636387623','Desentralisasi','12500',1,'kg','12500'),('SKM1636389840','PNBP','1750',1,'sachet','1750'),('SKM1636390087','Desentralisasi','fartusev',1,'kg','NaN'),('SKM1636390278','Desentralisasi','ecsdfvdfvfvd',0,'','NaN'),('SKM1636390344','PNBP','dfdfd',0,'','NaN'),('SKM1636390625','Desentralisasi','sdsdfds',0,'','sds'),('SKM1636390639','Desentralisasi','seeses',1,'','1'),('SKM1636390727','Desentralisasi','dsad',0,'','dfdsfs'),('SKM1636390754','Desentralisasi','dsdsf',0,'','1'),('SKM1636390767','Desentralisasi','effeferfef',1,'','1'),('SKM1636390947','Desentralisasi','fgfgfgfgfgf',0,'',''),('SKM1636390970','Desentralisasi','rtrtr',1,'','1'),('SKM1636391012','Desentralisasi','hgfhf',0,'','454'),('SKM1636391525','PNBP','ergreg',4,'','4'),('SKM1636391541','PNBP','ggrtg',0,'','grtgtr'),('SKM1636391651','PNBP','dgdfgdfgfdgfg',3,'','3'),('SKM1636391664','Desentralisasi','gfgbfbgfb',0,'','fgfdgf'),('SKM1636392163','PNBP','dsdfds',0,'','dfdf'),('SKM1636392175','Desentralisasi','fdfsfsf',1,'','1'),('SKM1636392216','Desentralisasi','',0,'',''),('SKM1636392437','Desentralisasi','semangat kawan',1,'','1'),('SKM1636392665','PNBP','ddsd',1,'','1'),('SKM1636392678','PNBP','e3eewd',0,'','dffs'),('SKM1636392766','Desentralisasi','dfsfsdfds',0,'','dfs'),('SKM1636392778','Desentralisasi','fsfd',0,'','sasa'),('SKM1636392798','Desentralisasi','dua',0,'','empat'),('SKM1636392831','Desentralisasi','2',3,'','4'),('SKM1636392974','Desentralisasi','hgfhghgh',0,'',''),('SKM1636393103','Desentralisasi','dfdsg',0,'','fdgfd'),('SKM1636393103','Desentralisasi','dfdsg',0,'','fdgfd'),('SKM1636393184','PNBP','sdssds',0,'','sds'),('SKM1636393237','Desentralisasi','sc',0,'','csdc'),('SKM1636393446','Desentralisasi','vxcvcx',0,'','vcxvxc'),('SKM1636393464','PNBP','xcvcxv',0,'','cvxv'),('SKM1636393497','Desentralisasi','farman2',0,'','farman4'),('SKM1636393556','PNBP','asas',0,'','asa');
/*!40000 ALTER TABLE `detail_penjualan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kasir`
--

DROP TABLE IF EXISTS `kasir`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kasir` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_kasir` varchar(10) DEFAULT NULL,
  `nama_kasir` varchar(100) DEFAULT NULL,
  `username_kasir` varchar(20) DEFAULT NULL,
  `password_kasir` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kasir`
--

LOCK TABLES `kasir` WRITE;
/*!40000 ALTER TABLE `kasir` DISABLE KEYS */;
INSERT INTO `kasir` VALUES (5,'USER - 84','Riri Sumarni, S.Kom.Msi','19901112202111','rini54'),(20,'USER - 44','Ahmad Azwar','19901107202101','123123Ab');
/*!40000 ALTER TABLE `kasir` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kategori`
--

DROP TABLE IF EXISTS `kategori`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `kode_kategori` varchar(10) DEFAULT NULL,
  `nama_kategori` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kategori`
--

LOCK TABLES `kategori` WRITE;
/*!40000 ALTER TABLE `kategori` DISABLE KEYS */;
INSERT INTO `kategori` VALUES (1,'K001','Desentralisasi'),(2,'K002','PNBP');
/*!40000 ALTER TABLE `kategori` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pengguna`
--

DROP TABLE IF EXISTS `pengguna`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_pengguna` varchar(10) DEFAULT NULL,
  `nama_pengguna` varchar(100) DEFAULT NULL,
  `username_pengguna` varchar(20) DEFAULT NULL,
  `password_pengguna` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pengguna`
--

LOCK TABLES `pengguna` WRITE;
/*!40000 ALTER TABLE `pengguna` DISABLE KEYS */;
INSERT INTO `pengguna` VALUES (1,'PGN17','Nugrohoo','nugrohoff','pwd_nugroho'),(3,'PENGGUNA -','ADMIN-SINFOLITMAS','19900117202111','123456Ab');
/*!40000 ALTER TABLE `pengguna` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `penjualan`
--

DROP TABLE IF EXISTS `penjualan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `penjualan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_penjualan` varchar(20) DEFAULT NULL,
  `nama_kasir` varchar(100) DEFAULT NULL,
  `tgl_penjualan` varchar(20) DEFAULT NULL,
  `jam_penjualan` varchar(20) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `penjualan`
--

LOCK TABLES `penjualan` WRITE;
/*!40000 ALTER TABLE `penjualan` DISABLE KEYS */;
INSERT INTO `penjualan` VALUES (50,'SKM1636392437','ADMIN-SINFOLITMAS','09/11/2021','00:27:17',1),(51,'SKM1636392665','ADMIN-SINFOLITMAS','09/11/2021','00:31:05',1),(52,'SKM1636392678','ADMIN-SINFOLITMAS','09/11/2021','00:31:18',0),(53,'SKM1636392766','ADMIN-SINFOLITMAS','09/11/2021','00:32:46',0),(54,'SKM1636392778','ADMIN-SINFOLITMAS','09/11/2021','00:32:58',0),(55,'SKM1636392798','ADMIN-SINFOLITMAS','09/11/2021','00:33:18',0),(56,'SKM1636392831','ADMIN-SINFOLITMAS','09/11/2021','00:33:51',4),(57,'SKM1636392974','ADMIN-SINFOLITMAS','09/11/2021','00:36:14',0),(58,'SKM1636393103','ADMIN-SINFOLITMAS','09/11/2021','00:38:23',0),(59,'SKM1636393103','ADMIN-SINFOLITMAS','09/11/2021','00:38:23',0),(60,'SKM1636393184','ADMIN-SINFOLITMAS','09/11/2021','00:39:44',0),(61,'SKM1636393237','ADMIN-SINFOLITMAS','09/11/2021','00:40:37',0),(62,'SKM1636393446','ADMIN-SINFOLITMAS','09/11/2021','00:44:06',0),(63,'SKM1636393464','ADMIN-SINFOLITMAS','09/11/2021','00:44:24',0),(64,'SKM1636393497','ADMIN-SINFOLITMAS','09/11/2021','00:44:57',0),(65,'SKM1636393556','ADMIN-SINFOLITMAS','09/11/2021','00:45:56',0);
/*!40000 ALTER TABLE `penjualan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `skeme`
--

DROP TABLE IF EXISTS `skeme`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `skeme` (
  `id` int(11) NOT NULL,
  `form_number` varchar(30) DEFAULT NULL,
  `c_user` varchar(100) DEFAULT NULL,
  `tanggal` varchar(100) DEFAULT NULL,
  `jam` varchar(100) DEFAULT NULL,
  `kategori` varchar(100) DEFAULT NULL,
  `nama_skim` varchar(100) DEFAULT NULL,
  `min_pendidikan` varchar(100) DEFAULT NULL,
  `min_jabatan` varchar(100) DEFAULT NULL,
  `min_anggota` varchar(100) DEFAULT NULL,
  `max_anggota` varchar(100) DEFAULT NULL,
  `min_biaya` varchar(100) DEFAULT NULL,
  `max_biaya` varchar(100) DEFAULT NULL,
  `min_pelaksana` varchar(100) DEFAULT NULL,
  `max_pelaksana` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skeme`
--

LOCK TABLES `skeme` WRITE;
/*!40000 ALTER TABLE `skeme` DISABLE KEYS */;
INSERT INTO `skeme` VALUES (0,'SKM/2021/NEW-84','ADMIN-SINFOLITMAS','09/11/2021','20:37:40','PNBP','Penelitian Dasar Perguruan Tinggi','Sarjana S2','Lektor','2','5','2000000','5000000','2','5');
/*!40000 ALTER TABLE `skeme` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `skim`
--

DROP TABLE IF EXISTS `skim`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `skim` (
  `id` int(11) NOT NULL,
  `kategori` varchar(30) DEFAULT NULL,
  `nama_skim` varchar(100) DEFAULT NULL,
  `pendidikan` varchar(100) DEFAULT NULL,
  `jabatan` varchar(100) DEFAULT NULL,
  `anggota` varchar(100) DEFAULT NULL,
  `min` int(11) DEFAULT NULL,
  `max` int(11) DEFAULT NULL,
  `mincost` varchar(100) DEFAULT NULL,
  `maxcost` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skim`
--

LOCK TABLES `skim` WRITE;
/*!40000 ALTER TABLE `skim` DISABLE KEYS */;
/*!40000 ALTER TABLE `skim` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-11-09 23:39:44
