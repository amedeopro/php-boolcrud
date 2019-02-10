<?php

  include '../env.php';

  $conn = new Mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    echo 'Errore: '. $conn->connect_error;
  }

  $sql = "SELECT * FROM `stanze`";

  $result = $conn->query($sql);


  $conn->close();
 ?>
