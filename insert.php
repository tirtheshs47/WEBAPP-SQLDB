<?php
    $serverName = "sqlserverdb13.database.windows.net"; 
    $connectionOptions = array(
        "Database" => "sqldb-web13", 
        "Uid" => "admin13", 
        "PWD" => "Admin@123" 
    );
    //Establishes the connection


    //Establishes the connection

    $conn = sqlsrv_connect($serverName, $connectionOptions);

    $tsql= "INSERT INTO employeeinfo (fname, lname) VALUES('$_POST[fname]','$_POST[lname]')";

    $getResults= sqlsrv_query($conn, $tsql);

    echo ("Data entered successfully!" . PHP_EOL);

    if ($getResults == FALSE)

        echo (sqlsrv_errors());

        ?>
