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
