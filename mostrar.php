<?php
 
 $conexion=mysql_connect("localhost","root","");
mysql_select_db("epe2") or die ("cannot select DB");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="mostrar.css">
    <title>Mostrar</title>
</head>
<body>

        <h1>Mostrar</h1>
    <nav>
        <button class="nav-button" >Menu</button>
        <a href="/epe2/index.html" class="nav-enlace ">Inicio</a>
        <a href="/epe2/mostrar.php" class="nav-enlace">Mostrar</a>
        <a href="/epe2/contacto.html" class="nav-enlace ">Contacto</a>
    </nav>

    <table>
        <tr >
            <th>ID</th>
            <th>Nombre</th>
            <th>Marca</th>
            <th>Precio</th>
            <th>Cantidad</th>
        </tr>

        <?php
        
        $sql="SELECT * FROM articulos";
        $resultado=mysql_query($sql,$conexion);

        while ($mostrar=mysql_fetch_array($resultado)) {
            

        ?>

        <tr>
            <td><?php echo $mostrar ['id']?></td>
            <td><?php echo $mostrar ['nombre']?></td>
            <td><?php echo $mostrar ['marca']?></td>
            <td><?php echo $mostrar ['precio']?></td>
            <td><?php echo $mostrar ['cantidad']?></td>
        </tr>
        <?php
        }
        ?>
    </table>
    
</body>
</html>