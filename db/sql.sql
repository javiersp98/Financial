DROP DATABASE IF exists financial1;
CREATE DATABASE financial1;
USE financial1;

DROP TABLE IF EXISTS cuentas; -- lista de los lugares donde se puede almacenar nuestro dinero
CREATE TABLE cuentas (
	nombre VARCHAR(50),
    saldo DECIMAL(15,2),
    descripcion VARCHAR(50)
);
INSERT INTO cuentas (nombre, saldo, descripcion)
VALUES 	("Efectivo", 20, ""),
		("Unicaja", 100, "Cuenta habitual"),
		("Santander", 300,"Cuenta de ahorro");

DROP TABLE IF EXISTS ingresos;
CREATE TABLE ingresos (
	importe DECIMAL(6,2), -- cantidad ingresada
    concepto VARCHAR(50), -- descripción del ingreso
    fecha DATE, -- fecha del ingreso
    procedencia VARCHAR(50), -- procedencia del ingreso (EJ: venta en mercadillo, regalo...)
    cuenta VARCHAR(50) -- lugar donde entra el dinero (EJ: efectivo, cuenta en Unicaja...)
);
INSERT INTO ingresos (importe, concepto, fecha, procedencia, cuenta)
VALUES	(100, "Ventas en ebay", 2018-12-25, "ebay", "Unicaja");

DROP TABLE IF EXISTS gastos;
CREATE TABLE gastos (
	importe DECIMAL(6,2), -- cantidad gastada
    concepto VARCHAR(50), -- descripción del gasto
    fecha DATE, -- fecha del gasto
    receptor VARCHAR(50), -- empresa o persona receptora (EJ: Burguer Star...)
    categoria VARCHAR(50), -- tipo de gasto (EJ: comida, facturas, gasolina...)
    cuenta VARCHAR(50) -- lugar de donde sale el dinero
);

DROP TABLE IF EXISTS pagar;
CREATE TABLE pagar (
	importe DECIMAL(6,2),
    concepto VARCHAR(50),
    fecha_creacion DATE,
    fecha_tope DATE,
    cobrador VARCHAR(50)
);

DROP TABLE IF EXISTS cobrar;
CREATE TABLE cobrar (
	importe DECIMAL(6,2),
    concepto VARCHAR(50),
    fecha_creacion DATE,
    fecha_tope DATE,
    pagador VARCHAR(50)
);

