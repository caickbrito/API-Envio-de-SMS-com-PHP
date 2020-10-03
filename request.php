<?php 
require __DIR__ . '/vendor/autoload.php';

use Source\RequestApi;

$sendSMS = new RequestApi();

$name = filter_var($_POST['name'], FILTER_SANITIZE_STRIPPED);
$numberOrigin = filter_var($_POST['phoneremetente'], FILTER_SANITIZE_STRIPPED);
$numberDestino = filter_var($_POST['phonedestino'], FILTER_SANITIZE_STRIPPED);
$message = filter_var($_POST['msg'], FILTER_SANITIZE_STRIPPED);



$sendSMS->query($numberOrigin, $numberDestino, $message);
$sendSMS->send();











