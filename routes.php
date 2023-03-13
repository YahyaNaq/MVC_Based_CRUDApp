<?php

$router->get('/','controllers\index.php');

$router->get('/show','controllers\show.php');

$router->get('/create','controllers\create.php');
$router->post('/','controllers\store.php');

$router->get('/edit','controllers\edit.php');
$router->patch('/','controllers\update.php');

$router->get('/delete','controllers\delete.php');
$router->delete('/','controllers\destroy.php');
