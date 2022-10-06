<?php
   session_start();

   if (isset($_SESSION))
   {
       session_destroy();
   }

   $alertas = "";

   if ($_SERVER["REQUEST_METHOD"]=="POST")
   {
    $rfc=$_POST['rfc'];
    $pass=$_POST['password'];

    include_once('conexion.php');

    $query="SELECT * from usuario WHERE rfc='$rfc' AND password=hex(AES_ENCRYPT('$pass', 'passForEncrypt'))";

    $result = $conn->query($query);

      if ($result->num_rows>0)
      {
        if ($row=$result->fetch_assoc())
          {
              $usuario=$row['nombre'];
              $rol=$row['rol'];

              session_start();
              $_SESSION['rfc']=$rfc;
              $_SESSION['password']=$password;
              $_SESSION['nombre']=$usuario;
              $_SESSION['rol']=$rol;
    
            if($rol=="admin"){
                $alertas="admin";
            } 
            elseif($rol=="estandar"){
                $alertas="estandar";
            }
          }
      }
      else
      {
        $alertas="error_login";
      }
   }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/nuevo_login.css">
    <title>Iniciar Sesion</title>
</head>
<body>
   <div class="container-newLogin">
    <div class="main-newLogin">

    <div class="img-newLogin">
        <img src="../img/UTD_blanco.png" alt="Universidad Tecnologica de durango" loading="lazy">
        <h2>¡Bienvenido al sistema! <br>
        Administre: Documentos, horarios e inventario
        </h2>
    </div>
    <div class="formulario-newLogin">
        <h1>Sistema de Gestión Integral</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="new-login">

    <?php 
     if (isset($_POST['password'])){
        $pass = $_POST['password'];
     }

     $campos = array();

     if($pass == "") {
        array_push($campos, "El campo está vacio");
     }
     elseif(stros($pass < 3)){
        array_push($campo, "El campo debe tener al menos 4 caracteres");
     }

     
     
     
     ?>
    
    <p><input type="text" placeholder="Ingrese su Usuario" name="rfc"></p>
    <p><input type="password" placeholder="Contraseña" name="password"></p>
   
    <input type="checkbox" name="remember-me" class="checkbox-login">
    <label for="remember-me">Recuérdame</label>
    <br>

    <!-- Enlace para la recuperación de contraseñas -->
    <a href="recuperar_contraseña.php?mode=enter_email">¿Olvidó su contraseña?</a>
    <br>
    <input type="submit" value="ENTRAR" class="btn-login">
    </form>
    </div>
    </div>
   </div>
</body>
</html>
<?php include('alertas.php'); ?>
