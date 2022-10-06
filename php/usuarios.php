<?php 
//conexion a la base de datos y sesiones
include("sesiones.php");
include("conexion.php"); 
?>
<?php include("componentes/header.php") ?>
<nav>
      <!-- Menu responsive           -->
    <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fa-solid fa-bars menu"></i>
        </label>

        <!-- imagen del logo -->
        <img class="img-logo-catalogo" src="../img/utd_logo.png" alt="">
            
        <!-- Secciones del menu -->
        <ul>
        <li><a href="solicitudes.php" id="solicitud">Solicitudes</a></li>
        <li><a href="administrar_equipo.php" id="equipo">Equipo</a></li>
        <li><a href="administrar_usuarios.php" id="usuarios">Usuarios<script>window.onload = function() {
        document.getElementById("usuarios").style.color= '#EF9001';
        document.getElementById("nuevo_usuario").style.background= 'rgb(191, 120, 14)';
        document.getElementById("nuevo_usuario").style.color= '#fff';
        }</script></a></li>
        </ul>

        <!-- Boton para cerrar sesion -->
        <div><a href="login.php"><i class="fa-solid fa-arrow-right-from-bracket" title="Cerrar sesión"></i></a></div>
</nav>
<div class="contenedor-principal">
<div class="contenido">

<!-- Boton para administrar y nuevo -->
<ul class="list-new">
    <li class="li-contenido"><a href="administrar_usuarios.php">ADMINISTRAR</a></li>
    <li class="li-contenido"><a href="usuarios.php" id="nuevo_usuario">NUEVO</a></li>
</ul>

<div class="contenedorp">
    <div class="contactop">


     
     <h2>NUEVO USUARIO</h2>

     <!-- Formulario -->
     <form action="insert.php" method="POST" class="formulariop">




    <p>
    <label>RFC</label>
     <input type="text" name="rfc"required autofocus class="bloque">
    </p>
    <p>
    <label>Nombre</label>
    <input type="text" name="nombre" required class="bloque">
    </p> 
    <p>
    <label>Apellidos</label>
    <input type="text" name="apellidos"required autofocus class="bloque">
    </p>
    <p>
    <label>Correo</label>
    <input type="text" name="correo" required class="bloque">
    </p> 
    
    <p>
    <label>Telefono</label>
    <input type="text" name="telefono" required autofocus class="bloque">
    </p>

    <p>
    <select name="rol">
                        <option value="admin">Admin</option>
                        <option value="estandar">Estandar</option>
    </select>
    </p>
    <p>
    <label>Contraseña</label>
    <input type="password" name="password"required autofocus class="bloque">
    <?php echo $campo?>
    </p>

    <!-- Boton enviar -->
    <p class="full">
    <input type="submit" name="usuario" class="boton-enviar" value="ENVIAR">
    </p>
    <!-- Boton borrar -->
    <p class="full">
    <input type="reset" class="boton-enviar" value="BORRAR">
    </p>
    </form>

        </div>
        </div>
        </div>
</div>
<?php include("componentes/footer.php") ?>

