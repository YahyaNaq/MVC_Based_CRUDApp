<?php

use Core\Database;

$config = require base_path("config.php");

$db = new Database($config['database']);

$query = "SELECT * FROM employees";

$employees = $db->query($query)->findAll();

require view("index.view.php");