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

  if ($result) { ?>
  <?php echo 'Record inserito correttamente'; ?>
  <a href="http://localhost/php-boolcrud/">Torna alla home</a>
  <a href="http://localhost/php-boolcrud/create/form.php">Inserisci un'altra stanza</a>
  <?php  } else {
    echo 'KO';
  }
?>


<?php
  $conn->close();
 ?>
