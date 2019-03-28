<?php

/**
 * @return mysqli
 */
function Connection()
{
    $server = "localhost"; // usually localhost
    $user = "xx";
    $pass = "xx";
    $db = "xx";

    $connection = mysqli_connect($server, $user, $pass, $db);

    if (!$connection) {
        die('MySQL ERROR: ' . mysqli_connect_error());
    }

    mysqli_select_db($connection, $db);

    return $connection;
}
 