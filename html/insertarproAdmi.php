<?php

include 'conexioninicio.php';

$productoID= $_POST['productoID'];
$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];
$precio=$_POST['precio'];
$stock=$_POST['stock'];
$categoria=$_POST['categoria'];
$fecha_creacion=$_POST['fecha_creacion'];
$fecha_vencimiento=$_POST['fecha_vencimiento'];



       $nombreimagen=$_FILES['Foto']['name'];
       $temporal= $_FILES['Foto']['tmp_name'];
       $carpeta='../imagenes';
       $ruta=$carpeta.'/'.$nombreimagen;
       
       move_uploaded_file($temporal, $carpeta.'/'.$nombreimagen);
     



$query="INSERT INTO productos(productoID, nombre, descripcion, precio, stock, categoria, fecha_creacion, fecha_vencimiento, imagen_producto) 
       VALUES ('$productoID', '$nombre','$descripcion','$precio','$stock','$categoria','$fecha_creacion','$fecha_vencimiento','$ruta')";

$verificar_nombre = mysqli_query($conexion, "SELECT * FROM productos WHERE nombre='$nombre'");

if (mysqli_num_rows($verificar_nombre)> 0){
       echo'
       <script>
       alert("Este nombre ya esta registrado, ingresa otro diferente");
       window.location="../html/productosAdmi.php"
       </script>
       ';
}

$ejecutar= mysqli_query($conexion, $query);

if ($ejecutar){
       echo'
       <script>
       alert("usuario almacenado existosamente");
       window.location="../html/productosAdmi.php"
       </script>
        ';
}

?>