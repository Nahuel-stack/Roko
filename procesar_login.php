<?php
    session_start();

    $usuario = $_GET["email"];
    $pass = $_GET["pass"];

    $conexion = new mysqli("localhost", "root","","roko");

    $consulta = "SELECT * FROM usuarios WHERE mail= '".$usuario."' AND contrasenia = '".$pass."';";
    
    $resultados = $conexion->query($consulta); //hay ya hice la consulta . en este caso como es un selec muestra cosa pero si fuera insert guardaria

    if($resultados->num_rows == 1){
        $fila = $resultados->fetch_assoc();
        $_SESSION["mail"] = $usuario;
        $_SESSION["id"] = $fila["id_usuario"];
        header("location: index.php");
    }else {
        echo "no ingreso";
    }


?>