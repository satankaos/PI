<?php
require("conexion.php");
 $db = conect();
 if ($_POST['button_eliminar']) {
    $id=$_POST['id'];
    echo $id;
  
    $sql = "DELETE FROM libros WHERE `libros`.`id` = $id ";

// Ejecutar la consulta
$result = mysqli_query($db, $sql);
header('Location: verLibros.php');
 } else {
    
 }
 
desconexion($db)
?>