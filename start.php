<?php

require 'vendor/autoload.php';

use App\Consumer;
use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv();
$dotenv->load(__DIR__.'/.env');

$consumer = new Consumer();

/**
 * @todo change [YOUR_QUEUE]
 */
$consumer->init('YOUR_QUEUE');
