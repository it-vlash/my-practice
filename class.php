<?php

require_once 'app/abstract.php';

class Database extends Connections {

    const USER = 'root';
    const HOST = 'localhost';
    const PASSWORD = '';

    public function setConnection($connection)
    {
        $dsn = $connection . ':dbname=test;host=' . self::HOST;
        $connection = new PDO($dsn, self::USER, self::PASSWORD);

        var_dump($connection); die;
        return $connection;
    }

    public function setDriver($driver)
    {
        $driver = parent::setDriver($driver);

       $this->setConnection($driver);
    }

    public function driver()
    {

    }

}