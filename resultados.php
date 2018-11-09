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
            <?php foreach(getResultados(1) as $fila ){   ?>
            <h2 class="title">Resultado de la Fecha <?php echo $fila['fecha_add'];?></h2>
            <?php } ?>
            <div class="row">
              <?php foreach(getResultados(5) as $fila ){   ?>
              <div class="col-sm-4">
                <div class="box-clasi">
                  <h5><?php echo $fila['equipo1'];?>   | <?php echo $fila['resultado1'];?> - <?php echo $fila['resultado2'];?> |   <?php echo $fila['equipo2'];?></h5>
                </div>
              </div>
              <?php } ?>
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
