<?php

session_start();
include("..\php\conexion.php");


$db = conect();
// Conexión a la base de datos

if (isset($_POST['login_button'])) {
  $user = mysqli_real_escape_string($db, $_POST['usuario']);
  $password = mysqli_real_escape_string($db, md5($_POST['contraseña']));
  // Comprobar si el nombre de usuario es válido
  $sql="SELECT * FROM `usuario` WHERE Correo LIKE '".$user."'";
 $result = $db->query($sql);
if ($result) {
$row=mysqli_fetch_assoc($result);
if (empty($row)) {
  echo 'row vacio';

} else {
  if ($row['Correo']==$user &&  $row['Password']==$password ) {
    echo 'bie';
   // $_SESSION['user_id'] = $rows['id'];
   // $_SESSION['user_name'] = $rows['Nombre'];
    if ($row['Id_admin']!= null) {
      header('Location: panelad.php');
    } else {
      header('Location: home.php');    }
    
    

  } else {
    
  }
  
  
}

} else {
echo 'mal';
}

  
}
desconexion($db);
session_destroy()
//se accede con correo no con nombre 
?>
