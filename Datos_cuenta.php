  <!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>INNOBICITECH</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="estilos.css">
  <style>
    body {
      padding-top: 56px;
      /* Ajusta el padding del cuerpo para compensar la altura del navbar fijo */
    }
  </style>
</head>

<body>

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
        <img src="IMG/Carrito-comp.png" alt="Miniatura" width="70" height="40" style="border-radius: 50%"
          class="carrito-izquierda">
      </a>
      <img src="IMG/logo1.jpeg" alt="Miniatura" width="70" height="40" style="border-radius: 50%">
    </div>
  </nav>
  <div class="container d-flex justify-content-center padding-top">
    <div class="row">
      <div class="col-sm-12 col-md-3 col-lg-3 col-xl-12">
        <div class="btn-group d-flex" role="group" aria-label="Basic outlined example">
          <a href="Inicio_sesion.php">
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
<div class="mx-5">
      <form action="php/registro_usuario_be.php" method="POST"   class="row g-4 d-flex justify-content-center">
        <div class="row mx-4">
          <div class="col-sm-12 col-md-3 col-lg-3 col-xl-12 text-light">
            <label for="inputAddress2" class="form-label text-dark">Nombre</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Ingresa Tus Nombres" name="nombre_completo"> 
          </div>
          <div class="col-4 text-light">
            <label for="inputAddress2" class="form-label text-dark">Apellido</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Ingresa Apellidos" name="apellido">
          </div>
       
        <div class="col-4 text-light">
            <label for="inputAddress2" class="form-label text-dark">Nombre de Usuario</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Ingresa el Usuario que vas a usar" name="usuario">
          </div>
          <div class="col-md-4 text-light">
            <label for="inputState" class="form-label text-dark">Departamento</label>
            <select id="inputState" class="form-select" name="departamento">
              <option selected>Amazonas</option>
              <option selected>Antioquía</option>
              <option selected>Arauca</option>
              <option selected>Atlántico</option>
              <option selected>Bolívar</option>
              <option selected>Boyacá</option>
              <option selected>Caldas</option>
              <option selected>Caquetá</option>
              <option selected>Casanare</option>
              <option selected>Cauca</option>
              <option selected>Cesar</option>
              <option selected>Chocó</option>
              <option selected>Córdoba</option>
              <option selected>Cundinamarca</option>
              <option selected>Guainía</option>
              <option selected>Guaviare</option>
              <option selected>Huila</option>
              <option selected>La Guajira</option>
              <option selected>Magdalena</option>
              <option selected>Meta</option>
              <option selected>Nariño</option>
              <option selected>Norte de Santander</option>
              <option selected>Putumayo</option>
              <option selected>Quindío</option>
              <option selected>Risaralda</option>
              <option selected>San Andrés y Providencia</option>
              <option selected>Santander</option>
              <option selected>Sucre</option>
              <option selected>Tolima</option>
              <option selected>Valle del Cauca</option>
              <option selected>Vaupés</option>
              <option selected>Vichada</option>
            </select>
          </div>
          <div class="col-md-4 text-light">
            <label for="inputCity" class="form-label text-dark">Ciudad</label>
            <input type="text" class="form-control" id="Ciudad en la que vives" name="ciudad">
          </div>
          <div class="col-4 text-light">
            <label for="inputAddress" class="form-label text-dark">Direcciòn</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Carrera 123 # 45-56" name="direccion">
          </div>
            <div class="col-md-4 text-light">
            <label for="inputPassword4" class="form-label text-dark">Telefono</label>
            <input type="password" class="form-control" id="1234567" name="telefono">
          </div>
          
          <div class="col-md-6 text-light">
            <label for="inputEmail4" class="form-label text-dark">Correo</label>
            <input type="email" class="form-control" id="inputEmail4" name="correo">
          </div>
          <div class="col-md-6 text-light">
            <label for="inputEmail4" class="form-label text-dark">Repite Correo</label>
            <input type="email" class="form-control" id="inputEmail4" name="repetir_correo">
          </div>

          <div class="form-group col-md-6 text-dark">
            <label for="contrasena" class="form-label text-dark">Contraseña</label>
            <input type="password" class="form-control" id="contrasena" placeholder="Ingresa tu contraseña" name="contrasena">
        </div>
        <div class="form-group col-md-6 text-dark">
            <label for="contrasena" class="form-label text-dark">Repitir tu Contraseña</label>
            <input type="password" class="form-control" id="contrasena" placeholder="Repitir tu contraseña" name="repetir_contrasena">
        </div>        
        <div class="col-12 text-dark">
          <br>
          <div class="form-check container d-flex justify-content-center text-dark">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label text-dark" for="gridCheck">
              Aceptar Condiciones
            </label>
          </div>
          <br>
        </div>
        <div class="col-12 container d-flex justify-content-center text-dark">
          
            <button class="btn btn-primary">Iniciar sesion</button>
          
        </div>
      </form>
    </div>
    <br><br>  
    <footer class="text-light navbar bg-dark expand-lg fixed-bottom justify-content-center">
      <div class="container-fluid">
        <div class="row col-xl-12 text-center">
          <h6>2024 © Todos los derechos reservados</h6>
        </div>
      </div>
    </footer>
</body>
</html>