<?php


// host
$host = "localhost";

// dbname
$dbname = "Bookstore";

// username
$user = "root";

// password
$pass = "";

$conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if ($conn) {
    echo "Worked successfully!";
} else {
    echo "Error in database connection";
}





