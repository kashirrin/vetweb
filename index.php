<!DOCTYPE html>
<html lang="es-mx">
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
                <li><a href="http://localhost/vetweb/indexingles.php">ENGLISH</a></li>
                <li><a href="contacto.php">CONTACTANOS</a></li>
                <li><a href="citas.php">CITAS</a></li>
                <!-- Botón para logear -->
                <li><button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Loguear</button>

                    <div id="id01" class="modal">
                      
                      <form class="modal-content animate" action="/action_page.php" method="post">
                        <div class="imgcontainer">
                          <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal"></span>
                          <img src="http://localhost/vetweb/multimedia/img/Logo.png" alt="Avatar" class="avatar">
                        </div>
                    
                        <div class="container">
                            <label for="usuario"><b>Usuario</b></label>
                            <input type="text" placeholder="Usuario" name="usuario" required>
                            
                            <label for="contraseña"><b>Contraseña</b></label>
                            <input type="password" placeholder="Contraseña" name="contraseña" required id="pass">
                            <input type="checkbox" onclick="visible()">
                            <button type="submit" name="submit">Loguear</button>
                        </div>
                    
                        <div class="container">
                            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancelar</button>
                        </div>
                      </form>
                    </div>
                    

                </li>
                <a href="tel:+52 614-249-2118">
                    <i class="fab fa-whatsapp" aria-hidden="true"> 614-249-2118</i>
                </a>
            </ul>
            
        </nav>
    </header>
    <section class="principal">       
        <div class="wrapper">
        <div class="bodybox">

            <div class="content">

                    <section class="imagen fade" >
                        <h1>LOS MEJORES SERVICIOS Y </h1>
                        <h1>LOS MEJORES PRECIOS,</h1>
                        <h1>AQUI LOS ENCONTRARÁ.</h1>
                        <img src="http://localhost/vetweb/multimedia/img/perro.png" alt="dogtor">
                    </section>    
                    <section class="imagen fade" >
                        <h1>ATENCIÓN LAS 24 HORAS </h1>
                        <h1>SERVICIO DE AMBULANCIA</h1>
                        <h1>Y CITAS LAS 24 HORAS</h1>
                        <img src="http://localhost/vetweb/multimedia/img/gato.png" alt="gatodoctor">
                    </section>  
            
            </div>
            
        </div>
        
        <div class="footer">
            <h1>Ubicación</h1>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.4578340080466!2d-106.09810368559245!3d28.646007090223186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86ea433b84bb9d23%3A0x8018a4d455ae34cf!2sTrasvi%C3%B1a%20y%20Retes%203503%2C%20San%20Felipe%20II%20Etapa%2C%2031203%20Chihuahua%2C%20Chih.!5e0!3m2!1ses-419!2smx!4v1595255729899!5m2!1ses-419!2smx" 
                ></iframe>
            <div class="iconos">
                <a href="https://www.facebook.com/VeterinariaElMundodelosAnimales/")>
                    <i class="fab fa-facebook" aria-hidden="true"></i>
                </a>
            </div>
            <p>© 2020 por CLÍNICA VETERINARIA EL MUNDO DE LOS ANIMALES.</p>
        </div>
    </div>
    </section>

    <script>
        var modal = document.getElementById('id01');

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        </script>

        <script>
            function visible() {
            var pass = document.getElementById("pass");
            if (pass.type === "password") {
            pass.type = "text";
        } else {
            pass.type = "password";
            }
        }
        </script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script>
            $(function(){
                var doc = $(document),
                fade = $('.fade');

                doc.on('scroll',function(){
                    var pos = doc.scrollTop();
                    
                    fade.each(function(){
                        var $this = $(this),
                            offset =$this.offset().top;
                            if (pos > offset) $this.css('opacity', 2 -(pos-offset)/150);  
                    });
                });
            });
        </script>
    </body>
</html>