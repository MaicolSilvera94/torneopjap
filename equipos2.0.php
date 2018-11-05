<?php
include('funciones/funciones.php');
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <title>Torneo - PJAP</title>
    <meta name="description" content="">
    <?php include 'includes/head.php'; ?>
  </head>

  <body>
      <?php include 'includes/header.php'; ?>

      <main>
        <section class="servicios p-section">
          <div class="container">
            <div class="row">
              <div class="row">
                <div class="col-sm-12">
                  <h3 class="title">Lista de Buena Fe</h3>
                </div>
              </div>
                <div class="col-sm-3">
                <div class="box-servicios">
                  <a href="#">
                    <img src="images/equipos/no-avatar.png" width="50px">
                  </a>
                  <h4><a href="informatica.php">Informatica</a></h4>

                </div>
              </div>
              <div class="col-sm-3">
              <div class="box-servicios">
                <a href="#">
                  <img src="images/equipos/no-avatar.png" width="50px">
                </a>
                <h4><a href="seguridad.php">Seguridad</a></h4>
              </div>
            </div>
            </div>
            <?php include 'includes/footer.php'; ?>
          </div>
        </section>
      </main>

      <?php include 'includes/script.php'; ?>

  </body>

</html>
