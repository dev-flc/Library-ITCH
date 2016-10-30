
CREATE DATABASE biblioteca;
	use biblioteca;

CREATE TABLE encuesta(
	ENC_id INT NOT NULL AUTO_INCREMENT,
	ENC_matricula INT(8) NOT NULL,
	ENC_carrera INT(10) NOT NULL,
	ENC_fecha DATE,
	ENC_hora TIME,
	PRIMARY KEY (ENC_id)
	);

CREATE TABLE usuario(
	USU_id INT NOT NULL AUTO_INCREMENT,
	USU_nombre VARCHAR(45),
	USU_apellidos_p VARCHAR(45),
	USU_apellidos_m VARCHAR(45),
	USU_usuario VARCHAR(45),
	USU_password VARCHAR(45),
	PRIMARY KEY (USU_id)
); 
CREATE TABLE megusta(
	MEG_likes INT(10) NOT NULL
); 

CREATE TABLE nomegusta(
	NOM_likes INT(10) NOT NULL
);

CREATE TABLE meencanta(
	MEE_likes INT(10) NOT NULL
);
/*likes*/
INSERT INTO megusta VALUES (213);
INSERT INTO nomegusta VALUES (10);
INSERT INTO meencanta VALUES (17);

/*  sistemas */
INSERT INTO encuesta VALUES (null,10520265,1,'2016-10-29','12:00:00');
INSERT INTO encuesta VALUES (null,10520266,1,'2016-10-29','12:00:00');
INSERT INTO encuesta VALUES (null,10520267,1,'2016-10-29','12:00:00');
INSERT INTO encuesta VALUES (null,10520268,1,'2016-10-29','12:00:00');
INSERT INTO encuesta VALUES (null,10520269,1,'2016-10-29','12:00:00');

/* informatica */
INSERT INTO encuesta VALUES (null,10520279,2,'2016-10-29','12:00:00');
INSERT INTO encuesta VALUES (null,10520278,2,'2016-10-29','12:00:00');
INSERT INTO encuesta VALUES (null,10520277,2,'2016-10-29','12:00:00');

/* civil */
INSERT INTO encuesta VALUES (null,10520277,3,'2016-10-29','12:00:00');
INSERT INTO encuesta VALUES (null,10520277,3,'2016-10-29','12:00:00');

/* gestion */
INSERT INTO encuesta VALUES (null,10520277,4,'2016-10-29','12:00:00');
INSERT INTO encuesta VALUES (null,10520277,4,'2016-10-29','12:00:00');
INSERT INTO encuesta VALUES (null,10520277,4,'2016-10-29','12:00:00');

/* contador */
INSERT INTO encuesta VALUES (null,10520277,5,'2016-10-29','12:00:00');

/* usuario admin */
INSERT INTO usuario VALUES (null,'nombre','paterno','materno','admin','12345');