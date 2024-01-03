<?php
header('Content-Type: application/json');
include 'db.php';

#$id = (int) $_POST['id'];
$id = 3;

$stmt = $db->prepare('SELECT name, age FROM students WHERE ID = ?');
$stmt->execute([$id]);
$result = $stmt->fetch(PDO::FETCH_ASSOC);

echo json_encode($result);