<?php

include 'conexion.php';

$nombre= $_POST['nombre'];
$apellido=$_POST['apellido'];
$email=$_POST['email'];
$contraseña=$_POST['contraseña'];
$cedula_cliente=$_POST['cedula_cliente'];
$telefono=$_POST['telefono'];

$query="INSERT INTO clientes(nombres, apellidos, nombreusuario, email, contraseña, cedula_cliente, telefono) 
       VALUES ('$nombres','$apellidos','$nombreusuario','$email','$contraseña','$cedula_cliente','$telefono')";

$verificar_correo = mysqli_query($conexion, "SELECT* FROM clientes WHERE email='$email'");

if (mysqli_num_rows($verificar_correo)> 0){
       echo'
       <script>
       alert("Este correo ya esta registrado, intenta con otro diferente");
       window.location="../html/iniciosecion.php"
       </script>
       ';
}

$ejecutar= mysqli_query($conexion, $query);

if ($ejecutar){
       echo'
       <script>
       alert("usuario almacenado existosamente");
       window.location="../html/pag.php"
       </script>
       
       ';
}


?>