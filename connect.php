
<?php

$mysqli = new mysqli("localhost", "user", "12345", "Prometeudb", 3306);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

// echo $mysqli->host_info . "\n";

?>
