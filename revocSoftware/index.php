<?php
    session_start();

    if($_SESSION['logged']){
        header('Location: http://www.example.com/');
    }
    else{
        header('Location: login/');        
    }
?>