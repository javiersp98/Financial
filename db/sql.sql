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
VALUES 	(1, "Efectivo", 50, "Dinero en mano"),
		(2, "Caja", 350, "Dinero almacenado"),
		(3, "Unicaja", 3000, "Cuenta habitual"),
		(4, "OpenBank", 350, "Cuenta de inversion");

DROP TABLE IF EXISTS ingresos;
CREATE TABLE ingresos (
	id INT PRIMARY KEY AUTO_INCREMENT,
	importe DECIMAL(8,2), -- cantidad ingresada
	concepto VARCHAR(50), -- descripción del ingreso
	fecha DATE, -- fecha del ingreso
	procedencia VARCHAR(50), -- procedencia del ingreso (EJ: venta en mercadillo, regalo...)
	cuenta VARCHAR(50) -- lugar donde entra el dinero (EJ: efectivo, cuenta en Unicaja...)
);
INSERT INTO ingresos (id, importe, concepto, fecha, procedencia, cuenta)
VALUES	(1, 200, "Sueldo Diciembre", '2018-12-20', "Salutic", "Unicaja"),
		(2, 200, "Regalos", '2018-12-31', "Familiares", "Efectivo"),
		(3, 100, "Sueldo Enero", '2019-01-30', "Salutic", "Unicaja");

DROP TABLE IF EXISTS gastos;
CREATE TABLE gastos (
	id INT PRIMARY KEY AUTO_INCREMENT,
	importe DECIMAL(8,2), -- cantidad gastada
	concepto VARCHAR(50), -- descripción del gasto
	fecha DATE, -- fecha del gasto
	receptor VARCHAR(50), -- empresa o persona receptora (EJ: Burguer Star...)
	categoria VARCHAR(50), -- tipo de gasto (EJ: comida, facturas  del agua, gasolina...)
	cuenta VARCHAR(50) -- lugar de donde sale el dinero
);
INSERT INTO gastos (id, importe, concepto, fecha, receptor, categoria, cuenta)
VALUES	(1, 50, "Gasolina", '2019-01-15', "Hidrocarburos Alhaurin", "Transporte/Combustible", "Efectivo"),
		(2, 20, "Regalos", '2019-01-25', "Tienda de regalos", "Compras/Regalos", "Efectivo"),
		(3, 30, "Recarga Autobus", '2019-02-20', "EMT", "Transporte/Bus", "Efectivo");

DROP TABLE IF EXISTS gastos_categorias;
CREATE TABLE gastos_categorias (
	id INT PRIMARY KEY AUTO_INCREMENT,
	nombre VARCHAR(50)
);
INSERT INTO gastos_categorias (id, nombre)
VALUES	(1,'Transporte/Combustible'),
		(2,'Transporte/Coche'),
		(3,'Transporte/Bus'),
		(4,'Alimentacion/Casa'),
		(5,'Alimentacion/Fuera'),
		(6,'Salud/Medicamentos'),
		(7,'Salud/Gimnasio'),
		(8,'Diversion/Cine'),
		(9,'Diversion/Libros'),
		(10,'Diversion/Juegos'),
		(11,'Compras/Ropa'),
		(12,'Compras/Electronica'),
		(13,'Compras/Regalos');

DROP TABLE IF EXISTS pagar;
CREATE TABLE pagar (
	id INT PRIMARY KEY AUTO_INCREMENT,
	concepto VARCHAR(50),
	importe DECIMAL(8,2),
	fecha_creacion DATE,
	fecha_tope DATE,
	cobrador VARCHAR(50)
);
INSERT INTO pagar (id, concepto, importe, fecha_creacion, fecha_tope, cobrador)
VALUES	(1, "Medio bocadillo", 1, '2018-12-10', NULL, "Pablete");

DROP TABLE IF EXISTS cobrar;
CREATE TABLE cobrar (
	id INT PRIMARY KEY AUTO_INCREMENT,
	concepto VARCHAR(50),
	importe DECIMAL(8,2),
	fecha_creacion DATE,
	fecha_tope DATE,
	pagador VARCHAR(50)
);

DROP TABLE IF EXISTS inversiones;
CREATE TABLE inversiones (
	id INT PRIMARY KEY AUTO_INCREMENT,
	nombre VARCHAR(30),
	valor_inicial DECIMAL(8,2),
	valor_actual DECIMAL(8,2),
	valor_venta DECIMAL(8,2),
	fecha_compra DATE,
	fecha_valor_actual DATE,
	fecha_venta DATE,
	vendida BOOLEAN
);
INSERT INTO inversiones (id, nombre, valor_inicial, valor_actual, valor_venta, fecha_compra, fecha_venta, vendida)
VALUES	(1, 'Finca', 30000, 35000, NULL, '2017-08-15', NULL, 0),
		(2, 'Piso', 40000, 42000, NULL, '2018-09-07', NULL, 0),
		(3, 'Local Restaurado', 25000, 35000, 35000, '2018-02-01', '2018-04-01', 1);

DROP TABLE IF EXISTS inversion_valor;
CREATE TABLE inversion_valor (
	id INT PRIMARY KEY AUTO_INCREMENT,
	id_inversion INT,
	nombre_inversion VARCHAR(30),
	fecha DATE,
	valor DECIMAL(8,2)
);
INSERT INTO inversion_valor (id, id_inversion, nombre_inversion, fecha, valor)
VALUES	(1, 1, 'Finca', '2017-08-15', 30000),
		(2, 1, 'Finca', '2017-09-15', 35000),
		(3, 2, 'Piso', '2018-09-07', 40000),
		(4, 3, 'Local Restaurado', '2018-02-01', 25000),
		(5, 3, 'Local Restaurado', '2018-03-01', 30000),
		(6, 3, 'Local Restaurado', '2018-04-01', 35000);
