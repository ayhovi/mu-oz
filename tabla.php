<?php

?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ventan 2 </title>
  </head>
  <body>
    <div class="">
       <table border="5">
         <thead>
           <tr>
             <th>CODREQ</th>
             <th>DESREQ</th>
             <th>TIPREQ</th>
             <th>VREFREQ</th>
             <th>NCCPREQ</th>
             <th>NCONVREQ</th>
             <th>PLAZOREQ</th>
             <th>FCONREQ</th>
             <th>FICREQ</th>
             <th>FFCREQ</th>
             <th>ACCION</th>
           </tr>
         </thead>
         <tbody>
    <?php
      include 'conexion.php';
      $resultado = mysqli_query($conection, "select * from requerimiento ");
      
              while ($filas=mysqli_fetch_assoc($resultado)) 
              {
            ?>
            <tr>
              <td><?php echo $filas['CODREQ']; ?></td>
              <td><?php echo $filas['DESREQ']; ?></td>
              <td><?php echo $filas['TIPREQ'];?></td>
              <td><?php echo $filas['VREFREQ'];?></td>
              <td><?php echo $filas['NCCPREQ'];?></td>
              <td><?php echo $filas['NCONVREQ'];?></td>
              <td><?php echo $filas['PLAZOREQ']; ?></td>
              <td><?php echo $filas['FCONREQ']; ?></td>
              <td><?php echo $filas['FICREQ']; ?></td>
              <td><?php echo $filas['FFCREQ']; ?></td>
              <td>
                <a href="">Editar</a>
                <a href="">Eliminar</a>
              </td>
            </tr>
          <?php } ?>
         </tbody>
       </table>
     </div>
  </body>
</html>
