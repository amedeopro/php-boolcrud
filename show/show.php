
<?php include '../partials/_head.php' ?>
<?php include '../partials/_navbar.php' ?>

<?php

  include '../env.php';

  $conn = new Mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    echo 'Errore: '. $conn->connect_error;
  }

  $id = $_GET['id'];

  $sql = "SELECT * FROM `stanze` WHERE `id` = $id LIMIT 1";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $room = $result->fetch_assoc();

  }
?>



  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>Stanza con id: <?php echo $room['id'] ?> </h1>
      </div>

    </div>

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            Stanza: <?php echo $room['room_number']; ?>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Piano: <?php echo $room['floor']; ?></li>
            <li class="list-group-item">Letti: <?php echo $room['beds']; ?></li>
          </ul>
        </div>
      </div>

    </div>

  </div>

  <?php
    $conn->close();
   ?>

<?php include '../partials/_footer.php' ?>
