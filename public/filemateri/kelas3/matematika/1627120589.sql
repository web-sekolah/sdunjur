CREATE DATABASE DesaWisataTuktuk;

USE DesaWisataTuktuk;

-- Table structure for table `user`

CREATE TABLE `user` (
  `ID_User` INT(10) NOT NULL,
  `Username` VARCHAR(100) DEFAULT NULL,
  `PASSWORD` VARCHAR(100) DEFAULT NULL,
  `Nama` VARCHAR(100) DEFAULT NULL,
  `Kontak` VARCHAR(20) DEFAULT NULL,
  `Email` VARCHAR(50) DEFAULT NULL
);

-- Dumping data for table `user`

INSERT INTO `user` (`ID_User`, `Username`, `PASSWORD`, `Nama`, `Kontak`, `Email`) VALUES
(1, 'marisi12', '87a7spyd', 'Marisi Naibaho', '+6282102935677', 'marisiNaibaho12@gmail.com'),
(2, 'togar90', 'p9ashfjd', 'Togar Sinaga', '+6282187465432', 'togarsinaga47@gmail.com'),
(3, 'but3t33', 'o8dahap', 'Butet Simanungkalit', '+6282198700099', 'butetsimanungkalit78@gmail.com'),
(4, 'turnip00', '98asyd9i', 'Poltak Turnip', '+6285567892345', 'poltakturnip98@gmail.com'),
(5, 'songgot90', '0a8sdhshd0', 'Songgot Lubis', '+6282102977777', 'songgotlubis123@gmail.com'),
(6, 'asiap00', 'a08sd0jdk', 'Asion Nainggolan', '+6282209863454', 'asionnainggolan@gmail.com'),
(7, 'bangkit980', 'a08su0da', 'Bangkit Siallagan', '+6281309890909', 'bangkitsiallangan65@gmail.com'),
(8, '3duard90', '0as8ua0s', 'Eduard Halsen', '+6289923451234', 'eduard@gmail.com'),
(9, 'sur123', '0a8sud0a8s', 'Surti Jawak', '+628976832824', 'surti12jawak@gmail.com'),
(10, 'ba1m0n', 'd9ays9d', 'Balmon Sembiring', '+6282247561648', 'balmonsembiring@gmail.com');

-- Indexes for table `user`
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_User`);
  
  

-- Table structure for table `halamanevent`

CREATE TABLE `halamanevent` (
  `ID_Event` VARCHAR(10) NOT NULL,
  `Nama_Event` VARCHAR(100) DEFAULT NULL,
  `Tgl_Pelaksanaan` DATE DEFAULT NULL,
  `Tgl_Selesai` DATE DEFAULT NULL,
  `Gambar` VARCHAR(100) DEFAULT NULL,
  `Deskripsi` VARCHAR(255) DEFAULT NULL,
  `Lokasi` VARCHAR(100) DEFAULT NULL
);

-- Dumping data for table `halamanevent`

INSERT INTO `halamanevent` (`ID_Event`, `Nama_Event`, `Tgl_Pelaksanaan`, `Tgl_Selesai`, `Gambar`, `Deskripsi`, `Lokasi`) VALUES
('E001', 'Samosir Fiesta', '2021-08-25', '2021-08-27', 'aces.jpg', 'Event terbaik sepanjang masa', 'Open Stage'),
('E002', 'Festival Danau Toba', '2021-09-25', '2021-09-30', 'festival.jpg', 'Event terbaik sepanjang hayat', 'Bukit Beta'),
('E003', 'Gondang Naposo', '2021-10-17', '2021-10-20', 'gondang.jpg', 'Even untuk naposo', 'Open Stage'),
('E004', 'Samosir Music Festival', '2021-05-09', '2021-05-11', 'samosir.jpg', 'Event Music terbesar di samosir', 'Open Stage'),
('E005', 'Night Comedy Batak', '2021-07-22', '2021-07-25', 'night.jpg', 'Event terlucu disamosir', 'Open Stage'),
('E006', 'Festival Dayung Solu', '2021-12-20', '2021-12-22', 'dayung.jpg', 'Event Olahraga terbesar di Samosir', 'Danau Toba'),
('E007', 'Festival Ulos', '2021-11-25', '2021-11-27', 'ulos.jpg', 'Event Kesenian Terbesar di Samosir', 'Gedung Kesenian'),
('E008', 'Samosir Art Festival', '2021-02-12', '2021-02-15', 'art.jpg', 'Event Lukisan Terbaik di Samosir', 'Gedung Kesenian'),
('E009', 'Sigale-gale Carnaval', '2021-10-08', '2021-10-10', 'galegale.jpg', 'Event Patung Kayu Terbesar di Samosir', 'Lumban Bakkara'),
('E010', 'Situmorang Festival', '2021-09-10', '2021-09-12', 'situmorang.jpg', 'Event Marga terbaik di Samosir', 'Open Stage');


-- Indexes for table `halamanevent`

ALTER TABLE `halamanevent`
  ADD PRIMARY KEY (`ID_Event`);
  
  
  
-- Table structure for table `halamansouvenir`

CREATE TABLE `halamansouvenir` (
  `ID_Souvenir` VARCHAR(10) NOT NULL,
  `Nama_Toko` VARCHAR(100) DEFAULT NULL,
  `Nama_Souvenir` VARCHAR(100) DEFAULT NULL,
  `Harga` INT(10) DEFAULT NULL,
  `Gambar` VARCHAR(50) DEFAULT NULL,
  `Deskripsi` VARCHAR(225) DEFAULT NULL,
  `Kontak` VARCHAR(20) DEFAULT NULL
);

-- Dumping data for table `halamansouvenir`

INSERT INTO `halamansouvenir` (`ID_Souvenir`, `Nama_Toko`, `Nama_Souvenir`, `Harga`, `Gambar`, `Deskripsi`, `Kontak`) VALUES
('S001', 'Saragih Store', 'Patung Ikan', 20000, 'ikan.jpg', 'Terbuat dari kayu Jati', '+6282102935677'),
('S002', 'Saragih Store', 'Patung sigale-gale mini', 100000, 'sigale.jpg', 'Terbuat dari Kayu Pilihan', '+6282187465432'),
('S003', 'Retta Store', 'Gantungan Kunci', 15000, 'kunci.jpg', 'Kualitas Ekspor', '+6282198700099'),
('S004', 'Samosir Souvenir', 'Sarung Tenun Motif Ulos', 30000, 'sarung.jpg', 'Bahan lembut dan tidak mudah sobek', '+6285567892345'),
('S005', 'Situmorang Store', 'Ulos Sadum', 50000, 'ulos.png', 'Berbahan lambut dan motif keren', '+6282102977777'),
('S006', 'Nainggolan Store', 'Sor Tali', 15000, 'sor.png', 'Bermotif gorga keren', '+622209863454'),
('S007', 'Siallagan', 'Tas Enceng Gondok', 40000, 'tas.jpg', 'Kuat dan tahan lama', '+6281309890909'),
('S008', 'AD Souvenir', 'Kaos Lake Toba  ', 25000, 'kaos.jpg', 'Bahan lembut dan bagus', '+6289923451234'),
('S009', 'Rawa Ukiran', 'Ukiran Rumah Adat', 120000, 'rumah.jpg', 'Terbuat dari kayu pilihan dan berkualitas', '+628976832824'),
('S010', 'VenyS Souvenir', 'Baju Motif Batak', 25000, 'motif.png', 'Baju bagus dan tidak luntur', '+6282247561648');
  

-- Indexes for table `halamansouvenir`

ALTER TABLE `halamansouvenir`
  ADD PRIMARY KEY (`ID_Souvenir`);
  
  
  
-- Table structure for table `halamanhotel`

CREATE TABLE `halamanhotel` (
  `ID_Hotel` VARCHAR(10) NOT NULL,
  `Nama_Hotel` VARCHAR(100) DEFAULT NULL,
  `Gambar` VARCHAR(50) DEFAULT NULL,
  `Lokasi` VARCHAR(100) DEFAULT NULL,
  `Deskripsi` VARCHAR(225) DEFAULT NULL,
  `Rating` VARCHAR(225) DEFAULT NULL,
  `Fasilitas` VARCHAR(225) DEFAULT NULL
);

-- Dumping data for table `halamanhotel`

INSERT INTO `halamanhotel` (`ID_Hotel`, `Nama_Hotel`, `Gambar`, `Lokasi`, `Deskripsi`, `Rating`, `Fasilitas`) VALUES
('H001', 'Carolina', 'car.jpg', 'jl.Lingkar Tuk-Tuk', 'Hotel bagus dan murah', 'Bintang 2', 'Wifi,restoran,kolam'),
('H002', 'Silintong', 'sil.jpg', 'jl.Situmorang', 'Hotel kelas dunia', 'Bintang 0', 'Wifi'),
('H003', 'Samosir Cottage', 'sam.jpg', 'jl.Lingkar Tuk-Tuk', 'Penginapan internasional', 'Bintang 1', 'Wifi,restoran,kolam'),
('H004', 'Bernard', 'ber.jpg', 'jl.Lingkar Tuk-Tuk', 'Hotel Gratis', 'Bintang 4', 'restoran,kolam'),
('H005', 'Rogate', 'rog.jpg', 'jl.Kesenian', 'Hotel terbaik di Tuk-Tuk', 'Bintang 0', 'Wifi,restoran'),
('H006', 'Sanggam', 'sang.jpg', 'Stage', 'Hotel bagus dan murah', 'Bintang 0', 'Wifi,restoran'),
('H007', 'Tabo', 'tabo.jpg', 'jl.Lingkar Tuk-Tuk', 'Hotel bintang lima', 'Bintang 5', 'Wifi,restoran,kolam,gym,sauna'),
('H008', 'Anju', 'anju.jpg', 'jl.Lingkar Tuk-Tuk', 'Hotel dengan fasilitas terlengkap', 'Bintang 2', 'kolam'),
('H009', 'Romlan', 'rom.jpg', 'jl.Inpres', 'Hotel bagus dan murah', 'Bintang 3', 'Wifi,kolam'),
('H010', 'Marroan', 'mar.jpg', 'jl.Sibolopian', 'Hotel terbersih', 'Bintang 1', 'Wifi,restoran,kolam,gym');


-- Indexes for table `halamanhotel`

ALTER TABLE `halamanhotel`
  ADD PRIMARY KEY (`ID_Hotel`);
  


-- Table structure for table `user_halamanevent`

CREATE TABLE `user_halamanevent` (
  `ID_User` INT(10) NOT NULL,
  `ID_Event` VARCHAR(10) NOT NULL
);

-- Dumping data for table `user_halamanevent`

INSERT INTO `user_halamanevent` (`ID_User`, `ID_Event`) VALUES
(1, 'E003'),
(2, 'E003'),
(3, 'E003'),
(4, 'E005'),
(5, 'E003'),
(6, 'E004'),
(7, 'E002'),
(8, 'E004'),
(9, 'E002'),
(10, 'E002');


-- Indexes for table `user_halamanevent`

ALTER TABLE `user_halamanevent`
  ADD PRIMARY KEY (`ID_User`,`ID_Event`),
  ADD KEY `ID_Event` (`ID_Event`);

-- Constraints for table `user_halamanevent`

ALTER TABLE `user_halamanevent`
  ADD CONSTRAINT `user_halamanevent_ibfk_1` FOREIGN KEY (`ID_User`) REFERENCES `user` (`ID_User`),
  ADD CONSTRAINT `user_halamanevent_ibfk_2` FOREIGN KEY (`ID_Event`) REFERENCES `halamanevent` (`ID_Event`);





-- Table structure for table `user_halamanhotel`

CREATE TABLE `user_halamanhotel` (
  `ID_User` INT(10) NOT NULL,
  `ID_Hotel` VARCHAR(10) NOT NULL
);

-- Dumping data for table `user_halamanhotel`

INSERT INTO `user_halamanhotel` (`ID_User`, `ID_Hotel`) VALUES
(1, 'H003'),
(2, 'H004'),
(3, 'H005'),
(4, 'H001'),
(5, 'H003'),
(6, 'H005'),
(7, 'H003'),
(8, 'H005'),
(9, 'H003'),
(10, 'H002');

-- Indexes for table `user_halamanhotel`

ALTER TABLE `user_halamanhotel`
  ADD PRIMARY KEY (`ID_User`,`ID_Hotel`),
  ADD KEY `ID_Hotel` (`ID_Hotel`);
  
  
-- Constraints for table `user_halamanhotel`

ALTER TABLE `user_halamanhotel`
  ADD CONSTRAINT `user_halamanhotel_ibfk_1` FOREIGN KEY (`ID_User`) REFERENCES `user` (`ID_User`),
  ADD CONSTRAINT `user_halamanhotel_ibfk_2` FOREIGN KEY (`ID_Hotel`) REFERENCES `halamanhotel` (`ID_Hotel`);
  
  
  


-- Table structure for table `user_halamansouvenir`

CREATE TABLE `user_halamansouvenir` (
  `ID_User` INT(10) NOT NULL,
  `ID_Souvenir` VARCHAR(10) NOT NULL
);

-- Dumping data for table `user_halamansouvenir`

INSERT INTO `user_halamansouvenir` (`ID_User`, `ID_Souvenir`) VALUES
(1, 'S001'),
(2, 'S001'),
(3, 'S001'),
(4, 'S003'),
(5, 'S002'),
(6, 'S004'),
(7, 'S007'),
(8, 'S008'),
(9, 'S005'),
(10, 'S006');

-- Indexes for table `user_halamansouvenir`

ALTER TABLE `user_halamansouvenir`
  ADD PRIMARY KEY (`ID_User`,`ID_Souvenir`),
  ADD KEY `ID_Souvenir` (`ID_Souvenir`);
  

-- Constraints for table `user_halamansouvenir`

ALTER TABLE `user_halamansouvenir`
  ADD CONSTRAINT `user_halamansouvenir_ibfk_1` FOREIGN KEY (`ID_User`) REFERENCES `user` (`ID_User`),
  ADD CONSTRAINT `user_halamansouvenir_ibfk_2` FOREIGN KEY (`ID_Souvenir`) REFERENCES `halamansouvenir` (`ID_Souvenir`);
  
  
  


-- Table structure for table `admin`

CREATE TABLE `admin` (
  `ID_admin` INT(10) NOT NULL,
  `Username` VARCHAR(20) NOT NULL,
  `Password` VARCHAR(20) NOT NULL
);

-- Dumping data for table `admin`


INSERT INTO `admin` (`ID_admin`, `Username`, `Password`) VALUES
(1001, 'ahmad', 'ahmad223'),
(1002, 'dani', '8201dani'),
(1003, 'wordyka', 'wordyk@073'),
(1004, 'rizki', 'r1zk19923'),
(1005, 'daniel', 'd@n13L92141'),
(1006, 'agnes', '89734771'),
(1007, 'onai', 'nadapdap8241'),
(1008, 'simon', 'simon13294'),
(1009, 'elsha', '5ito4u599879'),
(1010, 'ucok', 'toba0381214');

-- Indexes for table `admin`

ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID_admin`);



-- Table structure for table `admin_halamanevent`

CREATE TABLE `admin_halamanevent` (
  `ID_admin` INT(10) NOT NULL,
  `ID_event` VARCHAR(10) NOT NULL
);


-- Dumping data for table `admin_halamanevent`

INSERT INTO `admin_halamanevent` (`ID_admin`, `ID_event`) VALUES
(1002, 'E006'),
(1003, 'E005'),
(1004, 'E002'),
(1006, 'E008'),
(1007, 'E010'),
(1008, 'E010'),
(1009, 'E001'),
(1009, 'E004'),
(1010, 'E004'),
(1010, 'E008');

-- Indexes for table `admin_halamanevent`

ALTER TABLE `admin_halamanevent`
  ADD PRIMARY KEY (`ID_admin`,`ID_event`),
  ADD KEY `ID_event` (`ID_event`);

-- Constraints for table `admin_halamanevent`

ALTER TABLE `admin_halamanevent`
  ADD CONSTRAINT `admin_halamanevent_ibfk_1` FOREIGN KEY (`ID_admin`) REFERENCES `admin` (`ID_admin`),
  ADD CONSTRAINT `admin_halamanevent_ibfk_2` FOREIGN KEY (`ID_event`) REFERENCES `halamanevent` (`ID_Event`);





-- Table structure for table `admin_halamanhotel`

CREATE TABLE `admin_halamanhotel` (
  `ID_admin` INT(10) NOT NULL,
  `ID_Hotel` VARCHAR(10) NOT NULL
);

-- Dumping data for table `admin_halamanhotel`

INSERT INTO `admin_halamanhotel` (`ID_admin`, `ID_Hotel`) VALUES
(1001, 'H003'),
(1002, 'H007'),
(1002, 'H008'),
(1003, 'H009'),
(1004, 'H007'),
(1005, 'H005'),
(1005, 'H006'),
(1006, 'H001'),
(1007, 'H006'),
(1008, 'H003');

-- Indexes for table `admin_halamanhotel`

ALTER TABLE `admin_halamanhotel`
  ADD PRIMARY KEY (`ID_admin`,`ID_Hotel`),
  ADD KEY `ID_Hotel` (`ID_Hotel`);


-- Constraints for table `admin_halamanhotel`

ALTER TABLE `admin_halamanhotel`
  ADD CONSTRAINT `admin_halamanhotel_ibfk_1` FOREIGN KEY (`ID_admin`) REFERENCES `admin` (`ID_admin`),
  ADD CONSTRAINT `admin_halamanhotel_ibfk_2` FOREIGN KEY (`ID_Hotel`) REFERENCES `halamanhotel` (`ID_Hotel`);



-- Table structure for table `admin_halamansouvenir`


CREATE TABLE `admin_halamansouvenir` (
  `ID_admin` INT(10) NOT NULL,
  `ID_souvenir` VARCHAR(10) NOT NULL
);


-- Dumping data for table `admin_halamansouvenir`

INSERT INTO `admin_halamansouvenir` (`ID_admin`, `ID_souvenir`) VALUES
(1002, 'S010'),
(1004, 'S007'),
(1004, 'S008'),
(1004, 'S009'),
(1007, 'S003'),
(1007, 'S004'),
(1007, 'S006'),
(1007, 'S008'),
(1008, 'S001'),
(1008, 'S004');

-- Indexes for table `admin_halamansouvenir`

ALTER TABLE `admin_halamansouvenir`
  ADD PRIMARY KEY (`ID_admin`,`ID_Souvenir`),
  ADD KEY `ID_Souvenir` (`ID_Souvenir`);


-- Constraints for table `admin_halamansouvenir`

ALTER TABLE `admin_halamansouvenir`
  ADD CONSTRAINT `admin_halamansouvenir_ibfk_1` FOREIGN KEY (`ID_admin`) REFERENCES `admin` (`ID_admin`),
  ADD CONSTRAINT `admin_halamansouvenir_ibfk_2` FOREIGN KEY (`ID_souvenir`) REFERENCES `halamansouvenir` (`ID_Souvenir`);
