<?php

include('connection.php');

if (isset($_POST['enviar'])) {
  $nombre = $_POST['nombre'];
  $comentario = $_POST['comentario'];

 // $query = "INSERT INTO sports(tema, titulo, descripcion, contenido) VALUES ('$tema','$titulo', '$descripcion', '$contenido')";
 $query = "INSERT INTO comentarios(nombre, comentario) VALUES ('$nombre','$comentario')";
  $result = mysqli_query($conection, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Saved Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: magazine.php');

}
if (isset($_POST['enviar_comentarios'])) {
  $nombre = $_POST['nombre'];
  $comentario = $_POST['comentario'];

 // $query = "INSERT INTO sports(tema, titulo, descripcion, contenido) VALUES ('$tema','$titulo', '$descripcion', '$contenido')";
 $query = "INSERT INTO comentarios_sports(nombre, comentario) VALUES ('$nombre','$comentario')";
  $result = mysqli_query($conection, $query);
  if(!$result) {
    die("Query Failed.");
  }

  header('Location: sports.php');

}


?>