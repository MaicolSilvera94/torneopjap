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
                  <h2 class="title">Lista de Equipos</h2>
                  <div class="panel">
                    <table class="table table-bordered table-striped table-hover">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Logo</th>
                        <th>Equipos</th>
                      </tr>
                    </thead>
                    <tbody>
                       <tr>
                        <td>1</td>
                        <td><img src="images/equipos/no-avatar.png" width="50px"></td>
                        <td><a href="informatica.php"><i class="fa fa-link"></i> <span>Informatica</span></td>
                      </tr>
                    </tbody>
                    <tbody>
                       <tr>
                         <td>2</td>
                        <td><img src="images/equipos/no-avatar.png" width="50px"></td>
                        <td><a href="seguridad.php"><i class="fa fa-link"></i> <span>Seguridad</span></td>
                      </tr>
                    </tbody>
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
