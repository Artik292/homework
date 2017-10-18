<?php

require 'vendor/autoload.php';

$app = new \atk4\ui\App('Нажмите на любую кнопку!');
$app->initLayout('Centered');

$button1 = $app->layout->add(['Button', '1']);
$button1->link(['main','number'=>1]);

$button2 = $app->layout->add(['Button', '2']);
$button2->link(['main','number'=>2]);

$button3 = $app->layout->add(['Button', '3']);
$button3->link(['main','number'=>3]);
