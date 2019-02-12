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
      <a href="http://localhost/php-boolcrud/create-ospiti/form.php" class="btn btn-primary"> Aggiungi un ospite</a>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nome</th>
              <th>Cognome</th>
              <th>Data di nascita</th>
              <th>Tipo di documento</th>
              <th>N Documento</th>
              <th>Creata il</th>
              <th>Aggiornata il</th>
            </tr>
          </thead>
          <tbody>
              <?php include 'database-ospiti.php'; ?>
              <?php foreach ($ospiti as $ospite) { ?>
                <tr>
                <td><?php echo $ospite['id']; ?></td>
                <td><?php echo $ospite['name']; ?></td>
                <td><?php echo $ospite['lastname']; ?></td>
                <td><?php echo $ospite['date_of_birth']; ?></td>
                <td><?php echo $ospite['document_type']; ?></td>
                <td><?php echo $ospite['document_number']; ?></td>
                <td><?php echo $ospite['created_at']; ?></td>
                <td><?php echo $ospite['updated_at']; ?></td>
                <td> <a href="http://localhost/php-boolcrud/show/show.php?id=<?php echo $ospite['id'] ?>" class="btn btn-secondary">Visualizza</a></td>
                <td> <a href="http://localhost/php-boolcrud/update/form.php?id=<?php echo $ospite['id'] ?>" class="btn btn-warning">Aggiorna</a></td>
                <td> <a href="http://localhost/php-boolcrud/delete-ospiti/delete.php?id=<?php echo $ospite['id'] ?>" class="btn btn-danger">Elimina</a></td>
                </tr>
              <?php } ?>

          </tbody>
      </table>

    </div>
  </div>
</div>




<?php include "partials/_footer.php"; ?>
