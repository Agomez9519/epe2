<?php

$conexion=mysql_connect("localhost","root","");
mysql_select_db("epe2") or die ("cannot select DB");

$user=$_REQUEST['user'];
$pass=$_REQUEST['pass'];

$query="INSERT INTO usuarios VALUES('$user','$pass')";


$resultado=mysql_query($query,$conexion);

        header("location:login.html");
   
    
  




