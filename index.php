
    <?php include ('header.php') ?>
    <h1>Listado de Empleados</h1>
<?php
$nombre1 = "Juan";
$apellido1 = "Peña";
$nombre_y_apellido1 = $nombre1 . ' ' . $apellido1;
$edad1 = 27;
$estatura1 = 1.84;
$sueldo1 = 120000;
?>
<?php
$nombre2 = "Ines";
$apellido2 = "Medina";
$nombre_y_apellido2 = $nombre2 . ' ' . $apellido2;
$edad2 = 38;
$estatura2 = 1.70;
$sueldo2 = 340000;
?>
<?php
$nombre3 = "Horacio";
$apellido3 = "Diaz";
$nombre_y_apellido3 = $nombre3 . ' ' . $apellido3;
$edad3 = 43;
$estatura3 = 1.76;
$sueldo3 = 220000;
?>
<?php
$sueldos_totales = $sueldo1 + $sueldo2 + $sueldo3;
?>
<?php
$base_salario_familiar = 4000;
?>
    <section class="contenido">
        <div class="empleado1">
            <ul>
                <li> Nombre y Apellido: <?php echo $nombre_y_apellido1; ?> </li>
                <li> Edad: <?php echo $edad1; ?> </li>
                <li> Estatura: <?php echo $estatura1; ?> </li>
                <li> Sueldo: <?php echo $sueldo1; ?> </li>
            </ul>
        </div>
        <div class="empleado2">
            <ul>
                <li> Nombre y Apellido: <?php echo $nombre_y_apellido2; ?> </li>
                <li> Edad: <?php echo $edad2; ?> </li>
                <li> Estatura: <?php echo $estatura2; ?> </li>
                <li> Sueldo: <?php echo $sueldo2; ?> </li>
            </ul>
        </div>
        <div class="empleado1">
            <ul>
                <li> Nombre y Apellido: <?php echo $nombre_y_apellido3; ?> </li>
                <li> Edad: <?php echo $edad3; ?> </li>
                <li> Estatura: <?php echo $estatura3; ?> </li>
                <li> Sueldo: <?php echo $sueldo3; ?> </li>
            </ul>
        </div>
        <div class="totales">
            <ul>
                <li> Sueldos del total de empleados: <?php echo $sueldos_totales; ?> </li>
                <li> Salario familiar del total de empleados: <?php echo $base_salario_familiar * $sueldos_totales; ?> </li>
            </ul>
        </div>
    </section>
    <?php include ('footer.php') ?>
