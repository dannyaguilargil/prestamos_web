<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/prestamos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Registros</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="prestamos.php" target="_blank">Prestamos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="rutas.php">Rutas</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="estadisticas.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 Estadistica
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="estadisticas.php">Proximo..</a></li>
             
                </ul>
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
    <div class="container encabezados">
        <form action="../../Servidor/registrar_persona.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre">
        <label for="cedula">Cedula:</label>
        <input type="number" name="cedula" id="cedula"> 
        <label for="direccion">Direccion:</label>
        <input type="text" name="direccion" id="direccion"> 
        <label for="telefono">Telefono:</label>
        <input type="text" name="telefono" id="telefono"> 
        <input class=" encabezados btn-success" type="submit" value="Registrar"> <br> <br>
        </form>
    </div>
    </article>

    <aside class="container">
      
    <div class="inicio">
            <h1 class="titulor">Registros de personas</h1>
            <table class="table">
                <!-- AGREGAR NOMBRE COLOR Y TALLA-->
                <tr class="tre">
                  <th>Nombre</th>              
                  <th>Cedula</th>     
                  <th>Direccion</th>    
                  <th>Telefono</th>          
                </tr>


                <?php
            include '../../Servidor/conexion.php';
            $consulta="SELECT * from personas";
            $resultado=mysqli_query($mysqli,$consulta);
                    if($resultado){ while($row = $resultado->fetch_array()){
                        $nombre = $row['nombre'];
                        $cedula = $row['cedula'];
                        $direccion = $row['direccion'];
                        $telefono = $row['telefono'];
                        //$ima
                
                        ?>
                    <tr>
                    <td><center><?php echo $nombre; ?></center></td>
                    <td><center><?php echo "<b>$cedula</b>"; ?></center></td>
                    <td><center><?php echo $direccion; ?></center></td>
                    <td><center><?php echo $telefono; ?></center></td>
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