<?php

  $servername = 'localhost';
  $username = 'root';
  $password = 'tiotenpois';
  $dbname = 'hotel_booleana';


  $conn = new Mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    echo 'Errore: '. $conn->connect_error;
  }

  $sql = 'SELECT * FROM `stanze`';

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      $rooms = [];

      while ($row = $result->fetch_assoc()) {

        $rooms[]= $row;

      }
  }


  $conn->close();

?>
