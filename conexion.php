<?php
$servername = "localhost";
$database = "chedraui";
$username = "tavobeto";
$password = "N1nt3nd0123.,@";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully";
    mysqli_close($conn);
}
?>