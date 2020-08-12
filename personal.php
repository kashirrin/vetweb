<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <base href="http://localhost/vetweb/">
    <link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free.min.css" media="all">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="http://localhost/vetweb/multimedia/img/Logo.png">
    <title>El mundo de los animales</title>
    <?php include "db.php" ?>
</head>
<body>    
<header id="header">

<h1><a href="index.php"><img src="http://localhost/vetweb/multimedia/img/Logo.png" alt=""></a></h1>
<nav id="nav">
    <ul>
        <li><a href="personal.php">PERSONAL</a></li>
        <li><a href="historial.php">HISTORIAL</a></li>
        <li><a href="citashechas.php">CITAS</a></li>
        <a href="tel:+52 614-249-2118">
                    <i class="fab fa-whatsapp" aria-hidden="true"> 614-249-2118</i>
                </a>

    </ul>
    
</nav>
</header>
<section class="principal">       
<div class="wrapper">
<div class="bodybox">
<table>
  <tr>
    <th>ID</th>
    <th>P. Nombre</th>
    <th>S. Nombre</th>
    <th>P. Apellido</th>
    <th>S. Apellido</th>
    <th>Telefono</th>
    <th>Colonia</th>
    <th>Calle</th>
    <th>Número</th>
    <th>Puesto</th>

  </tr>

<tbody>
    
    <?php
        $query = "SELECT * FROM personal";

        $result = mysqli_query($conection , $query);
    ?>
    <?php
        while($row = mysqli_fetch_assoc($result)){
            $id_personal=$row['id_personal'];
            $fname=$row['nombre1'];
            $sname=$row['nombre2'];
            $flast=$row['apellido1'];
            $slast=$row['apellido2'];
            $tel=$row['telefono'];
            $col=$row['colonia'];
            $call=$row['calle'];
            $num=$row['numero'];
            $puesto=$row['puesto'];

            $element_html= "  
            <tr>
                <td>$id_personal</td>
                <td>$fname</td>
                <td>$sname</td>
                <td>$flast</td>
                <td>$slast</td>
                <td>$tel</td>
                <td>$col</td>
                <td>$call</td>
                <td>$num</td>
                <td>$puesto</td>
            </tr>";
            echo $element_html;
        }
    ?>
</tbody>
</table>
<a class ="inper" href="insertpersonal.php">Insertar</a>
<a class ="eliper" href="modpersonal.php">Eliminar</a>
<a class ="modper" href="modpersonal.php">Modificar</a>
<div class="footer">
            <p>© 2020 por CLÍNICA VETERINARIA EL MUNDO DE LOS ANIMALES.</p>
        </div>
</div>
</div>
</section>

</body>
</html>