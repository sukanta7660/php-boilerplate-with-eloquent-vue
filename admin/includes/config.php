<?php

    // git commit -m "add filename to .gitignore
    //git rm --cached filename

    /*------- Database Credential----------*/

    define('DB_HOST', 'localhost');
    define('DB_USER','root');
    define('DB_PASS','');
    define('DB_NAME', 'online_library');
    
    /*------- Database Credential----------*/
    
    /*------- Establish Connection--------*/

    $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    /*------- Establish Connection--------*/

    if (!$connection) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

