<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>registro</title>
</head>
<body>
    <form action="Vregistro.php" method="post">
    <p>nombre <input type="text" name="nombre" required></p>
    <p>Usuario/Correo <input type="text" name="correo" required></p>
    <p>contraseña <input type="password" name="contraseña" required></p>
    <p>repetir <input type="password" name="repetir" required></p>
    
 <button type="submit">enviar</button>    
    </form>
</body>
</html> 
