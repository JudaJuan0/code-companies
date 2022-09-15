<?php
require("accede.php");
require_once("conexion.php");
?>
<html>
<head>
  <title>TEC GYM</title>
</head>
<link href='https://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
 <link rel="stylesheet" type="text/css" href="css/main.css">
 <link rel="stylesheet" type="text/css" href="css/animate.css">
 <meta charset="utf-8"/>
<marquee bgcolor="" behavior="alternate" direction="right">
  <b><font color="black" size="6">El ejercicio es salud</font></b> 
</marquee>
<style type="text/css">
<!--
body { cursor: crosshair}
-->
</style>

<center>
<style type="text/css">
      
      * {
        margin:0px;
        padding:0px;
      }
      
      #header {
        margin:auto;
        width:500px;
        font-family:Arial, Helvetica, sans-serif;
      }
      
      ul, ol {
        list-style:none;
      }
      
      .nav > li {
        float:left;
      }
      
      .nav li a {
        background-color:aqua;
        color:black;
        text-decoration:none;
        padding:15px  24px;
        display:block;
      }
      
      .nav li a:hover {
        background-color:#434343;
      }
      
      .nav li ul {
        display:none;
        position:absolute;
        min-width:140px;
      }
      
      .nav li:hover > ul {
        display:block;
      }
      
      .nav li ul li {
        position:relative;
      }
      
      .nav li ul li ul {
        right:-140px;
        top:0px;
      }
      
    </style>
  </head>
  <center><img class="img2" src=" img/logo.png" title="TECGYM"></center>
  <body>
    <div id="header">
      <ul class="nav">
        <li><a href="alimentacion.html">Alimentación</a>
          <ul>
            <li><a href="habitos.html">Habitos</a></li>
            <li><a href="dietas.html">Dietas</a></li>
            <li><a href="postres.html">Postres</a></li>
            <li><a href="bebidas.html">Bebidas</a>
            </li>
          </ul>
        </li>
        <li><a href="motivacion.html">Motivaciones</a>
          <ul>
            <li><a href="historias.html">Historias</a></li>
            <li><a href="frases.html">Frases de motivación</a></li>
          </ul>
        </li>
        <li><a href="ejercicios.html">Ejercicios</a>
        <ul>
            <li><a href="pectoral.html">Pectorales</a></li>
            <li><a href="pierna.html">Pierna</a></li>
            <li><a href="abdomen.html">Abdomen</a></li>
            <li><a href="brazo.html">Brazo</a></li>
            <li><a href="espalda.html">Espalda</a></li>
          </ul>
          </li>
      
      

          <li id="umenu"><a href="#"> <?php echo $_SESSION['usuario']?></a>
          <ul class="submenu"></li>
          <?php if ($_SESSION['nivel']=='a')
          echo "<li><a href='totusuarios.php' target='marco'>Usuarios</a></li>"?>
          <li><a href="userclave.php" target="marco">Contraseña</a></li>
            <li><a href="cierra.php">Cerrar sesion</a></li>
            </li>
          </ul>

          </ul>
    </div>

