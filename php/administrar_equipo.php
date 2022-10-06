<?php 
//conexion a las sesiones y bd
include("sesiones.php");
include("conexion.php"); 

?>
<?php 
//manda a llamar los estilos del header
include("componentes/header.php") 
?>
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
        <li><a href="solicitudes.php" id="solicitud">Solicitudes</a></li>
        <li><a href="administrar_equipo.php" id="equipo">Equipo<script>window.onload = function() {
        document.getElementById("equipo").style.color= '#EF9001';
        document.getElementById("administrar_equipo").style.background= 'rgb(191, 120, 14)';
        document.getElementById("administrar_equipo").style.color= '#fff';
        }</script></a></li>
        <li><a href="administrar_usuarios.php" id="usuarios">Usuarios</a></li>
        </ul>
        
        <!-- boton para cerrar sesion -->
        <div><a href="login.php"><i class="fa-solid fa-arrow-right-from-bracket" title="Cerrar sesión"></i></a></div>
</nav>
<div class="contenedor-principal">
<div class="contenido">
  <!-- botones de administrar o agregar un equipo -->
<ul class="list-new">
  <li class="li-contenido"><a href="administrar_equipo.php" id="administrar_equipo">ADMINISTRAR</a></li>
  <li class="li-contenido"><a href="equipo.php">NUEVO</a></li> 
</ul>

<h2>ADMINISTRAR EQUIPO</h2>

<!-- Buscador -->
<input type="text" name="busqueda" id="busqueda" placeholder="Buscar...">

<table class="width200" id="tabla_resultado">
   <!-- Aqui se despliega el contenido de la tabla -->
</table>

</div>
</div>
<!-- Footer -->
<?php include("componentes/footer.php") ?>