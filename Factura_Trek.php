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
  <img src="IMG/bici 9.webp" class="card-img-top" alt="w-50 h-auto">
            <div class="card-body">
    <h5 class="card-title container d-flex justify-content-center" id="bicicleta">Trek Bicicleta de carretera Émonda SL 5 105 2024</h5>
    <p class="card-textcontainer d-flex justify-content-center">$10.435.208</p>
    <div class="input-group mb-1 border-primary">
      <span class="input-group-text border-primary bg-primary text-white">Cantidad</span>
      <input type="number" class="form-control" value="1" min="1" id="cantidad">
      <button class="btn btn-primary" type="button">+</button>
    </div>
  <div class="input-group mb-1 border-primary">
    <span class="input-group-text border-primary bg-primary text-white">Valor bruto</span>
    <input type="number" class="form-control border-primary" id="valorBruto" value="10435208" readonly>
  </div>
  
  <div class="input-group mb-2">
    <span class="input-group-text border-primary bg-primary text-white">Valor total</span>
    <input type="number" class="form-control border-primary" id="valorTotal" value="10435208" readonly>
  </div>
  <a href="Inicio_sesion.php" onclick="guardarfactuta()"><button type="button" class="mb-1 btn btn-danger btn-sm btn-block justify-content-center container">Comprar</button></a>
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
              <p>Con Trek Bicicleta de carretera Émonda SL 5 105 2024 podrás disfrutar de tus actividades sin complicaciones. Si te gusta la marca Trek y sus productos de ciclismo, visita las categorías de los productos que estás buscando y haz tu pedido cuanto antes para recibirlo en tan solo unos días en tu casa. Además en bikeinn, ponemos a tu disposición una comunidad del deporte para que te informes de todas las novedades y consejos en ciclismo.</p>
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
                <li>Desviador: Shimano 105 R7100, Braze-On, Down Swing</li>
                <li>Desviador trasero: Shimano 105 R7100, 36T Max Cog</li>
                <li>Cambio: Shimano 105 R7120, 12-Speed</li>
                <li>Freno delantero: Shimano 105 Hydraulic Disc</li>
                <li>Freno trasero: Shimano 105 Hydraulic Disc</li>
                <li>Llantas: Delantera - Bontrager Paradigm Sl, Tubeless Ready, 21 Mm Rim Width, 100X12Mm Thru Axle // Trasera - Bontrager Paradigm Sl, Tubeless Ready, 21 Mm Rim Width, 142X12 Thru Axle/22 </li>
                <li>Neumáticos: Bontrager R1 Hard-Case Lite, Wire Bead, 60 Tpi, 700X28 Mm</li>
                <li>Potencia: Talla: 47 - Bontrager Elite, 31.8 Mm, Blendr-Compatible, 7-Degree, 70 Mm Length // Talla: 50 - Bontrager Elite, 31.8 Mm, Blendr-Compatible, 7-Degree, 80 Mm Length // Talla: 52, 54 - Bontrager Elite, 38 mm, compatible con Blendr, 7 grados, 110 mm de longitud</li>
                <li>Peso: 56 - 9,05 kg / 19,96 lb (con tubos)</li>
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

      var valorTotal = cantidad * valorBruto;


      document.getElementById('valorTotal').value = valorTotal

    }
    window.onload = function(){
      document.getElementById('cantidad').addEventListener('input',multiplicar);
      document.getElementById('valorBruto').addEventListener('input',multiplicar);
    }

    function guardarfactuta(){
      var cantidad = parseFloat(document.getElementById('cantidad').value);
      var valorBruto = parseFloat(document.getElementById('valorBruto').value);
      var valorTotal = parseFloat(document.getElementById('valorTotal').value);
      var nombreBicicleta = document.getElementById('bicicleta').textContent.trim();

localStorage.setItem('cantidad',cantidad);
localStorage.setItem('valorBruto',valorBruto);
localStorage.setItem('valorTotal',valorTotal);
localStorage.setItem('nombreBicicleta',nombreBicicleta);

    }


    </script>




    </body>
    </html>