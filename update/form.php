
<?php include "../partials/_head.php";  ?>
<?php include "../partials/_navbar.php"; ?>

<?php

  include "../function.php";

  $id = $_GET['id'];

  $room = findRoomById($id);

?>

  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>Modifica stanza con id: <?php echo $room['id'] ?></h1>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <form class="form-group" method="post" action="http://localhost/php-boolcrud/update/server.php">
          <input type="hidden" name="id" value="<?php echo $room['id'] ?>">
          <div class="form-group">
            <label for="room_number">Numero Stanza</label>
            <input type="text" name="room_number" class="form-control" placeholder="Inserisci il numero della stanza" value="<?php echo $room['room_number'] ?>">
          </div>
          <div class="form-group">
            <label for="floor">Piano</label>
            <input type="text" name="floor" class="form-control" placeholder="Inserisci il piano" value="<?php echo $room['floor'] ?>">
          </div>
          <div class="form-group">
            <label for="beds">Letti</label>
            <input type="text" name="beds" class="form-control" placeholder="Inserisci il numero di letti" value="<?php echo $room['beds'] ?>">
          </div>
          <div class="form-group">
            <input type="submit" class="form-control" name="submit" value="Aggiorna">
          </div>
        </form>
      </div>
    </div>
  </div>
<?php include "../partials/_footer.php"; ?>
