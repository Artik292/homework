<?php

require 'vendor/autoload.php';

$app = new \atk4\ui\App('Нажмите на любую кнопку!');
$app->initLayout('Centered');

If (isset($_GET['max'])) {
  $max = $_GET['max'];
  $min = $_GET['min'];
} else {
  $max = 100;
  $min = 0;
}

$med = round(($max+$min)/2);

$label = $app->layout->add(['Label','Ваше число больше '.$med.' ?']);
$label->addClass('massive orange');

$button_yes = $app->layout->add(['Button','Да']);
$button_yes->addClass('massive green');
$button_yes->link(['index','max'=>$max,'min'=>$med]);

$button_no = $app->layout->add(['Button','Нет']);
$button_no->addClass('massive red');
$button_no->link(['index','max'=>$med,'min'=>$min]);

$button_win = $app->layout->add(['Button','Это моё число!']);
$button_win->addClass('massive violet');
$button_win->link(['win','number'=>$med]);

$button_win = $app->layout->add(['Button','Сыграть ещё раз']);
$button_win->addClass('small brown');
$button_win->link(['index']);
