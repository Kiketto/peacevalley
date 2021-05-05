CREATE TABLE usuario (
id_usuario INT AUTO_INCREMENT PRIMARY KEY,
nombre VARCHAR(20) NOT NULL,
email VARCHAR(20) NOT NULL,
contrasenya VARCHAR(20) NOT NULL
);

CREATE TABLE cancion (
id_cancion INT AUTO_INCREMENT PRIMARY KEY,
nombre VARCHAR(20) NOT NULL,
autor VARCHAR(20),
formato VARCHAR(20) NOT NULL,
genero VARCHAR(20),
duracion INT NOT NULL
);

CREATE TABLE paisaje (
id_paisaje INT AUTO_INCREMENT PRIMARY KEY,
nombre VARCHAR(20) NOT NULL,
autor VARCHAR(20),
formato VARCHAR(20) NOT NULL,
categoria VARCHAR(20)
);


CREATE TABLE escena (
id_escena INT AUTO_INCREMENT PRIMARY KEY,
nombre VARCHAR(20) NOT NULL,
autor VARCHAR(20),
tipo VARCHAR(20),
id_cancionEscena INT NOT NULL,
id_paisajeEscena INT NOT NULL,
  CONSTRAINT FK_idCancionEscena FOREIGN KEY (id_cancionEscena)
      REFERENCES cancion (id_cancion),
  CONSTRAINT FK_idPaisajeEscena FOREIGN KEY (id_paisajeEscena)
      REFERENCES paisaje (id_paisaje)
);

CREATE TABLE favmusica (
	id_favMusica INT AUTO_INCREMENT PRIMARY KEY,
    id_usuarioFavMusica INT NOT NULL,
    id_musicaFavMusica INT NOT NULL,
    CONSTRAINT FK_idMusicaFavMusica FOREIGN KEY (id_musicaFavMusica)
      REFERENCES cancion (id_cancion),
  CONSTRAINT FK_idUsuarioFavMusica FOREIGN KEY (id_usuarioFavMusica)
      REFERENCES usuario (id_usuario)
);

CREATE TABLE favpaisaje (
	id_favPaisaje INT AUTO_INCREMENT PRIMARY KEY,
    id_usuarioFavPaisaje INT NOT NULL,
    id_paisajeFavPaisaje INT NOT NULL,
    CONSTRAINT FK_idPaisajeFavPaisaje FOREIGN KEY (id_paisajeFavPaisaje)
      REFERENCES paisaje (id_paisaje),
  CONSTRAINT FK_idUsuarioFavPaisaje FOREIGN KEY (id_usuarioFavPaisaje)
      REFERENCES usuario (id_usuario)
);
