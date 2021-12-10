<?php

include('connection.php');

if (isset($_POST['enviar'])) {
  $tema = $_POST['tema'];
  $titulo = $_POST['titulo'];
  $descripcion = $_POST['descripcion'];
  $contenido = $_POST['contenido'];
  $name = $_POST['name'];

 // $query = "INSERT INTO sports(tema, titulo, descripcion, contenido) VALUES ('$tema','$titulo', '$descripcion', '$contenido')";
 $query = "INSERT INTO sports(tema, titulo, descripcion, contenido, name) VALUES ('$tema','$titulo', '$descripcion', '$contenido','$name')";
  $result = mysqli_query($conection, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Saved Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: sports.php');

}

?>