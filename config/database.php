<?php

require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;

abstract class Database{
    protected $database;

    public function __construct()
    {
        $this->connect();
    }

    private function connect()
    {
        $factory = (new Factory())
            ->withServiceAccount($_ENV['PATH_MYSPACE_JSON'])
            ->withDatabaseUri('https://myspace-5a8f6-default-rtdb.europe-west1.firebasedatabase.app');

        $this->database = $factory->createDatabase();
    }
}
