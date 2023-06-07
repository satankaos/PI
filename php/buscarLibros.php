<!doctype html>
<html lang="en">

<head>
  <title>buscar libro</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">



</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  
  <form action="procesarBusqueda.php" method="post">
  <div class="d-grid gap-2 col-2 mx-auto my-5 justify-content-centre"> 
  <h1>Buscar libro</h1>
  <h6>solo para ver los libros de los que disponemos</h6>
  <input type="text" name="Titulo"placeholder="Titulo" >
 <input type="text" name="Editorial" placeholder="Editorial">
   <input type="text" name="Autor" placeholder="Autor">
    <input type="text" name="Genero"placeholder="Genero" >
    
        <label>Metodo de busqueda</label>
        <select name="select">
            <option value="0">todos</option>
            <option value="1">Titulo</option>
            <option value="2">Autor</option>
            <option value="3">editorial</option>
            <option value="4">Genero</option>
        </select>
        
 <button type="submit" class="btn  btn-primary">buscar</button> 
 <a href="./../php/home.php" class="btn  btn-primary">Atras</a>  
 </div>
  </form>
  <footer>
    <!-- place footer here -->
  </form>

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
<f
</html>