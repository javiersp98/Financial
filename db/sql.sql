DROP DATABASE IF exists financial1;
CREATE DATABASE financial1;
USE financial1;

DROP TABLE IF EXISTS cuentas; -- lista de los lugares donde se puede almacenar nuestro dinero
CREATE TABLE cuentas (
	id INT PRIMARY KEY AUTO_INCREMENT,
	nombre VARCHAR(50),
    saldo DECIMAL(15,2),
    descripcion VARCHAR(50)
);
INSERT INTO cuentas (id, nombre, saldo, descripcion)
VALUES 	(1, "Efectivo", 20, "Dinero en mano"),
		(2, "Unicaja", 100, "Cuenta habitual"),
		(3, "Santander", 300,"Cuenta de ahorro");

DROP TABLE IF EXISTS ingresos;
CREATE TABLE ingresos (
	id INT PRIMARY KEY AUTO_INCREMENT,
	importe DECIMAL(6,2), -- cantidad ingresada
    concepto VARCHAR(50), -- descripción del ingreso
    fecha DATE, -- fecha del ingreso
    procedencia VARCHAR(50), -- procedencia del ingreso (EJ: venta en mercadillo, regalo...)
    cuenta VARCHAR(50) -- lugar donde entra el dinero (EJ: efectivo, cuenta en Unicaja...)
);
INSERT INTO ingresos (id, importe, concepto, fecha, procedencia, cuenta)
VALUES	(1, 100, "Ventas en Ebay", '2018-12-25', "Ebay", "Unicaja"),
		(2, 200, "Venta de acciones", '2018-12-28', "Acciones", "Santander"),
        (3, 250, "Ventas en Amazon", '2018-12-31', "Amazon", "Unicaja");

DROP TABLE IF EXISTS gastos;
CREATE TABLE gastos (
	id INT PRIMARY KEY AUTO_INCREMENT,
	importe DECIMAL(6,2), -- cantidad gastada
    concepto VARCHAR(50), -- descripción del gasto
    fecha DATE, -- fecha del gasto
    receptor VARCHAR(50), -- empresa o persona receptora (EJ: Burguer Star...)
    categoria VARCHAR(50), -- tipo de gasto (EJ: comida, facturas  del agua, gasolina...)
    cuenta VARCHAR(50) -- lugar de donde sale el dinero
);

DROP TABLE IF EXISTS pagar;
CREATE TABLE pagar (
	id INT PRIMARY KEY AUTO_INCREMENT,
    concepto VARCHAR(50),
	importe DECIMAL(6,2),
    fecha_creacion DATE,
    fecha_tope DATE,
    cobrador VARCHAR(50)
);
INSERT INTO pagar (id, concepto, importe, fecha_creacion, fecha_tope, cobrador)
VALUES	(1, "Cerveza", 1, '2018-12-10', NULL, "Pablete");

DROP TABLE IF EXISTS cobrar;
CREATE TABLE cobrar (
	id INT PRIMARY KEY AUTO_INCREMENT,
    concepto VARCHAR(50),
	importe DECIMAL(6,2),    
    fecha_creacion DATE,
    fecha_tope DATE,
    pagador VARCHAR(50)
);

