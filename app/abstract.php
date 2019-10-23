<?php

    require_once 'interface.php';

    abstract class Connections implements Drivers
    {
        public function setDriver($driver)
        {
            return $driver;
        }
    }