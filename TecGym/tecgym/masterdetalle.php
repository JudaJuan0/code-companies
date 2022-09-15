<?php
require("accede.php");
require_once("conexion.php");

if(empty($_POST['agregar']) && empty($_POST['eliminar']))
$_SESSION['dato']=@$_GET['idal'];

$consulta=mysql_query("SELECT * FROM alumno WHERE idalumno = '$_SESSION[dato]'")
or die ("Problema al consultar al alumno".mysql_error());

$fila=mysql_fetch_row($consulta);
echo "<center>";
echo "<h1>alumnos por Curso</h1>";
echo "<table width='300' border='1';>
<tr>
<th scope='row'>ID:</th>
<td>$fila[0]</td>
</tr>
</tr>
<th scope='row'>Nombre:</th>
<td>$fila[1]</td>
</tr>
</tr>
<th scope='row'>Apellidos:</th>
<td>$fila[2]</td>
</tr>
</tr>
<th scope='row'>Tipo Doc:</th>
<td>$fila[3]</td>
</tr>
</tr>
<th scope='row'>Documento:</th>
<td>$fila[4]</td>
</tr>
</tr>
<th scope='row'>Fecha Nacimiento:</th>
<td>$fila[5]</td>
</tr>
</tr>
<th scope='row'>Dirección:</th>
<td>$fila[6]</td>
</tr>
</tr>
<th scope='row'>Teléfono:</th>
<td>$fila[7]</td>
</tr>
</table>";
echo "</center>";

function materia($variable1)
{
	$sql1="SELECT * FROM curso";
	$rec=mysql_query($sql1);

	echo "<select name='".$variable1."'>";
    while($row=mysql_fetch_array($rec))
	{
		echo "<option value='".$row['idcurso']."' ";
	    
	    if (@$_POST[$variable1]==$row['idcurso'])
        echo "SELECTED";
        echo">".$row['nomcurso'];
        echo "</option>";
    }
    echo "</select>";      
}
function profe ($variable2)
{
	$sql2="SELECT * FROM profesor";
	$rec=mysql_query($sql2);
	echo "<select name='".$variable2."'>";
    while($row=mysql_fetch_array($rec))
    {
	    echo "<option value='".$row['idprofesor']."' ";

	    if(@$_POST[$variable2]==$row['idprofesor'])
	    echo "SELECTED";
 
        echo ">".$row['nomprofesor'];
        echo "</option>";
    }    
echo "<select>";
}
if(!empty($_POST['agregar']))
{
	$_POST['cantidad_lineas']=$_POST['cantidad_lineas']+1;
	
    $i=$_POST['cantidad_lineas'];
    $_POST['visible'.$i]=1;
}
if(!empty($_POST['eliminar']))
{	
	$_POST['visible'.$_POST['eliminar']]=0;
}

if(!empty($_POST['guardar']))
{	
	for($i=1;$i<=$_POST['cantidad_lineas'];$i++)
	{
	  if($_POST['visible'.$i]==1)
      {
      	$sql="INSERT INTO alumnoxcurso(alumnoid,cursoid,jornada,notafinal,profesorid) VALUES (".$_POST['alumnoid'].",".$_POST['cursoid'.$i].",'".$_POST['jornada'.$i]."',".$_POST['nota final'.$i].",".$_POST['profesorid'.$i].")";
      	mysql_query($sql1) or die ("Error al guardar".mysql_error());
      }
}
echo "<script type='text/javascript'>";
echo "alert('la información se guardo satisfactoriamente');";
echo "location.href='totalumnos.php';";
echo "</script>";
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhm1">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1"/>
	<title>Alumnos por Curso</title>
</head>
<body>
  <center>
   <form action="masterdetalle.php" method="post">
   <?php
   echo "<table border='1'>";
   echo "<tr style='background-color:blue;color:white;'>";
   echo "<td align='center' width='20%'>Curso</td>";
   echo "<td align='center' width='20%'>Jornada</td>";
   echo "<td align='center' width='20%'>Nota Final</td>"; 
   echo "<td align='center' width='20%'>Profesor</td>"; 
   echo "<td align='center' width='20%'>Eliminar</td>";
   echo "</tr>";

   for ($i=1;$i<=@$_POST['cantidad_lineas'];$i++)
   {
     if ($_POST['visible'.$i]==1)
     {
      echo "<tr style='color:Black;'>";
      echo "<td align='center'>"; materia("cursoid".$i); echo "</td>";
      echo "<td align='center'><select name='jornada".$i."'>";
      echo "<option value='mañana'>Mañana</option>"; 
      echo "<option value='tarde'>Tarde</option>"; 
      echo "<option value='noche'>Noche</option>"; 
      echo "</select></td>";
      echo "<td align='center'><input name='notafinal".$i."' value=0></td>";
      echo "<td align='center'>"; profe("profesorid".$i);echo "</td>";
      echo "<td align='center'><button name='eliminar' value='".$i."'>Eliminar</button></td>";
      echo "</tr>";
     } 
     echo "<input type='hidden' name='visible".$i."'value'".$_POST['visible'.$i]."'>";
   }
   echo "</table>";

   echo "<br>";
   echo "<button name='agregar' value='agregar'>Agregar Linea</button>";
   echo "<button name='guardar' value='guardar'>Guardar en BD</button>";

   echo "<input type='hidden' name='cantidad_lineas' value='".@$_POST['cantidad_lineas']."'>";
   echo "<input type='hidden' name='alumnoid' value='".$_SESSION['dato']."'>";
   ?>
   </center>
   </form>
</body>
</html>