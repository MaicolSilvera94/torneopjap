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
            <h2 class="title">Cuarto de Finales</h2>
            <div class="row">
              <div class="col-sm-3">
                <div class="box-clasi">
                  <h5>Equipo 1 VS Equipo 8</h5>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="box-clasi">
                  <h5>Equipo 2 VS Equipo 7</h5>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="box-clasi">
                  <h5>Equipo 3 VS Equipo 6</h5>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="box-clasi">
                  <h5>Equipo 4 VS Equipo 5</h5>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="section-info">
          <div class="container">
            <h2 class="title">Semi Final</h2>
            <div class="row">
              <div class="col-sm-6">
                <div class="box-clas2">
                  <h5>Equipo 1 VS Equipo 2</h5>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="box-clas2">
                  <h5>Equipo 3 VS Equipo 4</h5>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="section-info">
          <div class="container">
            <h2 class="title">Final</h2>
            <div class="row">
              <div class="col-sm-12">
                <div class="box-clas3">
                  <h5>Equipo 1 VS Equipo 2</h5>
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
