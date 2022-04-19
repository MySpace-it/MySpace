<?php

/**
 * Php file to get databse instance
 */

use kreait\Firebase\Factory;

$factory = (new Factory)
    ->withServiceAccount($_ENV['PATH_MYSPACE_JSON']);

$database = $factory->createDatabase();
