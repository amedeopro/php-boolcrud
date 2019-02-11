<?php include "../partials/_head.php";  ?>
<?php include "../partials/_navbar.php"; ?>

<div class="container">

  <div class="row">
    <div class="col-12">
      <?php

        include '../env.php';

        $conn = new Mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
          die('Si e verificato un errore');
        }

        $id = $_GET['id'];


         if (empty($id)) {
           die('Errore id');
         }

        $sql = "DELETE FROM `stanze` WHERE `id` = $id ";

        $result = $conn->query($sql);

        if ($result) {
          echo "Stanza Eliminata";
        } else{
          echo "Errore";
        }

       ?>
    </div>
  </div>

</div>

<?php include "../partials/_footer.php"; ?>
