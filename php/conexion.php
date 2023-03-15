<?php
function conect()
{
    $servername = "localhost";
    $database = "libros_bd";
    $username = "admin";
    $password = "21232f297a57a5a743894a0e4a801fc3";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database) or die ("Connection failed: " . mysqli_connect_error());
    // Check connection
    return $conn;
    
}
function desconexion($conn){mysqli_close($conn);}
function insertarLibro( $conn,$Titulo, $Autor,$Editorial,$Fecha_publicacion, $Genero, $Precio, $Imagen, $Descripción)
{
    $stmt = $conn->prepare("INSERT INTO libros (Titulo, Autor, Editorial, Fecha_publicacion, Genero, Precio, Imagen, Descripción) VALUES (?, ?, ?, ?, ?, ?, ?,?)");

$stmt->bind_param("ssssssss",$Titulo, $Autor,$Editorial,$Fecha_publicacion, $Genero, $Precio, $Imagen, $Descripción);
if ($stmt->execute()) {

    $txt= "libro agregado ";
    
    } else {
    
     $txt="Error: " . $stmt->error;
    
    }
   
   
    return $txt;
    
}   

function insertarUsuario($conn,$Nombre, $Correo, $Password){
    
    $stmt = $conn->prepare(" INSERT INTO `usuario` (`Id_admin`, `Id_usuario`, `Nombre`, `Correo`, `Password`, `id_libro`) VALUES (NULL, NULL, ?, ?, ?, NULL);");
    $stmt->bind_param("sss",$Nombre, $Correo, $Password);
if ($stmt->execute()) {

    $txt= "usuario agregado al bbdd";
    
    } else {
    
     $txt="Error: " . $stmt->error;
    
    }
   
   
    return $txt;
}//sacar id libro de tabla libros
function insertarCarro($conn,$libros, $id_carrito, $correo, $total, $id_usuario, $id_libro){//tienes que sacar el id de usuario de la tabala usuario y el id de libro de libros y el nombre del libro 
    $stmt = $conn->prepare("INSERT INTO `carrito` (`libros`, `id_carrito`, `correo`, `total`, `id_usuario`, `id_libro`) VALUES (?,? ,? ,? ,?,?)");
    $stmt->bind_param($libros, $id_carrito, $correo, $total, $id_usuario, $id_libro);
if ($stmt->execute()) {

    $txt= "Producto agregado al carrito";
    
    } else {
    
     $txt="Error: " . $stmt->error;
    
    }
   
   
    return $txt;
}
// DELETE FROM `carrito_libros` where carrito_libros.cart_id=10;
 function borrarCarro($id_carrito,$conn){

    

    if (isset($id_carrito)) {
        
        
        $borrar = "DELETE FROM carrito WHERE `carrito`.`id`= $id_carrito";
        $borrar2 =" DELETE FROM `carrito_libros` where carrito_libros.cart_id=$id_carrito";
        
        $ejecutar = mysqli_query($conn,$borrar) or die;
        $ejecutar2 = mysqli_query($conn,$borrar2) or die;
        if ($ejecutar) {
            return "<script>alert('Ha sido Borrado')</script>";
            
           
        }
        if ($ejecutar2) {
            return "<script>alert('Se han borrado todos los productos')</script>";
        }
        
    }






 }   
 function borrarProductosCarro($id_carrito,$conn){

    

    if (isset($id_carrito)) {
        
        
        $borrar = "DELETE FROM carrito WHERE `carrito`.`id`= $id_carrito";

        $ejecutar = sqlsrv_query($conn, $borrar);
        if ($ejecutar) {
            return "<script>alert('Ha sido Borrado')</script>";
        }
    }






 }   
?>