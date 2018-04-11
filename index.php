<?php

use alphayax\utils\cli\GetOpt;

require_once 'vendor/autoload.php';

$args = GetOpt::getInstance();
$args->setDescription('This a test of get option for php.');


$option['test'] = $args->addOpt('t', 'test', 'This a test option', true, true);
$args->parse();

if($option['test']->isPresent()) {
    echo 'test';
    echo $option['test']->getValue().PHP_EOL;
}

