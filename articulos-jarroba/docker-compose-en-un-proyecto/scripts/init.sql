CREATE TABLE IF NOT EXISTS mi_tabla (
    id SERIAL PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    apellido VARCHAR(255) NOT NULL
);

INSERT INTO mi_tabla (nombre, apellido) VALUES('Juan', 'Sanchez'), ('Laura', 'Lopez'), ('Paco', 'Diaz');
