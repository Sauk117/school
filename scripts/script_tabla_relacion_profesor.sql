CREATE TABLE `examen`.`do_ni_gr_ma` (
  `id_docente` INT NOT NULL,
  `id_nivel` INT NOT NULL,
  `id_grupo` INT NOT NULL,
  `id_materia` INT NOT NULL)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE `examen`.`nivel` (
  `id_nivel` INT NOT NULL AUTO_INCREMENT,
  `nivel` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`id_nivel`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

insert into nivel values(1,'Preparatoria');
insert into nivel values(2,'Secundaria');
insert into nivel values(3,'Primaria');

CREATE TABLE `examen`.`grados` (
  `id_grado` INT NOT NULL AUTO_INCREMENT,
  `grado` VARCHAR(50) NOT NULL,
  `nivel` INT NOT NULL,
  PRIMARY KEY (`id_grado`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

insert into grados values(1,'Primer Semestre',1);
insert into grados values(2,'Segundo Semestre',1);
insert into grados values(3,'Tercer Semestre',1);
insert into grados values(4,'Cuarto Semestre',1);
insert into grados values(5,'Quinto Semestre',1);
insert into grados values(6,'Sexto Semestre',1);
insert into grados values(7,'Primero',2);
insert into grados values(8,'Segundo',2);
insert into grados values(9,'Tercero',2);
insert into grados values(10,'Primero',3);
insert into grados values(11,'Segundo',3);
insert into grados values(12,'Tercero',3);
insert into grados values(13,'Cuarto',3);
insert into grados values(14,'Quinto',3);
insert into grados values(15,'Sexto',3);

ALTER TABLE `examen`.`materias` 
CHANGE COLUMN `materia` `materia` VARCHAR(250) NOT NULL ;

-- primer semestre
insert into materias(materia,nivel,grado) values ('Matemáticas I',1,1);
insert into materias(materia,nivel,grado) values ('Lectura y Redacción I',1,1);
insert into materias(materia,nivel,grado) values ('Etimologías I',1,1);
insert into materias(materia,nivel,grado) values ('Lengua Extranjera I(Inglés)',1,1);
insert into materias(materia,nivel,grado) values ('Introducción a la lógica',1,1);
insert into materias(materia,nivel,grado) values ('Psicología del Desarrollo Humano',1,1);
insert into materias(materia,nivel,grado) values ('Química I',1,1);
insert into materias(materia,nivel,grado) values ('Educación Física y Artística I',1,1);
insert into materias(materia,nivel,grado) values ('Orientación Educativa I',1,1);
-- segundo semestre
insert into materias(materia,nivel,grado) values ('Matemáticas II',1,2);
insert into materias(materia,nivel,grado) values ('Lectura y Redacción II',1,2);
insert into materias(materia,nivel,grado) values ('Etimologías II',1,2);
insert into materias(materia,nivel,grado) values ('Lengua Extranjera II (Inglés)',1,2);
insert into materias(materia,nivel,grado) values ('Metodología de la investigación',1,2);
insert into materias(materia,nivel,grado) values ('Historia Universal contemporánea',1,2);
insert into materias(materia,nivel,grado) values ('Química II',1,2);
insert into materias(materia,nivel,grado) values ('Educación Física y Artística II',1,2);
insert into materias(materia,nivel,grado) values ('Orientación Educativa II',1,2);
-- tercer semestre
insert into materias(materia,nivel,grado) values ('Matemáticas III',1,3);
insert into materias(materia,nivel,grado) values ('Análisis Literario I',1,3);
insert into materias(materia,nivel,grado) values ('Filosofía I',1,3);
insert into materias(materia,nivel,grado) values ('Lengua Extranjera III (Inglés)',1,3);
insert into materias(materia,nivel,grado) values ('Biología I',1,3);
insert into materias(materia,nivel,grado) values ('Historia Prehispánica y Colonial de México',1,3);
insert into materias(materia,nivel,grado) values ('Física I',1,3);
insert into materias(materia,nivel,grado) values ('Educación Física y Artística II',1,3);
insert into materias(materia,nivel,grado) values ('Orientación Vocacional I',1,3);
-- cuarto semestre
insert into materias(materia,nivel,grado) values ('Matemáticas IV',1,4);
insert into materias(materia,nivel,grado) values ('Análisis Literario II',1,4);
insert into materias(materia,nivel,grado) values ('Filosofía II',1,4);
insert into materias(materia,nivel,grado) values ('Lengua Extranjera IV (Inglés)',1,4);
insert into materias(materia,nivel,grado) values ('Biología II',1,4);
insert into materias(materia,nivel,grado) values ('Historia Moderna de México',1,4);
insert into materias(materia,nivel,grado) values ('Física II',1,4);
insert into materias(materia,nivel,grado) values ('Educación Física y Artística IV',1,4);
insert into materias(materia,nivel,grado) values ('Orientación Vocacional II',1,4);
-- quinto semestre
insert into materias(materia,nivel,grado) values ('Matematicas V',1,5);
insert into materias(materia,nivel,grado) values ('Análisis Literario III',1,5);
insert into materias(materia,nivel,grado) values ('Derecho I',1,5);
insert into materias(materia,nivel,grado) values ('Lengua Extranjera V (Inglés)',1,5);
insert into materias(materia,nivel,grado) values ('OPTATIVA',1,5);
insert into materias(materia,nivel,grado) values ('Sociología',1,5);
insert into materias(materia,nivel,grado) values ('OPTATIVA',1,5);
insert into materias(materia,nivel,grado) values ('Educación Física y Artística V',1,5);
-- sexto semestre
insert into materias(materia,nivel,grado) values ('OPTATIVA',1,6);
insert into materias(materia,nivel,grado) values ('OPTATIVA',1,6);
insert into materias(materia,nivel,grado) values ('Ética y Derechos Humanos ',1,6);
insert into materias(materia,nivel,grado) values ('Problemas Políticos, Sociales y Económicos del México Contemporáneo',1,6);
insert into materias(materia,nivel,grado) values ('Principios de Ecología',1,6);
insert into materias(materia,nivel,grado) values ('Antropología',1,6);
insert into materias(materia,nivel,grado) values ('OPTATIVA',1,6);
insert into materias(materia,nivel,grado) values ('Educación Física y Artística VI',1,6);
insert into materias(materia,nivel,grado) values ('Orientación Profesional II',1,6);
-- primero Secundaria
insert into materias(materia,nivel,grado) values ('Español I',2,7);
insert into materias(materia,nivel,grado) values ('Matemáticas I',2,7);
insert into materias(materia,nivel,grado) values ('Ciencias I (Énfasis en Biología)',2,7);
insert into materias(materia,nivel,grado) values ('Geografía de México y del Mundo',2,7);
insert into materias(materia,nivel,grado) values ('Lengua Extranjera I',2,7);
insert into materias(materia,nivel,grado) values ('Educación Física I',2,7);
insert into materias(materia,nivel,grado) values ('Tecnología I *',2,7);
insert into materias(materia,nivel,grado) values ('Artes (Música, Danza, Teatro o Artes Visuales)',2,7);
insert into materias(materia,nivel,grado) values ('Asignatura Estatal',2,7);
insert into materias(materia,nivel,grado) values ('Orientación y Tutoría',2,7);
-- segundo secu
insert into materias(materia,nivel,grado) values ('Español II',2,8);
insert into materias(materia,nivel,grado) values ('Matemáticas II',2,8);
insert into materias(materia,nivel,grado) values ('Ciencias II (Énfasis en Física)',2,8);
insert into materias(materia,nivel,grado) values ('Historia I',2,8);
insert into materias(materia,nivel,grado) values ('Formación Cívica y Ética I',2,8);
insert into materias(materia,nivel,grado) values ('Lengua Extranjera II',2,8);
insert into materias(materia,nivel,grado) values ('Educación Física II',2,8);
insert into materias(materia,nivel,grado) values ('Tecnología II',2,8);
insert into materias(materia,nivel,grado) values ('Artes (Música, Danza, Teatro ó Artes Visuales)',2,8);
insert into materias(materia,nivel,grado) values ('Orientación y Tutoría',2,8);
-- tercero secu
insert into materias(materia,nivel,grado) values ('Español III',2,9);
insert into materias(materia,nivel,grado) values ('Matemáticas III',2,9);
insert into materias(materia,nivel,grado) values ('Ciencias III (Énfasis en Química)',2,9);
insert into materias(materia,nivel,grado) values ('Historia II',2,9);
insert into materias(materia,nivel,grado) values ('Formación Cívica y Ética II',2,9);
insert into materias(materia,nivel,grado) values ('Lengua Extranjera III',2,9);
insert into materias(materia,nivel,grado) values ('Educación Física III',2,9);
insert into materias(materia,nivel,grado) values ('Tecnología III',2,9);
insert into materias(materia,nivel,grado) values ('Artes (Música, Danza, Teatro ó Artes Visuales)',2,9);
insert into materias(materia,nivel,grado) values ('Orientación y Tutoría ',2,9);
-- primero primaria
insert into materias(materia,nivel,grado) values ('Español',3,10);
insert into materias(materia,nivel,grado) values ('Matemáticas',3,10);
insert into materias(materia,nivel,grado) values ('Exploración de la Naturaleza y la Sociedad',3,10);
insert into materias(materia,nivel,grado) values ('Formación Cívica y Ética',3,10);
insert into materias(materia,nivel,grado) values ('Educación Artística',3,10);
insert into materias(materia,nivel,grado) values ('Educación Física',3,10);
-- segundoPrimaria
insert into materias(materia,nivel,grado) values ('Español',3,11);
insert into materias(materia,nivel,grado) values ('Matemáticas',3,11);
insert into materias(materia,nivel,grado) values ('Exploración de la Naturaleza y la Sociedad',3,11);
insert into materias(materia,nivel,grado) values ('Formación Cívica y Ética',3,11);
insert into materias(materia,nivel,grado) values ('Educación Artística',3,11);
insert into materias(materia,nivel,grado) values ('Educación Física',3,11);
-- tercero primaria
insert into materias(materia,nivel,grado) values ('Español',3,12);
insert into materias(materia,nivel,grado) values ('Matemáticas',3,12);
insert into materias(materia,nivel,grado) values ('Ciencias Naturales',3,12);
insert into materias(materia,nivel,grado) values ('La Entidad Donde Vivo',3,12);
insert into materias(materia,nivel,grado) values ('Formación Cívica y Ética',3,12);
insert into materias(materia,nivel,grado) values ('Educación Artística',3,12);
insert into materias(materia,nivel,grado) values ('Educación Física',3,12);
-- cuarto primaria
insert into materias(materia,nivel,grado) values ('Español',3,13);
insert into materias(materia,nivel,grado) values ('Matemáticas',3,13);
insert into materias(materia,nivel,grado) values ('Ciencias Naturales',3,13);
insert into materias(materia,nivel,grado) values ('Geografía',3,13);
insert into materias(materia,nivel,grado) values ('Historia',3,13);
insert into materias(materia,nivel,grado) values ('Formación Cívica y Ética',3,13);
insert into materias(materia,nivel,grado) values ('Educación Artística',3,13);
insert into materias(materia,nivel,grado) values ('Educación Física',3,13);
-- quinto primaria
insert into materias(materia,nivel,grado) values ('Español',3,14);
insert into materias(materia,nivel,grado) values ('Matemáticas',3,14);
insert into materias(materia,nivel,grado) values ('Ciencias Naturales',3,14);
insert into materias(materia,nivel,grado) values ('Geografía',3,14);
insert into materias(materia,nivel,grado) values ('Historia',3,14);
insert into materias(materia,nivel,grado) values ('Formación Cívica y Ética',3,14);
insert into materias(materia,nivel,grado) values ('Educación Artística',3,14);
insert into materias(materia,nivel,grado) values ('Educación Física',3,14);
-- sexto primaria
insert into materias(materia,nivel,grado) values ('Español',3,13);
insert into materias(materia,nivel,grado) values ('Matemáticas',3,13);
insert into materias(materia,nivel,grado) values ('Ciencias Naturales',3,13);
insert into materias(materia,nivel,grado) values ('Geografía',3,13);
insert into materias(materia,nivel,grado) values ('Historia',3,13);
insert into materias(materia,nivel,grado) values ('Formación Cívica y Ética',3,13);
insert into materias(materia,nivel,grado) values ('Ingles',3,13);
insert into materias(materia,nivel,grado) values ('Educación Artística',3,13);

-- agregado de grupos

delete from grupo;

insert into grupo(grupo,nivel,turno,grado) values(311,1,1,1);
insert into grupo(grupo,nivel,turno,grado) values(321,1,2,1);
insert into grupo(grupo,nivel,turno,grado) values(312,1,1,2);
insert into grupo(grupo,nivel,turno,grado) values(322,1,2,2);
insert into grupo(grupo,nivel,turno,grado) values(313,1,1,3);
insert into grupo(grupo,nivel,turno,grado) values(323,1,2,3);
insert into grupo(grupo,nivel,turno,grado) values(314,1,1,4);
insert into grupo(grupo,nivel,turno,grado) values(324,1,2,4);
insert into grupo(grupo,nivel,turno,grado) values(315,1,1,5);
insert into grupo(grupo,nivel,turno,grado) values(325,1,2,5);
insert into grupo(grupo,nivel,turno,grado) values(316,1,1,6);
insert into grupo(grupo,nivel,turno,grado) values(326,1,2,6);

insert into grupo(grupo,nivel,turno,grado) values(211,2,1,7);
insert into grupo(grupo,nivel,turno,grado) values(221,2,1,7);
insert into grupo(grupo,nivel,turno,grado) values(212,2,1,8);
insert into grupo(grupo,nivel,turno,grado) values(222,2,1,8);
insert into grupo(grupo,nivel,turno,grado) values(213,2,1,9);
insert into grupo(grupo,nivel,turno,grado) values(223,2,1,9);

insert into grupo(grupo,nivel,turno,grado) values(111,3,1,10);
insert into grupo(grupo,nivel,turno,grado) values(121,3,2,10);
insert into grupo(grupo,nivel,turno,grado) values(112,3,1,11);
insert into grupo(grupo,nivel,turno,grado) values(122,3,2,11);
insert into grupo(grupo,nivel,turno,grado) values(113,3,1,12);
insert into grupo(grupo,nivel,turno,grado) values(123,3,2,12);
insert into grupo(grupo,nivel,turno,grado) values(114,3,1,13);
insert into grupo(grupo,nivel,turno,grado) values(124,3,2,13);
insert into grupo(grupo,nivel,turno,grado) values(115,3,1,14);
insert into grupo(grupo,nivel,turno,grado) values(125,3,2,14);
insert into grupo(grupo,nivel,turno,grado) values(116,3,1,15);
insert into grupo(grupo,nivel,turno,grado) values(126,3,2,15);