<?php


namespace Paracall\Console\Config;


class AppConfiguration {

    public $namespace;

    function __construct($namespace)
    {
        $this->namespace = $namespace;
    }


}