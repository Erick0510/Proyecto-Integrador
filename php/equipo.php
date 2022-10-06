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
        document.getElementById("nuevo_equipo").style.background= 'rgb(191, 120, 14)';
        document.getElementById("nuevo_equipo").style.color= '#fff';
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
  <li class="li-contenido"><a href="administrar_equipo.php">ADMINISTRAR</a></li>
  <li class="li-contenido"><a href="equipo.php" id="nuevo_equipo">NUEVO</a></li>
</ul>


<!--Formulario para agregar un equipo -->
<div class="contenedorp">
  <div class="contactop">
  <h2>NUEVO EQUIPO</h2>
<form action="insert.php" method="POST" class="formulariop">
         
          <input type="hidden" name="id" >
          <input type="hidden" name="ubicacion">
      
          <p>
          <label>No. Serie</label>
          <input type="text" name="id" required autocomplete="off" autofocus>
          </p>
            

          <p>
          <label>Nombre</label>
          <input type="text" name="nombre" required autocomplete="off" autofocus>
          </p>
            
          
          <p>
          <label>Descripcion</label>
          <input type="text" name="descripcion" required autocomplete="off">
          </p>
            
        
          <p>
          <label>Condiciones</label>
          <select name="condiciones">
            <option value="Buenas">Buenas</option>
            <option value="Regulares">Regulares</option>
            <option value="Malas">Malas</option>
          </select>
          </p>
            
        
          <p>
          <label>Edificio</label>
          <select name="edificio">
            <option value="A">Edificio A</option>
            <option value="B" selected>Edificio B</option>
            <option value="C">Edificio C</option>
            <option value="D">Edificio D</option>
            <option value="E">Ediciico E</option>
          </select>
          </p>
            
        
          <p>
          <label>Nombre Del Salon</label>
          <input type="text" name="nombre_salon" required autocomplete="off">
          </p>
            
        
          <p>
          <label>Area (Aula, laboratorio, etc)</label>
          <select name="area">
            <option value="Aula">Aula</option>
            <option value="Laboratorio">Laboratorio</option>
            <option value="Sala de conferencias">Sala de Conferencias</option>
            <option value="Cubículo"> Cubículo</option>
          </select>
          </p>
            
        
          <p class="full">
          <input type="submit" name="equipo"  value="ENVIAR" class="boton-enviar">
          </p>
          <p class="full">
          <input type="reset" value="BORRAR" class="boton-enviar">
          </p> 
        </form>
  </div>
</div>
</div>



</div>
</div>

<!-- Footer -->
<?php include("componentes/footer.php") ?>