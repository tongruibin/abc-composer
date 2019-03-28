<?php

require 'vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('name');

$dt = new DateTime();
$dt_fmt = $dt->format('YmdHisu');

$log->pushHandler(new StreamHandler(sprintf('cache/%s.log', $dt_fmt), Logger::WARNING));

// add records to the log
$log->warning('Foo');
$log->error('Bar');
