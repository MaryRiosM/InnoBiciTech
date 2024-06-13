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

    <!-- DE AQUI EN TITULO -->
    <div class="container mb-5">
        <h2 class="mb-4 text-dark">Registro de Productos</h2>
        <form>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="proveedor" class="form-label text-dark">Proveedor</label>
                    <select id="proveedor" class="form-select" aria-label="Proveedor">
                        <option selected>Selecciona un proveedor...</option>
                        <option>H A Bicicletas SA</option>
                        <option>Specialized Colombia SAS</option>
                        <option>Bike House SAS</option>
                        <option>Industrias Bicicletas Milán SAS</option>
                        <option>Almacenes Éxito SA</option>
                        <option>Falabella De Colombia SA</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="producto" class="form-label text-dark">Producto</label>
                    <input type="text" class="form-control" id="producto" placeholder="Ingrese el nombre del producto">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="precio" class="form-label text-dark">Precio</label>
                    <input type="number" class="form-control" id="precio" placeholder="Ingrese el precio">
                </div>
                <div class="col-md-6">
                    <label for="cantidad" class="form-label text-dark">Cantidad</label>
                    <input type="number" class="form-control" id="cantidad" placeholder="Ingrese la cantidad">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="marca" class="form-label text-dark">Marca</label>
                    <select id="marca" class="form-select" aria-label="Marca">
                        <option selected>Selecciona una marca...</option>
                        <option>Specialized</option>
                        <option>GW</option>
                        <option>Scott</option>
                        <option>Trek</option>
                        <option>Giant</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="tipoBicicleta" class="form-label text-dark">Tipo de Bicicleta</label>
                    <select id="tipoBicicleta" class="form-select" aria-label="Tipo de Bicicleta">
                        <option selected>Selecciona un tipo de bicicleta...</option>
                        <option>Montaña</option>
                        <option>Ruta</option>
                        <option>Urbana</option>
                        <option>BMX</option>
                    </select>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-6">
                    <label for="imagenProducto" class="form-label text-dark">Imagen Producto</label>
                    <input type="file" class="form-control" id="imagenProducto" style="display: none;">
                    <label for="imagenProducto" class="btn btn-danger">Subir Imagen</label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary" id="guardarBtn">Guardar</button>
                    <a href="Productos.php" class="btn btn-secondary text-dark">Cancelar</a>
                </div>
            </div>
        </form>
    </div>

    <footer class="text-light navbar bg-dark expand-lg fixed-bottom justify-content-center">
        <div class="container-fluid">
            <div class="row col-xl-12 text-center">
                <h6>2024 © Todos los derechos reservados</h6>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS (opcional, solo si lo necesitas para otras funcionalidades) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      // Obtener referencia al botón de guardar
      const guardarBtn = document.getElementById('guardarBtn');
      
      // Agregar evento de clic al botón de guardar
      guardarBtn.addEventListener('click', function() {
        // Simular un mensaje de registro exitoso
        alert("¡Registro exitoso!");

        // Redirigir a la página Productos.html
        window.location.href = "Productos.html";
      });
    });
  </script>

</body>

</html>