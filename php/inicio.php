<!-- Conexion a la base de datos y sesiones -->
<?php include("sesiones.php") ?>
<?php include('componentes/header.php') ?>
<nav>
                
     <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
    <i class="fa-solid fa-bars menu"></i>
    </label>

    <!-- Imagen del logo -->
    <img class="img-logo-catalogo" src="../img/utd_logo.png" alt="">
               
    <!-- Secciones del menu del sistema -->
         <ul>
         <li><a href="inicio.php" id="inicio">Inicio<script>window.onload = function() {
        document.getElementById("inicio").style.color= '#EF9001';
        // document.getElementById("inicio").style.text-shadow= '2px 4px 3px rgba(0,0,0,0.3)';
        }</script></a></li>
        <li><a href="catalogo.php" id="catalogo">Catalogo</a></li>
        <li><a href="solicitudes_usuarios.php" id="usuarios">Notificaciones</a></li>
        </ul>
            <!-- Boton para cerrar sesión -->
        <div><a href="login.php"><i class="fa-solid fa-arrow-right-from-bracket" title="Cerrar sesión"></i></a></div>
</nav>
<div class="contenedor-principal">
    <div class="contenido">

    <div class="contenedor-bienvenida">
        <!-- INICIO -->
    <H1 class="titulo-bienvnida">¡BIENVENIDO "<?php echo $usuario ?>"!</H1>
    <h2>SISTEMA GESTOR DE INVENTARIO</h2>
    <h2>Pide lo que necesites, Genera e Imprime reportes de TUS solicitudes</h2>

    <!-- Boton solicitar -->
        <div class="contenedor-boton">
            <div class="contenedor-botones">
                <button class="boton tres"><a href="catalogo.php">¡SOLICITAR YA!</a></button>
            
            </div>
        </div>
    

    </div>
    
    </div>
</div>
                  


  


<?php include("componentes/footer.php") ?>