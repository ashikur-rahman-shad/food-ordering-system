<?php

require_once "db1.php";

$user = post(["email", "password", "name", "address"]);

$email = $user['email'];
$password = $user['password'];
$name = $user['name'];
$address = $user['address'];

$result = sql_fetch_row("SELECT * FROM restaurants WHERE email='$email';");

if ($result) {
    echo $result["email"] . " is already registered";
} else {
    $result = sql("INSERT INTO restaurants
        (`email`, `password`, `name`, `address`)
        VALUES
        ('$email', '$password', '$name', '$address');"
    );

    if ($result)
        echo "Registration Success";
    else
        echo "Registration Failed. Try again letter";
}
