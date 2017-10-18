<?php

require 'vendor/autoload.php';

$app = new \atk4\ui\App('Вы нажали на кнопку:');
$app->initLayout('Centered');

$number = $_GET['number'];

$button1 = $app->layout->add(['Button', $number]);
$button1->link(['index']);
