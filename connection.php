<?php

function connect()
{
    $host_name = "localhost";
    $database_username = "root";
    $database_password = "";
    $database_name = "hiit_admission";

    $conn = new mysqli(
        $host_name,
        $database_username,
        $database_password,
        $database_name
    );
    if ($conn->connect_error) {
        return null;
    } else {
        return $conn;
    }
}

function clean_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
