<?php

require_once 'parametros.php';

// Creamos la conexión
$conn = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

// Revisamos la conexión
if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}