<?php
    session_start();
    
    foreach($_SESSION as $name => $value){
        if(substr($name, 0 , 5)=='cart_'){
            echo $name;
            unset($_SESSION[$name]);

            $_SESSION['total_products'] = 0;
            $_SESSION['total_price'] = 0;

        }   
    }
    header('location:index.php');


?>