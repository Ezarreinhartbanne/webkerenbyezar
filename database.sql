CREATE DATABASE manajemen_kost;
USE manajemen_kost;

CREATE TABLE penyewa (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nama VARCHAR(100) NOT NULL,
  no_kamar VARCHAR(10) NOT NULL,
  no_hp VARCHAR(15) NOT NULL
);
    