<?php

require_once "db1.php";

$user = post(["email", "password", "name", "date_of_birth", "address", "phone"]);

$email = $user['email'];
$password = $user['password'];
$name = $user['name'];
$date_of_birth = $user['date_of_birth'];
$address = $user['address'];
$phone = $user['phone'];

$result = sql_fetch_row("SELECT * FROM customers WHERE email='$email';");

if ($result) {
    echo $result["email"] . " is already registered";
} else {
    $result = sql(
        "INSERT INTO customers
        (`email`, `password`, `name`, date_of_birth, `address`, `phone`)
        VALUES
        ('$email', '$password', '$name', '$date_of_birth', '$address', '$phone');"
    );

    if ($result)
        echo "Registration Success";
    else
        echo "Registration Failed. Try again letter";
}
