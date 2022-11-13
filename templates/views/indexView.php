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
  <div class="bg-dark collapse" id="navbarHeader">
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
<br>
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
    <label for="email">Correo </label>
        <input type="email" class="form-control" id="email" placeholder="walter@gmail.com" required>
    </div>
 </div>
</form>
  </div>
</div>


<div class="card">
  <div class="card-header">Agregar Nuevo Concepto</div>
  <div class="card-body">
      <form action="">
        <div class="form-group row">
          <div class="col-3">
            <label for="concepto">Concepto</label>
            <input type="text" class="form-control" id="concepto" name="concepto" placeholder="Guitarra Electrica" required>
          </div>
          <div class="col-3">
            <label for="tipo">Tipo Producto</label>
            <select name="tipo" id="tipo" class="form-control">
              <option value="producto">Producto</option>
              <option value="servicio">Servicio</option>
            </select>
          </div>
          <div class="col-3">
            <label for="cantidad">Cantidad</label>
            <input type="number" class="form-control" id="cantidad" name="cantidad" min="1" max="999999" value="1"  required>
          </div>
          <div class="col-3">
            <label for="precio_unitario">Precio Unitario</label>
            <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">$</span>
            </div>
            <input type="text" class="form-control" id="precio_unitario" name="precio_unitario" placeholder="0.00" required>
          </div>
          </div>
        </div>
        <br>
        <button class="btn btn-success" type="submit">Agregar Concepto</button>
        <button class="btn btn-danger" type="reset">Cancelar</button>
      </form>
  </div>
  </div>
  </div>

<div class="col-lg-4 col-12">
  <div class="card">
    <div class="card-header">Resumen de Cotizacion</div>
    <div class="card-body">
      <div class="table-responsive">
          <table class="table table-hover table-striped table-bordered">
            <thead>
              <tr>
                <th>Concepto</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th class="text-right">Subtotal</th>
              </tr>
            </thead>
            <tbody>
            <tr>
                <td>Playera</td>
                <td>1</td>
                <td>4000</td>
                <td class="text-right">4000</td>
              </tr>
              <tr>
                <td>Short</td>
                <td>2</td>
                <td>20000</td>
                <td class="text-right">40000</td>
              </tr>
            </tbody>
            <tr>
              <td class="text-right" colspan="3">Subtotal</td>
              <td class="text-right">44000</td>
            </tr>
            <tr>
              <td class="text-right" colspan="3">Impuestos</td>
              <td class="text-right">4400</td>
            </tr>
            <tr>
              <td class="text-right" colspan="3">Envio</td>
              <td class="text-right">3000</td>
            </tr>
            <tr>
              <td class="text-right" colspan="4"><b>Total</b><h3 class="text-success"><b>51300</b></h3></td>
            
            </tr>
          </table>
      </div>

    </div>
    <div class="card-footer">
        <button class="btn btn-primary">Descargar PDF</button>
        <button class="btn btn-success">Enviar por correo</button>
    </div>
  </div>
</div>
</div>
</div>
<br>

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