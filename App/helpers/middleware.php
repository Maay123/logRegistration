<?php
    function usersOnly($redirect = '/index.php'){
        if(empty($_SESSION['id'])){
            $_SESSION['message'] = 'You need to log in first';
            $_SESSION['type'] = 'error';
            header('location: ../../' . $redirect);
            exit(0);
        }
    } 
?>