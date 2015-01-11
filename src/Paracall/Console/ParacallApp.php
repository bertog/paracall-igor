<?php


namespace Paracall\Console;


use Paracall\Console\Config\TheConfigurator;
use Symfony\Component\Console\Application;

class ParacallApp extends Application  {

    public $baseDir;

    public $namespace;

    public function __construct($name, $version)
    {
        parent::__construct($name, $version);
    }

    public function setBaseDir($directory)
    {
       $this->baseDir = $directory;
    }

    public function getAppNamespace()
    {
        $config = new TheConfigurator($this->baseDir);

        return $config->AppConfig()->namespace;
    }
}