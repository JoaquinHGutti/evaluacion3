<!-- CLASIFICATORIAS 2022-->


<?php 
                          $inc = include("connection.php");
                          if ($inc) 
                            { 
                              $consulta = "SELECT titulo, fecha, link FROM sports ORDER BY fecHa DESC";
                              $resultado = mysqli_query($conection,$consulta);
                              if ($resultado) 
                                {
                                  while ($row = $resultado->fetch_array()) 
                                    {
                                      $titulo = $row['titulo'];
                                      $fecha = $row['fecha'];
                                      $link = $row['link'];
                                    }
                                }
                              }
                        ?>