<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estadisticas</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/prestamos2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="estadistica.php">Estadistica</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="registros.php">Registros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="rutas.php">Rutas</a>
              </li>
          

  <!-- INICIO DEL MODAL-->


              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>


      <br> <br> <br>



<div class="container">
      <p>
  <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Contabilidad
  </a>

</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">




  <?php
            $saldoganado = '';

            include '../../Servidor/conexion.php';
            $consulta="SELECT sum(saldoganado) AS sum from contabilidad";
            $resultado=mysqli_query($mysqli,$consulta);
                    if($resultado){ while($row = $resultado->fetch_array()){
                        $sum = $row['sum'];

    

            $consulta2="SELECT count(monto) AS count from rutas";
            $resultado2=mysqli_query($mysqli,$consulta2);
                    if($resultado2){ while($row = $resultado2->fetch_array()){
                        $count = $row['count'];


            $consulta3="SELECT sum(monto) AS count2 from rutas ";
            $resultado3=mysqli_query($mysqli,$consulta3);
                    if($resultado3){ while($row = $resultado3->fetch_array()){
                    $count2 = $row['count2'];






                      ?>



    <p><?php echo "Saldo ganado total: ", $sum ?></p>  
    <p><?php echo "Rutas realizadas: ", $count ?></p> 
    <p><?php echo "Gastos de las rutas: ", $count2 ?></p>  
                    <?php
                    }
                  }
                }
              }
            }
          }
                  ?>
    </div>
</div>
</div>




<!--AQUI VAN TODA LAS CONSULTAS -->


</div>
</div>
</div>
<!-- -->




 
     

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
                 
</body>
</html>