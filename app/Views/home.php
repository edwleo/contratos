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
              <a class="nav-link active" aria-current="page" href="#"><i class="fa-solid fa-magnifying-glass"></i>
                Buscar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="<?= base_url('/registrar') ?>"><i class="fa-solid fa-file-circle-plus"></i> Registrar</a>
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

  <main class="container">
    <div class="row my-3">
      <div class="col-md-3">
        <label for="filtro" class="form-label">Filtro</label>
        <select name="filtro" id="filtro" class="form-select form-select-lg rounded-0">
          <option value="datospersonales">Datos personales</option>
          <option value="placa">Placa auto</option>
          <option value="serie">Serie vehículo</option>
          <option value="intervalo">Intervalo fecha</option>
        </select>
      </div>

      <!-- Filtro 1: Datos personales -->
      <div class="col-md-9" id="capa-datospersonales">
        <div class="col-md-12">
          <label for="datospersonales" class="form-label">Buscador de contratos:</label>
          <div class="input-group">
            <input type="text" id="datospersonales" class="form-control form-control-lg text-center rounded-0"
              placeholder="Escriba apellidos o nombre del cliente" autofocus>
            <button class="btn btn-outline-success">Buscar</button>
          </div>
        </div>
      </div>
      <!-- Fin Filtro 1 -->

      <!-- Filtro 2: Placa -->
      <div class="col-md-9 d-none" id="capa-placa">
        <div class="col-md-12">
          <label for="placa" class="form-label">Placa del vehículo:</label>
          <div class="input-group">
            <input type="text" id="placa" class="form-control form-control-lg text-center rounded-0"
              placeholder="Escriba el número de placa o parte de ella" autofocus>
            <button class="btn btn-outline-success">Buscar</button>
          </div>
        </div>
      </div>
      <!-- Fin Filtro 2 -->

      <!-- Filtro 3: Serie -->
      <div class="col-md-9 d-none" id="capa-serie">
        <div class="col-md-12">
          <label for="serie" class="form-label">Número de serie:</label>
          <div class="input-group">
            <input type="text" id="serie" class="form-control form-control-lg text-center rounded-0"
              placeholder="Escriba el número de serie o parte de el" autofocus>
            <button class="btn btn-outline-success">Buscar</button>
          </div>
        </div>
      </div>
      <!-- Fin Filtro 3 -->

      <!-- Filtro 4: Fechas -->
      <div class="col-md-9 d-none" id="capa-intervalo">
        <div class="row">
          <div class="col-md-5">
            <label for="fechainicio" class="form-label">Desde</label>
            <input type="date" class="form-control form-control-lg rounded-0" id="fechainicio">
          </div>
          <div class="col-md-5">
            <label for="fechafin" class="form-label">Hasta</label>
            <input type="date" class="form-control form-control-lg rounded-0" id="fechafin">
          </div>
          <div class="col-md-2">
            <label for="" class="form-label">Acción</label>
            <button class="btn btn-outline-success btn-lg rounded-0" type="button">Buscar</button>
          </div>
        </div>
      </div>
      <!-- Fin Filtro 4 -->

    </div>

    <div class="row mt-5">
      <h5>Resultados obtenidos:</h5>
    </div>

    <div class="row">
      <div class="col-md-12 mt-3">
        <div class="table-responsive">
          <table class="table table-striped table-sm" id="tabla-resultado">
            <thead>
              <tr>
                <th>#</th>
                <th>Cliente</th>
                <th>DNI</th>
                <th>Teléfono</th>
                <th>Vehículo</th>
                <th>Fecha</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              <tr id="fila-intro">
                <td colspan="7" class="text-center">Utilice las herramientas de filtro</td>
              </tr>

              <tr class="d-none" id="fila-prueba">
                <td>1</td>
                <td>Cusi Hualpa Juan Carlos</td>
                <td>45593583</td>
                <td>9264062028</td>
                <td>Moto Bajaj Torito 4T / Rojo / 2025</td>
                <td>05/03/2025</td>
                <td>
                  <a href="#" id="mostrar-cusi">Mostrar expediente</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- Vista previa -->
     <div class="my-5">
       <iframe id="visorpdf" class="d-none" src="" type="application/pdf" width="100%" style="min-height: 50rem"></iframe>
     </div>

  </main>

  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const c1 = document.getElementById('capa-datospersonales');
      const c2 = document.getElementById('capa-placa');
      const c3 = document.getElementById('capa-serie');
      const c4 = document.getElementById('capa-intervalo');
      const filtro = document.getElementById('filtro');

      async function adCapas(layer = ``) {
        c1.classList.add('d-none');
        c2.classList.add('d-none');
        c3.classList.add('d-none');
        c4.classList.add('d-none');

        document.getElementById(`capa-${layer}`).classList.remove('d-none');
      }

      filtro.addEventListener('change', (e) => {
        adCapas(e.target.value);
      })

      document.getElementById("mostrar-cusi").addEventListener("click", () => {
        document.getElementById("visorpdf").classList.remove("d-none")
        document.getElementById("visorpdf").setAttribute("src", "./uploads/cusi.pdf")
      })

      document.getElementById("datospersonales").addEventListener("keypress", (event) => {
        if (event.key === "Enter"){
          document.getElementById("fila-intro").classList.add("d-none")
          document.getElementById("fila-prueba").classList.remove("d-none")
        }
      })

    })
  </script>

</body>

</html>