<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prestamos</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/prestamos2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Prestamos</a>
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
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Estadistica
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">

  <!-- INICIO DEL MODAL-->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1" data-bs-whatever="@getbootstrap">Actualizar prestamo</button>
<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal2" data-bs-whatever="@getbootstrap">Eliminar prestamo</button>




<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar prestamos</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body"> <!-- -->
        <form action="../../Servidor/actualizar_prestamo.php" method="POST" >
          
          <div class="mb-3">
          <label for="abono" class="col-form-label">Abono</label>
            <input type="number" name="abono" id="abono">
          </div>
          <div class="mb-3">
          <!-- CODIGO PHP PARA TRAER LA CEDULA -->
          <label for="cedulas" class="col-form-label">Cedula</label>
            <input type="number" name="cedulas" id="cedulas">
          </div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Actualizar</button>
      </div>
    </div>
    </form>
  </div>
</div>




<!--FIN DEL MODAL-->


<!-- INICIO DE MODAL DE ELIMINAR PRESTAMOS PERO ANTES DEBO HACER EL REGISTRO DE CONTABILIDAD-->

<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar prestamo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body"> <!-- -->
        <form action="../../Servidor/elimina_prestamo.php" method="POST" >
          
          <div class="mb-3">
          <!-- CODIGO PHP PARA TRAER LA CEDULA -->
          <label for="cedular" class="col-form-label">Cedula</label>
            <input type="number" name="cedular" id="cedular">
          </div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger">Eliminar</button>
      </div>
    </div>
    </form>
  </div>
</div>

<!--FIN DEL MODAL -->













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

    <article>


   


<form class="container form-control" action="../../Servidor/registrar_prestamo.php" method="POST">
  
<div class="container">
  <div class="row">
    <div class="col-3">
      
    
<!-- OPCION OPCIONAL PARA TOMAR LOS DATOS DE LA BASE DE DATOS
<select  name="nombre" id="nombre">
<option>Seleccione un nombre</option>             

                     
        <?php 
        /*
        include '../../Servidor/conexion.php';
        $consulta="SELECT * from personas";
        $resultado=mysqli_query($mysqli,$consulta);
        if($resultado){ while($row = $resultado->fetch_array()){
            $nombre = $row['nombre'];
            ?>              
            <option value="nombre"><?php echo $nombre; ?></option>
            
            <?php
                
            }
        }
        
        
     */  ?>
</select>
      -->



      <label for="cedula">Cedula:</label>
    <input type="number" name="cedula" id="cedula" value="INSERTE CEDULA">
    </div>


    <div class="col-4">
    <label for="fecha">Fecha:</label>
    <input type="date" name="fecha" id="fecha">
    </div>

    
    <div class="col-4">
    <label for="cuotaspactadas">Cuotas</label>
    <input type="number" name="cuotaspactadas" id="cuotaspactadas">
    </div>



  </div>




<div class="row">

    <div class="col-4">
    <label for="valorcredito">Valor credito</label>
    <input type="number" name="valorcredito" id="valorcredito">
    </div>

    <div class="col-4">
    <label for="valorprestado">Valor prestado</label>
    <input type="number" name="valorprestado" id="valorprestado">
    </div>

    
    <div class="col-4">
        
      <button class="btn-success" type="submit">Insertar</button>
  
   
    </div>

    

  </div>
</div>
</form>


<br> <br>











   
     
    </article>


        
        <aside class="container">
      
      <div class="inicio">

            <h1 class="titulor">Prestamos realizados</h1>
            <table class="table">
                <!-- AGREGAR NOMBRE COLOR Y TALLA-->
                <tr class="tre">
                  <th>Cedula</th>              
                  <th>Fecha</th>     
                  <th>Cuotas pactadas</th>    
                  <th>Cuota actual</th>
                  <th>Abono</th>  
                  <th>Saldo pendiente</th>
                  <th>Valor credito</th>   
                  <th>Valor prestado</th>    
                                  
                </tr>


                <?php
            include '../../Servidor/conexion.php';
            $consulta="SELECT * from prestamos";
            $resultado=mysqli_query($mysqli,$consulta);
                    if($resultado){ while($row = $resultado->fetch_array()){
                        $cedula = $row['cedula'];
                        $fecha = $row['fecha'];
                        $cuotaspactadas = $row['cuotaspactadas'];
                        $valorcredito = $row['valorcredito'];
                        $cuotaactual = $row['cuotaactual'];
                        $abono = $row['abono'];
                        $saldopendiente = $row['saldopendiente'];
                        $valorprestado = $row['valorprestado'];
                        //$ima
                
                        ?>
                    <tr>
                    <td><center><?php echo "<b>$cedula</b>"; ?></center></td>
                    <td><center><?php echo $fecha; ?></center></td>
                    <td><center><?php echo $cuotaspactadas; ?></center></td>
                    <td><center><?php echo $cuotaactual; ?></center></td>
                    <td><center><?php echo $abono; ?></center></td>
                    <td><center><?php echo "<b>$saldopendiente</b>"; ?></center></td>
                    <td><center><?php echo $valorcredito; ?></center></td>
                    <td><center><?php echo $valorprestado; ?></center></td>
                   
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