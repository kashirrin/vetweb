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
        <a href="tel:+52 614-249-2118">
            <i class="fab fa-whatsapp" aria-hidden="true"> 614-249-2118</i>
        </a>
    </ul>
</nav>
</header>
<section class="principal">       
<div class="wrapper">
<div class="bodybox">
<form class="insertpersonal">

    <?php
        
    ?>
    <?php
        $fname='nombre1';
        $sname='nombre2';
        $flast='apellido1';
        $slast='apellido2';
        $tel='telefono';
        $col='colonia';
        $call='calle';
        $num='numero';
        $puesto='puesto';       
        $queryinsert = "INSERT into personal(nombre1,nombre2,apellido1,apellido2,telefono,colonia,calle,numero,puesto)
		values('$fname','$sname','$flast','$slast','$tel','$col','$call','$num','$puesto');";
    ?>
    <form method="post">
            <label for="fname">Primer nombre</label>
    <input type="text" id="fname" name="fname">
    <label for="lname">Segundo Nombre</label>
    <input type="text" id="lname" name="sname">
    <label for="fname">Primer Apellido</label>
    <input type="text" id="fname" name="flast">
    <label for="lname">Segundo Apellido</label>
    <input type="text" id="lname" name="slast">
    <label for="fname">Telefono</label>
    <input type="text" id="fname" name="tel">
    <label for="lname">Colonia</label>
    <input type="text" id="lname" name="col">
    <label for="fname">Calle</label>
    <input type="text" id="fname" name="call">
    <label for="lname">Número</label>
    <input type="text" id="lname" name="num">
    <label for="fname">Puesto</label>
    <input type="text" id="fname" name="puesto">
    <button type="submit" name="submitpersonal">
        INGRESAR
    </button>
    </form>

    <?php
        if (isset($_POST['submitpersonal'])) {
            $fname='nombre1';
            $sname='nombre2';
            $flast='apellido1';
            $slast='apellido2';
            $tel='telefono';
            $col='colonia';
            $call='calle';
            $num='numero';
            $puesto='puesto';       
            $queryinsert = "INSERT into personal(nombre1,nombre2,apellido1,apellido2,telefono,colonia,calle,numero,puesto)
            values('$fname','$sname','$flast','$slast','$tel','$col','$call','$num','$puesto');";
        }
    ?>
</form>
        <div class="footer">
            <p>© 2020 por CLÍNICA VETERINARIA EL MUNDO DE LOS ANIMALES.</p>
        </div>
</div>
</div>
</section>

</body>
</html>