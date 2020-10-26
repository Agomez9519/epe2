<?php

$conexion=mysql_connect("localhost","root","");
mysql_select_db("epe2") or die ("cannot select DB");

$user=$_REQUEST['user'];
$pass=$_REQUEST['pass'];

$query="SELECT * FROM usuarios WHERE user='$user' and pass='$pass'";


$resultado=mysql_query($query,$conexion);

$filas=mysql_num_rows($resultado);

if ($filas>0) {
    header("location:index.html");
}else{
    echo "<h1>Usuario y password incorrectas</h1>";
}



?>

