<?php


// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "presensi";

// Create a connection to the database
$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// Check the connection
if (!$connection) {
    echo "Koneksi ke database gagal: " . mysqli_connect_error();
}

// Function to return the base URL
function base_url($url = null) 
{
    $base_url = 'http://localhost/presensi';
    if ($url != null) {
        return $base_url . '/' . $url;
    } else {
        return $base_url;
    } // Closing brace added here
}

?>