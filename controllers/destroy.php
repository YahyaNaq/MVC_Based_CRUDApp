<?php

use Core\Database;

$config = require base_path("config.php");

$db = new Database($config['database']);
    
$query = "DELETE FROM employees WHERE id = :id";

$db->query($query, [
    'id' => $_POST['id']
]);

header("location: /");
exit();