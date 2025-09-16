CREATE DATABASE ojalinheiro;
USE ojalinheiro;
CREATE TABLE raza(
    nombre VARCHAR(100) PRIMARY KEY,
    descripcion VARCHAR(5000)
);

CREATE TABLE gallina(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    fecha_nacimiento DATE,
    fecha_alta DATE NOT NULL DEFAULT CURRENT_DATE,
    nombre_raza VARCHAR(100) NOT NULL,
    FOREIGN KEY (nombre_raza) REFERENCES raza(nombre)
);

CREATE TABLE baja(
    id_gallina INT PRIMARY KEY,
    fecha DATE NOT NULL DEFAULT CURRENT_DATE,
    causa VARCHAR(50) NOT NULL,
    FOREIGN KEY (id_gallina) REFERENCES gallina(id)
);

CREATE TABLE produccion(
    id_gallina INT,
    fecha_recogida DATE DEFAULT CURRENT_DATE,
    cantidad INT NOT NULL,
    PRIMARY KEY (id_gallina, fecha_recogida),
    FOREIGN KEY (id_gallina) REFERENCES gallina(id)
);


