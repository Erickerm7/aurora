<?php

// Requerimos el archivo para la conexión a la base de datos
require_once './conexion/';

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



