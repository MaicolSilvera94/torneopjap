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
        <section class="section-info">
          <div class="container">
            <h2 class="title">Resultado de la Fecha DD/MM/AAAA</h2>
            <div class="row">
              <div class="col-sm-4">
                <div class="box-clasi">
                  <h5>Equipo 1 | 2 - 2 | Equipo 2</h5>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="box-clasi">
                  <h5>Equipo 3 | 2 - 2 | Equipo 4</h5>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="box-clasi">
                  <h5>Equipo 5 | 2 - 2 | Equipo 6</h5>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="box-clasi">
                  <h5>Equipo 7 | 2 - 2 | Equipo 8</h5>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="box-clasi">
                  <h5>Equipo 9 | 0 - 0 | Libre</h5>
                </div>
              </div>
            </div>
          </div>
        </section>
          <section class="section-info">
            <div class="container">
              <?php include 'includes/footer.php'; ?>
            </div>
          </section>
      </main>

      <?php include 'includes/script.php'; ?>

  </body>

</html>
