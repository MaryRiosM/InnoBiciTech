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
    <a href="Productos.html" target="_blank" class="carrito-izquierda">
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
<br>
 <div class="container d-flex justify-content-center">
      <div class="row">
        <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">
          <div class="card" style="width: 18rem;">
  <img src="IMG/ruta4.webp" class="card-img-top" alt="w-50 h-auto">
            <div class="card-body">
    <h5 class="card-title container d-flex justify-content-center" id="bicicleta">k2 Ruta</h5>
    <p class="card-textcontainer d-flex justify-content-center">$1.230.000</p>
    <div class="input-group mb-1 border-primary">
      <span class="input-group-text border-primary bg-primary text-white">Cantidad</span>
      <input type="number" class="form-control" value="1" min="1" id="cantidad">
      <button class="btn btn-primary" type="button">+</button>
    </div>
  <div class="input-group mb-1 border-primary">
    <span class="input-group-text border-primary bg-primary text-white">Valor bruto</span>
    <input type="number" class="form-control border-primary" id="valorBruto" value="1230000" min="0" readonly>
  </div>
  
  <div class="input-group mb-2">
    <span class="input-group-text border-primary bg-primary text-white">Valor total</span>
    <input type="number" class="form-control border-primary" id="valorTotal" value="1230000" min="0" readonly>
  </div>
  <a href="Inicio_sesion.php" onclick="guardarFactura()"><button type="button" class="mb-1 btn btn-danger btn-sm btn-block justify-content-center container">Comprar</button></a>
            </div>
          </div>
        </div>
      </div>
  


    <div class="container mt-5">
      <div class="accordion" id="accordionExample">
        <!-- Primer colapso -->
        <div class="card">
          <div class="card-header" id="headingOne">
            <h2 class="mb-0">
              <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Información General
              </button>
            </h2>
          </div>
    
          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
              <p>es un producto de alta calidad que se destaca por sus características diferenciales en comparación con otras bicicletas de ruta. Con un diseño aerodinámico y una estructura resistente, esta bicicleta es ideal para aquellos que buscan un rendimiento óptimo en sus entrenamientos y competencias.</p>
            </div>
          </div>
        </div>
    
        <!-- Segundo colapso -->
        <div class="card">
          <div class="card-header" id="headingTwo">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Características Técnicas
              </button>
            </h2>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
              <ul>
                <li>Material: Aluminio hidroformado con full cableado interno</li>
                <li>Grupo: SHIMANO Sora 9 Velocidades</li>
                <li>Accesorios: GW en aluminio</li>
                <li>Llantas: Chaoyang 700X25 30TPI attack</li>
                <li>Neumaticos Vittoria</li>
                <li>Rin GW 700C Caliper aluminio black</li>
                <li>Peso Aprox 10.4 kg</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <!-- Scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <footer class="text-light navbar bg-dark expand-lg fixed-bottom justify-content-center">
      <div class="container-fluid">
        <div class="row col-xl-12 text-center">
          <h6>2024 © Todos los derechos reservados</h6>
        </div>
      </div>
    </footer>
    <script>
      function multiplicar(){
        var cantidad = parseFloat(document.getElementById('cantidad').value);
        var valorBruto = parseFloat(document.getElementById('valorBruto').value);

        // Multiplicar•

        var valorTotal = cantidad * valorBruto;


        // Mostrar resultado•

        document.getElementById('valorTotal').value = valorTotal;

      }

      // mostrar en pantalla•

      window.onload = function(){
        document.getElementById('cantidad').addEventListener('input',multiplicar);
        document.getElementById('valorBruto').addEventListener('input',multiplicar);
      }

  // funcion guardar •

    function guardarFactura(){
      var cantidad = parseFloat(document.getElementById('cantidad').value);
      var valorBruto = parseFloat(document.getElementById('valorBruto').value);
      var valorTotal = parseFloat(document.getElementById('valorTotal').value);
      var nombreBicicleta = document.getElementById('bicicleta').textContent.trim();
// Guardar los valores en el almacenamiento local del navegador
      localStorage.setItem('cantidad', cantidad);
      localStorage.setItem('valorBruto',valorBruto);
      localStorage.setItem('valorTotal',valorTotal);
      localStorage.setItem('nombreBicicleta',nombreBicicleta);


      }


    </script>




    </body>
    </html>