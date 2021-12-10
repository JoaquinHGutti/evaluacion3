<?php

include("connection.php");

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM sports WHERE id = $id";
  $result = mysqli_query($conection, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Removed Successfully';
  $_SESSION['message_type'] = 'danger';
  header('Location: admin.php');
}

?>
