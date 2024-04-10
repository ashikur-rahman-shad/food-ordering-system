<?php
session_start();
if (isset($_SESSION["customer_id"]) && isset($_SESSION["name"]))
    echo '{ "status": "1" }';
else
echo '{ "status": "0" }';

header('Content-Type: application/json');
