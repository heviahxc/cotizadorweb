<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cotizador App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
  <header>
  <div class="bg-dark collapse show" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">Nosotros</h4>
          <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Contacto</h4>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white">Twitter</a></li>
            <li><a href="#" class="text-white">Facebook</a></li>
            <li><a href="#" class="text-white">Email</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center">
    
        <strong>Cotizador App</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="true" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-8 col-12">
      <div class="card mb-3">
        <div class="card-header">Información del cliente</div>
        <div class="card-body"
        <form action="">
          <div class="form-group row">
          <div class="col-4">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="nombre" placeholder="Walter White" required>
    </div>
    <div class="col-4">
    <label for="empresa">Empresa</label>
        <input type="text" class="form-control" id="empresa" placeholder="Coca-Cola" required>
    </div>
    <div class="col-4">
    <label for="email">Empresa</label>
        <input type="email" class="form-control" id="email" placeholder="walter@gmail.com" required>
    </div>
 </div>
</form>
  </div>
</div>



<footer class="bg-light text-muted py-5">
  <div class="container">
    <p class="float-end mb-1">
      <a href="#">Back to top</a>
    </p>
    <p class="mb-1"> &copy: Todos los derechos resevados Felipe Hevia!</p>
    <p class="mb-0">Cotizador App 2022</p>
  </div>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>