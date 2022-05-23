<?php include('templates/header.html');   ?>

<body>
  <h1 align="center">Bienvenido/a a la Aerolínea 88</h1>
  <p style="text-align:center;">Busca información sobre vuelos, aeródromos, horarios y más.</p>

  <br>

  <h3 align="center"> 1. ¿Quieres saber las propuestas de vuelo pendientes de ser aprobadas por la DGAC?</h3>

  <form align="center" action="consultas/consulta1.php" method="post">

    <input type="submit" value="Sí, buscar">
  </form>
  
  <br>
  <br>
  <br>

  <h3 align="center">2. ¿Quieres saber las propuestas de vuelo aceptadas entre aérodromos dado un código ICAO? </h3>

  <form align="center" action="consultas/consulta2.php" method="post">
    Código ICAO origen:
    <input type="text" name="codigo_ICAO_origen">
    <br/><br/>
    Código ICAO destino:
    <input type="text" name="codigo_ICAO_destino">
    <br></br>
    <input type="submit" value="Buscar">
  </form>
  
  <br>
  <br>
  <br>

  <h3 align="center"> 3. ¿Quieres saber la lista de pilotos con licencia vigentes para volar en una fecha determinada?</h3>

  <form align="center" action="consultas/consulta3.php" method="post">
    Fecha (formato dd/mm/yyyy):
    <input type="text" name="altura">
    <br/><br/>
    <input type="submit" value="Buscar">
  </form>
  <br>
  <br>
  <br>


  
  <h3 align="center">4. ¿Quieres ver los bloques horarios con mayor afluencia de pasajeros por cada aeródromo?</h3>
  <form align="center" action="consultas/consulta4.php" method="post">
    <input type="submit" value="Sí, buscar">
  </form>
  <br>
  <br>
  <br>


  <h3 align="center"> 5. ¿Quieres saber la cantidad de vuelos y los nombres de las aeronaves que realizaron vuelos entre dos fechas determinadas?</h3>

  <form align="center" action="consultas/consulta5.php" method="post">
    Fecha de salida
    <select name="select">
      <option value="value1">Value 1</option>
      <option value="value2" selected>Value 2</option>
      <option value="value3">Value 3</option>
    </select>
    <br/><br/>
    Fecha de llegada
    <select name="select">
      <option value="value1">Value 1</option>
      <option value="value2" selected>Value 2</option>
      <option value="value3">Value 3</option>
    </select>
    <br></br>
    <input type="submit" value="Buscar">
  </form>
  <br>
  <br>
  <br>

  <h3 align="center"> 6. ¿Quieres ver a los pares piloto-copiloto que no han realizado ningún vuelo juntos?</h3>

  <form align="center" action="consultas/consulta6.php" method="post">
    <input type="submit" value="Sí, buscar">
  </form>
  <br>
  <br>
  <br>

  <?php
  #Primero obtenemos todos los tipos de pokemones
  require("config/conexion.php");
  $result = $db -> prepare("SELECT DISTINCT tipo FROM pokemones;");
  $result -> execute();
  $dataCollected = $result -> fetchAll();
  ?>

  <form align="center" action="consultas/consulta1.php" method="post">
    Seleccinar un tipo:
    <select name="tipo">
      <?php
      #Para cada tipo agregamos el tag <option value=value_of_param> visible_value </option>
      foreach ($dataCollected as $d) {
        echo "<option value=$d[0]>$d[0]</option>";
      }
      ?>
    </select>
    <br><br>
    <input type="submit" value="Buscar por tipo">
  </form>

  <br>
  <br>
  <br>
  <br>
</body>
</html>

