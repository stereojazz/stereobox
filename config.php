<?php

    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', true);

    define('DS', DIRECTORY_SEPARATOR);

    define('STEREOBOX_USER',       'Sample user');
    define('STEREOBOX_TITLE',      'Stereobox');
    define('STEREOBOX_CODE_DIR',   'code');
    define('STEREOBOX_INPUT_DIR',  'input');
    define('EXECUTABLE_EXTENSION', 'php');

    function loadClass($class) {
        include 'lib/' . $class . '.php';
    }

    spl_autoload_register('loadClass');
?>
