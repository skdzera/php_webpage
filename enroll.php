<?php
    include_once "config.php";

    $name= mysqli_real_escape_string($conn, $_POST['name']);
    $email= mysqli_real_escape_string($conn, $_POST['email']);
    $add= mysqli_real_escape_string($conn, $_POST['add']);

    if(!empty($name) && !empty($email) && !empty($add)){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $sql1 = mysqli_query($conn, "INSERT INTO users (name, email, address) VALUES ('{$name}','{$email}','{$add}')");
        
            if($sql1){
                echo "success";
            }
        
        }
    }
?>