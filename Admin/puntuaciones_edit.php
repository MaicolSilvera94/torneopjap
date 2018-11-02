<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Puntuaciones | Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="dist/css/skins/skin-purple.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        <script>
         function subir_imagen(input, carpeta)
        {
            self.name = 'opener';
            var name = null;
            remote = open('gestor/subir_imagen.php?name='+name+'&input='+input+'&carpeta='+carpeta ,'remote', 'align=center,width=600,height=300,resizable=yes,status=yes');
            remote.focus();
        }
        </script>
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-purple fixed">
<div class="wrapper">

  <!-- HEADER -->

  <?php include 'includes/header.php'; ?>
  <?php
        //Obtener el registro del usuario
        $total = 0;
        if(isset($_GET['id'])){

            if($_GET['id'] > 0){

                $sql = "SELECT * FROM puntuaciones WHERE id = " . $_GET['id'];
                $query = $connection->prepare($sql);
                $query->execute();
                $total = $query->rowCount();

            }

        }


        //Actualizar datos del usuario
       if(isset($_POST)){

            //if($_POST['actualizar'] == 'actualizar' && $_POST['nombre'] != '' && $_POST['id'] > 0){
            if($_POST['actualizar'] == 'actualizar' && $_POST['equipo'] != '' && $_POST['id'] > 0){

                   $sql = "UPDATE puntuaciones set equipo = :equipo, pj = :pj, pg = :pg, pe = :pe, pp = :pp, gf = :gf, gc = :gc, dg = :dg, tp = :tp, avatar = :avatar, activo = :activo, fecha_act=NOW() WHERE id = " . $_POST['id'];
                   $data =  array(
                        'equipo' => $_POST['equipo'],
                        'pj' => $_POST['pj'],
                        'pg' => $_POST['pg'],
                        'pe' => $_POST['pe'],
                        'pp' => $_POST['pp'],
                        'gf' => $_POST['gf'],
                        'gc' => $_POST['gc'],
                        'dg' => $_POST['dg'],
                        'tp' => $_POST['tp'],
                        'avatar' => $_POST['avatar'],
                        'activo' => $_POST['activo']
                   );

                   $query = $connection->prepare($sql);


                 try{

                    $query->execute($data);

                    } catch(Exception $e){


                 }

            }

       }

   ?>
 <?php include 'includes/mensajes.php';?>

  <!-- ASIDE - SIDEBAR  -->
  <?php include 'includes/aside.php'; ?>

  <!-- CONTENIDO -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Editar Puntuaciones
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-home"></i> Inicio</a></li>
        <li><a href="puntuaciones.php"> Puntuaciones</a></li>

      </ol>

    </section>
    <section class="content container-fluid">

<div class="panel">
        <div class="row">
          <div class="col-xs-12">

            <a href="puntuaciones.php" class="btn btn-warning btn-lg pull-right" href=""> <i class="fa fa-close"></i> Salir</a>
        </div>

        </div>


      </div>

      <div class="panel">
        <div class="row">
          <?php if($total > 0) {
                 $puntuaciones = $query->fetchAll()[0];
                // var_dump($usuario);
              ?>
            <form action="puntuaciones_edit.php" name="form" method="POST">
              <div class="form-group col-md-2">
                  <label>Equipos</label>
                  <input type="text" name="equipo" value="<?php echo $puntuaciones['equipo']; ?>" required class="form-control">
              </div>
              <div class="form-group col-md-2">
                  <label>PJ</label>
                  <input type="text" name="pj" value="<?php echo $puntuaciones['pj']; ?>" required class="form-control" >
              </div>
              <div class="form-group col-md-2">
                  <label>PG</label>
                  <input type="text" name="pg" value="<?php echo $puntuaciones['pg']; ?>" required class="form-control" >
              </div>
              <div class="form-group col-md-2">
                  <label>PE</label>
                  <input type="text" name="pe" value="<?php echo $puntuaciones['pe']; ?>" required class="form-control" >
              </div>
              <div class="form-group col-md-2">
                  <label>PP</label>
                  <input type="text" name="pp" value="<?php echo $puntuaciones['pp']; ?>" required class="form-control" >
              </div>
              <div class="form-group col-md-2">
                  <label>GF</label>
                  <input type="text" name="gf" value="<?php echo $puntuaciones['gf']; ?>" required class="form-control" >
              </div>
              <div class="form-group col-md-2">
                  <label>GC</label>
                  <input type="text" name="gc" value="<?php echo $puntuaciones['gc']; ?>" required class="form-control" >
              </div>
              <div class="form-group col-md-2">
                  <label>DG</label>
                  <input type="text" name="dg" value="<?php echo $puntuaciones['dg']; ?>" required class="form-control" >
              </div>
              <div class="form-group col-md-2">
                  <label>TP</label>
                  <input type="text" name="tp" value="<?php echo $puntuaciones['tp']; ?>" required class="form-control" >
              </div>
              <div class="form-group col-md-2">
                 <label>Visible</label>
                 <select type="text" name="activo" class="form-control" required>
                     <option value="1" <?php if($puntuaciones['activo'] == 1){ echo 'selected'; } ?>  >Mostrar</option>
                     <option value="0" <?php if($puntuaciones['activo'] == 0){ echo 'selected'; } ?> >No Mostrar</option>
                 </select>
             </div>
             <div class="form-group col-md-2">
                 <label>Imagen</label>
                 <input type="text" name="avatar" value="<?php echo $puntuaciones['avatar']; ?>"  class="form-control" id="imagen"  onclick="subir_imagen('imagen', 'puntuaciones')">
             </div>
                <div class="col-md-2">
                        <br>
                        <input type="hidden" name="id"  value="<?php echo $puntuaciones['id']; ?>">
                       <button type="submit" name="actualizar" value="actualizar" class="btn btn-primary">Actualizar</button>
                </div>

            </form>
          <?php } else {  ?>

            <a href="puntuaciones.php" class="btn btn-warning">El servicio no exite, volver a la lista</a>

          <?php } ?>

        </div>
      </div>
    </section>
  </div>

  <!-- FOOTER -->
  <?php include 'includes/footer.php'; ?>

</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->
<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<script src="https://cdn.ckeditor.com/4.10.1/standard/ckeditor.js"></script>


</body>
</html>
