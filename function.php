<?php



  function findRoomById($id){

    include 'env.php';

    $room = [];

    $conn = new Mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
      return $room;
    }

    $id = $_GET['id'];

    $sql = "SELECT * FROM `stanze` WHERE `id` = $id LIMIT 1";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      $room = $result->fetch_assoc();

    }

    return $room;
  }



 ?>
