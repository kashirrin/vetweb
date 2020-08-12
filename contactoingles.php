<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <base href="http://localhost/vetweb/">
    <link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free.min.css" media="all">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="http://localhost/vetweb/multimedia/img/Logo.png">
    <title>The world of the animals</title>
</head>
<body>
    <header id="header">
        <h1><a href="indexingles.php"><img src="http://localhost/vetweb/multimedia/img/Logo.png" alt=""></a></h1>
        <nav id="nav">
            <ul>
                <li><a href="http://localhost/vetweb/contacto.php">ESPAÑOL</a></li>
                <li><a href="contactoingles.php">CONTACT</a></li>
                <li><a href="">DATES</a></li>
                <!-- Botón para logear -->
                <li><button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Log in</button>

                    <div id="id01" class="modal">
                      
                      <form class="modal-content animate" action="/action_page.php" method="post">
                        <div class="imgcontainer">
                          <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal"></span>
                          <img src="http://localhost/vetweb/multimedia/img/Logo.png" alt="Avatar" class="avatar">
                        </div>
                    
                        <div class="container">
                            <label for="usuario"><b>User</b></label>
                            <input type="text" placeholder="User" name="usuario" required>
                            
                            <label for="contraseña"><b>Password</b></label>
                            <input type="password" placeholder="Password" name="contraseña" required id="pass">
                            <input type="checkbox" onclick="visible()">
                            <button type="submit">Log in</button>
                        </div>
                    
                        <div class="container">
                            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
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
    <div class="fondo"></div>
    <div class="principal">
        <div class="principal-izquierda">
            <h1 class="titulo">
            The world of the animals
            </h1>
            <div class="parrafo">
                <h3>
                    Our commitment
                </h3>
                <p>  
                    Help our clients and their pets in everything we can, with the price and quality that distinguishes us.
                </p>
                <p>Telephones:</p>
                <a href="tel:+6144138651">614-413-86-51 | </a>
                <a href="tel:+6142492118">614-249-21-18</a>
                <p class="t-socialmedia">
                    Social media:
                </p>
                <div class="iconos">
                    <a href="https://www.facebook.com/VeterinariaElMundodelosAnimales/")>
                        <i class="fab fa-facebook" aria-hidden="true"></i>
                    </a>
                </div>
                <h4>Location:</h4>
                <p>Trasviña y Retes 3503, San Felipe II Etapa, 31203 Chihuahua, Chih.</p>

            </div>
        </div>
        <div class="principal-derecha"></div>
    </div>
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
</body>
</html>