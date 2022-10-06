<?php 
// Conexion a la base de datos y sesiones
include("sesiones.php");
include("conexion.php"); 
?>
<!-- Estilos -->
<?php include("componentes/header.php") ?>
<nav>
                
    <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fa-solid fa-bars menu"></i>
        </label>

        <!-- Imagen logo -->
        <img class="img-logo-catalogo" src="../img/utd_logo.png" alt="">
                
        <!-- Secciones del menu  -->
        <ul>
        <li><a href="solicitudes.php" id="solicitud">Solicitudes<script>window.onload = function() {
        document.getElementById("solicitud").style.color= '#EF9001';
        document.getElementById("solicitudes").style.background= 'rgb(191, 120, 14)';
        document.getElementById("solicitudes").style.color= '#fff';
        }</script></a></li>
        <li><a href="administrar_equipo.php" id="equipo">Equipo</a></li>
        <li><a href="administrar_usuarios.php" id="usuarios">Usuarios</a></li>
        </ul>
        
        <!-- Boton para cerrar sesion -->
        <div><a href="login.php"><i class="fa-solid fa-arrow-right-from-bracket" title="Cerrar sesión"></i></a></div>
</nav>
<div class="contenedor-principal">
<div class="contenido">

<!-- Botones para administrar e historial -->
<ul class="list-new">
  <li class="li-contenido"><a href="solicitudes.php" id="solicitudes">ADMINISTRAR</a></li>
  <li class="li-contenido"><a href="historial.php" id="historial">HISTORIAL</a></li>
</ul>
<table class="width200">
  <h2>ADMINISTRAR SOLICITUDES</h2>

     <!-- Campos de la tabla -->
        <thead>
    
            <th>FECHA</th>
            <th>No. SERIE</th>
            <th>EQUIPO</th>
            <th>USUARIO</th>
            <th>ACCIONES</th>
            
        
        </thead>
        <?php
        include_once("conexion.php"); //conexion a la bd
        
        //consulta
        $query="SELECT solicitud.id_solicitud, DATE_FORMAT(solicitud.fecha, '%d-%m-%y %h:%m:%s') as fecha, equipo.no_serie, equipo.nombre_equipo, equipo.condiciones,  usuario.rfc, usuario.nombre FROM solicitud INNER JOIN equipo on solicitud.equipo=equipo.no_serie RIGHT JOIN usuario ON solicitud.usuario=usuario.rfc WHERE rol='estandar'";
           
        $result=mysqli_query($conn, $query);
                if (mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_assoc($result))
                       {
                        ?>
        <tbody>

        <!-- datos de la bd -->
        <tr>
        <?php if($row['no_serie']!=''){ ?>
        <td> <?php echo $row['fecha'] ?></td>
        <td> <?php echo $row['no_serie'] ?></td>
        <td> <?php echo $row['nombre_equipo'] ?></td>
        <td> <?php echo $row['nombre'] ?></td>
        <?php } ?>
        

        <?php if($row['no_serie']!=''){ ?>

            <!-- Botones de aceptar y rechazar -->
            <td>
            <a class="btn-acciones" href="insert.php?id_solicitud_aceptada=<?php echo $row['id_solicitud'] ?> && nombre_equipo=<?php echo $row['nombre_equipo'] ?> && no_serie=<?php echo $row['no_serie'] ?> && condiciones=<?php echo $row['condiciones'] ?> && rfc=<?php echo $row['rfc'] ?> && nombre=<?php echo $row['nombre'] ?>">Aceptar</a>

            <a class="btn-acciones" href="solicitud_rechazada.php?id_solicitud_rechazada=<?php echo $row['id_solicitud'] ?> && nombre_equipo=<?php echo $row['nombre_equipo'] ?> && no_serie=<?php echo $row['no_serie'] ?> && condiciones=<?php echo $row['condiciones'] ?> && rfc=<?php echo $row['rfc'] ?> && nombre=<?php echo $row['nombre'] ?>">Rechazar</a>
            </td>
            
        <?php } ?>

            
                          
        </tr> 
                       <?php
                      }
                    }

              ?>
        </tbody>
    </table>

</div>
</div>
<?php include("componentes/footer.php") ?>