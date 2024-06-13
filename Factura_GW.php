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
  <img src="IMG/bici 5.webp" class="card-img-top" alt="w-50 h-auto">
            <div class="card-body">
    <h5 class="card-title container d-flex justify-content-center" id="bicicleta">Bicicleta FAT Aluminio 26P GW 8VEL</h5>
    <p class="card-textcontainer d-flex justify-content-center">$2.171.600</p>
    <div class="input-group mb-1 border-primary">
      <span class="input-group-text border-primary bg-primary text-white">Cantidad</span>
      <input type="number" class="form-control" value="1" min="1" id="cantidad">
      <button class="btn btn-primary" type="button">+</button>
    </div>
  <div class="input-group mb-1 border-primary">
    <span class="input-group-text border-primary bg-primary text-white">Valor bruto</span>
    <input type="number" class="form-control border-primary" id="valorBruto" value="2171600" min="0" readonly>
  </div>
  
  <div class="input-group mb-2">
    <span class="input-group-text border-primary bg-primary text-white">Valor total</span>
    <input type="number" class="form-control border-primary" id="valorTotal" value="2171600" min="0" readonly>
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
              <p>Inicialmente pensada en los países con estaciones climáticas, tenemos la serie FAT, estás bicicletas crearon tendencia, desconociendo que su uso era exclusivo para el desierto ó la nieve, pero la diversión sobre ella también se encuentra en otro tipo de terrenos. Su desempeño en los terrenos de grama o húmedos, es excepcional logrando un avance más simple. La envergadura de sus llantas la hace llamativa y no te dejes engañar de su tamaño es más liviana de lo que imaginas.</p>
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
                <li>Llantas gordas 26*4.0</li>
                <li>Marco 26” aluminio hidroformado</li>
                <li>8 velocidades</li>
                <li>Rin 26”</li>
                <li>Triplato</li>
                <li>Marco 26” ALUMINIO HIDROFORMADO</li>
                <li>Tenedor: rígido en acero para disco</li>
                <li>Juego dirección: Neco</li>
                <li>Manubrio: Acero 660mm</li>
                <li>Espiga: Aluminio 31.8</li>
                <li>Caña: aluminio 30.9</li>
                <li>Mangos: Caucho 135 MM</li>
                <li>Triple plato 42-32-42 170 mm</li>
                <li>Freno: Disco Shimano Mecanico  BR-TX805</li>
                <li>Pacha: SHIMANO CS-HG200 12-32T 8VEL</li>
                <li>Tensor: SHIMANO RD-TX800 SGS</li>
                <li>Descarrilador : SHIMANO FD-M410E</li>
                <li>Rin: Aluminio 26*3.0</li>
                <li>Neumáticos:26X4.0 A/V</li>
                <li>Llantas: 26X4.0</li>
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

        // Multiplicacion•

        var valorTotal = cantidad * valorBruto;

        // mostrar resultado•

        document.getElementById('valorTotal').value = valorTotal;
     }

    // funcioon para mostrar en pantalla•

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