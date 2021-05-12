<link href="assets/css/bootstrap.css" rel="stylesheet" />

<link href="assets/css/login-register.css" rel="stylesheet" />
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

<script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.js" type="text/javascript"></script>
<script src="assets/js/login-register.js" type="text/javascript"></script>



<?php
require 'conexion.php';
$correo=$_POST['email'];
$contrasena=$_POST['password'];

$sql="SELECT * FROM usuario Where correo='$correo' and contrasena='$contrasena'";

if($query = mysqli_query($con,$sql)){
    if($row = mysqli_fetch_assoc($query)){
        require 'sesion.php';
        $sesion  = new ControlSesion();

        $sesion->iniciar_sesion($row['correo'], $row['nombre']." ".$row['apellido']);
    }
    mysqli_close($con);
    echo "<script>alert('correcto');</script>" ;
    header("Location: ../HTML%20Factur/examples/index.php");
}else{
    mysqli_close($con);
    
    echo "<script>alert('incorrecto');</script>" ;
   header("Location: ./Login.php?msg=incorrecto");
}
