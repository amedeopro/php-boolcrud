

<?php include "partials/_head.php";  ?>
<?php include "partials/_navbar.php"; ?>


  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>Tutte le stanze</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <a href="http://localhost/php-boolcrud/create/form.php" class="btn btn-primary"> Aggiungi una stanza</a>
      </div>
    </div>
    <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>N Stanza</th>
            <th>Piano </th>
            <th>N Letti</th>
            <th>Creata il</th>
            <th>Aggiornata il</th>
          </tr>
        </thead>
        <tbody>
            <?php include 'database.php'; ?>
            <?php foreach ($rooms as $room) { ?>
              <tr>
              <td><?php echo $room['id']; ?></td>
              <td><?php echo $room['room_number']; ?></td>
              <td><?php echo $room['floor']; ?></td>
              <td><?php echo $room['beds']; ?></td>
              <td><?php echo $room['created_at']; ?></td>
              <td><?php echo $room['updated_at']; ?></td>
              <td> <a href="http://localhost/php-boolcrud/show/show.php?id=<?php echo $room['id'] ?>" class="btn btn-secondary">Visualizza</a></td>
              <td> <a href="http://localhost/php-boolcrud/update/form.php?id=<?php echo $room['id'] ?>" class="btn btn-warning">Aggiorna</a></td>
              <td> <a href="http://localhost/php-boolcrud/delete/delete.php?id=<?php echo $room['id'] ?>" class="btn btn-danger">Elimina</a></td>
              </tr>
            <?php } ?>
        </tbody>
    </table>
  </div>




<?php include "partials/_footer.php"; ?>
