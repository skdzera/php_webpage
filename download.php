<?php

    include_once "config.php";

    $sql1 = mysqli_query($conn, "SELECT * FROM infopdf");

    $result= mysqli_fetch_assoc($sql1);
    $pdf = $resutl['filename'];
    $path = $resutl['directory'];
    $date = $resutl['created_date'];
    $file = $path.$pdf;
    

    header('Content-type: application/pdf'); 
    header('Content-Disposition: inline; filename="' .$file. '"'); 
    header('Content-Transfer-Encoding: binary'); 
    header('Accept-Ranges: bytes'); 
    @readfile($file);  
?>