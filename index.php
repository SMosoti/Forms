<?php
//create database connection
$servername = "localhost:3306";
$username = "root";
$password = "mokoro";
$dbname = "mysql";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";