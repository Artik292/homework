<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App('Эксперементы');
$app->initLayout('Centered');
$app->add(['Label','You use '.$_SERVER['REMOTE_PORT'].' port.','big']);
$app->add(['Label','Your IP is '.$_SERVER['REMOTE_ADDR'].'.','big']);
