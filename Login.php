<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="style.css">
</head>
<title>Registro</title>

<body class="dark">
    
	<table width="800" height="460" border="3" class="c">
	<tr>
    <td class="tab2">
      <p><label class="lbl1">Nombre:</label>
        <input class="field" type="text" name="nombre" id="inputnombre" placeholder="Su nombre" required ></input></p>
      <p><label class="lbl1">Contraseña:</label></td>
        <input class="field" type="text" name="cont" id="inputcont" placeholder="Contraseña" required ></input></p>
	</table>


    <?php
include('conexion/conexion.php');
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];

$consulta="SELECT * FROM usuario where nombre='$usuario' and clave='$clave'";
$resultado=mysqli_query($connection, $consulta);
$fila=mysqli_num_rows($resultado);
	if($usuario=='Admin' && $clave='admin'){
		echo "<script>alert('BIENVENIDO ADMINISTRADOR');
		window.location='admin.php';</script>;
		</script>";
	}
	if($fila>0){
		echo "<script>alert('BIENVENID@');
		window.location='index.php';</script>;
		</script>";
	}
	else{
	echo "<script>alert('Usuario o Contraseña incorrecta');
		window.location='index.php';</script>";
	}
		mysqli_free_result($resultado);
		mysqli_close($connection); 
?>


</body>
</html>