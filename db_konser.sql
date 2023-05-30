CREATE TABLE tb_artis (
  id_artis int(50) NOT NULL AUTO_INCREMENT,
  nama_artis varchar(100) NOT NULL,
  hrg_artis varchar(50) NOT NULL,
  PRIMARY KEY(id_artis)
);
CREATE TABLE tb_tiket (
  id_tiket int(50) NOT NULL AUTO_INCREMENT,
  nama_tiket varchar(100) NOT NULL,
  hrg_tiket varchar(50) NOT NULL,
  PRIMARY KEY(id_tiket)
);
CREATE TABLE tb_sponsor (
  id_sponsor int(50) NOT NULL AUTO_INCREMENT,
  nama_sponsor varchar(100) NOT NULL,
  hrg_sponsor varchar(50) NOT NULL,
  PRIMARY KEY(id_sponsor)
);