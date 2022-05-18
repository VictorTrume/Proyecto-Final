<?php

      include("abre.php");

      $Nombre    =$_POST['Nombre'];
      $Apellido =$_POST['Apellido'];
      $Calle     =$_POST['Calle'];

      $consulta = "INSERT INTO clientes(Nombre, Apellido, Calle) VALUES
    ('$Nombre','$Apellido','$Calle')";

        if($conexion->query($consulta) === TRUE){
      header("Location: index.php");        
}else{
    echo "Error: " .$consulta . "<hr>" . $conexion->error;
    }
    $conexion->close();

      ?>

    
