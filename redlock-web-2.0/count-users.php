<?php

$conn = new mysqli("172.18.0.2", "root", "root", "Redlock");

$result = $conn->query("SELECT COUNT(*) AS count_users FROM users");

$row = $result->fetch_assoc();

echo "Total Users: " . $row["count_users"];

?>
