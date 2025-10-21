<title>Conexion</title>

<?php
$connection = mysqli_connect('localhost','root','')
    if(!$connection){
        die("Fallo la conexión con la base de datos" . mysqli_error($connection));
    }
 $select_db = mysqli_select_db($connection,'protectoIS');    
    if(!$select_db){
        die("La base de datos seleccionada ha fallado" . mysqli_error($connection));
    }
?>
    