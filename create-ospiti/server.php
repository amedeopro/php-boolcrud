<?php

  include '../env.php';

  $conn = new Mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    echo 'Errore: '. $conn->connect_error;
  }

  $name = $_POST['name'];
  $lastname = $_POST['lastname'];
  $dateOfBirth = $_POST['date_of_birth'];
  $documentType = $_POST['document_type'];
  $documentNumber = $_POST['document_number'];

  if (empty($name) || empty($lastname) || empty($dateOfBirth) || empty($documentType) || empty($documentNumber)) {
    die('Devi inserire tutti i campi');
  }

  $sql = "INSERT INTO ospiti (`name`, `lastname`, `date_of_birth`, `document_type`, `document_number`, `created_at`, `updated_at`)
VALUES ('$name', '$lastname', '$dateOfBirth', '$documentType', '$documentNumber', NOW(), NOW())";

  $result = $conn->query($sql);

  if ($result) { ?>
  <?php echo 'Record inserito correttamente'; ?>
  <a href="http://localhost/php-boolcrud/">Torna alla home</a>
  <a href="http://localhost/php-boolcrud/create-ospiti/form.php">Inserisci un'altro ospite</a>
  <?php  } else {
    echo 'KO';
  }
?>


<?php
  $conn->close();
 ?>
