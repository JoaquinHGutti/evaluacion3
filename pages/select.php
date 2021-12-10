<!-- ELECCIONES 2021-->


<?php 
                          $inc = include("connection.php");
                          if ($inc) 
                            { 
                              $consulta = "SELECT * FROM elecciones ";
                              $resultado = mysqli_query($conection,$consulta);
                              if ($resultado) 
                                {
                                  while ($row = $resultado->fetch_array()) 
                                    {
                                      $titulo = $row['titulo'];
                                      $descripcion = $row['descripcion'];
                                      $contenido = $row['contenido'];
                                      $fecha = $row['fecha'];
                                    }
                                }
                              }
                        ?>