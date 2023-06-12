<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
  <!-- Bootstrap CSS v5.2.1 -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">


</head>

<body>
<style type="text/css">
  body{
    background-image: url(../php/img/fondo.jpg);
    background-repeat:no-repeat;
  background-size: 100%;
  
  }
  .card-container {
      display: flex;
      flex-wrap: wrap;
    }
    .card {
      flex: 1 1 300px; /* Ajusta el ancho de las tarjetas según tus necesidades */
      margin: 10px;
    }
  .head{
    width:100%;
    background-color: rgba(0, 0, 0, 0.6);
    padding: 0px ;
    border-radius: 5px;
  }
  </style>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
    <div class="head">
    <img class="image" src="../php/img/logo.png" alt="logo" width="100px" height="100px">
    <a class="btn btn-primary " href="../php/formularioRegistro.php" aria-current="page">Registro</a>
  <a class="btn btn-primary " href="../php/loging.php" aria-current="page">ingresar</a>    
    </div>
    <div class="card">
  <div class="card-header text-center" style="">
    Bienvenido a La Libreria
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0 text-center">
      <p>En nuestra tienda encontraras una gran variedad de libros en nuestro gran catalogo y si no lo encuentras pidelo y te lo taeremos  </p>
      <footer class="blockquote-footer text-center">A que esperas para formar parte de nuestra gran familia</footer>
    </blockquote>
  </div>
</div>
<div class="card-container">
<div class="card" >
  <img class="card-img-top" src="../php/img/1.jpg" alt="Card image cap" width="150px" height="300px">
  <div class="card-body">
    <h5 class="card-title">Harry Potter Y La piedra filosofal</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Entrar</a>
  </div>
</div>

<div class="card">
  <img class="card-img-top" src="../php/img/4.jpg" alt="Card image cap"width="150px" height="300px">
  <div class="card-body">
    <h5 class="card-title">Harry potter y el caliz de fuego</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Entrar</a>
  </div>
</div>

<div class="card" >
  <img class="card-img-top" src="../php/img/3.jpg" alt="Card image cap"width="150px" height="300px">
  <div class="card-body">
    <h5 class="card-title">Harry potter y el pricionero de azcaban</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Entrar</a>
  </div>
</div>
</div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>