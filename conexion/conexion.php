<?php

require_once './parametros.php';

// Intentamos establecer la conexión
$con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME) or die("Ocurrió el siguiente error en la conexión: " . mysqli_error($con));
