
<?php include '../partials/_head.php' ?>
<?php include '../partials/_navbar.php' ?>

<?php

  include '../function.php';
  $room = findRoomById($_GET['id']);

  if (empty($room)) {
    die('Id non trovato');
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
            <li class="list-group-item">Creata il: <?php echo $room['created_at']; ?></li>
            <li class="list-group-item">Aggiornata il: <?php echo $room['updated_at']; ?></li>
          </ul>
        </div>
      </div>

    </div>

  </div>

  <?php
    $conn->close();
   ?>

<?php include '../partials/_footer.php' ?>
