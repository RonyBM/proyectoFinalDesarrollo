<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Cotizador de compras por Amazon</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
  <!-- Navigation-->
  <nav class="navbar navbar-light bg-light static-top">
      <div class="container">
        <a class="navbar-brand" href="inicio.php">Cotizador Amazon</a>
        <a class="btn btn-primary" href="php/controladores/cerrar_sesion.php">cerrar Sesion</a>
      </div>
    </nav>
  <main>
    <section class="jumbotron text-center">
      <div class="container">
        <h1 class="jumbotron-heading">Cotizador de compras por Amazon</h1>

        <form action="/search" method="get" accept-charset="utf-8">
          <input type="text" value="" name="query" id="query
          placeholder="Ingresar el link" class="form-control">
        </form>
      </div>
    </section>   
    <section>
        <script src="./js/detalle.js"></script>
        
        <p class="text-center">El uso de este servicio para buscar para un producto en Amazon.</p>
    </section> 

  </main>
</body>
</html>