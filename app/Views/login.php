<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>
</head>

<body>

  <style>
    .header-yonda {
      color: white;
      background: #ffbd08;
      background: linear-gradient(90deg, rgba(255, 189, 8, 1) 0%, rgba(237, 86, 83, 1) 100%);
    }
  </style>

  <div class="container">

    <div class="row align-items-center" style="min-height: 400px">
      <div class="col-md-6 mx-auto">
        <form action="" id="login" autocomplete="off">
          <div class="card">
            <div class="card-header header-yonda pb-0" >
              <h4 class="mb-0 mt-1">Inicio de sesión</h4>
              <p class="mt-0">Control de expedientes de créditos</p>
            </div>
            <div class="card-body">
              <div class="mb-3 form-floating">
                <input type="text" class="form-control rounded-0" id="usuario" required autofocus>
                <label for="usuario" class="form-label">Usuario</label>
              </div>
              <div class="form-floating">
                <input type="password" minlength="5" class="form-control rounded-0" id="claveacceso" required>
                <label for="claveacceso" class="form-label">Contraseña</label>
              </div>
            </div>
            <div class="card-footer">
              <div class="d-grid gap-2">
                <a href="#">Recuperar contraseña</a>
                <button class="btn btn-primary rounded-0" type="submit">Iniciar sesión</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>

  </div>

  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const formulario = document.querySelector("#login")
      const usuario = document.getElementById('usuario')
      const clave = document.getElementById('claveacceso')

      formulario.addEventListener("submit", (event) => {
        event.preventDefault()

        //Login demostrativo
        if (usuario.value == 'sistemas' && clave.value == 'yonda2025'){
          window.location.href = `<?= base_url('/home') ?>`
        }
      })
    })
  </script>

</body>

</html>