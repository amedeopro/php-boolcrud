<?php include "partials/_head.php";  ?>
<?php include "partials/_navbar.php"; ?>

<div class="container">
  <div class="row">
    <div class="col-12">
      <h1>Pannello di Controllo - Hotel Booleana</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-6">
      <div class="card">
        <img src="http://www.arworks.com/en/wp-content/uploads/2015/07/hotel-family-checking-in.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Ospiti</h5>
          <p class="card-text">Da questo pannello potrai creare, modificare, aggiornare e cancellare tutte gli ospiti dell'Hotel Booleana</p>
          <a href="http://localhost/php-boolcrud/ospiti.php" class="btn btn-primary">Gestisci Ospiti</a>
        </div>
      </div>
    </div>
    <div class="col-6">
      <div class="card">
        <img src="https://media.cntraveler.com/photos/580e72a51dbfcd3538b953ec/4:3/w_480,c_limit/Bedroom-ThePeninsulaParis-ParisFrance-CRHotel.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Stanze</h5>
          <p class="card-text">Da questo pannello potrai creare, modificare, aggiornare e cancellare tutte le stanze dell'Hotel Booleana</p>
          <a href="http://localhost/php-boolcrud/stanze.php" class="btn btn-primary">Gestisci Stanze</a>
        </div>
      </div>
    </div>

  </div>
</div>

<?php include "partials/_footer.php"; ?>
