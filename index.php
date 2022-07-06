<?php
    //  check for config files
    //  if config file exist, navigate to homepage
    //  if not, navigate to install script
    if(file_exists('config/config.php')) {
        echo 'config file exist';
    } else {
        header('location: src/install/');
    }
?>