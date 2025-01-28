<?php
    $servidor = "localhost";
    $usuario = "root"; 
    $clave = "";
    try {
        $conexion = new PDO("mysql:host=$servidor", $usuario, $clave);
        $bd = "CREATE DATABASE Biblioteca"; 
        $resultado = $conexion->query($bd); 
        echo "Se ha creado la base de datos 
        ‘Biblioteca’";
        $tablas = "
            USE BIBLIOTECA;
            CREATE TABLE LIBROS (
                ID_LIBRO INT PRIMARY KEY,
                TITULO VARCHAR(30) NOT NULL,
                ESCRITOR VARCHAR(50) NOT NULL
            );
            CREATE TABLE LECTORES (
                DNI VARCHAR(9) PRIMARY KEY,
                NOMBRE VARCHAR(30) NOT NULL,
                EMAIL VARCHAR(50) UNIQUE NOT NULL
            );
            CREATE TABLE PRESTAMOS (
                ID_PRESTAMO INT PRIMARY KEY,
                ID_LIBRO INT NOT NULL,
                DNI_LECTOR VARCHAR(9) NOT NULL,
                FECHA_PRESTAMO DATE NOT NULL,
                FECHA_DEVOLUCION DATE NOT NULL,
                FOREIGN KEY (ID_LIBRO) REFERENCES LIBROS(ID_LIBRO),
                FOREIGN KEY (DNI_LECTOR) REFERENCES LECTORES(DNI)
            );
        "; 
        $resultado = $conexion->query($tablas); 
        echo " Se han añadido las tablas ";
        $datos = "
            USE BIBLIOTECA;
            INSERT INTO LIBROS (ID_LIBRO, TITULO, ESCRITOR)
            VALUES (1, 'Cien años de soledad', 'Gabriel García Márquez'),
                (2, 'Don Quijote de la Mancha', 'Miguel de Cervantes');
            INSERT INTO LECTORES (DNI, NOMBRE, EMAIL)
            VALUES ('12345678A', 'Luis Pérez', 'luis@correo.com'),
                ('87654321B', 'Maria López', 'maria@correo.com');
            INSERT INTO PRESTAMOS (ID_PRESTAMO,ID_LIBRO, DNI_LECTOR, FECHA_PRESTAMO, FECHA_DEVOLUCION)
            VALUES (1,1, '12345678A', '2025-01-28', '2025-02-24'),
                (2,2, '87654321B', '2025-01-29', '2025-04-02');
        ";
        $resultado = $conexion->query($datos); 
        echo " Se han añadido los datos ";
    }
    catch (PDOException $exception){
        echo "Fallo de conexión ", $exception->getmessage();
    }
    $conexion = null;
 ?>