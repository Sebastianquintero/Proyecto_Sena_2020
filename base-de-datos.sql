
--
-- Estructura de tabla para la tabla `asignacionCarga`
--

CREATE TABLE `asignacionCarga` (
  `idAsignacion` int(11) NOT NULL,
  `idMateria` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idCurso` int(11) NOT NULL,
  `fechaAsignacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificacion`
--

CREATE TABLE `calificacion` (
  `idCalificacion` int(11) NOT NULL,
  `notaPeriodo1` int(11) NOT NULL,
  `notaPeriodo2` int(11) NOT NULL,
  `notaPeriodo3` int(11) NOT NULL,
  `notaFinal` int(11) NOT NULL,
  `fecharRegistro` date NOT NULL,
  `idAsignacionCarga` int(11) NOT NULL,
  `idCurso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `idCargo` int(11) NOT NULL,
  `nombreCargo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`idCargo`, `nombreCargo`) VALUES
(1, 'Profesor'),
(2, 'Administrador'),
(3, 'Estudiante');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargoUsuario`
--

CREATE TABLE `cargoUsuario` (
  `idCargo` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cargoUsuario`
--

INSERT INTO `cargoUsuario` (`idCargo`, `idUsuario`) VALUES
(3, 2),
(2, 4),
(1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Curso`
--

CREATE TABLE `Curso` (
  `idCurso` int(11) NOT NULL,
  `codigoCurso` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidad`
--

CREATE TABLE `especialidad` (
  `idEspecialidad` int(11) NOT NULL,
  `nombreEspecialidad` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `especialidad`
--

INSERT INTO `especialidad` (`idEspecialidad`, `nombreEspecialidad`) VALUES
(1, 'no aplica'),
(2, 'Lengua Castellana');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inasistencia`
--

CREATE TABLE `inasistencia` (
  `Idinasistencia` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `fechaInasistencia` date NOT NULL,
  `excusaInasistencia` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idSeguimiento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Materia`
--

CREATE TABLE `Materia` (
  `idMateria` int(11) NOT NULL,
  `nombreMateria` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `horasSemanales` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `Materia`
--

INSERT INTO `Materia` (`idMateria`, `nombreMateria`, `horasSemanales`) VALUES
(1, 'Quimica', 90);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `observacion`
--

CREATE TABLE `observacion` (
  `idObservacion` int(11) NOT NULL,
  `fechaObservacion` date NOT NULL,
  `tipoFalta` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcionObservacion` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idSeguimiento` int(11) NOT NULL,
  `descargosObservacion` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salon`
--

CREATE TABLE `salon` (
  `idSalon` int(11) NOT NULL,
  `nombreSalon` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ubicacionSalon` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Seguimientocurso`
--

CREATE TABLE `Seguimientocurso` (
  `idSeguimiento` int(11) NOT NULL,
  `idUsuarios` int(11) NOT NULL,
  `idCurso` int(11) NOT NULL,
  `fechaSeguimiento` date NOT NULL,
  `idSalon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `User` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombreUsuario` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidoUsuario` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correoUsuario` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipoDocUsuario` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `docUsuario` bigint(20) NOT NULL,
  `estadoUsuario` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idEspecialidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `User`, `Password`, `nombreUsuario`, `apellidoUsuario`, `correoUsuario`, `tipoDocUsuario`, `docUsuario`, `estadoUsuario`, `idEspecialidad`) VALUES
(2, 'estudiante', 'abc1234', 'sebastian', 'quintero', 'sebastian@sebastian.com', 'tarjeta identidad', 123456789, 'activo', 1),
(3, 'Profesor', 'Win2348', 'Carlos', 'Perez', 'carlos78@gmail.com', 'cedula', 40040978, 'activo', 2),
(4, 'administrador', 'Lot5678', 'Mario', 'Lopez', 'mariolo@hotmail.com', 'cedula', 978461320, 'activo', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asignacionCarga`
--
ALTER TABLE `asignacionCarga`
  ADD PRIMARY KEY (`idAsignacion`),
  ADD KEY `idCurso` (`idCurso`),
  ADD KEY `idUsuario` (`idUsuario`),
  ADD KEY `idMateria` (`idMateria`);

--
-- Indices de la tabla `calificacion`
--
ALTER TABLE `calificacion`
  ADD PRIMARY KEY (`idCalificacion`),
  ADD KEY `idAsignacionCarga` (`idAsignacionCarga`),
  ADD KEY `idCurso` (`idCurso`);

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`idCargo`);

--
-- Indices de la tabla `cargoUsuario`
--
ALTER TABLE `cargoUsuario`
  ADD KEY `idCargo` (`idCargo`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indices de la tabla `Curso`
--
ALTER TABLE `Curso`
  ADD PRIMARY KEY (`idCurso`);

--
-- Indices de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  ADD PRIMARY KEY (`idEspecialidad`);

--
-- Indices de la tabla `inasistencia`
--
ALTER TABLE `inasistencia`
  ADD PRIMARY KEY (`Idinasistencia`),
  ADD KEY `idSeguimiento` (`idSeguimiento`);

--
-- Indices de la tabla `Materia`
--
ALTER TABLE `Materia`
  ADD PRIMARY KEY (`idMateria`);

--
-- Indices de la tabla `observacion`
--
ALTER TABLE `observacion`
  ADD PRIMARY KEY (`idObservacion`),
  ADD KEY `idUsuario` (`idUsuario`),
  ADD KEY `idSeguimiento` (`idSeguimiento`);

--
-- Indices de la tabla `salon`
--
ALTER TABLE `salon`
  ADD PRIMARY KEY (`idSalon`);

--
-- Indices de la tabla `Seguimientocurso`
--
ALTER TABLE `Seguimientocurso`
  ADD PRIMARY KEY (`idSeguimiento`),
  ADD KEY `idUsuarios` (`idUsuarios`),
  ADD KEY `idCurso` (`idCurso`),
  ADD KEY `idSalon` (`idSalon`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `idEspecialidad` (`idEspecialidad`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asignacionCarga`
--
ALTER TABLE `asignacionCarga`
  MODIFY `idAsignacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `calificacion`
--
ALTER TABLE `calificacion`
  MODIFY `idCalificacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `idCargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  MODIFY `idEspecialidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `inasistencia`
--
ALTER TABLE `inasistencia`
  MODIFY `Idinasistencia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Materia`
--
ALTER TABLE `Materia`
  MODIFY `idMateria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `observacion`
--
ALTER TABLE `observacion`
  MODIFY `idObservacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `salon`
--
ALTER TABLE `salon`
  MODIFY `idSalon` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Seguimientocurso`
--
ALTER TABLE `Seguimientocurso`
  MODIFY `idSeguimiento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asignacionCarga`
--
ALTER TABLE `asignacionCarga`
  ADD CONSTRAINT `fk_asig_curso` FOREIGN KEY (`idCurso`) REFERENCES `Curso` (`idCurso`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_asig_materia` FOREIGN KEY (`idMateria`) REFERENCES `Materia` (`idMateria`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_asig_usuario` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `calificacion`
--
ALTER TABLE `calificacion`
  ADD CONSTRAINT `fk_calificacion_curso` FOREIGN KEY (`idCurso`) REFERENCES `Curso` (`idCurso`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_claificacion_asigcarga` FOREIGN KEY (`idAsignacionCarga`) REFERENCES `asignacionCarga` (`idAsignacion`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `cargoUsuario`
--
ALTER TABLE `cargoUsuario`
  ADD CONSTRAINT `cargoUsuario_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_cargoUsuario_cargo` FOREIGN KEY (`idCargo`) REFERENCES `cargo` (`idCargo`);

--
-- Filtros para la tabla `inasistencia`
--
ALTER TABLE `inasistencia`
  ADD CONSTRAINT `fk_inasistencia_seguimiento` FOREIGN KEY (`idSeguimiento`) REFERENCES `Seguimientocurso` (`idSeguimiento`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `observacion`
--
ALTER TABLE `observacion`
  ADD CONSTRAINT `fk_observacion_seguimiento` FOREIGN KEY (`idSeguimiento`) REFERENCES `Seguimientocurso` (`idSeguimiento`),
  ADD CONSTRAINT `fk_observacion_usuario` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`);

--
-- Filtros para la tabla `Seguimientocurso`
--
ALTER TABLE `Seguimientocurso`
  ADD CONSTRAINT `fk_seguimiento_curso` FOREIGN KEY (`idCurso`) REFERENCES `Curso` (`idCurso`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_seguimiento_salon` FOREIGN KEY (`idSalon`) REFERENCES `salon` (`idSalon`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_seguimiento_usuario` FOREIGN KEY (`idUsuarios`) REFERENCES `usuario` (`idUsuario`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_especialidad` FOREIGN KEY (`idEspecialidad`) REFERENCES `especialidad` (`idEspecialidad`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
