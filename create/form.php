
<?php include "../partials/_head.php";  ?>
<?php include "../partials/_navbar.php"; ?>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>Crea una nuova stanza</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <form class="form-group" method="post" action="http://localhost/php-boolcrud/create/server.php">
          <div class="form-group">
            <label for="room_number">Numero Stanza</label>
            <input type="text" name="room_number" class="form-control" placeholder="Inserisci il numero della stanza">
          </div>
          <div class="form-group">
            <label for="floor">Piano</label>
            <input type="text" name="floor" class="form-control" placeholder="Inserisci il piano">
          </div>
          <div class="form-group">
            <label for="beds">Letti</label>
            <input type="text" name="beds" class="form-control" placeholder="Inserisci il numero di letti">
          </div>
          <div class="form-group">
            <input type="submit" class="form-control" name="submit" value="Salva">
          </div>
        </form>
      </div>
    </div>
  </div>
<?php include "../partials/_footer.php"; ?>
