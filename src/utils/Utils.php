<?php
    //  function to check for config files
    function check_for_config_files($config_file, $config_file_exist, $config_file_notexist) {
        if(file_exists($config_file)) {
            header('location: ' . $config_file_exist);
        } else {
            header('location: ' . $config_file_notexist);
        }
    }
?>