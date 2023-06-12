<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" src="/source/css/loging.css">
    <title>Inicio de sesión</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
<style type="text/css">
body{
    background-image: url(../php/img/fondo.jpg);
    background-repeat:no-repeat;
    color:white;
  background-size: 100%;}
 .row {
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
}

.form {
  width: 450px;
}

  </style>
    <!-- <form action="Vregistro.php" method="post">
    <p>nombre <input type="text" name="nombre" required></p>
    <p>Usuario/Correo <input type="text" name="correo" required></p>
    <p>contraseña <input type="password" name="contraseña" required></p>
    <p>repetir <input type="password" name="repetir" required></p>    
 <button type="submit">enviar</button>    
    </form> -->

    <div class="container">
    <div class="row">
        <div class="offset-md-2 col-lg-5 col-md-4 offset-lg-2 offset-md-4">
            <div class="panel ">
                <div class="panel-heading" >
                    
                    </div>
                    <div class="panel-body p-5">
                    <h3>Login</h3>
                    <img class="offset-lg-0" src="../php/img/logo.png" alt="" width="200px" height="200px">
                    <form action="Vregistro.php" method="POST">
                        <div class="form-group py-2">
                            <div class="input-field"> <span class="far fa-user p-2"></span> <input type="text" placeholder="nombre"name="nombre" required> </div>
                        </div>
                        <div class="form-group py-1 pb-2">
                        <div class="form-group py-2">
                            <div class="input-field"> <span class="far fa-user p-2"></span> <input type="text" placeholder="correo" required name="correo"> </div>
                        </div>
                        <div class="form-group py-1 pb-2">
                            <div class="input-field"> <span class="fas fa-lock px-2"></span> <input type="password" placeholder="contraseña" name="contraseña" required> </div>
                        </div>
                        <div class="form-group py-1 pb-2">
                            <div class="input-field"> <span class="fas fa-lock px-2"></span> <input type="password" placeholder="repetir contraseña" name="repetir" required> </div>
                        </div>
                      
                        <div ><button class="btn btn-primary btn-block mt-3" type="submit">enviar</button>
                         <a class="btn btn-primary btn-block mt-3" href="../php/index.php">volver atras</a> </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</div>
</body>
</html> 
