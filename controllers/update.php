<?php

use Core\Database;
use Core\Validator;

$config = require base_path("config.php");

$db = new Database($config['database']);

$validator = new Validator(); 

// Get hidden input value
$id = $_POST["id"];

// Validate name
$name = trim($_POST["name"]);
$validator->name($name);

// Validate address address
$address = trim($_POST["address"]);
$validator->string($address);

// Validate salary
$salary = trim($_POST["salary"]);
$validator->salary($salary);

$errors = $validator->errors;
$name_err = $errors['name'];
$address_err = $errors['address'];
$salary_err = $errors['salary'];

if (! ($name_err=="" && $address_err=="" && $salary_err=="")) {
    return require view('edit.view.php');
}

$query = "UPDATE employees SET name=:name, address=:address, salary=:salary WHERE id=:id";

$db->query($query, [
    'id' => $id,
    'name' => $name,
    'address' => $address,
    'salary' => $salary,
]);

header("location: /");
exit();