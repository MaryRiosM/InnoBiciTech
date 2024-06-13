<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INNOBICITECH</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
    <style>
      body {
        padding-top: 56px; /* Ajusta el padding del cuerpo para compensar la altura del navbar fijo */
      }
    </style> 
</head>
<nav class="navbar expand-lg fixed-top justify-content-center">
  <div class="container-fluid">   
    <strong>
      <a class="navbar-brand">Innobicitech</a>
    </strong>
    <form class="d-flex carrito-izquierda" role="Buscar">
      <input class="form-control me-2" type="Buscar" placeholder="Buscar" aria-label="Buscar">
      <button class="btn btn-primary py-1" type="submit">Buscar</button>
    </form>
    <a href="Productos.php" target="_blank" class="carrito-izquierda">
      <img src= "IMG/Carrito-comp.png" alt="Miniatura" width="70" height="40" style="border-radius: 50%" class="carrito-izquierda">
    </a>    
    <img  src= "IMG/logo1.jpeg" alt="Miniatura" width="70" height="40" style="border-radius: 50%">
  </div>
</nav>
<body>
      <div class="container d-flex justify-content-center padding-top">
        <div class="row">
            <div class="col-sm-12 col-md-3 col-lg-3 col-xl-12">
                <div class="btn-group d-flex" role="group" aria-label="Basic outlined example">
                  <a href="Inicio_sesion.html">
                    <button type="button" class="btn btn-secondary">Inicio de sesion</button>
                </a>
                  
                   <a href="Productos.php">
                    <button type="button" class="btn btn-secondary">Productos</button>
                   </a>
                    <a href="Servicio_Tecnico.php"><button type="button" class="btn btn-secondary">Servicio Técnico</button></a>
                    <a href="tienda.php"><button type="button" class="btn btn-secondary">Tiendas</button></a>
                    <a href="Contactenos.php"><button type="button" class="btn btn-secondary">Contactenos</button></a>
                    <a href="PQR.php"><button type="button" class="btn btn-secondary">PQR</button></a>
                   
                  </div>
            </div> 
        </div>
    </div>
<br>
<br>
<br>
     
        <div class="container mt-5">
            <div class="border-blue row pt-3 pb-3">
                <!-- Cuadros de texto a la izquierda -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="label-letra_Negra" for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre">
                    </div>
                    <div class="form-group">
                        <label class="label-letra_Negra" for="apellido">Apellido</label>
                        <input type="text" class="form-control" id="apellido">
                    </div>
                    <div class="form-group">
                        <label class="label-letra_Negra" for="ciudad">Ciudad</label>
                        <input type="text" class="form-control" id="ciudad">
                    </div>
                    <div class="form-group">
                        <label class="label-letra_Negra" for="asunto">Asunto</label>
                        <input type="text" class="form-control" id="asunto">
                    </div>
                    <br>
                   <a href="solicitud_enviada_tecnica.html"><button type="button"type="submit" class="btn btn-light btn-outline-primary py-1">Enviar</button></a>
                </div>
                <!-- Cuadro grande a la derecha -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="label-letra_Negra" for="texto-grande">Ingresar texto</label>
                        <textarea class="form-control border-primary" id="texto-grande" rows="10"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <footer class="text-light navbar bg-dark expand-lg fixed-bottom justify-content-center">
            <div class="container-fluid">
              <div class="row col-xl-12 text-center">
                <h6>2024 © Todos los derechos reservados</h6>
              </div>
            </div>
          </footer>
    </body>
    </html>