<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contratos</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>

  <!-- Font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
    integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="./images/yonda-logo.webp" alt="" style="max-width: 8rem">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
          aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?= base_url('home') ?>"><i class="fa-solid fa-magnifying-glass"></i>
                Buscar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="<?= base_url('registrar') ?>"><i class="fa-solid fa-file-circle-plus"></i> Registrar</a>
            </li>
          </ul>

          <ul class="navbar-nav">
            <li><a href="#" class="nav-link"><i class="fa-solid fa-key"></i> Contraseña</a></li>
            <li><a href="#" class="nav-link"><i class="fa-solid fa-person-running"></i> Cerrar sesión</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <main class="container my-3">
    <form action="" autocomplete="off">
      <div class="card">
        <div class="card-header">
          <strong>
            Complete los datos del contrato
          </strong>
        </div>
        <div class="card-body">
          <div class="row g-3">
            <div class="col-md-3 mb-3">
              <div class="form-floating">
                <select name="" id="" class="form-select rounded-0">
                  <option value="">DNI</option>
                  <option value="">Carnet de extranjería</option>
                </select>
                <label for="">Tipo documento</label>
              </div>
            </div>

            <div class="col-md-3 mb-3">
              <div class="form-floating">
                <input type="text" class="form-control rounded-0" maxlength="8">
                <label for="">Número documento</label>
              </div>
            </div>

            <div class="col-md-6 mb-3">
              <div class="form-floating">
                <input type="text" class="form-control rounded-0">
                <label for="">Datos personales</label>
              </div>
            </div>
          </div> <!-- ./row -->

          <div class="row g-3">
            <div class="col-md-3 mb-3">
              <div class="form-floating">
                <select name="" id="" class="form-select rounded-0">
                  <option value="">Seleccione</option>
                  <option value="">Suv</option>
                  <option value="">Hatback</option>
                  <option value="">Camioneta</option>
                </select>
                <label for="">Tipo de vehículo</label>
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <div class="form-floating">
                <select name="" id="" class="form-select rounded-0">
                  <option value="">Seleccione</option>
                  <option value="">Kia</option>
                  <option value="">Nissan</option>
                  <option value="">Javal</option>
                </select>
                <label for="">Marca</label>
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <div class="form-floating">
                <input type="text" class="form-control rounded-0">
                <label for="">Modelo</label>
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <div class="form-floating">
                <input type="text" class="form-control rounded-0">
                <label for="">Color</label>
              </div>
            </div>
          </div>

        </div> <!-- ./card-body -->
        <div class="card-footer text-end">
          <button class="btn btn-outline-secondary rounded-0">Cancelar</button>
          <button class="btn btn-primary rounded-0">Guardar</button>
        </div>
      </div>
    </form>
  </main>

</body>

</html>