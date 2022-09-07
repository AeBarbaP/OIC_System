<?php
session_start();

if (isset($_SESSION['usr'])) {
    if($_SESSION['perfil']==1){
        // header('Location: javascript: history.go(-1)');
    }
    elseif($_SESSION['perfil']==2){
        // header('Location: javascript: history.go(-1)');
    }
    elseif($_SESSION['perfil']==3){
        // header('Location: javascript: history.go(-1)');
    }
    else{
        header('Location:prcd/sort.php');
    }
    // Si esta identificado, en otras palabras existe la variable, le saludamos
    // echo 'Hola ' . $_SESSION['usr'];
} else {
    // En caso contrario redirigimos el visitante a otra página

    echo 'Usuario no válido';
    // header('Location: ../../autentificacion/');
    header('Location: prcd/sort.php');
    die();
}

include('prcd/conn.php');

// variables de sesión

    $usuario = $_SESSION['usr'];
    $id = $_SESSION['id'];
    $perfil = $_SESSION['perfil'];
    $nombre = $_SESSION['nombre'];

?>

<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>Inicio | Control Interno</title>

    <link rel="icon" type="image/png" href="img/inclusion.ico"/>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">
    <script src="https://kit.fontawesome.com/4d63b5ef28.js" crossorigin="anonymous"></script>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    <!-- <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow"> -->
    <nav class="navbar navbar-light sticky-top flex-md-nowrap p-0 text-white" style="background-color: #917799;">
        <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3 text-left text-light" href="#"><img src="img/inclusionlogo.png" width="auto" height="65rem" class="d-inline-block align-top" alt="" ></a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <h4>Sistema para la Evaluación de Control Interno Institucional</h4>
        <ul class="navbar-nav px-3">
          <li class="nav-item text-nowrap">
              <a class="btn btn-outline-light" href="prcd/sort.php" role="button"><i class="fas fa-sign-out-alt"></i> Salir</a>    </li>
        </ul>
    </nav>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="navbar-nav px-3 mt-3 text-center">
            <li class="align-middle">
              <!-- <img src="img/Logo Gobierno-Inclusión VColorPNG.png" width="35%" alt=""> -->
            </li>
        </ul>
        <p class="sidebar-heading d-flex justify-content-center text-center align-items-center px-3 mt-4 mb-1 text-muted" style="font-size: 1rem;">
          <span class=""><strong>Bienvenido<br><i class="fas fa-user"></i> 
            <?php
              echo ($nombre);
            ?></strong>
          </span>
        </p>
        <hr>
        
        <?php
/*         if($perfil == 1){
          echo '<ul class="nav flex-column">';
        }

        else{
          echo '<ul class="nav flex-column" hidden>';
        }
         */
        ?>

          <li class="nav-item">
            <a class="nav-link active" href="#">
              <i class="fas fa-laptop-house"></i> 
              Inicio <span class="sr-only">(current)</span>
            </a>
          </li>


          <hr style="color: dimgrey;">
        
        <?php
/*         if($perfil == 1){
          echo '<ul class="nav flex-column">';
        }

        else{
          echo '<ul class="nav flex-column" hidden>';
        }
         */
        ?>
          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Años</span>
            <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
              <span data-feather="plus-circle"></span>
            </a>
          </h6>

          <li class="nav-item">
            <a class="nav-link" href="trimestre1.php">
              <span data-feather="layers"></span>
              2022
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="trimestre2.php">
              <span data-feather="layers"></span>
              2023
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="trimestre3.php">
              <span data-feather="layers"></span>
              2024
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="trimestre4.php">
              <span data-feather="layers"></span>
              2025
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="trimestre4.php">
              <span data-feather="layers"></span>
              2026
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="trimestre4.php">
              <span data-feather="layers"></span>
              2026
            </a>
          </li>
        </ul>

        <?php
/*         if($perfil == 1){
          echo '<ul class="nav flex-column">';
        }

        else{
          echo '<ul class="nav flex-column" hidden>';
        }
         */
        ?>

          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>AÑO 2022</span>
            <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
              <span data-feather="plus-circle"></span>
            </a>
          </h6>

          <li class="nav-item">
            <a class="nav-link" href="trimestre1.php">
              <span data-feather="layers"></span>
              Primer trimestre
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="trimestre2.php">
              <span data-feather="layers"></span>
              Segundo trimestre
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="trimestre3.php">
              <span data-feather="layers"></span>
              Tercer trimestre
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="trimestre4.php">
              <span data-feather="layers"></span>
              Cuarto trimestre
            </a>
          </li>
        </ul>

        <?php
/*         if($perfil == 2){
          echo '<ul class="nav flex-column">';
        }

        else{
          echo '<ul class="nav flex-column" hidden>';
        } */
        
        ?>
        <!-- <ul class="nav flex-column mb-2"> -->
        
        
          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Departamentos responsables</span>
            <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
              <span data-feather="plus-circle"></span>
            </a>
          </h6>
          <?php 
          $tabla="SELECT * FROM area";
                      $resultadotabla = $conn->query($tabla);
                      while($row = $resultadotabla->fetch_assoc()){
                          
                        echo '<li class="nav-item">';
                        echo ('<a class="nav-link" href="area.php?area='.$row['resp'].'">
                          <span data-feather="file-text"></span>
                            '.$row['area'].'
                            
                            </a>');
                        echo '</li>';                      
                      }

                      ?>
          </ul>
        

       
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          
        <?php
/*         if($perfil == 2){
          echo '<span>Plantillas</span>';
        }

        else{
          echo '<span></span>';
        } */
        
        ?>
          <!-- <span>Plantillas</span> -->
          
          <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>

        <?php
/*         if($perfil == 2){
          echo '<ul class="nav flex-column">';
        }

        else{
          echo '<ul class="nav flex-column" hidden>';
        } */
        
        ?>
        <!-- <ul class="nav flex-column mb-2"> -->
          <li class="nav-item">
            <a class="nav-link" href="modificar.php">
              <span data-feather="file-text"></span>
              Modificar
            </a>
          </li>
          
        </ul>
       

      </div>
      
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      
   
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-light rounded shadow-sm w-100">
          <img class="mr-3" src="img/Logo Gobierno-Inclusión VColorPNG.png" alt="" width="auto" height="50">
          <div class="lh-100">
            <h6 class="mb-0 text-muted lh-100">Instituto para la Atención e Inclusión de las Personas con Discapacidad</h6>
            <small class="text-muted">Control Interno Institucional</small>
          </div>
        </div>
        <div class="btn-toolbar mb-2 mb-md-0">
          <!-- <div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Reporte PDF</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Reporte EXCEL</button>
          </div> -->
         
        </div>
      </div>

      <h4>Selecciona alguna de las opciones</h4>

      <hr style="color: dimgrey;">
      <h2></h2>

      <?php
        if($perfil == 1){
          echo '<div class="container">';
        }

        else{
          echo '<div class="container">'; /* agregar hidden para versión final */
        }
        
        ?>
      <!-- <div class="container"> -->
  
        <div class="row row-cols-1 row-cols-md-2">
          <div class="col mb-4">
            <div class="card text-white mb-6" style="max-width: 36rem; height: 20rem; background-color:#A1A1A1">
              <div class="card-header"><strong>Enero-Marzo 2022</strong></div>
              <div class="card-body"><br><br>
                <h1 class="card-title mb-4">Primer trimestre</h1>
                <?php
                  $observaciones1 ="SELECT * FROM actividad WHERE responsable = '$id'";
                  $resultado_observaciones1 = $conn->query($observaciones1);
                      while($row_observaciones1 = $resultado_observaciones1->fetch_assoc()){
                        echo '<p class="card-text"><i class="bi bi-info-circle-fill"></i> '.$row_observaciones1['observaciones'].'</p>';
                      }
                ?>
                <p><a href="trimestre1.php" type="button text-right" class="btn btn-dark mt-3"><i class="fas fa-edit"></i> Editar...</a></p>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card text-white mb-6" style="max-width: 36rem; height: 20rem; background-color:#A1A1A1">
              <div class="card-header"><strong>Abril-Junio 2022</strong></div>
              <div class="card-body"><br><br>
                <h1 class="card-title mb-4">Segundo trimestre</h1>
                <?php
                  $observaciones2 ="SELECT * FROM actividad WHERE responsable = '$id'";
                  $resultado_observaciones2 = $conn->query($observaciones2);
                      while($row_observaciones2 = $resultado_observaciones2->fetch_assoc()){
                        echo '<p class="card-text"><i class="bi bi-info-circle-fill"></i> '.$row_observaciones2['observaciones2'].'</p>';
                      }
                ?>                
                <p><a href="trimestre2.php" type="button" class="btn btn-dark mt-3"><i class="fas fa-edit"></i> Editar...</a></p>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card text-white mb-6" style="max-width: 36rem; height: 20rem; background-color:#A1A1A1">
              <div class="card-header"><strong>Julio-Septiembre 2022</strong></div>
              <div class="card-body"><br><br>
                <h1 class="card-title mb-4">Tercer trimestre</h1>
                <?php
                  $observaciones3 ="SELECT * FROM actividad WHERE responsable = '$id'";
                  $resultado_observaciones3 = $conn->query($observaciones3);
                      while($row_observaciones3 = $resultado_observaciones3->fetch_assoc()){
                        echo '<p class="card-text"><i class="bi bi-info-circle-fill"></i> '.$row_observaciones3['observaciones3'].'</p>';
                      }
                ?>                
                <p><a href="trimestre3.php" type="button" class="btn btn-dark mt-3"><i class="fas fa-edit"></i> Editar...</a></p>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card text-white mb-6" style="max-width: 36rem; height: 20rem; background-color:#A1A1A1">
              <div class="card-header"><strong>Octubre-Diciembre 2022</strong></div>
              <div class="card-body"><br><br>
                <h1 class="card-title mb-4">Cuarto trimestre</h1>
                <?php
                  $observaciones4 ="SELECT * FROM actividad WHERE responsable = '$id'";
                  $resultado_observaciones4 = $conn->query($observaciones4);
                      while($row_observaciones4 = $resultado_observaciones4->fetch_assoc()){
                        echo '<p class="card-text"><i class="bi bi-info-circle-fill"></i> '.$row_observaciones4['observaciones4'].'</p>';
                      }
                ?>                 
                <p><a href="trimestre4.php" type="button" class="btn btn-dark mt-3"><i class="fas fa-edit"></i> Editar...</a></p>
              </div>
            </div>
          </div>

          

      </div> <!-- container -->
      
      
      <div class="container">

        

        <div class="col mb-12">
          
        <?php
          if($perfil == 1){
            echo '<div class="card text-white bg-warning mb-12 align-middle" style="max-width: 96rem;" hidden>';
          }

          elseif ($perfil == 2){
            echo '<div class="card text-white bg-warning mb-12 align-middle" style="max-width: 96rem;">';
          }
          
          ?>
          
          <!-- <div class="card text-white bg-warning mb-12 align-middle" style="max-width: 96rem;"> -->
            <div class="card-header">Opción:</div>
            <div class="card-body">
              <h1 class="card-title">Modificar:</h1>
              <p class="card-text">
                <ul>
                  <li>Actividad</li>
                  <li>Responsables</li>
                  <li>Medio de verificación</li>
                </ul>
              </p>
              <a href="modificar.php" type="button" class="btn btn-primary btn-lg btn-block"><i class="fas fa-edit"></i> Modificar</a>
            </div>
          </div>
        </div>
      </div>

      </div> 


    </main>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="css/bootstrap.bundle.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="css/dashboard.js"></script></body>
</html>
