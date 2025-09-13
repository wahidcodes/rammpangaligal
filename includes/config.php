<?php
$servername = "localhost";
$username = "u763811849_root9";
$password = "Anees@9999";
$dbname = "u763811849_membershiphp";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error . ".<br> Please create a database and import the SQL file");
}

// Start Session
session_start();
