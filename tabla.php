<?php include 'header.php' ?>
<?php include 'navbar.php' ?>

<div class="px-4 py-5 my-5 text-center">
           
           <h1 class="display-5 fw-bold">Tabla de Registros</h1>
           <div class="col-lg-6 mx-auto">
   
               <table class="table table-dark table-striped mt-5 mb-3">
                   <thead>
                       <tr>
                       <th scope="col">#</th>
                       <th scope="col">Nombre</th>
                       <th scope="col">Apellidos</th>
                       <th scope="col">Lorem</th>
                       </tr>
                   </thead>
                   <tbody>
   
                       <?php
   
                           require_once('./db/conexion.php');
   
                           $sql = "SELECT * FROM usuarios ORDER BY usuarios.nombre ASC;";
                           $result = $conn->query($sql);
   
                           if ( $result->num_rows > 0){
                               //Recorrer todos los resultados uno por uno
                               while($row = $result -> fetch_assoc()){
                                   echo '<tr>';
                                       echo '<th scope="row">'.$row["id"].'</th>';
                                       echo '<td>'.$row["nombre"].'</td>';
                                       echo '<td>'.$row["apellidos"].'</td>';
                                       echo '<td>'.$row["usuario"].'</td>';
                                   echo '</tr>';
                               }
                           }
   
                           $conn->close(); 
                       ?>
                   </tbody>
               </table>
   
               <button type="button" onclick="location.href='formulario.php'" class="btn btn-dark btn-lg">Registrar Usuario</button>
           </div>
       </div>

<?php include 'footer.php' ?>