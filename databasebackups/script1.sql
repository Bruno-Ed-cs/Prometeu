


CREATE TABLE Cards (
  idCards INT UNSIGNED NOT NULL AUTO_INCREMENT,
  NomeFilosofo VARCHAR(255) NOT NULL,
  Cardpath VARCHAR(225) NULL,
  PRIMARY KEY (idCards),
  UNIQUE INDEX idCards_UNIQUE (idCards ASC) VISIBLE)



-- -----------------------------------------------------
-- Table mydb.Artigos
-- -----------------------------------------------------
CREATE TABLE Artigos (
  idArtigos INT NOT NULL AUTO_INCREMENT,
  Titulo VARCHAR(255) NOT NULL,
  Localizacao VARCHAR(500) NOT NULL,
  Descricao MEDIUMTEXT NULL,
  Thumbnail VARCHAR(500) NULL,
  Publicacao DATE NOT NULL,
  Assunto VARCHAR(255) NOT NULL,
  PRIMARY KEY (idArtigos),
  UNIQUE INDEX idArtigos_UNIQUE (idArtigos ASC) VISIBLE)
ENGINE = InnoDB;


