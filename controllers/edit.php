<?php

use Core\Database;

$config = require base_path("config.php");

$db = new Database($config['database']);

// Get URL parameter
$id =  trim($_GET["id"]);

// Prepare a select statement
$query = "SELECT * FROM employees WHERE id = :id";

$employee=$db->query($query, [
    'id' => $id
])->find();

require view('edit.view.php');