<?php


// Declaramos todas las variables en caso de que vengan vacías
$DPI = "";
$primerNombre = "";
$segundoNombre = "";
$primerApellido = "";
$segundoApellido = "";
$direccion = "";
$telefono = "";
$profesion = "";
$direccionTrabajo = "";
$telefonoTrabajo = "";
$correoElectronico = "";

// Requerimos el archivo para la conexión a la base de datos
require_once './conexion/conexion.php';

// Query para hacer la inserción
$stmt = $conn->prepare("INSERT INTO encargado (DPI, PRIMER_NOMBRE, SEGUNDO_NOMBRE, PRIMER_APELLIDO, SEGUNDO_APELLIDO, DIRECCION, TELEFONO, PROFESION, DIRECCION_TRABAJO, TELEFONO_TRABAJO, CORREO_ELECTRONICO) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

// Agregamos los parámetros
$stmt->bind_param("sssssssssss", $DPI, $primerNombre, $segundoNombre, $primerApellido, $segundoApellido, $direccion, $telefono, $profesion, $direccionTrabajo, $telefonoTrabajo, $correoElectronico);

// Variables para recuperar el DPI
$DPI = filter_input(INPUT_POST, 'DPI');

// Variables para recuperar los nombres del padre
$primerNombre = filter_input(INPUT_POST, 'primerNombre');
$segundoNombre = filter_input(INPUT_POST, 'segundoNombre');

// Variables para recuperar los apellidos del padre
$primerApellido = filter_input(INPUT_POST, 'primerApellido');
$segundoApellido = filter_input(INPUT_POST, 'segundoApellido');

// Variable para recuperar la dirección del padre
$direccion = filter_input(INPUT_POST, 'direccion');

// Variable para recuperar el teléfono del padre
$telefono = filter_input(INPUT_POST, 'telefono');

// Variable para recuperar la profesión del padre
$profesion = filter_input(INPUT_POST, 'profesion');

// Variable para recuperar la dirección de trabajo del padre
$direccionTrabajo = filter_input(INPUT_POST, 'direccionTrabajo');

// Variable para recuperar el teléfono del trabajo del padre
$telefonoTrabajo = filter_input(INPUT_POST, 'telefonoTrabajo');

// Variable para recuperar el correo electrónico del padre
$correoElectronico = filter_input(INPUT_POST, 'correoElectronico');

// Ejecutamos el query
if(!$stmt->execute()){
    echo $stmt->error;
};

echo $stmt->affected_rows;
// Cerramos el estado
$stmt->close();

// Cerramos la conexión
$conn->close();