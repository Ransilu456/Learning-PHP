<?php
echo ("Database Connection file."), "</br>";

// Database Configuration
$host = "localhost";
$database_name = "phptest";
$database_Username = "root";
$database_Password = "";

// Create the connection here
$connection = new mysqli($host, $database_Username, $database_Password, $database_name);

// Check the connection
if ($connection->connect_error) {
    echo ("Connection Failed: " . $connection->connect_error);
    die("Connection Failed: " . $connection->connect_error);
}

// For every input unicode
//$connection->set_charset("utf+");

//Database File Ended
echo("Database code Ended here");