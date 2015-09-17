<!DOCTYPE html>


<html>
  </head>
  <body>
    <h1>EJERCICIO Php</h1>
    <?php
      echo "DATOS ESTUDIANTES" ;
    ?>
<br>
<br>
<br>
  <title>Contacto</title>
        <link rel='stylesheet' href='estilos.css'>
        <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js'></script>
        <script src='funciones.js'></script>
    </head>
    <body>
        <form class='contacto' method='POST' action=''>
            <div><label>Tu Nombre:</label><input type='text' class='nombre' value=''></div>
            <div><label>Tu Apellidos:</label><input type='text' class='Apellidos' value=''></div>
           </form>
    </body>
</html>
 <form class='contacto' method='POST' action=''>
            <div><label>Nombre:</label><input type='text' class='Nombre' value=''></div>
            <br>
            <div><label>Apellido:</label><input type='text' class='Apellido' value=''></div>
            <br>
            <br>
    
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejemplo de Ajax</title>
	<script src="js/jquery-1.11.3.js"></script>
</head>
<body>
	<form action="#">
		<strong>Seleccione un Grado: </strong>
		<select id="selectGrado" name="selectGrado">
			<option value="Seleccione">Seleccione</option>
			<option value="Primero">Primero</option>
			<option value="Segundo">Segundo</option>
		</select>
<br>
<form action="#">
		<strong>Seleccione un Codigo: </strong>
		<select id="CodigoGrado" name="CodigoGrado">
			<option value="Seleccione">Seleccione</option>
			<option value="A">A</option>
					<option value="B">B</option>
				<option value="C">C</option>
			</select>
			<div id="resultado"></div>
		</form>
	<br>
	<form action="#">
			<strong>Seleccione un Materia: </strong>
			<select id="selectMateria" name="selectMateria">
				<option value="Seleccione">Seleccione</option>
				<option value="Danza">Danza</option>
				<option value="Teatro">Teatro</option>
				<option value="Dibujo">Dibujo</option>
				<option value="Música">Musica</option>
			</select>
	<br>
	<br>
	        <div><input type='submit' value='Enviar' class='boton'></div>
	        </form>
	<br>

	$numero = 9;
	$numero2 = 6;

	<strong>Digite valor: </strong>

$resultado = ($numero + $numero2); 
echo $resultado; 
?>

	<script>
		//Funcion de JQuery
		$("#selectGrado").change(function() {
			var gradoVal = $("#selectGrado").val();
			$.ajax({
				method: "POST",
				url: "procesarAjax.php",
				data: { grado: gradoVal}
			})
			.done(function( msg ) {
				$("#resultado").html(msg);
			});
		});
	</script>

</body>
</html>