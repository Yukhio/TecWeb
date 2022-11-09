<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "test";

    $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
    if(!$conn)
    {
        die("No hay conexión: " .mysqli_connect_error());
    }

        $nombre=$_POST['nombres'];
        $apellido=$_POST['apellidos'];
        $usuario=$_POST['usuario'];
        $password=$_POST['password'];
        $sql=$conn->query("insert into usuarios(nombres, apellidos, usuario, password)values('$nombre','$apellido','$usuario','$password') ");
        if($sql==1){
            echo "<script>alert('Usuario registrado')</script>";
        }else{
            echo "<script>alert('Usuario no registrado')</script>";
    }
?>