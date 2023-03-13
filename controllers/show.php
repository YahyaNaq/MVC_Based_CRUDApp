<?php

use Core\Database;

$config = require base_path("config.php");

$db = new Database($config['database']);

$query = "SELECT * FROM employees WHERE id = :id";

$employee = $db->query($query, [
    'id' => trim($_GET["id"])
])->find();

if (empty($employee)) {
    abort();
} 

$name = $employee["name"];
$address = $employee["address"];
$salary = $employee["salary"];

require view("show.view.php");