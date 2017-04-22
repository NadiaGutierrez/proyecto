<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Nuevo Medicamento</title>
</head>

<body>
<?php
$clave = $_POST['clave'];
echo $clave;
$nombre = $_POST['name'];
echo $nombre;
$formu = $_POST['form'];
echo $formu;
$obser = $_POST['obser'];
echo $obser;
$fecha = $_POST['fecha'];
echo $fecha;
$cantidad = $_POST['cant'];
echo $cantidad;
$costor = $_POST['costoreal'];
echo $costor;
include("conexion.php");
//$link = mysqli_connect("sql203.byethost7.com", "b7_10356956", "*****");
//mysqli_select_db($link, "b7_10356956_mibasededatos");
$tildes = $link->query("SET NAMES 'utf8'"); //Para que se inserten las tildes correctamente
mysqli_query($link, "INSERT INTO medicamentos VALUES ('$clave', 'name', 'C/ Buenaventura 54', '699887766', 35, 1.98)");
mysqli_query($link, "INSERT INTO agenda VALUES ('Antonio2', 'Delgado Folken', 'C/ El Milagroso 77', '699667744', 88, 1.71)");
mysqli_close($link); // Cerramos la conexion con la base de datos
echo 'Los datos han sido insertados en la base de datos';
?>
</body>
</html>