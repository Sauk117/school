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