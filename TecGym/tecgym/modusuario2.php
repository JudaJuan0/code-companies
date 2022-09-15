<?php
require_once("conexion.php");
if(empty($_POST['seleccion'])){
	echo "<center>NO HAY NADA SELECCIONADO <br />
	<a href='modusuario.php'>volver</a></center>";

}
else
{
	foreach($_POST['seleccion'] as $indice=>  $valor){
		$opcion = substr ($_POST['seleccion'][$indice],0,1);
		switch($opcion){
			case 'm':$sql="UPDATE usuario SET
			nombre='".$_POST['nombre'][$indice]."',
			WHERE idusuario=".$_POST['idusuario'][$indice];break;
			case 'e':$sql="DELETE FROM usuario WHERE idusuario=".$_POST['idusuario'][$indice];break;
			default:echo "<center>NO HAY NADA SELECCIONADO</center>"; break;
		}
		$resultado = mysql_query($sql);
		if(! $resultado) {die ("ERROR AL EJECUTAR LA CONSULTA " .$_POST['seleccion'].":".mysql_error());}
		else{
			echo"<center>FELICIDADES SENTENCIA EJECUTADA CORRECTAMENTE</center><br />
			<a href='totusuarios.php'>volver al listado</a>";
		}
	}
}
?>
