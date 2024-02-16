<?php
$mysqli = new MySQLi("localhost", "Laura", "", "bancapp");
if ($mysqli->connect_errno) {
    die("Fallo la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
} else {
    echo "Conexión exitosa.";
}
?>
