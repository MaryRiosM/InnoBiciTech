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

        /* nueva rama para modificaciones */
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
                  <a href="index.php">
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

    
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
    
                    <!-- Formulario de Inicio de Sesión con Bordes -->
                    <form action="php/login_usuario_be.php" method="POST" class="border p-4 rounded">
    
                        <h2 class="mb-4 text-center text-dark">Iniciar Sesión</h2>
    
                        <div class="form-group text-dark">
                            <label for="usuario" class="text-dark">Correo</label>
                            <input type="text" class="form-control" id="correo" placeholder="Correo Electrónico" name="correo">
                        </div>
                        <div class="form-group text-dark">
                            <label for="contrasena" class="text-dark">Contraseña</label>
                            <input type="password" class="form-control" id="contrasena" placeholder="Contraseña" name="contrasena">
                        </div>

                        <div class="container mt-5">
                            <div class="row justify-content-center">
                                <div class="col-md-6 tex  t-center">
                                    <div class="form-check mb-3 text-center justify-content-center">
                                        <input type="checkbox" class="form-check-input text-center" id="recordar">
                                        <label class="form-check-label text-dark" for="recordar">Recordar Contraseña</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        

                        <div class="container mt-5">
                            <div class="row justify-content-center">
                                <div class="col-md-6 text-center">
                    
                                  
                                        <button class="btn btn-primary btn-block col-md-6 text-center text-center mb-0">Iniciar Sesión</button>
    
                                    <hr class="my-4">
                
                                    <p class="text-center mb-0">
                                        <a href="Recuperardatos.php">Olvidé mi Contraseña</a>
                                    </p>
                                    <p class="text-center mb-0">
                                        <a href="Datos_cuenta.php">Crear cuenta</a>
                                    </p>
                    
                                </div>
                            </div>
                        </div>
                    </form>
    
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