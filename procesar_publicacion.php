<?php
	session_start();

	$titulo = $_GET["titulo"];
	$descripcion = $_GET["descripcion"];
	$fecha = $_GET["fecha"];
	$lugar = $_GET["lugar"];
	$castrado = $_GET["castrado"];
	$genero = $_GET["gender"];
	$animal= $_GET["animal"];

	$conexion = new mysqli("localhost","root","","roko");

	$consulta = "INSERT INTO publicacion(id_cat_animal,id_tipo_publicacion,titulo,descripcion,fecha,direccion,id_usuarios,castrado,genero) VALUES (".$animal.", 1,'".$titulo."','".$descripcion."','".$fecha."','".$lugar."',".$_SESSION["id"].",".$castrado.",".$genero.");";
	
	$resultado = $conexion->query($consulta);

	if($resultado == 1){
		header("location: index.php");
	}
	