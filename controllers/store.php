<?php

use Core\Database;
use Core\Validator;

$config = require base_path("config.php");

$db = new Database($config['database']);

$validator = new Validator(); 
 
// Validate name
$name = trim($_POST["name"]);
$validator->name($name);

// Validate address
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
    return require view('create.view.php');
}

$query = "INSERT INTO employees (name, address, salary) VALUES (:name, :address, :salary)";

$db->query($query, [
    'name' => $name,
    'address' => $address,
    'salary' => $salary,
]);

header("location: /");
exit();