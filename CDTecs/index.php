    
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <link rel="stylesheet" href="login.php">
            <link rel="stylesheet" href="mapa.html">
            <link rel="stylesheet" href="css/index.css">
            <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
            <title>Datos Tec</title>
        </head>
        <header>
            <div class="container-text center">
                <div class="row">
                    <div class="col">
                      <img src="./imgs/GobMX.png" class="GobMX">  
                    </div>
                    <div class="col">
                        <img src="./imgs/EducLogo.jpg" class="EducLogo">
                    </div>
                    <div class="col">
                        <img src="./imgs/TecNM.png" class="TecNM">
                    </div>
                    <div class="col">
                        <img src="./imgs/Tec Colima.png" class="TecColima">
                    </div>
                </div>
                <div class="row barra-blue">a
                    <!--
                    <div class="col">
                        <p>Hola</p>
                    </div>
                    <div class="col">
                        <p>Hola</p>
                    </div>
                    <div class="col">
                        <p>Hola</p>
                    </div>
                    <div class="col">
                        <p>Hola</p>
                    </div>
                    -->
                </div>
            </div>
        </header>
        <br>
        <body>
            <center>
            <form method="post" action="login.php">
            <table class="tabla">
                <tr><td align="center" colspan="2"><label>Inicio de sesión</label></td></tr>
                <tr><td align="center" rowspan="5"><img class="login" src="./imgs/Login.jpg"></td><td><label>Usuario</label></td></tr>
                <tr><td><input type="text" name="txtusuario"/></td></tr>
                <tr><td><label>Contraseña</label></td></tr>
                <tr><td><input type="password" name="txtpassword"/></td></tr>
                <tr><td><a href="mapa.php"><input type="submit" value="Ingresar"/></a></td></tr>
            </table>
        </center>
        <br>
        </form>
        </body>
        <h1 class="legend">© 2022 Todos los derechos reservados. Soporte y contacto</h1>
        <footer>
            <div class="row green">
                <div class="col-12 col-md-3 mbr-fonts-style display-7">
                    <br>
                <strong>Dirección</strong> 
                <br>
                Avenida Tecnológico 1 A.P. 10 y 128, Villa de Álvarez, 28976 Villa de Álvarez, Col.
                <br>
                Contacto 
                <br>
                Email: 18460674@colima.tecnm.mx
                Teléfono: 312 312 6393
                </div>
                <div class="col-8">
                    <img src="./imgs/ITColima.jpg" class="ITC">
                </div>
                <!--
                <div class="col">
                    <p>Hola</p>
                </div>
                <div class="col">
                    <p>Hola</p>
                </div>
                <div class="col">
                    <p>Hola</p>
                </div>
                <div class="col">
                    <p>Hola</p>
                </div>
                -->
            </div>
            
        </footer>
        </html>