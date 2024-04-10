<?php

require_once "db1.php";

$user = post(["email", "password"]);

$email = $user['email'];
$password = $user['password'];

$result =
    sql_fetch_row("SELECT * FROM restaurants WHERE email='$email' AND password='$password';");



if ($result) {
    echo $result["name"] . " is logged in";
    $_SESSION["restaurants_id"] = $result["id"];
    $_SESSION["name"] = $result["name"];
} else {

    echo "Incorrect ID/Pass";
    session_destroy();
}
