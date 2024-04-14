<?php

require_once "db1.php";

$user = postJSON(["email", "password", "name", "date_of_birth", "address", "phone"]);

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

    if ($result) {
        echo json_encode(['state' => '1']);
        $_SESSION["customer_id"] = $result["id"];
        $_SESSION["name"] = $result["name"];
    } else {
        echo json_encode(['state' => '0']);
        session_destroy();
    }
}

header('Content-Type: application/json');