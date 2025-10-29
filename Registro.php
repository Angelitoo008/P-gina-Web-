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
    
	<table width="1200" height="45" border="3" align="Center" Bordercolor="#000000" bgcolor="#000000">
	<tr>
	  <label id="Regresar"><a href="Index.html"><i class="fa-solid fa-house"></a></i></label>
		<label class="switch" id="lbl_toggle" >
			<input type="checkbox" class="checkbox" id="theme">
			<div class="slider" ><i id="icon" class="fa-solid fa-sun"></i></div> 
		</label>
	  <td class="tabla">Registrar</td>
	  <td class="tabla"><a href="Consulta.php">Consulta</a></td>
	  <td class="tabla"><a href="">Recuento</a></td>
	  <td class="tabla"><a href="">Eliminacion</a></td>
	</table>
    
<script> //script para poder cambiar el tema de color
  const toggle = document.getElementById('theme');
  const icon = document.getElementById('icon');
  const body = document.body;
  const savedTheme = localStorage.getItem('theme');

  if (savedTheme === 'light') {
    body.classList.replace('dark', 'light');
    icon.classList.replace('fa-sun', 'fa-moon');
    toggle.checked = true;
  } else {
    body.classList.replace('light', 'dark');
    icon.classList.replace('fa-moon', 'fa-sun');
    toggle.checked = false;
  }
  toggle.addEventListener('change', (event) => {
    const checked = event.target.checked;

    body.classList.toggle('light', checked);
    body.classList.toggle('dark', !checked);

    if (checked) {
      icon.classList.replace('fa-sun', 'fa-moon');
      localStorage.setItem('theme', 'light'); 
    } else {
      icon.classList.replace('fa-moon', 'fa-sun');
      localStorage.setItem('theme', 'dark'); 
    }
  });
</script>       
  <br><br><br><br>
        <form method="POST">
  <table width="800" height="420" border="3" class="c"> 
  <tr>
    <td class="tab2">
      <p><label class="lbl1">Nombre:</label>
        <input class="field" type="text" name="nombre" id="inputnombre" placeholder="Su nombre" required ></input></p>
      <p><label class="lbl1">Nombre:</label>
        <input class="field" type="text" name="nombre" id="inputnombre" placeholder="Su nombre" required ></input></p>
      <p><label class="lbl1">Nombre:</label>
        <input class="field" type="text" name="nombre" id="inputnombre" placeholder="Su nombre" required ></input></p>
      <p><label class="lbl1">Nombre:</label>
        <input class="field" type="text" name="nombre" id="inputnombre" placeholder="Su nombre" required ></input></p>
      <p><label class="lbl1">Nombre:</label>
        <input class="field" type="text" name="nombre" id="inputnombre" placeholder="Su nombre" required ></input></p>
      <p><label class="lbl1">Nombre:</label>
        <input class="field" type="text" name="nombre" id="inputnombre" placeholder="Su nombre" required ></input></p>
      <p><button class="par2" type="submit"> Registrar </button></p>
    </td>
  </table>
        </form>

<?php
include('conexion/conexion.php');
if((isset($_POST['nombre']) && !empty($_POST['nombre']))
&& (isset($_POST['nombre']) && !empty($_POST['nombre']))
&& (isset($_POST['nombre']) && !empty($_POST['nombre']))
&& (isset($_POST['nombre']) && !empty($_POST['nombre']))
&& (isset($_POST['nombre']) && !empty($_POST['nombre']))
&& (isset($_POST['nombre']) && !empty($_POST['nombre']))){
  $nombre = $_POST['nombre'];
  $nombre = $_POST['nombre'];
  $nombre = $_POST['nombre'];
  $nombre = $_POST['nombre'];
  $nombre = $_POST['nombre'];
  $nombre = $_POST['nombre'];

  $query = " INSERT INTO 'clientes' (nombre, nombre, nombre, nombre, nombre, nombre)
                             VALUES ('$nombre','$nombre','$nombre','$nombre','$nombre')";
    $result = mysqli_query($connection, $query);
    echo "<script>alert('Se ha realizado el registro')</script>";
  } ?>

</table>

</body>
</html>
