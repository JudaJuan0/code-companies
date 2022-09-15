<?php
$host="localhost";
$user="root";
$pw="";
$db="tecgym";
$conexion=mysql_connect($host,$user,$pw) or die ("problema al conectar con el servidor");
mysql_select_db($db,$conexion) or die("problema al conetar con la base de datos");
?>