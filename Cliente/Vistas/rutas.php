<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rutas</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/rutas.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="rutas.html">Rutas</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="registros.php">Registros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="prestamos.php">Prestamos</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Estadisticas
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
              </nav>


              <br> 



                <form class="container form-control" action="../../Servidor/registrar_ruta.php" method="POST">
                    <fieldset><b>Rutas</b></fieldset>
                    <div class="container">




                      <div class="row">
                        <div class="col-3">
                        <label for="barrio">Barrio</label>
                        <input type="text" name="barrio" id="barrio" >
                        </div>
                    
                    
                        <div class="col-3">
                        <label for="cliente">Cliente:</label>
                        <input type="text" name="cliente" id="cliente">
                        </div>
                    
                        
                        <div class="col-3">
                        <label for="gastos">Gastos:</label>
                        <select name="gastos" id="gastos">
                        <option value="gasolina">Gasolina</option>
                        <option value="aceite">Aceite</option>
                        <option value="imprevisto">Imprevisto moto</option>
                        <option value="otro">Otro</option>
                        </select>
                        </div>
                      
                      </div>
                    <br>
                    
                    
                    <div class="row">

                    <div class="col-3">
                            <label for="monto">Monto:</label>
                            <input type="number" name="monto" id="monto">
                      </div>
                    

                      <div class="col-3">
                            <label for="fecha">Fecha:</label>
                            <input type="date" name="fecha" id="fecha">
                      </div>
                    
                        
    
                    
                        
                        <div class="col-4">
                          <button class="btn-success" type="submit">Insertar</button>
                        </div>
                    
                        
                      </div>
                    </div>
                    </form>
                     <br> 
                    <aside class="container">
      
                        <div class="inicio">
                  
                              <h1 class="titulor">Gastos de rutas</h1>
                              <table class="table">
                                  <!-- AGREGAR NOMBRE COLOR Y TALLA-->
                                  <tr class="tre">
                                    <th>Id</th>   
                                    <th>Barrio</th>              
                                    <th>Cliente</th>     
                                    <th>Gastos</th>    
                                    <th>Monto</th>
                                    <th>Fecha</th> 
                                                    
                                  </tr>
                  
                  
                                  <?php
                              include '../../Servidor/conexion.php';
                              $consulta="SELECT * from rutas";
                              $resultado=mysqli_query($mysqli,$consulta);
                                      if($resultado){ while($row = $resultado->fetch_array()){
                                          $id = $row['id'];
                                          $barrio = $row['barrio'];
                                          $cliente = $row['cliente'];
                                          $gastos = $row['gastos'];
                                          $monto = $row['monto'];
                                          $fecha = $row['fecha'];
                                       
                                  
                                          ?>
                                      <tr>
                                      <td><center><?php echo $id; ?></center></td>
                                      <td><center><?php echo $barrio; ?></center></td>
                                      <td><center><?php echo $cliente; ?></center></td>
                                      <td><center><?php echo $gastos; ?></center></td>
                                      <td><center><?php echo $monto; ?></center></td>
                                      <td><center><?php echo $fecha; ?></center></td>

                                      </tr>
                                      <?php 
                                      }
                                      
                                       } ?>
                                 
                              </table>
                  
                          </div>
                            
                     
                     </section>
                        
                      </aside>





 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    

</body>
</html>