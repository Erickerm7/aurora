<?php

// Definimos en variables los datos para conectarnos a la base de datos
define('DB_SERVER','localhost');
define('DB_NAME','sigepsa2');
define('DB_USER','sigepsa2');
define('DB_PASS','195010');
define('DB_PORT', '3306');

// Intentamos establecer la conexión
$con = @mysqli_connect(DB_SERVER,DB_USER,DB_PASS, DB_PORT);

if (mysqli_connect_error()) {
	$logMessage = 'MySQL Error: ' . mysqli_connect_error();
	// Call your logger here.
	die('No se pudo conectar a la base de datos.');
}

mysql_select_db(DB_NAME,$con);
