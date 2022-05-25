<?php include('../templates/header.html');   ?>

<body>

<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

 	$query = "SELECT DISTINCT codigo FROM fpl_y_propuestas WHERE estado = 'pendiente';";

	$result = $db -> prepare($query);
	$result -> execute();
	$vuelos_pendientes = $result -> fetchAll();

	echo $vuelos_pendientes
	
?>

<table>
    <tr>
      <th>ID</th>
      <th>Nombrehdfghdjfghdbghfdhjf</th>
      <th>Tipo</th>
    </tr>
  <?php
	foreach ($vuelos_pendientes as $vuelo) {
  		echo "<tr> <td>$vuelo</td> <td></td> <td></td> </tr>";
	}
  ?>
	</table>

<?php include('../templates/footer.html'); ?>