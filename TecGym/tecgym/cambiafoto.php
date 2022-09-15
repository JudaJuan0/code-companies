<?php
require("accede.php");
require_once("conexion.php");

$_SESSION['foto']=@$_GET['idal'];
$nombrefoto1=@$_FILES['foto1']['name'];
$ruta1=@$_FILES['foto1']['tmp_name'];
if (is_uploaded_file($ruta1))
{
	if($_FILES['foto1']['type'] == 'image/png' or $_FILES['foto1']['type'] == 'image/gif' or $_FILES['foto1']['type'] == 'image/jpeg')
	{
		$tips = 'jpg';
		$type =  array('image/jpeg' => 'jpg' );
		$name = $_SESSION['foto'].'.'.$tips;
		$destino1 = "img/".$name;
		copy ($ruta1, $destino1);

		$ruta_imagen = $destino1;

		$miniatura_ancho_maximo=300;
		$miniatura_alto_maximo=300;

		$info_imagen = getimagesize($ruta_imagen);
		$imagen_ancho= $info_imagen[0];
		$imagen_alto= $info_imagen[1];
		$imagen_tipo= $info_imagen['mime'];

		switch ($imagen_tipo) {
			case 'image/jpg':
			case 'image/jpeg':
			    $imagen = imagecreatefromjpeg( $ruta_imagen );
				break;
			case 'image/png':
			$imagen = imagecreatefrompng( $ruta_imagen );
			    break;
			 case 'image/gif':
			   
			$imagen = imagecreatefromgif($ruta_imagen);
			
				break;
		}
	$lienzo = imagecreatetruecolor($miniatura_ancho_maximo , $miniatura_alto_maximo);

	imagecopyresampled($lienzo, $imagen , 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);	
	
	imagejpeg($lienzo, $destino1, 80);
	}
}
?>
<html>
<head>
	<title>Cambiar Foto</title>
</head>
<body>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8 /">
<center>
	<h1>Cambiar Foto</h1>
	<form action="" method="post" enctype="multipart/form-data">
	<input name="foto1" type="file" id="foto1">
	<input name="guardar" type="submit" value="Subir Foto" />
	</form>
	<?php
	if (!empty($_POST['guardar']) && !empty($destino1))
	 {
		$act = "UPDATE alumno SET FOTO='".@$destino1."' WHERE idalumno".$_SESSION['foto'];
		mysql_query($act) or die ("Error al guardar".mysql_error());
		echo "<script>
		aler('Foto Subida Con Exito')
		location.href='totalumnos.php'
		</script>";
	}
	?>
</center>

</body>
</html>