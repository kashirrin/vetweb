<?php
    $host= "LocalHost";
    $user= "root";
    $password= "Bmbemcnd1";
    $db= "veterinaria";
    $conection = mysqli_connect($host,$user,$password,$db) or die ("Error en la conexión a la base de datos ".mysqli_error());
?>