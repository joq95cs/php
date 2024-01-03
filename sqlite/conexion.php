<?php

$db = new SQLite3("libros.db");

$query = "DELETE from libros";
$db->query($query);

$query = "INSERT into libros VALUES (null, 'nuevo', 'nuevo', 0)";
$db->query($query);

$query = "UPDATE libros SET nombre = 'cambiado' WHERE nombre = 'nuevo'";
$db->query($query);

$query = "SELECT * FROM libros";
$result = $db->query($query);

while($row = $result->fetchArray(SQLITE3_ASSOC)) {

    echo $row["nombre"];
    echo "<br>";
}

$db->close();