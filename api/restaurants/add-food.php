<?php
require_once './db1.php';

require_once './access.php';

$restaurant_id = $_SESSION["restaurants_id"];
$input = post(['name', 'price', 'description', 'photo_link']);

$name = $input["name"];
$price = $input["price"];
$description = $input["description"];
$photo_link = $input["photo_link"];

if (sql(
    "INSERT INTO foods
    (restaurant_id, name, price, description, photo_link)
    VALUES
    ('$restaurant_id' ,'$name', '$price', '$description', '$photo_link');"
))
    echo "Food added";
else
    echo "Something went wrong. Try again later";
