<?php

  include '../env.php';

  $conn = new Mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die('Si e verificato un errore');
  }

  $id = $_POST['id'];
  $roomNumber = $_POST['room_number'];
  $floor = $_POST['floor'];
  $beds = $_POST['beds'];

  if (empty($id) || empty($roomNumber) || empty($floor) || empty($beds)) {
    die('Devi compilare tutti i campi');
  }

  $sql = "UPDATE `stanze` SET `room_number` = '$roomNumber', `floor` = '$floor', `beds` = '$beds', `updated_at` = NOW() WHERE `id` = '$id';";

  $result = $conn->query($sql);

  if ($result) {
    echo "Stanza Aggiornata";
  } else{
    echo "Errore";
  }

 ?>
