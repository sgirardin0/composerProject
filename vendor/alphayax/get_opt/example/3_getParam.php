#!/usr/bin/env php
<?php

use alphayax\utils\cli\GetOpt;

require_once '../vendor/autoload.php';

$Opt = GetOpt::getInstance();
$Opt->setDescription('This script is a tiny example to show library features');
$fileOption = $Opt->addOpt('f', 'file', 'File name', true);

$Opt->parse();


// Check if file option is specified (via -f or --file)
if( $fileOption->isPresent()){
    // Get the associated value
    $fileName = $fileOption->getValue();
    echo "File option provided ! Value : $fileName". PHP_EOL;
} else {
    echo 'File option has not been provided'. PHP_EOL;
}


