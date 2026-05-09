<?php

namespace App\Controller;
class ServiceController
{
    private $pages;
    public function __construct($db = null)
    {
        $appConf = require dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . 'Config' . DIRECTORY_SEPARATOR . 'appConfig.php';
        $this->pages = $appConf['Pages'];
    }
    public function servicePresentation()
    {
        $content= 'Hi, I\'m the service page: what do you need?';
        require $this->pages.'content.php';
    }

}
