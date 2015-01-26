<?php

require __DIR__ . '/../vendor/autoload.php';

$o = new Psr4\Sample();
var_dump($o->func());