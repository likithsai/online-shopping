<?php
    error_reporting(E_ALL);
    require 'component/header.php';
    
    //  check if config file exist or not
    if(!file_exists('config/config.php')) {
        header('location: ./install/');
    } else {
        echo '<h1>Homepage</h1>';
    }

    require_once 'component/footer.php';
?>