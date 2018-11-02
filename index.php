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
                  <h2 class="title">TORNEO DE INTEGRACION JUDICIAL</h2>
                  <div class="panel">
                    <table class="table table-bordered table-striped table-hover">
                    <thead>
                      <tr>
                        <th>UBIC.</th>
                        <th>EQUIPOS</th>
                        <th>PTS</th>
                        <th>PJ</th>
                        <th>DG</th>
                      </tr>
                    </thead>
                    <?php foreach(getPuntuaciones(10) as $fila ){   ?>
                    <tbody>
                       <tr>
                        <td>1</td>
                        <td><?php echo $fila['equipo'];?></td>
                        <td><?php echo $fila['tp'];?></td>
                        <td><?php echo $fila['pj'];?></td>
                        <td><?php echo $fila['dg'];?></td>
                      </tr>
                      </tbody>
                      <?php }  ?>
                  </table>
                  </div>
                  <?php include 'includes/footer.php'; ?>
              </div>
          </section>
          <section class="section-info">
            <div class="container">

            </div>
          </section>
      </main>

      <?php include 'includes/script.php'; ?>

  </body>

</html>
