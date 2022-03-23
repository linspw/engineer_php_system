<?php
  include "../../configs/database/database_connection.php";

  $sql = "SELECT * FROM Users";
  $res = mysqli_query($con, $sql);

  $total = mysqli_num_rows($res);
  echo "<p>Total de Resultados:" . $total . "</p>";

  while ($f = mysqli_fetch_array($res)) {
    echo $f['idestado']." - ";
    echo $f['estado_nome']."<br>";
  }
  mysqli_close($con);
?>
