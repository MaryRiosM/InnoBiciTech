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
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="btn-group d-flex" role="group" aria-label="Basic outlined example">
                  <a href="Inicio.php">
                    <button type="button" class="btn btn-secondary">Inicio</button>
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

<body>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 offset-md-3">
              <div class="border-blue text-center">
                <h5>Formulario de Servicio Técnico</h5>
                <form>
                  <div class="mb-3 tex">
                    <label for="nombre" class="form-label label-letra_Negra">Nombre y Apellidos</label>
                    <input type="text" class="form-control text-center" id="nombre" placeholder="">
                  </div>
                  <div class="mb-3">
                    <label for="telefono" class="form-label label-letra_Negra">Teléfono</label>
                    <input type="tel" class="form-control text-center" id="telefono" placeholder="">
                  </div>
                  <div class="mb-3">
                    <label for="direccion" class="form-label label-letra_Negra">Dirección</label>
                    <input type="text" class="form-control text-center" id="direccion" placeholder="">
                  </div>
                  <div class="mb-3">
                    <label for="descripcion" class="form-label label-letra_Negra">Descripción del Daño</label>
                    <textarea class="form-control text-center" id="descripcion" rows="3" placeholder="Describe claramente el daño que presenta"></textarea>
                  </div>
                  <div class="mb-3">
                    <label for="ciudad" class="form-label label-letra_Negra">Ciudad</label>
                    <input type="text" class="form-control text-center" id="ciudad" placeholder="">
                  </div>
                  <div class="mb-3">
                    <label for="email" class="form-label label-letra_Negra">Correo Electrónico</label>
                    <input type="email" class="form-control text-center" id="email" placeholder="">
                  </div>
                  <a href="solicitud_enviada_tecnica.php"><button type="button" type="submit" class="btn btn-primary justify-content-center container">Solicitar</button></a>
                </form>
              </div>
            </div>
          </div>
        </div>  
<br>
        <footer class="text-light navbar bg-dark expand-lg fixed-bottom justify-content-center">
          <div class="container-fluid">
            <div class="row col-xl-12 text-center">
              <h6>2024 © Todos los derechos reservados</h6>
            </div>
          </div>
        </footer>  
          
    </body>
      </html>
