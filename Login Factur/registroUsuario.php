<?php
require 'conexion.php';
$correo=$_POST['email2'];
$contrasena=$_POST['password2'];
$contrasena2=$_POST['password_confirmation'];

if($contrasena==$contrasena2){
    $sql="SELECT * FROM usuario Where correo='$correo'";

    if($query = mysqli_query($con,$sql)){
        if($row = mysqli_fetch_assoc($query)){
                echo "<script>alert('ya existe');</script>" ;
                header("Location: ./Login.php");
                mysqli_close($con);     
        }else{
             $crear="INSERT INTO usuario (correo,contrasena) VALUES ('$correo','$contrasena')";
                if($query = mysqli_query($con,$crear)){
                mysqli_close($con);
                echo "<script>alert('correcto');</script>" ;
                header("Location: ./Login.php");
                }  
        }
    }else{
        echo "<script>alert('incorrecto');</script>" ;
        header("Location: ./Login.php");
        mysqli_close($con);
    }   
}else{
    echo "<script>alert('Las contraseñas no son iguales');</script>" ;
    header("Location: ./Login.php");
    mysqli_close($con);
}




?>


