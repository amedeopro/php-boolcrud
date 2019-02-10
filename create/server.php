<?php

  include '../env.php';

  $conn = new Mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    echo 'Errore: '. $conn->connect_error;
  }

  $roomNumber = $_POST['room_number'];
  $floor = $_POST['floor'];
  $beds = $_POST['beds'];

  $sql = "INSERT INTO stanze (`room_number`, `floor`, `beds`, `created_at`, `updated_at`)
VALUES ('$roomNumber', '$floor', '$beds', NOW(), NOW())";

  $result = $conn->query($sql);

  if ($result) {
    echo 'Record inserito correttamente';
  } else {
    echo 'KO';
  }

  $conn->close();
 ?>
