<?php
    session_start();

    if($_SERVER['HTTP_HOST'] == 'localhost'){
        define("BASE_URL", "http://localhost/web-dev-2024/LMS/");
        define("DIR_URL", $_SERVER['DOCUMENT_ROOT'] . "/web-dev-2024/LMS/");

        define("SERVER_NAME" , "localhost");
        define("USERNAME" , "root");
        define("PASSWORD" , "");
        define("DATABASE" , "lms");

    } else{
        define("BASE_URL" , "http://lms.com");
        define("DIR_URL" , $_SERVER['DOCUMENT_ROOT']);

        define("SERVER_NAME" , "");
        define("USERNAME" , "");
        define("PASSWORD" , "");
        define("DATABASE" , "");
    }

?>