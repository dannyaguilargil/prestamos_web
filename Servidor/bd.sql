--tabla prestamos
create table personas(
    nombre varchar(40),
    cedula int(20) primary key,
    direccion varchar(20),
    telefono varchar(20),
--   agregar  edad int(10)
)
------------------------
--tabla 
create table prestamos(
    -- cedula opcional
    cedula int(20),
    fecha varchar(20),
    cuotaspactadas int(20),
    valorcredito int(20),
    valorprestado int(20),
    cuotaactual int(20),
    abono int(20),
    saldopendiente int(20),
    -- cuotas restantes opcional
)
----------------------------
create table rutas(
    id autoincrement
    barrio varchar(20),
    cliente varchar(20),
    gastos varchar(20),
    monto int(20),
    fecha varchar(20)
)
---------------------
create table estadisticas(
    monto int(20),
    total int(20),
    fecha int(20)
)
------------------
create table entradas(
    monto int(20),
    fecha date(20),
    descripcion varchar(20)
)
----------------------
create table contabilidad(
    id autoincrement,
    cedula int(20),
    fecha varchar(20),
    saldoganado --valor credito - valor prestado
)





-- al final debo unir gastos de rutas y gastos totales de prestamos del mes
select count(monto)from rutas  --rutas realizadas en el dia
select sum(monto) from rutas   --suma del gasto de rutas
select sum(saldoganado) from contabilidad
