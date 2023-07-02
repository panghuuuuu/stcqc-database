<?php
// variables to connect to database
$servername = "localhost";
$username = "id15418907_ilawuser";
$password = "h~GD+Fl!k|v3g3//";
$database = "id15418907_ilawdatabase";

// Create connection
$mysqli = new mysqli($servername, $username, $password, $database);

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

?>