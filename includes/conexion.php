<?php


function conectar (){
	global $conexion;
	$conexion = mysqli_connect("localhost","root","", "clasephp");
	
}
function desconectar(){
	global $conexion;
	mysqli_close($conexion );

}

?>