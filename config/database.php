<?php

/**
 * Php file to get databse instance
 */

require '../vendor/autoload.php';

use kreait\Firebase\Factory;

$factory = (new Factory)
    ->withServiceAccount($_ENV['PATH_MYSPACE_JSON'])
    ->withDatabaseUri('https://myspace-5a8f6-default-rtdb.europe-west1.firebasedatabase.app');

$database = $factory->createDatabase();
