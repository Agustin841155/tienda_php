CREATE TABLE productos(
    id_producto integer PRIMARY KEY AUTOINCREMENT,
    producto varchar(100) NOT NULL,
    precio varchar(100) NOT NULL,
    existencias varchar(100) NOT NULL
);
INSERT INTO productos(producto, precio, existencias) values("Enchufe Universal", "$310", "50 piezas en existencia");
INSERT INTO productos(producto, precio, existencias) values("Monitor", "$3,000", "100 piezas en existencia");

CREATE TABLE tickets(
    fecha DATE,
    hora_venta TIME,
    cantidad_producto varchar(100) NOT NULL,
    producto varchar(100) NOT NULL,
    total_producto varchar(100) NOT NULL
);

INSERT INTO tickets(fecha, hora_venta, cantidad_producto, producto, total_producto) values (date (), time (), "1", "Enchufe Universal", "$310");
INSERT INTO tickets(fecha, hora_venta, cantidad_producto, producto, total_producto) values (date (), time (), "1", "Monitor", "$3,000");