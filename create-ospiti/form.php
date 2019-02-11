
<?php include "../partials/_head.php";  ?>
<?php include "../partials/_navbar.php"; ?>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>Inserisci nuovo ospite</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <form class="form-group" method="post" action="http://localhost/php-boolcrud/create-ospiti/server.php">
          <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" name="name" class="form-control" placeholder="Inserisci il nome dell'ospite">
          </div>
          <div class="form-group">
            <label for="lastname">Cognome</label>
            <input type="text" name="lastname" class="form-control" placeholder="Inserisci il cognome dell'ospite">
          </div>
          <div class="form-group">
            <label for="date_of_birth">Data di nascita</label>
            <input type="date" name="date_of_birth" class="form-control" placeholder="Inserisci la data di nascita dell'ospite">
          </div>
          <div class="form-group">
            <label for="document_type">Tipo di Documento</label>
            <select class="form-control" name="document_type">
              <option>CI</option>
              <option>Driver License</option>
            </select>
          </div>
          <div class="form-group">
            <label for="document_number">Numero del documento</label>
            <input type="text" name="document_number" class="form-control" placeholder="Inserisci il numero del documento">
          </div>
          <div class="form-group">
            <input type="submit" class="form-control" name="submit" value="Salva">
          </div>
        </form>
      </div>
    </div>
  </div>
<?php include "../partials/_footer.php"; ?>
