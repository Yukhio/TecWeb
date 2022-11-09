<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="login.php">
    <link rel="stylesheet" href="css/index.css">
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <link rel="stylesheet" href="controlador/contRegist.php">
    
    <title>Registro de Usuarios</title>
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
<body>
    <div class="container">
    <div class="col">
        <form action="" method="POST" class="formulario">
        <div class="col">
            <h2 class="titReg">Registrar</h2>
            <?php
                include("modelo/conexion.php");
                include("controlador/contRegist.php");
            ?>
            <div class="padre">
                <div class="nombres">
                    <label for="">Nombres</label>
                    <input type="text" name="nombres">
                </div>
                <div class="apellidos">
                    <label for="">Apellidos</label>
                    <input type="text" name="apellidos">
                </div>
                <div class="usuario">
                    <label for="">Usuario</label>
                    <input type="text" name="usuario">
                </div>
                <div class="password">
                    <label for="">Contraseña</label>
                    <input type="password" name="password">
                </div>
            </div>
            <div class="cuenta">
                    <input class="button" type="submit" value="Registrar" name="registro">
                    
                    <a href="index.php">Salir</a>
                </div>
        </form>
        </div>
        </div>
    </div>
</body>
<footer>
            <div class="row green">a
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