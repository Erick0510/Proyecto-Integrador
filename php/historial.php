<?php include("sesiones.php") //Mandar a llamar las sesiones ?>


<?php include("componentes/header.php") //mandar a llamar los estilos  ?>
<nav>
    <!-- menu responsive    -->  
    <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fa-solid fa-bars menu"></i>
        </label>

         <!-- Imagen del Logo -->
        <img class="img-logo-catalogo" src="../img/utd_logo.png" alt="">
        
        <!-- Secciones del menu del sistema -->
        <ul>
        <li><a href="solicitudes.php" id="solicitud">Solicitudes<script>window.onload = function() {
        document.getElementById("solicitud").style.color= '#EF9001';
        document.getElementById("historial").style.background= 'rgb(191, 120, 14)';
        document.getElementById("historial").style.color= '#fff';
        }</script></a></li>
        <li><a href="administrar_equipo.php" id="equipo">Equipo</a></li>
        <li><a href="administrar_usuarios.php" id="usuarios">Usuarios</a></li>
        </ul>

        <!-- boton para cerrar sesion -->
        <div><a href="login.php"><i class="fa-solid fa-arrow-right-from-bracket" title="Cerrar sesión"></i></a></div>
</nav>
<div class="contenedor-principal">
<div class="contenido">

<!-- botones de administrar o agregar un equipo -->
<ul class="list-new">
  <li class="li-contenido"><a href="solicitudes.php" id="solicitudes">ADMINISTRAR</a></li>
  <li class="li-contenido"><a href="historial.php" id="historial">HISTORIAL</a></li>
</ul>

<h2>HISTORIAL</h2>

<!-- Buscador -->
<input type="text" name="busqueda_historial" id="busqueda_historial" placeholder="Buscar...">

<!-- Boton para generar reportes -->
<div class="btn-reporte">
<a class="report" href="historial_general.php?id_historial" target="_blank">Generar reporte</a>

</div>
<table class="width200" id="tabla_resultado_historial">
   <!-- Aqui se despliega el contenido de la tabla -->
</table>

    
</div>
</div>



<?php include("componentes/footer.php") //footer?>