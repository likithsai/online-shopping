<?php

    error_reporting(E_ALL);
    include 'class/MySQLiDB.class.php';
    //  check for config files exits or not
    //  if exist, then include in the file
    if(file_exists('config/config.php')) {
        require_once 'config/config.php';
    }

    require 'component/header.php';
    
    //  check if config file exist or not
    if(!file_exists('config/config.php')) {
        header('location: ./install/');
    } else {
        echo '<h1>Homepage</h1>';
    }

    require_once 'component/footer.php';
?>