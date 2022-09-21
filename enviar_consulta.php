<?php
$nombre_form = $_POST['nombre'];
$apellido_form = $_POST['apellido'];
$correo_form = $_POST['correo'];
$mensaje_form = $_POST['mensaje'];

$cuerpo_mail = "Nombre: " .$nombre_form . "\r\n" . "Apellido: " .$apellido_form . "\r\n" . "Correo electrónico: " . "\r\n" . "Mensaje: " . $mensaje_form;

mail("lucerina23@gmail.com", "Mensaje enviado desde nuestro sitio web", $cuerpo_mail);

// $conexion = mysqli_connect("localhost", "root", "", "bibianaflaminicursophp") or exit ("No se pudo conectar a la base de datos");

$conexion = mysqli_connect("localhost", "id19423333_bibi", ">6!u98RNa#A4<7Vw", "id19423333_cursophp") or exit ("No se pudo conectar a la base de datos");

mysqli_query($conexion, "INSERT INTO consultas VALUES (DEFAULT, '$nombre_form', '$apellido_form', '$correo_form', '$mensaje_form')");

mysqli_close($conexion);

header("Location: contacto.php?e=ok");