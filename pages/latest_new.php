<!-- CLASIFICATORIAS 2022-->


<?php 
                          $inc = include("connection.php");
                          if ($inc) 
                            { 
                              $consulta = "SELECT * FROM sports ORDER BY fecha DESC LIMIT 0,2";
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