<?php

  require_once("../assets/functions/guard.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/css/style.css">
  <style>
    .smaller-image {
      max-width: 100%;
      height: auto;
    }

    .bg-transparent {
      background-color: transparent !important;
    }

    .center-card {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .custom-card {
      border: none;
      border-radius: 1rem;
      background-color: rgba(255, 255, 255, 0.5);

      box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.5);
      position: relative;

    }

    .corner-image {
      position: absolute;
      bottom: 0;
      right: 0;
      max-width: 100px;
      /* Ajusta el tamaño de la imagen según tus preferencias */
    }
  </style>
</head>

<body class="bg-pokemon ">
  <section class="center-card" style="background-color: rgba(0, 0, 0, 0.6)">

    <div class="container">

      <div class="row justify-content-center">

        <div class="col-md-6 col-lg-7">

          <div class="card custom-card">

            <div class="card-body p-3 p-lg-4 text-black ">
              <form action="../assets/functions/login.php" method="POST">
                <div class="d-flex align-items-center mb-2 pb-1 justify-content-center">
                  <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                  <span class="h2 fw-bold mb-0 ">
                    <img src="../assets/img/pokebolaLogin.png" width="40" class="mb-2">
                    POKEDEX</span>
                </div>
                <h5 class="fw-normal mb-2 pb-2" style="letter-spacing: 1px;">Inicia sesión</h5>

                <div class="form-outline mb-3">
                  <input type="email" id="form2Example17" name="email" class="form-control form-control-lg" />
                  <label class="form-label" for="form2Example17">Email</label>
                </div>
                <div class="form-outline mb-3">
                  <input type="password" id="form2Example27" name="password" class="form-control form-control-lg" />
                  <label class="form-label" for="form2Example27">Contraseña</label>
                </div>
                <div class="pt-1 mb-2 d-flex justify-content-center">
                  <button class="btn btn-lg btn-block btn-danger " type="submit">Ingresar</button>
                </div>
                <p class="mb-3 pb-lg-1" style="color: black;">¿No tienes cuenta aún? <a href="registro.php"
                    style="color: red;">Regístrate aquí</a></p>
              </form>
              <img src="../assets/img/charmander.gif" alt="" class="corner-image">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>