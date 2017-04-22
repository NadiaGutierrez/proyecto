<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sesion de Usuario</title>
</head>

<body>
<?php
include("conexion.php");
//RECOGER DATOS DE FORMULARIO

$a=$_POST['nombre'];
$b=$_POST['contra'];


	if($a=="administrador" and $b=="230484")
		{
?>
	<script type="text/javascript">
	alert("USUARIO ADMINISTRADOR");
	</script>
	<script>
	location.href="medicamentos.html";
	</script>
<?
		
	//COMPROBAR Q SE INGRESEN LOS DATOS
	if(!$a or !$b)
	{
?>
	<script type="text/javascript">
	alert("DEBES INGRESAR TODOS LOS DATOS");
	</script>
	<script>
	location.href="inicio.html";
	</script>
<?
	session_destroy();
	session_unset();
	}
	else
	{	
	//VERIFICAR Q ESTEN EN LA BASE DE DATOS
	$SQL="Select *from usuarios where nombre='$a' and password='$b'";
	$nom=mysql_query($SQL,$conexion);
	$nom1=mysql_fetch_array($nom);
	$nom2=$nom1['nombre'];
	$con=$nom1['password'];
	
	//COMPARAMOS
	if($nom2==$a and $con==$b)
	{
	$_SESSION[inicio]=true;
	$_SESSION[invitado]=$nom2;
?>
	<script type="text/javascript">
	alert("INICIANDO SESION");
	</script>
	<script>
	location.href="inicio.html";
	</script>
<?
	}
	else
	{
	
?>
	<script type="text/javascript">
	alert("NO ESTAS REGISTRADO");
	</script>
	<script>
	location.href="inicio.html";
	</script>
<?
	session_destroy();
	session_unset();
	
	} //FIN DE ELSE DE COMPROBAR Q ESTEN EN LA BASE DE DATOS
	
	}//FIN ELSE D Q SE INGRESEN TODOS LOS DATOS
	
	}
	
	
	else
	{	
	
	//COMPROBAR Q SE INGRESEN LOS DATOS
	if(!$a or !$b)
	{
?>
	<script type="text/javascript">
	alert("DEBES INGRESAR TODOS LOS DATOS");
	</script>
	<script>
	location.href="inicio.html";
	</script>
<?
	session_destroy();
	session_unset();
	}
	else
	{	
	//VERIFICAR Q ESTEN EN LA BASE DE DATOS
	$SQL="Select *from usuario where nombre='$a' and password='$b'";
	$nom=mysql_query($SQL,$conexion);
	$nom1=mysql_fetch_array($nom);
	$nom2=$nom1['nombre'];
	$con=$nom1['password'];
	
	//COMPARAMOS
	if($nom2==$a and $con==$b)
	{
	$_SESSION[inicio]=true;
	$_SESSION[invitado]=$nom2;

?>
	<script type="text/javascript">
	alert("INICIANDO SESION");
	</script>
	<script>
	location.href="medicamentos.html";
	</script>
<?
	}
	else
	{
	
?>
	<script type="text/javascript">
	alert("NO ESTAS REGISTRADO");
	</script>
	<script>
	location.href="inicio.html";
	</script>
<?
	session_destroy();
	session_unset();
	
	} //FIN DE ELSE DE COMPROBAR Q ESTEN EN LA BASE DE DATOS
	
	}//FIN ELSE D Q SE INGRESEN TODOS LOS DATOS
	
	}
	
?>

</body>
</html>