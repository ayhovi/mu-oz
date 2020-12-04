<?php
  $alert = '';
  if(!empty($_POST))
  {
    if(empty($_POST['usuario']) || empty($_POST['contraseña']))
    {
      $alert = 'Ingrese su usuario y su calve';
    }else{

      require_once "conexion.php";

      $user=$_POST['usuario'];
      $pass=$_POST['contraseña'];

      $query = mysqli_query($conection,"SELECT * FROM usuario WHERE nombre_usuario= '$user' AND clave_usuario = '$pass'");
      mysqli_close($conection);
      $result = mysqli_num_rows($query);

      if($result > 0)
      {
        $data = mysqli_fetch_array($query);
        session_start();
        $_SESSION['active'] = true;
        $_SESSION['idUser'] = $data['cod_usuario'];
        $_SESSION['nombre'] = $data['nombre_usuario'];
        $_SESSION['rol']    = $data['roll_usuario'];
        header('location: tabla.php');
      }
      else{
        $alert ='error';
      }
    }
  }
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <link rel="stylesheet" href="style.css" >
  
  <title>Formulario</title>
</head>
<body background="">
  <section class="form-register">
  	<form  method="post">
	  	<center><h4 >Formulario </h4></center>

      <center>
      <select id="opciones">
                <option value="" disabled selected>--Seleccione--</option>
                <option value="">Administrador</option>
                <option value="">Logistica</option>
                <option value="">Postor</option>

            </select>
            <br>
        </center>
	    <label for="fila" class="form-label">Usuario:</label>
	    <input class="controls" type="text" name="usuario" id="nombres" placeholder="Ingrese Usuario">
      <label for="fila" class="form-label"> Contraseña:</label>
      <input class="controls" type="text" name="contraseña" id="nombres" placeholder="Ingrese contraseña">
	    
	    <div class="alert"><?php echo isset($alert) ? $alert : ''; ?></div>
	    
	    <input class="botons" type="submit" value="Iniciar">
    </form>
  </section>
</body>
</html>
<!--form action="Proceso.php" method="get">
<p>Nombre: <input type="text" name="nombre"></p>
<p>Email: <input type="text" name="email"></p>
    <input type="submit" value="Enviar">
</form-->
