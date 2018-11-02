<?php
include('funciones/funciones.php');
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <title>Torneo - Detallados</title>
    <meta name="description" content="">
    <?php include 'includes/head.php'; ?>
  </head>

  <body>
      <?php include 'includes/header.php'; ?>

      <main>
          <section class="section-info">
              <div class="container">
                  <h3 class="title">Tabla de Puntuaciones</h3>
                  <div class="panel">
                    <table class="table table-bordered table-striped table-hover">
                    <thead>
                      <tr>
                        <th>UBIC.</th>
                        <th>EQUIPOS</th>
                        <th>PJ</th>
                        <th>PG</th>
                        <th>PE</th>
                        <th>PP</th>
                        <th>GF</th>
                        <th>GC</th>
                        <th>DG</th>
                        <th>TP</th>
                      </tr>
                    </thead>
                    <?php foreach(getPuntuaciones(10) as $fila ){   ?>
                    <tbody>
                       <tr>
                        <td>1</td>
                        <td><?php echo $fila['equipo'];?></td>
                        <td><?php echo $fila['pj'];?></td>
                        <td><?php echo $fila['pg'];?></td>
                        <td><?php echo $fila['pe'];?></td>
                        <td><?php echo $fila['pp'];?></td>
                        <td><?php echo $fila['gf'];?></td>
                        <td><?php echo $fila['gc'];?></td>
                        <td><?php echo $fila['dg'];?></td>
                        <td><?php echo $fila['tp'];?></td>
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
