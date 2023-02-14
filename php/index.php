<?php
$mysqli = new mysqli("mio_db_server","root","ciccio","mysql");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

// Perform query
if ($result = $mysqli -> query("SELECT * FROM user")) {
  echo "Returned rows are: " . $result -> num_rows;
  // Free result set
  $result -> free_result();
}

$mysqli -> close();
?>
