CREATE DATABASE crud_usuarios;

USE crud_usuarios;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    cedula VARCHAR(20),
    telefono VARCHAR(20)
);