<?php
$servername = "localhost";
$username = "wardozvs";
$password = "083103"; // Replace with your actual password
$dbname = "schedule-manager";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

