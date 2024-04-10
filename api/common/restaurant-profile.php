<?php

require_once "db1.php";

$restaurant_id = get(['restaurant_id'])['restaurant_id'];

$result = sql_fetch_row("SELECT * FROM restaurants WHERE id = '$restaurant_id';");

echo json_encode($result);
header('Content-Type: application/json');