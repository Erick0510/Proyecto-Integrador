<?php include("sesiones.php"); //mandar a llamar las sesiones  ?>
<?php include("conexion.php"); // llamar la conexion de la bd?> 
<?php include("componentes/header.php"); //estilos?>
<nav>
         <!-- Menu responsive -->
    <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fa-solid fa-bars menu"></i>
        </label>
        
        <!-- Imagen del Logo -->
        <img class="img-logo-catalogo" src="../img/utd_logo.png" alt="">
                    
        <!-- Secciones del menu del sistema -->
        <ul>
        <li><a href="solicitudes.php" id="solicitud">Solicitudes</a></li>
        <li><a href="administrar_equipo.php" id="equipo">Equipo</a></li>
        <li><a href="administrar_usuarios.php" id="usuarios">Usuarios<script>window.onload = function() {
        document.getElementById("usuarios").style.color= '#EF9001';
        document.getElementById("administrar_usuarios").style.background= 'rgb(191, 120, 14)';
        document.getElementById("administrar_usuarios").style.color= '#fff';
        }</script></a></li>
        </ul>

         <!-- boton para cerrar sesion -->
        <div><a href="login.php"><i class="fa-solid fa-arrow-right-from-bracket" title="Cerrar sesión"></i></a></div>
</nav>

<div class="contenedor-principal">
<div class="contenido">

<!-- botones de administrar o agregar un equipo -->
<ul class="list-new">
  <li class="li-contenido"><a href="administrar_usuarios.php" id="administrar_usuarios">ADMINISTRAR</a></li>
  <li class="li-contenido"><a href="usuarios.php">NUEVO</a></li>
</ul>

<h2>ADMINISTRAR USUARIOS</h2>

<!-- Buscador -->
<input type="text" name="busqueda_usuario" id="busqueda_usuario" placeholder="Buscar...">

<table class="width200" id="tabla_resultado_usuario">
   <!-- Aqui se despliega el contenido de la tabla -->
</table>

    </div>
</div>



<?php include("componentes/footer.php") ?>