
    <?php 
    $conection = mysqli_connect("127.0.0.1","root","","lircayhub");


    if($conection->connect_errno){
        die("La conexion ha fallado" . $conection->connect_errno);
    }
    else{
        echo("");
    }
?>



